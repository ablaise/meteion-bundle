<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeaponFuitalkParam.
 *
 * @ORM\Table(name="anima_weapon_fuitalk_param")
 * @ORM\Entity
 */
class AnimaWeaponFuitalkParam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon_fuitalk_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prologue", type="string", length=255, nullable=true)
     */
    private $prologue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="epilogue", type="string", length=255, nullable=true)
     */
    private $epilogue;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPrologue(): ?string
    {
        return $this->prologue;
    }

    public function setPrologue(?string $prologue): self
    {
        $this->prologue = $prologue;

        return $this;
    }

    public function getEpilogue(): ?string
    {
        return $this->epilogue;
    }

    public function setEpilogue(?string $epilogue): self
    {
        $this->epilogue = $epilogue;

        return $this;
    }
}
