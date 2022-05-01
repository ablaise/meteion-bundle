<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RideShooting.
 *
 * @ORM\Table(name="ride_shooting", indexes={@ORM\Index(name="idx_e9bac1a96ca4030e", columns={"enpc_3"}), @ORM\Index(name="idx_e9bac1a9f2c096ad", columns={"enpc_4"}), @ORM\Index(name="idx_e9bac1a91ba33398", columns={"enpc_2"}), @ORM\Index(name="idx_e9bac1a9f5ad52b4", columns={"enpc_0"}), @ORM\Index(name="idx_e9bac1a982aa6222", columns={"enpc_1"}), @ORM\Index(name="idx_e9bac1a96bc9c717", columns={"enpc_7"}), @ORM\Index(name="idx_e9bac1a9432ca05", columns={"start_text"}), @ORM\Index(name="idx_e9bac1a9bf1cc36", columns={"gfate_ride_shooting"}), @ORM\Index(name="idx_e9bac1a985c7a63b", columns={"enpc_5"}), @ORM\Index(name="idx_e9bac1a91ccef781", columns={"enpc_6"})})
 * @ORM\Entity
 */
class RideShooting
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ride_shooting_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
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
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_0", type="bigint", nullable=true)
     */
    private $popRange0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_1", type="bigint", nullable=true)
     */
    private $popRange1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_2", type="bigint", nullable=true)
     */
    private $popRange2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_3", type="bigint", nullable=true)
     */
    private $popRange3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_4", type="bigint", nullable=true)
     */
    private $popRange4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_5", type="bigint", nullable=true)
     */
    private $popRange5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_6", type="bigint", nullable=true)
     */
    private $popRange6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_range_7", type="bigint", nullable=true)
     */
    private $popRange7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_0", type="integer", nullable=true)
     */
    private $enpcScale0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_1", type="integer", nullable=true)
     */
    private $enpcScale1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_2", type="integer", nullable=true)
     */
    private $enpcScale2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_3", type="integer", nullable=true)
     */
    private $enpcScale3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_4", type="integer", nullable=true)
     */
    private $enpcScale4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_5", type="integer", nullable=true)
     */
    private $enpcScale5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_6", type="integer", nullable=true)
     */
    private $enpcScale6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enpc_scale_7", type="integer", nullable=true)
     */
    private $enpcScale7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="bigint", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="bigint", nullable=true)
     */
    private $column40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="bigint", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="bigint", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="bigint", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="bigint", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="bigint", nullable=true)
     */
    private $column45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_46", type="bigint", nullable=true)
     */
    private $column46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="integer", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="integer", nullable=true)
     */
    private $column48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_49", type="integer", nullable=true)
     */
    private $column49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_50", type="integer", nullable=true)
     */
    private $column50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="integer", nullable=true)
     */
    private $column51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="integer", nullable=true)
     */
    private $column52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_53", type="integer", nullable=true)
     */
    private $column53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_54", type="integer", nullable=true)
     */
    private $column54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="bigint", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="bigint", nullable=true)
     */
    private $column56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_57", type="bigint", nullable=true)
     */
    private $column57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_58", type="bigint", nullable=true)
     */
    private $column58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_59", type="bigint", nullable=true)
     */
    private $column59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_60", type="bigint", nullable=true)
     */
    private $column60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_61", type="bigint", nullable=true)
     */
    private $column61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_62", type="bigint", nullable=true)
     */
    private $column62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="integer", nullable=true)
     */
    private $column63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_64", type="integer", nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="integer", nullable=true)
     */
    private $column65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_66", type="integer", nullable=true)
     */
    private $column66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_67", type="integer", nullable=true)
     */
    private $column67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_68", type="integer", nullable=true)
     */
    private $column68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_69", type="integer", nullable=true)
     */
    private $column69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_70", type="integer", nullable=true)
     */
    private $column70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_71", type="bigint", nullable=true)
     */
    private $column71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_72", type="bigint", nullable=true)
     */
    private $column72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_73", type="bigint", nullable=true)
     */
    private $column73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_74", type="bigint", nullable=true)
     */
    private $column74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_75", type="bigint", nullable=true)
     */
    private $column75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_76", type="bigint", nullable=true)
     */
    private $column76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_77", type="bigint", nullable=true)
     */
    private $column77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_78", type="bigint", nullable=true)
     */
    private $column78;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_79", type="integer", nullable=true)
     */
    private $column79;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_80", type="integer", nullable=true)
     */
    private $column80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_81", type="integer", nullable=true)
     */
    private $column81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_82", type="integer", nullable=true)
     */
    private $column82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_83", type="integer", nullable=true)
     */
    private $column83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_84", type="integer", nullable=true)
     */
    private $column84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_85", type="integer", nullable=true)
     */
    private $column85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_86", type="integer", nullable=true)
     */
    private $column86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_87", type="bigint", nullable=true)
     */
    private $column87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_88", type="bigint", nullable=true)
     */
    private $column88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_89", type="bigint", nullable=true)
     */
    private $column89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_90", type="bigint", nullable=true)
     */
    private $column90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_91", type="bigint", nullable=true)
     */
    private $column91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_92", type="bigint", nullable=true)
     */
    private $column92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_93", type="bigint", nullable=true)
     */
    private $column93;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_94", type="bigint", nullable=true)
     */
    private $column94;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_95", type="integer", nullable=true)
     */
    private $column95;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_96", type="integer", nullable=true)
     */
    private $column96;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_97", type="integer", nullable=true)
     */
    private $column97;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_98", type="integer", nullable=true)
     */
    private $column98;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_99", type="integer", nullable=true)
     */
    private $column99;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_100", type="integer", nullable=true)
     */
    private $column100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_101", type="integer", nullable=true)
     */
    private $column101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_102", type="integer", nullable=true)
     */
    private $column102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_103", type="bigint", nullable=true)
     */
    private $column103;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_104", type="bigint", nullable=true)
     */
    private $column104;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_105", type="bigint", nullable=true)
     */
    private $column105;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_106", type="bigint", nullable=true)
     */
    private $column106;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_107", type="bigint", nullable=true)
     */
    private $column107;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_108", type="bigint", nullable=true)
     */
    private $column108;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_109", type="bigint", nullable=true)
     */
    private $column109;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_110", type="bigint", nullable=true)
     */
    private $column110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_111", type="integer", nullable=true)
     */
    private $column111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_112", type="integer", nullable=true)
     */
    private $column112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_113", type="integer", nullable=true)
     */
    private $column113;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_114", type="integer", nullable=true)
     */
    private $column114;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_115", type="integer", nullable=true)
     */
    private $column115;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_116", type="integer", nullable=true)
     */
    private $column116;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_117", type="integer", nullable=true)
     */
    private $column117;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_118", type="integer", nullable=true)
     */
    private $column118;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_7", referencedColumnName="pk")
     * })
     */
    private $enpc7;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_6", referencedColumnName="pk")
     * })
     */
    private $enpc6;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_5", referencedColumnName="pk")
     * })
     */
    private $enpc5;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_4", referencedColumnName="pk")
     * })
     */
    private $enpc4;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_3", referencedColumnName="pk")
     * })
     */
    private $enpc3;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_2", referencedColumnName="pk")
     * })
     */
    private $enpc2;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_1", referencedColumnName="pk")
     * })
     */
    private $enpc1;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_0", referencedColumnName="pk")
     * })
     */
    private $enpc0;

    /**
     * @var RideShootingTextData
     *
     * @ORM\ManyToOne(targetEntity="RideShootingTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_text", referencedColumnName="pk")
     * })
     */
    private $startText;

    /**
     * @var GfateRideShooting
     *
     * @ORM\ManyToOne(targetEntity="GfateRideShooting")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gfate_ride_shooting", referencedColumnName="pk")
     * })
     */
    private $gfateRideShooting;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

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

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

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

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getPopRange0(): ?string
    {
        return $this->popRange0;
    }

    public function setPopRange0(?string $popRange0): self
    {
        $this->popRange0 = $popRange0;

        return $this;
    }

    public function getPopRange1(): ?string
    {
        return $this->popRange1;
    }

    public function setPopRange1(?string $popRange1): self
    {
        $this->popRange1 = $popRange1;

        return $this;
    }

    public function getPopRange2(): ?string
    {
        return $this->popRange2;
    }

    public function setPopRange2(?string $popRange2): self
    {
        $this->popRange2 = $popRange2;

        return $this;
    }

    public function getPopRange3(): ?string
    {
        return $this->popRange3;
    }

    public function setPopRange3(?string $popRange3): self
    {
        $this->popRange3 = $popRange3;

        return $this;
    }

    public function getPopRange4(): ?string
    {
        return $this->popRange4;
    }

    public function setPopRange4(?string $popRange4): self
    {
        $this->popRange4 = $popRange4;

        return $this;
    }

    public function getPopRange5(): ?string
    {
        return $this->popRange5;
    }

    public function setPopRange5(?string $popRange5): self
    {
        $this->popRange5 = $popRange5;

        return $this;
    }

    public function getPopRange6(): ?string
    {
        return $this->popRange6;
    }

    public function setPopRange6(?string $popRange6): self
    {
        $this->popRange6 = $popRange6;

        return $this;
    }

    public function getPopRange7(): ?string
    {
        return $this->popRange7;
    }

    public function setPopRange7(?string $popRange7): self
    {
        $this->popRange7 = $popRange7;

        return $this;
    }

    public function getEnpcScale0(): ?int
    {
        return $this->enpcScale0;
    }

    public function setEnpcScale0(?int $enpcScale0): self
    {
        $this->enpcScale0 = $enpcScale0;

        return $this;
    }

    public function getEnpcScale1(): ?int
    {
        return $this->enpcScale1;
    }

    public function setEnpcScale1(?int $enpcScale1): self
    {
        $this->enpcScale1 = $enpcScale1;

        return $this;
    }

    public function getEnpcScale2(): ?int
    {
        return $this->enpcScale2;
    }

    public function setEnpcScale2(?int $enpcScale2): self
    {
        $this->enpcScale2 = $enpcScale2;

        return $this;
    }

    public function getEnpcScale3(): ?int
    {
        return $this->enpcScale3;
    }

    public function setEnpcScale3(?int $enpcScale3): self
    {
        $this->enpcScale3 = $enpcScale3;

        return $this;
    }

    public function getEnpcScale4(): ?int
    {
        return $this->enpcScale4;
    }

    public function setEnpcScale4(?int $enpcScale4): self
    {
        $this->enpcScale4 = $enpcScale4;

        return $this;
    }

    public function getEnpcScale5(): ?int
    {
        return $this->enpcScale5;
    }

    public function setEnpcScale5(?int $enpcScale5): self
    {
        $this->enpcScale5 = $enpcScale5;

        return $this;
    }

    public function getEnpcScale6(): ?int
    {
        return $this->enpcScale6;
    }

    public function setEnpcScale6(?int $enpcScale6): self
    {
        $this->enpcScale6 = $enpcScale6;

        return $this;
    }

    public function getEnpcScale7(): ?int
    {
        return $this->enpcScale7;
    }

    public function setEnpcScale7(?int $enpcScale7): self
    {
        $this->enpcScale7 = $enpcScale7;

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

    public function getColumn40(): ?string
    {
        return $this->column40;
    }

    public function setColumn40(?string $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?string
    {
        return $this->column41;
    }

    public function setColumn41(?string $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?string
    {
        return $this->column42;
    }

    public function setColumn42(?string $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?string
    {
        return $this->column43;
    }

    public function setColumn43(?string $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?string
    {
        return $this->column44;
    }

    public function setColumn44(?string $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?string
    {
        return $this->column45;
    }

    public function setColumn45(?string $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?string
    {
        return $this->column46;
    }

    public function setColumn46(?string $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?int
    {
        return $this->column47;
    }

    public function setColumn47(?int $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?int
    {
        return $this->column48;
    }

    public function setColumn48(?int $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?int
    {
        return $this->column49;
    }

    public function setColumn49(?int $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?int
    {
        return $this->column50;
    }

    public function setColumn50(?int $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?int
    {
        return $this->column51;
    }

    public function setColumn51(?int $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?int
    {
        return $this->column52;
    }

    public function setColumn52(?int $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?int
    {
        return $this->column53;
    }

    public function setColumn53(?int $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?int
    {
        return $this->column54;
    }

    public function setColumn54(?int $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?string
    {
        return $this->column55;
    }

    public function setColumn55(?string $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?string
    {
        return $this->column56;
    }

    public function setColumn56(?string $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?string
    {
        return $this->column57;
    }

    public function setColumn57(?string $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?string
    {
        return $this->column58;
    }

    public function setColumn58(?string $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?string
    {
        return $this->column59;
    }

    public function setColumn59(?string $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?string
    {
        return $this->column60;
    }

    public function setColumn60(?string $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?string
    {
        return $this->column61;
    }

    public function setColumn61(?string $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?string
    {
        return $this->column62;
    }

    public function setColumn62(?string $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?int
    {
        return $this->column63;
    }

    public function setColumn63(?int $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?int
    {
        return $this->column64;
    }

    public function setColumn64(?int $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?int
    {
        return $this->column65;
    }

    public function setColumn65(?int $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?int
    {
        return $this->column66;
    }

    public function setColumn66(?int $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?int
    {
        return $this->column67;
    }

    public function setColumn67(?int $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?int
    {
        return $this->column68;
    }

    public function setColumn68(?int $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?int
    {
        return $this->column69;
    }

    public function setColumn69(?int $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?int
    {
        return $this->column70;
    }

    public function setColumn70(?int $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?string
    {
        return $this->column71;
    }

    public function setColumn71(?string $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?string
    {
        return $this->column72;
    }

    public function setColumn72(?string $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?string
    {
        return $this->column73;
    }

    public function setColumn73(?string $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?string
    {
        return $this->column74;
    }

    public function setColumn74(?string $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?string
    {
        return $this->column75;
    }

    public function setColumn75(?string $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?string
    {
        return $this->column76;
    }

    public function setColumn76(?string $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?string
    {
        return $this->column77;
    }

    public function setColumn77(?string $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?string
    {
        return $this->column78;
    }

    public function setColumn78(?string $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?int
    {
        return $this->column79;
    }

    public function setColumn79(?int $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?int
    {
        return $this->column80;
    }

    public function setColumn80(?int $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?int
    {
        return $this->column81;
    }

    public function setColumn81(?int $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?int
    {
        return $this->column82;
    }

    public function setColumn82(?int $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?int
    {
        return $this->column83;
    }

    public function setColumn83(?int $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?int
    {
        return $this->column84;
    }

    public function setColumn84(?int $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?int
    {
        return $this->column85;
    }

    public function setColumn85(?int $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?int
    {
        return $this->column86;
    }

    public function setColumn86(?int $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?string
    {
        return $this->column87;
    }

    public function setColumn87(?string $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?string
    {
        return $this->column88;
    }

    public function setColumn88(?string $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?string
    {
        return $this->column89;
    }

    public function setColumn89(?string $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?string
    {
        return $this->column90;
    }

    public function setColumn90(?string $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?string
    {
        return $this->column91;
    }

    public function setColumn91(?string $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?string
    {
        return $this->column92;
    }

    public function setColumn92(?string $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getColumn93(): ?string
    {
        return $this->column93;
    }

    public function setColumn93(?string $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getColumn94(): ?string
    {
        return $this->column94;
    }

    public function setColumn94(?string $column94): self
    {
        $this->column94 = $column94;

        return $this;
    }

    public function getColumn95(): ?int
    {
        return $this->column95;
    }

    public function setColumn95(?int $column95): self
    {
        $this->column95 = $column95;

        return $this;
    }

    public function getColumn96(): ?int
    {
        return $this->column96;
    }

    public function setColumn96(?int $column96): self
    {
        $this->column96 = $column96;

        return $this;
    }

    public function getColumn97(): ?int
    {
        return $this->column97;
    }

    public function setColumn97(?int $column97): self
    {
        $this->column97 = $column97;

        return $this;
    }

    public function getColumn98(): ?int
    {
        return $this->column98;
    }

    public function setColumn98(?int $column98): self
    {
        $this->column98 = $column98;

        return $this;
    }

    public function getColumn99(): ?int
    {
        return $this->column99;
    }

    public function setColumn99(?int $column99): self
    {
        $this->column99 = $column99;

        return $this;
    }

    public function getColumn100(): ?int
    {
        return $this->column100;
    }

    public function setColumn100(?int $column100): self
    {
        $this->column100 = $column100;

        return $this;
    }

    public function getColumn101(): ?int
    {
        return $this->column101;
    }

    public function setColumn101(?int $column101): self
    {
        $this->column101 = $column101;

        return $this;
    }

    public function getColumn102(): ?int
    {
        return $this->column102;
    }

    public function setColumn102(?int $column102): self
    {
        $this->column102 = $column102;

        return $this;
    }

    public function getColumn103(): ?string
    {
        return $this->column103;
    }

    public function setColumn103(?string $column103): self
    {
        $this->column103 = $column103;

        return $this;
    }

    public function getColumn104(): ?string
    {
        return $this->column104;
    }

    public function setColumn104(?string $column104): self
    {
        $this->column104 = $column104;

        return $this;
    }

    public function getColumn105(): ?string
    {
        return $this->column105;
    }

    public function setColumn105(?string $column105): self
    {
        $this->column105 = $column105;

        return $this;
    }

    public function getColumn106(): ?string
    {
        return $this->column106;
    }

    public function setColumn106(?string $column106): self
    {
        $this->column106 = $column106;

        return $this;
    }

    public function getColumn107(): ?string
    {
        return $this->column107;
    }

    public function setColumn107(?string $column107): self
    {
        $this->column107 = $column107;

        return $this;
    }

    public function getColumn108(): ?string
    {
        return $this->column108;
    }

    public function setColumn108(?string $column108): self
    {
        $this->column108 = $column108;

        return $this;
    }

    public function getColumn109(): ?string
    {
        return $this->column109;
    }

    public function setColumn109(?string $column109): self
    {
        $this->column109 = $column109;

        return $this;
    }

    public function getColumn110(): ?string
    {
        return $this->column110;
    }

    public function setColumn110(?string $column110): self
    {
        $this->column110 = $column110;

        return $this;
    }

    public function getColumn111(): ?int
    {
        return $this->column111;
    }

    public function setColumn111(?int $column111): self
    {
        $this->column111 = $column111;

        return $this;
    }

    public function getColumn112(): ?int
    {
        return $this->column112;
    }

    public function setColumn112(?int $column112): self
    {
        $this->column112 = $column112;

        return $this;
    }

    public function getColumn113(): ?int
    {
        return $this->column113;
    }

    public function setColumn113(?int $column113): self
    {
        $this->column113 = $column113;

        return $this;
    }

    public function getColumn114(): ?int
    {
        return $this->column114;
    }

    public function setColumn114(?int $column114): self
    {
        $this->column114 = $column114;

        return $this;
    }

    public function getColumn115(): ?int
    {
        return $this->column115;
    }

    public function setColumn115(?int $column115): self
    {
        $this->column115 = $column115;

        return $this;
    }

    public function getColumn116(): ?int
    {
        return $this->column116;
    }

    public function setColumn116(?int $column116): self
    {
        $this->column116 = $column116;

        return $this;
    }

    public function getColumn117(): ?int
    {
        return $this->column117;
    }

    public function setColumn117(?int $column117): self
    {
        $this->column117 = $column117;

        return $this;
    }

    public function getColumn118(): ?int
    {
        return $this->column118;
    }

    public function setColumn118(?int $column118): self
    {
        $this->column118 = $column118;

        return $this;
    }

    public function getEnpc7(): ?EnpcBase
    {
        return $this->enpc7;
    }

    public function setEnpc7(?EnpcBase $enpc7): self
    {
        $this->enpc7 = $enpc7;

        return $this;
    }

    public function getEnpc6(): ?EnpcBase
    {
        return $this->enpc6;
    }

    public function setEnpc6(?EnpcBase $enpc6): self
    {
        $this->enpc6 = $enpc6;

        return $this;
    }

    public function getEnpc5(): ?EnpcBase
    {
        return $this->enpc5;
    }

    public function setEnpc5(?EnpcBase $enpc5): self
    {
        $this->enpc5 = $enpc5;

        return $this;
    }

    public function getEnpc4(): ?EnpcBase
    {
        return $this->enpc4;
    }

    public function setEnpc4(?EnpcBase $enpc4): self
    {
        $this->enpc4 = $enpc4;

        return $this;
    }

    public function getEnpc3(): ?EnpcBase
    {
        return $this->enpc3;
    }

    public function setEnpc3(?EnpcBase $enpc3): self
    {
        $this->enpc3 = $enpc3;

        return $this;
    }

    public function getEnpc2(): ?EnpcBase
    {
        return $this->enpc2;
    }

    public function setEnpc2(?EnpcBase $enpc2): self
    {
        $this->enpc2 = $enpc2;

        return $this;
    }

    public function getEnpc1(): ?EnpcBase
    {
        return $this->enpc1;
    }

    public function setEnpc1(?EnpcBase $enpc1): self
    {
        $this->enpc1 = $enpc1;

        return $this;
    }

    public function getEnpc0(): ?EnpcBase
    {
        return $this->enpc0;
    }

    public function setEnpc0(?EnpcBase $enpc0): self
    {
        $this->enpc0 = $enpc0;

        return $this;
    }

    public function getStartText(): ?RideShootingTextData
    {
        return $this->startText;
    }

    public function setStartText(?RideShootingTextData $startText): self
    {
        $this->startText = $startText;

        return $this;
    }

    public function getGfateRideShooting(): ?GfateRideShooting
    {
        return $this->gfateRideShooting;
    }

    public function setGfateRideShooting(?GfateRideShooting $gfateRideShooting): self
    {
        $this->gfateRideShooting = $gfateRideShooting;

        return $this;
    }
}
