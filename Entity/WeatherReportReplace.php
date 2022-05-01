<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeatherReportReplace.
 *
 * @ORM\Table(name="weather_report_replace", indexes={@ORM\Index(name="idx_5ba0b0ef764c6db1", columns={"place_name_sub"}), @ORM\Index(name="idx_5ba0b0ef3503bba6", columns={"place_name_parent"})})
 * @ORM\Entity
 */
class WeatherReportReplace
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weather_report_replace_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_parent", referencedColumnName="pk")
     * })
     */
    private $placeNameParent;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_sub", referencedColumnName="pk")
     * })
     */
    private $placeNameSub;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPlaceNameParent(): ?PlaceName
    {
        return $this->placeNameParent;
    }

    public function setPlaceNameParent(?PlaceName $placeNameParent): self
    {
        $this->placeNameParent = $placeNameParent;

        return $this;
    }

    public function getPlaceNameSub(): ?PlaceName
    {
        return $this->placeNameSub;
    }

    public function setPlaceNameSub(?PlaceName $placeNameSub): self
    {
        $this->placeNameSub = $placeNameSub;

        return $this;
    }
}
