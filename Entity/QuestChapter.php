<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestChapter.
 *
 * @ORM\Table(name="quest_chapter", indexes={@ORM\Index(name="idx_ada608654317f817", columns={"quest"}), @ORM\Index(name="idx_ada6086572f26caa", columns={"redo"})})
 * @ORM\Entity
 */
class QuestChapter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_chapter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var QuestRedoChapter
     *
     * @ORM\ManyToOne(targetEntity="QuestRedoChapter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="redo", referencedColumnName="pk")
     * })
     */
    private $redo;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRedo(): ?QuestRedoChapter
    {
        return $this->redo;
    }

    public function setRedo(?QuestRedoChapter $redo): self
    {
        $this->redo = $redo;

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
}
