<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfateRideShooting.
 *
 * @ORM\Table(name="gfate_ride_shooting", indexes={@ORM\Index(name="idx_bf1cc36c0e2c9a2", columns={"content_entry"})})
 * @ORM\Entity
 */
class GfateRideShooting
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfate_ride_shooting_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ContentEntry
     *
     * @ORM\ManyToOne(targetEntity="ContentEntry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_entry", referencedColumnName="pk")
     * })
     */
    private $contentEntry;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getContentEntry(): ?ContentEntry
    {
        return $this->contentEntry;
    }

    public function setContentEntry(?ContentEntry $contentEntry): self
    {
        $this->contentEntry = $contentEntry;

        return $this;
    }
}
