<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GimmickRect.
 *
 * @ORM\Table(name="gimmick_rect")
 * @ORM\Entity
 */
class GimmickRect
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gimmick_rect_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="layout_id", type="bigint", nullable=true)
     */
    private $layoutId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trigger_in", type="integer", nullable=true)
     */
    private $triggerIn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param0", type="bigint", nullable=true)
     */
    private $param0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trigger_out", type="integer", nullable=true)
     */
    private $triggerOut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param1", type="bigint", nullable=true)
     */
    private $param1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLayoutId(): ?string
    {
        return $this->layoutId;
    }

    public function setLayoutId(?string $layoutId): self
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    public function getTriggerIn(): ?int
    {
        return $this->triggerIn;
    }

    public function setTriggerIn(?int $triggerIn): self
    {
        $this->triggerIn = $triggerIn;

        return $this;
    }

    public function getParam0(): ?string
    {
        return $this->param0;
    }

    public function setParam0(?string $param0): self
    {
        $this->param0 = $param0;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

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

    public function getTriggerOut(): ?int
    {
        return $this->triggerOut;
    }

    public function setTriggerOut(?int $triggerOut): self
    {
        $this->triggerOut = $triggerOut;

        return $this;
    }

    public function getParam1(): ?string
    {
        return $this->param1;
    }

    public function setParam1(?string $param1): self
    {
        $this->param1 = $param1;

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
}
