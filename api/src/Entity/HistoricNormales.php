<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * HistoricNormales
 *
 * @ORM\Table(name="historic_normales")
 * @ORM\Entity
 * @ApiResource
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


}
