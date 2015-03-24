<?php

namespace Acme\DistribucionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instalacion
 *
 * @ORM\Table(name="Instalacion")
 * @ORM\Entity
 */
class Instalacion
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
     * @ORM\Column(name="codigo", type="string", length=50, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="text", nullable=false)
     */
    private $ubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_secciones", type="integer", nullable=false)
     */
    private $cantidadSecciones;



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
     * Set codigo
     *
     * @param string $codigo
     * @return Instalacion
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
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Instalacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set cantidadSecciones
     *
     * @param integer $cantidadSecciones
     * @return Instalacion
     */
    public function setCantidadSecciones($cantidadSecciones)
    {
        $this->cantidadSecciones = $cantidadSecciones;
    
        return $this;
    }

    /**
     * Get cantidadSecciones
     *
     * @return integer 
     */
    public function getCantidadSecciones()
    {
        return $this->cantidadSecciones;
    }
}