<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FateShop.
 *
 * @ORM\Table(name="fate_shop", indexes={@ORM\Index(name="idx_a242edd04cfaa697", columns={"default_talk_0"}), @ORM\Index(name="idx_a242edd0cf08634c", columns={"special_shop_1"}), @ORM\Index(name="idx_a242edd03bfd9601", columns={"default_talk_1"}), @ORM\Index(name="idx_a242edd0d29e3334", columns={"default_talk_7"}), @ORM\Index(name="idx_a242edd03c905218", columns={"default_talk_5"}), @ORM\Index(name="idx_a242edd04b97628e", columns={"default_talk_4"}), @ORM\Index(name="idx_a242edd0a2f4c7bb", columns={"default_talk_2"}), @ORM\Index(name="idx_a242edd0d5f3f72d", columns={"default_talk_3"}), @ORM\Index(name="idx_a242edd0b80f53da", columns={"special_shop_0"}), @ORM\Index(name="idx_a242edd0a59903a2", columns={"default_talk_6"})})
 * @ORM\Entity
 */
class FateShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_7", referencedColumnName="pk")
     * })
     */
    private $defaultTalk7;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_6", referencedColumnName="pk")
     * })
     */
    private $defaultTalk6;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_5", referencedColumnName="pk")
     * })
     */
    private $defaultTalk5;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_4", referencedColumnName="pk")
     * })
     */
    private $defaultTalk4;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_3", referencedColumnName="pk")
     * })
     */
    private $defaultTalk3;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_2", referencedColumnName="pk")
     * })
     */
    private $defaultTalk2;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_1", referencedColumnName="pk")
     * })
     */
    private $defaultTalk1;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_talk_0", referencedColumnName="pk")
     * })
     */
    private $defaultTalk0;

    /**
     * @var SpecialShop
     *
     * @ORM\ManyToOne(targetEntity="SpecialShop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_1", referencedColumnName="pk")
     * })
     */
    private $specialShop1;

    /**
     * @var SpecialShop
     *
     * @ORM\ManyToOne(targetEntity="SpecialShop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_0", referencedColumnName="pk")
     * })
     */
    private $specialShop0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDefaultTalk7(): ?DefaultTalk
    {
        return $this->defaultTalk7;
    }

    public function setDefaultTalk7(?DefaultTalk $defaultTalk7): self
    {
        $this->defaultTalk7 = $defaultTalk7;

        return $this;
    }

    public function getDefaultTalk6(): ?DefaultTalk
    {
        return $this->defaultTalk6;
    }

    public function setDefaultTalk6(?DefaultTalk $defaultTalk6): self
    {
        $this->defaultTalk6 = $defaultTalk6;

        return $this;
    }

    public function getDefaultTalk5(): ?DefaultTalk
    {
        return $this->defaultTalk5;
    }

    public function setDefaultTalk5(?DefaultTalk $defaultTalk5): self
    {
        $this->defaultTalk5 = $defaultTalk5;

        return $this;
    }

    public function getDefaultTalk4(): ?DefaultTalk
    {
        return $this->defaultTalk4;
    }

    public function setDefaultTalk4(?DefaultTalk $defaultTalk4): self
    {
        $this->defaultTalk4 = $defaultTalk4;

        return $this;
    }

    public function getDefaultTalk3(): ?DefaultTalk
    {
        return $this->defaultTalk3;
    }

    public function setDefaultTalk3(?DefaultTalk $defaultTalk3): self
    {
        $this->defaultTalk3 = $defaultTalk3;

        return $this;
    }

    public function getDefaultTalk2(): ?DefaultTalk
    {
        return $this->defaultTalk2;
    }

    public function setDefaultTalk2(?DefaultTalk $defaultTalk2): self
    {
        $this->defaultTalk2 = $defaultTalk2;

        return $this;
    }

    public function getDefaultTalk1(): ?DefaultTalk
    {
        return $this->defaultTalk1;
    }

    public function setDefaultTalk1(?DefaultTalk $defaultTalk1): self
    {
        $this->defaultTalk1 = $defaultTalk1;

        return $this;
    }

    public function getDefaultTalk0(): ?DefaultTalk
    {
        return $this->defaultTalk0;
    }

    public function setDefaultTalk0(?DefaultTalk $defaultTalk0): self
    {
        $this->defaultTalk0 = $defaultTalk0;

        return $this;
    }

    public function getSpecialShop1(): ?SpecialShop
    {
        return $this->specialShop1;
    }

    public function setSpecialShop1(?SpecialShop $specialShop1): self
    {
        $this->specialShop1 = $specialShop1;

        return $this;
    }

    public function getSpecialShop0(): ?SpecialShop
    {
        return $this->specialShop0;
    }

    public function setSpecialShop0(?SpecialShop $specialShop0): self
    {
        $this->specialShop0 = $specialShop0;

        return $this;
    }
}
