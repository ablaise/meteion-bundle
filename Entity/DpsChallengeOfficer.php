<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DpsChallengeOfficer.
 *
 * @ORM\Table(name="dps_challenge_officer", indexes={@ORM\Index(name="idx_e1d32c4c48796597", columns={"challenge_name_0"}), @ORM\Index(name="idx_e1d32c4ca67704bb", columns={"challenge_name_2"}), @ORM\Index(name="idx_e1d32c4ca11ac0a2", columns={"challenge_name_6"}), @ORM\Index(name="idx_e1d32c4cf389656d", columns={"challenge_name_15"}), @ORM\Index(name="idx_e1d32c4cd170342d", columns={"challenge_name_3"}), @ORM\Index(name="idx_e1d32c4cdfc9f2b7", columns={"challenge_name_21"}), @ORM\Index(name="idx_e1d32c4c1d870441", columns={"challenge_name_17"}), @ORM\Index(name="idx_e1d32c4c1aeac058", columns={"challenge_name_13"}), @ORM\Index(name="idx_e1d32c4c8d3819d0", columns={"challenge_name_18"}), @ORM\Index(name="idx_e1d32c4c6dedf0ce", columns={"challenge_name_12"}), @ORM\Index(name="idx_e1d32c4ca8cec221", columns={"challenge_name_20"}), @ORM\Index(name="idx_e1d32c4c4f14a18e", columns={"challenge_name_4"}), @ORM\Index(name="idx_e1d32c4c31c7939b", columns={"challenge_name_23"}), @ORM\Index(name="idx_e1d32c4cafa30638", columns={"challenge_name_24"}), @ORM\Index(name="idx_e1d32c4c22a72d51", columns={"unlock_quest"}), @ORM\Index(name="idx_e1d32c4c848e55fb", columns={"challenge_name_14"}), @ORM\Index(name="idx_e1d32c4c38139118", columns={"challenge_name_5"}), @ORM\Index(name="idx_e1d32c4cf4e4a174", columns={"challenge_name_11"}), @ORM\Index(name="idx_e1d32c4c3f7e5501", columns={"challenge_name_1"}), @ORM\Index(name="idx_e1d32c4cfa3f2946", columns={"challenge_name_19"}), @ORM\Index(name="idx_e1d32c4cd61df034", columns={"challenge_name_7"}), @ORM\Index(name="idx_e1d32c4c46c0a30d", columns={"challenge_name_22"}), @ORM\Index(name="idx_e1d32c4c46a2eda5", columns={"challenge_name_8"}), @ORM\Index(name="idx_e1d32c4c83e391e2", columns={"challenge_name_10"}), @ORM\Index(name="idx_e1d32c4c31a5dd33", columns={"challenge_name_9"}), @ORM\Index(name="idx_e1d32c4c6a8034d7", columns={"challenge_name_16"})})
 * @ORM\Entity
 */
