<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FateProgressUi.
 *
 * @ORM\Table(name="fate_progress_ui", indexes={@ORM\Index(name="idx_63c4b69696737ff1", columns={"achievement"}), @ORM\Index(name="idx_63c4b6965e9e89cb", columns={"location"})})
 * @ORM\Entity
 */
class FateProgressUi
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_progress_ui_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="req_fates_to_rank2", type="integer", nullable=true)
     */
    private $reqFatesToRank2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="req_fates_to_rank3", type="integer", nullable=true)
     */
    private $reqFatesToRank3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement", referencedColumnName="pk")
     * })
     */
    private $achievement;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="pk")
     * })
     */
    private $location;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getReqFatesToRank2(): ?int
    {
        return $this->reqFatesToRank2;
    }

    public function setReqFatesToRank2(?int $reqFatesToRank2): self
    {
        $this->reqFatesToRank2 = $reqFatesToRank2;

        return $this;
    }

    public function getReqFatesToRank3(): ?int
    {
        return $this->reqFatesToRank3;
    }

    public function setReqFatesToRank3(?int $reqFatesToRank3): self
    {
        $this->reqFatesToRank3 = $reqFatesToRank3;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(?int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getAchievement(): ?Achievement
    {
        return $this->achievement;
    }

    public function setAchievement(?Achievement $achievement): self
    {
        $this->achievement = $achievement;

        return $this;
    }

    public function getLocation(): ?TerritoryType
    {
        return $this->location;
    }

    public function setLocation(?TerritoryType $location): self
    {
        $this->location = $location;

        return $this;
    }
}
