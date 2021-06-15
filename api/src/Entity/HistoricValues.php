<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * HistoricValues
 *
 * @ORM\Table(name="historic_values", uniqueConstraints={@ORM\UniqueConstraint(name="doublons", columns={"date", "geoid", "type", "id_historic"})}, indexes={@ORM\Index(name="id_historic", columns={"id_historic", "dept"}), @ORM\Index(name="geoid", columns={"geoid"})})
 * @ORM\Entity
 * @ApiResource
 */
class HistoricValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_historic", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idHistoric;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    private $lieu;

    /**
     * @var int
     *
     * @ORM\Column(name="geoid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $geoid;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=255, nullable=false)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=false)
     */
    private $pays;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur", type="float", precision=10, scale=0, nullable=false)
     */
    private $valeur;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="est_record", type="boolean", nullable=false)
     */
    private $estRecord = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="est_record_dpt", type="boolean", nullable=false)
     */
    private $estRecordDpt = '0';


}
