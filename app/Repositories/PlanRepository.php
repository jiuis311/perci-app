<?php

namespace App\Repositories;

interface PlanRepository
{
    public function getPlanByBraintreePlanId($plan_id);
}
