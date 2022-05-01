<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RacingChocoboNameInfo.
 *
 * @ORM\Table(name="racing_chocobo_name_info", indexes={@ORM\Index(name="idx_16b8d1beccc3f6c0", columns={"name_1"}), @ORM\Index(name="idx_16b8d1be3ae66e08", columns={"racing_chocobo_name_category"}), @ORM\Index(name="idx_16b8d1be55caa77a", columns={"name_2"}), @ORM\Index(name="idx_16b8d1bebbc4c656", columns={"name_0"})})
 * @ORM\Entity
 */
class RacingChocoboNameInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="racing_chocobo_name_info_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var RacingChocoboName
     *
     * @ORM\ManyToOne(targetEntity="RacingChocoboName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name_2", referencedColumnName="pk")
     * })
     */
    private $name2;

    /**
     * @var RacingChocoboName
     *
     * @ORM\ManyToOne(targetEntity="RacingChocoboName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name_1", referencedColumnName="pk")
     * })
     */
    private $name1;

    /**
     * @var RacingChocoboName
     *
     * @ORM\ManyToOne(targetEntity="RacingChocoboName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name_0", referencedColumnName="pk")
     * })
     */
    private $name0;

    /**
     * @var RacingChocoboNameCategory
     *
     * @ORM\ManyToOne(targetEntity="RacingChocoboNameCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="racing_chocobo_name_category", referencedColumnName="pk")
     * })
     */
    private $racingChocoboNameCategory;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getName2(): ?RacingChocoboName
    {
        return $this->name2;
    }

    public function setName2(?RacingChocoboName $name2): self
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getName1(): ?RacingChocoboName
    {
        return $this->name1;
    }

    public function setName1(?RacingChocoboName $name1): self
    {
        $this->name1 = $name1;

        return $this;
    }

    public function getName0(): ?RacingChocoboName
    {
        return $this->name0;
    }

    public function setName0(?RacingChocoboName $name0): self
    {
        $this->name0 = $name0;

        return $this;
    }

    public function getRacingChocoboNameCategory(): ?RacingChocoboNameCategory
    {
        return $this->racingChocoboNameCategory;
    }

    public function setRacingChocoboNameCategory(?RacingChocoboNameCategory $racingChocoboNameCategory): self
    {
        $this->racingChocoboNameCategory = $racingChocoboNameCategory;

        return $this;
    }
}
