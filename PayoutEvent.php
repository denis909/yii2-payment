<?php

namespace denis909\yii;

class PayoutEvent extends \yii\base\Event
{

    public $provider;

    public $amount;

    public $currency;

    public $account;

    public $orderId;

    public $description;

    protected $_result;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        Assert::notEmpty($this->provider, 'Payout provider is empty.');

        Assert::notEmpty($this->amount, 'Payout amount is empty.');

        Assert::notEmpty($this->currency, 'Payout currency is empty.');

        Assert::notEmpty($this->account, 'Payout account is empty.');
    }

    public function getResult() : PayoutResult
    {
        return $this->_result;
    }

    public function setResult(PayoutResult $result)
    {
        $this->_result = $result;
    }

}