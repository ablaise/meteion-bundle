<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdlevelChangeDeception.
 *
 * @ORM\Table(name="hwdlevel_change_deception", indexes={@ORM\Index(name="idx_5b1e3424c53d045f", columns={"image"})})
 * @ORM\Entity
 */
class HwdlevelChangeDeception
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdlevel_change_deception_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image", referencedColumnName="pk")
     * })
     */
    private $image;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getImage(): ?ScreenImage
    {
        return $this->image;
    }

    public function setImage(?ScreenImage $image): self
    {
        $this->image = $image;

        return $this;
    }
}