class DpsChallengeOfficer
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dps_challenge_officer_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_24", referencedColumnName="pk")
     * })
     */
    private $challengeName24;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_23", referencedColumnName="pk")
     * })
     */
    private $challengeName23;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_22", referencedColumnName="pk")
     * })
     */
    private $challengeName22;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_21", referencedColumnName="pk")
     * })
     */
    private $challengeName21;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_20", referencedColumnName="pk")
     * })
     */
    private $challengeName20;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_19", referencedColumnName="pk")
     * })
     */
    private $challengeName19;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_18", referencedColumnName="pk")
     * })
     */
    private $challengeName18;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_17", referencedColumnName="pk")
     * })
     */
    private $challengeName17;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_16", referencedColumnName="pk")
     * })
     */
    private $challengeName16;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_15", referencedColumnName="pk")
     * })
     */
    private $challengeName15;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_14", referencedColumnName="pk")
     * })
     */
    private $challengeName14;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_13", referencedColumnName="pk")
     * })
     */
    private $challengeName13;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_12", referencedColumnName="pk")
     * })
     */
    private $challengeName12;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_11", referencedColumnName="pk")
     * })
     */
    private $challengeName11;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_10", referencedColumnName="pk")
     * })
     */
    private $challengeName10;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_9", referencedColumnName="pk")
     * })
     */
    private $challengeName9;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_8", referencedColumnName="pk")
     * })
     */
    private $challengeName8;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_7", referencedColumnName="pk")
     * })
     */
    private $challengeName7;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_6", referencedColumnName="pk")
     * })
     */
    private $challengeName6;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_5", referencedColumnName="pk")
     * })
     */
    private $challengeName5;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_4", referencedColumnName="pk")
     * })
     */
    private $challengeName4;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_3", referencedColumnName="pk")
     * })
     */
    private $challengeName3;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_2", referencedColumnName="pk")
     * })
     */
    private $challengeName2;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_1", referencedColumnName="pk")
     * })
     */
    private $challengeName1;

    /**
     * @var DpsChallenge
     *
     * @ORM\ManyToOne(targetEntity="DpsChallenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="challenge_name_0", referencedColumnName="pk")
     * })
     */
    private $challengeName0;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unlock_quest", referencedColumnName="pk")
     * })
     */
    private $unlockQuest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getChallengeName24(): ?DpsChallenge
    {
        return $this->challengeName24;
    }

    public function setChallengeName24(?DpsChallenge $challengeName24): self
    {
        $this->challengeName24 = $challengeName24;

        return $this;
    }

    public function getChallengeName23(): ?DpsChallenge
    {
        return $this->challengeName23;
    }

    public function setChallengeName23(?DpsChallenge $challengeName23): self
    {
        $this->challengeName23 = $challengeName23;

        return $this;
    }

    public function getChallengeName22(): ?DpsChallenge
    {
        return $this->challengeName22;
    }

    public function setChallengeName22(?DpsChallenge $challengeName22): self
    {
        $this->challengeName22 = $challengeName22;

        return $this;
    }

    public function getChallengeName21(): ?DpsChallenge
    {
        return $this->challengeName21;
    }

    public function setChallengeName21(?DpsChallenge $challengeName21): self
    {
        $this->challengeName21 = $challengeName21;

        return $this;
    }

    public function getChallengeName20(): ?DpsChallenge
    {
        return $this->challengeName20;
    }

    public function setChallengeName20(?DpsChallenge $challengeName20): self
    {
        $this->challengeName20 = $challengeName20;

        return $this;
    }

    public function getChallengeName19(): ?DpsChallenge
    {
        return $this->challengeName19;
    }

    public function setChallengeName19(?DpsChallenge $challengeName19): self
    {
        $this->challengeName19 = $challengeName19;

        return $this;
    }

    public function getChallengeName18(): ?DpsChallenge
    {
        return $this->challengeName18;
    }

    public function setChallengeName18(?DpsChallenge $challengeName18): self
    {
        $this->challengeName18 = $challengeName18;

        return $this;
    }

    public function getChallengeName17(): ?DpsChallenge
    {
        return $this->challengeName17;
    }

    public function setChallengeName17(?DpsChallenge $challengeName17): self
    {
        $this->challengeName17 = $challengeName17;

        return $this;
    }

    public function getChallengeName16(): ?DpsChallenge
    {
        return $this->challengeName16;
    }

    public function setChallengeName16(?DpsChallenge $challengeName16): self
    {
        $this->challengeName16 = $challengeName16;

        return $this;
    }

    public function getChallengeName15(): ?DpsChallenge
    {
        return $this->challengeName15;
    }

    public function setChallengeName15(?DpsChallenge $challengeName15): self
    {
        $this->challengeName15 = $challengeName15;

        return $this;
    }

    public function getChallengeName14(): ?DpsChallenge
    {
        return $this->challengeName14;
    }

    public function setChallengeName14(?DpsChallenge $challengeName14): self
    {
        $this->challengeName14 = $challengeName14;

        return $this;
    }

    public function getChallengeName13(): ?DpsChallenge
    {
        return $this->challengeName13;
    }

    public function setChallengeName13(?DpsChallenge $challengeName13): self
    {
        $this->challengeName13 = $challengeName13;

        return $this;
    }

    public function getChallengeName12(): ?DpsChallenge
    {
        return $this->challengeName12;
    }

    public function setChallengeName12(?DpsChallenge $challengeName12): self
    {
        $this->challengeName12 = $challengeName12;

        return $this;
    }

    public function getChallengeName11(): ?DpsChallenge
    {
        return $this->challengeName11;
    }

    public function setChallengeName11(?DpsChallenge $challengeName11): self
    {
        $this->challengeName11 = $challengeName11;

        return $this;
    }

    public function getChallengeName10(): ?DpsChallenge
    {
        return $this->challengeName10;
    }

    public function setChallengeName10(?DpsChallenge $challengeName10): self
    {
        $this->challengeName10 = $challengeName10;

        return $this;
    }

    public function getChallengeName9(): ?DpsChallenge
    {
        return $this->challengeName9;
    }

    public function setChallengeName9(?DpsChallenge $challengeName9): self
    {
        $this->challengeName9 = $challengeName9;

        return $this;
    }

    public function getChallengeName8(): ?DpsChallenge
    {
        return $this->challengeName8;
    }

    public function setChallengeName8(?DpsChallenge $challengeName8): self
    {
        $this->challengeName8 = $challengeName8;

        return $this;
    }

    public function getChallengeName7(): ?DpsChallenge
    {
        return $this->challengeName7;
    }

    public function setChallengeName7(?DpsChallenge $challengeName7): self
    {
        $this->challengeName7 = $challengeName7;

        return $this;
    }

    public function getChallengeName6(): ?DpsChallenge
    {
        return $this->challengeName6;
    }

    public function setChallengeName6(?DpsChallenge $challengeName6): self
    {
        $this->challengeName6 = $challengeName6;

        return $this;
    }

    public function getChallengeName5(): ?DpsChallenge
    {
        return $this->challengeName5;
    }

    public function setChallengeName5(?DpsChallenge $challengeName5): self
    {
        $this->challengeName5 = $challengeName5;

        return $this;
    }

    public function getChallengeName4(): ?DpsChallenge
    {
        return $this->challengeName4;
    }

    public function setChallengeName4(?DpsChallenge $challengeName4): self
    {
        $this->challengeName4 = $challengeName4;

        return $this;
    }

    public function getChallengeName3(): ?DpsChallenge
    {
        return $this->challengeName3;
    }

    public function setChallengeName3(?DpsChallenge $challengeName3): self
    {
        $this->challengeName3 = $challengeName3;

        return $this;
    }

    public function getChallengeName2(): ?DpsChallenge
    {
        return $this->challengeName2;
    }

    public function setChallengeName2(?DpsChallenge $challengeName2): self
    {
        $this->challengeName2 = $challengeName2;

        return $this;
    }

    public function getChallengeName1(): ?DpsChallenge
    {
        return $this->challengeName1;
    }

    public function setChallengeName1(?DpsChallenge $challengeName1): self
    {
        $this->challengeName1 = $challengeName1;

        return $this;
    }

    public function getChallengeName0(): ?DpsChallenge
    {
        return $this->challengeName0;
    }

    public function setChallengeName0(?DpsChallenge $challengeName0): self
    {
        $this->challengeName0 = $challengeName0;

        return $this;
    }

    public function getUnlockQuest(): ?Quest
    {
        return $this->unlockQuest;
    }

    public function setUnlockQuest(?Quest $unlockQuest): self
    {
        $this->unlockQuest = $unlockQuest;

        return $this;
    }
}
