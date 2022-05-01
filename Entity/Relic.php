<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relic.
 *
 * @ORM\Table(name="relic", indexes={@ORM\Index(name="idx_688191cba6b59b9a", columns={"note_main_0"}), @ORM\Index(name="idx_688191cbcc524d8d", columns={"note_selection_1"}), @ORM\Index(name="idx_688191cbd1b2ab0c", columns={"note_main_1"}), @ORM\Index(name="idx_688191cb1108f002", columns={"note_sub_0"}), @ORM\Index(name="idx_688191cbf7ae5339", columns={"materia_1"}), @ORM\Index(name="idx_688191cb48bbfab6", columns={"note_main_2"}), @ORM\Index(name="idx_688191cbd3f08f29", columns={"item_atma"}), @ORM\Index(name="idx_688191cb19a03215", columns={"materia_3"}), @ORM\Index(name="idx_688191cb4ff48c70", columns={"item_animus"}), @ORM\Index(name="idx_688191cbdc6374b1", columns={"note_selection_1_0"}), @ORM\Index(name="idx_688191cb660fc094", columns={"note_sub_1"}), @ORM\Index(name="idx_688191cb80a963af", columns={"materia_0"}), @ORM\Index(name="idx_688191cb225c2ca1", columns={"note_selection_3"}), @ORM\Index(name="idx_688191cbff06912e", columns={"note_sub_2"}), @ORM\Index(name="idx_688191cb6ea70283", columns={"materia_2"})})
 * @ORM\Entity
 */
class Relic
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relic_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_selection_3", referencedColumnName="pk")
     * })
     */
    private $noteSelection3;

    /**
     * @var Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_3", referencedColumnName="pk")
     * })
     */
    private $materia3;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_sub_2", referencedColumnName="pk")
     * })
     */
    private $noteSub2;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_main_2", referencedColumnName="pk")
     * })
     */
    private $noteMain2;

    /**
     * @var Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_2", referencedColumnName="pk")
     * })
     */
    private $materia2;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_selection_1", referencedColumnName="pk")
     * })
     */
    private $noteSelection1;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_sub_1", referencedColumnName="pk")
     * })
     */
    private $noteSub1;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_main_1", referencedColumnName="pk")
     * })
     */
    private $noteMain1;

    /**
     * @var Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_1", referencedColumnName="pk")
     * })
     */
    private $materia1;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_selection_1_0", referencedColumnName="pk")
     * })
     */
    private $noteSelection10;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_sub_0", referencedColumnName="pk")
     * })
     */
    private $noteSub0;

    /**
     * @var RelicNote
     *
     * @ORM\ManyToOne(targetEntity="RelicNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="note_main_0", referencedColumnName="pk")
     * })
     */
    private $noteMain0;

    /**
     * @var Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia_0", referencedColumnName="pk")
     * })
     */
    private $materia0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_animus", referencedColumnName="pk")
     * })
     */
    private $itemAnimus;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_atma", referencedColumnName="pk")
     * })
     */
    private $itemAtma;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getNoteSelection3(): ?RelicNote
    {
        return $this->noteSelection3;
    }

    public function setNoteSelection3(?RelicNote $noteSelection3): self
    {
        $this->noteSelection3 = $noteSelection3;

        return $this;
    }

    public function getMateria3(): ?Materia
    {
        return $this->materia3;
    }

    public function setMateria3(?Materia $materia3): self
    {
        $this->materia3 = $materia3;

        return $this;
    }

    public function getNoteSub2(): ?RelicNote
    {
        return $this->noteSub2;
    }

    public function setNoteSub2(?RelicNote $noteSub2): self
    {
        $this->noteSub2 = $noteSub2;

        return $this;
    }

    public function getNoteMain2(): ?RelicNote
    {
        return $this->noteMain2;
    }

    public function setNoteMain2(?RelicNote $noteMain2): self
    {
        $this->noteMain2 = $noteMain2;

        return $this;
    }

    public function getMateria2(): ?Materia
    {
        return $this->materia2;
    }

    public function setMateria2(?Materia $materia2): self
    {
        $this->materia2 = $materia2;

        return $this;
    }

    public function getNoteSelection1(): ?RelicNote
    {
        return $this->noteSelection1;
    }

    public function setNoteSelection1(?RelicNote $noteSelection1): self
    {
        $this->noteSelection1 = $noteSelection1;

        return $this;
    }

    public function getNoteSub1(): ?RelicNote
    {
        return $this->noteSub1;
    }

    public function setNoteSub1(?RelicNote $noteSub1): self
    {
        $this->noteSub1 = $noteSub1;

        return $this;
    }

    public function getNoteMain1(): ?RelicNote
    {
        return $this->noteMain1;
    }

    public function setNoteMain1(?RelicNote $noteMain1): self
    {
        $this->noteMain1 = $noteMain1;

        return $this;
    }

    public function getMateria1(): ?Materia
    {
        return $this->materia1;
    }

    public function setMateria1(?Materia $materia1): self
    {
        $this->materia1 = $materia1;

        return $this;
    }

    public function getNoteSelection10(): ?RelicNote
    {
        return $this->noteSelection10;
    }

    public function setNoteSelection10(?RelicNote $noteSelection10): self
    {
        $this->noteSelection10 = $noteSelection10;

        return $this;
    }

    public function getNoteSub0(): ?RelicNote
    {
        return $this->noteSub0;
    }

    public function setNoteSub0(?RelicNote $noteSub0): self
    {
        $this->noteSub0 = $noteSub0;

        return $this;
    }

    public function getNoteMain0(): ?RelicNote
    {
        return $this->noteMain0;
    }

    public function setNoteMain0(?RelicNote $noteMain0): self
    {
        $this->noteMain0 = $noteMain0;

        return $this;
    }

    public function getMateria0(): ?Materia
    {
        return $this->materia0;
    }

    public function setMateria0(?Materia $materia0): self
    {
        $this->materia0 = $materia0;

        return $this;
    }

    public function getItemAnimus(): ?Item
    {
        return $this->itemAnimus;
    }

    public function setItemAnimus(?Item $itemAnimus): self
    {
        $this->itemAnimus = $itemAnimus;

        return $this;
    }

    public function getItemAtma(): ?Item
    {
        return $this->itemAtma;
    }

    public function setItemAtma(?Item $itemAtma): self
    {
        $this->itemAtma = $itemAtma;

        return $this;
    }
}
