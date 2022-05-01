<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BattleLeve.
 *
 * @ORM\Table(name="battle_leve", indexes={@ORM\Index(name="idx_d72165daa4a0066", columns={"bnpc_name_1"}), @ORM\Index(name="idx_d72165d678c48b9", columns={"objective_2"}), @ORM\Index(name="idx_d72165d4444614a", columns={"bnpc_name_3"}), @ORM\Index(name="idx_d72165d6c76294e", columns={"items_involved_2"}), @ORM\Index(name="idx_d72165d46d8accc", columns={"rule"}), @ORM\Index(name="idx_d72165ddd4d30f0", columns={"bnpc_name_0"}), @ORM\Index(name="idx_d72165d1b7119d8", columns={"items_involved_3"}), @ORM\Index(name="idx_d72165d1c1cddc1", columns={"items_involved_7"}), @ORM\Index(name="idx_d72165d89822995", columns={"objective_0"}), @ORM\Index(name="idx_d72165dda20f4e9", columns={"bnpc_name_4"}), @ORM\Index(name="idx_d72165df212bced", columns={"items_involved_5"}), @ORM\Index(name="idx_d72165d342e95c5", columns={"bnpc_name_6"}), @ORM\Index(name="idx_d72165df57f78f4", columns={"items_involved_1"}), @ORM\Index(name="idx_d72165d4329a553", columns={"bnpc_name_7"}), @ORM\Index(name="idx_d72165dad27c47f", columns={"bnpc_name_5"}), @ORM\Index(name="idx_d72165d85158c7b", columns={"items_involved_4"}), @ORM\Index(name="idx_d72165d6b1bed57", columns={"items_involved_6"}), @ORM\Index(name="idx_d72165d82784862", columns={"items_involved_0"}), @ORM\Index(name="idx_d72165dfe851903", columns={"objective_1"}), @ORM\Index(name="idx_d72165d334351dc", columns={"bnpc_name_2"})})
 * @ORM\Entity
 */
