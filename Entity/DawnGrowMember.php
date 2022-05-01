<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DawnGrowMember.
 *
 * @ORM\Table(name="dawn_grow_member", indexes={@ORM\Index(name="idx_75f1dc2fed4b199f", columns={"class"})})
 * @ORM\Entity
 */
class DawnGrowMember
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dawn_grow_member_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="select_image_0", type="integer", nullable=true)
     */
    private $selectImage0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="select_image_1", type="integer", nullable=true)
     */
    private $selectImage1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="select_image_2", type="integer", nullable=true)
     */
    private $selectImage2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="portrait_image_0", type="integer", nullable=true)
     */
    private $portraitImage0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="portrait_image_1", type="integer", nullable=true)
     */
    private $portraitImage1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="portrait_image_2", type="integer", nullable=true)
     */
    private $portraitImage2;

    /**
     * @var DawnMemberUiparam
     *
     * @ORM\ManyToOne(targetEntity="DawnMemberUiparam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class", referencedColumnName="pk")
     * })
     */
    private $class;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSelectImage0(): ?int
    {
        return $this->selectImage0;
    }

    public function setSelectImage0(?int $selectImage0): self
    {
        $this->selectImage0 = $selectImage0;

        return $this;
    }

    public function getSelectImage1(): ?int
    {
        return $this->selectImage1;
    }

    public function setSelectImage1(?int $selectImage1): self
    {
        $this->selectImage1 = $selectImage1;

        return $this;
    }

    public function getSelectImage2(): ?int
    {
        return $this->selectImage2;
    }

    public function setSelectImage2(?int $selectImage2): self
    {
        $this->selectImage2 = $selectImage2;

        return $this;
    }

    public function getPortraitImage0(): ?int
    {
        return $this->portraitImage0;
    }

    public function setPortraitImage0(?int $portraitImage0): self
    {
        $this->portraitImage0 = $portraitImage0;

        return $this;
    }

    public function getPortraitImage1(): ?int
    {
        return $this->portraitImage1;
    }

    public function setPortraitImage1(?int $portraitImage1): self
    {
        $this->portraitImage1 = $portraitImage1;

        return $this;
    }

    public function getPortraitImage2(): ?int
    {
        return $this->portraitImage2;
    }

    public function setPortraitImage2(?int $portraitImage2): self
    {
        $this->portraitImage2 = $portraitImage2;

        return $this;
    }

    public function getClass(): ?DawnMemberUiparam
    {
        return $this->class;
    }

    public function setClass(?DawnMemberUiparam $class): self
    {
        $this->class = $class;

        return $this;
    }
}
