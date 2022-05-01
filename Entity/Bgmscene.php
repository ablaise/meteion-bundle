<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bgmscene.
 *
 * @ORM\Table(name="bgmscene")
 * @ORM\Entity
 */
class Bgmscene
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmscene_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enable_disable_restart", type="boolean", nullable=true)
     */
    private $enableDisableRestart;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="resume", type="boolean", nullable=true)
     */
    private $resume;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="enable_pass_end", type="boolean", nullable=true)
     */
    private $enablePassEnd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="force_auto_reset", type="boolean", nullable=true)
     */
    private $forceAutoReset;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ignore_battle", type="boolean", nullable=true)
     */
    private $ignoreBattle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEnableDisableRestart(): ?bool
    {
        return $this->enableDisableRestart;
    }

    public function setEnableDisableRestart(?bool $enableDisableRestart): self
    {
        $this->enableDisableRestart = $enableDisableRestart;

        return $this;
    }

    public function getResume(): ?bool
    {
        return $this->resume;
    }

    public function setResume(?bool $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getEnablePassEnd(): ?bool
    {
        return $this->enablePassEnd;
    }

    public function setEnablePassEnd(?bool $enablePassEnd): self
    {
        $this->enablePassEnd = $enablePassEnd;

        return $this;
    }

    public function getForceAutoReset(): ?bool
    {
        return $this->forceAutoReset;
    }

    public function setForceAutoReset(?bool $forceAutoReset): self
    {
        $this->forceAutoReset = $forceAutoReset;

        return $this;
    }

    public function getIgnoreBattle(): ?bool
    {
        return $this->ignoreBattle;
    }

    public function setIgnoreBattle(?bool $ignoreBattle): self
    {
        $this->ignoreBattle = $ignoreBattle;

        return $this;
    }
}
