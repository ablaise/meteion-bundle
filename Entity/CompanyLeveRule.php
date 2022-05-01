<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyLeveRule.
 *
 * @ORM\Table(name="company_leve_rule", indexes={@ORM\Index(name="idx_fd101203b996f101", columns={"objective"}), @ORM\Index(name="idx_fd1012038875cac", columns={"help"})})
 * @ORM\Entity
 */
class CompanyLeveRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_leve_rule_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var LeveString
     *
     * @ORM\ManyToOne(targetEntity="LeveString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="help", referencedColumnName="pk")
     * })
     */
    private $help;

    /**
     * @var LeveString
     *
     * @ORM\ManyToOne(targetEntity="LeveString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective", referencedColumnName="pk")
     * })
     */
    private $objective;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHelp(): ?LeveString
    {
        return $this->help;
    }

    public function setHelp(?LeveString $help): self
    {
        $this->help = $help;

        return $this;
    }

    public function getObjective(): ?LeveString
    {
        return $this->objective;
    }

    public function setObjective(?LeveString $objective): self
    {
        $this->objective = $objective;

        return $this;
    }
}
