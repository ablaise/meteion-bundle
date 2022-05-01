<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingLandSet.
 *
 * @ORM\Table(name="housing_land_set")
 * @ORM\Entity
 */
class HousingLandSet
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_land_set_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_0", type="integer", nullable=true)
     */
    private $plotSize0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_1", type="integer", nullable=true)
     */
    private $plotSize1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_2", type="integer", nullable=true)
     */
    private $plotSize2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_3", type="integer", nullable=true)
     */
    private $plotSize3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_4", type="integer", nullable=true)
     */
    private $plotSize4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_5", type="integer", nullable=true)
     */
    private $plotSize5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_6", type="integer", nullable=true)
     */
    private $plotSize6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_7", type="integer", nullable=true)
     */
    private $plotSize7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_8", type="integer", nullable=true)
     */
    private $plotSize8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_9", type="integer", nullable=true)
     */
    private $plotSize9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_10", type="integer", nullable=true)
     */
    private $plotSize10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_11", type="integer", nullable=true)
     */
    private $plotSize11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_12", type="integer", nullable=true)
     */
    private $plotSize12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_13", type="integer", nullable=true)
     */
    private $plotSize13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_14", type="integer", nullable=true)
     */
    private $plotSize14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_15", type="integer", nullable=true)
     */
    private $plotSize15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_16", type="integer", nullable=true)
     */
    private $plotSize16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_17", type="integer", nullable=true)
     */
    private $plotSize17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_18", type="integer", nullable=true)
     */
    private $plotSize18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_19", type="integer", nullable=true)
     */
    private $plotSize19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_20", type="integer", nullable=true)
     */
    private $plotSize20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_21", type="integer", nullable=true)
     */
    private $plotSize21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_22", type="integer", nullable=true)
     */
    private $plotSize22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_23", type="integer", nullable=true)
     */
    private $plotSize23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_24", type="integer", nullable=true)
     */
    private $plotSize24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_25", type="integer", nullable=true)
     */
    private $plotSize25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_26", type="integer", nullable=true)
     */
    private $plotSize26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_27", type="integer", nullable=true)
     */
    private $plotSize27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_28", type="integer", nullable=true)
     */
    private $plotSize28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_29", type="integer", nullable=true)
     */
    private $plotSize29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_30", type="integer", nullable=true)
     */
    private $plotSize30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_31", type="integer", nullable=true)
     */
    private $plotSize31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_32", type="integer", nullable=true)
     */
    private $plotSize32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_33", type="integer", nullable=true)
     */
    private $plotSize33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_34", type="integer", nullable=true)
     */
    private $plotSize34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_35", type="integer", nullable=true)
     */
    private $plotSize35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_36", type="integer", nullable=true)
     */
    private $plotSize36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_37", type="integer", nullable=true)
     */
    private $plotSize37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_38", type="integer", nullable=true)
     */
    private $plotSize38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_39", type="integer", nullable=true)
     */
    private $plotSize39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_40", type="integer", nullable=true)
     */
    private $plotSize40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_41", type="integer", nullable=true)
     */
    private $plotSize41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_42", type="integer", nullable=true)
     */
    private $plotSize42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_43", type="integer", nullable=true)
     */
    private $plotSize43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_44", type="integer", nullable=true)
     */
    private $plotSize44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_45", type="integer", nullable=true)
     */
    private $plotSize45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_46", type="integer", nullable=true)
     */
    private $plotSize46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_47", type="integer", nullable=true)
     */
    private $plotSize47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_48", type="integer", nullable=true)
     */
    private $plotSize48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_49", type="integer", nullable=true)
     */
    private $plotSize49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_50", type="integer", nullable=true)
     */
    private $plotSize50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_51", type="integer", nullable=true)
     */
    private $plotSize51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_52", type="integer", nullable=true)
     */
    private $plotSize52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_53", type="integer", nullable=true)
     */
    private $plotSize53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_54", type="integer", nullable=true)
     */
    private $plotSize54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_55", type="integer", nullable=true)
     */
    private $plotSize55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_56", type="integer", nullable=true)
     */
    private $plotSize56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_57", type="integer", nullable=true)
     */
    private $plotSize57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_58", type="integer", nullable=true)
     */
    private $plotSize58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plot_size_59", type="integer", nullable=true)
     */
    private $plotSize59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_0", type="bigint", nullable=true)
     */
    private $minPrice0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_1", type="bigint", nullable=true)
     */
    private $minPrice1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_2", type="bigint", nullable=true)
     */
    private $minPrice2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_3", type="bigint", nullable=true)
     */
    private $minPrice3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_4", type="bigint", nullable=true)
     */
    private $minPrice4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_5", type="bigint", nullable=true)
     */
    private $minPrice5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_6", type="bigint", nullable=true)
     */
    private $minPrice6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_7", type="bigint", nullable=true)
     */
    private $minPrice7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_8", type="bigint", nullable=true)
     */
    private $minPrice8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_9", type="bigint", nullable=true)
     */
    private $minPrice9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_10", type="bigint", nullable=true)
     */
    private $minPrice10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_11", type="bigint", nullable=true)
     */
    private $minPrice11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_12", type="bigint", nullable=true)
     */
    private $minPrice12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_13", type="bigint", nullable=true)
     */
    private $minPrice13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_14", type="bigint", nullable=true)
     */
    private $minPrice14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_15", type="bigint", nullable=true)
     */
    private $minPrice15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_16", type="bigint", nullable=true)
     */
    private $minPrice16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_17", type="bigint", nullable=true)
     */
    private $minPrice17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_18", type="bigint", nullable=true)
     */
    private $minPrice18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_19", type="bigint", nullable=true)
     */
    private $minPrice19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_20", type="bigint", nullable=true)
     */
    private $minPrice20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_21", type="bigint", nullable=true)
     */
    private $minPrice21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_22", type="bigint", nullable=true)
     */
    private $minPrice22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_23", type="bigint", nullable=true)
     */
    private $minPrice23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_24", type="bigint", nullable=true)
     */
    private $minPrice24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_25", type="bigint", nullable=true)
     */
    private $minPrice25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_26", type="bigint", nullable=true)
     */
    private $minPrice26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_27", type="bigint", nullable=true)
     */
    private $minPrice27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_28", type="bigint", nullable=true)
     */
    private $minPrice28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_29", type="bigint", nullable=true)
     */
    private $minPrice29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_30", type="bigint", nullable=true)
     */
    private $minPrice30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_31", type="bigint", nullable=true)
     */
    private $minPrice31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_32", type="bigint", nullable=true)
     */
    private $minPrice32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_33", type="bigint", nullable=true)
     */
    private $minPrice33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_34", type="bigint", nullable=true)
     */
    private $minPrice34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_35", type="bigint", nullable=true)
     */
    private $minPrice35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_36", type="bigint", nullable=true)
     */
    private $minPrice36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_37", type="bigint", nullable=true)
     */
    private $minPrice37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_38", type="bigint", nullable=true)
     */
    private $minPrice38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_39", type="bigint", nullable=true)
     */
    private $minPrice39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_40", type="bigint", nullable=true)
     */
    private $minPrice40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_41", type="bigint", nullable=true)
     */
    private $minPrice41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_42", type="bigint", nullable=true)
     */
    private $minPrice42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_43", type="bigint", nullable=true)
     */
    private $minPrice43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_44", type="bigint", nullable=true)
     */
    private $minPrice44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_45", type="bigint", nullable=true)
     */
    private $minPrice45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_46", type="bigint", nullable=true)
     */
    private $minPrice46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_47", type="bigint", nullable=true)
     */
    private $minPrice47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_48", type="bigint", nullable=true)
     */
    private $minPrice48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_49", type="bigint", nullable=true)
     */
    private $minPrice49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_50", type="bigint", nullable=true)
     */
    private $minPrice50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_51", type="bigint", nullable=true)
     */
    private $minPrice51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_52", type="bigint", nullable=true)
     */
    private $minPrice52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_53", type="bigint", nullable=true)
     */
    private $minPrice53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_54", type="bigint", nullable=true)
     */
    private $minPrice54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_55", type="bigint", nullable=true)
     */
    private $minPrice55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_56", type="bigint", nullable=true)
     */
    private $minPrice56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_57", type="bigint", nullable=true)
     */
    private $minPrice57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_58", type="bigint", nullable=true)
     */
    private $minPrice58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_price_59", type="bigint", nullable=true)
     */
    private $minPrice59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_121", type="bigint", nullable=true)
     */
    private $column121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_122", type="bigint", nullable=true)
     */
    private $column122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_123", type="bigint", nullable=true)
     */
    private $column123;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_124", type="bigint", nullable=true)
     */
    private $column124;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_125", type="bigint", nullable=true)
     */
    private $column125;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_126", type="bigint", nullable=true)
     */
    private $column126;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_127", type="bigint", nullable=true)
     */
    private $column127;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_128", type="bigint", nullable=true)
     */
    private $column128;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_129", type="bigint", nullable=true)
     */
    private $column129;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_130", type="bigint", nullable=true)
     */
    private $column130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_131", type="bigint", nullable=true)
     */
    private $column131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_132", type="bigint", nullable=true)
     */
    private $column132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_133", type="bigint", nullable=true)
     */
    private $column133;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_134", type="bigint", nullable=true)
     */
    private $column134;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_135", type="bigint", nullable=true)
     */
    private $column135;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_136", type="bigint", nullable=true)
     */
    private $column136;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_137", type="bigint", nullable=true)
     */
    private $column137;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_138", type="bigint", nullable=true)
     */
    private $column138;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_139", type="bigint", nullable=true)
     */
    private $column139;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_140", type="bigint", nullable=true)
     */
    private $column140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_141", type="bigint", nullable=true)
     */
    private $column141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_142", type="bigint", nullable=true)
     */
    private $column142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_143", type="bigint", nullable=true)
     */
    private $column143;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_144", type="bigint", nullable=true)
     */
    private $column144;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_145", type="bigint", nullable=true)
     */
    private $column145;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_146", type="bigint", nullable=true)
     */
    private $column146;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_147", type="bigint", nullable=true)
     */
    private $column147;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_148", type="bigint", nullable=true)
     */
    private $column148;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_149", type="bigint", nullable=true)
     */
    private $column149;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_150", type="bigint", nullable=true)
     */
    private $column150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_151", type="bigint", nullable=true)
     */
    private $column151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_152", type="bigint", nullable=true)
     */
    private $column152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_153", type="bigint", nullable=true)
     */
    private $column153;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_154", type="bigint", nullable=true)
     */
    private $column154;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_155", type="bigint", nullable=true)
     */
    private $column155;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_156", type="bigint", nullable=true)
     */
    private $column156;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_157", type="bigint", nullable=true)
     */
    private $column157;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_158", type="bigint", nullable=true)
     */
    private $column158;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_159", type="bigint", nullable=true)
     */
    private $column159;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_160", type="bigint", nullable=true)
     */
    private $column160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_161", type="bigint", nullable=true)
     */
    private $column161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_162", type="bigint", nullable=true)
     */
    private $column162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_163", type="bigint", nullable=true)
     */
    private $column163;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_164", type="bigint", nullable=true)
     */
    private $column164;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_165", type="bigint", nullable=true)
     */
    private $column165;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_166", type="bigint", nullable=true)
     */
    private $column166;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_167", type="bigint", nullable=true)
     */
    private $column167;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_168", type="bigint", nullable=true)
     */
    private $column168;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_169", type="bigint", nullable=true)
     */
    private $column169;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_170", type="bigint", nullable=true)
     */
    private $column170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_171", type="bigint", nullable=true)
     */
    private $column171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_172", type="bigint", nullable=true)
     */
    private $column172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_173", type="bigint", nullable=true)
     */
    private $column173;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_174", type="bigint", nullable=true)
     */
    private $column174;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_175", type="bigint", nullable=true)
     */
    private $column175;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_176", type="bigint", nullable=true)
     */
    private $column176;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_177", type="bigint", nullable=true)
     */
    private $column177;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_178", type="bigint", nullable=true)
     */
    private $column178;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_179", type="bigint", nullable=true)
     */
    private $column179;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_180", type="bigint", nullable=true)
     */
    private $column180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_181", type="bigint", nullable=true)
     */
    private $column181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_182", type="bigint", nullable=true)
     */
    private $column182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_183", type="bigint", nullable=true)
     */
    private $column183;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_184", type="bigint", nullable=true)
     */
    private $column184;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_185", type="bigint", nullable=true)
     */
    private $column185;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_186", type="bigint", nullable=true)
     */
    private $column186;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_187", type="bigint", nullable=true)
     */
    private $column187;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_188", type="bigint", nullable=true)
     */
    private $column188;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_189", type="bigint", nullable=true)
     */
    private $column189;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_190", type="bigint", nullable=true)
     */
    private $column190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_191", type="bigint", nullable=true)
     */
    private $column191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_192", type="bigint", nullable=true)
     */
    private $column192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_193", type="bigint", nullable=true)
     */
    private $column193;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_194", type="bigint", nullable=true)
     */
    private $column194;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_195", type="bigint", nullable=true)
     */
    private $column195;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_196", type="bigint", nullable=true)
     */
    private $column196;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_197", type="bigint", nullable=true)
     */
    private $column197;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_198", type="bigint", nullable=true)
     */
    private $column198;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_199", type="bigint", nullable=true)
     */
    private $column199;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_200", type="bigint", nullable=true)
     */
    private $column200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_201", type="bigint", nullable=true)
     */
    private $column201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_202", type="bigint", nullable=true)
     */
    private $column202;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_203", type="bigint", nullable=true)
     */
    private $column203;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_204", type="bigint", nullable=true)
     */
    private $column204;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_205", type="bigint", nullable=true)
     */
    private $column205;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_206", type="bigint", nullable=true)
     */
    private $column206;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_207", type="bigint", nullable=true)
     */
    private $column207;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_208", type="bigint", nullable=true)
     */
    private $column208;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_209", type="bigint", nullable=true)
     */
    private $column209;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_210", type="bigint", nullable=true)
     */
    private $column210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_211", type="bigint", nullable=true)
     */
    private $column211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_212", type="bigint", nullable=true)
     */
    private $column212;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_213", type="bigint", nullable=true)
     */
    private $column213;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_214", type="bigint", nullable=true)
     */
    private $column214;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_215", type="bigint", nullable=true)
     */
    private $column215;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_216", type="bigint", nullable=true)
     */
    private $column216;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_217", type="bigint", nullable=true)
     */
    private $column217;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_218", type="bigint", nullable=true)
     */
    private $column218;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_219", type="bigint", nullable=true)
     */
    private $column219;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_220", type="bigint", nullable=true)
     */
    private $column220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_221", type="bigint", nullable=true)
     */
    private $column221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_222", type="bigint", nullable=true)
     */
    private $column222;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_223", type="bigint", nullable=true)
     */
    private $column223;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_224", type="bigint", nullable=true)
     */
    private $column224;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_225", type="bigint", nullable=true)
     */
    private $column225;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_226", type="bigint", nullable=true)
     */
    private $column226;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_227", type="bigint", nullable=true)
     */
    private $column227;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_228", type="bigint", nullable=true)
     */
    private $column228;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_229", type="bigint", nullable=true)
     */
    private $column229;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_230", type="bigint", nullable=true)
     */
    private $column230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_231", type="bigint", nullable=true)
     */
    private $column231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_232", type="bigint", nullable=true)
     */
    private $column232;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_233", type="bigint", nullable=true)
     */
    private $column233;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_234", type="bigint", nullable=true)
     */
    private $column234;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_235", type="bigint", nullable=true)
     */
    private $column235;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_236", type="bigint", nullable=true)
     */
    private $column236;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_237", type="bigint", nullable=true)
     */
    private $column237;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_238", type="bigint", nullable=true)
     */
    private $column238;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_239", type="bigint", nullable=true)
     */
    private $column239;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_240", type="bigint", nullable=true)
     */
    private $column240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_0", type="bigint", nullable=true)
     */
    private $initialPrice0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_1", type="bigint", nullable=true)
     */
    private $initialPrice1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_2", type="bigint", nullable=true)
     */
    private $initialPrice2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_3", type="bigint", nullable=true)
     */
    private $initialPrice3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_4", type="bigint", nullable=true)
     */
    private $initialPrice4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_5", type="bigint", nullable=true)
     */
    private $initialPrice5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_6", type="bigint", nullable=true)
     */
    private $initialPrice6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_7", type="bigint", nullable=true)
     */
    private $initialPrice7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_8", type="bigint", nullable=true)
     */
    private $initialPrice8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_9", type="bigint", nullable=true)
     */
    private $initialPrice9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_10", type="bigint", nullable=true)
     */
    private $initialPrice10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_11", type="bigint", nullable=true)
     */
    private $initialPrice11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_12", type="bigint", nullable=true)
     */
    private $initialPrice12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_13", type="bigint", nullable=true)
     */
    private $initialPrice13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_14", type="bigint", nullable=true)
     */
    private $initialPrice14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_15", type="bigint", nullable=true)
     */
    private $initialPrice15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_16", type="bigint", nullable=true)
     */
    private $initialPrice16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_17", type="bigint", nullable=true)
     */
    private $initialPrice17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_18", type="bigint", nullable=true)
     */
    private $initialPrice18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_19", type="bigint", nullable=true)
     */
    private $initialPrice19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_20", type="bigint", nullable=true)
     */
    private $initialPrice20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_21", type="bigint", nullable=true)
     */
    private $initialPrice21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_22", type="bigint", nullable=true)
     */
    private $initialPrice22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_23", type="bigint", nullable=true)
     */
    private $initialPrice23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_24", type="bigint", nullable=true)
     */
    private $initialPrice24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_25", type="bigint", nullable=true)
     */
    private $initialPrice25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_26", type="bigint", nullable=true)
     */
    private $initialPrice26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_27", type="bigint", nullable=true)
     */
    private $initialPrice27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_28", type="bigint", nullable=true)
     */
    private $initialPrice28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_29", type="bigint", nullable=true)
     */
    private $initialPrice29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_30", type="bigint", nullable=true)
     */
    private $initialPrice30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_31", type="bigint", nullable=true)
     */
    private $initialPrice31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_32", type="bigint", nullable=true)
     */
    private $initialPrice32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_33", type="bigint", nullable=true)
     */
    private $initialPrice33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_34", type="bigint", nullable=true)
     */
    private $initialPrice34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_35", type="bigint", nullable=true)
     */
    private $initialPrice35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_36", type="bigint", nullable=true)
     */
    private $initialPrice36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_37", type="bigint", nullable=true)
     */
    private $initialPrice37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_38", type="bigint", nullable=true)
     */
    private $initialPrice38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_39", type="bigint", nullable=true)
     */
    private $initialPrice39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_40", type="bigint", nullable=true)
     */
    private $initialPrice40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_41", type="bigint", nullable=true)
     */
    private $initialPrice41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_42", type="bigint", nullable=true)
     */
    private $initialPrice42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_43", type="bigint", nullable=true)
     */
    private $initialPrice43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_44", type="bigint", nullable=true)
     */
    private $initialPrice44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_45", type="bigint", nullable=true)
     */
    private $initialPrice45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_46", type="bigint", nullable=true)
     */
    private $initialPrice46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_47", type="bigint", nullable=true)
     */
    private $initialPrice47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_48", type="bigint", nullable=true)
     */
    private $initialPrice48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_49", type="bigint", nullable=true)
     */
    private $initialPrice49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_50", type="bigint", nullable=true)
     */
    private $initialPrice50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_51", type="bigint", nullable=true)
     */
    private $initialPrice51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_52", type="bigint", nullable=true)
     */
    private $initialPrice52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_53", type="bigint", nullable=true)
     */
    private $initialPrice53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_54", type="bigint", nullable=true)
     */
    private $initialPrice54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_55", type="bigint", nullable=true)
     */
    private $initialPrice55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_56", type="bigint", nullable=true)
     */
    private $initialPrice56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_57", type="bigint", nullable=true)
     */
    private $initialPrice57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_58", type="bigint", nullable=true)
     */
    private $initialPrice58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="initial_price_59", type="bigint", nullable=true)
     */
    private $initialPrice59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_301", type="bigint", nullable=true)
     */
    private $column301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_302", type="bigint", nullable=true)
     */
    private $column302;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPlotSize0(): ?int
    {
        return $this->plotSize0;
    }

    public function setPlotSize0(?int $plotSize0): self
    {
        $this->plotSize0 = $plotSize0;

        return $this;
    }

    public function getPlotSize1(): ?int
    {
        return $this->plotSize1;
    }

    public function setPlotSize1(?int $plotSize1): self
    {
        $this->plotSize1 = $plotSize1;

        return $this;
    }

    public function getPlotSize2(): ?int
    {
        return $this->plotSize2;
    }

    public function setPlotSize2(?int $plotSize2): self
    {
        $this->plotSize2 = $plotSize2;

        return $this;
    }

    public function getPlotSize3(): ?int
    {
        return $this->plotSize3;
    }

    public function setPlotSize3(?int $plotSize3): self
    {
        $this->plotSize3 = $plotSize3;

        return $this;
    }

    public function getPlotSize4(): ?int
    {
        return $this->plotSize4;
    }

    public function setPlotSize4(?int $plotSize4): self
    {
        $this->plotSize4 = $plotSize4;

        return $this;
    }

    public function getPlotSize5(): ?int
    {
        return $this->plotSize5;
    }

    public function setPlotSize5(?int $plotSize5): self
    {
        $this->plotSize5 = $plotSize5;

        return $this;
    }

    public function getPlotSize6(): ?int
    {
        return $this->plotSize6;
    }

    public function setPlotSize6(?int $plotSize6): self
    {
        $this->plotSize6 = $plotSize6;

        return $this;
    }

    public function getPlotSize7(): ?int
    {
        return $this->plotSize7;
    }

    public function setPlotSize7(?int $plotSize7): self
    {
        $this->plotSize7 = $plotSize7;

        return $this;
    }

    public function getPlotSize8(): ?int
    {
        return $this->plotSize8;
    }

    public function setPlotSize8(?int $plotSize8): self
    {
        $this->plotSize8 = $plotSize8;

        return $this;
    }

    public function getPlotSize9(): ?int
    {
        return $this->plotSize9;
    }

    public function setPlotSize9(?int $plotSize9): self
    {
        $this->plotSize9 = $plotSize9;

        return $this;
    }

    public function getPlotSize10(): ?int
    {
        return $this->plotSize10;
    }

    public function setPlotSize10(?int $plotSize10): self
    {
        $this->plotSize10 = $plotSize10;

        return $this;
    }

    public function getPlotSize11(): ?int
    {
        return $this->plotSize11;
    }

    public function setPlotSize11(?int $plotSize11): self
    {
        $this->plotSize11 = $plotSize11;

        return $this;
    }

    public function getPlotSize12(): ?int
    {
        return $this->plotSize12;
    }

    public function setPlotSize12(?int $plotSize12): self
    {
        $this->plotSize12 = $plotSize12;

        return $this;
    }

    public function getPlotSize13(): ?int
    {
        return $this->plotSize13;
    }

    public function setPlotSize13(?int $plotSize13): self
    {
        $this->plotSize13 = $plotSize13;

        return $this;
    }

    public function getPlotSize14(): ?int
    {
        return $this->plotSize14;
    }

    public function setPlotSize14(?int $plotSize14): self
    {
        $this->plotSize14 = $plotSize14;

        return $this;
    }

    public function getPlotSize15(): ?int
    {
        return $this->plotSize15;
    }

    public function setPlotSize15(?int $plotSize15): self
    {
        $this->plotSize15 = $plotSize15;

        return $this;
    }

    public function getPlotSize16(): ?int
    {
        return $this->plotSize16;
    }

    public function setPlotSize16(?int $plotSize16): self
    {
        $this->plotSize16 = $plotSize16;

        return $this;
    }

    public function getPlotSize17(): ?int
    {
        return $this->plotSize17;
    }

    public function setPlotSize17(?int $plotSize17): self
    {
        $this->plotSize17 = $plotSize17;

        return $this;
    }

    public function getPlotSize18(): ?int
    {
        return $this->plotSize18;
    }

    public function setPlotSize18(?int $plotSize18): self
    {
        $this->plotSize18 = $plotSize18;

        return $this;
    }

    public function getPlotSize19(): ?int
    {
        return $this->plotSize19;
    }

    public function setPlotSize19(?int $plotSize19): self
    {
        $this->plotSize19 = $plotSize19;

        return $this;
    }

    public function getPlotSize20(): ?int
    {
        return $this->plotSize20;
    }

    public function setPlotSize20(?int $plotSize20): self
    {
        $this->plotSize20 = $plotSize20;

        return $this;
    }

    public function getPlotSize21(): ?int
    {
        return $this->plotSize21;
    }

    public function setPlotSize21(?int $plotSize21): self
    {
        $this->plotSize21 = $plotSize21;

        return $this;
    }

    public function getPlotSize22(): ?int
    {
        return $this->plotSize22;
    }

    public function setPlotSize22(?int $plotSize22): self
    {
        $this->plotSize22 = $plotSize22;

        return $this;
    }

    public function getPlotSize23(): ?int
    {
        return $this->plotSize23;
    }

    public function setPlotSize23(?int $plotSize23): self
    {
        $this->plotSize23 = $plotSize23;

        return $this;
    }

    public function getPlotSize24(): ?int
    {
        return $this->plotSize24;
    }

    public function setPlotSize24(?int $plotSize24): self
    {
        $this->plotSize24 = $plotSize24;

        return $this;
    }

    public function getPlotSize25(): ?int
    {
        return $this->plotSize25;
    }

    public function setPlotSize25(?int $plotSize25): self
    {
        $this->plotSize25 = $plotSize25;

        return $this;
    }

    public function getPlotSize26(): ?int
    {
        return $this->plotSize26;
    }

    public function setPlotSize26(?int $plotSize26): self
    {
        $this->plotSize26 = $plotSize26;

        return $this;
    }

    public function getPlotSize27(): ?int
    {
        return $this->plotSize27;
    }

    public function setPlotSize27(?int $plotSize27): self
    {
        $this->plotSize27 = $plotSize27;

        return $this;
    }

    public function getPlotSize28(): ?int
    {
        return $this->plotSize28;
    }

    public function setPlotSize28(?int $plotSize28): self
    {
        $this->plotSize28 = $plotSize28;

        return $this;
    }

    public function getPlotSize29(): ?int
    {
        return $this->plotSize29;
    }

    public function setPlotSize29(?int $plotSize29): self
    {
        $this->plotSize29 = $plotSize29;

        return $this;
    }

    public function getPlotSize30(): ?int
    {
        return $this->plotSize30;
    }

    public function setPlotSize30(?int $plotSize30): self
    {
        $this->plotSize30 = $plotSize30;

        return $this;
    }

    public function getPlotSize31(): ?int
    {
        return $this->plotSize31;
    }

    public function setPlotSize31(?int $plotSize31): self
    {
        $this->plotSize31 = $plotSize31;

        return $this;
    }

    public function getPlotSize32(): ?int
    {
        return $this->plotSize32;
    }

    public function setPlotSize32(?int $plotSize32): self
    {
        $this->plotSize32 = $plotSize32;

        return $this;
    }

    public function getPlotSize33(): ?int
    {
        return $this->plotSize33;
    }

    public function setPlotSize33(?int $plotSize33): self
    {
        $this->plotSize33 = $plotSize33;

        return $this;
    }

    public function getPlotSize34(): ?int
    {
        return $this->plotSize34;
    }

    public function setPlotSize34(?int $plotSize34): self
    {
        $this->plotSize34 = $plotSize34;

        return $this;
    }

    public function getPlotSize35(): ?int
    {
        return $this->plotSize35;
    }

    public function setPlotSize35(?int $plotSize35): self
    {
        $this->plotSize35 = $plotSize35;

        return $this;
    }

    public function getPlotSize36(): ?int
    {
        return $this->plotSize36;
    }

    public function setPlotSize36(?int $plotSize36): self
    {
        $this->plotSize36 = $plotSize36;

        return $this;
    }

    public function getPlotSize37(): ?int
    {
        return $this->plotSize37;
    }

    public function setPlotSize37(?int $plotSize37): self
    {
        $this->plotSize37 = $plotSize37;

        return $this;
    }

    public function getPlotSize38(): ?int
    {
        return $this->plotSize38;
    }

    public function setPlotSize38(?int $plotSize38): self
    {
        $this->plotSize38 = $plotSize38;

        return $this;
    }

    public function getPlotSize39(): ?int
    {
        return $this->plotSize39;
    }

    public function setPlotSize39(?int $plotSize39): self
    {
        $this->plotSize39 = $plotSize39;

        return $this;
    }

    public function getPlotSize40(): ?int
    {
        return $this->plotSize40;
    }

    public function setPlotSize40(?int $plotSize40): self
    {
        $this->plotSize40 = $plotSize40;

        return $this;
    }

    public function getPlotSize41(): ?int
    {
        return $this->plotSize41;
    }

    public function setPlotSize41(?int $plotSize41): self
    {
        $this->plotSize41 = $plotSize41;

        return $this;
    }

    public function getPlotSize42(): ?int
    {
        return $this->plotSize42;
    }

    public function setPlotSize42(?int $plotSize42): self
    {
        $this->plotSize42 = $plotSize42;

        return $this;
    }

    public function getPlotSize43(): ?int
    {
        return $this->plotSize43;
    }

    public function setPlotSize43(?int $plotSize43): self
    {
        $this->plotSize43 = $plotSize43;

        return $this;
    }

    public function getPlotSize44(): ?int
    {
        return $this->plotSize44;
    }

    public function setPlotSize44(?int $plotSize44): self
    {
        $this->plotSize44 = $plotSize44;

        return $this;
    }

    public function getPlotSize45(): ?int
    {
        return $this->plotSize45;
    }

    public function setPlotSize45(?int $plotSize45): self
    {
        $this->plotSize45 = $plotSize45;

        return $this;
    }

    public function getPlotSize46(): ?int
    {
        return $this->plotSize46;
    }

    public function setPlotSize46(?int $plotSize46): self
    {
        $this->plotSize46 = $plotSize46;

        return $this;
    }

    public function getPlotSize47(): ?int
    {
        return $this->plotSize47;
    }

    public function setPlotSize47(?int $plotSize47): self
    {
        $this->plotSize47 = $plotSize47;

        return $this;
    }

    public function getPlotSize48(): ?int
    {
        return $this->plotSize48;
    }

    public function setPlotSize48(?int $plotSize48): self
    {
        $this->plotSize48 = $plotSize48;

        return $this;
    }

    public function getPlotSize49(): ?int
    {
        return $this->plotSize49;
    }

    public function setPlotSize49(?int $plotSize49): self
    {
        $this->plotSize49 = $plotSize49;

        return $this;
    }

    public function getPlotSize50(): ?int
    {
        return $this->plotSize50;
    }

    public function setPlotSize50(?int $plotSize50): self
    {
        $this->plotSize50 = $plotSize50;

        return $this;
    }

    public function getPlotSize51(): ?int
    {
        return $this->plotSize51;
    }

    public function setPlotSize51(?int $plotSize51): self
    {
        $this->plotSize51 = $plotSize51;

        return $this;
    }

    public function getPlotSize52(): ?int
    {
        return $this->plotSize52;
    }

    public function setPlotSize52(?int $plotSize52): self
    {
        $this->plotSize52 = $plotSize52;

        return $this;
    }

    public function getPlotSize53(): ?int
    {
        return $this->plotSize53;
    }

    public function setPlotSize53(?int $plotSize53): self
    {
        $this->plotSize53 = $plotSize53;

        return $this;
    }

    public function getPlotSize54(): ?int
    {
        return $this->plotSize54;
    }

    public function setPlotSize54(?int $plotSize54): self
    {
        $this->plotSize54 = $plotSize54;

        return $this;
    }

    public function getPlotSize55(): ?int
    {
        return $this->plotSize55;
    }

    public function setPlotSize55(?int $plotSize55): self
    {
        $this->plotSize55 = $plotSize55;

        return $this;
    }

    public function getPlotSize56(): ?int
    {
        return $this->plotSize56;
    }

    public function setPlotSize56(?int $plotSize56): self
    {
        $this->plotSize56 = $plotSize56;

        return $this;
    }

    public function getPlotSize57(): ?int
    {
        return $this->plotSize57;
    }

    public function setPlotSize57(?int $plotSize57): self
    {
        $this->plotSize57 = $plotSize57;

        return $this;
    }

    public function getPlotSize58(): ?int
    {
        return $this->plotSize58;
    }

    public function setPlotSize58(?int $plotSize58): self
    {
        $this->plotSize58 = $plotSize58;

        return $this;
    }

    public function getPlotSize59(): ?int
    {
        return $this->plotSize59;
    }

    public function setPlotSize59(?int $plotSize59): self
    {
        $this->plotSize59 = $plotSize59;

        return $this;
    }

    public function getMinPrice0(): ?string
    {
        return $this->minPrice0;
    }

    public function setMinPrice0(?string $minPrice0): self
    {
        $this->minPrice0 = $minPrice0;

        return $this;
    }

    public function getMinPrice1(): ?string
    {
        return $this->minPrice1;
    }

    public function setMinPrice1(?string $minPrice1): self
    {
        $this->minPrice1 = $minPrice1;

        return $this;
    }

    public function getMinPrice2(): ?string
    {
        return $this->minPrice2;
    }

    public function setMinPrice2(?string $minPrice2): self
    {
        $this->minPrice2 = $minPrice2;

        return $this;
    }

    public function getMinPrice3(): ?string
    {
        return $this->minPrice3;
    }

    public function setMinPrice3(?string $minPrice3): self
    {
        $this->minPrice3 = $minPrice3;

        return $this;
    }

    public function getMinPrice4(): ?string
    {
        return $this->minPrice4;
    }

    public function setMinPrice4(?string $minPrice4): self
    {
        $this->minPrice4 = $minPrice4;

        return $this;
    }

    public function getMinPrice5(): ?string
    {
        return $this->minPrice5;
    }

    public function setMinPrice5(?string $minPrice5): self
    {
        $this->minPrice5 = $minPrice5;

        return $this;
    }

    public function getMinPrice6(): ?string
    {
        return $this->minPrice6;
    }

    public function setMinPrice6(?string $minPrice6): self
    {
        $this->minPrice6 = $minPrice6;

        return $this;
    }

    public function getMinPrice7(): ?string
    {
        return $this->minPrice7;
    }

    public function setMinPrice7(?string $minPrice7): self
    {
        $this->minPrice7 = $minPrice7;

        return $this;
    }

    public function getMinPrice8(): ?string
    {
        return $this->minPrice8;
    }

    public function setMinPrice8(?string $minPrice8): self
    {
        $this->minPrice8 = $minPrice8;

        return $this;
    }

    public function getMinPrice9(): ?string
    {
        return $this->minPrice9;
    }

    public function setMinPrice9(?string $minPrice9): self
    {
        $this->minPrice9 = $minPrice9;

        return $this;
    }

    public function getMinPrice10(): ?string
    {
        return $this->minPrice10;
    }

    public function setMinPrice10(?string $minPrice10): self
    {
        $this->minPrice10 = $minPrice10;

        return $this;
    }

    public function getMinPrice11(): ?string
    {
        return $this->minPrice11;
    }

    public function setMinPrice11(?string $minPrice11): self
    {
        $this->minPrice11 = $minPrice11;

        return $this;
    }

    public function getMinPrice12(): ?string
    {
        return $this->minPrice12;
    }

    public function setMinPrice12(?string $minPrice12): self
    {
        $this->minPrice12 = $minPrice12;

        return $this;
    }

    public function getMinPrice13(): ?string
    {
        return $this->minPrice13;
    }

    public function setMinPrice13(?string $minPrice13): self
    {
        $this->minPrice13 = $minPrice13;

        return $this;
    }

    public function getMinPrice14(): ?string
    {
        return $this->minPrice14;
    }

    public function setMinPrice14(?string $minPrice14): self
    {
        $this->minPrice14 = $minPrice14;

        return $this;
    }

    public function getMinPrice15(): ?string
    {
        return $this->minPrice15;
    }

    public function setMinPrice15(?string $minPrice15): self
    {
        $this->minPrice15 = $minPrice15;

        return $this;
    }

    public function getMinPrice16(): ?string
    {
        return $this->minPrice16;
    }

    public function setMinPrice16(?string $minPrice16): self
    {
        $this->minPrice16 = $minPrice16;

        return $this;
    }

    public function getMinPrice17(): ?string
    {
        return $this->minPrice17;
    }

    public function setMinPrice17(?string $minPrice17): self
    {
        $this->minPrice17 = $minPrice17;

        return $this;
    }

    public function getMinPrice18(): ?string
    {
        return $this->minPrice18;
    }

    public function setMinPrice18(?string $minPrice18): self
    {
        $this->minPrice18 = $minPrice18;

        return $this;
    }

    public function getMinPrice19(): ?string
    {
        return $this->minPrice19;
    }

    public function setMinPrice19(?string $minPrice19): self
    {
        $this->minPrice19 = $minPrice19;

        return $this;
    }

    public function getMinPrice20(): ?string
    {
        return $this->minPrice20;
    }

    public function setMinPrice20(?string $minPrice20): self
    {
        $this->minPrice20 = $minPrice20;

        return $this;
    }

    public function getMinPrice21(): ?string
    {
        return $this->minPrice21;
    }

    public function setMinPrice21(?string $minPrice21): self
    {
        $this->minPrice21 = $minPrice21;

        return $this;
    }

    public function getMinPrice22(): ?string
    {
        return $this->minPrice22;
    }

    public function setMinPrice22(?string $minPrice22): self
    {
        $this->minPrice22 = $minPrice22;

        return $this;
    }

    public function getMinPrice23(): ?string
    {
        return $this->minPrice23;
    }

    public function setMinPrice23(?string $minPrice23): self
    {
        $this->minPrice23 = $minPrice23;

        return $this;
    }

    public function getMinPrice24(): ?string
    {
        return $this->minPrice24;
    }

    public function setMinPrice24(?string $minPrice24): self
    {
        $this->minPrice24 = $minPrice24;

        return $this;
    }

    public function getMinPrice25(): ?string
    {
        return $this->minPrice25;
    }

    public function setMinPrice25(?string $minPrice25): self
    {
        $this->minPrice25 = $minPrice25;

        return $this;
    }

    public function getMinPrice26(): ?string
    {
        return $this->minPrice26;
    }

    public function setMinPrice26(?string $minPrice26): self
    {
        $this->minPrice26 = $minPrice26;

        return $this;
    }

    public function getMinPrice27(): ?string
    {
        return $this->minPrice27;
    }

    public function setMinPrice27(?string $minPrice27): self
    {
        $this->minPrice27 = $minPrice27;

        return $this;
    }

    public function getMinPrice28(): ?string
    {
        return $this->minPrice28;
    }

    public function setMinPrice28(?string $minPrice28): self
    {
        $this->minPrice28 = $minPrice28;

        return $this;
    }

    public function getMinPrice29(): ?string
    {
        return $this->minPrice29;
    }

    public function setMinPrice29(?string $minPrice29): self
    {
        $this->minPrice29 = $minPrice29;

        return $this;
    }

    public function getMinPrice30(): ?string
    {
        return $this->minPrice30;
    }

    public function setMinPrice30(?string $minPrice30): self
    {
        $this->minPrice30 = $minPrice30;

        return $this;
    }

    public function getMinPrice31(): ?string
    {
        return $this->minPrice31;
    }

    public function setMinPrice31(?string $minPrice31): self
    {
        $this->minPrice31 = $minPrice31;

        return $this;
    }

    public function getMinPrice32(): ?string
    {
        return $this->minPrice32;
    }

    public function setMinPrice32(?string $minPrice32): self
    {
        $this->minPrice32 = $minPrice32;

        return $this;
    }

    public function getMinPrice33(): ?string
    {
        return $this->minPrice33;
    }

    public function setMinPrice33(?string $minPrice33): self
    {
        $this->minPrice33 = $minPrice33;

        return $this;
    }

    public function getMinPrice34(): ?string
    {
        return $this->minPrice34;
    }

    public function setMinPrice34(?string $minPrice34): self
    {
        $this->minPrice34 = $minPrice34;

        return $this;
    }

    public function getMinPrice35(): ?string
    {
        return $this->minPrice35;
    }

    public function setMinPrice35(?string $minPrice35): self
    {
        $this->minPrice35 = $minPrice35;

        return $this;
    }

    public function getMinPrice36(): ?string
    {
        return $this->minPrice36;
    }

    public function setMinPrice36(?string $minPrice36): self
    {
        $this->minPrice36 = $minPrice36;

        return $this;
    }

    public function getMinPrice37(): ?string
    {
        return $this->minPrice37;
    }

    public function setMinPrice37(?string $minPrice37): self
    {
        $this->minPrice37 = $minPrice37;

        return $this;
    }

    public function getMinPrice38(): ?string
    {
        return $this->minPrice38;
    }

    public function setMinPrice38(?string $minPrice38): self
    {
        $this->minPrice38 = $minPrice38;

        return $this;
    }

    public function getMinPrice39(): ?string
    {
        return $this->minPrice39;
    }

    public function setMinPrice39(?string $minPrice39): self
    {
        $this->minPrice39 = $minPrice39;

        return $this;
    }

    public function getMinPrice40(): ?string
    {
        return $this->minPrice40;
    }

    public function setMinPrice40(?string $minPrice40): self
    {
        $this->minPrice40 = $minPrice40;

        return $this;
    }

    public function getMinPrice41(): ?string
    {
        return $this->minPrice41;
    }

    public function setMinPrice41(?string $minPrice41): self
    {
        $this->minPrice41 = $minPrice41;

        return $this;
    }

    public function getMinPrice42(): ?string
    {
        return $this->minPrice42;
    }

    public function setMinPrice42(?string $minPrice42): self
    {
        $this->minPrice42 = $minPrice42;

        return $this;
    }

    public function getMinPrice43(): ?string
    {
        return $this->minPrice43;
    }

    public function setMinPrice43(?string $minPrice43): self
    {
        $this->minPrice43 = $minPrice43;

        return $this;
    }

    public function getMinPrice44(): ?string
    {
        return $this->minPrice44;
    }

    public function setMinPrice44(?string $minPrice44): self
    {
        $this->minPrice44 = $minPrice44;

        return $this;
    }

    public function getMinPrice45(): ?string
    {
        return $this->minPrice45;
    }

    public function setMinPrice45(?string $minPrice45): self
    {
        $this->minPrice45 = $minPrice45;

        return $this;
    }

    public function getMinPrice46(): ?string
    {
        return $this->minPrice46;
    }

    public function setMinPrice46(?string $minPrice46): self
    {
        $this->minPrice46 = $minPrice46;

        return $this;
    }

    public function getMinPrice47(): ?string
    {
        return $this->minPrice47;
    }

    public function setMinPrice47(?string $minPrice47): self
    {
        $this->minPrice47 = $minPrice47;

        return $this;
    }

    public function getMinPrice48(): ?string
    {
        return $this->minPrice48;
    }

    public function setMinPrice48(?string $minPrice48): self
    {
        $this->minPrice48 = $minPrice48;

        return $this;
    }

    public function getMinPrice49(): ?string
    {
        return $this->minPrice49;
    }

    public function setMinPrice49(?string $minPrice49): self
    {
        $this->minPrice49 = $minPrice49;

        return $this;
    }

    public function getMinPrice50(): ?string
    {
        return $this->minPrice50;
    }

    public function setMinPrice50(?string $minPrice50): self
    {
        $this->minPrice50 = $minPrice50;

        return $this;
    }

    public function getMinPrice51(): ?string
    {
        return $this->minPrice51;
    }

    public function setMinPrice51(?string $minPrice51): self
    {
        $this->minPrice51 = $minPrice51;

        return $this;
    }

    public function getMinPrice52(): ?string
    {
        return $this->minPrice52;
    }

    public function setMinPrice52(?string $minPrice52): self
    {
        $this->minPrice52 = $minPrice52;

        return $this;
    }

    public function getMinPrice53(): ?string
    {
        return $this->minPrice53;
    }

    public function setMinPrice53(?string $minPrice53): self
    {
        $this->minPrice53 = $minPrice53;

        return $this;
    }

    public function getMinPrice54(): ?string
    {
        return $this->minPrice54;
    }

    public function setMinPrice54(?string $minPrice54): self
    {
        $this->minPrice54 = $minPrice54;

        return $this;
    }

    public function getMinPrice55(): ?string
    {
        return $this->minPrice55;
    }

    public function setMinPrice55(?string $minPrice55): self
    {
        $this->minPrice55 = $minPrice55;

        return $this;
    }

    public function getMinPrice56(): ?string
    {
        return $this->minPrice56;
    }

    public function setMinPrice56(?string $minPrice56): self
    {
        $this->minPrice56 = $minPrice56;

        return $this;
    }

    public function getMinPrice57(): ?string
    {
        return $this->minPrice57;
    }

    public function setMinPrice57(?string $minPrice57): self
    {
        $this->minPrice57 = $minPrice57;

        return $this;
    }

    public function getMinPrice58(): ?string
    {
        return $this->minPrice58;
    }

    public function setMinPrice58(?string $minPrice58): self
    {
        $this->minPrice58 = $minPrice58;

        return $this;
    }

    public function getMinPrice59(): ?string
    {
        return $this->minPrice59;
    }

    public function setMinPrice59(?string $minPrice59): self
    {
        $this->minPrice59 = $minPrice59;

        return $this;
    }

    public function getColumn121(): ?string
    {
        return $this->column121;
    }

    public function setColumn121(?string $column121): self
    {
        $this->column121 = $column121;

        return $this;
    }

    public function getColumn122(): ?string
    {
        return $this->column122;
    }

    public function setColumn122(?string $column122): self
    {
        $this->column122 = $column122;

        return $this;
    }

    public function getColumn123(): ?string
    {
        return $this->column123;
    }

    public function setColumn123(?string $column123): self
    {
        $this->column123 = $column123;

        return $this;
    }

    public function getColumn124(): ?string
    {
        return $this->column124;
    }

    public function setColumn124(?string $column124): self
    {
        $this->column124 = $column124;

        return $this;
    }

    public function getColumn125(): ?string
    {
        return $this->column125;
    }

    public function setColumn125(?string $column125): self
    {
        $this->column125 = $column125;

        return $this;
    }

    public function getColumn126(): ?string
    {
        return $this->column126;
    }

    public function setColumn126(?string $column126): self
    {
        $this->column126 = $column126;

        return $this;
    }

    public function getColumn127(): ?string
    {
        return $this->column127;
    }

    public function setColumn127(?string $column127): self
    {
        $this->column127 = $column127;

        return $this;
    }

    public function getColumn128(): ?string
    {
        return $this->column128;
    }

    public function setColumn128(?string $column128): self
    {
        $this->column128 = $column128;

        return $this;
    }

    public function getColumn129(): ?string
    {
        return $this->column129;
    }

    public function setColumn129(?string $column129): self
    {
        $this->column129 = $column129;

        return $this;
    }

    public function getColumn130(): ?string
    {
        return $this->column130;
    }

    public function setColumn130(?string $column130): self
    {
        $this->column130 = $column130;

        return $this;
    }

    public function getColumn131(): ?string
    {
        return $this->column131;
    }

    public function setColumn131(?string $column131): self
    {
        $this->column131 = $column131;

        return $this;
    }

    public function getColumn132(): ?string
    {
        return $this->column132;
    }

    public function setColumn132(?string $column132): self
    {
        $this->column132 = $column132;

        return $this;
    }

    public function getColumn133(): ?string
    {
        return $this->column133;
    }

    public function setColumn133(?string $column133): self
    {
        $this->column133 = $column133;

        return $this;
    }

    public function getColumn134(): ?string
    {
        return $this->column134;
    }

    public function setColumn134(?string $column134): self
    {
        $this->column134 = $column134;

        return $this;
    }

    public function getColumn135(): ?string
    {
        return $this->column135;
    }

    public function setColumn135(?string $column135): self
    {
        $this->column135 = $column135;

        return $this;
    }

    public function getColumn136(): ?string
    {
        return $this->column136;
    }

    public function setColumn136(?string $column136): self
    {
        $this->column136 = $column136;

        return $this;
    }

    public function getColumn137(): ?string
    {
        return $this->column137;
    }

    public function setColumn137(?string $column137): self
    {
        $this->column137 = $column137;

        return $this;
    }

    public function getColumn138(): ?string
    {
        return $this->column138;
    }

    public function setColumn138(?string $column138): self
    {
        $this->column138 = $column138;

        return $this;
    }

    public function getColumn139(): ?string
    {
        return $this->column139;
    }

    public function setColumn139(?string $column139): self
    {
        $this->column139 = $column139;

        return $this;
    }

    public function getColumn140(): ?string
    {
        return $this->column140;
    }

    public function setColumn140(?string $column140): self
    {
        $this->column140 = $column140;

        return $this;
    }

    public function getColumn141(): ?string
    {
        return $this->column141;
    }

    public function setColumn141(?string $column141): self
    {
        $this->column141 = $column141;

        return $this;
    }

    public function getColumn142(): ?string
    {
        return $this->column142;
    }

    public function setColumn142(?string $column142): self
    {
        $this->column142 = $column142;

        return $this;
    }

    public function getColumn143(): ?string
    {
        return $this->column143;
    }

    public function setColumn143(?string $column143): self
    {
        $this->column143 = $column143;

        return $this;
    }

    public function getColumn144(): ?string
    {
        return $this->column144;
    }

    public function setColumn144(?string $column144): self
    {
        $this->column144 = $column144;

        return $this;
    }

    public function getColumn145(): ?string
    {
        return $this->column145;
    }

    public function setColumn145(?string $column145): self
    {
        $this->column145 = $column145;

        return $this;
    }

    public function getColumn146(): ?string
    {
        return $this->column146;
    }

    public function setColumn146(?string $column146): self
    {
        $this->column146 = $column146;

        return $this;
    }

    public function getColumn147(): ?string
    {
        return $this->column147;
    }

    public function setColumn147(?string $column147): self
    {
        $this->column147 = $column147;

        return $this;
    }

    public function getColumn148(): ?string
    {
        return $this->column148;
    }

    public function setColumn148(?string $column148): self
    {
        $this->column148 = $column148;

        return $this;
    }

    public function getColumn149(): ?string
    {
        return $this->column149;
    }

    public function setColumn149(?string $column149): self
    {
        $this->column149 = $column149;

        return $this;
    }

    public function getColumn150(): ?string
    {
        return $this->column150;
    }

    public function setColumn150(?string $column150): self
    {
        $this->column150 = $column150;

        return $this;
    }

    public function getColumn151(): ?string
    {
        return $this->column151;
    }

    public function setColumn151(?string $column151): self
    {
        $this->column151 = $column151;

        return $this;
    }

    public function getColumn152(): ?string
    {
        return $this->column152;
    }

    public function setColumn152(?string $column152): self
    {
        $this->column152 = $column152;

        return $this;
    }

    public function getColumn153(): ?string
    {
        return $this->column153;
    }

    public function setColumn153(?string $column153): self
    {
        $this->column153 = $column153;

        return $this;
    }

    public function getColumn154(): ?string
    {
        return $this->column154;
    }

    public function setColumn154(?string $column154): self
    {
        $this->column154 = $column154;

        return $this;
    }

    public function getColumn155(): ?string
    {
        return $this->column155;
    }

    public function setColumn155(?string $column155): self
    {
        $this->column155 = $column155;

        return $this;
    }

    public function getColumn156(): ?string
    {
        return $this->column156;
    }

    public function setColumn156(?string $column156): self
    {
        $this->column156 = $column156;

        return $this;
    }

    public function getColumn157(): ?string
    {
        return $this->column157;
    }

    public function setColumn157(?string $column157): self
    {
        $this->column157 = $column157;

        return $this;
    }

    public function getColumn158(): ?string
    {
        return $this->column158;
    }

    public function setColumn158(?string $column158): self
    {
        $this->column158 = $column158;

        return $this;
    }

    public function getColumn159(): ?string
    {
        return $this->column159;
    }

    public function setColumn159(?string $column159): self
    {
        $this->column159 = $column159;

        return $this;
    }

    public function getColumn160(): ?string
    {
        return $this->column160;
    }

    public function setColumn160(?string $column160): self
    {
        $this->column160 = $column160;

        return $this;
    }

    public function getColumn161(): ?string
    {
        return $this->column161;
    }

    public function setColumn161(?string $column161): self
    {
        $this->column161 = $column161;

        return $this;
    }

    public function getColumn162(): ?string
    {
        return $this->column162;
    }

    public function setColumn162(?string $column162): self
    {
        $this->column162 = $column162;

        return $this;
    }

    public function getColumn163(): ?string
    {
        return $this->column163;
    }

    public function setColumn163(?string $column163): self
    {
        $this->column163 = $column163;

        return $this;
    }

    public function getColumn164(): ?string
    {
        return $this->column164;
    }

    public function setColumn164(?string $column164): self
    {
        $this->column164 = $column164;

        return $this;
    }

    public function getColumn165(): ?string
    {
        return $this->column165;
    }

    public function setColumn165(?string $column165): self
    {
        $this->column165 = $column165;

        return $this;
    }

    public function getColumn166(): ?string
    {
        return $this->column166;
    }

    public function setColumn166(?string $column166): self
    {
        $this->column166 = $column166;

        return $this;
    }

    public function getColumn167(): ?string
    {
        return $this->column167;
    }

    public function setColumn167(?string $column167): self
    {
        $this->column167 = $column167;

        return $this;
    }

    public function getColumn168(): ?string
    {
        return $this->column168;
    }

    public function setColumn168(?string $column168): self
    {
        $this->column168 = $column168;

        return $this;
    }

    public function getColumn169(): ?string
    {
        return $this->column169;
    }

    public function setColumn169(?string $column169): self
    {
        $this->column169 = $column169;

        return $this;
    }

    public function getColumn170(): ?string
    {
        return $this->column170;
    }

    public function setColumn170(?string $column170): self
    {
        $this->column170 = $column170;

        return $this;
    }

    public function getColumn171(): ?string
    {
        return $this->column171;
    }

    public function setColumn171(?string $column171): self
    {
        $this->column171 = $column171;

        return $this;
    }

    public function getColumn172(): ?string
    {
        return $this->column172;
    }

    public function setColumn172(?string $column172): self
    {
        $this->column172 = $column172;

        return $this;
    }

    public function getColumn173(): ?string
    {
        return $this->column173;
    }

    public function setColumn173(?string $column173): self
    {
        $this->column173 = $column173;

        return $this;
    }

    public function getColumn174(): ?string
    {
        return $this->column174;
    }

    public function setColumn174(?string $column174): self
    {
        $this->column174 = $column174;

        return $this;
    }

    public function getColumn175(): ?string
    {
        return $this->column175;
    }

    public function setColumn175(?string $column175): self
    {
        $this->column175 = $column175;

        return $this;
    }

    public function getColumn176(): ?string
    {
        return $this->column176;
    }

    public function setColumn176(?string $column176): self
    {
        $this->column176 = $column176;

        return $this;
    }

    public function getColumn177(): ?string
    {
        return $this->column177;
    }

    public function setColumn177(?string $column177): self
    {
        $this->column177 = $column177;

        return $this;
    }

    public function getColumn178(): ?string
    {
        return $this->column178;
    }

    public function setColumn178(?string $column178): self
    {
        $this->column178 = $column178;

        return $this;
    }

    public function getColumn179(): ?string
    {
        return $this->column179;
    }

    public function setColumn179(?string $column179): self
    {
        $this->column179 = $column179;

        return $this;
    }

    public function getColumn180(): ?string
    {
        return $this->column180;
    }

    public function setColumn180(?string $column180): self
    {
        $this->column180 = $column180;

        return $this;
    }

    public function getColumn181(): ?string
    {
        return $this->column181;
    }

    public function setColumn181(?string $column181): self
    {
        $this->column181 = $column181;

        return $this;
    }

    public function getColumn182(): ?string
    {
        return $this->column182;
    }

    public function setColumn182(?string $column182): self
    {
        $this->column182 = $column182;

        return $this;
    }

    public function getColumn183(): ?string
    {
        return $this->column183;
    }

    public function setColumn183(?string $column183): self
    {
        $this->column183 = $column183;

        return $this;
    }

    public function getColumn184(): ?string
    {
        return $this->column184;
    }

    public function setColumn184(?string $column184): self
    {
        $this->column184 = $column184;

        return $this;
    }

    public function getColumn185(): ?string
    {
        return $this->column185;
    }

    public function setColumn185(?string $column185): self
    {
        $this->column185 = $column185;

        return $this;
    }

    public function getColumn186(): ?string
    {
        return $this->column186;
    }

    public function setColumn186(?string $column186): self
    {
        $this->column186 = $column186;

        return $this;
    }

    public function getColumn187(): ?string
    {
        return $this->column187;
    }

    public function setColumn187(?string $column187): self
    {
        $this->column187 = $column187;

        return $this;
    }

    public function getColumn188(): ?string
    {
        return $this->column188;
    }

    public function setColumn188(?string $column188): self
    {
        $this->column188 = $column188;

        return $this;
    }

    public function getColumn189(): ?string
    {
        return $this->column189;
    }

    public function setColumn189(?string $column189): self
    {
        $this->column189 = $column189;

        return $this;
    }

    public function getColumn190(): ?string
    {
        return $this->column190;
    }

    public function setColumn190(?string $column190): self
    {
        $this->column190 = $column190;

        return $this;
    }

    public function getColumn191(): ?string
    {
        return $this->column191;
    }

    public function setColumn191(?string $column191): self
    {
        $this->column191 = $column191;

        return $this;
    }

    public function getColumn192(): ?string
    {
        return $this->column192;
    }

    public function setColumn192(?string $column192): self
    {
        $this->column192 = $column192;

        return $this;
    }

    public function getColumn193(): ?string
    {
        return $this->column193;
    }

    public function setColumn193(?string $column193): self
    {
        $this->column193 = $column193;

        return $this;
    }

    public function getColumn194(): ?string
    {
        return $this->column194;
    }

    public function setColumn194(?string $column194): self
    {
        $this->column194 = $column194;

        return $this;
    }

    public function getColumn195(): ?string
    {
        return $this->column195;
    }

    public function setColumn195(?string $column195): self
    {
        $this->column195 = $column195;

        return $this;
    }

    public function getColumn196(): ?string
    {
        return $this->column196;
    }

    public function setColumn196(?string $column196): self
    {
        $this->column196 = $column196;

        return $this;
    }

    public function getColumn197(): ?string
    {
        return $this->column197;
    }

    public function setColumn197(?string $column197): self
    {
        $this->column197 = $column197;

        return $this;
    }

    public function getColumn198(): ?string
    {
        return $this->column198;
    }

    public function setColumn198(?string $column198): self
    {
        $this->column198 = $column198;

        return $this;
    }

    public function getColumn199(): ?string
    {
        return $this->column199;
    }

    public function setColumn199(?string $column199): self
    {
        $this->column199 = $column199;

        return $this;
    }

    public function getColumn200(): ?string
    {
        return $this->column200;
    }

    public function setColumn200(?string $column200): self
    {
        $this->column200 = $column200;

        return $this;
    }

    public function getColumn201(): ?string
    {
        return $this->column201;
    }

    public function setColumn201(?string $column201): self
    {
        $this->column201 = $column201;

        return $this;
    }

    public function getColumn202(): ?string
    {
        return $this->column202;
    }

    public function setColumn202(?string $column202): self
    {
        $this->column202 = $column202;

        return $this;
    }

    public function getColumn203(): ?string
    {
        return $this->column203;
    }

    public function setColumn203(?string $column203): self
    {
        $this->column203 = $column203;

        return $this;
    }

    public function getColumn204(): ?string
    {
        return $this->column204;
    }

    public function setColumn204(?string $column204): self
    {
        $this->column204 = $column204;

        return $this;
    }

    public function getColumn205(): ?string
    {
        return $this->column205;
    }

    public function setColumn205(?string $column205): self
    {
        $this->column205 = $column205;

        return $this;
    }

    public function getColumn206(): ?string
    {
        return $this->column206;
    }

    public function setColumn206(?string $column206): self
    {
        $this->column206 = $column206;

        return $this;
    }

    public function getColumn207(): ?string
    {
        return $this->column207;
    }

    public function setColumn207(?string $column207): self
    {
        $this->column207 = $column207;

        return $this;
    }

    public function getColumn208(): ?string
    {
        return $this->column208;
    }

    public function setColumn208(?string $column208): self
    {
        $this->column208 = $column208;

        return $this;
    }

    public function getColumn209(): ?string
    {
        return $this->column209;
    }

    public function setColumn209(?string $column209): self
    {
        $this->column209 = $column209;

        return $this;
    }

    public function getColumn210(): ?string
    {
        return $this->column210;
    }

    public function setColumn210(?string $column210): self
    {
        $this->column210 = $column210;

        return $this;
    }

    public function getColumn211(): ?string
    {
        return $this->column211;
    }

    public function setColumn211(?string $column211): self
    {
        $this->column211 = $column211;

        return $this;
    }

    public function getColumn212(): ?string
    {
        return $this->column212;
    }

    public function setColumn212(?string $column212): self
    {
        $this->column212 = $column212;

        return $this;
    }

    public function getColumn213(): ?string
    {
        return $this->column213;
    }

    public function setColumn213(?string $column213): self
    {
        $this->column213 = $column213;

        return $this;
    }

    public function getColumn214(): ?string
    {
        return $this->column214;
    }

    public function setColumn214(?string $column214): self
    {
        $this->column214 = $column214;

        return $this;
    }

    public function getColumn215(): ?string
    {
        return $this->column215;
    }

    public function setColumn215(?string $column215): self
    {
        $this->column215 = $column215;

        return $this;
    }

    public function getColumn216(): ?string
    {
        return $this->column216;
    }

    public function setColumn216(?string $column216): self
    {
        $this->column216 = $column216;

        return $this;
    }

    public function getColumn217(): ?string
    {
        return $this->column217;
    }

    public function setColumn217(?string $column217): self
    {
        $this->column217 = $column217;

        return $this;
    }

    public function getColumn218(): ?string
    {
        return $this->column218;
    }

    public function setColumn218(?string $column218): self
    {
        $this->column218 = $column218;

        return $this;
    }

    public function getColumn219(): ?string
    {
        return $this->column219;
    }

    public function setColumn219(?string $column219): self
    {
        $this->column219 = $column219;

        return $this;
    }

    public function getColumn220(): ?string
    {
        return $this->column220;
    }

    public function setColumn220(?string $column220): self
    {
        $this->column220 = $column220;

        return $this;
    }

    public function getColumn221(): ?string
    {
        return $this->column221;
    }

    public function setColumn221(?string $column221): self
    {
        $this->column221 = $column221;

        return $this;
    }

    public function getColumn222(): ?string
    {
        return $this->column222;
    }

    public function setColumn222(?string $column222): self
    {
        $this->column222 = $column222;

        return $this;
    }

    public function getColumn223(): ?string
    {
        return $this->column223;
    }

    public function setColumn223(?string $column223): self
    {
        $this->column223 = $column223;

        return $this;
    }

    public function getColumn224(): ?string
    {
        return $this->column224;
    }

    public function setColumn224(?string $column224): self
    {
        $this->column224 = $column224;

        return $this;
    }

    public function getColumn225(): ?string
    {
        return $this->column225;
    }

    public function setColumn225(?string $column225): self
    {
        $this->column225 = $column225;

        return $this;
    }

    public function getColumn226(): ?string
    {
        return $this->column226;
    }

    public function setColumn226(?string $column226): self
    {
        $this->column226 = $column226;

        return $this;
    }

    public function getColumn227(): ?string
    {
        return $this->column227;
    }

    public function setColumn227(?string $column227): self
    {
        $this->column227 = $column227;

        return $this;
    }

    public function getColumn228(): ?string
    {
        return $this->column228;
    }

    public function setColumn228(?string $column228): self
    {
        $this->column228 = $column228;

        return $this;
    }

    public function getColumn229(): ?string
    {
        return $this->column229;
    }

    public function setColumn229(?string $column229): self
    {
        $this->column229 = $column229;

        return $this;
    }

    public function getColumn230(): ?string
    {
        return $this->column230;
    }

    public function setColumn230(?string $column230): self
    {
        $this->column230 = $column230;

        return $this;
    }

    public function getColumn231(): ?string
    {
        return $this->column231;
    }

    public function setColumn231(?string $column231): self
    {
        $this->column231 = $column231;

        return $this;
    }

    public function getColumn232(): ?string
    {
        return $this->column232;
    }

    public function setColumn232(?string $column232): self
    {
        $this->column232 = $column232;

        return $this;
    }

    public function getColumn233(): ?string
    {
        return $this->column233;
    }

    public function setColumn233(?string $column233): self
    {
        $this->column233 = $column233;

        return $this;
    }

    public function getColumn234(): ?string
    {
        return $this->column234;
    }

    public function setColumn234(?string $column234): self
    {
        $this->column234 = $column234;

        return $this;
    }

    public function getColumn235(): ?string
    {
        return $this->column235;
    }

    public function setColumn235(?string $column235): self
    {
        $this->column235 = $column235;

        return $this;
    }

    public function getColumn236(): ?string
    {
        return $this->column236;
    }

    public function setColumn236(?string $column236): self
    {
        $this->column236 = $column236;

        return $this;
    }

    public function getColumn237(): ?string
    {
        return $this->column237;
    }

    public function setColumn237(?string $column237): self
    {
        $this->column237 = $column237;

        return $this;
    }

    public function getColumn238(): ?string
    {
        return $this->column238;
    }

    public function setColumn238(?string $column238): self
    {
        $this->column238 = $column238;

        return $this;
    }

    public function getColumn239(): ?string
    {
        return $this->column239;
    }

    public function setColumn239(?string $column239): self
    {
        $this->column239 = $column239;

        return $this;
    }

    public function getColumn240(): ?string
    {
        return $this->column240;
    }

    public function setColumn240(?string $column240): self
    {
        $this->column240 = $column240;

        return $this;
    }

    public function getInitialPrice0(): ?string
    {
        return $this->initialPrice0;
    }

    public function setInitialPrice0(?string $initialPrice0): self
    {
        $this->initialPrice0 = $initialPrice0;

        return $this;
    }

    public function getInitialPrice1(): ?string
    {
        return $this->initialPrice1;
    }

    public function setInitialPrice1(?string $initialPrice1): self
    {
        $this->initialPrice1 = $initialPrice1;

        return $this;
    }

    public function getInitialPrice2(): ?string
    {
        return $this->initialPrice2;
    }

    public function setInitialPrice2(?string $initialPrice2): self
    {
        $this->initialPrice2 = $initialPrice2;

        return $this;
    }

    public function getInitialPrice3(): ?string
    {
        return $this->initialPrice3;
    }

    public function setInitialPrice3(?string $initialPrice3): self
    {
        $this->initialPrice3 = $initialPrice3;

        return $this;
    }

    public function getInitialPrice4(): ?string
    {
        return $this->initialPrice4;
    }

    public function setInitialPrice4(?string $initialPrice4): self
    {
        $this->initialPrice4 = $initialPrice4;

        return $this;
    }

    public function getInitialPrice5(): ?string
    {
        return $this->initialPrice5;
    }

    public function setInitialPrice5(?string $initialPrice5): self
    {
        $this->initialPrice5 = $initialPrice5;

        return $this;
    }

    public function getInitialPrice6(): ?string
    {
        return $this->initialPrice6;
    }

    public function setInitialPrice6(?string $initialPrice6): self
    {
        $this->initialPrice6 = $initialPrice6;

        return $this;
    }

    public function getInitialPrice7(): ?string
    {
        return $this->initialPrice7;
    }

    public function setInitialPrice7(?string $initialPrice7): self
    {
        $this->initialPrice7 = $initialPrice7;

        return $this;
    }

    public function getInitialPrice8(): ?string
    {
        return $this->initialPrice8;
    }

    public function setInitialPrice8(?string $initialPrice8): self
    {
        $this->initialPrice8 = $initialPrice8;

        return $this;
    }

    public function getInitialPrice9(): ?string
    {
        return $this->initialPrice9;
    }

    public function setInitialPrice9(?string $initialPrice9): self
    {
        $this->initialPrice9 = $initialPrice9;

        return $this;
    }

    public function getInitialPrice10(): ?string
    {
        return $this->initialPrice10;
    }

    public function setInitialPrice10(?string $initialPrice10): self
    {
        $this->initialPrice10 = $initialPrice10;

        return $this;
    }

    public function getInitialPrice11(): ?string
    {
        return $this->initialPrice11;
    }

    public function setInitialPrice11(?string $initialPrice11): self
    {
        $this->initialPrice11 = $initialPrice11;

        return $this;
    }

    public function getInitialPrice12(): ?string
    {
        return $this->initialPrice12;
    }

    public function setInitialPrice12(?string $initialPrice12): self
    {
        $this->initialPrice12 = $initialPrice12;

        return $this;
    }

    public function getInitialPrice13(): ?string
    {
        return $this->initialPrice13;
    }

    public function setInitialPrice13(?string $initialPrice13): self
    {
        $this->initialPrice13 = $initialPrice13;

        return $this;
    }

    public function getInitialPrice14(): ?string
    {
        return $this->initialPrice14;
    }

    public function setInitialPrice14(?string $initialPrice14): self
    {
        $this->initialPrice14 = $initialPrice14;

        return $this;
    }

    public function getInitialPrice15(): ?string
    {
        return $this->initialPrice15;
    }

    public function setInitialPrice15(?string $initialPrice15): self
    {
        $this->initialPrice15 = $initialPrice15;

        return $this;
    }

    public function getInitialPrice16(): ?string
    {
        return $this->initialPrice16;
    }

    public function setInitialPrice16(?string $initialPrice16): self
    {
        $this->initialPrice16 = $initialPrice16;

        return $this;
    }

    public function getInitialPrice17(): ?string
    {
        return $this->initialPrice17;
    }

    public function setInitialPrice17(?string $initialPrice17): self
    {
        $this->initialPrice17 = $initialPrice17;

        return $this;
    }

    public function getInitialPrice18(): ?string
    {
        return $this->initialPrice18;
    }

    public function setInitialPrice18(?string $initialPrice18): self
    {
        $this->initialPrice18 = $initialPrice18;

        return $this;
    }

    public function getInitialPrice19(): ?string
    {
        return $this->initialPrice19;
    }

    public function setInitialPrice19(?string $initialPrice19): self
    {
        $this->initialPrice19 = $initialPrice19;

        return $this;
    }

    public function getInitialPrice20(): ?string
    {
        return $this->initialPrice20;
    }

    public function setInitialPrice20(?string $initialPrice20): self
    {
        $this->initialPrice20 = $initialPrice20;

        return $this;
    }

    public function getInitialPrice21(): ?string
    {
        return $this->initialPrice21;
    }

    public function setInitialPrice21(?string $initialPrice21): self
    {
        $this->initialPrice21 = $initialPrice21;

        return $this;
    }

    public function getInitialPrice22(): ?string
    {
        return $this->initialPrice22;
    }

    public function setInitialPrice22(?string $initialPrice22): self
    {
        $this->initialPrice22 = $initialPrice22;

        return $this;
    }

    public function getInitialPrice23(): ?string
    {
        return $this->initialPrice23;
    }

    public function setInitialPrice23(?string $initialPrice23): self
    {
        $this->initialPrice23 = $initialPrice23;

        return $this;
    }

    public function getInitialPrice24(): ?string
    {
        return $this->initialPrice24;
    }

    public function setInitialPrice24(?string $initialPrice24): self
    {
        $this->initialPrice24 = $initialPrice24;

        return $this;
    }

    public function getInitialPrice25(): ?string
    {
        return $this->initialPrice25;
    }

    public function setInitialPrice25(?string $initialPrice25): self
    {
        $this->initialPrice25 = $initialPrice25;

        return $this;
    }

    public function getInitialPrice26(): ?string
    {
        return $this->initialPrice26;
    }

    public function setInitialPrice26(?string $initialPrice26): self
    {
        $this->initialPrice26 = $initialPrice26;

        return $this;
    }

    public function getInitialPrice27(): ?string
    {
        return $this->initialPrice27;
    }

    public function setInitialPrice27(?string $initialPrice27): self
    {
        $this->initialPrice27 = $initialPrice27;

        return $this;
    }

    public function getInitialPrice28(): ?string
    {
        return $this->initialPrice28;
    }

    public function setInitialPrice28(?string $initialPrice28): self
    {
        $this->initialPrice28 = $initialPrice28;

        return $this;
    }

    public function getInitialPrice29(): ?string
    {
        return $this->initialPrice29;
    }

    public function setInitialPrice29(?string $initialPrice29): self
    {
        $this->initialPrice29 = $initialPrice29;

        return $this;
    }

    public function getInitialPrice30(): ?string
    {
        return $this->initialPrice30;
    }

    public function setInitialPrice30(?string $initialPrice30): self
    {
        $this->initialPrice30 = $initialPrice30;

        return $this;
    }

    public function getInitialPrice31(): ?string
    {
        return $this->initialPrice31;
    }

    public function setInitialPrice31(?string $initialPrice31): self
    {
        $this->initialPrice31 = $initialPrice31;

        return $this;
    }

    public function getInitialPrice32(): ?string
    {
        return $this->initialPrice32;
    }

    public function setInitialPrice32(?string $initialPrice32): self
    {
        $this->initialPrice32 = $initialPrice32;

        return $this;
    }

    public function getInitialPrice33(): ?string
    {
        return $this->initialPrice33;
    }

    public function setInitialPrice33(?string $initialPrice33): self
    {
        $this->initialPrice33 = $initialPrice33;

        return $this;
    }

    public function getInitialPrice34(): ?string
    {
        return $this->initialPrice34;
    }

    public function setInitialPrice34(?string $initialPrice34): self
    {
        $this->initialPrice34 = $initialPrice34;

        return $this;
    }

    public function getInitialPrice35(): ?string
    {
        return $this->initialPrice35;
    }

    public function setInitialPrice35(?string $initialPrice35): self
    {
        $this->initialPrice35 = $initialPrice35;

        return $this;
    }

    public function getInitialPrice36(): ?string
    {
        return $this->initialPrice36;
    }

    public function setInitialPrice36(?string $initialPrice36): self
    {
        $this->initialPrice36 = $initialPrice36;

        return $this;
    }

    public function getInitialPrice37(): ?string
    {
        return $this->initialPrice37;
    }

    public function setInitialPrice37(?string $initialPrice37): self
    {
        $this->initialPrice37 = $initialPrice37;

        return $this;
    }

    public function getInitialPrice38(): ?string
    {
        return $this->initialPrice38;
    }

    public function setInitialPrice38(?string $initialPrice38): self
    {
        $this->initialPrice38 = $initialPrice38;

        return $this;
    }

    public function getInitialPrice39(): ?string
    {
        return $this->initialPrice39;
    }

    public function setInitialPrice39(?string $initialPrice39): self
    {
        $this->initialPrice39 = $initialPrice39;

        return $this;
    }

    public function getInitialPrice40(): ?string
    {
        return $this->initialPrice40;
    }

    public function setInitialPrice40(?string $initialPrice40): self
    {
        $this->initialPrice40 = $initialPrice40;

        return $this;
    }

    public function getInitialPrice41(): ?string
    {
        return $this->initialPrice41;
    }

    public function setInitialPrice41(?string $initialPrice41): self
    {
        $this->initialPrice41 = $initialPrice41;

        return $this;
    }

    public function getInitialPrice42(): ?string
    {
        return $this->initialPrice42;
    }

    public function setInitialPrice42(?string $initialPrice42): self
    {
        $this->initialPrice42 = $initialPrice42;

        return $this;
    }

    public function getInitialPrice43(): ?string
    {
        return $this->initialPrice43;
    }

    public function setInitialPrice43(?string $initialPrice43): self
    {
        $this->initialPrice43 = $initialPrice43;

        return $this;
    }

    public function getInitialPrice44(): ?string
    {
        return $this->initialPrice44;
    }

    public function setInitialPrice44(?string $initialPrice44): self
    {
        $this->initialPrice44 = $initialPrice44;

        return $this;
    }

    public function getInitialPrice45(): ?string
    {
        return $this->initialPrice45;
    }

    public function setInitialPrice45(?string $initialPrice45): self
    {
        $this->initialPrice45 = $initialPrice45;

        return $this;
    }

    public function getInitialPrice46(): ?string
    {
        return $this->initialPrice46;
    }

    public function setInitialPrice46(?string $initialPrice46): self
    {
        $this->initialPrice46 = $initialPrice46;

        return $this;
    }

    public function getInitialPrice47(): ?string
    {
        return $this->initialPrice47;
    }

    public function setInitialPrice47(?string $initialPrice47): self
    {
        $this->initialPrice47 = $initialPrice47;

        return $this;
    }

    public function getInitialPrice48(): ?string
    {
        return $this->initialPrice48;
    }

    public function setInitialPrice48(?string $initialPrice48): self
    {
        $this->initialPrice48 = $initialPrice48;

        return $this;
    }

    public function getInitialPrice49(): ?string
    {
        return $this->initialPrice49;
    }

    public function setInitialPrice49(?string $initialPrice49): self
    {
        $this->initialPrice49 = $initialPrice49;

        return $this;
    }

    public function getInitialPrice50(): ?string
    {
        return $this->initialPrice50;
    }

    public function setInitialPrice50(?string $initialPrice50): self
    {
        $this->initialPrice50 = $initialPrice50;

        return $this;
    }

    public function getInitialPrice51(): ?string
    {
        return $this->initialPrice51;
    }

    public function setInitialPrice51(?string $initialPrice51): self
    {
        $this->initialPrice51 = $initialPrice51;

        return $this;
    }

    public function getInitialPrice52(): ?string
    {
        return $this->initialPrice52;
    }

    public function setInitialPrice52(?string $initialPrice52): self
    {
        $this->initialPrice52 = $initialPrice52;

        return $this;
    }

    public function getInitialPrice53(): ?string
    {
        return $this->initialPrice53;
    }

    public function setInitialPrice53(?string $initialPrice53): self
    {
        $this->initialPrice53 = $initialPrice53;

        return $this;
    }

    public function getInitialPrice54(): ?string
    {
        return $this->initialPrice54;
    }

    public function setInitialPrice54(?string $initialPrice54): self
    {
        $this->initialPrice54 = $initialPrice54;

        return $this;
    }

    public function getInitialPrice55(): ?string
    {
        return $this->initialPrice55;
    }

    public function setInitialPrice55(?string $initialPrice55): self
    {
        $this->initialPrice55 = $initialPrice55;

        return $this;
    }

    public function getInitialPrice56(): ?string
    {
        return $this->initialPrice56;
    }

    public function setInitialPrice56(?string $initialPrice56): self
    {
        $this->initialPrice56 = $initialPrice56;

        return $this;
    }

    public function getInitialPrice57(): ?string
    {
        return $this->initialPrice57;
    }

    public function setInitialPrice57(?string $initialPrice57): self
    {
        $this->initialPrice57 = $initialPrice57;

        return $this;
    }

    public function getInitialPrice58(): ?string
    {
        return $this->initialPrice58;
    }

    public function setInitialPrice58(?string $initialPrice58): self
    {
        $this->initialPrice58 = $initialPrice58;

        return $this;
    }

    public function getInitialPrice59(): ?string
    {
        return $this->initialPrice59;
    }

    public function setInitialPrice59(?string $initialPrice59): self
    {
        $this->initialPrice59 = $initialPrice59;

        return $this;
    }

    public function getColumn301(): ?string
    {
        return $this->column301;
    }

    public function setColumn301(?string $column301): self
    {
        $this->column301 = $column301;

        return $this;
    }

    public function getColumn302(): ?string
    {
        return $this->column302;
    }

    public function setColumn302(?string $column302): self
    {
        $this->column302 = $column302;

        return $this;
    }
}
