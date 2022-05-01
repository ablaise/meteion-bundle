<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionIndirection.
 *
 * @ORM\Table(name="action_indirection", indexes={@ORM\Index(name="idx_2ca1614b8d519804", columns={"class_job"}), @ORM\Index(name="idx_2ca1614b5e237e06", columns={"name"}), @ORM\Index(name="idx_2ca1614b363478be", columns={"previous_combo_action"})})
 * @ORM\Entity
 */
class ActionIndirection
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_indirection_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_combo_action", referencedColumnName="pk")
     * })
     */
    private $previousComboAction;

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
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPreviousComboAction(): ?Action
    {
        return $this->previousComboAction;
    }

    public function setPreviousComboAction(?Action $previousComboAction): self
    {
        $this->previousComboAction = $previousComboAction;

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

    public function getName(): ?Action
    {
        return $this->name;
    }

    public function setName(?Action $name): self
    {
        $this->name = $name;

        return $this;
    }
}
