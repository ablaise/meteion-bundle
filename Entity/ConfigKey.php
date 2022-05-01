<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigKey.
 *
 * @ORM\Table(name="config_key")
 * @ORM\Entity
 */
class ConfigKey
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="config_key_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param", type="integer", nullable=true)
     */
    private $param;

    /**
     * @var int|null
     *
     * @ORM\Column(name="platform", type="integer", nullable=true)
     */
    private $platform;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="required", type="boolean", nullable=true)
     */
    private $required;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getParam(): ?int
    {
        return $this->param;
    }

    public function setParam(?int $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getPlatform(): ?int
    {
        return $this->platform;
    }

    public function setPlatform(?int $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->required = $required;

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

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
