<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gfate.
 *
 * @ORM\Table(name="gfate", indexes={@ORM\Index(name="idx_cce37cada603d8c8", columns={"lgb_pop_range_5"}), @ORM\Index(name="idx_cce37cadafb594e3", columns={"lgb_pop_range_9"}), @ORM\Index(name="idx_cce37cad72a963e9", columns={"lgb_pop_range_11"}), @ORM\Index(name="idx_cce37cadeba03253", columns={"lgb_pop_range_12"}), @ORM\Index(name="idx_cce37cadd104e85e", columns={"lgb_pop_range_4"}), @ORM\Index(name="idx_cce37cad3f0a8972", columns={"lgb_pop_range_6"}), @ORM\Index(name="idx_cce37cada16e1cd1", columns={"lgb_pop_range_1"}), @ORM\Index(name="idx_cce37cadd6692c47", columns={"lgb_pop_range_0"}), @ORM\Index(name="idx_cce37cad480db9e4", columns={"lgb_pop_range_7"}), @ORM\Index(name="idx_cce37cad9ca702c5", columns={"lgb_pop_range_13"}), @ORM\Index(name="idx_cce37cad2c39766", columns={"lgb_pop_range_14"}), @ORM\Index(name="idx_cce37cad4f607dfd", columns={"lgb_pop_range_3"}), @ORM\Index(name="idx_cce37cad5ae537f", columns={"lgb_pop_range_10"}), @ORM\Index(name="idx_cce37cad38674d6b", columns={"lgb_pop_range_2"}), @ORM\Index(name="idx_cce37cadd8b2a475", columns={"lgb_pop_range_8"})})
 * @ORM\Entity
 */
