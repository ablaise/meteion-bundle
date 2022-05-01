<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkyIsland2mission.
 *
 * @ORM\Table(name="sky_island2mission", indexes={@ORM\Index(name="idx_c763ca6094960eea", columns={"place_name"}), @ORM\Index(name="idx_c763ca60fe851903", columns={"objective_1"}), @ORM\Index(name="idx_c763ca602b68f667", columns={"item_2"}), @ORM\Index(name="idx_c763ca606d6b186a", columns={"objective2"}), @ORM\Index(name="idx_c763ca60b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_c763ca601a6c28fc", columns={"objective3"})})
 * @ORM\Entity
 */
class SkyIsland2mission
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sky_island2mission_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_0", type="bigint", nullable=true)
     */
    private $popRange0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_1", type="integer", nullable=true)
     */
    private $requiredAmount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_1", type="bigint", nullable=true)
     */
    private $popRange1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_2", type="integer", nullable=true)
     */
    private $requiredAmount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_2", type="bigint", nullable=true)
     */
    private $popRange2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="integer", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="bigint", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="integer", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="bigint", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_22", type="string", length=705, nullable=true)
     */
    private $column22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_23", type="string", length=705, nullable=true)
     */
    private $column23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_24", type="string", length=705, nullable=true)
     */
    private $column24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_25", type="string", length=705, nullable=true)
     */
    private $column25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_26", type="string", length=705, nullable=true)
     */
    private $column26;

    /**
     * @var SkyIsland2missionDetail
     *
     * @ORM\ManyToOne(targetEntity="SkyIsland2missionDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective3", referencedColumnName="pk")
     * })
     */
    private $objective3;

    /**
     * @var SkyIsland2missionDetail
     *
     * @ORM\ManyToOne(targetEntity="SkyIsland2missionDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective2", referencedColumnName="pk")
     * })
     */
    private $objective2;

    /**
     * @var SkyIsland2missionDetail
     *
     * @ORM\ManyToOne(targetEntity="SkyIsland2missionDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective_1", referencedColumnName="pk")
     * })
     */
    private $objective1;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2", referencedColumnName="pk")
     * })
     */
    private $item2;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1", referencedColumnName="pk")
     * })
     */
    private $item1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getPopRange0(): ?string
    {
        return $this->popRange0;
    }

    public function setPopRange0(?string $popRange0): self
    {
        $this->popRange0 = $popRange0;

        return $this;
    }

    public function getRequiredAmount1(): ?int
    {
        return $this->requiredAmount1;
    }

    public function setRequiredAmount1(?int $requiredAmount1): self
    {
        $this->requiredAmount1 = $requiredAmount1;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getPopRange1(): ?string
    {
        return $this->popRange1;
    }

    public function setPopRange1(?string $popRange1): self
    {
        $this->popRange1 = $popRange1;

        return $this;
    }

    public function getRequiredAmount2(): ?int
    {
        return $this->requiredAmount2;
    }

    public function setRequiredAmount2(?int $requiredAmount2): self
    {
        $this->requiredAmount2 = $requiredAmount2;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getPopRange2(): ?string
    {
        return $this->popRange2;
    }

    public function setPopRange2(?string $popRange2): self
    {
        $this->popRange2 = $popRange2;

        return $this;
    }

    public function getColumn17(): ?int
    {
        return $this->column17;
    }

    public function setColumn17(?int $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getColumn18(): ?string
    {
        return $this->column18;
    }

    public function setColumn18(?string $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?int
    {
        return $this->column19;
    }

    public function setColumn19(?int $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?string
    {
        return $this->column20;
    }

    public function setColumn20(?string $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?string
    {
        return $this->column24;
    }

    public function setColumn24(?string $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?string
    {
        return $this->column25;
    }

    public function setColumn25(?string $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getObjective3(): ?SkyIsland2missionDetail
    {
        return $this->objective3;
    }

    public function setObjective3(?SkyIsland2missionDetail $objective3): self
    {
        $this->objective3 = $objective3;

        return $this;
    }

    public function getObjective2(): ?SkyIsland2missionDetail
    {
        return $this->objective2;
    }

    public function setObjective2(?SkyIsland2missionDetail $objective2): self
    {
        $this->objective2 = $objective2;

        return $this;
    }

    public function getObjective1(): ?SkyIsland2missionDetail
    {
        return $this->objective1;
    }

    public function setObjective1(?SkyIsland2missionDetail $objective1): self
    {
        $this->objective1 = $objective1;

        return $this;
    }

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getItem2(): ?EventItem
    {
        return $this->item2;
    }

    public function setItem2(?EventItem $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem1(): ?EventItem
    {
        return $this->item1;
    }

    public function setItem1(?EventItem $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }
}
