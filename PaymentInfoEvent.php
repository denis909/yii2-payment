<?php

namespace denis909\yii;

class PaymentInfoEvent extends \yii\base\Event
{

    public $provider;

    public $currency;

    public $balance;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        Assert::notEmpty($this->provider, 'Provider is empty.');

        Assert::notEmpty($this->currency, 'Currency is empty.');
    }

}