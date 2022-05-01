<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventIconPriority.
 *
 * @ORM\Table(name="event_icon_priority")
 * @ORM\Entity
 */
class EventIconPriority
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_icon_priority_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_0", type="integer", nullable=true)
     */
    private $icon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_1", type="integer", nullable=true)
     */
    private $icon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_2", type="integer", nullable=true)
     */
    private $icon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_3", type="integer", nullable=true)
     */
    private $icon3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_4", type="integer", nullable=true)
     */
    private $icon4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_5", type="integer", nullable=true)
     */
    private $icon5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_6", type="integer", nullable=true)
     */
    private $icon6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_7", type="integer", nullable=true)
     */
    private $icon7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_8", type="integer", nullable=true)
     */
    private $icon8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_9", type="integer", nullable=true)
     */
    private $icon9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_10", type="integer", nullable=true)
     */
    private $icon10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_11", type="integer", nullable=true)
     */
    private $icon11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_12", type="integer", nullable=true)
     */
    private $icon12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_13", type="integer", nullable=true)
     */
    private $icon13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_14", type="integer", nullable=true)
     */
    private $icon14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_15", type="integer", nullable=true)
     */
    private $icon15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_16", type="integer", nullable=true)
     */
    private $icon16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_17", type="integer", nullable=true)
     */
    private $icon17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_18", type="integer", nullable=true)
     */
    private $icon18;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon0(): ?int
    {
        return $this->icon0;
    }

    public function setIcon0(?int $icon0): self
    {
        $this->icon0 = $icon0;

        return $this;
    }

    public function getIcon1(): ?int
    {
        return $this->icon1;
    }

    public function setIcon1(?int $icon1): self
    {
        $this->icon1 = $icon1;

        return $this;
    }

    public function getIcon2(): ?int
    {
        return $this->icon2;
    }

    public function setIcon2(?int $icon2): self
    {
        $this->icon2 = $icon2;

        return $this;
    }

    public function getIcon3(): ?int
    {
        return $this->icon3;
    }

    public function setIcon3(?int $icon3): self
    {
        $this->icon3 = $icon3;

        return $this;
    }

    public function getIcon4(): ?int
    {
        return $this->icon4;
    }

    public function setIcon4(?int $icon4): self
    {
        $this->icon4 = $icon4;

        return $this;
    }

    public function getIcon5(): ?int
    {
        return $this->icon5;
    }

    public function setIcon5(?int $icon5): self
    {
        $this->icon5 = $icon5;

        return $this;
    }

    public function getIcon6(): ?int
    {
        return $this->icon6;
    }

    public function setIcon6(?int $icon6): self
    {
        $this->icon6 = $icon6;

        return $this;
    }

    public function getIcon7(): ?int
    {
        return $this->icon7;
    }

    public function setIcon7(?int $icon7): self
    {
        $this->icon7 = $icon7;

        return $this;
    }

    public function getIcon8(): ?int
    {
        return $this->icon8;
    }

    public function setIcon8(?int $icon8): self
    {
        $this->icon8 = $icon8;

        return $this;
    }

    public function getIcon9(): ?int
    {
        return $this->icon9;
    }

    public function setIcon9(?int $icon9): self
    {
        $this->icon9 = $icon9;

        return $this;
    }

    public function getIcon10(): ?int
    {
        return $this->icon10;
    }

    public function setIcon10(?int $icon10): self
    {
        $this->icon10 = $icon10;

        return $this;
    }

    public function getIcon11(): ?int
    {
        return $this->icon11;
    }

    public function setIcon11(?int $icon11): self
    {
        $this->icon11 = $icon11;

        return $this;
    }

    public function getIcon12(): ?int
    {
        return $this->icon12;
    }

    public function setIcon12(?int $icon12): self
    {
        $this->icon12 = $icon12;

        return $this;
    }

    public function getIcon13(): ?int
    {
        return $this->icon13;
    }

    public function setIcon13(?int $icon13): self
    {
        $this->icon13 = $icon13;

        return $this;
    }

    public function getIcon14(): ?int
    {
        return $this->icon14;
    }

    public function setIcon14(?int $icon14): self
    {
        $this->icon14 = $icon14;

        return $this;
    }

    public function getIcon15(): ?int
    {
        return $this->icon15;
    }

    public function setIcon15(?int $icon15): self
    {
        $this->icon15 = $icon15;

        return $this;
    }

    public function getIcon16(): ?int
    {
        return $this->icon16;
    }

    public function setIcon16(?int $icon16): self
    {
        $this->icon16 = $icon16;

        return $this;
    }

    public function getIcon17(): ?int
    {
        return $this->icon17;
    }

    public function setIcon17(?int $icon17): self
    {
        $this->icon17 = $icon17;

        return $this;
    }

    public function getIcon18(): ?int
    {
        return $this->icon18;
    }

    public function setIcon18(?int $icon18): self
    {
        $this->icon18 = $icon18;

        return $this;
    }
}
