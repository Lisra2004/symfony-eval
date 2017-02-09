<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AppController
 * @package AppBundle\Controller
 */
class AppController extends Controller
{
    /**
     * Home page action.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction()
    {
        $publications = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Publication')
            ->findBy([], ['publishedAt' => 'DESC'], 3);
        return $this->render('AppBundle:App:home.html.twig', [
            'publication_list' => $publications,
        ]);
    }
}
