<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecastNavimesh.
 *
 * @ORM\Table(name="recast_navimesh")
 * @ORM\Entity
 */
class RecastNavimesh
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recast_navimesh_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_1", type="string", length=255, nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tile_size", type="string", length=255, nullable=true)
     */
    private $tileSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cell_size", type="string", length=255, nullable=true)
     */
    private $cellSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cell_height", type="string", length=255, nullable=true)
     */
    private $cellHeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_height", type="string", length=255, nullable=true)
     */
    private $agentHeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_radius", type="string", length=255, nullable=true)
     */
    private $agentRadius;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_max_climb", type="string", length=255, nullable=true)
     */
    private $agentMaxClimb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agent_max_slope", type="string", length=255, nullable=true)
     */
    private $agentMaxSlope;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_min_size", type="string", length=255, nullable=true)
     */
    private $regionMinSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_merged_size", type="string", length=255, nullable=true)
     */
    private $regionMergedSize;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_12", type="boolean", nullable=true)
     */
    private $column12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="max_edge_length", type="string", length=255, nullable=true)
     */
    private $maxEdgeLength;

    /**
     * @var string|null
     *
     * @ORM\Column(name="max_edge_error", type="string", length=255, nullable=true)
     */
    private $maxEdgeError;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verts_per_poly", type="string", length=255, nullable=true)
     */
    private $vertsPerPoly;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_mesh_sample_distance", type="string", length=255, nullable=true)
     */
    private $detailMeshSampleDistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_mesh_max_sample_error", type="string", length=255, nullable=true)
     */
    private $detailMeshMaxSampleError;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_18", type="string", length=255, nullable=true)
     */
    private $column18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_19", type="string", length=255, nullable=true)
     */
    private $column19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_20", type="string", length=255, nullable=true)
     */
    private $column20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_21", type="string", length=255, nullable=true)
     */
    private $column21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_22", type="string", length=255, nullable=true)
     */
    private $column22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_23", type="string", length=255, nullable=true)
     */
    private $column23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_24", type="string", length=255, nullable=true)
     */
    private $column24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_25", type="string", length=255, nullable=true)
     */
    private $column25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_26", type="string", length=255, nullable=true)
     */
    private $column26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_27", type="string", length=255, nullable=true)
     */
    private $column27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_28", type="string", length=255, nullable=true)
     */
    private $column28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_29", type="string", length=255, nullable=true)
     */
    private $column29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_30", type="string", length=255, nullable=true)
     */
    private $column30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_31", type="boolean", nullable=true)
     */
    private $column31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_32", type="string", length=255, nullable=true)
     */
    private $column32;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_33", type="string", length=255, nullable=true)
     */
    private $column33;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_34", type="string", length=255, nullable=true)
     */
    private $column34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_35", type="boolean", nullable=true)
     */
    private $column35;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getTileSize(): ?string
    {
        return $this->tileSize;
    }

    public function setTileSize(?string $tileSize): self
    {
        $this->tileSize = $tileSize;

        return $this;
    }

    public function getCellSize(): ?string
    {
        return $this->cellSize;
    }

    public function setCellSize(?string $cellSize): self
    {
        $this->cellSize = $cellSize;

        return $this;
    }

    public function getCellHeight(): ?string
    {
        return $this->cellHeight;
    }

    public function setCellHeight(?string $cellHeight): self
    {
        $this->cellHeight = $cellHeight;

        return $this;
    }

    public function getAgentHeight(): ?string
    {
        return $this->agentHeight;
    }

    public function setAgentHeight(?string $agentHeight): self
    {
        $this->agentHeight = $agentHeight;

        return $this;
    }

    public function getAgentRadius(): ?string
    {
        return $this->agentRadius;
    }

    public function setAgentRadius(?string $agentRadius): self
    {
        $this->agentRadius = $agentRadius;

        return $this;
    }

    public function getAgentMaxClimb(): ?string
    {
        return $this->agentMaxClimb;
    }

    public function setAgentMaxClimb(?string $agentMaxClimb): self
    {
        $this->agentMaxClimb = $agentMaxClimb;

        return $this;
    }

    public function getAgentMaxSlope(): ?string
    {
        return $this->agentMaxSlope;
    }

    public function setAgentMaxSlope(?string $agentMaxSlope): self
    {
        $this->agentMaxSlope = $agentMaxSlope;

        return $this;
    }

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getRegionMinSize(): ?string
    {
        return $this->regionMinSize;
    }

    public function setRegionMinSize(?string $regionMinSize): self
    {
        $this->regionMinSize = $regionMinSize;

        return $this;
    }

    public function getRegionMergedSize(): ?string
    {
        return $this->regionMergedSize;
    }

    public function setRegionMergedSize(?string $regionMergedSize): self
    {
        $this->regionMergedSize = $regionMergedSize;

        return $this;
    }

    public function getColumn12(): ?bool
    {
        return $this->column12;
    }

    public function setColumn12(?bool $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getMaxEdgeLength(): ?string
    {
        return $this->maxEdgeLength;
    }

    public function setMaxEdgeLength(?string $maxEdgeLength): self
    {
        $this->maxEdgeLength = $maxEdgeLength;

        return $this;
    }

    public function getMaxEdgeError(): ?string
    {
        return $this->maxEdgeError;
    }

    public function setMaxEdgeError(?string $maxEdgeError): self
    {
        $this->maxEdgeError = $maxEdgeError;

        return $this;
    }

    public function getVertsPerPoly(): ?string
    {
        return $this->vertsPerPoly;
    }

    public function setVertsPerPoly(?string $vertsPerPoly): self
    {
        $this->vertsPerPoly = $vertsPerPoly;

        return $this;
    }

    public function getDetailMeshSampleDistance(): ?string
    {
        return $this->detailMeshSampleDistance;
    }

    public function setDetailMeshSampleDistance(?string $detailMeshSampleDistance): self
    {
        $this->detailMeshSampleDistance = $detailMeshSampleDistance;

        return $this;
    }

    public function getDetailMeshMaxSampleError(): ?string
    {
        return $this->detailMeshMaxSampleError;
    }

    public function setDetailMeshMaxSampleError(?string $detailMeshMaxSampleError): self
    {
        $this->detailMeshMaxSampleError = $detailMeshMaxSampleError;

        return $this;
    }

    public function getColumn18(): ?string
    {
        return $this->column18;
    }

    public function setColumn18(?string $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?string
    {
        return $this->column19;
    }

    public function setColumn19(?string $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?string
    {
        return $this->column20;
    }

    public function setColumn20(?string $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?string
    {
        return $this->column21;
    }

    public function setColumn21(?string $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?string
    {
        return $this->column24;
    }

    public function setColumn24(?string $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?string
    {
        return $this->column25;
    }

    public function setColumn25(?string $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?string
    {
        return $this->column27;
    }

    public function setColumn27(?string $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?string
    {
        return $this->column28;
    }

    public function setColumn28(?string $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?string
    {
        return $this->column29;
    }

    public function setColumn29(?string $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?string
    {
        return $this->column30;
    }

    public function setColumn30(?string $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?bool
    {
        return $this->column31;
    }

    public function setColumn31(?bool $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?string
    {
        return $this->column32;
    }

    public function setColumn32(?string $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?string
    {
        return $this->column34;
    }

    public function setColumn34(?string $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?bool
    {
        return $this->column35;
    }

    public function setColumn35(?bool $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }
}
