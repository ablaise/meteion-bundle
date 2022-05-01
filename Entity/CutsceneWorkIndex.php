<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CutsceneWorkIndex.
 *
 * @ORM\Table(name="cutscene_work_index")
 * @ORM\Entity
 */
class CutsceneWorkIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cutscene_work_index_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="work_index", type="bigint", nullable=true)
     */
    private $workIndex;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getWorkIndex(): ?string
    {
        return $this->workIndex;
    }

    public function setWorkIndex(?string $workIndex): self
    {
        $this->workIndex = $workIndex;

        return $this;
    }
}
