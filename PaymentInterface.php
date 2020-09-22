<?php

namespace denis909\yii;

interface PaymentInterface
{

    public function isSuccess() : bool;

    public function getRedirectUrl() : ?string;

    public function getErrorMessage() : ?string;

    public function getTransactionId();

    public function getResponse() : array;

    public function setResponse(array $response);

    public function isRedirect() : bool;

    public function isError() : bool;

    public function setValidationErrors(array $errors);

    public function getOrderId();

    public function getAmount();

    public function getCurrency();

}