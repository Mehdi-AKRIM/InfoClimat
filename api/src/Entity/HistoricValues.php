<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * HistoricValues
 *
 * @ORM\Table(name="historic_values", uniqueConstraints={@ORM\UniqueConstraint(name="doublons", columns={"date", "geoid", "type", "id_historic"})}, indexes={@ORM\Index(name="id_historic", columns={"id_historic", "dept"}), @ORM\Index(name="geoid", columns={"geoid"})})
 * @ORM\Entity
 * @ApiResource(
 *     collectionOperations={
 *          "get"={}
 *     },
 *     itemOperations={
 *          "get"={}
 *     },
 * )
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdHistoric(): ?int
    {
        return $this->idHistoric;
    }

    public function setIdHistoric(int $idHistoric): self
    {
        $this->idHistoric = $idHistoric;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getGeoid(): ?int
    {
        return $this->geoid;
    }

    public function setGeoid(int $geoid): self
    {
        $this->geoid = $geoid;

        return $this;
    }

    public function getDept(): ?string
    {
        return $this->dept;
    }

    public function setDept(string $dept): self
    {
        $this->dept = $dept;

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

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(float $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getEstRecord(): ?bool
    {
        return $this->estRecord;
    }

    public function setEstRecord(bool $estRecord): self
    {
        $this->estRecord = $estRecord;

        return $this;
    }

    public function getEstRecordDpt(): ?bool
    {
        return $this->estRecordDpt;
    }

    public function setEstRecordDpt(bool $estRecordDpt): self
    {
        $this->estRecordDpt = $estRecordDpt;

        return $this;
    }


}
