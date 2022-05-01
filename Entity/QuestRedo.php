<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRedo.
 *
 * @ORM\Table(name="quest_redo", indexes={@ORM\Index(name="idx_7cf8c058a7f38dff", columns={"quest_13"}), @ORM\Index(name="idx_7cf8c058420fab87", columns={"final_quest"}), @ORM\Index(name="idx_7cf8c058951a66c3", columns={"quest_9"}), @ORM\Index(name="idx_7cf8c05875cf8fdd", columns={"quest_3"}), @ORM\Index(name="idx_7cf8c05812ba4b9f", columns={"quest_24"}), @ORM\Index(name="idx_7cf8c05865bd7b09", columns={"quest_25"}), @ORM\Index(name="idx_7cf8c05849fdecd3", columns={"quest_11"}), @ORM\Index(name="idx_7cf8c0587bcb8e51", columns={"quest_31"}), @ORM\Index(name="idx_7cf8c05830215477", columns={"quest_18"}), @ORM\Index(name="idx_7cf8c0586c0b3722", columns={"quest_29"}), @ORM\Index(name="idx_7cf8c058d0f4bd69", columns={"quest_12"}), @ORM\Index(name="idx_7cf8c05862d0bf10", columns={"quest_21"}), @ORM\Index(name="idx_7cf8c058fcb42ab3", columns={"quest_26"}), @ORM\Index(name="idx_7cf8c05815d78f86", columns={"quest_20"}), @ORM\Index(name="idx_7cf8c058ebab1a7e", columns={"quest_4"}), @ORM\Index(name="idx_7cf8c0588bb31a25", columns={"quest_27"}), @ORM\Index(name="idx_7cf8c0583efadc45", columns={"quest_10"}), @ORM\Index(name="idx_7cf8c0585a57b52", columns={"quest_6"}), @ORM\Index(name="idx_7cf8c0581b0c07b4", columns={"quest_28"}), @ORM\Index(name="idx_7cf8c0589bc1eef1", columns={"quest_1"}), @ORM\Index(name="idx_7cf8c0584e9028ca", columns={"quest_15"}), @ORM\Index(name="idx_7cf8c058a09e49e6", columns={"quest_17"}), @ORM\Index(name="idx_7cf8c058472664e1", columns={"quest_19"}), @ORM\Index(name="idx_7cf8c058cccbec7", columns={"quest_30"}), @ORM\Index(name="idx_7cf8c058fbd9eeaa", columns={"quest_22"}), @ORM\Index(name="idx_7cf8c0582c8bf4b", columns={"quest_2"}), @ORM\Index(name="idx_7cf8c0583997185c", columns={"quest_14"}), @ORM\Index(name="idx_7cf8c0589cac2ae8", columns={"quest_5"}), @ORM\Index(name="idx_7cf8c058d7997970", columns={"quest_16"}), @ORM\Index(name="idx_7cf8c05872a24bc4", columns={"quest_7"}), @ORM\Index(name="idx_7cf8c058e21d5655", columns={"quest_8"}), @ORM\Index(name="idx_7cf8c058ecc6de67", columns={"quest_0"}), @ORM\Index(name="idx_7cf8c058f981b52e", columns={"chapter"}), @ORM\Index(name="idx_7cf8c0588cdede3c", columns={"quest_23"})})
 * @ORM\Entity
 */
