<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * PhotosEsgi
 *
 * @ORM\Table(name="photos_esgi", indexes={@ORM\Index(name="departement", columns={"departement"}), @ORM\Index(name="id_compte", columns={"id_compte"}), @ORM\Index(name="est_argentic", columns={"est_argentic"}), @ORM\Index(name="pays", columns={"pays"}), @ORM\Index(name="dh_publication", columns={"dh_publication"}), @ORM\Index(name="est_mobile", columns={"est_mobile"}), @ORM\Index(name="id_geonames", columns={"id_geonames"}), @ORM\Index(name="dh_prise", columns={"dh_prise"}), @ORM\Index(name="lieu", columns={"lieu", "titre", "description", "exif"}), @ORM\Index(name="statut", columns={"statut"})})
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
class PhotosEsgi
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
     * @var int
     *
     * @ORM\Column(name="id_compte", type="integer", nullable=false)
     */
    private $idCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_url", type="string", length=48, nullable=false)
     */
    private $photoUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dh_publication", type="datetime", nullable=false)
     */
    private $dhPublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dh_prise", type="datetime", nullable=false)
     */
    private $dhPrise;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100, nullable=false)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departement", type="string", length=3, nullable=true)
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true)
     */
    private $pays;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="altitude", type="string", length=12, nullable=false, options={"fixed"=true})
     */
    private $altitude;

    /**
     * @var int
     *
     * @ORM\Column(name="id_geonames", type="integer", nullable=false)
     */
    private $idGeonames;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="message_aux_moderateurs", type="string", length=255, nullable=false)
     */
    private $messageAuxModerateurs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exif", type="string", length=255, nullable=true)
     */
    private $exif;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=0, nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="accord_media", type="string", length=0, nullable=false)
     */
    private $accordMedia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="libre_droits", type="string", length=0, nullable=false)
     */
    private $libreDroits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="accord_evaluations", type="string", length=0, nullable=false)
     */
    private $accordEvaluations = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dh_envoi", type="datetime", nullable=false)
     */
    private $dhEnvoi;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moderateur", type="integer", nullable=false)
     */
    private $idModerateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_mail_refus", type="integer", nullable=true)
     */
    private $idMailRefus;

    /**
     * @var string
     *
     * @ORM\Column(name="avis_moderateurs_demande", type="string", length=0, nullable=false)
     */
    private $avisModerateursDemande = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=0, nullable=false)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=255, nullable=false)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="precision_lieu", type="string", length=255, nullable=false)
     */
    private $precisionLieu = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="est_argentic", type="boolean", nullable=false)
     */
    private $estArgentic = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="est_mobile", type="boolean", nullable=false)
     */
    private $estMobile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="likes_cache", type="text", length=65535, nullable=false)
     */
    private $likesCache = '';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    public function getDhPublication(): ?\DateTimeInterface
    {
        return $this->dhPublication;
    }

    public function setDhPublication(\DateTimeInterface $dhPublication): self
    {
        $this->dhPublication = $dhPublication;

        return $this;
    }

    public function getDhPrise(): ?\DateTimeInterface
    {
        return $this->dhPrise;
    }

    public function setDhPrise(\DateTimeInterface $dhPrise): self
    {
        $this->dhPrise = $dhPrise;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
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

    public function getAltitude(): ?string
    {
        return $this->altitude;
    }

    public function setAltitude(string $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getIdGeonames(): ?int
    {
        return $this->idGeonames;
    }

    public function setIdGeonames(int $idGeonames): self
    {
        $this->idGeonames = $idGeonames;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getMessageAuxModerateurs(): ?string
    {
        return $this->messageAuxModerateurs;
    }

    public function setMessageAuxModerateurs(string $messageAuxModerateurs): self
    {
        $this->messageAuxModerateurs = $messageAuxModerateurs;

        return $this;
    }

    public function getExif(): ?string
    {
        return $this->exif;
    }

    public function setExif(?string $exif): self
    {
        $this->exif = $exif;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getAccordMedia(): ?string
    {
        return $this->accordMedia;
    }

    public function setAccordMedia(string $accordMedia): self
    {
        $this->accordMedia = $accordMedia;

        return $this;
    }

    public function getLibreDroits(): ?string
    {
        return $this->libreDroits;
    }

    public function setLibreDroits(string $libreDroits): self
    {
        $this->libreDroits = $libreDroits;

        return $this;
    }

    public function getAccordEvaluations(): ?string
    {
        return $this->accordEvaluations;
    }

    public function setAccordEvaluations(string $accordEvaluations): self
    {
        $this->accordEvaluations = $accordEvaluations;

        return $this;
    }

    public function getDhEnvoi(): ?\DateTimeInterface
    {
        return $this->dhEnvoi;
    }

    public function setDhEnvoi(\DateTimeInterface $dhEnvoi): self
    {
        $this->dhEnvoi = $dhEnvoi;

        return $this;
    }

    public function getIdModerateur(): ?int
    {
        return $this->idModerateur;
    }

    public function setIdModerateur(int $idModerateur): self
    {
        $this->idModerateur = $idModerateur;

        return $this;
    }

    public function getIdMailRefus(): ?int
    {
        return $this->idMailRefus;
    }

    public function setIdMailRefus(?int $idMailRefus): self
    {
        $this->idMailRefus = $idMailRefus;

        return $this;
    }

    public function getAvisModerateursDemande(): ?string
    {
        return $this->avisModerateursDemande;
    }

    public function setAvisModerateursDemande(string $avisModerateursDemande): self
    {
        $this->avisModerateursDemande = $avisModerateursDemande;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getPrecisionLieu(): ?string
    {
        return $this->precisionLieu;
    }

    public function setPrecisionLieu(string $precisionLieu): self
    {
        $this->precisionLieu = $precisionLieu;

        return $this;
    }

    public function getEstArgentic(): ?bool
    {
        return $this->estArgentic;
    }

    public function setEstArgentic(bool $estArgentic): self
    {
        $this->estArgentic = $estArgentic;

        return $this;
    }

    public function getEstMobile(): ?bool
    {
        return $this->estMobile;
    }

    public function setEstMobile(bool $estMobile): self
    {
        $this->estMobile = $estMobile;

        return $this;
    }

    public function getLikesCache(): ?string
    {
        return $this->likesCache;
    }

    public function setLikesCache(string $likesCache): self
    {
        $this->likesCache = $likesCache;

        return $this;
    }


}
