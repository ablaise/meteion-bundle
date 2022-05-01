<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeveString.
 *
 * @ORM\Table(name="leve_string")
 * @ORM\Entity
 */
class LeveString
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="leve_string_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="string", length=255, nullable=true)
     */
    private $objective;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }
}
