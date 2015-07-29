<?php

namespace AppBundle\Controller;

use AppBundle\Event\OrderEvent;
use AppBundle\Event\OrderEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request) {

        $status = $request->request->get('status');

        $dispatcher = $this->container->get('event_dispatcher');
        $event      = new OrderEvent($status);
        $dispatcher->dispatch(OrderEvents::CREATE, $event);

        return $this->redirectToRoute("event_hub.index");
    }
}
