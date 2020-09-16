<?php

namespace denis909\yii;

use yii\helpers\ArrayHelper;

class PaymentComponent extends \yii\base\Component
{

    const EVENT_CHARGE = 'charge';

    const EVENT_CHARGE_SERVICE_LIST = 'charge-service-list';
    
    const EVENT_WITHDRAW = 'withdraw';

    const EVENT_WITHDRAW_SERVICE_LIST = 'withdraw-service-list';

    protected $_chargeServiceList;

    protected $_withdrawServiceList;

    public function charge(ChargeEvent $event)
    {
        $this->trigger(static::EVENT_CHARGE, $event);

        if (!$event->handled)
        {
            throw new PaymentException('Event not handled.');
        }
    }

    public function onCharge($callback)
    {
        $this->on(static::EVENT_CHARGE, $callback);
    }

    public function onChargeServiceList($callback)
    {
        $this->on(static::EVENT_CHARGE_SERVICE_LIST, $callback);
    }

    public function chargeServiceList(bool $refresh = false) : array
    {
        if (!$refresh && ($this->_chargeServiceList !== null))
        {
            return $this->_chargeServiceList;
        }

        $event = new ChargeServiceListEvent;

        $this->trigger(static::EVENT_CHARGE_SERVICE_LIST, $event);

        $this->_chargeServiceList = $event->serviceList;

        return $this->_chargeServiceList;
    }

    public function withdraw(WithdrawEvent $event)
    {
        $this->trigger(static::EVENT_WITHDRAW, $event);

        if (!$event->handled)
        {
            throw new PaymentException('Event not handled.');
        }
    }

    public function onWithdrawServiceList($callback)
    {
        $this->on(static::EVENT_WITHDRAW_SERVICE_LIST, $callback);
    }

    public function withdrawServiceList(bool $refresh = false) : array
    {
        if (!$refresh && ($this->_withdrawServiceList !== null))
        {
            return $this->_withdrawServiceList;
        }

        $event = new WithdrawServiceListEvent;

        $this->trigger(static::EVENT_WITHDRAW_SERVICE_LIST, $event);

        $this->_withdrawServiceList = $event->serviceList;

        return $this->_withdrawServiceList;
    }

}