class QuestRedo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_redo_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
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
     * @ORM\Column(name="column_37", type="integer", nullable=true)
     */
    private $column37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="integer", nullable=true)
     */
    private $column38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="integer", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="integer", nullable=true)
     */
    private $column40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="integer", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="integer", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="integer", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="integer", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="integer", nullable=true)
     */
    private $column45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_46", type="integer", nullable=true)
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
     * @ORM\Column(name="column_55", type="integer", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="integer", nullable=true)
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
     * @ORM\Column(name="column_58", type="integer", nullable=true)
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
     * @ORM\Column(name="column_60", type="integer", nullable=true)
     */
    private $column60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_61", type="integer", nullable=true)
     */
    private $column61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_62", type="integer", nullable=true)
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
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_31", referencedColumnName="pk")
     * })
     */
    private $quest31;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_30", referencedColumnName="pk")
     * })
     */
    private $quest30;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_29", referencedColumnName="pk")
     * })
     */
    private $quest29;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_28", referencedColumnName="pk")
     * })
     */
    private $quest28;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_27", referencedColumnName="pk")
     * })
     */
    private $quest27;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_26", referencedColumnName="pk")
     * })
     */
    private $quest26;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_25", referencedColumnName="pk")
     * })
     */
    private $quest25;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_24", referencedColumnName="pk")
     * })
     */
    private $quest24;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_23", referencedColumnName="pk")
     * })
     */
    private $quest23;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_22", referencedColumnName="pk")
     * })
     */
    private $quest22;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_21", referencedColumnName="pk")
     * })
     */
    private $quest21;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_20", referencedColumnName="pk")
     * })
     */
    private $quest20;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_19", referencedColumnName="pk")
     * })
     */
    private $quest19;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_18", referencedColumnName="pk")
     * })
     */
    private $quest18;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_17", referencedColumnName="pk")
     * })
     */
    private $quest17;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_16", referencedColumnName="pk")
     * })
     */
    private $quest16;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_15", referencedColumnName="pk")
     * })
     */
    private $quest15;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_14", referencedColumnName="pk")
     * })
     */
    private $quest14;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_13", referencedColumnName="pk")
     * })
     */
    private $quest13;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_12", referencedColumnName="pk")
     * })
     */
    private $quest12;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_11", referencedColumnName="pk")
     * })
     */
    private $quest11;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_10", referencedColumnName="pk")
     * })
     */
    private $quest10;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_9", referencedColumnName="pk")
     * })
     */
    private $quest9;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_8", referencedColumnName="pk")
     * })
     */
    private $quest8;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_7", referencedColumnName="pk")
     * })
     */
    private $quest7;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_6", referencedColumnName="pk")
     * })
     */
    private $quest6;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_5", referencedColumnName="pk")
     * })
     */
    private $quest5;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_4", referencedColumnName="pk")
     * })
     */
    private $quest4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_3", referencedColumnName="pk")
     * })
     */
    private $quest3;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_2", referencedColumnName="pk")
     * })
     */
    private $quest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_1", referencedColumnName="pk")
     * })
     */
    private $quest1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_0", referencedColumnName="pk")
     * })
     */
    private $quest0;

    /**
     * @var QuestRedoChapter
     *
     * @ORM\ManyToOne(targetEntity="QuestRedoChapter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chapter", referencedColumnName="pk")
     * })
     */
    private $chapter;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="final_quest", referencedColumnName="pk")
     * })
     */
    private $finalQuest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
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

    public function getColumn37(): ?int
    {
        return $this->column37;
    }

    public function setColumn37(?int $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?int
    {
        return $this->column38;
    }

    public function setColumn38(?int $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?int
    {
        return $this->column39;
    }

    public function setColumn39(?int $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?int
    {
        return $this->column40;
    }

    public function setColumn40(?int $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?int
    {
        return $this->column41;
    }

    public function setColumn41(?int $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?int
    {
        return $this->column42;
    }

    public function setColumn42(?int $column42): self
    {
        $this->column42 = $column42;

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

    public function getColumn44(): ?int
    {
        return $this->column44;
    }

    public function setColumn44(?int $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?int
    {
        return $this->column45;
    }

    public function setColumn45(?int $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?int
    {
        return $this->column46;
    }

    public function setColumn46(?int $column46): self
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

    public function getColumn55(): ?int
    {
        return $this->column55;
    }

    public function setColumn55(?int $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?int
    {
        return $this->column56;
    }

    public function setColumn56(?int $column56): self
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

    public function getColumn58(): ?int
    {
        return $this->column58;
    }

    public function setColumn58(?int $column58): self
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

    public function getColumn60(): ?int
    {
        return $this->column60;
    }

    public function setColumn60(?int $column60): self
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

    public function getColumn62(): ?int
    {
        return $this->column62;
    }

    public function setColumn62(?int $column62): self
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

    public function getQuest31(): ?Quest
    {
        return $this->quest31;
    }

    public function setQuest31(?Quest $quest31): self
    {
        $this->quest31 = $quest31;

        return $this;
    }

    public function getQuest30(): ?Quest
    {
        return $this->quest30;
    }

    public function setQuest30(?Quest $quest30): self
    {
        $this->quest30 = $quest30;

        return $this;
    }

    public function getQuest29(): ?Quest
    {
        return $this->quest29;
    }

    public function setQuest29(?Quest $quest29): self
    {
        $this->quest29 = $quest29;

        return $this;
    }

    public function getQuest28(): ?Quest
    {
        return $this->quest28;
    }

    public function setQuest28(?Quest $quest28): self
    {
        $this->quest28 = $quest28;

        return $this;
    }

    public function getQuest27(): ?Quest
    {
        return $this->quest27;
    }

    public function setQuest27(?Quest $quest27): self
    {
        $this->quest27 = $quest27;

        return $this;
    }

    public function getQuest26(): ?Quest
    {
        return $this->quest26;
    }

    public function setQuest26(?Quest $quest26): self
    {
        $this->quest26 = $quest26;

        return $this;
    }

    public function getQuest25(): ?Quest
    {
        return $this->quest25;
    }

    public function setQuest25(?Quest $quest25): self
    {
        $this->quest25 = $quest25;

        return $this;
    }

    public function getQuest24(): ?Quest
    {
        return $this->quest24;
    }

    public function setQuest24(?Quest $quest24): self
    {
        $this->quest24 = $quest24;

        return $this;
    }

    public function getQuest23(): ?Quest
    {
        return $this->quest23;
    }

    public function setQuest23(?Quest $quest23): self
    {
        $this->quest23 = $quest23;

        return $this;
    }

    public function getQuest22(): ?Quest
    {
        return $this->quest22;
    }

    public function setQuest22(?Quest $quest22): self
    {
        $this->quest22 = $quest22;

        return $this;
    }

    public function getQuest21(): ?Quest
    {
        return $this->quest21;
    }

    public function setQuest21(?Quest $quest21): self
    {
        $this->quest21 = $quest21;

        return $this;
    }

    public function getQuest20(): ?Quest
    {
        return $this->quest20;
    }

    public function setQuest20(?Quest $quest20): self
    {
        $this->quest20 = $quest20;

        return $this;
    }

    public function getQuest19(): ?Quest
    {
        return $this->quest19;
    }

    public function setQuest19(?Quest $quest19): self
    {
        $this->quest19 = $quest19;

        return $this;
    }

    public function getQuest18(): ?Quest
    {
        return $this->quest18;
    }

    public function setQuest18(?Quest $quest18): self
    {
        $this->quest18 = $quest18;

        return $this;
    }

    public function getQuest17(): ?Quest
    {
        return $this->quest17;
    }

    public function setQuest17(?Quest $quest17): self
    {
        $this->quest17 = $quest17;

        return $this;
    }

    public function getQuest16(): ?Quest
    {
        return $this->quest16;
    }

    public function setQuest16(?Quest $quest16): self
    {
        $this->quest16 = $quest16;

        return $this;
    }

    public function getQuest15(): ?Quest
    {
        return $this->quest15;
    }

    public function setQuest15(?Quest $quest15): self
    {
        $this->quest15 = $quest15;

        return $this;
    }

    public function getQuest14(): ?Quest
    {
        return $this->quest14;
    }

    public function setQuest14(?Quest $quest14): self
    {
        $this->quest14 = $quest14;

        return $this;
    }

    public function getQuest13(): ?Quest
    {
        return $this->quest13;
    }

    public function setQuest13(?Quest $quest13): self
    {
        $this->quest13 = $quest13;

        return $this;
    }

    public function getQuest12(): ?Quest
    {
        return $this->quest12;
    }

    public function setQuest12(?Quest $quest12): self
    {
        $this->quest12 = $quest12;

        return $this;
    }

    public function getQuest11(): ?Quest
    {
        return $this->quest11;
    }

    public function setQuest11(?Quest $quest11): self
    {
        $this->quest11 = $quest11;

        return $this;
    }

    public function getQuest10(): ?Quest
    {
        return $this->quest10;
    }

    public function setQuest10(?Quest $quest10): self
    {
        $this->quest10 = $quest10;

        return $this;
    }

    public function getQuest9(): ?Quest
    {
        return $this->quest9;
    }

    public function setQuest9(?Quest $quest9): self
    {
        $this->quest9 = $quest9;

        return $this;
    }

    public function getQuest8(): ?Quest
    {
        return $this->quest8;
    }

    public function setQuest8(?Quest $quest8): self
    {
        $this->quest8 = $quest8;

        return $this;
    }

    public function getQuest7(): ?Quest
    {
        return $this->quest7;
    }

    public function setQuest7(?Quest $quest7): self
    {
        $this->quest7 = $quest7;

        return $this;
    }

    public function getQuest6(): ?Quest
    {
        return $this->quest6;
    }

    public function setQuest6(?Quest $quest6): self
    {
        $this->quest6 = $quest6;

        return $this;
    }

    public function getQuest5(): ?Quest
    {
        return $this->quest5;
    }

    public function setQuest5(?Quest $quest5): self
    {
        $this->quest5 = $quest5;

        return $this;
    }

    public function getQuest4(): ?Quest
    {
        return $this->quest4;
    }

    public function setQuest4(?Quest $quest4): self
    {
        $this->quest4 = $quest4;

        return $this;
    }

    public function getQuest3(): ?Quest
    {
        return $this->quest3;
    }

    public function setQuest3(?Quest $quest3): self
    {
        $this->quest3 = $quest3;

        return $this;
    }

    public function getQuest2(): ?Quest
    {
        return $this->quest2;
    }

    public function setQuest2(?Quest $quest2): self
    {
        $this->quest2 = $quest2;

        return $this;
    }

    public function getQuest1(): ?Quest
    {
        return $this->quest1;
    }

    public function setQuest1(?Quest $quest1): self
    {
        $this->quest1 = $quest1;

        return $this;
    }

    public function getQuest0(): ?Quest
    {
        return $this->quest0;
    }

    public function setQuest0(?Quest $quest0): self
    {
        $this->quest0 = $quest0;

        return $this;
    }

    public function getChapter(): ?QuestRedoChapter
    {
        return $this->chapter;
    }

    public function setChapter(?QuestRedoChapter $chapter): self
    {
        $this->chapter = $chapter;

        return $this;
    }

    public function getFinalQuest(): ?Quest
    {
        return $this->finalQuest;
    }

    public function setFinalQuest(?Quest $finalQuest): self
    {
        $this->finalQuest = $finalQuest;

        return $this;
    }
}
