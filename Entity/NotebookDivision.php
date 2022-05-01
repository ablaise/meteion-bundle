<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotebookDivision.
 *
 * @ORM\Table(name="notebook_division", indexes={@ORM\Index(name="idx_ce47fddc930ed219", columns={"quest_unlock"}), @ORM\Index(name="idx_ce47fddc149fdb24", columns={"notebook_division_category"})})
 * @ORM\Entity
 */
class NotebookDivision
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="notebook_division_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="craft_opening_level", type="integer", nullable=true)
     */
    private $craftOpeningLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering_opening_level", type="integer", nullable=true)
     */
    private $gatheringOpeningLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="crpcraft", type="boolean", nullable=true)
     */
    private $crpcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bsmcraft", type="boolean", nullable=true)
     */
    private $bsmcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="armcraft", type="boolean", nullable=true)
     */
    private $armcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gsmcraft", type="boolean", nullable=true)
     */
    private $gsmcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ltwcraft", type="boolean", nullable=true)
     */
    private $ltwcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="wvrcraft", type="boolean", nullable=true)
     */
    private $wvrcraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="alccraft", type="boolean", nullable=true)
     */
    private $alccraft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="culcraft", type="boolean", nullable=true)
     */
    private $culcraft;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_unlock", referencedColumnName="pk")
     * })
     */
    private $questUnlock;

    /**
     * @var NotebookDivisionCategory
     *
     * @ORM\ManyToOne(targetEntity="NotebookDivisionCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notebook_division_category", referencedColumnName="pk")
     * })
     */
    private $notebookDivisionCategory;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCraftOpeningLevel(): ?int
    {
        return $this->craftOpeningLevel;
    }

    public function setCraftOpeningLevel(?int $craftOpeningLevel): self
    {
        $this->craftOpeningLevel = $craftOpeningLevel;

        return $this;
    }

    public function getGatheringOpeningLevel(): ?int
    {
        return $this->gatheringOpeningLevel;
    }

    public function setGatheringOpeningLevel(?int $gatheringOpeningLevel): self
    {
        $this->gatheringOpeningLevel = $gatheringOpeningLevel;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getCrpcraft(): ?bool
    {
        return $this->crpcraft;
    }

    public function setCrpcraft(?bool $crpcraft): self
    {
        $this->crpcraft = $crpcraft;

        return $this;
    }

    public function getBsmcraft(): ?bool
    {
        return $this->bsmcraft;
    }

    public function setBsmcraft(?bool $bsmcraft): self
    {
        $this->bsmcraft = $bsmcraft;

        return $this;
    }

    public function getArmcraft(): ?bool
    {
        return $this->armcraft;
    }

    public function setArmcraft(?bool $armcraft): self
    {
        $this->armcraft = $armcraft;

        return $this;
    }

    public function getGsmcraft(): ?bool
    {
        return $this->gsmcraft;
    }

    public function setGsmcraft(?bool $gsmcraft): self
    {
        $this->gsmcraft = $gsmcraft;

        return $this;
    }

    public function getLtwcraft(): ?bool
    {
        return $this->ltwcraft;
    }

    public function setLtwcraft(?bool $ltwcraft): self
    {
        $this->ltwcraft = $ltwcraft;

        return $this;
    }

    public function getWvrcraft(): ?bool
    {
        return $this->wvrcraft;
    }

    public function setWvrcraft(?bool $wvrcraft): self
    {
        $this->wvrcraft = $wvrcraft;

        return $this;
    }

    public function getAlccraft(): ?bool
    {
        return $this->alccraft;
    }

    public function setAlccraft(?bool $alccraft): self
    {
        $this->alccraft = $alccraft;

        return $this;
    }

    public function getCulcraft(): ?bool
    {
        return $this->culcraft;
    }

    public function setCulcraft(?bool $culcraft): self
    {
        $this->culcraft = $culcraft;

        return $this;
    }

    public function getQuestUnlock(): ?Quest
    {
        return $this->questUnlock;
    }

    public function setQuestUnlock(?Quest $questUnlock): self
    {
        $this->questUnlock = $questUnlock;

        return $this;
    }

    public function getNotebookDivisionCategory(): ?NotebookDivisionCategory
    {
        return $this->notebookDivisionCategory;
    }

    public function setNotebookDivisionCategory(?NotebookDivisionCategory $notebookDivisionCategory): self
    {
        $this->notebookDivisionCategory = $notebookDivisionCategory;

        return $this;
    }
}
