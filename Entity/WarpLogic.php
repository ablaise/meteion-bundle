<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarpLogic.
 *
 * @ORM\Table(name="warp_logic")
 * @ORM\Entity
 */
class WarpLogic
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="warp_logic_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="warp_name", type="string", length=255, nullable=true)
     */
    private $warpName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_skip_cutscene", type="boolean", nullable=true)
     */
    private $canSkipCutscene;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_0", type="string", length=255, nullable=true)
     */
    private $function0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_1", type="string", length=255, nullable=true)
     */
    private $function1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_2", type="string", length=255, nullable=true)
     */
    private $function2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_3", type="string", length=255, nullable=true)
     */
    private $function3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_4", type="string", length=255, nullable=true)
     */
    private $function4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_5", type="string", length=255, nullable=true)
     */
    private $function5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_6", type="string", length=255, nullable=true)
     */
    private $function6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_7", type="string", length=255, nullable=true)
     */
    private $function7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_8", type="string", length=255, nullable=true)
     */
    private $function8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function_9", type="string", length=255, nullable=true)
     */
    private $function9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_0", type="integer", nullable=true)
     */
    private $argument0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_1", type="integer", nullable=true)
     */
    private $argument1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_2", type="integer", nullable=true)
     */
    private $argument2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_3", type="integer", nullable=true)
     */
    private $argument3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_4", type="integer", nullable=true)
     */
    private $argument4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_5", type="integer", nullable=true)
     */
    private $argument5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_6", type="integer", nullable=true)
     */
    private $argument6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_7", type="integer", nullable=true)
     */
    private $argument7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_8", type="integer", nullable=true)
     */
    private $argument8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="argument_9", type="integer", nullable=true)
     */
    private $argument9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_yes", type="string", length=255, nullable=true)
     */
    private $responseYes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response_no", type="string", length=255, nullable=true)
     */
    private $responseNo;

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

    public function getWarpName(): ?string
    {
        return $this->warpName;
    }

    public function setWarpName(?string $warpName): self
    {
        $this->warpName = $warpName;

        return $this;
    }

    public function getCanSkipCutscene(): ?bool
    {
        return $this->canSkipCutscene;
    }

    public function setCanSkipCutscene(?bool $canSkipCutscene): self
    {
        $this->canSkipCutscene = $canSkipCutscene;

        return $this;
    }

    public function getFunction0(): ?string
    {
        return $this->function0;
    }

    public function setFunction0(?string $function0): self
    {
        $this->function0 = $function0;

        return $this;
    }

    public function getFunction1(): ?string
    {
        return $this->function1;
    }

    public function setFunction1(?string $function1): self
    {
        $this->function1 = $function1;

        return $this;
    }

    public function getFunction2(): ?string
    {
        return $this->function2;
    }

    public function setFunction2(?string $function2): self
    {
        $this->function2 = $function2;

        return $this;
    }

    public function getFunction3(): ?string
    {
        return $this->function3;
    }

    public function setFunction3(?string $function3): self
    {
        $this->function3 = $function3;

        return $this;
    }

    public function getFunction4(): ?string
    {
        return $this->function4;
    }

    public function setFunction4(?string $function4): self
    {
        $this->function4 = $function4;

        return $this;
    }

    public function getFunction5(): ?string
    {
        return $this->function5;
    }

    public function setFunction5(?string $function5): self
    {
        $this->function5 = $function5;

        return $this;
    }

    public function getFunction6(): ?string
    {
        return $this->function6;
    }

    public function setFunction6(?string $function6): self
    {
        $this->function6 = $function6;

        return $this;
    }

    public function getFunction7(): ?string
    {
        return $this->function7;
    }

    public function setFunction7(?string $function7): self
    {
        $this->function7 = $function7;

        return $this;
    }

    public function getFunction8(): ?string
    {
        return $this->function8;
    }

    public function setFunction8(?string $function8): self
    {
        $this->function8 = $function8;

        return $this;
    }

    public function getFunction9(): ?string
    {
        return $this->function9;
    }

    public function setFunction9(?string $function9): self
    {
        $this->function9 = $function9;

        return $this;
    }

    public function getArgument0(): ?int
    {
        return $this->argument0;
    }

    public function setArgument0(?int $argument0): self
    {
        $this->argument0 = $argument0;

        return $this;
    }

    public function getArgument1(): ?int
    {
        return $this->argument1;
    }

    public function setArgument1(?int $argument1): self
    {
        $this->argument1 = $argument1;

        return $this;
    }

    public function getArgument2(): ?int
    {
        return $this->argument2;
    }

    public function setArgument2(?int $argument2): self
    {
        $this->argument2 = $argument2;

        return $this;
    }

    public function getArgument3(): ?int
    {
        return $this->argument3;
    }

    public function setArgument3(?int $argument3): self
    {
        $this->argument3 = $argument3;

        return $this;
    }

    public function getArgument4(): ?int
    {
        return $this->argument4;
    }

    public function setArgument4(?int $argument4): self
    {
        $this->argument4 = $argument4;

        return $this;
    }

    public function getArgument5(): ?int
    {
        return $this->argument5;
    }

    public function setArgument5(?int $argument5): self
    {
        $this->argument5 = $argument5;

        return $this;
    }

    public function getArgument6(): ?int
    {
        return $this->argument6;
    }

    public function setArgument6(?int $argument6): self
    {
        $this->argument6 = $argument6;

        return $this;
    }

    public function getArgument7(): ?int
    {
        return $this->argument7;
    }

    public function setArgument7(?int $argument7): self
    {
        $this->argument7 = $argument7;

        return $this;
    }

    public function getArgument8(): ?int
    {
        return $this->argument8;
    }

    public function setArgument8(?int $argument8): self
    {
        $this->argument8 = $argument8;

        return $this;
    }

    public function getArgument9(): ?int
    {
        return $this->argument9;
    }

    public function setArgument9(?int $argument9): self
    {
        $this->argument9 = $argument9;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getResponseYes(): ?string
    {
        return $this->responseYes;
    }

    public function setResponseYes(?string $responseYes): self
    {
        $this->responseYes = $responseYes;

        return $this;
    }

    public function getResponseNo(): ?string
    {
        return $this->responseNo;
    }

    public function setResponseNo(?string $responseNo): self
    {
        $this->responseNo = $responseNo;

        return $this;
    }
}
