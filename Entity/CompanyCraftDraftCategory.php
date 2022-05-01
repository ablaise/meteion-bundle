<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCraftDraftCategory.
 *
 * @ORM\Table(name="company_craft_draft_category", indexes={@ORM\Index(name="idx_a6576981548d4895", columns={"company_craft_type_7"}), @ORM\Index(name="idx_a6576981b3356592", columns={"company_craft_type_9"}), @ORM\Index(name="idx_a6576981cd84192f", columns={"company_craft_type_4"}), @ORM\Index(name="idx_a6576981ba8329b9", columns={"company_craft_type_5"}), @ORM\Index(name="idx_a6576981cae9dd36", columns={"company_craft_type_0"}), @ORM\Index(name="idx_a657698124e7bc1a", columns={"company_craft_type_2"}), @ORM\Index(name="idx_a657698153e08c8c", columns={"company_craft_type_3"}), @ORM\Index(name="idx_a6576981c4325504", columns={"company_craft_type_8"}), @ORM\Index(name="idx_a6576981bdeeeda0", columns={"company_craft_type_1"}), @ORM\Index(name="idx_a6576981238a7803", columns={"company_craft_type_6"})})
 * @ORM\Entity
 */
class CompanyCraftDraftCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_craft_draft_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_9", referencedColumnName="pk")
     * })
     */
    private $companyCraftType9;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_8", referencedColumnName="pk")
     * })
     */
    private $companyCraftType8;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_7", referencedColumnName="pk")
     * })
     */
    private $companyCraftType7;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_6", referencedColumnName="pk")
     * })
     */
    private $companyCraftType6;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_5", referencedColumnName="pk")
     * })
     */
    private $companyCraftType5;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_4", referencedColumnName="pk")
     * })
     */
    private $companyCraftType4;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_3", referencedColumnName="pk")
     * })
     */
    private $companyCraftType3;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_2", referencedColumnName="pk")
     * })
     */
    private $companyCraftType2;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_1", referencedColumnName="pk")
     * })
     */
    private $companyCraftType1;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type_0", referencedColumnName="pk")
     * })
     */
    private $companyCraftType0;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getCompanyCraftType9(): ?CompanyCraftType
    {
        return $this->companyCraftType9;
    }

    public function setCompanyCraftType9(?CompanyCraftType $companyCraftType9): self
    {
        $this->companyCraftType9 = $companyCraftType9;

        return $this;
    }

    public function getCompanyCraftType8(): ?CompanyCraftType
    {
        return $this->companyCraftType8;
    }

    public function setCompanyCraftType8(?CompanyCraftType $companyCraftType8): self
    {
        $this->companyCraftType8 = $companyCraftType8;

        return $this;
    }

    public function getCompanyCraftType7(): ?CompanyCraftType
    {
        return $this->companyCraftType7;
    }

    public function setCompanyCraftType7(?CompanyCraftType $companyCraftType7): self
    {
        $this->companyCraftType7 = $companyCraftType7;

        return $this;
    }

    public function getCompanyCraftType6(): ?CompanyCraftType
    {
        return $this->companyCraftType6;
    }

    public function setCompanyCraftType6(?CompanyCraftType $companyCraftType6): self
    {
        $this->companyCraftType6 = $companyCraftType6;

        return $this;
    }

    public function getCompanyCraftType5(): ?CompanyCraftType
    {
        return $this->companyCraftType5;
    }

    public function setCompanyCraftType5(?CompanyCraftType $companyCraftType5): self
    {
        $this->companyCraftType5 = $companyCraftType5;

        return $this;
    }

    public function getCompanyCraftType4(): ?CompanyCraftType
    {
        return $this->companyCraftType4;
    }

    public function setCompanyCraftType4(?CompanyCraftType $companyCraftType4): self
    {
        $this->companyCraftType4 = $companyCraftType4;

        return $this;
    }

    public function getCompanyCraftType3(): ?CompanyCraftType
    {
        return $this->companyCraftType3;
    }

    public function setCompanyCraftType3(?CompanyCraftType $companyCraftType3): self
    {
        $this->companyCraftType3 = $companyCraftType3;

        return $this;
    }

    public function getCompanyCraftType2(): ?CompanyCraftType
    {
        return $this->companyCraftType2;
    }

    public function setCompanyCraftType2(?CompanyCraftType $companyCraftType2): self
    {
        $this->companyCraftType2 = $companyCraftType2;

        return $this;
    }

    public function getCompanyCraftType1(): ?CompanyCraftType
    {
        return $this->companyCraftType1;
    }

    public function setCompanyCraftType1(?CompanyCraftType $companyCraftType1): self
    {
        $this->companyCraftType1 = $companyCraftType1;

        return $this;
    }

    public function getCompanyCraftType0(): ?CompanyCraftType
    {
        return $this->companyCraftType0;
    }

    public function setCompanyCraftType0(?CompanyCraftType $companyCraftType0): self
    {
        $this->companyCraftType0 = $companyCraftType0;

        return $this;
    }
}
