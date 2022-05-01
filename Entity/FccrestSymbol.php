<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FccrestSymbol.
 *
 * @ORM\Table(name="fccrest_symbol")
 * @ORM\Entity
 */
class FccrestSymbol
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fccrest_symbol_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color_num", type="integer", nullable=true)
     */
    private $colorNum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fcright", type="integer", nullable=true)
     */
    private $fcright;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColorNum(): ?int
    {
        return $this->colorNum;
    }

    public function setColorNum(?int $colorNum): self
    {
        $this->colorNum = $colorNum;

        return $this;
    }

    public function getFcright(): ?int
    {
        return $this->fcright;
    }

    public function setFcright(?int $fcright): self
    {
        $this->fcright = $fcright;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }
}
