<?php
// src/Entity/Product.php

namespace dbBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="product")
*/
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
     private $id;

     /**
      * @ORM\Column(type="string",length=100)
      */
      private $name;

      /**
       * @ORM\Column(type="decimal", scale=2, nulleable=true)
       */
       private $price;
}
