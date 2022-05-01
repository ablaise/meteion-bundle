<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaMagiciteItem.
 *
 * @ORM\Table(name="eureka_magicite_item", indexes={@ORM\Index(name="idx_2f556c6e1f1b251e", columns={"item"}), @ORM\Index(name="idx_2f556c6eae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_2f556c6efe627293", columns={"eureka_magicite_item_type"})})
 * @ORM\Entity
 */
class EurekaMagiciteItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_magicite_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    /**
     * @var EurekaMagiciteItemType
     *
     * @ORM\ManyToOne(targetEntity="EurekaMagiciteItemType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eureka_magicite_item_type", referencedColumnName="pk")
     * })
     */
    private $eurekaMagiciteItemType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

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

    public function getEurekaMagiciteItemType(): ?EurekaMagiciteItemType
    {
        return $this->eurekaMagiciteItemType;
    }

    public function setEurekaMagiciteItemType(?EurekaMagiciteItemType $eurekaMagiciteItemType): self
    {
        $this->eurekaMagiciteItemType = $eurekaMagiciteItemType;

        return $this;
    }
}
