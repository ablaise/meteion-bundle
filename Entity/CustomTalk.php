<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomTalk.
 *
 * @ORM\Table(name="custom_talk")
 * @ORM\Entity
 */
class CustomTalk
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="custom_talk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_actor", type="integer", nullable=true)
     */
    private $iconActor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_map", type="integer", nullable=true)
     */
    private $iconMap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_0", type="string", length=255, nullable=true)
     */
    private $scriptInstruction0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_1", type="string", length=255, nullable=true)
     */
    private $scriptInstruction1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_2", type="string", length=255, nullable=true)
     */
    private $scriptInstruction2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_3", type="string", length=255, nullable=true)
     */
    private $scriptInstruction3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_4", type="string", length=255, nullable=true)
     */
    private $scriptInstruction4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_5", type="string", length=255, nullable=true)
     */
    private $scriptInstruction5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_6", type="string", length=255, nullable=true)
     */
    private $scriptInstruction6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_7", type="string", length=255, nullable=true)
     */
    private $scriptInstruction7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_8", type="string", length=255, nullable=true)
     */
    private $scriptInstruction8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_9", type="string", length=255, nullable=true)
     */
    private $scriptInstruction9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_10", type="string", length=255, nullable=true)
     */
    private $scriptInstruction10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_11", type="string", length=255, nullable=true)
     */
    private $scriptInstruction11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_12", type="string", length=255, nullable=true)
     */
    private $scriptInstruction12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_13", type="string", length=255, nullable=true)
     */
    private $scriptInstruction13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_14", type="string", length=255, nullable=true)
     */
    private $scriptInstruction14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_15", type="string", length=255, nullable=true)
     */
    private $scriptInstruction15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_16", type="string", length=255, nullable=true)
     */
    private $scriptInstruction16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_17", type="string", length=255, nullable=true)
     */
    private $scriptInstruction17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_18", type="string", length=255, nullable=true)
     */
    private $scriptInstruction18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_19", type="string", length=255, nullable=true)
     */
    private $scriptInstruction19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_20", type="string", length=255, nullable=true)
     */
    private $scriptInstruction20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_21", type="string", length=255, nullable=true)
     */
    private $scriptInstruction21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_22", type="string", length=255, nullable=true)
     */
    private $scriptInstruction22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_23", type="string", length=255, nullable=true)
     */
    private $scriptInstruction23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_24", type="string", length=255, nullable=true)
     */
    private $scriptInstruction24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_25", type="string", length=255, nullable=true)
     */
    private $scriptInstruction25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_26", type="string", length=255, nullable=true)
     */
    private $scriptInstruction26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_27", type="string", length=255, nullable=true)
     */
    private $scriptInstruction27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_28", type="string", length=255, nullable=true)
     */
    private $scriptInstruction28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_29", type="string", length=255, nullable=true)
     */
    private $scriptInstruction29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_0", type="bigint", nullable=true)
     */
    private $scriptArg0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_1", type="bigint", nullable=true)
     */
    private $scriptArg1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_2", type="bigint", nullable=true)
     */
    private $scriptArg2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_3", type="bigint", nullable=true)
     */
    private $scriptArg3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_4", type="bigint", nullable=true)
     */
    private $scriptArg4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_5", type="bigint", nullable=true)
     */
    private $scriptArg5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_6", type="bigint", nullable=true)
     */
    private $scriptArg6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_7", type="bigint", nullable=true)
     */
    private $scriptArg7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_8", type="bigint", nullable=true)
     */
    private $scriptArg8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_9", type="bigint", nullable=true)
     */
    private $scriptArg9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_10", type="bigint", nullable=true)
     */
    private $scriptArg10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_11", type="bigint", nullable=true)
     */
    private $scriptArg11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_12", type="bigint", nullable=true)
     */
    private $scriptArg12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_13", type="bigint", nullable=true)
     */
    private $scriptArg13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_14", type="bigint", nullable=true)
     */
    private $scriptArg14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_15", type="bigint", nullable=true)
     */
    private $scriptArg15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_16", type="bigint", nullable=true)
     */
    private $scriptArg16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_17", type="bigint", nullable=true)
     */
    private $scriptArg17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_18", type="bigint", nullable=true)
     */
    private $scriptArg18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_19", type="bigint", nullable=true)
     */
    private $scriptArg19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_20", type="bigint", nullable=true)
     */
    private $scriptArg20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_21", type="bigint", nullable=true)
     */
    private $scriptArg21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_22", type="bigint", nullable=true)
     */
    private $scriptArg22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_23", type="bigint", nullable=true)
     */
    private $scriptArg23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_24", type="bigint", nullable=true)
     */
    private $scriptArg24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_25", type="bigint", nullable=true)
     */
    private $scriptArg25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_26", type="bigint", nullable=true)
     */
    private $scriptArg26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_27", type="bigint", nullable=true)
     */
    private $scriptArg27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_28", type="bigint", nullable=true)
     */
    private $scriptArg28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_29", type="bigint", nullable=true)
     */
    private $scriptArg29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_64", type="boolean", nullable=true)
     */
    private $column64;

    /**
     * @var string|null
     *
     * @ORM\Column(name="main_option", type="string", length=255, nullable=true)
     */
    private $mainOption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sub_option", type="string", length=255, nullable=true)
     */
    private $subOption;

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
     * @var int|null
     *
     * @ORM\Column(name="special_links", type="integer", nullable=true)
     */
    private $specialLinks;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_77", type="integer", nullable=true)
     */
    private $column77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_78", type="integer", nullable=true)
     */
    private $column78;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_79", type="boolean", nullable=true)
     */
    private $column79;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIconActor(): ?int
    {
        return $this->iconActor;
    }

    public function setIconActor(?int $iconActor): self
    {
        $this->iconActor = $iconActor;

        return $this;
    }

    public function getIconMap(): ?int
    {
        return $this->iconMap;
    }

    public function setIconMap(?int $iconMap): self
    {
        $this->iconMap = $iconMap;

        return $this;
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

    public function getScriptInstruction0(): ?string
    {
        return $this->scriptInstruction0;
    }

    public function setScriptInstruction0(?string $scriptInstruction0): self
    {
        $this->scriptInstruction0 = $scriptInstruction0;

        return $this;
    }

    public function getScriptInstruction1(): ?string
    {
        return $this->scriptInstruction1;
    }

    public function setScriptInstruction1(?string $scriptInstruction1): self
    {
        $this->scriptInstruction1 = $scriptInstruction1;

        return $this;
    }

    public function getScriptInstruction2(): ?string
    {
        return $this->scriptInstruction2;
    }

    public function setScriptInstruction2(?string $scriptInstruction2): self
    {
        $this->scriptInstruction2 = $scriptInstruction2;

        return $this;
    }

    public function getScriptInstruction3(): ?string
    {
        return $this->scriptInstruction3;
    }

    public function setScriptInstruction3(?string $scriptInstruction3): self
    {
        $this->scriptInstruction3 = $scriptInstruction3;

        return $this;
    }

    public function getScriptInstruction4(): ?string
    {
        return $this->scriptInstruction4;
    }

    public function setScriptInstruction4(?string $scriptInstruction4): self
    {
        $this->scriptInstruction4 = $scriptInstruction4;

        return $this;
    }

    public function getScriptInstruction5(): ?string
    {
        return $this->scriptInstruction5;
    }

    public function setScriptInstruction5(?string $scriptInstruction5): self
    {
        $this->scriptInstruction5 = $scriptInstruction5;

        return $this;
    }

    public function getScriptInstruction6(): ?string
    {
        return $this->scriptInstruction6;
    }

    public function setScriptInstruction6(?string $scriptInstruction6): self
    {
        $this->scriptInstruction6 = $scriptInstruction6;

        return $this;
    }

    public function getScriptInstruction7(): ?string
    {
        return $this->scriptInstruction7;
    }

    public function setScriptInstruction7(?string $scriptInstruction7): self
    {
        $this->scriptInstruction7 = $scriptInstruction7;

        return $this;
    }

    public function getScriptInstruction8(): ?string
    {
        return $this->scriptInstruction8;
    }

    public function setScriptInstruction8(?string $scriptInstruction8): self
    {
        $this->scriptInstruction8 = $scriptInstruction8;

        return $this;
    }

    public function getScriptInstruction9(): ?string
    {
        return $this->scriptInstruction9;
    }

    public function setScriptInstruction9(?string $scriptInstruction9): self
    {
        $this->scriptInstruction9 = $scriptInstruction9;

        return $this;
    }

    public function getScriptInstruction10(): ?string
    {
        return $this->scriptInstruction10;
    }

    public function setScriptInstruction10(?string $scriptInstruction10): self
    {
        $this->scriptInstruction10 = $scriptInstruction10;

        return $this;
    }

    public function getScriptInstruction11(): ?string
    {
        return $this->scriptInstruction11;
    }

    public function setScriptInstruction11(?string $scriptInstruction11): self
    {
        $this->scriptInstruction11 = $scriptInstruction11;

        return $this;
    }

    public function getScriptInstruction12(): ?string
    {
        return $this->scriptInstruction12;
    }

    public function setScriptInstruction12(?string $scriptInstruction12): self
    {
        $this->scriptInstruction12 = $scriptInstruction12;

        return $this;
    }

    public function getScriptInstruction13(): ?string
    {
        return $this->scriptInstruction13;
    }

    public function setScriptInstruction13(?string $scriptInstruction13): self
    {
        $this->scriptInstruction13 = $scriptInstruction13;

        return $this;
    }

    public function getScriptInstruction14(): ?string
    {
        return $this->scriptInstruction14;
    }

    public function setScriptInstruction14(?string $scriptInstruction14): self
    {
        $this->scriptInstruction14 = $scriptInstruction14;

        return $this;
    }

    public function getScriptInstruction15(): ?string
    {
        return $this->scriptInstruction15;
    }

    public function setScriptInstruction15(?string $scriptInstruction15): self
    {
        $this->scriptInstruction15 = $scriptInstruction15;

        return $this;
    }

    public function getScriptInstruction16(): ?string
    {
        return $this->scriptInstruction16;
    }

    public function setScriptInstruction16(?string $scriptInstruction16): self
    {
        $this->scriptInstruction16 = $scriptInstruction16;

        return $this;
    }

    public function getScriptInstruction17(): ?string
    {
        return $this->scriptInstruction17;
    }

    public function setScriptInstruction17(?string $scriptInstruction17): self
    {
        $this->scriptInstruction17 = $scriptInstruction17;

        return $this;
    }

    public function getScriptInstruction18(): ?string
    {
        return $this->scriptInstruction18;
    }

    public function setScriptInstruction18(?string $scriptInstruction18): self
    {
        $this->scriptInstruction18 = $scriptInstruction18;

        return $this;
    }

    public function getScriptInstruction19(): ?string
    {
        return $this->scriptInstruction19;
    }

    public function setScriptInstruction19(?string $scriptInstruction19): self
    {
        $this->scriptInstruction19 = $scriptInstruction19;

        return $this;
    }

    public function getScriptInstruction20(): ?string
    {
        return $this->scriptInstruction20;
    }

    public function setScriptInstruction20(?string $scriptInstruction20): self
    {
        $this->scriptInstruction20 = $scriptInstruction20;

        return $this;
    }

    public function getScriptInstruction21(): ?string
    {
        return $this->scriptInstruction21;
    }

    public function setScriptInstruction21(?string $scriptInstruction21): self
    {
        $this->scriptInstruction21 = $scriptInstruction21;

        return $this;
    }

    public function getScriptInstruction22(): ?string
    {
        return $this->scriptInstruction22;
    }

    public function setScriptInstruction22(?string $scriptInstruction22): self
    {
        $this->scriptInstruction22 = $scriptInstruction22;

        return $this;
    }

    public function getScriptInstruction23(): ?string
    {
        return $this->scriptInstruction23;
    }

    public function setScriptInstruction23(?string $scriptInstruction23): self
    {
        $this->scriptInstruction23 = $scriptInstruction23;

        return $this;
    }

    public function getScriptInstruction24(): ?string
    {
        return $this->scriptInstruction24;
    }

    public function setScriptInstruction24(?string $scriptInstruction24): self
    {
        $this->scriptInstruction24 = $scriptInstruction24;

        return $this;
    }

    public function getScriptInstruction25(): ?string
    {
        return $this->scriptInstruction25;
    }

    public function setScriptInstruction25(?string $scriptInstruction25): self
    {
        $this->scriptInstruction25 = $scriptInstruction25;

        return $this;
    }

    public function getScriptInstruction26(): ?string
    {
        return $this->scriptInstruction26;
    }

    public function setScriptInstruction26(?string $scriptInstruction26): self
    {
        $this->scriptInstruction26 = $scriptInstruction26;

        return $this;
    }

    public function getScriptInstruction27(): ?string
    {
        return $this->scriptInstruction27;
    }

    public function setScriptInstruction27(?string $scriptInstruction27): self
    {
        $this->scriptInstruction27 = $scriptInstruction27;

        return $this;
    }

    public function getScriptInstruction28(): ?string
    {
        return $this->scriptInstruction28;
    }

    public function setScriptInstruction28(?string $scriptInstruction28): self
    {
        $this->scriptInstruction28 = $scriptInstruction28;

        return $this;
    }

    public function getScriptInstruction29(): ?string
    {
        return $this->scriptInstruction29;
    }

    public function setScriptInstruction29(?string $scriptInstruction29): self
    {
        $this->scriptInstruction29 = $scriptInstruction29;

        return $this;
    }

    public function getScriptArg0(): ?string
    {
        return $this->scriptArg0;
    }

    public function setScriptArg0(?string $scriptArg0): self
    {
        $this->scriptArg0 = $scriptArg0;

        return $this;
    }

    public function getScriptArg1(): ?string
    {
        return $this->scriptArg1;
    }

    public function setScriptArg1(?string $scriptArg1): self
    {
        $this->scriptArg1 = $scriptArg1;

        return $this;
    }

    public function getScriptArg2(): ?string
    {
        return $this->scriptArg2;
    }

    public function setScriptArg2(?string $scriptArg2): self
    {
        $this->scriptArg2 = $scriptArg2;

        return $this;
    }

    public function getScriptArg3(): ?string
    {
        return $this->scriptArg3;
    }

    public function setScriptArg3(?string $scriptArg3): self
    {
        $this->scriptArg3 = $scriptArg3;

        return $this;
    }

    public function getScriptArg4(): ?string
    {
        return $this->scriptArg4;
    }

    public function setScriptArg4(?string $scriptArg4): self
    {
        $this->scriptArg4 = $scriptArg4;

        return $this;
    }

    public function getScriptArg5(): ?string
    {
        return $this->scriptArg5;
    }

    public function setScriptArg5(?string $scriptArg5): self
    {
        $this->scriptArg5 = $scriptArg5;

        return $this;
    }

    public function getScriptArg6(): ?string
    {
        return $this->scriptArg6;
    }

    public function setScriptArg6(?string $scriptArg6): self
    {
        $this->scriptArg6 = $scriptArg6;

        return $this;
    }

    public function getScriptArg7(): ?string
    {
        return $this->scriptArg7;
    }

    public function setScriptArg7(?string $scriptArg7): self
    {
        $this->scriptArg7 = $scriptArg7;

        return $this;
    }

    public function getScriptArg8(): ?string
    {
        return $this->scriptArg8;
    }

    public function setScriptArg8(?string $scriptArg8): self
    {
        $this->scriptArg8 = $scriptArg8;

        return $this;
    }

    public function getScriptArg9(): ?string
    {
        return $this->scriptArg9;
    }

    public function setScriptArg9(?string $scriptArg9): self
    {
        $this->scriptArg9 = $scriptArg9;

        return $this;
    }

    public function getScriptArg10(): ?string
    {
        return $this->scriptArg10;
    }

    public function setScriptArg10(?string $scriptArg10): self
    {
        $this->scriptArg10 = $scriptArg10;

        return $this;
    }

    public function getScriptArg11(): ?string
    {
        return $this->scriptArg11;
    }

    public function setScriptArg11(?string $scriptArg11): self
    {
        $this->scriptArg11 = $scriptArg11;

        return $this;
    }

    public function getScriptArg12(): ?string
    {
        return $this->scriptArg12;
    }

    public function setScriptArg12(?string $scriptArg12): self
    {
        $this->scriptArg12 = $scriptArg12;

        return $this;
    }

    public function getScriptArg13(): ?string
    {
        return $this->scriptArg13;
    }

    public function setScriptArg13(?string $scriptArg13): self
    {
        $this->scriptArg13 = $scriptArg13;

        return $this;
    }

    public function getScriptArg14(): ?string
    {
        return $this->scriptArg14;
    }

    public function setScriptArg14(?string $scriptArg14): self
    {
        $this->scriptArg14 = $scriptArg14;

        return $this;
    }

    public function getScriptArg15(): ?string
    {
        return $this->scriptArg15;
    }

    public function setScriptArg15(?string $scriptArg15): self
    {
        $this->scriptArg15 = $scriptArg15;

        return $this;
    }

    public function getScriptArg16(): ?string
    {
        return $this->scriptArg16;
    }

    public function setScriptArg16(?string $scriptArg16): self
    {
        $this->scriptArg16 = $scriptArg16;

        return $this;
    }

    public function getScriptArg17(): ?string
    {
        return $this->scriptArg17;
    }

    public function setScriptArg17(?string $scriptArg17): self
    {
        $this->scriptArg17 = $scriptArg17;

        return $this;
    }

    public function getScriptArg18(): ?string
    {
        return $this->scriptArg18;
    }

    public function setScriptArg18(?string $scriptArg18): self
    {
        $this->scriptArg18 = $scriptArg18;

        return $this;
    }

    public function getScriptArg19(): ?string
    {
        return $this->scriptArg19;
    }

    public function setScriptArg19(?string $scriptArg19): self
    {
        $this->scriptArg19 = $scriptArg19;

        return $this;
    }

    public function getScriptArg20(): ?string
    {
        return $this->scriptArg20;
    }

    public function setScriptArg20(?string $scriptArg20): self
    {
        $this->scriptArg20 = $scriptArg20;

        return $this;
    }

    public function getScriptArg21(): ?string
    {
        return $this->scriptArg21;
    }

    public function setScriptArg21(?string $scriptArg21): self
    {
        $this->scriptArg21 = $scriptArg21;

        return $this;
    }

    public function getScriptArg22(): ?string
    {
        return $this->scriptArg22;
    }

    public function setScriptArg22(?string $scriptArg22): self
    {
        $this->scriptArg22 = $scriptArg22;

        return $this;
    }

    public function getScriptArg23(): ?string
    {
        return $this->scriptArg23;
    }

    public function setScriptArg23(?string $scriptArg23): self
    {
        $this->scriptArg23 = $scriptArg23;

        return $this;
    }

    public function getScriptArg24(): ?string
    {
        return $this->scriptArg24;
    }

    public function setScriptArg24(?string $scriptArg24): self
    {
        $this->scriptArg24 = $scriptArg24;

        return $this;
    }

    public function getScriptArg25(): ?string
    {
        return $this->scriptArg25;
    }

    public function setScriptArg25(?string $scriptArg25): self
    {
        $this->scriptArg25 = $scriptArg25;

        return $this;
    }

    public function getScriptArg26(): ?string
    {
        return $this->scriptArg26;
    }

    public function setScriptArg26(?string $scriptArg26): self
    {
        $this->scriptArg26 = $scriptArg26;

        return $this;
    }

    public function getScriptArg27(): ?string
    {
        return $this->scriptArg27;
    }

    public function setScriptArg27(?string $scriptArg27): self
    {
        $this->scriptArg27 = $scriptArg27;

        return $this;
    }

    public function getScriptArg28(): ?string
    {
        return $this->scriptArg28;
    }

    public function setScriptArg28(?string $scriptArg28): self
    {
        $this->scriptArg28 = $scriptArg28;

        return $this;
    }

    public function getScriptArg29(): ?string
    {
        return $this->scriptArg29;
    }

    public function setScriptArg29(?string $scriptArg29): self
    {
        $this->scriptArg29 = $scriptArg29;

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

    public function getMainOption(): ?string
    {
        return $this->mainOption;
    }

    public function setMainOption(?string $mainOption): self
    {
        $this->mainOption = $mainOption;

        return $this;
    }

    public function getSubOption(): ?string
    {
        return $this->subOption;
    }

    public function setSubOption(?string $subOption): self
    {
        $this->subOption = $subOption;

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

    public function getSpecialLinks(): ?int
    {
        return $this->specialLinks;
    }

    public function setSpecialLinks(?int $specialLinks): self
    {
        $this->specialLinks = $specialLinks;

        return $this;
    }

    public function getColumn77(): ?int
    {
        return $this->column77;
    }

    public function setColumn77(?int $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?int
    {
        return $this->column78;
    }

    public function setColumn78(?int $column78): self
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
}
