<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdventureExPhase.
 *
 * @ORM\Table(name="adventure_ex_phase", indexes={@ORM\Index(name="idx_e263db31f0695b72", columns={"expansion"}), @ORM\Index(name="idx_e263db312237165c", columns={"adventure_begin"}), @ORM\Index(name="idx_e263db314317f817", columns={"quest"}), @ORM\Index(name="idx_e263db31af1cdeda", columns={"adventure_end"})})
 * @ORM\Entity
 */
class AdventureExPhase
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="adventure_ex_phase_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expansion", referencedColumnName="pk")
     * })
     */
    private $expansion;

    /**
     * @var Adventure
     *
     * @ORM\ManyToOne(targetEntity="Adventure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adventure_end", referencedColumnName="pk")
     * })
     */
    private $adventureEnd;

    /**
     * @var Adventure
     *
     * @ORM\ManyToOne(targetEntity="Adventure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adventure_begin", referencedColumnName="pk")
     * })
     */
    private $adventureBegin;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getExpansion(): ?ExVersion
    {
        return $this->expansion;
    }

    public function setExpansion(?ExVersion $expansion): self
    {
        $this->expansion = $expansion;

        return $this;
    }

    public function getAdventureEnd(): ?Adventure
    {
        return $this->adventureEnd;
    }

    public function setAdventureEnd(?Adventure $adventureEnd): self
    {
        $this->adventureEnd = $adventureEnd;

        return $this;
    }

    public function getAdventureBegin(): ?Adventure
    {
        return $this->adventureBegin;
    }

    public function setAdventureBegin(?Adventure $adventureBegin): self
    {
        $this->adventureBegin = $adventureBegin;

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
