<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneralAction.
 *
 * @ORM\Table(name="general_action", indexes={@ORM\Index(name="idx_d6e471d647cc8c92", columns={"action"})})
 * @ORM\Entity
 */
class GeneralAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="general_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=1419, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=1419, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unlock_link", type="bigint", nullable=true)
     */
    private $unlockLink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recast", type="integer", nullable=true)
     */
    private $recast;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uipriority", type="integer", nullable=true)
     */
    private $uipriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getUnlockLink(): ?string
    {
        return $this->unlockLink;
    }

    public function setUnlockLink(?string $unlockLink): self
    {
        $this->unlockLink = $unlockLink;

        return $this;
    }

    public function getRecast(): ?int
    {
        return $this->recast;
    }

    public function setRecast(?int $recast): self
    {
        $this->recast = $recast;

        return $this;
    }

    public function getUipriority(): ?int
    {
        return $this->uipriority;
    }

    public function setUipriority(?int $uipriority): self
    {
        $this->uipriority = $uipriority;

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

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }
}
