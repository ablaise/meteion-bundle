<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformGroup.
 *
 * @ORM\Table(name="perform_group", indexes={@ORM\Index(name="idx_ae32425cdd5dc5b8", columns={"perform_1"}), @ORM\Index(name="idx_ae32425caa5af52e", columns={"perform_0"}), @ORM\Index(name="idx_ae32425c3353a494", columns={"perform_3"}), @ORM\Index(name="idx_ae32425c44549402", columns={"perform_2"}), @ORM\Index(name="idx_ae32425cad373137", columns={"perform_4"})})
 * @ORM\Entity
 */
class PerformGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="perform_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Perform
     *
     * @ORM\ManyToOne(targetEntity="Perform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perform_4", referencedColumnName="pk")
     * })
     */
    private $perform4;

    /**
     * @var Perform
     *
     * @ORM\ManyToOne(targetEntity="Perform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perform_3", referencedColumnName="pk")
     * })
     */
    private $perform3;

    /**
     * @var Perform
     *
     * @ORM\ManyToOne(targetEntity="Perform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perform_2", referencedColumnName="pk")
     * })
     */
    private $perform2;

    /**
     * @var Perform
     *
     * @ORM\ManyToOne(targetEntity="Perform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perform_1", referencedColumnName="pk")
     * })
     */
    private $perform1;

    /**
     * @var Perform
     *
     * @ORM\ManyToOne(targetEntity="Perform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perform_0", referencedColumnName="pk")
     * })
     */
    private $perform0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPerform4(): ?Perform
    {
        return $this->perform4;
    }

    public function setPerform4(?Perform $perform4): self
    {
        $this->perform4 = $perform4;

        return $this;
    }

    public function getPerform3(): ?Perform
    {
        return $this->perform3;
    }

    public function setPerform3(?Perform $perform3): self
    {
        $this->perform3 = $perform3;

        return $this;
    }

    public function getPerform2(): ?Perform
    {
        return $this->perform2;
    }

    public function setPerform2(?Perform $perform2): self
    {
        $this->perform2 = $perform2;

        return $this;
    }

    public function getPerform1(): ?Perform
    {
        return $this->perform1;
    }

    public function setPerform1(?Perform $perform1): self
    {
        $this->perform1 = $perform1;

        return $this;
    }

    public function getPerform0(): ?Perform
    {
        return $this->perform0;
    }

    public function setPerform0(?Perform $perform0): self
    {
        $this->perform0 = $perform0;

        return $this;
    }
}
