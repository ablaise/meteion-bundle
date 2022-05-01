<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerTaskParameter.
 *
 * @ORM\Table(name="retainer_task_parameter")
 * @ORM\Entity
 */
class RetainerTaskParameter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_task_parameter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_do_w_0", type="integer", nullable=true)
     */
    private $itemLevelDoW0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_do_w_1", type="integer", nullable=true)
     */
    private $itemLevelDoW1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_do_w_2", type="integer", nullable=true)
     */
    private $itemLevelDoW2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_do_w_3", type="integer", nullable=true)
     */
    private $itemLevelDoW3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_do_l_0", type="integer", nullable=true)
     */
    private $perceptionDoL0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_do_l_1", type="integer", nullable=true)
     */
    private $perceptionDoL1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_do_l_2", type="integer", nullable=true)
     */
    private $perceptionDoL2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_do_l_3", type="integer", nullable=true)
     */
    private $perceptionDoL3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_fsh_0", type="integer", nullable=true)
     */
    private $perceptionFsh0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_fsh_1", type="integer", nullable=true)
     */
    private $perceptionFsh1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_fsh_2", type="integer", nullable=true)
     */
    private $perceptionFsh2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perception_fsh_3", type="integer", nullable=true)
     */
    private $perceptionFsh3;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getItemLevelDoW0(): ?int
    {
        return $this->itemLevelDoW0;
    }

    public function setItemLevelDoW0(?int $itemLevelDoW0): self
    {
        $this->itemLevelDoW0 = $itemLevelDoW0;

        return $this;
    }

    public function getItemLevelDoW1(): ?int
    {
        return $this->itemLevelDoW1;
    }

    public function setItemLevelDoW1(?int $itemLevelDoW1): self
    {
        $this->itemLevelDoW1 = $itemLevelDoW1;

        return $this;
    }

    public function getItemLevelDoW2(): ?int
    {
        return $this->itemLevelDoW2;
    }

    public function setItemLevelDoW2(?int $itemLevelDoW2): self
    {
        $this->itemLevelDoW2 = $itemLevelDoW2;

        return $this;
    }

    public function getItemLevelDoW3(): ?int
    {
        return $this->itemLevelDoW3;
    }

    public function setItemLevelDoW3(?int $itemLevelDoW3): self
    {
        $this->itemLevelDoW3 = $itemLevelDoW3;

        return $this;
    }

    public function getPerceptionDoL0(): ?int
    {
        return $this->perceptionDoL0;
    }

    public function setPerceptionDoL0(?int $perceptionDoL0): self
    {
        $this->perceptionDoL0 = $perceptionDoL0;

        return $this;
    }

    public function getPerceptionDoL1(): ?int
    {
        return $this->perceptionDoL1;
    }

    public function setPerceptionDoL1(?int $perceptionDoL1): self
    {
        $this->perceptionDoL1 = $perceptionDoL1;

        return $this;
    }

    public function getPerceptionDoL2(): ?int
    {
        return $this->perceptionDoL2;
    }

    public function setPerceptionDoL2(?int $perceptionDoL2): self
    {
        $this->perceptionDoL2 = $perceptionDoL2;

        return $this;
    }

    public function getPerceptionDoL3(): ?int
    {
        return $this->perceptionDoL3;
    }

    public function setPerceptionDoL3(?int $perceptionDoL3): self
    {
        $this->perceptionDoL3 = $perceptionDoL3;

        return $this;
    }

    public function getPerceptionFsh0(): ?int
    {
        return $this->perceptionFsh0;
    }

    public function setPerceptionFsh0(?int $perceptionFsh0): self
    {
        $this->perceptionFsh0 = $perceptionFsh0;

        return $this;
    }

    public function getPerceptionFsh1(): ?int
    {
        return $this->perceptionFsh1;
    }

    public function setPerceptionFsh1(?int $perceptionFsh1): self
    {
        $this->perceptionFsh1 = $perceptionFsh1;

        return $this;
    }

    public function getPerceptionFsh2(): ?int
    {
        return $this->perceptionFsh2;
    }

    public function setPerceptionFsh2(?int $perceptionFsh2): self
    {
        $this->perceptionFsh2 = $perceptionFsh2;

        return $this;
    }

    public function getPerceptionFsh3(): ?int
    {
        return $this->perceptionFsh3;
    }

    public function setPerceptionFsh3(?int $perceptionFsh3): self
    {
        $this->perceptionFsh3 = $perceptionFsh3;

        return $this;
    }
}
