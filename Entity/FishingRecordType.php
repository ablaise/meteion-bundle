<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FishingRecordType.
 *
 * @ORM\Table(name="fishing_record_type", indexes={@ORM\Index(name="idx_267e98dd185917f", columns={"addon"})})
 * @ORM\Entity
 */
class FishingRecordType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fishing_record_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_brequirement", type="bigint", nullable=true)
     */
    private $rankBrequirement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_arequirement", type="bigint", nullable=true)
     */
    private $rankArequirement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_aarequirement", type="bigint", nullable=true)
     */
    private $rankAarequirement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_aaarequirement", type="bigint", nullable=true)
     */
    private $rankAaarequirement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_srequirement", type="bigint", nullable=true)
     */
    private $rankSrequirement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_spearfishing", type="integer", nullable=true)
     */
    private $isSpearfishing;

    /**
     * @var Addon
     *
     * @ORM\ManyToOne(targetEntity="Addon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="addon", referencedColumnName="pk")
     * })
     */
    private $addon;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRankBrequirement(): ?string
    {
        return $this->rankBrequirement;
    }

    public function setRankBrequirement(?string $rankBrequirement): self
    {
        $this->rankBrequirement = $rankBrequirement;

        return $this;
    }

    public function getRankArequirement(): ?string
    {
        return $this->rankArequirement;
    }

    public function setRankArequirement(?string $rankArequirement): self
    {
        $this->rankArequirement = $rankArequirement;

        return $this;
    }

    public function getRankAarequirement(): ?string
    {
        return $this->rankAarequirement;
    }

    public function setRankAarequirement(?string $rankAarequirement): self
    {
        $this->rankAarequirement = $rankAarequirement;

        return $this;
    }

    public function getRankAaarequirement(): ?string
    {
        return $this->rankAaarequirement;
    }

    public function setRankAaarequirement(?string $rankAaarequirement): self
    {
        $this->rankAaarequirement = $rankAaarequirement;

        return $this;
    }

    public function getRankSrequirement(): ?string
    {
        return $this->rankSrequirement;
    }

    public function setRankSrequirement(?string $rankSrequirement): self
    {
        $this->rankSrequirement = $rankSrequirement;

        return $this;
    }

    public function getIsSpearfishing(): ?int
    {
        return $this->isSpearfishing;
    }

    public function setIsSpearfishing(?int $isSpearfishing): self
    {
        $this->isSpearfishing = $isSpearfishing;

        return $this;
    }

    public function getAddon(): ?Addon
    {
        return $this->addon;
    }

    public function setAddon(?Addon $addon): self
    {
        $this->addon = $addon;

        return $this;
    }
}
