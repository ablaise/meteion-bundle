<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompleteJournalCategory.
 *
 * @ORM\Table(name="complete_journal_category", indexes={@ORM\Index(name="idx_ef48f4876254fe1d", columns={"first_quest"}), @ORM\Index(name="idx_ef48f487215cce0c", columns={"last_quest"})})
 * @ORM\Entity
 */
class CompleteJournalCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="complete_journal_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var CompleteJournal
     *
     * @ORM\ManyToOne(targetEntity="CompleteJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_quest", referencedColumnName="pk")
     * })
     */
    private $lastQuest;

    /**
     * @var CompleteJournal
     *
     * @ORM\ManyToOne(targetEntity="CompleteJournal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="first_quest", referencedColumnName="pk")
     * })
     */
    private $firstQuest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getLastQuest(): ?CompleteJournal
    {
        return $this->lastQuest;
    }

    public function setLastQuest(?CompleteJournal $lastQuest): self
    {
        $this->lastQuest = $lastQuest;

        return $this;
    }

    public function getFirstQuest(): ?CompleteJournal
    {
        return $this->firstQuest;
    }

    public function setFirstQuest(?CompleteJournal $firstQuest): self
    {
        $this->firstQuest = $firstQuest;

        return $this;
    }
}
