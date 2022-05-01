<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DynamicEventSingleBattle.
 *
 * @ORM\Table(name="dynamic_event_single_battle", indexes={@ORM\Index(name="idx_c592df82f6d15bda", columns={"bnpc_name"})})
 * @ORM\Entity
 */
class DynamicEventSingleBattle
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dynamic_event_single_battle_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }
}
