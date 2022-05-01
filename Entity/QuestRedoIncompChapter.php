<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRedoIncompChapter.
 *
 * @ORM\Table(name="quest_redo_incomp_chapter", indexes={@ORM\Index(name="idx_99eaefcbf981b52e", columns={"chapter"})})
 * @ORM\Entity
 */
class QuestRedoIncompChapter
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_redo_incomp_chapter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var QuestRedoChapter
     *
     * @ORM\ManyToOne(targetEntity="QuestRedoChapter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chapter", referencedColumnName="pk")
     * })
     */
    private $chapter;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getChapter(): ?QuestRedoChapter
    {
        return $this->chapter;
    }

    public function setChapter(?QuestRedoChapter $chapter): self
    {
        $this->chapter = $chapter;

        return $this;
    }
}
