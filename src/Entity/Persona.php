<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="persona")
 */
class Persona
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
    private $nombre;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $apellidos;

    /**
     * @ORM\OneToMany(targetEntity="Incidencia", mappedBy="abiertaPor")
     * @var Incidencia[]|Collection
     */
    private $incidencias;

    /**
     * @ORM\OneToMany(targetEntity="Categoria", mappedBy="gestor")
     * @var Categoria[]|Collection
     */
    private $responsabilidades;

    public function __construct()
    {
        $this->incidencias = new ArrayCollection();
        $this->responsabilidades = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): Persona
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return Incidencia[]|Collection
     */
    public function getIncidencias()
    {
        return $this->incidencias;
    }

    /**
     * @param Incidencia[]|Collection $incidencias
     * @return Persona
     */
    public function setIncidencias($incidencias)
    {
        $this->incidencias = $incidencias;
        return $this;
    }

    /**
     * @return Categoria[]|ArrayCollection|Collection
     */
    public function getResponsabilidades()
    {
        return $this->responsabilidades;
    }

    /**
     * @param Categoria[]|ArrayCollection|Collection $responsabilidades
     */
    public function setResponsabilidades($responsabilidades) : Persona
    {
        $this->responsabilidades = $responsabilidades;
        return $this;
    }
}