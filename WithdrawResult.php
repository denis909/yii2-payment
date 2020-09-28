<?php

namespace denis909\yii;

abstract class WithdrawResult extends PaymentResult implements WithdrawResultInterface
{

    abstract public function getIsNotEnoughFunds() : bool;

}