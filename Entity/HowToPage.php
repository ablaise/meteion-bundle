<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HowToPage.
 *
 * @ORM\Table(name="how_to_page")
 * @ORM\Entity
 */
class HowToPage
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="how_to_page_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_type", type="integer", nullable=true)
     */
    private $iconType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="text_type", type="integer", nullable=true)
     */
    private $textType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_0", type="string", length=1738, nullable=true)
     */
    private $text0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_1", type="string", length=1738, nullable=true)
     */
    private $text1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_2", type="string", length=1738, nullable=true)
     */
    private $text2;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getIconType(): ?int
    {
        return $this->iconType;
    }

    public function setIconType(?int $iconType): self
    {
        $this->iconType = $iconType;

        return $this;
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

    public function getTextType(): ?int
    {
        return $this->textType;
    }

    public function setTextType(?int $textType): self
    {
        $this->textType = $textType;

        return $this;
    }

    public function getText0(): ?string
    {
        return $this->text0;
    }

    public function setText0(?string $text0): self
    {
        $this->text0 = $text0;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(?string $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }
}
