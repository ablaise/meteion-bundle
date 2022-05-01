<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * World.
 *
 * @ORM\Table(name="world", indexes={@ORM\Index(name="idx_3a771143200eda3d", columns={"data_center"})})
 * @ORM\Entity
 */
class World
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="world_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="internal_name", type="string", length=255, nullable=true)
     */
    private $internalName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="region", type="integer", nullable=true)
     */
    private $region;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_type", type="integer", nullable=true)
     */
    private $userType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=true)
     */
    private $isPublic;

    /**
     * @var WorldDcgroupType
     *
     * @ORM\ManyToOne(targetEntity="WorldDcgroupType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_center", referencedColumnName="pk")
     * })
     */
    private $dataCenter;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getInternalName(): ?string
    {
        return $this->internalName;
    }

    public function setInternalName(?string $internalName): self
    {
        $this->internalName = $internalName;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(?int $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getUserType(): ?int
    {
        return $this->userType;
    }

    public function setUserType(?int $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(?bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    public function getDataCenter(): ?WorldDcgroupType
    {
        return $this->dataCenter;
    }

    public function setDataCenter(?WorldDcgroupType $dataCenter): self
    {
        $this->dataCenter = $dataCenter;

        return $this;
    }
}
