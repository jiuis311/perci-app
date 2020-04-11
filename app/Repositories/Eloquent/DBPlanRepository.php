<?php

namespace App\Repositories\Eloquent;

use App\Models\Plan;
use App\Repositories\PlanRepository;

class DBPlanRepository extends DBRepository implements PlanRepository
{
    public function __construct(Plan $model)
    {
        parent::__construct($model);
    }

    public function getPlanByBraintreePlanId($plan_id) {
        $plan = Plan::where('braintree_plan', $plan_id)->first();
        return $plan;
    }
}
