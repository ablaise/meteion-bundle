<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeonBan.
 *
 * @ORM\Table(name="deep_dungeon_ban", indexes={@ORM\Index(name="idx_3a0a7090b83a241b", columns={"screen_image"}), @ORM\Index(name="idx_3a0a70908e7008e8", columns={"log_message"}), @ORM\Index(name="idx_3a0a70905e237e06", columns={"name"})})
 * @ORM\Entity
 */
class DeepDungeonBan
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_ban_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var DeepDungeonFloorEffectUi
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonFloorEffectUi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message", referencedColumnName="pk")
     * })
     */
    private $logMessage;

    /**
     * @var ScreenImage
     *
     * @ORM\ManyToOne(targetEntity="ScreenImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="screen_image", referencedColumnName="pk")
     * })
     */
    private $screenImage;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?DeepDungeonFloorEffectUi
    {
        return $this->name;
    }

    public function setName(?DeepDungeonFloorEffectUi $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLogMessage(): ?LogMessage
    {
        return $this->logMessage;
    }

    public function setLogMessage(?LogMessage $logMessage): self
    {
        $this->logMessage = $logMessage;

        return $this;
    }

    public function getScreenImage(): ?ScreenImage
    {
        return $this->screenImage;
    }

    public function setScreenImage(?ScreenImage $screenImage): self
    {
        $this->screenImage = $screenImage;

        return $this;
    }
}
