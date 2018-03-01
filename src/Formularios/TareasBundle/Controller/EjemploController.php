<?php

namespace Formularios\TareasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Formularios\TareasBundle\Entity\Product;
use Formularios\TareasBundle\Entity\Task;
use Formularios\TareasBundle\Form\Type\ProductType;
use Formularios\TareasBundle\Form\Type\TaskType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/ejemplos")
 */
class EjemploController extends Controller
{
  /**
  * @Route("/")
  */
  public function index(){
      return $this->render('@FormulariosTareas/Ejemplo/index.html.twig');
  }

  /**
  * @Route("/new", name="producto_nuevo")
  */
  public function newProduct(Request $request){
      $product = new Product();
      $form = $this->createForm(ProductType::class, $product);

      if($request->getMethod() == 'POST')
      {
          $form->handleRequest($request);
          if($form ->isValid())
          {
            //Por si no se tiene acceso al objeto Producto original, se puede recuperar desde el form:
            //$product = $form->getData();

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($product);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
              'success',
              'Your product has been addedd'
            );

            //Libera los datos : new Product()
            $form = $this->createForm(ProductType::class, new Product());
            return $this->render('@FormulariosTareas/Ejemplo/task.html.twig', array(
              'f' => $form->createView(),
            ));
          }

          $this->get('session')->getFlashBag()->add(
            'error',
            'Your product has not been addedd'
          );

          //Regresa los datos
          return $this->render('@FormulariosTareas/Ejemplo/task.html.twig', array(
            'f' => $form->createView(),
          ));
      }

      return $this->render('@FormulariosTareas/Ejemplo/new.html.twig', array(
        'formulario' => $form->createView(),
      ));

  }

  /**
    * @Route("/task", name="task_new")
  */
  public function newTask(Request $request) {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        if($request->getMethod() == 'POST')
        {
            $form->handleRequest($request);
            if($form ->isValid())
            {
              //Por si no se tiene acceso al objeto Producto original, se puede recuperar desde el form:
              //$product = $form->getData();

              $em = $this->getDoctrine()->getEntityManager();
              $em->persist($task);
              $em->flush();

              $this->get('session')->getFlashBag()->add(
                'success',
                'Your task has been addedd'
              );

              //Libera los datos : new Product()
              $form = $this->createForm(TaskType::class, new Task());
              return $this->render('@FormulariosTareas/Ejemplo/task.html.twig', array(
                'formulario' => $form->createView(),
              ));
            }

            $this->get('session')->getFlashBag()->add(
              'error',
              'Your product has not been addedd'
            );

            //Regresa los datos
            return $this->render('@FormulariosTareas/Ejemplo/task.html.twig', array(
              'formulario' => $form->createView(),
            ));
        }

        return $this->render('@FormulariosTareas/Ejemplo/task.html.twig', array(
          'formulario' => $form->createView(),
        ));
      }
}
