<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DescriptionPage.
 *
 * @ORM\Table(name="description_page", indexes={@ORM\Index(name="idx_e202293478244ead", columns={"text_2"}), @ORM\Index(name="idx_e202293477e977f9", columns={"text_10"}), @ORM\Index(name="idx_e202293498f1a7b3", columns={"text_8"}), @ORM\Index(name="idx_e2022934e12d1f17", columns={"text_1"}), @ORM\Index(name="idx_e202293484eba22", columns={"text_7"}), @ORM\Index(name="idx_e2022934f237e3b", columns={"text_3"}), @ORM\Index(name="idx_e20229347f498ab4", columns={"text_6"}), @ORM\Index(name="idx_e20229344317f817", columns={"quest"}), @ORM\Index(name="idx_e2022934eff69725", columns={"text_9"}), @ORM\Index(name="idx_e2022934962a2f81", columns={"text_0"}), @ORM\Index(name="idx_e20229349147eb98", columns={"text_4"}), @ORM\Index(name="idx_e2022934e640db0e", columns={"text_5"})})
 * @ORM\Entity
 */
class DescriptionPage
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="description_page_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_0", type="integer", nullable=true)
     */
    private $image0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_1", type="integer", nullable=true)
     */
    private $image1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_2", type="integer", nullable=true)
     */
    private $image2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_3", type="integer", nullable=true)
     */
    private $image3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_4", type="integer", nullable=true)
     */
    private $image4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_5", type="integer", nullable=true)
     */
    private $image5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_6", type="integer", nullable=true)
     */
    private $image6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_7", type="integer", nullable=true)
     */
    private $image7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_8", type="integer", nullable=true)
     */
    private $image8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_9", type="integer", nullable=true)
     */
    private $image9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_10", type="integer", nullable=true)
     */
    private $image10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="bigint", nullable=true)
     */
    private $column26;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_10", referencedColumnName="pk")
     * })
     */
    private $text10;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_9", referencedColumnName="pk")
     * })
     */
    private $text9;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_8", referencedColumnName="pk")
     * })
     */
    private $text8;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_7", referencedColumnName="pk")
     * })
     */
    private $text7;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_6", referencedColumnName="pk")
     * })
     */
    private $text6;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_5", referencedColumnName="pk")
     * })
     */
    private $text5;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_4", referencedColumnName="pk")
     * })
     */
    private $text4;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_3", referencedColumnName="pk")
     * })
     */
    private $text3;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_2", referencedColumnName="pk")
     * })
     */
    private $text2;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_1", referencedColumnName="pk")
     * })
     */
    private $text1;

    /**
     * @var DescriptionString
     *
     * @ORM\ManyToOne(targetEntity="DescriptionString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text_0", referencedColumnName="pk")
     * })
     */
    private $text0;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
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

    public function getImage0(): ?int
    {
        return $this->image0;
    }

    public function setImage0(?int $image0): self
    {
        $this->image0 = $image0;

        return $this;
    }

    public function getImage1(): ?int
    {
        return $this->image1;
    }

    public function setImage1(?int $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getImage2(): ?int
    {
        return $this->image2;
    }

    public function setImage2(?int $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?int
    {
        return $this->image3;
    }

    public function setImage3(?int $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4(): ?int
    {
        return $this->image4;
    }

    public function setImage4(?int $image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function getImage5(): ?int
    {
        return $this->image5;
    }

    public function setImage5(?int $image5): self
    {
        $this->image5 = $image5;

        return $this;
    }

    public function getImage6(): ?int
    {
        return $this->image6;
    }

    public function setImage6(?int $image6): self
    {
        $this->image6 = $image6;

        return $this;
    }

    public function getImage7(): ?int
    {
        return $this->image7;
    }

    public function setImage7(?int $image7): self
    {
        $this->image7 = $image7;

        return $this;
    }

    public function getImage8(): ?int
    {
        return $this->image8;
    }

    public function setImage8(?int $image8): self
    {
        $this->image8 = $image8;

        return $this;
    }

    public function getImage9(): ?int
    {
        return $this->image9;
    }

    public function setImage9(?int $image9): self
    {
        $this->image9 = $image9;

        return $this;
    }

    public function getImage10(): ?int
    {
        return $this->image10;
    }

    public function setImage10(?int $image10): self
    {
        $this->image10 = $image10;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getText10(): ?DescriptionString
    {
        return $this->text10;
    }

    public function setText10(?DescriptionString $text10): self
    {
        $this->text10 = $text10;

        return $this;
    }

    public function getText9(): ?DescriptionString
    {
        return $this->text9;
    }

    public function setText9(?DescriptionString $text9): self
    {
        $this->text9 = $text9;

        return $this;
    }

    public function getText8(): ?DescriptionString
    {
        return $this->text8;
    }

    public function setText8(?DescriptionString $text8): self
    {
        $this->text8 = $text8;

        return $this;
    }

    public function getText7(): ?DescriptionString
    {
        return $this->text7;
    }

    public function setText7(?DescriptionString $text7): self
    {
        $this->text7 = $text7;

        return $this;
    }

    public function getText6(): ?DescriptionString
    {
        return $this->text6;
    }

    public function setText6(?DescriptionString $text6): self
    {
        $this->text6 = $text6;

        return $this;
    }

    public function getText5(): ?DescriptionString
    {
        return $this->text5;
    }

    public function setText5(?DescriptionString $text5): self
    {
        $this->text5 = $text5;

        return $this;
    }

    public function getText4(): ?DescriptionString
    {
        return $this->text4;
    }

    public function setText4(?DescriptionString $text4): self
    {
        $this->text4 = $text4;

        return $this;
    }

    public function getText3(): ?DescriptionString
    {
        return $this->text3;
    }

    public function setText3(?DescriptionString $text3): self
    {
        $this->text3 = $text3;

        return $this;
    }

    public function getText2(): ?DescriptionString
    {
        return $this->text2;
    }

    public function setText2(?DescriptionString $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getText1(): ?DescriptionString
    {
        return $this->text1;
    }

    public function setText1(?DescriptionString $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText0(): ?DescriptionString
    {
        return $this->text0;
    }

    public function setText0(?DescriptionString $text0): self
    {
        $this->text0 = $text0;

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
}
