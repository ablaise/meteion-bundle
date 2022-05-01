<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicContent.
 *
 * @ORM\Table(name="public_content", indexes={@ORM\Index(name="idx_a51b6f1bd3bd4520", columns={"end_cutscene"}), @ORM\Index(name="idx_a51b6f1bf2325e16", columns={"text_data_end"}), @ORM\Index(name="idx_a51b6f1b8668572b", columns={"content_finder_condition"}), @ORM\Index(name="idx_a51b6f1b4d3c908a", columns={"text_data_start"}), @ORM\Index(name="idx_a51b6f1b15d4969f", columns={"start_cutscene"})})
 * @ORM\Entity
 */
class PublicContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="public_content_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit", type="bigint", nullable=true)
     */
    private $timeLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_icon", type="integer", nullable=true)
     */
    private $mapIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbevent_range", type="bigint", nullable=true)
     */
    private $lgbeventRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgbpop_range", type="bigint", nullable=true)
     */
    private $lgbpopRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="additional_data", type="integer", nullable=true)
     */
    private $additionalData;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="bigint", nullable=true)
     */
    private $column16;

    /**
     * @var PublicContentCutscene
     *
     * @ORM\ManyToOne(targetEntity="PublicContentCutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="end_cutscene", referencedColumnName="pk")
     * })
     */
    private $endCutscene;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_finder_condition", referencedColumnName="pk")
     * })
     */
    private $contentFinderCondition;

    /**
     * @var PublicContentCutscene
     *
     * @ORM\ManyToOne(targetEntity="PublicContentCutscene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_cutscene", referencedColumnName="pk")
     * })
     */
    private $startCutscene;

    /**
     * @var PublicContentTextData
     *
     * @ORM\ManyToOne(targetEntity="PublicContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_data_end", referencedColumnName="pk")
     * })
     */
    private $textDataEnd;

    /**
     * @var PublicContentTextData
     *
     * @ORM\ManyToOne(targetEntity="PublicContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_data_start", referencedColumnName="pk")
     * })
     */
    private $textDataStart;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTimeLimit(): ?string
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(?string $timeLimit): self
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }

    public function getMapIcon(): ?int
    {
        return $this->mapIcon;
    }

    public function setMapIcon(?int $mapIcon): self
    {
        $this->mapIcon = $mapIcon;

        return $this;
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

    public function getLgbeventRange(): ?string
    {
        return $this->lgbeventRange;
    }

    public function setLgbeventRange(?string $lgbeventRange): self
    {
        $this->lgbeventRange = $lgbeventRange;

        return $this;
    }

    public function getLgbpopRange(): ?string
    {
        return $this->lgbpopRange;
    }

    public function setLgbpopRange(?string $lgbpopRange): self
    {
        $this->lgbpopRange = $lgbpopRange;

        return $this;
    }

    public function getAdditionalData(): ?int
    {
        return $this->additionalData;
    }

    public function setAdditionalData(?int $additionalData): self
    {
        $this->additionalData = $additionalData;

        return $this;
    }

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getEndCutscene(): ?PublicContentCutscene
    {
        return $this->endCutscene;
    }

    public function setEndCutscene(?PublicContentCutscene $endCutscene): self
    {
        $this->endCutscene = $endCutscene;

        return $this;
    }

    public function getContentFinderCondition(): ?ContentFinderCondition
    {
        return $this->contentFinderCondition;
    }

    public function setContentFinderCondition(?ContentFinderCondition $contentFinderCondition): self
    {
        $this->contentFinderCondition = $contentFinderCondition;

        return $this;
    }

    public function getStartCutscene(): ?PublicContentCutscene
    {
        return $this->startCutscene;
    }

    public function setStartCutscene(?PublicContentCutscene $startCutscene): self
    {
        $this->startCutscene = $startCutscene;

        return $this;
    }

    public function getTextDataEnd(): ?PublicContentTextData
    {
        return $this->textDataEnd;
    }

    public function setTextDataEnd(?PublicContentTextData $textDataEnd): self
    {
        $this->textDataEnd = $textDataEnd;

        return $this;
    }

    public function getTextDataStart(): ?PublicContentTextData
    {
        return $this->textDataStart;
    }

    public function setTextDataStart(?PublicContentTextData $textDataStart): self
    {
        $this->textDataStart = $textDataStart;

        return $this;
    }
}
