<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GfateClimbing2totemType.
 *
 * @ORM\Table(name="gfate_climbing2totem_type", indexes={@ORM\Index(name="idx_7debdc38fc7c995", columns={"public_content_text_data"})})
 * @ORM\Entity
 */
class GfateClimbing2totemType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gfate_climbing2totem_type_pk_seq", allocationSize=1, initialValue=1)
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
