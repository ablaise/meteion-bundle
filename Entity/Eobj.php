<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eobj.
 *
 * @ORM\Table(name="eobj", indexes={@ORM\Index(name="idx_949bd553dc839929", columns={"sgb_path"})})
 * @ORM\Entity
 */
class Eobj
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eobj_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pop_type", type="integer", nullable=true)
     */
    private $popType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data", type="bigint", nullable=true)
     */
    private $data;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invisibility", type="integer", nullable=true)
     */
    private $invisibility;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="eye_collision", type="boolean", nullable=true)
     */
    private $eyeCollision;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="director_control", type="boolean", nullable=true)
     */
    private $directorControl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="target", type="boolean", nullable=true)
     */
    private $target;

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_high_addition", type="integer", nullable=true)
     */
    private $eventHighAddition;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="added_in_5_3", type="boolean", nullable=true)
     */
    private $addedIn53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
     */
    private $column20;

    /**
     * @var ExportedSg
     *
     * @ORM\ManyToOne(targetEntity="ExportedSg")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sgb_path", referencedColumnName="pk")
     * })
     */
    private $sgbPath;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

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

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

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

    public function getPopType(): ?int
    {
        return $this->popType;
    }

    public function setPopType(?int $popType): self
    {
        $this->popType = $popType;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getInvisibility(): ?int
    {
        return $this->invisibility;
    }

    public function setInvisibility(?int $invisibility): self
    {
        $this->invisibility = $invisibility;

        return $this;
    }

    public function getEyeCollision(): ?bool
    {
        return $this->eyeCollision;
    }

    public function setEyeCollision(?bool $eyeCollision): self
    {
        $this->eyeCollision = $eyeCollision;

        return $this;
    }

    public function getDirectorControl(): ?bool
    {
        return $this->directorControl;
    }

    public function setDirectorControl(?bool $directorControl): self
    {
        $this->directorControl = $directorControl;

        return $this;
    }

    public function getTarget(): ?bool
    {
        return $this->target;
    }

    public function setTarget(?bool $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getEventHighAddition(): ?int
    {
        return $this->eventHighAddition;
    }

    public function setEventHighAddition(?int $eventHighAddition): self
    {
        $this->eventHighAddition = $eventHighAddition;

        return $this;
    }

    public function getColumn17(): ?bool
    {
        return $this->column17;
    }

    public function setColumn17(?bool $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getAddedIn53(): ?bool
    {
        return $this->addedIn53;
    }

    public function setAddedIn53(?bool $addedIn53): self
    {
        $this->addedIn53 = $addedIn53;

        return $this;
    }

    public function getColumn20(): ?bool
    {
        return $this->column20;
    }

    public function setColumn20(?bool $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getSgbPath(): ?ExportedSg
    {
        return $this->sgbPath;
    }

    public function setSgbPath(?ExportedSg $sgbPath): self
    {
        $this->sgbPath = $sgbPath;

        return $this;
    }
}
