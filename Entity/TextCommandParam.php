<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextCommandParam.
 *
 * @ORM\Table(name="text_command_param")
 * @ORM\Entity
 */
class TextCommandParam
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="text_command_param_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=true)
     */
    private $param;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(?string $param): self
    {
        $this->param = $param;

        return $this;
    }
}
