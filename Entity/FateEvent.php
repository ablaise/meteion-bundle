<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FateEvent.
 *
 * @ORM\Table(name="fate_event")
 * @ORM\Entity
 */
class FateEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fate_event_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_0", type="integer", nullable=true)
     */
    private $turn0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_1", type="integer", nullable=true)
     */
    private $turn1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_2", type="integer", nullable=true)
     */
    private $turn2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_3", type="integer", nullable=true)
     */
    private $turn3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_4", type="integer", nullable=true)
     */
    private $turn4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_5", type="integer", nullable=true)
     */
    private $turn5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_6", type="integer", nullable=true)
     */
    private $turn6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_7", type="integer", nullable=true)
     */
    private $turn7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_0", type="bigint", nullable=true)
     */
    private $gesture0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_1", type="bigint", nullable=true)
     */
    private $gesture1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_2", type="bigint", nullable=true)
     */
    private $gesture2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_3", type="bigint", nullable=true)
     */
    private $gesture3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_4", type="bigint", nullable=true)
     */
    private $gesture4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_5", type="bigint", nullable=true)
     */
    private $gesture5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_6", type="bigint", nullable=true)
     */
    private $gesture6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gesture_7", type="bigint", nullable=true)
     */
    private $gesture7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_0", type="integer", nullable=true)
     */
    private $lipSync0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_1", type="integer", nullable=true)
     */
    private $lipSync1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_2", type="integer", nullable=true)
     */
    private $lipSync2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_3", type="integer", nullable=true)
     */
    private $lipSync3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_4", type="integer", nullable=true)
     */
    private $lipSync4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_5", type="integer", nullable=true)
     */
    private $lipSync5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_6", type="integer", nullable=true)
     */
    private $lipSync6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lip_sync_7", type="integer", nullable=true)
     */
    private $lipSync7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_0", type="integer", nullable=true)
     */
    private $facial0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_1", type="integer", nullable=true)
     */
    private $facial1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_2", type="integer", nullable=true)
     */
    private $facial2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_3", type="integer", nullable=true)
     */
    private $facial3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_4", type="integer", nullable=true)
     */
    private $facial4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_5", type="integer", nullable=true)
     */
    private $facial5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_6", type="integer", nullable=true)
     */
    private $facial6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facial_7", type="integer", nullable=true)
     */
    private $facial7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_0", type="integer", nullable=true)
     */
    private $shape0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_1", type="integer", nullable=true)
     */
    private $shape1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_2", type="integer", nullable=true)
     */
    private $shape2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_3", type="integer", nullable=true)
     */
    private $shape3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_4", type="integer", nullable=true)
     */
    private $shape4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_5", type="integer", nullable=true)
     */
    private $shape5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_6", type="integer", nullable=true)
     */
    private $shape6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shape_7", type="integer", nullable=true)
     */
    private $shape7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_0", type="boolean", nullable=true)
     */
    private $isAutoShake0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_1", type="boolean", nullable=true)
     */
    private $isAutoShake1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_2", type="boolean", nullable=true)
     */
    private $isAutoShake2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_3", type="boolean", nullable=true)
     */
    private $isAutoShake3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_4", type="boolean", nullable=true)
     */
    private $isAutoShake4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_5", type="boolean", nullable=true)
     */
    private $isAutoShake5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_6", type="boolean", nullable=true)
     */
    private $isAutoShake6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_auto_shake_7", type="boolean", nullable=true)
     */
    private $isAutoShake7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_0", type="integer", nullable=true)
     */
    private $widgetType0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_1", type="integer", nullable=true)
     */
    private $widgetType1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_2", type="integer", nullable=true)
     */
    private $widgetType2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_3", type="integer", nullable=true)
     */
    private $widgetType3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_4", type="integer", nullable=true)
     */
    private $widgetType4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_5", type="integer", nullable=true)
     */
    private $widgetType5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_6", type="integer", nullable=true)
     */
    private $widgetType6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_7", type="integer", nullable=true)
     */
    private $widgetType7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_0", type="string", length=1093, nullable=true)
     */
    private $text0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_1", type="string", length=1093, nullable=true)
     */
    private $text1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_2", type="string", length=1093, nullable=true)
     */
    private $text2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_3", type="string", length=1093, nullable=true)
     */
    private $text3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_4", type="string", length=1093, nullable=true)
     */
    private $text4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_5", type="string", length=1093, nullable=true)
     */
    private $text5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_6", type="string", length=1093, nullable=true)
     */
    private $text6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_7", type="string", length=1093, nullable=true)
     */
    private $text7;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTurn0(): ?int
    {
        return $this->turn0;
    }

    public function setTurn0(?int $turn0): self
    {
        $this->turn0 = $turn0;

        return $this;
    }

    public function getTurn1(): ?int
    {
        return $this->turn1;
    }

    public function setTurn1(?int $turn1): self
    {
        $this->turn1 = $turn1;

        return $this;
    }

    public function getTurn2(): ?int
    {
        return $this->turn2;
    }

    public function setTurn2(?int $turn2): self
    {
        $this->turn2 = $turn2;

        return $this;
    }

    public function getTurn3(): ?int
    {
        return $this->turn3;
    }

    public function setTurn3(?int $turn3): self
    {
        $this->turn3 = $turn3;

        return $this;
    }

    public function getTurn4(): ?int
    {
        return $this->turn4;
    }

    public function setTurn4(?int $turn4): self
    {
        $this->turn4 = $turn4;

        return $this;
    }

    public function getTurn5(): ?int
    {
        return $this->turn5;
    }

    public function setTurn5(?int $turn5): self
    {
        $this->turn5 = $turn5;

        return $this;
    }

    public function getTurn6(): ?int
    {
        return $this->turn6;
    }

    public function setTurn6(?int $turn6): self
    {
        $this->turn6 = $turn6;

        return $this;
    }

    public function getTurn7(): ?int
    {
        return $this->turn7;
    }

    public function setTurn7(?int $turn7): self
    {
        $this->turn7 = $turn7;

        return $this;
    }

    public function getGesture0(): ?string
    {
        return $this->gesture0;
    }

    public function setGesture0(?string $gesture0): self
    {
        $this->gesture0 = $gesture0;

        return $this;
    }

    public function getGesture1(): ?string
    {
        return $this->gesture1;
    }

    public function setGesture1(?string $gesture1): self
    {
        $this->gesture1 = $gesture1;

        return $this;
    }

    public function getGesture2(): ?string
    {
        return $this->gesture2;
    }

    public function setGesture2(?string $gesture2): self
    {
        $this->gesture2 = $gesture2;

        return $this;
    }

    public function getGesture3(): ?string
    {
        return $this->gesture3;
    }

    public function setGesture3(?string $gesture3): self
    {
        $this->gesture3 = $gesture3;

        return $this;
    }

    public function getGesture4(): ?string
    {
        return $this->gesture4;
    }

    public function setGesture4(?string $gesture4): self
    {
        $this->gesture4 = $gesture4;

        return $this;
    }

    public function getGesture5(): ?string
    {
        return $this->gesture5;
    }

    public function setGesture5(?string $gesture5): self
    {
        $this->gesture5 = $gesture5;

        return $this;
    }

    public function getGesture6(): ?string
    {
        return $this->gesture6;
    }

    public function setGesture6(?string $gesture6): self
    {
        $this->gesture6 = $gesture6;

        return $this;
    }

    public function getGesture7(): ?string
    {
        return $this->gesture7;
    }

    public function setGesture7(?string $gesture7): self
    {
        $this->gesture7 = $gesture7;

        return $this;
    }

    public function getLipSync0(): ?int
    {
        return $this->lipSync0;
    }

    public function setLipSync0(?int $lipSync0): self
    {
        $this->lipSync0 = $lipSync0;

        return $this;
    }

    public function getLipSync1(): ?int
    {
        return $this->lipSync1;
    }

    public function setLipSync1(?int $lipSync1): self
    {
        $this->lipSync1 = $lipSync1;

        return $this;
    }

    public function getLipSync2(): ?int
    {
        return $this->lipSync2;
    }

    public function setLipSync2(?int $lipSync2): self
    {
        $this->lipSync2 = $lipSync2;

        return $this;
    }

    public function getLipSync3(): ?int
    {
        return $this->lipSync3;
    }

    public function setLipSync3(?int $lipSync3): self
    {
        $this->lipSync3 = $lipSync3;

        return $this;
    }

    public function getLipSync4(): ?int
    {
        return $this->lipSync4;
    }

    public function setLipSync4(?int $lipSync4): self
    {
        $this->lipSync4 = $lipSync4;

        return $this;
    }

    public function getLipSync5(): ?int
    {
        return $this->lipSync5;
    }

    public function setLipSync5(?int $lipSync5): self
    {
        $this->lipSync5 = $lipSync5;

        return $this;
    }

    public function getLipSync6(): ?int
    {
        return $this->lipSync6;
    }

    public function setLipSync6(?int $lipSync6): self
    {
        $this->lipSync6 = $lipSync6;

        return $this;
    }

    public function getLipSync7(): ?int
    {
        return $this->lipSync7;
    }

    public function setLipSync7(?int $lipSync7): self
    {
        $this->lipSync7 = $lipSync7;

        return $this;
    }

    public function getFacial0(): ?int
    {
        return $this->facial0;
    }

    public function setFacial0(?int $facial0): self
    {
        $this->facial0 = $facial0;

        return $this;
    }

    public function getFacial1(): ?int
    {
        return $this->facial1;
    }

    public function setFacial1(?int $facial1): self
    {
        $this->facial1 = $facial1;

        return $this;
    }

    public function getFacial2(): ?int
    {
        return $this->facial2;
    }

    public function setFacial2(?int $facial2): self
    {
        $this->facial2 = $facial2;

        return $this;
    }

    public function getFacial3(): ?int
    {
        return $this->facial3;
    }

    public function setFacial3(?int $facial3): self
    {
        $this->facial3 = $facial3;

        return $this;
    }

    public function getFacial4(): ?int
    {
        return $this->facial4;
    }

    public function setFacial4(?int $facial4): self
    {
        $this->facial4 = $facial4;

        return $this;
    }

    public function getFacial5(): ?int
    {
        return $this->facial5;
    }

    public function setFacial5(?int $facial5): self
    {
        $this->facial5 = $facial5;

        return $this;
    }

    public function getFacial6(): ?int
    {
        return $this->facial6;
    }

    public function setFacial6(?int $facial6): self
    {
        $this->facial6 = $facial6;

        return $this;
    }

    public function getFacial7(): ?int
    {
        return $this->facial7;
    }

    public function setFacial7(?int $facial7): self
    {
        $this->facial7 = $facial7;

        return $this;
    }

    public function getShape0(): ?int
    {
        return $this->shape0;
    }

    public function setShape0(?int $shape0): self
    {
        $this->shape0 = $shape0;

        return $this;
    }

    public function getShape1(): ?int
    {
        return $this->shape1;
    }

    public function setShape1(?int $shape1): self
    {
        $this->shape1 = $shape1;

        return $this;
    }

    public function getShape2(): ?int
    {
        return $this->shape2;
    }

    public function setShape2(?int $shape2): self
    {
        $this->shape2 = $shape2;

        return $this;
    }

    public function getShape3(): ?int
    {
        return $this->shape3;
    }

    public function setShape3(?int $shape3): self
    {
        $this->shape3 = $shape3;

        return $this;
    }

    public function getShape4(): ?int
    {
        return $this->shape4;
    }

    public function setShape4(?int $shape4): self
    {
        $this->shape4 = $shape4;

        return $this;
    }

    public function getShape5(): ?int
    {
        return $this->shape5;
    }

    public function setShape5(?int $shape5): self
    {
        $this->shape5 = $shape5;

        return $this;
    }

    public function getShape6(): ?int
    {
        return $this->shape6;
    }

    public function setShape6(?int $shape6): self
    {
        $this->shape6 = $shape6;

        return $this;
    }

    public function getShape7(): ?int
    {
        return $this->shape7;
    }

    public function setShape7(?int $shape7): self
    {
        $this->shape7 = $shape7;

        return $this;
    }

    public function getIsAutoShake0(): ?bool
    {
        return $this->isAutoShake0;
    }

    public function setIsAutoShake0(?bool $isAutoShake0): self
    {
        $this->isAutoShake0 = $isAutoShake0;

        return $this;
    }

    public function getIsAutoShake1(): ?bool
    {
        return $this->isAutoShake1;
    }

    public function setIsAutoShake1(?bool $isAutoShake1): self
    {
        $this->isAutoShake1 = $isAutoShake1;

        return $this;
    }

    public function getIsAutoShake2(): ?bool
    {
        return $this->isAutoShake2;
    }

    public function setIsAutoShake2(?bool $isAutoShake2): self
    {
        $this->isAutoShake2 = $isAutoShake2;

        return $this;
    }

    public function getIsAutoShake3(): ?bool
    {
        return $this->isAutoShake3;
    }

    public function setIsAutoShake3(?bool $isAutoShake3): self
    {
        $this->isAutoShake3 = $isAutoShake3;

        return $this;
    }

    public function getIsAutoShake4(): ?bool
    {
        return $this->isAutoShake4;
    }

    public function setIsAutoShake4(?bool $isAutoShake4): self
    {
        $this->isAutoShake4 = $isAutoShake4;

        return $this;
    }

    public function getIsAutoShake5(): ?bool
    {
        return $this->isAutoShake5;
    }

    public function setIsAutoShake5(?bool $isAutoShake5): self
    {
        $this->isAutoShake5 = $isAutoShake5;

        return $this;
    }

    public function getIsAutoShake6(): ?bool
    {
        return $this->isAutoShake6;
    }

    public function setIsAutoShake6(?bool $isAutoShake6): self
    {
        $this->isAutoShake6 = $isAutoShake6;

        return $this;
    }

    public function getIsAutoShake7(): ?bool
    {
        return $this->isAutoShake7;
    }

    public function setIsAutoShake7(?bool $isAutoShake7): self
    {
        $this->isAutoShake7 = $isAutoShake7;

        return $this;
    }

    public function getWidgetType0(): ?int
    {
        return $this->widgetType0;
    }

    public function setWidgetType0(?int $widgetType0): self
    {
        $this->widgetType0 = $widgetType0;

        return $this;
    }

    public function getWidgetType1(): ?int
    {
        return $this->widgetType1;
    }

    public function setWidgetType1(?int $widgetType1): self
    {
        $this->widgetType1 = $widgetType1;

        return $this;
    }

    public function getWidgetType2(): ?int
    {
        return $this->widgetType2;
    }

    public function setWidgetType2(?int $widgetType2): self
    {
        $this->widgetType2 = $widgetType2;

        return $this;
    }

    public function getWidgetType3(): ?int
    {
        return $this->widgetType3;
    }

    public function setWidgetType3(?int $widgetType3): self
    {
        $this->widgetType3 = $widgetType3;

        return $this;
    }

    public function getWidgetType4(): ?int
    {
        return $this->widgetType4;
    }

    public function setWidgetType4(?int $widgetType4): self
    {
        $this->widgetType4 = $widgetType4;

        return $this;
    }

    public function getWidgetType5(): ?int
    {
        return $this->widgetType5;
    }

    public function setWidgetType5(?int $widgetType5): self
    {
        $this->widgetType5 = $widgetType5;

        return $this;
    }

    public function getWidgetType6(): ?int
    {
        return $this->widgetType6;
    }

    public function setWidgetType6(?int $widgetType6): self
    {
        $this->widgetType6 = $widgetType6;

        return $this;
    }

    public function getWidgetType7(): ?int
    {
        return $this->widgetType7;
    }

    public function setWidgetType7(?int $widgetType7): self
    {
        $this->widgetType7 = $widgetType7;

        return $this;
    }

    public function getText0(): ?string
    {
        return $this->text0;
    }

    public function setText0(?string $text0): self
    {
        $this->text0 = $text0;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(?string $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getText3(): ?string
    {
        return $this->text3;
    }

    public function setText3(?string $text3): self
    {
        $this->text3 = $text3;

        return $this;
    }

    public function getText4(): ?string
    {
        return $this->text4;
    }

    public function setText4(?string $text4): self
    {
        $this->text4 = $text4;

        return $this;
    }

    public function getText5(): ?string
    {
        return $this->text5;
    }

    public function setText5(?string $text5): self
    {
        $this->text5 = $text5;

        return $this;
    }

    public function getText6(): ?string
    {
        return $this->text6;
    }

    public function setText6(?string $text6): self
    {
        $this->text6 = $text6;

        return $this;
    }

    public function getText7(): ?string
    {
        return $this->text7;
    }

    public function setText7(?string $text7): self
    {
        $this->text7 = $text7;

        return $this;
    }
}
