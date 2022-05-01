<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemAction.
 *
 * @ORM\Table(name="item_action")
 * @ORM\Entity
 */
class ItemAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cond_lv", type="integer", nullable=true)
     */
    private $condLv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cond_battle", type="boolean", nullable=true)
     */
    private $condBattle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cond_pvp", type="boolean", nullable=true)
     */
    private $condPvp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cond_pvponly", type="boolean", nullable=true)
     */
    private $condPvponly;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="bigint", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_0", type="bigint", nullable=true)
     */
    private $data0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_1", type="bigint", nullable=true)
     */
    private $data1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_2", type="bigint", nullable=true)
     */
    private $data2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_3", type="bigint", nullable=true)
     */
    private $data3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_4", type="bigint", nullable=true)
     */
    private $data4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_5", type="bigint", nullable=true)
     */
    private $data5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_6", type="bigint", nullable=true)
     */
    private $data6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_7", type="bigint", nullable=true)
     */
    private $data7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_8", type="bigint", nullable=true)
     */
    private $data8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_0", type="bigint", nullable=true)
     */
    private $dataHq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_1", type="bigint", nullable=true)
     */
    private $dataHq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_2", type="bigint", nullable=true)
     */
    private $dataHq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_3", type="bigint", nullable=true)
     */
    private $dataHq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_4", type="bigint", nullable=true)
     */
    private $dataHq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_5", type="bigint", nullable=true)
     */
    private $dataHq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_6", type="bigint", nullable=true)
     */
    private $dataHq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_7", type="bigint", nullable=true)
     */
    private $dataHq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_hq_8", type="bigint", nullable=true)
     */
    private $dataHq8;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCondLv(): ?int
    {
        return $this->condLv;
    }

    public function setCondLv(?int $condLv): self
    {
        $this->condLv = $condLv;

        return $this;
    }

    public function getCondBattle(): ?bool
    {
        return $this->condBattle;
    }

    public function setCondBattle(?bool $condBattle): self
    {
        $this->condBattle = $condBattle;

        return $this;
    }

    public function getCondPvp(): ?bool
    {
        return $this->condPvp;
    }

    public function setCondPvp(?bool $condPvp): self
    {
        $this->condPvp = $condPvp;

        return $this;
    }

    public function getCondPvponly(): ?bool
    {
        return $this->condPvponly;
    }

    public function setCondPvponly(?bool $condPvponly): self
    {
        $this->condPvponly = $condPvponly;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getData0(): ?string
    {
        return $this->data0;
    }

    public function setData0(?string $data0): self
    {
        $this->data0 = $data0;

        return $this;
    }

    public function getData1(): ?string
    {
        return $this->data1;
    }

    public function setData1(?string $data1): self
    {
        $this->data1 = $data1;

        return $this;
    }

    public function getData2(): ?string
    {
        return $this->data2;
    }

    public function setData2(?string $data2): self
    {
        $this->data2 = $data2;

        return $this;
    }

    public function getData3(): ?string
    {
        return $this->data3;
    }

    public function setData3(?string $data3): self
    {
        $this->data3 = $data3;

        return $this;
    }

    public function getData4(): ?string
    {
        return $this->data4;
    }

    public function setData4(?string $data4): self
    {
        $this->data4 = $data4;

        return $this;
    }

    public function getData5(): ?string
    {
        return $this->data5;
    }

    public function setData5(?string $data5): self
    {
        $this->data5 = $data5;

        return $this;
    }

    public function getData6(): ?string
    {
        return $this->data6;
    }

    public function setData6(?string $data6): self
    {
        $this->data6 = $data6;

        return $this;
    }

    public function getData7(): ?string
    {
        return $this->data7;
    }

    public function setData7(?string $data7): self
    {
        $this->data7 = $data7;

        return $this;
    }

    public function getData8(): ?string
    {
        return $this->data8;
    }

    public function setData8(?string $data8): self
    {
        $this->data8 = $data8;

        return $this;
    }

    public function getDataHq0(): ?string
    {
        return $this->dataHq0;
    }

    public function setDataHq0(?string $dataHq0): self
    {
        $this->dataHq0 = $dataHq0;

        return $this;
    }

    public function getDataHq1(): ?string
    {
        return $this->dataHq1;
    }

    public function setDataHq1(?string $dataHq1): self
    {
        $this->dataHq1 = $dataHq1;

        return $this;
    }

    public function getDataHq2(): ?string
    {
        return $this->dataHq2;
    }

    public function setDataHq2(?string $dataHq2): self
    {
        $this->dataHq2 = $dataHq2;

        return $this;
    }

    public function getDataHq3(): ?string
    {
        return $this->dataHq3;
    }

    public function setDataHq3(?string $dataHq3): self
    {
        $this->dataHq3 = $dataHq3;

        return $this;
    }

    public function getDataHq4(): ?string
    {
        return $this->dataHq4;
    }

    public function setDataHq4(?string $dataHq4): self
    {
        $this->dataHq4 = $dataHq4;

        return $this;
    }

    public function getDataHq5(): ?string
    {
        return $this->dataHq5;
    }

    public function setDataHq5(?string $dataHq5): self
    {
        $this->dataHq5 = $dataHq5;

        return $this;
    }

    public function getDataHq6(): ?string
    {
        return $this->dataHq6;
    }

    public function setDataHq6(?string $dataHq6): self
    {
        $this->dataHq6 = $dataHq6;

        return $this;
    }

    public function getDataHq7(): ?string
    {
        return $this->dataHq7;
    }

    public function setDataHq7(?string $dataHq7): self
    {
        $this->dataHq7 = $dataHq7;

        return $this;
    }

    public function getDataHq8(): ?string
    {
        return $this->dataHq8;
    }

    public function setDataHq8(?string $dataHq8): self
    {
        $this->dataHq8 = $dataHq8;

        return $this;
    }
}
