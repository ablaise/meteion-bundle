<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GilShop.
 *
 * @ORM\Table(name="gil_shop", indexes={@ORM\Index(name="idx_e9797b78b00ad80f", columns={"fail_talk"}), @ORM\Index(name="idx_e9797b784317f817", columns={"quest"}), @ORM\Index(name="idx_e9797b7845109998", columns={"accept_talk"})})
 * @ORM\Entity
 */
class GilShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gil_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fail_talk", referencedColumnName="pk")
     * })
     */
    private $failTalk;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accept_talk", referencedColumnName="pk")
     * })
     */
    private $acceptTalk;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getFailTalk(): ?DefaultTalk
    {
        return $this->failTalk;
    }

    public function setFailTalk(?DefaultTalk $failTalk): self
    {
        $this->failTalk = $failTalk;

        return $this;
    }

    public function getAcceptTalk(): ?DefaultTalk
    {
        return $this->acceptTalk;
    }

    public function setAcceptTalk(?DefaultTalk $acceptTalk): self
    {
        $this->acceptTalk = $acceptTalk;

        return $this;
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
