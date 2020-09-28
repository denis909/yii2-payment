<?php

namespace denis909\yii;

interface WithdrawResultInterface extends PaymentResultInterface
{

    public function getIsNotEnoughFunds() : bool;

}