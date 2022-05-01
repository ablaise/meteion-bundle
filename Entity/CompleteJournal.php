<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompleteJournal.
 *
 * @ORM\Table(name="complete_journal", indexes={@ORM\Index(name="idx_5e17540bebb10206", columns={"cutscene_13"}), @ORM\Index(name="idx_5e17540b75d597a5", columns={"cutscene_14"}), @ORM\Index(name="idx_5e17540bb79b6153", columns={"cutscene_22"}), @ORM\Index(name="idx_5e17540b7c63db8e", columns={"cutscene_18"}), @ORM\Index(name="idx_5e17540bb05e49d0", columns={"cutscene_1"}), @ORM\Index(name="idx_5e17540b2957186a", columns={"cutscene_2"}), @ORM\Index(name="idx_5e17540bb7338dc9", columns={"cutscene_5"}), @ORM\Index(name="idx_5e17540b593dece5", columns={"cutscene_7"}), @ORM\Index(name="idx_5e17540b2e9230e9", columns={"cutscene_21"}), @ORM\Index(name="idx_5e17540b9bdbf689", columns={"cutscene_16"}), @ORM\Index(name="idx_5e17540bc982f174", columns={"cutscene_8"}), @ORM\Index(name="idx_5e17540b5bf632a", columns={"cutscene_11"}), @ORM\Index(name="idx_5e17540bc7597946", columns={"cutscene_0"}), @ORM\Index(name="idx_5e17540b2d2a733", columns={"cutscene_15"}), @ORM\Index(name="idx_5e17540b2e3adc73", columns={"cutscene_6"}), @ORM\Index(name="idx_5e17540b72b853bc", columns={"cutscene_10"}), @ORM\Index(name="idx_5e17540b5e5028fc", columns={"cutscene_3"}), @ORM\Index(name="idx_5e17540bc09c51c5", columns={"cutscene_23"}), @ORM\Index(name="idx_5e17540bbe85c1e2", columns={"cutscene_9"}), @ORM\Index(name="idx_5e17540bc034bd5f", columns={"cutscene_4"}), @ORM\Index(name="idx_5e17540bb64eb18", columns={"cutscene_19"}), @ORM\Index(name="idx_5e17540b9cb63290", columns={"cutscene_12"}), @ORM\Index(name="idx_5e17540becdcc61f", columns={"cutscene_17"}), @ORM\Index(name="idx_5e17540b5995007f", columns={"cutscene_20"})})
 * @ORM\Entity
 */
