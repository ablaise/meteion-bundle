<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdcrafterSupply.
 *
 * @ORM\Table(name="hwdcrafter_supply", indexes={@ORM\Index(name="idx_262046752d9b1162", columns={"item_trade_in_16"}), @ORM\Index(name="idx_26204675b9f6ee", columns={"term_name_21"}), @ORM\Index(name="idx_2620467520e5285b", columns={"base_collectable_reward_post_phase_5"}), @ORM\Index(name="idx_26204675c9868d6e", columns={"base_collectable_reward_post_phase_3"}), @ORM\Index(name="idx_26204675789afec3", columns={"item_trade_in_3"}), @ORM\Index(name="idx_26204675e6fe6b60", columns={"item_trade_in_4"}), @ORM\Index(name="idx_262046758a2d4328", columns={"base_collectable_reward_18"}), @ORM\Index(name="idx_262046752d986c09", columns={"high_collectable_reward_post_phase_0"}), @ORM\Index(name="idx_26204675612b69a1", columns={"mid_collectable_reward_22"}), @ORM\Index(name="idx_262046758d44325", columns={"mid_collectable_reward_post_phase_4"}), @ORM\Index(name="idx_26204675c2a02b60", columns={"mid_collectable_reward_post_phase_10"}), @ORM\Index(name="idx_2620467596949fef", columns={"item_trade_in_1"}), @ORM\Index(name="idx_262046756bbe5f4f", columns={"high_collectable_reward_18"}), @ORM\Index(name="idx_26204675a046e592", columns={"high_collectable_reward_22"}), @ORM\Index(name="idx_26204675fd2a73be", columns={"base_collectable_reward_19"}), @ORM\Index(name="idx_26204675a4085b4e", columns={"mid_collectable_reward_10"}), @ORM\Index(name="idx_26204675b5f0308e", columns={"term_name_16"}), @ORM\Index(name="idx_2620467577bec678", columns={"term_name_20"}), @ORM\Index(name="idx_262046752343e43b", columns={"high_collectable_reward_post_phase_8"}), @ORM\Index(name="idx_26204675c6f66a98", columns={"term_name_7"}), @ORM\Index(name="idx_262046757ff73ada", columns={"item_trade_in_7"}), @ORM\Index(name="idx_26204675e6da2209", columns={"mid_collectable_reward_post_phase_6"}), @ORM\Index(name="idx_262046756b43b368", columns={"base_collectable_reward_post_phase_14"}), @ORM\Index(name="idx_26204675a1f263e6", columns={"mid_collectable_reward_0"}), @ORM\Index(name="idx_262046755a9f5c9f", columns={"high_collectable_reward_post_phase_1"}), @ORM\Index(name="idx_262046754ffc02ca", columns={"mid_collectable_reward_2"}), @ORM\Index(name="idx_26204675bb7c93c4", columns={"mid_collectable_reward_post_phase_19"}), @ORM\Index(name="idx_26204675bd240cf3", columns={"item_trade_in_19"}), @ORM\Index(name="idx_262046754891c6d3", columns={"mid_collectable_reward_6"}), @ORM\Index(name="idx_26204675ef48274b", columns={"item_trade_in_8"}), @ORM\Index(name="idx_26204675d462afc1", columns={"mid_collectable_reward_15"}), @ORM\Index(name="idx_26204675a3b873ea", columns={"high_collectable_reward_8"}), @ORM\Index(name="idx_26204675af29ebd4", columns={"mid_collectable_reward_8"}), @ORM\Index(name="idx_2620467544005eed", columns={"high_collectable_reward_6"}), @ORM\Index(name="idx_26204675b3ff84c1", columns={"item_trade_in_11"}), @ORM\Index(name="idx_26204675ceeb4977", columns={"base_collectable_reward_post_phase_7"}), @ORM\Index(name="idx_2620467552481d89", columns={"term_name_18"}), @ORM\Index(name="idx_2620467598d2d702", columns={"item_trade_in_21"}), @ORM\Index(name="idx_262046752af6d57b", columns={"item_trade_in_12"}), @ORM\Index(name="idx_26204675436d9af4", columns={"high_collectable_reward_2"}), @ORM\Index(name="idx_2620467533076e7b", columns={"high_collectable_reward_7"}), @ORM\Index(name="idx_26204675984f17dd", columns={"item_trade_in_9"}), @ORM\Index(name="idx_2620467562f5ff43", columns={"base_collectable_reward_post_phase_18"}), @ORM\Index(name="idx_26204675b69c9e17", columns={"term_name_2"}), @ORM\Index(name="idx_26204675d30f6bd8", columns={"mid_collectable_reward_11"}), @ORM\Index(name="idx_2620467515f2cfd5", columns={"base_collectable_reward_post_phase_19"}), @ORM\Index(name="idx_26204675b3fcf9aa", columns={"high_collectable_reward_post_phase_7"}), @ORM\Index(name="idx_26204675254f2d1f", columns={"term_name_19"}), @ORM\Index(name="idx_262046751a925eb9", columns={"base_collectable_reward_17"}), @ORM\Index(name="idx_26204675d98421a6", columns={"base_collectable_reward_6"}), @ORM\Index(name="idx_26204675a69fa7ff", columns={"mid_collectable_reward_4"}), @ORM\Index(name="idx_26204675c59ac401", columns={"term_name_13"}), @ORM\Index(name="idx_262046755df29886", columns={"high_collectable_reward_post_phase_5"}), @ORM\Index(name="idx_26204675fb9873c", columns={"mid_collectable_reward_post_phase_0"}), @ORM\Index(name="idx_26204675470324b2", columns={"base_collectable_reward_post_phase_20"}), @ORM\Index(name="idx_26204675f9dce55", columns={"item_trade_in_2"}), @ORM\Index(name="idx_26204675b9ec79e1", columns={"base_collectable_reward_post_phase_6"}), @ORM\Index(name="idx_26204675e336fe3e", columns={"high_collectable_reward_post_phase_11"}), @ORM\Index(name="idx_26204675b5a71bf6", columns={"mid_collectable_reward_post_phase_11"}), @ORM\Index(name="idx_26204675493b3c37", columns={"base_collectable_reward_9"}), @ORM\Index(name="idx_26204675ad63fbd8", columns={"high_collectable_reward_0"}), @ORM\Index(name="idx_26204675c19bae81", columns={"term_name_3"}), @ORM\Index(name="idx_2620467529536470", columns={"base_collectable_reward_post_phase_9"}), @ORM\Index(name="idx_26204675508fdcd4", columns={"base_collectable_reward_post_phase_0"}), @ORM\Index(name="idx_262046759aea469a", columns={"high_collectable_reward_post_phase_18"}), @ORM\Index(name="idx_262046752af5a810", columns={"high_collectable_reward_post_phase_4"}), @ORM\Index(name="idx_26204675d8dca84f", columns={"base_collectable_reward_21"}), @ORM\Index(name="idx_262046755c9395bb", columns={"term_name_10"}), @ORM\Index(name="idx_262046755bfe51a2", columns={"term_name_14"}), @ORM\Index(name="idx_2620467576653f98", columns={"mid_collectable_reward_post_phase_9"}), @ORM\Index(name="idx_262046755112fc47", columns={"high_collectable_reward_post_phase_22"}), @ORM\Index(name="idx_26204675b49240d8", columns={"item_trade_in_15"}), @ORM\Index(name="idx_26204675346aaa62", columns={"high_collectable_reward_3"}), @ORM\Index(name="idx_26204675378a408a", columns={"base_collectable_reward_4"}), @ORM\Index(name="idx_262046751cb96fd9", columns={"high_collectable_reward_19"}), @ORM\Index(name="idx_26204675e45b3a27", columns={"high_collectable_reward_post_phase_15"}), @ORM\Index(name="idx_26204675c4f8b457", columns={"item_trade_in_10"}), @ORM\Index(name="idx_262046751c4483fe", columns={"base_collectable_reward_post_phase_15"}), @ORM\Index(name="idx_26204675dd090f57", columns={"high_collectable_reward_5"}), @ORM\Index(name="idx_262046759e8a4835", columns={"mid_collectable_reward_post_phase_21"}), @ORM\Index(name="idx_262046752f95cfad", columns={"term_name_1"}), @ORM\Index(name="idx_262046755ba97ada", columns={"mid_collectable_reward_post_phase_13"}), @ORM\Index(name="idx_2620467584f6cb1a", columns={"base_collectable_reward_10"}), @ORM\Index(name="idx_26204675c3960d25", columns={"high_collectable_reward_post_phase_2"}), @ORM\Index(name="idx_262046753e3c0ca1", columns={"base_collectable_reward_8"}), @ORM\Index(name="idx_2620467528f80bb4", columns={"term_name_5"}), @ORM\Index(name="idx_26204675da64cb4e", columns={"high_collectable_reward_1"}), @ORM\Index(name="idx_262046759431cea8", columns={"high_collectable_reward_post_phase_10"}), @ORM\Index(name="idx_262046752b94a52d", columns={"term_name_11"}), @ORM\Index(name="idx_26204675b29df497", columns={"term_name_12"}), @ORM\Index(name="idx_26204675c2f70018", columns={"term_name_17"}), @ORM\Index(name="idx_26204675a555b0b", columns={"high_collectable_reward_post_phase_17"}), @ORM\Index(name="idx_26204675c5cdef79", columns={"mid_collectable_reward_post_phase_14"}), @ORM\Index(name="idx_2620467541d5f9f5", columns={"base_collectable_reward_22"}), @ORM\Index(name="idx_26204675fc6c86c7", columns={"high_collectable_reward_13"}), @ORM\Index(name="idx_26204675854dd244", columns={"base_collectable_reward_post_phase_16"}), @ORM\Index(name="idx_26204675cc7ba352", columns={"mid_collectable_reward_post_phase_18"}), @ORM\Index(name="idx_26204675d4bf437c", columns={"high_collectable_reward_9"}), @ORM\Index(name="idx_2620467599b0a754", columns={"term_name_22"}), @ORM\Index(name="idx_26204675f3f1fb8c", columns={"base_collectable_reward_11"}), @ORM\Index(name="idx_26204675d1989769", columns={"mid_collectable_reward_5"}), @ORM\Index(name="idx_26204675935c0ab1", columns={"high_collectable_reward_post_phase_14"}), @ORM\Index(name="idx_26204675214e479f", columns={"term_name_9"}), @ORM\Index(name="idx_262046752bc38e55", columns={"mid_collectable_reward_post_phase_16"}), @ORM\Index(name="idx_262046758b6bb651", columns={"high_collectable_reward_12"}), @ORM\Index(name="idx_262046756c2e7771", columns={"base_collectable_reward_post_phase_10"}), @ORM\Index(name="idx_2620467557e218cd", columns={"base_collectable_reward_post_phase_4"}), @ORM\Index(name="idx_262046754e4884be", columns={"high_collectable_reward_20"}), @ORM\Index(name="idx_26204675783198f", columns={"mid_collectable_reward_post_phase_22"}), @ORM\Index(name="idx_26204675eded760c", columns={"high_collectable_reward_post_phase_19"}), @ORM\Index(name="idx_26204675dee9e5bf", columns={"base_collectable_reward_2"}), @ORM\Index(name="idx_26204675afdb98d9", columns={"base_collectable_reward_20"}), @ORM\Index(name="idx_262046755cc4bec3", columns={"mid_collectable_reward_post_phase_17"}), @ORM\Index(name="idx_26204675b4913db3", columns={"high_collectable_reward_post_phase_3"}), @ORM\Index(name="idx_26204675e1b7e610", columns={"mid_collectable_reward_post_phase_2"}), @ORM\Index(name="idx_2620467538fb325c", columns={"mid_collectable_reward_3"}), @ORM\Index(name="idx_262046751262e7eb", columns={"high_collectable_reward_11"}), @ORM\Index(name="idx_26204675b1f15a0e", columns={"term_name_6"}), @ORM\Index(name="idx_262046757a3faf84", columns={"high_collectable_reward_post_phase_12"}), @ORM\Index(name="idx_262046751b2947e7", columns={"base_collectable_reward_post_phase_11"}), @ORM\Index(name="idx_262046751db86b8", columns={"item_trade_in_22"}), @ORM\Index(name="idx_26204675fb0142de", columns={"high_collectable_reward_17"}), @ORM\Index(name="idx_262046755e5454e6", columns={"base_collectable_reward_post_phase_8"}), @ORM\Index(name="idx_26204675b2cadfef", columns={"mid_collectable_reward_post_phase_15"}), @ORM\Index(name="idx_262046755444d4ad", columns={"high_collectable_reward_post_phase_9"}), @ORM\Index(name="idx_26204675aa0e3fc1", columns={"high_collectable_reward_4"}), @ORM\Index(name="idx_26204675f52726cb", columns={"base_collectable_reward_post_phase_13"}), @ORM\Index(name="idx_2620467547e0b405", columns={"base_collectable_reward_1"}), @ORM\Index(name="idx_262046754a063a62", columns={"mid_collectable_reward_12"}), @ORM\Index(name="idx_262046757d526b9d", columns={"high_collectable_reward_post_phase_16"}), @ORM\Index(name="idx_262046758220165d", columns={"base_collectable_reward_post_phase_12"}), @ORM\Index(name="idx_262046755a9c21f4", columns={"item_trade_in_17"}), @ORM\Index(name="idx_26204675d389f12", columns={"high_collectable_reward_post_phase_13"}), @ORM\Index(name="idx_26204675c395704e", columns={"item_trade_in_14"}), @ORM\Index(name="idx_26204675839b0f03", columns={"base_collectable_reward_14"}), @ORM\Index(name="idx_26204675d82edb42", columns={"mid_collectable_reward_9"}), @ORM\Index(name="idx_2620467596b0d686", columns={"mid_collectable_reward_post_phase_3"}), @ORM\Index(name="idx_262046751dff9aa0", columns={"base_collectable_reward_13"}), @ORM\Index(name="idx_26204675aad3d37c", columns={"mid_collectable_reward_18"}), @ORM\Index(name="idx_26204675be81bdf8", columns={"base_collectable_reward_post_phase_2"}), @ORM\Index(name="idx_26204675e98d78a3", columns={"mid_collectable_reward_post_phase_20"}), @ORM\Index(name="idx_26204675ae831130", columns={"base_collectable_reward_7"}), @ORM\Index(name="idx_2620467556497709", columns={"term_name_8"}), @ORM\Index(name="idx_26204675f49c3f95", columns={"base_collectable_reward_15"}), @ORM\Index(name="idx_26204675f822381b", columns={"mid_collectable_reward_21"}), @ORM\Index(name="idx_26204675c81badfd", columns={"high_collectable_reward_post_phase_21"}), @ORM\Index(name="idx_2620467562081364", columns={"high_collectable_reward_14"}), @ORM\Index(name="idx_26204675c4fbc93c", columns={"high_collectable_reward_post_phase_6"}), @ORM\Index(name="idx_262046756d956e2f", columns={"base_collectable_reward_16"}), @ORM\Index(name="idx_262046752cae4a4c", columns={"mid_collectable_reward_post_phase_12"}), @ORM\Index(name="idx_2620467530e78493", columns={"base_collectable_reward_0"}), @ORM\Index(name="idx_26204675d6f55370", columns={"mid_collectable_reward_1"}), @ORM\Index(name="idx_2620467530041424", columns={"base_collectable_reward_post_phase_21"}), @ORM\Index(name="idx_26204675150f23f2", columns={"high_collectable_reward_15"}), @ORM\Index(name="idx_26204675e193af79", columns={"item_trade_in_0"}), @ORM\Index(name="idx_26204675a9eed529", columns={"base_collectable_reward_3"}), @ORM\Index(name="idx_26204675394fb428", columns={"high_collectable_reward_21"}), @ORM\Index(name="idx_262046754d6bfe7b", columns={"mid_collectable_reward_16"}), @ORM\Index(name="idx_262046755892ff3b", columns={"term_name_0"}), @ORM\Index(name="idx_2620467591f95bf6", columns={"item_trade_in_5"}), @ORM\Index(name="idx_262046756af8aa36", columns={"base_collectable_reward_12"}), @ORM\Index(name="idx_26204675408d701c", columns={"base_collectable_reward_5"}), @ORM\Index(name="idx_26204675f24ae2d2", columns={"base_collectable_reward_post_phase_17"}), @ORM\Index(name="idx_262046756565d77d", columns={"high_collectable_reward_10"}), @ORM\Index(name="idx_262046753d010af4", columns={"mid_collectable_reward_13"}), @ORM\Index(name="idx_262046753f96f645", columns={"mid_collectable_reward_7"}), @ORM\Index(name="idx_262046751620f0e", columns={"mid_collectable_reward_post_phase_8"}), @ORM\Index(name="idx_26204675bf1c9d6b", columns={"high_collectable_reward_post_phase_20"}), @ORM\Index(name="idx_26204675ddd4e3ea", columns={"mid_collectable_reward_19"}), @ORM\Index(name="idx_262046752cf96134", columns={"term_name_15"}), @ORM\Index(name="idx_26204675ca233c65", columns={"item_trade_in_18"}), @ORM\Index(name="idx_26204675a3659f57", columns={"mid_collectable_reward_14"}), @ORM\Index(name="idx_262046757fd373b3", columns={"mid_collectable_reward_post_phase_5"}), @ORM\Index(name="idx_262046758f25088d", columns={"mid_collectable_reward_20"}), @ORM\Index(name="idx_262046758f00a4c", columns={"item_trade_in_6"}), @ORM\Index(name="idx_262046758c067248", columns={"high_collectable_reward_16"}), @ORM\Index(name="idx_262046755df1e5ed", columns={"item_trade_in_13"}), @ORM\Index(name="idx_262046755fff3b22", columns={"term_name_4"}), @ORM\Index(name="idx_262046753a6cceed", columns={"mid_collectable_reward_17"}), @ORM\Index(name="idx_262046752788ec42", columns={"base_collectable_reward_post_phase_1"}), @ORM\Index(name="idx_26204675a90d459e", columns={"base_collectable_reward_post_phase_22"}), @ORM\Index(name="idx_26204675efd5e794", columns={"item_trade_in_20"}), @ORM\Index(name="idx_2620467578beb7aa", columns={"mid_collectable_reward_post_phase_1"}), @ORM\Index(name="idx_2620467591dd129f", columns={"mid_collectable_reward_post_phase_7"})})
 * @ORM\Entity
 */
