<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManeuversArmor.
 *
 * @ORM\Table(name="maneuvers_armor", indexes={@ORM\Index(name="idx_e92bb7bc1a49d027", columns={"bnpc_base_0"}), @ORM\Index(name="idx_e92bb7bc6d4ee0b1", columns={"bnpc_base_1"})})
 * @ORM\Entity
 */
class ManeuversArmor
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="maneuvers_armor_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_0", type="integer", nullable=true)
     */
    private $icon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_1", type="integer", nullable=true)
     */
    private $icon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_2", type="integer", nullable=true)
     */
    private $icon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_3", type="integer", nullable=true)
     */
    private $icon3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_4", type="integer", nullable=true)
     */
    private $icon4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_11", type="string", length=511, nullable=true)
     */
    private $column11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_12", type="string", length=511, nullable=true)
     */
    private $column12;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_1", referencedColumnName="pk")
     * })
     */
    private $bnpcBase1;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_base_0", referencedColumnName="pk")
     * })
     */
    private $bnpcBase0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getIcon0(): ?int
    {
        return $this->icon0;
    }

    public function setIcon0(?int $icon0): self
    {
        $this->icon0 = $icon0;

        return $this;
    }

    public function getIcon1(): ?int
    {
        return $this->icon1;
    }

    public function setIcon1(?int $icon1): self
    {
        $this->icon1 = $icon1;

        return $this;
    }

    public function getIcon2(): ?int
    {
        return $this->icon2;
    }

    public function setIcon2(?int $icon2): self
    {
        $this->icon2 = $icon2;

        return $this;
    }

    public function getIcon3(): ?int
    {
        return $this->icon3;
    }

    public function setIcon3(?int $icon3): self
    {
        $this->icon3 = $icon3;

        return $this;
    }

    public function getIcon4(): ?int
    {
        return $this->icon4;
    }

    public function setIcon4(?int $icon4): self
    {
        $this->icon4 = $icon4;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getBnpcBase1(): ?BnpcName
    {
        return $this->bnpcBase1;
    }

    public function setBnpcBase1(?BnpcName $bnpcBase1): self
    {
        $this->bnpcBase1 = $bnpcBase1;

        return $this;
    }

    public function getBnpcBase0(): ?BnpcName
    {
        return $this->bnpcBase0;
    }

    public function setBnpcBase0(?BnpcName $bnpcBase0): self
    {
        $this->bnpcBase0 = $bnpcBase0;

        return $this;
    }
}
