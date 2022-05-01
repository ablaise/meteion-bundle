<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingEmploymentNpcList.
 *
 * @ORM\Table(name="housing_employment_npc_list", indexes={@ORM\Index(name="idx_7cbe7b264475f532", columns={"enpc_base_1"}), @ORM\Index(name="idx_7cbe7b263372c5a4", columns={"enpc_base_0"}), @ORM\Index(name="idx_7cbe7b26da6fbbaf", columns={"race"})})
 * @ORM\Entity
 */
class HousingEmploymentNpcList
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_employment_npc_list_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_base_1", referencedColumnName="pk")
     * })
     */
    private $enpcBase1;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_base_0", referencedColumnName="pk")
     * })
     */
    private $enpcBase0;

    /**
     * @var HousingEmploymentNpcRace
     *
     * @ORM\ManyToOne(targetEntity="HousingEmploymentNpcRace")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race", referencedColumnName="pk")
     * })
     */
    private $race;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getEnpcBase1(): ?EnpcBase
    {
        return $this->enpcBase1;
    }

    public function setEnpcBase1(?EnpcBase $enpcBase1): self
    {
        $this->enpcBase1 = $enpcBase1;

        return $this;
    }

    public function getEnpcBase0(): ?EnpcBase
    {
        return $this->enpcBase0;
    }

    public function setEnpcBase0(?EnpcBase $enpcBase0): self
    {
        $this->enpcBase0 = $enpcBase0;

        return $this;
    }

    public function getRace(): ?HousingEmploymentNpcRace
    {
        return $this->race;
    }

    public function setRace(?HousingEmploymentNpcRace $race): self
    {
        $this->race = $race;

        return $this;
    }
}
