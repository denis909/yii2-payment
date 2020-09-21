<?php

namespace denis909\yii;

interface WithdrawServiceInterface extends PaymentServiceInterface
{

    public function withdraw(array $params) : WithdrawEventInterface;

}