class HwdcrafterSupply
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdcrafter_supply_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_0", type="integer", nullable=true)
     */
    private $level0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_1", type="integer", nullable=true)
     */
    private $level1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_2", type="integer", nullable=true)
     */
    private $level2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_3", type="integer", nullable=true)
     */
    private $level3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_4", type="integer", nullable=true)
     */
    private $level4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_5", type="integer", nullable=true)
     */
    private $level5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_6", type="integer", nullable=true)
     */
    private $level6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_7", type="integer", nullable=true)
     */
    private $level7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_8", type="integer", nullable=true)
     */
    private $level8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_9", type="integer", nullable=true)
     */
    private $level9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_10", type="integer", nullable=true)
     */
    private $level10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_11", type="integer", nullable=true)
     */
    private $level11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_12", type="integer", nullable=true)
     */
    private $level12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_13", type="integer", nullable=true)
     */
    private $level13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_14", type="integer", nullable=true)
     */
    private $level14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_15", type="integer", nullable=true)
     */
    private $level15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_16", type="integer", nullable=true)
     */
    private $level16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_17", type="integer", nullable=true)
     */
    private $level17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_18", type="integer", nullable=true)
     */
    private $level18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_19", type="integer", nullable=true)
     */
    private $level19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_20", type="integer", nullable=true)
     */
    private $level20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_21", type="integer", nullable=true)
     */
    private $level21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_22", type="integer", nullable=true)
     */
    private $level22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_0", type="integer", nullable=true)
     */
    private $levelMax0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_1", type="integer", nullable=true)
     */
    private $levelMax1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_2", type="integer", nullable=true)
     */
    private $levelMax2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_3", type="integer", nullable=true)
     */
    private $levelMax3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_4", type="integer", nullable=true)
     */
    private $levelMax4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_5", type="integer", nullable=true)
     */
    private $levelMax5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_6", type="integer", nullable=true)
     */
    private $levelMax6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_7", type="integer", nullable=true)
     */
    private $levelMax7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_8", type="integer", nullable=true)
     */
    private $levelMax8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_9", type="integer", nullable=true)
     */
    private $levelMax9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_10", type="integer", nullable=true)
     */
    private $levelMax10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_11", type="integer", nullable=true)
     */
    private $levelMax11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_12", type="integer", nullable=true)
     */
    private $levelMax12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_13", type="integer", nullable=true)
     */
    private $levelMax13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_14", type="integer", nullable=true)
     */
    private $levelMax14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_15", type="integer", nullable=true)
     */
    private $levelMax15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_16", type="integer", nullable=true)
     */
    private $levelMax16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_17", type="integer", nullable=true)
     */
    private $levelMax17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_18", type="integer", nullable=true)
     */
    private $levelMax18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_19", type="integer", nullable=true)
     */
    private $levelMax19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_20", type="integer", nullable=true)
     */
    private $levelMax20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_21", type="integer", nullable=true)
     */
    private $levelMax21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max_22", type="integer", nullable=true)
     */
    private $levelMax22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_70", type="integer", nullable=true)
     */
    private $column70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_71", type="integer", nullable=true)
     */
    private $column71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_72", type="integer", nullable=true)
     */
    private $column72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_73", type="integer", nullable=true)
     */
    private $column73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_74", type="integer", nullable=true)
     */
    private $column74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_75", type="integer", nullable=true)
     */
    private $column75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_76", type="integer", nullable=true)
     */
    private $column76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_77", type="integer", nullable=true)
     */
    private $column77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_78", type="integer", nullable=true)
     */
    private $column78;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_79", type="integer", nullable=true)
     */
    private $column79;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_80", type="integer", nullable=true)
     */
    private $column80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_81", type="integer", nullable=true)
     */
    private $column81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_82", type="integer", nullable=true)
     */
    private $column82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_83", type="integer", nullable=true)
     */
    private $column83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_84", type="integer", nullable=true)
     */
    private $column84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_85", type="integer", nullable=true)
     */
    private $column85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_86", type="integer", nullable=true)
     */
    private $column86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_87", type="integer", nullable=true)
     */
    private $column87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_88", type="integer", nullable=true)
     */
    private $column88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_89", type="integer", nullable=true)
     */
    private $column89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_90", type="integer", nullable=true)
     */
    private $column90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_91", type="integer", nullable=true)
     */
    private $column91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_92", type="integer", nullable=true)
     */
    private $column92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_0", type="bigint", nullable=true)
     */
    private $baseCollectableRating0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_1", type="bigint", nullable=true)
     */
    private $baseCollectableRating1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_2", type="bigint", nullable=true)
     */
    private $baseCollectableRating2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_3", type="bigint", nullable=true)
     */
    private $baseCollectableRating3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_4", type="bigint", nullable=true)
     */
    private $baseCollectableRating4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_5", type="bigint", nullable=true)
     */
    private $baseCollectableRating5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_6", type="bigint", nullable=true)
     */
    private $baseCollectableRating6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_7", type="bigint", nullable=true)
     */
    private $baseCollectableRating7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_8", type="bigint", nullable=true)
     */
    private $baseCollectableRating8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_9", type="bigint", nullable=true)
     */
    private $baseCollectableRating9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_10", type="bigint", nullable=true)
     */
    private $baseCollectableRating10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_11", type="bigint", nullable=true)
     */
    private $baseCollectableRating11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_12", type="bigint", nullable=true)
     */
    private $baseCollectableRating12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_13", type="bigint", nullable=true)
     */
    private $baseCollectableRating13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_14", type="bigint", nullable=true)
     */
    private $baseCollectableRating14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_15", type="bigint", nullable=true)
     */
    private $baseCollectableRating15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_16", type="bigint", nullable=true)
     */
    private $baseCollectableRating16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_17", type="bigint", nullable=true)
     */
    private $baseCollectableRating17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_18", type="bigint", nullable=true)
     */
    private $baseCollectableRating18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_19", type="bigint", nullable=true)
     */
    private $baseCollectableRating19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_20", type="bigint", nullable=true)
     */
    private $baseCollectableRating20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_21", type="bigint", nullable=true)
     */
    private $baseCollectableRating21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_collectable_rating_22", type="bigint", nullable=true)
     */
    private $baseCollectableRating22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_0", type="bigint", nullable=true)
     */
    private $midCollectableRating0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_1", type="bigint", nullable=true)
     */
    private $midCollectableRating1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_2", type="bigint", nullable=true)
     */
    private $midCollectableRating2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_3", type="bigint", nullable=true)
     */
    private $midCollectableRating3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_4", type="bigint", nullable=true)
     */
    private $midCollectableRating4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_5", type="bigint", nullable=true)
     */
    private $midCollectableRating5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_6", type="bigint", nullable=true)
     */
    private $midCollectableRating6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_7", type="bigint", nullable=true)
     */
    private $midCollectableRating7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_8", type="bigint", nullable=true)
     */
    private $midCollectableRating8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_9", type="bigint", nullable=true)
     */
    private $midCollectableRating9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_10", type="bigint", nullable=true)
     */
    private $midCollectableRating10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_11", type="bigint", nullable=true)
     */
    private $midCollectableRating11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_12", type="bigint", nullable=true)
     */
    private $midCollectableRating12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_13", type="bigint", nullable=true)
     */
    private $midCollectableRating13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_14", type="bigint", nullable=true)
     */
    private $midCollectableRating14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_15", type="bigint", nullable=true)
     */
    private $midCollectableRating15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_16", type="bigint", nullable=true)
     */
    private $midCollectableRating16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_17", type="bigint", nullable=true)
     */
    private $midCollectableRating17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_18", type="bigint", nullable=true)
     */
    private $midCollectableRating18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_19", type="bigint", nullable=true)
     */
    private $midCollectableRating19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_20", type="bigint", nullable=true)
     */
    private $midCollectableRating20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_21", type="bigint", nullable=true)
     */
    private $midCollectableRating21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_collectable_rating_22", type="bigint", nullable=true)
     */
    private $midCollectableRating22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_0", type="bigint", nullable=true)
     */
    private $highCollectableRating0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_1", type="bigint", nullable=true)
     */
    private $highCollectableRating1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_2", type="bigint", nullable=true)
     */
    private $highCollectableRating2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_3", type="bigint", nullable=true)
     */
    private $highCollectableRating3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_4", type="bigint", nullable=true)
     */
    private $highCollectableRating4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_5", type="bigint", nullable=true)
     */
    private $highCollectableRating5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_6", type="bigint", nullable=true)
     */
    private $highCollectableRating6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_7", type="bigint", nullable=true)
     */
    private $highCollectableRating7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_8", type="bigint", nullable=true)
     */
    private $highCollectableRating8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_9", type="bigint", nullable=true)
     */
    private $highCollectableRating9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_10", type="bigint", nullable=true)
     */
    private $highCollectableRating10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_11", type="bigint", nullable=true)
     */
    private $highCollectableRating11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_12", type="bigint", nullable=true)
     */
    private $highCollectableRating12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_13", type="bigint", nullable=true)
     */
    private $highCollectableRating13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_14", type="bigint", nullable=true)
     */
    private $highCollectableRating14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_15", type="bigint", nullable=true)
     */
    private $highCollectableRating15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_16", type="bigint", nullable=true)
     */
    private $highCollectableRating16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_17", type="bigint", nullable=true)
     */
    private $highCollectableRating17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_18", type="bigint", nullable=true)
     */
    private $highCollectableRating18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_19", type="bigint", nullable=true)
     */
    private $highCollectableRating19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_20", type="bigint", nullable=true)
     */
    private $highCollectableRating20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_21", type="bigint", nullable=true)
     */
    private $highCollectableRating21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_collectable_rating_22", type="bigint", nullable=true)
     */
    private $highCollectableRating22;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_22", referencedColumnName="pk")
     * })
     */
    private $termName22;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_21", referencedColumnName="pk")
     * })
     */
    private $termName21;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_20", referencedColumnName="pk")
     * })
     */
    private $termName20;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_19", referencedColumnName="pk")
     * })
     */
    private $termName19;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_18", referencedColumnName="pk")
     * })
     */
    private $termName18;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_17", referencedColumnName="pk")
     * })
     */
    private $termName17;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_16", referencedColumnName="pk")
     * })
     */
    private $termName16;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_15", referencedColumnName="pk")
     * })
     */
    private $termName15;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_14", referencedColumnName="pk")
     * })
     */
    private $termName14;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_13", referencedColumnName="pk")
     * })
     */
    private $termName13;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_12", referencedColumnName="pk")
     * })
     */
    private $termName12;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_11", referencedColumnName="pk")
     * })
     */
    private $termName11;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_10", referencedColumnName="pk")
     * })
     */
    private $termName10;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_9", referencedColumnName="pk")
     * })
     */
    private $termName9;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_8", referencedColumnName="pk")
     * })
     */
    private $termName8;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_7", referencedColumnName="pk")
     * })
     */
    private $termName7;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_6", referencedColumnName="pk")
     * })
     */
    private $termName6;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_5", referencedColumnName="pk")
     * })
     */
    private $termName5;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_4", referencedColumnName="pk")
     * })
     */
    private $termName4;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_3", referencedColumnName="pk")
     * })
     */
    private $termName3;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_2", referencedColumnName="pk")
     * })
     */
    private $termName2;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_1", referencedColumnName="pk")
     * })
     */
    private $termName1;

    /**
     * @var HwdcrafterSupplyTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_name_0", referencedColumnName="pk")
     * })
     */
    private $termName0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_22", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_21", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_20", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_19", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_18", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_17", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_16", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_15", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_14", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_13", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_12", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_11", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_10", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_9", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_8", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_7", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_6", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_5", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_4", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_3", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_2", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_1", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_post_phase_0", referencedColumnName="pk")
     * })
     */
    private $highCollectableRewardPostPhase0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_22", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_21", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_20", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_19", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_18", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_17", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_16", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_15", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_14", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_13", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_12", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_11", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_10", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_9", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_8", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_7", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_6", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_5", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_4", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_3", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_2", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_1", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_post_phase_0", referencedColumnName="pk")
     * })
     */
    private $midCollectableRewardPostPhase0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_22", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_21", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_20", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_19", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_18", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_17", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_16", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_15", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_14", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_13", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_12", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_11", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_10", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_9", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_8", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_7", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_6", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_5", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_4", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_3", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_2", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_1", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_post_phase_0", referencedColumnName="pk")
     * })
     */
    private $baseCollectableRewardPostPhase0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_22", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_21", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_20", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_19", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_18", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_17", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_16", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_15", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_14", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_13", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_12", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_11", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_10", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_9", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_8", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_7", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_6", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_5", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_4", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_3", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_2", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_1", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="high_collectable_reward_0", referencedColumnName="pk")
     * })
     */
    private $highCollectableReward0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_22", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_21", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_20", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_19", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_18", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_17", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_16", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_15", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_14", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_13", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_12", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_11", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_10", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_9", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_8", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_7", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_6", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_5", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_4", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_3", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_2", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_1", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mid_collectable_reward_0", referencedColumnName="pk")
     * })
     */
    private $midCollectableReward0;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_22", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward22;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_21", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward21;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_20", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward20;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_19", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward19;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_18", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward18;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_17", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward17;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_16", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward16;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_15", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward15;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_14", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward14;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_13", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward13;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_12", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward12;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_11", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward11;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_10", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward10;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_9", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward9;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_8", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward8;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_7", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward7;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_6", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward6;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_5", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward5;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_4", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward4;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_3", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward3;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_2", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward2;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_1", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward1;

    /**
     * @var HwdcrafterSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="HwdcrafterSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_collectable_reward_0", referencedColumnName="pk")
     * })
     */
    private $baseCollectableReward0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_22", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_21", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_20", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_19", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn19;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_18", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn18;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_17", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn17;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_16", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn16;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_15", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn15;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_14", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn14;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_13", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn13;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_12", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_11", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_10", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_9", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_8", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn8;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_7", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_6", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_5", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_4", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_3", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_2", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_1", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_trade_in_0", referencedColumnName="pk")
     * })
     */
    private $itemTradeIn0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLevel0(): ?int
    {
        return $this->level0;
    }

    public function setLevel0(?int $level0): self
    {
        $this->level0 = $level0;

        return $this;
    }

    public function getLevel1(): ?int
    {
        return $this->level1;
    }

    public function setLevel1(?int $level1): self
    {
        $this->level1 = $level1;

        return $this;
    }

    public function getLevel2(): ?int
    {
        return $this->level2;
    }

    public function setLevel2(?int $level2): self
    {
        $this->level2 = $level2;

        return $this;
    }

    public function getLevel3(): ?int
    {
        return $this->level3;
    }

    public function setLevel3(?int $level3): self
    {
        $this->level3 = $level3;

        return $this;
    }

    public function getLevel4(): ?int
    {
        return $this->level4;
    }

    public function setLevel4(?int $level4): self
    {
        $this->level4 = $level4;

        return $this;
    }

    public function getLevel5(): ?int
    {
        return $this->level5;
    }

    public function setLevel5(?int $level5): self
    {
        $this->level5 = $level5;

        return $this;
    }

    public function getLevel6(): ?int
    {
        return $this->level6;
    }

    public function setLevel6(?int $level6): self
    {
        $this->level6 = $level6;

        return $this;
    }

    public function getLevel7(): ?int
    {
        return $this->level7;
    }

    public function setLevel7(?int $level7): self
    {
        $this->level7 = $level7;

        return $this;
    }

    public function getLevel8(): ?int
    {
        return $this->level8;
    }

    public function setLevel8(?int $level8): self
    {
        $this->level8 = $level8;

        return $this;
    }

    public function getLevel9(): ?int
    {
        return $this->level9;
    }

    public function setLevel9(?int $level9): self
    {
        $this->level9 = $level9;

        return $this;
    }

    public function getLevel10(): ?int
    {
        return $this->level10;
    }

    public function setLevel10(?int $level10): self
    {
        $this->level10 = $level10;

        return $this;
    }

    public function getLevel11(): ?int
    {
        return $this->level11;
    }

    public function setLevel11(?int $level11): self
    {
        $this->level11 = $level11;

        return $this;
    }

    public function getLevel12(): ?int
    {
        return $this->level12;
    }

    public function setLevel12(?int $level12): self
    {
        $this->level12 = $level12;

        return $this;
    }

    public function getLevel13(): ?int
    {
        return $this->level13;
    }

    public function setLevel13(?int $level13): self
    {
        $this->level13 = $level13;

        return $this;
    }

    public function getLevel14(): ?int
    {
        return $this->level14;
    }

    public function setLevel14(?int $level14): self
    {
        $this->level14 = $level14;

        return $this;
    }

    public function getLevel15(): ?int
    {
        return $this->level15;
    }

    public function setLevel15(?int $level15): self
    {
        $this->level15 = $level15;

        return $this;
    }

    public function getLevel16(): ?int
    {
        return $this->level16;
    }

    public function setLevel16(?int $level16): self
    {
        $this->level16 = $level16;

        return $this;
    }

    public function getLevel17(): ?int
    {
        return $this->level17;
    }

    public function setLevel17(?int $level17): self
    {
        $this->level17 = $level17;

        return $this;
    }

    public function getLevel18(): ?int
    {
        return $this->level18;
    }

    public function setLevel18(?int $level18): self
    {
        $this->level18 = $level18;

        return $this;
    }

    public function getLevel19(): ?int
    {
        return $this->level19;
    }

    public function setLevel19(?int $level19): self
    {
        $this->level19 = $level19;

        return $this;
    }

    public function getLevel20(): ?int
    {
        return $this->level20;
    }

    public function setLevel20(?int $level20): self
    {
        $this->level20 = $level20;

        return $this;
    }

    public function getLevel21(): ?int
    {
        return $this->level21;
    }

    public function setLevel21(?int $level21): self
    {
        $this->level21 = $level21;

        return $this;
    }

    public function getLevel22(): ?int
    {
        return $this->level22;
    }

    public function setLevel22(?int $level22): self
    {
        $this->level22 = $level22;

        return $this;
    }

    public function getLevelMax0(): ?int
    {
        return $this->levelMax0;
    }

    public function setLevelMax0(?int $levelMax0): self
    {
        $this->levelMax0 = $levelMax0;

        return $this;
    }

    public function getLevelMax1(): ?int
    {
        return $this->levelMax1;
    }

    public function setLevelMax1(?int $levelMax1): self
    {
        $this->levelMax1 = $levelMax1;

        return $this;
    }

    public function getLevelMax2(): ?int
    {
        return $this->levelMax2;
    }

    public function setLevelMax2(?int $levelMax2): self
    {
        $this->levelMax2 = $levelMax2;

        return $this;
    }

    public function getLevelMax3(): ?int
    {
        return $this->levelMax3;
    }

    public function setLevelMax3(?int $levelMax3): self
    {
        $this->levelMax3 = $levelMax3;

        return $this;
    }

    public function getLevelMax4(): ?int
    {
        return $this->levelMax4;
    }

    public function setLevelMax4(?int $levelMax4): self
    {
        $this->levelMax4 = $levelMax4;

        return $this;
    }

    public function getLevelMax5(): ?int
    {
        return $this->levelMax5;
    }

    public function setLevelMax5(?int $levelMax5): self
    {
        $this->levelMax5 = $levelMax5;

        return $this;
    }

    public function getLevelMax6(): ?int
    {
        return $this->levelMax6;
    }

    public function setLevelMax6(?int $levelMax6): self
    {
        $this->levelMax6 = $levelMax6;

        return $this;
    }

    public function getLevelMax7(): ?int
    {
        return $this->levelMax7;
    }

    public function setLevelMax7(?int $levelMax7): self
    {
        $this->levelMax7 = $levelMax7;

        return $this;
    }

    public function getLevelMax8(): ?int
    {
        return $this->levelMax8;
    }

    public function setLevelMax8(?int $levelMax8): self
    {
        $this->levelMax8 = $levelMax8;

        return $this;
    }

    public function getLevelMax9(): ?int
    {
        return $this->levelMax9;
    }

    public function setLevelMax9(?int $levelMax9): self
    {
        $this->levelMax9 = $levelMax9;

        return $this;
    }

    public function getLevelMax10(): ?int
    {
        return $this->levelMax10;
    }

    public function setLevelMax10(?int $levelMax10): self
    {
        $this->levelMax10 = $levelMax10;

        return $this;
    }

    public function getLevelMax11(): ?int
    {
        return $this->levelMax11;
    }

    public function setLevelMax11(?int $levelMax11): self
    {
        $this->levelMax11 = $levelMax11;

        return $this;
    }

    public function getLevelMax12(): ?int
    {
        return $this->levelMax12;
    }

    public function setLevelMax12(?int $levelMax12): self
    {
        $this->levelMax12 = $levelMax12;

        return $this;
    }

    public function getLevelMax13(): ?int
    {
        return $this->levelMax13;
    }

    public function setLevelMax13(?int $levelMax13): self
    {
        $this->levelMax13 = $levelMax13;

        return $this;
    }

    public function getLevelMax14(): ?int
    {
        return $this->levelMax14;
    }

    public function setLevelMax14(?int $levelMax14): self
    {
        $this->levelMax14 = $levelMax14;

        return $this;
    }

    public function getLevelMax15(): ?int
    {
        return $this->levelMax15;
    }

    public function setLevelMax15(?int $levelMax15): self
    {
        $this->levelMax15 = $levelMax15;

        return $this;
    }

    public function getLevelMax16(): ?int
    {
        return $this->levelMax16;
    }

    public function setLevelMax16(?int $levelMax16): self
    {
        $this->levelMax16 = $levelMax16;

        return $this;
    }

    public function getLevelMax17(): ?int
    {
        return $this->levelMax17;
    }

    public function setLevelMax17(?int $levelMax17): self
    {
        $this->levelMax17 = $levelMax17;

        return $this;
    }

    public function getLevelMax18(): ?int
    {
        return $this->levelMax18;
    }

    public function setLevelMax18(?int $levelMax18): self
    {
        $this->levelMax18 = $levelMax18;

        return $this;
    }

    public function getLevelMax19(): ?int
    {
        return $this->levelMax19;
    }

    public function setLevelMax19(?int $levelMax19): self
    {
        $this->levelMax19 = $levelMax19;

        return $this;
    }

    public function getLevelMax20(): ?int
    {
        return $this->levelMax20;
    }

    public function setLevelMax20(?int $levelMax20): self
    {
        $this->levelMax20 = $levelMax20;

        return $this;
    }

    public function getLevelMax21(): ?int
    {
        return $this->levelMax21;
    }

    public function setLevelMax21(?int $levelMax21): self
    {
        $this->levelMax21 = $levelMax21;

        return $this;
    }

    public function getLevelMax22(): ?int
    {
        return $this->levelMax22;
    }

    public function setLevelMax22(?int $levelMax22): self
    {
        $this->levelMax22 = $levelMax22;

        return $this;
    }

    public function getColumn70(): ?int
    {
        return $this->column70;
    }

    public function setColumn70(?int $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?int
    {
        return $this->column71;
    }

    public function setColumn71(?int $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?int
    {
        return $this->column72;
    }

    public function setColumn72(?int $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?int
    {
        return $this->column73;
    }

    public function setColumn73(?int $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?int
    {
        return $this->column74;
    }

    public function setColumn74(?int $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?int
    {
        return $this->column75;
    }

    public function setColumn75(?int $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?int
    {
        return $this->column76;
    }

    public function setColumn76(?int $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?int
    {
        return $this->column77;
    }

    public function setColumn77(?int $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?int
    {
        return $this->column78;
    }

    public function setColumn78(?int $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?int
    {
        return $this->column79;
    }

    public function setColumn79(?int $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?int
    {
        return $this->column80;
    }

    public function setColumn80(?int $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?int
    {
        return $this->column81;
    }

    public function setColumn81(?int $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?int
    {
        return $this->column82;
    }

    public function setColumn82(?int $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?int
    {
        return $this->column83;
    }

    public function setColumn83(?int $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?int
    {
        return $this->column84;
    }

    public function setColumn84(?int $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?int
    {
        return $this->column85;
    }

    public function setColumn85(?int $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?int
    {
        return $this->column86;
    }

    public function setColumn86(?int $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?int
    {
        return $this->column87;
    }

    public function setColumn87(?int $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?int
    {
        return $this->column88;
    }

    public function setColumn88(?int $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?int
    {
        return $this->column89;
    }

    public function setColumn89(?int $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?int
    {
        return $this->column90;
    }

    public function setColumn90(?int $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?int
    {
        return $this->column91;
    }

    public function setColumn91(?int $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?int
    {
        return $this->column92;
    }

    public function setColumn92(?int $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getBaseCollectableRating0(): ?string
    {
        return $this->baseCollectableRating0;
    }

    public function setBaseCollectableRating0(?string $baseCollectableRating0): self
    {
        $this->baseCollectableRating0 = $baseCollectableRating0;

        return $this;
    }

    public function getBaseCollectableRating1(): ?string
    {
        return $this->baseCollectableRating1;
    }

    public function setBaseCollectableRating1(?string $baseCollectableRating1): self
    {
        $this->baseCollectableRating1 = $baseCollectableRating1;

        return $this;
    }

    public function getBaseCollectableRating2(): ?string
    {
        return $this->baseCollectableRating2;
    }

    public function setBaseCollectableRating2(?string $baseCollectableRating2): self
    {
        $this->baseCollectableRating2 = $baseCollectableRating2;

        return $this;
    }

    public function getBaseCollectableRating3(): ?string
    {
        return $this->baseCollectableRating3;
    }

    public function setBaseCollectableRating3(?string $baseCollectableRating3): self
    {
        $this->baseCollectableRating3 = $baseCollectableRating3;

        return $this;
    }

    public function getBaseCollectableRating4(): ?string
    {
        return $this->baseCollectableRating4;
    }

    public function setBaseCollectableRating4(?string $baseCollectableRating4): self
    {
        $this->baseCollectableRating4 = $baseCollectableRating4;

        return $this;
    }

    public function getBaseCollectableRating5(): ?string
    {
        return $this->baseCollectableRating5;
    }

    public function setBaseCollectableRating5(?string $baseCollectableRating5): self
    {
        $this->baseCollectableRating5 = $baseCollectableRating5;

        return $this;
    }

    public function getBaseCollectableRating6(): ?string
    {
        return $this->baseCollectableRating6;
    }

    public function setBaseCollectableRating6(?string $baseCollectableRating6): self
    {
        $this->baseCollectableRating6 = $baseCollectableRating6;

        return $this;
    }

    public function getBaseCollectableRating7(): ?string
    {
        return $this->baseCollectableRating7;
    }

    public function setBaseCollectableRating7(?string $baseCollectableRating7): self
    {
        $this->baseCollectableRating7 = $baseCollectableRating7;

        return $this;
    }

    public function getBaseCollectableRating8(): ?string
    {
        return $this->baseCollectableRating8;
    }

    public function setBaseCollectableRating8(?string $baseCollectableRating8): self
    {
        $this->baseCollectableRating8 = $baseCollectableRating8;

        return $this;
    }

    public function getBaseCollectableRating9(): ?string
    {
        return $this->baseCollectableRating9;
    }

    public function setBaseCollectableRating9(?string $baseCollectableRating9): self
    {
        $this->baseCollectableRating9 = $baseCollectableRating9;

        return $this;
    }

    public function getBaseCollectableRating10(): ?string
    {
        return $this->baseCollectableRating10;
    }

    public function setBaseCollectableRating10(?string $baseCollectableRating10): self
    {
        $this->baseCollectableRating10 = $baseCollectableRating10;

        return $this;
    }

    public function getBaseCollectableRating11(): ?string
    {
        return $this->baseCollectableRating11;
    }

    public function setBaseCollectableRating11(?string $baseCollectableRating11): self
    {
        $this->baseCollectableRating11 = $baseCollectableRating11;

        return $this;
    }

    public function getBaseCollectableRating12(): ?string
    {
        return $this->baseCollectableRating12;
    }

    public function setBaseCollectableRating12(?string $baseCollectableRating12): self
    {
        $this->baseCollectableRating12 = $baseCollectableRating12;

        return $this;
    }

    public function getBaseCollectableRating13(): ?string
    {
        return $this->baseCollectableRating13;
    }

    public function setBaseCollectableRating13(?string $baseCollectableRating13): self
    {
        $this->baseCollectableRating13 = $baseCollectableRating13;

        return $this;
    }

    public function getBaseCollectableRating14(): ?string
    {
        return $this->baseCollectableRating14;
    }

    public function setBaseCollectableRating14(?string $baseCollectableRating14): self
    {
        $this->baseCollectableRating14 = $baseCollectableRating14;

        return $this;
    }

    public function getBaseCollectableRating15(): ?string
    {
        return $this->baseCollectableRating15;
    }

    public function setBaseCollectableRating15(?string $baseCollectableRating15): self
    {
        $this->baseCollectableRating15 = $baseCollectableRating15;

        return $this;
    }

    public function getBaseCollectableRating16(): ?string
    {
        return $this->baseCollectableRating16;
    }

    public function setBaseCollectableRating16(?string $baseCollectableRating16): self
    {
        $this->baseCollectableRating16 = $baseCollectableRating16;

        return $this;
    }

    public function getBaseCollectableRating17(): ?string
    {
        return $this->baseCollectableRating17;
    }

    public function setBaseCollectableRating17(?string $baseCollectableRating17): self
    {
        $this->baseCollectableRating17 = $baseCollectableRating17;

        return $this;
    }

    public function getBaseCollectableRating18(): ?string
    {
        return $this->baseCollectableRating18;
    }

    public function setBaseCollectableRating18(?string $baseCollectableRating18): self
    {
        $this->baseCollectableRating18 = $baseCollectableRating18;

        return $this;
    }

    public function getBaseCollectableRating19(): ?string
    {
        return $this->baseCollectableRating19;
    }

    public function setBaseCollectableRating19(?string $baseCollectableRating19): self
    {
        $this->baseCollectableRating19 = $baseCollectableRating19;

        return $this;
    }

    public function getBaseCollectableRating20(): ?string
    {
        return $this->baseCollectableRating20;
    }

    public function setBaseCollectableRating20(?string $baseCollectableRating20): self
    {
        $this->baseCollectableRating20 = $baseCollectableRating20;

        return $this;
    }

    public function getBaseCollectableRating21(): ?string
    {
        return $this->baseCollectableRating21;
    }

    public function setBaseCollectableRating21(?string $baseCollectableRating21): self
    {
        $this->baseCollectableRating21 = $baseCollectableRating21;

        return $this;
    }

    public function getBaseCollectableRating22(): ?string
    {
        return $this->baseCollectableRating22;
    }

    public function setBaseCollectableRating22(?string $baseCollectableRating22): self
    {
        $this->baseCollectableRating22 = $baseCollectableRating22;

        return $this;
    }

    public function getMidCollectableRating0(): ?string
    {
        return $this->midCollectableRating0;
    }

    public function setMidCollectableRating0(?string $midCollectableRating0): self
    {
        $this->midCollectableRating0 = $midCollectableRating0;

        return $this;
    }

    public function getMidCollectableRating1(): ?string
    {
        return $this->midCollectableRating1;
    }

    public function setMidCollectableRating1(?string $midCollectableRating1): self
    {
        $this->midCollectableRating1 = $midCollectableRating1;

        return $this;
    }

    public function getMidCollectableRating2(): ?string
    {
        return $this->midCollectableRating2;
    }

    public function setMidCollectableRating2(?string $midCollectableRating2): self
    {
        $this->midCollectableRating2 = $midCollectableRating2;

        return $this;
    }

    public function getMidCollectableRating3(): ?string
    {
        return $this->midCollectableRating3;
    }

    public function setMidCollectableRating3(?string $midCollectableRating3): self
    {
        $this->midCollectableRating3 = $midCollectableRating3;

        return $this;
    }

    public function getMidCollectableRating4(): ?string
    {
        return $this->midCollectableRating4;
    }

    public function setMidCollectableRating4(?string $midCollectableRating4): self
    {
        $this->midCollectableRating4 = $midCollectableRating4;

        return $this;
    }

    public function getMidCollectableRating5(): ?string
    {
        return $this->midCollectableRating5;
    }

    public function setMidCollectableRating5(?string $midCollectableRating5): self
    {
        $this->midCollectableRating5 = $midCollectableRating5;

        return $this;
    }

    public function getMidCollectableRating6(): ?string
    {
        return $this->midCollectableRating6;
    }

    public function setMidCollectableRating6(?string $midCollectableRating6): self
    {
        $this->midCollectableRating6 = $midCollectableRating6;

        return $this;
    }

    public function getMidCollectableRating7(): ?string
    {
        return $this->midCollectableRating7;
    }

    public function setMidCollectableRating7(?string $midCollectableRating7): self
    {
        $this->midCollectableRating7 = $midCollectableRating7;

        return $this;
    }

    public function getMidCollectableRating8(): ?string
    {
        return $this->midCollectableRating8;
    }

    public function setMidCollectableRating8(?string $midCollectableRating8): self
    {
        $this->midCollectableRating8 = $midCollectableRating8;

        return $this;
    }

    public function getMidCollectableRating9(): ?string
    {
        return $this->midCollectableRating9;
    }

    public function setMidCollectableRating9(?string $midCollectableRating9): self
    {
        $this->midCollectableRating9 = $midCollectableRating9;

        return $this;
    }

    public function getMidCollectableRating10(): ?string
    {
        return $this->midCollectableRating10;
    }

    public function setMidCollectableRating10(?string $midCollectableRating10): self
    {
        $this->midCollectableRating10 = $midCollectableRating10;

        return $this;
    }

    public function getMidCollectableRating11(): ?string
    {
        return $this->midCollectableRating11;
    }

    public function setMidCollectableRating11(?string $midCollectableRating11): self
    {
        $this->midCollectableRating11 = $midCollectableRating11;

        return $this;
    }

    public function getMidCollectableRating12(): ?string
    {
        return $this->midCollectableRating12;
    }

    public function setMidCollectableRating12(?string $midCollectableRating12): self
    {
        $this->midCollectableRating12 = $midCollectableRating12;

        return $this;
    }

    public function getMidCollectableRating13(): ?string
    {
        return $this->midCollectableRating13;
    }

    public function setMidCollectableRating13(?string $midCollectableRating13): self
    {
        $this->midCollectableRating13 = $midCollectableRating13;

        return $this;
    }

    public function getMidCollectableRating14(): ?string
    {
        return $this->midCollectableRating14;
    }

    public function setMidCollectableRating14(?string $midCollectableRating14): self
    {
        $this->midCollectableRating14 = $midCollectableRating14;

        return $this;
    }

    public function getMidCollectableRating15(): ?string
    {
        return $this->midCollectableRating15;
    }

    public function setMidCollectableRating15(?string $midCollectableRating15): self
    {
        $this->midCollectableRating15 = $midCollectableRating15;

        return $this;
    }

    public function getMidCollectableRating16(): ?string
    {
        return $this->midCollectableRating16;
    }

    public function setMidCollectableRating16(?string $midCollectableRating16): self
    {
        $this->midCollectableRating16 = $midCollectableRating16;

        return $this;
    }

    public function getMidCollectableRating17(): ?string
    {
        return $this->midCollectableRating17;
    }

    public function setMidCollectableRating17(?string $midCollectableRating17): self
    {
        $this->midCollectableRating17 = $midCollectableRating17;

        return $this;
    }

    public function getMidCollectableRating18(): ?string
    {
        return $this->midCollectableRating18;
    }

    public function setMidCollectableRating18(?string $midCollectableRating18): self
    {
        $this->midCollectableRating18 = $midCollectableRating18;

        return $this;
    }

    public function getMidCollectableRating19(): ?string
    {
        return $this->midCollectableRating19;
    }

    public function setMidCollectableRating19(?string $midCollectableRating19): self
    {
        $this->midCollectableRating19 = $midCollectableRating19;

        return $this;
    }

    public function getMidCollectableRating20(): ?string
    {
        return $this->midCollectableRating20;
    }

    public function setMidCollectableRating20(?string $midCollectableRating20): self
    {
        $this->midCollectableRating20 = $midCollectableRating20;

        return $this;
    }

    public function getMidCollectableRating21(): ?string
    {
        return $this->midCollectableRating21;
    }

    public function setMidCollectableRating21(?string $midCollectableRating21): self
    {
        $this->midCollectableRating21 = $midCollectableRating21;

        return $this;
    }

    public function getMidCollectableRating22(): ?string
    {
        return $this->midCollectableRating22;
    }

    public function setMidCollectableRating22(?string $midCollectableRating22): self
    {
        $this->midCollectableRating22 = $midCollectableRating22;

        return $this;
    }

    public function getHighCollectableRating0(): ?string
    {
        return $this->highCollectableRating0;
    }

    public function setHighCollectableRating0(?string $highCollectableRating0): self
    {
        $this->highCollectableRating0 = $highCollectableRating0;

        return $this;
    }

    public function getHighCollectableRating1(): ?string
    {
        return $this->highCollectableRating1;
    }

    public function setHighCollectableRating1(?string $highCollectableRating1): self
    {
        $this->highCollectableRating1 = $highCollectableRating1;

        return $this;
    }

    public function getHighCollectableRating2(): ?string
    {
        return $this->highCollectableRating2;
    }

    public function setHighCollectableRating2(?string $highCollectableRating2): self
    {
        $this->highCollectableRating2 = $highCollectableRating2;

        return $this;
    }

    public function getHighCollectableRating3(): ?string
    {
        return $this->highCollectableRating3;
    }

    public function setHighCollectableRating3(?string $highCollectableRating3): self
    {
        $this->highCollectableRating3 = $highCollectableRating3;

        return $this;
    }

    public function getHighCollectableRating4(): ?string
    {
        return $this->highCollectableRating4;
    }

    public function setHighCollectableRating4(?string $highCollectableRating4): self
    {
        $this->highCollectableRating4 = $highCollectableRating4;

        return $this;
    }

    public function getHighCollectableRating5(): ?string
    {
        return $this->highCollectableRating5;
    }

    public function setHighCollectableRating5(?string $highCollectableRating5): self
    {
        $this->highCollectableRating5 = $highCollectableRating5;

        return $this;
    }

    public function getHighCollectableRating6(): ?string
    {
        return $this->highCollectableRating6;
    }

    public function setHighCollectableRating6(?string $highCollectableRating6): self
    {
        $this->highCollectableRating6 = $highCollectableRating6;

        return $this;
    }

    public function getHighCollectableRating7(): ?string
    {
        return $this->highCollectableRating7;
    }

    public function setHighCollectableRating7(?string $highCollectableRating7): self
    {
        $this->highCollectableRating7 = $highCollectableRating7;

        return $this;
    }

    public function getHighCollectableRating8(): ?string
    {
        return $this->highCollectableRating8;
    }

    public function setHighCollectableRating8(?string $highCollectableRating8): self
    {
        $this->highCollectableRating8 = $highCollectableRating8;

        return $this;
    }

    public function getHighCollectableRating9(): ?string
    {
        return $this->highCollectableRating9;
    }

    public function setHighCollectableRating9(?string $highCollectableRating9): self
    {
        $this->highCollectableRating9 = $highCollectableRating9;

        return $this;
    }

    public function getHighCollectableRating10(): ?string
    {
        return $this->highCollectableRating10;
    }

    public function setHighCollectableRating10(?string $highCollectableRating10): self
    {
        $this->highCollectableRating10 = $highCollectableRating10;

        return $this;
    }

    public function getHighCollectableRating11(): ?string
    {
        return $this->highCollectableRating11;
    }

    public function setHighCollectableRating11(?string $highCollectableRating11): self
    {
        $this->highCollectableRating11 = $highCollectableRating11;

        return $this;
    }

    public function getHighCollectableRating12(): ?string
    {
        return $this->highCollectableRating12;
    }

    public function setHighCollectableRating12(?string $highCollectableRating12): self
    {
        $this->highCollectableRating12 = $highCollectableRating12;

        return $this;
    }

    public function getHighCollectableRating13(): ?string
    {
        return $this->highCollectableRating13;
    }

    public function setHighCollectableRating13(?string $highCollectableRating13): self
    {
        $this->highCollectableRating13 = $highCollectableRating13;

        return $this;
    }

    public function getHighCollectableRating14(): ?string
    {
        return $this->highCollectableRating14;
    }

    public function setHighCollectableRating14(?string $highCollectableRating14): self
    {
        $this->highCollectableRating14 = $highCollectableRating14;

        return $this;
    }

    public function getHighCollectableRating15(): ?string
    {
        return $this->highCollectableRating15;
    }

    public function setHighCollectableRating15(?string $highCollectableRating15): self
    {
        $this->highCollectableRating15 = $highCollectableRating15;

        return $this;
    }

    public function getHighCollectableRating16(): ?string
    {
        return $this->highCollectableRating16;
    }

    public function setHighCollectableRating16(?string $highCollectableRating16): self
    {
        $this->highCollectableRating16 = $highCollectableRating16;

        return $this;
    }

    public function getHighCollectableRating17(): ?string
    {
        return $this->highCollectableRating17;
    }

    public function setHighCollectableRating17(?string $highCollectableRating17): self
    {
        $this->highCollectableRating17 = $highCollectableRating17;

        return $this;
    }

    public function getHighCollectableRating18(): ?string
    {
        return $this->highCollectableRating18;
    }

    public function setHighCollectableRating18(?string $highCollectableRating18): self
    {
        $this->highCollectableRating18 = $highCollectableRating18;

        return $this;
    }

    public function getHighCollectableRating19(): ?string
    {
        return $this->highCollectableRating19;
    }

    public function setHighCollectableRating19(?string $highCollectableRating19): self
    {
        $this->highCollectableRating19 = $highCollectableRating19;

        return $this;
    }

    public function getHighCollectableRating20(): ?string
    {
        return $this->highCollectableRating20;
    }

    public function setHighCollectableRating20(?string $highCollectableRating20): self
    {
        $this->highCollectableRating20 = $highCollectableRating20;

        return $this;
    }

    public function getHighCollectableRating21(): ?string
    {
        return $this->highCollectableRating21;
    }

    public function setHighCollectableRating21(?string $highCollectableRating21): self
    {
        $this->highCollectableRating21 = $highCollectableRating21;

        return $this;
    }

    public function getHighCollectableRating22(): ?string
    {
        return $this->highCollectableRating22;
    }

    public function setHighCollectableRating22(?string $highCollectableRating22): self
    {
        $this->highCollectableRating22 = $highCollectableRating22;

        return $this;
    }

    public function getTermName22(): ?HwdcrafterSupplyTerm
    {
        return $this->termName22;
    }

    public function setTermName22(?HwdcrafterSupplyTerm $termName22): self
    {
        $this->termName22 = $termName22;

        return $this;
    }

    public function getTermName21(): ?HwdcrafterSupplyTerm
    {
        return $this->termName21;
    }

    public function setTermName21(?HwdcrafterSupplyTerm $termName21): self
    {
        $this->termName21 = $termName21;

        return $this;
    }

    public function getTermName20(): ?HwdcrafterSupplyTerm
    {
        return $this->termName20;
    }

    public function setTermName20(?HwdcrafterSupplyTerm $termName20): self
    {
        $this->termName20 = $termName20;

        return $this;
    }

    public function getTermName19(): ?HwdcrafterSupplyTerm
    {
        return $this->termName19;
    }

    public function setTermName19(?HwdcrafterSupplyTerm $termName19): self
    {
        $this->termName19 = $termName19;

        return $this;
    }

    public function getTermName18(): ?HwdcrafterSupplyTerm
    {
        return $this->termName18;
    }

    public function setTermName18(?HwdcrafterSupplyTerm $termName18): self
    {
        $this->termName18 = $termName18;

        return $this;
    }

    public function getTermName17(): ?HwdcrafterSupplyTerm
    {
        return $this->termName17;
    }

    public function setTermName17(?HwdcrafterSupplyTerm $termName17): self
    {
        $this->termName17 = $termName17;

        return $this;
    }

    public function getTermName16(): ?HwdcrafterSupplyTerm
    {
        return $this->termName16;
    }

    public function setTermName16(?HwdcrafterSupplyTerm $termName16): self
    {
        $this->termName16 = $termName16;

        return $this;
    }

    public function getTermName15(): ?HwdcrafterSupplyTerm
    {
        return $this->termName15;
    }

    public function setTermName15(?HwdcrafterSupplyTerm $termName15): self
    {
        $this->termName15 = $termName15;

        return $this;
    }

    public function getTermName14(): ?HwdcrafterSupplyTerm
    {
        return $this->termName14;
    }

    public function setTermName14(?HwdcrafterSupplyTerm $termName14): self
    {
        $this->termName14 = $termName14;

        return $this;
    }

    public function getTermName13(): ?HwdcrafterSupplyTerm
    {
        return $this->termName13;
    }

    public function setTermName13(?HwdcrafterSupplyTerm $termName13): self
    {
        $this->termName13 = $termName13;

        return $this;
    }

    public function getTermName12(): ?HwdcrafterSupplyTerm
    {
        return $this->termName12;
    }

    public function setTermName12(?HwdcrafterSupplyTerm $termName12): self
    {
        $this->termName12 = $termName12;

        return $this;
    }

    public function getTermName11(): ?HwdcrafterSupplyTerm
    {
        return $this->termName11;
    }

    public function setTermName11(?HwdcrafterSupplyTerm $termName11): self
    {
        $this->termName11 = $termName11;

        return $this;
    }

    public function getTermName10(): ?HwdcrafterSupplyTerm
    {
        return $this->termName10;
    }

    public function setTermName10(?HwdcrafterSupplyTerm $termName10): self
    {
        $this->termName10 = $termName10;

        return $this;
    }

    public function getTermName9(): ?HwdcrafterSupplyTerm
    {
        return $this->termName9;
    }

    public function setTermName9(?HwdcrafterSupplyTerm $termName9): self
    {
        $this->termName9 = $termName9;

        return $this;
    }

    public function getTermName8(): ?HwdcrafterSupplyTerm
    {
        return $this->termName8;
    }

    public function setTermName8(?HwdcrafterSupplyTerm $termName8): self
    {
        $this->termName8 = $termName8;

        return $this;
    }

    public function getTermName7(): ?HwdcrafterSupplyTerm
    {
        return $this->termName7;
    }

    public function setTermName7(?HwdcrafterSupplyTerm $termName7): self
    {
        $this->termName7 = $termName7;

        return $this;
    }

    public function getTermName6(): ?HwdcrafterSupplyTerm
    {
        return $this->termName6;
    }

    public function setTermName6(?HwdcrafterSupplyTerm $termName6): self
    {
        $this->termName6 = $termName6;

        return $this;
    }

    public function getTermName5(): ?HwdcrafterSupplyTerm
    {
        return $this->termName5;
    }

    public function setTermName5(?HwdcrafterSupplyTerm $termName5): self
    {
        $this->termName5 = $termName5;

        return $this;
    }

    public function getTermName4(): ?HwdcrafterSupplyTerm
    {
        return $this->termName4;
    }

    public function setTermName4(?HwdcrafterSupplyTerm $termName4): self
    {
        $this->termName4 = $termName4;

        return $this;
    }

    public function getTermName3(): ?HwdcrafterSupplyTerm
    {
        return $this->termName3;
    }

    public function setTermName3(?HwdcrafterSupplyTerm $termName3): self
    {
        $this->termName3 = $termName3;

        return $this;
    }

    public function getTermName2(): ?HwdcrafterSupplyTerm
    {
        return $this->termName2;
    }

    public function setTermName2(?HwdcrafterSupplyTerm $termName2): self
    {
        $this->termName2 = $termName2;

        return $this;
    }

    public function getTermName1(): ?HwdcrafterSupplyTerm
    {
        return $this->termName1;
    }

    public function setTermName1(?HwdcrafterSupplyTerm $termName1): self
    {
        $this->termName1 = $termName1;

        return $this;
    }

    public function getTermName0(): ?HwdcrafterSupplyTerm
    {
        return $this->termName0;
    }

    public function setTermName0(?HwdcrafterSupplyTerm $termName0): self
    {
        $this->termName0 = $termName0;

        return $this;
    }

    public function getHighCollectableRewardPostPhase22(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase22;
    }

    public function setHighCollectableRewardPostPhase22(?HwdcrafterSupplyReward $highCollectableRewardPostPhase22): self
    {
        $this->highCollectableRewardPostPhase22 = $highCollectableRewardPostPhase22;

        return $this;
    }

    public function getHighCollectableRewardPostPhase21(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase21;
    }

    public function setHighCollectableRewardPostPhase21(?HwdcrafterSupplyReward $highCollectableRewardPostPhase21): self
    {
        $this->highCollectableRewardPostPhase21 = $highCollectableRewardPostPhase21;

        return $this;
    }

    public function getHighCollectableRewardPostPhase20(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase20;
    }

    public function setHighCollectableRewardPostPhase20(?HwdcrafterSupplyReward $highCollectableRewardPostPhase20): self
    {
        $this->highCollectableRewardPostPhase20 = $highCollectableRewardPostPhase20;

        return $this;
    }

    public function getHighCollectableRewardPostPhase19(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase19;
    }

    public function setHighCollectableRewardPostPhase19(?HwdcrafterSupplyReward $highCollectableRewardPostPhase19): self
    {
        $this->highCollectableRewardPostPhase19 = $highCollectableRewardPostPhase19;

        return $this;
    }

    public function getHighCollectableRewardPostPhase18(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase18;
    }

    public function setHighCollectableRewardPostPhase18(?HwdcrafterSupplyReward $highCollectableRewardPostPhase18): self
    {
        $this->highCollectableRewardPostPhase18 = $highCollectableRewardPostPhase18;

        return $this;
    }

    public function getHighCollectableRewardPostPhase17(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase17;
    }

    public function setHighCollectableRewardPostPhase17(?HwdcrafterSupplyReward $highCollectableRewardPostPhase17): self
    {
        $this->highCollectableRewardPostPhase17 = $highCollectableRewardPostPhase17;

        return $this;
    }

    public function getHighCollectableRewardPostPhase16(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase16;
    }

    public function setHighCollectableRewardPostPhase16(?HwdcrafterSupplyReward $highCollectableRewardPostPhase16): self
    {
        $this->highCollectableRewardPostPhase16 = $highCollectableRewardPostPhase16;

        return $this;
    }

    public function getHighCollectableRewardPostPhase15(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase15;
    }

    public function setHighCollectableRewardPostPhase15(?HwdcrafterSupplyReward $highCollectableRewardPostPhase15): self
    {
        $this->highCollectableRewardPostPhase15 = $highCollectableRewardPostPhase15;

        return $this;
    }

    public function getHighCollectableRewardPostPhase14(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase14;
    }

    public function setHighCollectableRewardPostPhase14(?HwdcrafterSupplyReward $highCollectableRewardPostPhase14): self
    {
        $this->highCollectableRewardPostPhase14 = $highCollectableRewardPostPhase14;

        return $this;
    }

    public function getHighCollectableRewardPostPhase13(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase13;
    }

    public function setHighCollectableRewardPostPhase13(?HwdcrafterSupplyReward $highCollectableRewardPostPhase13): self
    {
        $this->highCollectableRewardPostPhase13 = $highCollectableRewardPostPhase13;

        return $this;
    }

    public function getHighCollectableRewardPostPhase12(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase12;
    }

    public function setHighCollectableRewardPostPhase12(?HwdcrafterSupplyReward $highCollectableRewardPostPhase12): self
    {
        $this->highCollectableRewardPostPhase12 = $highCollectableRewardPostPhase12;

        return $this;
    }

    public function getHighCollectableRewardPostPhase11(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase11;
    }

    public function setHighCollectableRewardPostPhase11(?HwdcrafterSupplyReward $highCollectableRewardPostPhase11): self
    {
        $this->highCollectableRewardPostPhase11 = $highCollectableRewardPostPhase11;

        return $this;
    }

    public function getHighCollectableRewardPostPhase10(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase10;
    }

    public function setHighCollectableRewardPostPhase10(?HwdcrafterSupplyReward $highCollectableRewardPostPhase10): self
    {
        $this->highCollectableRewardPostPhase10 = $highCollectableRewardPostPhase10;

        return $this;
    }

    public function getHighCollectableRewardPostPhase9(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase9;
    }

    public function setHighCollectableRewardPostPhase9(?HwdcrafterSupplyReward $highCollectableRewardPostPhase9): self
    {
        $this->highCollectableRewardPostPhase9 = $highCollectableRewardPostPhase9;

        return $this;
    }

    public function getHighCollectableRewardPostPhase8(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase8;
    }

    public function setHighCollectableRewardPostPhase8(?HwdcrafterSupplyReward $highCollectableRewardPostPhase8): self
    {
        $this->highCollectableRewardPostPhase8 = $highCollectableRewardPostPhase8;

        return $this;
    }

    public function getHighCollectableRewardPostPhase7(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase7;
    }

    public function setHighCollectableRewardPostPhase7(?HwdcrafterSupplyReward $highCollectableRewardPostPhase7): self
    {
        $this->highCollectableRewardPostPhase7 = $highCollectableRewardPostPhase7;

        return $this;
    }

    public function getHighCollectableRewardPostPhase6(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase6;
    }

    public function setHighCollectableRewardPostPhase6(?HwdcrafterSupplyReward $highCollectableRewardPostPhase6): self
    {
        $this->highCollectableRewardPostPhase6 = $highCollectableRewardPostPhase6;

        return $this;
    }

    public function getHighCollectableRewardPostPhase5(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase5;
    }

    public function setHighCollectableRewardPostPhase5(?HwdcrafterSupplyReward $highCollectableRewardPostPhase5): self
    {
        $this->highCollectableRewardPostPhase5 = $highCollectableRewardPostPhase5;

        return $this;
    }

    public function getHighCollectableRewardPostPhase4(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase4;
    }

    public function setHighCollectableRewardPostPhase4(?HwdcrafterSupplyReward $highCollectableRewardPostPhase4): self
    {
        $this->highCollectableRewardPostPhase4 = $highCollectableRewardPostPhase4;

        return $this;
    }

    public function getHighCollectableRewardPostPhase3(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase3;
    }

    public function setHighCollectableRewardPostPhase3(?HwdcrafterSupplyReward $highCollectableRewardPostPhase3): self
    {
        $this->highCollectableRewardPostPhase3 = $highCollectableRewardPostPhase3;

        return $this;
    }

    public function getHighCollectableRewardPostPhase2(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase2;
    }

    public function setHighCollectableRewardPostPhase2(?HwdcrafterSupplyReward $highCollectableRewardPostPhase2): self
    {
        $this->highCollectableRewardPostPhase2 = $highCollectableRewardPostPhase2;

        return $this;
    }

    public function getHighCollectableRewardPostPhase1(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase1;
    }

    public function setHighCollectableRewardPostPhase1(?HwdcrafterSupplyReward $highCollectableRewardPostPhase1): self
    {
        $this->highCollectableRewardPostPhase1 = $highCollectableRewardPostPhase1;

        return $this;
    }

    public function getHighCollectableRewardPostPhase0(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableRewardPostPhase0;
    }

    public function setHighCollectableRewardPostPhase0(?HwdcrafterSupplyReward $highCollectableRewardPostPhase0): self
    {
        $this->highCollectableRewardPostPhase0 = $highCollectableRewardPostPhase0;

        return $this;
    }

    public function getMidCollectableRewardPostPhase22(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase22;
    }

    public function setMidCollectableRewardPostPhase22(?HwdcrafterSupplyReward $midCollectableRewardPostPhase22): self
    {
        $this->midCollectableRewardPostPhase22 = $midCollectableRewardPostPhase22;

        return $this;
    }

    public function getMidCollectableRewardPostPhase21(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase21;
    }

    public function setMidCollectableRewardPostPhase21(?HwdcrafterSupplyReward $midCollectableRewardPostPhase21): self
    {
        $this->midCollectableRewardPostPhase21 = $midCollectableRewardPostPhase21;

        return $this;
    }

    public function getMidCollectableRewardPostPhase20(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase20;
    }

    public function setMidCollectableRewardPostPhase20(?HwdcrafterSupplyReward $midCollectableRewardPostPhase20): self
    {
        $this->midCollectableRewardPostPhase20 = $midCollectableRewardPostPhase20;

        return $this;
    }

    public function getMidCollectableRewardPostPhase19(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase19;
    }

    public function setMidCollectableRewardPostPhase19(?HwdcrafterSupplyReward $midCollectableRewardPostPhase19): self
    {
        $this->midCollectableRewardPostPhase19 = $midCollectableRewardPostPhase19;

        return $this;
    }

    public function getMidCollectableRewardPostPhase18(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase18;
    }

    public function setMidCollectableRewardPostPhase18(?HwdcrafterSupplyReward $midCollectableRewardPostPhase18): self
    {
        $this->midCollectableRewardPostPhase18 = $midCollectableRewardPostPhase18;

        return $this;
    }

    public function getMidCollectableRewardPostPhase17(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase17;
    }

    public function setMidCollectableRewardPostPhase17(?HwdcrafterSupplyReward $midCollectableRewardPostPhase17): self
    {
        $this->midCollectableRewardPostPhase17 = $midCollectableRewardPostPhase17;

        return $this;
    }

    public function getMidCollectableRewardPostPhase16(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase16;
    }

    public function setMidCollectableRewardPostPhase16(?HwdcrafterSupplyReward $midCollectableRewardPostPhase16): self
    {
        $this->midCollectableRewardPostPhase16 = $midCollectableRewardPostPhase16;

        return $this;
    }

    public function getMidCollectableRewardPostPhase15(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase15;
    }

    public function setMidCollectableRewardPostPhase15(?HwdcrafterSupplyReward $midCollectableRewardPostPhase15): self
    {
        $this->midCollectableRewardPostPhase15 = $midCollectableRewardPostPhase15;

        return $this;
    }

    public function getMidCollectableRewardPostPhase14(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase14;
    }

    public function setMidCollectableRewardPostPhase14(?HwdcrafterSupplyReward $midCollectableRewardPostPhase14): self
    {
        $this->midCollectableRewardPostPhase14 = $midCollectableRewardPostPhase14;

        return $this;
    }

    public function getMidCollectableRewardPostPhase13(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase13;
    }

    public function setMidCollectableRewardPostPhase13(?HwdcrafterSupplyReward $midCollectableRewardPostPhase13): self
    {
        $this->midCollectableRewardPostPhase13 = $midCollectableRewardPostPhase13;

        return $this;
    }

    public function getMidCollectableRewardPostPhase12(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase12;
    }

    public function setMidCollectableRewardPostPhase12(?HwdcrafterSupplyReward $midCollectableRewardPostPhase12): self
    {
        $this->midCollectableRewardPostPhase12 = $midCollectableRewardPostPhase12;

        return $this;
    }

    public function getMidCollectableRewardPostPhase11(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase11;
    }

    public function setMidCollectableRewardPostPhase11(?HwdcrafterSupplyReward $midCollectableRewardPostPhase11): self
    {
        $this->midCollectableRewardPostPhase11 = $midCollectableRewardPostPhase11;

        return $this;
    }

    public function getMidCollectableRewardPostPhase10(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase10;
    }

    public function setMidCollectableRewardPostPhase10(?HwdcrafterSupplyReward $midCollectableRewardPostPhase10): self
    {
        $this->midCollectableRewardPostPhase10 = $midCollectableRewardPostPhase10;

        return $this;
    }

    public function getMidCollectableRewardPostPhase9(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase9;
    }

    public function setMidCollectableRewardPostPhase9(?HwdcrafterSupplyReward $midCollectableRewardPostPhase9): self
    {
        $this->midCollectableRewardPostPhase9 = $midCollectableRewardPostPhase9;

        return $this;
    }

    public function getMidCollectableRewardPostPhase8(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase8;
    }

    public function setMidCollectableRewardPostPhase8(?HwdcrafterSupplyReward $midCollectableRewardPostPhase8): self
    {
        $this->midCollectableRewardPostPhase8 = $midCollectableRewardPostPhase8;

        return $this;
    }

    public function getMidCollectableRewardPostPhase7(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase7;
    }

    public function setMidCollectableRewardPostPhase7(?HwdcrafterSupplyReward $midCollectableRewardPostPhase7): self
    {
        $this->midCollectableRewardPostPhase7 = $midCollectableRewardPostPhase7;

        return $this;
    }

    public function getMidCollectableRewardPostPhase6(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase6;
    }

    public function setMidCollectableRewardPostPhase6(?HwdcrafterSupplyReward $midCollectableRewardPostPhase6): self
    {
        $this->midCollectableRewardPostPhase6 = $midCollectableRewardPostPhase6;

        return $this;
    }

    public function getMidCollectableRewardPostPhase5(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase5;
    }

    public function setMidCollectableRewardPostPhase5(?HwdcrafterSupplyReward $midCollectableRewardPostPhase5): self
    {
        $this->midCollectableRewardPostPhase5 = $midCollectableRewardPostPhase5;

        return $this;
    }

    public function getMidCollectableRewardPostPhase4(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase4;
    }

    public function setMidCollectableRewardPostPhase4(?HwdcrafterSupplyReward $midCollectableRewardPostPhase4): self
    {
        $this->midCollectableRewardPostPhase4 = $midCollectableRewardPostPhase4;

        return $this;
    }

    public function getMidCollectableRewardPostPhase3(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase3;
    }

    public function setMidCollectableRewardPostPhase3(?HwdcrafterSupplyReward $midCollectableRewardPostPhase3): self
    {
        $this->midCollectableRewardPostPhase3 = $midCollectableRewardPostPhase3;

        return $this;
    }

    public function getMidCollectableRewardPostPhase2(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase2;
    }

    public function setMidCollectableRewardPostPhase2(?HwdcrafterSupplyReward $midCollectableRewardPostPhase2): self
    {
        $this->midCollectableRewardPostPhase2 = $midCollectableRewardPostPhase2;

        return $this;
    }

    public function getMidCollectableRewardPostPhase1(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase1;
    }

    public function setMidCollectableRewardPostPhase1(?HwdcrafterSupplyReward $midCollectableRewardPostPhase1): self
    {
        $this->midCollectableRewardPostPhase1 = $midCollectableRewardPostPhase1;

        return $this;
    }

    public function getMidCollectableRewardPostPhase0(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableRewardPostPhase0;
    }

    public function setMidCollectableRewardPostPhase0(?HwdcrafterSupplyReward $midCollectableRewardPostPhase0): self
    {
        $this->midCollectableRewardPostPhase0 = $midCollectableRewardPostPhase0;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase22(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase22;
    }

    public function setBaseCollectableRewardPostPhase22(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase22): self
    {
        $this->baseCollectableRewardPostPhase22 = $baseCollectableRewardPostPhase22;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase21(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase21;
    }

    public function setBaseCollectableRewardPostPhase21(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase21): self
    {
        $this->baseCollectableRewardPostPhase21 = $baseCollectableRewardPostPhase21;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase20(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase20;
    }

    public function setBaseCollectableRewardPostPhase20(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase20): self
    {
        $this->baseCollectableRewardPostPhase20 = $baseCollectableRewardPostPhase20;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase19(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase19;
    }

    public function setBaseCollectableRewardPostPhase19(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase19): self
    {
        $this->baseCollectableRewardPostPhase19 = $baseCollectableRewardPostPhase19;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase18(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase18;
    }

    public function setBaseCollectableRewardPostPhase18(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase18): self
    {
        $this->baseCollectableRewardPostPhase18 = $baseCollectableRewardPostPhase18;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase17(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase17;
    }

    public function setBaseCollectableRewardPostPhase17(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase17): self
    {
        $this->baseCollectableRewardPostPhase17 = $baseCollectableRewardPostPhase17;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase16(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase16;
    }

    public function setBaseCollectableRewardPostPhase16(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase16): self
    {
        $this->baseCollectableRewardPostPhase16 = $baseCollectableRewardPostPhase16;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase15(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase15;
    }

    public function setBaseCollectableRewardPostPhase15(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase15): self
    {
        $this->baseCollectableRewardPostPhase15 = $baseCollectableRewardPostPhase15;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase14(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase14;
    }

    public function setBaseCollectableRewardPostPhase14(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase14): self
    {
        $this->baseCollectableRewardPostPhase14 = $baseCollectableRewardPostPhase14;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase13(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase13;
    }

    public function setBaseCollectableRewardPostPhase13(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase13): self
    {
        $this->baseCollectableRewardPostPhase13 = $baseCollectableRewardPostPhase13;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase12(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase12;
    }

    public function setBaseCollectableRewardPostPhase12(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase12): self
    {
        $this->baseCollectableRewardPostPhase12 = $baseCollectableRewardPostPhase12;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase11(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase11;
    }

    public function setBaseCollectableRewardPostPhase11(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase11): self
    {
        $this->baseCollectableRewardPostPhase11 = $baseCollectableRewardPostPhase11;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase10(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase10;
    }

    public function setBaseCollectableRewardPostPhase10(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase10): self
    {
        $this->baseCollectableRewardPostPhase10 = $baseCollectableRewardPostPhase10;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase9(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase9;
    }

    public function setBaseCollectableRewardPostPhase9(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase9): self
    {
        $this->baseCollectableRewardPostPhase9 = $baseCollectableRewardPostPhase9;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase8(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase8;
    }

    public function setBaseCollectableRewardPostPhase8(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase8): self
    {
        $this->baseCollectableRewardPostPhase8 = $baseCollectableRewardPostPhase8;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase7(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase7;
    }

    public function setBaseCollectableRewardPostPhase7(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase7): self
    {
        $this->baseCollectableRewardPostPhase7 = $baseCollectableRewardPostPhase7;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase6(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase6;
    }

    public function setBaseCollectableRewardPostPhase6(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase6): self
    {
        $this->baseCollectableRewardPostPhase6 = $baseCollectableRewardPostPhase6;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase5(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase5;
    }

    public function setBaseCollectableRewardPostPhase5(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase5): self
    {
        $this->baseCollectableRewardPostPhase5 = $baseCollectableRewardPostPhase5;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase4(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase4;
    }

    public function setBaseCollectableRewardPostPhase4(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase4): self
    {
        $this->baseCollectableRewardPostPhase4 = $baseCollectableRewardPostPhase4;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase3(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase3;
    }

    public function setBaseCollectableRewardPostPhase3(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase3): self
    {
        $this->baseCollectableRewardPostPhase3 = $baseCollectableRewardPostPhase3;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase2(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase2;
    }

    public function setBaseCollectableRewardPostPhase2(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase2): self
    {
        $this->baseCollectableRewardPostPhase2 = $baseCollectableRewardPostPhase2;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase1(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase1;
    }

    public function setBaseCollectableRewardPostPhase1(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase1): self
    {
        $this->baseCollectableRewardPostPhase1 = $baseCollectableRewardPostPhase1;

        return $this;
    }

    public function getBaseCollectableRewardPostPhase0(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableRewardPostPhase0;
    }

    public function setBaseCollectableRewardPostPhase0(?HwdcrafterSupplyReward $baseCollectableRewardPostPhase0): self
    {
        $this->baseCollectableRewardPostPhase0 = $baseCollectableRewardPostPhase0;

        return $this;
    }

    public function getHighCollectableReward22(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward22;
    }

    public function setHighCollectableReward22(?HwdcrafterSupplyReward $highCollectableReward22): self
    {
        $this->highCollectableReward22 = $highCollectableReward22;

        return $this;
    }

    public function getHighCollectableReward21(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward21;
    }

    public function setHighCollectableReward21(?HwdcrafterSupplyReward $highCollectableReward21): self
    {
        $this->highCollectableReward21 = $highCollectableReward21;

        return $this;
    }

    public function getHighCollectableReward20(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward20;
    }

    public function setHighCollectableReward20(?HwdcrafterSupplyReward $highCollectableReward20): self
    {
        $this->highCollectableReward20 = $highCollectableReward20;

        return $this;
    }

    public function getHighCollectableReward19(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward19;
    }

    public function setHighCollectableReward19(?HwdcrafterSupplyReward $highCollectableReward19): self
    {
        $this->highCollectableReward19 = $highCollectableReward19;

        return $this;
    }

    public function getHighCollectableReward18(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward18;
    }

    public function setHighCollectableReward18(?HwdcrafterSupplyReward $highCollectableReward18): self
    {
        $this->highCollectableReward18 = $highCollectableReward18;

        return $this;
    }

    public function getHighCollectableReward17(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward17;
    }

    public function setHighCollectableReward17(?HwdcrafterSupplyReward $highCollectableReward17): self
    {
        $this->highCollectableReward17 = $highCollectableReward17;

        return $this;
    }

    public function getHighCollectableReward16(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward16;
    }

    public function setHighCollectableReward16(?HwdcrafterSupplyReward $highCollectableReward16): self
    {
        $this->highCollectableReward16 = $highCollectableReward16;

        return $this;
    }

    public function getHighCollectableReward15(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward15;
    }

    public function setHighCollectableReward15(?HwdcrafterSupplyReward $highCollectableReward15): self
    {
        $this->highCollectableReward15 = $highCollectableReward15;

        return $this;
    }

    public function getHighCollectableReward14(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward14;
    }

    public function setHighCollectableReward14(?HwdcrafterSupplyReward $highCollectableReward14): self
    {
        $this->highCollectableReward14 = $highCollectableReward14;

        return $this;
    }

    public function getHighCollectableReward13(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward13;
    }

    public function setHighCollectableReward13(?HwdcrafterSupplyReward $highCollectableReward13): self
    {
        $this->highCollectableReward13 = $highCollectableReward13;

        return $this;
    }

    public function getHighCollectableReward12(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward12;
    }

    public function setHighCollectableReward12(?HwdcrafterSupplyReward $highCollectableReward12): self
    {
        $this->highCollectableReward12 = $highCollectableReward12;

        return $this;
    }

    public function getHighCollectableReward11(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward11;
    }

    public function setHighCollectableReward11(?HwdcrafterSupplyReward $highCollectableReward11): self
    {
        $this->highCollectableReward11 = $highCollectableReward11;

        return $this;
    }

    public function getHighCollectableReward10(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward10;
    }

    public function setHighCollectableReward10(?HwdcrafterSupplyReward $highCollectableReward10): self
    {
        $this->highCollectableReward10 = $highCollectableReward10;

        return $this;
    }

    public function getHighCollectableReward9(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward9;
    }

    public function setHighCollectableReward9(?HwdcrafterSupplyReward $highCollectableReward9): self
    {
        $this->highCollectableReward9 = $highCollectableReward9;

        return $this;
    }

    public function getHighCollectableReward8(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward8;
    }

    public function setHighCollectableReward8(?HwdcrafterSupplyReward $highCollectableReward8): self
    {
        $this->highCollectableReward8 = $highCollectableReward8;

        return $this;
    }

    public function getHighCollectableReward7(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward7;
    }

    public function setHighCollectableReward7(?HwdcrafterSupplyReward $highCollectableReward7): self
    {
        $this->highCollectableReward7 = $highCollectableReward7;

        return $this;
    }

    public function getHighCollectableReward6(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward6;
    }

    public function setHighCollectableReward6(?HwdcrafterSupplyReward $highCollectableReward6): self
    {
        $this->highCollectableReward6 = $highCollectableReward6;

        return $this;
    }

    public function getHighCollectableReward5(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward5;
    }

    public function setHighCollectableReward5(?HwdcrafterSupplyReward $highCollectableReward5): self
    {
        $this->highCollectableReward5 = $highCollectableReward5;

        return $this;
    }

    public function getHighCollectableReward4(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward4;
    }

    public function setHighCollectableReward4(?HwdcrafterSupplyReward $highCollectableReward4): self
    {
        $this->highCollectableReward4 = $highCollectableReward4;

        return $this;
    }

    public function getHighCollectableReward3(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward3;
    }

    public function setHighCollectableReward3(?HwdcrafterSupplyReward $highCollectableReward3): self
    {
        $this->highCollectableReward3 = $highCollectableReward3;

        return $this;
    }

    public function getHighCollectableReward2(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward2;
    }

    public function setHighCollectableReward2(?HwdcrafterSupplyReward $highCollectableReward2): self
    {
        $this->highCollectableReward2 = $highCollectableReward2;

        return $this;
    }

    public function getHighCollectableReward1(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward1;
    }

    public function setHighCollectableReward1(?HwdcrafterSupplyReward $highCollectableReward1): self
    {
        $this->highCollectableReward1 = $highCollectableReward1;

        return $this;
    }

    public function getHighCollectableReward0(): ?HwdcrafterSupplyReward
    {
        return $this->highCollectableReward0;
    }

    public function setHighCollectableReward0(?HwdcrafterSupplyReward $highCollectableReward0): self
    {
        $this->highCollectableReward0 = $highCollectableReward0;

        return $this;
    }

    public function getMidCollectableReward22(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward22;
    }

    public function setMidCollectableReward22(?HwdcrafterSupplyReward $midCollectableReward22): self
    {
        $this->midCollectableReward22 = $midCollectableReward22;

        return $this;
    }

    public function getMidCollectableReward21(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward21;
    }

    public function setMidCollectableReward21(?HwdcrafterSupplyReward $midCollectableReward21): self
    {
        $this->midCollectableReward21 = $midCollectableReward21;

        return $this;
    }

    public function getMidCollectableReward20(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward20;
    }

    public function setMidCollectableReward20(?HwdcrafterSupplyReward $midCollectableReward20): self
    {
        $this->midCollectableReward20 = $midCollectableReward20;

        return $this;
    }

    public function getMidCollectableReward19(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward19;
    }

    public function setMidCollectableReward19(?HwdcrafterSupplyReward $midCollectableReward19): self
    {
        $this->midCollectableReward19 = $midCollectableReward19;

        return $this;
    }

    public function getMidCollectableReward18(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward18;
    }

    public function setMidCollectableReward18(?HwdcrafterSupplyReward $midCollectableReward18): self
    {
        $this->midCollectableReward18 = $midCollectableReward18;

        return $this;
    }

    public function getMidCollectableReward17(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward17;
    }

    public function setMidCollectableReward17(?HwdcrafterSupplyReward $midCollectableReward17): self
    {
        $this->midCollectableReward17 = $midCollectableReward17;

        return $this;
    }

    public function getMidCollectableReward16(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward16;
    }

    public function setMidCollectableReward16(?HwdcrafterSupplyReward $midCollectableReward16): self
    {
        $this->midCollectableReward16 = $midCollectableReward16;

        return $this;
    }

    public function getMidCollectableReward15(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward15;
    }

    public function setMidCollectableReward15(?HwdcrafterSupplyReward $midCollectableReward15): self
    {
        $this->midCollectableReward15 = $midCollectableReward15;

        return $this;
    }

    public function getMidCollectableReward14(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward14;
    }

    public function setMidCollectableReward14(?HwdcrafterSupplyReward $midCollectableReward14): self
    {
        $this->midCollectableReward14 = $midCollectableReward14;

        return $this;
    }

    public function getMidCollectableReward13(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward13;
    }

    public function setMidCollectableReward13(?HwdcrafterSupplyReward $midCollectableReward13): self
    {
        $this->midCollectableReward13 = $midCollectableReward13;

        return $this;
    }

    public function getMidCollectableReward12(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward12;
    }

    public function setMidCollectableReward12(?HwdcrafterSupplyReward $midCollectableReward12): self
    {
        $this->midCollectableReward12 = $midCollectableReward12;

        return $this;
    }

    public function getMidCollectableReward11(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward11;
    }

    public function setMidCollectableReward11(?HwdcrafterSupplyReward $midCollectableReward11): self
    {
        $this->midCollectableReward11 = $midCollectableReward11;

        return $this;
    }

    public function getMidCollectableReward10(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward10;
    }

    public function setMidCollectableReward10(?HwdcrafterSupplyReward $midCollectableReward10): self
    {
        $this->midCollectableReward10 = $midCollectableReward10;

        return $this;
    }

    public function getMidCollectableReward9(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward9;
    }

    public function setMidCollectableReward9(?HwdcrafterSupplyReward $midCollectableReward9): self
    {
        $this->midCollectableReward9 = $midCollectableReward9;

        return $this;
    }

    public function getMidCollectableReward8(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward8;
    }

    public function setMidCollectableReward8(?HwdcrafterSupplyReward $midCollectableReward8): self
    {
        $this->midCollectableReward8 = $midCollectableReward8;

        return $this;
    }

    public function getMidCollectableReward7(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward7;
    }

    public function setMidCollectableReward7(?HwdcrafterSupplyReward $midCollectableReward7): self
    {
        $this->midCollectableReward7 = $midCollectableReward7;

        return $this;
    }

    public function getMidCollectableReward6(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward6;
    }

    public function setMidCollectableReward6(?HwdcrafterSupplyReward $midCollectableReward6): self
    {
        $this->midCollectableReward6 = $midCollectableReward6;

        return $this;
    }

    public function getMidCollectableReward5(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward5;
    }

    public function setMidCollectableReward5(?HwdcrafterSupplyReward $midCollectableReward5): self
    {
        $this->midCollectableReward5 = $midCollectableReward5;

        return $this;
    }

    public function getMidCollectableReward4(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward4;
    }

    public function setMidCollectableReward4(?HwdcrafterSupplyReward $midCollectableReward4): self
    {
        $this->midCollectableReward4 = $midCollectableReward4;

        return $this;
    }

    public function getMidCollectableReward3(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward3;
    }

    public function setMidCollectableReward3(?HwdcrafterSupplyReward $midCollectableReward3): self
    {
        $this->midCollectableReward3 = $midCollectableReward3;

        return $this;
    }

    public function getMidCollectableReward2(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward2;
    }

    public function setMidCollectableReward2(?HwdcrafterSupplyReward $midCollectableReward2): self
    {
        $this->midCollectableReward2 = $midCollectableReward2;

        return $this;
    }

    public function getMidCollectableReward1(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward1;
    }

    public function setMidCollectableReward1(?HwdcrafterSupplyReward $midCollectableReward1): self
    {
        $this->midCollectableReward1 = $midCollectableReward1;

        return $this;
    }

    public function getMidCollectableReward0(): ?HwdcrafterSupplyReward
    {
        return $this->midCollectableReward0;
    }

    public function setMidCollectableReward0(?HwdcrafterSupplyReward $midCollectableReward0): self
    {
        $this->midCollectableReward0 = $midCollectableReward0;

        return $this;
    }

    public function getBaseCollectableReward22(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward22;
    }

    public function setBaseCollectableReward22(?HwdcrafterSupplyReward $baseCollectableReward22): self
    {
        $this->baseCollectableReward22 = $baseCollectableReward22;

        return $this;
    }

    public function getBaseCollectableReward21(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward21;
    }

    public function setBaseCollectableReward21(?HwdcrafterSupplyReward $baseCollectableReward21): self
    {
        $this->baseCollectableReward21 = $baseCollectableReward21;

        return $this;
    }

    public function getBaseCollectableReward20(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward20;
    }

    public function setBaseCollectableReward20(?HwdcrafterSupplyReward $baseCollectableReward20): self
    {
        $this->baseCollectableReward20 = $baseCollectableReward20;

        return $this;
    }

    public function getBaseCollectableReward19(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward19;
    }

    public function setBaseCollectableReward19(?HwdcrafterSupplyReward $baseCollectableReward19): self
    {
        $this->baseCollectableReward19 = $baseCollectableReward19;

        return $this;
    }

    public function getBaseCollectableReward18(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward18;
    }

    public function setBaseCollectableReward18(?HwdcrafterSupplyReward $baseCollectableReward18): self
    {
        $this->baseCollectableReward18 = $baseCollectableReward18;

        return $this;
    }

    public function getBaseCollectableReward17(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward17;
    }

    public function setBaseCollectableReward17(?HwdcrafterSupplyReward $baseCollectableReward17): self
    {
        $this->baseCollectableReward17 = $baseCollectableReward17;

        return $this;
    }

    public function getBaseCollectableReward16(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward16;
    }

    public function setBaseCollectableReward16(?HwdcrafterSupplyReward $baseCollectableReward16): self
    {
        $this->baseCollectableReward16 = $baseCollectableReward16;

        return $this;
    }

    public function getBaseCollectableReward15(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward15;
    }

    public function setBaseCollectableReward15(?HwdcrafterSupplyReward $baseCollectableReward15): self
    {
        $this->baseCollectableReward15 = $baseCollectableReward15;

        return $this;
    }

    public function getBaseCollectableReward14(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward14;
    }

    public function setBaseCollectableReward14(?HwdcrafterSupplyReward $baseCollectableReward14): self
    {
        $this->baseCollectableReward14 = $baseCollectableReward14;

        return $this;
    }

    public function getBaseCollectableReward13(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward13;
    }

    public function setBaseCollectableReward13(?HwdcrafterSupplyReward $baseCollectableReward13): self
    {
        $this->baseCollectableReward13 = $baseCollectableReward13;

        return $this;
    }

    public function getBaseCollectableReward12(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward12;
    }

    public function setBaseCollectableReward12(?HwdcrafterSupplyReward $baseCollectableReward12): self
    {
        $this->baseCollectableReward12 = $baseCollectableReward12;

        return $this;
    }

    public function getBaseCollectableReward11(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward11;
    }

    public function setBaseCollectableReward11(?HwdcrafterSupplyReward $baseCollectableReward11): self
    {
        $this->baseCollectableReward11 = $baseCollectableReward11;

        return $this;
    }

    public function getBaseCollectableReward10(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward10;
    }

    public function setBaseCollectableReward10(?HwdcrafterSupplyReward $baseCollectableReward10): self
    {
        $this->baseCollectableReward10 = $baseCollectableReward10;

        return $this;
    }

    public function getBaseCollectableReward9(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward9;
    }

    public function setBaseCollectableReward9(?HwdcrafterSupplyReward $baseCollectableReward9): self
    {
        $this->baseCollectableReward9 = $baseCollectableReward9;

        return $this;
    }

    public function getBaseCollectableReward8(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward8;
    }

    public function setBaseCollectableReward8(?HwdcrafterSupplyReward $baseCollectableReward8): self
    {
        $this->baseCollectableReward8 = $baseCollectableReward8;

        return $this;
    }

    public function getBaseCollectableReward7(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward7;
    }

    public function setBaseCollectableReward7(?HwdcrafterSupplyReward $baseCollectableReward7): self
    {
        $this->baseCollectableReward7 = $baseCollectableReward7;

        return $this;
    }

    public function getBaseCollectableReward6(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward6;
    }

    public function setBaseCollectableReward6(?HwdcrafterSupplyReward $baseCollectableReward6): self
    {
        $this->baseCollectableReward6 = $baseCollectableReward6;

        return $this;
    }

    public function getBaseCollectableReward5(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward5;
    }

    public function setBaseCollectableReward5(?HwdcrafterSupplyReward $baseCollectableReward5): self
    {
        $this->baseCollectableReward5 = $baseCollectableReward5;

        return $this;
    }

    public function getBaseCollectableReward4(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward4;
    }

    public function setBaseCollectableReward4(?HwdcrafterSupplyReward $baseCollectableReward4): self
    {
        $this->baseCollectableReward4 = $baseCollectableReward4;

        return $this;
    }

    public function getBaseCollectableReward3(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward3;
    }

    public function setBaseCollectableReward3(?HwdcrafterSupplyReward $baseCollectableReward3): self
    {
        $this->baseCollectableReward3 = $baseCollectableReward3;

        return $this;
    }

    public function getBaseCollectableReward2(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward2;
    }

    public function setBaseCollectableReward2(?HwdcrafterSupplyReward $baseCollectableReward2): self
    {
        $this->baseCollectableReward2 = $baseCollectableReward2;

        return $this;
    }

    public function getBaseCollectableReward1(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward1;
    }

    public function setBaseCollectableReward1(?HwdcrafterSupplyReward $baseCollectableReward1): self
    {
        $this->baseCollectableReward1 = $baseCollectableReward1;

        return $this;
    }

    public function getBaseCollectableReward0(): ?HwdcrafterSupplyReward
    {
        return $this->baseCollectableReward0;
    }

    public function setBaseCollectableReward0(?HwdcrafterSupplyReward $baseCollectableReward0): self
    {
        $this->baseCollectableReward0 = $baseCollectableReward0;

        return $this;
    }

    public function getItemTradeIn22(): ?Item
    {
        return $this->itemTradeIn22;
    }

    public function setItemTradeIn22(?Item $itemTradeIn22): self
    {
        $this->itemTradeIn22 = $itemTradeIn22;

        return $this;
    }

    public function getItemTradeIn21(): ?Item
    {
        return $this->itemTradeIn21;
    }

    public function setItemTradeIn21(?Item $itemTradeIn21): self
    {
        $this->itemTradeIn21 = $itemTradeIn21;

        return $this;
    }

    public function getItemTradeIn20(): ?Item
    {
        return $this->itemTradeIn20;
    }

    public function setItemTradeIn20(?Item $itemTradeIn20): self
    {
        $this->itemTradeIn20 = $itemTradeIn20;

        return $this;
    }

    public function getItemTradeIn19(): ?Item
    {
        return $this->itemTradeIn19;
    }

    public function setItemTradeIn19(?Item $itemTradeIn19): self
    {
        $this->itemTradeIn19 = $itemTradeIn19;

        return $this;
    }

    public function getItemTradeIn18(): ?Item
    {
        return $this->itemTradeIn18;
    }

    public function setItemTradeIn18(?Item $itemTradeIn18): self
    {
        $this->itemTradeIn18 = $itemTradeIn18;

        return $this;
    }

    public function getItemTradeIn17(): ?Item
    {
        return $this->itemTradeIn17;
    }

    public function setItemTradeIn17(?Item $itemTradeIn17): self
    {
        $this->itemTradeIn17 = $itemTradeIn17;

        return $this;
    }

    public function getItemTradeIn16(): ?Item
    {
        return $this->itemTradeIn16;
    }

    public function setItemTradeIn16(?Item $itemTradeIn16): self
    {
        $this->itemTradeIn16 = $itemTradeIn16;

        return $this;
    }

    public function getItemTradeIn15(): ?Item
    {
        return $this->itemTradeIn15;
    }

    public function setItemTradeIn15(?Item $itemTradeIn15): self
    {
        $this->itemTradeIn15 = $itemTradeIn15;

        return $this;
    }

    public function getItemTradeIn14(): ?Item
    {
        return $this->itemTradeIn14;
    }

    public function setItemTradeIn14(?Item $itemTradeIn14): self
    {
        $this->itemTradeIn14 = $itemTradeIn14;

        return $this;
    }

    public function getItemTradeIn13(): ?Item
    {
        return $this->itemTradeIn13;
    }

    public function setItemTradeIn13(?Item $itemTradeIn13): self
    {
        $this->itemTradeIn13 = $itemTradeIn13;

        return $this;
    }

    public function getItemTradeIn12(): ?Item
    {
        return $this->itemTradeIn12;
    }

    public function setItemTradeIn12(?Item $itemTradeIn12): self
    {
        $this->itemTradeIn12 = $itemTradeIn12;

        return $this;
    }

    public function getItemTradeIn11(): ?Item
    {
        return $this->itemTradeIn11;
    }

    public function setItemTradeIn11(?Item $itemTradeIn11): self
    {
        $this->itemTradeIn11 = $itemTradeIn11;

        return $this;
    }

    public function getItemTradeIn10(): ?Item
    {
        return $this->itemTradeIn10;
    }

    public function setItemTradeIn10(?Item $itemTradeIn10): self
    {
        $this->itemTradeIn10 = $itemTradeIn10;

        return $this;
    }

    public function getItemTradeIn9(): ?Item
    {
        return $this->itemTradeIn9;
    }

    public function setItemTradeIn9(?Item $itemTradeIn9): self
    {
        $this->itemTradeIn9 = $itemTradeIn9;

        return $this;
    }

    public function getItemTradeIn8(): ?Item
    {
        return $this->itemTradeIn8;
    }

    public function setItemTradeIn8(?Item $itemTradeIn8): self
    {
        $this->itemTradeIn8 = $itemTradeIn8;

        return $this;
    }

    public function getItemTradeIn7(): ?Item
    {
        return $this->itemTradeIn7;
    }

    public function setItemTradeIn7(?Item $itemTradeIn7): self
    {
        $this->itemTradeIn7 = $itemTradeIn7;

        return $this;
    }

    public function getItemTradeIn6(): ?Item
    {
        return $this->itemTradeIn6;
    }

    public function setItemTradeIn6(?Item $itemTradeIn6): self
    {
        $this->itemTradeIn6 = $itemTradeIn6;

        return $this;
    }

    public function getItemTradeIn5(): ?Item
    {
        return $this->itemTradeIn5;
    }

    public function setItemTradeIn5(?Item $itemTradeIn5): self
    {
        $this->itemTradeIn5 = $itemTradeIn5;

        return $this;
    }

    public function getItemTradeIn4(): ?Item
    {
        return $this->itemTradeIn4;
    }

    public function setItemTradeIn4(?Item $itemTradeIn4): self
    {
        $this->itemTradeIn4 = $itemTradeIn4;

        return $this;
    }

    public function getItemTradeIn3(): ?Item
    {
        return $this->itemTradeIn3;
    }

    public function setItemTradeIn3(?Item $itemTradeIn3): self
    {
        $this->itemTradeIn3 = $itemTradeIn3;

        return $this;
    }

    public function getItemTradeIn2(): ?Item
    {
        return $this->itemTradeIn2;
    }

    public function setItemTradeIn2(?Item $itemTradeIn2): self
    {
        $this->itemTradeIn2 = $itemTradeIn2;

        return $this;
    }

    public function getItemTradeIn1(): ?Item
    {
        return $this->itemTradeIn1;
    }

    public function setItemTradeIn1(?Item $itemTradeIn1): self
    {
        $this->itemTradeIn1 = $itemTradeIn1;

        return $this;
    }

    public function getItemTradeIn0(): ?Item
    {
        return $this->itemTradeIn0;
    }

    public function setItemTradeIn0(?Item $itemTradeIn0): self
    {
        $this->itemTradeIn0 = $itemTradeIn0;

        return $this;
    }
}
