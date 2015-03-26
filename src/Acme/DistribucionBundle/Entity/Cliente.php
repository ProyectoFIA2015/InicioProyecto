<?php

namespace Acme\DistribucionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="Cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_encargo", type="string", length=50, nullable=false)
     */
    private $nombreEncargo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_empresa", type="string", length=50, nullable=false)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=15, nullable=false)
     */
    private $dui;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreEncargo
     *
     * @param string $nombreEncargo
     * @return Cliente
     */
    public function setNombreEncargo($nombreEncargo)
    {
        $this->nombreEncargo = $nombreEncargo;
    
        return $this;
    }

    /**
     * Get nombreEncargo
     *
     * @return string 
     */
    public function getNombreEncargo()
    {
        return $this->nombreEncargo;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     * @return Cliente
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    
        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string 
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set dui
     *
     * @param string $dui
     * @return Cliente
     */
    //esta funcion retorna un return
    public function setDui($dui)
    {
        $this->dui = $dui;
    
        return $this;
    }

    /**
     * Get dui
     *
     * @return string 
     */
    public function getDui()
    {
        return $this->dui;
    }
}