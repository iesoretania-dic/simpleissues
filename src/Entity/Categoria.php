<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoria")
 */
class Categoria
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
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $visible;

    /**
     * @ORM\ManyToMany(targetEntity="Incidencia", mappedBy="categorias")
     * @var Incidencia[]|Collection
     */
    private $incidencias;

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="responsabilidades")
     * @ORM\JoinColumn(nullable=false)
     * @var Persona
     */
    private $gestor;

    public function __construct()
    {
        $this->incidencias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): Categoria
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): Categoria
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * @return Incidencia[]|ArrayCollection|Collection
     */
    public function getIncidencias()
    {
        return $this->incidencias;
    }

    /**
     * @param Incidencia[]|ArrayCollection|Collection $incidencias
     */
    public function setIncidencias($incidencias) : Categoria
    {
        $this->incidencias = $incidencias;
        return $this;
    }

    public function getGestor(): ?Persona
    {
        return $this->gestor;
    }

    public function setGestor(Persona $gestor): Categoria
    {
        $this->gestor = $gestor;
        return $this;
    }
}