class BattleLeve
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="battle_leve_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_0", type="bigint", nullable=true)
     */
    private $time0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_1", type="bigint", nullable=true)
     */
    private $time1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_2", type="bigint", nullable=true)
     */
    private $time2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_3", type="bigint", nullable=true)
     */
    private $time3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_4", type="bigint", nullable=true)
     */
    private $time4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_5", type="bigint", nullable=true)
     */
    private $time5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_6", type="bigint", nullable=true)
     */
    private $time6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_7", type="bigint", nullable=true)
     */
    private $time7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_0", type="integer", nullable=true)
     */
    private $baseId0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_1", type="integer", nullable=true)
     */
    private $baseId1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_2", type="integer", nullable=true)
     */
    private $baseId2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_3", type="integer", nullable=true)
     */
    private $baseId3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_4", type="integer", nullable=true)
     */
    private $baseId4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_5", type="integer", nullable=true)
     */
    private $baseId5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_6", type="integer", nullable=true)
     */
    private $baseId6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_id_7", type="integer", nullable=true)
     */
    private $baseId7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_0", type="bigint", nullable=true)
     */
    private $enemyLevel0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_1", type="bigint", nullable=true)
     */
    private $enemyLevel1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_2", type="bigint", nullable=true)
     */
    private $enemyLevel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_3", type="bigint", nullable=true)
     */
    private $enemyLevel3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_4", type="bigint", nullable=true)
     */
    private $enemyLevel4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_5", type="bigint", nullable=true)
     */
    private $enemyLevel5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_6", type="bigint", nullable=true)
     */
    private $enemyLevel6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="enemy_level_7", type="bigint", nullable=true)
     */
    private $enemyLevel7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_0", type="integer", nullable=true)
     */
    private $itemsInvolvedQty0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_1", type="integer", nullable=true)
     */
    private $itemsInvolvedQty1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_2", type="integer", nullable=true)
     */
    private $itemsInvolvedQty2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_3", type="integer", nullable=true)
     */
    private $itemsInvolvedQty3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_4", type="integer", nullable=true)
     */
    private $itemsInvolvedQty4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_5", type="integer", nullable=true)
     */
    private $itemsInvolvedQty5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_6", type="integer", nullable=true)
     */
    private $itemsInvolvedQty6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_involved_qty_7", type="integer", nullable=true)
     */
    private $itemsInvolvedQty7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_0", type="integer", nullable=true)
     */
    private $itemDropRate0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_1", type="integer", nullable=true)
     */
    private $itemDropRate1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_2", type="integer", nullable=true)
     */
    private $itemDropRate2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_3", type="integer", nullable=true)
     */
    private $itemDropRate3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_4", type="integer", nullable=true)
     */
    private $itemDropRate4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_5", type="integer", nullable=true)
     */
    private $itemDropRate5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_6", type="integer", nullable=true)
     */
    private $itemDropRate6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_drop_rate_7", type="integer", nullable=true)
     */
    private $itemDropRate7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_0", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_1", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_2", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_3", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_4", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_5", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_6", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_number_involved_7", type="bigint", nullable=true)
     */
    private $toDoNumberInvolved7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_0_0", type="bigint", nullable=true)
     */
    private $toDoParam00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_1_0", type="bigint", nullable=true)
     */
    private $toDoParam10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_2_0", type="bigint", nullable=true)
     */
    private $toDoParam20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_3_0", type="bigint", nullable=true)
     */
    private $toDoParam30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_4_0", type="bigint", nullable=true)
     */
    private $toDoParam40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_5_0", type="bigint", nullable=true)
     */
    private $toDoParam50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_6_0", type="bigint", nullable=true)
     */
    private $toDoParam60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_7_0", type="bigint", nullable=true)
     */
    private $toDoParam70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_0_1", type="bigint", nullable=true)
     */
    private $toDoParam01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_1_1", type="bigint", nullable=true)
     */
    private $toDoParam11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_2_1", type="bigint", nullable=true)
     */
    private $toDoParam21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_3_1", type="bigint", nullable=true)
     */
    private $toDoParam31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_4_1", type="bigint", nullable=true)
     */
    private $toDoParam41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_5_1", type="bigint", nullable=true)
     */
    private $toDoParam51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_6_1", type="bigint", nullable=true)
     */
    private $toDoParam61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_7_1", type="bigint", nullable=true)
     */
    private $toDoParam71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_0_2", type="bigint", nullable=true)
     */
    private $toDoParam02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_1_2", type="bigint", nullable=true)
     */
    private $toDoParam12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_2_2", type="bigint", nullable=true)
     */
    private $toDoParam22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_3_2", type="bigint", nullable=true)
     */
    private $toDoParam32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_4_2", type="bigint", nullable=true)
     */
    private $toDoParam42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_5_2", type="bigint", nullable=true)
     */
    private $toDoParam52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_6_2", type="bigint", nullable=true)
     */
    private $toDoParam62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_7_2", type="bigint", nullable=true)
     */
    private $toDoParam72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_0_3", type="bigint", nullable=true)
     */
    private $toDoParam03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_1_3", type="bigint", nullable=true)
     */
    private $toDoParam13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_2_3", type="bigint", nullable=true)
     */
    private $toDoParam23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_3_3", type="bigint", nullable=true)
     */
    private $toDoParam33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_4_3", type="bigint", nullable=true)
     */
    private $toDoParam43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_5_3", type="bigint", nullable=true)
     */
    private $toDoParam53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_6_3", type="bigint", nullable=true)
     */
    private $toDoParam63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_7_3", type="bigint", nullable=true)
     */
    private $toDoParam73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_0_4", type="bigint", nullable=true)
     */
    private $toDoParam04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_1_4", type="bigint", nullable=true)
     */
    private $toDoParam14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_2_4", type="bigint", nullable=true)
     */
    private $toDoParam24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_3_4", type="bigint", nullable=true)
     */
    private $toDoParam34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_4_4", type="bigint", nullable=true)
     */
    private $toDoParam44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_5_4", type="bigint", nullable=true)
     */
    private $toDoParam54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_6_4", type="bigint", nullable=true)
     */
    private $toDoParam64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_param_7_4", type="bigint", nullable=true)
     */
    private $toDoParam74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_0", type="integer", nullable=true)
     */
    private $numOfAppearance00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_0", type="integer", nullable=true)
     */
    private $numOfAppearance10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_0", type="integer", nullable=true)
     */
    private $numOfAppearance20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_0", type="integer", nullable=true)
     */
    private $numOfAppearance30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_0", type="integer", nullable=true)
     */
    private $numOfAppearance40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_0", type="integer", nullable=true)
     */
    private $numOfAppearance50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_0", type="integer", nullable=true)
     */
    private $numOfAppearance60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_0", type="integer", nullable=true)
     */
    private $numOfAppearance70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_1", type="integer", nullable=true)
     */
    private $numOfAppearance01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_1", type="integer", nullable=true)
     */
    private $numOfAppearance11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_1", type="integer", nullable=true)
     */
    private $numOfAppearance21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_1", type="integer", nullable=true)
     */
    private $numOfAppearance31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_1", type="integer", nullable=true)
     */
    private $numOfAppearance41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_1", type="integer", nullable=true)
     */
    private $numOfAppearance51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_1", type="integer", nullable=true)
     */
    private $numOfAppearance61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_1", type="integer", nullable=true)
     */
    private $numOfAppearance71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_2", type="integer", nullable=true)
     */
    private $numOfAppearance02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_2", type="integer", nullable=true)
     */
    private $numOfAppearance12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_2", type="integer", nullable=true)
     */
    private $numOfAppearance22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_2", type="integer", nullable=true)
     */
    private $numOfAppearance32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_2", type="integer", nullable=true)
     */
    private $numOfAppearance42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_2", type="integer", nullable=true)
     */
    private $numOfAppearance52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_2", type="integer", nullable=true)
     */
    private $numOfAppearance62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_2", type="integer", nullable=true)
     */
    private $numOfAppearance72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_3", type="integer", nullable=true)
     */
    private $numOfAppearance03;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_3", type="integer", nullable=true)
     */
    private $numOfAppearance13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_3", type="integer", nullable=true)
     */
    private $numOfAppearance23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_3", type="integer", nullable=true)
     */
    private $numOfAppearance33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_3", type="integer", nullable=true)
     */
    private $numOfAppearance43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_3", type="integer", nullable=true)
     */
    private $numOfAppearance53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_3", type="integer", nullable=true)
     */
    private $numOfAppearance63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_3", type="integer", nullable=true)
     */
    private $numOfAppearance73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_4", type="integer", nullable=true)
     */
    private $numOfAppearance04;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_4", type="integer", nullable=true)
     */
    private $numOfAppearance14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_4", type="integer", nullable=true)
     */
    private $numOfAppearance24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_4", type="integer", nullable=true)
     */
    private $numOfAppearance34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_4", type="integer", nullable=true)
     */
    private $numOfAppearance44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_4", type="integer", nullable=true)
     */
    private $numOfAppearance54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_4", type="integer", nullable=true)
     */
    private $numOfAppearance64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_4", type="integer", nullable=true)
     */
    private $numOfAppearance74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_5", type="integer", nullable=true)
     */
    private $numOfAppearance05;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_5", type="integer", nullable=true)
     */
    private $numOfAppearance15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_5", type="integer", nullable=true)
     */
    private $numOfAppearance25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_5", type="integer", nullable=true)
     */
    private $numOfAppearance35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_5", type="integer", nullable=true)
     */
    private $numOfAppearance45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_5", type="integer", nullable=true)
     */
    private $numOfAppearance55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_5", type="integer", nullable=true)
     */
    private $numOfAppearance65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_5", type="integer", nullable=true)
     */
    private $numOfAppearance75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_6", type="integer", nullable=true)
     */
    private $numOfAppearance06;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_6", type="integer", nullable=true)
     */
    private $numOfAppearance16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_6", type="integer", nullable=true)
     */
    private $numOfAppearance26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_6", type="integer", nullable=true)
     */
    private $numOfAppearance36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_6", type="integer", nullable=true)
     */
    private $numOfAppearance46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_6", type="integer", nullable=true)
     */
    private $numOfAppearance56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_6", type="integer", nullable=true)
     */
    private $numOfAppearance66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_6", type="integer", nullable=true)
     */
    private $numOfAppearance76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_0_7", type="integer", nullable=true)
     */
    private $numOfAppearance07;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_1_7", type="integer", nullable=true)
     */
    private $numOfAppearance17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_2_7", type="integer", nullable=true)
     */
    private $numOfAppearance27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_3_7", type="integer", nullable=true)
     */
    private $numOfAppearance37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_4_7", type="integer", nullable=true)
     */
    private $numOfAppearance47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_5_7", type="integer", nullable=true)
     */
    private $numOfAppearance57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_6_7", type="integer", nullable=true)
     */
    private $numOfAppearance67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_of_appearance_7_7", type="integer", nullable=true)
     */
    private $numOfAppearance77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_0", type="integer", nullable=true)
     */
    private $toDoSequence0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_1", type="integer", nullable=true)
     */
    private $toDoSequence1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_2", type="integer", nullable=true)
     */
    private $toDoSequence2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_3", type="integer", nullable=true)
     */
    private $toDoSequence3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_4", type="integer", nullable=true)
     */
    private $toDoSequence4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_5", type="integer", nullable=true)
     */
    private $toDoSequence5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_6", type="integer", nullable=true)
     */
    private $toDoSequence6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_sequence_7", type="integer", nullable=true)
     */
    private $toDoSequence7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="varient", type="integer", nullable=true)
     */
    private $varient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="help_0", type="bigint", nullable=true)
     */
    private $help0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="help_1", type="bigint", nullable=true)
     */
    private $help1;

    /**
     * @var LeveString
     *
     * @ORM\ManyToOne(targetEntity="LeveString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective_2", referencedColumnName="pk")
     * })
     */
    private $objective2;

    /**
     * @var LeveString
     *
     * @ORM\ManyToOne(targetEntity="LeveString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective_1", referencedColumnName="pk")
     * })
     */
    private $objective1;

    /**
     * @var LeveString
     *
     * @ORM\ManyToOne(targetEntity="LeveString")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective_0", referencedColumnName="pk")
     * })
     */
    private $objective0;

    /**
     * @var BattleLeveRule
     *
     * @ORM\ManyToOne(targetEntity="BattleLeveRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule", referencedColumnName="pk")
     * })
     */
    private $rule;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_7", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved7;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_6", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved6;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_5", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved5;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_4", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved4;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_3", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved3;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_2", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved2;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_1", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved1;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="items_involved_0", referencedColumnName="pk")
     * })
     */
    private $itemsInvolved0;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_7", referencedColumnName="pk")
     * })
     */
    private $bnpcName7;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_6", referencedColumnName="pk")
     * })
     */
    private $bnpcName6;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_5", referencedColumnName="pk")
     * })
     */
    private $bnpcName5;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_4", referencedColumnName="pk")
     * })
     */
    private $bnpcName4;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_3", referencedColumnName="pk")
     * })
     */
    private $bnpcName3;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_2", referencedColumnName="pk")
     * })
     */
    private $bnpcName2;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_1", referencedColumnName="pk")
     * })
     */
    private $bnpcName1;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name_0", referencedColumnName="pk")
     * })
     */
    private $bnpcName0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTime0(): ?string
    {
        return $this->time0;
    }

    public function setTime0(?string $time0): self
    {
        $this->time0 = $time0;

        return $this;
    }

    public function getTime1(): ?string
    {
        return $this->time1;
    }

    public function setTime1(?string $time1): self
    {
        $this->time1 = $time1;

        return $this;
    }

    public function getTime2(): ?string
    {
        return $this->time2;
    }

    public function setTime2(?string $time2): self
    {
        $this->time2 = $time2;

        return $this;
    }

    public function getTime3(): ?string
    {
        return $this->time3;
    }

    public function setTime3(?string $time3): self
    {
        $this->time3 = $time3;

        return $this;
    }

    public function getTime4(): ?string
    {
        return $this->time4;
    }

    public function setTime4(?string $time4): self
    {
        $this->time4 = $time4;

        return $this;
    }

    public function getTime5(): ?string
    {
        return $this->time5;
    }

    public function setTime5(?string $time5): self
    {
        $this->time5 = $time5;

        return $this;
    }

    public function getTime6(): ?string
    {
        return $this->time6;
    }

    public function setTime6(?string $time6): self
    {
        $this->time6 = $time6;

        return $this;
    }

    public function getTime7(): ?string
    {
        return $this->time7;
    }

    public function setTime7(?string $time7): self
    {
        $this->time7 = $time7;

        return $this;
    }

    public function getBaseId0(): ?int
    {
        return $this->baseId0;
    }

    public function setBaseId0(?int $baseId0): self
    {
        $this->baseId0 = $baseId0;

        return $this;
    }

    public function getBaseId1(): ?int
    {
        return $this->baseId1;
    }

    public function setBaseId1(?int $baseId1): self
    {
        $this->baseId1 = $baseId1;

        return $this;
    }

    public function getBaseId2(): ?int
    {
        return $this->baseId2;
    }

    public function setBaseId2(?int $baseId2): self
    {
        $this->baseId2 = $baseId2;

        return $this;
    }

    public function getBaseId3(): ?int
    {
        return $this->baseId3;
    }

    public function setBaseId3(?int $baseId3): self
    {
        $this->baseId3 = $baseId3;

        return $this;
    }

    public function getBaseId4(): ?int
    {
        return $this->baseId4;
    }

    public function setBaseId4(?int $baseId4): self
    {
        $this->baseId4 = $baseId4;

        return $this;
    }

    public function getBaseId5(): ?int
    {
        return $this->baseId5;
    }

    public function setBaseId5(?int $baseId5): self
    {
        $this->baseId5 = $baseId5;

        return $this;
    }

    public function getBaseId6(): ?int
    {
        return $this->baseId6;
    }

    public function setBaseId6(?int $baseId6): self
    {
        $this->baseId6 = $baseId6;

        return $this;
    }

    public function getBaseId7(): ?int
    {
        return $this->baseId7;
    }

    public function setBaseId7(?int $baseId7): self
    {
        $this->baseId7 = $baseId7;

        return $this;
    }

    public function getEnemyLevel0(): ?string
    {
        return $this->enemyLevel0;
    }

    public function setEnemyLevel0(?string $enemyLevel0): self
    {
        $this->enemyLevel0 = $enemyLevel0;

        return $this;
    }

    public function getEnemyLevel1(): ?string
    {
        return $this->enemyLevel1;
    }

    public function setEnemyLevel1(?string $enemyLevel1): self
    {
        $this->enemyLevel1 = $enemyLevel1;

        return $this;
    }

    public function getEnemyLevel2(): ?string
    {
        return $this->enemyLevel2;
    }

    public function setEnemyLevel2(?string $enemyLevel2): self
    {
        $this->enemyLevel2 = $enemyLevel2;

        return $this;
    }

    public function getEnemyLevel3(): ?string
    {
        return $this->enemyLevel3;
    }

    public function setEnemyLevel3(?string $enemyLevel3): self
    {
        $this->enemyLevel3 = $enemyLevel3;

        return $this;
    }

    public function getEnemyLevel4(): ?string
    {
        return $this->enemyLevel4;
    }

    public function setEnemyLevel4(?string $enemyLevel4): self
    {
        $this->enemyLevel4 = $enemyLevel4;

        return $this;
    }

    public function getEnemyLevel5(): ?string
    {
        return $this->enemyLevel5;
    }

    public function setEnemyLevel5(?string $enemyLevel5): self
    {
        $this->enemyLevel5 = $enemyLevel5;

        return $this;
    }

    public function getEnemyLevel6(): ?string
    {
        return $this->enemyLevel6;
    }

    public function setEnemyLevel6(?string $enemyLevel6): self
    {
        $this->enemyLevel6 = $enemyLevel6;

        return $this;
    }

    public function getEnemyLevel7(): ?string
    {
        return $this->enemyLevel7;
    }

    public function setEnemyLevel7(?string $enemyLevel7): self
    {
        $this->enemyLevel7 = $enemyLevel7;

        return $this;
    }

    public function getItemsInvolvedQty0(): ?int
    {
        return $this->itemsInvolvedQty0;
    }

    public function setItemsInvolvedQty0(?int $itemsInvolvedQty0): self
    {
        $this->itemsInvolvedQty0 = $itemsInvolvedQty0;

        return $this;
    }

    public function getItemsInvolvedQty1(): ?int
    {
        return $this->itemsInvolvedQty1;
    }

    public function setItemsInvolvedQty1(?int $itemsInvolvedQty1): self
    {
        $this->itemsInvolvedQty1 = $itemsInvolvedQty1;

        return $this;
    }

    public function getItemsInvolvedQty2(): ?int
    {
        return $this->itemsInvolvedQty2;
    }

    public function setItemsInvolvedQty2(?int $itemsInvolvedQty2): self
    {
        $this->itemsInvolvedQty2 = $itemsInvolvedQty2;

        return $this;
    }

    public function getItemsInvolvedQty3(): ?int
    {
        return $this->itemsInvolvedQty3;
    }

    public function setItemsInvolvedQty3(?int $itemsInvolvedQty3): self
    {
        $this->itemsInvolvedQty3 = $itemsInvolvedQty3;

        return $this;
    }

    public function getItemsInvolvedQty4(): ?int
    {
        return $this->itemsInvolvedQty4;
    }

    public function setItemsInvolvedQty4(?int $itemsInvolvedQty4): self
    {
        $this->itemsInvolvedQty4 = $itemsInvolvedQty4;

        return $this;
    }

    public function getItemsInvolvedQty5(): ?int
    {
        return $this->itemsInvolvedQty5;
    }

    public function setItemsInvolvedQty5(?int $itemsInvolvedQty5): self
    {
        $this->itemsInvolvedQty5 = $itemsInvolvedQty5;

        return $this;
    }

    public function getItemsInvolvedQty6(): ?int
    {
        return $this->itemsInvolvedQty6;
    }

    public function setItemsInvolvedQty6(?int $itemsInvolvedQty6): self
    {
        $this->itemsInvolvedQty6 = $itemsInvolvedQty6;

        return $this;
    }

    public function getItemsInvolvedQty7(): ?int
    {
        return $this->itemsInvolvedQty7;
    }

    public function setItemsInvolvedQty7(?int $itemsInvolvedQty7): self
    {
        $this->itemsInvolvedQty7 = $itemsInvolvedQty7;

        return $this;
    }

    public function getItemDropRate0(): ?int
    {
        return $this->itemDropRate0;
    }

    public function setItemDropRate0(?int $itemDropRate0): self
    {
        $this->itemDropRate0 = $itemDropRate0;

        return $this;
    }

    public function getItemDropRate1(): ?int
    {
        return $this->itemDropRate1;
    }

    public function setItemDropRate1(?int $itemDropRate1): self
    {
        $this->itemDropRate1 = $itemDropRate1;

        return $this;
    }

    public function getItemDropRate2(): ?int
    {
        return $this->itemDropRate2;
    }

    public function setItemDropRate2(?int $itemDropRate2): self
    {
        $this->itemDropRate2 = $itemDropRate2;

        return $this;
    }

    public function getItemDropRate3(): ?int
    {
        return $this->itemDropRate3;
    }

    public function setItemDropRate3(?int $itemDropRate3): self
    {
        $this->itemDropRate3 = $itemDropRate3;

        return $this;
    }

    public function getItemDropRate4(): ?int
    {
        return $this->itemDropRate4;
    }

    public function setItemDropRate4(?int $itemDropRate4): self
    {
        $this->itemDropRate4 = $itemDropRate4;

        return $this;
    }

    public function getItemDropRate5(): ?int
    {
        return $this->itemDropRate5;
    }

    public function setItemDropRate5(?int $itemDropRate5): self
    {
        $this->itemDropRate5 = $itemDropRate5;

        return $this;
    }

    public function getItemDropRate6(): ?int
    {
        return $this->itemDropRate6;
    }

    public function setItemDropRate6(?int $itemDropRate6): self
    {
        $this->itemDropRate6 = $itemDropRate6;

        return $this;
    }

    public function getItemDropRate7(): ?int
    {
        return $this->itemDropRate7;
    }

    public function setItemDropRate7(?int $itemDropRate7): self
    {
        $this->itemDropRate7 = $itemDropRate7;

        return $this;
    }

    public function getToDoNumberInvolved0(): ?string
    {
        return $this->toDoNumberInvolved0;
    }

    public function setToDoNumberInvolved0(?string $toDoNumberInvolved0): self
    {
        $this->toDoNumberInvolved0 = $toDoNumberInvolved0;

        return $this;
    }

    public function getToDoNumberInvolved1(): ?string
    {
        return $this->toDoNumberInvolved1;
    }

    public function setToDoNumberInvolved1(?string $toDoNumberInvolved1): self
    {
        $this->toDoNumberInvolved1 = $toDoNumberInvolved1;

        return $this;
    }

    public function getToDoNumberInvolved2(): ?string
    {
        return $this->toDoNumberInvolved2;
    }

    public function setToDoNumberInvolved2(?string $toDoNumberInvolved2): self
    {
        $this->toDoNumberInvolved2 = $toDoNumberInvolved2;

        return $this;
    }

    public function getToDoNumberInvolved3(): ?string
    {
        return $this->toDoNumberInvolved3;
    }

    public function setToDoNumberInvolved3(?string $toDoNumberInvolved3): self
    {
        $this->toDoNumberInvolved3 = $toDoNumberInvolved3;

        return $this;
    }

    public function getToDoNumberInvolved4(): ?string
    {
        return $this->toDoNumberInvolved4;
    }

    public function setToDoNumberInvolved4(?string $toDoNumberInvolved4): self
    {
        $this->toDoNumberInvolved4 = $toDoNumberInvolved4;

        return $this;
    }

    public function getToDoNumberInvolved5(): ?string
    {
        return $this->toDoNumberInvolved5;
    }

    public function setToDoNumberInvolved5(?string $toDoNumberInvolved5): self
    {
        $this->toDoNumberInvolved5 = $toDoNumberInvolved5;

        return $this;
    }

    public function getToDoNumberInvolved6(): ?string
    {
        return $this->toDoNumberInvolved6;
    }

    public function setToDoNumberInvolved6(?string $toDoNumberInvolved6): self
    {
        $this->toDoNumberInvolved6 = $toDoNumberInvolved6;

        return $this;
    }

    public function getToDoNumberInvolved7(): ?string
    {
        return $this->toDoNumberInvolved7;
    }

    public function setToDoNumberInvolved7(?string $toDoNumberInvolved7): self
    {
        $this->toDoNumberInvolved7 = $toDoNumberInvolved7;

        return $this;
    }

    public function getToDoParam00(): ?string
    {
        return $this->toDoParam00;
    }

    public function setToDoParam00(?string $toDoParam00): self
    {
        $this->toDoParam00 = $toDoParam00;

        return $this;
    }

    public function getToDoParam10(): ?string
    {
        return $this->toDoParam10;
    }

    public function setToDoParam10(?string $toDoParam10): self
    {
        $this->toDoParam10 = $toDoParam10;

        return $this;
    }

    public function getToDoParam20(): ?string
    {
        return $this->toDoParam20;
    }

    public function setToDoParam20(?string $toDoParam20): self
    {
        $this->toDoParam20 = $toDoParam20;

        return $this;
    }

    public function getToDoParam30(): ?string
    {
        return $this->toDoParam30;
    }

    public function setToDoParam30(?string $toDoParam30): self
    {
        $this->toDoParam30 = $toDoParam30;

        return $this;
    }

    public function getToDoParam40(): ?string
    {
        return $this->toDoParam40;
    }

    public function setToDoParam40(?string $toDoParam40): self
    {
        $this->toDoParam40 = $toDoParam40;

        return $this;
    }

    public function getToDoParam50(): ?string
    {
        return $this->toDoParam50;
    }

    public function setToDoParam50(?string $toDoParam50): self
    {
        $this->toDoParam50 = $toDoParam50;

        return $this;
    }

    public function getToDoParam60(): ?string
    {
        return $this->toDoParam60;
    }

    public function setToDoParam60(?string $toDoParam60): self
    {
        $this->toDoParam60 = $toDoParam60;

        return $this;
    }

    public function getToDoParam70(): ?string
    {
        return $this->toDoParam70;
    }

    public function setToDoParam70(?string $toDoParam70): self
    {
        $this->toDoParam70 = $toDoParam70;

        return $this;
    }

    public function getToDoParam01(): ?string
    {
        return $this->toDoParam01;
    }

    public function setToDoParam01(?string $toDoParam01): self
    {
        $this->toDoParam01 = $toDoParam01;

        return $this;
    }

    public function getToDoParam11(): ?string
    {
        return $this->toDoParam11;
    }

    public function setToDoParam11(?string $toDoParam11): self
    {
        $this->toDoParam11 = $toDoParam11;

        return $this;
    }

    public function getToDoParam21(): ?string
    {
        return $this->toDoParam21;
    }

    public function setToDoParam21(?string $toDoParam21): self
    {
        $this->toDoParam21 = $toDoParam21;

        return $this;
    }

    public function getToDoParam31(): ?string
    {
        return $this->toDoParam31;
    }

    public function setToDoParam31(?string $toDoParam31): self
    {
        $this->toDoParam31 = $toDoParam31;

        return $this;
    }

    public function getToDoParam41(): ?string
    {
        return $this->toDoParam41;
    }

    public function setToDoParam41(?string $toDoParam41): self
    {
        $this->toDoParam41 = $toDoParam41;

        return $this;
    }

    public function getToDoParam51(): ?string
    {
        return $this->toDoParam51;
    }

    public function setToDoParam51(?string $toDoParam51): self
    {
        $this->toDoParam51 = $toDoParam51;

        return $this;
    }

    public function getToDoParam61(): ?string
    {
        return $this->toDoParam61;
    }

    public function setToDoParam61(?string $toDoParam61): self
    {
        $this->toDoParam61 = $toDoParam61;

        return $this;
    }

    public function getToDoParam71(): ?string
    {
        return $this->toDoParam71;
    }

    public function setToDoParam71(?string $toDoParam71): self
    {
        $this->toDoParam71 = $toDoParam71;

        return $this;
    }

    public function getToDoParam02(): ?string
    {
        return $this->toDoParam02;
    }

    public function setToDoParam02(?string $toDoParam02): self
    {
        $this->toDoParam02 = $toDoParam02;

        return $this;
    }

    public function getToDoParam12(): ?string
    {
        return $this->toDoParam12;
    }

    public function setToDoParam12(?string $toDoParam12): self
    {
        $this->toDoParam12 = $toDoParam12;

        return $this;
    }

    public function getToDoParam22(): ?string
    {
        return $this->toDoParam22;
    }

    public function setToDoParam22(?string $toDoParam22): self
    {
        $this->toDoParam22 = $toDoParam22;

        return $this;
    }

    public function getToDoParam32(): ?string
    {
        return $this->toDoParam32;
    }

    public function setToDoParam32(?string $toDoParam32): self
    {
        $this->toDoParam32 = $toDoParam32;

        return $this;
    }

    public function getToDoParam42(): ?string
    {
        return $this->toDoParam42;
    }

    public function setToDoParam42(?string $toDoParam42): self
    {
        $this->toDoParam42 = $toDoParam42;

        return $this;
    }

    public function getToDoParam52(): ?string
    {
        return $this->toDoParam52;
    }

    public function setToDoParam52(?string $toDoParam52): self
    {
        $this->toDoParam52 = $toDoParam52;

        return $this;
    }

    public function getToDoParam62(): ?string
    {
        return $this->toDoParam62;
    }

    public function setToDoParam62(?string $toDoParam62): self
    {
        $this->toDoParam62 = $toDoParam62;

        return $this;
    }

    public function getToDoParam72(): ?string
    {
        return $this->toDoParam72;
    }

    public function setToDoParam72(?string $toDoParam72): self
    {
        $this->toDoParam72 = $toDoParam72;

        return $this;
    }

    public function getToDoParam03(): ?string
    {
        return $this->toDoParam03;
    }

    public function setToDoParam03(?string $toDoParam03): self
    {
        $this->toDoParam03 = $toDoParam03;

        return $this;
    }

    public function getToDoParam13(): ?string
    {
        return $this->toDoParam13;
    }

    public function setToDoParam13(?string $toDoParam13): self
    {
        $this->toDoParam13 = $toDoParam13;

        return $this;
    }

    public function getToDoParam23(): ?string
    {
        return $this->toDoParam23;
    }

    public function setToDoParam23(?string $toDoParam23): self
    {
        $this->toDoParam23 = $toDoParam23;

        return $this;
    }

    public function getToDoParam33(): ?string
    {
        return $this->toDoParam33;
    }

    public function setToDoParam33(?string $toDoParam33): self
    {
        $this->toDoParam33 = $toDoParam33;

        return $this;
    }

    public function getToDoParam43(): ?string
    {
        return $this->toDoParam43;
    }

    public function setToDoParam43(?string $toDoParam43): self
    {
        $this->toDoParam43 = $toDoParam43;

        return $this;
    }

    public function getToDoParam53(): ?string
    {
        return $this->toDoParam53;
    }

    public function setToDoParam53(?string $toDoParam53): self
    {
        $this->toDoParam53 = $toDoParam53;

        return $this;
    }

    public function getToDoParam63(): ?string
    {
        return $this->toDoParam63;
    }

    public function setToDoParam63(?string $toDoParam63): self
    {
        $this->toDoParam63 = $toDoParam63;

        return $this;
    }

    public function getToDoParam73(): ?string
    {
        return $this->toDoParam73;
    }

    public function setToDoParam73(?string $toDoParam73): self
    {
        $this->toDoParam73 = $toDoParam73;

        return $this;
    }

    public function getToDoParam04(): ?string
    {
        return $this->toDoParam04;
    }

    public function setToDoParam04(?string $toDoParam04): self
    {
        $this->toDoParam04 = $toDoParam04;

        return $this;
    }

    public function getToDoParam14(): ?string
    {
        return $this->toDoParam14;
    }

    public function setToDoParam14(?string $toDoParam14): self
    {
        $this->toDoParam14 = $toDoParam14;

        return $this;
    }

    public function getToDoParam24(): ?string
    {
        return $this->toDoParam24;
    }

    public function setToDoParam24(?string $toDoParam24): self
    {
        $this->toDoParam24 = $toDoParam24;

        return $this;
    }

    public function getToDoParam34(): ?string
    {
        return $this->toDoParam34;
    }

    public function setToDoParam34(?string $toDoParam34): self
    {
        $this->toDoParam34 = $toDoParam34;

        return $this;
    }

    public function getToDoParam44(): ?string
    {
        return $this->toDoParam44;
    }

    public function setToDoParam44(?string $toDoParam44): self
    {
        $this->toDoParam44 = $toDoParam44;

        return $this;
    }

    public function getToDoParam54(): ?string
    {
        return $this->toDoParam54;
    }

    public function setToDoParam54(?string $toDoParam54): self
    {
        $this->toDoParam54 = $toDoParam54;

        return $this;
    }

    public function getToDoParam64(): ?string
    {
        return $this->toDoParam64;
    }

    public function setToDoParam64(?string $toDoParam64): self
    {
        $this->toDoParam64 = $toDoParam64;

        return $this;
    }

    public function getToDoParam74(): ?string
    {
        return $this->toDoParam74;
    }

    public function setToDoParam74(?string $toDoParam74): self
    {
        $this->toDoParam74 = $toDoParam74;

        return $this;
    }

    public function getNumOfAppearance00(): ?int
    {
        return $this->numOfAppearance00;
    }

    public function setNumOfAppearance00(?int $numOfAppearance00): self
    {
        $this->numOfAppearance00 = $numOfAppearance00;

        return $this;
    }

    public function getNumOfAppearance10(): ?int
    {
        return $this->numOfAppearance10;
    }

    public function setNumOfAppearance10(?int $numOfAppearance10): self
    {
        $this->numOfAppearance10 = $numOfAppearance10;

        return $this;
    }

    public function getNumOfAppearance20(): ?int
    {
        return $this->numOfAppearance20;
    }

    public function setNumOfAppearance20(?int $numOfAppearance20): self
    {
        $this->numOfAppearance20 = $numOfAppearance20;

        return $this;
    }

    public function getNumOfAppearance30(): ?int
    {
        return $this->numOfAppearance30;
    }

    public function setNumOfAppearance30(?int $numOfAppearance30): self
    {
        $this->numOfAppearance30 = $numOfAppearance30;

        return $this;
    }

    public function getNumOfAppearance40(): ?int
    {
        return $this->numOfAppearance40;
    }

    public function setNumOfAppearance40(?int $numOfAppearance40): self
    {
        $this->numOfAppearance40 = $numOfAppearance40;

        return $this;
    }

    public function getNumOfAppearance50(): ?int
    {
        return $this->numOfAppearance50;
    }

    public function setNumOfAppearance50(?int $numOfAppearance50): self
    {
        $this->numOfAppearance50 = $numOfAppearance50;

        return $this;
    }

    public function getNumOfAppearance60(): ?int
    {
        return $this->numOfAppearance60;
    }

    public function setNumOfAppearance60(?int $numOfAppearance60): self
    {
        $this->numOfAppearance60 = $numOfAppearance60;

        return $this;
    }

    public function getNumOfAppearance70(): ?int
    {
        return $this->numOfAppearance70;
    }

    public function setNumOfAppearance70(?int $numOfAppearance70): self
    {
        $this->numOfAppearance70 = $numOfAppearance70;

        return $this;
    }

    public function getNumOfAppearance01(): ?int
    {
        return $this->numOfAppearance01;
    }

    public function setNumOfAppearance01(?int $numOfAppearance01): self
    {
        $this->numOfAppearance01 = $numOfAppearance01;

        return $this;
    }

    public function getNumOfAppearance11(): ?int
    {
        return $this->numOfAppearance11;
    }

    public function setNumOfAppearance11(?int $numOfAppearance11): self
    {
        $this->numOfAppearance11 = $numOfAppearance11;

        return $this;
    }

    public function getNumOfAppearance21(): ?int
    {
        return $this->numOfAppearance21;
    }

    public function setNumOfAppearance21(?int $numOfAppearance21): self
    {
        $this->numOfAppearance21 = $numOfAppearance21;

        return $this;
    }

    public function getNumOfAppearance31(): ?int
    {
        return $this->numOfAppearance31;
    }

    public function setNumOfAppearance31(?int $numOfAppearance31): self
    {
        $this->numOfAppearance31 = $numOfAppearance31;

        return $this;
    }

    public function getNumOfAppearance41(): ?int
    {
        return $this->numOfAppearance41;
    }

    public function setNumOfAppearance41(?int $numOfAppearance41): self
    {
        $this->numOfAppearance41 = $numOfAppearance41;

        return $this;
    }

    public function getNumOfAppearance51(): ?int
    {
        return $this->numOfAppearance51;
    }

    public function setNumOfAppearance51(?int $numOfAppearance51): self
    {
        $this->numOfAppearance51 = $numOfAppearance51;

        return $this;
    }

    public function getNumOfAppearance61(): ?int
    {
        return $this->numOfAppearance61;
    }

    public function setNumOfAppearance61(?int $numOfAppearance61): self
    {
        $this->numOfAppearance61 = $numOfAppearance61;

        return $this;
    }

    public function getNumOfAppearance71(): ?int
    {
        return $this->numOfAppearance71;
    }

    public function setNumOfAppearance71(?int $numOfAppearance71): self
    {
        $this->numOfAppearance71 = $numOfAppearance71;

        return $this;
    }

    public function getNumOfAppearance02(): ?int
    {
        return $this->numOfAppearance02;
    }

    public function setNumOfAppearance02(?int $numOfAppearance02): self
    {
        $this->numOfAppearance02 = $numOfAppearance02;

        return $this;
    }

    public function getNumOfAppearance12(): ?int
    {
        return $this->numOfAppearance12;
    }

    public function setNumOfAppearance12(?int $numOfAppearance12): self
    {
        $this->numOfAppearance12 = $numOfAppearance12;

        return $this;
    }

    public function getNumOfAppearance22(): ?int
    {
        return $this->numOfAppearance22;
    }

    public function setNumOfAppearance22(?int $numOfAppearance22): self
    {
        $this->numOfAppearance22 = $numOfAppearance22;

        return $this;
    }

    public function getNumOfAppearance32(): ?int
    {
        return $this->numOfAppearance32;
    }

    public function setNumOfAppearance32(?int $numOfAppearance32): self
    {
        $this->numOfAppearance32 = $numOfAppearance32;

        return $this;
    }

    public function getNumOfAppearance42(): ?int
    {
        return $this->numOfAppearance42;
    }

    public function setNumOfAppearance42(?int $numOfAppearance42): self
    {
        $this->numOfAppearance42 = $numOfAppearance42;

        return $this;
    }

    public function getNumOfAppearance52(): ?int
    {
        return $this->numOfAppearance52;
    }

    public function setNumOfAppearance52(?int $numOfAppearance52): self
    {
        $this->numOfAppearance52 = $numOfAppearance52;

        return $this;
    }

    public function getNumOfAppearance62(): ?int
    {
        return $this->numOfAppearance62;
    }

    public function setNumOfAppearance62(?int $numOfAppearance62): self
    {
        $this->numOfAppearance62 = $numOfAppearance62;

        return $this;
    }

    public function getNumOfAppearance72(): ?int
    {
        return $this->numOfAppearance72;
    }

    public function setNumOfAppearance72(?int $numOfAppearance72): self
    {
        $this->numOfAppearance72 = $numOfAppearance72;

        return $this;
    }

    public function getNumOfAppearance03(): ?int
    {
        return $this->numOfAppearance03;
    }

    public function setNumOfAppearance03(?int $numOfAppearance03): self
    {
        $this->numOfAppearance03 = $numOfAppearance03;

        return $this;
    }

    public function getNumOfAppearance13(): ?int
    {
        return $this->numOfAppearance13;
    }

    public function setNumOfAppearance13(?int $numOfAppearance13): self
    {
        $this->numOfAppearance13 = $numOfAppearance13;

        return $this;
    }

    public function getNumOfAppearance23(): ?int
    {
        return $this->numOfAppearance23;
    }

    public function setNumOfAppearance23(?int $numOfAppearance23): self
    {
        $this->numOfAppearance23 = $numOfAppearance23;

        return $this;
    }

    public function getNumOfAppearance33(): ?int
    {
        return $this->numOfAppearance33;
    }

    public function setNumOfAppearance33(?int $numOfAppearance33): self
    {
        $this->numOfAppearance33 = $numOfAppearance33;

        return $this;
    }

    public function getNumOfAppearance43(): ?int
    {
        return $this->numOfAppearance43;
    }

    public function setNumOfAppearance43(?int $numOfAppearance43): self
    {
        $this->numOfAppearance43 = $numOfAppearance43;

        return $this;
    }

    public function getNumOfAppearance53(): ?int
    {
        return $this->numOfAppearance53;
    }

    public function setNumOfAppearance53(?int $numOfAppearance53): self
    {
        $this->numOfAppearance53 = $numOfAppearance53;

        return $this;
    }

    public function getNumOfAppearance63(): ?int
    {
        return $this->numOfAppearance63;
    }

    public function setNumOfAppearance63(?int $numOfAppearance63): self
    {
        $this->numOfAppearance63 = $numOfAppearance63;

        return $this;
    }

    public function getNumOfAppearance73(): ?int
    {
        return $this->numOfAppearance73;
    }

    public function setNumOfAppearance73(?int $numOfAppearance73): self
    {
        $this->numOfAppearance73 = $numOfAppearance73;

        return $this;
    }

    public function getNumOfAppearance04(): ?int
    {
        return $this->numOfAppearance04;
    }

    public function setNumOfAppearance04(?int $numOfAppearance04): self
    {
        $this->numOfAppearance04 = $numOfAppearance04;

        return $this;
    }

    public function getNumOfAppearance14(): ?int
    {
        return $this->numOfAppearance14;
    }

    public function setNumOfAppearance14(?int $numOfAppearance14): self
    {
        $this->numOfAppearance14 = $numOfAppearance14;

        return $this;
    }

    public function getNumOfAppearance24(): ?int
    {
        return $this->numOfAppearance24;
    }

    public function setNumOfAppearance24(?int $numOfAppearance24): self
    {
        $this->numOfAppearance24 = $numOfAppearance24;

        return $this;
    }

    public function getNumOfAppearance34(): ?int
    {
        return $this->numOfAppearance34;
    }

    public function setNumOfAppearance34(?int $numOfAppearance34): self
    {
        $this->numOfAppearance34 = $numOfAppearance34;

        return $this;
    }

    public function getNumOfAppearance44(): ?int
    {
        return $this->numOfAppearance44;
    }

    public function setNumOfAppearance44(?int $numOfAppearance44): self
    {
        $this->numOfAppearance44 = $numOfAppearance44;

        return $this;
    }

    public function getNumOfAppearance54(): ?int
    {
        return $this->numOfAppearance54;
    }

    public function setNumOfAppearance54(?int $numOfAppearance54): self
    {
        $this->numOfAppearance54 = $numOfAppearance54;

        return $this;
    }

    public function getNumOfAppearance64(): ?int
    {
        return $this->numOfAppearance64;
    }

    public function setNumOfAppearance64(?int $numOfAppearance64): self
    {
        $this->numOfAppearance64 = $numOfAppearance64;

        return $this;
    }

    public function getNumOfAppearance74(): ?int
    {
        return $this->numOfAppearance74;
    }

    public function setNumOfAppearance74(?int $numOfAppearance74): self
    {
        $this->numOfAppearance74 = $numOfAppearance74;

        return $this;
    }

    public function getNumOfAppearance05(): ?int
    {
        return $this->numOfAppearance05;
    }

    public function setNumOfAppearance05(?int $numOfAppearance05): self
    {
        $this->numOfAppearance05 = $numOfAppearance05;

        return $this;
    }

    public function getNumOfAppearance15(): ?int
    {
        return $this->numOfAppearance15;
    }

    public function setNumOfAppearance15(?int $numOfAppearance15): self
    {
        $this->numOfAppearance15 = $numOfAppearance15;

        return $this;
    }

    public function getNumOfAppearance25(): ?int
    {
        return $this->numOfAppearance25;
    }

    public function setNumOfAppearance25(?int $numOfAppearance25): self
    {
        $this->numOfAppearance25 = $numOfAppearance25;

        return $this;
    }

    public function getNumOfAppearance35(): ?int
    {
        return $this->numOfAppearance35;
    }

    public function setNumOfAppearance35(?int $numOfAppearance35): self
    {
        $this->numOfAppearance35 = $numOfAppearance35;

        return $this;
    }

    public function getNumOfAppearance45(): ?int
    {
        return $this->numOfAppearance45;
    }

    public function setNumOfAppearance45(?int $numOfAppearance45): self
    {
        $this->numOfAppearance45 = $numOfAppearance45;

        return $this;
    }

    public function getNumOfAppearance55(): ?int
    {
        return $this->numOfAppearance55;
    }

    public function setNumOfAppearance55(?int $numOfAppearance55): self
    {
        $this->numOfAppearance55 = $numOfAppearance55;

        return $this;
    }

    public function getNumOfAppearance65(): ?int
    {
        return $this->numOfAppearance65;
    }

    public function setNumOfAppearance65(?int $numOfAppearance65): self
    {
        $this->numOfAppearance65 = $numOfAppearance65;

        return $this;
    }

    public function getNumOfAppearance75(): ?int
    {
        return $this->numOfAppearance75;
    }

    public function setNumOfAppearance75(?int $numOfAppearance75): self
    {
        $this->numOfAppearance75 = $numOfAppearance75;

        return $this;
    }

    public function getNumOfAppearance06(): ?int
    {
        return $this->numOfAppearance06;
    }

    public function setNumOfAppearance06(?int $numOfAppearance06): self
    {
        $this->numOfAppearance06 = $numOfAppearance06;

        return $this;
    }

    public function getNumOfAppearance16(): ?int
    {
        return $this->numOfAppearance16;
    }

    public function setNumOfAppearance16(?int $numOfAppearance16): self
    {
        $this->numOfAppearance16 = $numOfAppearance16;

        return $this;
    }

    public function getNumOfAppearance26(): ?int
    {
        return $this->numOfAppearance26;
    }

    public function setNumOfAppearance26(?int $numOfAppearance26): self
    {
        $this->numOfAppearance26 = $numOfAppearance26;

        return $this;
    }

    public function getNumOfAppearance36(): ?int
    {
        return $this->numOfAppearance36;
    }

    public function setNumOfAppearance36(?int $numOfAppearance36): self
    {
        $this->numOfAppearance36 = $numOfAppearance36;

        return $this;
    }

    public function getNumOfAppearance46(): ?int
    {
        return $this->numOfAppearance46;
    }

    public function setNumOfAppearance46(?int $numOfAppearance46): self
    {
        $this->numOfAppearance46 = $numOfAppearance46;

        return $this;
    }

    public function getNumOfAppearance56(): ?int
    {
        return $this->numOfAppearance56;
    }

    public function setNumOfAppearance56(?int $numOfAppearance56): self
    {
        $this->numOfAppearance56 = $numOfAppearance56;

        return $this;
    }

    public function getNumOfAppearance66(): ?int
    {
        return $this->numOfAppearance66;
    }

    public function setNumOfAppearance66(?int $numOfAppearance66): self
    {
        $this->numOfAppearance66 = $numOfAppearance66;

        return $this;
    }

    public function getNumOfAppearance76(): ?int
    {
        return $this->numOfAppearance76;
    }

    public function setNumOfAppearance76(?int $numOfAppearance76): self
    {
        $this->numOfAppearance76 = $numOfAppearance76;

        return $this;
    }

    public function getNumOfAppearance07(): ?int
    {
        return $this->numOfAppearance07;
    }

    public function setNumOfAppearance07(?int $numOfAppearance07): self
    {
        $this->numOfAppearance07 = $numOfAppearance07;

        return $this;
    }

    public function getNumOfAppearance17(): ?int
    {
        return $this->numOfAppearance17;
    }

    public function setNumOfAppearance17(?int $numOfAppearance17): self
    {
        $this->numOfAppearance17 = $numOfAppearance17;

        return $this;
    }

    public function getNumOfAppearance27(): ?int
    {
        return $this->numOfAppearance27;
    }

    public function setNumOfAppearance27(?int $numOfAppearance27): self
    {
        $this->numOfAppearance27 = $numOfAppearance27;

        return $this;
    }

    public function getNumOfAppearance37(): ?int
    {
        return $this->numOfAppearance37;
    }

    public function setNumOfAppearance37(?int $numOfAppearance37): self
    {
        $this->numOfAppearance37 = $numOfAppearance37;

        return $this;
    }

    public function getNumOfAppearance47(): ?int
    {
        return $this->numOfAppearance47;
    }

    public function setNumOfAppearance47(?int $numOfAppearance47): self
    {
        $this->numOfAppearance47 = $numOfAppearance47;

        return $this;
    }

    public function getNumOfAppearance57(): ?int
    {
        return $this->numOfAppearance57;
    }

    public function setNumOfAppearance57(?int $numOfAppearance57): self
    {
        $this->numOfAppearance57 = $numOfAppearance57;

        return $this;
    }

    public function getNumOfAppearance67(): ?int
    {
        return $this->numOfAppearance67;
    }

    public function setNumOfAppearance67(?int $numOfAppearance67): self
    {
        $this->numOfAppearance67 = $numOfAppearance67;

        return $this;
    }

    public function getNumOfAppearance77(): ?int
    {
        return $this->numOfAppearance77;
    }

    public function setNumOfAppearance77(?int $numOfAppearance77): self
    {
        $this->numOfAppearance77 = $numOfAppearance77;

        return $this;
    }

    public function getToDoSequence0(): ?int
    {
        return $this->toDoSequence0;
    }

    public function setToDoSequence0(?int $toDoSequence0): self
    {
        $this->toDoSequence0 = $toDoSequence0;

        return $this;
    }

    public function getToDoSequence1(): ?int
    {
        return $this->toDoSequence1;
    }

    public function setToDoSequence1(?int $toDoSequence1): self
    {
        $this->toDoSequence1 = $toDoSequence1;

        return $this;
    }

    public function getToDoSequence2(): ?int
    {
        return $this->toDoSequence2;
    }

    public function setToDoSequence2(?int $toDoSequence2): self
    {
        $this->toDoSequence2 = $toDoSequence2;

        return $this;
    }

    public function getToDoSequence3(): ?int
    {
        return $this->toDoSequence3;
    }

    public function setToDoSequence3(?int $toDoSequence3): self
    {
        $this->toDoSequence3 = $toDoSequence3;

        return $this;
    }

    public function getToDoSequence4(): ?int
    {
        return $this->toDoSequence4;
    }

    public function setToDoSequence4(?int $toDoSequence4): self
    {
        $this->toDoSequence4 = $toDoSequence4;

        return $this;
    }

    public function getToDoSequence5(): ?int
    {
        return $this->toDoSequence5;
    }

    public function setToDoSequence5(?int $toDoSequence5): self
    {
        $this->toDoSequence5 = $toDoSequence5;

        return $this;
    }

    public function getToDoSequence6(): ?int
    {
        return $this->toDoSequence6;
    }

    public function setToDoSequence6(?int $toDoSequence6): self
    {
        $this->toDoSequence6 = $toDoSequence6;

        return $this;
    }

    public function getToDoSequence7(): ?int
    {
        return $this->toDoSequence7;
    }

    public function setToDoSequence7(?int $toDoSequence7): self
    {
        $this->toDoSequence7 = $toDoSequence7;

        return $this;
    }

    public function getVarient(): ?int
    {
        return $this->varient;
    }

    public function setVarient(?int $varient): self
    {
        $this->varient = $varient;

        return $this;
    }

    public function getHelp0(): ?string
    {
        return $this->help0;
    }

    public function setHelp0(?string $help0): self
    {
        $this->help0 = $help0;

        return $this;
    }

    public function getHelp1(): ?string
    {
        return $this->help1;
    }

    public function setHelp1(?string $help1): self
    {
        $this->help1 = $help1;

        return $this;
    }

    public function getObjective2(): ?LeveString
    {
        return $this->objective2;
    }

    public function setObjective2(?LeveString $objective2): self
    {
        $this->objective2 = $objective2;

        return $this;
    }

    public function getObjective1(): ?LeveString
    {
        return $this->objective1;
    }

    public function setObjective1(?LeveString $objective1): self
    {
        $this->objective1 = $objective1;

        return $this;
    }

    public function getObjective0(): ?LeveString
    {
        return $this->objective0;
    }

    public function setObjective0(?LeveString $objective0): self
    {
        $this->objective0 = $objective0;

        return $this;
    }

    public function getRule(): ?BattleLeveRule
    {
        return $this->rule;
    }

    public function setRule(?BattleLeveRule $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function getItemsInvolved7(): ?EventItem
    {
        return $this->itemsInvolved7;
    }

    public function setItemsInvolved7(?EventItem $itemsInvolved7): self
    {
        $this->itemsInvolved7 = $itemsInvolved7;

        return $this;
    }

    public function getItemsInvolved6(): ?EventItem
    {
        return $this->itemsInvolved6;
    }

    public function setItemsInvolved6(?EventItem $itemsInvolved6): self
    {
        $this->itemsInvolved6 = $itemsInvolved6;

        return $this;
    }

    public function getItemsInvolved5(): ?EventItem
    {
        return $this->itemsInvolved5;
    }

    public function setItemsInvolved5(?EventItem $itemsInvolved5): self
    {
        $this->itemsInvolved5 = $itemsInvolved5;

        return $this;
    }

    public function getItemsInvolved4(): ?EventItem
    {
        return $this->itemsInvolved4;
    }

    public function setItemsInvolved4(?EventItem $itemsInvolved4): self
    {
        $this->itemsInvolved4 = $itemsInvolved4;

        return $this;
    }

    public function getItemsInvolved3(): ?EventItem
    {
        return $this->itemsInvolved3;
    }

    public function setItemsInvolved3(?EventItem $itemsInvolved3): self
    {
        $this->itemsInvolved3 = $itemsInvolved3;

        return $this;
    }

    public function getItemsInvolved2(): ?EventItem
    {
        return $this->itemsInvolved2;
    }

    public function setItemsInvolved2(?EventItem $itemsInvolved2): self
    {
        $this->itemsInvolved2 = $itemsInvolved2;

        return $this;
    }

    public function getItemsInvolved1(): ?EventItem
    {
        return $this->itemsInvolved1;
    }

    public function setItemsInvolved1(?EventItem $itemsInvolved1): self
    {
        $this->itemsInvolved1 = $itemsInvolved1;

        return $this;
    }

    public function getItemsInvolved0(): ?EventItem
    {
        return $this->itemsInvolved0;
    }

    public function setItemsInvolved0(?EventItem $itemsInvolved0): self
    {
        $this->itemsInvolved0 = $itemsInvolved0;

        return $this;
    }

    public function getBnpcName7(): ?BnpcName
    {
        return $this->bnpcName7;
    }

    public function setBnpcName7(?BnpcName $bnpcName7): self
    {
        $this->bnpcName7 = $bnpcName7;

        return $this;
    }

    public function getBnpcName6(): ?BnpcName
    {
        return $this->bnpcName6;
    }

    public function setBnpcName6(?BnpcName $bnpcName6): self
    {
        $this->bnpcName6 = $bnpcName6;

        return $this;
    }

    public function getBnpcName5(): ?BnpcName
    {
        return $this->bnpcName5;
    }

    public function setBnpcName5(?BnpcName $bnpcName5): self
    {
        $this->bnpcName5 = $bnpcName5;

        return $this;
    }

    public function getBnpcName4(): ?BnpcName
    {
        return $this->bnpcName4;
    }

    public function setBnpcName4(?BnpcName $bnpcName4): self
    {
        $this->bnpcName4 = $bnpcName4;

        return $this;
    }

    public function getBnpcName3(): ?BnpcName
    {
        return $this->bnpcName3;
    }

    public function setBnpcName3(?BnpcName $bnpcName3): self
    {
        $this->bnpcName3 = $bnpcName3;

        return $this;
    }

    public function getBnpcName2(): ?BnpcName
    {
        return $this->bnpcName2;
    }

    public function setBnpcName2(?BnpcName $bnpcName2): self
    {
        $this->bnpcName2 = $bnpcName2;

        return $this;
    }

    public function getBnpcName1(): ?BnpcName
    {
        return $this->bnpcName1;
    }

    public function setBnpcName1(?BnpcName $bnpcName1): self
    {
        $this->bnpcName1 = $bnpcName1;

        return $this;
    }

    public function getBnpcName0(): ?BnpcName
    {
        return $this->bnpcName0;
    }

    public function setBnpcName0(?BnpcName $bnpcName0): self
    {
        $this->bnpcName0 = $bnpcName0;

        return $this;
    }
}
