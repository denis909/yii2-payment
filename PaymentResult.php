<?php

namespace denis909\yii;

use yii\helpers\ArrayHelper;

abstract class PaymentResult extends \yii\base\Component implements PaymentResultInterface
{

    protected $_response;

    public abstract function isSuccess() : bool;

    public abstract function getRedirectUrl() : ?string;

    public abstract function getErrorMessage() : ?string;

    public abstract function getTransactionId();

    public abstract function getOrderId();

    public abstract function getAmount();

    public abstract function getCurrency();

    public function getResponse() : array
    {
        if ($this->_response === null)
        {
            throw new PaymentException('Response not defined.');
        }

        if (!$this->_response)
        {
            throw new PaymentException('Response empty.');
        }

        return $this->_response;
    }

    public function setResponse(array $response) : PaymentResultInterface
    {
        $this->_response = $response;

        return $this;
    }

    public function isRedirect() : bool
    {
        return $this->getRedirectUrl() ? true : false;
    }

    public function isError() : bool
    {
        return $this->getErrorMessage() ? true : false;
    }

    public function isContent() : bool
    {
        return $this->getContent() ? true : false;
    }

}