<?php
namespace dbBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Autor
{
  /**
  * @Assert\NotBlank(
  * message= "Este campo es requerido"
  )
  */
  public $name;

  /**
  * @Assert\Choice(choices={"masculino","femenino"}, message = "Escoge un genero valido.")
  */
  public $gender;

  /**
  * @Assert\NotBlank()
  * @Assert\Length(
  *   min = 3,
  *   max = 10,
  *   minMessage = "Tu primer apellido debe de tener mínimo {{ limit }} carcateres",
  *   maxMessage = "Tu primer apellido debe de tener máximo {{ limit }} characters"
  * )
  */
  private $firstName;


  public function setFirstName($firstName)
  {
      $this->firstName = $firstName;
      return $this;
  }
  public function getFirstName()
  {
      return $this->firstName;
  }

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
