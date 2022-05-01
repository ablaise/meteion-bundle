<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingEmploymentNpcRace.
 *
 * @ORM\Table(name="housing_employment_npc_race")
 * @ORM\Entity
 */
class HousingEmploymentNpcRace
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_employment_npc_race_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="race", type="string", length=255, nullable=true)
     */
    private $race;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(?string $race): self
    {
        $this->race = $race;

        return $this;
    }
}
