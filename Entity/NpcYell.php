<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcYell.
 *
 * @ORM\Table(name="npc_yell")
 * @ORM\Entity
 */
class NpcYell
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="npc_yell_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="output_type", type="integer", nullable=true)
     */
    private $outputType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="balloon_time", type="string", length=769, nullable=true)
     */
    private $balloonTime;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_balloon_slow", type="boolean", nullable=true)
     */
    private $isBalloonSlow;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="battle_talk_time", type="boolean", nullable=true)
     */
    private $battleTalkTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=769, nullable=true)
     */
    private $text;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

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

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getOutputType(): ?int
    {
        return $this->outputType;
    }

    public function setOutputType(?int $outputType): self
    {
        $this->outputType = $outputType;

        return $this;
    }

    public function getBalloonTime(): ?string
    {
        return $this->balloonTime;
    }

    public function setBalloonTime(?string $balloonTime): self
    {
        $this->balloonTime = $balloonTime;

        return $this;
    }

    public function getIsBalloonSlow(): ?bool
    {
        return $this->isBalloonSlow;
    }

    public function setIsBalloonSlow(?bool $isBalloonSlow): self
    {
        $this->isBalloonSlow = $isBalloonSlow;

        return $this;
    }

    public function getBattleTalkTime(): ?bool
    {
        return $this->battleTalkTime;
    }

    public function setBattleTalkTime(?bool $battleTalkTime): self
    {
        $this->battleTalkTime = $battleTalkTime;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

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
