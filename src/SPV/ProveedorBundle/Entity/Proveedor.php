<?php

namespace SPV\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SPV\ProductoBundle\Util\Util;

/**
 * Proveedor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SPV\ProveedorBundle\Entity\ProveedorRepository")
 */
class Proveedor
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
     * @ORM\Column(name="rfc", type="string", length=50)
     */
    protected $rfc;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="SPV\ProveedorBundle\Entity\TipoProveedor")
     */
    protected $tipo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="SPV\DireccionBundle\Entity\Direccion")
     */
    protected $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    protected $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    protected $status;


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
     * @return Proveedor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug=Util::getSlug($nombre);

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
     * Set rfc
     *
     * @param string $rfc
     * @return Proveedor
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set tipo
     *
     * @param \SPV\ProveedorBundle\Entity\TipoProveedor|string $tipo
     * @return Proveedor
     */
    public function setTipo(\SPV\ProveedorBundle\Entity\TipoProveedor $tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set direccion
     *
     * @param \SPV\DireccionBundle\Entity\Direccion|string $direccion
     * @return Proveedor
     */
    public function setDireccion(\SPV\DireccionBundle\Entity\Direccion $direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Proveedor
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Proveedor
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function __toString()
    {
        return $this->getNombre();
    }


}
