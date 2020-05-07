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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Incidencia
     */
    public function setTitulo(string $titulo): Incidencia
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Incidencia
     */
    public function setDescripcion(string $descripcion): Incidencia
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAbierta(): bool
    {
        return $this->abierta;
    }

    /**
     * @param bool $abierta
     * @return Incidencia
     */
    public function setAbierta(bool $abierta): Incidencia
    {
        $this->abierta = $abierta;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFechaApertura(): \DateTime
    {
        return $this->fechaApertura;
    }

    /**
     * @param \DateTime $fechaApertura
     * @return Incidencia
     */
    public function setFechaApertura(\DateTime $fechaApertura): Incidencia
    {
        $this->fechaApertura = $fechaApertura;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFechaCierre(): \DateTime
    {
        return $this->fechaCierre;
    }

    /**
     * @param \DateTime|null $fechaCierre
     * @return Incidencia
     */
    public function setFechaCierre(\DateTime $fechaCierre = null): Incidencia
    {
        $this->fechaCierre = $fechaCierre;
        return $this;
    }
}
