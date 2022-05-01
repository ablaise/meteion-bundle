<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JournalGenre.
 *
 * @ORM\Table(name="journal_genre", indexes={@ORM\Index(name="idx_608b00d2d6fcb478", columns={"journal_category"})})
 * @ORM\Entity
 */
class JournalGenre
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="journal_genre_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var JournalCategory
     *
     * @ORM\ManyToOne(targetEntity="JournalCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_category", referencedColumnName="pk")
     * })
     */
    private $journalCategory;

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

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

        return $this;
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

    public function getJournalCategory(): ?JournalCategory
    {
        return $this->journalCategory;
    }

    public function setJournalCategory(?JournalCategory $journalCategory): self
    {
        $this->journalCategory = $journalCategory;

        return $this;
    }
}
