<?php

namespace denis909\yii;

class PaymentComponent extends \yii\base\Component
{

    static EVENT_PAYOUT = 'payout';

    static EVENT_PAYMENT_RECEIVED = 'paymentReceived';

    public function payout(PayoutEvent $event)
    {
        return $this->trigger(static::EVENT_PAYOUT, $event);
    }

    public function onPayout($callback)
    {
        $this->on(static::EVENT_PAYOUT, $callback);
    }

    public function paymentReceived(PaymentReceivedEvent $event)
    {
        return $this->trigger(static::EVENT_PAYMENT_RECEIVED, $event);
    }

    public function onPaymentReceived($callback)
    {
        $this->on(static::EVENT_PAYMENT_RECEIVED, $callback);
    }

}