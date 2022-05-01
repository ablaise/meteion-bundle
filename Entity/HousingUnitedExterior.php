<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingUnitedExterior.
 *
 * @ORM\Table(name="housing_united_exterior", indexes={@ORM\Index(name="idx_a475d562b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_a475d5625c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_a475d562c566974b", columns={"item_0"}), @ORM\Index(name="idx_a475d5622b68f667", columns={"item_2"}), @ORM\Index(name="idx_a475d5622c05327e", columns={"item_6"}), @ORM\Index(name="idx_a475d5625b0202e8", columns={"item_7"}), @ORM\Index(name="idx_a475d562b50c63c4", columns={"item_5"}), @ORM\Index(name="idx_a475d562c20b5352", columns={"item_4"})})
 * @ORM\Entity
 */
class HousingUnitedExterior
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_united_exterior_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_7", referencedColumnName="pk")
     * })
     */
    private $item7;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_6", referencedColumnName="pk")
     * })
     */
    private $item6;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5", referencedColumnName="pk")
     * })
     */
    private $item5;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4", referencedColumnName="pk")
     * })
     */
    private $item4;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3", referencedColumnName="pk")
     * })
     */
    private $item3;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2", referencedColumnName="pk")
     * })
     */
    private $item2;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1", referencedColumnName="pk")
     * })
     */
    private $item1;

    /**
     * @var HousingExterior
     *
     * @ORM\ManyToOne(targetEntity="HousingExterior")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0", referencedColumnName="pk")
     * })
     */
    private $item0;

    public function getPk(): ?int
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

    public function getItem7(): ?HousingExterior
    {
        return $this->item7;
    }

    public function setItem7(?HousingExterior $item7): self
    {
        $this->item7 = $item7;

        return $this;
    }

    public function getItem6(): ?HousingExterior
    {
        return $this->item6;
    }

    public function setItem6(?HousingExterior $item6): self
    {
        $this->item6 = $item6;

        return $this;
    }

    public function getItem5(): ?HousingExterior
    {
        return $this->item5;
    }

    public function setItem5(?HousingExterior $item5): self
    {
        $this->item5 = $item5;

        return $this;
    }

    public function getItem4(): ?HousingExterior
    {
        return $this->item4;
    }

    public function setItem4(?HousingExterior $item4): self
    {
        $this->item4 = $item4;

        return $this;
    }

    public function getItem3(): ?HousingExterior
    {
        return $this->item3;
    }

    public function setItem3(?HousingExterior $item3): self
    {
        $this->item3 = $item3;

        return $this;
    }

    public function getItem2(): ?HousingExterior
    {
        return $this->item2;
    }

    public function setItem2(?HousingExterior $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem1(): ?HousingExterior
    {
        return $this->item1;
    }

    public function setItem1(?HousingExterior $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }

    public function getItem0(): ?HousingExterior
    {
        return $this->item0;
    }

    public function setItem0(?HousingExterior $item0): self
    {
        $this->item0 = $item0;

        return $this;
    }
}
