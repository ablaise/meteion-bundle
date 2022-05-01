<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotoriousMonster.
 *
 * @ORM\Table(name="notorious_monster", indexes={@ORM\Index(name="idx_5ae9840c6846dbbd", columns={"bnpc_base"}), @ORM\Index(name="idx_5ae9840cf6d15bda", columns={"bnpc_name"})})
 * @ORM\Entity
 */
class NotoriousMonster
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="notorious_monster_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base", referencedColumnName="pk")
     * })
     */
    private $bnpcBase;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }

    public function getBnpcBase(): ?BnpcBase
    {
        return $this->bnpcBase;
    }

    public function setBnpcBase(?BnpcBase $bnpcBase): self
    {
        $this->bnpcBase = $bnpcBase;

        return $this;
    }
}
