<?php
/**
 * src/dbBundle/Entity/Tarea.php
 */

namespace Formularios\TareasBundle\Entity;

class Tarea
{
  protected $tarea;
  protected $fechaVencimiento;

  public function getTarea()
  {
    return $this->tarea;
  }
  public function setTarea($tarea)
  {
    $this->tarea = $tarea;
  }
  public function getFechaVencimiento()
  {
    return $this->fechaVencimiento;
  }
  public function setFechaVencimiento(\DateTime $fechaVencimiento = null)
  {
    $this->fechaVencimiento = $fechaVencimiento;
  }
}

 ?>
