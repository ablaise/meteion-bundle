<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemActionTelepo.
 *
 * @ORM\Table(name="item_action_telepo", indexes={@ORM\Index(name="idx_93e1cbb645fbe444", columns={"deny_message"})})
 * @ORM\Entity
 */
class ItemActionTelepo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_action_telepo_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="requirement", type="integer", nullable=true)
     */
    private $requirement;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deny_message", referencedColumnName="pk")
     * })
     */
    private $denyMessage;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRequirement(): ?int
    {
        return $this->requirement;
    }

    public function setRequirement(?int $requirement): self
    {
        $this->requirement = $requirement;

        return $this;
    }

    public function getDenyMessage(): ?LogMessage
    {
        return $this->denyMessage;
    }

    public function setDenyMessage(?LogMessage $denyMessage): self
    {
        $this->denyMessage = $denyMessage;

        return $this;
    }
}
