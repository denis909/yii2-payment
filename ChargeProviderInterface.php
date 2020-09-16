<?php

namespace denis909\yii;

interface ChargeProviderInterface extends PaymentProviderInterface
{

    public function charge(array $params = []) : ChargeEvent;

}