<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CutSceneIncompQuest.
 *
 * @ORM\Table(name="cut_scene_incomp_quest", indexes={@ORM\Index(name="idx_f2ec20a64317f817", columns={"quest"})})
 * @ORM\Entity
 */
class CutSceneIncompQuest
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cut_scene_incomp_quest_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
