<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FateMode.
 *
 * @ORM\Table(name="fate_mode")
 * @ORM\Entity
 */
class FateMode
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_mode_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="motivation_icon", type="integer", nullable=true)
     */
    private $motivationIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="motivation_map_marker", type="integer", nullable=true)
     */
    private $motivationMapMarker;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_icon", type="integer", nullable=true)
     */
    private $objectiveIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_map_marker", type="integer", nullable=true)
     */
    private $objectiveMapMarker;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getMotivationIcon(): ?int
    {
        return $this->motivationIcon;
    }

    public function setMotivationIcon(?int $motivationIcon): self
    {
        $this->motivationIcon = $motivationIcon;

        return $this;
    }

    public function getMotivationMapMarker(): ?int
    {
        return $this->motivationMapMarker;
    }

    public function setMotivationMapMarker(?int $motivationMapMarker): self
    {
        $this->motivationMapMarker = $motivationMapMarker;

        return $this;
    }

    public function getObjectiveIcon(): ?int
    {
        return $this->objectiveIcon;
    }

    public function setObjectiveIcon(?int $objectiveIcon): self
    {
        $this->objectiveIcon = $objectiveIcon;

        return $this;
    }

    public function getObjectiveMapMarker(): ?int
    {
        return $this->objectiveMapMarker;
    }

    public function setObjectiveMapMarker(?int $objectiveMapMarker): self
    {
        $this->objectiveMapMarker = $objectiveMapMarker;

        return $this;
    }
}
