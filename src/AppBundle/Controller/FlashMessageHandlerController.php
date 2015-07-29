<?php

namespace AppBundle\Controller;

use MCadare\FlashMessageHandler\Constant\Events;
use MCadare\Symfony\FlashMessageHandlerBundle\Event\FlashMessageSymfonyEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FlashMessageHandlerController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        return $this->render('AppBundle:flash_message_handler:index.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function flashAction(Request $request) {

        $code = $request->request->get('code');

        if ($code !== null) {
            $dispatcher = $this->container->get('event_dispatcher');

            $flashMessageEvent = new FlashMessageSymfonyEvent(
                $code,
                'info',
                ['<status>' => "lolilol"]
            );

            $dispatcher->dispatch(Events::FLASH_MESSAGE, $flashMessageEvent);

        }

        return $this->redirectToRoute("flash_message_handler.index");

    }
}
