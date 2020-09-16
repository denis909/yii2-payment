<?php

namespace denis909\yii;

abstract class WithdrawEvent extends BasePaymentEvent
{

    public abstract function isSuccess() : bool;

    public abstract function getRedirectUrl() : ?string;

    public abstract function getErrorMessage() : ?string;

    public function isRedirect() : bool
    {
        return $this->getRedirectUrl() ? true : false;
    }

    public function isError() : bool
    {
        return $this->getErrorMessage() ? true : false;
    }

}