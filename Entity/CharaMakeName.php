<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharaMakeName.
 *
 * @ORM\Table(name="chara_make_name")
 * @ORM\Entity
 */
class CharaMakeName
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chara_make_name_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_midlander_male", type="string", length=255, nullable=true)
     */
    private $hyurMidlanderMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_midlander_female", type="string", length=255, nullable=true)
     */
    private $hyurMidlanderFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_midlander_last_name", type="string", length=255, nullable=true)
     */
    private $hyurMidlanderLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_highlander_male", type="string", length=255, nullable=true)
     */
    private $hyurHighlanderMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_highlander_female", type="string", length=255, nullable=true)
     */
    private $hyurHighlanderFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hyur_highlander_last_name", type="string", length=255, nullable=true)
     */
    private $hyurHighlanderLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_male", type="string", length=255, nullable=true)
     */
    private $elezenMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_female", type="string", length=255, nullable=true)
     */
    private $elezenFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_wildwood_last_name", type="string", length=255, nullable=true)
     */
    private $elezenWildwoodLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elezen_duskwight_last_name", type="string", length=255, nullable=true)
     */
    private $elezenDuskwightLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_sun_male", type="string", length=255, nullable=true)
     */
    private $miqoteSunMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_sun_female", type="string", length=255, nullable=true)
     */
    private $miqoteSunFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_sun_male_last_name", type="string", length=255, nullable=true)
     */
    private $miqoteSunMaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_sun_female_last_name", type="string", length=255, nullable=true)
     */
    private $miqoteSunFemaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_moon_male", type="string", length=255, nullable=true)
     */
    private $miqoteMoonMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_moon_female", type="string", length=255, nullable=true)
     */
    private $miqoteMoonFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="miqote_moon_lastname", type="string", length=255, nullable=true)
     */
    private $miqoteMoonLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_plainsfolk_first_name_start", type="string", length=255, nullable=true)
     */
    private $lalafellPlainsfolkFirstNameStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_plainsfolk_last_name_start", type="string", length=255, nullable=true)
     */
    private $lalafellPlainsfolkLastNameStart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_plainsfolk_end_of_names", type="string", length=255, nullable=true)
     */
    private $lalafellPlainsfolkEndOfNames;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_dunesfolk_male", type="string", length=255, nullable=true)
     */
    private $lalafellDunesfolkMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_dunesfolk_male_last_name", type="string", length=255, nullable=true)
     */
    private $lalafellDunesfolkMaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_dunesfolk_female", type="string", length=255, nullable=true)
     */
    private $lalafellDunesfolkFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lalafell_dunesfolk_female_last_name", type="string", length=255, nullable=true)
     */
    private $lalafellDunesfolkFemaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_sea_wolf_male", type="string", length=255, nullable=true)
     */
    private $roegadynSeaWolfMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_sea_wolf_male_last_name", type="string", length=255, nullable=true)
     */
    private $roegadynSeaWolfMaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_sea_wolf_female", type="string", length=255, nullable=true)
     */
    private $roegadynSeaWolfFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_sea_wolf_female_last_name", type="string", length=255, nullable=true)
     */
    private $roegadynSeaWolfFemaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_hellsguard_first_name", type="string", length=255, nullable=true)
     */
    private $roegadynHellsguardFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_hellsguard_male_last_name", type="string", length=255, nullable=true)
     */
    private $roegadynHellsguardMaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="roegadyn_hellsguard_female_last_name", type="string", length=255, nullable=true)
     */
    private $roegadynHellsguardFemaleLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_raen_male", type="string", length=255, nullable=true)
     */
    private $auRaRaenMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_raen_female", type="string", length=255, nullable=true)
     */
    private $auRaRaenFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_raen_last_name", type="string", length=255, nullable=true)
     */
    private $auRaRaenLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_xaela_male", type="string", length=255, nullable=true)
     */
    private $auRaXaelaMale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_xaela_female", type="string", length=255, nullable=true)
     */
    private $auRaXaelaFemale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="au_ra_xaela_last_name", type="string", length=255, nullable=true)
     */
    private $auRaXaelaLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_hellions_first_name", type="string", length=255, nullable=true)
     */
    private $hrothgarHellionsFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_hellions_last_name", type="string", length=255, nullable=true)
     */
    private $hrothgarHellionsLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_lost_first_name", type="string", length=255, nullable=true)
     */
    private $hrothgarLostFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hrothgar_lost_last_name", type="string", length=255, nullable=true)
     */
    private $hrothgarLostLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_42", type="string", length=255, nullable=true)
     */
    private $column42;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_43", type="string", length=255, nullable=true)
     */
    private $column43;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_44", type="string", length=255, nullable=true)
     */
    private $column44;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_first_name", type="string", length=255, nullable=true)
     */
    private $vieraFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_rava_last_name", type="string", length=255, nullable=true)
     */
    private $vieraRavaLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="viera_veena_last_name", type="string", length=255, nullable=true)
     */
    private $vieraVeenaLastName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getHyurMidlanderMale(): ?string
    {
        return $this->hyurMidlanderMale;
    }

    public function setHyurMidlanderMale(?string $hyurMidlanderMale): self
    {
        $this->hyurMidlanderMale = $hyurMidlanderMale;

        return $this;
    }

    public function getHyurMidlanderFemale(): ?string
    {
        return $this->hyurMidlanderFemale;
    }

    public function setHyurMidlanderFemale(?string $hyurMidlanderFemale): self
    {
        $this->hyurMidlanderFemale = $hyurMidlanderFemale;

        return $this;
    }

    public function getHyurMidlanderLastName(): ?string
    {
        return $this->hyurMidlanderLastName;
    }

    public function setHyurMidlanderLastName(?string $hyurMidlanderLastName): self
    {
        $this->hyurMidlanderLastName = $hyurMidlanderLastName;

        return $this;
    }

    public function getHyurHighlanderMale(): ?string
    {
        return $this->hyurHighlanderMale;
    }

    public function setHyurHighlanderMale(?string $hyurHighlanderMale): self
    {
        $this->hyurHighlanderMale = $hyurHighlanderMale;

        return $this;
    }

    public function getHyurHighlanderFemale(): ?string
    {
        return $this->hyurHighlanderFemale;
    }

    public function setHyurHighlanderFemale(?string $hyurHighlanderFemale): self
    {
        $this->hyurHighlanderFemale = $hyurHighlanderFemale;

        return $this;
    }

    public function getHyurHighlanderLastName(): ?string
    {
        return $this->hyurHighlanderLastName;
    }

    public function setHyurHighlanderLastName(?string $hyurHighlanderLastName): self
    {
        $this->hyurHighlanderLastName = $hyurHighlanderLastName;

        return $this;
    }

    public function getElezenMale(): ?string
    {
        return $this->elezenMale;
    }

    public function setElezenMale(?string $elezenMale): self
    {
        $this->elezenMale = $elezenMale;

        return $this;
    }

    public function getElezenFemale(): ?string
    {
        return $this->elezenFemale;
    }

    public function setElezenFemale(?string $elezenFemale): self
    {
        $this->elezenFemale = $elezenFemale;

        return $this;
    }

    public function getElezenWildwoodLastName(): ?string
    {
        return $this->elezenWildwoodLastName;
    }

    public function setElezenWildwoodLastName(?string $elezenWildwoodLastName): self
    {
        $this->elezenWildwoodLastName = $elezenWildwoodLastName;

        return $this;
    }

    public function getElezenDuskwightLastName(): ?string
    {
        return $this->elezenDuskwightLastName;
    }

    public function setElezenDuskwightLastName(?string $elezenDuskwightLastName): self
    {
        $this->elezenDuskwightLastName = $elezenDuskwightLastName;

        return $this;
    }

    public function getMiqoteSunMale(): ?string
    {
        return $this->miqoteSunMale;
    }

    public function setMiqoteSunMale(?string $miqoteSunMale): self
    {
        $this->miqoteSunMale = $miqoteSunMale;

        return $this;
    }

    public function getMiqoteSunFemale(): ?string
    {
        return $this->miqoteSunFemale;
    }

    public function setMiqoteSunFemale(?string $miqoteSunFemale): self
    {
        $this->miqoteSunFemale = $miqoteSunFemale;

        return $this;
    }

    public function getMiqoteSunMaleLastName(): ?string
    {
        return $this->miqoteSunMaleLastName;
    }

    public function setMiqoteSunMaleLastName(?string $miqoteSunMaleLastName): self
    {
        $this->miqoteSunMaleLastName = $miqoteSunMaleLastName;

        return $this;
    }

    public function getMiqoteSunFemaleLastName(): ?string
    {
        return $this->miqoteSunFemaleLastName;
    }

    public function setMiqoteSunFemaleLastName(?string $miqoteSunFemaleLastName): self
    {
        $this->miqoteSunFemaleLastName = $miqoteSunFemaleLastName;

        return $this;
    }

    public function getMiqoteMoonMale(): ?string
    {
        return $this->miqoteMoonMale;
    }

    public function setMiqoteMoonMale(?string $miqoteMoonMale): self
    {
        $this->miqoteMoonMale = $miqoteMoonMale;

        return $this;
    }

    public function getMiqoteMoonFemale(): ?string
    {
        return $this->miqoteMoonFemale;
    }

    public function setMiqoteMoonFemale(?string $miqoteMoonFemale): self
    {
        $this->miqoteMoonFemale = $miqoteMoonFemale;

        return $this;
    }

    public function getMiqoteMoonLastname(): ?string
    {
        return $this->miqoteMoonLastname;
    }

    public function setMiqoteMoonLastname(?string $miqoteMoonLastname): self
    {
        $this->miqoteMoonLastname = $miqoteMoonLastname;

        return $this;
    }

    public function getLalafellPlainsfolkFirstNameStart(): ?string
    {
        return $this->lalafellPlainsfolkFirstNameStart;
    }

    public function setLalafellPlainsfolkFirstNameStart(?string $lalafellPlainsfolkFirstNameStart): self
    {
        $this->lalafellPlainsfolkFirstNameStart = $lalafellPlainsfolkFirstNameStart;

        return $this;
    }

    public function getLalafellPlainsfolkLastNameStart(): ?string
    {
        return $this->lalafellPlainsfolkLastNameStart;
    }

    public function setLalafellPlainsfolkLastNameStart(?string $lalafellPlainsfolkLastNameStart): self
    {
        $this->lalafellPlainsfolkLastNameStart = $lalafellPlainsfolkLastNameStart;

        return $this;
    }

    public function getLalafellPlainsfolkEndOfNames(): ?string
    {
        return $this->lalafellPlainsfolkEndOfNames;
    }

    public function setLalafellPlainsfolkEndOfNames(?string $lalafellPlainsfolkEndOfNames): self
    {
        $this->lalafellPlainsfolkEndOfNames = $lalafellPlainsfolkEndOfNames;

        return $this;
    }

    public function getLalafellDunesfolkMale(): ?string
    {
        return $this->lalafellDunesfolkMale;
    }

    public function setLalafellDunesfolkMale(?string $lalafellDunesfolkMale): self
    {
        $this->lalafellDunesfolkMale = $lalafellDunesfolkMale;

        return $this;
    }

    public function getLalafellDunesfolkMaleLastName(): ?string
    {
        return $this->lalafellDunesfolkMaleLastName;
    }

    public function setLalafellDunesfolkMaleLastName(?string $lalafellDunesfolkMaleLastName): self
    {
        $this->lalafellDunesfolkMaleLastName = $lalafellDunesfolkMaleLastName;

        return $this;
    }

    public function getLalafellDunesfolkFemale(): ?string
    {
        return $this->lalafellDunesfolkFemale;
    }

    public function setLalafellDunesfolkFemale(?string $lalafellDunesfolkFemale): self
    {
        $this->lalafellDunesfolkFemale = $lalafellDunesfolkFemale;

        return $this;
    }

    public function getLalafellDunesfolkFemaleLastName(): ?string
    {
        return $this->lalafellDunesfolkFemaleLastName;
    }

    public function setLalafellDunesfolkFemaleLastName(?string $lalafellDunesfolkFemaleLastName): self
    {
        $this->lalafellDunesfolkFemaleLastName = $lalafellDunesfolkFemaleLastName;

        return $this;
    }

    public function getRoegadynSeaWolfMale(): ?string
    {
        return $this->roegadynSeaWolfMale;
    }

    public function setRoegadynSeaWolfMale(?string $roegadynSeaWolfMale): self
    {
        $this->roegadynSeaWolfMale = $roegadynSeaWolfMale;

        return $this;
    }

    public function getRoegadynSeaWolfMaleLastName(): ?string
    {
        return $this->roegadynSeaWolfMaleLastName;
    }

    public function setRoegadynSeaWolfMaleLastName(?string $roegadynSeaWolfMaleLastName): self
    {
        $this->roegadynSeaWolfMaleLastName = $roegadynSeaWolfMaleLastName;

        return $this;
    }

    public function getRoegadynSeaWolfFemale(): ?string
    {
        return $this->roegadynSeaWolfFemale;
    }

    public function setRoegadynSeaWolfFemale(?string $roegadynSeaWolfFemale): self
    {
        $this->roegadynSeaWolfFemale = $roegadynSeaWolfFemale;

        return $this;
    }

    public function getRoegadynSeaWolfFemaleLastName(): ?string
    {
        return $this->roegadynSeaWolfFemaleLastName;
    }

    public function setRoegadynSeaWolfFemaleLastName(?string $roegadynSeaWolfFemaleLastName): self
    {
        $this->roegadynSeaWolfFemaleLastName = $roegadynSeaWolfFemaleLastName;

        return $this;
    }

    public function getRoegadynHellsguardFirstName(): ?string
    {
        return $this->roegadynHellsguardFirstName;
    }

    public function setRoegadynHellsguardFirstName(?string $roegadynHellsguardFirstName): self
    {
        $this->roegadynHellsguardFirstName = $roegadynHellsguardFirstName;

        return $this;
    }

    public function getRoegadynHellsguardMaleLastName(): ?string
    {
        return $this->roegadynHellsguardMaleLastName;
    }

    public function setRoegadynHellsguardMaleLastName(?string $roegadynHellsguardMaleLastName): self
    {
        $this->roegadynHellsguardMaleLastName = $roegadynHellsguardMaleLastName;

        return $this;
    }

    public function getRoegadynHellsguardFemaleLastName(): ?string
    {
        return $this->roegadynHellsguardFemaleLastName;
    }

    public function setRoegadynHellsguardFemaleLastName(?string $roegadynHellsguardFemaleLastName): self
    {
        $this->roegadynHellsguardFemaleLastName = $roegadynHellsguardFemaleLastName;

        return $this;
    }

    public function getAuRaRaenMale(): ?string
    {
        return $this->auRaRaenMale;
    }

    public function setAuRaRaenMale(?string $auRaRaenMale): self
    {
        $this->auRaRaenMale = $auRaRaenMale;

        return $this;
    }

    public function getAuRaRaenFemale(): ?string
    {
        return $this->auRaRaenFemale;
    }

    public function setAuRaRaenFemale(?string $auRaRaenFemale): self
    {
        $this->auRaRaenFemale = $auRaRaenFemale;

        return $this;
    }

    public function getAuRaRaenLastName(): ?string
    {
        return $this->auRaRaenLastName;
    }

    public function setAuRaRaenLastName(?string $auRaRaenLastName): self
    {
        $this->auRaRaenLastName = $auRaRaenLastName;

        return $this;
    }

    public function getAuRaXaelaMale(): ?string
    {
        return $this->auRaXaelaMale;
    }

    public function setAuRaXaelaMale(?string $auRaXaelaMale): self
    {
        $this->auRaXaelaMale = $auRaXaelaMale;

        return $this;
    }

    public function getAuRaXaelaFemale(): ?string
    {
        return $this->auRaXaelaFemale;
    }

    public function setAuRaXaelaFemale(?string $auRaXaelaFemale): self
    {
        $this->auRaXaelaFemale = $auRaXaelaFemale;

        return $this;
    }

    public function getAuRaXaelaLastName(): ?string
    {
        return $this->auRaXaelaLastName;
    }

    public function setAuRaXaelaLastName(?string $auRaXaelaLastName): self
    {
        $this->auRaXaelaLastName = $auRaXaelaLastName;

        return $this;
    }

    public function getHrothgarHellionsFirstName(): ?string
    {
        return $this->hrothgarHellionsFirstName;
    }

    public function setHrothgarHellionsFirstName(?string $hrothgarHellionsFirstName): self
    {
        $this->hrothgarHellionsFirstName = $hrothgarHellionsFirstName;

        return $this;
    }

    public function getHrothgarHellionsLastName(): ?string
    {
        return $this->hrothgarHellionsLastName;
    }

    public function setHrothgarHellionsLastName(?string $hrothgarHellionsLastName): self
    {
        $this->hrothgarHellionsLastName = $hrothgarHellionsLastName;

        return $this;
    }

    public function getHrothgarLostFirstName(): ?string
    {
        return $this->hrothgarLostFirstName;
    }

    public function setHrothgarLostFirstName(?string $hrothgarLostFirstName): self
    {
        $this->hrothgarLostFirstName = $hrothgarLostFirstName;

        return $this;
    }

    public function getHrothgarLostLastName(): ?string
    {
        return $this->hrothgarLostLastName;
    }

    public function setHrothgarLostLastName(?string $hrothgarLostLastName): self
    {
        $this->hrothgarLostLastName = $hrothgarLostLastName;

        return $this;
    }

    public function getColumn42(): ?string
    {
        return $this->column42;
    }

    public function setColumn42(?string $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?string
    {
        return $this->column43;
    }

    public function setColumn43(?string $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?string
    {
        return $this->column44;
    }

    public function setColumn44(?string $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getVieraFirstName(): ?string
    {
        return $this->vieraFirstName;
    }

    public function setVieraFirstName(?string $vieraFirstName): self
    {
        $this->vieraFirstName = $vieraFirstName;

        return $this;
    }

    public function getVieraRavaLastName(): ?string
    {
        return $this->vieraRavaLastName;
    }

    public function setVieraRavaLastName(?string $vieraRavaLastName): self
    {
        $this->vieraRavaLastName = $vieraRavaLastName;

        return $this;
    }

    public function getVieraVeenaLastName(): ?string
    {
        return $this->vieraVeenaLastName;
    }

    public function setVieraVeenaLastName(?string $vieraVeenaLastName): self
    {
        $this->vieraVeenaLastName = $vieraVeenaLastName;

        return $this;
    }
}
