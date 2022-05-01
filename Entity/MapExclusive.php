<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapExclusive.
 *
 * @ORM\Table(name="map_exclusive")
 * @ORM\Entity
 */
class MapExclusive
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map_exclusive_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }
}
