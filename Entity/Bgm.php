<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bgm.
 *
 * @ORM\Table(name="bgm")
 * @ORM\Entity
 */
class Bgm
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgm_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="disable_restart_time_out", type="boolean", nullable=true)
     */
    private $disableRestartTimeOut;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="disable_restart", type="boolean", nullable=true)
     */
    private $disableRestart;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pass_end", type="boolean", nullable=true)
     */
    private $passEnd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disable_restart_reset_time", type="string", length=255, nullable=true)
     */
    private $disableRestartResetTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="special_mode", type="integer", nullable=true)
     */
    private $specialMode;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getDisableRestartTimeOut(): ?bool
    {
        return $this->disableRestartTimeOut;
    }

    public function setDisableRestartTimeOut(?bool $disableRestartTimeOut): self
    {
        $this->disableRestartTimeOut = $disableRestartTimeOut;

        return $this;
    }

    public function getDisableRestart(): ?bool
    {
        return $this->disableRestart;
    }

    public function setDisableRestart(?bool $disableRestart): self
    {
        $this->disableRestart = $disableRestart;

        return $this;
    }

    public function getPassEnd(): ?bool
    {
        return $this->passEnd;
    }

    public function setPassEnd(?bool $passEnd): self
    {
        $this->passEnd = $passEnd;

        return $this;
    }

    public function getDisableRestartResetTime(): ?string
    {
        return $this->disableRestartResetTime;
    }

    public function setDisableRestartResetTime(?string $disableRestartResetTime): self
    {
        $this->disableRestartResetTime = $disableRestartResetTime;

        return $this;
    }

    public function getSpecialMode(): ?int
    {
        return $this->specialMode;
    }

    public function setSpecialMode(?int $specialMode): self
    {
        $this->specialMode = $specialMode;

        return $this;
    }
}
