<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AetherCurrentCompFlgSet.
 *
 * @ORM\Table(name="aether_current_comp_flg_set", indexes={@ORM\Index(name="idx_9d660397ec964d54", columns={"aether_current_13"}), @ORM\Index(name="idx_9d660397fdb8c6cd", columns={"aether_current_5"}), @ORM\Index(name="idx_9d6603979b917dc2", columns={"aether_current_12"}), @ORM\Index(name="idx_9d660397fad502d4", columns={"aether_current_1"}), @ORM\Index(name="idx_9d6603978abff65b", columns={"aether_current_4"}), @ORM\Index(name="idx_9d66039764b19777", columns={"aether_current_6"}), @ORM\Index(name="idx_9d660397e9743966", columns={"territory"}), @ORM\Index(name="idx_9d66039714db63f8", columns={"aether_current_3"}), @ORM\Index(name="idx_9d66039763dc536e", columns={"aether_current_2"}), @ORM\Index(name="idx_9d660397f40e8ae6", columns={"aether_current_9"}), @ORM\Index(name="idx_9d6603978309ba70", columns={"aether_current_8"}), @ORM\Index(name="idx_9d660397759f1cee", columns={"aether_current_10"}), @ORM\Index(name="idx_9d6603978dd23242", columns={"aether_current_0"}), @ORM\Index(name="idx_9d66039772f2d8f7", columns={"aether_current_14"}), @ORM\Index(name="idx_9d6603972982c78", columns={"aether_current_11"}), @ORM\Index(name="idx_9d66039713b6a7e1", columns={"aether_current_7"})})
 * @ORM\Entity
 */
class AetherCurrentCompFlgSet
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aether_current_comp_flg_set_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_14", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent14;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_13", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent13;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_12", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent12;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_11", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent11;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_10", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent10;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_9", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent9;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_8", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent8;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_7", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent7;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_6", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent6;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_5", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent5;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_4", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent4;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_3", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent3;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_2", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent2;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_1", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent1;

    /**
     * @var AetherCurrent
     *
     * @ORM\ManyToOne(targetEntity="AetherCurrent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aether_current_0", referencedColumnName="pk")
     * })
     */
    private $aetherCurrent0;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory", referencedColumnName="pk")
     * })
     */
    private $territory;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getAetherCurrent14(): ?AetherCurrent
    {
        return $this->aetherCurrent14;
    }

    public function setAetherCurrent14(?AetherCurrent $aetherCurrent14): self
    {
        $this->aetherCurrent14 = $aetherCurrent14;

        return $this;
    }

    public function getAetherCurrent13(): ?AetherCurrent
    {
        return $this->aetherCurrent13;
    }

    public function setAetherCurrent13(?AetherCurrent $aetherCurrent13): self
    {
        $this->aetherCurrent13 = $aetherCurrent13;

        return $this;
    }

    public function getAetherCurrent12(): ?AetherCurrent
    {
        return $this->aetherCurrent12;
    }

    public function setAetherCurrent12(?AetherCurrent $aetherCurrent12): self
    {
        $this->aetherCurrent12 = $aetherCurrent12;

        return $this;
    }

    public function getAetherCurrent11(): ?AetherCurrent
    {
        return $this->aetherCurrent11;
    }

    public function setAetherCurrent11(?AetherCurrent $aetherCurrent11): self
    {
        $this->aetherCurrent11 = $aetherCurrent11;

        return $this;
    }

    public function getAetherCurrent10(): ?AetherCurrent
    {
        return $this->aetherCurrent10;
    }

    public function setAetherCurrent10(?AetherCurrent $aetherCurrent10): self
    {
        $this->aetherCurrent10 = $aetherCurrent10;

        return $this;
    }

    public function getAetherCurrent9(): ?AetherCurrent
    {
        return $this->aetherCurrent9;
    }

    public function setAetherCurrent9(?AetherCurrent $aetherCurrent9): self
    {
        $this->aetherCurrent9 = $aetherCurrent9;

        return $this;
    }

    public function getAetherCurrent8(): ?AetherCurrent
    {
        return $this->aetherCurrent8;
    }

    public function setAetherCurrent8(?AetherCurrent $aetherCurrent8): self
    {
        $this->aetherCurrent8 = $aetherCurrent8;

        return $this;
    }

    public function getAetherCurrent7(): ?AetherCurrent
    {
        return $this->aetherCurrent7;
    }

    public function setAetherCurrent7(?AetherCurrent $aetherCurrent7): self
    {
        $this->aetherCurrent7 = $aetherCurrent7;

        return $this;
    }

    public function getAetherCurrent6(): ?AetherCurrent
    {
        return $this->aetherCurrent6;
    }

    public function setAetherCurrent6(?AetherCurrent $aetherCurrent6): self
    {
        $this->aetherCurrent6 = $aetherCurrent6;

        return $this;
    }

    public function getAetherCurrent5(): ?AetherCurrent
    {
        return $this->aetherCurrent5;
    }

    public function setAetherCurrent5(?AetherCurrent $aetherCurrent5): self
    {
        $this->aetherCurrent5 = $aetherCurrent5;

        return $this;
    }

    public function getAetherCurrent4(): ?AetherCurrent
    {
        return $this->aetherCurrent4;
    }

    public function setAetherCurrent4(?AetherCurrent $aetherCurrent4): self
    {
        $this->aetherCurrent4 = $aetherCurrent4;

        return $this;
    }

    public function getAetherCurrent3(): ?AetherCurrent
    {
        return $this->aetherCurrent3;
    }

    public function setAetherCurrent3(?AetherCurrent $aetherCurrent3): self
    {
        $this->aetherCurrent3 = $aetherCurrent3;

        return $this;
    }

    public function getAetherCurrent2(): ?AetherCurrent
    {
        return $this->aetherCurrent2;
    }

    public function setAetherCurrent2(?AetherCurrent $aetherCurrent2): self
    {
        $this->aetherCurrent2 = $aetherCurrent2;

        return $this;
    }

    public function getAetherCurrent1(): ?AetherCurrent
    {
        return $this->aetherCurrent1;
    }

    public function setAetherCurrent1(?AetherCurrent $aetherCurrent1): self
    {
        $this->aetherCurrent1 = $aetherCurrent1;

        return $this;
    }

    public function getAetherCurrent0(): ?AetherCurrent
    {
        return $this->aetherCurrent0;
    }

    public function setAetherCurrent0(?AetherCurrent $aetherCurrent0): self
    {
        $this->aetherCurrent0 = $aetherCurrent0;

        return $this;
    }

    public function getTerritory(): ?TerritoryType
    {
        return $this->territory;
    }

    public function setTerritory(?TerritoryType $territory): self
    {
        $this->territory = $territory;

        return $this;
    }
}
