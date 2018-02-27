<?php

namespace Formularios\TareasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/ejemplos")
 */
class EjemploController extends Controller
{
  /**
  * @Route("/")
  */
  public function index()
  {
    return $this->render('@FormulariosTareas/Ejemplo/index.html.twig');
  }
}
