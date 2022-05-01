<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelicNote.
 *
 * @ORM\Table(name="relic_note", indexes={@ORM\Index(name="idx_4472451c324ebd07", columns={"monster_note_target_common_1"}), @ORM\Index(name="idx_4472451cd816cb8", columns={"fate_1"}), @ORM\Index(name="idx_4472451cdb2d1832", columns={"monster_note_target_common_7"}), @ORM\Index(name="idx_4472451c84941103", columns={"leve_0"}), @ORM\Index(name="idx_4472451cdc40dc2b", columns={"monster_note_target_common_3"}), @ORM\Index(name="idx_4472451cf3932195", columns={"leve_1"}), @ORM\Index(name="idx_4472451c3c953535", columns={"monster_note_target_common_9"}), @ORM\Index(name="idx_4472451cac2a28a4", columns={"monster_note_target_common_6"}), @ORM\Index(name="idx_4472451caf2fe944", columns={"monster_note_target_nm_1"}), @ORM\Index(name="idx_4472451c45498d91", columns={"monster_note_target_common_0"}), @ORM\Index(name="idx_4472451c720b87c7", columns={"place_name_fate_0"}), @ORM\Index(name="idx_4472451c3523791e", columns={"monster_note_target_common_5"}), @ORM\Index(name="idx_4472451c7a865c2e", columns={"fate_0"}), @ORM\Index(name="idx_4472451c50cb751", columns={"place_name_fate_1"}), @ORM\Index(name="idx_4472451c6a9a702f", columns={"leve_2"}), @ORM\Index(name="idx_4472451c42244988", columns={"monster_note_target_common_4"}), @ORM\Index(name="idx_4472451c94883d02", columns={"fate_2"}), @ORM\Index(name="idx_4472451c4b9205a3", columns={"monster_note_target_common_8"}), @ORM\Index(name="idx_4472451c3626b8fe", columns={"monster_note_target_nm_2"}), @ORM\Index(name="idx_4472451cd069b5", columns={"event_item"}), @ORM\Index(name="idx_4472451cab47ecbd", columns={"monster_note_target_common_2"}), @ORM\Index(name="idx_4472451cd828d9d2", columns={"monster_note_target_nm_0"}), @ORM\Index(name="idx_4472451c9c05e6eb", columns={"place_name_fate_2"})})
 * @ORM\Entity
 */
