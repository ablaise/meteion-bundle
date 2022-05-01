<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicContentCutscene.
 *
 * @ORM\Table(name="public_content_cutscene", indexes={@ORM\Index(name="idx_2f68b31fb2b89f88", columns={"cutscene2"}), @ORM\Index(name="idx_2f68b31fafed0ad", columns={"cutscene"})})
 * @ORM\Entity
 */
class PublicContentCutscene
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="public_content_cutscene_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Cutscene
     *
     * @ORM\ManyToOne(targetEntity="Cutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cutscene2", referencedColumnName="pk")
     * })
     */
    private $cutscene2;

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

    public function getCutscene2(): ?Cutscene
    {
        return $this->cutscene2;
    }

    public function setCutscene2(?Cutscene $cutscene2): self
    {
        $this->cutscene2 = $cutscene2;

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
