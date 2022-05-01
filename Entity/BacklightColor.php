<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BacklightColor.
 *
 * @ORM\Table(name="backlight_color")
 * @ORM\Entity
 */
class BacklightColor
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="backlight_color_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true)
     */
    private $color;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(?int $color): self
    {
        $this->color = $color;

        return $this;
    }
}
