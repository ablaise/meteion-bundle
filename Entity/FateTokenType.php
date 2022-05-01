<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FateTokenType.
 *
 * @ORM\Table(name="fate_token_type", indexes={@ORM\Index(name="idx_8a6fd27c6956883f", columns={"currency"})})
 * @ORM\Entity
 */
class FateTokenType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_token_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency", referencedColumnName="pk")
     * })
     */
    private $currency;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCurrency(): ?Item
    {
        return $this->currency;
    }

    public function setCurrency(?Item $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
