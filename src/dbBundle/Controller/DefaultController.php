<?php

namespace dbBundle\Controller;

use dbBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/guardar")
     */
    public function guardarAction()
    {
        $product = new Product();
        $product->setName('A foo Bar');
        $product->setPrice('19.99');
        $product->setDescripcion('Test Foo Bar');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();

        return new Response('Created product id'. $product->getId());
    }

    /**
     * @Route("/leer/{id}")
     */
    public function leerAction($id)
    {
      $product = $this->getDoctrine()
        ->getRepository('dbBundle:Product')
        ->find($id);

      if(!$product){
        throw $this->createNotFoundException('No se encontró el producto con Id: '.$id);
      }
      return $this->render('@db/Default/index.html.twig', array( 'nombre' => 'Leer' ));
    }

    /**
    * @Route("/actualizar/{id}")
    */
    public function ActualizarAction($id){

      $em = $this->getDoctrine()->getEntityManager();
      $product = $em->getRepository('dbBundle:Product')->find($id);

      if(!$product){
        throw $this->createNotFoundException('Producto no encontrado con Id: '.$id);
      }
      $product->setName('New product Name');

      //Enviar cambios
      $em->flush();

      return $this->redirect($this->generateUrl('homepage'));
    }
}
