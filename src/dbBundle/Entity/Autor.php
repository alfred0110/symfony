<?php
namespace dbBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Autor
{
  /**
  * @Assert\NotBlank()
  */
  public $name;

  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }
}

?>
