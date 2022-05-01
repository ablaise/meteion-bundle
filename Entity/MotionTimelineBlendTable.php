<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MotionTimelineBlendTable.
 *
 * @ORM\Table(name="motion_timeline_blend_table")
 * @ORM\Entity
 */
class MotionTimelineBlendTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="motion_timeline_blend_table_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dest_blend_group", type="integer", nullable=true)
     */
    private $destBlendGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="src_blend_group", type="integer", nullable=true)
     */
    private $srcBlendGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blend_frame_pc", type="integer", nullable=true)
     */
    private $blendFramePc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blend_fram_type_a", type="integer", nullable=true)
     */
    private $blendFramTypeA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blend_fram_type_b", type="integer", nullable=true)
     */
    private $blendFramTypeB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blend_fram_type_c", type="integer", nullable=true)
     */
    private $blendFramTypeC;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDestBlendGroup(): ?int
    {
        return $this->destBlendGroup;
    }

    public function setDestBlendGroup(?int $destBlendGroup): self
    {
        $this->destBlendGroup = $destBlendGroup;

        return $this;
    }

    public function getSrcBlendGroup(): ?int
    {
        return $this->srcBlendGroup;
    }

    public function setSrcBlendGroup(?int $srcBlendGroup): self
    {
        $this->srcBlendGroup = $srcBlendGroup;

        return $this;
    }

    public function getBlendFramePc(): ?int
    {
        return $this->blendFramePc;
    }

    public function setBlendFramePc(?int $blendFramePc): self
    {
        $this->blendFramePc = $blendFramePc;

        return $this;
    }

    public function getBlendFramTypeA(): ?int
    {
        return $this->blendFramTypeA;
    }

    public function setBlendFramTypeA(?int $blendFramTypeA): self
    {
        $this->blendFramTypeA = $blendFramTypeA;

        return $this;
    }

    public function getBlendFramTypeB(): ?int
    {
        return $this->blendFramTypeB;
    }

    public function setBlendFramTypeB(?int $blendFramTypeB): self
    {
        $this->blendFramTypeB = $blendFramTypeB;

        return $this;
    }

    public function getBlendFramTypeC(): ?int
    {
        return $this->blendFramTypeC;
    }

    public function setBlendFramTypeC(?int $blendFramTypeC): self
    {
        $this->blendFramTypeC = $blendFramTypeC;

        return $this;
    }
}
