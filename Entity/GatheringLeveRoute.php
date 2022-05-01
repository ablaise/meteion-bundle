<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringLeveRoute.
 *
 * @ORM\Table(name="gathering_leve_route", indexes={@ORM\Index(name="idx_f1be0bf1e1d253a5", columns={"pop_range_11"}), @ORM\Index(name="idx_f1be0bf1397cd3d1", columns={"gathering_point_7"}), @ORM\Index(name="idx_f1be0bf1a7184672", columns={"gathering_point_0"}), @ORM\Index(name="idx_f1be0bf1dec4fed6", columns={"gathering_point_9"}), @ORM\Index(name="idx_f1be0bf13dafac70", columns={"pop_range_3"}), @ORM\Index(name="idx_f1be0bf1a9c3ce40", columns={"gathering_point_8"}), @ORM\Index(name="idx_f1be0bf13ac26869", columns={"pop_range_7"}), @ORM\Index(name="idx_f1be0bf1246bd6a0", columns={"gathering_point_11"}), @ORM\Index(name="idx_f1be0bf1d3a1cd5c", columns={"pop_range_1"}), @ORM\Index(name="idx_f1be0bf1aa7d75f8", columns={"pop_range_8"}), @ORM\Index(name="idx_f1be0bf1536ce636", columns={"gathering_point_10"}), @ORM\Index(name="idx_f1be0bf196d56333", columns={"pop_range_10"}), @ORM\Index(name="idx_f1be0bf1a4a6fdca", columns={"pop_range_0"}), @ORM\Index(name="idx_f1be0bf14dc558ff", columns={"pop_range_6"}), @ORM\Index(name="idx_f1be0bf1a075826b", columns={"gathering_point_4"}), @ORM\Index(name="idx_f1be0bf1d772b2fd", columns={"gathering_point_5"}), @ORM\Index(name="idx_f1be0bf1d4cc0945", columns={"pop_range_5"}), @ORM\Index(name="idx_f1be0bf14aa89ce6", columns={"pop_range_2"}), @ORM\Index(name="idx_f1be0bf14e7be347", columns={"gathering_point_6"}), @ORM\Index(name="idx_f1be0bf13e1117c8", columns={"gathering_point_3"}), @ORM\Index(name="idx_f1be0bf14916275e", columns={"gathering_point_2"}), @ORM\Index(name="idx_f1be0bf1dd7a456e", columns={"pop_range_9"}), @ORM\Index(name="idx_f1be0bf1a3cb39d3", columns={"pop_range_4"}), @ORM\Index(name="idx_f1be0bf1d01f76e4", columns={"gathering_point_1"})})
 * @ORM\Entity
 */
class GatheringLeveRoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_leve_route_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_11", referencedColumnName="pk")
     * })
     */
    private $popRange11;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_11", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint11;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_10", referencedColumnName="pk")
     * })
     */
    private $popRange10;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_10", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint10;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_9", referencedColumnName="pk")
     * })
     */
    private $popRange9;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_9", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint9;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_8", referencedColumnName="pk")
     * })
     */
    private $popRange8;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_8", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint8;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_7", referencedColumnName="pk")
     * })
     */
    private $popRange7;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_7", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint7;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_6", referencedColumnName="pk")
     * })
     */
    private $popRange6;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_6", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint6;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_5", referencedColumnName="pk")
     * })
     */
    private $popRange5;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_5", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint5;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_4", referencedColumnName="pk")
     * })
     */
    private $popRange4;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_4", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint4;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_3", referencedColumnName="pk")
     * })
     */
    private $popRange3;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_3", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_2", referencedColumnName="pk")
     * })
     */
    private $popRange2;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_2", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_1", referencedColumnName="pk")
     * })
     */
    private $popRange1;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_1", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint1;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pop_range_0", referencedColumnName="pk")
     * })
     */
    private $popRange0;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_0", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPopRange11(): ?Level
    {
        return $this->popRange11;
    }

    public function setPopRange11(?Level $popRange11): self
    {
        $this->popRange11 = $popRange11;

        return $this;
    }

    public function getGatheringPoint11(): ?GatheringPoint
    {
        return $this->gatheringPoint11;
    }

    public function setGatheringPoint11(?GatheringPoint $gatheringPoint11): self
    {
        $this->gatheringPoint11 = $gatheringPoint11;

        return $this;
    }

    public function getPopRange10(): ?Level
    {
        return $this->popRange10;
    }

    public function setPopRange10(?Level $popRange10): self
    {
        $this->popRange10 = $popRange10;

        return $this;
    }

    public function getGatheringPoint10(): ?GatheringPoint
    {
        return $this->gatheringPoint10;
    }

    public function setGatheringPoint10(?GatheringPoint $gatheringPoint10): self
    {
        $this->gatheringPoint10 = $gatheringPoint10;

        return $this;
    }

    public function getPopRange9(): ?Level
    {
        return $this->popRange9;
    }

    public function setPopRange9(?Level $popRange9): self
    {
        $this->popRange9 = $popRange9;

        return $this;
    }

    public function getGatheringPoint9(): ?GatheringPoint
    {
        return $this->gatheringPoint9;
    }

    public function setGatheringPoint9(?GatheringPoint $gatheringPoint9): self
    {
        $this->gatheringPoint9 = $gatheringPoint9;

        return $this;
    }

    public function getPopRange8(): ?Level
    {
        return $this->popRange8;
    }

    public function setPopRange8(?Level $popRange8): self
    {
        $this->popRange8 = $popRange8;

        return $this;
    }

    public function getGatheringPoint8(): ?GatheringPoint
    {
        return $this->gatheringPoint8;
    }

    public function setGatheringPoint8(?GatheringPoint $gatheringPoint8): self
    {
        $this->gatheringPoint8 = $gatheringPoint8;

        return $this;
    }

    public function getPopRange7(): ?Level
    {
        return $this->popRange7;
    }

    public function setPopRange7(?Level $popRange7): self
    {
        $this->popRange7 = $popRange7;

        return $this;
    }

    public function getGatheringPoint7(): ?GatheringPoint
    {
        return $this->gatheringPoint7;
    }

    public function setGatheringPoint7(?GatheringPoint $gatheringPoint7): self
    {
        $this->gatheringPoint7 = $gatheringPoint7;

        return $this;
    }

    public function getPopRange6(): ?Level
    {
        return $this->popRange6;
    }

    public function setPopRange6(?Level $popRange6): self
    {
        $this->popRange6 = $popRange6;

        return $this;
    }

    public function getGatheringPoint6(): ?GatheringPoint
    {
        return $this->gatheringPoint6;
    }

    public function setGatheringPoint6(?GatheringPoint $gatheringPoint6): self
    {
        $this->gatheringPoint6 = $gatheringPoint6;

        return $this;
    }

    public function getPopRange5(): ?Level
    {
        return $this->popRange5;
    }

    public function setPopRange5(?Level $popRange5): self
    {
        $this->popRange5 = $popRange5;

        return $this;
    }

    public function getGatheringPoint5(): ?GatheringPoint
    {
        return $this->gatheringPoint5;
    }

    public function setGatheringPoint5(?GatheringPoint $gatheringPoint5): self
    {
        $this->gatheringPoint5 = $gatheringPoint5;

        return $this;
    }

    public function getPopRange4(): ?Level
    {
        return $this->popRange4;
    }

    public function setPopRange4(?Level $popRange4): self
    {
        $this->popRange4 = $popRange4;

        return $this;
    }

    public function getGatheringPoint4(): ?GatheringPoint
    {
        return $this->gatheringPoint4;
    }

    public function setGatheringPoint4(?GatheringPoint $gatheringPoint4): self
    {
        $this->gatheringPoint4 = $gatheringPoint4;

        return $this;
    }

    public function getPopRange3(): ?Level
    {
        return $this->popRange3;
    }

    public function setPopRange3(?Level $popRange3): self
    {
        $this->popRange3 = $popRange3;

        return $this;
    }

    public function getGatheringPoint3(): ?GatheringPoint
    {
        return $this->gatheringPoint3;
    }

    public function setGatheringPoint3(?GatheringPoint $gatheringPoint3): self
    {
        $this->gatheringPoint3 = $gatheringPoint3;

        return $this;
    }

    public function getPopRange2(): ?Level
    {
        return $this->popRange2;
    }

    public function setPopRange2(?Level $popRange2): self
    {
        $this->popRange2 = $popRange2;

        return $this;
    }

    public function getGatheringPoint2(): ?GatheringPoint
    {
        return $this->gatheringPoint2;
    }

    public function setGatheringPoint2(?GatheringPoint $gatheringPoint2): self
    {
        $this->gatheringPoint2 = $gatheringPoint2;

        return $this;
    }

    public function getPopRange1(): ?Level
    {
        return $this->popRange1;
    }

    public function setPopRange1(?Level $popRange1): self
    {
        $this->popRange1 = $popRange1;

        return $this;
    }

    public function getGatheringPoint1(): ?GatheringPoint
    {
        return $this->gatheringPoint1;
    }

    public function setGatheringPoint1(?GatheringPoint $gatheringPoint1): self
    {
        $this->gatheringPoint1 = $gatheringPoint1;

        return $this;
    }

    public function getPopRange0(): ?Level
    {
        return $this->popRange0;
    }

    public function setPopRange0(?Level $popRange0): self
    {
        $this->popRange0 = $popRange0;

        return $this;
    }

    public function getGatheringPoint0(): ?GatheringPoint
    {
        return $this->gatheringPoint0;
    }

    public function setGatheringPoint0(?GatheringPoint $gatheringPoint0): self
    {
        $this->gatheringPoint0 = $gatheringPoint0;

        return $this;
    }
}
