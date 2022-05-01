<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StainTransient.
 *
 * @ORM\Table(name="stain_transient", indexes={@ORM\Index(name="idx_59414fcbb261a7dd", columns={"item_1"}), @ORM\Index(name="idx_59414fcb2b68f667", columns={"item_2"})})
 * @ORM\Entity
 */
class StainTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stain_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2", referencedColumnName="pk")
     * })
     */
    private $item2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1", referencedColumnName="pk")
     * })
     */
    private $item1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getItem2(): ?Item
    {
        return $this->item2;
    }

    public function setItem2(?Item $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem1(): ?Item
    {
        return $this->item1;
    }

    public function setItem1(?Item $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }
}
