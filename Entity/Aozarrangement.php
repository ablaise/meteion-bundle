<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aozarrangement.
 *
 * @ORM\Table(name="aozarrangement", indexes={@ORM\Index(name="idx_32890333e4d3408a", columns={"aozcontent_briefing_bnpc"})})
 * @ORM\Entity
 */
class Aozarrangement
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aozarrangement_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="bigint", nullable=true)
     */
    private $position;

    /**
     * @var AozcontentBriefingBnpc
     *
     * @ORM\ManyToOne(targetEntity="AozcontentBriefingBnpc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aozcontent_briefing_bnpc", referencedColumnName="pk")
     * })
     */
    private $aozcontentBriefingBnpc;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getAozcontentBriefingBnpc(): ?AozcontentBriefingBnpc
    {
        return $this->aozcontentBriefingBnpc;
    }

    public function setAozcontentBriefingBnpc(?AozcontentBriefingBnpc $aozcontentBriefingBnpc): self
    {
        $this->aozcontentBriefingBnpc = $aozcontentBriefingBnpc;

        return $this;
    }
}
