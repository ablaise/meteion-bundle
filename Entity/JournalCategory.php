<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JournalCategory.
 *
 * @ORM\Table(name="journal_category", indexes={@ORM\Index(name="idx_d6fcb478fdc8340a", columns={"journal_section"})})
 * @ORM\Entity
 */
class JournalCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="journal_category_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="separate_type", type="integer", nullable=true)
     */
    private $separateType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_type", type="integer", nullable=true)
     */
    private $dataType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var JournalSection
     *
     * @ORM\ManyToOne(targetEntity="JournalSection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_section", referencedColumnName="pk")
     * })
     */
    private $journalSection;

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

    public function getSeparateType(): ?int
    {
        return $this->separateType;
    }

    public function setSeparateType(?int $separateType): self
    {
        $this->separateType = $separateType;

        return $this;
    }

    public function getDataType(): ?int
    {
        return $this->dataType;
    }

    public function setDataType(?int $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getJournalSection(): ?JournalSection
    {
        return $this->journalSection;
    }

    public function setJournalSection(?JournalSection $journalSection): self
    {
        $this->journalSection = $journalSection;

        return $this;
    }
}
