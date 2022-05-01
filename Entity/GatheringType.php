<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringType.
 *
 * @ORM\Table(name="gathering_type")
 * @ORM\Entity
 */
class GatheringType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_type_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="icon_main", type="integer", nullable=true)
     */
    private $iconMain;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_off", type="integer", nullable=true)
     */
    private $iconOff;

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

    public function getIconMain(): ?int
    {
        return $this->iconMain;
    }

    public function setIconMain(?int $iconMain): self
    {
        $this->iconMain = $iconMain;

        return $this;
    }

    public function getIconOff(): ?int
    {
        return $this->iconOff;
    }

    public function setIconOff(?int $iconOff): self
    {
        $this->iconOff = $iconOff;

        return $this;
    }
}
