<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHandler.
 *
 * @ORM\Table(name="pre_handler", indexes={@ORM\Index(name="idx_f310598822a72d51", columns={"unlock_quest"}), @ORM\Index(name="idx_f3105988f1ce3ca0", columns={"accept_message"}), @ORM\Index(name="idx_f310598845fbe444", columns={"deny_message"})})
 * @ORM\Entity
 */
class PreHandler
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pre_handler_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_1", type="string", length=255, nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target", type="integer", nullable=true)
     */
    private $target;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deny_message", referencedColumnName="pk")
     * })
     */
    private $denyMessage;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accept_message", referencedColumnName="pk")
     * })
     */
    private $acceptMessage;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unlock_quest", referencedColumnName="pk")
     * })
     */
    private $unlockQuest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTarget(): ?int
    {
        return $this->target;
    }

    public function setTarget(?int $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getDenyMessage(): ?DefaultTalk
    {
        return $this->denyMessage;
    }

    public function setDenyMessage(?DefaultTalk $denyMessage): self
    {
        $this->denyMessage = $denyMessage;

        return $this;
    }

    public function getAcceptMessage(): ?DefaultTalk
    {
        return $this->acceptMessage;
    }

    public function setAcceptMessage(?DefaultTalk $acceptMessage): self
    {
        $this->acceptMessage = $acceptMessage;

        return $this;
    }

    public function getUnlockQuest(): ?Quest
    {
        return $this->unlockQuest;
    }

    public function setUnlockQuest(?Quest $unlockQuest): self
    {
        $this->unlockQuest = $unlockQuest;

        return $this;
    }
}
