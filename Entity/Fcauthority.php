<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcauthority.
 *
 * @ORM\Table(name="fcauthority", indexes={@ORM\Index(name="idx_45c62cb64d73a3c1", columns={"fcauthority_category"})})
 * @ORM\Entity
 */
class Fcauthority
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcauthority_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var FcauthorityCategory
     *
     * @ORM\ManyToOne(targetEntity="FcauthorityCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcauthority_category", referencedColumnName="pk")
     * })
     */
    private $fcauthorityCategory;

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

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getFcauthorityCategory(): ?FcauthorityCategory
    {
        return $this->fcauthorityCategory;
    }

    public function setFcauthorityCategory(?FcauthorityCategory $fcauthorityCategory): self
    {
        $this->fcauthorityCategory = $fcauthorityCategory;

        return $this;
    }
}
