<?php

namespace AppBundle\Event;

use MCadare\EventHub\Event\EventHubAwareInterface;
use MCadare\EventHub\Event\FlashMessageParametersInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Classe OrderEvent
 *
 * Projet : symfony_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 14:09
 *
 * @copyright Copyright symfony_bundles © 2015, All Rights Reserved
 * @author    Meven
 */
class OrderEvent extends Event implements EventHubAwareInterface, FlashMessageParametersInterface
{
    protected $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getFlashMessageParameters()
    {
        return ['<id>' => "1337"];
    }
}
