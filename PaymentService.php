<?php

namespace denis909\yii;

abstract class PaymentService extends \yii\base\component implements PaymentServiceInterface
{

    abstract public function balance(string $currency);

}