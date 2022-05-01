<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovieSubtitleVoyage.
 *
 * @ORM\Table(name="movie_subtitle_voyage")
 * @ORM\Entity
 */
class MovieSubtitleVoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="movie_subtitle_voyage_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="start_time", type="string", length=255, nullable=true)
     */
    private $startTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="end_time", type="string", length=255, nullable=true)
     */
    private $endTime;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }
}
