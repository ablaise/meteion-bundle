<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DescriptionSection.
 *
 * @ORM\Table(name="description_section", indexes={@ORM\Index(name="idx_ce5e6f529ebeb2a9", columns={"string"})})
 * @ORM\Entity
 */
class DescriptionSection
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="description_section_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="page", type="integer", nullable=true)
     */
    private $page;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="string", referencedColumnName="pk")
     * })
     */
    private $string;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(?int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getString(): ?DescriptionString
    {
        return $this->string;
    }

    public function setString(?DescriptionString $string): self
    {
        $this->string = $string;

        return $this;
    }
}
