<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SwitchTalkVariation.
 *
 * @ORM\Table(name="switch_talk_variation", indexes={@ORM\Index(name="idx_49e448b5dad5eebd", columns={"default_talk"}), @ORM\Index(name="idx_49e448b59bc1eef1", columns={"quest_1"})})
 * @ORM\Entity
 */
class SwitchTalkVariation
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="switch_talk_variation_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_0", type="integer", nullable=true)
     */
    private $quest0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk", referencedColumnName="pk")
     * })
     */
    private $defaultTalk;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_1", referencedColumnName="pk")
     * })
     */
    private $quest1;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getQuest0(): ?int
    {
        return $this->quest0;
    }

    public function setQuest0(?int $quest0): self
    {
        $this->quest0 = $quest0;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getDefaultTalk(): ?DefaultTalk
    {
        return $this->defaultTalk;
    }

    public function setDefaultTalk(?DefaultTalk $defaultTalk): self
    {
        $this->defaultTalk = $defaultTalk;

        return $this;
    }

    public function getQuest1(): ?Quest
    {
        return $this->quest1;
    }

    public function setQuest1(?Quest $quest1): self
    {
        $this->quest1 = $quest1;

        return $this;
    }
}
