<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResistanceWeaponAdjust.
 *
 * @ORM\Table(name="resistance_weapon_adjust", indexes={@ORM\Index(name="idx_e87ca63733d9016f", columns={"base_param_2"}), @ORM\Index(name="idx_e87ca63744de31f9", columns={"base_param_3"}), @ORM\Index(name="idx_e87ca637aad050d5", columns={"base_param_1"}), @ORM\Index(name="idx_e87ca637ddd76043", columns={"base_param_0"})})
 * @ORM\Entity
 */
class ResistanceWeaponAdjust
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resistance_weapon_adjust_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_total_stats", type="bigint", nullable=true)
     */
    private $maxTotalStats;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_each_stat", type="bigint", nullable=true)
     */
    private $maxEachStat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_3", referencedColumnName="pk")
     * })
     */
    private $baseParam3;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_2", referencedColumnName="pk")
     * })
     */
    private $baseParam2;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_1", referencedColumnName="pk")
     * })
     */
    private $baseParam1;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_0", referencedColumnName="pk")
     * })
     */
    private $baseParam0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMaxTotalStats(): ?string
    {
        return $this->maxTotalStats;
    }

    public function setMaxTotalStats(?string $maxTotalStats): self
    {
        $this->maxTotalStats = $maxTotalStats;

        return $this;
    }

    public function getMaxEachStat(): ?string
    {
        return $this->maxEachStat;
    }

    public function setMaxEachStat(?string $maxEachStat): self
    {
        $this->maxEachStat = $maxEachStat;

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

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getBaseParam3(): ?BaseParam
    {
        return $this->baseParam3;
    }

    public function setBaseParam3(?BaseParam $baseParam3): self
    {
        $this->baseParam3 = $baseParam3;

        return $this;
    }

    public function getBaseParam2(): ?BaseParam
    {
        return $this->baseParam2;
    }

    public function setBaseParam2(?BaseParam $baseParam2): self
    {
        $this->baseParam2 = $baseParam2;

        return $this;
    }

    public function getBaseParam1(): ?BaseParam
    {
        return $this->baseParam1;
    }

    public function setBaseParam1(?BaseParam $baseParam1): self
    {
        $this->baseParam1 = $baseParam1;

        return $this;
    }

    public function getBaseParam0(): ?BaseParam
    {
        return $this->baseParam0;
    }

    public function setBaseParam0(?BaseParam $baseParam0): self
    {
        $this->baseParam0 = $baseParam0;

        return $this;
    }
}
