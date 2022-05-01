<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceContentBuff.
 *
 * @ORM\Table(name="instance_content_buff")
 * @ORM\Entity
 */
class InstanceContentBuff
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="instance_content_buff_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="echo_start", type="bigint", nullable=true)
     */
    private $echoStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="echo_death", type="bigint", nullable=true)
     */
    private $echoDeath;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEchoStart(): ?string
    {
        return $this->echoStart;
    }

    public function setEchoStart(?string $echoStart): self
    {
        $this->echoStart = $echoStart;

        return $this;
    }

    public function getEchoDeath(): ?string
    {
        return $this->echoDeath;
    }

    public function setEchoDeath(?string $echoDeath): self
    {
        $this->echoDeath = $echoDeath;

        return $this;
    }
}
