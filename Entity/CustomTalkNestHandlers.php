<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomTalkNestHandlers.
 *
 * @ORM\Table(name="custom_talk_nest_handlers")
 * @ORM\Entity
 */
class CustomTalkNestHandlers
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="custom_talk_nest_handlers_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nest_handler", type="integer", nullable=true)
     */
    private $nestHandler;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getNestHandler(): ?int
    {
        return $this->nestHandler;
    }

    public function setNestHandler(?int $nestHandler): self
    {
        $this->nestHandler = $nestHandler;

        return $this;
    }
}
