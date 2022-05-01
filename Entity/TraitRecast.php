<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraitRecast.
 *
 * @ORM\Table(name="trait_recast", indexes={@ORM\Index(name="idx_ed71fb4ea1041dd9", columns={"trait"}), @ORM\Index(name="idx_ed71fb4e47cc8c92", columns={"action"})})
 * @ORM\Entity
 */
class TraitRecast
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trait_recast_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_ds", type="bigint", nullable=true)
     */
    private $timeDs;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

    /**
     * @var TraitDefinition
     *
     * @ORM\ManyToOne(targetEntity="TraitDefinition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trait", referencedColumnName="pk")
     * })
     */
    private $trait;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTimeDs(): ?string
    {
        return $this->timeDs;
    }

    public function setTimeDs(?string $timeDs): self
    {
        $this->timeDs = $timeDs;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getTrait(): ?TraitDefinition
    {
        return $this->trait;
    }

    public function setTrait(?TraitDefinition $trait): self
    {
        $this->trait = $trait;

        return $this;
    }
}
