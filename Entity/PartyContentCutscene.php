<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartyContentCutscene.
 *
 * @ORM\Table(name="party_content_cutscene", indexes={@ORM\Index(name="idx_225a129cafed0ad", columns={"cutscene"})})
 * @ORM\Entity
 */
class PartyContentCutscene
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="party_content_cutscene_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene", referencedColumnName="pk")
     * })
     */
    private $cutscene;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getCutscene(): ?Cutscene
    {
        return $this->cutscene;
    }

    public function setCutscene(?Cutscene $cutscene): self
    {
        $this->cutscene = $cutscene;

        return $this;
    }
}
