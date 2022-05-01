<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpenContent.
 *
 * @ORM\Table(name="open_content", indexes={@ORM\Index(name="idx_93f1fc5a79ab227c", columns={"candidate_name_13"}), @ORM\Index(name="idx_93f1fc5a9ac4e15c", columns={"content_10"}), @ORM\Index(name="idx_93f1fc5a7f9d6c05", columns={"candidate_name_5"}), @ORM\Index(name="idx_93f1fc5a762b202e", columns={"candidate_name_9"}), @ORM\Index(name="idx_93f1fc5a12c10b8", columns={"candidate_name_8"}), @ORM\Index(name="idx_93f1fc5aeac12ea", columns={"candidate_name_12"}), @ORM\Index(name="idx_93f1fc5ae6943dbf", columns={"candidate_name_6"}), @ORM\Index(name="idx_93f1fc5aeaae15d3", columns={"content_15"}), @ORM\Index(name="idx_93f1fc5a7ae312a5", columns={"content_9"}), @ORM\Index(name="idx_93f1fc5a96fec930", columns={"candidate_name_3"}), @ORM\Index(name="idx_93f1fc5aed31cb2d", columns={"content_2"}), @ORM\Index(name="idx_93f1fc5a89a5c93", columns={"candidate_name_4"}), @ORM\Index(name="idx_93f1fc5a74389a97", columns={"content_1"}), @ORM\Index(name="idx_93f1fc5a9a36fbbb", columns={"content_3"}), @ORM\Index(name="idx_93f1fc5aea5c0f34", columns={"content_6"}), @ORM\Index(name="idx_93f1fc5aedc3d1ca", columns={"content_11"}), @ORM\Index(name="idx_93f1fc5ae1f9f9a6", columns={"candidate_name_2"}), @ORM\Index(name="idx_93f1fc5ae7cfb7df", columns={"candidate_name_14"}), @ORM\Index(name="idx_93f1fc5a97a54350", columns={"candidate_name_11"}), @ORM\Index(name="idx_93f1fc5a4526e18", columns={"content_4"}), @ORM\Index(name="idx_93f1fc5a74ca8070", columns={"content_12"}), @ORM\Index(name="idx_93f1fc5aff7988a", columns={"candidate_name_0"}), @ORM\Index(name="idx_93f1fc5a90c88749", columns={"candidate_name_15"}), @ORM\Index(name="idx_93f1fc5a73555e8e", columns={"content_5"}), @ORM\Index(name="idx_93f1fc5a9d5b3fa2", columns={"content_7"}), @ORM\Index(name="idx_93f1fc5ae0a273c6", columns={"candidate_name_10"}), @ORM\Index(name="idx_93f1fc5a91930d29", columns={"candidate_name_7"}), @ORM\Index(name="idx_93f1fc5a3cdb0e6", columns={"content_13"}), @ORM\Index(name="idx_93f1fc5a33faa01", columns={"content_0"}), @ORM\Index(name="idx_93f1fc5a78f0a81c", columns={"candidate_name_1"}), @ORM\Index(name="idx_93f1fc5ade42233", columns={"content_8"}), @ORM\Index(name="idx_93f1fc5a9da92545", columns={"content_14"})})
 * @ORM\Entity
 */
