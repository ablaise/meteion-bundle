<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gcshop.
 *
 * @ORM\Table(name="gcshop", indexes={@ORM\Index(name="idx_f78f0062b5ab1f27", columns={"grand_company"})})
 * @ORM\Entity
 */
class Gcshop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gcshop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var GrandCompany
     *
     * @ORM\ManyToOne(targetEntity="GrandCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company", referencedColumnName="pk")
     * })
     */
    private $grandCompany;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGrandCompany(): ?GrandCompany
    {
        return $this->grandCompany;
    }

    public function setGrandCompany(?GrandCompany $grandCompany): self
    {
        $this->grandCompany = $grandCompany;

        return $this;
    }
}
