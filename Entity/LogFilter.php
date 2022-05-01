<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFilter.
 *
 * @ORM\Table(name="log_filter")
 * @ORM\Entity
 */
class LogFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="log_filter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="log_kind", type="integer", nullable=true)
     */
    private $logKind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="caster", type="bigint", nullable=true)
     */
    private $caster;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target", type="bigint", nullable=true)
     */
    private $target;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="preset", type="integer", nullable=true)
     */
    private $preset;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="example", type="string", length=255, nullable=true)
     */
    private $example;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLogKind(): ?int
    {
        return $this->logKind;
    }

    public function setLogKind(?int $logKind): self
    {
        $this->logKind = $logKind;

        return $this;
    }

    public function getCaster(): ?string
    {
        return $this->caster;
    }

    public function setCaster(?string $caster): self
    {
        $this->caster = $caster;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

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

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(?int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    public function getPreset(): ?int
    {
        return $this->preset;
    }

    public function setPreset(?int $preset): self
    {
        $this->preset = $preset;

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

    public function getExample(): ?string
    {
        return $this->example;
    }

    public function setExample(?string $example): self
    {
        $this->example = $example;

        return $this;
    }
}
