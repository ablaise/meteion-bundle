<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentTalk.
 *
 * @ORM\Table(name="content_talk", indexes={@ORM\Index(name="idx_5246387e5ffcf2dc", columns={"content_talk_param"})})
 * @ORM\Entity
 */
class ContentTalk
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_talk_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=705, nullable=true)
     */
    private $text;

    /**
     * @var ContentTalkParam
     *
     * @ORM\ManyToOne(targetEntity="ContentTalkParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_talk_param", referencedColumnName="pk")
     * })
     */
    private $contentTalkParam;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getContentTalkParam(): ?ContentTalkParam
    {
        return $this->contentTalkParam;
    }

    public function setContentTalkParam(?ContentTalkParam $contentTalkParam): self
    {
        $this->contentTalkParam = $contentTalkParam;

        return $this;
    }
}
