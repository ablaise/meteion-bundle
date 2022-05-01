<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfateClimbing2content.
 *
 * @ORM\Table(name="gfate_climbing2content", indexes={@ORM\Index(name="idx_8edf74478fc7c995", columns={"public_content_text_data"})})
 * @ORM\Entity
 */
class GfateClimbing2content
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfate_climbing2content_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var PublicContentTextData
     *
     * @ORM\ManyToOne(targetEntity="PublicContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="public_content_text_data", referencedColumnName="pk")
     * })
     */
    private $publicContentTextData;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPublicContentTextData(): ?PublicContentTextData
    {
        return $this->publicContentTextData;
    }

    public function setPublicContentTextData(?PublicContentTextData $publicContentTextData): self
    {
        $this->publicContentTextData = $publicContentTextData;

        return $this;
    }
}
