<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeaponTimeline.
 *
 * @ORM\Table(name="weapon_timeline")
 * @ORM\Entity
 */
class WeaponTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weapon_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var int|null
     *
     * @ORM\Column(name="next_weapon_timeline", type="integer", nullable=true)
     */
    private $nextWeaponTimeline;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getNextWeaponTimeline(): ?int
    {
        return $this->nextWeaponTimeline;
    }

    public function setNextWeaponTimeline(?int $nextWeaponTimeline): self
    {
        $this->nextWeaponTimeline = $nextWeaponTimeline;

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
}
