<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventCustomIconType.
 *
 * @ORM\Table(name="event_custom_icon_type")
 * @ORM\Entity
 */
class EventCustomIconType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_custom_icon_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_0", type="integer", nullable=true)
     */
    private $announceQuest0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_1", type="integer", nullable=true)
     */
    private $announceQuest1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_2", type="integer", nullable=true)
     */
    private $announceQuest2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_3", type="integer", nullable=true)
     */
    private $announceQuest3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_4", type="integer", nullable=true)
     */
    private $announceQuest4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_5", type="integer", nullable=true)
     */
    private $announceQuest5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_6", type="integer", nullable=true)
     */
    private $announceQuest6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_7", type="integer", nullable=true)
     */
    private $announceQuest7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_8", type="integer", nullable=true)
     */
    private $announceQuest8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_9", type="integer", nullable=true)
     */
    private $announceQuest9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_0", type="integer", nullable=true)
     */
    private $announceQuestLocked0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_1", type="integer", nullable=true)
     */
    private $announceQuestLocked1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_2", type="integer", nullable=true)
     */
    private $announceQuestLocked2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_3", type="integer", nullable=true)
     */
    private $announceQuestLocked3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_4", type="integer", nullable=true)
     */
    private $announceQuestLocked4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_5", type="integer", nullable=true)
     */
    private $announceQuestLocked5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_6", type="integer", nullable=true)
     */
    private $announceQuestLocked6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_7", type="integer", nullable=true)
     */
    private $announceQuestLocked7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_8", type="integer", nullable=true)
     */
    private $announceQuestLocked8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="announce_quest_locked_9", type="integer", nullable=true)
     */
    private $announceQuestLocked9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_0", type="integer", nullable=true)
     */
    private $mapAnnounceQuest00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_1", type="integer", nullable=true)
     */
    private $mapAnnounceQuest01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_2", type="integer", nullable=true)
     */
    private $mapAnnounceQuest02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_3", type="integer", nullable=true)
     */
    private $mapAnnounceQuest03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_4", type="integer", nullable=true)
     */
    private $mapAnnounceQuest04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_5", type="integer", nullable=true)
     */
    private $mapAnnounceQuest05;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_6", type="integer", nullable=true)
     */
    private $mapAnnounceQuest06;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_7", type="integer", nullable=true)
     */
    private $mapAnnounceQuest07;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_8", type="integer", nullable=true)
     */
    private $mapAnnounceQuest08;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_0_9", type="integer", nullable=true)
     */
    private $mapAnnounceQuest09;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_0", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_1", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_2", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_3", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_4", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_5", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_6", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_7", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_8", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_locked_9", type="integer", nullable=true)
     */
    private $mapAnnounceQuestLocked9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_0", type="integer", nullable=true)
     */
    private $mapAnnounceQuest10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_1", type="integer", nullable=true)
     */
    private $mapAnnounceQuest11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_2", type="integer", nullable=true)
     */
    private $mapAnnounceQuest12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_3", type="integer", nullable=true)
     */
    private $mapAnnounceQuest13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_4", type="integer", nullable=true)
     */
    private $mapAnnounceQuest14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_5", type="integer", nullable=true)
     */
    private $mapAnnounceQuest15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_6", type="integer", nullable=true)
     */
    private $mapAnnounceQuest16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_7", type="integer", nullable=true)
     */
    private $mapAnnounceQuest17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_8", type="integer", nullable=true)
     */
    private $mapAnnounceQuest18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_announce_quest_1_9", type="integer", nullable=true)
     */
    private $mapAnnounceQuest19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="integer", nullable=true)
     */
    private $column51;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getAnnounceQuest0(): ?int
    {
        return $this->announceQuest0;
    }

    public function setAnnounceQuest0(?int $announceQuest0): self
    {
        $this->announceQuest0 = $announceQuest0;

        return $this;
    }

    public function getAnnounceQuest1(): ?int
    {
        return $this->announceQuest1;
    }

    public function setAnnounceQuest1(?int $announceQuest1): self
    {
        $this->announceQuest1 = $announceQuest1;

        return $this;
    }

    public function getAnnounceQuest2(): ?int
    {
        return $this->announceQuest2;
    }

    public function setAnnounceQuest2(?int $announceQuest2): self
    {
        $this->announceQuest2 = $announceQuest2;

        return $this;
    }

    public function getAnnounceQuest3(): ?int
    {
        return $this->announceQuest3;
    }

    public function setAnnounceQuest3(?int $announceQuest3): self
    {
        $this->announceQuest3 = $announceQuest3;

        return $this;
    }

    public function getAnnounceQuest4(): ?int
    {
        return $this->announceQuest4;
    }

    public function setAnnounceQuest4(?int $announceQuest4): self
    {
        $this->announceQuest4 = $announceQuest4;

        return $this;
    }

    public function getAnnounceQuest5(): ?int
    {
        return $this->announceQuest5;
    }

    public function setAnnounceQuest5(?int $announceQuest5): self
    {
        $this->announceQuest5 = $announceQuest5;

        return $this;
    }

    public function getAnnounceQuest6(): ?int
    {
        return $this->announceQuest6;
    }

    public function setAnnounceQuest6(?int $announceQuest6): self
    {
        $this->announceQuest6 = $announceQuest6;

        return $this;
    }

    public function getAnnounceQuest7(): ?int
    {
        return $this->announceQuest7;
    }

    public function setAnnounceQuest7(?int $announceQuest7): self
    {
        $this->announceQuest7 = $announceQuest7;

        return $this;
    }

    public function getAnnounceQuest8(): ?int
    {
        return $this->announceQuest8;
    }

    public function setAnnounceQuest8(?int $announceQuest8): self
    {
        $this->announceQuest8 = $announceQuest8;

        return $this;
    }

    public function getAnnounceQuest9(): ?int
    {
        return $this->announceQuest9;
    }

    public function setAnnounceQuest9(?int $announceQuest9): self
    {
        $this->announceQuest9 = $announceQuest9;

        return $this;
    }

    public function getAnnounceQuestLocked0(): ?int
    {
        return $this->announceQuestLocked0;
    }

    public function setAnnounceQuestLocked0(?int $announceQuestLocked0): self
    {
        $this->announceQuestLocked0 = $announceQuestLocked0;

        return $this;
    }

    public function getAnnounceQuestLocked1(): ?int
    {
        return $this->announceQuestLocked1;
    }

    public function setAnnounceQuestLocked1(?int $announceQuestLocked1): self
    {
        $this->announceQuestLocked1 = $announceQuestLocked1;

        return $this;
    }

    public function getAnnounceQuestLocked2(): ?int
    {
        return $this->announceQuestLocked2;
    }

    public function setAnnounceQuestLocked2(?int $announceQuestLocked2): self
    {
        $this->announceQuestLocked2 = $announceQuestLocked2;

        return $this;
    }

    public function getAnnounceQuestLocked3(): ?int
    {
        return $this->announceQuestLocked3;
    }

    public function setAnnounceQuestLocked3(?int $announceQuestLocked3): self
    {
        $this->announceQuestLocked3 = $announceQuestLocked3;

        return $this;
    }

    public function getAnnounceQuestLocked4(): ?int
    {
        return $this->announceQuestLocked4;
    }

    public function setAnnounceQuestLocked4(?int $announceQuestLocked4): self
    {
        $this->announceQuestLocked4 = $announceQuestLocked4;

        return $this;
    }

    public function getAnnounceQuestLocked5(): ?int
    {
        return $this->announceQuestLocked5;
    }

    public function setAnnounceQuestLocked5(?int $announceQuestLocked5): self
    {
        $this->announceQuestLocked5 = $announceQuestLocked5;

        return $this;
    }

    public function getAnnounceQuestLocked6(): ?int
    {
        return $this->announceQuestLocked6;
    }

    public function setAnnounceQuestLocked6(?int $announceQuestLocked6): self
    {
        $this->announceQuestLocked6 = $announceQuestLocked6;

        return $this;
    }

    public function getAnnounceQuestLocked7(): ?int
    {
        return $this->announceQuestLocked7;
    }

    public function setAnnounceQuestLocked7(?int $announceQuestLocked7): self
    {
        $this->announceQuestLocked7 = $announceQuestLocked7;

        return $this;
    }

    public function getAnnounceQuestLocked8(): ?int
    {
        return $this->announceQuestLocked8;
    }

    public function setAnnounceQuestLocked8(?int $announceQuestLocked8): self
    {
        $this->announceQuestLocked8 = $announceQuestLocked8;

        return $this;
    }

    public function getAnnounceQuestLocked9(): ?int
    {
        return $this->announceQuestLocked9;
    }

    public function setAnnounceQuestLocked9(?int $announceQuestLocked9): self
    {
        $this->announceQuestLocked9 = $announceQuestLocked9;

        return $this;
    }

    public function getMapAnnounceQuest00(): ?int
    {
        return $this->mapAnnounceQuest00;
    }

    public function setMapAnnounceQuest00(?int $mapAnnounceQuest00): self
    {
        $this->mapAnnounceQuest00 = $mapAnnounceQuest00;

        return $this;
    }

    public function getMapAnnounceQuest01(): ?int
    {
        return $this->mapAnnounceQuest01;
    }

    public function setMapAnnounceQuest01(?int $mapAnnounceQuest01): self
    {
        $this->mapAnnounceQuest01 = $mapAnnounceQuest01;

        return $this;
    }

    public function getMapAnnounceQuest02(): ?int
    {
        return $this->mapAnnounceQuest02;
    }

    public function setMapAnnounceQuest02(?int $mapAnnounceQuest02): self
    {
        $this->mapAnnounceQuest02 = $mapAnnounceQuest02;

        return $this;
    }

    public function getMapAnnounceQuest03(): ?int
    {
        return $this->mapAnnounceQuest03;
    }

    public function setMapAnnounceQuest03(?int $mapAnnounceQuest03): self
    {
        $this->mapAnnounceQuest03 = $mapAnnounceQuest03;

        return $this;
    }

    public function getMapAnnounceQuest04(): ?int
    {
        return $this->mapAnnounceQuest04;
    }

    public function setMapAnnounceQuest04(?int $mapAnnounceQuest04): self
    {
        $this->mapAnnounceQuest04 = $mapAnnounceQuest04;

        return $this;
    }

    public function getMapAnnounceQuest05(): ?int
    {
        return $this->mapAnnounceQuest05;
    }

    public function setMapAnnounceQuest05(?int $mapAnnounceQuest05): self
    {
        $this->mapAnnounceQuest05 = $mapAnnounceQuest05;

        return $this;
    }

    public function getMapAnnounceQuest06(): ?int
    {
        return $this->mapAnnounceQuest06;
    }

    public function setMapAnnounceQuest06(?int $mapAnnounceQuest06): self
    {
        $this->mapAnnounceQuest06 = $mapAnnounceQuest06;

        return $this;
    }

    public function getMapAnnounceQuest07(): ?int
    {
        return $this->mapAnnounceQuest07;
    }

    public function setMapAnnounceQuest07(?int $mapAnnounceQuest07): self
    {
        $this->mapAnnounceQuest07 = $mapAnnounceQuest07;

        return $this;
    }

    public function getMapAnnounceQuest08(): ?int
    {
        return $this->mapAnnounceQuest08;
    }

    public function setMapAnnounceQuest08(?int $mapAnnounceQuest08): self
    {
        $this->mapAnnounceQuest08 = $mapAnnounceQuest08;

        return $this;
    }

    public function getMapAnnounceQuest09(): ?int
    {
        return $this->mapAnnounceQuest09;
    }

    public function setMapAnnounceQuest09(?int $mapAnnounceQuest09): self
    {
        $this->mapAnnounceQuest09 = $mapAnnounceQuest09;

        return $this;
    }

    public function getMapAnnounceQuestLocked0(): ?int
    {
        return $this->mapAnnounceQuestLocked0;
    }

    public function setMapAnnounceQuestLocked0(?int $mapAnnounceQuestLocked0): self
    {
        $this->mapAnnounceQuestLocked0 = $mapAnnounceQuestLocked0;

        return $this;
    }

    public function getMapAnnounceQuestLocked1(): ?int
    {
        return $this->mapAnnounceQuestLocked1;
    }

    public function setMapAnnounceQuestLocked1(?int $mapAnnounceQuestLocked1): self
    {
        $this->mapAnnounceQuestLocked1 = $mapAnnounceQuestLocked1;

        return $this;
    }

    public function getMapAnnounceQuestLocked2(): ?int
    {
        return $this->mapAnnounceQuestLocked2;
    }

    public function setMapAnnounceQuestLocked2(?int $mapAnnounceQuestLocked2): self
    {
        $this->mapAnnounceQuestLocked2 = $mapAnnounceQuestLocked2;

        return $this;
    }

    public function getMapAnnounceQuestLocked3(): ?int
    {
        return $this->mapAnnounceQuestLocked3;
    }

    public function setMapAnnounceQuestLocked3(?int $mapAnnounceQuestLocked3): self
    {
        $this->mapAnnounceQuestLocked3 = $mapAnnounceQuestLocked3;

        return $this;
    }

    public function getMapAnnounceQuestLocked4(): ?int
    {
        return $this->mapAnnounceQuestLocked4;
    }

    public function setMapAnnounceQuestLocked4(?int $mapAnnounceQuestLocked4): self
    {
        $this->mapAnnounceQuestLocked4 = $mapAnnounceQuestLocked4;

        return $this;
    }

    public function getMapAnnounceQuestLocked5(): ?int
    {
        return $this->mapAnnounceQuestLocked5;
    }

    public function setMapAnnounceQuestLocked5(?int $mapAnnounceQuestLocked5): self
    {
        $this->mapAnnounceQuestLocked5 = $mapAnnounceQuestLocked5;

        return $this;
    }

    public function getMapAnnounceQuestLocked6(): ?int
    {
        return $this->mapAnnounceQuestLocked6;
    }

    public function setMapAnnounceQuestLocked6(?int $mapAnnounceQuestLocked6): self
    {
        $this->mapAnnounceQuestLocked6 = $mapAnnounceQuestLocked6;

        return $this;
    }

    public function getMapAnnounceQuestLocked7(): ?int
    {
        return $this->mapAnnounceQuestLocked7;
    }

    public function setMapAnnounceQuestLocked7(?int $mapAnnounceQuestLocked7): self
    {
        $this->mapAnnounceQuestLocked7 = $mapAnnounceQuestLocked7;

        return $this;
    }

    public function getMapAnnounceQuestLocked8(): ?int
    {
        return $this->mapAnnounceQuestLocked8;
    }

    public function setMapAnnounceQuestLocked8(?int $mapAnnounceQuestLocked8): self
    {
        $this->mapAnnounceQuestLocked8 = $mapAnnounceQuestLocked8;

        return $this;
    }

    public function getMapAnnounceQuestLocked9(): ?int
    {
        return $this->mapAnnounceQuestLocked9;
    }

    public function setMapAnnounceQuestLocked9(?int $mapAnnounceQuestLocked9): self
    {
        $this->mapAnnounceQuestLocked9 = $mapAnnounceQuestLocked9;

        return $this;
    }

    public function getMapAnnounceQuest10(): ?int
    {
        return $this->mapAnnounceQuest10;
    }

    public function setMapAnnounceQuest10(?int $mapAnnounceQuest10): self
    {
        $this->mapAnnounceQuest10 = $mapAnnounceQuest10;

        return $this;
    }

    public function getMapAnnounceQuest11(): ?int
    {
        return $this->mapAnnounceQuest11;
    }

    public function setMapAnnounceQuest11(?int $mapAnnounceQuest11): self
    {
        $this->mapAnnounceQuest11 = $mapAnnounceQuest11;

        return $this;
    }

    public function getMapAnnounceQuest12(): ?int
    {
        return $this->mapAnnounceQuest12;
    }

    public function setMapAnnounceQuest12(?int $mapAnnounceQuest12): self
    {
        $this->mapAnnounceQuest12 = $mapAnnounceQuest12;

        return $this;
    }

    public function getMapAnnounceQuest13(): ?int
    {
        return $this->mapAnnounceQuest13;
    }

    public function setMapAnnounceQuest13(?int $mapAnnounceQuest13): self
    {
        $this->mapAnnounceQuest13 = $mapAnnounceQuest13;

        return $this;
    }

    public function getMapAnnounceQuest14(): ?int
    {
        return $this->mapAnnounceQuest14;
    }

    public function setMapAnnounceQuest14(?int $mapAnnounceQuest14): self
    {
        $this->mapAnnounceQuest14 = $mapAnnounceQuest14;

        return $this;
    }

    public function getMapAnnounceQuest15(): ?int
    {
        return $this->mapAnnounceQuest15;
    }

    public function setMapAnnounceQuest15(?int $mapAnnounceQuest15): self
    {
        $this->mapAnnounceQuest15 = $mapAnnounceQuest15;

        return $this;
    }

    public function getMapAnnounceQuest16(): ?int
    {
        return $this->mapAnnounceQuest16;
    }

    public function setMapAnnounceQuest16(?int $mapAnnounceQuest16): self
    {
        $this->mapAnnounceQuest16 = $mapAnnounceQuest16;

        return $this;
    }

    public function getMapAnnounceQuest17(): ?int
    {
        return $this->mapAnnounceQuest17;
    }

    public function setMapAnnounceQuest17(?int $mapAnnounceQuest17): self
    {
        $this->mapAnnounceQuest17 = $mapAnnounceQuest17;

        return $this;
    }

    public function getMapAnnounceQuest18(): ?int
    {
        return $this->mapAnnounceQuest18;
    }

    public function setMapAnnounceQuest18(?int $mapAnnounceQuest18): self
    {
        $this->mapAnnounceQuest18 = $mapAnnounceQuest18;

        return $this;
    }

    public function getMapAnnounceQuest19(): ?int
    {
        return $this->mapAnnounceQuest19;
    }

    public function setMapAnnounceQuest19(?int $mapAnnounceQuest19): self
    {
        $this->mapAnnounceQuest19 = $mapAnnounceQuest19;

        return $this;
    }

    public function getColumn51(): ?int
    {
        return $this->column51;
    }

    public function setColumn51(?int $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }
}
