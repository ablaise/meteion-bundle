<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripleTriadCardRarity.
 *
 * @ORM\Table(name="triple_triad_card_rarity")
 * @ORM\Entity
 */
class TripleTriadCardRarity
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="triple_triad_card_rarity_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(?int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }
}
