<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecommendContents.
 *
 * @ORM\Table(name="recommend_contents", indexes={@ORM\Index(name="idx_4e4733c88d519804", columns={"class_job"}), @ORM\Index(name="idx_4e4733c89aeacc13", columns={"level"})})
 * @ORM\Entity
 */
class RecommendContents
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recommend_contents_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_level", type="integer", nullable=true)
     */
    private $minLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_level", type="integer", nullable=true)
     */
    private $maxLevel;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level", referencedColumnName="pk")
     * })
     */
    private $level;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    public function setMinLevel(?int $minLevel): self
    {
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getMaxLevel(): ?int
    {
        return $this->maxLevel;
    }

    public function setMaxLevel(?int $maxLevel): self
    {
        $this->maxLevel = $maxLevel;

        return $this;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function setLevel(?Level $level): self
    {
        $this->level = $level;

        return $this;
    }
}
