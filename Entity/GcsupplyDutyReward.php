<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcsupplyDutyReward.
 *
 * @ORM\Table(name="gcsupply_duty_reward")
 * @ORM\Entity
 */
class GcsupplyDutyReward
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gcsupply_duty_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience_supply", type="bigint", nullable=true)
     */
    private $experienceSupply;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience_provisioning", type="bigint", nullable=true)
     */
    private $experienceProvisioning;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seals_expert_delivery", type="bigint", nullable=true)
     */
    private $sealsExpertDelivery;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seals_supply", type="bigint", nullable=true)
     */
    private $sealsSupply;

    /**
     * @var int|null
     *
     * @ORM\Column(name="seals_provisioning", type="bigint", nullable=true)
     */
    private $sealsProvisioning;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExperienceSupply(): ?string
    {
        return $this->experienceSupply;
    }

    public function setExperienceSupply(?string $experienceSupply): self
    {
        $this->experienceSupply = $experienceSupply;

        return $this;
    }

    public function getExperienceProvisioning(): ?string
    {
        return $this->experienceProvisioning;
    }

    public function setExperienceProvisioning(?string $experienceProvisioning): self
    {
        $this->experienceProvisioning = $experienceProvisioning;

        return $this;
    }

    public function getSealsExpertDelivery(): ?string
    {
        return $this->sealsExpertDelivery;
    }

    public function setSealsExpertDelivery(?string $sealsExpertDelivery): self
    {
        $this->sealsExpertDelivery = $sealsExpertDelivery;

        return $this;
    }

    public function getSealsSupply(): ?string
    {
        return $this->sealsSupply;
    }

    public function setSealsSupply(?string $sealsSupply): self
    {
        $this->sealsSupply = $sealsSupply;

        return $this;
    }

    public function getSealsProvisioning(): ?string
    {
        return $this->sealsProvisioning;
    }

    public function setSealsProvisioning(?string $sealsProvisioning): self
    {
        $this->sealsProvisioning = $sealsProvisioning;

        return $this;
    }
}
