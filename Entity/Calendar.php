<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar.
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity
 */
class Calendar
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calendar_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_0", type="integer", nullable=true)
     */
    private $month0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_1", type="integer", nullable=true)
     */
    private $month1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_2", type="integer", nullable=true)
     */
    private $month2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_3", type="integer", nullable=true)
     */
    private $month3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_4", type="integer", nullable=true)
     */
    private $month4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_5", type="integer", nullable=true)
     */
    private $month5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_6", type="integer", nullable=true)
     */
    private $month6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_7", type="integer", nullable=true)
     */
    private $month7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_8", type="integer", nullable=true)
     */
    private $month8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_9", type="integer", nullable=true)
     */
    private $month9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_10", type="integer", nullable=true)
     */
    private $month10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_11", type="integer", nullable=true)
     */
    private $month11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_12", type="integer", nullable=true)
     */
    private $month12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_13", type="integer", nullable=true)
     */
    private $month13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_14", type="integer", nullable=true)
     */
    private $month14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_15", type="integer", nullable=true)
     */
    private $month15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_16", type="integer", nullable=true)
     */
    private $month16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_17", type="integer", nullable=true)
     */
    private $month17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_18", type="integer", nullable=true)
     */
    private $month18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_19", type="integer", nullable=true)
     */
    private $month19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_20", type="integer", nullable=true)
     */
    private $month20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_21", type="integer", nullable=true)
     */
    private $month21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_22", type="integer", nullable=true)
     */
    private $month22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_23", type="integer", nullable=true)
     */
    private $month23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_24", type="integer", nullable=true)
     */
    private $month24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_25", type="integer", nullable=true)
     */
    private $month25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_26", type="integer", nullable=true)
     */
    private $month26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_27", type="integer", nullable=true)
     */
    private $month27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_28", type="integer", nullable=true)
     */
    private $month28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_29", type="integer", nullable=true)
     */
    private $month29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_30", type="integer", nullable=true)
     */
    private $month30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month_31", type="integer", nullable=true)
     */
    private $month31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_0", type="integer", nullable=true)
     */
    private $day0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_1", type="integer", nullable=true)
     */
    private $day1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_2", type="integer", nullable=true)
     */
    private $day2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_3", type="integer", nullable=true)
     */
    private $day3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_4", type="integer", nullable=true)
     */
    private $day4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_5", type="integer", nullable=true)
     */
    private $day5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_6", type="integer", nullable=true)
     */
    private $day6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_7", type="integer", nullable=true)
     */
    private $day7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_8", type="integer", nullable=true)
     */
    private $day8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_9", type="integer", nullable=true)
     */
    private $day9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_10", type="integer", nullable=true)
     */
    private $day10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_11", type="integer", nullable=true)
     */
    private $day11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_12", type="integer", nullable=true)
     */
    private $day12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_13", type="integer", nullable=true)
     */
    private $day13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_14", type="integer", nullable=true)
     */
    private $day14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_15", type="integer", nullable=true)
     */
    private $day15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_16", type="integer", nullable=true)
     */
    private $day16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_17", type="integer", nullable=true)
     */
    private $day17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_18", type="integer", nullable=true)
     */
    private $day18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_19", type="integer", nullable=true)
     */
    private $day19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_20", type="integer", nullable=true)
     */
    private $day20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_21", type="integer", nullable=true)
     */
    private $day21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_22", type="integer", nullable=true)
     */
    private $day22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_23", type="integer", nullable=true)
     */
    private $day23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_24", type="integer", nullable=true)
     */
    private $day24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_25", type="integer", nullable=true)
     */
    private $day25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_26", type="integer", nullable=true)
     */
    private $day26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_27", type="integer", nullable=true)
     */
    private $day27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_28", type="integer", nullable=true)
     */
    private $day28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_29", type="integer", nullable=true)
     */
    private $day29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_30", type="integer", nullable=true)
     */
    private $day30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day_31", type="integer", nullable=true)
     */
    private $day31;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getMonth0(): ?int
    {
        return $this->month0;
    }

    public function setMonth0(?int $month0): self
    {
        $this->month0 = $month0;

        return $this;
    }

    public function getMonth1(): ?int
    {
        return $this->month1;
    }

    public function setMonth1(?int $month1): self
    {
        $this->month1 = $month1;

        return $this;
    }

    public function getMonth2(): ?int
    {
        return $this->month2;
    }

    public function setMonth2(?int $month2): self
    {
        $this->month2 = $month2;

        return $this;
    }

    public function getMonth3(): ?int
    {
        return $this->month3;
    }

    public function setMonth3(?int $month3): self
    {
        $this->month3 = $month3;

        return $this;
    }

    public function getMonth4(): ?int
    {
        return $this->month4;
    }

    public function setMonth4(?int $month4): self
    {
        $this->month4 = $month4;

        return $this;
    }

    public function getMonth5(): ?int
    {
        return $this->month5;
    }

    public function setMonth5(?int $month5): self
    {
        $this->month5 = $month5;

        return $this;
    }

    public function getMonth6(): ?int
    {
        return $this->month6;
    }

    public function setMonth6(?int $month6): self
    {
        $this->month6 = $month6;

        return $this;
    }

    public function getMonth7(): ?int
    {
        return $this->month7;
    }

    public function setMonth7(?int $month7): self
    {
        $this->month7 = $month7;

        return $this;
    }

    public function getMonth8(): ?int
    {
        return $this->month8;
    }

    public function setMonth8(?int $month8): self
    {
        $this->month8 = $month8;

        return $this;
    }

    public function getMonth9(): ?int
    {
        return $this->month9;
    }

    public function setMonth9(?int $month9): self
    {
        $this->month9 = $month9;

        return $this;
    }

    public function getMonth10(): ?int
    {
        return $this->month10;
    }

    public function setMonth10(?int $month10): self
    {
        $this->month10 = $month10;

        return $this;
    }

    public function getMonth11(): ?int
    {
        return $this->month11;
    }

    public function setMonth11(?int $month11): self
    {
        $this->month11 = $month11;

        return $this;
    }

    public function getMonth12(): ?int
    {
        return $this->month12;
    }

    public function setMonth12(?int $month12): self
    {
        $this->month12 = $month12;

        return $this;
    }

    public function getMonth13(): ?int
    {
        return $this->month13;
    }

    public function setMonth13(?int $month13): self
    {
        $this->month13 = $month13;

        return $this;
    }

    public function getMonth14(): ?int
    {
        return $this->month14;
    }

    public function setMonth14(?int $month14): self
    {
        $this->month14 = $month14;

        return $this;
    }

    public function getMonth15(): ?int
    {
        return $this->month15;
    }

    public function setMonth15(?int $month15): self
    {
        $this->month15 = $month15;

        return $this;
    }

    public function getMonth16(): ?int
    {
        return $this->month16;
    }

    public function setMonth16(?int $month16): self
    {
        $this->month16 = $month16;

        return $this;
    }

    public function getMonth17(): ?int
    {
        return $this->month17;
    }

    public function setMonth17(?int $month17): self
    {
        $this->month17 = $month17;

        return $this;
    }

    public function getMonth18(): ?int
    {
        return $this->month18;
    }

    public function setMonth18(?int $month18): self
    {
        $this->month18 = $month18;

        return $this;
    }

    public function getMonth19(): ?int
    {
        return $this->month19;
    }

    public function setMonth19(?int $month19): self
    {
        $this->month19 = $month19;

        return $this;
    }

    public function getMonth20(): ?int
    {
        return $this->month20;
    }

    public function setMonth20(?int $month20): self
    {
        $this->month20 = $month20;

        return $this;
    }

    public function getMonth21(): ?int
    {
        return $this->month21;
    }

    public function setMonth21(?int $month21): self
    {
        $this->month21 = $month21;

        return $this;
    }

    public function getMonth22(): ?int
    {
        return $this->month22;
    }

    public function setMonth22(?int $month22): self
    {
        $this->month22 = $month22;

        return $this;
    }

    public function getMonth23(): ?int
    {
        return $this->month23;
    }

    public function setMonth23(?int $month23): self
    {
        $this->month23 = $month23;

        return $this;
    }

    public function getMonth24(): ?int
    {
        return $this->month24;
    }

    public function setMonth24(?int $month24): self
    {
        $this->month24 = $month24;

        return $this;
    }

    public function getMonth25(): ?int
    {
        return $this->month25;
    }

    public function setMonth25(?int $month25): self
    {
        $this->month25 = $month25;

        return $this;
    }

    public function getMonth26(): ?int
    {
        return $this->month26;
    }

    public function setMonth26(?int $month26): self
    {
        $this->month26 = $month26;

        return $this;
    }

    public function getMonth27(): ?int
    {
        return $this->month27;
    }

    public function setMonth27(?int $month27): self
    {
        $this->month27 = $month27;

        return $this;
    }

    public function getMonth28(): ?int
    {
        return $this->month28;
    }

    public function setMonth28(?int $month28): self
    {
        $this->month28 = $month28;

        return $this;
    }

    public function getMonth29(): ?int
    {
        return $this->month29;
    }

    public function setMonth29(?int $month29): self
    {
        $this->month29 = $month29;

        return $this;
    }

    public function getMonth30(): ?int
    {
        return $this->month30;
    }

    public function setMonth30(?int $month30): self
    {
        $this->month30 = $month30;

        return $this;
    }

    public function getMonth31(): ?int
    {
        return $this->month31;
    }

    public function setMonth31(?int $month31): self
    {
        $this->month31 = $month31;

        return $this;
    }

    public function getDay0(): ?int
    {
        return $this->day0;
    }

    public function setDay0(?int $day0): self
    {
        $this->day0 = $day0;

        return $this;
    }

    public function getDay1(): ?int
    {
        return $this->day1;
    }

    public function setDay1(?int $day1): self
    {
        $this->day1 = $day1;

        return $this;
    }

    public function getDay2(): ?int
    {
        return $this->day2;
    }

    public function setDay2(?int $day2): self
    {
        $this->day2 = $day2;

        return $this;
    }

    public function getDay3(): ?int
    {
        return $this->day3;
    }

    public function setDay3(?int $day3): self
    {
        $this->day3 = $day3;

        return $this;
    }

    public function getDay4(): ?int
    {
        return $this->day4;
    }

    public function setDay4(?int $day4): self
    {
        $this->day4 = $day4;

        return $this;
    }

    public function getDay5(): ?int
    {
        return $this->day5;
    }

    public function setDay5(?int $day5): self
    {
        $this->day5 = $day5;

        return $this;
    }

    public function getDay6(): ?int
    {
        return $this->day6;
    }

    public function setDay6(?int $day6): self
    {
        $this->day6 = $day6;

        return $this;
    }

    public function getDay7(): ?int
    {
        return $this->day7;
    }

    public function setDay7(?int $day7): self
    {
        $this->day7 = $day7;

        return $this;
    }

    public function getDay8(): ?int
    {
        return $this->day8;
    }

    public function setDay8(?int $day8): self
    {
        $this->day8 = $day8;

        return $this;
    }

    public function getDay9(): ?int
    {
        return $this->day9;
    }

    public function setDay9(?int $day9): self
    {
        $this->day9 = $day9;

        return $this;
    }

    public function getDay10(): ?int
    {
        return $this->day10;
    }

    public function setDay10(?int $day10): self
    {
        $this->day10 = $day10;

        return $this;
    }

    public function getDay11(): ?int
    {
        return $this->day11;
    }

    public function setDay11(?int $day11): self
    {
        $this->day11 = $day11;

        return $this;
    }

    public function getDay12(): ?int
    {
        return $this->day12;
    }

    public function setDay12(?int $day12): self
    {
        $this->day12 = $day12;

        return $this;
    }

    public function getDay13(): ?int
    {
        return $this->day13;
    }

    public function setDay13(?int $day13): self
    {
        $this->day13 = $day13;

        return $this;
    }

    public function getDay14(): ?int
    {
        return $this->day14;
    }

    public function setDay14(?int $day14): self
    {
        $this->day14 = $day14;

        return $this;
    }

    public function getDay15(): ?int
    {
        return $this->day15;
    }

    public function setDay15(?int $day15): self
    {
        $this->day15 = $day15;

        return $this;
    }

    public function getDay16(): ?int
    {
        return $this->day16;
    }

    public function setDay16(?int $day16): self
    {
        $this->day16 = $day16;

        return $this;
    }

    public function getDay17(): ?int
    {
        return $this->day17;
    }

    public function setDay17(?int $day17): self
    {
        $this->day17 = $day17;

        return $this;
    }

    public function getDay18(): ?int
    {
        return $this->day18;
    }

    public function setDay18(?int $day18): self
    {
        $this->day18 = $day18;

        return $this;
    }

    public function getDay19(): ?int
    {
        return $this->day19;
    }

    public function setDay19(?int $day19): self
    {
        $this->day19 = $day19;

        return $this;
    }

    public function getDay20(): ?int
    {
        return $this->day20;
    }

    public function setDay20(?int $day20): self
    {
        $this->day20 = $day20;

        return $this;
    }

    public function getDay21(): ?int
    {
        return $this->day21;
    }

    public function setDay21(?int $day21): self
    {
        $this->day21 = $day21;

        return $this;
    }

    public function getDay22(): ?int
    {
        return $this->day22;
    }

    public function setDay22(?int $day22): self
    {
        $this->day22 = $day22;

        return $this;
    }

    public function getDay23(): ?int
    {
        return $this->day23;
    }

    public function setDay23(?int $day23): self
    {
        $this->day23 = $day23;

        return $this;
    }

    public function getDay24(): ?int
    {
        return $this->day24;
    }

    public function setDay24(?int $day24): self
    {
        $this->day24 = $day24;

        return $this;
    }

    public function getDay25(): ?int
    {
        return $this->day25;
    }

    public function setDay25(?int $day25): self
    {
        $this->day25 = $day25;

        return $this;
    }

    public function getDay26(): ?int
    {
        return $this->day26;
    }

    public function setDay26(?int $day26): self
    {
        $this->day26 = $day26;

        return $this;
    }

    public function getDay27(): ?int
    {
        return $this->day27;
    }

    public function setDay27(?int $day27): self
    {
        $this->day27 = $day27;

        return $this;
    }

    public function getDay28(): ?int
    {
        return $this->day28;
    }

    public function setDay28(?int $day28): self
    {
        $this->day28 = $day28;

        return $this;
    }

    public function getDay29(): ?int
    {
        return $this->day29;
    }

    public function setDay29(?int $day29): self
    {
        $this->day29 = $day29;

        return $this;
    }

    public function getDay30(): ?int
    {
        return $this->day30;
    }

    public function setDay30(?int $day30): self
    {
        $this->day30 = $day30;

        return $this;
    }

    public function getDay31(): ?int
    {
        return $this->day31;
    }

    public function setDay31(?int $day31): self
    {
        $this->day31 = $day31;

        return $this;
    }
}
