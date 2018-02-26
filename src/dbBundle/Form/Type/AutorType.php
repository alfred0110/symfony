<?php

namespace dbBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AutorType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('name')
      ->add('gender',ChoiceType::class, array(
          'choices' => array(
              'Hombre' => true,
              'Mujer' => false)))
      ->add('firstName')
      ;
  }
}

?>
