<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentsTutorial.
 *
 * @ORM\Table(name="contents_tutorial", indexes={@ORM\Index(name="idx_8d2d11d43ab24f5", columns={"page_2"}), @ORM\Index(name="idx_8d2d11d44c6e0ec", columns={"page_6"}), @ORM\Index(name="idx_8d2d11d474ac1463", columns={"page_3"}), @ORM\Index(name="idx_8d2d11d49dcfb156", columns={"page_5"}), @ORM\Index(name="idx_8d2d11d4eac881c0", columns={"page_4"}), @ORM\Index(name="idx_8d2d11d4eda545d9", columns={"page_0"}), @ORM\Index(name="idx_8d2d11d473c1d07a", columns={"page_7"}), @ORM\Index(name="idx_8d2d11d49aa2754f", columns={"page_1"})})
 * @ORM\Entity
 */
class ContentsTutorial
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contents_tutorial_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_7", referencedColumnName="pk")
     * })
     */
    private $page7;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_6", referencedColumnName="pk")
     * })
     */
    private $page6;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_5", referencedColumnName="pk")
     * })
     */
    private $page5;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_4", referencedColumnName="pk")
     * })
     */
    private $page4;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_3", referencedColumnName="pk")
     * })
     */
    private $page3;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_2", referencedColumnName="pk")
     * })
     */
    private $page2;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_1", referencedColumnName="pk")
     * })
     */
    private $page1;

    /**
     * @var ContentsTutorialPage
     *
     * @ORM\ManyToOne(targetEntity="ContentsTutorialPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_0", referencedColumnName="pk")
     * })
     */
    private $page0;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPage7(): ?ContentsTutorialPage
    {
        return $this->page7;
    }

    public function setPage7(?ContentsTutorialPage $page7): self
    {
        $this->page7 = $page7;

        return $this;
    }

    public function getPage6(): ?ContentsTutorialPage
    {
        return $this->page6;
    }

    public function setPage6(?ContentsTutorialPage $page6): self
    {
        $this->page6 = $page6;

        return $this;
    }

    public function getPage5(): ?ContentsTutorialPage
    {
        return $this->page5;
    }

    public function setPage5(?ContentsTutorialPage $page5): self
    {
        $this->page5 = $page5;

        return $this;
    }

    public function getPage4(): ?ContentsTutorialPage
    {
        return $this->page4;
    }

    public function setPage4(?ContentsTutorialPage $page4): self
    {
        $this->page4 = $page4;

        return $this;
    }

    public function getPage3(): ?ContentsTutorialPage
    {
        return $this->page3;
    }

    public function setPage3(?ContentsTutorialPage $page3): self
    {
        $this->page3 = $page3;

        return $this;
    }

    public function getPage2(): ?ContentsTutorialPage
    {
        return $this->page2;
    }

    public function setPage2(?ContentsTutorialPage $page2): self
    {
        $this->page2 = $page2;

        return $this;
    }

    public function getPage1(): ?ContentsTutorialPage
    {
        return $this->page1;
    }

    public function setPage1(?ContentsTutorialPage $page1): self
    {
        $this->page1 = $page1;

        return $this;
    }

    public function getPage0(): ?ContentsTutorialPage
    {
        return $this->page0;
    }

    public function setPage0(?ContentsTutorialPage $page0): self
    {
        $this->page0 = $page0;

        return $this;
    }
}
