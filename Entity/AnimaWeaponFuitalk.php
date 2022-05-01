<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeaponFuitalk.
 *
 * @ORM\Table(name="anima_weapon_fuitalk", indexes={@ORM\Index(name="idx_f9c7dfaff18a1c39", columns={"dialogue"})})
 * @ORM\Entity
 */
class AnimaWeaponFuitalk
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon_fuitalk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var AnimaWeaponFuitalkParam
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeaponFuitalkParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dialogue", referencedColumnName="pk")
     * })
     */
    private $dialogue;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getDialogue(): ?AnimaWeaponFuitalkParam
    {
        return $this->dialogue;
    }

    public function setDialogue(?AnimaWeaponFuitalkParam $dialogue): self
    {
        $this->dialogue = $dialogue;

        return $this;
    }
}
