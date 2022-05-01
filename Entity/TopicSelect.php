<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TopicSelect.
 *
 * @ORM\Table(name="topic_select")
 * @ORM\Entity
 */
class TopicSelect
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="topic_select_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_0", type="integer", nullable=true)
     */
    private $shop0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_1", type="integer", nullable=true)
     */
    private $shop1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_2", type="integer", nullable=true)
     */
    private $shop2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_3", type="integer", nullable=true)
     */
    private $shop3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_4", type="integer", nullable=true)
     */
    private $shop4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_5", type="integer", nullable=true)
     */
    private $shop5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_6", type="integer", nullable=true)
     */
    private $shop6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_7", type="integer", nullable=true)
     */
    private $shop7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_8", type="integer", nullable=true)
     */
    private $shop8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shop_9", type="integer", nullable=true)
     */
    private $shop9;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

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

    public function getShop0(): ?int
    {
        return $this->shop0;
    }

    public function setShop0(?int $shop0): self
    {
        $this->shop0 = $shop0;

        return $this;
    }

    public function getShop1(): ?int
    {
        return $this->shop1;
    }

    public function setShop1(?int $shop1): self
    {
        $this->shop1 = $shop1;

        return $this;
    }

    public function getShop2(): ?int
    {
        return $this->shop2;
    }

    public function setShop2(?int $shop2): self
    {
        $this->shop2 = $shop2;

        return $this;
    }

    public function getShop3(): ?int
    {
        return $this->shop3;
    }

    public function setShop3(?int $shop3): self
    {
        $this->shop3 = $shop3;

        return $this;
    }

    public function getShop4(): ?int
    {
        return $this->shop4;
    }

    public function setShop4(?int $shop4): self
    {
        $this->shop4 = $shop4;

        return $this;
    }

    public function getShop5(): ?int
    {
        return $this->shop5;
    }

    public function setShop5(?int $shop5): self
    {
        $this->shop5 = $shop5;

        return $this;
    }

    public function getShop6(): ?int
    {
        return $this->shop6;
    }

    public function setShop6(?int $shop6): self
    {
        $this->shop6 = $shop6;

        return $this;
    }

    public function getShop7(): ?int
    {
        return $this->shop7;
    }

    public function setShop7(?int $shop7): self
    {
        $this->shop7 = $shop7;

        return $this;
    }

    public function getShop8(): ?int
    {
        return $this->shop8;
    }

    public function setShop8(?int $shop8): self
    {
        $this->shop8 = $shop8;

        return $this;
    }

    public function getShop9(): ?int
    {
        return $this->shop9;
    }

    public function setShop9(?int $shop9): self
    {
        $this->shop9 = $shop9;

        return $this;
    }
}
