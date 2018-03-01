
//Error: Expected argument of type "string", "Formularios\TareasBundle\Form\Type\CategoryType" given
  <?php  $builder->add('category', new CategoryType());
//Solucion: El código no aplica para la version 3 de symfony.
  <?php  $builder->add('category', CategoryType::class);
