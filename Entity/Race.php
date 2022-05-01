<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race.
 *
 * @ORM\Table(name="race", indexes={@ORM\Index(name="idx_da6fbbaff80c050a", columns={"rse_m__feet"}), @ORM\Index(name="idx_da6fbbaf4f9b89e4", columns={"ex_pac"}), @ORM\Index(name="idx_da6fbbaf1f540e8d", columns={"rse_f__body"}), @ORM\Index(name="idx_da6fbbafd08ce2c0", columns={"rse_f__hands"}), @ORM\Index(name="idx_da6fbbaffa0b51f0", columns={"rse_f__feet"}), @ORM\Index(name="idx_da6fbbaf8de6fe96", columns={"rse_m__hands"}), @ORM\Index(name="idx_da6fbbaf3be3124f", columns={"rse_m__legs"}), @ORM\Index(name="idx_da6fbbaf1d535a77", columns={"rse_m__body"}), @ORM\Index(name="idx_da6fbbaf39e446b5", columns={"rse_f__legs"})})
 * @ORM\Entity
 */
class Race
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="race_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="masculine", type="string", length=255, nullable=true)
     */
    private $masculine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feminine", type="string", length=255, nullable=true)
     */
    private $feminine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ex_pac", referencedColumnName="pk")
     * })
     */
    private $exPac;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_f__feet", referencedColumnName="pk")
     * })
     */
    private $rseFFeet;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_f__legs", referencedColumnName="pk")
     * })
     */
    private $rseFLegs;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_f__hands", referencedColumnName="pk")
     * })
     */
    private $rseFHands;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_f__body", referencedColumnName="pk")
     * })
     */
    private $rseFBody;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_m__feet", referencedColumnName="pk")
     * })
     */
    private $rseMFeet;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_m__legs", referencedColumnName="pk")
     * })
     */
    private $rseMLegs;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_m__hands", referencedColumnName="pk")
     * })
     */
    private $rseMHands;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rse_m__body", referencedColumnName="pk")
     * })
     */
    private $rseMBody;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMasculine(): ?string
    {
        return $this->masculine;
    }

    public function setMasculine(?string $masculine): self
    {
        $this->masculine = $masculine;

        return $this;
    }

    public function getFeminine(): ?string
    {
        return $this->feminine;
    }

    public function setFeminine(?string $feminine): self
    {
        $this->feminine = $feminine;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getExPac(): ?ExVersion
    {
        return $this->exPac;
    }

    public function setExPac(?ExVersion $exPac): self
    {
        $this->exPac = $exPac;

        return $this;
    }

    public function getRseFFeet(): ?Item
    {
        return $this->rseFFeet;
    }

    public function setRseFFeet(?Item $rseFFeet): self
    {
        $this->rseFFeet = $rseFFeet;

        return $this;
    }

    public function getRseFLegs(): ?Item
    {
        return $this->rseFLegs;
    }

    public function setRseFLegs(?Item $rseFLegs): self
    {
        $this->rseFLegs = $rseFLegs;

        return $this;
    }

    public function getRseFHands(): ?Item
    {
        return $this->rseFHands;
    }

    public function setRseFHands(?Item $rseFHands): self
    {
        $this->rseFHands = $rseFHands;

        return $this;
    }

    public function getRseFBody(): ?Item
    {
        return $this->rseFBody;
    }

    public function setRseFBody(?Item $rseFBody): self
    {
        $this->rseFBody = $rseFBody;

        return $this;
    }

    public function getRseMFeet(): ?Item
    {
        return $this->rseMFeet;
    }

    public function setRseMFeet(?Item $rseMFeet): self
    {
        $this->rseMFeet = $rseMFeet;

        return $this;
    }

    public function getRseMLegs(): ?Item
    {
        return $this->rseMLegs;
    }

    public function setRseMLegs(?Item $rseMLegs): self
    {
        $this->rseMLegs = $rseMLegs;

        return $this;
    }

    public function getRseMHands(): ?Item
    {
        return $this->rseMHands;
    }

    public function setRseMHands(?Item $rseMHands): self
    {
        $this->rseMHands = $rseMHands;

        return $this;
    }

    public function getRseMBody(): ?Item
    {
        return $this->rseMBody;
    }

    public function setRseMBody(?Item $rseMBody): self
    {
        $this->rseMBody = $rseMBody;

        return $this;
    }
}
