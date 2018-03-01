<?php

//src/Formularios/TareasBundle/Form/Type/CategoryType

namespace Formularios\TareasBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CategoryType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder->add('name');
  }

  public function getName()
  {
      return 'category';
  }

  public function getDefaultOptions(array $options)
  {
      return array( 'data_class' => 'Formulario\TareasBundle\Entity\Category' );
  }
}
