<?php

namespace denis909\yii;

interface PaymentResultInterface
{

    public function isSuccess() : bool;

    public function getRedirectUrl() : ?string;

    public function getErrorMessage() : ?string;

    public function getTransactionId();

    public function getResponse() : array;

    public function setResponse(array $response) : PaymentResultInterface;

    public function isRedirect() : bool;

    public function isError() : bool;

    public function getOrderId();

    public function getAmount();

    public function getCurrency();

    public function isContent() : bool;

    public function getContent() : ?string;

}