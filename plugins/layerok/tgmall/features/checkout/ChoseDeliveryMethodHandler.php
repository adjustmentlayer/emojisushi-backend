<?php

namespace Layerok\TgMall\Features\Checkout;
use Layerok\TgMall\Classes\Callbacks\CallbackQueryBus;
use Layerok\TgMall\Classes\Callbacks\Handler;
use Layerok\TgMall\Classes\Traits\Lang;
use Event;

class ChoseDeliveryMethodHandler extends Handler
{
    use Lang;

    protected $name = "chose_delivery_method";


    public function run()
    {
        $id = $this->arguments['id'];
        $this->getState()->setOrderInfoDeliveryMethodId($id);

        if($halt = Event::fire('layerok.tgmall::delivery_method_chosen', [$this, $id])) {
            return;
        };

        CallbackQueryBus::instance()->make('leave_comment', []);


    }
}
