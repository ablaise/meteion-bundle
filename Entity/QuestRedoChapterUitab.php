<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRedoChapterUitab.
 *
 * @ORM\Table(name="quest_redo_chapter_uitab")
 * @ORM\Entity
 */
class QuestRedoChapterUitab
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_redo_chapter_uitab_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon1", type="integer", nullable=true)
     */
    private $icon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon2", type="integer", nullable=true)
     */
    private $icon2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

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

    public function getIcon1(): ?int
    {
        return $this->icon1;
    }

    public function setIcon1(?int $icon1): self
    {
        $this->icon1 = $icon1;

        return $this;
    }

    public function getIcon2(): ?int
    {
        return $this->icon2;
    }

    public function setIcon2(?int $icon2): self
    {
        $this->icon2 = $icon2;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
