<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrandCompanyRank.
 *
 * @ORM\Table(name="grand_company_rank", indexes={@ORM\Index(name="idx_e258c45fd854c22f", columns={"quest_flames"}), @ORM\Index(name="idx_e258c45fcffa497", columns={"quest_serpents"}), @ORM\Index(name="idx_e258c45f8bbd08a4", columns={"quest_maelstrom"})})
 * @ORM\Entity
 */
class GrandCompanyRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="grand_company_rank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tier", type="integer", nullable=true)
     */
    private $tier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_seals", type="bigint", nullable=true)
     */
    private $maxSeals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_seals", type="bigint", nullable=true)
     */
    private $requiredSeals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_maelstrom", type="integer", nullable=true)
     */
    private $iconMaelstrom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_serpents", type="integer", nullable=true)
     */
    private $iconSerpents;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_flames", type="integer", nullable=true)
     */
    private $iconFlames;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_flames", referencedColumnName="pk")
     * })
     */
    private $questFlames;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_serpents", referencedColumnName="pk")
     * })
     */
    private $questSerpents;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_maelstrom", referencedColumnName="pk")
     * })
     */
    private $questMaelstrom;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTier(): ?int
    {
        return $this->tier;
    }

    public function setTier(?int $tier): self
    {
        $this->tier = $tier;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getMaxSeals(): ?string
    {
        return $this->maxSeals;
    }

    public function setMaxSeals(?string $maxSeals): self
    {
        $this->maxSeals = $maxSeals;

        return $this;
    }

    public function getRequiredSeals(): ?string
    {
        return $this->requiredSeals;
    }

    public function setRequiredSeals(?string $requiredSeals): self
    {
        $this->requiredSeals = $requiredSeals;

        return $this;
    }

    public function getIconMaelstrom(): ?int
    {
        return $this->iconMaelstrom;
    }

    public function setIconMaelstrom(?int $iconMaelstrom): self
    {
        $this->iconMaelstrom = $iconMaelstrom;

        return $this;
    }

    public function getIconSerpents(): ?int
    {
        return $this->iconSerpents;
    }

    public function setIconSerpents(?int $iconSerpents): self
    {
        $this->iconSerpents = $iconSerpents;

        return $this;
    }

    public function getIconFlames(): ?int
    {
        return $this->iconFlames;
    }

    public function setIconFlames(?int $iconFlames): self
    {
        $this->iconFlames = $iconFlames;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getQuestFlames(): ?Quest
    {
        return $this->questFlames;
    }

    public function setQuestFlames(?Quest $questFlames): self
    {
        $this->questFlames = $questFlames;

        return $this;
    }

    public function getQuestSerpents(): ?Quest
    {
        return $this->questSerpents;
    }

    public function setQuestSerpents(?Quest $questSerpents): self
    {
        $this->questSerpents = $questSerpents;

        return $this;
    }

    public function getQuestMaelstrom(): ?Quest
    {
        return $this->questMaelstrom;
    }

    public function setQuestMaelstrom(?Quest $questMaelstrom): self
    {
        $this->questMaelstrom = $questMaelstrom;

        return $this;
    }
}
