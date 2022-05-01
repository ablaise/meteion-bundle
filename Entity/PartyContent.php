<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartyContent.
 *
 * @ORM\Table(name="party_content", indexes={@ORM\Index(name="idx_ec34af828668572b", columns={"content_finder_condition"}), @ORM\Index(name="idx_ec34af82f2325e16", columns={"text_data_end"}), @ORM\Index(name="idx_ec34af824d3c908a", columns={"text_data_start"})})
 * @ORM\Entity
 */
class PartyContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="party_content_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="key", type="integer", nullable=true)
     */
    private $key;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit", type="bigint", nullable=true)
     */
    private $timeLimit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="name", type="boolean", nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_0", type="bigint", nullable=true)
     */
    private $lgbEventObject00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_1", type="bigint", nullable=true)
     */
    private $lgbEventObject01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_2", type="bigint", nullable=true)
     */
    private $lgbEventObject02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_3", type="bigint", nullable=true)
     */
    private $lgbEventObject03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_4", type="bigint", nullable=true)
     */
    private $lgbEventObject04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_5", type="bigint", nullable=true)
     */
    private $lgbEventObject05;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_6", type="bigint", nullable=true)
     */
    private $lgbEventObject06;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_7", type="bigint", nullable=true)
     */
    private $lgbEventObject07;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_0_8", type="bigint", nullable=true)
     */
    private $lgbEventObject08;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_0", type="bigint", nullable=true)
     */
    private $lgbEventRange0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_1", type="bigint", nullable=true)
     */
    private $lgbEventRange1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_2", type="bigint", nullable=true)
     */
    private $lgbEventRange2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_3", type="bigint", nullable=true)
     */
    private $lgbEventRange3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_4", type="bigint", nullable=true)
     */
    private $lgbEventRange4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_5", type="bigint", nullable=true)
     */
    private $lgbEventRange5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_6", type="bigint", nullable=true)
     */
    private $lgbEventRange6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_7", type="bigint", nullable=true)
     */
    private $lgbEventRange7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_range_8", type="bigint", nullable=true)
     */
    private $lgbEventRange8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_0", type="bigint", nullable=true)
     */
    private $lgbEventObject10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_1", type="bigint", nullable=true)
     */
    private $lgbEventObject11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_2", type="bigint", nullable=true)
     */
    private $lgbEventObject12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_3", type="bigint", nullable=true)
     */
    private $lgbEventObject13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_4", type="bigint", nullable=true)
     */
    private $lgbEventObject14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_5", type="bigint", nullable=true)
     */
    private $lgbEventObject15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_6", type="bigint", nullable=true)
     */
    private $lgbEventObject16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_7", type="bigint", nullable=true)
     */
    private $lgbEventObject17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lgb_event_object_1_8", type="bigint", nullable=true)
     */
    private $lgbEventObject18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="bigint", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

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
     * @var PartyContentTextData
     *
     * @ORM\ManyToOne(targetEntity="PartyContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_data_end", referencedColumnName="pk")
     * })
     */
    private $textDataEnd;

    /**
     * @var PartyContentTextData
     *
     * @ORM\ManyToOne(targetEntity="PartyContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_data_start", referencedColumnName="pk")
     * })
     */
    private $textDataStart;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getKey(): ?int
    {
        return $this->key;
    }

    public function setKey(?int $key): self
    {
        $this->key = $key;

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

    public function getName(): ?bool
    {
        return $this->name;
    }

    public function setName(?bool $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLgbEventObject00(): ?string
    {
        return $this->lgbEventObject00;
    }

    public function setLgbEventObject00(?string $lgbEventObject00): self
    {
        $this->lgbEventObject00 = $lgbEventObject00;

        return $this;
    }

    public function getLgbEventObject01(): ?string
    {
        return $this->lgbEventObject01;
    }

    public function setLgbEventObject01(?string $lgbEventObject01): self
    {
        $this->lgbEventObject01 = $lgbEventObject01;

        return $this;
    }

    public function getLgbEventObject02(): ?string
    {
        return $this->lgbEventObject02;
    }

    public function setLgbEventObject02(?string $lgbEventObject02): self
    {
        $this->lgbEventObject02 = $lgbEventObject02;

        return $this;
    }

    public function getLgbEventObject03(): ?string
    {
        return $this->lgbEventObject03;
    }

    public function setLgbEventObject03(?string $lgbEventObject03): self
    {
        $this->lgbEventObject03 = $lgbEventObject03;

        return $this;
    }

    public function getLgbEventObject04(): ?string
    {
        return $this->lgbEventObject04;
    }

    public function setLgbEventObject04(?string $lgbEventObject04): self
    {
        $this->lgbEventObject04 = $lgbEventObject04;

        return $this;
    }

    public function getLgbEventObject05(): ?string
    {
        return $this->lgbEventObject05;
    }

    public function setLgbEventObject05(?string $lgbEventObject05): self
    {
        $this->lgbEventObject05 = $lgbEventObject05;

        return $this;
    }

    public function getLgbEventObject06(): ?string
    {
        return $this->lgbEventObject06;
    }

    public function setLgbEventObject06(?string $lgbEventObject06): self
    {
        $this->lgbEventObject06 = $lgbEventObject06;

        return $this;
    }

    public function getLgbEventObject07(): ?string
    {
        return $this->lgbEventObject07;
    }

    public function setLgbEventObject07(?string $lgbEventObject07): self
    {
        $this->lgbEventObject07 = $lgbEventObject07;

        return $this;
    }

    public function getLgbEventObject08(): ?string
    {
        return $this->lgbEventObject08;
    }

    public function setLgbEventObject08(?string $lgbEventObject08): self
    {
        $this->lgbEventObject08 = $lgbEventObject08;

        return $this;
    }

    public function getLgbEventRange0(): ?string
    {
        return $this->lgbEventRange0;
    }

    public function setLgbEventRange0(?string $lgbEventRange0): self
    {
        $this->lgbEventRange0 = $lgbEventRange0;

        return $this;
    }

    public function getLgbEventRange1(): ?string
    {
        return $this->lgbEventRange1;
    }

    public function setLgbEventRange1(?string $lgbEventRange1): self
    {
        $this->lgbEventRange1 = $lgbEventRange1;

        return $this;
    }

    public function getLgbEventRange2(): ?string
    {
        return $this->lgbEventRange2;
    }

    public function setLgbEventRange2(?string $lgbEventRange2): self
    {
        $this->lgbEventRange2 = $lgbEventRange2;

        return $this;
    }

    public function getLgbEventRange3(): ?string
    {
        return $this->lgbEventRange3;
    }

    public function setLgbEventRange3(?string $lgbEventRange3): self
    {
        $this->lgbEventRange3 = $lgbEventRange3;

        return $this;
    }

    public function getLgbEventRange4(): ?string
    {
        return $this->lgbEventRange4;
    }

    public function setLgbEventRange4(?string $lgbEventRange4): self
    {
        $this->lgbEventRange4 = $lgbEventRange4;

        return $this;
    }

    public function getLgbEventRange5(): ?string
    {
        return $this->lgbEventRange5;
    }

    public function setLgbEventRange5(?string $lgbEventRange5): self
    {
        $this->lgbEventRange5 = $lgbEventRange5;

        return $this;
    }

    public function getLgbEventRange6(): ?string
    {
        return $this->lgbEventRange6;
    }

    public function setLgbEventRange6(?string $lgbEventRange6): self
    {
        $this->lgbEventRange6 = $lgbEventRange6;

        return $this;
    }

    public function getLgbEventRange7(): ?string
    {
        return $this->lgbEventRange7;
    }

    public function setLgbEventRange7(?string $lgbEventRange7): self
    {
        $this->lgbEventRange7 = $lgbEventRange7;

        return $this;
    }

    public function getLgbEventRange8(): ?string
    {
        return $this->lgbEventRange8;
    }

    public function setLgbEventRange8(?string $lgbEventRange8): self
    {
        $this->lgbEventRange8 = $lgbEventRange8;

        return $this;
    }

    public function getLgbEventObject10(): ?string
    {
        return $this->lgbEventObject10;
    }

    public function setLgbEventObject10(?string $lgbEventObject10): self
    {
        $this->lgbEventObject10 = $lgbEventObject10;

        return $this;
    }

    public function getLgbEventObject11(): ?string
    {
        return $this->lgbEventObject11;
    }

    public function setLgbEventObject11(?string $lgbEventObject11): self
    {
        $this->lgbEventObject11 = $lgbEventObject11;

        return $this;
    }

    public function getLgbEventObject12(): ?string
    {
        return $this->lgbEventObject12;
    }

    public function setLgbEventObject12(?string $lgbEventObject12): self
    {
        $this->lgbEventObject12 = $lgbEventObject12;

        return $this;
    }

    public function getLgbEventObject13(): ?string
    {
        return $this->lgbEventObject13;
    }

    public function setLgbEventObject13(?string $lgbEventObject13): self
    {
        $this->lgbEventObject13 = $lgbEventObject13;

        return $this;
    }

    public function getLgbEventObject14(): ?string
    {
        return $this->lgbEventObject14;
    }

    public function setLgbEventObject14(?string $lgbEventObject14): self
    {
        $this->lgbEventObject14 = $lgbEventObject14;

        return $this;
    }

    public function getLgbEventObject15(): ?string
    {
        return $this->lgbEventObject15;
    }

    public function setLgbEventObject15(?string $lgbEventObject15): self
    {
        $this->lgbEventObject15 = $lgbEventObject15;

        return $this;
    }

    public function getLgbEventObject16(): ?string
    {
        return $this->lgbEventObject16;
    }

    public function setLgbEventObject16(?string $lgbEventObject16): self
    {
        $this->lgbEventObject16 = $lgbEventObject16;

        return $this;
    }

    public function getLgbEventObject17(): ?string
    {
        return $this->lgbEventObject17;
    }

    public function setLgbEventObject17(?string $lgbEventObject17): self
    {
        $this->lgbEventObject17 = $lgbEventObject17;

        return $this;
    }

    public function getLgbEventObject18(): ?string
    {
        return $this->lgbEventObject18;
    }

    public function setLgbEventObject18(?string $lgbEventObject18): self
    {
        $this->lgbEventObject18 = $lgbEventObject18;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

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

    public function getTextDataEnd(): ?PartyContentTextData
    {
        return $this->textDataEnd;
    }

    public function setTextDataEnd(?PartyContentTextData $textDataEnd): self
    {
        $this->textDataEnd = $textDataEnd;

        return $this;
    }

    public function getTextDataStart(): ?PartyContentTextData
    {
        return $this->textDataStart;
    }

    public function setTextDataStart(?PartyContentTextData $textDataStart): self
    {
        $this->textDataStart = $textDataStart;

        return $this;
    }
}
