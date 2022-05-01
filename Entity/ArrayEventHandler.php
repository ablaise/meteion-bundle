<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArrayEventHandler.
 *
 * @ORM\Table(name="array_event_handler")
 * @ORM\Entity
 */
class ArrayEventHandler
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="array_event_handler_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_0", type="integer", nullable=true)
     */
    private $data0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_1", type="integer", nullable=true)
     */
    private $data1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_2", type="integer", nullable=true)
     */
    private $data2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_3", type="integer", nullable=true)
     */
    private $data3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_4", type="integer", nullable=true)
     */
    private $data4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_5", type="integer", nullable=true)
     */
    private $data5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_6", type="integer", nullable=true)
     */
    private $data6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_7", type="integer", nullable=true)
     */
    private $data7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_8", type="integer", nullable=true)
     */
    private $data8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_9", type="integer", nullable=true)
     */
    private $data9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_10", type="integer", nullable=true)
     */
    private $data10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_11", type="integer", nullable=true)
     */
    private $data11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_12", type="integer", nullable=true)
     */
    private $data12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_13", type="integer", nullable=true)
     */
    private $data13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_14", type="integer", nullable=true)
     */
    private $data14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_15", type="integer", nullable=true)
     */
    private $data15;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getData0(): ?int
    {
        return $this->data0;
    }

    public function setData0(?int $data0): self
    {
        $this->data0 = $data0;

        return $this;
    }

    public function getData1(): ?int
    {
        return $this->data1;
    }

    public function setData1(?int $data1): self
    {
        $this->data1 = $data1;

        return $this;
    }

    public function getData2(): ?int
    {
        return $this->data2;
    }

    public function setData2(?int $data2): self
    {
        $this->data2 = $data2;

        return $this;
    }

    public function getData3(): ?int
    {
        return $this->data3;
    }

    public function setData3(?int $data3): self
    {
        $this->data3 = $data3;

        return $this;
    }

    public function getData4(): ?int
    {
        return $this->data4;
    }

    public function setData4(?int $data4): self
    {
        $this->data4 = $data4;

        return $this;
    }

    public function getData5(): ?int
    {
        return $this->data5;
    }

    public function setData5(?int $data5): self
    {
        $this->data5 = $data5;

        return $this;
    }

    public function getData6(): ?int
    {
        return $this->data6;
    }

    public function setData6(?int $data6): self
    {
        $this->data6 = $data6;

        return $this;
    }

    public function getData7(): ?int
    {
        return $this->data7;
    }

    public function setData7(?int $data7): self
    {
        $this->data7 = $data7;

        return $this;
    }

    public function getData8(): ?int
    {
        return $this->data8;
    }

    public function setData8(?int $data8): self
    {
        $this->data8 = $data8;

        return $this;
    }

    public function getData9(): ?int
    {
        return $this->data9;
    }

    public function setData9(?int $data9): self
    {
        $this->data9 = $data9;

        return $this;
    }

    public function getData10(): ?int
    {
        return $this->data10;
    }

    public function setData10(?int $data10): self
    {
        $this->data10 = $data10;

        return $this;
    }

    public function getData11(): ?int
    {
        return $this->data11;
    }

    public function setData11(?int $data11): self
    {
        $this->data11 = $data11;

        return $this;
    }

    public function getData12(): ?int
    {
        return $this->data12;
    }

    public function setData12(?int $data12): self
    {
        $this->data12 = $data12;

        return $this;
    }

    public function getData13(): ?int
    {
        return $this->data13;
    }

    public function setData13(?int $data13): self
    {
        $this->data13 = $data13;

        return $this;
    }

    public function getData14(): ?int
    {
        return $this->data14;
    }

    public function setData14(?int $data14): self
    {
        $this->data14 = $data14;

        return $this;
    }

    public function getData15(): ?int
    {
        return $this->data15;
    }

    public function setData15(?int $data15): self
    {
        $this->data15 = $data15;

        return $this;
    }
}
