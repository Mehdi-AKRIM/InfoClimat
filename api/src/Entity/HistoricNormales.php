<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiFilter;

/**
 * HistoricNormales
 *
 * @ORM\Table(name="historic_normales")
 * @ORM\Entity
 * @ApiResource(
 *  attributes={
 *      "pagination_enabled"=true,
 *      "pagination_items_per_page"=20,
 *      "order": {"tn":"desc"}
 *  },
 *     collectionOperations={
 *          "get"={}
 *     },
 *     itemOperations={
 *          "get"={}
 *     },
 * )
 * @ApiFilter(SearchFilter::class)
 * @ApiFilter(OrderFilter::class, properties={"tn"})
 */
class HistoricNormales
{
    /**
     * @var int
     *
     * @ORM\Column(name="geoid", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $geoid;

    /**
     * @var int
     *
     * @ORM\Column(name="mois", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var float
     *
     * @ORM\Column(name="tx", type="float", precision=10, scale=0, nullable=false)
     */
    private $tx;

    /**
     * @var float
     *
     * @ORM\Column(name="tn", type="float", precision=10, scale=0, nullable=false)
     */
    private $tn;

    /**
     * @var float
     *
     * @ORM\Column(name="precip", type="float", precision=10, scale=0, nullable=false)
     */
    private $precip;

    /**
     * @var float
     *
     * @ORM\Column(name="altitude_ref", type="float", precision=10, scale=0, nullable=false)
     */
    private $altitudeRef;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ref", type="string", length=100, nullable=false)
     */
    private $nomRef;

    /**
     * @var string
     *
     * @ORM\Column(name="dept_ref", type="string", length=3, nullable=false)
     */
    private $deptRef;

    /**
     * @var float
     *
     * @ORM\Column(name="distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="wmo_ref", type="string", length=50, nullable=false)
     */
    private $wmoRef;

    public function getGeoid(): ?string
    {
        return $this->geoid;
    }

    public function getMois(): ?int
    {
        return $this->mois;
    }

    public function getTx(): ?float
    {
        return $this->tx;
    }

    public function setTx(float $tx): self
    {
        $this->tx = $tx;

        return $this;
    }

    public function getTn(): ?float
    {
        return $this->tn;
    }

    public function setTn(float $tn): self
    {
        $this->tn = $tn;

        return $this;
    }

    public function getPrecip(): ?float
    {
        return $this->precip;
    }

    public function setPrecip(float $precip): self
    {
        $this->precip = $precip;

        return $this;
    }

    public function getAltitudeRef(): ?float
    {
        return $this->altitudeRef;
    }

    public function setAltitudeRef(float $altitudeRef): self
    {
        $this->altitudeRef = $altitudeRef;

        return $this;
    }

    public function getNomRef(): ?string
    {
        return $this->nomRef;
    }

    public function setNomRef(string $nomRef): self
    {
        $this->nomRef = $nomRef;

        return $this;
    }

    public function getDeptRef(): ?string
    {
        return $this->deptRef;
    }

    public function setDeptRef(string $deptRef): self
    {
        $this->deptRef = $deptRef;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getWmoRef(): ?string
    {
        return $this->wmoRef;
    }

    public function setWmoRef(string $wmoRef): self
    {
        $this->wmoRef = $wmoRef;

        return $this;
    }


}
