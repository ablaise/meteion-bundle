<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ykw.
 *
 * @ORM\Table(name="ykw", indexes={@ORM\Index(name="idx_ec09dc3e1f1b251e", columns={"item"}), @ORM\Index(name="idx_ec09dc3e7f4059ed", columns={"location_3"}), @ORM\Index(name="idx_ec09dc3e847697b", columns={"location_2"}), @ORM\Index(name="idx_ec09dc3ee6490857", columns={"location_0"}), @ORM\Index(name="idx_ec09dc3e914e38c1", columns={"location_1"}), @ORM\Index(name="idx_ec09dc3ee124cc4e", columns={"location_4"}), @ORM\Index(name="idx_ec09dc3e9623fcd8", columns={"location_5"})})
 * @ORM\Entity
 */
class Ykw
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ykw_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_9", type="string", length=255, nullable=true)
     */
    private $column9;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_5", referencedColumnName="pk")
     * })
     */
    private $location5;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_4", referencedColumnName="pk")
     * })
     */
    private $location4;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_3", referencedColumnName="pk")
     * })
     */
    private $location3;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_2", referencedColumnName="pk")
     * })
     */
    private $location2;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_1", referencedColumnName="pk")
     * })
     */
    private $location1;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_0", referencedColumnName="pk")
     * })
     */
    private $location0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

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

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getLocation5(): ?TerritoryType
    {
        return $this->location5;
    }

    public function setLocation5(?TerritoryType $location5): self
    {
        $this->location5 = $location5;

        return $this;
    }

    public function getLocation4(): ?TerritoryType
    {
        return $this->location4;
    }

    public function setLocation4(?TerritoryType $location4): self
    {
        $this->location4 = $location4;

        return $this;
    }

    public function getLocation3(): ?TerritoryType
    {
        return $this->location3;
    }

    public function setLocation3(?TerritoryType $location3): self
    {
        $this->location3 = $location3;

        return $this;
    }

    public function getLocation2(): ?TerritoryType
    {
        return $this->location2;
    }

    public function setLocation2(?TerritoryType $location2): self
    {
        $this->location2 = $location2;

        return $this;
    }

    public function getLocation1(): ?TerritoryType
    {
        return $this->location1;
    }

    public function setLocation1(?TerritoryType $location1): self
    {
        $this->location1 = $location1;

        return $this;
    }

    public function getLocation0(): ?TerritoryType
    {
        return $this->location0;
    }

    public function setLocation0(?TerritoryType $location0): self
    {
        $this->location0 = $location0;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
