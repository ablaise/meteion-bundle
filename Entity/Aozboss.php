<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aozboss.
 *
 * @ORM\Table(name="aozboss", indexes={@ORM\Index(name="idx_e5d764e83efe663a", columns={"boss"})})
 * @ORM\Entity
 */
class Aozboss
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aozboss_pk_seq", allocationSize=1, initialValue=1)
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
     *   @ORM\JoinColumn(name="boss", referencedColumnName="pk")
     * })
     */
    private $boss;

    public function getPk(): ?int
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

    public function getBoss(): ?AozcontentBriefingBnpc
    {
        return $this->boss;
    }

    public function setBoss(?AozcontentBriefingBnpc $boss): self
    {
        $this->boss = $boss;

        return $this;
    }
}
