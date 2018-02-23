<?php
namespace dbBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Autor
{
  /**
  * @Assert\NotBlank()
  */
  public $name;

  /**
  * @Assert\Choice(choices = { "masculino", "femenino"}, message = "Escoge un genero valido.")
  */
  public $gender;

  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }

  public function setGender($gender)
  {
      $this->gender = $gender;

      return $this;
  }
}

?>
