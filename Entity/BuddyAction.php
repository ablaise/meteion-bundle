<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuddyAction.
 *
 * @ORM\Table(name="buddy_action")
 * @ORM\Entity
 */
class BuddyAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_status", type="integer", nullable=true)
     */
    private $iconStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward", type="bigint", nullable=true)
     */
    private $reward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort", type="integer", nullable=true)
     */
    private $sort;

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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIconStatus(): ?int
    {
        return $this->iconStatus;
    }

    public function setIconStatus(?int $iconStatus): self
    {
        $this->iconStatus = $iconStatus;

        return $this;
    }

    public function getReward(): ?string
    {
        return $this->reward;
    }

    public function setReward(?string $reward): self
    {
        $this->reward = $reward;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}
