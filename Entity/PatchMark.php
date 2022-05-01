<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatchMark.
 *
 * @ORM\Table(name="patch_mark")
 * @ORM\Entity
 */
class PatchMark
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="patch_mark_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_category_type", type="integer", nullable=true)
     */
    private $subCategoryType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_category", type="bigint", nullable=true)
     */
    private $subCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mark_id", type="bigint", nullable=true)
     */
    private $markId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSubCategoryType(): ?int
    {
        return $this->subCategoryType;
    }

    public function setSubCategoryType(?int $subCategoryType): self
    {
        $this->subCategoryType = $subCategoryType;

        return $this;
    }

    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

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

    public function getMarkId(): ?string
    {
        return $this->markId;
    }

    public function setMarkId(?string $markId): self
    {
        $this->markId = $markId;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }
}
