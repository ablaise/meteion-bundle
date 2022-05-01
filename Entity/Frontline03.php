<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontline03.
 *
 * @ORM\Table(name="frontline03")
 * @ORM\Entity
 */
class Frontline03
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frontline03_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empty_icon_0", type="integer", nullable=true)
     */
    private $emptyIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empty_icon_1", type="integer", nullable=true)
     */
    private $emptyIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="empty_icon_2", type="integer", nullable=true)
     */
    private $emptyIcon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maelstrom_icon_0", type="integer", nullable=true)
     */
    private $maelstromIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maelstrom_icon_1", type="integer", nullable=true)
     */
    private $maelstromIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="maelstrom_icon_2", type="integer", nullable=true)
     */
    private $maelstromIcon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="twin_adder_icon_0", type="integer", nullable=true)
     */
    private $twinAdderIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="twin_adder_icon_1", type="integer", nullable=true)
     */
    private $twinAdderIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="twin_adder_icon_2", type="integer", nullable=true)
     */
    private $twinAdderIcon2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="immortal_flames_icon_0", type="integer", nullable=true)
     */
    private $immortalFlamesIcon0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="immortal_flames_icon_1", type="integer", nullable=true)
     */
    private $immortalFlamesIcon1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="immortal_flames_icon_2", type="integer", nullable=true)
     */
    private $immortalFlamesIcon2;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getEmptyIcon0(): ?int
    {
        return $this->emptyIcon0;
    }

    public function setEmptyIcon0(?int $emptyIcon0): self
    {
        $this->emptyIcon0 = $emptyIcon0;

        return $this;
    }

    public function getEmptyIcon1(): ?int
    {
        return $this->emptyIcon1;
    }

    public function setEmptyIcon1(?int $emptyIcon1): self
    {
        $this->emptyIcon1 = $emptyIcon1;

        return $this;
    }

    public function getEmptyIcon2(): ?int
    {
        return $this->emptyIcon2;
    }

    public function setEmptyIcon2(?int $emptyIcon2): self
    {
        $this->emptyIcon2 = $emptyIcon2;

        return $this;
    }

    public function getMaelstromIcon0(): ?int
    {
        return $this->maelstromIcon0;
    }

    public function setMaelstromIcon0(?int $maelstromIcon0): self
    {
        $this->maelstromIcon0 = $maelstromIcon0;

        return $this;
    }

    public function getMaelstromIcon1(): ?int
    {
        return $this->maelstromIcon1;
    }

    public function setMaelstromIcon1(?int $maelstromIcon1): self
    {
        $this->maelstromIcon1 = $maelstromIcon1;

        return $this;
    }

    public function getMaelstromIcon2(): ?int
    {
        return $this->maelstromIcon2;
    }

    public function setMaelstromIcon2(?int $maelstromIcon2): self
    {
        $this->maelstromIcon2 = $maelstromIcon2;

        return $this;
    }

    public function getTwinAdderIcon0(): ?int
    {
        return $this->twinAdderIcon0;
    }

    public function setTwinAdderIcon0(?int $twinAdderIcon0): self
    {
        $this->twinAdderIcon0 = $twinAdderIcon0;

        return $this;
    }

    public function getTwinAdderIcon1(): ?int
    {
        return $this->twinAdderIcon1;
    }

    public function setTwinAdderIcon1(?int $twinAdderIcon1): self
    {
        $this->twinAdderIcon1 = $twinAdderIcon1;

        return $this;
    }

    public function getTwinAdderIcon2(): ?int
    {
        return $this->twinAdderIcon2;
    }

    public function setTwinAdderIcon2(?int $twinAdderIcon2): self
    {
        $this->twinAdderIcon2 = $twinAdderIcon2;

        return $this;
    }

    public function getImmortalFlamesIcon0(): ?int
    {
        return $this->immortalFlamesIcon0;
    }

    public function setImmortalFlamesIcon0(?int $immortalFlamesIcon0): self
    {
        $this->immortalFlamesIcon0 = $immortalFlamesIcon0;

        return $this;
    }

    public function getImmortalFlamesIcon1(): ?int
    {
        return $this->immortalFlamesIcon1;
    }

    public function setImmortalFlamesIcon1(?int $immortalFlamesIcon1): self
    {
        $this->immortalFlamesIcon1 = $immortalFlamesIcon1;

        return $this;
    }

    public function getImmortalFlamesIcon2(): ?int
    {
        return $this->immortalFlamesIcon2;
    }

    public function setImmortalFlamesIcon2(?int $immortalFlamesIcon2): self
    {
        $this->immortalFlamesIcon2 = $immortalFlamesIcon2;

        return $this;
    }
}
