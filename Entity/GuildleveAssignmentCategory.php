<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildleveAssignmentCategory.
 *
 * @ORM\Table(name="guildleve_assignment_category", indexes={@ORM\Index(name="idx_51ed784575a07af1", columns={"category_3"}), @ORM\Index(name="idx_51ed78459cc3dfc4", columns={"category_5"}), @ORM\Index(name="idx_51ed784572cdbee8", columns={"category_7"}), @ORM\Index(name="idx_51ed78459bae1bdd", columns={"category_1"}), @ORM\Index(name="idx_51ed78455ca8e7e", columns={"category_6"}), @ORM\Index(name="idx_51ed7845ebc4ef52", columns={"category_4"}), @ORM\Index(name="idx_51ed7845eca92b4b", columns={"category_0"}), @ORM\Index(name="idx_51ed78452a74a67", columns={"category_2"})})
 * @ORM\Entity
 */
class GuildleveAssignmentCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guildleve_assignment_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_7", referencedColumnName="pk")
     * })
     */
    private $category7;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_6", referencedColumnName="pk")
     * })
     */
    private $category6;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_5", referencedColumnName="pk")
     * })
     */
    private $category5;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_4", referencedColumnName="pk")
     * })
     */
    private $category4;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_3", referencedColumnName="pk")
     * })
     */
    private $category3;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_2", referencedColumnName="pk")
     * })
     */
    private $category2;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_1", referencedColumnName="pk")
     * })
     */
    private $category1;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_0", referencedColumnName="pk")
     * })
     */
    private $category0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCategory7(): ?LeveAssignmentType
    {
        return $this->category7;
    }

    public function setCategory7(?LeveAssignmentType $category7): self
    {
        $this->category7 = $category7;

        return $this;
    }

    public function getCategory6(): ?LeveAssignmentType
    {
        return $this->category6;
    }

    public function setCategory6(?LeveAssignmentType $category6): self
    {
        $this->category6 = $category6;

        return $this;
    }

    public function getCategory5(): ?LeveAssignmentType
    {
        return $this->category5;
    }

    public function setCategory5(?LeveAssignmentType $category5): self
    {
        $this->category5 = $category5;

        return $this;
    }

    public function getCategory4(): ?LeveAssignmentType
    {
        return $this->category4;
    }

    public function setCategory4(?LeveAssignmentType $category4): self
    {
        $this->category4 = $category4;

        return $this;
    }

    public function getCategory3(): ?LeveAssignmentType
    {
        return $this->category3;
    }

    public function setCategory3(?LeveAssignmentType $category3): self
    {
        $this->category3 = $category3;

        return $this;
    }

    public function getCategory2(): ?LeveAssignmentType
    {
        return $this->category2;
    }

    public function setCategory2(?LeveAssignmentType $category2): self
    {
        $this->category2 = $category2;

        return $this;
    }

    public function getCategory1(): ?LeveAssignmentType
    {
        return $this->category1;
    }

    public function setCategory1(?LeveAssignmentType $category1): self
    {
        $this->category1 = $category1;

        return $this;
    }

    public function getCategory0(): ?LeveAssignmentType
    {
        return $this->category0;
    }

    public function setCategory0(?LeveAssignmentType $category0): self
    {
        $this->category0 = $category0;

        return $this;
    }
}
