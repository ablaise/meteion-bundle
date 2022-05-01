<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyctemporaryItemUicategory.
 *
 * @ORM\Table(name="myctemporary_item_uicategory")
 * @ORM\Entity
 */
class MyctemporaryItemUicategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="myctemporary_item_uicategory_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_2", type="string", length=255, nullable=true)
     */
    private $column2;

    public function getPk(): ?int
    {
        return $this->pk;
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
