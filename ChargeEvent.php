<?php

namespace denis909\yii;

abstract class ChargeEvent extends BasePaymentEvent
{

    abstract public function getIsNotEnoughFunds() : bool;

}