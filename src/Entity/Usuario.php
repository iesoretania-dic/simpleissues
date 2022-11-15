<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int|null
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     * @var string|null
     */
    private $nombreUsuario;

    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    private $clave;

    /**
     * @ORM\Column(type="boolean")
     * @var bool|null
     */
    private $administrador;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreUsuario(): ?string
    {
        return $this->nombreUsuario;
    }

    public function setNombreUsuario(string $nombreUsuario): Usuario
    {
        $this->nombreUsuario = $nombreUsuario;
        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(string $clave): Usuario
    {
        $this->clave = $clave;
        return $this;
    }

    public function getAdministrador(): ?bool
    {
        return $this->administrador;
    }

    public function setAdministrador(bool $administrador): Usuario
    {
        $this->administrador = $administrador;
        return $this;
    }
}