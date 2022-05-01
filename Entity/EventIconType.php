<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventIconType.
 *
 * @ORM\Table(name="event_icon_type")
 * @ORM\Entity
 */
class EventIconType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_icon_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="npc_icon_available", type="integer", nullable=true)
     */
    private $npcIconAvailable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_icon_available", type="integer", nullable=true)
     */
    private $mapIconAvailable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="npc_icon_invalid", type="integer", nullable=true)
     */
    private $npcIconInvalid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_icon_invalid", type="integer", nullable=true)
     */
    private $mapIconInvalid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_range", type="integer", nullable=true)
     */
    private $iconRange;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNpcIconAvailable(): ?int
    {
        return $this->npcIconAvailable;
    }

    public function setNpcIconAvailable(?int $npcIconAvailable): self
    {
        $this->npcIconAvailable = $npcIconAvailable;

        return $this;
    }

    public function getMapIconAvailable(): ?int
    {
        return $this->mapIconAvailable;
    }

    public function setMapIconAvailable(?int $mapIconAvailable): self
    {
        $this->mapIconAvailable = $mapIconAvailable;

        return $this;
    }

    public function getNpcIconInvalid(): ?int
    {
        return $this->npcIconInvalid;
    }

    public function setNpcIconInvalid(?int $npcIconInvalid): self
    {
        $this->npcIconInvalid = $npcIconInvalid;

        return $this;
    }

    public function getMapIconInvalid(): ?int
    {
        return $this->mapIconInvalid;
    }

    public function setMapIconInvalid(?int $mapIconInvalid): self
    {
        $this->mapIconInvalid = $mapIconInvalid;

        return $this;
    }

    public function getIconRange(): ?int
    {
        return $this->iconRange;
    }

    public function setIconRange(?int $iconRange): self
    {
        $this->iconRange = $iconRange;

        return $this;
    }
}
