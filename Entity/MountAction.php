<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MountAction.
 *
 * @ORM\Table(name="mount_action", indexes={@ORM\Index(name="idx_814cf6988a5d3301", columns={"action_1"}), @ORM\Index(name="idx_814cf698fd5a0397", columns={"action_0"}), @ORM\Index(name="idx_814cf698135462bb", columns={"action_2"}), @ORM\Index(name="idx_814cf6988d30f718", columns={"action_5"}), @ORM\Index(name="idx_814cf6986453522d", columns={"action_3"}), @ORM\Index(name="idx_814cf698fa37c78e", columns={"action_4"})})
 * @ORM\Entity
 */
class MountAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mount_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_5", referencedColumnName="pk")
     * })
     */
    private $action5;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_4", referencedColumnName="pk")
     * })
     */
    private $action4;

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

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getAction5(): ?Action
    {
        return $this->action5;
    }

    public function setAction5(?Action $action5): self
    {
        $this->action5 = $action5;

        return $this;
    }

    public function getAction4(): ?Action
    {
        return $this->action4;
    }

    public function setAction4(?Action $action4): self
    {
        $this->action4 = $action4;

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
}
