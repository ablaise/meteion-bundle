<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeLookup.
 *
 * @ORM\Table(name="recipe_lookup", indexes={@ORM\Index(name="idx_7d02af24699169a7", columns={"wvr"}), @ORM\Index(name="idx_7d02af24a39c0cab", columns={"cul"}), @ORM\Index(name="idx_7d02af248303f18c", columns={"bsm"}), @ORM\Index(name="idx_7d02af2485c83367", columns={"gsm"}), @ORM\Index(name="idx_7d02af24985e7e94", columns={"arm"}), @ORM\Index(name="idx_7d02af24f8dcc623", columns={"crp"}), @ORM\Index(name="idx_7d02af243bbeb33b", columns={"ltw"}), @ORM\Index(name="idx_7d02af24aba76c4c", columns={"alc"})})
 * @ORM\Entity
 */
class RecipeLookup
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recipe_lookup_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cul", referencedColumnName="pk")
     * })
     */
    private $cul;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alc", referencedColumnName="pk")
     * })
     */
    private $alc;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wvr", referencedColumnName="pk")
     * })
     */
    private $wvr;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ltw", referencedColumnName="pk")
     * })
     */
    private $ltw;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gsm", referencedColumnName="pk")
     * })
     */
    private $gsm;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arm", referencedColumnName="pk")
     * })
     */
    private $arm;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bsm", referencedColumnName="pk")
     * })
     */
    private $bsm;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crp", referencedColumnName="pk")
     * })
     */
    private $crp;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCul(): ?Recipe
    {
        return $this->cul;
    }

    public function setCul(?Recipe $cul): self
    {
        $this->cul = $cul;

        return $this;
    }

    public function getAlc(): ?Recipe
    {
        return $this->alc;
    }

    public function setAlc(?Recipe $alc): self
    {
        $this->alc = $alc;

        return $this;
    }

    public function getWvr(): ?Recipe
    {
        return $this->wvr;
    }

    public function setWvr(?Recipe $wvr): self
    {
        $this->wvr = $wvr;

        return $this;
    }

    public function getLtw(): ?Recipe
    {
        return $this->ltw;
    }

    public function setLtw(?Recipe $ltw): self
    {
        $this->ltw = $ltw;

        return $this;
    }

    public function getGsm(): ?Recipe
    {
        return $this->gsm;
    }

    public function setGsm(?Recipe $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getArm(): ?Recipe
    {
        return $this->arm;
    }

    public function setArm(?Recipe $arm): self
    {
        $this->arm = $arm;

        return $this;
    }

    public function getBsm(): ?Recipe
    {
        return $this->bsm;
    }

    public function setBsm(?Recipe $bsm): self
    {
        $this->bsm = $bsm;

        return $this;
    }

    public function getCrp(): ?Recipe
    {
        return $this->crp;
    }

    public function setCrp(?Recipe $crp): self
    {
        $this->crp = $crp;

        return $this;
    }
}
