<?php

//src/Formularios/TareasBundle/Form/Type/ProductType

namespace Formularios\TareasBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder->add('name');
      $builder->add('price');
      $builder->add('descripcion');
  }

  public function getName( )
  {
      return 'product';
  }

  public function getDefaultOptions(array $options)
  {
      return array( 'data_class' => 'Formulario\TareasBundle\Entity\Product' );
  }

}
