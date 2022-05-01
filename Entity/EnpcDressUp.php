<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnpcDressUp.
 *
 * @ORM\Table(name="enpc_dress_up")
 * @ORM\Entity
 */
class EnpcDressUp
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enpc_dress_up_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="enpc_dress_up_dress", type="integer", nullable=true)
     */
    private $enpcDressUpDress;

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

    public function getEnpcDressUpDress(): ?int
    {
        return $this->enpcDressUpDress;
    }

    public function setEnpcDressUpDress(?int $enpcDressUpDress): self
    {
        $this->enpcDressUpDress = $enpcDressUpDress;

        return $this;
    }
}
