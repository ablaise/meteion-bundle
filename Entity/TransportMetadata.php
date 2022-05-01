<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportMetadata.
 *
 * @ORM\Table(name="transport_metadata")
 * @ORM\Entity
 */
class TransportMetadata
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transport_metadata_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int
     *
     * @ORM\Column(name="reference_id", type="integer", nullable=false)
     */
    private $referenceId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_table", type="string", length=255, nullable=false)
     */
    private $referenceTable;

    /**
     * @var string
     *
     * @ORM\Column(name="column1", type="string", length=255, nullable=false)
     */
    private $column1;

    /**
     * @var string
     *
     * @ORM\Column(name="column2", type="string", length=4096, nullable=false)
     */
    private $column2;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getReferenceId(): ?int
    {
        return $this->referenceId;
    }

    public function setReferenceId(int $referenceId): self
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    public function getReferenceTable(): ?string
    {
        return $this->referenceTable;
    }

    public function setReferenceTable(string $referenceTable): self
    {
        $this->referenceTable = $referenceTable;

        return $this;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }
}
