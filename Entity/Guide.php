<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guide.
 *
 * @ORM\Table(name="guide", indexes={@ORM\Index(name="idx_ca9ec7356f2bb323", columns={"guide_title"})})
 * @ORM\Entity
 */
class Guide
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guide_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="guide_page", type="integer", nullable=true)
     */
    private $guidePage;

    /**
     * @var GuideTitle
     *
     * @ORM\ManyToOne(targetEntity="GuideTitle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="guide_title", referencedColumnName="pk")
     * })
     */
    private $guideTitle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGuidePage(): ?int
    {
        return $this->guidePage;
    }

    public function setGuidePage(?int $guidePage): self
    {
        $this->guidePage = $guidePage;

        return $this;
    }

    public function getGuideTitle(): ?GuideTitle
    {
        return $this->guideTitle;
    }

    public function setGuideTitle(?GuideTitle $guideTitle): self
    {
        $this->guideTitle = $guideTitle;

        return $this;
    }
}
