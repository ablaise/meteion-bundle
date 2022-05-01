<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MountFlyingCondition.
 *
 * @ORM\Table(name="mount_flying_condition", indexes={@ORM\Index(name="idx_69ea54ee4317f817", columns={"quest"})})
 * @ORM\Entity
 */
class MountFlyingCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mount_flying_condition_pk_seq", allocationSize=1, initialValue=1)
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
