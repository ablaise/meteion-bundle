<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcsupplyDuty.
 *
 * @ORM\Table(name="gcsupply_duty", indexes={@ORM\Index(name="idx_56e79110bd48b353", columns={"item_2_3"}), @ORM\Index(name="idx_56e79110b863c913", columns={"item_1_7"}), @ORM\Index(name="idx_56e79110c9cb57ab", columns={"item_0_2"}), @ORM\Index(name="idx_56e79110ba25774a", columns={"item_2_7"}), @ORM\Index(name="idx_56e79110566da83f", columns={"item_1_5"}), @ORM\Index(name="idx_56e79110cea693b2", columns={"item_0_6"}), @ORM\Index(name="idx_56e79110542b1666", columns={"item_2_5"}), @ORM\Index(name="idx_56e791102a9a6adb", columns={"item_2_8"}), @ORM\Index(name="idx_56e791105346d27f", columns={"item_2_1"}), @ORM\Index(name="idx_56e79110cf64f985", columns={"item_1_6"}), @ORM\Index(name="idx_56e79110cd2247dc", columns={"item_2_6"}), @ORM\Index(name="idx_56e7911020a8f29e", columns={"item_0_4"}), @ORM\Index(name="idx_56e79110b9a1a324", columns={"item_0_7"}), @ORM\Index(name="idx_56e7911026075cb0", columns={"item_1_0"}), @ORM\Index(name="idx_56e79110bf0e0d0a", columns={"item_1_3"}), @ORM\Index(name="idx_56e791105e198e23", columns={"item_0_9"}), @ORM\Index(name="idx_56e791105fdbe414", columns={"item_1_9"}), @ORM\Index(name="idx_56e791105d9d5a4d", columns={"item_2_9"}), @ORM\Index(name="idx_56e79110216a98a9", columns={"item_1_4"}), @ORM\Index(name="idx_56e791109e3b3dd5", columns={"item_0_10"}), @ORM\Index(name="idx_56e7911051006c26", columns={"item_1_1"}), @ORM\Index(name="idx_56e79110232c26f0", columns={"item_2_4"}), @ORM\Index(name="idx_56e79110291ebeb5", columns={"item_0_8"}), @ORM\Index(name="idx_56e79110ca4f83c5", columns={"item_2_2"}), @ORM\Index(name="idx_56e791102441e2e9", columns={"item_2_0"}), @ORM\Index(name="idx_56e791103432f55e", columns={"item_2_10"}), @ORM\Index(name="idx_56e7911027c53687", columns={"item_0_0"}), @ORM\Index(name="idx_56e7911050c20611", columns={"item_0_1"}), @ORM\Index(name="idx_56e79110c8093d9c", columns={"item_1_2"}), @ORM\Index(name="idx_56e79110becc673d", columns={"item_0_3"}), @ORM\Index(name="idx_56e7911028dcd482", columns={"item_1_8"}), @ORM\Index(name="idx_56e7911057afc208", columns={"item_0_5"}), @ORM\Index(name="idx_56e7911026875ab0", columns={"item_1_10"})})
 * @ORM\Entity
 */
