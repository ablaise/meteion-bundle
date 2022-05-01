<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uicolor.
 *
 * @ORM\Table(name="uicolor")
 * @ORM\Entity
 */
class Uicolor
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="uicolor_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uiforeground", type="bigint", nullable=true)
     */
    private $uiforeground;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uiglow", type="bigint", nullable=true)
     */
    private $uiglow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getUiforeground(): ?string
    {
        return $this->uiforeground;
    }

    public function setUiforeground(?string $uiforeground): self
    {
        $this->uiforeground = $uiforeground;

        return $this;
    }

    public function getUiglow(): ?string
    {
        return $this->uiglow;
    }

    public function setUiglow(?string $uiglow): self
    {
        $this->uiglow = $uiglow;

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

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }
}
