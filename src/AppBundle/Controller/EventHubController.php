<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Classe EventHubController
 *
 * Projet : symfony_bundles
 * Fichier créé par meven.cadare le 28/07/2015 à 11:24
 *
 * @copyright Copyright symfony_bundles © 2015, All Rights Reserved
 * @author    Meven
 * @package AppBundle\Controller
 */
class EventHubController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        return $this->render('AppBundle:event_hub:index.html.twig');
    }
}
