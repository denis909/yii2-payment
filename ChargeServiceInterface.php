<?php

namespace denis909\yii;

interface ChargeServiceInterface extends PaymentServiceInterface
{

    public function charge(array $params) : ChargeEventInterface;

}