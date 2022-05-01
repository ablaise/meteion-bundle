<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCraftPart.
 *
 * @ORM\Table(name="company_craft_part", indexes={@ORM\Index(name="idx_c1db42db4dd72f2", columns={"company_craft_process_2"}), @ORM\Index(name="idx_c1db42d5ad313de", columns={"company_craft_process_0"}), @ORM\Index(name="idx_c1db42d2dd42348", columns={"company_craft_process_1"}), @ORM\Index(name="idx_c1db42dc9cc93c2", columns={"company_craft_type"})})
 * @ORM\Entity
 */
class CompanyCraftPart
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_craft_part_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var CompanyCraftProcess
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftProcess")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_process_2", referencedColumnName="pk")
     * })
     */
    private $companyCraftProcess2;

    /**
     * @var CompanyCraftProcess
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftProcess")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_process_1", referencedColumnName="pk")
     * })
     */
    private $companyCraftProcess1;

    /**
     * @var CompanyCraftProcess
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftProcess")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_process_0", referencedColumnName="pk")
     * })
     */
    private $companyCraftProcess0;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type", referencedColumnName="pk")
     * })
     */
    private $companyCraftType;

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

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getCompanyCraftProcess2(): ?CompanyCraftProcess
    {
        return $this->companyCraftProcess2;
    }

    public function setCompanyCraftProcess2(?CompanyCraftProcess $companyCraftProcess2): self
    {
        $this->companyCraftProcess2 = $companyCraftProcess2;

        return $this;
    }

    public function getCompanyCraftProcess1(): ?CompanyCraftProcess
    {
        return $this->companyCraftProcess1;
    }

    public function setCompanyCraftProcess1(?CompanyCraftProcess $companyCraftProcess1): self
    {
        $this->companyCraftProcess1 = $companyCraftProcess1;

        return $this;
    }

    public function getCompanyCraftProcess0(): ?CompanyCraftProcess
    {
        return $this->companyCraftProcess0;
    }

    public function setCompanyCraftProcess0(?CompanyCraftProcess $companyCraftProcess0): self
    {
        $this->companyCraftProcess0 = $companyCraftProcess0;

        return $this;
    }

    public function getCompanyCraftType(): ?CompanyCraftType
    {
        return $this->companyCraftType;
    }

    public function setCompanyCraftType(?CompanyCraftType $companyCraftType): self
    {
        $this->companyCraftType = $companyCraftType;

        return $this;
    }
}
