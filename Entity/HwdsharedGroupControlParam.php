<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdsharedGroupControlParam.
 *
 * @ORM\Table(name="hwdshared_group_control_param")
 * @ORM\Entity
 */
class HwdsharedGroupControlParam
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdshared_group_control_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param_value", type="integer", nullable=true)
     */
    private $paramValue;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getParamValue(): ?int
    {
        return $this->paramValue;
    }

    public function setParamValue(?int $paramValue): self
    {
        $this->paramValue = $paramValue;

        return $this;
    }
}
