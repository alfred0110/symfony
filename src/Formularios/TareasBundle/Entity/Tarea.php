<?php

namespace Formularios\TareasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea")
 * @ORM\Entity
 */
class Tarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTarea", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtarea;

    /**
     * @var string
     *
     * @ORM\Column(name="tarea", type="string", length=50, nullable=true)
     */
    private $tarea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaVencimiento", type="datetime", nullable=true)
     */
    private $fechavencimiento;

    /**
     * Get idtarea
     *
     * @return integer
     */
    public function getIdtarea()
    {
        return $this->idtarea;
    }

    /**
     * Set tarea
     *
     * @param string $tarea
     *
     * @return Tarea
     */
    public function setTarea($tarea)
    {
        $this->tarea = $tarea;

        return $this;
    }

    /**
     * Get tarea
     *
     * @return string
     */
    public function getTarea()
    {
        return $this->tarea;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Tarea
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }
}
