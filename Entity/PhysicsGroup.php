<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhysicsGroup.
 *
 * @ORM\Table(name="physics_group")
 * @ORM\Entity
 */
class PhysicsGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="physics_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_0", type="string", length=255, nullable=true)
     */
    private $simulationTime0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_1", type="string", length=255, nullable=true)
     */
    private $simulationTime1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_2", type="string", length=255, nullable=true)
     */
    private $simulationTime2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_3", type="string", length=255, nullable=true)
     */
    private $simulationTime3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_4", type="string", length=255, nullable=true)
     */
    private $simulationTime4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="simulation_time_5", type="string", length=255, nullable=true)
     */
    private $simulationTime5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_0", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_1", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_2", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_3", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_4", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ps3simulation_time_5", type="string", length=255, nullable=true)
     */
    private $ps3simulationTime5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reset_by_look_at", type="boolean", nullable=true)
     */
    private $resetByLookAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="root_following_game", type="string", length=255, nullable=true)
     */
    private $rootFollowingGame;

    /**
     * @var string|null
     *
     * @ORM\Column(name="root_following_cut_scene", type="string", length=255, nullable=true)
     */
    private $rootFollowingCutScene;

    /**
     * @var int|null
     *
     * @ORM\Column(name="config_switch_0", type="integer", nullable=true)
     */
    private $configSwitch0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="config_switch_1", type="integer", nullable=true)
     */
    private $configSwitch1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="config_switch_2", type="integer", nullable=true)
     */
    private $configSwitch2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="force_attract_by_physics_off", type="boolean", nullable=true)
     */
    private $forceAttractByPhysicsOff;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSimulationTime0(): ?string
    {
        return $this->simulationTime0;
    }

    public function setSimulationTime0(?string $simulationTime0): self
    {
        $this->simulationTime0 = $simulationTime0;

        return $this;
    }

    public function getSimulationTime1(): ?string
    {
        return $this->simulationTime1;
    }

    public function setSimulationTime1(?string $simulationTime1): self
    {
        $this->simulationTime1 = $simulationTime1;

        return $this;
    }

    public function getSimulationTime2(): ?string
    {
        return $this->simulationTime2;
    }

    public function setSimulationTime2(?string $simulationTime2): self
    {
        $this->simulationTime2 = $simulationTime2;

        return $this;
    }

    public function getSimulationTime3(): ?string
    {
        return $this->simulationTime3;
    }

    public function setSimulationTime3(?string $simulationTime3): self
    {
        $this->simulationTime3 = $simulationTime3;

        return $this;
    }

    public function getSimulationTime4(): ?string
    {
        return $this->simulationTime4;
    }

    public function setSimulationTime4(?string $simulationTime4): self
    {
        $this->simulationTime4 = $simulationTime4;

        return $this;
    }

    public function getSimulationTime5(): ?string
    {
        return $this->simulationTime5;
    }

    public function setSimulationTime5(?string $simulationTime5): self
    {
        $this->simulationTime5 = $simulationTime5;

        return $this;
    }

    public function getPs3simulationTime0(): ?string
    {
        return $this->ps3simulationTime0;
    }

    public function setPs3simulationTime0(?string $ps3simulationTime0): self
    {
        $this->ps3simulationTime0 = $ps3simulationTime0;

        return $this;
    }

    public function getPs3simulationTime1(): ?string
    {
        return $this->ps3simulationTime1;
    }

    public function setPs3simulationTime1(?string $ps3simulationTime1): self
    {
        $this->ps3simulationTime1 = $ps3simulationTime1;

        return $this;
    }

    public function getPs3simulationTime2(): ?string
    {
        return $this->ps3simulationTime2;
    }

    public function setPs3simulationTime2(?string $ps3simulationTime2): self
    {
        $this->ps3simulationTime2 = $ps3simulationTime2;

        return $this;
    }

    public function getPs3simulationTime3(): ?string
    {
        return $this->ps3simulationTime3;
    }

    public function setPs3simulationTime3(?string $ps3simulationTime3): self
    {
        $this->ps3simulationTime3 = $ps3simulationTime3;

        return $this;
    }

    public function getPs3simulationTime4(): ?string
    {
        return $this->ps3simulationTime4;
    }

    public function setPs3simulationTime4(?string $ps3simulationTime4): self
    {
        $this->ps3simulationTime4 = $ps3simulationTime4;

        return $this;
    }

    public function getPs3simulationTime5(): ?string
    {
        return $this->ps3simulationTime5;
    }

    public function setPs3simulationTime5(?string $ps3simulationTime5): self
    {
        $this->ps3simulationTime5 = $ps3simulationTime5;

        return $this;
    }

    public function getResetByLookAt(): ?bool
    {
        return $this->resetByLookAt;
    }

    public function setResetByLookAt(?bool $resetByLookAt): self
    {
        $this->resetByLookAt = $resetByLookAt;

        return $this;
    }

    public function getRootFollowingGame(): ?string
    {
        return $this->rootFollowingGame;
    }

    public function setRootFollowingGame(?string $rootFollowingGame): self
    {
        $this->rootFollowingGame = $rootFollowingGame;

        return $this;
    }

    public function getRootFollowingCutScene(): ?string
    {
        return $this->rootFollowingCutScene;
    }

    public function setRootFollowingCutScene(?string $rootFollowingCutScene): self
    {
        $this->rootFollowingCutScene = $rootFollowingCutScene;

        return $this;
    }

    public function getConfigSwitch0(): ?int
    {
        return $this->configSwitch0;
    }

    public function setConfigSwitch0(?int $configSwitch0): self
    {
        $this->configSwitch0 = $configSwitch0;

        return $this;
    }

    public function getConfigSwitch1(): ?int
    {
        return $this->configSwitch1;
    }

    public function setConfigSwitch1(?int $configSwitch1): self
    {
        $this->configSwitch1 = $configSwitch1;

        return $this;
    }

    public function getConfigSwitch2(): ?int
    {
        return $this->configSwitch2;
    }

    public function setConfigSwitch2(?int $configSwitch2): self
    {
        $this->configSwitch2 = $configSwitch2;

        return $this;
    }

    public function getForceAttractByPhysicsOff(): ?bool
    {
        return $this->forceAttractByPhysicsOff;
    }

    public function setForceAttractByPhysicsOff(?bool $forceAttractByPhysicsOff): self
    {
        $this->forceAttractByPhysicsOff = $forceAttractByPhysicsOff;

        return $this;
    }
}
