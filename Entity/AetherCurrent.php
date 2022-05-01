<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AetherCurrent.
 *
 * @ORM\Table(name="aether_current", indexes={@ORM\Index(name="idx_3aec9d5b4317f817", columns={"quest"})})
 * @ORM\Entity
 */
class AetherCurrent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aether_current_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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
