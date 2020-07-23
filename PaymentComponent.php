<?php

namespace denis909\yii;

class PaymentComponent extends \yii\base\Component
{

    const EVENT_PAYMENT_RECEIVED = 'paymentReceived';

    const EVENT_PAYMENT_INFO = 'paymentInfo';

    public function paymentReceived(PaymentReceivedEvent $event)
    {
        return $this->trigger(static::EVENT_PAYMENT_RECEIVED, $event);
    }

    public function onPaymentReceived($callback)
    {
        $this->on(static::EVENT_PAYMENT_RECEIVED, $callback);
    }

    public function paymentInfo(PaymentInfoEvent $event)
    {
        return $this->trigger(static::EVENT_PAYMENT_INFO, $event);
    }

    public function onPaymentInfo($callback)
    {
        $this->on(static::EVENT_PAYMENT_INFO, $callback);
    }


}