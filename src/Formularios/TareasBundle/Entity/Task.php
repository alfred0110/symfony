<?php


namespace Formularios\TareasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Formularios\TareasBundle\Entity\Category;

/**
 * Task
 *
 * @ORM\Table(name="task", indexes={@ORM\Index(name="fk_task_category_id", columns={"categoryId"})})
 * @ORM\Entity
 */
class Task
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
     * @var integer
     *
     * @ORM\Column(name="categoryId", type="integer", nullable=false)
     */
    private $categoryid;

    /*
    * @Assert\Type(type "Formularios\TareasBundle\Entity\Category")
    */
    protected $category;
    public function getCategory(){
        return $this->category;
    }
    public function setCategory(Category $category = null){
      $this->category = $category;
    }

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
     * @return Task
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
     * @return Task
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

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return Task
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}
