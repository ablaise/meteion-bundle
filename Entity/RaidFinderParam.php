<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaidFinderParam.
 *
 * @ORM\Table(name="raid_finder_param")
 * @ORM\Entity
 */
class RaidFinderParam
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="raid_finder_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }
}
