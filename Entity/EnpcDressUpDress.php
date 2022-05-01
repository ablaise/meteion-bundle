<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnpcDressUpDress.
 *
 * @ORM\Table(name="enpc_dress_up_dress", indexes={@ORM\Index(name="idx_2c3fcdad50e5f68d", columns={"dye_body"}), @ORM\Index(name="idx_2c3fcdadb5baa9f0", columns={"dye_feet"}), @ORM\Index(name="idx_2c3fcdadd0c35338", columns={"dye_hands"}), @ORM\Index(name="idx_2c3fcdad94717713", columns={"enpc"}), @ORM\Index(name="idx_2c3fcdad7655beb5", columns={"dye_legs"}), @ORM\Index(name="idx_2c3fcdadccae5efb", columns={"dye_off_hand"}), @ORM\Index(name="idx_2c3fcdad2cbe0ba3", columns={"dye_head"}), @ORM\Index(name="idx_2c3fcdad3099ced3", columns={"dye_main_hand"})})
 * @ORM\Entity
 */
class EnpcDressUpDress
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enpc_dress_up_dress_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior", type="integer", nullable=true)
     */
    private $behavior;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="integer", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="integer", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="integer", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="integer", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="integer", nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_22", type="integer", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="integer", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="integer", nullable=true)
     */
    private $column25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="integer", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="integer", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_28", type="integer", nullable=true)
     */
    private $column28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_29", type="integer", nullable=true)
     */
    private $column29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="integer", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="integer", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="integer", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="integer", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_34", type="integer", nullable=true)
     */
    private $column34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="integer", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="integer", nullable=true)
     */
    private $column37;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_main_hand", type="string", length=255, nullable=true)
     */
    private $modelMainHand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_off_hand", type="string", length=255, nullable=true)
     */
    private $modelOffHand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_head", type="bigint", nullable=true)
     */
    private $modelHead;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_body", type="bigint", nullable=true)
     */
    private $modelBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_hands", type="bigint", nullable=true)
     */
    private $modelHands;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_legs", type="bigint", nullable=true)
     */
    private $modelLegs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_feet", type="bigint", nullable=true)
     */
    private $modelFeet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="bigint", nullable=true)
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
     * @ORM\Column(name="column_54", type="bigint", nullable=true)
     */
    private $column54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="integer", nullable=true)
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
     * @ORM\Column(name="column_57", type="integer", nullable=true)
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
     * @ORM\Column(name="column_59", type="integer", nullable=true)
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
     * @ORM\Column(name="column_61", type="integer", nullable=true)
     */
    private $column61;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_feet", referencedColumnName="pk")
     * })
     */
    private $dyeFeet;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_legs", referencedColumnName="pk")
     * })
     */
    private $dyeLegs;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_hands", referencedColumnName="pk")
     * })
     */
    private $dyeHands;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_body", referencedColumnName="pk")
     * })
     */
    private $dyeBody;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_head", referencedColumnName="pk")
     * })
     */
    private $dyeHead;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_off_hand", referencedColumnName="pk")
     * })
     */
    private $dyeOffHand;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dye_main_hand", referencedColumnName="pk")
     * })
     */
    private $dyeMainHand;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc", referencedColumnName="pk")
     * })
     */
    private $enpc;

    public function getPk(): ?string
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

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

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

    public function getBehavior(): ?int
    {
        return $this->behavior;
    }

    public function setBehavior(?int $behavior): self
    {
        $this->behavior = $behavior;

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

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?int
    {
        return $this->column16;
    }

    public function setColumn16(?int $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?int
    {
        return $this->column17;
    }

    public function setColumn17(?int $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?int
    {
        return $this->column19;
    }

    public function setColumn19(?int $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?int
    {
        return $this->column20;
    }

    public function setColumn20(?int $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?int
    {
        return $this->column21;
    }

    public function setColumn21(?int $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?int
    {
        return $this->column22;
    }

    public function setColumn22(?int $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?int
    {
        return $this->column23;
    }

    public function setColumn23(?int $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?int
    {
        return $this->column24;
    }

    public function setColumn24(?int $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?int
    {
        return $this->column25;
    }

    public function setColumn25(?int $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?int
    {
        return $this->column26;
    }

    public function setColumn26(?int $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?int
    {
        return $this->column27;
    }

    public function setColumn27(?int $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?int
    {
        return $this->column28;
    }

    public function setColumn28(?int $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?int
    {
        return $this->column29;
    }

    public function setColumn29(?int $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?int
    {
        return $this->column30;
    }

    public function setColumn30(?int $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?int
    {
        return $this->column31;
    }

    public function setColumn31(?int $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?int
    {
        return $this->column32;
    }

    public function setColumn32(?int $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?int
    {
        return $this->column33;
    }

    public function setColumn33(?int $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?int
    {
        return $this->column34;
    }

    public function setColumn34(?int $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?int
    {
        return $this->column35;
    }

    public function setColumn35(?int $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?int
    {
        return $this->column37;
    }

    public function setColumn37(?int $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getModelMainHand(): ?string
    {
        return $this->modelMainHand;
    }

    public function setModelMainHand(?string $modelMainHand): self
    {
        $this->modelMainHand = $modelMainHand;

        return $this;
    }

    public function getModelOffHand(): ?string
    {
        return $this->modelOffHand;
    }

    public function setModelOffHand(?string $modelOffHand): self
    {
        $this->modelOffHand = $modelOffHand;

        return $this;
    }

    public function getModelHead(): ?string
    {
        return $this->modelHead;
    }

    public function setModelHead(?string $modelHead): self
    {
        $this->modelHead = $modelHead;

        return $this;
    }

    public function getModelBody(): ?string
    {
        return $this->modelBody;
    }

    public function setModelBody(?string $modelBody): self
    {
        $this->modelBody = $modelBody;

        return $this;
    }

    public function getModelHands(): ?string
    {
        return $this->modelHands;
    }

    public function setModelHands(?string $modelHands): self
    {
        $this->modelHands = $modelHands;

        return $this;
    }

    public function getModelLegs(): ?string
    {
        return $this->modelLegs;
    }

    public function setModelLegs(?string $modelLegs): self
    {
        $this->modelLegs = $modelLegs;

        return $this;
    }

    public function getModelFeet(): ?string
    {
        return $this->modelFeet;
    }

    public function setModelFeet(?string $modelFeet): self
    {
        $this->modelFeet = $modelFeet;

        return $this;
    }

    public function getColumn52(): ?string
    {
        return $this->column52;
    }

    public function setColumn52(?string $column52): self
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

    public function getColumn54(): ?string
    {
        return $this->column54;
    }

    public function setColumn54(?string $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?int
    {
        return $this->column55;
    }

    public function setColumn55(?int $column55): self
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

    public function getColumn57(): ?int
    {
        return $this->column57;
    }

    public function setColumn57(?int $column57): self
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

    public function getColumn59(): ?int
    {
        return $this->column59;
    }

    public function setColumn59(?int $column59): self
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

    public function getColumn61(): ?int
    {
        return $this->column61;
    }

    public function setColumn61(?int $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getDyeFeet(): ?Stain
    {
        return $this->dyeFeet;
    }

    public function setDyeFeet(?Stain $dyeFeet): self
    {
        $this->dyeFeet = $dyeFeet;

        return $this;
    }

    public function getDyeLegs(): ?Stain
    {
        return $this->dyeLegs;
    }

    public function setDyeLegs(?Stain $dyeLegs): self
    {
        $this->dyeLegs = $dyeLegs;

        return $this;
    }

    public function getDyeHands(): ?Stain
    {
        return $this->dyeHands;
    }

    public function setDyeHands(?Stain $dyeHands): self
    {
        $this->dyeHands = $dyeHands;

        return $this;
    }

    public function getDyeBody(): ?Stain
    {
        return $this->dyeBody;
    }

    public function setDyeBody(?Stain $dyeBody): self
    {
        $this->dyeBody = $dyeBody;

        return $this;
    }

    public function getDyeHead(): ?Stain
    {
        return $this->dyeHead;
    }

    public function setDyeHead(?Stain $dyeHead): self
    {
        $this->dyeHead = $dyeHead;

        return $this;
    }

    public function getDyeOffHand(): ?Stain
    {
        return $this->dyeOffHand;
    }

    public function setDyeOffHand(?Stain $dyeOffHand): self
    {
        $this->dyeOffHand = $dyeOffHand;

        return $this;
    }

    public function getDyeMainHand(): ?Stain
    {
        return $this->dyeMainHand;
    }

    public function setDyeMainHand(?Stain $dyeMainHand): self
    {
        $this->dyeMainHand = $dyeMainHand;

        return $this;
    }

    public function getEnpc(): ?EnpcResident
    {
        return $this->enpc;
    }

    public function setEnpc(?EnpcResident $enpc): self
    {
        $this->enpc = $enpc;

        return $this;
    }
}
