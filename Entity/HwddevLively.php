<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwddevLively.
 *
 * @ORM\Table(name="hwddev_lively", indexes={@ORM\Index(name="idx_91cc627d94717713", columns={"enpc"})})
 * @ORM\Entity
 */
class HwddevLively
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwddev_lively_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var EnpcBase
     *
     * @ORM\ManyToOne(targetEntity="EnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc", referencedColumnName="pk")
     * })
     */
    private $enpc;

    public function getPk(): ?string
    {
        return $this->pk;
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

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getEnpc(): ?EnpcBase
    {
        return $this->enpc;
    }

    public function setEnpc(?EnpcBase $enpc): self
    {
        $this->enpc = $enpc;

        return $this;
    }
}
