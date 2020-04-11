<?php

namespace App\Repositories\Eloquent;

use App\Models\Subscription;
use App\Models\Plan;
use App\Repositories\SubscriptionRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class DBSubscriptionRepository extends DBRepository implements SubscriptionRepository
{
  public function __construct(Subscription $model)
  {
    parent::__construct($model);
  }

  public function getUserSubscription($user_id)
  {
    $subscription = Subscription::where('user_id', $user_id)->first();
    return $subscription;
  }

  public function updateUserSubscription($user_id, $new_plan_id, $braintree_subscription_id)
  {
    $subscription = Subscription::where('user_id', $user_id)->first();
    $new_plan = Plan::find($new_plan_id);
    if ($subscription) {
      $subscription->plan_id = $new_plan_id;
      $subscription->impression = $new_plan->impressions;
      $subscription->save();
    } else {
      $subscription = Subscription::create([
        'user_id' => $user_id,
        'plan_id' => $new_plan_id,
        'braintree_subscription_id' => $braintree_subscription_id,
        'impression' => $new_plan->impressions
      ]);
    }
    return $subscription;
  }

}
