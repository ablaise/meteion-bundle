<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringItemLevelConvertTable.
 *
 * @ORM\Table(name="gathering_item_level_convert_table")
 * @ORM\Entity
 */
class GatheringItemLevelConvertTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_item_level_convert_table_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering_item_level", type="integer", nullable=true)
     */
    private $gatheringItemLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGatheringItemLevel(): ?int
    {
        return $this->gatheringItemLevel;
    }

    public function setGatheringItemLevel(?int $gatheringItemLevel): self
    {
        $this->gatheringItemLevel = $gatheringItemLevel;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(?int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }
}
