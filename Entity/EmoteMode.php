<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmoteMode.
 *
 * @ORM\Table(name="emote_mode", indexes={@ORM\Index(name="idx_3c70d9da1a23c2c3", columns={"end_emote"}), @ORM\Index(name="idx_3c70d9da1ee99f37", columns={"start_emote"})})
 * @ORM\Entity
 */
class EmoteMode
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="emote_mode_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="move", type="boolean", nullable=true)
     */
    private $move;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="camera", type="boolean", nullable=true)
     */
    private $camera;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="end_on_rotate", type="boolean", nullable=true)
     */
    private $endOnRotate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="end_on_emote", type="boolean", nullable=true)
     */
    private $endOnEmote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_mode", type="integer", nullable=true)
     */
    private $conditionMode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var Emote
     *
     * @ORM\ManyToOne(targetEntity="Emote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="end_emote", referencedColumnName="pk")
     * })
     */
    private $endEmote;

    /**
     * @var Emote
     *
     * @ORM\ManyToOne(targetEntity="Emote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_emote", referencedColumnName="pk")
     * })
     */
    private $startEmote;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMove(): ?bool
    {
        return $this->move;
    }

    public function setMove(?bool $move): self
    {
        $this->move = $move;

        return $this;
    }

    public function getCamera(): ?bool
    {
        return $this->camera;
    }

    public function setCamera(?bool $camera): self
    {
        $this->camera = $camera;

        return $this;
    }

    public function getEndOnRotate(): ?bool
    {
        return $this->endOnRotate;
    }

    public function setEndOnRotate(?bool $endOnRotate): self
    {
        $this->endOnRotate = $endOnRotate;

        return $this;
    }

    public function getEndOnEmote(): ?bool
    {
        return $this->endOnEmote;
    }

    public function setEndOnEmote(?bool $endOnEmote): self
    {
        $this->endOnEmote = $endOnEmote;

        return $this;
    }

    public function getConditionMode(): ?int
    {
        return $this->conditionMode;
    }

    public function setConditionMode(?int $conditionMode): self
    {
        $this->conditionMode = $conditionMode;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getEndEmote(): ?Emote
    {
        return $this->endEmote;
    }

    public function setEndEmote(?Emote $endEmote): self
    {
        $this->endEmote = $endEmote;

        return $this;
    }

    public function getStartEmote(): ?Emote
    {
        return $this->startEmote;
    }

    public function setStartEmote(?Emote $startEmote): self
    {
        $this->startEmote = $startEmote;

        return $this;
    }
}
