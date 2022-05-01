<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdinfoBoardArticleType.
 *
 * @ORM\Table(name="hwdinfo_board_article_type")
 * @ORM\Entity
 */
class HwdinfoBoardArticleType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdinfo_board_article_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
