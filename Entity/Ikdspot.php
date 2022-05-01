<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ikdspot.
 *
 * @ORM\Table(name="ikdspot", indexes={@ORM\Index(name="idx_15b55d334a154397", columns={"spot_main"}), @ORM\Index(name="idx_15b55d336a48268b", columns={"spot_sub"}), @ORM\Index(name="idx_15b55d3394960eea", columns={"place_name"})})
 * @ORM\Entity
 */
class Ikdspot
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ikdspot_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var FishingSpot
     *
     * @ORM\ManyToOne(targetEntity="FishingSpot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spot_sub", referencedColumnName="pk")
     * })
     */
    private $spotSub;

    /**
     * @var FishingSpot
     *
     * @ORM\ManyToOne(targetEntity="FishingSpot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spot_main", referencedColumnName="pk")
     * })
     */
    private $spotMain;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getSpotSub(): ?FishingSpot
    {
        return $this->spotSub;
    }

    public function setSpotSub(?FishingSpot $spotSub): self
    {
        $this->spotSub = $spotSub;

        return $this;
    }

    public function getSpotMain(): ?FishingSpot
    {
        return $this->spotMain;
    }

    public function setSpotMain(?FishingSpot $spotMain): self
    {
        $this->spotMain = $spotMain;

        return $this;
    }
}
