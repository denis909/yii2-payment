<?php

namespace denis909\yii;

abstract class BasePayment extends \yii\base\Component implements PaymentInterface
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

    public function setResponse(array $response)
    {
        $this->_response = $response;
    }

    public function isRedirect() : bool
    {
        return $this->getRedirectUrl() ? true : false;
    }

    public function isError() : bool
    {
        return $this->getErrorMessage() ? true : false;
    }

    public function setValidationErrors(array $errors)
    {
        if (!$this->_response)
        {
            $this->_response = [];
        }

        $this->_response['validationErrors'] = $errors;
    }

}