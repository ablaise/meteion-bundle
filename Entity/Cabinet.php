<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinet.
 *
 * @ORM\Table(name="cabinet", indexes={@ORM\Index(name="idx_4ced05b01f1b251e", columns={"item"}), @ORM\Index(name="idx_4ced05b064c19c1", columns={"category"})})
 * @ORM\Entity
 */
class Cabinet
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cabinet_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var CabinetCategory
     *
     * @ORM\ManyToOne(targetEntity="CabinetCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getCategory(): ?CabinetCategory
    {
        return $this->category;
    }

    public function setCategory(?CabinetCategory $category): self
    {
        $this->category = $category;

        return $this;
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
}