class CompleteJournal
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="complete_journal_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="required_level", type="bigint", nullable=true)
     */
    private $requiredLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_23", referencedColumnName="pk")
     * })
     */
    private $cutscene23;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_22", referencedColumnName="pk")
     * })
     */
    private $cutscene22;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_21", referencedColumnName="pk")
     * })
     */
    private $cutscene21;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_20", referencedColumnName="pk")
     * })
     */
    private $cutscene20;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_19", referencedColumnName="pk")
     * })
     */
    private $cutscene19;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_18", referencedColumnName="pk")
     * })
     */
    private $cutscene18;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_17", referencedColumnName="pk")
     * })
     */
    private $cutscene17;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_16", referencedColumnName="pk")
     * })
     */
    private $cutscene16;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_15", referencedColumnName="pk")
     * })
     */
    private $cutscene15;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_14", referencedColumnName="pk")
     * })
     */
    private $cutscene14;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_13", referencedColumnName="pk")
     * })
     */
    private $cutscene13;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_12", referencedColumnName="pk")
     * })
     */
    private $cutscene12;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_11", referencedColumnName="pk")
     * })
     */
    private $cutscene11;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_10", referencedColumnName="pk")
     * })
     */
    private $cutscene10;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_9", referencedColumnName="pk")
     * })
     */
    private $cutscene9;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_8", referencedColumnName="pk")
     * })
     */
    private $cutscene8;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_7", referencedColumnName="pk")
     * })
     */
    private $cutscene7;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_6", referencedColumnName="pk")
     * })
     */
    private $cutscene6;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_5", referencedColumnName="pk")
     * })
     */
    private $cutscene5;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_4", referencedColumnName="pk")
     * })
     */
    private $cutscene4;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_3", referencedColumnName="pk")
     * })
     */
    private $cutscene3;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_2", referencedColumnName="pk")
     * })
     */
    private $cutscene2;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_1", referencedColumnName="pk")
     * })
     */
    private $cutscene1;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene_0", referencedColumnName="pk")
     * })
     */
    private $cutscene0;

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

    public function getRequiredLevel(): ?string
    {
        return $this->requiredLevel;
    }

    public function setRequiredLevel(?string $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;

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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCutscene23(): ?Cutscene
    {
        return $this->cutscene23;
    }

    public function setCutscene23(?Cutscene $cutscene23): self
    {
        $this->cutscene23 = $cutscene23;

        return $this;
    }

    public function getCutscene22(): ?Cutscene
    {
        return $this->cutscene22;
    }

    public function setCutscene22(?Cutscene $cutscene22): self
    {
        $this->cutscene22 = $cutscene22;

        return $this;
    }

    public function getCutscene21(): ?Cutscene
    {
        return $this->cutscene21;
    }

    public function setCutscene21(?Cutscene $cutscene21): self
    {
        $this->cutscene21 = $cutscene21;

        return $this;
    }

    public function getCutscene20(): ?Cutscene
    {
        return $this->cutscene20;
    }

    public function setCutscene20(?Cutscene $cutscene20): self
    {
        $this->cutscene20 = $cutscene20;

        return $this;
    }

    public function getCutscene19(): ?Cutscene
    {
        return $this->cutscene19;
    }

    public function setCutscene19(?Cutscene $cutscene19): self
    {
        $this->cutscene19 = $cutscene19;

        return $this;
    }

    public function getCutscene18(): ?Cutscene
    {
        return $this->cutscene18;
    }

    public function setCutscene18(?Cutscene $cutscene18): self
    {
        $this->cutscene18 = $cutscene18;

        return $this;
    }

    public function getCutscene17(): ?Cutscene
    {
        return $this->cutscene17;
    }

    public function setCutscene17(?Cutscene $cutscene17): self
    {
        $this->cutscene17 = $cutscene17;

        return $this;
    }

    public function getCutscene16(): ?Cutscene
    {
        return $this->cutscene16;
    }

    public function setCutscene16(?Cutscene $cutscene16): self
    {
        $this->cutscene16 = $cutscene16;

        return $this;
    }

    public function getCutscene15(): ?Cutscene
    {
        return $this->cutscene15;
    }

    public function setCutscene15(?Cutscene $cutscene15): self
    {
        $this->cutscene15 = $cutscene15;

        return $this;
    }

    public function getCutscene14(): ?Cutscene
    {
        return $this->cutscene14;
    }

    public function setCutscene14(?Cutscene $cutscene14): self
    {
        $this->cutscene14 = $cutscene14;

        return $this;
    }

    public function getCutscene13(): ?Cutscene
    {
        return $this->cutscene13;
    }

    public function setCutscene13(?Cutscene $cutscene13): self
    {
        $this->cutscene13 = $cutscene13;

        return $this;
    }

    public function getCutscene12(): ?Cutscene
    {
        return $this->cutscene12;
    }

    public function setCutscene12(?Cutscene $cutscene12): self
    {
        $this->cutscene12 = $cutscene12;

        return $this;
    }

    public function getCutscene11(): ?Cutscene
    {
        return $this->cutscene11;
    }

    public function setCutscene11(?Cutscene $cutscene11): self
    {
        $this->cutscene11 = $cutscene11;

        return $this;
    }

    public function getCutscene10(): ?Cutscene
    {
        return $this->cutscene10;
    }

    public function setCutscene10(?Cutscene $cutscene10): self
    {
        $this->cutscene10 = $cutscene10;

        return $this;
    }

    public function getCutscene9(): ?Cutscene
    {
        return $this->cutscene9;
    }

    public function setCutscene9(?Cutscene $cutscene9): self
    {
        $this->cutscene9 = $cutscene9;

        return $this;
    }

    public function getCutscene8(): ?Cutscene
    {
        return $this->cutscene8;
    }

    public function setCutscene8(?Cutscene $cutscene8): self
    {
        $this->cutscene8 = $cutscene8;

        return $this;
    }

    public function getCutscene7(): ?Cutscene
    {
        return $this->cutscene7;
    }

    public function setCutscene7(?Cutscene $cutscene7): self
    {
        $this->cutscene7 = $cutscene7;

        return $this;
    }

    public function getCutscene6(): ?Cutscene
    {
        return $this->cutscene6;
    }

    public function setCutscene6(?Cutscene $cutscene6): self
    {
        $this->cutscene6 = $cutscene6;

        return $this;
    }

    public function getCutscene5(): ?Cutscene
    {
        return $this->cutscene5;
    }

    public function setCutscene5(?Cutscene $cutscene5): self
    {
        $this->cutscene5 = $cutscene5;

        return $this;
    }

    public function getCutscene4(): ?Cutscene
    {
        return $this->cutscene4;
    }

    public function setCutscene4(?Cutscene $cutscene4): self
    {
        $this->cutscene4 = $cutscene4;

        return $this;
    }

    public function getCutscene3(): ?Cutscene
    {
        return $this->cutscene3;
    }

    public function setCutscene3(?Cutscene $cutscene3): self
    {
        $this->cutscene3 = $cutscene3;

        return $this;
    }

    public function getCutscene2(): ?Cutscene
    {
        return $this->cutscene2;
    }

    public function setCutscene2(?Cutscene $cutscene2): self
    {
        $this->cutscene2 = $cutscene2;

        return $this;
    }

    public function getCutscene1(): ?Cutscene
    {
        return $this->cutscene1;
    }

    public function setCutscene1(?Cutscene $cutscene1): self
    {
        $this->cutscene1 = $cutscene1;

        return $this;
    }

    public function getCutscene0(): ?Cutscene
    {
        return $this->cutscene0;
    }

    public function setCutscene0(?Cutscene $cutscene0): self
    {
        $this->cutscene0 = $cutscene0;

        return $this;
    }
}
