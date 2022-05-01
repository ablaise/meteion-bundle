<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRepeatFlag.
 *
 * @ORM\Table(name="quest_repeat_flag")
 * @ORM\Entity
 */
class QuestRepeatFlag
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_repeat_flag_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest", type="integer", nullable=true)
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getQuest(): ?int
    {
        return $this->quest;
    }

    public function setQuest(?int $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
