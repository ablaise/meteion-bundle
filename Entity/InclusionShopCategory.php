<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InclusionShopCategory.
 *
 * @ORM\Table(name="inclusion_shop_category", indexes={@ORM\Index(name="idx_4f23a946ae8947ec", columns={"class_job_category"})})
 * @ORM\Entity
 */
class InclusionShopCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inclusion_shop_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inclusion_shop_series", type="integer", nullable=true)
     */
    private $inclusionShopSeries;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

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

    public function getInclusionShopSeries(): ?int
    {
        return $this->inclusionShopSeries;
    }

    public function setInclusionShopSeries(?int $inclusionShopSeries): self
    {
        $this->inclusionShopSeries = $inclusionShopSeries;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }
}
