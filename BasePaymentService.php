<?php

namespace denis909\yii;

abstract class BasePaymentService extends \yii\base\component implements PaymentServiceInterface
{

    abstract public function balance(string $currency);

}