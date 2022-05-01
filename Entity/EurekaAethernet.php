<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EurekaAethernet.
 *
 * @ORM\Table(name="eureka_aethernet", indexes={@ORM\Index(name="idx_b0fc238d5e9e89cb", columns={"location"})})
 * @ORM\Entity
 */
class EurekaAethernet
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="eureka_aethernet_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="pk")
     * })
     */
    private $location;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLocation(): ?PlaceName
    {
        return $this->location;
    }

    public function setLocation(?PlaceName $location): self
    {
        $this->location = $location;

        return $this;
    }
}
