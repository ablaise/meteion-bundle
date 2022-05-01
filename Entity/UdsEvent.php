<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UdsEvent.
 *
 * @ORM\Table(name="uds_event", indexes={@ORM\Index(name="idx_d548b15b4d9b9544", columns={"property_14"}), @ORM\Index(name="idx_d548b15b78c033df", columns={"property_30"}), @ORM\Index(name="idx_d548b15b11b1f611", columns={"property_25"}), @ORM\Index(name="idx_d548b15b332ae9f9", columns={"property_19"}), @ORM\Index(name="idx_d548b15bd492c4fe", columns={"property_17"}), @ORM\Index(name="idx_d548b15bbf973dc8", columns={"property_2"}), @ORM\Index(name="idx_d548b15ba4f83071", columns={"property_12"}), @ORM\Index(name="idx_d548b15bd3ff00e7", columns={"property_13"}), @ORM\Index(name="idx_d548b15b66b6c687", columns={"property_24"}), @ORM\Index(name="idx_d548b15b61db029e", columns={"property_20"}), @ORM\Index(name="idx_d548b15bffbf973d", columns={"property_27"}), @ORM\Index(name="idx_d548b15b4af6515d", columns={"property_10"}), @ORM\Index(name="idx_d548b15b3a9ca5d2", columns={"property_15"}), @ORM\Index(name="idx_d548b15b442dd96f", columns={"property_18"}), @ORM\Index(name="idx_d548b15b56f498fd", columns={"property_4"}), @ORM\Index(name="idx_d548b15b21f3a86b", columns={"property_5"}), @ORM\Index(name="idx_d548b15b6f008aac", columns={"property_28"}), @ORM\Index(name="idx_d548b15bfc70349", columns={"property_31"}), @ORM\Index(name="idx_d548b15b269e6c72", columns={"property_1"}), @ORM\Index(name="idx_d548b15b88b8a7ab", columns={"property_26"}), @ORM\Index(name="idx_d548b15bb8faf9d1", columns={"property_6"}), @ORM\Index(name="idx_d548b15b16dc3208", columns={"property_21"}), @ORM\Index(name="idx_d548b15b2845e440", columns={"property_9"}), @ORM\Index(name="idx_d548b15ba395f468", columns={"property_16"}), @ORM\Index(name="idx_d548b15b51995ce4", columns={"property_0"}), @ORM\Index(name="idx_d548b15b3df161cb", columns={"property_11"}), @ORM\Index(name="idx_d548b15b8fd563b2", columns={"property_22"}), @ORM\Index(name="idx_d548b15b5f42d4d6", columns={"property_8"}), @ORM\Index(name="idx_d548b15b1807ba3a", columns={"property_29"}), @ORM\Index(name="idx_d548b15bcffdc947", columns={"property_7"}), @ORM\Index(name="idx_d548b15bc8900d5e", columns={"property_3"}), @ORM\Index(name="idx_d548b15bf8d25324", columns={"property_23"})})
 * @ORM\Entity
 */
class UdsEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="uds_event_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_31", referencedColumnName="pk")
     * })
     */
    private $property31;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_30", referencedColumnName="pk")
     * })
     */
    private $property30;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_29", referencedColumnName="pk")
     * })
     */
    private $property29;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_28", referencedColumnName="pk")
     * })
     */
    private $property28;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_27", referencedColumnName="pk")
     * })
     */
    private $property27;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_26", referencedColumnName="pk")
     * })
     */
    private $property26;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_25", referencedColumnName="pk")
     * })
     */
    private $property25;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_24", referencedColumnName="pk")
     * })
     */
    private $property24;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_23", referencedColumnName="pk")
     * })
     */
    private $property23;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_22", referencedColumnName="pk")
     * })
     */
    private $property22;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_21", referencedColumnName="pk")
     * })
     */
    private $property21;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_20", referencedColumnName="pk")
     * })
     */
    private $property20;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_19", referencedColumnName="pk")
     * })
     */
    private $property19;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_18", referencedColumnName="pk")
     * })
     */
    private $property18;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_17", referencedColumnName="pk")
     * })
     */
    private $property17;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_16", referencedColumnName="pk")
     * })
     */
    private $property16;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_15", referencedColumnName="pk")
     * })
     */
    private $property15;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_14", referencedColumnName="pk")
     * })
     */
    private $property14;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_13", referencedColumnName="pk")
     * })
     */
    private $property13;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_12", referencedColumnName="pk")
     * })
     */
    private $property12;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_11", referencedColumnName="pk")
     * })
     */
    private $property11;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_10", referencedColumnName="pk")
     * })
     */
    private $property10;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_9", referencedColumnName="pk")
     * })
     */
    private $property9;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_8", referencedColumnName="pk")
     * })
     */
    private $property8;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_7", referencedColumnName="pk")
     * })
     */
    private $property7;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_6", referencedColumnName="pk")
     * })
     */
    private $property6;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_5", referencedColumnName="pk")
     * })
     */
    private $property5;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_4", referencedColumnName="pk")
     * })
     */
    private $property4;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_3", referencedColumnName="pk")
     * })
     */
    private $property3;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_2", referencedColumnName="pk")
     * })
     */
    private $property2;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_1", referencedColumnName="pk")
     * })
     */
    private $property1;

    /**
     * @var UdsProperty
     *
     * @ORM\ManyToOne(targetEntity="UdsProperty")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="property_0", referencedColumnName="pk")
     * })
     */
    private $property0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getProperty31(): ?UdsProperty
    {
        return $this->property31;
    }

    public function setProperty31(?UdsProperty $property31): self
    {
        $this->property31 = $property31;

        return $this;
    }

    public function getProperty30(): ?UdsProperty
    {
        return $this->property30;
    }

    public function setProperty30(?UdsProperty $property30): self
    {
        $this->property30 = $property30;

        return $this;
    }

    public function getProperty29(): ?UdsProperty
    {
        return $this->property29;
    }

    public function setProperty29(?UdsProperty $property29): self
    {
        $this->property29 = $property29;

        return $this;
    }

    public function getProperty28(): ?UdsProperty
    {
        return $this->property28;
    }

    public function setProperty28(?UdsProperty $property28): self
    {
        $this->property28 = $property28;

        return $this;
    }

    public function getProperty27(): ?UdsProperty
    {
        return $this->property27;
    }

    public function setProperty27(?UdsProperty $property27): self
    {
        $this->property27 = $property27;

        return $this;
    }

    public function getProperty26(): ?UdsProperty
    {
        return $this->property26;
    }

    public function setProperty26(?UdsProperty $property26): self
    {
        $this->property26 = $property26;

        return $this;
    }

    public function getProperty25(): ?UdsProperty
    {
        return $this->property25;
    }

    public function setProperty25(?UdsProperty $property25): self
    {
        $this->property25 = $property25;

        return $this;
    }

    public function getProperty24(): ?UdsProperty
    {
        return $this->property24;
    }

    public function setProperty24(?UdsProperty $property24): self
    {
        $this->property24 = $property24;

        return $this;
    }

    public function getProperty23(): ?UdsProperty
    {
        return $this->property23;
    }

    public function setProperty23(?UdsProperty $property23): self
    {
        $this->property23 = $property23;

        return $this;
    }

    public function getProperty22(): ?UdsProperty
    {
        return $this->property22;
    }

    public function setProperty22(?UdsProperty $property22): self
    {
        $this->property22 = $property22;

        return $this;
    }

    public function getProperty21(): ?UdsProperty
    {
        return $this->property21;
    }

    public function setProperty21(?UdsProperty $property21): self
    {
        $this->property21 = $property21;

        return $this;
    }

    public function getProperty20(): ?UdsProperty
    {
        return $this->property20;
    }

    public function setProperty20(?UdsProperty $property20): self
    {
        $this->property20 = $property20;

        return $this;
    }

    public function getProperty19(): ?UdsProperty
    {
        return $this->property19;
    }

    public function setProperty19(?UdsProperty $property19): self
    {
        $this->property19 = $property19;

        return $this;
    }

    public function getProperty18(): ?UdsProperty
    {
        return $this->property18;
    }

    public function setProperty18(?UdsProperty $property18): self
    {
        $this->property18 = $property18;

        return $this;
    }

    public function getProperty17(): ?UdsProperty
    {
        return $this->property17;
    }

    public function setProperty17(?UdsProperty $property17): self
    {
        $this->property17 = $property17;

        return $this;
    }

    public function getProperty16(): ?UdsProperty
    {
        return $this->property16;
    }

    public function setProperty16(?UdsProperty $property16): self
    {
        $this->property16 = $property16;

        return $this;
    }

    public function getProperty15(): ?UdsProperty
    {
        return $this->property15;
    }

    public function setProperty15(?UdsProperty $property15): self
    {
        $this->property15 = $property15;

        return $this;
    }

    public function getProperty14(): ?UdsProperty
    {
        return $this->property14;
    }

    public function setProperty14(?UdsProperty $property14): self
    {
        $this->property14 = $property14;

        return $this;
    }

    public function getProperty13(): ?UdsProperty
    {
        return $this->property13;
    }

    public function setProperty13(?UdsProperty $property13): self
    {
        $this->property13 = $property13;

        return $this;
    }

    public function getProperty12(): ?UdsProperty
    {
        return $this->property12;
    }

    public function setProperty12(?UdsProperty $property12): self
    {
        $this->property12 = $property12;

        return $this;
    }

    public function getProperty11(): ?UdsProperty
    {
        return $this->property11;
    }

    public function setProperty11(?UdsProperty $property11): self
    {
        $this->property11 = $property11;

        return $this;
    }

    public function getProperty10(): ?UdsProperty
    {
        return $this->property10;
    }

    public function setProperty10(?UdsProperty $property10): self
    {
        $this->property10 = $property10;

        return $this;
    }

    public function getProperty9(): ?UdsProperty
    {
        return $this->property9;
    }

    public function setProperty9(?UdsProperty $property9): self
    {
        $this->property9 = $property9;

        return $this;
    }

    public function getProperty8(): ?UdsProperty
    {
        return $this->property8;
    }

    public function setProperty8(?UdsProperty $property8): self
    {
        $this->property8 = $property8;

        return $this;
    }

    public function getProperty7(): ?UdsProperty
    {
        return $this->property7;
    }

    public function setProperty7(?UdsProperty $property7): self
    {
        $this->property7 = $property7;

        return $this;
    }

    public function getProperty6(): ?UdsProperty
    {
        return $this->property6;
    }

    public function setProperty6(?UdsProperty $property6): self
    {
        $this->property6 = $property6;

        return $this;
    }

    public function getProperty5(): ?UdsProperty
    {
        return $this->property5;
    }

    public function setProperty5(?UdsProperty $property5): self
    {
        $this->property5 = $property5;

        return $this;
    }

    public function getProperty4(): ?UdsProperty
    {
        return $this->property4;
    }

    public function setProperty4(?UdsProperty $property4): self
    {
        $this->property4 = $property4;

        return $this;
    }

    public function getProperty3(): ?UdsProperty
    {
        return $this->property3;
    }

    public function setProperty3(?UdsProperty $property3): self
    {
        $this->property3 = $property3;

        return $this;
    }

    public function getProperty2(): ?UdsProperty
    {
        return $this->property2;
    }

    public function setProperty2(?UdsProperty $property2): self
    {
        $this->property2 = $property2;

        return $this;
    }

    public function getProperty1(): ?UdsProperty
    {
        return $this->property1;
    }

    public function setProperty1(?UdsProperty $property1): self
    {
        $this->property1 = $property1;

        return $this;
    }

    public function getProperty0(): ?UdsProperty
    {
        return $this->property0;
    }

    public function setProperty0(?UdsProperty $property0): self
    {
        $this->property0 = $property0;

        return $this;
    }
}
