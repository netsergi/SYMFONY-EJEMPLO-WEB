<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ofertas
 *
 * @ORM\Table(name="ofertas")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfertasRepository")
 */
class Ofertas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_oferta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", length=100, nullable=true)
     */
    private $producto;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_ant", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $precioAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="img_path", type="string", length=100, nullable=true)
     */
    private $imgPath;



    /**
     * Get idOferta
     *
     * @return integer
     */
    public function getIdOferta()
    {
        return $this->idOferta;
    }

    /**
     * Set producto
     *
     * @param string $producto
     *
     * @return Ofertas
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Ofertas
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precioAnt
     *
     * @param string $precioAnt
     *
     * @return Ofertas
     */
    public function setPrecioAnt($precioAnt)
    {
        $this->precioAnt = $precioAnt;

        return $this;
    }

    /**
     * Get precioAnt
     *
     * @return string
     */
    public function getPrecioAnt()
    {
        return $this->precioAnt;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Ofertas
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ofertas
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
     * Set imgPath
     *
     * @param string $imgPath
     *
     * @return Ofertas
     */
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;

        return $this;
    }

    /**
     * Get imgPath
     *
     * @return string
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }
}
