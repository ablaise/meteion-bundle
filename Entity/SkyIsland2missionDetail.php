<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkyIsland2missionDetail.
 *
 * @ORM\Table(name="sky_island2mission_detail", indexes={@ORM\Index(name="idx_d9f8320593875a49", columns={"range"}), @ORM\Index(name="idx_d9f832058cde5729", columns={"type"}), @ORM\Index(name="idx_d9f83205949bd553", columns={"eobj"})})
 * @ORM\Entity
 */
class SkyIsland2missionDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sky_island2mission_detail_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="string", length=255, nullable=true)
     */
    private $objective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_9", type="string", length=255, nullable=true)
     */
    private $column9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_10", type="string", length=255, nullable=true)
     */
    private $column10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_11", type="string", length=255, nullable=true)
     */
    private $column11;

    /**
     * @var EobjName
     *
     * @ORM\ManyToOne(targetEntity="EobjName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eobj", referencedColumnName="pk")
     * })
     */
    private $eobj;

    /**
     * @var SkyIsland2rangeType
     *
     * @ORM\ManyToOne(targetEntity="SkyIsland2rangeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="range", referencedColumnName="pk")
     * })
     */
    private $range;

    /**
     * @var SkyIsland2missionType
     *
     * @ORM\ManyToOne(targetEntity="SkyIsland2missionType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="pk")
     * })
     */
    private $type;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

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

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getEobj(): ?EobjName
    {
        return $this->eobj;
    }

    public function setEobj(?EobjName $eobj): self
    {
        $this->eobj = $eobj;

        return $this;
    }

    public function getRange(): ?SkyIsland2rangeType
    {
        return $this->range;
    }

    public function setRange(?SkyIsland2rangeType $range): self
    {
        $this->range = $range;

        return $this;
    }

    public function getType(): ?SkyIsland2missionType
    {
        return $this->type;
    }

    public function setType(?SkyIsland2missionType $type): self
    {
        $this->type = $type;

        return $this;
    }
}
