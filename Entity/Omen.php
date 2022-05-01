<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Omen.
 *
 * @ORM\Table(name="omen")
 * @ORM\Entity
 */
class Omen
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="omen_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path_ally", type="string", length=255, nullable=true)
     */
    private $pathAlly;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="restrict_yscale", type="boolean", nullable=true)
     */
    private $restrictYscale;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="large_scale", type="boolean", nullable=true)
     */
    private $largeScale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getPathAlly(): ?string
    {
        return $this->pathAlly;
    }

    public function setPathAlly(?string $pathAlly): self
    {
        $this->pathAlly = $pathAlly;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getRestrictYscale(): ?bool
    {
        return $this->restrictYscale;
    }

    public function setRestrictYscale(?bool $restrictYscale): self
    {
        $this->restrictYscale = $restrictYscale;

        return $this;
    }

    public function getLargeScale(): ?bool
    {
        return $this->largeScale;
    }

    public function setLargeScale(?bool $largeScale): self
    {
        $this->largeScale = $largeScale;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }
}
