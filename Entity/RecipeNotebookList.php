<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecipeNotebookList.
 *
 * @ORM\Table(name="recipe_notebook_list", indexes={@ORM\Index(name="idx_f33b3c28c563a83", columns={"recipe_39"}), @ORM\Index(name="idx_f33b3c288975f311", columns={"recipe_126"}), @ORM\Index(name="idx_f33b3c28683aff87", columns={"recipe_79"}), @ORM\Index(name="idx_f33b3c288f82d280", columns={"recipe_77"}), @ORM\Index(name="idx_f33b3c282bfc8c02", columns={"recipe_109"}), @ORM\Index(name="idx_f33b3c285f3d346c", columns={"recipe_155"}), @ORM\Index(name="idx_f33b3c28171166b2", columns={"recipe_121"}), @ORM\Index(name="idx_f33b3c2832e7bd43", columns={"recipe_119"}), @ORM\Index(name="idx_f33b3c28d4c575cc", columns={"recipe_42"}), @ORM\Index(name="idx_f33b3c28e00436df", columns={"recipe_133"}), @ORM\Index(name="idx_f33b3c28b65e9159", columns={"recipe_153"}), @ORM\Index(name="idx_f33b3c282f57c0e3", columns={"recipe_150"}), @ORM\Index(name="idx_f33b3c28f90b27b", columns={"recipe_64"}), @ORM\Index(name="idx_f33b3c28d1dfc1", columns={"recipe_139"}), @ORM\Index(name="idx_f33b3c2891f427d8", columns={"recipe_63"}), @ORM\Index(name="idx_f33b3c2898a5d3de", columns={"recipe_88"}), @ORM\Index(name="idx_f33b3c287b510a15", columns={"recipe_38"}), @ORM\Index(name="idx_f33b3c288fd7662", columns={"recipe_60"}), @ORM\Index(name="idx_f33b3c286bfc777f", columns={"recipe_24"}), @ORM\Index(name="idx_f33b3c28d3a8b1d5", columns={"recipe_46"}), @ORM\Index(name="idx_f33b3c28312135bb", columns={"recipe_144"}), @ORM\Index(name="idx_f33b3c2860165624", columns={"recipe_120"}), @ORM\Index(name="idx_f33b3c2896793ea", columns={"recipe_135"}), @ORM\Index(name="idx_f33b3c28d9d87506", columns={"recipe_17"}), @ORM\Index(name="idx_f33b3c28f885e216", columns={"recipe_76"}), @ORM\Index(name="idx_f33b3c28af45a018", columns={"recipe_143"}), @ORM\Index(name="idx_f33b3c284dcc2476", columns={"recipe_41"}), @ORM\Index(name="idx_f33b3c28906ec250", columns={"recipe_136"}), @ORM\Index(name="idx_f33b3c2838977990", columns={"recipe_148"}), @ORM\Index(name="idx_f33b3c2897030649", columns={"recipe_132"}), @ORM\Index(name="idx_f33b3c2888ef1699", columns={"recipe_73"}), @ORM\Index(name="idx_f33b3c28f6b9d209", columns={"recipe_99"}), @ORM\Index(name="idx_f33b3c28ec83d39d", columns={"recipe_33"}), @ORM\Index(name="idx_f33b3c28cab38094", columns={"recipe_56"}), @ORM\Index(name="idx_f33b3c287e60a37c", columns={"recipe_134"}), @ORM\Index(name="idx_f33b3c28414bc134", columns={"recipe_141"}), @ORM\Index(name="idx_f33b3c28e8260fcd", columns={"recipe_7"}), @ORM\Index(name="idx_f33b3c28a3c2455a", columns={"recipe_43"}), @ORM\Index(name="idx_f33b3c281b9683f0", columns={"recipe_21"}), @ORM\Index(name="idx_f33b3c28bc2e558a", columns={"recipe_102"}), @ORM\Index(name="idx_f33b3c28790d6765", columns={"recipe_130"}), @ORM\Index(name="idx_f33b3c286c91b366", columns={"recipe_20"}), @ORM\Index(name="idx_f33b3c2811e64723", columns={"recipe_70"}), @ORM\Index(name="idx_f33b3c286ecdde16", columns={"recipe_128"}), @ORM\Index(name="idx_f33b3c28b1335540", columns={"recipe_157"}), @ORM\Index(name="idx_f33b3c283acb14e0", columns={"recipe_40"}), @ORM\Index(name="idx_f33b3c283b51f168", columns={"recipe_115"}), @ORM\Index(name="idx_f33b3c284b3b05e7", columns={"recipe_110"}), @ORM\Index(name="idx_f33b3c2834109cd2", columns={"recipe_48"}), @ORM\Index(name="idx_f33b3c28145aaf8", columns={"recipe_1"}), @ORM\Index(name="idx_f33b3c28364cf1a2", columns={"recipe_140"}), @ORM\Index(name="idx_f33b3c28c63465d6", columns={"recipe_156"}), @ORM\Index(name="idx_f33b3c281cfb47e9", columns={"recipe_25"}), @ORM\Index(name="idx_f33b3c28522034a6", columns={"recipe_100"}), @ORM\Index(name="idx_f33b3c288f656aad", columns={"recipe_90"}), @ORM\Index(name="idx_f33b3c288808aeb4", columns={"recipe_94"}), @ORM\Index(name="idx_f33b3c284626052d", columns={"recipe_145"}), @ORM\Index(name="idx_f33b3c283da6d0f9", columns={"recipe_44"}), @ORM\Index(name="idx_f33b3c28f8625a3b", columns={"recipe_91"}), @ORM\Index(name="idx_f33b3c28e19ed357", columns={"recipe_66"}), @ORM\Index(name="idx_f33b3c287f1dfed9", columns={"recipe_86"}), @ORM\Index(name="idx_f33b3c2845e08dd5", columns={"recipe_118"}), @ORM\Index(name="idx_f33b3c289b84e30b", columns={"recipe_32"}), @ORM\Index(name="idx_f33b3c28cb29651c", columns={"recipe_103"}), @ORM\Index(name="idx_f33b3c2819caee80", columns={"recipe_129"}), @ORM\Index(name="idx_f33b3c284aa1e06f", columns={"recipe_45"}), @ORM\Index(name="idx_f33b3c289ce92712", columns={"recipe_36"}), @ORM\Index(name="idx_f33b3c28cdde448d", columns={"recipe_52"}), @ORM\Index(name="idx_f33b3c285cfbbc94", columns={"recipe_108"}), @ORM\Index(name="idx_f33b3c28e769f2c6", columns={"recipe_137"}), @ORM\Index(name="idx_f33b3c281f3dcf11", columns={"recipe_78"}), @ORM\Index(name="idx_f33b3c28e1796b7a", columns={"recipe_81"}), @ORM\Index(name="idx_f33b3c2840d124bc", columns={"recipe_14"}), @ORM\Index(name="idx_f33b3c2853bad12e", columns={"recipe_55"}), @ORM\Index(name="idx_f33b3c28789782ed", columns={"recipe_65"}), @ORM\Index(name="idx_f33b3c287121cec6", columns={"recipe_69"}), @ORM\Index(name="idx_f33b3c28624a3b54", columns={"recipe_28"}), @ORM\Index(name="idx_f33b3c2891139ff5", columns={"recipe_84"}), @ORM\Index(name="idx_f33b3c28554df0bf", columns={"recipe_104"}), @ORM\Index(name="idx_f33b3c28616b0b81", columns={"recipe_92"}), @ORM\Index(name="idx_f33b3c2824bde1b8", columns={"recipe_54"}), @ORM\Index(name="idx_f33b3c2885f21653", columns={"recipe_26"}), @ORM\Index(name="idx_f33b3c28cc44a105", columns={"recipe_107"}), @ORM\Index(name="idx_f33b3c2830bbd033", columns={"recipe_11"}), @ORM\Index(name="idx_f33b3c2866e177b5", columns={"recipe_71"}), @ORM\Index(name="idx_f33b3c28ffe8260f", columns={"recipe_72"}), @ORM\Index(name="idx_f33b3c2825270430", columns={"recipe_101"}), @ORM\Index(name="idx_f33b3c287ffa46f4", columns={"recipe_61"}), @ORM\Index(name="idx_f33b3c28f2f526c5", columns={"recipe_27"}), @ORM\Index(name="idx_f33b3c288e183708", columns={"recipe_122"}), @ORM\Index(name="idx_f33b3c28712f5e77", columns={"recipe_4"}), @ORM\Index(name="idx_f33b3c28ff0f9e22", columns={"recipe_95"}), @ORM\Index(name="idx_f33b3c283e605801", columns={"recipe_19"}), @ORM\Index(name="idx_f33b3c28ebee1784", columns={"recipe_37"}), @ORM\Index(name="idx_f33b3c28efa2e348", columns={"recipe_89"}), @ORM\Index(name="idx_f33b3c28a53564cb", columns={"recipe_112"}), @ORM\Index(name="idx_f33b3c2828db2b1", columns={"recipe_31"}), @ORM\Index(name="idx_f33b3c285850f075", columns={"recipe_151"}), @ORM\Index(name="idx_f33b3c28107ca2ab", columns={"recipe_125"}), @ORM\Index(name="idx_f33b3c28bad9741b", columns={"recipe_53"}), @ORM\Index(name="idx_f33b3c28984cfb42", columns={"recipe_2"}), @ORM\Index(name="idx_f33b3c28f598e2dc", columns={"recipe_23"}), @ORM\Index(name="idx_f33b3c28224ac029", columns={"recipe_105"}), @ORM\Index(name="idx_f33b3c28aedf4590", columns={"recipe_16"}), @ORM\Index(name="idx_f33b3c2872e7463e", columns={"recipe_34"}), @ORM\Index(name="idx_f33b3c28bb439193", columns={"recipe_106"}), @ORM\Index(name="idx_f33b3c282d0bad93", columns={"recipe_58"}), @ORM\Index(name="idx_f33b3c28e614af63", columns={"recipe_85"}), @ORM\Index(name="idx_f33b3c2876429a6e", columns={"recipe_0"}), @ORM\Index(name="idx_f33b3c284f904906", columns={"recipe_149"}), @ORM\Index(name="idx_f33b3c28829fd24a", columns={"recipe_22"}), @ORM\Index(name="idx_f33b3c28f9e22ca", columns={"recipe_9"}), @ORM\Index(name="idx_f33b3c28677b923d", columns={"recipe_124"}), @ORM\Index(name="idx_f33b3c2823d025a1", columns={"recipe_50"}), @ORM\Index(name="idx_f33b3c28166c3b17", columns={"recipe_93"}), @ORM\Index(name="idx_f33b3c283c3c3571", columns={"recipe_111"}), @ORM\Index(name="idx_f33b3c28df2f5497", columns={"recipe_146"}), @ORM\Index(name="idx_f33b3c28168b833a", columns={"recipe_74"}), @ORM\Index(name="idx_f33b3c28f91f079e", columns={"recipe_123"}), @ORM\Index(name="idx_f33b3c28d842908e", columns={"recipe_142"}), @ORM\Index(name="idx_f33b3c2881ace4f", columns={"recipe_87"}), @ORM\Index(name="idx_f33b3c28154d0bc2", columns={"recipe_29"}), @ORM\Index(name="idx_f33b3c28618cb3ac", columns={"recipe_75"}), @ORM\Index(name="idx_f33b3c2837d6142a", columns={"recipe_15"}), @ORM\Index(name="idx_f33b3c28e0a57f3", columns={"recipe_131"}), @ORM\Index(name="idx_f33b3c281101ff0e", columns={"recipe_97"}), @ORM\Index(name="idx_f33b3c284317ac44", columns={"recipe_49"}), @ORM\Index(name="idx_f33b3c28c159a1cf", columns={"recipe_152"}), @ORM\Index(name="idx_f33b3c28967e5bec", columns={"recipe_80"}), @ORM\Index(name="idx_f33b3c28568b7847", columns={"recipe_159"}), @ORM\Index(name="idx_f33b3c289f213f5b", columns={"recipe_6"}), @ORM\Index(name="idx_f33b3c285e076a8", columns={"recipe_35"}), @ORM\Index(name="idx_f33b3c28a4af8143", columns={"recipe_47"}), @ORM\Index(name="idx_f33b3c2877d6ef57", columns={"recipe_138"}), @ORM\Index(name="idx_f33b3c28218c48d1", columns={"recipe_158"}), @ORM\Index(name="idx_f33b3c28a9b28189", columns={"recipe_12"}), @ORM\Index(name="idx_f33b3c28ef4bcbd4", columns={"recipe_3"}), @ORM\Index(name="idx_f33b3c28fe72c387", columns={"recipe_127"}), @ORM\Index(name="idx_f33b3c28f770a56", columns={"recipe_83"}), @ORM\Index(name="idx_f33b3c28626fe50", columns={"recipe_68"}), @ORM\Index(name="idx_f33b3c28d55f9044", columns={"recipe_117"}), @ORM\Index(name="idx_f33b3c28758a8227", columns={"recipe_30"}), @ORM\Index(name="idx_f33b3c28a258a0d2", columns={"recipe_116"}), @ORM\Index(name="idx_f33b3c28a8286401", columns={"recipe_147"}), @ORM\Index(name="idx_f33b3c286286ee1", columns={"recipe_5"}), @ORM\Index(name="idx_f33b3c287899125c", columns={"recipe_8"}), @ORM\Index(name="idx_f33b3c2847bce0a5", columns={"recipe_10"}), @ORM\Index(name="idx_f33b3c2849676897", columns={"recipe_18"}), @ORM\Index(name="idx_f33b3c289699e3c1", columns={"recipe_67"}), @ORM\Index(name="idx_f33b3c2854d71537", columns={"recipe_51"}), @ORM\Index(name="idx_f33b3c28e6f3174e", columns={"recipe_62"}), @ORM\Index(name="idx_f33b3c2881bee29f", columns={"recipe_98"}), @ORM\Index(name="idx_f33b3c28d232545d", columns={"recipe_113"}), @ORM\Index(name="idx_f33b3c284c56c1fe", columns={"recipe_114"}), @ORM\Index(name="idx_f33b3c28bdb4b002", columns={"recipe_57"}), @ORM\Index(name="idx_f33b3c28deb5b11f", columns={"recipe_13"}), @ORM\Index(name="idx_f33b3c28283a04fa", columns={"recipe_154"}), @ORM\Index(name="idx_f33b3c285a0c9d05", columns={"recipe_59"}), @ORM\Index(name="idx_f33b3c2878703ac0", columns={"recipe_82"}), @ORM\Index(name="idx_f33b3c286606cf98", columns={"recipe_96"})})
 * @ORM\Entity
 */
