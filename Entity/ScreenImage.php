<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScreenImage.
 *
 * @ORM\Table(name="screen_image", indexes={@ORM\Index(name="idx_b83a241bee7e744a", columns={"jingle"})})
 * @ORM\Entity
 */
class ScreenImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="screen_image_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lang", type="boolean", nullable=true)
     */
    private $lang;

    /**
     * @var Jingle
     *
     * @ORM\ManyToOne(targetEntity="Jingle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jingle", referencedColumnName="pk")
     * })
     */
    private $jingle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

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

    public function getLang(): ?bool
    {
        return $this->lang;
    }

    public function setLang(?bool $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getJingle(): ?Jingle
    {
        return $this->jingle;
    }

    public function setJingle(?Jingle $jingle): self
    {
        $this->jingle = $jingle;

        return $this;
    }
}
