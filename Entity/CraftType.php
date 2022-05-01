<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraftType.
 *
 * @ORM\Table(name="craft_type")
 * @ORM\Entity
 */
class CraftType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="craft_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="main_physical", type="integer", nullable=true)
     */
    private $mainPhysical;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_physical", type="integer", nullable=true)
     */
    private $subPhysical;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMainPhysical(): ?int
    {
        return $this->mainPhysical;
    }

    public function setMainPhysical(?int $mainPhysical): self
    {
        $this->mainPhysical = $mainPhysical;

        return $this;
    }

    public function getSubPhysical(): ?int
    {
        return $this->subPhysical;
    }

    public function setSubPhysical(?int $subPhysical): self
    {
        $this->subPhysical = $subPhysical;

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
}
