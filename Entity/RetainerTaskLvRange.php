<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetainerTaskLvRange.
 *
 * @ORM\Table(name="retainer_task_lv_range")
 * @ORM\Entity
 */
class RetainerTaskLvRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="retainer_task_lv_range_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min", type="integer", nullable=true)
     */
    private $min;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max", type="integer", nullable=true)
     */
    private $max;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }
}
