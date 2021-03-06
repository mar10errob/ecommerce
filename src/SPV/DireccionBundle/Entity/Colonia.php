<?php

namespace SPV\DireccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colonia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Colonia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=50)
     */
    protected $codigoPostal;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="SPV\DireccionBundle\Entity\Estado")
     */
    protected $estado;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Colonia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return $this
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set estado
     *
     * @param \SPV\DireccionBundle\Entity\Estado|string $estado
     * @return Colonia
     */
    public function setEstado(\SPV\DireccionBundle\Entity\Estado $estado)
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

    function __toString()
    {
        return $this->getNombre().' CP.'.$this->getCodigoPostal();
    }


}
