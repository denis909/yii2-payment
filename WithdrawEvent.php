<?php

namespace denis909\yii;

abstract class WithdrawEvent extends BasePaymentEvent implements WithdrawEventInterface
{

    abstract public function getIsNotEnoughFunds() : bool;

}