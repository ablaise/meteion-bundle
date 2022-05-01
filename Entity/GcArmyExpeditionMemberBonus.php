<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyExpeditionMemberBonus.
 *
 * @ORM\Table(name="gc_army_expedition_member_bonus", indexes={@ORM\Index(name="idx_59716c63da6fbbaf", columns={"race"}), @ORM\Index(name="idx_59716c638d519804", columns={"class_job"})})
 * @ORM\Entity
 */
class GcArmyExpeditionMemberBonus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_expedition_member_bonus_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var Race
     *
     * @ORM\ManyToOne(targetEntity="Race")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race", referencedColumnName="pk")
     * })
     */
    private $race;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): self
    {
        $this->race = $race;

        return $this;
    }
}