class OpenContent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="open_content_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_15", referencedColumnName="pk")
     * })
     */
    private $candidateName15;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_14", referencedColumnName="pk")
     * })
     */
    private $candidateName14;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_13", referencedColumnName="pk")
     * })
     */
    private $candidateName13;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_12", referencedColumnName="pk")
     * })
     */
    private $candidateName12;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_11", referencedColumnName="pk")
     * })
     */
    private $candidateName11;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_10", referencedColumnName="pk")
     * })
     */
    private $candidateName10;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_9", referencedColumnName="pk")
     * })
     */
    private $candidateName9;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_8", referencedColumnName="pk")
     * })
     */
    private $candidateName8;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_7", referencedColumnName="pk")
     * })
     */
    private $candidateName7;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_6", referencedColumnName="pk")
     * })
     */
    private $candidateName6;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_5", referencedColumnName="pk")
     * })
     */
    private $candidateName5;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_4", referencedColumnName="pk")
     * })
     */
    private $candidateName4;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_3", referencedColumnName="pk")
     * })
     */
    private $candidateName3;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_2", referencedColumnName="pk")
     * })
     */
    private $candidateName2;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_1", referencedColumnName="pk")
     * })
     */
    private $candidateName1;

    /**
     * @var OpenContentCandidateName
     *
     * @ORM\ManyToOne(targetEntity="OpenContentCandidateName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_name_0", referencedColumnName="pk")
     * })
     */
    private $candidateName0;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_15", referencedColumnName="pk")
     * })
     */
    private $content15;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_14", referencedColumnName="pk")
     * })
     */
    private $content14;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_13", referencedColumnName="pk")
     * })
     */
    private $content13;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_12", referencedColumnName="pk")
     * })
     */
    private $content12;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_11", referencedColumnName="pk")
     * })
     */
    private $content11;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_10", referencedColumnName="pk")
     * })
     */
    private $content10;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_9", referencedColumnName="pk")
     * })
     */
    private $content9;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_8", referencedColumnName="pk")
     * })
     */
    private $content8;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_7", referencedColumnName="pk")
     * })
     */
    private $content7;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_6", referencedColumnName="pk")
     * })
     */
    private $content6;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_5", referencedColumnName="pk")
     * })
     */
    private $content5;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_4", referencedColumnName="pk")
     * })
     */
    private $content4;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_3", referencedColumnName="pk")
     * })
     */
    private $content3;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_2", referencedColumnName="pk")
     * })
     */
    private $content2;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_1", referencedColumnName="pk")
     * })
     */
    private $content1;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_0", referencedColumnName="pk")
     * })
     */
    private $content0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCandidateName15(): ?OpenContentCandidateName
    {
        return $this->candidateName15;
    }

    public function setCandidateName15(?OpenContentCandidateName $candidateName15): self
    {
        $this->candidateName15 = $candidateName15;

        return $this;
    }

    public function getCandidateName14(): ?OpenContentCandidateName
    {
        return $this->candidateName14;
    }

    public function setCandidateName14(?OpenContentCandidateName $candidateName14): self
    {
        $this->candidateName14 = $candidateName14;

        return $this;
    }

    public function getCandidateName13(): ?OpenContentCandidateName
    {
        return $this->candidateName13;
    }

    public function setCandidateName13(?OpenContentCandidateName $candidateName13): self
    {
        $this->candidateName13 = $candidateName13;

        return $this;
    }

    public function getCandidateName12(): ?OpenContentCandidateName
    {
        return $this->candidateName12;
    }

    public function setCandidateName12(?OpenContentCandidateName $candidateName12): self
    {
        $this->candidateName12 = $candidateName12;

        return $this;
    }

    public function getCandidateName11(): ?OpenContentCandidateName
    {
        return $this->candidateName11;
    }

    public function setCandidateName11(?OpenContentCandidateName $candidateName11): self
    {
        $this->candidateName11 = $candidateName11;

        return $this;
    }

    public function getCandidateName10(): ?OpenContentCandidateName
    {
        return $this->candidateName10;
    }

    public function setCandidateName10(?OpenContentCandidateName $candidateName10): self
    {
        $this->candidateName10 = $candidateName10;

        return $this;
    }

    public function getCandidateName9(): ?OpenContentCandidateName
    {
        return $this->candidateName9;
    }

    public function setCandidateName9(?OpenContentCandidateName $candidateName9): self
    {
        $this->candidateName9 = $candidateName9;

        return $this;
    }

    public function getCandidateName8(): ?OpenContentCandidateName
    {
        return $this->candidateName8;
    }

    public function setCandidateName8(?OpenContentCandidateName $candidateName8): self
    {
        $this->candidateName8 = $candidateName8;

        return $this;
    }

    public function getCandidateName7(): ?OpenContentCandidateName
    {
        return $this->candidateName7;
    }

    public function setCandidateName7(?OpenContentCandidateName $candidateName7): self
    {
        $this->candidateName7 = $candidateName7;

        return $this;
    }

    public function getCandidateName6(): ?OpenContentCandidateName
    {
        return $this->candidateName6;
    }

    public function setCandidateName6(?OpenContentCandidateName $candidateName6): self
    {
        $this->candidateName6 = $candidateName6;

        return $this;
    }

    public function getCandidateName5(): ?OpenContentCandidateName
    {
        return $this->candidateName5;
    }

    public function setCandidateName5(?OpenContentCandidateName $candidateName5): self
    {
        $this->candidateName5 = $candidateName5;

        return $this;
    }

    public function getCandidateName4(): ?OpenContentCandidateName
    {
        return $this->candidateName4;
    }

    public function setCandidateName4(?OpenContentCandidateName $candidateName4): self
    {
        $this->candidateName4 = $candidateName4;

        return $this;
    }

    public function getCandidateName3(): ?OpenContentCandidateName
    {
        return $this->candidateName3;
    }

    public function setCandidateName3(?OpenContentCandidateName $candidateName3): self
    {
        $this->candidateName3 = $candidateName3;

        return $this;
    }

    public function getCandidateName2(): ?OpenContentCandidateName
    {
        return $this->candidateName2;
    }

    public function setCandidateName2(?OpenContentCandidateName $candidateName2): self
    {
        $this->candidateName2 = $candidateName2;

        return $this;
    }

    public function getCandidateName1(): ?OpenContentCandidateName
    {
        return $this->candidateName1;
    }

    public function setCandidateName1(?OpenContentCandidateName $candidateName1): self
    {
        $this->candidateName1 = $candidateName1;

        return $this;
    }

    public function getCandidateName0(): ?OpenContentCandidateName
    {
        return $this->candidateName0;
    }

    public function setCandidateName0(?OpenContentCandidateName $candidateName0): self
    {
        $this->candidateName0 = $candidateName0;

        return $this;
    }

    public function getContent15(): ?ContentFinderCondition
    {
        return $this->content15;
    }

    public function setContent15(?ContentFinderCondition $content15): self
    {
        $this->content15 = $content15;

        return $this;
    }

    public function getContent14(): ?ContentFinderCondition
    {
        return $this->content14;
    }

    public function setContent14(?ContentFinderCondition $content14): self
    {
        $this->content14 = $content14;

        return $this;
    }

    public function getContent13(): ?ContentFinderCondition
    {
        return $this->content13;
    }

    public function setContent13(?ContentFinderCondition $content13): self
    {
        $this->content13 = $content13;

        return $this;
    }

    public function getContent12(): ?ContentFinderCondition
    {
        return $this->content12;
    }

    public function setContent12(?ContentFinderCondition $content12): self
    {
        $this->content12 = $content12;

        return $this;
    }

    public function getContent11(): ?ContentFinderCondition
    {
        return $this->content11;
    }

    public function setContent11(?ContentFinderCondition $content11): self
    {
        $this->content11 = $content11;

        return $this;
    }

    public function getContent10(): ?ContentFinderCondition
    {
        return $this->content10;
    }

    public function setContent10(?ContentFinderCondition $content10): self
    {
        $this->content10 = $content10;

        return $this;
    }

    public function getContent9(): ?ContentFinderCondition
    {
        return $this->content9;
    }

    public function setContent9(?ContentFinderCondition $content9): self
    {
        $this->content9 = $content9;

        return $this;
    }

    public function getContent8(): ?ContentFinderCondition
    {
        return $this->content8;
    }

    public function setContent8(?ContentFinderCondition $content8): self
    {
        $this->content8 = $content8;

        return $this;
    }

    public function getContent7(): ?ContentFinderCondition
    {
        return $this->content7;
    }

    public function setContent7(?ContentFinderCondition $content7): self
    {
        $this->content7 = $content7;

        return $this;
    }

    public function getContent6(): ?ContentFinderCondition
    {
        return $this->content6;
    }

    public function setContent6(?ContentFinderCondition $content6): self
    {
        $this->content6 = $content6;

        return $this;
    }

    public function getContent5(): ?ContentFinderCondition
    {
        return $this->content5;
    }

    public function setContent5(?ContentFinderCondition $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getContent4(): ?ContentFinderCondition
    {
        return $this->content4;
    }

    public function setContent4(?ContentFinderCondition $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getContent3(): ?ContentFinderCondition
    {
        return $this->content3;
    }

    public function setContent3(?ContentFinderCondition $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getContent2(): ?ContentFinderCondition
    {
        return $this->content2;
    }

    public function setContent2(?ContentFinderCondition $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getContent1(): ?ContentFinderCondition
    {
        return $this->content1;
    }

    public function setContent1(?ContentFinderCondition $content1): self
    {
        $this->content1 = $content1;

        return $this;
    }

    public function getContent0(): ?ContentFinderCondition
    {
        return $this->content0;
    }

    public function setContent0(?ContentFinderCondition $content0): self
    {
        $this->content0 = $content0;

        return $this;
    }
}
