<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectablesShopRefine.
 *
 * @ORM\Table(name="collectables_shop_refine")
 * @ORM\Entity
 */
class CollectablesShopRefine
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="collectables_shop_refine_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="low_collectability", type="bigint", nullable=true)
     */
    private $lowCollectability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectability", type="bigint", nullable=true)
     */
    private $midCollectability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectability", type="bigint", nullable=true)
     */
    private $highCollectability;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLowCollectability(): ?string
    {
        return $this->lowCollectability;
    }

    public function setLowCollectability(?string $lowCollectability): self
    {
        $this->lowCollectability = $lowCollectability;

        return $this;
    }

    public function getMidCollectability(): ?string
    {
        return $this->midCollectability;
    }

    public function setMidCollectability(?string $midCollectability): self
    {
        $this->midCollectability = $midCollectability;

        return $this;
    }

    public function getHighCollectability(): ?string
    {
        return $this->highCollectability;
    }

    public function setHighCollectability(?string $highCollectability): self
    {
        $this->highCollectability = $highCollectability;

        return $this;
    }
}
