<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPtrait.
 *
 * @ORM\Table(name="pv_ptrait", indexes={@ORM\Index(name="idx_c50c31371ed8e0d5", columns={"trait_1"}), @ORM\Index(name="idx_c50c313787d1b16f", columns={"trait_2"}), @ORM\Index(name="idx_c50c3137f0d681f9", columns={"trait_3"})})
 * @ORM\Entity
 */
class PvPtrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_ptrait_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var TraitDefinition
     *
     * @ORM\ManyToOne(targetEntity="TraitDefinition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trait_3", referencedColumnName="pk")
     * })
     */
    private $trait3;

    /**
     * @var TraitDefinition
     *
     * @ORM\ManyToOne(targetEntity="TraitDefinition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trait_2", referencedColumnName="pk")
     * })
     */
    private $trait2;

    /**
     * @var TraitDefinition
     *
     * @ORM\ManyToOne(targetEntity="TraitDefinition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trait_1", referencedColumnName="pk")
     * })
     */
    private $trait1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTrait3(): ?TraitDefinition
    {
        return $this->trait3;
    }

    public function setTrait3(?TraitDefinition $trait3): self
    {
        $this->trait3 = $trait3;

        return $this;
    }

    public function getTrait2(): ?TraitDefinition
    {
        return $this->trait2;
    }

    public function setTrait2(?TraitDefinition $trait2): self
    {
        $this->trait2 = $trait2;

        return $this;
    }

    public function getTrait1(): ?TraitDefinition
    {
        return $this->trait1;
    }

    public function setTrait1(?TraitDefinition $trait1): self
    {
        $this->trait1 = $trait1;

        return $this;
    }
}
