<?php

//src/Formularios/TareasBundle/Form/Type/TaskType

namespace Formularios\TareasBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Formularios\TareasBundle\Form\Type\CategoryType;

class TaskType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder->add('tarea');
      $builder->add('fechaVencimiento');
      $builder->add('category', CategoryType::class);
  }

  public function getName( )
  {
      return 'task';
  }

  public function getDefaultOptions(array $options)
  {
      return array( 'data_class' => 'Formulario\TareasBundle\Entity\Task' );
  }

}
