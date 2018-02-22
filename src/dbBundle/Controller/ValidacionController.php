<?php
namespace dbBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use dbBundle\Entity\Autor;

/**
 * @Route("/validar")
 */
 class ValidacionController extends Controller
 {
   /**
    * @Route("/")
    */
    public function indexAction()
    {
      $autor = new Autor();
      $autor->setName("");
      
      $validator = $this->get('validator');
      $errors = $validator->validate($autor);

      if(count($errors) > 0){
        return new Response (print_r($errors,true));
      }else{
        return new Response('The autor is valid');
      }
    }
}
 ?>
