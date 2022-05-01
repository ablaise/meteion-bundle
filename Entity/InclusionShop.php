<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InclusionShop.
 *
 * @ORM\Table(name="inclusion_shop", indexes={@ORM\Index(name="idx_6ca0f699b4f1b4a", columns={"category_14"}), @ORM\Index(name="idx_6ca0f699b96b1933", columns={"category_27"}), @ORM\Index(name="idx_6ca0f6992f95761", columns={"category_18"}), @ORM\Index(name="idx_6ca0f699eca92b4b", columns={"category_0"}), @ORM\Index(name="idx_6ca0f69975fe67f7", columns={"category_19"}), @ORM\Index(name="idx_6ca0f6999cc3dfc4", columns={"category_5"}), @ORM\Index(name="idx_6ca0f69992464af0", columns={"category_17"}), @ORM\Index(name="idx_6ca0f6997b25efc5", columns={"category_11"}), @ORM\Index(name="idx_6ca0f69975a07af1", columns={"category_3"}), @ORM\Index(name="idx_6ca0f69929d404a2", columns={"category_28"}), @ORM\Index(name="idx_6ca0f6995008bc06", columns={"category_21"}), @ORM\Index(name="idx_6ca0f69972cdbee8", columns={"category_7"}), @ORM\Index(name="idx_6ca0f6995765781f", columns={"category_25"}), @ORM\Index(name="idx_6ca0f6997c482bdc", columns={"category_15"}), @ORM\Index(name="idx_6ca0f699c22df53", columns={"category_10"}), @ORM\Index(name="idx_6ca0f699e5417a66", columns={"category_16"}), @ORM\Index(name="idx_6ca0f699ce6c29a5", columns={"category_26"}), @ORM\Index(name="idx_6ca0f699270f8c90", columns={"category_20"}), @ORM\Index(name="idx_6ca0f69920624889", columns={"category_24"}), @ORM\Index(name="idx_6ca0f699be06dd2a", columns={"category_23"}), @ORM\Index(name="idx_6ca0f6995ca8e7e", columns={"category_6"}), @ORM\Index(name="idx_6ca0f699e272a379", columns={"category_8"}), @ORM\Index(name="idx_6ca0f699957593ef", columns={"category_9"}), @ORM\Index(name="idx_6ca0f699952b8ee9", columns={"category_13"}), @ORM\Index(name="idx_6ca0f6992a74a67", columns={"category_2"}), @ORM\Index(name="idx_6ca0f699e22cbe7f", columns={"category_12"}), @ORM\Index(name="idx_6ca0f6995ed33434", columns={"category_29"}), @ORM\Index(name="idx_6ca0f6999bae1bdd", columns={"category_1"}), @ORM\Index(name="idx_6ca0f699ebc4ef52", columns={"category_4"}), @ORM\Index(name="idx_6ca0f699c901edbc", columns={"category_22"})})
 * @ORM\Entity
 */
class InclusionShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inclusion_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_3", type="string", length=255, nullable=true)
     */
    private $column3;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_29", referencedColumnName="pk")
     * })
     */
    private $category29;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_28", referencedColumnName="pk")
     * })
     */
    private $category28;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_27", referencedColumnName="pk")
     * })
     */
    private $category27;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_26", referencedColumnName="pk")
     * })
     */
    private $category26;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_25", referencedColumnName="pk")
     * })
     */
    private $category25;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_24", referencedColumnName="pk")
     * })
     */
    private $category24;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_23", referencedColumnName="pk")
     * })
     */
    private $category23;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_22", referencedColumnName="pk")
     * })
     */
    private $category22;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_21", referencedColumnName="pk")
     * })
     */
    private $category21;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_20", referencedColumnName="pk")
     * })
     */
    private $category20;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_19", referencedColumnName="pk")
     * })
     */
    private $category19;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_18", referencedColumnName="pk")
     * })
     */
    private $category18;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_17", referencedColumnName="pk")
     * })
     */
    private $category17;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_16", referencedColumnName="pk")
     * })
     */
    private $category16;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_15", referencedColumnName="pk")
     * })
     */
    private $category15;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_14", referencedColumnName="pk")
     * })
     */
    private $category14;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_13", referencedColumnName="pk")
     * })
     */
    private $category13;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_12", referencedColumnName="pk")
     * })
     */
    private $category12;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_11", referencedColumnName="pk")
     * })
     */
    private $category11;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_10", referencedColumnName="pk")
     * })
     */
    private $category10;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_9", referencedColumnName="pk")
     * })
     */
    private $category9;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_8", referencedColumnName="pk")
     * })
     */
    private $category8;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_7", referencedColumnName="pk")
     * })
     */
    private $category7;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_6", referencedColumnName="pk")
     * })
     */
    private $category6;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_5", referencedColumnName="pk")
     * })
     */
    private $category5;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_4", referencedColumnName="pk")
     * })
     */
    private $category4;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_3", referencedColumnName="pk")
     * })
     */
    private $category3;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_2", referencedColumnName="pk")
     * })
     */
    private $category2;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_1", referencedColumnName="pk")
     * })
     */
    private $category1;

    /**
     * @var InclusionShopCategory
     *
     * @ORM\ManyToOne(targetEntity="InclusionShopCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_0", referencedColumnName="pk")
     * })
     */
    private $category0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
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

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getCategory29(): ?InclusionShopCategory
    {
        return $this->category29;
    }

    public function setCategory29(?InclusionShopCategory $category29): self
    {
        $this->category29 = $category29;

        return $this;
    }

    public function getCategory28(): ?InclusionShopCategory
    {
        return $this->category28;
    }

    public function setCategory28(?InclusionShopCategory $category28): self
    {
        $this->category28 = $category28;

        return $this;
    }

    public function getCategory27(): ?InclusionShopCategory
    {
        return $this->category27;
    }

    public function setCategory27(?InclusionShopCategory $category27): self
    {
        $this->category27 = $category27;

        return $this;
    }

    public function getCategory26(): ?InclusionShopCategory
    {
        return $this->category26;
    }

    public function setCategory26(?InclusionShopCategory $category26): self
    {
        $this->category26 = $category26;

        return $this;
    }

    public function getCategory25(): ?InclusionShopCategory
    {
        return $this->category25;
    }

    public function setCategory25(?InclusionShopCategory $category25): self
    {
        $this->category25 = $category25;

        return $this;
    }

    public function getCategory24(): ?InclusionShopCategory
    {
        return $this->category24;
    }

    public function setCategory24(?InclusionShopCategory $category24): self
    {
        $this->category24 = $category24;

        return $this;
    }

    public function getCategory23(): ?InclusionShopCategory
    {
        return $this->category23;
    }

    public function setCategory23(?InclusionShopCategory $category23): self
    {
        $this->category23 = $category23;

        return $this;
    }

    public function getCategory22(): ?InclusionShopCategory
    {
        return $this->category22;
    }

    public function setCategory22(?InclusionShopCategory $category22): self
    {
        $this->category22 = $category22;

        return $this;
    }

    public function getCategory21(): ?InclusionShopCategory
    {
        return $this->category21;
    }

    public function setCategory21(?InclusionShopCategory $category21): self
    {
        $this->category21 = $category21;

        return $this;
    }

    public function getCategory20(): ?InclusionShopCategory
    {
        return $this->category20;
    }

    public function setCategory20(?InclusionShopCategory $category20): self
    {
        $this->category20 = $category20;

        return $this;
    }

    public function getCategory19(): ?InclusionShopCategory
    {
        return $this->category19;
    }

    public function setCategory19(?InclusionShopCategory $category19): self
    {
        $this->category19 = $category19;

        return $this;
    }

    public function getCategory18(): ?InclusionShopCategory
    {
        return $this->category18;
    }

    public function setCategory18(?InclusionShopCategory $category18): self
    {
        $this->category18 = $category18;

        return $this;
    }

    public function getCategory17(): ?InclusionShopCategory
    {
        return $this->category17;
    }

    public function setCategory17(?InclusionShopCategory $category17): self
    {
        $this->category17 = $category17;

        return $this;
    }

    public function getCategory16(): ?InclusionShopCategory
    {
        return $this->category16;
    }

    public function setCategory16(?InclusionShopCategory $category16): self
    {
        $this->category16 = $category16;

        return $this;
    }

    public function getCategory15(): ?InclusionShopCategory
    {
        return $this->category15;
    }

    public function setCategory15(?InclusionShopCategory $category15): self
    {
        $this->category15 = $category15;

        return $this;
    }

    public function getCategory14(): ?InclusionShopCategory
    {
        return $this->category14;
    }

    public function setCategory14(?InclusionShopCategory $category14): self
    {
        $this->category14 = $category14;

        return $this;
    }

    public function getCategory13(): ?InclusionShopCategory
    {
        return $this->category13;
    }

    public function setCategory13(?InclusionShopCategory $category13): self
    {
        $this->category13 = $category13;

        return $this;
    }

    public function getCategory12(): ?InclusionShopCategory
    {
        return $this->category12;
    }

    public function setCategory12(?InclusionShopCategory $category12): self
    {
        $this->category12 = $category12;

        return $this;
    }

    public function getCategory11(): ?InclusionShopCategory
    {
        return $this->category11;
    }

    public function setCategory11(?InclusionShopCategory $category11): self
    {
        $this->category11 = $category11;

        return $this;
    }

    public function getCategory10(): ?InclusionShopCategory
    {
        return $this->category10;
    }

    public function setCategory10(?InclusionShopCategory $category10): self
    {
        $this->category10 = $category10;

        return $this;
    }

    public function getCategory9(): ?InclusionShopCategory
    {
        return $this->category9;
    }

    public function setCategory9(?InclusionShopCategory $category9): self
    {
        $this->category9 = $category9;

        return $this;
    }

    public function getCategory8(): ?InclusionShopCategory
    {
        return $this->category8;
    }

    public function setCategory8(?InclusionShopCategory $category8): self
    {
        $this->category8 = $category8;

        return $this;
    }

    public function getCategory7(): ?InclusionShopCategory
    {
        return $this->category7;
    }

    public function setCategory7(?InclusionShopCategory $category7): self
    {
        $this->category7 = $category7;

        return $this;
    }

    public function getCategory6(): ?InclusionShopCategory
    {
        return $this->category6;
    }

    public function setCategory6(?InclusionShopCategory $category6): self
    {
        $this->category6 = $category6;

        return $this;
    }

    public function getCategory5(): ?InclusionShopCategory
    {
        return $this->category5;
    }

    public function setCategory5(?InclusionShopCategory $category5): self
    {
        $this->category5 = $category5;

        return $this;
    }

    public function getCategory4(): ?InclusionShopCategory
    {
        return $this->category4;
    }

    public function setCategory4(?InclusionShopCategory $category4): self
    {
        $this->category4 = $category4;

        return $this;
    }

    public function getCategory3(): ?InclusionShopCategory
    {
        return $this->category3;
    }

    public function setCategory3(?InclusionShopCategory $category3): self
    {
        $this->category3 = $category3;

        return $this;
    }

    public function getCategory2(): ?InclusionShopCategory
    {
        return $this->category2;
    }

    public function setCategory2(?InclusionShopCategory $category2): self
    {
        $this->category2 = $category2;

        return $this;
    }

    public function getCategory1(): ?InclusionShopCategory
    {
        return $this->category1;
    }

    public function setCategory1(?InclusionShopCategory $category1): self
    {
        $this->category1 = $category1;

        return $this;
    }

    public function getCategory0(): ?InclusionShopCategory
    {
        return $this->category0;
    }

    public function setCategory0(?InclusionShopCategory $category0): self
    {
        $this->category0 = $category0;

        return $this;
    }
}
