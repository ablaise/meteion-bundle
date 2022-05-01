<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channeling.
 *
 * @ORM\Table(name="channeling")
 * @ORM\Entity
 */
class Channeling
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="channeling_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var int|null
     *
     * @ORM\Column(name="width_scale", type="integer", nullable=true)
     */
    private $widthScale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getWidthScale(): ?int
    {
        return $this->widthScale;
    }

    public function setWidthScale(?int $widthScale): self
    {
        $this->widthScale = $widthScale;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }
}
