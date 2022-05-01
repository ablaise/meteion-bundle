<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RacingChocoboNameCategory.
 *
 * @ORM\Table(name="racing_chocobo_name_category")
 * @ORM\Entity
 */
class RacingChocoboNameCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="racing_chocobo_name_category_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="integer", nullable=true)
     */
    private $sortKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSortKey(): ?int
    {
        return $this->sortKey;
    }

    public function setSortKey(?int $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
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
}
