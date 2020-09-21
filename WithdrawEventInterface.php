<?php

namespace denis909\yii;

interface WithdrawEventInterface extends PaymentEventInterface
{

    public function getIsNotEnoughFunds() : bool;

}