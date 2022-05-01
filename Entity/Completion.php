<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Completion.
 *
 * @ORM\Table(name="completion")
 * @ORM\Entity
 */
class Completion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="completion_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="group", type="bigint", nullable=true)
     */
    private $group;

    /**
     * @var int|null
     *
     * @ORM\Column(name="key", type="bigint", nullable=true)
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lookup_table", type="string", length=2345, nullable=true)
     */
    private $lookupTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=2345, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_title", type="string", length=2345, nullable=true)
     */
    private $groupTitle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getLookupTable(): ?string
    {
        return $this->lookupTable;
    }

    public function setLookupTable(?string $lookupTable): self
    {
        $this->lookupTable = $lookupTable;

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

    public function getGroupTitle(): ?string
    {
        return $this->groupTitle;
    }

    public function setGroupTitle(?string $groupTitle): self
    {
        $this->groupTitle = $groupTitle;

        return $this;
    }
}