class RelicNote
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relic_note_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_0", type="integer", nullable=true)
     */
    private $monsterCount0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_1", type="integer", nullable=true)
     */
    private $monsterCount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_2", type="integer", nullable=true)
     */
    private $monsterCount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_3", type="integer", nullable=true)
     */
    private $monsterCount3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_4", type="integer", nullable=true)
     */
    private $monsterCount4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_5", type="integer", nullable=true)
     */
    private $monsterCount5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_6", type="integer", nullable=true)
     */
    private $monsterCount6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_7", type="integer", nullable=true)
     */
    private $monsterCount7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_8", type="integer", nullable=true)
     */
    private $monsterCount8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="monster_count_9", type="integer", nullable=true)
     */
    private $monsterCount9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="bigint", nullable=true)
     */
    private $column25;

    /**
     * @var Leve
     *
     * @ORM\ManyToOne(targetEntity="Leve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_2", referencedColumnName="pk")
     * })
     */
    private $leve2;

    /**
     * @var Leve
     *
     * @ORM\ManyToOne(targetEntity="Leve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_1", referencedColumnName="pk")
     * })
     */
    private $leve1;

    /**
     * @var Leve
     *
     * @ORM\ManyToOne(targetEntity="Leve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_0", referencedColumnName="pk")
     * })
     */
    private $leve0;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_fate_2", referencedColumnName="pk")
     * })
     */
    private $placeNameFate2;

    /**
     * @var Fate
     *
     * @ORM\ManyToOne(targetEntity="Fate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fate_2", referencedColumnName="pk")
     * })
     */
    private $fate2;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_fate_1", referencedColumnName="pk")
     * })
     */
    private $placeNameFate1;

    /**
     * @var Fate
     *
     * @ORM\ManyToOne(targetEntity="Fate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fate_1", referencedColumnName="pk")
     * })
     */
    private $fate1;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_fate_0", referencedColumnName="pk")
     * })
     */
    private $placeNameFate0;

    /**
     * @var Fate
     *
     * @ORM\ManyToOne(targetEntity="Fate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fate_0", referencedColumnName="pk")
     * })
     */
    private $fate0;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_nm_2", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetNm2;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_nm_1", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetNm1;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_nm_0", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetNm0;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_9", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon9;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_8", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon8;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_7", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon7;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_6", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon6;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_5", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon5;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_4", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon4;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_3", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon3;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_2", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon2;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_1", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon1;

    /**
     * @var MonsterNoteTarget
     *
     * @ORM\ManyToOne(targetEntity="MonsterNoteTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note_target_common_0", referencedColumnName="pk")
     * })
     */
    private $monsterNoteTargetCommon0;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_item", referencedColumnName="pk")
     * })
     */
    private $eventItem;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMonsterCount0(): ?int
    {
        return $this->monsterCount0;
    }

    public function setMonsterCount0(?int $monsterCount0): self
    {
        $this->monsterCount0 = $monsterCount0;

        return $this;
    }

    public function getMonsterCount1(): ?int
    {
        return $this->monsterCount1;
    }

    public function setMonsterCount1(?int $monsterCount1): self
    {
        $this->monsterCount1 = $monsterCount1;

        return $this;
    }

    public function getMonsterCount2(): ?int
    {
        return $this->monsterCount2;
    }

    public function setMonsterCount2(?int $monsterCount2): self
    {
        $this->monsterCount2 = $monsterCount2;

        return $this;
    }

    public function getMonsterCount3(): ?int
    {
        return $this->monsterCount3;
    }

    public function setMonsterCount3(?int $monsterCount3): self
    {
        $this->monsterCount3 = $monsterCount3;

        return $this;
    }

    public function getMonsterCount4(): ?int
    {
        return $this->monsterCount4;
    }

    public function setMonsterCount4(?int $monsterCount4): self
    {
        $this->monsterCount4 = $monsterCount4;

        return $this;
    }

    public function getMonsterCount5(): ?int
    {
        return $this->monsterCount5;
    }

    public function setMonsterCount5(?int $monsterCount5): self
    {
        $this->monsterCount5 = $monsterCount5;

        return $this;
    }

    public function getMonsterCount6(): ?int
    {
        return $this->monsterCount6;
    }

    public function setMonsterCount6(?int $monsterCount6): self
    {
        $this->monsterCount6 = $monsterCount6;

        return $this;
    }

    public function getMonsterCount7(): ?int
    {
        return $this->monsterCount7;
    }

    public function setMonsterCount7(?int $monsterCount7): self
    {
        $this->monsterCount7 = $monsterCount7;

        return $this;
    }

    public function getMonsterCount8(): ?int
    {
        return $this->monsterCount8;
    }

    public function setMonsterCount8(?int $monsterCount8): self
    {
        $this->monsterCount8 = $monsterCount8;

        return $this;
    }

    public function getMonsterCount9(): ?int
    {
        return $this->monsterCount9;
    }

    public function setMonsterCount9(?int $monsterCount9): self
    {
        $this->monsterCount9 = $monsterCount9;

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

    public function getLeve2(): ?Leve
    {
        return $this->leve2;
    }

    public function setLeve2(?Leve $leve2): self
    {
        $this->leve2 = $leve2;

        return $this;
    }

    public function getLeve1(): ?Leve
    {
        return $this->leve1;
    }

    public function setLeve1(?Leve $leve1): self
    {
        $this->leve1 = $leve1;

        return $this;
    }

    public function getLeve0(): ?Leve
    {
        return $this->leve0;
    }

    public function setLeve0(?Leve $leve0): self
    {
        $this->leve0 = $leve0;

        return $this;
    }

    public function getPlaceNameFate2(): ?PlaceName
    {
        return $this->placeNameFate2;
    }

    public function setPlaceNameFate2(?PlaceName $placeNameFate2): self
    {
        $this->placeNameFate2 = $placeNameFate2;

        return $this;
    }

    public function getFate2(): ?Fate
    {
        return $this->fate2;
    }

    public function setFate2(?Fate $fate2): self
    {
        $this->fate2 = $fate2;

        return $this;
    }

    public function getPlaceNameFate1(): ?PlaceName
    {
        return $this->placeNameFate1;
    }

    public function setPlaceNameFate1(?PlaceName $placeNameFate1): self
    {
        $this->placeNameFate1 = $placeNameFate1;

        return $this;
    }

    public function getFate1(): ?Fate
    {
        return $this->fate1;
    }

    public function setFate1(?Fate $fate1): self
    {
        $this->fate1 = $fate1;

        return $this;
    }

    public function getPlaceNameFate0(): ?PlaceName
    {
        return $this->placeNameFate0;
    }

    public function setPlaceNameFate0(?PlaceName $placeNameFate0): self
    {
        $this->placeNameFate0 = $placeNameFate0;

        return $this;
    }

    public function getFate0(): ?Fate
    {
        return $this->fate0;
    }

    public function setFate0(?Fate $fate0): self
    {
        $this->fate0 = $fate0;

        return $this;
    }

    public function getMonsterNoteTargetNm2(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetNm2;
    }

    public function setMonsterNoteTargetNm2(?MonsterNoteTarget $monsterNoteTargetNm2): self
    {
        $this->monsterNoteTargetNm2 = $monsterNoteTargetNm2;

        return $this;
    }

    public function getMonsterNoteTargetNm1(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetNm1;
    }

    public function setMonsterNoteTargetNm1(?MonsterNoteTarget $monsterNoteTargetNm1): self
    {
        $this->monsterNoteTargetNm1 = $monsterNoteTargetNm1;

        return $this;
    }

    public function getMonsterNoteTargetNm0(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetNm0;
    }

    public function setMonsterNoteTargetNm0(?MonsterNoteTarget $monsterNoteTargetNm0): self
    {
        $this->monsterNoteTargetNm0 = $monsterNoteTargetNm0;

        return $this;
    }

    public function getMonsterNoteTargetCommon9(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon9;
    }

    public function setMonsterNoteTargetCommon9(?MonsterNoteTarget $monsterNoteTargetCommon9): self
    {
        $this->monsterNoteTargetCommon9 = $monsterNoteTargetCommon9;

        return $this;
    }

    public function getMonsterNoteTargetCommon8(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon8;
    }

    public function setMonsterNoteTargetCommon8(?MonsterNoteTarget $monsterNoteTargetCommon8): self
    {
        $this->monsterNoteTargetCommon8 = $monsterNoteTargetCommon8;

        return $this;
    }

    public function getMonsterNoteTargetCommon7(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon7;
    }

    public function setMonsterNoteTargetCommon7(?MonsterNoteTarget $monsterNoteTargetCommon7): self
    {
        $this->monsterNoteTargetCommon7 = $monsterNoteTargetCommon7;

        return $this;
    }

    public function getMonsterNoteTargetCommon6(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon6;
    }

    public function setMonsterNoteTargetCommon6(?MonsterNoteTarget $monsterNoteTargetCommon6): self
    {
        $this->monsterNoteTargetCommon6 = $monsterNoteTargetCommon6;

        return $this;
    }

    public function getMonsterNoteTargetCommon5(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon5;
    }

    public function setMonsterNoteTargetCommon5(?MonsterNoteTarget $monsterNoteTargetCommon5): self
    {
        $this->monsterNoteTargetCommon5 = $monsterNoteTargetCommon5;

        return $this;
    }

    public function getMonsterNoteTargetCommon4(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon4;
    }

    public function setMonsterNoteTargetCommon4(?MonsterNoteTarget $monsterNoteTargetCommon4): self
    {
        $this->monsterNoteTargetCommon4 = $monsterNoteTargetCommon4;

        return $this;
    }

    public function getMonsterNoteTargetCommon3(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon3;
    }

    public function setMonsterNoteTargetCommon3(?MonsterNoteTarget $monsterNoteTargetCommon3): self
    {
        $this->monsterNoteTargetCommon3 = $monsterNoteTargetCommon3;

        return $this;
    }

    public function getMonsterNoteTargetCommon2(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon2;
    }

    public function setMonsterNoteTargetCommon2(?MonsterNoteTarget $monsterNoteTargetCommon2): self
    {
        $this->monsterNoteTargetCommon2 = $monsterNoteTargetCommon2;

        return $this;
    }

    public function getMonsterNoteTargetCommon1(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon1;
    }

    public function setMonsterNoteTargetCommon1(?MonsterNoteTarget $monsterNoteTargetCommon1): self
    {
        $this->monsterNoteTargetCommon1 = $monsterNoteTargetCommon1;

        return $this;
    }

    public function getMonsterNoteTargetCommon0(): ?MonsterNoteTarget
    {
        return $this->monsterNoteTargetCommon0;
    }

    public function setMonsterNoteTargetCommon0(?MonsterNoteTarget $monsterNoteTargetCommon0): self
    {
        $this->monsterNoteTargetCommon0 = $monsterNoteTargetCommon0;

        return $this;
    }

    public function getEventItem(): ?EventItem
    {
        return $this->eventItem;
    }

    public function setEventItem(?EventItem $eventItem): self
    {
        $this->eventItem = $eventItem;

        return $this;
    }
}
