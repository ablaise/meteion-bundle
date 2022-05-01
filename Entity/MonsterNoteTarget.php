<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MonsterNoteTarget.
 *
 * @ORM\Table(name="monster_note_target", indexes={@ORM\Index(name="idx_76579cdaf6d15bda", columns={"bnpc_name"}), @ORM\Index(name="idx_76579cdaa21ad32c", columns={"place_name_location_2"}), @ORM\Index(name="idx_76579cda4c14b200", columns={"place_name_location_0"}), @ORM\Index(name="idx_76579cda3b138296", columns={"place_name_location_1"}), @ORM\Index(name="idx_76579cdaf18c7c2b", columns={"place_name_zone_1"}), @ORM\Index(name="idx_76579cda68852d91", columns={"place_name_zone_2"}), @ORM\Index(name="idx_76579cda4ce6c7a4", columns={"town"}), @ORM\Index(name="idx_76579cda868b4cbd", columns={"place_name_zone_0"})})
 * @ORM\Entity
 */
class MonsterNoteTarget
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="monster_note_target_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_location_2", referencedColumnName="pk")
     * })
     */
    private $placeNameLocation2;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_zone_2", referencedColumnName="pk")
     * })
     */
    private $placeNameZone2;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_location_1", referencedColumnName="pk")
     * })
     */
    private $placeNameLocation1;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_zone_1", referencedColumnName="pk")
     * })
     */
    private $placeNameZone1;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_location_0", referencedColumnName="pk")
     * })
     */
    private $placeNameLocation0;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_zone_0", referencedColumnName="pk")
     * })
     */
    private $placeNameZone0;

    /**
     * @var Town
     *
     * @ORM\ManyToOne(targetEntity="Town")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="town", referencedColumnName="pk")
     * })
     */
    private $town;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getPlaceNameLocation2(): ?PlaceName
    {
        return $this->placeNameLocation2;
    }

    public function setPlaceNameLocation2(?PlaceName $placeNameLocation2): self
    {
        $this->placeNameLocation2 = $placeNameLocation2;

        return $this;
    }

    public function getPlaceNameZone2(): ?PlaceName
    {
        return $this->placeNameZone2;
    }

    public function setPlaceNameZone2(?PlaceName $placeNameZone2): self
    {
        $this->placeNameZone2 = $placeNameZone2;

        return $this;
    }

    public function getPlaceNameLocation1(): ?PlaceName
    {
        return $this->placeNameLocation1;
    }

    public function setPlaceNameLocation1(?PlaceName $placeNameLocation1): self
    {
        $this->placeNameLocation1 = $placeNameLocation1;

        return $this;
    }

    public function getPlaceNameZone1(): ?PlaceName
    {
        return $this->placeNameZone1;
    }

    public function setPlaceNameZone1(?PlaceName $placeNameZone1): self
    {
        $this->placeNameZone1 = $placeNameZone1;

        return $this;
    }

    public function getPlaceNameLocation0(): ?PlaceName
    {
        return $this->placeNameLocation0;
    }

    public function setPlaceNameLocation0(?PlaceName $placeNameLocation0): self
    {
        $this->placeNameLocation0 = $placeNameLocation0;

        return $this;
    }

    public function getPlaceNameZone0(): ?PlaceName
    {
        return $this->placeNameZone0;
    }

    public function setPlaceNameZone0(?PlaceName $placeNameZone0): self
    {
        $this->placeNameZone0 = $placeNameZone0;

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }
}
