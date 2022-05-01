<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentNpcTalk.
 *
 * @ORM\Table(name="content_npc_talk", indexes={@ORM\Index(name="idx_94df786d2d93bc44", columns={"content_talk_2"}), @ORM\Index(name="idx_94df786db49aedfe", columns={"content_talk_1"}), @ORM\Index(name="idx_94df786dc4f01971", columns={"content_talk_4"}), @ORM\Index(name="idx_94df786db3f729e7", columns={"content_talk_5"}), @ORM\Index(name="idx_94df786dc39ddd68", columns={"content_talk_0"}), @ORM\Index(name="idx_94df786d5df948cb", columns={"content_talk_7"}), @ORM\Index(name="idx_94df786d2afe785d", columns={"content_talk_6"}), @ORM\Index(name="idx_94df786d5a948cd2", columns={"content_talk_3"})})
 * @ORM\Entity
 */
class ContentNpcTalk
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_npc_talk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_7", referencedColumnName="pk")
     * })
     */
    private $contentTalk7;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_6", referencedColumnName="pk")
     * })
     */
    private $contentTalk6;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_5", referencedColumnName="pk")
     * })
     */
    private $contentTalk5;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_4", referencedColumnName="pk")
     * })
     */
    private $contentTalk4;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_3", referencedColumnName="pk")
     * })
     */
    private $contentTalk3;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_2", referencedColumnName="pk")
     * })
     */
    private $contentTalk2;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_1", referencedColumnName="pk")
     * })
     */
    private $contentTalk1;

    /**
     * @var ContentTalk
     *
     * @ORM\ManyToOne(targetEntity="ContentTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_0", referencedColumnName="pk")
     * })
     */
    private $contentTalk0;

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

    public function getContentTalk7(): ?ContentTalk
    {
        return $this->contentTalk7;
    }

    public function setContentTalk7(?ContentTalk $contentTalk7): self
    {
        $this->contentTalk7 = $contentTalk7;

        return $this;
    }

    public function getContentTalk6(): ?ContentTalk
    {
        return $this->contentTalk6;
    }

    public function setContentTalk6(?ContentTalk $contentTalk6): self
    {
        $this->contentTalk6 = $contentTalk6;

        return $this;
    }

    public function getContentTalk5(): ?ContentTalk
    {
        return $this->contentTalk5;
    }

    public function setContentTalk5(?ContentTalk $contentTalk5): self
    {
        $this->contentTalk5 = $contentTalk5;

        return $this;
    }

    public function getContentTalk4(): ?ContentTalk
    {
        return $this->contentTalk4;
    }

    public function setContentTalk4(?ContentTalk $contentTalk4): self
    {
        $this->contentTalk4 = $contentTalk4;

        return $this;
    }

    public function getContentTalk3(): ?ContentTalk
    {
        return $this->contentTalk3;
    }

    public function setContentTalk3(?ContentTalk $contentTalk3): self
    {
        $this->contentTalk3 = $contentTalk3;

        return $this;
    }

    public function getContentTalk2(): ?ContentTalk
    {
        return $this->contentTalk2;
    }

    public function setContentTalk2(?ContentTalk $contentTalk2): self
    {
        $this->contentTalk2 = $contentTalk2;

        return $this;
    }

    public function getContentTalk1(): ?ContentTalk
    {
        return $this->contentTalk1;
    }

    public function setContentTalk1(?ContentTalk $contentTalk1): self
    {
        $this->contentTalk1 = $contentTalk1;

        return $this;
    }

    public function getContentTalk0(): ?ContentTalk
    {
        return $this->contentTalk0;
    }

    public function setContentTalk0(?ContentTalk $contentTalk0): self
    {
        $this->contentTalk0 = $contentTalk0;

        return $this;
    }
}
