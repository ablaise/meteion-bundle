<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentGaugeColor.
 *
 * @ORM\Table(name="content_gauge_color")
 * @ORM\Entity
 */
class ContentGaugeColor
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_gauge_color_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="android_color_1", type="bigint", nullable=true)
     */
    private $androidColor1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="android_color_2", type="bigint", nullable=true)
     */
    private $androidColor2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="android_color_3", type="bigint", nullable=true)
     */
    private $androidColor3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getAndroidColor1(): ?string
    {
        return $this->androidColor1;
    }

    public function setAndroidColor1(?string $androidColor1): self
    {
        $this->androidColor1 = $androidColor1;

        return $this;
    }

    public function getAndroidColor2(): ?string
    {
        return $this->androidColor2;
    }

    public function setAndroidColor2(?string $androidColor2): self
    {
        $this->androidColor2 = $androidColor2;

        return $this;
    }

    public function getAndroidColor3(): ?string
    {
        return $this->androidColor3;
    }

    public function setAndroidColor3(?string $androidColor3): self
    {
        $this->androidColor3 = $androidColor3;

        return $this;
    }
}
