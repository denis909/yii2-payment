<?php

namespace denis909\yii;

abstract class PayoutResultBase extends \yii\base\Component implements PayoutResultInterface
{

    protected $_resonse = [];

    public function setResponse(array $response)
    {
        $this->_response = $response;
    }

    public function getResponse() : array
    {
        return $this->response;
    }

    abstract function getIsSuccess() : bool;

    abstract function getError();

    abstract function getRedirectUrl();

    abstract function getPaymentId();

}