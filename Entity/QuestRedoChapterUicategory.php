<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRedoChapterUicategory.
 *
 * @ORM\Table(name="quest_redo_chapter_uicategory")
 * @ORM\Entity
 */
class QuestRedoChapterUicategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_redo_chapter_uicategory_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="expac", type="string", length=255, nullable=true)
     */
    private $expac;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getExpac(): ?string
    {
        return $this->expac;
    }

    public function setExpac(?string $expac): self
    {
        $this->expac = $expac;

        return $this;
    }
}
