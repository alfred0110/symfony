<?php

namespace Formularios\TareasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Formularios\TareasBundle\Entity\Tarea;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;



class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@FormulariosTareas/Default/index.html.twig');
    }
    /**
     * @Route("/new", name="tarea_nueva")
     */
    public function newAction(Request $request)
    {
        //Crea una nueva Tarea
        $tarea = new Tarea();
        $tarea->setTarea("Escribir un blog");
        $tarea->setFechaVencimiento(new \DateTime('Tomorrow'));

        $form = $this->createFormBuilder($tarea)
          ->add('tarea',TextType::class, array(
               'attr'=>array('maxlength' => 4), //Array para establecer propiedades Ej. Validación
          ))
          ->add('fechaVencimiento',DateTimeType::class, array(
              'label' => "Fecha Tarea",
            )) //Array para establecer propiedades ej. Label
          ->getForm();

        return $this->render("@FormulariosTareas/Default/new.html.twig", array(
          'formulario' => $form->createView(),
        ));
    }
}
