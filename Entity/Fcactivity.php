<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcactivity.
 *
 * @ORM\Table(name="fcactivity", indexes={@ORM\Index(name="idx_93cb77134ebc1500", columns={"fcactivity_category"})})
 * @ORM\Entity
 */
class Fcactivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcactivity_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=823, nullable=true)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="self_kind", type="integer", nullable=true)
     */
    private $selfKind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_kind", type="integer", nullable=true)
     */
    private $targetKind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_param", type="integer", nullable=true)
     */
    private $numParam;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_type", type="integer", nullable=true)
     */
    private $iconType;

    /**
     * @var FcactivityCategory
     *
     * @ORM\ManyToOne(targetEntity="FcactivityCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcactivity_category", referencedColumnName="pk")
     * })
     */
    private $fcactivityCategory;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getSelfKind(): ?int
    {
        return $this->selfKind;
    }

    public function setSelfKind(?int $selfKind): self
    {
        $this->selfKind = $selfKind;

        return $this;
    }

    public function getTargetKind(): ?int
    {
        return $this->targetKind;
    }

    public function setTargetKind(?int $targetKind): self
    {
        $this->targetKind = $targetKind;

        return $this;
    }

    public function getNumParam(): ?int
    {
        return $this->numParam;
    }

    public function setNumParam(?int $numParam): self
    {
        $this->numParam = $numParam;

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

    public function getFcactivityCategory(): ?FcactivityCategory
    {
        return $this->fcactivityCategory;
    }

    public function setFcactivityCategory(?FcactivityCategory $fcactivityCategory): self
    {
        $this->fcactivityCategory = $fcactivityCategory;

        return $this;
    }
}
