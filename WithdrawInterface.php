<?php

namespace denis909\yii;

interface WithdrawInterface extends PaymentInterface
{

    public function getIsNotEnoughFunds() : bool;

}