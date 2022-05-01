<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SatisfactionArbitration.
 *
 * @ORM\Table(name="satisfaction_arbitration", indexes={@ORM\Index(name="idx_806de909e83cb138", columns={"satisfaction_npc"}), @ORM\Index(name="idx_806de9094317f817", columns={"quest"})})
 * @ORM\Entity
 */
class SatisfactionArbitration
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="satisfaction_arbitration_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_level", type="integer", nullable=true)
     */
    private $satisfactionLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var SatisfactionNpc
     *
     * @ORM\ManyToOne(targetEntity="SatisfactionNpc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="satisfaction_npc", referencedColumnName="pk")
     * })
     */
    private $satisfactionNpc;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getSatisfactionLevel(): ?int
    {
        return $this->satisfactionLevel;
    }

    public function setSatisfactionLevel(?int $satisfactionLevel): self
    {
        $this->satisfactionLevel = $satisfactionLevel;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

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

    public function getSatisfactionNpc(): ?SatisfactionNpc
    {
        return $this->satisfactionNpc;
    }

    public function setSatisfactionNpc(?SatisfactionNpc $satisfactionNpc): self
    {
        $this->satisfactionNpc = $satisfactionNpc;

        return $this;
    }
}
