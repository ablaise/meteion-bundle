<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait.
 *
 * @ORM\Table(name="trait", indexes={@ORM\Index(name="idx_a1041dd94317f817", columns={"quest"}), @ORM\Index(name="idx_a1041dd9ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_a1041dd98d519804", columns={"class_job"})})
 * @ORM\Entity
 */
class TraitDefinition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trait_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

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

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

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
}
