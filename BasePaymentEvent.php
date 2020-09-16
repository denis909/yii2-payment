<?php

namespace denis909\yii;

abstract class BasePaymentEvent extends \yii\base\Event
{

    protected $_response;    

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

}