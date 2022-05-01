<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdinfoBoardArticleTransient.
 *
 * @ORM\Table(name="hwdinfo_board_article_transient")
 * @ORM\Entity
 */
class HwdinfoBoardArticleTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdinfo_board_article_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=1341, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="npc_name", type="string", length=1341, nullable=true)
     */
    private $npcName;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getNpcName(): ?string
    {
        return $this->npcName;
    }

    public function setNpcName(?string $npcName): self
    {
        $this->npcName = $npcName;

        return $this;
    }
}
