<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpsChallengeTransient.
 *
 * @ORM\Table(name="dps_challenge_transient", indexes={@ORM\Index(name="idx_be421c4e3951fd6a", columns={"instance_content"})})
 * @ORM\Entity
 */
class DpsChallengeTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dps_challenge_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content", referencedColumnName="pk")
     * })
     */
    private $instanceContent;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getInstanceContent(): ?InstanceContent
    {
        return $this->instanceContent;
    }

    public function setInstanceContent(?InstanceContent $instanceContent): self
    {
        $this->instanceContent = $instanceContent;

        return $this;
    }
}
