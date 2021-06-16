<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * Stations
 *
 * @ORM\Table(name="stations", uniqueConstraints={@ORM\UniqueConstraint(name="uniqueke", columns={"id"})}, indexes={@ORM\Index(name="pas_de_synop", columns={"pas_de_synop"}), @ORM\Index(name="climato_only", columns={"climato_only"}), @ORM\Index(name="latitude", columns={"latitude"}), @ORM\Index(name="pays", columns={"pays"}), @ORM\Index(name="base_climato", columns={"base_climato"}), @ORM\Index(name="longitude", columns={"longitude"}), @ORM\Index(name="station_reference", columns={"station_reference"}), @ORM\Index(name="libelle", columns={"libelle"}), @ORM\Index(name="departement", columns={"departement"})})
 * @ORM\Entity
 * @ApiResource(
 *  attributes={
 *      "pagination_enabled"=true,
 *      "pagination_items_per_page"=20,
 *      "order": {"departement":"desc"}
 *  },
 *     collectionOperations={
 *          "get"={}
 *     },
 *     itemOperations={
 *          "get"={}
 *     },
 * )
 * @ApiFilter(SearchFilter::class)
 * @ApiFilter(OrderFilter::class, properties={"departement"})
 */
class Stations
{
    /**
     * @var int
     *
     * @ORM\Column(name="uniqueid", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=15, nullable=false, options={"fixed"=true})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=0, nullable=false)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=3, nullable=false, options={"default"="''","fixed"=true})
     */
    private $pays = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="altitude", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $altitude = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="orientation", type="boolean", nullable=false)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="station_reference", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $stationReference;

    /**
     * @var int
     *
     * @ORM\Column(name="pas_de_synop", type="smallint", nullable=false, options={"comment"="si la station est un metar et qu'il n'existe pas de synop, champ à 1"})
     */
    private $pasDeSynop = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="climato_only", type="boolean", nullable=false)
     */
    private $climatoOnly = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dh_min_climato", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dhMinClimato = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dh_min_live", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dhMinLive = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dh_ouverture", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dhOuverture = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="base_climato", type="boolean", nullable=false)
     */
    private $baseClimato = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_report", type="datetime", nullable=false)
     */
    private $lastReport;

    /**
     * @var string
     *
     * @ORM\Column(name="last_data", type="string", length=255, nullable=false)
     */
    private $lastData;

    public function getUniqueid(): ?string
    {
        return $this->uniqueid;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getAltitude(): ?int
    {
        return $this->altitude;
    }

    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getOrientation(): ?bool
    {
        return $this->orientation;
    }

    public function setOrientation(bool $orientation): self
    {
        $this->orientation = $orientation;

        return $this;
    }

    public function getStationReference(): ?string
    {
        return $this->stationReference;
    }

    public function setStationReference(string $stationReference): self
    {
        $this->stationReference = $stationReference;

        return $this;
    }

    public function getPasDeSynop(): ?int
    {
        return $this->pasDeSynop;
    }

    public function setPasDeSynop(int $pasDeSynop): self
    {
        $this->pasDeSynop = $pasDeSynop;

        return $this;
    }

    public function getClimatoOnly(): ?bool
    {
        return $this->climatoOnly;
    }

    public function setClimatoOnly(bool $climatoOnly): self
    {
        $this->climatoOnly = $climatoOnly;

        return $this;
    }

    public function getDhMinClimato(): ?\DateTimeInterface
    {
        return $this->dhMinClimato;
    }

    public function setDhMinClimato(?\DateTimeInterface $dhMinClimato): self
    {
        $this->dhMinClimato = $dhMinClimato;

        return $this;
    }

    public function getDhMinLive(): ?\DateTimeInterface
    {
        return $this->dhMinLive;
    }

    public function setDhMinLive(?\DateTimeInterface $dhMinLive): self
    {
        $this->dhMinLive = $dhMinLive;

        return $this;
    }

    public function getDhOuverture(): ?\DateTimeInterface
    {
        return $this->dhOuverture;
    }

    public function setDhOuverture(?\DateTimeInterface $dhOuverture): self
    {
        $this->dhOuverture = $dhOuverture;

        return $this;
    }

    public function getBaseClimato(): ?bool
    {
        return $this->baseClimato;
    }

    public function setBaseClimato(bool $baseClimato): self
    {
        $this->baseClimato = $baseClimato;

        return $this;
    }

    public function getLastReport(): ?\DateTimeInterface
    {
        return $this->lastReport;
    }

    public function setLastReport(\DateTimeInterface $lastReport): self
    {
        $this->lastReport = $lastReport;

        return $this;
    }

    public function getLastData(): ?string
    {
        return $this->lastData;
    }

    public function setLastData(string $lastData): self
    {
        $this->lastData = $lastData;

        return $this;
    }


}
