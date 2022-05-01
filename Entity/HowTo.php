<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HowTo.
 *
 * @ORM\Table(name="how_to", indexes={@ORM\Index(name="idx_4951fd9bc7a55228", columns={"how_to_page_pc_0"}), @ORM\Index(name="idx_4951fd9b82caa8dc", columns={"how_to_page_controller_2"}), @ORM\Index(name="idx_4951fd9bb0a262be", columns={"how_to_page_pc_1"}), @ORM\Index(name="idx_4951fd9bc0c89631", columns={"how_to_page_pc_4"}), @ORM\Index(name="idx_4951fd9b64c19c1", columns={"category"}), @ORM\Index(name="idx_4951fd9bf5cd984a", columns={"how_to_page_controller_3"}), @ORM\Index(name="idx_4951fd9b1bc3f966", columns={"how_to_page_controller_1"}), @ORM\Index(name="idx_4951fd9b6ba90de9", columns={"how_to_page_controller_4"}), @ORM\Index(name="idx_4951fd9b29ab3304", columns={"how_to_page_pc_2"}), @ORM\Index(name="idx_4951fd9b5eac0392", columns={"how_to_page_pc_3"}), @ORM\Index(name="idx_4951fd9b6cc4c9f0", columns={"how_to_page_controller_0"})})
 * @ORM\Entity
 */
class HowTo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="how_to_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce", type="boolean", nullable=true)
     */
    private $announce;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort", type="integer", nullable=true)
     */
    private $sort;

    /**
     * @var HowToCategory
     *
     * @ORM\ManyToOne(targetEntity="HowToCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_controller_4", referencedColumnName="pk")
     * })
     */
    private $howToPageController4;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_controller_3", referencedColumnName="pk")
     * })
     */
    private $howToPageController3;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_controller_2", referencedColumnName="pk")
     * })
     */
    private $howToPageController2;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_controller_1", referencedColumnName="pk")
     * })
     */
    private $howToPageController1;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_controller_0", referencedColumnName="pk")
     * })
     */
    private $howToPageController0;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_pc_4", referencedColumnName="pk")
     * })
     */
    private $howToPagePc4;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_pc_3", referencedColumnName="pk")
     * })
     */
    private $howToPagePc3;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_pc_2", referencedColumnName="pk")
     * })
     */
    private $howToPagePc2;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_pc_1", referencedColumnName="pk")
     * })
     */
    private $howToPagePc1;

    /**
     * @var HowToPage
     *
     * @ORM\ManyToOne(targetEntity="HowToPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="how_to_page_pc_0", referencedColumnName="pk")
     * })
     */
    private $howToPagePc0;

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

    public function getAnnounce(): ?bool
    {
        return $this->announce;
    }

    public function setAnnounce(?bool $announce): self
    {
        $this->announce = $announce;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    public function getCategory(): ?HowToCategory
    {
        return $this->category;
    }

    public function setCategory(?HowToCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getHowToPageController4(): ?HowToPage
    {
        return $this->howToPageController4;
    }

    public function setHowToPageController4(?HowToPage $howToPageController4): self
    {
        $this->howToPageController4 = $howToPageController4;

        return $this;
    }

    public function getHowToPageController3(): ?HowToPage
    {
        return $this->howToPageController3;
    }

    public function setHowToPageController3(?HowToPage $howToPageController3): self
    {
        $this->howToPageController3 = $howToPageController3;

        return $this;
    }

    public function getHowToPageController2(): ?HowToPage
    {
        return $this->howToPageController2;
    }

    public function setHowToPageController2(?HowToPage $howToPageController2): self
    {
        $this->howToPageController2 = $howToPageController2;

        return $this;
    }

    public function getHowToPageController1(): ?HowToPage
    {
        return $this->howToPageController1;
    }

    public function setHowToPageController1(?HowToPage $howToPageController1): self
    {
        $this->howToPageController1 = $howToPageController1;

        return $this;
    }

    public function getHowToPageController0(): ?HowToPage
    {
        return $this->howToPageController0;
    }

    public function setHowToPageController0(?HowToPage $howToPageController0): self
    {
        $this->howToPageController0 = $howToPageController0;

        return $this;
    }

    public function getHowToPagePc4(): ?HowToPage
    {
        return $this->howToPagePc4;
    }

    public function setHowToPagePc4(?HowToPage $howToPagePc4): self
    {
        $this->howToPagePc4 = $howToPagePc4;

        return $this;
    }

    public function getHowToPagePc3(): ?HowToPage
    {
        return $this->howToPagePc3;
    }

    public function setHowToPagePc3(?HowToPage $howToPagePc3): self
    {
        $this->howToPagePc3 = $howToPagePc3;

        return $this;
    }

    public function getHowToPagePc2(): ?HowToPage
    {
        return $this->howToPagePc2;
    }

    public function setHowToPagePc2(?HowToPage $howToPagePc2): self
    {
        $this->howToPagePc2 = $howToPagePc2;

        return $this;
    }

    public function getHowToPagePc1(): ?HowToPage
    {
        return $this->howToPagePc1;
    }

    public function setHowToPagePc1(?HowToPage $howToPagePc1): self
    {
        $this->howToPagePc1 = $howToPagePc1;

        return $this;
    }

    public function getHowToPagePc0(): ?HowToPage
    {
        return $this->howToPagePc0;
    }

    public function setHowToPagePc0(?HowToPage $howToPagePc0): self
    {
        $this->howToPagePc0 = $howToPagePc0;

        return $this;
    }
}
