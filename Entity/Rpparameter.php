<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rpparameter.
 *
 * @ORM\Table(name="rpparameter", indexes={@ORM\Index(name="idx_f71e5af8f6d15bda", columns={"bnpc_name"}), @ORM\Index(name="idx_f71e5af88d519804", columns={"class_job"})})
 * @ORM\Entity
 */
class Rpparameter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rpparameter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }
}
