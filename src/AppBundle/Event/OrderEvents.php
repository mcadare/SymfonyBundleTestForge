<?php

namespace AppBundle\Event;

/**
 * Classe OrderEvents
 *
 * Projet : symfony_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 14:26
 *
 * @copyright Copyright symfony_bundles © 2015, All Rights Reserved
 * @author    Meven
 */
final class OrderEvents
{
    /**
     * L'évènement order.create est créé à chaque fois qu'une commande est passée sur le site.
     *
     * Le « listener » de l'évènement reçoit une instance de
     * MCadare\Symfony\EventHubBundle\Event\OrderEvent
     *
     * @var string
     */
    const CREATE = 'order.create';
}
