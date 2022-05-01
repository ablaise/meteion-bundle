<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description.
 *
 * @ORM\Table(name="description", indexes={@ORM\Index(name="idx_6de440264317f817", columns={"quest"})})
 * @ORM\Entity
 */
class Description
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="description_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_long", type="string", length=255, nullable=true)
     */
    private $textLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_short", type="string", length=255, nullable=true)
     */
    private $textShort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_commentary", type="string", length=255, nullable=true)
     */
    private $textCommentary;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="section", type="integer", nullable=true)
     */
    private $section;

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

    public function getTextLong(): ?string
    {
        return $this->textLong;
    }

    public function setTextLong(?string $textLong): self
    {
        $this->textLong = $textLong;

        return $this;
    }

    public function getTextShort(): ?string
    {
        return $this->textShort;
    }

    public function setTextShort(?string $textShort): self
    {
        $this->textShort = $textShort;

        return $this;
    }

    public function getTextCommentary(): ?string
    {
        return $this->textCommentary;
    }

    public function setTextCommentary(?string $textCommentary): self
    {
        $this->textCommentary = $textCommentary;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function setSection(?int $section): self
    {
        $this->section = $section;

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
