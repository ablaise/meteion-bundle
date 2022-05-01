<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringItemPoint.
 *
 * @ORM\Table(name="gathering_item_point", indexes={@ORM\Index(name="idx_d8963d756ffd0d7c", columns={"gathering_point"})})
 * @ORM\Entity
 */
class GatheringItemPoint
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_item_point_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var GatheringPoint
     *
     * @ORM\ManyToOne(targetEntity="GatheringPoint")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point", referencedColumnName="pk")
     * })
     */
    private $gatheringPoint;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getGatheringPoint(): ?GatheringPoint
    {
        return $this->gatheringPoint;
    }

    public function setGatheringPoint(?GatheringPoint $gatheringPoint): self
    {
        $this->gatheringPoint = $gatheringPoint;

        return $this;
    }
}
