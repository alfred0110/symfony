<?php

namespace dbBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/guardar")
     */
    public function guardarAction()
    {
        return $this->render('@db/Default/index.html.twig', array( 'nombre' => 'Accion de Guardar' ));
    }

    /**
     * @Route("/leer")
     */
    public function leerAction()
    {
        return $this->render('@db/Default/index.html.twig', array( 'nombre' => 'Leer' ));
    }
}
