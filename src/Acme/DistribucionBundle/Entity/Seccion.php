<?php

namespace Acme\DistribucionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seccion
 *
 * @ORM\Table(name="Seccion")
 * @ORM\Entity
 */
class Seccion
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
     * @ORM\Column(name="cantidad_espacio", type="integer", nullable=false)
     */
    private $cantidadEspacio;

    /**
     * @var \Instalacion
     *
     * @ORM\ManyToOne(targetEntity="Instalacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_instalacion", referencedColumnName="id")
     * })
     */
    private $idInstalacion;



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
     * @return Seccion
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
     * @return Seccion
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
     * Set cantidadEspacio
     *
     * @param integer $cantidadEspacio
     * @return Seccion
     */
    public function setCantidadEspacio($cantidadEspacio)
    {
        $this->cantidadEspacio = $cantidadEspacio;
    
        return $this;
    }

    /**
     * Get cantidadEspacio
     *
     * @return integer 
     */
    public function getCantidadEspacio()
    {
        return $this->cantidadEspacio;
    }

    /**
     * Set idInstalacion
     *
     * @param \Acme\DistribucionBundle\Entity\Instalacion $idInstalacion
     * @return Seccion
     */
    public function setIdInstalacion(\Acme\DistribucionBundle\Entity\Instalacion $idInstalacion = null)
    {
        $this->idInstalacion = $idInstalacion;
    
        return $this;
    }

    /**
     * Get idInstalacion
     *
     * @return \Acme\DistribucionBundle\Entity\Instalacion 
     */
    public function getIdInstalacion()
    {
        return $this->idInstalacion;
    }
}