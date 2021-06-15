<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * HistoricEvents
 *
 * @ORM\Table(name="historic_events", indexes={@ORM\Index(name="gen_cartes", columns={"gen_cartes"}), @ORM\Index(name="importance", columns={"importance", "type"}), @ORM\Index(name="hits", columns={"hits"}), @ORM\Index(name="recherche", columns={"nom", "description", "short_desc"}), @ORM\Index(name="nom", columns={"nom"})})
 * @ORM\Entity
 * @ApiResource
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


}
