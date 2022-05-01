<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bgmswitch.
 *
 * @ORM\Table(name="bgmswitch", indexes={@ORM\Index(name="idx_7af8d3b04317f817", columns={"quest"}), @ORM\Index(name="idx_7af8d3b043203a25", columns={"bgmsystem_define"})})
 * @ORM\Entity
 */
class Bgmswitch
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmswitch_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bgm", type="integer", nullable=true)
     */
    private $bgm;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var BgmsystemDefine
     *
     * @ORM\ManyToOne(targetEntity="BgmsystemDefine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bgmsystem_define", referencedColumnName="pk")
     * })
     */
    private $bgmsystemDefine;

    public function getPk(): ?string
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

    public function getBgm(): ?int
    {
        return $this->bgm;
    }

    public function setBgm(?int $bgm): self
    {
        $this->bgm = $bgm;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getBgmsystemDefine(): ?BgmsystemDefine
    {
        return $this->bgmsystemDefine;
    }

    public function setBgmsystemDefine(?BgmsystemDefine $bgmsystemDefine): self
    {
        $this->bgmsystemDefine = $bgmsystemDefine;

        return $this;
    }
}