class RecipeNotebookList
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recipe_notebook_list_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_159", referencedColumnName="pk")
     * })
     */
    private $recipe159;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_158", referencedColumnName="pk")
     * })
     */
    private $recipe158;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_157", referencedColumnName="pk")
     * })
     */
    private $recipe157;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_156", referencedColumnName="pk")
     * })
     */
    private $recipe156;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_155", referencedColumnName="pk")
     * })
     */
    private $recipe155;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_154", referencedColumnName="pk")
     * })
     */
    private $recipe154;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_153", referencedColumnName="pk")
     * })
     */
    private $recipe153;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_152", referencedColumnName="pk")
     * })
     */
    private $recipe152;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_151", referencedColumnName="pk")
     * })
     */
    private $recipe151;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_150", referencedColumnName="pk")
     * })
     */
    private $recipe150;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_149", referencedColumnName="pk")
     * })
     */
    private $recipe149;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_148", referencedColumnName="pk")
     * })
     */
    private $recipe148;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_147", referencedColumnName="pk")
     * })
     */
    private $recipe147;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_146", referencedColumnName="pk")
     * })
     */
    private $recipe146;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_145", referencedColumnName="pk")
     * })
     */
    private $recipe145;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_144", referencedColumnName="pk")
     * })
     */
    private $recipe144;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_143", referencedColumnName="pk")
     * })
     */
    private $recipe143;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_142", referencedColumnName="pk")
     * })
     */
    private $recipe142;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_141", referencedColumnName="pk")
     * })
     */
    private $recipe141;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_140", referencedColumnName="pk")
     * })
     */
    private $recipe140;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_139", referencedColumnName="pk")
     * })
     */
    private $recipe139;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_138", referencedColumnName="pk")
     * })
     */
    private $recipe138;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_137", referencedColumnName="pk")
     * })
     */
    private $recipe137;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_136", referencedColumnName="pk")
     * })
     */
    private $recipe136;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_135", referencedColumnName="pk")
     * })
     */
    private $recipe135;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_134", referencedColumnName="pk")
     * })
     */
    private $recipe134;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_133", referencedColumnName="pk")
     * })
     */
    private $recipe133;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_132", referencedColumnName="pk")
     * })
     */
    private $recipe132;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_131", referencedColumnName="pk")
     * })
     */
    private $recipe131;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_130", referencedColumnName="pk")
     * })
     */
    private $recipe130;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_129", referencedColumnName="pk")
     * })
     */
    private $recipe129;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_128", referencedColumnName="pk")
     * })
     */
    private $recipe128;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_127", referencedColumnName="pk")
     * })
     */
    private $recipe127;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_126", referencedColumnName="pk")
     * })
     */
    private $recipe126;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_125", referencedColumnName="pk")
     * })
     */
    private $recipe125;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_124", referencedColumnName="pk")
     * })
     */
    private $recipe124;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_123", referencedColumnName="pk")
     * })
     */
    private $recipe123;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_122", referencedColumnName="pk")
     * })
     */
    private $recipe122;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_121", referencedColumnName="pk")
     * })
     */
    private $recipe121;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_120", referencedColumnName="pk")
     * })
     */
    private $recipe120;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_119", referencedColumnName="pk")
     * })
     */
    private $recipe119;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_118", referencedColumnName="pk")
     * })
     */
    private $recipe118;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_117", referencedColumnName="pk")
     * })
     */
    private $recipe117;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_116", referencedColumnName="pk")
     * })
     */
    private $recipe116;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_115", referencedColumnName="pk")
     * })
     */
    private $recipe115;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_114", referencedColumnName="pk")
     * })
     */
    private $recipe114;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_113", referencedColumnName="pk")
     * })
     */
    private $recipe113;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_112", referencedColumnName="pk")
     * })
     */
    private $recipe112;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_111", referencedColumnName="pk")
     * })
     */
    private $recipe111;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_110", referencedColumnName="pk")
     * })
     */
    private $recipe110;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_109", referencedColumnName="pk")
     * })
     */
    private $recipe109;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_108", referencedColumnName="pk")
     * })
     */
    private $recipe108;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_107", referencedColumnName="pk")
     * })
     */
    private $recipe107;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_106", referencedColumnName="pk")
     * })
     */
    private $recipe106;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_105", referencedColumnName="pk")
     * })
     */
    private $recipe105;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_104", referencedColumnName="pk")
     * })
     */
    private $recipe104;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_103", referencedColumnName="pk")
     * })
     */
    private $recipe103;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_102", referencedColumnName="pk")
     * })
     */
    private $recipe102;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_101", referencedColumnName="pk")
     * })
     */
    private $recipe101;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_100", referencedColumnName="pk")
     * })
     */
    private $recipe100;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_99", referencedColumnName="pk")
     * })
     */
    private $recipe99;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_98", referencedColumnName="pk")
     * })
     */
    private $recipe98;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_97", referencedColumnName="pk")
     * })
     */
    private $recipe97;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_96", referencedColumnName="pk")
     * })
     */
    private $recipe96;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_95", referencedColumnName="pk")
     * })
     */
    private $recipe95;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_94", referencedColumnName="pk")
     * })
     */
    private $recipe94;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_93", referencedColumnName="pk")
     * })
     */
    private $recipe93;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_92", referencedColumnName="pk")
     * })
     */
    private $recipe92;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_91", referencedColumnName="pk")
     * })
     */
    private $recipe91;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_90", referencedColumnName="pk")
     * })
     */
    private $recipe90;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_89", referencedColumnName="pk")
     * })
     */
    private $recipe89;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_88", referencedColumnName="pk")
     * })
     */
    private $recipe88;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_87", referencedColumnName="pk")
     * })
     */
    private $recipe87;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_86", referencedColumnName="pk")
     * })
     */
    private $recipe86;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_85", referencedColumnName="pk")
     * })
     */
    private $recipe85;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_84", referencedColumnName="pk")
     * })
     */
    private $recipe84;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_83", referencedColumnName="pk")
     * })
     */
    private $recipe83;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_82", referencedColumnName="pk")
     * })
     */
    private $recipe82;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_81", referencedColumnName="pk")
     * })
     */
    private $recipe81;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_80", referencedColumnName="pk")
     * })
     */
    private $recipe80;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_79", referencedColumnName="pk")
     * })
     */
    private $recipe79;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_78", referencedColumnName="pk")
     * })
     */
    private $recipe78;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_77", referencedColumnName="pk")
     * })
     */
    private $recipe77;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_76", referencedColumnName="pk")
     * })
     */
    private $recipe76;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_75", referencedColumnName="pk")
     * })
     */
    private $recipe75;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_74", referencedColumnName="pk")
     * })
     */
    private $recipe74;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_73", referencedColumnName="pk")
     * })
     */
    private $recipe73;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_72", referencedColumnName="pk")
     * })
     */
    private $recipe72;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_71", referencedColumnName="pk")
     * })
     */
    private $recipe71;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_70", referencedColumnName="pk")
     * })
     */
    private $recipe70;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_69", referencedColumnName="pk")
     * })
     */
    private $recipe69;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_68", referencedColumnName="pk")
     * })
     */
    private $recipe68;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_67", referencedColumnName="pk")
     * })
     */
    private $recipe67;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_66", referencedColumnName="pk")
     * })
     */
    private $recipe66;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_65", referencedColumnName="pk")
     * })
     */
    private $recipe65;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_64", referencedColumnName="pk")
     * })
     */
    private $recipe64;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_63", referencedColumnName="pk")
     * })
     */
    private $recipe63;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_62", referencedColumnName="pk")
     * })
     */
    private $recipe62;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_61", referencedColumnName="pk")
     * })
     */
    private $recipe61;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_60", referencedColumnName="pk")
     * })
     */
    private $recipe60;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_59", referencedColumnName="pk")
     * })
     */
    private $recipe59;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_58", referencedColumnName="pk")
     * })
     */
    private $recipe58;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_57", referencedColumnName="pk")
     * })
     */
    private $recipe57;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_56", referencedColumnName="pk")
     * })
     */
    private $recipe56;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_55", referencedColumnName="pk")
     * })
     */
    private $recipe55;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_54", referencedColumnName="pk")
     * })
     */
    private $recipe54;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_53", referencedColumnName="pk")
     * })
     */
    private $recipe53;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_52", referencedColumnName="pk")
     * })
     */
    private $recipe52;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_51", referencedColumnName="pk")
     * })
     */
    private $recipe51;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_50", referencedColumnName="pk")
     * })
     */
    private $recipe50;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_49", referencedColumnName="pk")
     * })
     */
    private $recipe49;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_48", referencedColumnName="pk")
     * })
     */
    private $recipe48;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_47", referencedColumnName="pk")
     * })
     */
    private $recipe47;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_46", referencedColumnName="pk")
     * })
     */
    private $recipe46;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_45", referencedColumnName="pk")
     * })
     */
    private $recipe45;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_44", referencedColumnName="pk")
     * })
     */
    private $recipe44;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_43", referencedColumnName="pk")
     * })
     */
    private $recipe43;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_42", referencedColumnName="pk")
     * })
     */
    private $recipe42;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_41", referencedColumnName="pk")
     * })
     */
    private $recipe41;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_40", referencedColumnName="pk")
     * })
     */
    private $recipe40;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_39", referencedColumnName="pk")
     * })
     */
    private $recipe39;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_38", referencedColumnName="pk")
     * })
     */
    private $recipe38;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_37", referencedColumnName="pk")
     * })
     */
    private $recipe37;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_36", referencedColumnName="pk")
     * })
     */
    private $recipe36;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_35", referencedColumnName="pk")
     * })
     */
    private $recipe35;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_34", referencedColumnName="pk")
     * })
     */
    private $recipe34;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_33", referencedColumnName="pk")
     * })
     */
    private $recipe33;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_32", referencedColumnName="pk")
     * })
     */
    private $recipe32;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_31", referencedColumnName="pk")
     * })
     */
    private $recipe31;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_30", referencedColumnName="pk")
     * })
     */
    private $recipe30;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_29", referencedColumnName="pk")
     * })
     */
    private $recipe29;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_28", referencedColumnName="pk")
     * })
     */
    private $recipe28;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_27", referencedColumnName="pk")
     * })
     */
    private $recipe27;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_26", referencedColumnName="pk")
     * })
     */
    private $recipe26;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_25", referencedColumnName="pk")
     * })
     */
    private $recipe25;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_24", referencedColumnName="pk")
     * })
     */
    private $recipe24;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_23", referencedColumnName="pk")
     * })
     */
    private $recipe23;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_22", referencedColumnName="pk")
     * })
     */
    private $recipe22;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_21", referencedColumnName="pk")
     * })
     */
    private $recipe21;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_20", referencedColumnName="pk")
     * })
     */
    private $recipe20;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_19", referencedColumnName="pk")
     * })
     */
    private $recipe19;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_18", referencedColumnName="pk")
     * })
     */
    private $recipe18;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_17", referencedColumnName="pk")
     * })
     */
    private $recipe17;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_16", referencedColumnName="pk")
     * })
     */
    private $recipe16;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_15", referencedColumnName="pk")
     * })
     */
    private $recipe15;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_14", referencedColumnName="pk")
     * })
     */
    private $recipe14;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_13", referencedColumnName="pk")
     * })
     */
    private $recipe13;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_12", referencedColumnName="pk")
     * })
     */
    private $recipe12;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_11", referencedColumnName="pk")
     * })
     */
    private $recipe11;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_10", referencedColumnName="pk")
     * })
     */
    private $recipe10;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_9", referencedColumnName="pk")
     * })
     */
    private $recipe9;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_8", referencedColumnName="pk")
     * })
     */
    private $recipe8;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_7", referencedColumnName="pk")
     * })
     */
    private $recipe7;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_6", referencedColumnName="pk")
     * })
     */
    private $recipe6;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_5", referencedColumnName="pk")
     * })
     */
    private $recipe5;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_4", referencedColumnName="pk")
     * })
     */
    private $recipe4;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_3", referencedColumnName="pk")
     * })
     */
    private $recipe3;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_2", referencedColumnName="pk")
     * })
     */
    private $recipe2;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_1", referencedColumnName="pk")
     * })
     */
    private $recipe1;

    /**
     * @var Recipe
     *
     * @ORM\ManyToOne(targetEntity="Recipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_0", referencedColumnName="pk")
     * })
     */
    private $recipe0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getRecipe159(): ?Recipe
    {
        return $this->recipe159;
    }

    public function setRecipe159(?Recipe $recipe159): self
    {
        $this->recipe159 = $recipe159;

        return $this;
    }

    public function getRecipe158(): ?Recipe
    {
        return $this->recipe158;
    }

    public function setRecipe158(?Recipe $recipe158): self
    {
        $this->recipe158 = $recipe158;

        return $this;
    }

    public function getRecipe157(): ?Recipe
    {
        return $this->recipe157;
    }

    public function setRecipe157(?Recipe $recipe157): self
    {
        $this->recipe157 = $recipe157;

        return $this;
    }

    public function getRecipe156(): ?Recipe
    {
        return $this->recipe156;
    }

    public function setRecipe156(?Recipe $recipe156): self
    {
        $this->recipe156 = $recipe156;

        return $this;
    }

    public function getRecipe155(): ?Recipe
    {
        return $this->recipe155;
    }

    public function setRecipe155(?Recipe $recipe155): self
    {
        $this->recipe155 = $recipe155;

        return $this;
    }

    public function getRecipe154(): ?Recipe
    {
        return $this->recipe154;
    }

    public function setRecipe154(?Recipe $recipe154): self
    {
        $this->recipe154 = $recipe154;

        return $this;
    }

    public function getRecipe153(): ?Recipe
    {
        return $this->recipe153;
    }

    public function setRecipe153(?Recipe $recipe153): self
    {
        $this->recipe153 = $recipe153;

        return $this;
    }

    public function getRecipe152(): ?Recipe
    {
        return $this->recipe152;
    }

    public function setRecipe152(?Recipe $recipe152): self
    {
        $this->recipe152 = $recipe152;

        return $this;
    }

    public function getRecipe151(): ?Recipe
    {
        return $this->recipe151;
    }

    public function setRecipe151(?Recipe $recipe151): self
    {
        $this->recipe151 = $recipe151;

        return $this;
    }

    public function getRecipe150(): ?Recipe
    {
        return $this->recipe150;
    }

    public function setRecipe150(?Recipe $recipe150): self
    {
        $this->recipe150 = $recipe150;

        return $this;
    }

    public function getRecipe149(): ?Recipe
    {
        return $this->recipe149;
    }

    public function setRecipe149(?Recipe $recipe149): self
    {
        $this->recipe149 = $recipe149;

        return $this;
    }

    public function getRecipe148(): ?Recipe
    {
        return $this->recipe148;
    }

    public function setRecipe148(?Recipe $recipe148): self
    {
        $this->recipe148 = $recipe148;

        return $this;
    }

    public function getRecipe147(): ?Recipe
    {
        return $this->recipe147;
    }

    public function setRecipe147(?Recipe $recipe147): self
    {
        $this->recipe147 = $recipe147;

        return $this;
    }

    public function getRecipe146(): ?Recipe
    {
        return $this->recipe146;
    }

    public function setRecipe146(?Recipe $recipe146): self
    {
        $this->recipe146 = $recipe146;

        return $this;
    }

    public function getRecipe145(): ?Recipe
    {
        return $this->recipe145;
    }

    public function setRecipe145(?Recipe $recipe145): self
    {
        $this->recipe145 = $recipe145;

        return $this;
    }

    public function getRecipe144(): ?Recipe
    {
        return $this->recipe144;
    }

    public function setRecipe144(?Recipe $recipe144): self
    {
        $this->recipe144 = $recipe144;

        return $this;
    }

    public function getRecipe143(): ?Recipe
    {
        return $this->recipe143;
    }

    public function setRecipe143(?Recipe $recipe143): self
    {
        $this->recipe143 = $recipe143;

        return $this;
    }

    public function getRecipe142(): ?Recipe
    {
        return $this->recipe142;
    }

    public function setRecipe142(?Recipe $recipe142): self
    {
        $this->recipe142 = $recipe142;

        return $this;
    }

    public function getRecipe141(): ?Recipe
    {
        return $this->recipe141;
    }

    public function setRecipe141(?Recipe $recipe141): self
    {
        $this->recipe141 = $recipe141;

        return $this;
    }

    public function getRecipe140(): ?Recipe
    {
        return $this->recipe140;
    }

    public function setRecipe140(?Recipe $recipe140): self
    {
        $this->recipe140 = $recipe140;

        return $this;
    }

    public function getRecipe139(): ?Recipe
    {
        return $this->recipe139;
    }

    public function setRecipe139(?Recipe $recipe139): self
    {
        $this->recipe139 = $recipe139;

        return $this;
    }

    public function getRecipe138(): ?Recipe
    {
        return $this->recipe138;
    }

    public function setRecipe138(?Recipe $recipe138): self
    {
        $this->recipe138 = $recipe138;

        return $this;
    }

    public function getRecipe137(): ?Recipe
    {
        return $this->recipe137;
    }

    public function setRecipe137(?Recipe $recipe137): self
    {
        $this->recipe137 = $recipe137;

        return $this;
    }

    public function getRecipe136(): ?Recipe
    {
        return $this->recipe136;
    }

    public function setRecipe136(?Recipe $recipe136): self
    {
        $this->recipe136 = $recipe136;

        return $this;
    }

    public function getRecipe135(): ?Recipe
    {
        return $this->recipe135;
    }

    public function setRecipe135(?Recipe $recipe135): self
    {
        $this->recipe135 = $recipe135;

        return $this;
    }

    public function getRecipe134(): ?Recipe
    {
        return $this->recipe134;
    }

    public function setRecipe134(?Recipe $recipe134): self
    {
        $this->recipe134 = $recipe134;

        return $this;
    }

    public function getRecipe133(): ?Recipe
    {
        return $this->recipe133;
    }

    public function setRecipe133(?Recipe $recipe133): self
    {
        $this->recipe133 = $recipe133;

        return $this;
    }

    public function getRecipe132(): ?Recipe
    {
        return $this->recipe132;
    }

    public function setRecipe132(?Recipe $recipe132): self
    {
        $this->recipe132 = $recipe132;

        return $this;
    }

    public function getRecipe131(): ?Recipe
    {
        return $this->recipe131;
    }

    public function setRecipe131(?Recipe $recipe131): self
    {
        $this->recipe131 = $recipe131;

        return $this;
    }

    public function getRecipe130(): ?Recipe
    {
        return $this->recipe130;
    }

    public function setRecipe130(?Recipe $recipe130): self
    {
        $this->recipe130 = $recipe130;

        return $this;
    }

    public function getRecipe129(): ?Recipe
    {
        return $this->recipe129;
    }

    public function setRecipe129(?Recipe $recipe129): self
    {
        $this->recipe129 = $recipe129;

        return $this;
    }

    public function getRecipe128(): ?Recipe
    {
        return $this->recipe128;
    }

    public function setRecipe128(?Recipe $recipe128): self
    {
        $this->recipe128 = $recipe128;

        return $this;
    }

    public function getRecipe127(): ?Recipe
    {
        return $this->recipe127;
    }

    public function setRecipe127(?Recipe $recipe127): self
    {
        $this->recipe127 = $recipe127;

        return $this;
    }

    public function getRecipe126(): ?Recipe
    {
        return $this->recipe126;
    }

    public function setRecipe126(?Recipe $recipe126): self
    {
        $this->recipe126 = $recipe126;

        return $this;
    }

    public function getRecipe125(): ?Recipe
    {
        return $this->recipe125;
    }

    public function setRecipe125(?Recipe $recipe125): self
    {
        $this->recipe125 = $recipe125;

        return $this;
    }

    public function getRecipe124(): ?Recipe
    {
        return $this->recipe124;
    }

    public function setRecipe124(?Recipe $recipe124): self
    {
        $this->recipe124 = $recipe124;

        return $this;
    }

    public function getRecipe123(): ?Recipe
    {
        return $this->recipe123;
    }

    public function setRecipe123(?Recipe $recipe123): self
    {
        $this->recipe123 = $recipe123;

        return $this;
    }

    public function getRecipe122(): ?Recipe
    {
        return $this->recipe122;
    }

    public function setRecipe122(?Recipe $recipe122): self
    {
        $this->recipe122 = $recipe122;

        return $this;
    }

    public function getRecipe121(): ?Recipe
    {
        return $this->recipe121;
    }

    public function setRecipe121(?Recipe $recipe121): self
    {
        $this->recipe121 = $recipe121;

        return $this;
    }

    public function getRecipe120(): ?Recipe
    {
        return $this->recipe120;
    }

    public function setRecipe120(?Recipe $recipe120): self
    {
        $this->recipe120 = $recipe120;

        return $this;
    }

    public function getRecipe119(): ?Recipe
    {
        return $this->recipe119;
    }

    public function setRecipe119(?Recipe $recipe119): self
    {
        $this->recipe119 = $recipe119;

        return $this;
    }

    public function getRecipe118(): ?Recipe
    {
        return $this->recipe118;
    }

    public function setRecipe118(?Recipe $recipe118): self
    {
        $this->recipe118 = $recipe118;

        return $this;
    }

    public function getRecipe117(): ?Recipe
    {
        return $this->recipe117;
    }

    public function setRecipe117(?Recipe $recipe117): self
    {
        $this->recipe117 = $recipe117;

        return $this;
    }

    public function getRecipe116(): ?Recipe
    {
        return $this->recipe116;
    }

    public function setRecipe116(?Recipe $recipe116): self
    {
        $this->recipe116 = $recipe116;

        return $this;
    }

    public function getRecipe115(): ?Recipe
    {
        return $this->recipe115;
    }

    public function setRecipe115(?Recipe $recipe115): self
    {
        $this->recipe115 = $recipe115;

        return $this;
    }

    public function getRecipe114(): ?Recipe
    {
        return $this->recipe114;
    }

    public function setRecipe114(?Recipe $recipe114): self
    {
        $this->recipe114 = $recipe114;

        return $this;
    }

    public function getRecipe113(): ?Recipe
    {
        return $this->recipe113;
    }

    public function setRecipe113(?Recipe $recipe113): self
    {
        $this->recipe113 = $recipe113;

        return $this;
    }

    public function getRecipe112(): ?Recipe
    {
        return $this->recipe112;
    }

    public function setRecipe112(?Recipe $recipe112): self
    {
        $this->recipe112 = $recipe112;

        return $this;
    }

    public function getRecipe111(): ?Recipe
    {
        return $this->recipe111;
    }

    public function setRecipe111(?Recipe $recipe111): self
    {
        $this->recipe111 = $recipe111;

        return $this;
    }

    public function getRecipe110(): ?Recipe
    {
        return $this->recipe110;
    }

    public function setRecipe110(?Recipe $recipe110): self
    {
        $this->recipe110 = $recipe110;

        return $this;
    }

    public function getRecipe109(): ?Recipe
    {
        return $this->recipe109;
    }

    public function setRecipe109(?Recipe $recipe109): self
    {
        $this->recipe109 = $recipe109;

        return $this;
    }

    public function getRecipe108(): ?Recipe
    {
        return $this->recipe108;
    }

    public function setRecipe108(?Recipe $recipe108): self
    {
        $this->recipe108 = $recipe108;

        return $this;
    }

    public function getRecipe107(): ?Recipe
    {
        return $this->recipe107;
    }

    public function setRecipe107(?Recipe $recipe107): self
    {
        $this->recipe107 = $recipe107;

        return $this;
    }

    public function getRecipe106(): ?Recipe
    {
        return $this->recipe106;
    }

    public function setRecipe106(?Recipe $recipe106): self
    {
        $this->recipe106 = $recipe106;

        return $this;
    }

    public function getRecipe105(): ?Recipe
    {
        return $this->recipe105;
    }

    public function setRecipe105(?Recipe $recipe105): self
    {
        $this->recipe105 = $recipe105;

        return $this;
    }

    public function getRecipe104(): ?Recipe
    {
        return $this->recipe104;
    }

    public function setRecipe104(?Recipe $recipe104): self
    {
        $this->recipe104 = $recipe104;

        return $this;
    }

    public function getRecipe103(): ?Recipe
    {
        return $this->recipe103;
    }

    public function setRecipe103(?Recipe $recipe103): self
    {
        $this->recipe103 = $recipe103;

        return $this;
    }

    public function getRecipe102(): ?Recipe
    {
        return $this->recipe102;
    }

    public function setRecipe102(?Recipe $recipe102): self
    {
        $this->recipe102 = $recipe102;

        return $this;
    }

    public function getRecipe101(): ?Recipe
    {
        return $this->recipe101;
    }

    public function setRecipe101(?Recipe $recipe101): self
    {
        $this->recipe101 = $recipe101;

        return $this;
    }

    public function getRecipe100(): ?Recipe
    {
        return $this->recipe100;
    }

    public function setRecipe100(?Recipe $recipe100): self
    {
        $this->recipe100 = $recipe100;

        return $this;
    }

    public function getRecipe99(): ?Recipe
    {
        return $this->recipe99;
    }

    public function setRecipe99(?Recipe $recipe99): self
    {
        $this->recipe99 = $recipe99;

        return $this;
    }

    public function getRecipe98(): ?Recipe
    {
        return $this->recipe98;
    }

    public function setRecipe98(?Recipe $recipe98): self
    {
        $this->recipe98 = $recipe98;

        return $this;
    }

    public function getRecipe97(): ?Recipe
    {
        return $this->recipe97;
    }

    public function setRecipe97(?Recipe $recipe97): self
    {
        $this->recipe97 = $recipe97;

        return $this;
    }

    public function getRecipe96(): ?Recipe
    {
        return $this->recipe96;
    }

    public function setRecipe96(?Recipe $recipe96): self
    {
        $this->recipe96 = $recipe96;

        return $this;
    }

    public function getRecipe95(): ?Recipe
    {
        return $this->recipe95;
    }

    public function setRecipe95(?Recipe $recipe95): self
    {
        $this->recipe95 = $recipe95;

        return $this;
    }

    public function getRecipe94(): ?Recipe
    {
        return $this->recipe94;
    }

    public function setRecipe94(?Recipe $recipe94): self
    {
        $this->recipe94 = $recipe94;

        return $this;
    }

    public function getRecipe93(): ?Recipe
    {
        return $this->recipe93;
    }

    public function setRecipe93(?Recipe $recipe93): self
    {
        $this->recipe93 = $recipe93;

        return $this;
    }

    public function getRecipe92(): ?Recipe
    {
        return $this->recipe92;
    }

    public function setRecipe92(?Recipe $recipe92): self
    {
        $this->recipe92 = $recipe92;

        return $this;
    }

    public function getRecipe91(): ?Recipe
    {
        return $this->recipe91;
    }

    public function setRecipe91(?Recipe $recipe91): self
    {
        $this->recipe91 = $recipe91;

        return $this;
    }

    public function getRecipe90(): ?Recipe
    {
        return $this->recipe90;
    }

    public function setRecipe90(?Recipe $recipe90): self
    {
        $this->recipe90 = $recipe90;

        return $this;
    }

    public function getRecipe89(): ?Recipe
    {
        return $this->recipe89;
    }

    public function setRecipe89(?Recipe $recipe89): self
    {
        $this->recipe89 = $recipe89;

        return $this;
    }

    public function getRecipe88(): ?Recipe
    {
        return $this->recipe88;
    }

    public function setRecipe88(?Recipe $recipe88): self
    {
        $this->recipe88 = $recipe88;

        return $this;
    }

    public function getRecipe87(): ?Recipe
    {
        return $this->recipe87;
    }

    public function setRecipe87(?Recipe $recipe87): self
    {
        $this->recipe87 = $recipe87;

        return $this;
    }

    public function getRecipe86(): ?Recipe
    {
        return $this->recipe86;
    }

    public function setRecipe86(?Recipe $recipe86): self
    {
        $this->recipe86 = $recipe86;

        return $this;
    }

    public function getRecipe85(): ?Recipe
    {
        return $this->recipe85;
    }

    public function setRecipe85(?Recipe $recipe85): self
    {
        $this->recipe85 = $recipe85;

        return $this;
    }

    public function getRecipe84(): ?Recipe
    {
        return $this->recipe84;
    }

    public function setRecipe84(?Recipe $recipe84): self
    {
        $this->recipe84 = $recipe84;

        return $this;
    }

    public function getRecipe83(): ?Recipe
    {
        return $this->recipe83;
    }

    public function setRecipe83(?Recipe $recipe83): self
    {
        $this->recipe83 = $recipe83;

        return $this;
    }

    public function getRecipe82(): ?Recipe
    {
        return $this->recipe82;
    }

    public function setRecipe82(?Recipe $recipe82): self
    {
        $this->recipe82 = $recipe82;

        return $this;
    }

    public function getRecipe81(): ?Recipe
    {
        return $this->recipe81;
    }

    public function setRecipe81(?Recipe $recipe81): self
    {
        $this->recipe81 = $recipe81;

        return $this;
    }

    public function getRecipe80(): ?Recipe
    {
        return $this->recipe80;
    }

    public function setRecipe80(?Recipe $recipe80): self
    {
        $this->recipe80 = $recipe80;

        return $this;
    }

    public function getRecipe79(): ?Recipe
    {
        return $this->recipe79;
    }

    public function setRecipe79(?Recipe $recipe79): self
    {
        $this->recipe79 = $recipe79;

        return $this;
    }

    public function getRecipe78(): ?Recipe
    {
        return $this->recipe78;
    }

    public function setRecipe78(?Recipe $recipe78): self
    {
        $this->recipe78 = $recipe78;

        return $this;
    }

    public function getRecipe77(): ?Recipe
    {
        return $this->recipe77;
    }

    public function setRecipe77(?Recipe $recipe77): self
    {
        $this->recipe77 = $recipe77;

        return $this;
    }

    public function getRecipe76(): ?Recipe
    {
        return $this->recipe76;
    }

    public function setRecipe76(?Recipe $recipe76): self
    {
        $this->recipe76 = $recipe76;

        return $this;
    }

    public function getRecipe75(): ?Recipe
    {
        return $this->recipe75;
    }

    public function setRecipe75(?Recipe $recipe75): self
    {
        $this->recipe75 = $recipe75;

        return $this;
    }

    public function getRecipe74(): ?Recipe
    {
        return $this->recipe74;
    }

    public function setRecipe74(?Recipe $recipe74): self
    {
        $this->recipe74 = $recipe74;

        return $this;
    }

    public function getRecipe73(): ?Recipe
    {
        return $this->recipe73;
    }

    public function setRecipe73(?Recipe $recipe73): self
    {
        $this->recipe73 = $recipe73;

        return $this;
    }

    public function getRecipe72(): ?Recipe
    {
        return $this->recipe72;
    }

    public function setRecipe72(?Recipe $recipe72): self
    {
        $this->recipe72 = $recipe72;

        return $this;
    }

    public function getRecipe71(): ?Recipe
    {
        return $this->recipe71;
    }

    public function setRecipe71(?Recipe $recipe71): self
    {
        $this->recipe71 = $recipe71;

        return $this;
    }

    public function getRecipe70(): ?Recipe
    {
        return $this->recipe70;
    }

    public function setRecipe70(?Recipe $recipe70): self
    {
        $this->recipe70 = $recipe70;

        return $this;
    }

    public function getRecipe69(): ?Recipe
    {
        return $this->recipe69;
    }

    public function setRecipe69(?Recipe $recipe69): self
    {
        $this->recipe69 = $recipe69;

        return $this;
    }

    public function getRecipe68(): ?Recipe
    {
        return $this->recipe68;
    }

    public function setRecipe68(?Recipe $recipe68): self
    {
        $this->recipe68 = $recipe68;

        return $this;
    }

    public function getRecipe67(): ?Recipe
    {
        return $this->recipe67;
    }

    public function setRecipe67(?Recipe $recipe67): self
    {
        $this->recipe67 = $recipe67;

        return $this;
    }

    public function getRecipe66(): ?Recipe
    {
        return $this->recipe66;
    }

    public function setRecipe66(?Recipe $recipe66): self
    {
        $this->recipe66 = $recipe66;

        return $this;
    }

    public function getRecipe65(): ?Recipe
    {
        return $this->recipe65;
    }

    public function setRecipe65(?Recipe $recipe65): self
    {
        $this->recipe65 = $recipe65;

        return $this;
    }

    public function getRecipe64(): ?Recipe
    {
        return $this->recipe64;
    }

    public function setRecipe64(?Recipe $recipe64): self
    {
        $this->recipe64 = $recipe64;

        return $this;
    }

    public function getRecipe63(): ?Recipe
    {
        return $this->recipe63;
    }

    public function setRecipe63(?Recipe $recipe63): self
    {
        $this->recipe63 = $recipe63;

        return $this;
    }

    public function getRecipe62(): ?Recipe
    {
        return $this->recipe62;
    }

    public function setRecipe62(?Recipe $recipe62): self
    {
        $this->recipe62 = $recipe62;

        return $this;
    }

    public function getRecipe61(): ?Recipe
    {
        return $this->recipe61;
    }

    public function setRecipe61(?Recipe $recipe61): self
    {
        $this->recipe61 = $recipe61;

        return $this;
    }

    public function getRecipe60(): ?Recipe
    {
        return $this->recipe60;
    }

    public function setRecipe60(?Recipe $recipe60): self
    {
        $this->recipe60 = $recipe60;

        return $this;
    }

    public function getRecipe59(): ?Recipe
    {
        return $this->recipe59;
    }

    public function setRecipe59(?Recipe $recipe59): self
    {
        $this->recipe59 = $recipe59;

        return $this;
    }

    public function getRecipe58(): ?Recipe
    {
        return $this->recipe58;
    }

    public function setRecipe58(?Recipe $recipe58): self
    {
        $this->recipe58 = $recipe58;

        return $this;
    }

    public function getRecipe57(): ?Recipe
    {
        return $this->recipe57;
    }

    public function setRecipe57(?Recipe $recipe57): self
    {
        $this->recipe57 = $recipe57;

        return $this;
    }

    public function getRecipe56(): ?Recipe
    {
        return $this->recipe56;
    }

    public function setRecipe56(?Recipe $recipe56): self
    {
        $this->recipe56 = $recipe56;

        return $this;
    }

    public function getRecipe55(): ?Recipe
    {
        return $this->recipe55;
    }

    public function setRecipe55(?Recipe $recipe55): self
    {
        $this->recipe55 = $recipe55;

        return $this;
    }

    public function getRecipe54(): ?Recipe
    {
        return $this->recipe54;
    }

    public function setRecipe54(?Recipe $recipe54): self
    {
        $this->recipe54 = $recipe54;

        return $this;
    }

    public function getRecipe53(): ?Recipe
    {
        return $this->recipe53;
    }

    public function setRecipe53(?Recipe $recipe53): self
    {
        $this->recipe53 = $recipe53;

        return $this;
    }

    public function getRecipe52(): ?Recipe
    {
        return $this->recipe52;
    }

    public function setRecipe52(?Recipe $recipe52): self
    {
        $this->recipe52 = $recipe52;

        return $this;
    }

    public function getRecipe51(): ?Recipe
    {
        return $this->recipe51;
    }

    public function setRecipe51(?Recipe $recipe51): self
    {
        $this->recipe51 = $recipe51;

        return $this;
    }

    public function getRecipe50(): ?Recipe
    {
        return $this->recipe50;
    }

    public function setRecipe50(?Recipe $recipe50): self
    {
        $this->recipe50 = $recipe50;

        return $this;
    }

    public function getRecipe49(): ?Recipe
    {
        return $this->recipe49;
    }

    public function setRecipe49(?Recipe $recipe49): self
    {
        $this->recipe49 = $recipe49;

        return $this;
    }

    public function getRecipe48(): ?Recipe
    {
        return $this->recipe48;
    }

    public function setRecipe48(?Recipe $recipe48): self
    {
        $this->recipe48 = $recipe48;

        return $this;
    }

    public function getRecipe47(): ?Recipe
    {
        return $this->recipe47;
    }

    public function setRecipe47(?Recipe $recipe47): self
    {
        $this->recipe47 = $recipe47;

        return $this;
    }

    public function getRecipe46(): ?Recipe
    {
        return $this->recipe46;
    }

    public function setRecipe46(?Recipe $recipe46): self
    {
        $this->recipe46 = $recipe46;

        return $this;
    }

    public function getRecipe45(): ?Recipe
    {
        return $this->recipe45;
    }

    public function setRecipe45(?Recipe $recipe45): self
    {
        $this->recipe45 = $recipe45;

        return $this;
    }

    public function getRecipe44(): ?Recipe
    {
        return $this->recipe44;
    }

    public function setRecipe44(?Recipe $recipe44): self
    {
        $this->recipe44 = $recipe44;

        return $this;
    }

    public function getRecipe43(): ?Recipe
    {
        return $this->recipe43;
    }

    public function setRecipe43(?Recipe $recipe43): self
    {
        $this->recipe43 = $recipe43;

        return $this;
    }

    public function getRecipe42(): ?Recipe
    {
        return $this->recipe42;
    }

    public function setRecipe42(?Recipe $recipe42): self
    {
        $this->recipe42 = $recipe42;

        return $this;
    }

    public function getRecipe41(): ?Recipe
    {
        return $this->recipe41;
    }

    public function setRecipe41(?Recipe $recipe41): self
    {
        $this->recipe41 = $recipe41;

        return $this;
    }

    public function getRecipe40(): ?Recipe
    {
        return $this->recipe40;
    }

    public function setRecipe40(?Recipe $recipe40): self
    {
        $this->recipe40 = $recipe40;

        return $this;
    }

    public function getRecipe39(): ?Recipe
    {
        return $this->recipe39;
    }

    public function setRecipe39(?Recipe $recipe39): self
    {
        $this->recipe39 = $recipe39;

        return $this;
    }

    public function getRecipe38(): ?Recipe
    {
        return $this->recipe38;
    }

    public function setRecipe38(?Recipe $recipe38): self
    {
        $this->recipe38 = $recipe38;

        return $this;
    }

    public function getRecipe37(): ?Recipe
    {
        return $this->recipe37;
    }

    public function setRecipe37(?Recipe $recipe37): self
    {
        $this->recipe37 = $recipe37;

        return $this;
    }

    public function getRecipe36(): ?Recipe
    {
        return $this->recipe36;
    }

    public function setRecipe36(?Recipe $recipe36): self
    {
        $this->recipe36 = $recipe36;

        return $this;
    }

    public function getRecipe35(): ?Recipe
    {
        return $this->recipe35;
    }

    public function setRecipe35(?Recipe $recipe35): self
    {
        $this->recipe35 = $recipe35;

        return $this;
    }

    public function getRecipe34(): ?Recipe
    {
        return $this->recipe34;
    }

    public function setRecipe34(?Recipe $recipe34): self
    {
        $this->recipe34 = $recipe34;

        return $this;
    }

    public function getRecipe33(): ?Recipe
    {
        return $this->recipe33;
    }

    public function setRecipe33(?Recipe $recipe33): self
    {
        $this->recipe33 = $recipe33;

        return $this;
    }

    public function getRecipe32(): ?Recipe
    {
        return $this->recipe32;
    }

    public function setRecipe32(?Recipe $recipe32): self
    {
        $this->recipe32 = $recipe32;

        return $this;
    }

    public function getRecipe31(): ?Recipe
    {
        return $this->recipe31;
    }

    public function setRecipe31(?Recipe $recipe31): self
    {
        $this->recipe31 = $recipe31;

        return $this;
    }

    public function getRecipe30(): ?Recipe
    {
        return $this->recipe30;
    }

    public function setRecipe30(?Recipe $recipe30): self
    {
        $this->recipe30 = $recipe30;

        return $this;
    }

    public function getRecipe29(): ?Recipe
    {
        return $this->recipe29;
    }

    public function setRecipe29(?Recipe $recipe29): self
    {
        $this->recipe29 = $recipe29;

        return $this;
    }

    public function getRecipe28(): ?Recipe
    {
        return $this->recipe28;
    }

    public function setRecipe28(?Recipe $recipe28): self
    {
        $this->recipe28 = $recipe28;

        return $this;
    }

    public function getRecipe27(): ?Recipe
    {
        return $this->recipe27;
    }

    public function setRecipe27(?Recipe $recipe27): self
    {
        $this->recipe27 = $recipe27;

        return $this;
    }

    public function getRecipe26(): ?Recipe
    {
        return $this->recipe26;
    }

    public function setRecipe26(?Recipe $recipe26): self
    {
        $this->recipe26 = $recipe26;

        return $this;
    }

    public function getRecipe25(): ?Recipe
    {
        return $this->recipe25;
    }

    public function setRecipe25(?Recipe $recipe25): self
    {
        $this->recipe25 = $recipe25;

        return $this;
    }

    public function getRecipe24(): ?Recipe
    {
        return $this->recipe24;
    }

    public function setRecipe24(?Recipe $recipe24): self
    {
        $this->recipe24 = $recipe24;

        return $this;
    }

    public function getRecipe23(): ?Recipe
    {
        return $this->recipe23;
    }

    public function setRecipe23(?Recipe $recipe23): self
    {
        $this->recipe23 = $recipe23;

        return $this;
    }

    public function getRecipe22(): ?Recipe
    {
        return $this->recipe22;
    }

    public function setRecipe22(?Recipe $recipe22): self
    {
        $this->recipe22 = $recipe22;

        return $this;
    }

    public function getRecipe21(): ?Recipe
    {
        return $this->recipe21;
    }

    public function setRecipe21(?Recipe $recipe21): self
    {
        $this->recipe21 = $recipe21;

        return $this;
    }

    public function getRecipe20(): ?Recipe
    {
        return $this->recipe20;
    }

    public function setRecipe20(?Recipe $recipe20): self
    {
        $this->recipe20 = $recipe20;

        return $this;
    }

    public function getRecipe19(): ?Recipe
    {
        return $this->recipe19;
    }

    public function setRecipe19(?Recipe $recipe19): self
    {
        $this->recipe19 = $recipe19;

        return $this;
    }

    public function getRecipe18(): ?Recipe
    {
        return $this->recipe18;
    }

    public function setRecipe18(?Recipe $recipe18): self
    {
        $this->recipe18 = $recipe18;

        return $this;
    }

    public function getRecipe17(): ?Recipe
    {
        return $this->recipe17;
    }

    public function setRecipe17(?Recipe $recipe17): self
    {
        $this->recipe17 = $recipe17;

        return $this;
    }

    public function getRecipe16(): ?Recipe
    {
        return $this->recipe16;
    }

    public function setRecipe16(?Recipe $recipe16): self
    {
        $this->recipe16 = $recipe16;

        return $this;
    }

    public function getRecipe15(): ?Recipe
    {
        return $this->recipe15;
    }

    public function setRecipe15(?Recipe $recipe15): self
    {
        $this->recipe15 = $recipe15;

        return $this;
    }

    public function getRecipe14(): ?Recipe
    {
        return $this->recipe14;
    }

    public function setRecipe14(?Recipe $recipe14): self
    {
        $this->recipe14 = $recipe14;

        return $this;
    }

    public function getRecipe13(): ?Recipe
    {
        return $this->recipe13;
    }

    public function setRecipe13(?Recipe $recipe13): self
    {
        $this->recipe13 = $recipe13;

        return $this;
    }

    public function getRecipe12(): ?Recipe
    {
        return $this->recipe12;
    }

    public function setRecipe12(?Recipe $recipe12): self
    {
        $this->recipe12 = $recipe12;

        return $this;
    }

    public function getRecipe11(): ?Recipe
    {
        return $this->recipe11;
    }

    public function setRecipe11(?Recipe $recipe11): self
    {
        $this->recipe11 = $recipe11;

        return $this;
    }

    public function getRecipe10(): ?Recipe
    {
        return $this->recipe10;
    }

    public function setRecipe10(?Recipe $recipe10): self
    {
        $this->recipe10 = $recipe10;

        return $this;
    }

    public function getRecipe9(): ?Recipe
    {
        return $this->recipe9;
    }

    public function setRecipe9(?Recipe $recipe9): self
    {
        $this->recipe9 = $recipe9;

        return $this;
    }

    public function getRecipe8(): ?Recipe
    {
        return $this->recipe8;
    }

    public function setRecipe8(?Recipe $recipe8): self
    {
        $this->recipe8 = $recipe8;

        return $this;
    }

    public function getRecipe7(): ?Recipe
    {
        return $this->recipe7;
    }

    public function setRecipe7(?Recipe $recipe7): self
    {
        $this->recipe7 = $recipe7;

        return $this;
    }

    public function getRecipe6(): ?Recipe
    {
        return $this->recipe6;
    }

    public function setRecipe6(?Recipe $recipe6): self
    {
        $this->recipe6 = $recipe6;

        return $this;
    }

    public function getRecipe5(): ?Recipe
    {
        return $this->recipe5;
    }

    public function setRecipe5(?Recipe $recipe5): self
    {
        $this->recipe5 = $recipe5;

        return $this;
    }

    public function getRecipe4(): ?Recipe
    {
        return $this->recipe4;
    }

    public function setRecipe4(?Recipe $recipe4): self
    {
        $this->recipe4 = $recipe4;

        return $this;
    }

    public function getRecipe3(): ?Recipe
    {
        return $this->recipe3;
    }

    public function setRecipe3(?Recipe $recipe3): self
    {
        $this->recipe3 = $recipe3;

        return $this;
    }

    public function getRecipe2(): ?Recipe
    {
        return $this->recipe2;
    }

    public function setRecipe2(?Recipe $recipe2): self
    {
        $this->recipe2 = $recipe2;

        return $this;
    }

    public function getRecipe1(): ?Recipe
    {
        return $this->recipe1;
    }

    public function setRecipe1(?Recipe $recipe1): self
    {
        $this->recipe1 = $recipe1;

        return $this;
    }

    public function getRecipe0(): ?Recipe
    {
        return $this->recipe0;
    }

    public function setRecipe0(?Recipe $recipe0): self
    {
        $this->recipe0 = $recipe0;

        return $this;
    }
}
