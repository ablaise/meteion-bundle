<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestDerivedClass.
 *
 * @ORM\Table(name="quest_derived_class", indexes={@ORM\Index(name="idx_931126ed8d519804", columns={"class_job"})})
 * @ORM\Entity
 */
class QuestDerivedClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_derived_class_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    public function getPk(): ?int
    {
        return $this->pk;
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
}
