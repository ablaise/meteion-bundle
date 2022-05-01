<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementCategory.
 *
 * @ORM\Table(name="achievement_category", indexes={@ORM\Index(name="idx_cace37ac5145fe70", columns={"achievement_kind"})})
 * @ORM\Entity
 */
class AchievementCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="achievement_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_complete", type="boolean", nullable=true)
     */
    private $showComplete;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_category", type="boolean", nullable=true)
     */
    private $hideCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var AchievementKind
     *
     * @ORM\ManyToOne(targetEntity="AchievementKind")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_kind", referencedColumnName="pk")
     * })
     */
    private $achievementKind;

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

    public function getShowComplete(): ?bool
    {
        return $this->showComplete;
    }

    public function setShowComplete(?bool $showComplete): self
    {
        $this->showComplete = $showComplete;

        return $this;
    }

    public function getHideCategory(): ?bool
    {
        return $this->hideCategory;
    }

    public function setHideCategory(?bool $hideCategory): self
    {
        $this->hideCategory = $hideCategory;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getAchievementKind(): ?AchievementKind
    {
        return $this->achievementKind;
    }

    public function setAchievementKind(?AchievementKind $achievementKind): self
    {
        $this->achievementKind = $achievementKind;

        return $this;
    }
}
