<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingMerchantPose.
 *
 * @ORM\Table(name="housing_merchant_pose", indexes={@ORM\Index(name="idx_ec9319d59129b600", columns={"action_timeline"})})
 * @ORM\Entity
 */
class HousingMerchantPose
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_merchant_pose_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pose", type="string", length=255, nullable=true)
     */
    private $pose;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline", referencedColumnName="pk")
     * })
     */
    private $actionTimeline;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPose(): ?string
    {
        return $this->pose;
    }

    public function setPose(?string $pose): self
    {
        $this->pose = $pose;

        return $this;
    }

    public function getActionTimeline(): ?ActionTimeline
    {
        return $this->actionTimeline;
    }

    public function setActionTimeline(?ActionTimeline $actionTimeline): self
    {
        $this->actionTimeline = $actionTimeline;

        return $this;
    }
}
