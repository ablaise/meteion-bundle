<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picture.
 *
 * @ORM\Table(name="picture", indexes={@ORM\Index(name="idx_16db4f891f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class Picture
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

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

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

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
