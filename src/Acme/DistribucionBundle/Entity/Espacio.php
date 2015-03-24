<?php

namespace Acme\DistribucionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Espacio
 *
 * @ORM\Table(name="Espacio")
 * @ORM\Entity
 */
class Espacio
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
     * @var float
     *
     * @ORM\Column(name="area", type="float", nullable=false)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoProducto", type="string", length=50, nullable=false)
     */
    private $tipoproducto;

    /**
     * @var float
     *
     * @ORM\Column(name="costoSugerido", type="float", nullable=false)
     */
    private $costosugerido;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=50, nullable=false)
     */
    private $estado;

    /**
     * @var float
     *
     * @ORM\Column(name="costoReal", type="float", nullable=false)
     */
    private $costoreal;

    /**
     * @var \Seccion
     *
     * @ORM\ManyToOne(targetEntity="Seccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_seccion", referencedColumnName="id")
     * })
     */
    private $idSeccion;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */
    private $idCliente;



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
     * Set area
     *
     * @param float $area
     * @return Espacio
     */
    public function setArea($area)
    {
        $this->area = $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Espacio
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Espacio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipoproducto
     *
     * @param string $tipoproducto
     * @return Espacio
     */
    public function setTipoproducto($tipoproducto)
    {
        $this->tipoproducto = $tipoproducto;
    
        return $this;
    }

    /**
     * Get tipoproducto
     *
     * @return string 
     */
    public function getTipoproducto()
    {
        return $this->tipoproducto;
    }

    /**
     * Set costosugerido
     *
     * @param float $costosugerido
     * @return Espacio
     */
    public function setCostosugerido($costosugerido)
    {
        $this->costosugerido = $costosugerido;
    
        return $this;
    }

    /**
     * Get costosugerido
     *
     * @return float 
     */
    public function getCostosugerido()
    {
        return $this->costosugerido;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Espacio
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set costoreal
     *
     * @param float $costoreal
     * @return Espacio
     */
    public function setCostoreal($costoreal)
    {
        $this->costoreal = $costoreal;
    
        return $this;
    }

    /**
     * Get costoreal
     *
     * @return float 
     */
    public function getCostoreal()
    {
        return $this->costoreal;
    }

    /**
     * Set idSeccion
     *
     * @param \Acme\DistribucionBundle\Entity\Seccion $idSeccion
     * @return Espacio
     */
    public function setIdSeccion(\Acme\DistribucionBundle\Entity\Seccion $idSeccion = null)
    {
        $this->idSeccion = $idSeccion;
    
        return $this;
    }

    /**
     * Get idSeccion
     *
     * @return \Acme\DistribucionBundle\Entity\Seccion 
     */
    public function getIdSeccion()
    {
        return $this->idSeccion;
    }

    /**
     * Set idCliente
     *
     * @param \Acme\DistribucionBundle\Entity\Cliente $idCliente
     * @return Espacio
     */
    public function setIdCliente(\Acme\DistribucionBundle\Entity\Cliente $idCliente = null)
    {
        $this->idCliente = $idCliente;
    
        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Acme\DistribucionBundle\Entity\Cliente 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}