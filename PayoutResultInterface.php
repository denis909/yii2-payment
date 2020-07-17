<?php

namespace denis909\yii;

interface PayoutResultInterface
{

    public function getResponse() : array;

    public function setResponse(array $response);

    public function getIsSuccess() : bool;

    public function getRedirectUrl();

    public function getError();

    public function getPaymentId();

}