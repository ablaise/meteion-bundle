<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetAction.
 *
 * @ORM\Table(name="pet_action", indexes={@ORM\Index(name="idx_8be020047cc8c92", columns={"action"}), @ORM\Index(name="idx_8be0200e4529b85", columns={"pet"})})
 * @ORM\Entity
 */
class PetAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pet_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=816, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=816, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="master_order", type="boolean", nullable=true)
     */
    private $masterOrder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="disable_order", type="boolean", nullable=true)
     */
    private $disableOrder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var Pet
     *
     * @ORM\ManyToOne(targetEntity="Pet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pet", referencedColumnName="pk")
     * })
     */
    private $pet;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

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

    public function getMasterOrder(): ?bool
    {
        return $this->masterOrder;
    }

    public function setMasterOrder(?bool $masterOrder): self
    {
        $this->masterOrder = $masterOrder;

        return $this;
    }

    public function getDisableOrder(): ?bool
    {
        return $this->disableOrder;
    }

    public function setDisableOrder(?bool $disableOrder): self
    {
        $this->disableOrder = $disableOrder;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getPet(): ?Pet
    {
        return $this->pet;
    }

    public function setPet(?Pet $pet): self
    {
        $this->pet = $pet;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }
}
