<?php

namespace denis909\yii;

abstract class Withdraw extends BasePayment implements WithdrawInterface
{

    abstract public function getIsNotEnoughFunds() : bool;

}