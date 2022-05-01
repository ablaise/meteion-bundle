<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaLogosMixerProbability.
 *
 * @ORM\Table(name="eureka_logos_mixer_probability")
 * @ORM\Entity
 */
class EurekaLogosMixerProbability
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_logos_mixer_probability_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability", type="integer", nullable=true)
     */
    private $probability;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getProbability(): ?int
    {
        return $this->probability;
    }

    public function setProbability(?int $probability): self
    {
        $this->probability = $probability;

        return $this;
    }
}
