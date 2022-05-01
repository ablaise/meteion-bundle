<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPaction.
 *
 * @ORM\Table(name="pv_paction", indexes={@ORM\Index(name="idx_1a4bc147cc8c92", columns={"action"})})
 * @ORM\Entity
 */
class PvPaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_paction_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="grand_company_0", type="boolean", nullable=true)
     */
    private $grandCompany0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="grand_company_1", type="boolean", nullable=true)
     */
    private $grandCompany1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="grand_company_2", type="boolean", nullable=true)
     */
    private $grandCompany2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="pk")
     * })
     */
    private $action;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getGrandCompany0(): ?bool
    {
        return $this->grandCompany0;
    }

    public function setGrandCompany0(?bool $grandCompany0): self
    {
        $this->grandCompany0 = $grandCompany0;

        return $this;
    }

    public function getGrandCompany1(): ?bool
    {
        return $this->grandCompany1;
    }

    public function setGrandCompany1(?bool $grandCompany1): self
    {
        $this->grandCompany1 = $grandCompany1;

        return $this;
    }

    public function getGrandCompany2(): ?bool
    {
        return $this->grandCompany2;
    }

    public function setGrandCompany2(?bool $grandCompany2): self
    {
        $this->grandCompany2 = $grandCompany2;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }
}
