<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringSubCategory.
 *
 * @ORM\Table(name="gathering_sub_category", indexes={@ORM\Index(name="idx_68c23d5d8d519804", columns={"class_job"}), @ORM\Index(name="idx_68c23d5d1f1b251e", columns={"item"}), @ORM\Index(name="idx_68c23d5d4317f817", columns={"quest"}), @ORM\Index(name="idx_68c23d5dd90bd581", columns={"gathering_type"})})
 * @ORM\Entity
 */
class GatheringSubCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_sub_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="division", type="bigint", nullable=true)
     */
    private $division;

    /**
     * @var string|null
     *
     * @ORM\Column(name="folklore_book", type="string", length=255, nullable=true)
     */
    private $folkloreBook;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var GatheringType
     *
     * @ORM\ManyToOne(targetEntity="GatheringType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_type", referencedColumnName="pk")
     * })
     */
    private $gatheringType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;

        return $this;
    }

    public function getFolkloreBook(): ?string
    {
        return $this->folkloreBook;
    }

    public function setFolkloreBook(?string $folkloreBook): self
    {
        $this->folkloreBook = $folkloreBook;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getGatheringType(): ?GatheringType
    {
        return $this->gatheringType;
    }

    public function setGatheringType(?GatheringType $gatheringType): self
    {
        $this->gatheringType = $gatheringType;

        return $this;
    }
}
