<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ballista.
 *
 * @ORM\Table(name="ballista", indexes={@ORM\Index(name="idx_98a6e92f8a5d3301", columns={"action_1"}), @ORM\Index(name="idx_98a6e92f135462bb", columns={"action_2"}), @ORM\Index(name="idx_98a6e92f9a64faa", columns={"bnpc"}), @ORM\Index(name="idx_98a6e92ffd5a0397", columns={"action_0"}), @ORM\Index(name="idx_98a6e92f6453522d", columns={"action_3"})})
 * @ORM\Entity
 */
class Ballista
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ballista_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="near", type="integer", nullable=true)
     */
    private $near;

    /**
     * @var int|null
     *
     * @ORM\Column(name="far", type="integer", nullable=true)
     */
    private $far;

    /**
     * @var int|null
     *
     * @ORM\Column(name="angle", type="bigint", nullable=true)
     */
    private $angle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bullet", type="integer", nullable=true)
     */
    private $bullet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_3", referencedColumnName="pk")
     * })
     */
    private $action3;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_2", referencedColumnName="pk")
     * })
     */
    private $action2;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_1", referencedColumnName="pk")
     * })
     */
    private $action1;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_0", referencedColumnName="pk")
     * })
     */
    private $action0;

    /**
     * @var BnpcBase
     *
     * @ORM\ManyToOne(targetEntity="BnpcBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc", referencedColumnName="pk")
     * })
     */
    private $bnpc;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNear(): ?int
    {
        return $this->near;
    }

    public function setNear(?int $near): self
    {
        $this->near = $near;

        return $this;
    }

    public function getFar(): ?int
    {
        return $this->far;
    }

    public function setFar(?int $far): self
    {
        $this->far = $far;

        return $this;
    }

    public function getAngle(): ?string
    {
        return $this->angle;
    }

    public function setAngle(?string $angle): self
    {
        $this->angle = $angle;

        return $this;
    }

    public function getBullet(): ?int
    {
        return $this->bullet;
    }

    public function setBullet(?int $bullet): self
    {
        $this->bullet = $bullet;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getAction3(): ?Action
    {
        return $this->action3;
    }

    public function setAction3(?Action $action3): self
    {
        $this->action3 = $action3;

        return $this;
    }

    public function getAction2(): ?Action
    {
        return $this->action2;
    }

    public function setAction2(?Action $action2): self
    {
        $this->action2 = $action2;

        return $this;
    }

    public function getAction1(): ?Action
    {
        return $this->action1;
    }

    public function setAction1(?Action $action1): self
    {
        $this->action1 = $action1;

        return $this;
    }

    public function getAction0(): ?Action
    {
        return $this->action0;
    }

    public function setAction0(?Action $action0): self
    {
        $this->action0 = $action0;

        return $this;
    }

    public function getBnpc(): ?BnpcBase
    {
        return $this->bnpc;
    }

    public function setBnpc(?BnpcBase $bnpc): self
    {
        $this->bnpc = $bnpc;

        return $this;
    }
}
