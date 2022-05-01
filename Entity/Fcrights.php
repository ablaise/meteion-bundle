<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcrights.
 *
 * @ORM\Table(name="fcrights", indexes={@ORM\Index(name="idx_795a508d18c07780", columns={"fcrank"})})
 * @ORM\Entity
 */
class Fcrights
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcrights_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank", referencedColumnName="pk")
     * })
     */
    private $fcrank;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function getFcrank(): ?Fcrank
    {
        return $this->fcrank;
    }

    public function setFcrank(?Fcrank $fcrank): self
    {
        $this->fcrank = $fcrank;

        return $this;
    }
}
