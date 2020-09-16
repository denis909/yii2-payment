<?php

namespace denis909\yii;

interface WithdrawProviderInterface extends PaymentProviderInterface
{

    public function withdraw(array $params = []) : WithdrawEvent;

}