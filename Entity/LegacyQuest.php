<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LegacyQuest.
 *
 * @ORM\Table(name="legacy_quest")
 * @ORM\Entity
 */
class LegacyQuest
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="legacy_quest_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="legacy_quest_id", type="bigint", nullable=true)
     */
    private $legacyQuestId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="string", type="string", length=255, nullable=true)
     */
    private $string;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="bigint", nullable=true)
     */
    private $sortKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="genre", type="integer", nullable=true)
     */
    private $genre;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLegacyQuestId(): ?string
    {
        return $this->legacyQuestId;
    }

    public function setLegacyQuestId(?string $legacyQuestId): self
    {
        $this->legacyQuestId = $legacyQuestId;

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

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(?string $string): self
    {
        $this->string = $string;

        return $this;
    }

    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }

    public function setSortKey(?string $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    public function getGenre(): ?int
    {
        return $this->genre;
    }

    public function setGenre(?int $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
}
