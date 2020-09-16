<?php

namespace denis909\yii;

interface PaymentProviderInterface
{

    public function balance(string $currency);

}