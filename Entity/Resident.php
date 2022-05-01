<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resident.
 *
 * @ORM\Table(name="resident", indexes={@ORM\Index(name="idx_1d03da06ad6f7720", columns={"npc_yell"}), @ORM\Index(name="idx_1d03da06d1276a", columns={"resident_motion_type"})})
 * @ORM\Entity
 */
class Resident
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resident_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var ResidentMotionType
     *
     * @ORM\ManyToOne(targetEntity="ResidentMotionType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resident_motion_type", referencedColumnName="pk")
     * })
     */
    private $residentMotionType;

    /**
     * @var NpcYell
     *
     * @ORM\ManyToOne(targetEntity="NpcYell")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc_yell", referencedColumnName="pk")
     * })
     */
    private $npcYell;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getResidentMotionType(): ?ResidentMotionType
    {
        return $this->residentMotionType;
    }

    public function setResidentMotionType(?ResidentMotionType $residentMotionType): self
    {
        $this->residentMotionType = $residentMotionType;

        return $this;
    }

    public function getNpcYell(): ?NpcYell
    {
        return $this->npcYell;
    }

    public function setNpcYell(?NpcYell $npcYell): self
    {
        $this->npcYell = $npcYell;

        return $this;
    }
}
