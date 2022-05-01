<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Balloon.
 *
 * @ORM\Table(name="balloon")
 * @ORM\Entity
 */
class Balloon
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="balloon_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="slowly", type="boolean", nullable=true)
     */
    private $slowly;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dialogue", type="string", length=438, nullable=true)
     */
    private $dialogue;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSlowly(): ?bool
    {
        return $this->slowly;
    }

    public function setSlowly(?bool $slowly): self
    {
        $this->slowly = $slowly;

        return $this;
    }

    public function getDialogue(): ?string
    {
        return $this->dialogue;
    }

    public function setDialogue(?string $dialogue): self
    {
        $this->dialogue = $dialogue;

        return $this;
    }
}
