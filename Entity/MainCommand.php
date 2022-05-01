<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MainCommand.
 *
 * @ORM\Table(name="main_command", indexes={@ORM\Index(name="idx_7a81433dd43871cb", columns={"main_command_category"})})
 * @ORM\Entity
 */
class MainCommand
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="main_command_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_id", type="integer", nullable=true)
     */
    private $sortId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=945, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=945, nullable=true)
     */
    private $description;

    /**
     * @var MainCommandCategory
     *
     * @ORM\ManyToOne(targetEntity="MainCommandCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="main_command_category", referencedColumnName="pk")
     * })
     */
    private $mainCommandCategory;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSortId(): ?int
    {
        return $this->sortId;
    }

    public function setSortId(?int $sortId): self
    {
        $this->sortId = $sortId;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMainCommandCategory(): ?MainCommandCategory
    {
        return $this->mainCommandCategory;
    }

    public function setMainCommandCategory(?MainCommandCategory $mainCommandCategory): self
    {
        $this->mainCommandCategory = $mainCommandCategory;

        return $this;
    }
}
