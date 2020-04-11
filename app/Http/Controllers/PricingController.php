<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Repositories\PlanRepository;
use App\Repositories\UserRepository;
use App\Repositories\SubscriptionRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use App\Helper\Helper;
use Exception;
use Braintree\Gateway;

class PricingController extends AdminController
{
    private $plan;
    private $planRepository;
    private $userRepository;
    private $braintreeGateway;
    private $subscriptionRepository;

    public function __construct(Plan $plan, PlanRepository $planRepository, UserRepository $userRepository, SubscriptionRepository $subscriptionRepository)
    {
        $this->initBraintreeGateway();
        $this->plan = $plan;
        $this->planRepository = $planRepository;
        $this->userRepository = $userRepository;
        $this->subscriptionRepository = $subscriptionRepository;
    }

    private function initBraintreeGateway() {
        $this->braintreeGateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);
    }

    public function clientToken() {
        $clientToken = $this->braintreeGateway->clientToken()->generate([
            // "customerId" => $customerId
        ]);
        return $clientToken;
    }

    public function getAllPlans(Request $request) {
        $plans = $this->plan->all();
        return  $this->response(true, '', $plans);
    }

    public function getUserBraintreeId() {
        $userId = Auth::id();
        $braintreeId = $this->userRepository->findById($userId, ['braintree_id']);

        if ($braintreeId->braintree_id == '') {
            $result = $this->braintreeGateway->customer()->create();

            if ($result->success) {
                $this->userRepository->updateColumn($userId, 'braintree_id', $result->customer->id);
                return $this->response(true, '', $result->customer->id);
            } else {
                return $this->response(false, 'Braintree: Create customer failed', '');
            }
        } else {
            return $this->response(true, '', $braintreeId->braintree_id);
        }
    }

    public function getUserSubscription() {
        $user_id = Auth::id();
        $user = $this->userRepository->findById($user_id);
        $subscription = $this->subscriptionRepository->getUserSubscription($user_id);
        return $this->response(true, '', $subscription);
    }

    public function getPaymentMethodToken(Request $request) {
        $user_id = Auth::id();
        $user = $this->userRepository->findById($user_id);
        if ($user->payment_method_token) {
            return $this->response(true, 'Success', $user->payment_method_token);
        } else {
            return $this->response(false, 'No payment method', '');
        }
    }

    public function createPaymentMethod(Request $request, $customerId, $nonce) {
        $user_id = Auth::id();
        $user = $this->userRepository->findById($user_id);

        $result = $this->braintreeGateway->paymentMethod()->create([
            'customerId' => $user->braintree_id,
            'paymentMethodNonce' => $nonce,
        ]);
        // dd($result);
        if ($result->success) {
            $user->payment_method_token = $result->paymentMethod->token;
            $user->save();
            return $this->response(true, '', $result);
        } else {
            return $this->response(false, 'Braintree: Create payment method failed', '');
        }
    }

    public function subscribeToPlan(Request $request, $token, $planId) {
        $user_id = Auth::id();
        $user = $this->userRepository->findById($user_id);
        $subscription = $this->subscriptionRepository->getUserSubscription($user_id);
        $new_plan = $this->planRepository->getPlanByBraintreePlanId($planId);

        if ($user->payment_method_token == null) {
            return $this->response(false, 'No payment method', '');
        }

        try {
            if ($subscription) {
                $cancel_subscription = $this->braintreeGateway->subscription()->cancel($subscription->braintree_subscription_id);
            }
        } catch (Braintree\Exception\NotFound $e) {
            return $this->response(false, $e->getMessage(), '');
        }

        $result = $this->braintreeGateway->subscription()->create([
            'paymentMethodToken' => $user->payment_method_token,
            'planId' => $planId,
        ]);
        if ($result->success) {
            $new_subscription = $this->subscriptionRepository->updateUserSubscription($user_id, $new_plan->id, $result->subscription->id);
            return $this->response(true, '', $result);
        } else {
            return $this->response(false, 'Braintree: Subscription failed', '');
        }
    }

    public function testRoute() {
        $user_id = Auth::id();
        $user = $this->userRepository->findById($user_id);
        $subscription = $this->subscriptionRepository->getUserSubscription($user_id);
        dd($subscription);
    }
}