class GcsupplyDuty
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gcsupply_duty_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_0", type="integer", nullable=true)
     */
    private $itemCount00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_0", type="integer", nullable=true)
     */
    private $itemCount10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_0", type="integer", nullable=true)
     */
    private $itemCount20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_1", type="integer", nullable=true)
     */
    private $itemCount01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_1", type="integer", nullable=true)
     */
    private $itemCount11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_1", type="integer", nullable=true)
     */
    private $itemCount21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_2", type="integer", nullable=true)
     */
    private $itemCount02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_2", type="integer", nullable=true)
     */
    private $itemCount12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_2", type="integer", nullable=true)
     */
    private $itemCount22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_3", type="integer", nullable=true)
     */
    private $itemCount03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_3", type="integer", nullable=true)
     */
    private $itemCount13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_3", type="integer", nullable=true)
     */
    private $itemCount23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_4", type="integer", nullable=true)
     */
    private $itemCount04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_4", type="integer", nullable=true)
     */
    private $itemCount14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_4", type="integer", nullable=true)
     */
    private $itemCount24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_5", type="integer", nullable=true)
     */
    private $itemCount05;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_5", type="integer", nullable=true)
     */
    private $itemCount15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_5", type="integer", nullable=true)
     */
    private $itemCount25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_6", type="integer", nullable=true)
     */
    private $itemCount06;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_6", type="integer", nullable=true)
     */
    private $itemCount16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_6", type="integer", nullable=true)
     */
    private $itemCount26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_7", type="integer", nullable=true)
     */
    private $itemCount07;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_7", type="integer", nullable=true)
     */
    private $itemCount17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_7", type="integer", nullable=true)
     */
    private $itemCount27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_8", type="integer", nullable=true)
     */
    private $itemCount08;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_8", type="integer", nullable=true)
     */
    private $itemCount18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_8", type="integer", nullable=true)
     */
    private $itemCount28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_9", type="integer", nullable=true)
     */
    private $itemCount09;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_9", type="integer", nullable=true)
     */
    private $itemCount19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_9", type="integer", nullable=true)
     */
    private $itemCount29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_10", type="integer", nullable=true)
     */
    private $itemCount010;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_10", type="integer", nullable=true)
     */
    private $itemCount110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_10", type="integer", nullable=true)
     */
    private $itemCount210;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_10", referencedColumnName="pk")
     * })
     */
    private $item210;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_10", referencedColumnName="pk")
     * })
     */
    private $item110;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_10", referencedColumnName="pk")
     * })
     */
    private $item010;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_9", referencedColumnName="pk")
     * })
     */
    private $item29;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_9", referencedColumnName="pk")
     * })
     */
    private $item19;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_9", referencedColumnName="pk")
     * })
     */
    private $item09;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_8", referencedColumnName="pk")
     * })
     */
    private $item28;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_8", referencedColumnName="pk")
     * })
     */
    private $item18;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_8", referencedColumnName="pk")
     * })
     */
    private $item08;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_7", referencedColumnName="pk")
     * })
     */
    private $item27;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_7", referencedColumnName="pk")
     * })
     */
    private $item17;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_7", referencedColumnName="pk")
     * })
     */
    private $item07;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_6", referencedColumnName="pk")
     * })
     */
    private $item26;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_6", referencedColumnName="pk")
     * })
     */
    private $item16;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_6", referencedColumnName="pk")
     * })
     */
    private $item06;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_5", referencedColumnName="pk")
     * })
     */
    private $item25;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_5", referencedColumnName="pk")
     * })
     */
    private $item15;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_5", referencedColumnName="pk")
     * })
     */
    private $item05;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_4", referencedColumnName="pk")
     * })
     */
    private $item24;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_4", referencedColumnName="pk")
     * })
     */
    private $item14;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_4", referencedColumnName="pk")
     * })
     */
    private $item04;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_3", referencedColumnName="pk")
     * })
     */
    private $item23;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_3", referencedColumnName="pk")
     * })
     */
    private $item13;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_3", referencedColumnName="pk")
     * })
     */
    private $item03;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_2", referencedColumnName="pk")
     * })
     */
    private $item22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_2", referencedColumnName="pk")
     * })
     */
    private $item12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_2", referencedColumnName="pk")
     * })
     */
    private $item02;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_1", referencedColumnName="pk")
     * })
     */
    private $item21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_1", referencedColumnName="pk")
     * })
     */
    private $item11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_1", referencedColumnName="pk")
     * })
     */
    private $item01;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_0", referencedColumnName="pk")
     * })
     */
    private $item20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_0", referencedColumnName="pk")
     * })
     */
    private $item10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_0", referencedColumnName="pk")
     * })
     */
    private $item00;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getItemCount00(): ?int
    {
        return $this->itemCount00;
    }

    public function setItemCount00(?int $itemCount00): self
    {
        $this->itemCount00 = $itemCount00;

        return $this;
    }

    public function getItemCount10(): ?int
    {
        return $this->itemCount10;
    }

    public function setItemCount10(?int $itemCount10): self
    {
        $this->itemCount10 = $itemCount10;

        return $this;
    }

    public function getItemCount20(): ?int
    {
        return $this->itemCount20;
    }

    public function setItemCount20(?int $itemCount20): self
    {
        $this->itemCount20 = $itemCount20;

        return $this;
    }

    public function getItemCount01(): ?int
    {
        return $this->itemCount01;
    }

    public function setItemCount01(?int $itemCount01): self
    {
        $this->itemCount01 = $itemCount01;

        return $this;
    }

    public function getItemCount11(): ?int
    {
        return $this->itemCount11;
    }

    public function setItemCount11(?int $itemCount11): self
    {
        $this->itemCount11 = $itemCount11;

        return $this;
    }

    public function getItemCount21(): ?int
    {
        return $this->itemCount21;
    }

    public function setItemCount21(?int $itemCount21): self
    {
        $this->itemCount21 = $itemCount21;

        return $this;
    }

    public function getItemCount02(): ?int
    {
        return $this->itemCount02;
    }

    public function setItemCount02(?int $itemCount02): self
    {
        $this->itemCount02 = $itemCount02;

        return $this;
    }

    public function getItemCount12(): ?int
    {
        return $this->itemCount12;
    }

    public function setItemCount12(?int $itemCount12): self
    {
        $this->itemCount12 = $itemCount12;

        return $this;
    }

    public function getItemCount22(): ?int
    {
        return $this->itemCount22;
    }

    public function setItemCount22(?int $itemCount22): self
    {
        $this->itemCount22 = $itemCount22;

        return $this;
    }

    public function getItemCount03(): ?int
    {
        return $this->itemCount03;
    }

    public function setItemCount03(?int $itemCount03): self
    {
        $this->itemCount03 = $itemCount03;

        return $this;
    }

    public function getItemCount13(): ?int
    {
        return $this->itemCount13;
    }

    public function setItemCount13(?int $itemCount13): self
    {
        $this->itemCount13 = $itemCount13;

        return $this;
    }

    public function getItemCount23(): ?int
    {
        return $this->itemCount23;
    }

    public function setItemCount23(?int $itemCount23): self
    {
        $this->itemCount23 = $itemCount23;

        return $this;
    }

    public function getItemCount04(): ?int
    {
        return $this->itemCount04;
    }

    public function setItemCount04(?int $itemCount04): self
    {
        $this->itemCount04 = $itemCount04;

        return $this;
    }

    public function getItemCount14(): ?int
    {
        return $this->itemCount14;
    }

    public function setItemCount14(?int $itemCount14): self
    {
        $this->itemCount14 = $itemCount14;

        return $this;
    }

    public function getItemCount24(): ?int
    {
        return $this->itemCount24;
    }

    public function setItemCount24(?int $itemCount24): self
    {
        $this->itemCount24 = $itemCount24;

        return $this;
    }

    public function getItemCount05(): ?int
    {
        return $this->itemCount05;
    }

    public function setItemCount05(?int $itemCount05): self
    {
        $this->itemCount05 = $itemCount05;

        return $this;
    }

    public function getItemCount15(): ?int
    {
        return $this->itemCount15;
    }

    public function setItemCount15(?int $itemCount15): self
    {
        $this->itemCount15 = $itemCount15;

        return $this;
    }

    public function getItemCount25(): ?int
    {
        return $this->itemCount25;
    }

    public function setItemCount25(?int $itemCount25): self
    {
        $this->itemCount25 = $itemCount25;

        return $this;
    }

    public function getItemCount06(): ?int
    {
        return $this->itemCount06;
    }

    public function setItemCount06(?int $itemCount06): self
    {
        $this->itemCount06 = $itemCount06;

        return $this;
    }

    public function getItemCount16(): ?int
    {
        return $this->itemCount16;
    }

    public function setItemCount16(?int $itemCount16): self
    {
        $this->itemCount16 = $itemCount16;

        return $this;
    }

    public function getItemCount26(): ?int
    {
        return $this->itemCount26;
    }

    public function setItemCount26(?int $itemCount26): self
    {
        $this->itemCount26 = $itemCount26;

        return $this;
    }

    public function getItemCount07(): ?int
    {
        return $this->itemCount07;
    }

    public function setItemCount07(?int $itemCount07): self
    {
        $this->itemCount07 = $itemCount07;

        return $this;
    }

    public function getItemCount17(): ?int
    {
        return $this->itemCount17;
    }

    public function setItemCount17(?int $itemCount17): self
    {
        $this->itemCount17 = $itemCount17;

        return $this;
    }

    public function getItemCount27(): ?int
    {
        return $this->itemCount27;
    }

    public function setItemCount27(?int $itemCount27): self
    {
        $this->itemCount27 = $itemCount27;

        return $this;
    }

    public function getItemCount08(): ?int
    {
        return $this->itemCount08;
    }

    public function setItemCount08(?int $itemCount08): self
    {
        $this->itemCount08 = $itemCount08;

        return $this;
    }

    public function getItemCount18(): ?int
    {
        return $this->itemCount18;
    }

    public function setItemCount18(?int $itemCount18): self
    {
        $this->itemCount18 = $itemCount18;

        return $this;
    }

    public function getItemCount28(): ?int
    {
        return $this->itemCount28;
    }

    public function setItemCount28(?int $itemCount28): self
    {
        $this->itemCount28 = $itemCount28;

        return $this;
    }

    public function getItemCount09(): ?int
    {
        return $this->itemCount09;
    }

    public function setItemCount09(?int $itemCount09): self
    {
        $this->itemCount09 = $itemCount09;

        return $this;
    }

    public function getItemCount19(): ?int
    {
        return $this->itemCount19;
    }

    public function setItemCount19(?int $itemCount19): self
    {
        $this->itemCount19 = $itemCount19;

        return $this;
    }

    public function getItemCount29(): ?int
    {
        return $this->itemCount29;
    }

    public function setItemCount29(?int $itemCount29): self
    {
        $this->itemCount29 = $itemCount29;

        return $this;
    }

    public function getItemCount010(): ?int
    {
        return $this->itemCount010;
    }

    public function setItemCount010(?int $itemCount010): self
    {
        $this->itemCount010 = $itemCount010;

        return $this;
    }

    public function getItemCount110(): ?int
    {
        return $this->itemCount110;
    }

    public function setItemCount110(?int $itemCount110): self
    {
        $this->itemCount110 = $itemCount110;

        return $this;
    }

    public function getItemCount210(): ?int
    {
        return $this->itemCount210;
    }

    public function setItemCount210(?int $itemCount210): self
    {
        $this->itemCount210 = $itemCount210;

        return $this;
    }

    public function getItem210(): ?Item
    {
        return $this->item210;
    }

    public function setItem210(?Item $item210): self
    {
        $this->item210 = $item210;

        return $this;
    }

    public function getItem110(): ?Item
    {
        return $this->item110;
    }

    public function setItem110(?Item $item110): self
    {
        $this->item110 = $item110;

        return $this;
    }

    public function getItem010(): ?Item
    {
        return $this->item010;
    }

    public function setItem010(?Item $item010): self
    {
        $this->item010 = $item010;

        return $this;
    }

    public function getItem29(): ?Item
    {
        return $this->item29;
    }

    public function setItem29(?Item $item29): self
    {
        $this->item29 = $item29;

        return $this;
    }

    public function getItem19(): ?Item
    {
        return $this->item19;
    }

    public function setItem19(?Item $item19): self
    {
        $this->item19 = $item19;

        return $this;
    }

    public function getItem09(): ?Item
    {
        return $this->item09;
    }

    public function setItem09(?Item $item09): self
    {
        $this->item09 = $item09;

        return $this;
    }

    public function getItem28(): ?Item
    {
        return $this->item28;
    }

    public function setItem28(?Item $item28): self
    {
        $this->item28 = $item28;

        return $this;
    }

    public function getItem18(): ?Item
    {
        return $this->item18;
    }

    public function setItem18(?Item $item18): self
    {
        $this->item18 = $item18;

        return $this;
    }

    public function getItem08(): ?Item
    {
        return $this->item08;
    }

    public function setItem08(?Item $item08): self
    {
        $this->item08 = $item08;

        return $this;
    }

    public function getItem27(): ?Item
    {
        return $this->item27;
    }

    public function setItem27(?Item $item27): self
    {
        $this->item27 = $item27;

        return $this;
    }

    public function getItem17(): ?Item
    {
        return $this->item17;
    }

    public function setItem17(?Item $item17): self
    {
        $this->item17 = $item17;

        return $this;
    }

    public function getItem07(): ?Item
    {
        return $this->item07;
    }

    public function setItem07(?Item $item07): self
    {
        $this->item07 = $item07;

        return $this;
    }

    public function getItem26(): ?Item
    {
        return $this->item26;
    }

    public function setItem26(?Item $item26): self
    {
        $this->item26 = $item26;

        return $this;
    }

    public function getItem16(): ?Item
    {
        return $this->item16;
    }

    public function setItem16(?Item $item16): self
    {
        $this->item16 = $item16;

        return $this;
    }

    public function getItem06(): ?Item
    {
        return $this->item06;
    }

    public function setItem06(?Item $item06): self
    {
        $this->item06 = $item06;

        return $this;
    }

    public function getItem25(): ?Item
    {
        return $this->item25;
    }

    public function setItem25(?Item $item25): self
    {
        $this->item25 = $item25;

        return $this;
    }

    public function getItem15(): ?Item
    {
        return $this->item15;
    }

    public function setItem15(?Item $item15): self
    {
        $this->item15 = $item15;

        return $this;
    }

    public function getItem05(): ?Item
    {
        return $this->item05;
    }

    public function setItem05(?Item $item05): self
    {
        $this->item05 = $item05;

        return $this;
    }

    public function getItem24(): ?Item
    {
        return $this->item24;
    }

    public function setItem24(?Item $item24): self
    {
        $this->item24 = $item24;

        return $this;
    }

    public function getItem14(): ?Item
    {
        return $this->item14;
    }

    public function setItem14(?Item $item14): self
    {
        $this->item14 = $item14;

        return $this;
    }

    public function getItem04(): ?Item
    {
        return $this->item04;
    }

    public function setItem04(?Item $item04): self
    {
        $this->item04 = $item04;

        return $this;
    }

    public function getItem23(): ?Item
    {
        return $this->item23;
    }

    public function setItem23(?Item $item23): self
    {
        $this->item23 = $item23;

        return $this;
    }

    public function getItem13(): ?Item
    {
        return $this->item13;
    }

    public function setItem13(?Item $item13): self
    {
        $this->item13 = $item13;

        return $this;
    }

    public function getItem03(): ?Item
    {
        return $this->item03;
    }

    public function setItem03(?Item $item03): self
    {
        $this->item03 = $item03;

        return $this;
    }

    public function getItem22(): ?Item
    {
        return $this->item22;
    }

    public function setItem22(?Item $item22): self
    {
        $this->item22 = $item22;

        return $this;
    }

    public function getItem12(): ?Item
    {
        return $this->item12;
    }

    public function setItem12(?Item $item12): self
    {
        $this->item12 = $item12;

        return $this;
    }

    public function getItem02(): ?Item
    {
        return $this->item02;
    }

    public function setItem02(?Item $item02): self
    {
        $this->item02 = $item02;

        return $this;
    }

    public function getItem21(): ?Item
    {
        return $this->item21;
    }

    public function setItem21(?Item $item21): self
    {
        $this->item21 = $item21;

        return $this;
    }

    public function getItem11(): ?Item
    {
        return $this->item11;
    }

    public function setItem11(?Item $item11): self
    {
        $this->item11 = $item11;

        return $this;
    }

    public function getItem01(): ?Item
    {
        return $this->item01;
    }

    public function setItem01(?Item $item01): self
    {
        $this->item01 = $item01;

        return $this;
    }

    public function getItem20(): ?Item
    {
        return $this->item20;
    }

    public function setItem20(?Item $item20): self
    {
        $this->item20 = $item20;

        return $this;
    }

    public function getItem10(): ?Item
    {
        return $this->item10;
    }

    public function setItem10(?Item $item10): self
    {
        $this->item10 = $item10;

        return $this;
    }

    public function getItem00(): ?Item
    {
        return $this->item00;
    }

    public function setItem00(?Item $item00): self
    {
        $this->item00 = $item00;

        return $this;
    }
}
