<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bgmsituation.
 *
 * @ORM\Table(name="bgmsituation", indexes={@ORM\Index(name="idx_e86eb6e77f834c51", columns={"night_id"}), @ORM\Index(name="idx_e86eb6e789da8466", columns={"daybreak_id"}), @ORM\Index(name="idx_e86eb6e799adadc6", columns={"twilight_id"}), @ORM\Index(name="idx_e86eb6e77d165", columns={"daytime_id"}), @ORM\Index(name="idx_e86eb6e7c9732719", columns={"battle_id"})})
 * @ORM\Entity
 */
class Bgmsituation
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmsituation_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="twilight_id", referencedColumnName="pk")
     * })
     */
    private $twilight;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="daybreak_id", referencedColumnName="pk")
     * })
     */
    private $daybreak;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="battle_id", referencedColumnName="pk")
     * })
     */
    private $battle;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="night_id", referencedColumnName="pk")
     * })
     */
    private $night;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="daytime_id", referencedColumnName="pk")
     * })
     */
    private $daytime;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTwilight(): ?Bgm
    {
        return $this->twilight;
    }

    public function setTwilight(?Bgm $twilight): self
    {
        $this->twilight = $twilight;

        return $this;
    }

    public function getDaybreak(): ?Bgm
    {
        return $this->daybreak;
    }

    public function setDaybreak(?Bgm $daybreak): self
    {
        $this->daybreak = $daybreak;

        return $this;
    }

    public function getBattle(): ?Bgm
    {
        return $this->battle;
    }

    public function setBattle(?Bgm $battle): self
    {
        $this->battle = $battle;

        return $this;
    }

    public function getNight(): ?Bgm
    {
        return $this->night;
    }

    public function setNight(?Bgm $night): self
    {
        $this->night = $night;

        return $this;
    }

    public function getDaytime(): ?Bgm
    {
        return $this->daytime;
    }

    public function setDaytime(?Bgm $daytime): self
    {
        $this->daytime = $daytime;

        return $this;
    }
}
