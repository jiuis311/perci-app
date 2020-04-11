<?php

namespace App\Repositories;

interface SubscriptionRepository
{
  public function getUserSubscription($user_id);

  public function updateUserSubscription($user_id, $new_plan_id, $braintree_subscription_id);
}