class Gfate
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfate_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
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
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="bigint", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_0", type="integer", nullable=true)
     */
    private $icon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_1", type="integer", nullable=true)
     */
    private $icon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_2", type="integer", nullable=true)
     */
    private $icon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_3", type="integer", nullable=true)
     */
    private $icon3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_4", type="integer", nullable=true)
     */
    private $icon4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_5", type="integer", nullable=true)
     */
    private $icon5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_6", type="integer", nullable=true)
     */
    private $icon6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_7", type="integer", nullable=true)
     */
    private $icon7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_8", type="integer", nullable=true)
     */
    private $icon8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_9", type="integer", nullable=true)
     */
    private $icon9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_10", type="integer", nullable=true)
     */
    private $icon10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_11", type="integer", nullable=true)
     */
    private $icon11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_12", type="integer", nullable=true)
     */
    private $icon12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_13", type="integer", nullable=true)
     */
    private $icon13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_14", type="integer", nullable=true)
     */
    private $icon14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="bigint", nullable=true)
     */
    private $column39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_40", type="boolean", nullable=true)
     */
    private $column40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_41", type="boolean", nullable=true)
     */
    private $column41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_42", type="boolean", nullable=true)
     */
    private $column42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_43", type="boolean", nullable=true)
     */
    private $column43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_44", type="boolean", nullable=true)
     */
    private $column44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_45", type="boolean", nullable=true)
     */
    private $column45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_46", type="boolean", nullable=true)
     */
    private $column46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_47", type="boolean", nullable=true)
     */
    private $column47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_48", type="boolean", nullable=true)
     */
    private $column48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_49", type="boolean", nullable=true)
     */
    private $column49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_50", type="boolean", nullable=true)
     */
    private $column50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_51", type="boolean", nullable=true)
     */
    private $column51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_52", type="boolean", nullable=true)
     */
    private $column52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_53", type="boolean", nullable=true)
     */
    private $column53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_54", type="boolean", nullable=true)
     */
    private $column54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_55", type="boolean", nullable=true)
     */
    private $column55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_56", type="boolean", nullable=true)
     */
    private $column56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_57", type="boolean", nullable=true)
     */
    private $column57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_58", type="boolean", nullable=true)
     */
    private $column58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_59", type="boolean", nullable=true)
     */
    private $column59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_60", type="boolean", nullable=true)
     */
    private $column60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_61", type="boolean", nullable=true)
     */
    private $column61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_62", type="boolean", nullable=true)
     */
    private $column62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_63", type="boolean", nullable=true)
     */
    private $column63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_64", type="boolean", nullable=true)
     */
    private $column64;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_65", type="boolean", nullable=true)
     */
    private $column65;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_66", type="boolean", nullable=true)
     */
    private $column66;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_67", type="boolean", nullable=true)
     */
    private $column67;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_68", type="boolean", nullable=true)
     */
    private $column68;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_69", type="boolean", nullable=true)
     */
    private $column69;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_70", type="boolean", nullable=true)
     */
    private $column70;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_71", type="boolean", nullable=true)
     */
    private $column71;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_72", type="boolean", nullable=true)
     */
    private $column72;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_73", type="boolean", nullable=true)
     */
    private $column73;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_74", type="boolean", nullable=true)
     */
    private $column74;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_75", type="boolean", nullable=true)
     */
    private $column75;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_76", type="boolean", nullable=true)
     */
    private $column76;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_77", type="boolean", nullable=true)
     */
    private $column77;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_78", type="boolean", nullable=true)
     */
    private $column78;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_79", type="boolean", nullable=true)
     */
    private $column79;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_80", type="boolean", nullable=true)
     */
    private $column80;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_81", type="boolean", nullable=true)
     */
    private $column81;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_82", type="boolean", nullable=true)
     */
    private $column82;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_83", type="boolean", nullable=true)
     */
    private $column83;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_84", type="boolean", nullable=true)
     */
    private $column84;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_85", type="boolean", nullable=true)
     */
    private $column85;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_86", type="boolean", nullable=true)
     */
    private $column86;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_87", type="boolean", nullable=true)
     */
    private $column87;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_14", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange14;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_13", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange13;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_12", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange12;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_11", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange11;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_10", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange10;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_9", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange9;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_8", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange8;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_7", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange7;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_6", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange6;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_5", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange5;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_4", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange4;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_3", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_2", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_1", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange1;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lgb_pop_range_0", referencedColumnName="pk")
     * })
     */
    private $lgbPopRange0;

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

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getIcon0(): ?int
    {
        return $this->icon0;
    }

    public function setIcon0(?int $icon0): self
    {
        $this->icon0 = $icon0;

        return $this;
    }

    public function getIcon1(): ?int
    {
        return $this->icon1;
    }

    public function setIcon1(?int $icon1): self
    {
        $this->icon1 = $icon1;

        return $this;
    }

    public function getIcon2(): ?int
    {
        return $this->icon2;
    }

    public function setIcon2(?int $icon2): self
    {
        $this->icon2 = $icon2;

        return $this;
    }

    public function getIcon3(): ?int
    {
        return $this->icon3;
    }

    public function setIcon3(?int $icon3): self
    {
        $this->icon3 = $icon3;

        return $this;
    }

    public function getIcon4(): ?int
    {
        return $this->icon4;
    }

    public function setIcon4(?int $icon4): self
    {
        $this->icon4 = $icon4;

        return $this;
    }

    public function getIcon5(): ?int
    {
        return $this->icon5;
    }

    public function setIcon5(?int $icon5): self
    {
        $this->icon5 = $icon5;

        return $this;
    }

    public function getIcon6(): ?int
    {
        return $this->icon6;
    }

    public function setIcon6(?int $icon6): self
    {
        $this->icon6 = $icon6;

        return $this;
    }

    public function getIcon7(): ?int
    {
        return $this->icon7;
    }

    public function setIcon7(?int $icon7): self
    {
        $this->icon7 = $icon7;

        return $this;
    }

    public function getIcon8(): ?int
    {
        return $this->icon8;
    }

    public function setIcon8(?int $icon8): self
    {
        $this->icon8 = $icon8;

        return $this;
    }

    public function getIcon9(): ?int
    {
        return $this->icon9;
    }

    public function setIcon9(?int $icon9): self
    {
        $this->icon9 = $icon9;

        return $this;
    }

    public function getIcon10(): ?int
    {
        return $this->icon10;
    }

    public function setIcon10(?int $icon10): self
    {
        $this->icon10 = $icon10;

        return $this;
    }

    public function getIcon11(): ?int
    {
        return $this->icon11;
    }

    public function setIcon11(?int $icon11): self
    {
        $this->icon11 = $icon11;

        return $this;
    }

    public function getIcon12(): ?int
    {
        return $this->icon12;
    }

    public function setIcon12(?int $icon12): self
    {
        $this->icon12 = $icon12;

        return $this;
    }

    public function getIcon13(): ?int
    {
        return $this->icon13;
    }

    public function setIcon13(?int $icon13): self
    {
        $this->icon13 = $icon13;

        return $this;
    }

    public function getIcon14(): ?int
    {
        return $this->icon14;
    }

    public function setIcon14(?int $icon14): self
    {
        $this->icon14 = $icon14;

        return $this;
    }

    public function getColumn39(): ?string
    {
        return $this->column39;
    }

    public function setColumn39(?string $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?bool
    {
        return $this->column40;
    }

    public function setColumn40(?bool $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?bool
    {
        return $this->column41;
    }

    public function setColumn41(?bool $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?bool
    {
        return $this->column42;
    }

    public function setColumn42(?bool $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?bool
    {
        return $this->column43;
    }

    public function setColumn43(?bool $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?bool
    {
        return $this->column44;
    }

    public function setColumn44(?bool $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?bool
    {
        return $this->column45;
    }

    public function setColumn45(?bool $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?bool
    {
        return $this->column46;
    }

    public function setColumn46(?bool $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?bool
    {
        return $this->column47;
    }

    public function setColumn47(?bool $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?bool
    {
        return $this->column48;
    }

    public function setColumn48(?bool $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?bool
    {
        return $this->column49;
    }

    public function setColumn49(?bool $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?bool
    {
        return $this->column50;
    }

    public function setColumn50(?bool $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?bool
    {
        return $this->column51;
    }

    public function setColumn51(?bool $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?bool
    {
        return $this->column52;
    }

    public function setColumn52(?bool $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?bool
    {
        return $this->column53;
    }

    public function setColumn53(?bool $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?bool
    {
        return $this->column54;
    }

    public function setColumn54(?bool $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?bool
    {
        return $this->column55;
    }

    public function setColumn55(?bool $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?bool
    {
        return $this->column56;
    }

    public function setColumn56(?bool $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?bool
    {
        return $this->column57;
    }

    public function setColumn57(?bool $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?bool
    {
        return $this->column58;
    }

    public function setColumn58(?bool $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?bool
    {
        return $this->column59;
    }

    public function setColumn59(?bool $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?bool
    {
        return $this->column60;
    }

    public function setColumn60(?bool $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?bool
    {
        return $this->column61;
    }

    public function setColumn61(?bool $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?bool
    {
        return $this->column62;
    }

    public function setColumn62(?bool $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?bool
    {
        return $this->column63;
    }

    public function setColumn63(?bool $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?bool
    {
        return $this->column64;
    }

    public function setColumn64(?bool $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?bool
    {
        return $this->column65;
    }

    public function setColumn65(?bool $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?bool
    {
        return $this->column66;
    }

    public function setColumn66(?bool $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?bool
    {
        return $this->column67;
    }

    public function setColumn67(?bool $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?bool
    {
        return $this->column68;
    }

    public function setColumn68(?bool $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?bool
    {
        return $this->column69;
    }

    public function setColumn69(?bool $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?bool
    {
        return $this->column70;
    }

    public function setColumn70(?bool $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?bool
    {
        return $this->column71;
    }

    public function setColumn71(?bool $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?bool
    {
        return $this->column72;
    }

    public function setColumn72(?bool $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?bool
    {
        return $this->column73;
    }

    public function setColumn73(?bool $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?bool
    {
        return $this->column74;
    }

    public function setColumn74(?bool $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?bool
    {
        return $this->column75;
    }

    public function setColumn75(?bool $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?bool
    {
        return $this->column76;
    }

    public function setColumn76(?bool $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?bool
    {
        return $this->column77;
    }

    public function setColumn77(?bool $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?bool
    {
        return $this->column78;
    }

    public function setColumn78(?bool $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?bool
    {
        return $this->column79;
    }

    public function setColumn79(?bool $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?bool
    {
        return $this->column80;
    }

    public function setColumn80(?bool $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?bool
    {
        return $this->column81;
    }

    public function setColumn81(?bool $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?bool
    {
        return $this->column82;
    }

    public function setColumn82(?bool $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?bool
    {
        return $this->column83;
    }

    public function setColumn83(?bool $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?bool
    {
        return $this->column84;
    }

    public function setColumn84(?bool $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?bool
    {
        return $this->column85;
    }

    public function setColumn85(?bool $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?bool
    {
        return $this->column86;
    }

    public function setColumn86(?bool $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?bool
    {
        return $this->column87;
    }

    public function setColumn87(?bool $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getLgbPopRange14(): ?Level
    {
        return $this->lgbPopRange14;
    }

    public function setLgbPopRange14(?Level $lgbPopRange14): self
    {
        $this->lgbPopRange14 = $lgbPopRange14;

        return $this;
    }

    public function getLgbPopRange13(): ?Level
    {
        return $this->lgbPopRange13;
    }

    public function setLgbPopRange13(?Level $lgbPopRange13): self
    {
        $this->lgbPopRange13 = $lgbPopRange13;

        return $this;
    }

    public function getLgbPopRange12(): ?Level
    {
        return $this->lgbPopRange12;
    }

    public function setLgbPopRange12(?Level $lgbPopRange12): self
    {
        $this->lgbPopRange12 = $lgbPopRange12;

        return $this;
    }

    public function getLgbPopRange11(): ?Level
    {
        return $this->lgbPopRange11;
    }

    public function setLgbPopRange11(?Level $lgbPopRange11): self
    {
        $this->lgbPopRange11 = $lgbPopRange11;

        return $this;
    }

    public function getLgbPopRange10(): ?Level
    {
        return $this->lgbPopRange10;
    }

    public function setLgbPopRange10(?Level $lgbPopRange10): self
    {
        $this->lgbPopRange10 = $lgbPopRange10;

        return $this;
    }

    public function getLgbPopRange9(): ?Level
    {
        return $this->lgbPopRange9;
    }

    public function setLgbPopRange9(?Level $lgbPopRange9): self
    {
        $this->lgbPopRange9 = $lgbPopRange9;

        return $this;
    }

    public function getLgbPopRange8(): ?Level
    {
        return $this->lgbPopRange8;
    }

    public function setLgbPopRange8(?Level $lgbPopRange8): self
    {
        $this->lgbPopRange8 = $lgbPopRange8;

        return $this;
    }

    public function getLgbPopRange7(): ?Level
    {
        return $this->lgbPopRange7;
    }

    public function setLgbPopRange7(?Level $lgbPopRange7): self
    {
        $this->lgbPopRange7 = $lgbPopRange7;

        return $this;
    }

    public function getLgbPopRange6(): ?Level
    {
        return $this->lgbPopRange6;
    }

    public function setLgbPopRange6(?Level $lgbPopRange6): self
    {
        $this->lgbPopRange6 = $lgbPopRange6;

        return $this;
    }

    public function getLgbPopRange5(): ?Level
    {
        return $this->lgbPopRange5;
    }

    public function setLgbPopRange5(?Level $lgbPopRange5): self
    {
        $this->lgbPopRange5 = $lgbPopRange5;

        return $this;
    }

    public function getLgbPopRange4(): ?Level
    {
        return $this->lgbPopRange4;
    }

    public function setLgbPopRange4(?Level $lgbPopRange4): self
    {
        $this->lgbPopRange4 = $lgbPopRange4;

        return $this;
    }

    public function getLgbPopRange3(): ?Level
    {
        return $this->lgbPopRange3;
    }

    public function setLgbPopRange3(?Level $lgbPopRange3): self
    {
        $this->lgbPopRange3 = $lgbPopRange3;

        return $this;
    }

    public function getLgbPopRange2(): ?Level
    {
        return $this->lgbPopRange2;
    }

    public function setLgbPopRange2(?Level $lgbPopRange2): self
    {
        $this->lgbPopRange2 = $lgbPopRange2;

        return $this;
    }

    public function getLgbPopRange1(): ?Level
    {
        return $this->lgbPopRange1;
    }

    public function setLgbPopRange1(?Level $lgbPopRange1): self
    {
        $this->lgbPopRange1 = $lgbPopRange1;

        return $this;
    }

    public function getLgbPopRange0(): ?Level
    {
        return $this->lgbPopRange0;
    }

    public function setLgbPopRange0(?Level $lgbPopRange0): self
    {
        $this->lgbPopRange0 = $lgbPopRange0;

        return $this;
    }
}
