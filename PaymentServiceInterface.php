<?php

namespace denis909\yii;

interface PaymentServiceInterface
{

    public function balance(string $currency);

}