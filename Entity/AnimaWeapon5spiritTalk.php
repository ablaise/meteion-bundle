<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeapon5spiritTalk.
 *
 * @ORM\Table(name="anima_weapon5spirit_talk", indexes={@ORM\Index(name="idx_f96a5b20f18a1c39", columns={"dialogue"})})
 * @ORM\Entity
 */
class AnimaWeapon5spiritTalk
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon5spirit_talk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var AnimaWeapon5spiritTalkParam
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5spiritTalkParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dialogue", referencedColumnName="pk")
     * })
     */
    private $dialogue;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getDialogue(): ?AnimaWeapon5spiritTalkParam
    {
        return $this->dialogue;
    }

    public function setDialogue(?AnimaWeapon5spiritTalkParam $dialogue): self
    {
        $this->dialogue = $dialogue;

        return $this;
    }
}
