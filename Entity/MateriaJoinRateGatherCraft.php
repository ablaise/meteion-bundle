<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MateriaJoinRateGatherCraft.
 *
 * @ORM\Table(name="materia_join_rate_gather_craft")
 * @ORM\Entity
 */
class MateriaJoinRateGatherCraft
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materia_join_rate_gather_craft_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_nq_overmeld_slot_0", type="string", length=255, nullable=true)
     */
    private $nqOvermeldSlot0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_nq_overmeld_slot_1", type="string", length=255, nullable=true)
     */
    private $nqOvermeldSlot1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_nq_overmeld_slot_2", type="string", length=255, nullable=true)
     */
    private $nqOvermeldSlot2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_nq_overmeld_slot_3", type="string", length=255, nullable=true)
     */
    private $nqOvermeldSlot3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_hq_overmeld_slot_0", type="string", length=255, nullable=true)
     */
    private $hqOvermeldSlot0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_hq_overmeld_slot_1", type="string", length=255, nullable=true)
     */
    private $hqOvermeldSlot1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_hq_overmeld_slot_2", type="string", length=255, nullable=true)
     */
    private $hqOvermeldSlot2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_hq_overmeld_slot_3", type="string", length=255, nullable=true)
     */
    private $hqOvermeldSlot3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNqOvermeldSlot0(): ?string
    {
        return $this->nqOvermeldSlot0;
    }

    public function setNqOvermeldSlot0(?string $nqOvermeldSlot0): self
    {
        $this->nqOvermeldSlot0 = $nqOvermeldSlot0;

        return $this;
    }

    public function getNqOvermeldSlot1(): ?string
    {
        return $this->nqOvermeldSlot1;
    }

    public function setNqOvermeldSlot1(?string $nqOvermeldSlot1): self
    {
        $this->nqOvermeldSlot1 = $nqOvermeldSlot1;

        return $this;
    }

    public function getNqOvermeldSlot2(): ?string
    {
        return $this->nqOvermeldSlot2;
    }

    public function setNqOvermeldSlot2(?string $nqOvermeldSlot2): self
    {
        $this->nqOvermeldSlot2 = $nqOvermeldSlot2;

        return $this;
    }

    public function getNqOvermeldSlot3(): ?string
    {
        return $this->nqOvermeldSlot3;
    }

    public function setNqOvermeldSlot3(?string $nqOvermeldSlot3): self
    {
        $this->nqOvermeldSlot3 = $nqOvermeldSlot3;

        return $this;
    }

    public function getHqOvermeldSlot0(): ?string
    {
        return $this->hqOvermeldSlot0;
    }

    public function setHqOvermeldSlot0(?string $hqOvermeldSlot0): self
    {
        $this->hqOvermeldSlot0 = $hqOvermeldSlot0;

        return $this;
    }

    public function getHqOvermeldSlot1(): ?string
    {
        return $this->hqOvermeldSlot1;
    }

    public function setHqOvermeldSlot1(?string $hqOvermeldSlot1): self
    {
        $this->hqOvermeldSlot1 = $hqOvermeldSlot1;

        return $this;
    }

    public function getHqOvermeldSlot2(): ?string
    {
        return $this->hqOvermeldSlot2;
    }

    public function setHqOvermeldSlot2(?string $hqOvermeldSlot2): self
    {
        $this->hqOvermeldSlot2 = $hqOvermeldSlot2;

        return $this;
    }

    public function getHqOvermeldSlot3(): ?string
    {
        return $this->hqOvermeldSlot3;
    }

    public function setHqOvermeldSlot3(?string $hqOvermeldSlot3): self
    {
        $this->hqOvermeldSlot3 = $hqOvermeldSlot3;

        return $this;
    }
}
