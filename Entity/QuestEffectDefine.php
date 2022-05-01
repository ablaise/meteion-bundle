<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestEffectDefine.
 *
 * @ORM\Table(name="quest_effect_define", indexes={@ORM\Index(name="idx_4ac3d723b66091f2", columns={"effect"})})
 * @ORM\Entity
 */
class QuestEffectDefine
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_effect_define_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var QuestEffect
     *
     * @ORM\ManyToOne(targetEntity="QuestEffect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="effect", referencedColumnName="pk")
     * })
     */
    private $effect;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getEffect(): ?QuestEffect
    {
        return $this->effect;
    }

    public function setEffect(?QuestEffect $effect): self
    {
        $this->effect = $effect;

        return $this;
    }
}
