<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TutorialHealer.
 *
 * @ORM\Table(name="tutorial_healer", indexes={@ORM\Index(name="idx_566aa174b996f101", columns={"objective"})})
 * @ORM\Entity
 */
class TutorialHealer
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tutorial_healer_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Tutorial
     *
     * @ORM\ManyToOne(targetEntity="Tutorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective", referencedColumnName="pk")
     * })
     */
    private $objective;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getObjective(): ?Tutorial
    {
        return $this->objective;
    }

    public function setObjective(?Tutorial $objective): self
    {
        $this->objective = $objective;

        return $this;
    }
}
