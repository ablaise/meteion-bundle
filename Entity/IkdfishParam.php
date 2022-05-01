<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IkdfishParam.
 *
 * @ORM\Table(name="ikdfish_param", indexes={@ORM\Index(name="idx_16605d073f744433", columns={"fish"}), @ORM\Index(name="idx_16605d077a154609", columns={"ikdcontent_bonus"})})
 * @ORM\Entity
 */
class IkdfishParam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ikdfish_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var IkdcontentBonus
     *
     * @ORM\ManyToOne(targetEntity="IkdcontentBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ikdcontent_bonus", referencedColumnName="pk")
     * })
     */
    private $ikdcontentBonus;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish", referencedColumnName="pk")
     * })
     */
    private $fish;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getIkdcontentBonus(): ?IkdcontentBonus
    {
        return $this->ikdcontentBonus;
    }

    public function setIkdcontentBonus(?IkdcontentBonus $ikdcontentBonus): self
    {
        $this->ikdcontentBonus = $ikdcontentBonus;

        return $this;
    }

    public function getFish(): ?FishParameter
    {
        return $this->fish;
    }

    public function setFish(?FishParameter $fish): self
    {
        $this->fish = $fish;

        return $this;
    }
}
