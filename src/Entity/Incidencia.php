<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="incidencia")
 */
class Incidencia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $descripcion;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $abierta;

    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    private $fechaApertura;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @var \DateTime|null
     */
    private $fechaCierre;
}
