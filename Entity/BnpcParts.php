<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnpcParts.
 *
 * @ORM\Table(name="bnpc_parts", indexes={@ORM\Index(name="idx_e68dcb246d4ee0b1", columns={"bnpc_base_1"}), @ORM\Index(name="idx_e68dcb241d24143e", columns={"bnpc_base_4"}), @ORM\Index(name="idx_e68dcb24f447b10b", columns={"bnpc_base_2"}), @ORM\Index(name="idx_e68dcb248340819d", columns={"bnpc_base_3"}), @ORM\Index(name="idx_e68dcb246a2324a8", columns={"bnpc_base_5"})})
 * @ORM\Entity
 */
class BnpcParts
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bnpc_parts_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="part_slot_1", type="integer", nullable=true)
     */
    private $partSlot1;

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
     * @var string|null
     *
     * @ORM\Column(name="x_1", type="string", length=255, nullable=true)
     */
    private $x1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y_1", type="string", length=255, nullable=true)
     */
    private $y1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z_1", type="string", length=255, nullable=true)
     */
    private $z1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale_1", type="string", length=255, nullable=true)
     */
    private $scale1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="part_slot_2", type="integer", nullable=true)
     */
    private $partSlot2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_16", type="boolean", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="x_2", type="string", length=255, nullable=true)
     */
    private $x2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y_2", type="string", length=255, nullable=true)
     */
    private $y2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z_2", type="string", length=255, nullable=true)
     */
    private $z2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="integer", nullable=true)
     */
    private $column21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale_2", type="string", length=255, nullable=true)
     */
    private $scale2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="part_slot_3", type="integer", nullable=true)
     */
    private $partSlot3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_26", type="boolean", nullable=true)
     */
    private $column26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_27", type="boolean", nullable=true)
     */
    private $column27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_28", type="boolean", nullable=true)
     */
    private $column28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="x_3", type="string", length=255, nullable=true)
     */
    private $x3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y_3", type="string", length=255, nullable=true)
     */
    private $y3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z_3", type="string", length=255, nullable=true)
     */
    private $z3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scale_3", type="integer", nullable=true)
     */
    private $scale3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_33", type="string", length=255, nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="part_slot_4", type="integer", nullable=true)
     */
    private $partSlot4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_36", type="boolean", nullable=true)
     */
    private $column36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_37", type="boolean", nullable=true)
     */
    private $column37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_38", type="boolean", nullable=true)
     */
    private $column38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    /**
     * @var string|null
     *
     * @ORM\Column(name="x_4", type="string", length=255, nullable=true)
     */
    private $x4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y_4", type="string", length=255, nullable=true)
     */
    private $y4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z_4", type="string", length=255, nullable=true)
     */
    private $z4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="integer", nullable=true)
     */
    private $column43;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale_4", type="string", length=255, nullable=true)
     */
    private $scale4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="part_slot_5", type="integer", nullable=true)
     */
    private $partSlot5;

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
     * @var string|null
     *
     * @ORM\Column(name="x_5", type="string", length=255, nullable=true)
     */
    private $x5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y_5", type="string", length=255, nullable=true)
     */
    private $y5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z_5", type="string", length=255, nullable=true)
     */
    private $z5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_54", type="integer", nullable=true)
     */
    private $column54;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale_5", type="string", length=255, nullable=true)
     */
    private $scale5;

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
     * @var string|null
     *
     * @ORM\Column(name="column_62", type="string", length=255, nullable=true)
     */
    private $column62;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_63", type="string", length=255, nullable=true)
     */
    private $column63;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_64", type="string", length=255, nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="integer", nullable=true)
     */
    private $column65;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_66", type="string", length=255, nullable=true)
     */
    private $column66;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_5", referencedColumnName="pk")
     * })
     */
    private $bnpcBase5;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_4", referencedColumnName="pk")
     * })
     */
    private $bnpcBase4;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_3", referencedColumnName="pk")
     * })
     */
    private $bnpcBase3;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_2", referencedColumnName="pk")
     * })
     */
    private $bnpcBase2;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_1", referencedColumnName="pk")
     * })
     */
    private $bnpcBase1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPartSlot1(): ?int
    {
        return $this->partSlot1;
    }

    public function setPartSlot1(?int $partSlot1): self
    {
        $this->partSlot1 = $partSlot1;

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

    public function getX1(): ?string
    {
        return $this->x1;
    }

    public function setX1(?string $x1): self
    {
        $this->x1 = $x1;

        return $this;
    }

    public function getY1(): ?string
    {
        return $this->y1;
    }

    public function setY1(?string $y1): self
    {
        $this->y1 = $y1;

        return $this;
    }

    public function getZ1(): ?string
    {
        return $this->z1;
    }

    public function setZ1(?string $z1): self
    {
        $this->z1 = $z1;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getScale1(): ?string
    {
        return $this->scale1;
    }

    public function setScale1(?string $scale1): self
    {
        $this->scale1 = $scale1;

        return $this;
    }

    public function getPartSlot2(): ?int
    {
        return $this->partSlot2;
    }

    public function setPartSlot2(?int $partSlot2): self
    {
        $this->partSlot2 = $partSlot2;

        return $this;
    }

    public function getColumn14(): ?bool
    {
        return $this->column14;
    }

    public function setColumn14(?bool $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?bool
    {
        return $this->column16;
    }

    public function setColumn16(?bool $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?bool
    {
        return $this->column17;
    }

    public function setColumn17(?bool $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getX2(): ?string
    {
        return $this->x2;
    }

    public function setX2(?string $x2): self
    {
        $this->x2 = $x2;

        return $this;
    }

    public function getY2(): ?string
    {
        return $this->y2;
    }

    public function setY2(?string $y2): self
    {
        $this->y2 = $y2;

        return $this;
    }

    public function getZ2(): ?string
    {
        return $this->z2;
    }

    public function setZ2(?string $z2): self
    {
        $this->z2 = $z2;

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

    public function getScale2(): ?string
    {
        return $this->scale2;
    }

    public function setScale2(?string $scale2): self
    {
        $this->scale2 = $scale2;

        return $this;
    }

    public function getPartSlot3(): ?int
    {
        return $this->partSlot3;
    }

    public function setPartSlot3(?int $partSlot3): self
    {
        $this->partSlot3 = $partSlot3;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?bool
    {
        return $this->column26;
    }

    public function setColumn26(?bool $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?bool
    {
        return $this->column27;
    }

    public function setColumn27(?bool $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?bool
    {
        return $this->column28;
    }

    public function setColumn28(?bool $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getX3(): ?string
    {
        return $this->x3;
    }

    public function setX3(?string $x3): self
    {
        $this->x3 = $x3;

        return $this;
    }

    public function getY3(): ?string
    {
        return $this->y3;
    }

    public function setY3(?string $y3): self
    {
        $this->y3 = $y3;

        return $this;
    }

    public function getZ3(): ?string
    {
        return $this->z3;
    }

    public function setZ3(?string $z3): self
    {
        $this->z3 = $z3;

        return $this;
    }

    public function getScale3(): ?int
    {
        return $this->scale3;
    }

    public function setScale3(?int $scale3): self
    {
        $this->scale3 = $scale3;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getPartSlot4(): ?int
    {
        return $this->partSlot4;
    }

    public function setPartSlot4(?int $partSlot4): self
    {
        $this->partSlot4 = $partSlot4;

        return $this;
    }

    public function getColumn36(): ?bool
    {
        return $this->column36;
    }

    public function setColumn36(?bool $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?bool
    {
        return $this->column37;
    }

    public function setColumn37(?bool $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?bool
    {
        return $this->column38;
    }

    public function setColumn38(?bool $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?bool
    {
        return $this->column39;
    }

    public function setColumn39(?bool $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getX4(): ?string
    {
        return $this->x4;
    }

    public function setX4(?string $x4): self
    {
        $this->x4 = $x4;

        return $this;
    }

    public function getY4(): ?string
    {
        return $this->y4;
    }

    public function setY4(?string $y4): self
    {
        $this->y4 = $y4;

        return $this;
    }

    public function getZ4(): ?string
    {
        return $this->z4;
    }

    public function setZ4(?string $z4): self
    {
        $this->z4 = $z4;

        return $this;
    }

    public function getColumn43(): ?int
    {
        return $this->column43;
    }

    public function setColumn43(?int $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getScale4(): ?string
    {
        return $this->scale4;
    }

    public function setScale4(?string $scale4): self
    {
        $this->scale4 = $scale4;

        return $this;
    }

    public function getPartSlot5(): ?int
    {
        return $this->partSlot5;
    }

    public function setPartSlot5(?int $partSlot5): self
    {
        $this->partSlot5 = $partSlot5;

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

    public function getX5(): ?string
    {
        return $this->x5;
    }

    public function setX5(?string $x5): self
    {
        $this->x5 = $x5;

        return $this;
    }

    public function getY5(): ?string
    {
        return $this->y5;
    }

    public function setY5(?string $y5): self
    {
        $this->y5 = $y5;

        return $this;
    }

    public function getZ5(): ?string
    {
        return $this->z5;
    }

    public function setZ5(?string $z5): self
    {
        $this->z5 = $z5;

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

    public function getScale5(): ?string
    {
        return $this->scale5;
    }

    public function setScale5(?string $scale5): self
    {
        $this->scale5 = $scale5;

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

    public function getColumn62(): ?string
    {
        return $this->column62;
    }

    public function setColumn62(?string $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?string
    {
        return $this->column63;
    }

    public function setColumn63(?string $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?string
    {
        return $this->column64;
    }

    public function setColumn64(?string $column64): self
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

    public function getColumn66(): ?string
    {
        return $this->column66;
    }

    public function setColumn66(?string $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getBnpcBase5(): ?BnpcBase
    {
        return $this->bnpcBase5;
    }

    public function setBnpcBase5(?BnpcBase $bnpcBase5): self
    {
        $this->bnpcBase5 = $bnpcBase5;

        return $this;
    }

    public function getBnpcBase4(): ?BnpcBase
    {
        return $this->bnpcBase4;
    }

    public function setBnpcBase4(?BnpcBase $bnpcBase4): self
    {
        $this->bnpcBase4 = $bnpcBase4;

        return $this;
    }

    public function getBnpcBase3(): ?BnpcBase
    {
        return $this->bnpcBase3;
    }

    public function setBnpcBase3(?BnpcBase $bnpcBase3): self
    {
        $this->bnpcBase3 = $bnpcBase3;

        return $this;
    }

    public function getBnpcBase2(): ?BnpcBase
    {
        return $this->bnpcBase2;
    }

    public function setBnpcBase2(?BnpcBase $bnpcBase2): self
    {
        $this->bnpcBase2 = $bnpcBase2;

        return $this;
    }

    public function getBnpcBase1(): ?BnpcBase
    {
        return $this->bnpcBase1;
    }

    public function setBnpcBase1(?BnpcBase $bnpcBase1): self
    {
        $this->bnpcBase1 = $bnpcBase1;

        return $this;
    }
}
