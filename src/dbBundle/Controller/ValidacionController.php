<?php
namespace dbBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use dbBundle\Entity\Autor;

/**
 * @Route("/validate")
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
        //return new Response (print_r($errors,true));
        return $this-> render('@db/Autor/validate.html.twig', array('errors' => $errors , ));

      }else{
        return new Response('The autor is valid');
      }
    }

    /**
     * @Route("/new")
     */
    public function new(Request $request)
    {
        $autor = new Autor();
        $autor->setName("Alf");

        $form = $this->createFormBuilder($autor)
          ->add('name')
          ->add('gender',ChoiceType::class, array(
            'required' => true))
          ->getForm();

        if($request->getMethod() == 'POST'){
          $form->handleRequest($request);

          if($form->isvalid())
          {
            return new Response('THE FORM IS VALID');
          }
          else {
            return new Response('The form is not valid');
          }
        }
          return $this->render('@db/Autor/new.html.twig', array(
            'formulario_autor' => $form->createView(),
          ));
    }
}
 ?>
