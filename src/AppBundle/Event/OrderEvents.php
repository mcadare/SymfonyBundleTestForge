<?php

namespace AppBundle\Event;

/**
 * Classe OrderEvents
 *
 * Projet : symfony_bundles
 * Fichier cr�� par meven.cadare le 21/07/2015 � 14:26
 *
 * @copyright Copyright symfony_bundles � 2015, All Rights Reserved
 * @author    Meven
 */
final class OrderEvents
{
    /**
     * L'�v�nement order.create est cr�� � chaque fois qu'une commande est pass�e sur le site.
     *
     * Le � listener � de l'�v�nement re�oit une instance de
     * MCadare\Symfony\EventHubBundle\Event\OrderEvent
     *
     * @var string
     */
    const CREATE = 'order.create';
}
