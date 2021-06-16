<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * HistoricEvents
 *
 * @ORM\Table(name="historic_events", indexes={@ORM\Index(name="gen_cartes", columns={"gen_cartes"}), @ORM\Index(name="importance", columns={"importance", "type"}), @ORM\Index(name="hits", columns={"hits"}), @ORM\Index(name="recherche", columns={"nom", "description", "short_desc"}), @ORM\Index(name="nom", columns={"nom"})})
 * @ORM\Entity
 * @ApiResource(
 *  attributes={
 *      "pagination_enabled"=true,
 *      "pagination_items_per_page"=20,
 *      "order": {"nom":"desc"}
 *  },
 *     collectionOperations={
 *          "get"={}
 *     },
 *     itemOperations={
 *          "get"={}
 *     },
 * )
 * @ApiFilter(SearchFilter::class)
 * @ApiFilter(OrderFilter::class, properties={"localisation","typeCyclone"})
 */
class HistoricEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255, nullable=false)
     */
    private $localisation;

    /**
     * @var bool
     *
     * @ORM\Column(name="importance", type="boolean", nullable=false)
     */
    private $importance;

    /**
     * @var string
     *
     * @ORM\Column(name="type_cyclone", type="string", length=100, nullable=false)
     */
    private $typeCyclone;

    /**
     * @var bool
     *
     * @ORM\Column(name="has_image_cyclone", type="boolean", nullable=false, options={"comment"="0 ou 1"})
     */
    private $hasImageCyclone = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=false)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="duree", type="boolean", nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="short_desc", type="text", length=65535, nullable=false)
     */
    private $shortDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="sources", type="text", length=65535, nullable=false)
     */
    private $sources;

    /**
     * @var int
     *
     * @ORM\Column(name="id_compte", type="integer", nullable=false)
     */
    private $idCompte;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur_max", type="float", precision=10, scale=0, nullable=false)
     */
    private $valeurMax;

    /**
     * @var int
     *
     * @ORM\Column(name="bs_link", type="integer", nullable=false, options={"comment"="si lien avec un bs"})
     */
    private $bsLink;

    /**
     * @var bool
     *
     * @ORM\Column(name="gen_cartes", type="boolean", nullable=false, options={"comment"="indique s'il faut générer des cartes ou non"})
     */
    private $genCartes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="why", type="text", length=65535, nullable=false)
     */
    private $why;

    /**
     * @var string
     *
     * @ORM\Column(name="tableau_croise", type="text", length=65535, nullable=false)
     */
    private $tableauCroise;

    /**
     * @var string
     *
     * @ORM\Column(name="tableau_croise_cyclone", type="text", length=65535, nullable=false)
     */
    private $tableauCroiseCyclone;

    /**
     * @var int
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getImportance(): ?bool
    {
        return $this->importance;
    }

    public function setImportance(bool $importance): self
    {
        $this->importance = $importance;

        return $this;
    }

    public function getTypeCyclone(): ?string
    {
        return $this->typeCyclone;
    }

    public function setTypeCyclone(string $typeCyclone): self
    {
        $this->typeCyclone = $typeCyclone;

        return $this;
    }

    public function getHasImageCyclone(): ?bool
    {
        return $this->hasImageCyclone;
    }

    public function setHasImageCyclone(bool $hasImageCyclone): self
    {
        $this->hasImageCyclone = $hasImageCyclone;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDuree(): ?bool
    {
        return $this->duree;
    }

    public function setDuree(bool $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(string $shortDesc): self
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    public function getSources(): ?string
    {
        return $this->sources;
    }

    public function setSources(string $sources): self
    {
        $this->sources = $sources;

        return $this;
    }

    public function getIdCompte(): ?int
    {
        return $this->idCompte;
    }

    public function setIdCompte(int $idCompte): self
    {
        $this->idCompte = $idCompte;

        return $this;
    }

    public function getValeurMax(): ?float
    {
        return $this->valeurMax;
    }

    public function setValeurMax(float $valeurMax): self
    {
        $this->valeurMax = $valeurMax;

        return $this;
    }

    public function getBsLink(): ?int
    {
        return $this->bsLink;
    }

    public function setBsLink(int $bsLink): self
    {
        $this->bsLink = $bsLink;

        return $this;
    }

    public function getGenCartes(): ?bool
    {
        return $this->genCartes;
    }

    public function setGenCartes(bool $genCartes): self
    {
        $this->genCartes = $genCartes;

        return $this;
    }

    public function getWhy(): ?string
    {
        return $this->why;
    }

    public function setWhy(string $why): self
    {
        $this->why = $why;

        return $this;
    }

    public function getTableauCroise(): ?string
    {
        return $this->tableauCroise;
    }

    public function setTableauCroise(string $tableauCroise): self
    {
        $this->tableauCroise = $tableauCroise;

        return $this;
    }

    public function getTableauCroiseCyclone(): ?string
    {
        return $this->tableauCroiseCyclone;
    }

    public function setTableauCroiseCyclone(string $tableauCroiseCyclone): self
    {
        $this->tableauCroiseCyclone = $tableauCroiseCyclone;

        return $this;
    }

    public function getHits(): ?int
    {
        return $this->hits;
    }

    public function setHits(int $hits): self
    {
        $this->hits = $hits;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }


}
