<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @var int|null
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string|null
     */
    private $descripcion;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $prioritaria;

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

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="incidencias")
     * @ORM\JoinColumn(nullable=false)
     * @var Persona
     */
    private $abiertaPor;

    /**
     * @ORM\ManyToOne(targetEntity="Persona")
     * @var Persona
     */
    private $cerradaPor;

    /**
     * @ORM\ManyToMany(targetEntity="Categoria", inversedBy="incidencias")
     * @var Categoria[]|Collection
     */
    private $categorias;

    public function __construct()
    {
        $this->categorias = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): Incidencia
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): Incidencia
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function isPrioritaria(): ?bool
    {
        return $this->prioritaria;
    }

    public function setPrioritaria(bool $prioritaria): Incidencia
    {
        $this->prioritaria = $prioritaria;
        return $this;
    }

    public function getFechaApertura(): ?\DateTime
    {
        return $this->fechaApertura;
    }

    public function setFechaApertura(\DateTime $fechaApertura): Incidencia
    {
        $this->fechaApertura = $fechaApertura;
        return $this;
    }

    public function getFechaCierre(): ?\DateTime
    {
        return $this->fechaCierre;
    }

    public function setFechaCierre(?\DateTime $fechaCierre): Incidencia
    {
        $this->fechaCierre = $fechaCierre;
        return $this;
    }

    public function getAbiertaPor(): ?Persona
    {
        return $this->abiertaPor;
    }

    public function setAbiertaPor(Persona $abiertaPor): Incidencia
    {
        $this->abiertaPor = $abiertaPor;
        return $this;
    }

    public function getCerradaPor(): ?Persona
    {
        return $this->cerradaPor;
    }

    public function setCerradaPor(Persona $cerradaPor): Incidencia
    {
        $this->cerradaPor = $cerradaPor;
        return $this;
    }

    /**
     * @return Categoria[]|ArrayCollection|Collection
     */
    public function getCategorias()
    {
        return $this->categorias;
    }

    /**
     * @param Categoria[]|ArrayCollection|Collection $categorias
     */
    public function setCategorias($categorias) : Incidencia
    {
        $this->categorias = $categorias;
        return $this;
    }
}