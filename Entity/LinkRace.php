<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkRace.
 *
 * @ORM\Table(name="link_race")
 * @ORM\Entity
 */
class LinkRace
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="link_race_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }
}
