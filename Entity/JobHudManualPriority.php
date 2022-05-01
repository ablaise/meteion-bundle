<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobHudManualPriority.
 *
 * @ORM\Table(name="job_hud_manual_priority", indexes={@ORM\Index(name="idx_36b6eefdf23adc3d", columns={"job_hud_manual_2"}), @ORM\Index(name="idx_36b6eefd1c34bd11", columns={"job_hud_manual_0"}), @ORM\Index(name="idx_36b6eefd6b338d87", columns={"job_hud_manual_1"})})
 * @ORM\Entity
 */
class JobHudManualPriority
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="job_hud_manual_priority_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var JobHudManual
     *
     * @ORM\ManyToOne(targetEntity="JobHudManual")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_hud_manual_2", referencedColumnName="pk")
     * })
     */
    private $jobHudManual2;

    /**
     * @var JobHudManual
     *
     * @ORM\ManyToOne(targetEntity="JobHudManual")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_hud_manual_1", referencedColumnName="pk")
     * })
     */
    private $jobHudManual1;

    /**
     * @var JobHudManual
     *
     * @ORM\ManyToOne(targetEntity="JobHudManual")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_hud_manual_0", referencedColumnName="pk")
     * })
     */
    private $jobHudManual0;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getJobHudManual2(): ?JobHudManual
    {
        return $this->jobHudManual2;
    }

    public function setJobHudManual2(?JobHudManual $jobHudManual2): self
    {
        $this->jobHudManual2 = $jobHudManual2;

        return $this;
    }

    public function getJobHudManual1(): ?JobHudManual
    {
        return $this->jobHudManual1;
    }

    public function setJobHudManual1(?JobHudManual $jobHudManual1): self
    {
        $this->jobHudManual1 = $jobHudManual1;

        return $this;
    }

    public function getJobHudManual0(): ?JobHudManual
    {
        return $this->jobHudManual0;
    }

    public function setJobHudManual0(?JobHudManual $jobHudManual0): self
    {
        $this->jobHudManual0 = $jobHudManual0;

        return $this;
    }
}
