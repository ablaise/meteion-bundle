<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuickChat.
 *
 * @ORM\Table(name="quick_chat", indexes={@ORM\Index(name="idx_a9666797d185917f", columns={"addon"}), @ORM\Index(name="idx_a9666797320400d1", columns={"quick_chat_transient"})})
 * @ORM\Entity
 */
class QuickChat
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quick_chat_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_action", type="string", length=255, nullable=true)
     */
    private $nameAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var QuickChatTransient
     *
     * @ORM\ManyToOne(targetEntity="QuickChatTransient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quick_chat_transient", referencedColumnName="pk")
     * })
     */
    private $quickChatTransient;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addon", referencedColumnName="pk")
     * })
     */
    private $addon;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNameAction(): ?string
    {
        return $this->nameAction;
    }

    public function setNameAction(?string $nameAction): self
    {
        $this->nameAction = $nameAction;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getQuickChatTransient(): ?QuickChatTransient
    {
        return $this->quickChatTransient;
    }

    public function setQuickChatTransient(?QuickChatTransient $quickChatTransient): self
    {
        $this->quickChatTransient = $quickChatTransient;

        return $this;
    }

    public function getAddon(): ?Addon
    {
        return $this->addon;
    }

    public function setAddon(?Addon $addon): self
    {
        $this->addon = $addon;

        return $this;
    }
}
