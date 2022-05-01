<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quest.
 *
 * @ORM\Table(name="quest", indexes={@ORM\Index(name="idx_4317f817473718b1", columns={"to_do_child_location_12_0"}), @ORM\Index(name="idx_4317f817830ac7ac", columns={"to_do_child_location_3_4"}), @ORM\Index(name="idx_4317f817e21ac3db", columns={"beast_reputation_rank"}), @ORM\Index(name="idx_4317f8178787bb1e", columns={"to_do_child_location_5_4"}), @ORM\Index(name="idx_4317f8176d60ca45", columns={"to_do_child_location_7_2"}), @ORM\Index(name="idx_4317f81744b3ccdf", columns={"to_do_child_location_10_0"}), @ORM\Index(name="idx_4317f817a83c19c4", columns={"to_do_main_location_18"}), @ORM\Index(name="idx_4317f81757c40906", columns={"to_do_child_location_21_0"}), @ORM\Index(name="idx_4317f817f7892354", columns={"to_do_child_location_1_5"}), @ORM\Index(name="idx_4317f817cf0f328b", columns={"to_do_child_location_20_3"}), @ORM\Index(name="idx_4317f817dd640a66", columns={"quest_reward_other_display"}), @ORM\Index(name="idx_4317f817516ba728", columns={"to_do_child_location_20_4"}), @ORM\Index(name="idx_4317f81719e32ebd", columns={"to_do_child_location_5_3"}), @ORM\Index(name="idx_4317f817a7a5d38d", columns={"stain_reward_5"}), @ORM\Index(name="idx_4317f8174dcd597e", columns={"to_do_child_location_18_4"}), @ORM\Index(name="idx_4317f81734bd5495", columns={"to_do_child_location_14_1"}), @ORM\Index(name="idx_4317f817608b00d2", columns={"journal_genre"}), @ORM\Index(name="idx_4317f8171a67fad3", columns={"to_do_child_location_7_3"}), @ORM\Index(name="idx_4317f817af96d7b3", columns={"to_do_child_location_13_6"}), @ORM\Index(name="idx_4317f817c9768b3f", columns={"optional_item_stain_reward_1"}), @ORM\Index(name="idx_4317f817242a29e7", columns={"to_do_child_location_23_5"}), @ORM\Index(name="idx_4317f8172d90d165", columns={"quest_lock_1"}), @ORM\Index(name="idx_4317f817a4aefc4b", columns={"to_do_child_location_18_2"}), @ORM\Index(name="idx_4317f817a6e791f6", columns={"to_do_main_location_10"}), @ORM\Index(name="idx_4317f8174050a592", columns={"class_job_category_0"}), @ORM\Index(name="idx_4317f817f1268d7a", columns={"to_do_child_location_0_1"}), @ORM\Index(name="idx_4317f81743de08c6", columns={"to_do_child_location_10_4"}), @ORM\Index(name="idx_4317f8174ec676b8", columns={"stain_reward_3"}), @ORM\Index(name="idx_4317f8176f26741c", columns={"to_do_child_location_4_2"}), @ORM\Index(name="idx_4317f817663c8d78", columns={"to_do_child_location_8_2"}), @ORM\Index(name="idx_4317f817dc78f752", columns={"to_do_child_location_11_3"}), @ORM\Index(name="idx_4317f81744d7a01a", columns={"to_do_child_location_14_4"}), @ORM\Index(name="idx_4317f817f2c635d1", columns={"to_do_child_location_6_5"}), @ORM\Index(name="idx_4317f817f5cf9d0d", columns={"to_do_child_location_2_5"}), @ORM\Index(name="idx_4317f817f3603323", columns={"to_do_child_location_3_1"}), @ORM\Index(name="idx_4317f817ff35dcc2", columns={"to_do_child_location_8_1"}), @ORM\Index(name="idx_4317f81731f24210", columns={"to_do_child_location_13_1"}), @ORM\Index(name="idx_4317f817f0695b72", columns={"expansion"}), @ORM\Index(name="idx_4317f81737579504", columns={"class_job_category_1"}), @ORM\Index(name="idx_4317f817a18a55ef", columns={"to_do_main_location_14"}), @ORM\Index(name="idx_4317f817a56c967c", columns={"to_do_child_location_19_2"}), @ORM\Index(name="idx_4317f8178dcac235", columns={"to_do_main_location_20"}), @ORM\Index(name="idx_4317f81750a9cd1f", columns={"to_do_child_location_21_4"}), @ORM\Index(name="idx_4317f81789f08663", columns={"to_do_child_location_9_0"}), @ORM\Index(name="idx_4317f8176bcf646b", columns={"to_do_child_location_6_6"}), @ORM\Index(name="idx_4317f81743ba6403", columns={"to_do_child_location_14_0"}), @ORM\Index(name="idx_4317f81757cf789", columns={"festival"}), @ORM\Index(name="idx_4317f817181692e3", columns={"general_action_reward_1"}), @ORM\Index(name="idx_4317f817d8f58be0", columns={"to_do_child_location_17_3"}), @ORM\Index(name="idx_4317f817357f3ea2", columns={"to_do_child_location_15_1"}), @ORM\Index(name="idx_4317f817403eb06d", columns={"to_do_child_location_16_0"}), @ORM\Index(name="idx_4317f817808e13c2", columns={"to_do_child_location_1_4"}), @ORM\Index(name="idx_4317f81725e843d0", columns={"to_do_child_location_22_5"}), @ORM\Index(name="idx_4317f81790544185", columns={"item_catalyst_0"}), @ORM\Index(name="idx_4317f8178ced6fcc", columns={"class_job_unlock"}), @ORM\Index(name="idx_4317f81785c10547", columns={"to_do_child_location_6_4"}), @ORM\Index(name="idx_4317f817f9ede0f5", columns={"optional_item_reward_4"}), @ORM\Index(name="idx_4317f817f5abf1c8", columns={"to_do_child_location_6_1"}), @ORM\Index(name="idx_4317f8176f4218d9", columns={"to_do_child_location_0_6"}), @ORM\Index(name="idx_4317f817bea7ac33", columns={"to_do_child_location_21_6"}), @ORM\Index(name="idx_4317f817d937e1d7", columns={"to_do_child_location_16_3"}), @ORM\Index(name="idx_4317f817305444e2", columns={"to_do_child_location_16_5"}), @ORM\Index(name="idx_4317f81710f9d7d9", columns={"to_do_child_location_9_3"}), @ORM\Index(name="idx_4317f81752ef7346", columns={"to_do_child_location_22_4"}), @ORM\Index(name="idx_4317f817d1e0a160", columns={"to_do_main_location_11"}), @ORM\Index(name="idx_4317f817375dec3e", columns={"to_do_child_location_12_5"}), @ORM\Index(name="idx_4317f8172778ea13", columns={"optional_item_stain_reward_3"}), @ORM\Index(name="idx_4317f817cac87410", columns={"to_do_main_location_6"}), @ORM\Index(name="idx_4317f817113bbdee", columns={"to_do_child_location_8_3"}), @ORM\Index(name="idx_4317f817210153a7", columns={"to_do_child_location_20_1"}), @ORM\Index(name="idx_4317f817fe8024ec", columns={"optional_item_reward_0"}), @ORM\Index(name="idx_4317f81733d0908c", columns={"to_do_child_location_14_5"}), @ORM\Index(name="idx_4317f81738b85eea", columns={"beast_tribe"}), @ORM\Index(name="idx_4317f817f4699bff", columns={"to_do_child_location_7_1"}), @ORM\Index(name="idx_4317f8179d4d1f50", columns={"instance_content_unlock"}), @ORM\Index(name="idx_4317f8171cac3838", columns={"to_do_child_location_2_3"}), @ORM\Index(name="idx_4317f817f85818db", columns={"to_do_child_location_8_5"}), @ORM\Index(name="idx_4317f8178b2e9681", columns={"issuer_location"}), @ORM\Index(name="idx_4317f8173353d598", columns={"previous_quest_2"}), @ORM\Index(name="idx_4317f81782acc15e", columns={"to_do_child_location_6_0"}), @ORM\Index(name="idx_4317f8171ba590e4", columns={"to_do_child_location_6_3"}), @ORM\Index(name="idx_4317f81763c4a319", columns={"to_do_main_location_22"}), @ORM\Index(name="idx_4317f81782c8ad9b", columns={"to_do_child_location_2_4"}), @ORM\Index(name="idx_4317f81796e1383d", columns={"event_icon_type"}), @ORM\Index(name="idx_4317f817266c97be", columns={"to_do_child_location_20_5"}), @ORM\Index(name="idx_4317f817bf65c604", columns={"to_do_child_location_20_6"}), @ORM\Index(name="idx_4317f8173c65c7c6", columns={"to_do_child_location_19_1"}), @ORM\Index(name="idx_4317f8178987147a", columns={"optional_item_reward_1"}), @ORM\Index(name="idx_4317f817f62f25a6", columns={"to_do_child_location_4_1"}), @ORM\Index(name="idx_4317f817de3e490b", columns={"to_do_child_location_12_3"}), @ORM\Index(name="idx_4317f817d26ba6ea", columns={"to_do_child_location_19_3"}), @ORM\Index(name="idx_4317f817d7cf2702", columns={"stain_reward_0"}), @ORM\Index(name="idx_4317f817d3a9ccdd", columns={"to_do_child_location_18_3"}), @ORM\Index(name="idx_4317f817d0a2e31b", columns={"stain_reward_4"}), @ORM\Index(name="idx_4317f817ac1203dd", columns={"to_do_child_location_11_6"}), @ORM\Index(name="idx_4317f81781281530", columns={"to_do_child_location_4_0"}), @ORM\Index(name="idx_4317f8173b0803df", columns={"to_do_child_location_19_5"}), @ORM\Index(name="idx_4317f8172347edfe", columns={"to_do_child_location_23_1"}), @ORM\Index(name="idx_4317f817e8333639", columns={"instance_content_2"}), @ORM\Index(name="idx_4317f817ae54bd84", columns={"to_do_child_location_12_6"}), @ORM\Index(name="idx_4317f817ddba9d65", columns={"to_do_child_location_10_3"}), @ORM\Index(name="idx_4317f81724c6153c", columns={"to_do_main_location_4"}), @ORM\Index(name="idx_4317f81746911e43", columns={"to_do_child_location_17_4"}), @ORM\Index(name="idx_4317f817b5ab1f27", columns={"grand_company"}), @ORM\Index(name="idx_4317f817db715f8e", columns={"to_do_child_location_15_3"}), @ORM\Index(name="idx_4317f817fef7b6f5", columns={"to_do_child_location_9_1"}), @ORM\Index(name="idx_4317f817baa2809f", columns={"to_do_main_location_3"}), @ORM\Index(name="idx_4317f81767fee74f", columns={"to_do_child_location_9_2"}), @ORM\Index(name="idx_4317f81787e3d7db", columns={"to_do_child_location_1_0"}), @ORM\Index(name="idx_4317f817bce1126a", columns={"to_do_child_location_22_6"}), @ORM\Index(name="idx_4317f817bdcf4486", columns={"to_do_main_location_7"}), @ORM\Index(name="idx_4317f817be71bba9", columns={"optional_item_stain_reward_0"}), @ORM\Index(name="idx_4317f817a8fb13aa", columns={"to_do_child_location_13_2"}), @ORM\Index(name="idx_4317f817ab1bab01", columns={"to_do_child_location_15_6"}), @ORM\Index(name="idx_4317f8176989da32", columns={"to_do_child_location_5_6"}), @ORM\Index(name="idx_4317f817ea57543c", columns={"currency_reward"}), @ORM\Index(name="idx_4317f81731962ed5", columns={"to_do_child_location_17_5"}), @ORM\Index(name="idx_4317f817f3045fe6", columns={"to_do_child_location_7_5"}), @ORM\Index(name="idx_4317f81794960eea", columns={"place_name"}), @ORM\Index(name="idx_4317f81754ace1b3", columns={"to_do_main_location_1"}), @ORM\Index(name="idx_4317f8176bab08ae", columns={"to_do_child_location_2_2"}), @ORM\Index(name="idx_4317f81723abd125", columns={"to_do_main_location_0"}), @ORM\Index(name="idx_4317f817dd5db4b4", columns={"previous_quest_0"}), @ORM\Index(name="idx_4317f81736fbeacc", columns={"to_do_child_location_17_1"}), @ORM\Index(name="idx_4317f817cda5b009", columns={"to_do_main_location_2"}), @ORM\Index(name="idx_4317f81730302827", columns={"to_do_child_location_12_1"}), @ORM\Index(name="idx_4317f81760932356", columns={"to_do_child_location_9_6"}), @ORM\Index(name="idx_4317f817df3b2952", columns={"to_do_main_location_19"}), @ORM\Index(name="idx_4317f8173eac8237", columns={"stain_reward_6"}), @ORM\Index(name="idx_4317f8178ce14338", columns={"action_reward"}), @ORM\Index(name="idx_4317f81780ea7f07", columns={"to_do_child_location_5_0"}), @ORM\Index(name="idx_4317f817cd498cd2", columns={"to_do_child_location_23_3"}), @ORM\Index(name="idx_4317f817bd23785d", columns={"to_do_child_location_23_6"}), @ORM\Index(name="idx_4317f817814c79f5", columns={"to_do_child_location_0_4"}), @ORM\Index(name="idx_4317f8175440dd68", columns={"to_do_child_location_23_0"}), @ORM\Index(name="idx_4317f817add069ea", columns={"to_do_child_location_10_6"}), @ORM\Index(name="idx_4317f817e7537113", columns={"item_catalyst_1"}), @ORM\Index(name="idx_4317f817ab7fc7c4", columns={"to_do_child_location_11_2"}), @ORM\Index(name="idx_4317f817a95d1558", columns={"to_do_child_location_16_6"}), @ORM\Index(name="idx_4317f8178832ec54", columns={"to_do_child_location_8_0"}), @ORM\Index(name="idx_4317f8171d6e520f", columns={"to_do_child_location_3_3"}), @ORM\Index(name="idx_4317f8176f11a275", columns={"general_action_reward_0"}), @ORM\Index(name="idx_4317f817421c62f1", columns={"to_do_child_location_11_4"}), @ORM\Index(name="idx_4317f8176ee41e2b", columns={"to_do_child_location_5_2"}), @ORM\Index(name="idx_4317f8176cc6ccb7", columns={"to_do_child_location_2_6"}), @ORM\Index(name="idx_4317f817373980fb", columns={"to_do_child_location_16_1"}), @ORM\Index(name="idx_4317f8173212fabb", columns={"to_do_child_location_15_5"}), @ORM\Index(name="idx_4317f8178621bdec", columns={"to_do_child_location_0_0"}), @ORM\Index(name="idx_4317f8175582b75f", columns={"to_do_child_location_22_0"}), @ORM\Index(name="idx_4317f8175a776981", columns={"to_do_main_location_9"}), @ORM\Index(name="idx_4317f81769edb6f7", columns={"to_do_child_location_1_2"}), @ORM\Index(name="idx_4317f817b9ca682a", columns={"to_do_child_location_21_2"}), @ORM\Index(name="idx_4317f817e83cb138", columns={"satisfaction_npc"}), @ORM\Index(name="idx_4317f817adb4052f", columns={"to_do_child_location_14_2"}), @ORM\Index(name="idx_4317f8174198b69f", columns={"to_do_child_location_13_4"}), @ORM\Index(name="idx_4317f81784036f70", columns={"to_do_child_location_7_4"}), @ORM\Index(name="idx_4317f817f40df73a", columns={"to_do_child_location_3_5"}), @ORM\Index(name="idx_4317f8177e5a20a9", columns={"item_catalyst_2"}), @ORM\Index(name="idx_4317f817dffc233c", columns={"to_do_child_location_13_3"}), @ORM\Index(name="idx_4317f817507fda85", columns={"optional_item_stain_reward_2"}), @ORM\Index(name="idx_4317f8174f8434c3", columns={"to_do_main_location_16"}), @ORM\Index(name="idx_4317f8176a696299", columns={"to_do_child_location_3_2"}), @ORM\Index(name="idx_4317f817684bb005", columns={"to_do_child_location_4_6"}), @ORM\Index(name="idx_4317f81747537474", columns={"to_do_child_location_16_4"}), @ORM\Index(name="idx_4317f817aa5a8422", columns={"previous_quest_1"}), @ORM\Index(name="idx_4317f817f0e4e74d", columns={"to_do_child_location_1_1"}), @ORM\Index(name="idx_4317f81738830455", columns={"to_do_main_location_17"}), @ORM\Index(name="idx_4317f817846703b5", columns={"to_do_child_location_3_0"}), @ORM\Index(name="idx_4317f817351b5267", columns={"to_do_child_location_11_5"}), @ORM\Index(name="idx_4317f8174571a6e8", columns={"to_do_child_location_11_0"}), @ORM\Index(name="idx_4317f81763d5715", columns={"instance_content_0"}), @ORM\Index(name="idx_4317f81748e9f0da", columns={"to_do_main_location_12"}), @ORM\Index(name="idx_4317f817532d1971", columns={"to_do_child_location_23_4"}), @ORM\Index(name="idx_4317f817cc8be6e5", columns={"to_do_child_location_22_3"}), @ORM\Index(name="idx_4317f81714c3938f", columns={"to_do_main_location_23"}), @ORM\Index(name="idx_4317f817b808021d", columns={"to_do_child_location_20_2"}), @ORM\Index(name="idx_4317f8177fd7484b", columns={"other_reward"}), @ORM\Index(name="idx_4317f81733b4fc49", columns={"to_do_child_location_10_1"}), @ORM\Index(name="idx_4317f8178e9d427a", columns={"to_do_child_location_9_4"}), @ORM\Index(name="idx_4317f817108e45c0", columns={"optional_item_reward_2"}), @ORM\Index(name="idx_4317f817a2015265", columns={"to_do_child_location_19_6"}), @ORM\Index(name="idx_4317f8172d705917", columns={"to_do_main_location_8"}), @ORM\Index(name="idx_4317f81727aefd89", columns={"to_do_child_location_21_5"}), @ORM\Index(name="idx_4317f817f0808b88", columns={"to_do_child_location_5_5"}), @ORM\Index(name="idx_4317f81742780e34", columns={"to_do_child_location_15_0"}), @ORM\Index(name="idx_4317f817682fdcc0", columns={"to_do_child_location_0_2"}), @ORM\Index(name="idx_4317f8174aa09d67", columns={"to_do_child_location_18_0"}), @ORM\Index(name="idx_4317f81739c1462e", columns={"stain_reward_2"}), @ORM\Index(name="idx_4317f817ac766f18", columns={"to_do_child_location_15_2"}), @ORM\Index(name="idx_4317f817a939799d", columns={"to_do_child_location_12_2"}), @ORM\Index(name="idx_4317f8176e8072ee", columns={"to_do_child_location_1_6"}), @ORM\Index(name="idx_4317f817ae30d141", columns={"to_do_child_location_16_2"}), @ORM\Index(name="idx_4317f8178f5f284d", columns={"to_do_child_location_8_4"}), @ORM\Index(name="idx_4317f8176d04a680", columns={"to_do_child_location_3_6"}), @ORM\Index(name="idx_4317f81767897556", columns={"optional_item_reward_3"}), @ORM\Index(name="idx_4317f817bb8cd673", columns={"to_do_child_location_22_2"}), @ORM\Index(name="idx_4317f817cecd58bc", columns={"to_do_child_location_21_3"}), @ORM\Index(name="idx_4317f817f142e1bf", columns={"to_do_child_location_4_5"}), @ORM\Index(name="idx_4317f817713a6783", columns={"instance_content_1"}), @ORM\Index(name="idx_4317f8176ca2a072", columns={"to_do_child_location_6_2"}), @ORM\Index(name="idx_4317f817d68d6579", columns={"to_do_main_location_15"}), @ORM\Index(name="idx_4317f8174c0f3349", columns={"to_do_child_location_19_4"}), @ORM\Index(name="idx_4317f81761514961", columns={"to_do_child_location_8_6"}), @ORM\Index(name="idx_4317f817a3c33852", columns={"to_do_child_location_18_6"}), @ORM\Index(name="idx_4317f8176f422f1d", columns={"emote_reward"}), @ORM\Index(name="idx_4317f817836eab69", columns={"to_do_child_location_7_0"}), @ORM\Index(name="idx_4317f81756066331", columns={"to_do_child_location_20_0"}), @ORM\Index(name="idx_4317f81746f57286", columns={"to_do_child_location_13_0"}), @ORM\Index(name="idx_4317f817f2a25914", columns={"to_do_child_location_2_1"}), @ORM\Index(name="idx_4317f817aad9c136", columns={"to_do_child_location_14_6"}), @ORM\Index(name="idx_4317f8173276967e", columns={"to_do_child_location_11_1"}), @ORM\Index(name="idx_4317f817369f8609", columns={"to_do_child_location_13_5"}), @ORM\Index(name="idx_4317f817485efb24", columns={"class_job_required"}), @ORM\Index(name="idx_4317f8178645d129", columns={"to_do_child_location_4_4"}), @ORM\Index(name="idx_4317f817228587c9", columns={"to_do_child_location_22_1"}), @ORM\Index(name="idx_4317f817f64b4963", columns={"to_do_child_location_0_5"}), @ORM\Index(name="idx_4317f817527e090d", columns={"quest_repeat_flag"}), @ORM\Index(name="idx_4317f817e258c45f", columns={"grand_company_rank"}), @ORM\Index(name="idx_4317f81741fcda5a", columns={"to_do_child_location_17_0"}), @ORM\Index(name="idx_4317f8174515ca2d", columns={"to_do_child_location_15_4"}), @ORM\Index(name="idx_4317f817dab335b9", columns={"to_do_child_location_14_3"}), @ORM\Index(name="idx_4317f8173feec04c", columns={"to_do_main_location_13"}), @ORM\Index(name="idx_4317f8171eea8661", columns={"to_do_child_location_1_3"}), @ORM\Index(name="idx_4317f817f7ed4f91", columns={"to_do_child_location_5_1"}), @ORM\Index(name="idx_4317f817a0c81794", columns={"stain_reward_1"}), @ORM\Index(name="idx_4317f8171f28ec56", columns={"to_do_child_location_0_3"}), @ORM\Index(name="idx_4317f81785a56982", columns={"to_do_child_location_2_0"}), @ORM\Index(name="idx_4317f8171821448a", columns={"to_do_child_location_4_3"}), @ORM\Index(name="idx_4317f817a89f7f6f", columns={"to_do_child_location_17_6"}), @ORM\Index(name="idx_4317f817aff2bb76", columns={"to_do_child_location_17_2"}), @ORM\Index(name="idx_4317f817531c1e85", columns={"delivery_quest"}), @ORM\Index(name="idx_4317f81720c33990", columns={"to_do_child_location_21_1"}), @ORM\Index(name="idx_4317f8176a0d0e5c", columns={"to_do_child_location_7_6"}), @ORM\Index(name="idx_4317f8173da7adf1", columns={"to_do_child_location_18_1"}), @ORM\Index(name="idx_4317f81734d93850", columns={"to_do_child_location_10_5"}), @ORM\Index(name="idx_4317f817ba4ebc44", columns={"to_do_child_location_23_2"}), @ORM\Index(name="idx_4317f8174b62f750", columns={"to_do_child_location_19_0"}), @ORM\Index(name="idx_4317f817aabdadf3", columns={"to_do_child_location_10_2"}), @ORM\Index(name="idx_4317f8175a97e1f3", columns={"quest_lock_0"}), @ORM\Index(name="idx_4317f817405adca8", columns={"to_do_child_location_12_4"}), @ORM\Index(name="idx_4317f8173aca69e8", columns={"to_do_child_location_18_5"}), @ORM\Index(name="idx_4317f817b91c7fb0", columns={"optional_item_stain_reward_4"}), @ORM\Index(name="idx_4317f81753c125aa", columns={"to_do_main_location_5"}), @ORM\Index(name="idx_4317f817facdf2a3", columns={"to_do_main_location_21"}), @ORM\Index(name="idx_4317f817aaa41321", columns={"mount_required"}), @ORM\Index(name="idx_4317f817f99a72ec", columns={"to_do_child_location_9_5"})})
 * @ORM\Entity
 */
class Quest
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=true)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level_0", type="bigint", nullable=true)
     */
    private $classJobLevel0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_level_offset", type="integer", nullable=true)
     */
    private $questLevelOffset;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level_1", type="bigint", nullable=true)
     */
    private $classJobLevel1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="previous_quest_join", type="integer", nullable=true)
     */
    private $previousQuestJoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_lock_join", type="integer", nullable=true)
     */
    private $questLockJoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="header", type="bigint", nullable=true)
     */
    private $header;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="integer", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="instance_content_join", type="integer", nullable=true)
     */
    private $instanceContentJoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="festival_begin", type="integer", nullable=true)
     */
    private $festivalBegin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="festival_end", type="integer", nullable=true)
     */
    private $festivalEnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bell_start", type="bigint", nullable=true)
     */
    private $bellStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bell_end", type="bigint", nullable=true)
     */
    private $bellEnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="beast_reputation_value", type="bigint", nullable=true)
     */
    private $beastReputationValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_level", type="integer", nullable=true)
     */
    private $satisfactionLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_house_required", type="boolean", nullable=true)
     */
    private $isHouseRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="issuer_start", type="integer", nullable=true)
     */
    private $issuerStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="client_behavior", type="integer", nullable=true)
     */
    private $clientBehavior;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_end", type="integer", nullable=true)
     */
    private $targetEnd;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_repeatable", type="boolean", nullable=true)
     */
    private $isRepeatable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repeat_interval_type", type="integer", nullable=true)
     */
    private $repeatIntervalType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_cancel", type="boolean", nullable=true)
     */
    private $canCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_class_job_supply", type="integer", nullable=true)
     */
    private $questClassJobSupply;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_0", type="string", length=255, nullable=true)
     */
    private $scriptInstruction0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_1", type="string", length=255, nullable=true)
     */
    private $scriptInstruction1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_2", type="string", length=255, nullable=true)
     */
    private $scriptInstruction2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_3", type="string", length=255, nullable=true)
     */
    private $scriptInstruction3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_4", type="string", length=255, nullable=true)
     */
    private $scriptInstruction4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_5", type="string", length=255, nullable=true)
     */
    private $scriptInstruction5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_6", type="string", length=255, nullable=true)
     */
    private $scriptInstruction6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_7", type="string", length=255, nullable=true)
     */
    private $scriptInstruction7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_8", type="string", length=255, nullable=true)
     */
    private $scriptInstruction8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_9", type="string", length=255, nullable=true)
     */
    private $scriptInstruction9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_10", type="string", length=255, nullable=true)
     */
    private $scriptInstruction10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_11", type="string", length=255, nullable=true)
     */
    private $scriptInstruction11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_12", type="string", length=255, nullable=true)
     */
    private $scriptInstruction12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_13", type="string", length=255, nullable=true)
     */
    private $scriptInstruction13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_14", type="string", length=255, nullable=true)
     */
    private $scriptInstruction14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_15", type="string", length=255, nullable=true)
     */
    private $scriptInstruction15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_16", type="string", length=255, nullable=true)
     */
    private $scriptInstruction16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_17", type="string", length=255, nullable=true)
     */
    private $scriptInstruction17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_18", type="string", length=255, nullable=true)
     */
    private $scriptInstruction18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_19", type="string", length=255, nullable=true)
     */
    private $scriptInstruction19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_20", type="string", length=255, nullable=true)
     */
    private $scriptInstruction20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_21", type="string", length=255, nullable=true)
     */
    private $scriptInstruction21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_22", type="string", length=255, nullable=true)
     */
    private $scriptInstruction22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_23", type="string", length=255, nullable=true)
     */
    private $scriptInstruction23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_24", type="string", length=255, nullable=true)
     */
    private $scriptInstruction24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_25", type="string", length=255, nullable=true)
     */
    private $scriptInstruction25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_26", type="string", length=255, nullable=true)
     */
    private $scriptInstruction26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_27", type="string", length=255, nullable=true)
     */
    private $scriptInstruction27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_28", type="string", length=255, nullable=true)
     */
    private $scriptInstruction28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_29", type="string", length=255, nullable=true)
     */
    private $scriptInstruction29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_30", type="string", length=255, nullable=true)
     */
    private $scriptInstruction30;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_31", type="string", length=255, nullable=true)
     */
    private $scriptInstruction31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_32", type="string", length=255, nullable=true)
     */
    private $scriptInstruction32;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_33", type="string", length=255, nullable=true)
     */
    private $scriptInstruction33;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_34", type="string", length=255, nullable=true)
     */
    private $scriptInstruction34;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_35", type="string", length=255, nullable=true)
     */
    private $scriptInstruction35;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_36", type="string", length=255, nullable=true)
     */
    private $scriptInstruction36;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_37", type="string", length=255, nullable=true)
     */
    private $scriptInstruction37;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_38", type="string", length=255, nullable=true)
     */
    private $scriptInstruction38;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_39", type="string", length=255, nullable=true)
     */
    private $scriptInstruction39;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_40", type="string", length=255, nullable=true)
     */
    private $scriptInstruction40;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_41", type="string", length=255, nullable=true)
     */
    private $scriptInstruction41;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_42", type="string", length=255, nullable=true)
     */
    private $scriptInstruction42;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_43", type="string", length=255, nullable=true)
     */
    private $scriptInstruction43;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_44", type="string", length=255, nullable=true)
     */
    private $scriptInstruction44;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_45", type="string", length=255, nullable=true)
     */
    private $scriptInstruction45;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_46", type="string", length=255, nullable=true)
     */
    private $scriptInstruction46;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_47", type="string", length=255, nullable=true)
     */
    private $scriptInstruction47;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_48", type="string", length=255, nullable=true)
     */
    private $scriptInstruction48;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_49", type="string", length=255, nullable=true)
     */
    private $scriptInstruction49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_0", type="bigint", nullable=true)
     */
    private $scriptArg0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_1", type="bigint", nullable=true)
     */
    private $scriptArg1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_2", type="bigint", nullable=true)
     */
    private $scriptArg2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_3", type="bigint", nullable=true)
     */
    private $scriptArg3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_4", type="bigint", nullable=true)
     */
    private $scriptArg4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_5", type="bigint", nullable=true)
     */
    private $scriptArg5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_6", type="bigint", nullable=true)
     */
    private $scriptArg6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_7", type="bigint", nullable=true)
     */
    private $scriptArg7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_8", type="bigint", nullable=true)
     */
    private $scriptArg8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_9", type="bigint", nullable=true)
     */
    private $scriptArg9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_10", type="bigint", nullable=true)
     */
    private $scriptArg10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_11", type="bigint", nullable=true)
     */
    private $scriptArg11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_12", type="bigint", nullable=true)
     */
    private $scriptArg12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_13", type="bigint", nullable=true)
     */
    private $scriptArg13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_14", type="bigint", nullable=true)
     */
    private $scriptArg14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_15", type="bigint", nullable=true)
     */
    private $scriptArg15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_16", type="bigint", nullable=true)
     */
    private $scriptArg16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_17", type="bigint", nullable=true)
     */
    private $scriptArg17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_18", type="bigint", nullable=true)
     */
    private $scriptArg18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_19", type="bigint", nullable=true)
     */
    private $scriptArg19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_20", type="bigint", nullable=true)
     */
    private $scriptArg20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_21", type="bigint", nullable=true)
     */
    private $scriptArg21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_22", type="bigint", nullable=true)
     */
    private $scriptArg22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_23", type="bigint", nullable=true)
     */
    private $scriptArg23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_24", type="bigint", nullable=true)
     */
    private $scriptArg24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_25", type="bigint", nullable=true)
     */
    private $scriptArg25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_26", type="bigint", nullable=true)
     */
    private $scriptArg26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_27", type="bigint", nullable=true)
     */
    private $scriptArg27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_28", type="bigint", nullable=true)
     */
    private $scriptArg28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_29", type="bigint", nullable=true)
     */
    private $scriptArg29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_30", type="bigint", nullable=true)
     */
    private $scriptArg30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_31", type="bigint", nullable=true)
     */
    private $scriptArg31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_32", type="bigint", nullable=true)
     */
    private $scriptArg32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_33", type="bigint", nullable=true)
     */
    private $scriptArg33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_34", type="bigint", nullable=true)
     */
    private $scriptArg34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_35", type="bigint", nullable=true)
     */
    private $scriptArg35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_36", type="bigint", nullable=true)
     */
    private $scriptArg36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_37", type="bigint", nullable=true)
     */
    private $scriptArg37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_38", type="bigint", nullable=true)
     */
    private $scriptArg38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_39", type="bigint", nullable=true)
     */
    private $scriptArg39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_40", type="bigint", nullable=true)
     */
    private $scriptArg40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_41", type="bigint", nullable=true)
     */
    private $scriptArg41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_42", type="bigint", nullable=true)
     */
    private $scriptArg42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_43", type="bigint", nullable=true)
     */
    private $scriptArg43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_44", type="bigint", nullable=true)
     */
    private $scriptArg44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_45", type="bigint", nullable=true)
     */
    private $scriptArg45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_46", type="bigint", nullable=true)
     */
    private $scriptArg46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_47", type="bigint", nullable=true)
     */
    private $scriptArg47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_48", type="bigint", nullable=true)
     */
    private $scriptArg48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_arg_49", type="bigint", nullable=true)
     */
    private $scriptArg49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_0", type="integer", nullable=true)
     */
    private $actorSpawnSeq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_1", type="integer", nullable=true)
     */
    private $actorSpawnSeq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_2", type="integer", nullable=true)
     */
    private $actorSpawnSeq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_3", type="integer", nullable=true)
     */
    private $actorSpawnSeq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_4", type="integer", nullable=true)
     */
    private $actorSpawnSeq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_5", type="integer", nullable=true)
     */
    private $actorSpawnSeq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_6", type="integer", nullable=true)
     */
    private $actorSpawnSeq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_7", type="integer", nullable=true)
     */
    private $actorSpawnSeq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_8", type="integer", nullable=true)
     */
    private $actorSpawnSeq8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_9", type="integer", nullable=true)
     */
    private $actorSpawnSeq9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_10", type="integer", nullable=true)
     */
    private $actorSpawnSeq10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_11", type="integer", nullable=true)
     */
    private $actorSpawnSeq11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_12", type="integer", nullable=true)
     */
    private $actorSpawnSeq12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_13", type="integer", nullable=true)
     */
    private $actorSpawnSeq13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_14", type="integer", nullable=true)
     */
    private $actorSpawnSeq14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_15", type="integer", nullable=true)
     */
    private $actorSpawnSeq15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_16", type="integer", nullable=true)
     */
    private $actorSpawnSeq16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_17", type="integer", nullable=true)
     */
    private $actorSpawnSeq17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_18", type="integer", nullable=true)
     */
    private $actorSpawnSeq18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_19", type="integer", nullable=true)
     */
    private $actorSpawnSeq19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_20", type="integer", nullable=true)
     */
    private $actorSpawnSeq20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_21", type="integer", nullable=true)
     */
    private $actorSpawnSeq21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_22", type="integer", nullable=true)
     */
    private $actorSpawnSeq22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_23", type="integer", nullable=true)
     */
    private $actorSpawnSeq23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_24", type="integer", nullable=true)
     */
    private $actorSpawnSeq24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_25", type="integer", nullable=true)
     */
    private $actorSpawnSeq25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_26", type="integer", nullable=true)
     */
    private $actorSpawnSeq26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_27", type="integer", nullable=true)
     */
    private $actorSpawnSeq27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_28", type="integer", nullable=true)
     */
    private $actorSpawnSeq28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_29", type="integer", nullable=true)
     */
    private $actorSpawnSeq29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_30", type="integer", nullable=true)
     */
    private $actorSpawnSeq30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_31", type="integer", nullable=true)
     */
    private $actorSpawnSeq31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_32", type="integer", nullable=true)
     */
    private $actorSpawnSeq32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_33", type="integer", nullable=true)
     */
    private $actorSpawnSeq33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_34", type="integer", nullable=true)
     */
    private $actorSpawnSeq34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_35", type="integer", nullable=true)
     */
    private $actorSpawnSeq35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_36", type="integer", nullable=true)
     */
    private $actorSpawnSeq36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_37", type="integer", nullable=true)
     */
    private $actorSpawnSeq37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_38", type="integer", nullable=true)
     */
    private $actorSpawnSeq38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_39", type="integer", nullable=true)
     */
    private $actorSpawnSeq39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_40", type="integer", nullable=true)
     */
    private $actorSpawnSeq40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_41", type="integer", nullable=true)
     */
    private $actorSpawnSeq41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_42", type="integer", nullable=true)
     */
    private $actorSpawnSeq42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_43", type="integer", nullable=true)
     */
    private $actorSpawnSeq43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_44", type="integer", nullable=true)
     */
    private $actorSpawnSeq44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_45", type="integer", nullable=true)
     */
    private $actorSpawnSeq45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_46", type="integer", nullable=true)
     */
    private $actorSpawnSeq46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_47", type="integer", nullable=true)
     */
    private $actorSpawnSeq47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_48", type="integer", nullable=true)
     */
    private $actorSpawnSeq48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_49", type="integer", nullable=true)
     */
    private $actorSpawnSeq49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_50", type="integer", nullable=true)
     */
    private $actorSpawnSeq50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_51", type="integer", nullable=true)
     */
    private $actorSpawnSeq51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_52", type="integer", nullable=true)
     */
    private $actorSpawnSeq52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_53", type="integer", nullable=true)
     */
    private $actorSpawnSeq53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_54", type="integer", nullable=true)
     */
    private $actorSpawnSeq54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_55", type="integer", nullable=true)
     */
    private $actorSpawnSeq55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_56", type="integer", nullable=true)
     */
    private $actorSpawnSeq56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_57", type="integer", nullable=true)
     */
    private $actorSpawnSeq57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_58", type="integer", nullable=true)
     */
    private $actorSpawnSeq58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_59", type="integer", nullable=true)
     */
    private $actorSpawnSeq59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_60", type="integer", nullable=true)
     */
    private $actorSpawnSeq60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_61", type="integer", nullable=true)
     */
    private $actorSpawnSeq61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_62", type="integer", nullable=true)
     */
    private $actorSpawnSeq62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_spawn_seq_63", type="integer", nullable=true)
     */
    private $actorSpawnSeq63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_0", type="integer", nullable=true)
     */
    private $actorDespawnSeq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_1", type="integer", nullable=true)
     */
    private $actorDespawnSeq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_2", type="integer", nullable=true)
     */
    private $actorDespawnSeq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_3", type="integer", nullable=true)
     */
    private $actorDespawnSeq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_4", type="integer", nullable=true)
     */
    private $actorDespawnSeq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_5", type="integer", nullable=true)
     */
    private $actorDespawnSeq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_6", type="integer", nullable=true)
     */
    private $actorDespawnSeq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_7", type="integer", nullable=true)
     */
    private $actorDespawnSeq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_8", type="integer", nullable=true)
     */
    private $actorDespawnSeq8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_9", type="integer", nullable=true)
     */
    private $actorDespawnSeq9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_10", type="integer", nullable=true)
     */
    private $actorDespawnSeq10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_11", type="integer", nullable=true)
     */
    private $actorDespawnSeq11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_12", type="integer", nullable=true)
     */
    private $actorDespawnSeq12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_13", type="integer", nullable=true)
     */
    private $actorDespawnSeq13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_14", type="integer", nullable=true)
     */
    private $actorDespawnSeq14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_15", type="integer", nullable=true)
     */
    private $actorDespawnSeq15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_16", type="integer", nullable=true)
     */
    private $actorDespawnSeq16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_17", type="integer", nullable=true)
     */
    private $actorDespawnSeq17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_18", type="integer", nullable=true)
     */
    private $actorDespawnSeq18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_19", type="integer", nullable=true)
     */
    private $actorDespawnSeq19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_20", type="integer", nullable=true)
     */
    private $actorDespawnSeq20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_21", type="integer", nullable=true)
     */
    private $actorDespawnSeq21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_22", type="integer", nullable=true)
     */
    private $actorDespawnSeq22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_23", type="integer", nullable=true)
     */
    private $actorDespawnSeq23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_24", type="integer", nullable=true)
     */
    private $actorDespawnSeq24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_25", type="integer", nullable=true)
     */
    private $actorDespawnSeq25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_26", type="integer", nullable=true)
     */
    private $actorDespawnSeq26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_27", type="integer", nullable=true)
     */
    private $actorDespawnSeq27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_28", type="integer", nullable=true)
     */
    private $actorDespawnSeq28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_29", type="integer", nullable=true)
     */
    private $actorDespawnSeq29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_30", type="integer", nullable=true)
     */
    private $actorDespawnSeq30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_31", type="integer", nullable=true)
     */
    private $actorDespawnSeq31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_32", type="integer", nullable=true)
     */
    private $actorDespawnSeq32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_33", type="integer", nullable=true)
     */
    private $actorDespawnSeq33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_34", type="integer", nullable=true)
     */
    private $actorDespawnSeq34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_35", type="integer", nullable=true)
     */
    private $actorDespawnSeq35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_36", type="integer", nullable=true)
     */
    private $actorDespawnSeq36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_37", type="integer", nullable=true)
     */
    private $actorDespawnSeq37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_38", type="integer", nullable=true)
     */
    private $actorDespawnSeq38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_39", type="integer", nullable=true)
     */
    private $actorDespawnSeq39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_40", type="integer", nullable=true)
     */
    private $actorDespawnSeq40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_41", type="integer", nullable=true)
     */
    private $actorDespawnSeq41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_42", type="integer", nullable=true)
     */
    private $actorDespawnSeq42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_43", type="integer", nullable=true)
     */
    private $actorDespawnSeq43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_44", type="integer", nullable=true)
     */
    private $actorDespawnSeq44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_45", type="integer", nullable=true)
     */
    private $actorDespawnSeq45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_46", type="integer", nullable=true)
     */
    private $actorDespawnSeq46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_47", type="integer", nullable=true)
     */
    private $actorDespawnSeq47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_48", type="integer", nullable=true)
     */
    private $actorDespawnSeq48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_49", type="integer", nullable=true)
     */
    private $actorDespawnSeq49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_50", type="integer", nullable=true)
     */
    private $actorDespawnSeq50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_51", type="integer", nullable=true)
     */
    private $actorDespawnSeq51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_52", type="integer", nullable=true)
     */
    private $actorDespawnSeq52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_53", type="integer", nullable=true)
     */
    private $actorDespawnSeq53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_54", type="integer", nullable=true)
     */
    private $actorDespawnSeq54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_55", type="integer", nullable=true)
     */
    private $actorDespawnSeq55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_56", type="integer", nullable=true)
     */
    private $actorDespawnSeq56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_57", type="integer", nullable=true)
     */
    private $actorDespawnSeq57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_58", type="integer", nullable=true)
     */
    private $actorDespawnSeq58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_59", type="integer", nullable=true)
     */
    private $actorDespawnSeq59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_60", type="integer", nullable=true)
     */
    private $actorDespawnSeq60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_61", type="integer", nullable=true)
     */
    private $actorDespawnSeq61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_62", type="integer", nullable=true)
     */
    private $actorDespawnSeq62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="actor_despawn_seq_63", type="integer", nullable=true)
     */
    private $actorDespawnSeq63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_0", type="bigint", nullable=true)
     */
    private $listener0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_1", type="bigint", nullable=true)
     */
    private $listener1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_2", type="bigint", nullable=true)
     */
    private $listener2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_3", type="bigint", nullable=true)
     */
    private $listener3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_4", type="bigint", nullable=true)
     */
    private $listener4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_5", type="bigint", nullable=true)
     */
    private $listener5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_6", type="bigint", nullable=true)
     */
    private $listener6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_7", type="bigint", nullable=true)
     */
    private $listener7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_8", type="bigint", nullable=true)
     */
    private $listener8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_9", type="bigint", nullable=true)
     */
    private $listener9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_10", type="bigint", nullable=true)
     */
    private $listener10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_11", type="bigint", nullable=true)
     */
    private $listener11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_12", type="bigint", nullable=true)
     */
    private $listener12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_13", type="bigint", nullable=true)
     */
    private $listener13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_14", type="bigint", nullable=true)
     */
    private $listener14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_15", type="bigint", nullable=true)
     */
    private $listener15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_16", type="bigint", nullable=true)
     */
    private $listener16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_17", type="bigint", nullable=true)
     */
    private $listener17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_18", type="bigint", nullable=true)
     */
    private $listener18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_19", type="bigint", nullable=true)
     */
    private $listener19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_20", type="bigint", nullable=true)
     */
    private $listener20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_21", type="bigint", nullable=true)
     */
    private $listener21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_22", type="bigint", nullable=true)
     */
    private $listener22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_23", type="bigint", nullable=true)
     */
    private $listener23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_24", type="bigint", nullable=true)
     */
    private $listener24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_25", type="bigint", nullable=true)
     */
    private $listener25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_26", type="bigint", nullable=true)
     */
    private $listener26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_27", type="bigint", nullable=true)
     */
    private $listener27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_28", type="bigint", nullable=true)
     */
    private $listener28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_29", type="bigint", nullable=true)
     */
    private $listener29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_30", type="bigint", nullable=true)
     */
    private $listener30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_31", type="bigint", nullable=true)
     */
    private $listener31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_32", type="bigint", nullable=true)
     */
    private $listener32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_33", type="bigint", nullable=true)
     */
    private $listener33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_34", type="bigint", nullable=true)
     */
    private $listener34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_35", type="bigint", nullable=true)
     */
    private $listener35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_36", type="bigint", nullable=true)
     */
    private $listener36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_37", type="bigint", nullable=true)
     */
    private $listener37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_38", type="bigint", nullable=true)
     */
    private $listener38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_39", type="bigint", nullable=true)
     */
    private $listener39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_40", type="bigint", nullable=true)
     */
    private $listener40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_41", type="bigint", nullable=true)
     */
    private $listener41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_42", type="bigint", nullable=true)
     */
    private $listener42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_43", type="bigint", nullable=true)
     */
    private $listener43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_44", type="bigint", nullable=true)
     */
    private $listener44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_45", type="bigint", nullable=true)
     */
    private $listener45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_46", type="bigint", nullable=true)
     */
    private $listener46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_47", type="bigint", nullable=true)
     */
    private $listener47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_48", type="bigint", nullable=true)
     */
    private $listener48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_49", type="bigint", nullable=true)
     */
    private $listener49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_50", type="bigint", nullable=true)
     */
    private $listener50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_51", type="bigint", nullable=true)
     */
    private $listener51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_52", type="bigint", nullable=true)
     */
    private $listener52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_53", type="bigint", nullable=true)
     */
    private $listener53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_54", type="bigint", nullable=true)
     */
    private $listener54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_55", type="bigint", nullable=true)
     */
    private $listener55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_56", type="bigint", nullable=true)
     */
    private $listener56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_57", type="bigint", nullable=true)
     */
    private $listener57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_58", type="bigint", nullable=true)
     */
    private $listener58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_59", type="bigint", nullable=true)
     */
    private $listener59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_60", type="bigint", nullable=true)
     */
    private $listener60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_61", type="bigint", nullable=true)
     */
    private $listener61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_62", type="bigint", nullable=true)
     */
    private $listener62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listener_63", type="bigint", nullable=true)
     */
    private $listener63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_0", type="integer", nullable=true)
     */
    private $questUint8a0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_1", type="integer", nullable=true)
     */
    private $questUint8a1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_2", type="integer", nullable=true)
     */
    private $questUint8a2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_3", type="integer", nullable=true)
     */
    private $questUint8a3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_4", type="integer", nullable=true)
     */
    private $questUint8a4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_5", type="integer", nullable=true)
     */
    private $questUint8a5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_6", type="integer", nullable=true)
     */
    private $questUint8a6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_7", type="integer", nullable=true)
     */
    private $questUint8a7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_8", type="integer", nullable=true)
     */
    private $questUint8a8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_9", type="integer", nullable=true)
     */
    private $questUint8a9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_10", type="integer", nullable=true)
     */
    private $questUint8a10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_11", type="integer", nullable=true)
     */
    private $questUint8a11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_12", type="integer", nullable=true)
     */
    private $questUint8a12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_13", type="integer", nullable=true)
     */
    private $questUint8a13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_14", type="integer", nullable=true)
     */
    private $questUint8a14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_15", type="integer", nullable=true)
     */
    private $questUint8a15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_16", type="integer", nullable=true)
     */
    private $questUint8a16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_17", type="integer", nullable=true)
     */
    private $questUint8a17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_18", type="integer", nullable=true)
     */
    private $questUint8a18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_19", type="integer", nullable=true)
     */
    private $questUint8a19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_20", type="integer", nullable=true)
     */
    private $questUint8a20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_21", type="integer", nullable=true)
     */
    private $questUint8a21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_22", type="integer", nullable=true)
     */
    private $questUint8a22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_23", type="integer", nullable=true)
     */
    private $questUint8a23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_24", type="integer", nullable=true)
     */
    private $questUint8a24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_25", type="integer", nullable=true)
     */
    private $questUint8a25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_26", type="integer", nullable=true)
     */
    private $questUint8a26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_27", type="integer", nullable=true)
     */
    private $questUint8a27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_28", type="integer", nullable=true)
     */
    private $questUint8a28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_29", type="integer", nullable=true)
     */
    private $questUint8a29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_30", type="integer", nullable=true)
     */
    private $questUint8a30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8a_31", type="integer", nullable=true)
     */
    private $questUint8a31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_0", type="integer", nullable=true)
     */
    private $questUint8b0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_1", type="integer", nullable=true)
     */
    private $questUint8b1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_2", type="integer", nullable=true)
     */
    private $questUint8b2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_3", type="integer", nullable=true)
     */
    private $questUint8b3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_4", type="integer", nullable=true)
     */
    private $questUint8b4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_5", type="integer", nullable=true)
     */
    private $questUint8b5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_6", type="integer", nullable=true)
     */
    private $questUint8b6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_7", type="integer", nullable=true)
     */
    private $questUint8b7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_8", type="integer", nullable=true)
     */
    private $questUint8b8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_9", type="integer", nullable=true)
     */
    private $questUint8b9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_10", type="integer", nullable=true)
     */
    private $questUint8b10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_11", type="integer", nullable=true)
     */
    private $questUint8b11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_12", type="integer", nullable=true)
     */
    private $questUint8b12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_13", type="integer", nullable=true)
     */
    private $questUint8b13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_14", type="integer", nullable=true)
     */
    private $questUint8b14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_15", type="integer", nullable=true)
     */
    private $questUint8b15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_16", type="integer", nullable=true)
     */
    private $questUint8b16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_17", type="integer", nullable=true)
     */
    private $questUint8b17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_18", type="integer", nullable=true)
     */
    private $questUint8b18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_19", type="integer", nullable=true)
     */
    private $questUint8b19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_20", type="integer", nullable=true)
     */
    private $questUint8b20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_21", type="integer", nullable=true)
     */
    private $questUint8b21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_22", type="integer", nullable=true)
     */
    private $questUint8b22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_23", type="integer", nullable=true)
     */
    private $questUint8b23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_24", type="integer", nullable=true)
     */
    private $questUint8b24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_25", type="integer", nullable=true)
     */
    private $questUint8b25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_26", type="integer", nullable=true)
     */
    private $questUint8b26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_27", type="integer", nullable=true)
     */
    private $questUint8b27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_28", type="integer", nullable=true)
     */
    private $questUint8b28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_29", type="integer", nullable=true)
     */
    private $questUint8b29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_30", type="integer", nullable=true)
     */
    private $questUint8b30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_uint8b_31", type="integer", nullable=true)
     */
    private $questUint8b31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_0", type="integer", nullable=true)
     */
    private $conditionType0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_1", type="integer", nullable=true)
     */
    private $conditionType1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_2", type="integer", nullable=true)
     */
    private $conditionType2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_3", type="integer", nullable=true)
     */
    private $conditionType3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_4", type="integer", nullable=true)
     */
    private $conditionType4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_5", type="integer", nullable=true)
     */
    private $conditionType5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_6", type="integer", nullable=true)
     */
    private $conditionType6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_7", type="integer", nullable=true)
     */
    private $conditionType7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_8", type="integer", nullable=true)
     */
    private $conditionType8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_9", type="integer", nullable=true)
     */
    private $conditionType9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_10", type="integer", nullable=true)
     */
    private $conditionType10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_11", type="integer", nullable=true)
     */
    private $conditionType11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_12", type="integer", nullable=true)
     */
    private $conditionType12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_13", type="integer", nullable=true)
     */
    private $conditionType13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_14", type="integer", nullable=true)
     */
    private $conditionType14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_15", type="integer", nullable=true)
     */
    private $conditionType15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_16", type="integer", nullable=true)
     */
    private $conditionType16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_17", type="integer", nullable=true)
     */
    private $conditionType17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_18", type="integer", nullable=true)
     */
    private $conditionType18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_19", type="integer", nullable=true)
     */
    private $conditionType19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_20", type="integer", nullable=true)
     */
    private $conditionType20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_21", type="integer", nullable=true)
     */
    private $conditionType21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_22", type="integer", nullable=true)
     */
    private $conditionType22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_23", type="integer", nullable=true)
     */
    private $conditionType23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_24", type="integer", nullable=true)
     */
    private $conditionType24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_25", type="integer", nullable=true)
     */
    private $conditionType25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_26", type="integer", nullable=true)
     */
    private $conditionType26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_27", type="integer", nullable=true)
     */
    private $conditionType27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_28", type="integer", nullable=true)
     */
    private $conditionType28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_29", type="integer", nullable=true)
     */
    private $conditionType29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_30", type="integer", nullable=true)
     */
    private $conditionType30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_31", type="integer", nullable=true)
     */
    private $conditionType31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_32", type="integer", nullable=true)
     */
    private $conditionType32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_33", type="integer", nullable=true)
     */
    private $conditionType33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_34", type="integer", nullable=true)
     */
    private $conditionType34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_35", type="integer", nullable=true)
     */
    private $conditionType35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_36", type="integer", nullable=true)
     */
    private $conditionType36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_37", type="integer", nullable=true)
     */
    private $conditionType37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_38", type="integer", nullable=true)
     */
    private $conditionType38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_39", type="integer", nullable=true)
     */
    private $conditionType39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_40", type="integer", nullable=true)
     */
    private $conditionType40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_41", type="integer", nullable=true)
     */
    private $conditionType41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_42", type="integer", nullable=true)
     */
    private $conditionType42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_43", type="integer", nullable=true)
     */
    private $conditionType43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_44", type="integer", nullable=true)
     */
    private $conditionType44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_45", type="integer", nullable=true)
     */
    private $conditionType45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_46", type="integer", nullable=true)
     */
    private $conditionType46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_47", type="integer", nullable=true)
     */
    private $conditionType47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_48", type="integer", nullable=true)
     */
    private $conditionType48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_49", type="integer", nullable=true)
     */
    private $conditionType49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_50", type="integer", nullable=true)
     */
    private $conditionType50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_51", type="integer", nullable=true)
     */
    private $conditionType51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_52", type="integer", nullable=true)
     */
    private $conditionType52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_53", type="integer", nullable=true)
     */
    private $conditionType53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_54", type="integer", nullable=true)
     */
    private $conditionType54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_55", type="integer", nullable=true)
     */
    private $conditionType55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_56", type="integer", nullable=true)
     */
    private $conditionType56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_57", type="integer", nullable=true)
     */
    private $conditionType57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_58", type="integer", nullable=true)
     */
    private $conditionType58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_59", type="integer", nullable=true)
     */
    private $conditionType59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_60", type="integer", nullable=true)
     */
    private $conditionType60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_61", type="integer", nullable=true)
     */
    private $conditionType61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_62", type="integer", nullable=true)
     */
    private $conditionType62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_type_63", type="integer", nullable=true)
     */
    private $conditionType63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_0", type="bigint", nullable=true)
     */
    private $conditionValue0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_1", type="bigint", nullable=true)
     */
    private $conditionValue1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_2", type="bigint", nullable=true)
     */
    private $conditionValue2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_3", type="bigint", nullable=true)
     */
    private $conditionValue3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_4", type="bigint", nullable=true)
     */
    private $conditionValue4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_5", type="bigint", nullable=true)
     */
    private $conditionValue5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_6", type="bigint", nullable=true)
     */
    private $conditionValue6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_7", type="bigint", nullable=true)
     */
    private $conditionValue7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_8", type="bigint", nullable=true)
     */
    private $conditionValue8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_9", type="bigint", nullable=true)
     */
    private $conditionValue9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_10", type="bigint", nullable=true)
     */
    private $conditionValue10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_11", type="bigint", nullable=true)
     */
    private $conditionValue11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_12", type="bigint", nullable=true)
     */
    private $conditionValue12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_13", type="bigint", nullable=true)
     */
    private $conditionValue13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_14", type="bigint", nullable=true)
     */
    private $conditionValue14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_15", type="bigint", nullable=true)
     */
    private $conditionValue15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_16", type="bigint", nullable=true)
     */
    private $conditionValue16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_17", type="bigint", nullable=true)
     */
    private $conditionValue17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_18", type="bigint", nullable=true)
     */
    private $conditionValue18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_19", type="bigint", nullable=true)
     */
    private $conditionValue19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_20", type="bigint", nullable=true)
     */
    private $conditionValue20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_21", type="bigint", nullable=true)
     */
    private $conditionValue21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_22", type="bigint", nullable=true)
     */
    private $conditionValue22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_23", type="bigint", nullable=true)
     */
    private $conditionValue23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_24", type="bigint", nullable=true)
     */
    private $conditionValue24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_25", type="bigint", nullable=true)
     */
    private $conditionValue25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_26", type="bigint", nullable=true)
     */
    private $conditionValue26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_27", type="bigint", nullable=true)
     */
    private $conditionValue27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_28", type="bigint", nullable=true)
     */
    private $conditionValue28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_29", type="bigint", nullable=true)
     */
    private $conditionValue29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_30", type="bigint", nullable=true)
     */
    private $conditionValue30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_31", type="bigint", nullable=true)
     */
    private $conditionValue31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_32", type="bigint", nullable=true)
     */
    private $conditionValue32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_33", type="bigint", nullable=true)
     */
    private $conditionValue33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_34", type="bigint", nullable=true)
     */
    private $conditionValue34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_35", type="bigint", nullable=true)
     */
    private $conditionValue35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_36", type="bigint", nullable=true)
     */
    private $conditionValue36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_37", type="bigint", nullable=true)
     */
    private $conditionValue37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_38", type="bigint", nullable=true)
     */
    private $conditionValue38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_39", type="bigint", nullable=true)
     */
    private $conditionValue39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_40", type="bigint", nullable=true)
     */
    private $conditionValue40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_41", type="bigint", nullable=true)
     */
    private $conditionValue41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_42", type="bigint", nullable=true)
     */
    private $conditionValue42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_43", type="bigint", nullable=true)
     */
    private $conditionValue43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_44", type="bigint", nullable=true)
     */
    private $conditionValue44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_45", type="bigint", nullable=true)
     */
    private $conditionValue45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_46", type="bigint", nullable=true)
     */
    private $conditionValue46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_47", type="bigint", nullable=true)
     */
    private $conditionValue47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_48", type="bigint", nullable=true)
     */
    private $conditionValue48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_49", type="bigint", nullable=true)
     */
    private $conditionValue49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_50", type="bigint", nullable=true)
     */
    private $conditionValue50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_51", type="bigint", nullable=true)
     */
    private $conditionValue51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_52", type="bigint", nullable=true)
     */
    private $conditionValue52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_53", type="bigint", nullable=true)
     */
    private $conditionValue53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_54", type="bigint", nullable=true)
     */
    private $conditionValue54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_55", type="bigint", nullable=true)
     */
    private $conditionValue55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_56", type="bigint", nullable=true)
     */
    private $conditionValue56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_57", type="bigint", nullable=true)
     */
    private $conditionValue57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_58", type="bigint", nullable=true)
     */
    private $conditionValue58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_59", type="bigint", nullable=true)
     */
    private $conditionValue59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_60", type="bigint", nullable=true)
     */
    private $conditionValue60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_61", type="bigint", nullable=true)
     */
    private $conditionValue61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_62", type="bigint", nullable=true)
     */
    private $conditionValue62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value_63", type="bigint", nullable=true)
     */
    private $conditionValue63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_0", type="integer", nullable=true)
     */
    private $conditionOperator0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_1", type="integer", nullable=true)
     */
    private $conditionOperator1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_2", type="integer", nullable=true)
     */
    private $conditionOperator2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_3", type="integer", nullable=true)
     */
    private $conditionOperator3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_4", type="integer", nullable=true)
     */
    private $conditionOperator4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_5", type="integer", nullable=true)
     */
    private $conditionOperator5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_6", type="integer", nullable=true)
     */
    private $conditionOperator6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_7", type="integer", nullable=true)
     */
    private $conditionOperator7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_8", type="integer", nullable=true)
     */
    private $conditionOperator8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_9", type="integer", nullable=true)
     */
    private $conditionOperator9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_10", type="integer", nullable=true)
     */
    private $conditionOperator10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_11", type="integer", nullable=true)
     */
    private $conditionOperator11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_12", type="integer", nullable=true)
     */
    private $conditionOperator12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_13", type="integer", nullable=true)
     */
    private $conditionOperator13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_14", type="integer", nullable=true)
     */
    private $conditionOperator14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_15", type="integer", nullable=true)
     */
    private $conditionOperator15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_16", type="integer", nullable=true)
     */
    private $conditionOperator16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_17", type="integer", nullable=true)
     */
    private $conditionOperator17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_18", type="integer", nullable=true)
     */
    private $conditionOperator18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_19", type="integer", nullable=true)
     */
    private $conditionOperator19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_20", type="integer", nullable=true)
     */
    private $conditionOperator20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_21", type="integer", nullable=true)
     */
    private $conditionOperator21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_22", type="integer", nullable=true)
     */
    private $conditionOperator22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_23", type="integer", nullable=true)
     */
    private $conditionOperator23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_24", type="integer", nullable=true)
     */
    private $conditionOperator24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_25", type="integer", nullable=true)
     */
    private $conditionOperator25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_26", type="integer", nullable=true)
     */
    private $conditionOperator26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_27", type="integer", nullable=true)
     */
    private $conditionOperator27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_28", type="integer", nullable=true)
     */
    private $conditionOperator28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_29", type="integer", nullable=true)
     */
    private $conditionOperator29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_30", type="integer", nullable=true)
     */
    private $conditionOperator30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_31", type="integer", nullable=true)
     */
    private $conditionOperator31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_32", type="integer", nullable=true)
     */
    private $conditionOperator32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_33", type="integer", nullable=true)
     */
    private $conditionOperator33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_34", type="integer", nullable=true)
     */
    private $conditionOperator34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_35", type="integer", nullable=true)
     */
    private $conditionOperator35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_36", type="integer", nullable=true)
     */
    private $conditionOperator36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_37", type="integer", nullable=true)
     */
    private $conditionOperator37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_38", type="integer", nullable=true)
     */
    private $conditionOperator38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_39", type="integer", nullable=true)
     */
    private $conditionOperator39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_40", type="integer", nullable=true)
     */
    private $conditionOperator40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_41", type="integer", nullable=true)
     */
    private $conditionOperator41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_42", type="integer", nullable=true)
     */
    private $conditionOperator42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_43", type="integer", nullable=true)
     */
    private $conditionOperator43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_44", type="integer", nullable=true)
     */
    private $conditionOperator44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_45", type="integer", nullable=true)
     */
    private $conditionOperator45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_46", type="integer", nullable=true)
     */
    private $conditionOperator46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_47", type="integer", nullable=true)
     */
    private $conditionOperator47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_48", type="integer", nullable=true)
     */
    private $conditionOperator48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_49", type="integer", nullable=true)
     */
    private $conditionOperator49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_50", type="integer", nullable=true)
     */
    private $conditionOperator50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_51", type="integer", nullable=true)
     */
    private $conditionOperator51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_52", type="integer", nullable=true)
     */
    private $conditionOperator52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_53", type="integer", nullable=true)
     */
    private $conditionOperator53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_54", type="integer", nullable=true)
     */
    private $conditionOperator54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_55", type="integer", nullable=true)
     */
    private $conditionOperator55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_56", type="integer", nullable=true)
     */
    private $conditionOperator56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_57", type="integer", nullable=true)
     */
    private $conditionOperator57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_58", type="integer", nullable=true)
     */
    private $conditionOperator58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_59", type="integer", nullable=true)
     */
    private $conditionOperator59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_60", type="integer", nullable=true)
     */
    private $conditionOperator60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_61", type="integer", nullable=true)
     */
    private $conditionOperator61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_62", type="integer", nullable=true)
     */
    private $conditionOperator62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_operator_63", type="integer", nullable=true)
     */
    private $conditionOperator63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_0", type="bigint", nullable=true)
     */
    private $behavior0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_1", type="bigint", nullable=true)
     */
    private $behavior1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_2", type="bigint", nullable=true)
     */
    private $behavior2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_3", type="bigint", nullable=true)
     */
    private $behavior3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_4", type="bigint", nullable=true)
     */
    private $behavior4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_5", type="bigint", nullable=true)
     */
    private $behavior5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_6", type="bigint", nullable=true)
     */
    private $behavior6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_7", type="bigint", nullable=true)
     */
    private $behavior7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_8", type="bigint", nullable=true)
     */
    private $behavior8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_9", type="bigint", nullable=true)
     */
    private $behavior9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_10", type="bigint", nullable=true)
     */
    private $behavior10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_11", type="bigint", nullable=true)
     */
    private $behavior11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_12", type="bigint", nullable=true)
     */
    private $behavior12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_13", type="bigint", nullable=true)
     */
    private $behavior13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_14", type="bigint", nullable=true)
     */
    private $behavior14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_15", type="bigint", nullable=true)
     */
    private $behavior15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_16", type="bigint", nullable=true)
     */
    private $behavior16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_17", type="bigint", nullable=true)
     */
    private $behavior17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_18", type="bigint", nullable=true)
     */
    private $behavior18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_19", type="bigint", nullable=true)
     */
    private $behavior19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_20", type="bigint", nullable=true)
     */
    private $behavior20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_21", type="bigint", nullable=true)
     */
    private $behavior21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_22", type="bigint", nullable=true)
     */
    private $behavior22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_23", type="bigint", nullable=true)
     */
    private $behavior23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_24", type="bigint", nullable=true)
     */
    private $behavior24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_25", type="bigint", nullable=true)
     */
    private $behavior25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_26", type="bigint", nullable=true)
     */
    private $behavior26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_27", type="bigint", nullable=true)
     */
    private $behavior27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_28", type="bigint", nullable=true)
     */
    private $behavior28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_29", type="bigint", nullable=true)
     */
    private $behavior29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_30", type="bigint", nullable=true)
     */
    private $behavior30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_31", type="bigint", nullable=true)
     */
    private $behavior31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_32", type="bigint", nullable=true)
     */
    private $behavior32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_33", type="bigint", nullable=true)
     */
    private $behavior33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_34", type="bigint", nullable=true)
     */
    private $behavior34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_35", type="bigint", nullable=true)
     */
    private $behavior35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_36", type="bigint", nullable=true)
     */
    private $behavior36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_37", type="bigint", nullable=true)
     */
    private $behavior37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_38", type="bigint", nullable=true)
     */
    private $behavior38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_39", type="bigint", nullable=true)
     */
    private $behavior39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_40", type="bigint", nullable=true)
     */
    private $behavior40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_41", type="bigint", nullable=true)
     */
    private $behavior41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_42", type="bigint", nullable=true)
     */
    private $behavior42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_43", type="bigint", nullable=true)
     */
    private $behavior43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_44", type="bigint", nullable=true)
     */
    private $behavior44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_45", type="bigint", nullable=true)
     */
    private $behavior45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_46", type="bigint", nullable=true)
     */
    private $behavior46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_47", type="bigint", nullable=true)
     */
    private $behavior47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_48", type="bigint", nullable=true)
     */
    private $behavior48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_49", type="bigint", nullable=true)
     */
    private $behavior49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_50", type="bigint", nullable=true)
     */
    private $behavior50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_51", type="bigint", nullable=true)
     */
    private $behavior51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_52", type="bigint", nullable=true)
     */
    private $behavior52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_53", type="bigint", nullable=true)
     */
    private $behavior53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_54", type="bigint", nullable=true)
     */
    private $behavior54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_55", type="bigint", nullable=true)
     */
    private $behavior55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_56", type="bigint", nullable=true)
     */
    private $behavior56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_57", type="bigint", nullable=true)
     */
    private $behavior57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_58", type="bigint", nullable=true)
     */
    private $behavior58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_59", type="bigint", nullable=true)
     */
    private $behavior59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_60", type="bigint", nullable=true)
     */
    private $behavior60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_61", type="bigint", nullable=true)
     */
    private $behavior61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_62", type="bigint", nullable=true)
     */
    private $behavior62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behavior_63", type="bigint", nullable=true)
     */
    private $behavior63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_0", type="boolean", nullable=true)
     */
    private $visibleBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_1", type="boolean", nullable=true)
     */
    private $visibleBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_2", type="boolean", nullable=true)
     */
    private $visibleBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_3", type="boolean", nullable=true)
     */
    private $visibleBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_4", type="boolean", nullable=true)
     */
    private $visibleBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_5", type="boolean", nullable=true)
     */
    private $visibleBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_6", type="boolean", nullable=true)
     */
    private $visibleBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_7", type="boolean", nullable=true)
     */
    private $visibleBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_8", type="boolean", nullable=true)
     */
    private $visibleBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_9", type="boolean", nullable=true)
     */
    private $visibleBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_10", type="boolean", nullable=true)
     */
    private $visibleBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_11", type="boolean", nullable=true)
     */
    private $visibleBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_12", type="boolean", nullable=true)
     */
    private $visibleBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_13", type="boolean", nullable=true)
     */
    private $visibleBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_14", type="boolean", nullable=true)
     */
    private $visibleBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_15", type="boolean", nullable=true)
     */
    private $visibleBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_16", type="boolean", nullable=true)
     */
    private $visibleBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_17", type="boolean", nullable=true)
     */
    private $visibleBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_18", type="boolean", nullable=true)
     */
    private $visibleBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_19", type="boolean", nullable=true)
     */
    private $visibleBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_20", type="boolean", nullable=true)
     */
    private $visibleBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_21", type="boolean", nullable=true)
     */
    private $visibleBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_22", type="boolean", nullable=true)
     */
    private $visibleBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_23", type="boolean", nullable=true)
     */
    private $visibleBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_24", type="boolean", nullable=true)
     */
    private $visibleBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_25", type="boolean", nullable=true)
     */
    private $visibleBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_26", type="boolean", nullable=true)
     */
    private $visibleBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_27", type="boolean", nullable=true)
     */
    private $visibleBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_28", type="boolean", nullable=true)
     */
    private $visibleBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_29", type="boolean", nullable=true)
     */
    private $visibleBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_30", type="boolean", nullable=true)
     */
    private $visibleBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_31", type="boolean", nullable=true)
     */
    private $visibleBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_32", type="boolean", nullable=true)
     */
    private $visibleBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_33", type="boolean", nullable=true)
     */
    private $visibleBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_34", type="boolean", nullable=true)
     */
    private $visibleBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_35", type="boolean", nullable=true)
     */
    private $visibleBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_36", type="boolean", nullable=true)
     */
    private $visibleBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_37", type="boolean", nullable=true)
     */
    private $visibleBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_38", type="boolean", nullable=true)
     */
    private $visibleBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_39", type="boolean", nullable=true)
     */
    private $visibleBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_40", type="boolean", nullable=true)
     */
    private $visibleBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_41", type="boolean", nullable=true)
     */
    private $visibleBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_42", type="boolean", nullable=true)
     */
    private $visibleBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_43", type="boolean", nullable=true)
     */
    private $visibleBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_44", type="boolean", nullable=true)
     */
    private $visibleBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_45", type="boolean", nullable=true)
     */
    private $visibleBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_46", type="boolean", nullable=true)
     */
    private $visibleBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_47", type="boolean", nullable=true)
     */
    private $visibleBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_48", type="boolean", nullable=true)
     */
    private $visibleBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_49", type="boolean", nullable=true)
     */
    private $visibleBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_50", type="boolean", nullable=true)
     */
    private $visibleBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_51", type="boolean", nullable=true)
     */
    private $visibleBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_52", type="boolean", nullable=true)
     */
    private $visibleBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_53", type="boolean", nullable=true)
     */
    private $visibleBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_54", type="boolean", nullable=true)
     */
    private $visibleBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_55", type="boolean", nullable=true)
     */
    private $visibleBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_56", type="boolean", nullable=true)
     */
    private $visibleBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_57", type="boolean", nullable=true)
     */
    private $visibleBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_58", type="boolean", nullable=true)
     */
    private $visibleBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_59", type="boolean", nullable=true)
     */
    private $visibleBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_60", type="boolean", nullable=true)
     */
    private $visibleBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_61", type="boolean", nullable=true)
     */
    private $visibleBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_62", type="boolean", nullable=true)
     */
    private $visibleBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible_bool_63", type="boolean", nullable=true)
     */
    private $visibleBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_0", type="boolean", nullable=true)
     */
    private $conditionBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_1", type="boolean", nullable=true)
     */
    private $conditionBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_2", type="boolean", nullable=true)
     */
    private $conditionBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_3", type="boolean", nullable=true)
     */
    private $conditionBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_4", type="boolean", nullable=true)
     */
    private $conditionBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_5", type="boolean", nullable=true)
     */
    private $conditionBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_6", type="boolean", nullable=true)
     */
    private $conditionBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_7", type="boolean", nullable=true)
     */
    private $conditionBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_8", type="boolean", nullable=true)
     */
    private $conditionBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_9", type="boolean", nullable=true)
     */
    private $conditionBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_10", type="boolean", nullable=true)
     */
    private $conditionBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_11", type="boolean", nullable=true)
     */
    private $conditionBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_12", type="boolean", nullable=true)
     */
    private $conditionBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_13", type="boolean", nullable=true)
     */
    private $conditionBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_14", type="boolean", nullable=true)
     */
    private $conditionBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_15", type="boolean", nullable=true)
     */
    private $conditionBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_16", type="boolean", nullable=true)
     */
    private $conditionBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_17", type="boolean", nullable=true)
     */
    private $conditionBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_18", type="boolean", nullable=true)
     */
    private $conditionBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_19", type="boolean", nullable=true)
     */
    private $conditionBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_20", type="boolean", nullable=true)
     */
    private $conditionBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_21", type="boolean", nullable=true)
     */
    private $conditionBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_22", type="boolean", nullable=true)
     */
    private $conditionBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_23", type="boolean", nullable=true)
     */
    private $conditionBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_24", type="boolean", nullable=true)
     */
    private $conditionBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_25", type="boolean", nullable=true)
     */
    private $conditionBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_26", type="boolean", nullable=true)
     */
    private $conditionBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_27", type="boolean", nullable=true)
     */
    private $conditionBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_28", type="boolean", nullable=true)
     */
    private $conditionBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_29", type="boolean", nullable=true)
     */
    private $conditionBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_30", type="boolean", nullable=true)
     */
    private $conditionBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_31", type="boolean", nullable=true)
     */
    private $conditionBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_32", type="boolean", nullable=true)
     */
    private $conditionBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_33", type="boolean", nullable=true)
     */
    private $conditionBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_34", type="boolean", nullable=true)
     */
    private $conditionBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_35", type="boolean", nullable=true)
     */
    private $conditionBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_36", type="boolean", nullable=true)
     */
    private $conditionBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_37", type="boolean", nullable=true)
     */
    private $conditionBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_38", type="boolean", nullable=true)
     */
    private $conditionBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_39", type="boolean", nullable=true)
     */
    private $conditionBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_40", type="boolean", nullable=true)
     */
    private $conditionBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_41", type="boolean", nullable=true)
     */
    private $conditionBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_42", type="boolean", nullable=true)
     */
    private $conditionBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_43", type="boolean", nullable=true)
     */
    private $conditionBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_44", type="boolean", nullable=true)
     */
    private $conditionBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_45", type="boolean", nullable=true)
     */
    private $conditionBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_46", type="boolean", nullable=true)
     */
    private $conditionBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_47", type="boolean", nullable=true)
     */
    private $conditionBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_48", type="boolean", nullable=true)
     */
    private $conditionBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_49", type="boolean", nullable=true)
     */
    private $conditionBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_50", type="boolean", nullable=true)
     */
    private $conditionBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_51", type="boolean", nullable=true)
     */
    private $conditionBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_52", type="boolean", nullable=true)
     */
    private $conditionBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_53", type="boolean", nullable=true)
     */
    private $conditionBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_54", type="boolean", nullable=true)
     */
    private $conditionBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_55", type="boolean", nullable=true)
     */
    private $conditionBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_56", type="boolean", nullable=true)
     */
    private $conditionBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_57", type="boolean", nullable=true)
     */
    private $conditionBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_58", type="boolean", nullable=true)
     */
    private $conditionBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_59", type="boolean", nullable=true)
     */
    private $conditionBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_60", type="boolean", nullable=true)
     */
    private $conditionBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_61", type="boolean", nullable=true)
     */
    private $conditionBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_62", type="boolean", nullable=true)
     */
    private $conditionBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="condition_bool_63", type="boolean", nullable=true)
     */
    private $conditionBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_0", type="boolean", nullable=true)
     */
    private $itemBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_1", type="boolean", nullable=true)
     */
    private $itemBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_2", type="boolean", nullable=true)
     */
    private $itemBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_3", type="boolean", nullable=true)
     */
    private $itemBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_4", type="boolean", nullable=true)
     */
    private $itemBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_5", type="boolean", nullable=true)
     */
    private $itemBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_6", type="boolean", nullable=true)
     */
    private $itemBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_7", type="boolean", nullable=true)
     */
    private $itemBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_8", type="boolean", nullable=true)
     */
    private $itemBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_9", type="boolean", nullable=true)
     */
    private $itemBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_10", type="boolean", nullable=true)
     */
    private $itemBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_11", type="boolean", nullable=true)
     */
    private $itemBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_12", type="boolean", nullable=true)
     */
    private $itemBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_13", type="boolean", nullable=true)
     */
    private $itemBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_14", type="boolean", nullable=true)
     */
    private $itemBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_15", type="boolean", nullable=true)
     */
    private $itemBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_16", type="boolean", nullable=true)
     */
    private $itemBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_17", type="boolean", nullable=true)
     */
    private $itemBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_18", type="boolean", nullable=true)
     */
    private $itemBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_19", type="boolean", nullable=true)
     */
    private $itemBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_20", type="boolean", nullable=true)
     */
    private $itemBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_21", type="boolean", nullable=true)
     */
    private $itemBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_22", type="boolean", nullable=true)
     */
    private $itemBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_23", type="boolean", nullable=true)
     */
    private $itemBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_24", type="boolean", nullable=true)
     */
    private $itemBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_25", type="boolean", nullable=true)
     */
    private $itemBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_26", type="boolean", nullable=true)
     */
    private $itemBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_27", type="boolean", nullable=true)
     */
    private $itemBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_28", type="boolean", nullable=true)
     */
    private $itemBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_29", type="boolean", nullable=true)
     */
    private $itemBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_30", type="boolean", nullable=true)
     */
    private $itemBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_31", type="boolean", nullable=true)
     */
    private $itemBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_32", type="boolean", nullable=true)
     */
    private $itemBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_33", type="boolean", nullable=true)
     */
    private $itemBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_34", type="boolean", nullable=true)
     */
    private $itemBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_35", type="boolean", nullable=true)
     */
    private $itemBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_36", type="boolean", nullable=true)
     */
    private $itemBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_37", type="boolean", nullable=true)
     */
    private $itemBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_38", type="boolean", nullable=true)
     */
    private $itemBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_39", type="boolean", nullable=true)
     */
    private $itemBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_40", type="boolean", nullable=true)
     */
    private $itemBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_41", type="boolean", nullable=true)
     */
    private $itemBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_42", type="boolean", nullable=true)
     */
    private $itemBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_43", type="boolean", nullable=true)
     */
    private $itemBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_44", type="boolean", nullable=true)
     */
    private $itemBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_45", type="boolean", nullable=true)
     */
    private $itemBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_46", type="boolean", nullable=true)
     */
    private $itemBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_47", type="boolean", nullable=true)
     */
    private $itemBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_48", type="boolean", nullable=true)
     */
    private $itemBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_49", type="boolean", nullable=true)
     */
    private $itemBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_50", type="boolean", nullable=true)
     */
    private $itemBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_51", type="boolean", nullable=true)
     */
    private $itemBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_52", type="boolean", nullable=true)
     */
    private $itemBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_53", type="boolean", nullable=true)
     */
    private $itemBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_54", type="boolean", nullable=true)
     */
    private $itemBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_55", type="boolean", nullable=true)
     */
    private $itemBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_56", type="boolean", nullable=true)
     */
    private $itemBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_57", type="boolean", nullable=true)
     */
    private $itemBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_58", type="boolean", nullable=true)
     */
    private $itemBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_59", type="boolean", nullable=true)
     */
    private $itemBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_60", type="boolean", nullable=true)
     */
    private $itemBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_61", type="boolean", nullable=true)
     */
    private $itemBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_62", type="boolean", nullable=true)
     */
    private $itemBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_bool_63", type="boolean", nullable=true)
     */
    private $itemBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_0", type="boolean", nullable=true)
     */
    private $announceBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_1", type="boolean", nullable=true)
     */
    private $announceBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_2", type="boolean", nullable=true)
     */
    private $announceBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_3", type="boolean", nullable=true)
     */
    private $announceBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_4", type="boolean", nullable=true)
     */
    private $announceBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_5", type="boolean", nullable=true)
     */
    private $announceBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_6", type="boolean", nullable=true)
     */
    private $announceBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_7", type="boolean", nullable=true)
     */
    private $announceBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_8", type="boolean", nullable=true)
     */
    private $announceBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_9", type="boolean", nullable=true)
     */
    private $announceBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_10", type="boolean", nullable=true)
     */
    private $announceBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_11", type="boolean", nullable=true)
     */
    private $announceBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_12", type="boolean", nullable=true)
     */
    private $announceBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_13", type="boolean", nullable=true)
     */
    private $announceBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_14", type="boolean", nullable=true)
     */
    private $announceBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_15", type="boolean", nullable=true)
     */
    private $announceBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_16", type="boolean", nullable=true)
     */
    private $announceBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_17", type="boolean", nullable=true)
     */
    private $announceBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_18", type="boolean", nullable=true)
     */
    private $announceBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_19", type="boolean", nullable=true)
     */
    private $announceBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_20", type="boolean", nullable=true)
     */
    private $announceBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_21", type="boolean", nullable=true)
     */
    private $announceBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_22", type="boolean", nullable=true)
     */
    private $announceBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_23", type="boolean", nullable=true)
     */
    private $announceBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_24", type="boolean", nullable=true)
     */
    private $announceBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_25", type="boolean", nullable=true)
     */
    private $announceBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_26", type="boolean", nullable=true)
     */
    private $announceBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_27", type="boolean", nullable=true)
     */
    private $announceBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_28", type="boolean", nullable=true)
     */
    private $announceBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_29", type="boolean", nullable=true)
     */
    private $announceBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_30", type="boolean", nullable=true)
     */
    private $announceBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_31", type="boolean", nullable=true)
     */
    private $announceBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_32", type="boolean", nullable=true)
     */
    private $announceBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_33", type="boolean", nullable=true)
     */
    private $announceBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_34", type="boolean", nullable=true)
     */
    private $announceBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_35", type="boolean", nullable=true)
     */
    private $announceBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_36", type="boolean", nullable=true)
     */
    private $announceBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_37", type="boolean", nullable=true)
     */
    private $announceBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_38", type="boolean", nullable=true)
     */
    private $announceBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_39", type="boolean", nullable=true)
     */
    private $announceBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_40", type="boolean", nullable=true)
     */
    private $announceBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_41", type="boolean", nullable=true)
     */
    private $announceBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_42", type="boolean", nullable=true)
     */
    private $announceBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_43", type="boolean", nullable=true)
     */
    private $announceBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_44", type="boolean", nullable=true)
     */
    private $announceBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_45", type="boolean", nullable=true)
     */
    private $announceBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_46", type="boolean", nullable=true)
     */
    private $announceBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_47", type="boolean", nullable=true)
     */
    private $announceBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_48", type="boolean", nullable=true)
     */
    private $announceBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_49", type="boolean", nullable=true)
     */
    private $announceBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_50", type="boolean", nullable=true)
     */
    private $announceBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_51", type="boolean", nullable=true)
     */
    private $announceBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_52", type="boolean", nullable=true)
     */
    private $announceBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_53", type="boolean", nullable=true)
     */
    private $announceBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_54", type="boolean", nullable=true)
     */
    private $announceBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_55", type="boolean", nullable=true)
     */
    private $announceBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_56", type="boolean", nullable=true)
     */
    private $announceBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_57", type="boolean", nullable=true)
     */
    private $announceBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_58", type="boolean", nullable=true)
     */
    private $announceBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_59", type="boolean", nullable=true)
     */
    private $announceBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_60", type="boolean", nullable=true)
     */
    private $announceBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_61", type="boolean", nullable=true)
     */
    private $announceBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_62", type="boolean", nullable=true)
     */
    private $announceBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="announce_bool_63", type="boolean", nullable=true)
     */
    private $announceBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_0", type="boolean", nullable=true)
     */
    private $behaviorBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_1", type="boolean", nullable=true)
     */
    private $behaviorBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_2", type="boolean", nullable=true)
     */
    private $behaviorBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_3", type="boolean", nullable=true)
     */
    private $behaviorBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_4", type="boolean", nullable=true)
     */
    private $behaviorBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_5", type="boolean", nullable=true)
     */
    private $behaviorBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_6", type="boolean", nullable=true)
     */
    private $behaviorBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_7", type="boolean", nullable=true)
     */
    private $behaviorBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_8", type="boolean", nullable=true)
     */
    private $behaviorBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_9", type="boolean", nullable=true)
     */
    private $behaviorBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_10", type="boolean", nullable=true)
     */
    private $behaviorBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_11", type="boolean", nullable=true)
     */
    private $behaviorBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_12", type="boolean", nullable=true)
     */
    private $behaviorBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_13", type="boolean", nullable=true)
     */
    private $behaviorBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_14", type="boolean", nullable=true)
     */
    private $behaviorBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_15", type="boolean", nullable=true)
     */
    private $behaviorBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_16", type="boolean", nullable=true)
     */
    private $behaviorBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_17", type="boolean", nullable=true)
     */
    private $behaviorBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_18", type="boolean", nullable=true)
     */
    private $behaviorBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_19", type="boolean", nullable=true)
     */
    private $behaviorBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_20", type="boolean", nullable=true)
     */
    private $behaviorBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_21", type="boolean", nullable=true)
     */
    private $behaviorBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_22", type="boolean", nullable=true)
     */
    private $behaviorBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_23", type="boolean", nullable=true)
     */
    private $behaviorBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_24", type="boolean", nullable=true)
     */
    private $behaviorBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_25", type="boolean", nullable=true)
     */
    private $behaviorBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_26", type="boolean", nullable=true)
     */
    private $behaviorBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_27", type="boolean", nullable=true)
     */
    private $behaviorBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_28", type="boolean", nullable=true)
     */
    private $behaviorBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_29", type="boolean", nullable=true)
     */
    private $behaviorBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_30", type="boolean", nullable=true)
     */
    private $behaviorBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_31", type="boolean", nullable=true)
     */
    private $behaviorBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_32", type="boolean", nullable=true)
     */
    private $behaviorBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_33", type="boolean", nullable=true)
     */
    private $behaviorBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_34", type="boolean", nullable=true)
     */
    private $behaviorBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_35", type="boolean", nullable=true)
     */
    private $behaviorBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_36", type="boolean", nullable=true)
     */
    private $behaviorBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_37", type="boolean", nullable=true)
     */
    private $behaviorBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_38", type="boolean", nullable=true)
     */
    private $behaviorBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_39", type="boolean", nullable=true)
     */
    private $behaviorBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_40", type="boolean", nullable=true)
     */
    private $behaviorBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_41", type="boolean", nullable=true)
     */
    private $behaviorBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_42", type="boolean", nullable=true)
     */
    private $behaviorBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_43", type="boolean", nullable=true)
     */
    private $behaviorBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_44", type="boolean", nullable=true)
     */
    private $behaviorBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_45", type="boolean", nullable=true)
     */
    private $behaviorBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_46", type="boolean", nullable=true)
     */
    private $behaviorBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_47", type="boolean", nullable=true)
     */
    private $behaviorBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_48", type="boolean", nullable=true)
     */
    private $behaviorBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_49", type="boolean", nullable=true)
     */
    private $behaviorBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_50", type="boolean", nullable=true)
     */
    private $behaviorBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_51", type="boolean", nullable=true)
     */
    private $behaviorBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_52", type="boolean", nullable=true)
     */
    private $behaviorBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_53", type="boolean", nullable=true)
     */
    private $behaviorBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_54", type="boolean", nullable=true)
     */
    private $behaviorBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_55", type="boolean", nullable=true)
     */
    private $behaviorBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_56", type="boolean", nullable=true)
     */
    private $behaviorBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_57", type="boolean", nullable=true)
     */
    private $behaviorBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_58", type="boolean", nullable=true)
     */
    private $behaviorBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_59", type="boolean", nullable=true)
     */
    private $behaviorBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_60", type="boolean", nullable=true)
     */
    private $behaviorBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_61", type="boolean", nullable=true)
     */
    private $behaviorBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_62", type="boolean", nullable=true)
     */
    private $behaviorBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="behavior_bool_63", type="boolean", nullable=true)
     */
    private $behaviorBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_0", type="boolean", nullable=true)
     */
    private $acceptBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_1", type="boolean", nullable=true)
     */
    private $acceptBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_2", type="boolean", nullable=true)
     */
    private $acceptBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_3", type="boolean", nullable=true)
     */
    private $acceptBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_4", type="boolean", nullable=true)
     */
    private $acceptBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_5", type="boolean", nullable=true)
     */
    private $acceptBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_6", type="boolean", nullable=true)
     */
    private $acceptBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_7", type="boolean", nullable=true)
     */
    private $acceptBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_8", type="boolean", nullable=true)
     */
    private $acceptBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_9", type="boolean", nullable=true)
     */
    private $acceptBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_10", type="boolean", nullable=true)
     */
    private $acceptBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_11", type="boolean", nullable=true)
     */
    private $acceptBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_12", type="boolean", nullable=true)
     */
    private $acceptBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_13", type="boolean", nullable=true)
     */
    private $acceptBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_14", type="boolean", nullable=true)
     */
    private $acceptBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_15", type="boolean", nullable=true)
     */
    private $acceptBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_16", type="boolean", nullable=true)
     */
    private $acceptBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_17", type="boolean", nullable=true)
     */
    private $acceptBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_18", type="boolean", nullable=true)
     */
    private $acceptBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_19", type="boolean", nullable=true)
     */
    private $acceptBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_20", type="boolean", nullable=true)
     */
    private $acceptBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_21", type="boolean", nullable=true)
     */
    private $acceptBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_22", type="boolean", nullable=true)
     */
    private $acceptBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_23", type="boolean", nullable=true)
     */
    private $acceptBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_24", type="boolean", nullable=true)
     */
    private $acceptBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_25", type="boolean", nullable=true)
     */
    private $acceptBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_26", type="boolean", nullable=true)
     */
    private $acceptBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_27", type="boolean", nullable=true)
     */
    private $acceptBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_28", type="boolean", nullable=true)
     */
    private $acceptBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_29", type="boolean", nullable=true)
     */
    private $acceptBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_30", type="boolean", nullable=true)
     */
    private $acceptBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_31", type="boolean", nullable=true)
     */
    private $acceptBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_32", type="boolean", nullable=true)
     */
    private $acceptBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_33", type="boolean", nullable=true)
     */
    private $acceptBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_34", type="boolean", nullable=true)
     */
    private $acceptBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_35", type="boolean", nullable=true)
     */
    private $acceptBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_36", type="boolean", nullable=true)
     */
    private $acceptBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_37", type="boolean", nullable=true)
     */
    private $acceptBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_38", type="boolean", nullable=true)
     */
    private $acceptBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_39", type="boolean", nullable=true)
     */
    private $acceptBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_40", type="boolean", nullable=true)
     */
    private $acceptBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_41", type="boolean", nullable=true)
     */
    private $acceptBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_42", type="boolean", nullable=true)
     */
    private $acceptBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_43", type="boolean", nullable=true)
     */
    private $acceptBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_44", type="boolean", nullable=true)
     */
    private $acceptBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_45", type="boolean", nullable=true)
     */
    private $acceptBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_46", type="boolean", nullable=true)
     */
    private $acceptBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_47", type="boolean", nullable=true)
     */
    private $acceptBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_48", type="boolean", nullable=true)
     */
    private $acceptBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_49", type="boolean", nullable=true)
     */
    private $acceptBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_50", type="boolean", nullable=true)
     */
    private $acceptBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_51", type="boolean", nullable=true)
     */
    private $acceptBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_52", type="boolean", nullable=true)
     */
    private $acceptBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_53", type="boolean", nullable=true)
     */
    private $acceptBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_54", type="boolean", nullable=true)
     */
    private $acceptBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_55", type="boolean", nullable=true)
     */
    private $acceptBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_56", type="boolean", nullable=true)
     */
    private $acceptBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_57", type="boolean", nullable=true)
     */
    private $acceptBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_58", type="boolean", nullable=true)
     */
    private $acceptBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_59", type="boolean", nullable=true)
     */
    private $acceptBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_60", type="boolean", nullable=true)
     */
    private $acceptBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_61", type="boolean", nullable=true)
     */
    private $acceptBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_62", type="boolean", nullable=true)
     */
    private $acceptBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accept_bool_63", type="boolean", nullable=true)
     */
    private $acceptBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_0", type="boolean", nullable=true)
     */
    private $qualifiedBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_1", type="boolean", nullable=true)
     */
    private $qualifiedBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_2", type="boolean", nullable=true)
     */
    private $qualifiedBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_3", type="boolean", nullable=true)
     */
    private $qualifiedBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_4", type="boolean", nullable=true)
     */
    private $qualifiedBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_5", type="boolean", nullable=true)
     */
    private $qualifiedBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_6", type="boolean", nullable=true)
     */
    private $qualifiedBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_7", type="boolean", nullable=true)
     */
    private $qualifiedBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_8", type="boolean", nullable=true)
     */
    private $qualifiedBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_9", type="boolean", nullable=true)
     */
    private $qualifiedBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_10", type="boolean", nullable=true)
     */
    private $qualifiedBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_11", type="boolean", nullable=true)
     */
    private $qualifiedBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_12", type="boolean", nullable=true)
     */
    private $qualifiedBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_13", type="boolean", nullable=true)
     */
    private $qualifiedBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_14", type="boolean", nullable=true)
     */
    private $qualifiedBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_15", type="boolean", nullable=true)
     */
    private $qualifiedBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_16", type="boolean", nullable=true)
     */
    private $qualifiedBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_17", type="boolean", nullable=true)
     */
    private $qualifiedBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_18", type="boolean", nullable=true)
     */
    private $qualifiedBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_19", type="boolean", nullable=true)
     */
    private $qualifiedBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_20", type="boolean", nullable=true)
     */
    private $qualifiedBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_21", type="boolean", nullable=true)
     */
    private $qualifiedBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_22", type="boolean", nullable=true)
     */
    private $qualifiedBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_23", type="boolean", nullable=true)
     */
    private $qualifiedBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_24", type="boolean", nullable=true)
     */
    private $qualifiedBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_25", type="boolean", nullable=true)
     */
    private $qualifiedBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_26", type="boolean", nullable=true)
     */
    private $qualifiedBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_27", type="boolean", nullable=true)
     */
    private $qualifiedBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_28", type="boolean", nullable=true)
     */
    private $qualifiedBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_29", type="boolean", nullable=true)
     */
    private $qualifiedBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_30", type="boolean", nullable=true)
     */
    private $qualifiedBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_31", type="boolean", nullable=true)
     */
    private $qualifiedBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_32", type="boolean", nullable=true)
     */
    private $qualifiedBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_33", type="boolean", nullable=true)
     */
    private $qualifiedBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_34", type="boolean", nullable=true)
     */
    private $qualifiedBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_35", type="boolean", nullable=true)
     */
    private $qualifiedBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_36", type="boolean", nullable=true)
     */
    private $qualifiedBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_37", type="boolean", nullable=true)
     */
    private $qualifiedBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_38", type="boolean", nullable=true)
     */
    private $qualifiedBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_39", type="boolean", nullable=true)
     */
    private $qualifiedBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_40", type="boolean", nullable=true)
     */
    private $qualifiedBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_41", type="boolean", nullable=true)
     */
    private $qualifiedBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_42", type="boolean", nullable=true)
     */
    private $qualifiedBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_43", type="boolean", nullable=true)
     */
    private $qualifiedBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_44", type="boolean", nullable=true)
     */
    private $qualifiedBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_45", type="boolean", nullable=true)
     */
    private $qualifiedBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_46", type="boolean", nullable=true)
     */
    private $qualifiedBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_47", type="boolean", nullable=true)
     */
    private $qualifiedBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_48", type="boolean", nullable=true)
     */
    private $qualifiedBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_49", type="boolean", nullable=true)
     */
    private $qualifiedBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_50", type="boolean", nullable=true)
     */
    private $qualifiedBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_51", type="boolean", nullable=true)
     */
    private $qualifiedBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_52", type="boolean", nullable=true)
     */
    private $qualifiedBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_53", type="boolean", nullable=true)
     */
    private $qualifiedBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_54", type="boolean", nullable=true)
     */
    private $qualifiedBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_55", type="boolean", nullable=true)
     */
    private $qualifiedBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_56", type="boolean", nullable=true)
     */
    private $qualifiedBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_57", type="boolean", nullable=true)
     */
    private $qualifiedBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_58", type="boolean", nullable=true)
     */
    private $qualifiedBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_59", type="boolean", nullable=true)
     */
    private $qualifiedBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_60", type="boolean", nullable=true)
     */
    private $qualifiedBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_61", type="boolean", nullable=true)
     */
    private $qualifiedBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_62", type="boolean", nullable=true)
     */
    private $qualifiedBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qualified_bool_63", type="boolean", nullable=true)
     */
    private $qualifiedBool63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_0", type="boolean", nullable=true)
     */
    private $canTargetBool0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_1", type="boolean", nullable=true)
     */
    private $canTargetBool1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_2", type="boolean", nullable=true)
     */
    private $canTargetBool2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_3", type="boolean", nullable=true)
     */
    private $canTargetBool3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_4", type="boolean", nullable=true)
     */
    private $canTargetBool4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_5", type="boolean", nullable=true)
     */
    private $canTargetBool5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_6", type="boolean", nullable=true)
     */
    private $canTargetBool6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_7", type="boolean", nullable=true)
     */
    private $canTargetBool7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_8", type="boolean", nullable=true)
     */
    private $canTargetBool8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_9", type="boolean", nullable=true)
     */
    private $canTargetBool9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_10", type="boolean", nullable=true)
     */
    private $canTargetBool10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_11", type="boolean", nullable=true)
     */
    private $canTargetBool11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_12", type="boolean", nullable=true)
     */
    private $canTargetBool12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_13", type="boolean", nullable=true)
     */
    private $canTargetBool13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_14", type="boolean", nullable=true)
     */
    private $canTargetBool14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_15", type="boolean", nullable=true)
     */
    private $canTargetBool15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_16", type="boolean", nullable=true)
     */
    private $canTargetBool16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_17", type="boolean", nullable=true)
     */
    private $canTargetBool17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_18", type="boolean", nullable=true)
     */
    private $canTargetBool18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_19", type="boolean", nullable=true)
     */
    private $canTargetBool19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_20", type="boolean", nullable=true)
     */
    private $canTargetBool20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_21", type="boolean", nullable=true)
     */
    private $canTargetBool21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_22", type="boolean", nullable=true)
     */
    private $canTargetBool22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_23", type="boolean", nullable=true)
     */
    private $canTargetBool23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_24", type="boolean", nullable=true)
     */
    private $canTargetBool24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_25", type="boolean", nullable=true)
     */
    private $canTargetBool25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_26", type="boolean", nullable=true)
     */
    private $canTargetBool26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_27", type="boolean", nullable=true)
     */
    private $canTargetBool27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_28", type="boolean", nullable=true)
     */
    private $canTargetBool28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_29", type="boolean", nullable=true)
     */
    private $canTargetBool29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_30", type="boolean", nullable=true)
     */
    private $canTargetBool30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_31", type="boolean", nullable=true)
     */
    private $canTargetBool31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_32", type="boolean", nullable=true)
     */
    private $canTargetBool32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_33", type="boolean", nullable=true)
     */
    private $canTargetBool33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_34", type="boolean", nullable=true)
     */
    private $canTargetBool34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_35", type="boolean", nullable=true)
     */
    private $canTargetBool35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_36", type="boolean", nullable=true)
     */
    private $canTargetBool36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_37", type="boolean", nullable=true)
     */
    private $canTargetBool37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_38", type="boolean", nullable=true)
     */
    private $canTargetBool38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_39", type="boolean", nullable=true)
     */
    private $canTargetBool39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_40", type="boolean", nullable=true)
     */
    private $canTargetBool40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_41", type="boolean", nullable=true)
     */
    private $canTargetBool41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_42", type="boolean", nullable=true)
     */
    private $canTargetBool42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_43", type="boolean", nullable=true)
     */
    private $canTargetBool43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_44", type="boolean", nullable=true)
     */
    private $canTargetBool44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_45", type="boolean", nullable=true)
     */
    private $canTargetBool45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_46", type="boolean", nullable=true)
     */
    private $canTargetBool46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_47", type="boolean", nullable=true)
     */
    private $canTargetBool47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_48", type="boolean", nullable=true)
     */
    private $canTargetBool48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_49", type="boolean", nullable=true)
     */
    private $canTargetBool49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_50", type="boolean", nullable=true)
     */
    private $canTargetBool50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_51", type="boolean", nullable=true)
     */
    private $canTargetBool51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_52", type="boolean", nullable=true)
     */
    private $canTargetBool52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_53", type="boolean", nullable=true)
     */
    private $canTargetBool53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_54", type="boolean", nullable=true)
     */
    private $canTargetBool54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_55", type="boolean", nullable=true)
     */
    private $canTargetBool55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_56", type="boolean", nullable=true)
     */
    private $canTargetBool56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_57", type="boolean", nullable=true)
     */
    private $canTargetBool57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_58", type="boolean", nullable=true)
     */
    private $canTargetBool58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_59", type="boolean", nullable=true)
     */
    private $canTargetBool59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_60", type="boolean", nullable=true)
     */
    private $canTargetBool60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_61", type="boolean", nullable=true)
     */
    private $canTargetBool61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_62", type="boolean", nullable=true)
     */
    private $canTargetBool62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_bool_63", type="boolean", nullable=true)
     */
    private $canTargetBool63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_0", type="integer", nullable=true)
     */
    private $toDoCompleteSeq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_1", type="integer", nullable=true)
     */
    private $toDoCompleteSeq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_2", type="integer", nullable=true)
     */
    private $toDoCompleteSeq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_3", type="integer", nullable=true)
     */
    private $toDoCompleteSeq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_4", type="integer", nullable=true)
     */
    private $toDoCompleteSeq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_5", type="integer", nullable=true)
     */
    private $toDoCompleteSeq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_6", type="integer", nullable=true)
     */
    private $toDoCompleteSeq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_7", type="integer", nullable=true)
     */
    private $toDoCompleteSeq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_8", type="integer", nullable=true)
     */
    private $toDoCompleteSeq8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_9", type="integer", nullable=true)
     */
    private $toDoCompleteSeq9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_10", type="integer", nullable=true)
     */
    private $toDoCompleteSeq10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_11", type="integer", nullable=true)
     */
    private $toDoCompleteSeq11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_12", type="integer", nullable=true)
     */
    private $toDoCompleteSeq12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_13", type="integer", nullable=true)
     */
    private $toDoCompleteSeq13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_14", type="integer", nullable=true)
     */
    private $toDoCompleteSeq14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_15", type="integer", nullable=true)
     */
    private $toDoCompleteSeq15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_16", type="integer", nullable=true)
     */
    private $toDoCompleteSeq16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_17", type="integer", nullable=true)
     */
    private $toDoCompleteSeq17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_18", type="integer", nullable=true)
     */
    private $toDoCompleteSeq18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_19", type="integer", nullable=true)
     */
    private $toDoCompleteSeq19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_20", type="integer", nullable=true)
     */
    private $toDoCompleteSeq20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_21", type="integer", nullable=true)
     */
    private $toDoCompleteSeq21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_22", type="integer", nullable=true)
     */
    private $toDoCompleteSeq22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_complete_seq_23", type="integer", nullable=true)
     */
    private $toDoCompleteSeq23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_0", type="integer", nullable=true)
     */
    private $toDoQty0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_1", type="integer", nullable=true)
     */
    private $toDoQty1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_2", type="integer", nullable=true)
     */
    private $toDoQty2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_3", type="integer", nullable=true)
     */
    private $toDoQty3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_4", type="integer", nullable=true)
     */
    private $toDoQty4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_5", type="integer", nullable=true)
     */
    private $toDoQty5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_6", type="integer", nullable=true)
     */
    private $toDoQty6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_7", type="integer", nullable=true)
     */
    private $toDoQty7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_8", type="integer", nullable=true)
     */
    private $toDoQty8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_9", type="integer", nullable=true)
     */
    private $toDoQty9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_10", type="integer", nullable=true)
     */
    private $toDoQty10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_11", type="integer", nullable=true)
     */
    private $toDoQty11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_12", type="integer", nullable=true)
     */
    private $toDoQty12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_13", type="integer", nullable=true)
     */
    private $toDoQty13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_14", type="integer", nullable=true)
     */
    private $toDoQty14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_15", type="integer", nullable=true)
     */
    private $toDoQty15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_16", type="integer", nullable=true)
     */
    private $toDoQty16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_17", type="integer", nullable=true)
     */
    private $toDoQty17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_18", type="integer", nullable=true)
     */
    private $toDoQty18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_19", type="integer", nullable=true)
     */
    private $toDoQty19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_20", type="integer", nullable=true)
     */
    private $toDoQty20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_21", type="integer", nullable=true)
     */
    private $toDoQty21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_22", type="integer", nullable=true)
     */
    private $toDoQty22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_do_qty_23", type="integer", nullable=true)
     */
    private $toDoQty23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_0", type="integer", nullable=true)
     */
    private $countableNum0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_1", type="integer", nullable=true)
     */
    private $countableNum1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_2", type="integer", nullable=true)
     */
    private $countableNum2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_3", type="integer", nullable=true)
     */
    private $countableNum3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_4", type="integer", nullable=true)
     */
    private $countableNum4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_5", type="integer", nullable=true)
     */
    private $countableNum5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_6", type="integer", nullable=true)
     */
    private $countableNum6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_7", type="integer", nullable=true)
     */
    private $countableNum7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_8", type="integer", nullable=true)
     */
    private $countableNum8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_9", type="integer", nullable=true)
     */
    private $countableNum9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_10", type="integer", nullable=true)
     */
    private $countableNum10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_11", type="integer", nullable=true)
     */
    private $countableNum11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_12", type="integer", nullable=true)
     */
    private $countableNum12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_13", type="integer", nullable=true)
     */
    private $countableNum13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_14", type="integer", nullable=true)
     */
    private $countableNum14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_15", type="integer", nullable=true)
     */
    private $countableNum15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_16", type="integer", nullable=true)
     */
    private $countableNum16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_17", type="integer", nullable=true)
     */
    private $countableNum17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_18", type="integer", nullable=true)
     */
    private $countableNum18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_19", type="integer", nullable=true)
     */
    private $countableNum19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_20", type="integer", nullable=true)
     */
    private $countableNum20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_21", type="integer", nullable=true)
     */
    private $countableNum21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_22", type="integer", nullable=true)
     */
    private $countableNum22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="countable_num_23", type="integer", nullable=true)
     */
    private $countableNum23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_max", type="integer", nullable=true)
     */
    private $levelMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_factor", type="bigint", nullable=true)
     */
    private $expFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_reward", type="bigint", nullable=true)
     */
    private $gilReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="currency_reward_count", type="bigint", nullable=true)
     */
    private $currencyRewardCount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_catalyst_0", type="integer", nullable=true)
     */
    private $itemCountCatalyst0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_catalyst_1", type="integer", nullable=true)
     */
    private $itemCountCatalyst1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_catalyst_2", type="integer", nullable=true)
     */
    private $itemCountCatalyst2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_type", type="integer", nullable=true)
     */
    private $itemRewardType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_0", type="integer", nullable=true)
     */
    private $itemReward0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_1", type="integer", nullable=true)
     */
    private $itemReward1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_2", type="integer", nullable=true)
     */
    private $itemReward2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_3", type="integer", nullable=true)
     */
    private $itemReward3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_4", type="integer", nullable=true)
     */
    private $itemReward4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_5", type="integer", nullable=true)
     */
    private $itemReward5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_reward_6", type="integer", nullable=true)
     */
    private $itemReward6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_0", type="integer", nullable=true)
     */
    private $itemCountReward0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_1", type="integer", nullable=true)
     */
    private $itemCountReward1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_2", type="integer", nullable=true)
     */
    private $itemCountReward2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_3", type="integer", nullable=true)
     */
    private $itemCountReward3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_4", type="integer", nullable=true)
     */
    private $itemCountReward4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_5", type="integer", nullable=true)
     */
    private $itemCountReward5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_reward_6", type="integer", nullable=true)
     */
    private $itemCountReward6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1466", type="boolean", nullable=true)
     */
    private $column1466;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1467", type="boolean", nullable=true)
     */
    private $column1467;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1468", type="boolean", nullable=true)
     */
    private $column1468;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1469", type="boolean", nullable=true)
     */
    private $column1469;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1470", type="boolean", nullable=true)
     */
    private $column1470;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1471", type="boolean", nullable=true)
     */
    private $column1471;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1472", type="boolean", nullable=true)
     */
    private $column1472;

    /**
     * @var int|null
     *
     * @ORM\Column(name="optional_item_count_reward_0", type="integer", nullable=true)
     */
    private $optionalItemCountReward0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="optional_item_count_reward_1", type="integer", nullable=true)
     */
    private $optionalItemCountReward1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="optional_item_count_reward_2", type="integer", nullable=true)
     */
    private $optionalItemCountReward2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="optional_item_count_reward_3", type="integer", nullable=true)
     */
    private $optionalItemCountReward3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="optional_item_count_reward_4", type="integer", nullable=true)
     */
    private $optionalItemCountReward4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="optional_item_is_hq_reward_0", type="boolean", nullable=true)
     */
    private $optionalItemIsHqReward0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="optional_item_is_hq_reward_1", type="boolean", nullable=true)
     */
    private $optionalItemIsHqReward1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="optional_item_is_hq_reward_2", type="boolean", nullable=true)
     */
    private $optionalItemIsHqReward2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="optional_item_is_hq_reward_3", type="boolean", nullable=true)
     */
    private $optionalItemIsHqReward3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="optional_item_is_hq_reward_4", type="boolean", nullable=true)
     */
    private $optionalItemIsHqReward4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="system_reward_0", type="bigint", nullable=true)
     */
    private $systemReward0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="system_reward_1", type="bigint", nullable=true)
     */
    private $systemReward1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gctype_reward", type="bigint", nullable=true)
     */
    private $gctypeReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tomestone", type="integer", nullable=true)
     */
    private $tomestone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tomestone_reward", type="integer", nullable=true)
     */
    private $tomestoneReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tomestone_count_reward", type="integer", nullable=true)
     */
    private $tomestoneCountReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reputation_reward", type="integer", nullable=true)
     */
    private $reputationReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1515", type="integer", nullable=true)
     */
    private $column1515;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_special", type="integer", nullable=true)
     */
    private $iconSpecial;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="introduction", type="boolean", nullable=true)
     */
    private $introduction;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_offer_icon", type="boolean", nullable=true)
     */
    private $hideOfferIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1521", type="integer", nullable=true)
     */
    private $column1521;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="bigint", nullable=true)
     */
    private $sortKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1523", type="boolean", nullable=true)
     */
    private $column1523;

    /**
     * @var EventIconType
     *
     * @ORM\ManyToOne(targetEntity="EventIconType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_icon_type", referencedColumnName="pk")
     * })
     */
    private $eventIconType;

    /**
     * @var JournalGenre
     *
     * @ORM\ManyToOne(targetEntity="JournalGenre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_genre", referencedColumnName="pk")
     * })
     */
    private $journalGenre;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_unlock", referencedColumnName="pk")
     * })
     */
    private $instanceContentUnlock;

    /**
     * @var QuestRewardOther
     *
     * @ORM\ManyToOne(targetEntity="QuestRewardOther")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="other_reward", referencedColumnName="pk")
     * })
     */
    private $otherReward;

    /**
     * @var GeneralAction
     *
     * @ORM\ManyToOne(targetEntity="GeneralAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="general_action_reward_1", referencedColumnName="pk")
     * })
     */
    private $generalActionReward1;

    /**
     * @var GeneralAction
     *
     * @ORM\ManyToOne(targetEntity="GeneralAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="general_action_reward_0", referencedColumnName="pk")
     * })
     */
    private $generalActionReward0;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_reward", referencedColumnName="pk")
     * })
     */
    private $actionReward;

    /**
     * @var Emote
     *
     * @ORM\ManyToOne(targetEntity="Emote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emote_reward", referencedColumnName="pk")
     * })
     */
    private $emoteReward;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_stain_reward_4", referencedColumnName="pk")
     * })
     */
    private $optionalItemStainReward4;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_stain_reward_3", referencedColumnName="pk")
     * })
     */
    private $optionalItemStainReward3;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_stain_reward_2", referencedColumnName="pk")
     * })
     */
    private $optionalItemStainReward2;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_stain_reward_1", referencedColumnName="pk")
     * })
     */
    private $optionalItemStainReward1;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_stain_reward_0", referencedColumnName="pk")
     * })
     */
    private $optionalItemStainReward0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_reward_4", referencedColumnName="pk")
     * })
     */
    private $optionalItemReward4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_reward_3", referencedColumnName="pk")
     * })
     */
    private $optionalItemReward3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_reward_2", referencedColumnName="pk")
     * })
     */
    private $optionalItemReward2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_reward_1", referencedColumnName="pk")
     * })
     */
    private $optionalItemReward1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="optional_item_reward_0", referencedColumnName="pk")
     * })
     */
    private $optionalItemReward0;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_6", referencedColumnName="pk")
     * })
     */
    private $stainReward6;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_5", referencedColumnName="pk")
     * })
     */
    private $stainReward5;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_4", referencedColumnName="pk")
     * })
     */
    private $stainReward4;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_3", referencedColumnName="pk")
     * })
     */
    private $stainReward3;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_2", referencedColumnName="pk")
     * })
     */
    private $stainReward2;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_1", referencedColumnName="pk")
     * })
     */
    private $stainReward1;

    /**
     * @var Stain
     *
     * @ORM\ManyToOne(targetEntity="Stain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stain_reward_0", referencedColumnName="pk")
     * })
     */
    private $stainReward0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_catalyst_2", referencedColumnName="pk")
     * })
     */
    private $itemCatalyst2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_catalyst_1", referencedColumnName="pk")
     * })
     */
    private $itemCatalyst1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_catalyst_0", referencedColumnName="pk")
     * })
     */
    private $itemCatalyst0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_reward", referencedColumnName="pk")
     * })
     */
    private $currencyReward;

    /**
     * @var QuestRewardOther
     *
     * @ORM\ManyToOne(targetEntity="QuestRewardOther")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_reward_other_display", referencedColumnName="pk")
     * })
     */
    private $questRewardOtherDisplay;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_required", referencedColumnName="pk")
     * })
     */
    private $classJobRequired;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation236;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation226;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation216;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation206;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation196;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation186;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation176;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation166;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation156;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation146;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation136;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation126;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation116;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation106;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation96;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation86;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation76;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation66;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation56;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation46;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation36;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation26;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation16;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_6", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation06;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation235;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation225;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation215;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation205;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation195;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation185;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation175;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation165;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation155;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation145;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation135;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation125;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation115;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation105;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation95;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation85;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation75;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation65;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation55;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation45;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation35;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation25;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation15;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_5", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation05;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation234;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation224;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation214;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation204;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation194;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation184;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation174;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation164;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation154;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation144;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation134;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation124;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation114;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation104;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation94;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation84;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation74;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation64;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation54;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation44;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation34;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation24;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation14;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_4", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation04;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation233;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation223;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation213;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation203;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation193;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation183;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation173;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation163;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation153;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation143;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation133;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation123;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation113;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation103;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation93;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation83;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation73;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation63;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation53;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation43;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation33;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation23;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation13;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_3", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation03;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation232;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation222;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation212;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation202;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation192;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation182;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation172;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation162;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation152;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation142;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation132;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation122;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation112;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation102;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation92;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation82;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation72;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation62;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation52;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation42;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation32;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation22;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation12;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_2", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation02;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation231;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation221;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation211;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation201;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation191;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation181;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation171;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation161;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation151;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation141;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation131;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation121;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation111;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation101;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation91;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation81;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation71;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation61;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation51;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation41;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation31;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation21;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation11;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_1", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation01;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_23_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation230;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_22_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation220;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_21_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation210;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_20_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation200;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_19_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation190;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_18_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation180;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_17_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation170;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_16_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation160;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_15_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation150;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_14_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation140;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_13_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation130;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_12_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation120;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_11_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation110;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_10_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation100;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_9_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation90;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_8_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation80;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_7_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation70;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_6_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation60;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_5_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation50;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_4_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation40;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_3_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation30;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_2_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation20;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_1_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation10;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_child_location_0_0", referencedColumnName="pk")
     * })
     */
    private $toDoChildLocation00;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_23", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation23;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_22", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation22;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_21", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation21;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_20", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation20;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_19", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation19;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_18", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation18;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_17", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation17;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_16", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation16;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_15", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation15;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_14", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation14;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_13", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation13;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_12", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation12;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_11", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation11;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_10", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation10;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_9", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation9;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_8", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation8;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_7", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation7;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_6", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation6;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_5", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation5;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_4", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation4;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_3", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_2", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_1", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation1;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_do_main_location_0", referencedColumnName="pk")
     * })
     */
    private $toDoMainLocation0;

    /**
     * @var QuestRepeatFlag
     *
     * @ORM\ManyToOne(targetEntity="QuestRepeatFlag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_repeat_flag", referencedColumnName="pk")
     * })
     */
    private $questRepeatFlag;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="issuer_location", referencedColumnName="pk")
     * })
     */
    private $issuerLocation;

    /**
     * @var DeliveryQuest
     *
     * @ORM\ManyToOne(targetEntity="DeliveryQuest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_quest", referencedColumnName="pk")
     * })
     */
    private $deliveryQuest;

    /**
     * @var Mount
     *
     * @ORM\ManyToOne(targetEntity="Mount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mount_required", referencedColumnName="pk")
     * })
     */
    private $mountRequired;

    /**
     * @var SatisfactionNpc
     *
     * @ORM\ManyToOne(targetEntity="SatisfactionNpc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="satisfaction_npc", referencedColumnName="pk")
     * })
     */
    private $satisfactionNpc;

    /**
     * @var BeastReputationRank
     *
     * @ORM\ManyToOne(targetEntity="BeastReputationRank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beast_reputation_rank", referencedColumnName="pk")
     * })
     */
    private $beastReputationRank;

    /**
     * @var BeastTribe
     *
     * @ORM\ManyToOne(targetEntity="BeastTribe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beast_tribe", referencedColumnName="pk")
     * })
     */
    private $beastTribe;

    /**
     * @var Festival
     *
     * @ORM\ManyToOne(targetEntity="Festival")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="festival", referencedColumnName="pk")
     * })
     */
    private $festival;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_2", referencedColumnName="pk")
     * })
     */
    private $instanceContent2;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_1", referencedColumnName="pk")
     * })
     */
    private $instanceContent1;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content_0", referencedColumnName="pk")
     * })
     */
    private $instanceContent0;

    /**
     * @var GrandCompanyRank
     *
     * @ORM\ManyToOne(targetEntity="GrandCompanyRank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company_rank", referencedColumnName="pk")
     * })
     */
    private $grandCompanyRank;

    /**
     * @var GrandCompany
     *
     * @ORM\ManyToOne(targetEntity="GrandCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company", referencedColumnName="pk")
     * })
     */
    private $grandCompany;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_unlock", referencedColumnName="pk")
     * })
     */
    private $classJobUnlock;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_lock_1", referencedColumnName="pk")
     * })
     */
    private $questLock1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_lock_0", referencedColumnName="pk")
     * })
     */
    private $questLock0;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_2", referencedColumnName="pk")
     * })
     */
    private $previousQuest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_1", referencedColumnName="pk")
     * })
     */
    private $previousQuest1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest_0", referencedColumnName="pk")
     * })
     */
    private $previousQuest0;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category_1", referencedColumnName="pk")
     * })
     */
    private $classJobCategory1;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category_0", referencedColumnName="pk")
     * })
     */
    private $classJobCategory0;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expansion", referencedColumnName="pk")
     * })
     */
    private $expansion;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getClassJobLevel0(): ?string
    {
        return $this->classJobLevel0;
    }

    public function setClassJobLevel0(?string $classJobLevel0): self
    {
        $this->classJobLevel0 = $classJobLevel0;

        return $this;
    }

    public function getQuestLevelOffset(): ?int
    {
        return $this->questLevelOffset;
    }

    public function setQuestLevelOffset(?int $questLevelOffset): self
    {
        $this->questLevelOffset = $questLevelOffset;

        return $this;
    }

    public function getClassJobLevel1(): ?string
    {
        return $this->classJobLevel1;
    }

    public function setClassJobLevel1(?string $classJobLevel1): self
    {
        $this->classJobLevel1 = $classJobLevel1;

        return $this;
    }

    public function getPreviousQuestJoin(): ?int
    {
        return $this->previousQuestJoin;
    }

    public function setPreviousQuestJoin(?int $previousQuestJoin): self
    {
        $this->previousQuestJoin = $previousQuestJoin;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getQuestLockJoin(): ?int
    {
        return $this->questLockJoin;
    }

    public function setQuestLockJoin(?int $questLockJoin): self
    {
        $this->questLockJoin = $questLockJoin;

        return $this;
    }

    public function getHeader(): ?string
    {
        return $this->header;
    }

    public function setHeader(?string $header): self
    {
        $this->header = $header;

        return $this;
    }

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?int
    {
        return $this->column19;
    }

    public function setColumn19(?int $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getInstanceContentJoin(): ?int
    {
        return $this->instanceContentJoin;
    }

    public function setInstanceContentJoin(?int $instanceContentJoin): self
    {
        $this->instanceContentJoin = $instanceContentJoin;

        return $this;
    }

    public function getFestivalBegin(): ?int
    {
        return $this->festivalBegin;
    }

    public function setFestivalBegin(?int $festivalBegin): self
    {
        $this->festivalBegin = $festivalBegin;

        return $this;
    }

    public function getFestivalEnd(): ?int
    {
        return $this->festivalEnd;
    }

    public function setFestivalEnd(?int $festivalEnd): self
    {
        $this->festivalEnd = $festivalEnd;

        return $this;
    }

    public function getBellStart(): ?string
    {
        return $this->bellStart;
    }

    public function setBellStart(?string $bellStart): self
    {
        $this->bellStart = $bellStart;

        return $this;
    }

    public function getBellEnd(): ?string
    {
        return $this->bellEnd;
    }

    public function setBellEnd(?string $bellEnd): self
    {
        $this->bellEnd = $bellEnd;

        return $this;
    }

    public function getBeastReputationValue(): ?string
    {
        return $this->beastReputationValue;
    }

    public function setBeastReputationValue(?string $beastReputationValue): self
    {
        $this->beastReputationValue = $beastReputationValue;

        return $this;
    }

    public function getSatisfactionLevel(): ?int
    {
        return $this->satisfactionLevel;
    }

    public function setSatisfactionLevel(?int $satisfactionLevel): self
    {
        $this->satisfactionLevel = $satisfactionLevel;

        return $this;
    }

    public function getIsHouseRequired(): ?bool
    {
        return $this->isHouseRequired;
    }

    public function setIsHouseRequired(?bool $isHouseRequired): self
    {
        $this->isHouseRequired = $isHouseRequired;

        return $this;
    }

    public function getIssuerStart(): ?int
    {
        return $this->issuerStart;
    }

    public function setIssuerStart(?int $issuerStart): self
    {
        $this->issuerStart = $issuerStart;

        return $this;
    }

    public function getClientBehavior(): ?int
    {
        return $this->clientBehavior;
    }

    public function setClientBehavior(?int $clientBehavior): self
    {
        $this->clientBehavior = $clientBehavior;

        return $this;
    }

    public function getTargetEnd(): ?int
    {
        return $this->targetEnd;
    }

    public function setTargetEnd(?int $targetEnd): self
    {
        $this->targetEnd = $targetEnd;

        return $this;
    }

    public function getIsRepeatable(): ?bool
    {
        return $this->isRepeatable;
    }

    public function setIsRepeatable(?bool $isRepeatable): self
    {
        $this->isRepeatable = $isRepeatable;

        return $this;
    }

    public function getRepeatIntervalType(): ?int
    {
        return $this->repeatIntervalType;
    }

    public function setRepeatIntervalType(?int $repeatIntervalType): self
    {
        $this->repeatIntervalType = $repeatIntervalType;

        return $this;
    }

    public function getCanCancel(): ?bool
    {
        return $this->canCancel;
    }

    public function setCanCancel(?bool $canCancel): self
    {
        $this->canCancel = $canCancel;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getQuestClassJobSupply(): ?int
    {
        return $this->questClassJobSupply;
    }

    public function setQuestClassJobSupply(?int $questClassJobSupply): self
    {
        $this->questClassJobSupply = $questClassJobSupply;

        return $this;
    }

    public function getScriptInstruction0(): ?string
    {
        return $this->scriptInstruction0;
    }

    public function setScriptInstruction0(?string $scriptInstruction0): self
    {
        $this->scriptInstruction0 = $scriptInstruction0;

        return $this;
    }

    public function getScriptInstruction1(): ?string
    {
        return $this->scriptInstruction1;
    }

    public function setScriptInstruction1(?string $scriptInstruction1): self
    {
        $this->scriptInstruction1 = $scriptInstruction1;

        return $this;
    }

    public function getScriptInstruction2(): ?string
    {
        return $this->scriptInstruction2;
    }

    public function setScriptInstruction2(?string $scriptInstruction2): self
    {
        $this->scriptInstruction2 = $scriptInstruction2;

        return $this;
    }

    public function getScriptInstruction3(): ?string
    {
        return $this->scriptInstruction3;
    }

    public function setScriptInstruction3(?string $scriptInstruction3): self
    {
        $this->scriptInstruction3 = $scriptInstruction3;

        return $this;
    }

    public function getScriptInstruction4(): ?string
    {
        return $this->scriptInstruction4;
    }

    public function setScriptInstruction4(?string $scriptInstruction4): self
    {
        $this->scriptInstruction4 = $scriptInstruction4;

        return $this;
    }

    public function getScriptInstruction5(): ?string
    {
        return $this->scriptInstruction5;
    }

    public function setScriptInstruction5(?string $scriptInstruction5): self
    {
        $this->scriptInstruction5 = $scriptInstruction5;

        return $this;
    }

    public function getScriptInstruction6(): ?string
    {
        return $this->scriptInstruction6;
    }

    public function setScriptInstruction6(?string $scriptInstruction6): self
    {
        $this->scriptInstruction6 = $scriptInstruction6;

        return $this;
    }

    public function getScriptInstruction7(): ?string
    {
        return $this->scriptInstruction7;
    }

    public function setScriptInstruction7(?string $scriptInstruction7): self
    {
        $this->scriptInstruction7 = $scriptInstruction7;

        return $this;
    }

    public function getScriptInstruction8(): ?string
    {
        return $this->scriptInstruction8;
    }

    public function setScriptInstruction8(?string $scriptInstruction8): self
    {
        $this->scriptInstruction8 = $scriptInstruction8;

        return $this;
    }

    public function getScriptInstruction9(): ?string
    {
        return $this->scriptInstruction9;
    }

    public function setScriptInstruction9(?string $scriptInstruction9): self
    {
        $this->scriptInstruction9 = $scriptInstruction9;

        return $this;
    }

    public function getScriptInstruction10(): ?string
    {
        return $this->scriptInstruction10;
    }

    public function setScriptInstruction10(?string $scriptInstruction10): self
    {
        $this->scriptInstruction10 = $scriptInstruction10;

        return $this;
    }

    public function getScriptInstruction11(): ?string
    {
        return $this->scriptInstruction11;
    }

    public function setScriptInstruction11(?string $scriptInstruction11): self
    {
        $this->scriptInstruction11 = $scriptInstruction11;

        return $this;
    }

    public function getScriptInstruction12(): ?string
    {
        return $this->scriptInstruction12;
    }

    public function setScriptInstruction12(?string $scriptInstruction12): self
    {
        $this->scriptInstruction12 = $scriptInstruction12;

        return $this;
    }

    public function getScriptInstruction13(): ?string
    {
        return $this->scriptInstruction13;
    }

    public function setScriptInstruction13(?string $scriptInstruction13): self
    {
        $this->scriptInstruction13 = $scriptInstruction13;

        return $this;
    }

    public function getScriptInstruction14(): ?string
    {
        return $this->scriptInstruction14;
    }

    public function setScriptInstruction14(?string $scriptInstruction14): self
    {
        $this->scriptInstruction14 = $scriptInstruction14;

        return $this;
    }

    public function getScriptInstruction15(): ?string
    {
        return $this->scriptInstruction15;
    }

    public function setScriptInstruction15(?string $scriptInstruction15): self
    {
        $this->scriptInstruction15 = $scriptInstruction15;

        return $this;
    }

    public function getScriptInstruction16(): ?string
    {
        return $this->scriptInstruction16;
    }

    public function setScriptInstruction16(?string $scriptInstruction16): self
    {
        $this->scriptInstruction16 = $scriptInstruction16;

        return $this;
    }

    public function getScriptInstruction17(): ?string
    {
        return $this->scriptInstruction17;
    }

    public function setScriptInstruction17(?string $scriptInstruction17): self
    {
        $this->scriptInstruction17 = $scriptInstruction17;

        return $this;
    }

    public function getScriptInstruction18(): ?string
    {
        return $this->scriptInstruction18;
    }

    public function setScriptInstruction18(?string $scriptInstruction18): self
    {
        $this->scriptInstruction18 = $scriptInstruction18;

        return $this;
    }

    public function getScriptInstruction19(): ?string
    {
        return $this->scriptInstruction19;
    }

    public function setScriptInstruction19(?string $scriptInstruction19): self
    {
        $this->scriptInstruction19 = $scriptInstruction19;

        return $this;
    }

    public function getScriptInstruction20(): ?string
    {
        return $this->scriptInstruction20;
    }

    public function setScriptInstruction20(?string $scriptInstruction20): self
    {
        $this->scriptInstruction20 = $scriptInstruction20;

        return $this;
    }

    public function getScriptInstruction21(): ?string
    {
        return $this->scriptInstruction21;
    }

    public function setScriptInstruction21(?string $scriptInstruction21): self
    {
        $this->scriptInstruction21 = $scriptInstruction21;

        return $this;
    }

    public function getScriptInstruction22(): ?string
    {
        return $this->scriptInstruction22;
    }

    public function setScriptInstruction22(?string $scriptInstruction22): self
    {
        $this->scriptInstruction22 = $scriptInstruction22;

        return $this;
    }

    public function getScriptInstruction23(): ?string
    {
        return $this->scriptInstruction23;
    }

    public function setScriptInstruction23(?string $scriptInstruction23): self
    {
        $this->scriptInstruction23 = $scriptInstruction23;

        return $this;
    }

    public function getScriptInstruction24(): ?string
    {
        return $this->scriptInstruction24;
    }

    public function setScriptInstruction24(?string $scriptInstruction24): self
    {
        $this->scriptInstruction24 = $scriptInstruction24;

        return $this;
    }

    public function getScriptInstruction25(): ?string
    {
        return $this->scriptInstruction25;
    }

    public function setScriptInstruction25(?string $scriptInstruction25): self
    {
        $this->scriptInstruction25 = $scriptInstruction25;

        return $this;
    }

    public function getScriptInstruction26(): ?string
    {
        return $this->scriptInstruction26;
    }

    public function setScriptInstruction26(?string $scriptInstruction26): self
    {
        $this->scriptInstruction26 = $scriptInstruction26;

        return $this;
    }

    public function getScriptInstruction27(): ?string
    {
        return $this->scriptInstruction27;
    }

    public function setScriptInstruction27(?string $scriptInstruction27): self
    {
        $this->scriptInstruction27 = $scriptInstruction27;

        return $this;
    }

    public function getScriptInstruction28(): ?string
    {
        return $this->scriptInstruction28;
    }

    public function setScriptInstruction28(?string $scriptInstruction28): self
    {
        $this->scriptInstruction28 = $scriptInstruction28;

        return $this;
    }

    public function getScriptInstruction29(): ?string
    {
        return $this->scriptInstruction29;
    }

    public function setScriptInstruction29(?string $scriptInstruction29): self
    {
        $this->scriptInstruction29 = $scriptInstruction29;

        return $this;
    }

    public function getScriptInstruction30(): ?string
    {
        return $this->scriptInstruction30;
    }

    public function setScriptInstruction30(?string $scriptInstruction30): self
    {
        $this->scriptInstruction30 = $scriptInstruction30;

        return $this;
    }

    public function getScriptInstruction31(): ?string
    {
        return $this->scriptInstruction31;
    }

    public function setScriptInstruction31(?string $scriptInstruction31): self
    {
        $this->scriptInstruction31 = $scriptInstruction31;

        return $this;
    }

    public function getScriptInstruction32(): ?string
    {
        return $this->scriptInstruction32;
    }

    public function setScriptInstruction32(?string $scriptInstruction32): self
    {
        $this->scriptInstruction32 = $scriptInstruction32;

        return $this;
    }

    public function getScriptInstruction33(): ?string
    {
        return $this->scriptInstruction33;
    }

    public function setScriptInstruction33(?string $scriptInstruction33): self
    {
        $this->scriptInstruction33 = $scriptInstruction33;

        return $this;
    }

    public function getScriptInstruction34(): ?string
    {
        return $this->scriptInstruction34;
    }

    public function setScriptInstruction34(?string $scriptInstruction34): self
    {
        $this->scriptInstruction34 = $scriptInstruction34;

        return $this;
    }

    public function getScriptInstruction35(): ?string
    {
        return $this->scriptInstruction35;
    }

    public function setScriptInstruction35(?string $scriptInstruction35): self
    {
        $this->scriptInstruction35 = $scriptInstruction35;

        return $this;
    }

    public function getScriptInstruction36(): ?string
    {
        return $this->scriptInstruction36;
    }

    public function setScriptInstruction36(?string $scriptInstruction36): self
    {
        $this->scriptInstruction36 = $scriptInstruction36;

        return $this;
    }

    public function getScriptInstruction37(): ?string
    {
        return $this->scriptInstruction37;
    }

    public function setScriptInstruction37(?string $scriptInstruction37): self
    {
        $this->scriptInstruction37 = $scriptInstruction37;

        return $this;
    }

    public function getScriptInstruction38(): ?string
    {
        return $this->scriptInstruction38;
    }

    public function setScriptInstruction38(?string $scriptInstruction38): self
    {
        $this->scriptInstruction38 = $scriptInstruction38;

        return $this;
    }

    public function getScriptInstruction39(): ?string
    {
        return $this->scriptInstruction39;
    }

    public function setScriptInstruction39(?string $scriptInstruction39): self
    {
        $this->scriptInstruction39 = $scriptInstruction39;

        return $this;
    }

    public function getScriptInstruction40(): ?string
    {
        return $this->scriptInstruction40;
    }

    public function setScriptInstruction40(?string $scriptInstruction40): self
    {
        $this->scriptInstruction40 = $scriptInstruction40;

        return $this;
    }

    public function getScriptInstruction41(): ?string
    {
        return $this->scriptInstruction41;
    }

    public function setScriptInstruction41(?string $scriptInstruction41): self
    {
        $this->scriptInstruction41 = $scriptInstruction41;

        return $this;
    }

    public function getScriptInstruction42(): ?string
    {
        return $this->scriptInstruction42;
    }

    public function setScriptInstruction42(?string $scriptInstruction42): self
    {
        $this->scriptInstruction42 = $scriptInstruction42;

        return $this;
    }

    public function getScriptInstruction43(): ?string
    {
        return $this->scriptInstruction43;
    }

    public function setScriptInstruction43(?string $scriptInstruction43): self
    {
        $this->scriptInstruction43 = $scriptInstruction43;

        return $this;
    }

    public function getScriptInstruction44(): ?string
    {
        return $this->scriptInstruction44;
    }

    public function setScriptInstruction44(?string $scriptInstruction44): self
    {
        $this->scriptInstruction44 = $scriptInstruction44;

        return $this;
    }

    public function getScriptInstruction45(): ?string
    {
        return $this->scriptInstruction45;
    }

    public function setScriptInstruction45(?string $scriptInstruction45): self
    {
        $this->scriptInstruction45 = $scriptInstruction45;

        return $this;
    }

    public function getScriptInstruction46(): ?string
    {
        return $this->scriptInstruction46;
    }

    public function setScriptInstruction46(?string $scriptInstruction46): self
    {
        $this->scriptInstruction46 = $scriptInstruction46;

        return $this;
    }

    public function getScriptInstruction47(): ?string
    {
        return $this->scriptInstruction47;
    }

    public function setScriptInstruction47(?string $scriptInstruction47): self
    {
        $this->scriptInstruction47 = $scriptInstruction47;

        return $this;
    }

    public function getScriptInstruction48(): ?string
    {
        return $this->scriptInstruction48;
    }

    public function setScriptInstruction48(?string $scriptInstruction48): self
    {
        $this->scriptInstruction48 = $scriptInstruction48;

        return $this;
    }

    public function getScriptInstruction49(): ?string
    {
        return $this->scriptInstruction49;
    }

    public function setScriptInstruction49(?string $scriptInstruction49): self
    {
        $this->scriptInstruction49 = $scriptInstruction49;

        return $this;
    }

    public function getScriptArg0(): ?string
    {
        return $this->scriptArg0;
    }

    public function setScriptArg0(?string $scriptArg0): self
    {
        $this->scriptArg0 = $scriptArg0;

        return $this;
    }

    public function getScriptArg1(): ?string
    {
        return $this->scriptArg1;
    }

    public function setScriptArg1(?string $scriptArg1): self
    {
        $this->scriptArg1 = $scriptArg1;

        return $this;
    }

    public function getScriptArg2(): ?string
    {
        return $this->scriptArg2;
    }

    public function setScriptArg2(?string $scriptArg2): self
    {
        $this->scriptArg2 = $scriptArg2;

        return $this;
    }

    public function getScriptArg3(): ?string
    {
        return $this->scriptArg3;
    }

    public function setScriptArg3(?string $scriptArg3): self
    {
        $this->scriptArg3 = $scriptArg3;

        return $this;
    }

    public function getScriptArg4(): ?string
    {
        return $this->scriptArg4;
    }

    public function setScriptArg4(?string $scriptArg4): self
    {
        $this->scriptArg4 = $scriptArg4;

        return $this;
    }

    public function getScriptArg5(): ?string
    {
        return $this->scriptArg5;
    }

    public function setScriptArg5(?string $scriptArg5): self
    {
        $this->scriptArg5 = $scriptArg5;

        return $this;
    }

    public function getScriptArg6(): ?string
    {
        return $this->scriptArg6;
    }

    public function setScriptArg6(?string $scriptArg6): self
    {
        $this->scriptArg6 = $scriptArg6;

        return $this;
    }

    public function getScriptArg7(): ?string
    {
        return $this->scriptArg7;
    }

    public function setScriptArg7(?string $scriptArg7): self
    {
        $this->scriptArg7 = $scriptArg7;

        return $this;
    }

    public function getScriptArg8(): ?string
    {
        return $this->scriptArg8;
    }

    public function setScriptArg8(?string $scriptArg8): self
    {
        $this->scriptArg8 = $scriptArg8;

        return $this;
    }

    public function getScriptArg9(): ?string
    {
        return $this->scriptArg9;
    }

    public function setScriptArg9(?string $scriptArg9): self
    {
        $this->scriptArg9 = $scriptArg9;

        return $this;
    }

    public function getScriptArg10(): ?string
    {
        return $this->scriptArg10;
    }

    public function setScriptArg10(?string $scriptArg10): self
    {
        $this->scriptArg10 = $scriptArg10;

        return $this;
    }

    public function getScriptArg11(): ?string
    {
        return $this->scriptArg11;
    }

    public function setScriptArg11(?string $scriptArg11): self
    {
        $this->scriptArg11 = $scriptArg11;

        return $this;
    }

    public function getScriptArg12(): ?string
    {
        return $this->scriptArg12;
    }

    public function setScriptArg12(?string $scriptArg12): self
    {
        $this->scriptArg12 = $scriptArg12;

        return $this;
    }

    public function getScriptArg13(): ?string
    {
        return $this->scriptArg13;
    }

    public function setScriptArg13(?string $scriptArg13): self
    {
        $this->scriptArg13 = $scriptArg13;

        return $this;
    }

    public function getScriptArg14(): ?string
    {
        return $this->scriptArg14;
    }

    public function setScriptArg14(?string $scriptArg14): self
    {
        $this->scriptArg14 = $scriptArg14;

        return $this;
    }

    public function getScriptArg15(): ?string
    {
        return $this->scriptArg15;
    }

    public function setScriptArg15(?string $scriptArg15): self
    {
        $this->scriptArg15 = $scriptArg15;

        return $this;
    }

    public function getScriptArg16(): ?string
    {
        return $this->scriptArg16;
    }

    public function setScriptArg16(?string $scriptArg16): self
    {
        $this->scriptArg16 = $scriptArg16;

        return $this;
    }

    public function getScriptArg17(): ?string
    {
        return $this->scriptArg17;
    }

    public function setScriptArg17(?string $scriptArg17): self
    {
        $this->scriptArg17 = $scriptArg17;

        return $this;
    }

    public function getScriptArg18(): ?string
    {
        return $this->scriptArg18;
    }

    public function setScriptArg18(?string $scriptArg18): self
    {
        $this->scriptArg18 = $scriptArg18;

        return $this;
    }

    public function getScriptArg19(): ?string
    {
        return $this->scriptArg19;
    }

    public function setScriptArg19(?string $scriptArg19): self
    {
        $this->scriptArg19 = $scriptArg19;

        return $this;
    }

    public function getScriptArg20(): ?string
    {
        return $this->scriptArg20;
    }

    public function setScriptArg20(?string $scriptArg20): self
    {
        $this->scriptArg20 = $scriptArg20;

        return $this;
    }

    public function getScriptArg21(): ?string
    {
        return $this->scriptArg21;
    }

    public function setScriptArg21(?string $scriptArg21): self
    {
        $this->scriptArg21 = $scriptArg21;

        return $this;
    }

    public function getScriptArg22(): ?string
    {
        return $this->scriptArg22;
    }

    public function setScriptArg22(?string $scriptArg22): self
    {
        $this->scriptArg22 = $scriptArg22;

        return $this;
    }

    public function getScriptArg23(): ?string
    {
        return $this->scriptArg23;
    }

    public function setScriptArg23(?string $scriptArg23): self
    {
        $this->scriptArg23 = $scriptArg23;

        return $this;
    }

    public function getScriptArg24(): ?string
    {
        return $this->scriptArg24;
    }

    public function setScriptArg24(?string $scriptArg24): self
    {
        $this->scriptArg24 = $scriptArg24;

        return $this;
    }

    public function getScriptArg25(): ?string
    {
        return $this->scriptArg25;
    }

    public function setScriptArg25(?string $scriptArg25): self
    {
        $this->scriptArg25 = $scriptArg25;

        return $this;
    }

    public function getScriptArg26(): ?string
    {
        return $this->scriptArg26;
    }

    public function setScriptArg26(?string $scriptArg26): self
    {
        $this->scriptArg26 = $scriptArg26;

        return $this;
    }

    public function getScriptArg27(): ?string
    {
        return $this->scriptArg27;
    }

    public function setScriptArg27(?string $scriptArg27): self
    {
        $this->scriptArg27 = $scriptArg27;

        return $this;
    }

    public function getScriptArg28(): ?string
    {
        return $this->scriptArg28;
    }

    public function setScriptArg28(?string $scriptArg28): self
    {
        $this->scriptArg28 = $scriptArg28;

        return $this;
    }

    public function getScriptArg29(): ?string
    {
        return $this->scriptArg29;
    }

    public function setScriptArg29(?string $scriptArg29): self
    {
        $this->scriptArg29 = $scriptArg29;

        return $this;
    }

    public function getScriptArg30(): ?string
    {
        return $this->scriptArg30;
    }

    public function setScriptArg30(?string $scriptArg30): self
    {
        $this->scriptArg30 = $scriptArg30;

        return $this;
    }

    public function getScriptArg31(): ?string
    {
        return $this->scriptArg31;
    }

    public function setScriptArg31(?string $scriptArg31): self
    {
        $this->scriptArg31 = $scriptArg31;

        return $this;
    }

    public function getScriptArg32(): ?string
    {
        return $this->scriptArg32;
    }

    public function setScriptArg32(?string $scriptArg32): self
    {
        $this->scriptArg32 = $scriptArg32;

        return $this;
    }

    public function getScriptArg33(): ?string
    {
        return $this->scriptArg33;
    }

    public function setScriptArg33(?string $scriptArg33): self
    {
        $this->scriptArg33 = $scriptArg33;

        return $this;
    }

    public function getScriptArg34(): ?string
    {
        return $this->scriptArg34;
    }

    public function setScriptArg34(?string $scriptArg34): self
    {
        $this->scriptArg34 = $scriptArg34;

        return $this;
    }

    public function getScriptArg35(): ?string
    {
        return $this->scriptArg35;
    }

    public function setScriptArg35(?string $scriptArg35): self
    {
        $this->scriptArg35 = $scriptArg35;

        return $this;
    }

    public function getScriptArg36(): ?string
    {
        return $this->scriptArg36;
    }

    public function setScriptArg36(?string $scriptArg36): self
    {
        $this->scriptArg36 = $scriptArg36;

        return $this;
    }

    public function getScriptArg37(): ?string
    {
        return $this->scriptArg37;
    }

    public function setScriptArg37(?string $scriptArg37): self
    {
        $this->scriptArg37 = $scriptArg37;

        return $this;
    }

    public function getScriptArg38(): ?string
    {
        return $this->scriptArg38;
    }

    public function setScriptArg38(?string $scriptArg38): self
    {
        $this->scriptArg38 = $scriptArg38;

        return $this;
    }

    public function getScriptArg39(): ?string
    {
        return $this->scriptArg39;
    }

    public function setScriptArg39(?string $scriptArg39): self
    {
        $this->scriptArg39 = $scriptArg39;

        return $this;
    }

    public function getScriptArg40(): ?string
    {
        return $this->scriptArg40;
    }

    public function setScriptArg40(?string $scriptArg40): self
    {
        $this->scriptArg40 = $scriptArg40;

        return $this;
    }

    public function getScriptArg41(): ?string
    {
        return $this->scriptArg41;
    }

    public function setScriptArg41(?string $scriptArg41): self
    {
        $this->scriptArg41 = $scriptArg41;

        return $this;
    }

    public function getScriptArg42(): ?string
    {
        return $this->scriptArg42;
    }

    public function setScriptArg42(?string $scriptArg42): self
    {
        $this->scriptArg42 = $scriptArg42;

        return $this;
    }

    public function getScriptArg43(): ?string
    {
        return $this->scriptArg43;
    }

    public function setScriptArg43(?string $scriptArg43): self
    {
        $this->scriptArg43 = $scriptArg43;

        return $this;
    }

    public function getScriptArg44(): ?string
    {
        return $this->scriptArg44;
    }

    public function setScriptArg44(?string $scriptArg44): self
    {
        $this->scriptArg44 = $scriptArg44;

        return $this;
    }

    public function getScriptArg45(): ?string
    {
        return $this->scriptArg45;
    }

    public function setScriptArg45(?string $scriptArg45): self
    {
        $this->scriptArg45 = $scriptArg45;

        return $this;
    }

    public function getScriptArg46(): ?string
    {
        return $this->scriptArg46;
    }

    public function setScriptArg46(?string $scriptArg46): self
    {
        $this->scriptArg46 = $scriptArg46;

        return $this;
    }

    public function getScriptArg47(): ?string
    {
        return $this->scriptArg47;
    }

    public function setScriptArg47(?string $scriptArg47): self
    {
        $this->scriptArg47 = $scriptArg47;

        return $this;
    }

    public function getScriptArg48(): ?string
    {
        return $this->scriptArg48;
    }

    public function setScriptArg48(?string $scriptArg48): self
    {
        $this->scriptArg48 = $scriptArg48;

        return $this;
    }

    public function getScriptArg49(): ?string
    {
        return $this->scriptArg49;
    }

    public function setScriptArg49(?string $scriptArg49): self
    {
        $this->scriptArg49 = $scriptArg49;

        return $this;
    }

    public function getActorSpawnSeq0(): ?int
    {
        return $this->actorSpawnSeq0;
    }

    public function setActorSpawnSeq0(?int $actorSpawnSeq0): self
    {
        $this->actorSpawnSeq0 = $actorSpawnSeq0;

        return $this;
    }

    public function getActorSpawnSeq1(): ?int
    {
        return $this->actorSpawnSeq1;
    }

    public function setActorSpawnSeq1(?int $actorSpawnSeq1): self
    {
        $this->actorSpawnSeq1 = $actorSpawnSeq1;

        return $this;
    }

    public function getActorSpawnSeq2(): ?int
    {
        return $this->actorSpawnSeq2;
    }

    public function setActorSpawnSeq2(?int $actorSpawnSeq2): self
    {
        $this->actorSpawnSeq2 = $actorSpawnSeq2;

        return $this;
    }

    public function getActorSpawnSeq3(): ?int
    {
        return $this->actorSpawnSeq3;
    }

    public function setActorSpawnSeq3(?int $actorSpawnSeq3): self
    {
        $this->actorSpawnSeq3 = $actorSpawnSeq3;

        return $this;
    }

    public function getActorSpawnSeq4(): ?int
    {
        return $this->actorSpawnSeq4;
    }

    public function setActorSpawnSeq4(?int $actorSpawnSeq4): self
    {
        $this->actorSpawnSeq4 = $actorSpawnSeq4;

        return $this;
    }

    public function getActorSpawnSeq5(): ?int
    {
        return $this->actorSpawnSeq5;
    }

    public function setActorSpawnSeq5(?int $actorSpawnSeq5): self
    {
        $this->actorSpawnSeq5 = $actorSpawnSeq5;

        return $this;
    }

    public function getActorSpawnSeq6(): ?int
    {
        return $this->actorSpawnSeq6;
    }

    public function setActorSpawnSeq6(?int $actorSpawnSeq6): self
    {
        $this->actorSpawnSeq6 = $actorSpawnSeq6;

        return $this;
    }

    public function getActorSpawnSeq7(): ?int
    {
        return $this->actorSpawnSeq7;
    }

    public function setActorSpawnSeq7(?int $actorSpawnSeq7): self
    {
        $this->actorSpawnSeq7 = $actorSpawnSeq7;

        return $this;
    }

    public function getActorSpawnSeq8(): ?int
    {
        return $this->actorSpawnSeq8;
    }

    public function setActorSpawnSeq8(?int $actorSpawnSeq8): self
    {
        $this->actorSpawnSeq8 = $actorSpawnSeq8;

        return $this;
    }

    public function getActorSpawnSeq9(): ?int
    {
        return $this->actorSpawnSeq9;
    }

    public function setActorSpawnSeq9(?int $actorSpawnSeq9): self
    {
        $this->actorSpawnSeq9 = $actorSpawnSeq9;

        return $this;
    }

    public function getActorSpawnSeq10(): ?int
    {
        return $this->actorSpawnSeq10;
    }

    public function setActorSpawnSeq10(?int $actorSpawnSeq10): self
    {
        $this->actorSpawnSeq10 = $actorSpawnSeq10;

        return $this;
    }

    public function getActorSpawnSeq11(): ?int
    {
        return $this->actorSpawnSeq11;
    }

    public function setActorSpawnSeq11(?int $actorSpawnSeq11): self
    {
        $this->actorSpawnSeq11 = $actorSpawnSeq11;

        return $this;
    }

    public function getActorSpawnSeq12(): ?int
    {
        return $this->actorSpawnSeq12;
    }

    public function setActorSpawnSeq12(?int $actorSpawnSeq12): self
    {
        $this->actorSpawnSeq12 = $actorSpawnSeq12;

        return $this;
    }

    public function getActorSpawnSeq13(): ?int
    {
        return $this->actorSpawnSeq13;
    }

    public function setActorSpawnSeq13(?int $actorSpawnSeq13): self
    {
        $this->actorSpawnSeq13 = $actorSpawnSeq13;

        return $this;
    }

    public function getActorSpawnSeq14(): ?int
    {
        return $this->actorSpawnSeq14;
    }

    public function setActorSpawnSeq14(?int $actorSpawnSeq14): self
    {
        $this->actorSpawnSeq14 = $actorSpawnSeq14;

        return $this;
    }

    public function getActorSpawnSeq15(): ?int
    {
        return $this->actorSpawnSeq15;
    }

    public function setActorSpawnSeq15(?int $actorSpawnSeq15): self
    {
        $this->actorSpawnSeq15 = $actorSpawnSeq15;

        return $this;
    }

    public function getActorSpawnSeq16(): ?int
    {
        return $this->actorSpawnSeq16;
    }

    public function setActorSpawnSeq16(?int $actorSpawnSeq16): self
    {
        $this->actorSpawnSeq16 = $actorSpawnSeq16;

        return $this;
    }

    public function getActorSpawnSeq17(): ?int
    {
        return $this->actorSpawnSeq17;
    }

    public function setActorSpawnSeq17(?int $actorSpawnSeq17): self
    {
        $this->actorSpawnSeq17 = $actorSpawnSeq17;

        return $this;
    }

    public function getActorSpawnSeq18(): ?int
    {
        return $this->actorSpawnSeq18;
    }

    public function setActorSpawnSeq18(?int $actorSpawnSeq18): self
    {
        $this->actorSpawnSeq18 = $actorSpawnSeq18;

        return $this;
    }

    public function getActorSpawnSeq19(): ?int
    {
        return $this->actorSpawnSeq19;
    }

    public function setActorSpawnSeq19(?int $actorSpawnSeq19): self
    {
        $this->actorSpawnSeq19 = $actorSpawnSeq19;

        return $this;
    }

    public function getActorSpawnSeq20(): ?int
    {
        return $this->actorSpawnSeq20;
    }

    public function setActorSpawnSeq20(?int $actorSpawnSeq20): self
    {
        $this->actorSpawnSeq20 = $actorSpawnSeq20;

        return $this;
    }

    public function getActorSpawnSeq21(): ?int
    {
        return $this->actorSpawnSeq21;
    }

    public function setActorSpawnSeq21(?int $actorSpawnSeq21): self
    {
        $this->actorSpawnSeq21 = $actorSpawnSeq21;

        return $this;
    }

    public function getActorSpawnSeq22(): ?int
    {
        return $this->actorSpawnSeq22;
    }

    public function setActorSpawnSeq22(?int $actorSpawnSeq22): self
    {
        $this->actorSpawnSeq22 = $actorSpawnSeq22;

        return $this;
    }

    public function getActorSpawnSeq23(): ?int
    {
        return $this->actorSpawnSeq23;
    }

    public function setActorSpawnSeq23(?int $actorSpawnSeq23): self
    {
        $this->actorSpawnSeq23 = $actorSpawnSeq23;

        return $this;
    }

    public function getActorSpawnSeq24(): ?int
    {
        return $this->actorSpawnSeq24;
    }

    public function setActorSpawnSeq24(?int $actorSpawnSeq24): self
    {
        $this->actorSpawnSeq24 = $actorSpawnSeq24;

        return $this;
    }

    public function getActorSpawnSeq25(): ?int
    {
        return $this->actorSpawnSeq25;
    }

    public function setActorSpawnSeq25(?int $actorSpawnSeq25): self
    {
        $this->actorSpawnSeq25 = $actorSpawnSeq25;

        return $this;
    }

    public function getActorSpawnSeq26(): ?int
    {
        return $this->actorSpawnSeq26;
    }

    public function setActorSpawnSeq26(?int $actorSpawnSeq26): self
    {
        $this->actorSpawnSeq26 = $actorSpawnSeq26;

        return $this;
    }

    public function getActorSpawnSeq27(): ?int
    {
        return $this->actorSpawnSeq27;
    }

    public function setActorSpawnSeq27(?int $actorSpawnSeq27): self
    {
        $this->actorSpawnSeq27 = $actorSpawnSeq27;

        return $this;
    }

    public function getActorSpawnSeq28(): ?int
    {
        return $this->actorSpawnSeq28;
    }

    public function setActorSpawnSeq28(?int $actorSpawnSeq28): self
    {
        $this->actorSpawnSeq28 = $actorSpawnSeq28;

        return $this;
    }

    public function getActorSpawnSeq29(): ?int
    {
        return $this->actorSpawnSeq29;
    }

    public function setActorSpawnSeq29(?int $actorSpawnSeq29): self
    {
        $this->actorSpawnSeq29 = $actorSpawnSeq29;

        return $this;
    }

    public function getActorSpawnSeq30(): ?int
    {
        return $this->actorSpawnSeq30;
    }

    public function setActorSpawnSeq30(?int $actorSpawnSeq30): self
    {
        $this->actorSpawnSeq30 = $actorSpawnSeq30;

        return $this;
    }

    public function getActorSpawnSeq31(): ?int
    {
        return $this->actorSpawnSeq31;
    }

    public function setActorSpawnSeq31(?int $actorSpawnSeq31): self
    {
        $this->actorSpawnSeq31 = $actorSpawnSeq31;

        return $this;
    }

    public function getActorSpawnSeq32(): ?int
    {
        return $this->actorSpawnSeq32;
    }

    public function setActorSpawnSeq32(?int $actorSpawnSeq32): self
    {
        $this->actorSpawnSeq32 = $actorSpawnSeq32;

        return $this;
    }

    public function getActorSpawnSeq33(): ?int
    {
        return $this->actorSpawnSeq33;
    }

    public function setActorSpawnSeq33(?int $actorSpawnSeq33): self
    {
        $this->actorSpawnSeq33 = $actorSpawnSeq33;

        return $this;
    }

    public function getActorSpawnSeq34(): ?int
    {
        return $this->actorSpawnSeq34;
    }

    public function setActorSpawnSeq34(?int $actorSpawnSeq34): self
    {
        $this->actorSpawnSeq34 = $actorSpawnSeq34;

        return $this;
    }

    public function getActorSpawnSeq35(): ?int
    {
        return $this->actorSpawnSeq35;
    }

    public function setActorSpawnSeq35(?int $actorSpawnSeq35): self
    {
        $this->actorSpawnSeq35 = $actorSpawnSeq35;

        return $this;
    }

    public function getActorSpawnSeq36(): ?int
    {
        return $this->actorSpawnSeq36;
    }

    public function setActorSpawnSeq36(?int $actorSpawnSeq36): self
    {
        $this->actorSpawnSeq36 = $actorSpawnSeq36;

        return $this;
    }

    public function getActorSpawnSeq37(): ?int
    {
        return $this->actorSpawnSeq37;
    }

    public function setActorSpawnSeq37(?int $actorSpawnSeq37): self
    {
        $this->actorSpawnSeq37 = $actorSpawnSeq37;

        return $this;
    }

    public function getActorSpawnSeq38(): ?int
    {
        return $this->actorSpawnSeq38;
    }

    public function setActorSpawnSeq38(?int $actorSpawnSeq38): self
    {
        $this->actorSpawnSeq38 = $actorSpawnSeq38;

        return $this;
    }

    public function getActorSpawnSeq39(): ?int
    {
        return $this->actorSpawnSeq39;
    }

    public function setActorSpawnSeq39(?int $actorSpawnSeq39): self
    {
        $this->actorSpawnSeq39 = $actorSpawnSeq39;

        return $this;
    }

    public function getActorSpawnSeq40(): ?int
    {
        return $this->actorSpawnSeq40;
    }

    public function setActorSpawnSeq40(?int $actorSpawnSeq40): self
    {
        $this->actorSpawnSeq40 = $actorSpawnSeq40;

        return $this;
    }

    public function getActorSpawnSeq41(): ?int
    {
        return $this->actorSpawnSeq41;
    }

    public function setActorSpawnSeq41(?int $actorSpawnSeq41): self
    {
        $this->actorSpawnSeq41 = $actorSpawnSeq41;

        return $this;
    }

    public function getActorSpawnSeq42(): ?int
    {
        return $this->actorSpawnSeq42;
    }

    public function setActorSpawnSeq42(?int $actorSpawnSeq42): self
    {
        $this->actorSpawnSeq42 = $actorSpawnSeq42;

        return $this;
    }

    public function getActorSpawnSeq43(): ?int
    {
        return $this->actorSpawnSeq43;
    }

    public function setActorSpawnSeq43(?int $actorSpawnSeq43): self
    {
        $this->actorSpawnSeq43 = $actorSpawnSeq43;

        return $this;
    }

    public function getActorSpawnSeq44(): ?int
    {
        return $this->actorSpawnSeq44;
    }

    public function setActorSpawnSeq44(?int $actorSpawnSeq44): self
    {
        $this->actorSpawnSeq44 = $actorSpawnSeq44;

        return $this;
    }

    public function getActorSpawnSeq45(): ?int
    {
        return $this->actorSpawnSeq45;
    }

    public function setActorSpawnSeq45(?int $actorSpawnSeq45): self
    {
        $this->actorSpawnSeq45 = $actorSpawnSeq45;

        return $this;
    }

    public function getActorSpawnSeq46(): ?int
    {
        return $this->actorSpawnSeq46;
    }

    public function setActorSpawnSeq46(?int $actorSpawnSeq46): self
    {
        $this->actorSpawnSeq46 = $actorSpawnSeq46;

        return $this;
    }

    public function getActorSpawnSeq47(): ?int
    {
        return $this->actorSpawnSeq47;
    }

    public function setActorSpawnSeq47(?int $actorSpawnSeq47): self
    {
        $this->actorSpawnSeq47 = $actorSpawnSeq47;

        return $this;
    }

    public function getActorSpawnSeq48(): ?int
    {
        return $this->actorSpawnSeq48;
    }

    public function setActorSpawnSeq48(?int $actorSpawnSeq48): self
    {
        $this->actorSpawnSeq48 = $actorSpawnSeq48;

        return $this;
    }

    public function getActorSpawnSeq49(): ?int
    {
        return $this->actorSpawnSeq49;
    }

    public function setActorSpawnSeq49(?int $actorSpawnSeq49): self
    {
        $this->actorSpawnSeq49 = $actorSpawnSeq49;

        return $this;
    }

    public function getActorSpawnSeq50(): ?int
    {
        return $this->actorSpawnSeq50;
    }

    public function setActorSpawnSeq50(?int $actorSpawnSeq50): self
    {
        $this->actorSpawnSeq50 = $actorSpawnSeq50;

        return $this;
    }

    public function getActorSpawnSeq51(): ?int
    {
        return $this->actorSpawnSeq51;
    }

    public function setActorSpawnSeq51(?int $actorSpawnSeq51): self
    {
        $this->actorSpawnSeq51 = $actorSpawnSeq51;

        return $this;
    }

    public function getActorSpawnSeq52(): ?int
    {
        return $this->actorSpawnSeq52;
    }

    public function setActorSpawnSeq52(?int $actorSpawnSeq52): self
    {
        $this->actorSpawnSeq52 = $actorSpawnSeq52;

        return $this;
    }

    public function getActorSpawnSeq53(): ?int
    {
        return $this->actorSpawnSeq53;
    }

    public function setActorSpawnSeq53(?int $actorSpawnSeq53): self
    {
        $this->actorSpawnSeq53 = $actorSpawnSeq53;

        return $this;
    }

    public function getActorSpawnSeq54(): ?int
    {
        return $this->actorSpawnSeq54;
    }

    public function setActorSpawnSeq54(?int $actorSpawnSeq54): self
    {
        $this->actorSpawnSeq54 = $actorSpawnSeq54;

        return $this;
    }

    public function getActorSpawnSeq55(): ?int
    {
        return $this->actorSpawnSeq55;
    }

    public function setActorSpawnSeq55(?int $actorSpawnSeq55): self
    {
        $this->actorSpawnSeq55 = $actorSpawnSeq55;

        return $this;
    }

    public function getActorSpawnSeq56(): ?int
    {
        return $this->actorSpawnSeq56;
    }

    public function setActorSpawnSeq56(?int $actorSpawnSeq56): self
    {
        $this->actorSpawnSeq56 = $actorSpawnSeq56;

        return $this;
    }

    public function getActorSpawnSeq57(): ?int
    {
        return $this->actorSpawnSeq57;
    }

    public function setActorSpawnSeq57(?int $actorSpawnSeq57): self
    {
        $this->actorSpawnSeq57 = $actorSpawnSeq57;

        return $this;
    }

    public function getActorSpawnSeq58(): ?int
    {
        return $this->actorSpawnSeq58;
    }

    public function setActorSpawnSeq58(?int $actorSpawnSeq58): self
    {
        $this->actorSpawnSeq58 = $actorSpawnSeq58;

        return $this;
    }

    public function getActorSpawnSeq59(): ?int
    {
        return $this->actorSpawnSeq59;
    }

    public function setActorSpawnSeq59(?int $actorSpawnSeq59): self
    {
        $this->actorSpawnSeq59 = $actorSpawnSeq59;

        return $this;
    }

    public function getActorSpawnSeq60(): ?int
    {
        return $this->actorSpawnSeq60;
    }

    public function setActorSpawnSeq60(?int $actorSpawnSeq60): self
    {
        $this->actorSpawnSeq60 = $actorSpawnSeq60;

        return $this;
    }

    public function getActorSpawnSeq61(): ?int
    {
        return $this->actorSpawnSeq61;
    }

    public function setActorSpawnSeq61(?int $actorSpawnSeq61): self
    {
        $this->actorSpawnSeq61 = $actorSpawnSeq61;

        return $this;
    }

    public function getActorSpawnSeq62(): ?int
    {
        return $this->actorSpawnSeq62;
    }

    public function setActorSpawnSeq62(?int $actorSpawnSeq62): self
    {
        $this->actorSpawnSeq62 = $actorSpawnSeq62;

        return $this;
    }

    public function getActorSpawnSeq63(): ?int
    {
        return $this->actorSpawnSeq63;
    }

    public function setActorSpawnSeq63(?int $actorSpawnSeq63): self
    {
        $this->actorSpawnSeq63 = $actorSpawnSeq63;

        return $this;
    }

    public function getActorDespawnSeq0(): ?int
    {
        return $this->actorDespawnSeq0;
    }

    public function setActorDespawnSeq0(?int $actorDespawnSeq0): self
    {
        $this->actorDespawnSeq0 = $actorDespawnSeq0;

        return $this;
    }

    public function getActorDespawnSeq1(): ?int
    {
        return $this->actorDespawnSeq1;
    }

    public function setActorDespawnSeq1(?int $actorDespawnSeq1): self
    {
        $this->actorDespawnSeq1 = $actorDespawnSeq1;

        return $this;
    }

    public function getActorDespawnSeq2(): ?int
    {
        return $this->actorDespawnSeq2;
    }

    public function setActorDespawnSeq2(?int $actorDespawnSeq2): self
    {
        $this->actorDespawnSeq2 = $actorDespawnSeq2;

        return $this;
    }

    public function getActorDespawnSeq3(): ?int
    {
        return $this->actorDespawnSeq3;
    }

    public function setActorDespawnSeq3(?int $actorDespawnSeq3): self
    {
        $this->actorDespawnSeq3 = $actorDespawnSeq3;

        return $this;
    }

    public function getActorDespawnSeq4(): ?int
    {
        return $this->actorDespawnSeq4;
    }

    public function setActorDespawnSeq4(?int $actorDespawnSeq4): self
    {
        $this->actorDespawnSeq4 = $actorDespawnSeq4;

        return $this;
    }

    public function getActorDespawnSeq5(): ?int
    {
        return $this->actorDespawnSeq5;
    }

    public function setActorDespawnSeq5(?int $actorDespawnSeq5): self
    {
        $this->actorDespawnSeq5 = $actorDespawnSeq5;

        return $this;
    }

    public function getActorDespawnSeq6(): ?int
    {
        return $this->actorDespawnSeq6;
    }

    public function setActorDespawnSeq6(?int $actorDespawnSeq6): self
    {
        $this->actorDespawnSeq6 = $actorDespawnSeq6;

        return $this;
    }

    public function getActorDespawnSeq7(): ?int
    {
        return $this->actorDespawnSeq7;
    }

    public function setActorDespawnSeq7(?int $actorDespawnSeq7): self
    {
        $this->actorDespawnSeq7 = $actorDespawnSeq7;

        return $this;
    }

    public function getActorDespawnSeq8(): ?int
    {
        return $this->actorDespawnSeq8;
    }

    public function setActorDespawnSeq8(?int $actorDespawnSeq8): self
    {
        $this->actorDespawnSeq8 = $actorDespawnSeq8;

        return $this;
    }

    public function getActorDespawnSeq9(): ?int
    {
        return $this->actorDespawnSeq9;
    }

    public function setActorDespawnSeq9(?int $actorDespawnSeq9): self
    {
        $this->actorDespawnSeq9 = $actorDespawnSeq9;

        return $this;
    }

    public function getActorDespawnSeq10(): ?int
    {
        return $this->actorDespawnSeq10;
    }

    public function setActorDespawnSeq10(?int $actorDespawnSeq10): self
    {
        $this->actorDespawnSeq10 = $actorDespawnSeq10;

        return $this;
    }

    public function getActorDespawnSeq11(): ?int
    {
        return $this->actorDespawnSeq11;
    }

    public function setActorDespawnSeq11(?int $actorDespawnSeq11): self
    {
        $this->actorDespawnSeq11 = $actorDespawnSeq11;

        return $this;
    }

    public function getActorDespawnSeq12(): ?int
    {
        return $this->actorDespawnSeq12;
    }

    public function setActorDespawnSeq12(?int $actorDespawnSeq12): self
    {
        $this->actorDespawnSeq12 = $actorDespawnSeq12;

        return $this;
    }

    public function getActorDespawnSeq13(): ?int
    {
        return $this->actorDespawnSeq13;
    }

    public function setActorDespawnSeq13(?int $actorDespawnSeq13): self
    {
        $this->actorDespawnSeq13 = $actorDespawnSeq13;

        return $this;
    }

    public function getActorDespawnSeq14(): ?int
    {
        return $this->actorDespawnSeq14;
    }

    public function setActorDespawnSeq14(?int $actorDespawnSeq14): self
    {
        $this->actorDespawnSeq14 = $actorDespawnSeq14;

        return $this;
    }

    public function getActorDespawnSeq15(): ?int
    {
        return $this->actorDespawnSeq15;
    }

    public function setActorDespawnSeq15(?int $actorDespawnSeq15): self
    {
        $this->actorDespawnSeq15 = $actorDespawnSeq15;

        return $this;
    }

    public function getActorDespawnSeq16(): ?int
    {
        return $this->actorDespawnSeq16;
    }

    public function setActorDespawnSeq16(?int $actorDespawnSeq16): self
    {
        $this->actorDespawnSeq16 = $actorDespawnSeq16;

        return $this;
    }

    public function getActorDespawnSeq17(): ?int
    {
        return $this->actorDespawnSeq17;
    }

    public function setActorDespawnSeq17(?int $actorDespawnSeq17): self
    {
        $this->actorDespawnSeq17 = $actorDespawnSeq17;

        return $this;
    }

    public function getActorDespawnSeq18(): ?int
    {
        return $this->actorDespawnSeq18;
    }

    public function setActorDespawnSeq18(?int $actorDespawnSeq18): self
    {
        $this->actorDespawnSeq18 = $actorDespawnSeq18;

        return $this;
    }

    public function getActorDespawnSeq19(): ?int
    {
        return $this->actorDespawnSeq19;
    }

    public function setActorDespawnSeq19(?int $actorDespawnSeq19): self
    {
        $this->actorDespawnSeq19 = $actorDespawnSeq19;

        return $this;
    }

    public function getActorDespawnSeq20(): ?int
    {
        return $this->actorDespawnSeq20;
    }

    public function setActorDespawnSeq20(?int $actorDespawnSeq20): self
    {
        $this->actorDespawnSeq20 = $actorDespawnSeq20;

        return $this;
    }

    public function getActorDespawnSeq21(): ?int
    {
        return $this->actorDespawnSeq21;
    }

    public function setActorDespawnSeq21(?int $actorDespawnSeq21): self
    {
        $this->actorDespawnSeq21 = $actorDespawnSeq21;

        return $this;
    }

    public function getActorDespawnSeq22(): ?int
    {
        return $this->actorDespawnSeq22;
    }

    public function setActorDespawnSeq22(?int $actorDespawnSeq22): self
    {
        $this->actorDespawnSeq22 = $actorDespawnSeq22;

        return $this;
    }

    public function getActorDespawnSeq23(): ?int
    {
        return $this->actorDespawnSeq23;
    }

    public function setActorDespawnSeq23(?int $actorDespawnSeq23): self
    {
        $this->actorDespawnSeq23 = $actorDespawnSeq23;

        return $this;
    }

    public function getActorDespawnSeq24(): ?int
    {
        return $this->actorDespawnSeq24;
    }

    public function setActorDespawnSeq24(?int $actorDespawnSeq24): self
    {
        $this->actorDespawnSeq24 = $actorDespawnSeq24;

        return $this;
    }

    public function getActorDespawnSeq25(): ?int
    {
        return $this->actorDespawnSeq25;
    }

    public function setActorDespawnSeq25(?int $actorDespawnSeq25): self
    {
        $this->actorDespawnSeq25 = $actorDespawnSeq25;

        return $this;
    }

    public function getActorDespawnSeq26(): ?int
    {
        return $this->actorDespawnSeq26;
    }

    public function setActorDespawnSeq26(?int $actorDespawnSeq26): self
    {
        $this->actorDespawnSeq26 = $actorDespawnSeq26;

        return $this;
    }

    public function getActorDespawnSeq27(): ?int
    {
        return $this->actorDespawnSeq27;
    }

    public function setActorDespawnSeq27(?int $actorDespawnSeq27): self
    {
        $this->actorDespawnSeq27 = $actorDespawnSeq27;

        return $this;
    }

    public function getActorDespawnSeq28(): ?int
    {
        return $this->actorDespawnSeq28;
    }

    public function setActorDespawnSeq28(?int $actorDespawnSeq28): self
    {
        $this->actorDespawnSeq28 = $actorDespawnSeq28;

        return $this;
    }

    public function getActorDespawnSeq29(): ?int
    {
        return $this->actorDespawnSeq29;
    }

    public function setActorDespawnSeq29(?int $actorDespawnSeq29): self
    {
        $this->actorDespawnSeq29 = $actorDespawnSeq29;

        return $this;
    }

    public function getActorDespawnSeq30(): ?int
    {
        return $this->actorDespawnSeq30;
    }

    public function setActorDespawnSeq30(?int $actorDespawnSeq30): self
    {
        $this->actorDespawnSeq30 = $actorDespawnSeq30;

        return $this;
    }

    public function getActorDespawnSeq31(): ?int
    {
        return $this->actorDespawnSeq31;
    }

    public function setActorDespawnSeq31(?int $actorDespawnSeq31): self
    {
        $this->actorDespawnSeq31 = $actorDespawnSeq31;

        return $this;
    }

    public function getActorDespawnSeq32(): ?int
    {
        return $this->actorDespawnSeq32;
    }

    public function setActorDespawnSeq32(?int $actorDespawnSeq32): self
    {
        $this->actorDespawnSeq32 = $actorDespawnSeq32;

        return $this;
    }

    public function getActorDespawnSeq33(): ?int
    {
        return $this->actorDespawnSeq33;
    }

    public function setActorDespawnSeq33(?int $actorDespawnSeq33): self
    {
        $this->actorDespawnSeq33 = $actorDespawnSeq33;

        return $this;
    }

    public function getActorDespawnSeq34(): ?int
    {
        return $this->actorDespawnSeq34;
    }

    public function setActorDespawnSeq34(?int $actorDespawnSeq34): self
    {
        $this->actorDespawnSeq34 = $actorDespawnSeq34;

        return $this;
    }

    public function getActorDespawnSeq35(): ?int
    {
        return $this->actorDespawnSeq35;
    }

    public function setActorDespawnSeq35(?int $actorDespawnSeq35): self
    {
        $this->actorDespawnSeq35 = $actorDespawnSeq35;

        return $this;
    }

    public function getActorDespawnSeq36(): ?int
    {
        return $this->actorDespawnSeq36;
    }

    public function setActorDespawnSeq36(?int $actorDespawnSeq36): self
    {
        $this->actorDespawnSeq36 = $actorDespawnSeq36;

        return $this;
    }

    public function getActorDespawnSeq37(): ?int
    {
        return $this->actorDespawnSeq37;
    }

    public function setActorDespawnSeq37(?int $actorDespawnSeq37): self
    {
        $this->actorDespawnSeq37 = $actorDespawnSeq37;

        return $this;
    }

    public function getActorDespawnSeq38(): ?int
    {
        return $this->actorDespawnSeq38;
    }

    public function setActorDespawnSeq38(?int $actorDespawnSeq38): self
    {
        $this->actorDespawnSeq38 = $actorDespawnSeq38;

        return $this;
    }

    public function getActorDespawnSeq39(): ?int
    {
        return $this->actorDespawnSeq39;
    }

    public function setActorDespawnSeq39(?int $actorDespawnSeq39): self
    {
        $this->actorDespawnSeq39 = $actorDespawnSeq39;

        return $this;
    }

    public function getActorDespawnSeq40(): ?int
    {
        return $this->actorDespawnSeq40;
    }

    public function setActorDespawnSeq40(?int $actorDespawnSeq40): self
    {
        $this->actorDespawnSeq40 = $actorDespawnSeq40;

        return $this;
    }

    public function getActorDespawnSeq41(): ?int
    {
        return $this->actorDespawnSeq41;
    }

    public function setActorDespawnSeq41(?int $actorDespawnSeq41): self
    {
        $this->actorDespawnSeq41 = $actorDespawnSeq41;

        return $this;
    }

    public function getActorDespawnSeq42(): ?int
    {
        return $this->actorDespawnSeq42;
    }

    public function setActorDespawnSeq42(?int $actorDespawnSeq42): self
    {
        $this->actorDespawnSeq42 = $actorDespawnSeq42;

        return $this;
    }

    public function getActorDespawnSeq43(): ?int
    {
        return $this->actorDespawnSeq43;
    }

    public function setActorDespawnSeq43(?int $actorDespawnSeq43): self
    {
        $this->actorDespawnSeq43 = $actorDespawnSeq43;

        return $this;
    }

    public function getActorDespawnSeq44(): ?int
    {
        return $this->actorDespawnSeq44;
    }

    public function setActorDespawnSeq44(?int $actorDespawnSeq44): self
    {
        $this->actorDespawnSeq44 = $actorDespawnSeq44;

        return $this;
    }

    public function getActorDespawnSeq45(): ?int
    {
        return $this->actorDespawnSeq45;
    }

    public function setActorDespawnSeq45(?int $actorDespawnSeq45): self
    {
        $this->actorDespawnSeq45 = $actorDespawnSeq45;

        return $this;
    }

    public function getActorDespawnSeq46(): ?int
    {
        return $this->actorDespawnSeq46;
    }

    public function setActorDespawnSeq46(?int $actorDespawnSeq46): self
    {
        $this->actorDespawnSeq46 = $actorDespawnSeq46;

        return $this;
    }

    public function getActorDespawnSeq47(): ?int
    {
        return $this->actorDespawnSeq47;
    }

    public function setActorDespawnSeq47(?int $actorDespawnSeq47): self
    {
        $this->actorDespawnSeq47 = $actorDespawnSeq47;

        return $this;
    }

    public function getActorDespawnSeq48(): ?int
    {
        return $this->actorDespawnSeq48;
    }

    public function setActorDespawnSeq48(?int $actorDespawnSeq48): self
    {
        $this->actorDespawnSeq48 = $actorDespawnSeq48;

        return $this;
    }

    public function getActorDespawnSeq49(): ?int
    {
        return $this->actorDespawnSeq49;
    }

    public function setActorDespawnSeq49(?int $actorDespawnSeq49): self
    {
        $this->actorDespawnSeq49 = $actorDespawnSeq49;

        return $this;
    }

    public function getActorDespawnSeq50(): ?int
    {
        return $this->actorDespawnSeq50;
    }

    public function setActorDespawnSeq50(?int $actorDespawnSeq50): self
    {
        $this->actorDespawnSeq50 = $actorDespawnSeq50;

        return $this;
    }

    public function getActorDespawnSeq51(): ?int
    {
        return $this->actorDespawnSeq51;
    }

    public function setActorDespawnSeq51(?int $actorDespawnSeq51): self
    {
        $this->actorDespawnSeq51 = $actorDespawnSeq51;

        return $this;
    }

    public function getActorDespawnSeq52(): ?int
    {
        return $this->actorDespawnSeq52;
    }

    public function setActorDespawnSeq52(?int $actorDespawnSeq52): self
    {
        $this->actorDespawnSeq52 = $actorDespawnSeq52;

        return $this;
    }

    public function getActorDespawnSeq53(): ?int
    {
        return $this->actorDespawnSeq53;
    }

    public function setActorDespawnSeq53(?int $actorDespawnSeq53): self
    {
        $this->actorDespawnSeq53 = $actorDespawnSeq53;

        return $this;
    }

    public function getActorDespawnSeq54(): ?int
    {
        return $this->actorDespawnSeq54;
    }

    public function setActorDespawnSeq54(?int $actorDespawnSeq54): self
    {
        $this->actorDespawnSeq54 = $actorDespawnSeq54;

        return $this;
    }

    public function getActorDespawnSeq55(): ?int
    {
        return $this->actorDespawnSeq55;
    }

    public function setActorDespawnSeq55(?int $actorDespawnSeq55): self
    {
        $this->actorDespawnSeq55 = $actorDespawnSeq55;

        return $this;
    }

    public function getActorDespawnSeq56(): ?int
    {
        return $this->actorDespawnSeq56;
    }

    public function setActorDespawnSeq56(?int $actorDespawnSeq56): self
    {
        $this->actorDespawnSeq56 = $actorDespawnSeq56;

        return $this;
    }

    public function getActorDespawnSeq57(): ?int
    {
        return $this->actorDespawnSeq57;
    }

    public function setActorDespawnSeq57(?int $actorDespawnSeq57): self
    {
        $this->actorDespawnSeq57 = $actorDespawnSeq57;

        return $this;
    }

    public function getActorDespawnSeq58(): ?int
    {
        return $this->actorDespawnSeq58;
    }

    public function setActorDespawnSeq58(?int $actorDespawnSeq58): self
    {
        $this->actorDespawnSeq58 = $actorDespawnSeq58;

        return $this;
    }

    public function getActorDespawnSeq59(): ?int
    {
        return $this->actorDespawnSeq59;
    }

    public function setActorDespawnSeq59(?int $actorDespawnSeq59): self
    {
        $this->actorDespawnSeq59 = $actorDespawnSeq59;

        return $this;
    }

    public function getActorDespawnSeq60(): ?int
    {
        return $this->actorDespawnSeq60;
    }

    public function setActorDespawnSeq60(?int $actorDespawnSeq60): self
    {
        $this->actorDespawnSeq60 = $actorDespawnSeq60;

        return $this;
    }

    public function getActorDespawnSeq61(): ?int
    {
        return $this->actorDespawnSeq61;
    }

    public function setActorDespawnSeq61(?int $actorDespawnSeq61): self
    {
        $this->actorDespawnSeq61 = $actorDespawnSeq61;

        return $this;
    }

    public function getActorDespawnSeq62(): ?int
    {
        return $this->actorDespawnSeq62;
    }

    public function setActorDespawnSeq62(?int $actorDespawnSeq62): self
    {
        $this->actorDespawnSeq62 = $actorDespawnSeq62;

        return $this;
    }

    public function getActorDespawnSeq63(): ?int
    {
        return $this->actorDespawnSeq63;
    }

    public function setActorDespawnSeq63(?int $actorDespawnSeq63): self
    {
        $this->actorDespawnSeq63 = $actorDespawnSeq63;

        return $this;
    }

    public function getListener0(): ?string
    {
        return $this->listener0;
    }

    public function setListener0(?string $listener0): self
    {
        $this->listener0 = $listener0;

        return $this;
    }

    public function getListener1(): ?string
    {
        return $this->listener1;
    }

    public function setListener1(?string $listener1): self
    {
        $this->listener1 = $listener1;

        return $this;
    }

    public function getListener2(): ?string
    {
        return $this->listener2;
    }

    public function setListener2(?string $listener2): self
    {
        $this->listener2 = $listener2;

        return $this;
    }

    public function getListener3(): ?string
    {
        return $this->listener3;
    }

    public function setListener3(?string $listener3): self
    {
        $this->listener3 = $listener3;

        return $this;
    }

    public function getListener4(): ?string
    {
        return $this->listener4;
    }

    public function setListener4(?string $listener4): self
    {
        $this->listener4 = $listener4;

        return $this;
    }

    public function getListener5(): ?string
    {
        return $this->listener5;
    }

    public function setListener5(?string $listener5): self
    {
        $this->listener5 = $listener5;

        return $this;
    }

    public function getListener6(): ?string
    {
        return $this->listener6;
    }

    public function setListener6(?string $listener6): self
    {
        $this->listener6 = $listener6;

        return $this;
    }

    public function getListener7(): ?string
    {
        return $this->listener7;
    }

    public function setListener7(?string $listener7): self
    {
        $this->listener7 = $listener7;

        return $this;
    }

    public function getListener8(): ?string
    {
        return $this->listener8;
    }

    public function setListener8(?string $listener8): self
    {
        $this->listener8 = $listener8;

        return $this;
    }

    public function getListener9(): ?string
    {
        return $this->listener9;
    }

    public function setListener9(?string $listener9): self
    {
        $this->listener9 = $listener9;

        return $this;
    }

    public function getListener10(): ?string
    {
        return $this->listener10;
    }

    public function setListener10(?string $listener10): self
    {
        $this->listener10 = $listener10;

        return $this;
    }

    public function getListener11(): ?string
    {
        return $this->listener11;
    }

    public function setListener11(?string $listener11): self
    {
        $this->listener11 = $listener11;

        return $this;
    }

    public function getListener12(): ?string
    {
        return $this->listener12;
    }

    public function setListener12(?string $listener12): self
    {
        $this->listener12 = $listener12;

        return $this;
    }

    public function getListener13(): ?string
    {
        return $this->listener13;
    }

    public function setListener13(?string $listener13): self
    {
        $this->listener13 = $listener13;

        return $this;
    }

    public function getListener14(): ?string
    {
        return $this->listener14;
    }

    public function setListener14(?string $listener14): self
    {
        $this->listener14 = $listener14;

        return $this;
    }

    public function getListener15(): ?string
    {
        return $this->listener15;
    }

    public function setListener15(?string $listener15): self
    {
        $this->listener15 = $listener15;

        return $this;
    }

    public function getListener16(): ?string
    {
        return $this->listener16;
    }

    public function setListener16(?string $listener16): self
    {
        $this->listener16 = $listener16;

        return $this;
    }

    public function getListener17(): ?string
    {
        return $this->listener17;
    }

    public function setListener17(?string $listener17): self
    {
        $this->listener17 = $listener17;

        return $this;
    }

    public function getListener18(): ?string
    {
        return $this->listener18;
    }

    public function setListener18(?string $listener18): self
    {
        $this->listener18 = $listener18;

        return $this;
    }

    public function getListener19(): ?string
    {
        return $this->listener19;
    }

    public function setListener19(?string $listener19): self
    {
        $this->listener19 = $listener19;

        return $this;
    }

    public function getListener20(): ?string
    {
        return $this->listener20;
    }

    public function setListener20(?string $listener20): self
    {
        $this->listener20 = $listener20;

        return $this;
    }

    public function getListener21(): ?string
    {
        return $this->listener21;
    }

    public function setListener21(?string $listener21): self
    {
        $this->listener21 = $listener21;

        return $this;
    }

    public function getListener22(): ?string
    {
        return $this->listener22;
    }

    public function setListener22(?string $listener22): self
    {
        $this->listener22 = $listener22;

        return $this;
    }

    public function getListener23(): ?string
    {
        return $this->listener23;
    }

    public function setListener23(?string $listener23): self
    {
        $this->listener23 = $listener23;

        return $this;
    }

    public function getListener24(): ?string
    {
        return $this->listener24;
    }

    public function setListener24(?string $listener24): self
    {
        $this->listener24 = $listener24;

        return $this;
    }

    public function getListener25(): ?string
    {
        return $this->listener25;
    }

    public function setListener25(?string $listener25): self
    {
        $this->listener25 = $listener25;

        return $this;
    }

    public function getListener26(): ?string
    {
        return $this->listener26;
    }

    public function setListener26(?string $listener26): self
    {
        $this->listener26 = $listener26;

        return $this;
    }

    public function getListener27(): ?string
    {
        return $this->listener27;
    }

    public function setListener27(?string $listener27): self
    {
        $this->listener27 = $listener27;

        return $this;
    }

    public function getListener28(): ?string
    {
        return $this->listener28;
    }

    public function setListener28(?string $listener28): self
    {
        $this->listener28 = $listener28;

        return $this;
    }

    public function getListener29(): ?string
    {
        return $this->listener29;
    }

    public function setListener29(?string $listener29): self
    {
        $this->listener29 = $listener29;

        return $this;
    }

    public function getListener30(): ?string
    {
        return $this->listener30;
    }

    public function setListener30(?string $listener30): self
    {
        $this->listener30 = $listener30;

        return $this;
    }

    public function getListener31(): ?string
    {
        return $this->listener31;
    }

    public function setListener31(?string $listener31): self
    {
        $this->listener31 = $listener31;

        return $this;
    }

    public function getListener32(): ?string
    {
        return $this->listener32;
    }

    public function setListener32(?string $listener32): self
    {
        $this->listener32 = $listener32;

        return $this;
    }

    public function getListener33(): ?string
    {
        return $this->listener33;
    }

    public function setListener33(?string $listener33): self
    {
        $this->listener33 = $listener33;

        return $this;
    }

    public function getListener34(): ?string
    {
        return $this->listener34;
    }

    public function setListener34(?string $listener34): self
    {
        $this->listener34 = $listener34;

        return $this;
    }

    public function getListener35(): ?string
    {
        return $this->listener35;
    }

    public function setListener35(?string $listener35): self
    {
        $this->listener35 = $listener35;

        return $this;
    }

    public function getListener36(): ?string
    {
        return $this->listener36;
    }

    public function setListener36(?string $listener36): self
    {
        $this->listener36 = $listener36;

        return $this;
    }

    public function getListener37(): ?string
    {
        return $this->listener37;
    }

    public function setListener37(?string $listener37): self
    {
        $this->listener37 = $listener37;

        return $this;
    }

    public function getListener38(): ?string
    {
        return $this->listener38;
    }

    public function setListener38(?string $listener38): self
    {
        $this->listener38 = $listener38;

        return $this;
    }

    public function getListener39(): ?string
    {
        return $this->listener39;
    }

    public function setListener39(?string $listener39): self
    {
        $this->listener39 = $listener39;

        return $this;
    }

    public function getListener40(): ?string
    {
        return $this->listener40;
    }

    public function setListener40(?string $listener40): self
    {
        $this->listener40 = $listener40;

        return $this;
    }

    public function getListener41(): ?string
    {
        return $this->listener41;
    }

    public function setListener41(?string $listener41): self
    {
        $this->listener41 = $listener41;

        return $this;
    }

    public function getListener42(): ?string
    {
        return $this->listener42;
    }

    public function setListener42(?string $listener42): self
    {
        $this->listener42 = $listener42;

        return $this;
    }

    public function getListener43(): ?string
    {
        return $this->listener43;
    }

    public function setListener43(?string $listener43): self
    {
        $this->listener43 = $listener43;

        return $this;
    }

    public function getListener44(): ?string
    {
        return $this->listener44;
    }

    public function setListener44(?string $listener44): self
    {
        $this->listener44 = $listener44;

        return $this;
    }

    public function getListener45(): ?string
    {
        return $this->listener45;
    }

    public function setListener45(?string $listener45): self
    {
        $this->listener45 = $listener45;

        return $this;
    }

    public function getListener46(): ?string
    {
        return $this->listener46;
    }

    public function setListener46(?string $listener46): self
    {
        $this->listener46 = $listener46;

        return $this;
    }

    public function getListener47(): ?string
    {
        return $this->listener47;
    }

    public function setListener47(?string $listener47): self
    {
        $this->listener47 = $listener47;

        return $this;
    }

    public function getListener48(): ?string
    {
        return $this->listener48;
    }

    public function setListener48(?string $listener48): self
    {
        $this->listener48 = $listener48;

        return $this;
    }

    public function getListener49(): ?string
    {
        return $this->listener49;
    }

    public function setListener49(?string $listener49): self
    {
        $this->listener49 = $listener49;

        return $this;
    }

    public function getListener50(): ?string
    {
        return $this->listener50;
    }

    public function setListener50(?string $listener50): self
    {
        $this->listener50 = $listener50;

        return $this;
    }

    public function getListener51(): ?string
    {
        return $this->listener51;
    }

    public function setListener51(?string $listener51): self
    {
        $this->listener51 = $listener51;

        return $this;
    }

    public function getListener52(): ?string
    {
        return $this->listener52;
    }

    public function setListener52(?string $listener52): self
    {
        $this->listener52 = $listener52;

        return $this;
    }

    public function getListener53(): ?string
    {
        return $this->listener53;
    }

    public function setListener53(?string $listener53): self
    {
        $this->listener53 = $listener53;

        return $this;
    }

    public function getListener54(): ?string
    {
        return $this->listener54;
    }

    public function setListener54(?string $listener54): self
    {
        $this->listener54 = $listener54;

        return $this;
    }

    public function getListener55(): ?string
    {
        return $this->listener55;
    }

    public function setListener55(?string $listener55): self
    {
        $this->listener55 = $listener55;

        return $this;
    }

    public function getListener56(): ?string
    {
        return $this->listener56;
    }

    public function setListener56(?string $listener56): self
    {
        $this->listener56 = $listener56;

        return $this;
    }

    public function getListener57(): ?string
    {
        return $this->listener57;
    }

    public function setListener57(?string $listener57): self
    {
        $this->listener57 = $listener57;

        return $this;
    }

    public function getListener58(): ?string
    {
        return $this->listener58;
    }

    public function setListener58(?string $listener58): self
    {
        $this->listener58 = $listener58;

        return $this;
    }

    public function getListener59(): ?string
    {
        return $this->listener59;
    }

    public function setListener59(?string $listener59): self
    {
        $this->listener59 = $listener59;

        return $this;
    }

    public function getListener60(): ?string
    {
        return $this->listener60;
    }

    public function setListener60(?string $listener60): self
    {
        $this->listener60 = $listener60;

        return $this;
    }

    public function getListener61(): ?string
    {
        return $this->listener61;
    }

    public function setListener61(?string $listener61): self
    {
        $this->listener61 = $listener61;

        return $this;
    }

    public function getListener62(): ?string
    {
        return $this->listener62;
    }

    public function setListener62(?string $listener62): self
    {
        $this->listener62 = $listener62;

        return $this;
    }

    public function getListener63(): ?string
    {
        return $this->listener63;
    }

    public function setListener63(?string $listener63): self
    {
        $this->listener63 = $listener63;

        return $this;
    }

    public function getQuestUint8a0(): ?int
    {
        return $this->questUint8a0;
    }

    public function setQuestUint8a0(?int $questUint8a0): self
    {
        $this->questUint8a0 = $questUint8a0;

        return $this;
    }

    public function getQuestUint8a1(): ?int
    {
        return $this->questUint8a1;
    }

    public function setQuestUint8a1(?int $questUint8a1): self
    {
        $this->questUint8a1 = $questUint8a1;

        return $this;
    }

    public function getQuestUint8a2(): ?int
    {
        return $this->questUint8a2;
    }

    public function setQuestUint8a2(?int $questUint8a2): self
    {
        $this->questUint8a2 = $questUint8a2;

        return $this;
    }

    public function getQuestUint8a3(): ?int
    {
        return $this->questUint8a3;
    }

    public function setQuestUint8a3(?int $questUint8a3): self
    {
        $this->questUint8a3 = $questUint8a3;

        return $this;
    }

    public function getQuestUint8a4(): ?int
    {
        return $this->questUint8a4;
    }

    public function setQuestUint8a4(?int $questUint8a4): self
    {
        $this->questUint8a4 = $questUint8a4;

        return $this;
    }

    public function getQuestUint8a5(): ?int
    {
        return $this->questUint8a5;
    }

    public function setQuestUint8a5(?int $questUint8a5): self
    {
        $this->questUint8a5 = $questUint8a5;

        return $this;
    }

    public function getQuestUint8a6(): ?int
    {
        return $this->questUint8a6;
    }

    public function setQuestUint8a6(?int $questUint8a6): self
    {
        $this->questUint8a6 = $questUint8a6;

        return $this;
    }

    public function getQuestUint8a7(): ?int
    {
        return $this->questUint8a7;
    }

    public function setQuestUint8a7(?int $questUint8a7): self
    {
        $this->questUint8a7 = $questUint8a7;

        return $this;
    }

    public function getQuestUint8a8(): ?int
    {
        return $this->questUint8a8;
    }

    public function setQuestUint8a8(?int $questUint8a8): self
    {
        $this->questUint8a8 = $questUint8a8;

        return $this;
    }

    public function getQuestUint8a9(): ?int
    {
        return $this->questUint8a9;
    }

    public function setQuestUint8a9(?int $questUint8a9): self
    {
        $this->questUint8a9 = $questUint8a9;

        return $this;
    }

    public function getQuestUint8a10(): ?int
    {
        return $this->questUint8a10;
    }

    public function setQuestUint8a10(?int $questUint8a10): self
    {
        $this->questUint8a10 = $questUint8a10;

        return $this;
    }

    public function getQuestUint8a11(): ?int
    {
        return $this->questUint8a11;
    }

    public function setQuestUint8a11(?int $questUint8a11): self
    {
        $this->questUint8a11 = $questUint8a11;

        return $this;
    }

    public function getQuestUint8a12(): ?int
    {
        return $this->questUint8a12;
    }

    public function setQuestUint8a12(?int $questUint8a12): self
    {
        $this->questUint8a12 = $questUint8a12;

        return $this;
    }

    public function getQuestUint8a13(): ?int
    {
        return $this->questUint8a13;
    }

    public function setQuestUint8a13(?int $questUint8a13): self
    {
        $this->questUint8a13 = $questUint8a13;

        return $this;
    }

    public function getQuestUint8a14(): ?int
    {
        return $this->questUint8a14;
    }

    public function setQuestUint8a14(?int $questUint8a14): self
    {
        $this->questUint8a14 = $questUint8a14;

        return $this;
    }

    public function getQuestUint8a15(): ?int
    {
        return $this->questUint8a15;
    }

    public function setQuestUint8a15(?int $questUint8a15): self
    {
        $this->questUint8a15 = $questUint8a15;

        return $this;
    }

    public function getQuestUint8a16(): ?int
    {
        return $this->questUint8a16;
    }

    public function setQuestUint8a16(?int $questUint8a16): self
    {
        $this->questUint8a16 = $questUint8a16;

        return $this;
    }

    public function getQuestUint8a17(): ?int
    {
        return $this->questUint8a17;
    }

    public function setQuestUint8a17(?int $questUint8a17): self
    {
        $this->questUint8a17 = $questUint8a17;

        return $this;
    }

    public function getQuestUint8a18(): ?int
    {
        return $this->questUint8a18;
    }

    public function setQuestUint8a18(?int $questUint8a18): self
    {
        $this->questUint8a18 = $questUint8a18;

        return $this;
    }

    public function getQuestUint8a19(): ?int
    {
        return $this->questUint8a19;
    }

    public function setQuestUint8a19(?int $questUint8a19): self
    {
        $this->questUint8a19 = $questUint8a19;

        return $this;
    }

    public function getQuestUint8a20(): ?int
    {
        return $this->questUint8a20;
    }

    public function setQuestUint8a20(?int $questUint8a20): self
    {
        $this->questUint8a20 = $questUint8a20;

        return $this;
    }

    public function getQuestUint8a21(): ?int
    {
        return $this->questUint8a21;
    }

    public function setQuestUint8a21(?int $questUint8a21): self
    {
        $this->questUint8a21 = $questUint8a21;

        return $this;
    }

    public function getQuestUint8a22(): ?int
    {
        return $this->questUint8a22;
    }

    public function setQuestUint8a22(?int $questUint8a22): self
    {
        $this->questUint8a22 = $questUint8a22;

        return $this;
    }

    public function getQuestUint8a23(): ?int
    {
        return $this->questUint8a23;
    }

    public function setQuestUint8a23(?int $questUint8a23): self
    {
        $this->questUint8a23 = $questUint8a23;

        return $this;
    }

    public function getQuestUint8a24(): ?int
    {
        return $this->questUint8a24;
    }

    public function setQuestUint8a24(?int $questUint8a24): self
    {
        $this->questUint8a24 = $questUint8a24;

        return $this;
    }

    public function getQuestUint8a25(): ?int
    {
        return $this->questUint8a25;
    }

    public function setQuestUint8a25(?int $questUint8a25): self
    {
        $this->questUint8a25 = $questUint8a25;

        return $this;
    }

    public function getQuestUint8a26(): ?int
    {
        return $this->questUint8a26;
    }

    public function setQuestUint8a26(?int $questUint8a26): self
    {
        $this->questUint8a26 = $questUint8a26;

        return $this;
    }

    public function getQuestUint8a27(): ?int
    {
        return $this->questUint8a27;
    }

    public function setQuestUint8a27(?int $questUint8a27): self
    {
        $this->questUint8a27 = $questUint8a27;

        return $this;
    }

    public function getQuestUint8a28(): ?int
    {
        return $this->questUint8a28;
    }

    public function setQuestUint8a28(?int $questUint8a28): self
    {
        $this->questUint8a28 = $questUint8a28;

        return $this;
    }

    public function getQuestUint8a29(): ?int
    {
        return $this->questUint8a29;
    }

    public function setQuestUint8a29(?int $questUint8a29): self
    {
        $this->questUint8a29 = $questUint8a29;

        return $this;
    }

    public function getQuestUint8a30(): ?int
    {
        return $this->questUint8a30;
    }

    public function setQuestUint8a30(?int $questUint8a30): self
    {
        $this->questUint8a30 = $questUint8a30;

        return $this;
    }

    public function getQuestUint8a31(): ?int
    {
        return $this->questUint8a31;
    }

    public function setQuestUint8a31(?int $questUint8a31): self
    {
        $this->questUint8a31 = $questUint8a31;

        return $this;
    }

    public function getQuestUint8b0(): ?int
    {
        return $this->questUint8b0;
    }

    public function setQuestUint8b0(?int $questUint8b0): self
    {
        $this->questUint8b0 = $questUint8b0;

        return $this;
    }

    public function getQuestUint8b1(): ?int
    {
        return $this->questUint8b1;
    }

    public function setQuestUint8b1(?int $questUint8b1): self
    {
        $this->questUint8b1 = $questUint8b1;

        return $this;
    }

    public function getQuestUint8b2(): ?int
    {
        return $this->questUint8b2;
    }

    public function setQuestUint8b2(?int $questUint8b2): self
    {
        $this->questUint8b2 = $questUint8b2;

        return $this;
    }

    public function getQuestUint8b3(): ?int
    {
        return $this->questUint8b3;
    }

    public function setQuestUint8b3(?int $questUint8b3): self
    {
        $this->questUint8b3 = $questUint8b3;

        return $this;
    }

    public function getQuestUint8b4(): ?int
    {
        return $this->questUint8b4;
    }

    public function setQuestUint8b4(?int $questUint8b4): self
    {
        $this->questUint8b4 = $questUint8b4;

        return $this;
    }

    public function getQuestUint8b5(): ?int
    {
        return $this->questUint8b5;
    }

    public function setQuestUint8b5(?int $questUint8b5): self
    {
        $this->questUint8b5 = $questUint8b5;

        return $this;
    }

    public function getQuestUint8b6(): ?int
    {
        return $this->questUint8b6;
    }

    public function setQuestUint8b6(?int $questUint8b6): self
    {
        $this->questUint8b6 = $questUint8b6;

        return $this;
    }

    public function getQuestUint8b7(): ?int
    {
        return $this->questUint8b7;
    }

    public function setQuestUint8b7(?int $questUint8b7): self
    {
        $this->questUint8b7 = $questUint8b7;

        return $this;
    }

    public function getQuestUint8b8(): ?int
    {
        return $this->questUint8b8;
    }

    public function setQuestUint8b8(?int $questUint8b8): self
    {
        $this->questUint8b8 = $questUint8b8;

        return $this;
    }

    public function getQuestUint8b9(): ?int
    {
        return $this->questUint8b9;
    }

    public function setQuestUint8b9(?int $questUint8b9): self
    {
        $this->questUint8b9 = $questUint8b9;

        return $this;
    }

    public function getQuestUint8b10(): ?int
    {
        return $this->questUint8b10;
    }

    public function setQuestUint8b10(?int $questUint8b10): self
    {
        $this->questUint8b10 = $questUint8b10;

        return $this;
    }

    public function getQuestUint8b11(): ?int
    {
        return $this->questUint8b11;
    }

    public function setQuestUint8b11(?int $questUint8b11): self
    {
        $this->questUint8b11 = $questUint8b11;

        return $this;
    }

    public function getQuestUint8b12(): ?int
    {
        return $this->questUint8b12;
    }

    public function setQuestUint8b12(?int $questUint8b12): self
    {
        $this->questUint8b12 = $questUint8b12;

        return $this;
    }

    public function getQuestUint8b13(): ?int
    {
        return $this->questUint8b13;
    }

    public function setQuestUint8b13(?int $questUint8b13): self
    {
        $this->questUint8b13 = $questUint8b13;

        return $this;
    }

    public function getQuestUint8b14(): ?int
    {
        return $this->questUint8b14;
    }

    public function setQuestUint8b14(?int $questUint8b14): self
    {
        $this->questUint8b14 = $questUint8b14;

        return $this;
    }

    public function getQuestUint8b15(): ?int
    {
        return $this->questUint8b15;
    }

    public function setQuestUint8b15(?int $questUint8b15): self
    {
        $this->questUint8b15 = $questUint8b15;

        return $this;
    }

    public function getQuestUint8b16(): ?int
    {
        return $this->questUint8b16;
    }

    public function setQuestUint8b16(?int $questUint8b16): self
    {
        $this->questUint8b16 = $questUint8b16;

        return $this;
    }

    public function getQuestUint8b17(): ?int
    {
        return $this->questUint8b17;
    }

    public function setQuestUint8b17(?int $questUint8b17): self
    {
        $this->questUint8b17 = $questUint8b17;

        return $this;
    }

    public function getQuestUint8b18(): ?int
    {
        return $this->questUint8b18;
    }

    public function setQuestUint8b18(?int $questUint8b18): self
    {
        $this->questUint8b18 = $questUint8b18;

        return $this;
    }

    public function getQuestUint8b19(): ?int
    {
        return $this->questUint8b19;
    }

    public function setQuestUint8b19(?int $questUint8b19): self
    {
        $this->questUint8b19 = $questUint8b19;

        return $this;
    }

    public function getQuestUint8b20(): ?int
    {
        return $this->questUint8b20;
    }

    public function setQuestUint8b20(?int $questUint8b20): self
    {
        $this->questUint8b20 = $questUint8b20;

        return $this;
    }

    public function getQuestUint8b21(): ?int
    {
        return $this->questUint8b21;
    }

    public function setQuestUint8b21(?int $questUint8b21): self
    {
        $this->questUint8b21 = $questUint8b21;

        return $this;
    }

    public function getQuestUint8b22(): ?int
    {
        return $this->questUint8b22;
    }

    public function setQuestUint8b22(?int $questUint8b22): self
    {
        $this->questUint8b22 = $questUint8b22;

        return $this;
    }

    public function getQuestUint8b23(): ?int
    {
        return $this->questUint8b23;
    }

    public function setQuestUint8b23(?int $questUint8b23): self
    {
        $this->questUint8b23 = $questUint8b23;

        return $this;
    }

    public function getQuestUint8b24(): ?int
    {
        return $this->questUint8b24;
    }

    public function setQuestUint8b24(?int $questUint8b24): self
    {
        $this->questUint8b24 = $questUint8b24;

        return $this;
    }

    public function getQuestUint8b25(): ?int
    {
        return $this->questUint8b25;
    }

    public function setQuestUint8b25(?int $questUint8b25): self
    {
        $this->questUint8b25 = $questUint8b25;

        return $this;
    }

    public function getQuestUint8b26(): ?int
    {
        return $this->questUint8b26;
    }

    public function setQuestUint8b26(?int $questUint8b26): self
    {
        $this->questUint8b26 = $questUint8b26;

        return $this;
    }

    public function getQuestUint8b27(): ?int
    {
        return $this->questUint8b27;
    }

    public function setQuestUint8b27(?int $questUint8b27): self
    {
        $this->questUint8b27 = $questUint8b27;

        return $this;
    }

    public function getQuestUint8b28(): ?int
    {
        return $this->questUint8b28;
    }

    public function setQuestUint8b28(?int $questUint8b28): self
    {
        $this->questUint8b28 = $questUint8b28;

        return $this;
    }

    public function getQuestUint8b29(): ?int
    {
        return $this->questUint8b29;
    }

    public function setQuestUint8b29(?int $questUint8b29): self
    {
        $this->questUint8b29 = $questUint8b29;

        return $this;
    }

    public function getQuestUint8b30(): ?int
    {
        return $this->questUint8b30;
    }

    public function setQuestUint8b30(?int $questUint8b30): self
    {
        $this->questUint8b30 = $questUint8b30;

        return $this;
    }

    public function getQuestUint8b31(): ?int
    {
        return $this->questUint8b31;
    }

    public function setQuestUint8b31(?int $questUint8b31): self
    {
        $this->questUint8b31 = $questUint8b31;

        return $this;
    }

    public function getConditionType0(): ?int
    {
        return $this->conditionType0;
    }

    public function setConditionType0(?int $conditionType0): self
    {
        $this->conditionType0 = $conditionType0;

        return $this;
    }

    public function getConditionType1(): ?int
    {
        return $this->conditionType1;
    }

    public function setConditionType1(?int $conditionType1): self
    {
        $this->conditionType1 = $conditionType1;

        return $this;
    }

    public function getConditionType2(): ?int
    {
        return $this->conditionType2;
    }

    public function setConditionType2(?int $conditionType2): self
    {
        $this->conditionType2 = $conditionType2;

        return $this;
    }

    public function getConditionType3(): ?int
    {
        return $this->conditionType3;
    }

    public function setConditionType3(?int $conditionType3): self
    {
        $this->conditionType3 = $conditionType3;

        return $this;
    }

    public function getConditionType4(): ?int
    {
        return $this->conditionType4;
    }

    public function setConditionType4(?int $conditionType4): self
    {
        $this->conditionType4 = $conditionType4;

        return $this;
    }

    public function getConditionType5(): ?int
    {
        return $this->conditionType5;
    }

    public function setConditionType5(?int $conditionType5): self
    {
        $this->conditionType5 = $conditionType5;

        return $this;
    }

    public function getConditionType6(): ?int
    {
        return $this->conditionType6;
    }

    public function setConditionType6(?int $conditionType6): self
    {
        $this->conditionType6 = $conditionType6;

        return $this;
    }

    public function getConditionType7(): ?int
    {
        return $this->conditionType7;
    }

    public function setConditionType7(?int $conditionType7): self
    {
        $this->conditionType7 = $conditionType7;

        return $this;
    }

    public function getConditionType8(): ?int
    {
        return $this->conditionType8;
    }

    public function setConditionType8(?int $conditionType8): self
    {
        $this->conditionType8 = $conditionType8;

        return $this;
    }

    public function getConditionType9(): ?int
    {
        return $this->conditionType9;
    }

    public function setConditionType9(?int $conditionType9): self
    {
        $this->conditionType9 = $conditionType9;

        return $this;
    }

    public function getConditionType10(): ?int
    {
        return $this->conditionType10;
    }

    public function setConditionType10(?int $conditionType10): self
    {
        $this->conditionType10 = $conditionType10;

        return $this;
    }

    public function getConditionType11(): ?int
    {
        return $this->conditionType11;
    }

    public function setConditionType11(?int $conditionType11): self
    {
        $this->conditionType11 = $conditionType11;

        return $this;
    }

    public function getConditionType12(): ?int
    {
        return $this->conditionType12;
    }

    public function setConditionType12(?int $conditionType12): self
    {
        $this->conditionType12 = $conditionType12;

        return $this;
    }

    public function getConditionType13(): ?int
    {
        return $this->conditionType13;
    }

    public function setConditionType13(?int $conditionType13): self
    {
        $this->conditionType13 = $conditionType13;

        return $this;
    }

    public function getConditionType14(): ?int
    {
        return $this->conditionType14;
    }

    public function setConditionType14(?int $conditionType14): self
    {
        $this->conditionType14 = $conditionType14;

        return $this;
    }

    public function getConditionType15(): ?int
    {
        return $this->conditionType15;
    }

    public function setConditionType15(?int $conditionType15): self
    {
        $this->conditionType15 = $conditionType15;

        return $this;
    }

    public function getConditionType16(): ?int
    {
        return $this->conditionType16;
    }

    public function setConditionType16(?int $conditionType16): self
    {
        $this->conditionType16 = $conditionType16;

        return $this;
    }

    public function getConditionType17(): ?int
    {
        return $this->conditionType17;
    }

    public function setConditionType17(?int $conditionType17): self
    {
        $this->conditionType17 = $conditionType17;

        return $this;
    }

    public function getConditionType18(): ?int
    {
        return $this->conditionType18;
    }

    public function setConditionType18(?int $conditionType18): self
    {
        $this->conditionType18 = $conditionType18;

        return $this;
    }

    public function getConditionType19(): ?int
    {
        return $this->conditionType19;
    }

    public function setConditionType19(?int $conditionType19): self
    {
        $this->conditionType19 = $conditionType19;

        return $this;
    }

    public function getConditionType20(): ?int
    {
        return $this->conditionType20;
    }

    public function setConditionType20(?int $conditionType20): self
    {
        $this->conditionType20 = $conditionType20;

        return $this;
    }

    public function getConditionType21(): ?int
    {
        return $this->conditionType21;
    }

    public function setConditionType21(?int $conditionType21): self
    {
        $this->conditionType21 = $conditionType21;

        return $this;
    }

    public function getConditionType22(): ?int
    {
        return $this->conditionType22;
    }

    public function setConditionType22(?int $conditionType22): self
    {
        $this->conditionType22 = $conditionType22;

        return $this;
    }

    public function getConditionType23(): ?int
    {
        return $this->conditionType23;
    }

    public function setConditionType23(?int $conditionType23): self
    {
        $this->conditionType23 = $conditionType23;

        return $this;
    }

    public function getConditionType24(): ?int
    {
        return $this->conditionType24;
    }

    public function setConditionType24(?int $conditionType24): self
    {
        $this->conditionType24 = $conditionType24;

        return $this;
    }

    public function getConditionType25(): ?int
    {
        return $this->conditionType25;
    }

    public function setConditionType25(?int $conditionType25): self
    {
        $this->conditionType25 = $conditionType25;

        return $this;
    }

    public function getConditionType26(): ?int
    {
        return $this->conditionType26;
    }

    public function setConditionType26(?int $conditionType26): self
    {
        $this->conditionType26 = $conditionType26;

        return $this;
    }

    public function getConditionType27(): ?int
    {
        return $this->conditionType27;
    }

    public function setConditionType27(?int $conditionType27): self
    {
        $this->conditionType27 = $conditionType27;

        return $this;
    }

    public function getConditionType28(): ?int
    {
        return $this->conditionType28;
    }

    public function setConditionType28(?int $conditionType28): self
    {
        $this->conditionType28 = $conditionType28;

        return $this;
    }

    public function getConditionType29(): ?int
    {
        return $this->conditionType29;
    }

    public function setConditionType29(?int $conditionType29): self
    {
        $this->conditionType29 = $conditionType29;

        return $this;
    }

    public function getConditionType30(): ?int
    {
        return $this->conditionType30;
    }

    public function setConditionType30(?int $conditionType30): self
    {
        $this->conditionType30 = $conditionType30;

        return $this;
    }

    public function getConditionType31(): ?int
    {
        return $this->conditionType31;
    }

    public function setConditionType31(?int $conditionType31): self
    {
        $this->conditionType31 = $conditionType31;

        return $this;
    }

    public function getConditionType32(): ?int
    {
        return $this->conditionType32;
    }

    public function setConditionType32(?int $conditionType32): self
    {
        $this->conditionType32 = $conditionType32;

        return $this;
    }

    public function getConditionType33(): ?int
    {
        return $this->conditionType33;
    }

    public function setConditionType33(?int $conditionType33): self
    {
        $this->conditionType33 = $conditionType33;

        return $this;
    }

    public function getConditionType34(): ?int
    {
        return $this->conditionType34;
    }

    public function setConditionType34(?int $conditionType34): self
    {
        $this->conditionType34 = $conditionType34;

        return $this;
    }

    public function getConditionType35(): ?int
    {
        return $this->conditionType35;
    }

    public function setConditionType35(?int $conditionType35): self
    {
        $this->conditionType35 = $conditionType35;

        return $this;
    }

    public function getConditionType36(): ?int
    {
        return $this->conditionType36;
    }

    public function setConditionType36(?int $conditionType36): self
    {
        $this->conditionType36 = $conditionType36;

        return $this;
    }

    public function getConditionType37(): ?int
    {
        return $this->conditionType37;
    }

    public function setConditionType37(?int $conditionType37): self
    {
        $this->conditionType37 = $conditionType37;

        return $this;
    }

    public function getConditionType38(): ?int
    {
        return $this->conditionType38;
    }

    public function setConditionType38(?int $conditionType38): self
    {
        $this->conditionType38 = $conditionType38;

        return $this;
    }

    public function getConditionType39(): ?int
    {
        return $this->conditionType39;
    }

    public function setConditionType39(?int $conditionType39): self
    {
        $this->conditionType39 = $conditionType39;

        return $this;
    }

    public function getConditionType40(): ?int
    {
        return $this->conditionType40;
    }

    public function setConditionType40(?int $conditionType40): self
    {
        $this->conditionType40 = $conditionType40;

        return $this;
    }

    public function getConditionType41(): ?int
    {
        return $this->conditionType41;
    }

    public function setConditionType41(?int $conditionType41): self
    {
        $this->conditionType41 = $conditionType41;

        return $this;
    }

    public function getConditionType42(): ?int
    {
        return $this->conditionType42;
    }

    public function setConditionType42(?int $conditionType42): self
    {
        $this->conditionType42 = $conditionType42;

        return $this;
    }

    public function getConditionType43(): ?int
    {
        return $this->conditionType43;
    }

    public function setConditionType43(?int $conditionType43): self
    {
        $this->conditionType43 = $conditionType43;

        return $this;
    }

    public function getConditionType44(): ?int
    {
        return $this->conditionType44;
    }

    public function setConditionType44(?int $conditionType44): self
    {
        $this->conditionType44 = $conditionType44;

        return $this;
    }

    public function getConditionType45(): ?int
    {
        return $this->conditionType45;
    }

    public function setConditionType45(?int $conditionType45): self
    {
        $this->conditionType45 = $conditionType45;

        return $this;
    }

    public function getConditionType46(): ?int
    {
        return $this->conditionType46;
    }

    public function setConditionType46(?int $conditionType46): self
    {
        $this->conditionType46 = $conditionType46;

        return $this;
    }

    public function getConditionType47(): ?int
    {
        return $this->conditionType47;
    }

    public function setConditionType47(?int $conditionType47): self
    {
        $this->conditionType47 = $conditionType47;

        return $this;
    }

    public function getConditionType48(): ?int
    {
        return $this->conditionType48;
    }

    public function setConditionType48(?int $conditionType48): self
    {
        $this->conditionType48 = $conditionType48;

        return $this;
    }

    public function getConditionType49(): ?int
    {
        return $this->conditionType49;
    }

    public function setConditionType49(?int $conditionType49): self
    {
        $this->conditionType49 = $conditionType49;

        return $this;
    }

    public function getConditionType50(): ?int
    {
        return $this->conditionType50;
    }

    public function setConditionType50(?int $conditionType50): self
    {
        $this->conditionType50 = $conditionType50;

        return $this;
    }

    public function getConditionType51(): ?int
    {
        return $this->conditionType51;
    }

    public function setConditionType51(?int $conditionType51): self
    {
        $this->conditionType51 = $conditionType51;

        return $this;
    }

    public function getConditionType52(): ?int
    {
        return $this->conditionType52;
    }

    public function setConditionType52(?int $conditionType52): self
    {
        $this->conditionType52 = $conditionType52;

        return $this;
    }

    public function getConditionType53(): ?int
    {
        return $this->conditionType53;
    }

    public function setConditionType53(?int $conditionType53): self
    {
        $this->conditionType53 = $conditionType53;

        return $this;
    }

    public function getConditionType54(): ?int
    {
        return $this->conditionType54;
    }

    public function setConditionType54(?int $conditionType54): self
    {
        $this->conditionType54 = $conditionType54;

        return $this;
    }

    public function getConditionType55(): ?int
    {
        return $this->conditionType55;
    }

    public function setConditionType55(?int $conditionType55): self
    {
        $this->conditionType55 = $conditionType55;

        return $this;
    }

    public function getConditionType56(): ?int
    {
        return $this->conditionType56;
    }

    public function setConditionType56(?int $conditionType56): self
    {
        $this->conditionType56 = $conditionType56;

        return $this;
    }

    public function getConditionType57(): ?int
    {
        return $this->conditionType57;
    }

    public function setConditionType57(?int $conditionType57): self
    {
        $this->conditionType57 = $conditionType57;

        return $this;
    }

    public function getConditionType58(): ?int
    {
        return $this->conditionType58;
    }

    public function setConditionType58(?int $conditionType58): self
    {
        $this->conditionType58 = $conditionType58;

        return $this;
    }

    public function getConditionType59(): ?int
    {
        return $this->conditionType59;
    }

    public function setConditionType59(?int $conditionType59): self
    {
        $this->conditionType59 = $conditionType59;

        return $this;
    }

    public function getConditionType60(): ?int
    {
        return $this->conditionType60;
    }

    public function setConditionType60(?int $conditionType60): self
    {
        $this->conditionType60 = $conditionType60;

        return $this;
    }

    public function getConditionType61(): ?int
    {
        return $this->conditionType61;
    }

    public function setConditionType61(?int $conditionType61): self
    {
        $this->conditionType61 = $conditionType61;

        return $this;
    }

    public function getConditionType62(): ?int
    {
        return $this->conditionType62;
    }

    public function setConditionType62(?int $conditionType62): self
    {
        $this->conditionType62 = $conditionType62;

        return $this;
    }

    public function getConditionType63(): ?int
    {
        return $this->conditionType63;
    }

    public function setConditionType63(?int $conditionType63): self
    {
        $this->conditionType63 = $conditionType63;

        return $this;
    }

    public function getConditionValue0(): ?string
    {
        return $this->conditionValue0;
    }

    public function setConditionValue0(?string $conditionValue0): self
    {
        $this->conditionValue0 = $conditionValue0;

        return $this;
    }

    public function getConditionValue1(): ?string
    {
        return $this->conditionValue1;
    }

    public function setConditionValue1(?string $conditionValue1): self
    {
        $this->conditionValue1 = $conditionValue1;

        return $this;
    }

    public function getConditionValue2(): ?string
    {
        return $this->conditionValue2;
    }

    public function setConditionValue2(?string $conditionValue2): self
    {
        $this->conditionValue2 = $conditionValue2;

        return $this;
    }

    public function getConditionValue3(): ?string
    {
        return $this->conditionValue3;
    }

    public function setConditionValue3(?string $conditionValue3): self
    {
        $this->conditionValue3 = $conditionValue3;

        return $this;
    }

    public function getConditionValue4(): ?string
    {
        return $this->conditionValue4;
    }

    public function setConditionValue4(?string $conditionValue4): self
    {
        $this->conditionValue4 = $conditionValue4;

        return $this;
    }

    public function getConditionValue5(): ?string
    {
        return $this->conditionValue5;
    }

    public function setConditionValue5(?string $conditionValue5): self
    {
        $this->conditionValue5 = $conditionValue5;

        return $this;
    }

    public function getConditionValue6(): ?string
    {
        return $this->conditionValue6;
    }

    public function setConditionValue6(?string $conditionValue6): self
    {
        $this->conditionValue6 = $conditionValue6;

        return $this;
    }

    public function getConditionValue7(): ?string
    {
        return $this->conditionValue7;
    }

    public function setConditionValue7(?string $conditionValue7): self
    {
        $this->conditionValue7 = $conditionValue7;

        return $this;
    }

    public function getConditionValue8(): ?string
    {
        return $this->conditionValue8;
    }

    public function setConditionValue8(?string $conditionValue8): self
    {
        $this->conditionValue8 = $conditionValue8;

        return $this;
    }

    public function getConditionValue9(): ?string
    {
        return $this->conditionValue9;
    }

    public function setConditionValue9(?string $conditionValue9): self
    {
        $this->conditionValue9 = $conditionValue9;

        return $this;
    }

    public function getConditionValue10(): ?string
    {
        return $this->conditionValue10;
    }

    public function setConditionValue10(?string $conditionValue10): self
    {
        $this->conditionValue10 = $conditionValue10;

        return $this;
    }

    public function getConditionValue11(): ?string
    {
        return $this->conditionValue11;
    }

    public function setConditionValue11(?string $conditionValue11): self
    {
        $this->conditionValue11 = $conditionValue11;

        return $this;
    }

    public function getConditionValue12(): ?string
    {
        return $this->conditionValue12;
    }

    public function setConditionValue12(?string $conditionValue12): self
    {
        $this->conditionValue12 = $conditionValue12;

        return $this;
    }

    public function getConditionValue13(): ?string
    {
        return $this->conditionValue13;
    }

    public function setConditionValue13(?string $conditionValue13): self
    {
        $this->conditionValue13 = $conditionValue13;

        return $this;
    }

    public function getConditionValue14(): ?string
    {
        return $this->conditionValue14;
    }

    public function setConditionValue14(?string $conditionValue14): self
    {
        $this->conditionValue14 = $conditionValue14;

        return $this;
    }

    public function getConditionValue15(): ?string
    {
        return $this->conditionValue15;
    }

    public function setConditionValue15(?string $conditionValue15): self
    {
        $this->conditionValue15 = $conditionValue15;

        return $this;
    }

    public function getConditionValue16(): ?string
    {
        return $this->conditionValue16;
    }

    public function setConditionValue16(?string $conditionValue16): self
    {
        $this->conditionValue16 = $conditionValue16;

        return $this;
    }

    public function getConditionValue17(): ?string
    {
        return $this->conditionValue17;
    }

    public function setConditionValue17(?string $conditionValue17): self
    {
        $this->conditionValue17 = $conditionValue17;

        return $this;
    }

    public function getConditionValue18(): ?string
    {
        return $this->conditionValue18;
    }

    public function setConditionValue18(?string $conditionValue18): self
    {
        $this->conditionValue18 = $conditionValue18;

        return $this;
    }

    public function getConditionValue19(): ?string
    {
        return $this->conditionValue19;
    }

    public function setConditionValue19(?string $conditionValue19): self
    {
        $this->conditionValue19 = $conditionValue19;

        return $this;
    }

    public function getConditionValue20(): ?string
    {
        return $this->conditionValue20;
    }

    public function setConditionValue20(?string $conditionValue20): self
    {
        $this->conditionValue20 = $conditionValue20;

        return $this;
    }

    public function getConditionValue21(): ?string
    {
        return $this->conditionValue21;
    }

    public function setConditionValue21(?string $conditionValue21): self
    {
        $this->conditionValue21 = $conditionValue21;

        return $this;
    }

    public function getConditionValue22(): ?string
    {
        return $this->conditionValue22;
    }

    public function setConditionValue22(?string $conditionValue22): self
    {
        $this->conditionValue22 = $conditionValue22;

        return $this;
    }

    public function getConditionValue23(): ?string
    {
        return $this->conditionValue23;
    }

    public function setConditionValue23(?string $conditionValue23): self
    {
        $this->conditionValue23 = $conditionValue23;

        return $this;
    }

    public function getConditionValue24(): ?string
    {
        return $this->conditionValue24;
    }

    public function setConditionValue24(?string $conditionValue24): self
    {
        $this->conditionValue24 = $conditionValue24;

        return $this;
    }

    public function getConditionValue25(): ?string
    {
        return $this->conditionValue25;
    }

    public function setConditionValue25(?string $conditionValue25): self
    {
        $this->conditionValue25 = $conditionValue25;

        return $this;
    }

    public function getConditionValue26(): ?string
    {
        return $this->conditionValue26;
    }

    public function setConditionValue26(?string $conditionValue26): self
    {
        $this->conditionValue26 = $conditionValue26;

        return $this;
    }

    public function getConditionValue27(): ?string
    {
        return $this->conditionValue27;
    }

    public function setConditionValue27(?string $conditionValue27): self
    {
        $this->conditionValue27 = $conditionValue27;

        return $this;
    }

    public function getConditionValue28(): ?string
    {
        return $this->conditionValue28;
    }

    public function setConditionValue28(?string $conditionValue28): self
    {
        $this->conditionValue28 = $conditionValue28;

        return $this;
    }

    public function getConditionValue29(): ?string
    {
        return $this->conditionValue29;
    }

    public function setConditionValue29(?string $conditionValue29): self
    {
        $this->conditionValue29 = $conditionValue29;

        return $this;
    }

    public function getConditionValue30(): ?string
    {
        return $this->conditionValue30;
    }

    public function setConditionValue30(?string $conditionValue30): self
    {
        $this->conditionValue30 = $conditionValue30;

        return $this;
    }

    public function getConditionValue31(): ?string
    {
        return $this->conditionValue31;
    }

    public function setConditionValue31(?string $conditionValue31): self
    {
        $this->conditionValue31 = $conditionValue31;

        return $this;
    }

    public function getConditionValue32(): ?string
    {
        return $this->conditionValue32;
    }

    public function setConditionValue32(?string $conditionValue32): self
    {
        $this->conditionValue32 = $conditionValue32;

        return $this;
    }

    public function getConditionValue33(): ?string
    {
        return $this->conditionValue33;
    }

    public function setConditionValue33(?string $conditionValue33): self
    {
        $this->conditionValue33 = $conditionValue33;

        return $this;
    }

    public function getConditionValue34(): ?string
    {
        return $this->conditionValue34;
    }

    public function setConditionValue34(?string $conditionValue34): self
    {
        $this->conditionValue34 = $conditionValue34;

        return $this;
    }

    public function getConditionValue35(): ?string
    {
        return $this->conditionValue35;
    }

    public function setConditionValue35(?string $conditionValue35): self
    {
        $this->conditionValue35 = $conditionValue35;

        return $this;
    }

    public function getConditionValue36(): ?string
    {
        return $this->conditionValue36;
    }

    public function setConditionValue36(?string $conditionValue36): self
    {
        $this->conditionValue36 = $conditionValue36;

        return $this;
    }

    public function getConditionValue37(): ?string
    {
        return $this->conditionValue37;
    }

    public function setConditionValue37(?string $conditionValue37): self
    {
        $this->conditionValue37 = $conditionValue37;

        return $this;
    }

    public function getConditionValue38(): ?string
    {
        return $this->conditionValue38;
    }

    public function setConditionValue38(?string $conditionValue38): self
    {
        $this->conditionValue38 = $conditionValue38;

        return $this;
    }

    public function getConditionValue39(): ?string
    {
        return $this->conditionValue39;
    }

    public function setConditionValue39(?string $conditionValue39): self
    {
        $this->conditionValue39 = $conditionValue39;

        return $this;
    }

    public function getConditionValue40(): ?string
    {
        return $this->conditionValue40;
    }

    public function setConditionValue40(?string $conditionValue40): self
    {
        $this->conditionValue40 = $conditionValue40;

        return $this;
    }

    public function getConditionValue41(): ?string
    {
        return $this->conditionValue41;
    }

    public function setConditionValue41(?string $conditionValue41): self
    {
        $this->conditionValue41 = $conditionValue41;

        return $this;
    }

    public function getConditionValue42(): ?string
    {
        return $this->conditionValue42;
    }

    public function setConditionValue42(?string $conditionValue42): self
    {
        $this->conditionValue42 = $conditionValue42;

        return $this;
    }

    public function getConditionValue43(): ?string
    {
        return $this->conditionValue43;
    }

    public function setConditionValue43(?string $conditionValue43): self
    {
        $this->conditionValue43 = $conditionValue43;

        return $this;
    }

    public function getConditionValue44(): ?string
    {
        return $this->conditionValue44;
    }

    public function setConditionValue44(?string $conditionValue44): self
    {
        $this->conditionValue44 = $conditionValue44;

        return $this;
    }

    public function getConditionValue45(): ?string
    {
        return $this->conditionValue45;
    }

    public function setConditionValue45(?string $conditionValue45): self
    {
        $this->conditionValue45 = $conditionValue45;

        return $this;
    }

    public function getConditionValue46(): ?string
    {
        return $this->conditionValue46;
    }

    public function setConditionValue46(?string $conditionValue46): self
    {
        $this->conditionValue46 = $conditionValue46;

        return $this;
    }

    public function getConditionValue47(): ?string
    {
        return $this->conditionValue47;
    }

    public function setConditionValue47(?string $conditionValue47): self
    {
        $this->conditionValue47 = $conditionValue47;

        return $this;
    }

    public function getConditionValue48(): ?string
    {
        return $this->conditionValue48;
    }

    public function setConditionValue48(?string $conditionValue48): self
    {
        $this->conditionValue48 = $conditionValue48;

        return $this;
    }

    public function getConditionValue49(): ?string
    {
        return $this->conditionValue49;
    }

    public function setConditionValue49(?string $conditionValue49): self
    {
        $this->conditionValue49 = $conditionValue49;

        return $this;
    }

    public function getConditionValue50(): ?string
    {
        return $this->conditionValue50;
    }

    public function setConditionValue50(?string $conditionValue50): self
    {
        $this->conditionValue50 = $conditionValue50;

        return $this;
    }

    public function getConditionValue51(): ?string
    {
        return $this->conditionValue51;
    }

    public function setConditionValue51(?string $conditionValue51): self
    {
        $this->conditionValue51 = $conditionValue51;

        return $this;
    }

    public function getConditionValue52(): ?string
    {
        return $this->conditionValue52;
    }

    public function setConditionValue52(?string $conditionValue52): self
    {
        $this->conditionValue52 = $conditionValue52;

        return $this;
    }

    public function getConditionValue53(): ?string
    {
        return $this->conditionValue53;
    }

    public function setConditionValue53(?string $conditionValue53): self
    {
        $this->conditionValue53 = $conditionValue53;

        return $this;
    }

    public function getConditionValue54(): ?string
    {
        return $this->conditionValue54;
    }

    public function setConditionValue54(?string $conditionValue54): self
    {
        $this->conditionValue54 = $conditionValue54;

        return $this;
    }

    public function getConditionValue55(): ?string
    {
        return $this->conditionValue55;
    }

    public function setConditionValue55(?string $conditionValue55): self
    {
        $this->conditionValue55 = $conditionValue55;

        return $this;
    }

    public function getConditionValue56(): ?string
    {
        return $this->conditionValue56;
    }

    public function setConditionValue56(?string $conditionValue56): self
    {
        $this->conditionValue56 = $conditionValue56;

        return $this;
    }

    public function getConditionValue57(): ?string
    {
        return $this->conditionValue57;
    }

    public function setConditionValue57(?string $conditionValue57): self
    {
        $this->conditionValue57 = $conditionValue57;

        return $this;
    }

    public function getConditionValue58(): ?string
    {
        return $this->conditionValue58;
    }

    public function setConditionValue58(?string $conditionValue58): self
    {
        $this->conditionValue58 = $conditionValue58;

        return $this;
    }

    public function getConditionValue59(): ?string
    {
        return $this->conditionValue59;
    }

    public function setConditionValue59(?string $conditionValue59): self
    {
        $this->conditionValue59 = $conditionValue59;

        return $this;
    }

    public function getConditionValue60(): ?string
    {
        return $this->conditionValue60;
    }

    public function setConditionValue60(?string $conditionValue60): self
    {
        $this->conditionValue60 = $conditionValue60;

        return $this;
    }

    public function getConditionValue61(): ?string
    {
        return $this->conditionValue61;
    }

    public function setConditionValue61(?string $conditionValue61): self
    {
        $this->conditionValue61 = $conditionValue61;

        return $this;
    }

    public function getConditionValue62(): ?string
    {
        return $this->conditionValue62;
    }

    public function setConditionValue62(?string $conditionValue62): self
    {
        $this->conditionValue62 = $conditionValue62;

        return $this;
    }

    public function getConditionValue63(): ?string
    {
        return $this->conditionValue63;
    }

    public function setConditionValue63(?string $conditionValue63): self
    {
        $this->conditionValue63 = $conditionValue63;

        return $this;
    }

    public function getConditionOperator0(): ?int
    {
        return $this->conditionOperator0;
    }

    public function setConditionOperator0(?int $conditionOperator0): self
    {
        $this->conditionOperator0 = $conditionOperator0;

        return $this;
    }

    public function getConditionOperator1(): ?int
    {
        return $this->conditionOperator1;
    }

    public function setConditionOperator1(?int $conditionOperator1): self
    {
        $this->conditionOperator1 = $conditionOperator1;

        return $this;
    }

    public function getConditionOperator2(): ?int
    {
        return $this->conditionOperator2;
    }

    public function setConditionOperator2(?int $conditionOperator2): self
    {
        $this->conditionOperator2 = $conditionOperator2;

        return $this;
    }

    public function getConditionOperator3(): ?int
    {
        return $this->conditionOperator3;
    }

    public function setConditionOperator3(?int $conditionOperator3): self
    {
        $this->conditionOperator3 = $conditionOperator3;

        return $this;
    }

    public function getConditionOperator4(): ?int
    {
        return $this->conditionOperator4;
    }

    public function setConditionOperator4(?int $conditionOperator4): self
    {
        $this->conditionOperator4 = $conditionOperator4;

        return $this;
    }

    public function getConditionOperator5(): ?int
    {
        return $this->conditionOperator5;
    }

    public function setConditionOperator5(?int $conditionOperator5): self
    {
        $this->conditionOperator5 = $conditionOperator5;

        return $this;
    }

    public function getConditionOperator6(): ?int
    {
        return $this->conditionOperator6;
    }

    public function setConditionOperator6(?int $conditionOperator6): self
    {
        $this->conditionOperator6 = $conditionOperator6;

        return $this;
    }

    public function getConditionOperator7(): ?int
    {
        return $this->conditionOperator7;
    }

    public function setConditionOperator7(?int $conditionOperator7): self
    {
        $this->conditionOperator7 = $conditionOperator7;

        return $this;
    }

    public function getConditionOperator8(): ?int
    {
        return $this->conditionOperator8;
    }

    public function setConditionOperator8(?int $conditionOperator8): self
    {
        $this->conditionOperator8 = $conditionOperator8;

        return $this;
    }

    public function getConditionOperator9(): ?int
    {
        return $this->conditionOperator9;
    }

    public function setConditionOperator9(?int $conditionOperator9): self
    {
        $this->conditionOperator9 = $conditionOperator9;

        return $this;
    }

    public function getConditionOperator10(): ?int
    {
        return $this->conditionOperator10;
    }

    public function setConditionOperator10(?int $conditionOperator10): self
    {
        $this->conditionOperator10 = $conditionOperator10;

        return $this;
    }

    public function getConditionOperator11(): ?int
    {
        return $this->conditionOperator11;
    }

    public function setConditionOperator11(?int $conditionOperator11): self
    {
        $this->conditionOperator11 = $conditionOperator11;

        return $this;
    }

    public function getConditionOperator12(): ?int
    {
        return $this->conditionOperator12;
    }

    public function setConditionOperator12(?int $conditionOperator12): self
    {
        $this->conditionOperator12 = $conditionOperator12;

        return $this;
    }

    public function getConditionOperator13(): ?int
    {
        return $this->conditionOperator13;
    }

    public function setConditionOperator13(?int $conditionOperator13): self
    {
        $this->conditionOperator13 = $conditionOperator13;

        return $this;
    }

    public function getConditionOperator14(): ?int
    {
        return $this->conditionOperator14;
    }

    public function setConditionOperator14(?int $conditionOperator14): self
    {
        $this->conditionOperator14 = $conditionOperator14;

        return $this;
    }

    public function getConditionOperator15(): ?int
    {
        return $this->conditionOperator15;
    }

    public function setConditionOperator15(?int $conditionOperator15): self
    {
        $this->conditionOperator15 = $conditionOperator15;

        return $this;
    }

    public function getConditionOperator16(): ?int
    {
        return $this->conditionOperator16;
    }

    public function setConditionOperator16(?int $conditionOperator16): self
    {
        $this->conditionOperator16 = $conditionOperator16;

        return $this;
    }

    public function getConditionOperator17(): ?int
    {
        return $this->conditionOperator17;
    }

    public function setConditionOperator17(?int $conditionOperator17): self
    {
        $this->conditionOperator17 = $conditionOperator17;

        return $this;
    }

    public function getConditionOperator18(): ?int
    {
        return $this->conditionOperator18;
    }

    public function setConditionOperator18(?int $conditionOperator18): self
    {
        $this->conditionOperator18 = $conditionOperator18;

        return $this;
    }

    public function getConditionOperator19(): ?int
    {
        return $this->conditionOperator19;
    }

    public function setConditionOperator19(?int $conditionOperator19): self
    {
        $this->conditionOperator19 = $conditionOperator19;

        return $this;
    }

    public function getConditionOperator20(): ?int
    {
        return $this->conditionOperator20;
    }

    public function setConditionOperator20(?int $conditionOperator20): self
    {
        $this->conditionOperator20 = $conditionOperator20;

        return $this;
    }

    public function getConditionOperator21(): ?int
    {
        return $this->conditionOperator21;
    }

    public function setConditionOperator21(?int $conditionOperator21): self
    {
        $this->conditionOperator21 = $conditionOperator21;

        return $this;
    }

    public function getConditionOperator22(): ?int
    {
        return $this->conditionOperator22;
    }

    public function setConditionOperator22(?int $conditionOperator22): self
    {
        $this->conditionOperator22 = $conditionOperator22;

        return $this;
    }

    public function getConditionOperator23(): ?int
    {
        return $this->conditionOperator23;
    }

    public function setConditionOperator23(?int $conditionOperator23): self
    {
        $this->conditionOperator23 = $conditionOperator23;

        return $this;
    }

    public function getConditionOperator24(): ?int
    {
        return $this->conditionOperator24;
    }

    public function setConditionOperator24(?int $conditionOperator24): self
    {
        $this->conditionOperator24 = $conditionOperator24;

        return $this;
    }

    public function getConditionOperator25(): ?int
    {
        return $this->conditionOperator25;
    }

    public function setConditionOperator25(?int $conditionOperator25): self
    {
        $this->conditionOperator25 = $conditionOperator25;

        return $this;
    }

    public function getConditionOperator26(): ?int
    {
        return $this->conditionOperator26;
    }

    public function setConditionOperator26(?int $conditionOperator26): self
    {
        $this->conditionOperator26 = $conditionOperator26;

        return $this;
    }

    public function getConditionOperator27(): ?int
    {
        return $this->conditionOperator27;
    }

    public function setConditionOperator27(?int $conditionOperator27): self
    {
        $this->conditionOperator27 = $conditionOperator27;

        return $this;
    }

    public function getConditionOperator28(): ?int
    {
        return $this->conditionOperator28;
    }

    public function setConditionOperator28(?int $conditionOperator28): self
    {
        $this->conditionOperator28 = $conditionOperator28;

        return $this;
    }

    public function getConditionOperator29(): ?int
    {
        return $this->conditionOperator29;
    }

    public function setConditionOperator29(?int $conditionOperator29): self
    {
        $this->conditionOperator29 = $conditionOperator29;

        return $this;
    }

    public function getConditionOperator30(): ?int
    {
        return $this->conditionOperator30;
    }

    public function setConditionOperator30(?int $conditionOperator30): self
    {
        $this->conditionOperator30 = $conditionOperator30;

        return $this;
    }

    public function getConditionOperator31(): ?int
    {
        return $this->conditionOperator31;
    }

    public function setConditionOperator31(?int $conditionOperator31): self
    {
        $this->conditionOperator31 = $conditionOperator31;

        return $this;
    }

    public function getConditionOperator32(): ?int
    {
        return $this->conditionOperator32;
    }

    public function setConditionOperator32(?int $conditionOperator32): self
    {
        $this->conditionOperator32 = $conditionOperator32;

        return $this;
    }

    public function getConditionOperator33(): ?int
    {
        return $this->conditionOperator33;
    }

    public function setConditionOperator33(?int $conditionOperator33): self
    {
        $this->conditionOperator33 = $conditionOperator33;

        return $this;
    }

    public function getConditionOperator34(): ?int
    {
        return $this->conditionOperator34;
    }

    public function setConditionOperator34(?int $conditionOperator34): self
    {
        $this->conditionOperator34 = $conditionOperator34;

        return $this;
    }

    public function getConditionOperator35(): ?int
    {
        return $this->conditionOperator35;
    }

    public function setConditionOperator35(?int $conditionOperator35): self
    {
        $this->conditionOperator35 = $conditionOperator35;

        return $this;
    }

    public function getConditionOperator36(): ?int
    {
        return $this->conditionOperator36;
    }

    public function setConditionOperator36(?int $conditionOperator36): self
    {
        $this->conditionOperator36 = $conditionOperator36;

        return $this;
    }

    public function getConditionOperator37(): ?int
    {
        return $this->conditionOperator37;
    }

    public function setConditionOperator37(?int $conditionOperator37): self
    {
        $this->conditionOperator37 = $conditionOperator37;

        return $this;
    }

    public function getConditionOperator38(): ?int
    {
        return $this->conditionOperator38;
    }

    public function setConditionOperator38(?int $conditionOperator38): self
    {
        $this->conditionOperator38 = $conditionOperator38;

        return $this;
    }

    public function getConditionOperator39(): ?int
    {
        return $this->conditionOperator39;
    }

    public function setConditionOperator39(?int $conditionOperator39): self
    {
        $this->conditionOperator39 = $conditionOperator39;

        return $this;
    }

    public function getConditionOperator40(): ?int
    {
        return $this->conditionOperator40;
    }

    public function setConditionOperator40(?int $conditionOperator40): self
    {
        $this->conditionOperator40 = $conditionOperator40;

        return $this;
    }

    public function getConditionOperator41(): ?int
    {
        return $this->conditionOperator41;
    }

    public function setConditionOperator41(?int $conditionOperator41): self
    {
        $this->conditionOperator41 = $conditionOperator41;

        return $this;
    }

    public function getConditionOperator42(): ?int
    {
        return $this->conditionOperator42;
    }

    public function setConditionOperator42(?int $conditionOperator42): self
    {
        $this->conditionOperator42 = $conditionOperator42;

        return $this;
    }

    public function getConditionOperator43(): ?int
    {
        return $this->conditionOperator43;
    }

    public function setConditionOperator43(?int $conditionOperator43): self
    {
        $this->conditionOperator43 = $conditionOperator43;

        return $this;
    }

    public function getConditionOperator44(): ?int
    {
        return $this->conditionOperator44;
    }

    public function setConditionOperator44(?int $conditionOperator44): self
    {
        $this->conditionOperator44 = $conditionOperator44;

        return $this;
    }

    public function getConditionOperator45(): ?int
    {
        return $this->conditionOperator45;
    }

    public function setConditionOperator45(?int $conditionOperator45): self
    {
        $this->conditionOperator45 = $conditionOperator45;

        return $this;
    }

    public function getConditionOperator46(): ?int
    {
        return $this->conditionOperator46;
    }

    public function setConditionOperator46(?int $conditionOperator46): self
    {
        $this->conditionOperator46 = $conditionOperator46;

        return $this;
    }

    public function getConditionOperator47(): ?int
    {
        return $this->conditionOperator47;
    }

    public function setConditionOperator47(?int $conditionOperator47): self
    {
        $this->conditionOperator47 = $conditionOperator47;

        return $this;
    }

    public function getConditionOperator48(): ?int
    {
        return $this->conditionOperator48;
    }

    public function setConditionOperator48(?int $conditionOperator48): self
    {
        $this->conditionOperator48 = $conditionOperator48;

        return $this;
    }

    public function getConditionOperator49(): ?int
    {
        return $this->conditionOperator49;
    }

    public function setConditionOperator49(?int $conditionOperator49): self
    {
        $this->conditionOperator49 = $conditionOperator49;

        return $this;
    }

    public function getConditionOperator50(): ?int
    {
        return $this->conditionOperator50;
    }

    public function setConditionOperator50(?int $conditionOperator50): self
    {
        $this->conditionOperator50 = $conditionOperator50;

        return $this;
    }

    public function getConditionOperator51(): ?int
    {
        return $this->conditionOperator51;
    }

    public function setConditionOperator51(?int $conditionOperator51): self
    {
        $this->conditionOperator51 = $conditionOperator51;

        return $this;
    }

    public function getConditionOperator52(): ?int
    {
        return $this->conditionOperator52;
    }

    public function setConditionOperator52(?int $conditionOperator52): self
    {
        $this->conditionOperator52 = $conditionOperator52;

        return $this;
    }

    public function getConditionOperator53(): ?int
    {
        return $this->conditionOperator53;
    }

    public function setConditionOperator53(?int $conditionOperator53): self
    {
        $this->conditionOperator53 = $conditionOperator53;

        return $this;
    }

    public function getConditionOperator54(): ?int
    {
        return $this->conditionOperator54;
    }

    public function setConditionOperator54(?int $conditionOperator54): self
    {
        $this->conditionOperator54 = $conditionOperator54;

        return $this;
    }

    public function getConditionOperator55(): ?int
    {
        return $this->conditionOperator55;
    }

    public function setConditionOperator55(?int $conditionOperator55): self
    {
        $this->conditionOperator55 = $conditionOperator55;

        return $this;
    }

    public function getConditionOperator56(): ?int
    {
        return $this->conditionOperator56;
    }

    public function setConditionOperator56(?int $conditionOperator56): self
    {
        $this->conditionOperator56 = $conditionOperator56;

        return $this;
    }

    public function getConditionOperator57(): ?int
    {
        return $this->conditionOperator57;
    }

    public function setConditionOperator57(?int $conditionOperator57): self
    {
        $this->conditionOperator57 = $conditionOperator57;

        return $this;
    }

    public function getConditionOperator58(): ?int
    {
        return $this->conditionOperator58;
    }

    public function setConditionOperator58(?int $conditionOperator58): self
    {
        $this->conditionOperator58 = $conditionOperator58;

        return $this;
    }

    public function getConditionOperator59(): ?int
    {
        return $this->conditionOperator59;
    }

    public function setConditionOperator59(?int $conditionOperator59): self
    {
        $this->conditionOperator59 = $conditionOperator59;

        return $this;
    }

    public function getConditionOperator60(): ?int
    {
        return $this->conditionOperator60;
    }

    public function setConditionOperator60(?int $conditionOperator60): self
    {
        $this->conditionOperator60 = $conditionOperator60;

        return $this;
    }

    public function getConditionOperator61(): ?int
    {
        return $this->conditionOperator61;
    }

    public function setConditionOperator61(?int $conditionOperator61): self
    {
        $this->conditionOperator61 = $conditionOperator61;

        return $this;
    }

    public function getConditionOperator62(): ?int
    {
        return $this->conditionOperator62;
    }

    public function setConditionOperator62(?int $conditionOperator62): self
    {
        $this->conditionOperator62 = $conditionOperator62;

        return $this;
    }

    public function getConditionOperator63(): ?int
    {
        return $this->conditionOperator63;
    }

    public function setConditionOperator63(?int $conditionOperator63): self
    {
        $this->conditionOperator63 = $conditionOperator63;

        return $this;
    }

    public function getBehavior0(): ?string
    {
        return $this->behavior0;
    }

    public function setBehavior0(?string $behavior0): self
    {
        $this->behavior0 = $behavior0;

        return $this;
    }

    public function getBehavior1(): ?string
    {
        return $this->behavior1;
    }

    public function setBehavior1(?string $behavior1): self
    {
        $this->behavior1 = $behavior1;

        return $this;
    }

    public function getBehavior2(): ?string
    {
        return $this->behavior2;
    }

    public function setBehavior2(?string $behavior2): self
    {
        $this->behavior2 = $behavior2;

        return $this;
    }

    public function getBehavior3(): ?string
    {
        return $this->behavior3;
    }

    public function setBehavior3(?string $behavior3): self
    {
        $this->behavior3 = $behavior3;

        return $this;
    }

    public function getBehavior4(): ?string
    {
        return $this->behavior4;
    }

    public function setBehavior4(?string $behavior4): self
    {
        $this->behavior4 = $behavior4;

        return $this;
    }

    public function getBehavior5(): ?string
    {
        return $this->behavior5;
    }

    public function setBehavior5(?string $behavior5): self
    {
        $this->behavior5 = $behavior5;

        return $this;
    }

    public function getBehavior6(): ?string
    {
        return $this->behavior6;
    }

    public function setBehavior6(?string $behavior6): self
    {
        $this->behavior6 = $behavior6;

        return $this;
    }

    public function getBehavior7(): ?string
    {
        return $this->behavior7;
    }

    public function setBehavior7(?string $behavior7): self
    {
        $this->behavior7 = $behavior7;

        return $this;
    }

    public function getBehavior8(): ?string
    {
        return $this->behavior8;
    }

    public function setBehavior8(?string $behavior8): self
    {
        $this->behavior8 = $behavior8;

        return $this;
    }

    public function getBehavior9(): ?string
    {
        return $this->behavior9;
    }

    public function setBehavior9(?string $behavior9): self
    {
        $this->behavior9 = $behavior9;

        return $this;
    }

    public function getBehavior10(): ?string
    {
        return $this->behavior10;
    }

    public function setBehavior10(?string $behavior10): self
    {
        $this->behavior10 = $behavior10;

        return $this;
    }

    public function getBehavior11(): ?string
    {
        return $this->behavior11;
    }

    public function setBehavior11(?string $behavior11): self
    {
        $this->behavior11 = $behavior11;

        return $this;
    }

    public function getBehavior12(): ?string
    {
        return $this->behavior12;
    }

    public function setBehavior12(?string $behavior12): self
    {
        $this->behavior12 = $behavior12;

        return $this;
    }

    public function getBehavior13(): ?string
    {
        return $this->behavior13;
    }

    public function setBehavior13(?string $behavior13): self
    {
        $this->behavior13 = $behavior13;

        return $this;
    }

    public function getBehavior14(): ?string
    {
        return $this->behavior14;
    }

    public function setBehavior14(?string $behavior14): self
    {
        $this->behavior14 = $behavior14;

        return $this;
    }

    public function getBehavior15(): ?string
    {
        return $this->behavior15;
    }

    public function setBehavior15(?string $behavior15): self
    {
        $this->behavior15 = $behavior15;

        return $this;
    }

    public function getBehavior16(): ?string
    {
        return $this->behavior16;
    }

    public function setBehavior16(?string $behavior16): self
    {
        $this->behavior16 = $behavior16;

        return $this;
    }

    public function getBehavior17(): ?string
    {
        return $this->behavior17;
    }

    public function setBehavior17(?string $behavior17): self
    {
        $this->behavior17 = $behavior17;

        return $this;
    }

    public function getBehavior18(): ?string
    {
        return $this->behavior18;
    }

    public function setBehavior18(?string $behavior18): self
    {
        $this->behavior18 = $behavior18;

        return $this;
    }

    public function getBehavior19(): ?string
    {
        return $this->behavior19;
    }

    public function setBehavior19(?string $behavior19): self
    {
        $this->behavior19 = $behavior19;

        return $this;
    }

    public function getBehavior20(): ?string
    {
        return $this->behavior20;
    }

    public function setBehavior20(?string $behavior20): self
    {
        $this->behavior20 = $behavior20;

        return $this;
    }

    public function getBehavior21(): ?string
    {
        return $this->behavior21;
    }

    public function setBehavior21(?string $behavior21): self
    {
        $this->behavior21 = $behavior21;

        return $this;
    }

    public function getBehavior22(): ?string
    {
        return $this->behavior22;
    }

    public function setBehavior22(?string $behavior22): self
    {
        $this->behavior22 = $behavior22;

        return $this;
    }

    public function getBehavior23(): ?string
    {
        return $this->behavior23;
    }

    public function setBehavior23(?string $behavior23): self
    {
        $this->behavior23 = $behavior23;

        return $this;
    }

    public function getBehavior24(): ?string
    {
        return $this->behavior24;
    }

    public function setBehavior24(?string $behavior24): self
    {
        $this->behavior24 = $behavior24;

        return $this;
    }

    public function getBehavior25(): ?string
    {
        return $this->behavior25;
    }

    public function setBehavior25(?string $behavior25): self
    {
        $this->behavior25 = $behavior25;

        return $this;
    }

    public function getBehavior26(): ?string
    {
        return $this->behavior26;
    }

    public function setBehavior26(?string $behavior26): self
    {
        $this->behavior26 = $behavior26;

        return $this;
    }

    public function getBehavior27(): ?string
    {
        return $this->behavior27;
    }

    public function setBehavior27(?string $behavior27): self
    {
        $this->behavior27 = $behavior27;

        return $this;
    }

    public function getBehavior28(): ?string
    {
        return $this->behavior28;
    }

    public function setBehavior28(?string $behavior28): self
    {
        $this->behavior28 = $behavior28;

        return $this;
    }

    public function getBehavior29(): ?string
    {
        return $this->behavior29;
    }

    public function setBehavior29(?string $behavior29): self
    {
        $this->behavior29 = $behavior29;

        return $this;
    }

    public function getBehavior30(): ?string
    {
        return $this->behavior30;
    }

    public function setBehavior30(?string $behavior30): self
    {
        $this->behavior30 = $behavior30;

        return $this;
    }

    public function getBehavior31(): ?string
    {
        return $this->behavior31;
    }

    public function setBehavior31(?string $behavior31): self
    {
        $this->behavior31 = $behavior31;

        return $this;
    }

    public function getBehavior32(): ?string
    {
        return $this->behavior32;
    }

    public function setBehavior32(?string $behavior32): self
    {
        $this->behavior32 = $behavior32;

        return $this;
    }

    public function getBehavior33(): ?string
    {
        return $this->behavior33;
    }

    public function setBehavior33(?string $behavior33): self
    {
        $this->behavior33 = $behavior33;

        return $this;
    }

    public function getBehavior34(): ?string
    {
        return $this->behavior34;
    }

    public function setBehavior34(?string $behavior34): self
    {
        $this->behavior34 = $behavior34;

        return $this;
    }

    public function getBehavior35(): ?string
    {
        return $this->behavior35;
    }

    public function setBehavior35(?string $behavior35): self
    {
        $this->behavior35 = $behavior35;

        return $this;
    }

    public function getBehavior36(): ?string
    {
        return $this->behavior36;
    }

    public function setBehavior36(?string $behavior36): self
    {
        $this->behavior36 = $behavior36;

        return $this;
    }

    public function getBehavior37(): ?string
    {
        return $this->behavior37;
    }

    public function setBehavior37(?string $behavior37): self
    {
        $this->behavior37 = $behavior37;

        return $this;
    }

    public function getBehavior38(): ?string
    {
        return $this->behavior38;
    }

    public function setBehavior38(?string $behavior38): self
    {
        $this->behavior38 = $behavior38;

        return $this;
    }

    public function getBehavior39(): ?string
    {
        return $this->behavior39;
    }

    public function setBehavior39(?string $behavior39): self
    {
        $this->behavior39 = $behavior39;

        return $this;
    }

    public function getBehavior40(): ?string
    {
        return $this->behavior40;
    }

    public function setBehavior40(?string $behavior40): self
    {
        $this->behavior40 = $behavior40;

        return $this;
    }

    public function getBehavior41(): ?string
    {
        return $this->behavior41;
    }

    public function setBehavior41(?string $behavior41): self
    {
        $this->behavior41 = $behavior41;

        return $this;
    }

    public function getBehavior42(): ?string
    {
        return $this->behavior42;
    }

    public function setBehavior42(?string $behavior42): self
    {
        $this->behavior42 = $behavior42;

        return $this;
    }

    public function getBehavior43(): ?string
    {
        return $this->behavior43;
    }

    public function setBehavior43(?string $behavior43): self
    {
        $this->behavior43 = $behavior43;

        return $this;
    }

    public function getBehavior44(): ?string
    {
        return $this->behavior44;
    }

    public function setBehavior44(?string $behavior44): self
    {
        $this->behavior44 = $behavior44;

        return $this;
    }

    public function getBehavior45(): ?string
    {
        return $this->behavior45;
    }

    public function setBehavior45(?string $behavior45): self
    {
        $this->behavior45 = $behavior45;

        return $this;
    }

    public function getBehavior46(): ?string
    {
        return $this->behavior46;
    }

    public function setBehavior46(?string $behavior46): self
    {
        $this->behavior46 = $behavior46;

        return $this;
    }

    public function getBehavior47(): ?string
    {
        return $this->behavior47;
    }

    public function setBehavior47(?string $behavior47): self
    {
        $this->behavior47 = $behavior47;

        return $this;
    }

    public function getBehavior48(): ?string
    {
        return $this->behavior48;
    }

    public function setBehavior48(?string $behavior48): self
    {
        $this->behavior48 = $behavior48;

        return $this;
    }

    public function getBehavior49(): ?string
    {
        return $this->behavior49;
    }

    public function setBehavior49(?string $behavior49): self
    {
        $this->behavior49 = $behavior49;

        return $this;
    }

    public function getBehavior50(): ?string
    {
        return $this->behavior50;
    }

    public function setBehavior50(?string $behavior50): self
    {
        $this->behavior50 = $behavior50;

        return $this;
    }

    public function getBehavior51(): ?string
    {
        return $this->behavior51;
    }

    public function setBehavior51(?string $behavior51): self
    {
        $this->behavior51 = $behavior51;

        return $this;
    }

    public function getBehavior52(): ?string
    {
        return $this->behavior52;
    }

    public function setBehavior52(?string $behavior52): self
    {
        $this->behavior52 = $behavior52;

        return $this;
    }

    public function getBehavior53(): ?string
    {
        return $this->behavior53;
    }

    public function setBehavior53(?string $behavior53): self
    {
        $this->behavior53 = $behavior53;

        return $this;
    }

    public function getBehavior54(): ?string
    {
        return $this->behavior54;
    }

    public function setBehavior54(?string $behavior54): self
    {
        $this->behavior54 = $behavior54;

        return $this;
    }

    public function getBehavior55(): ?string
    {
        return $this->behavior55;
    }

    public function setBehavior55(?string $behavior55): self
    {
        $this->behavior55 = $behavior55;

        return $this;
    }

    public function getBehavior56(): ?string
    {
        return $this->behavior56;
    }

    public function setBehavior56(?string $behavior56): self
    {
        $this->behavior56 = $behavior56;

        return $this;
    }

    public function getBehavior57(): ?string
    {
        return $this->behavior57;
    }

    public function setBehavior57(?string $behavior57): self
    {
        $this->behavior57 = $behavior57;

        return $this;
    }

    public function getBehavior58(): ?string
    {
        return $this->behavior58;
    }

    public function setBehavior58(?string $behavior58): self
    {
        $this->behavior58 = $behavior58;

        return $this;
    }

    public function getBehavior59(): ?string
    {
        return $this->behavior59;
    }

    public function setBehavior59(?string $behavior59): self
    {
        $this->behavior59 = $behavior59;

        return $this;
    }

    public function getBehavior60(): ?string
    {
        return $this->behavior60;
    }

    public function setBehavior60(?string $behavior60): self
    {
        $this->behavior60 = $behavior60;

        return $this;
    }

    public function getBehavior61(): ?string
    {
        return $this->behavior61;
    }

    public function setBehavior61(?string $behavior61): self
    {
        $this->behavior61 = $behavior61;

        return $this;
    }

    public function getBehavior62(): ?string
    {
        return $this->behavior62;
    }

    public function setBehavior62(?string $behavior62): self
    {
        $this->behavior62 = $behavior62;

        return $this;
    }

    public function getBehavior63(): ?string
    {
        return $this->behavior63;
    }

    public function setBehavior63(?string $behavior63): self
    {
        $this->behavior63 = $behavior63;

        return $this;
    }

    public function getVisibleBool0(): ?bool
    {
        return $this->visibleBool0;
    }

    public function setVisibleBool0(?bool $visibleBool0): self
    {
        $this->visibleBool0 = $visibleBool0;

        return $this;
    }

    public function getVisibleBool1(): ?bool
    {
        return $this->visibleBool1;
    }

    public function setVisibleBool1(?bool $visibleBool1): self
    {
        $this->visibleBool1 = $visibleBool1;

        return $this;
    }

    public function getVisibleBool2(): ?bool
    {
        return $this->visibleBool2;
    }

    public function setVisibleBool2(?bool $visibleBool2): self
    {
        $this->visibleBool2 = $visibleBool2;

        return $this;
    }

    public function getVisibleBool3(): ?bool
    {
        return $this->visibleBool3;
    }

    public function setVisibleBool3(?bool $visibleBool3): self
    {
        $this->visibleBool3 = $visibleBool3;

        return $this;
    }

    public function getVisibleBool4(): ?bool
    {
        return $this->visibleBool4;
    }

    public function setVisibleBool4(?bool $visibleBool4): self
    {
        $this->visibleBool4 = $visibleBool4;

        return $this;
    }

    public function getVisibleBool5(): ?bool
    {
        return $this->visibleBool5;
    }

    public function setVisibleBool5(?bool $visibleBool5): self
    {
        $this->visibleBool5 = $visibleBool5;

        return $this;
    }

    public function getVisibleBool6(): ?bool
    {
        return $this->visibleBool6;
    }

    public function setVisibleBool6(?bool $visibleBool6): self
    {
        $this->visibleBool6 = $visibleBool6;

        return $this;
    }

    public function getVisibleBool7(): ?bool
    {
        return $this->visibleBool7;
    }

    public function setVisibleBool7(?bool $visibleBool7): self
    {
        $this->visibleBool7 = $visibleBool7;

        return $this;
    }

    public function getVisibleBool8(): ?bool
    {
        return $this->visibleBool8;
    }

    public function setVisibleBool8(?bool $visibleBool8): self
    {
        $this->visibleBool8 = $visibleBool8;

        return $this;
    }

    public function getVisibleBool9(): ?bool
    {
        return $this->visibleBool9;
    }

    public function setVisibleBool9(?bool $visibleBool9): self
    {
        $this->visibleBool9 = $visibleBool9;

        return $this;
    }

    public function getVisibleBool10(): ?bool
    {
        return $this->visibleBool10;
    }

    public function setVisibleBool10(?bool $visibleBool10): self
    {
        $this->visibleBool10 = $visibleBool10;

        return $this;
    }

    public function getVisibleBool11(): ?bool
    {
        return $this->visibleBool11;
    }

    public function setVisibleBool11(?bool $visibleBool11): self
    {
        $this->visibleBool11 = $visibleBool11;

        return $this;
    }

    public function getVisibleBool12(): ?bool
    {
        return $this->visibleBool12;
    }

    public function setVisibleBool12(?bool $visibleBool12): self
    {
        $this->visibleBool12 = $visibleBool12;

        return $this;
    }

    public function getVisibleBool13(): ?bool
    {
        return $this->visibleBool13;
    }

    public function setVisibleBool13(?bool $visibleBool13): self
    {
        $this->visibleBool13 = $visibleBool13;

        return $this;
    }

    public function getVisibleBool14(): ?bool
    {
        return $this->visibleBool14;
    }

    public function setVisibleBool14(?bool $visibleBool14): self
    {
        $this->visibleBool14 = $visibleBool14;

        return $this;
    }

    public function getVisibleBool15(): ?bool
    {
        return $this->visibleBool15;
    }

    public function setVisibleBool15(?bool $visibleBool15): self
    {
        $this->visibleBool15 = $visibleBool15;

        return $this;
    }

    public function getVisibleBool16(): ?bool
    {
        return $this->visibleBool16;
    }

    public function setVisibleBool16(?bool $visibleBool16): self
    {
        $this->visibleBool16 = $visibleBool16;

        return $this;
    }

    public function getVisibleBool17(): ?bool
    {
        return $this->visibleBool17;
    }

    public function setVisibleBool17(?bool $visibleBool17): self
    {
        $this->visibleBool17 = $visibleBool17;

        return $this;
    }

    public function getVisibleBool18(): ?bool
    {
        return $this->visibleBool18;
    }

    public function setVisibleBool18(?bool $visibleBool18): self
    {
        $this->visibleBool18 = $visibleBool18;

        return $this;
    }

    public function getVisibleBool19(): ?bool
    {
        return $this->visibleBool19;
    }

    public function setVisibleBool19(?bool $visibleBool19): self
    {
        $this->visibleBool19 = $visibleBool19;

        return $this;
    }

    public function getVisibleBool20(): ?bool
    {
        return $this->visibleBool20;
    }

    public function setVisibleBool20(?bool $visibleBool20): self
    {
        $this->visibleBool20 = $visibleBool20;

        return $this;
    }

    public function getVisibleBool21(): ?bool
    {
        return $this->visibleBool21;
    }

    public function setVisibleBool21(?bool $visibleBool21): self
    {
        $this->visibleBool21 = $visibleBool21;

        return $this;
    }

    public function getVisibleBool22(): ?bool
    {
        return $this->visibleBool22;
    }

    public function setVisibleBool22(?bool $visibleBool22): self
    {
        $this->visibleBool22 = $visibleBool22;

        return $this;
    }

    public function getVisibleBool23(): ?bool
    {
        return $this->visibleBool23;
    }

    public function setVisibleBool23(?bool $visibleBool23): self
    {
        $this->visibleBool23 = $visibleBool23;

        return $this;
    }

    public function getVisibleBool24(): ?bool
    {
        return $this->visibleBool24;
    }

    public function setVisibleBool24(?bool $visibleBool24): self
    {
        $this->visibleBool24 = $visibleBool24;

        return $this;
    }

    public function getVisibleBool25(): ?bool
    {
        return $this->visibleBool25;
    }

    public function setVisibleBool25(?bool $visibleBool25): self
    {
        $this->visibleBool25 = $visibleBool25;

        return $this;
    }

    public function getVisibleBool26(): ?bool
    {
        return $this->visibleBool26;
    }

    public function setVisibleBool26(?bool $visibleBool26): self
    {
        $this->visibleBool26 = $visibleBool26;

        return $this;
    }

    public function getVisibleBool27(): ?bool
    {
        return $this->visibleBool27;
    }

    public function setVisibleBool27(?bool $visibleBool27): self
    {
        $this->visibleBool27 = $visibleBool27;

        return $this;
    }

    public function getVisibleBool28(): ?bool
    {
        return $this->visibleBool28;
    }

    public function setVisibleBool28(?bool $visibleBool28): self
    {
        $this->visibleBool28 = $visibleBool28;

        return $this;
    }

    public function getVisibleBool29(): ?bool
    {
        return $this->visibleBool29;
    }

    public function setVisibleBool29(?bool $visibleBool29): self
    {
        $this->visibleBool29 = $visibleBool29;

        return $this;
    }

    public function getVisibleBool30(): ?bool
    {
        return $this->visibleBool30;
    }

    public function setVisibleBool30(?bool $visibleBool30): self
    {
        $this->visibleBool30 = $visibleBool30;

        return $this;
    }

    public function getVisibleBool31(): ?bool
    {
        return $this->visibleBool31;
    }

    public function setVisibleBool31(?bool $visibleBool31): self
    {
        $this->visibleBool31 = $visibleBool31;

        return $this;
    }

    public function getVisibleBool32(): ?bool
    {
        return $this->visibleBool32;
    }

    public function setVisibleBool32(?bool $visibleBool32): self
    {
        $this->visibleBool32 = $visibleBool32;

        return $this;
    }

    public function getVisibleBool33(): ?bool
    {
        return $this->visibleBool33;
    }

    public function setVisibleBool33(?bool $visibleBool33): self
    {
        $this->visibleBool33 = $visibleBool33;

        return $this;
    }

    public function getVisibleBool34(): ?bool
    {
        return $this->visibleBool34;
    }

    public function setVisibleBool34(?bool $visibleBool34): self
    {
        $this->visibleBool34 = $visibleBool34;

        return $this;
    }

    public function getVisibleBool35(): ?bool
    {
        return $this->visibleBool35;
    }

    public function setVisibleBool35(?bool $visibleBool35): self
    {
        $this->visibleBool35 = $visibleBool35;

        return $this;
    }

    public function getVisibleBool36(): ?bool
    {
        return $this->visibleBool36;
    }

    public function setVisibleBool36(?bool $visibleBool36): self
    {
        $this->visibleBool36 = $visibleBool36;

        return $this;
    }

    public function getVisibleBool37(): ?bool
    {
        return $this->visibleBool37;
    }

    public function setVisibleBool37(?bool $visibleBool37): self
    {
        $this->visibleBool37 = $visibleBool37;

        return $this;
    }

    public function getVisibleBool38(): ?bool
    {
        return $this->visibleBool38;
    }

    public function setVisibleBool38(?bool $visibleBool38): self
    {
        $this->visibleBool38 = $visibleBool38;

        return $this;
    }

    public function getVisibleBool39(): ?bool
    {
        return $this->visibleBool39;
    }

    public function setVisibleBool39(?bool $visibleBool39): self
    {
        $this->visibleBool39 = $visibleBool39;

        return $this;
    }

    public function getVisibleBool40(): ?bool
    {
        return $this->visibleBool40;
    }

    public function setVisibleBool40(?bool $visibleBool40): self
    {
        $this->visibleBool40 = $visibleBool40;

        return $this;
    }

    public function getVisibleBool41(): ?bool
    {
        return $this->visibleBool41;
    }

    public function setVisibleBool41(?bool $visibleBool41): self
    {
        $this->visibleBool41 = $visibleBool41;

        return $this;
    }

    public function getVisibleBool42(): ?bool
    {
        return $this->visibleBool42;
    }

    public function setVisibleBool42(?bool $visibleBool42): self
    {
        $this->visibleBool42 = $visibleBool42;

        return $this;
    }

    public function getVisibleBool43(): ?bool
    {
        return $this->visibleBool43;
    }

    public function setVisibleBool43(?bool $visibleBool43): self
    {
        $this->visibleBool43 = $visibleBool43;

        return $this;
    }

    public function getVisibleBool44(): ?bool
    {
        return $this->visibleBool44;
    }

    public function setVisibleBool44(?bool $visibleBool44): self
    {
        $this->visibleBool44 = $visibleBool44;

        return $this;
    }

    public function getVisibleBool45(): ?bool
    {
        return $this->visibleBool45;
    }

    public function setVisibleBool45(?bool $visibleBool45): self
    {
        $this->visibleBool45 = $visibleBool45;

        return $this;
    }

    public function getVisibleBool46(): ?bool
    {
        return $this->visibleBool46;
    }

    public function setVisibleBool46(?bool $visibleBool46): self
    {
        $this->visibleBool46 = $visibleBool46;

        return $this;
    }

    public function getVisibleBool47(): ?bool
    {
        return $this->visibleBool47;
    }

    public function setVisibleBool47(?bool $visibleBool47): self
    {
        $this->visibleBool47 = $visibleBool47;

        return $this;
    }

    public function getVisibleBool48(): ?bool
    {
        return $this->visibleBool48;
    }

    public function setVisibleBool48(?bool $visibleBool48): self
    {
        $this->visibleBool48 = $visibleBool48;

        return $this;
    }

    public function getVisibleBool49(): ?bool
    {
        return $this->visibleBool49;
    }

    public function setVisibleBool49(?bool $visibleBool49): self
    {
        $this->visibleBool49 = $visibleBool49;

        return $this;
    }

    public function getVisibleBool50(): ?bool
    {
        return $this->visibleBool50;
    }

    public function setVisibleBool50(?bool $visibleBool50): self
    {
        $this->visibleBool50 = $visibleBool50;

        return $this;
    }

    public function getVisibleBool51(): ?bool
    {
        return $this->visibleBool51;
    }

    public function setVisibleBool51(?bool $visibleBool51): self
    {
        $this->visibleBool51 = $visibleBool51;

        return $this;
    }

    public function getVisibleBool52(): ?bool
    {
        return $this->visibleBool52;
    }

    public function setVisibleBool52(?bool $visibleBool52): self
    {
        $this->visibleBool52 = $visibleBool52;

        return $this;
    }

    public function getVisibleBool53(): ?bool
    {
        return $this->visibleBool53;
    }

    public function setVisibleBool53(?bool $visibleBool53): self
    {
        $this->visibleBool53 = $visibleBool53;

        return $this;
    }

    public function getVisibleBool54(): ?bool
    {
        return $this->visibleBool54;
    }

    public function setVisibleBool54(?bool $visibleBool54): self
    {
        $this->visibleBool54 = $visibleBool54;

        return $this;
    }

    public function getVisibleBool55(): ?bool
    {
        return $this->visibleBool55;
    }

    public function setVisibleBool55(?bool $visibleBool55): self
    {
        $this->visibleBool55 = $visibleBool55;

        return $this;
    }

    public function getVisibleBool56(): ?bool
    {
        return $this->visibleBool56;
    }

    public function setVisibleBool56(?bool $visibleBool56): self
    {
        $this->visibleBool56 = $visibleBool56;

        return $this;
    }

    public function getVisibleBool57(): ?bool
    {
        return $this->visibleBool57;
    }

    public function setVisibleBool57(?bool $visibleBool57): self
    {
        $this->visibleBool57 = $visibleBool57;

        return $this;
    }

    public function getVisibleBool58(): ?bool
    {
        return $this->visibleBool58;
    }

    public function setVisibleBool58(?bool $visibleBool58): self
    {
        $this->visibleBool58 = $visibleBool58;

        return $this;
    }

    public function getVisibleBool59(): ?bool
    {
        return $this->visibleBool59;
    }

    public function setVisibleBool59(?bool $visibleBool59): self
    {
        $this->visibleBool59 = $visibleBool59;

        return $this;
    }

    public function getVisibleBool60(): ?bool
    {
        return $this->visibleBool60;
    }

    public function setVisibleBool60(?bool $visibleBool60): self
    {
        $this->visibleBool60 = $visibleBool60;

        return $this;
    }

    public function getVisibleBool61(): ?bool
    {
        return $this->visibleBool61;
    }

    public function setVisibleBool61(?bool $visibleBool61): self
    {
        $this->visibleBool61 = $visibleBool61;

        return $this;
    }

    public function getVisibleBool62(): ?bool
    {
        return $this->visibleBool62;
    }

    public function setVisibleBool62(?bool $visibleBool62): self
    {
        $this->visibleBool62 = $visibleBool62;

        return $this;
    }

    public function getVisibleBool63(): ?bool
    {
        return $this->visibleBool63;
    }

    public function setVisibleBool63(?bool $visibleBool63): self
    {
        $this->visibleBool63 = $visibleBool63;

        return $this;
    }

    public function getConditionBool0(): ?bool
    {
        return $this->conditionBool0;
    }

    public function setConditionBool0(?bool $conditionBool0): self
    {
        $this->conditionBool0 = $conditionBool0;

        return $this;
    }

    public function getConditionBool1(): ?bool
    {
        return $this->conditionBool1;
    }

    public function setConditionBool1(?bool $conditionBool1): self
    {
        $this->conditionBool1 = $conditionBool1;

        return $this;
    }

    public function getConditionBool2(): ?bool
    {
        return $this->conditionBool2;
    }

    public function setConditionBool2(?bool $conditionBool2): self
    {
        $this->conditionBool2 = $conditionBool2;

        return $this;
    }

    public function getConditionBool3(): ?bool
    {
        return $this->conditionBool3;
    }

    public function setConditionBool3(?bool $conditionBool3): self
    {
        $this->conditionBool3 = $conditionBool3;

        return $this;
    }

    public function getConditionBool4(): ?bool
    {
        return $this->conditionBool4;
    }

    public function setConditionBool4(?bool $conditionBool4): self
    {
        $this->conditionBool4 = $conditionBool4;

        return $this;
    }

    public function getConditionBool5(): ?bool
    {
        return $this->conditionBool5;
    }

    public function setConditionBool5(?bool $conditionBool5): self
    {
        $this->conditionBool5 = $conditionBool5;

        return $this;
    }

    public function getConditionBool6(): ?bool
    {
        return $this->conditionBool6;
    }

    public function setConditionBool6(?bool $conditionBool6): self
    {
        $this->conditionBool6 = $conditionBool6;

        return $this;
    }

    public function getConditionBool7(): ?bool
    {
        return $this->conditionBool7;
    }

    public function setConditionBool7(?bool $conditionBool7): self
    {
        $this->conditionBool7 = $conditionBool7;

        return $this;
    }

    public function getConditionBool8(): ?bool
    {
        return $this->conditionBool8;
    }

    public function setConditionBool8(?bool $conditionBool8): self
    {
        $this->conditionBool8 = $conditionBool8;

        return $this;
    }

    public function getConditionBool9(): ?bool
    {
        return $this->conditionBool9;
    }

    public function setConditionBool9(?bool $conditionBool9): self
    {
        $this->conditionBool9 = $conditionBool9;

        return $this;
    }

    public function getConditionBool10(): ?bool
    {
        return $this->conditionBool10;
    }

    public function setConditionBool10(?bool $conditionBool10): self
    {
        $this->conditionBool10 = $conditionBool10;

        return $this;
    }

    public function getConditionBool11(): ?bool
    {
        return $this->conditionBool11;
    }

    public function setConditionBool11(?bool $conditionBool11): self
    {
        $this->conditionBool11 = $conditionBool11;

        return $this;
    }

    public function getConditionBool12(): ?bool
    {
        return $this->conditionBool12;
    }

    public function setConditionBool12(?bool $conditionBool12): self
    {
        $this->conditionBool12 = $conditionBool12;

        return $this;
    }

    public function getConditionBool13(): ?bool
    {
        return $this->conditionBool13;
    }

    public function setConditionBool13(?bool $conditionBool13): self
    {
        $this->conditionBool13 = $conditionBool13;

        return $this;
    }

    public function getConditionBool14(): ?bool
    {
        return $this->conditionBool14;
    }

    public function setConditionBool14(?bool $conditionBool14): self
    {
        $this->conditionBool14 = $conditionBool14;

        return $this;
    }

    public function getConditionBool15(): ?bool
    {
        return $this->conditionBool15;
    }

    public function setConditionBool15(?bool $conditionBool15): self
    {
        $this->conditionBool15 = $conditionBool15;

        return $this;
    }

    public function getConditionBool16(): ?bool
    {
        return $this->conditionBool16;
    }

    public function setConditionBool16(?bool $conditionBool16): self
    {
        $this->conditionBool16 = $conditionBool16;

        return $this;
    }

    public function getConditionBool17(): ?bool
    {
        return $this->conditionBool17;
    }

    public function setConditionBool17(?bool $conditionBool17): self
    {
        $this->conditionBool17 = $conditionBool17;

        return $this;
    }

    public function getConditionBool18(): ?bool
    {
        return $this->conditionBool18;
    }

    public function setConditionBool18(?bool $conditionBool18): self
    {
        $this->conditionBool18 = $conditionBool18;

        return $this;
    }

    public function getConditionBool19(): ?bool
    {
        return $this->conditionBool19;
    }

    public function setConditionBool19(?bool $conditionBool19): self
    {
        $this->conditionBool19 = $conditionBool19;

        return $this;
    }

    public function getConditionBool20(): ?bool
    {
        return $this->conditionBool20;
    }

    public function setConditionBool20(?bool $conditionBool20): self
    {
        $this->conditionBool20 = $conditionBool20;

        return $this;
    }

    public function getConditionBool21(): ?bool
    {
        return $this->conditionBool21;
    }

    public function setConditionBool21(?bool $conditionBool21): self
    {
        $this->conditionBool21 = $conditionBool21;

        return $this;
    }

    public function getConditionBool22(): ?bool
    {
        return $this->conditionBool22;
    }

    public function setConditionBool22(?bool $conditionBool22): self
    {
        $this->conditionBool22 = $conditionBool22;

        return $this;
    }

    public function getConditionBool23(): ?bool
    {
        return $this->conditionBool23;
    }

    public function setConditionBool23(?bool $conditionBool23): self
    {
        $this->conditionBool23 = $conditionBool23;

        return $this;
    }

    public function getConditionBool24(): ?bool
    {
        return $this->conditionBool24;
    }

    public function setConditionBool24(?bool $conditionBool24): self
    {
        $this->conditionBool24 = $conditionBool24;

        return $this;
    }

    public function getConditionBool25(): ?bool
    {
        return $this->conditionBool25;
    }

    public function setConditionBool25(?bool $conditionBool25): self
    {
        $this->conditionBool25 = $conditionBool25;

        return $this;
    }

    public function getConditionBool26(): ?bool
    {
        return $this->conditionBool26;
    }

    public function setConditionBool26(?bool $conditionBool26): self
    {
        $this->conditionBool26 = $conditionBool26;

        return $this;
    }

    public function getConditionBool27(): ?bool
    {
        return $this->conditionBool27;
    }

    public function setConditionBool27(?bool $conditionBool27): self
    {
        $this->conditionBool27 = $conditionBool27;

        return $this;
    }

    public function getConditionBool28(): ?bool
    {
        return $this->conditionBool28;
    }

    public function setConditionBool28(?bool $conditionBool28): self
    {
        $this->conditionBool28 = $conditionBool28;

        return $this;
    }

    public function getConditionBool29(): ?bool
    {
        return $this->conditionBool29;
    }

    public function setConditionBool29(?bool $conditionBool29): self
    {
        $this->conditionBool29 = $conditionBool29;

        return $this;
    }

    public function getConditionBool30(): ?bool
    {
        return $this->conditionBool30;
    }

    public function setConditionBool30(?bool $conditionBool30): self
    {
        $this->conditionBool30 = $conditionBool30;

        return $this;
    }

    public function getConditionBool31(): ?bool
    {
        return $this->conditionBool31;
    }

    public function setConditionBool31(?bool $conditionBool31): self
    {
        $this->conditionBool31 = $conditionBool31;

        return $this;
    }

    public function getConditionBool32(): ?bool
    {
        return $this->conditionBool32;
    }

    public function setConditionBool32(?bool $conditionBool32): self
    {
        $this->conditionBool32 = $conditionBool32;

        return $this;
    }

    public function getConditionBool33(): ?bool
    {
        return $this->conditionBool33;
    }

    public function setConditionBool33(?bool $conditionBool33): self
    {
        $this->conditionBool33 = $conditionBool33;

        return $this;
    }

    public function getConditionBool34(): ?bool
    {
        return $this->conditionBool34;
    }

    public function setConditionBool34(?bool $conditionBool34): self
    {
        $this->conditionBool34 = $conditionBool34;

        return $this;
    }

    public function getConditionBool35(): ?bool
    {
        return $this->conditionBool35;
    }

    public function setConditionBool35(?bool $conditionBool35): self
    {
        $this->conditionBool35 = $conditionBool35;

        return $this;
    }

    public function getConditionBool36(): ?bool
    {
        return $this->conditionBool36;
    }

    public function setConditionBool36(?bool $conditionBool36): self
    {
        $this->conditionBool36 = $conditionBool36;

        return $this;
    }

    public function getConditionBool37(): ?bool
    {
        return $this->conditionBool37;
    }

    public function setConditionBool37(?bool $conditionBool37): self
    {
        $this->conditionBool37 = $conditionBool37;

        return $this;
    }

    public function getConditionBool38(): ?bool
    {
        return $this->conditionBool38;
    }

    public function setConditionBool38(?bool $conditionBool38): self
    {
        $this->conditionBool38 = $conditionBool38;

        return $this;
    }

    public function getConditionBool39(): ?bool
    {
        return $this->conditionBool39;
    }

    public function setConditionBool39(?bool $conditionBool39): self
    {
        $this->conditionBool39 = $conditionBool39;

        return $this;
    }

    public function getConditionBool40(): ?bool
    {
        return $this->conditionBool40;
    }

    public function setConditionBool40(?bool $conditionBool40): self
    {
        $this->conditionBool40 = $conditionBool40;

        return $this;
    }

    public function getConditionBool41(): ?bool
    {
        return $this->conditionBool41;
    }

    public function setConditionBool41(?bool $conditionBool41): self
    {
        $this->conditionBool41 = $conditionBool41;

        return $this;
    }

    public function getConditionBool42(): ?bool
    {
        return $this->conditionBool42;
    }

    public function setConditionBool42(?bool $conditionBool42): self
    {
        $this->conditionBool42 = $conditionBool42;

        return $this;
    }

    public function getConditionBool43(): ?bool
    {
        return $this->conditionBool43;
    }

    public function setConditionBool43(?bool $conditionBool43): self
    {
        $this->conditionBool43 = $conditionBool43;

        return $this;
    }

    public function getConditionBool44(): ?bool
    {
        return $this->conditionBool44;
    }

    public function setConditionBool44(?bool $conditionBool44): self
    {
        $this->conditionBool44 = $conditionBool44;

        return $this;
    }

    public function getConditionBool45(): ?bool
    {
        return $this->conditionBool45;
    }

    public function setConditionBool45(?bool $conditionBool45): self
    {
        $this->conditionBool45 = $conditionBool45;

        return $this;
    }

    public function getConditionBool46(): ?bool
    {
        return $this->conditionBool46;
    }

    public function setConditionBool46(?bool $conditionBool46): self
    {
        $this->conditionBool46 = $conditionBool46;

        return $this;
    }

    public function getConditionBool47(): ?bool
    {
        return $this->conditionBool47;
    }

    public function setConditionBool47(?bool $conditionBool47): self
    {
        $this->conditionBool47 = $conditionBool47;

        return $this;
    }

    public function getConditionBool48(): ?bool
    {
        return $this->conditionBool48;
    }

    public function setConditionBool48(?bool $conditionBool48): self
    {
        $this->conditionBool48 = $conditionBool48;

        return $this;
    }

    public function getConditionBool49(): ?bool
    {
        return $this->conditionBool49;
    }

    public function setConditionBool49(?bool $conditionBool49): self
    {
        $this->conditionBool49 = $conditionBool49;

        return $this;
    }

    public function getConditionBool50(): ?bool
    {
        return $this->conditionBool50;
    }

    public function setConditionBool50(?bool $conditionBool50): self
    {
        $this->conditionBool50 = $conditionBool50;

        return $this;
    }

    public function getConditionBool51(): ?bool
    {
        return $this->conditionBool51;
    }

    public function setConditionBool51(?bool $conditionBool51): self
    {
        $this->conditionBool51 = $conditionBool51;

        return $this;
    }

    public function getConditionBool52(): ?bool
    {
        return $this->conditionBool52;
    }

    public function setConditionBool52(?bool $conditionBool52): self
    {
        $this->conditionBool52 = $conditionBool52;

        return $this;
    }

    public function getConditionBool53(): ?bool
    {
        return $this->conditionBool53;
    }

    public function setConditionBool53(?bool $conditionBool53): self
    {
        $this->conditionBool53 = $conditionBool53;

        return $this;
    }

    public function getConditionBool54(): ?bool
    {
        return $this->conditionBool54;
    }

    public function setConditionBool54(?bool $conditionBool54): self
    {
        $this->conditionBool54 = $conditionBool54;

        return $this;
    }

    public function getConditionBool55(): ?bool
    {
        return $this->conditionBool55;
    }

    public function setConditionBool55(?bool $conditionBool55): self
    {
        $this->conditionBool55 = $conditionBool55;

        return $this;
    }

    public function getConditionBool56(): ?bool
    {
        return $this->conditionBool56;
    }

    public function setConditionBool56(?bool $conditionBool56): self
    {
        $this->conditionBool56 = $conditionBool56;

        return $this;
    }

    public function getConditionBool57(): ?bool
    {
        return $this->conditionBool57;
    }

    public function setConditionBool57(?bool $conditionBool57): self
    {
        $this->conditionBool57 = $conditionBool57;

        return $this;
    }

    public function getConditionBool58(): ?bool
    {
        return $this->conditionBool58;
    }

    public function setConditionBool58(?bool $conditionBool58): self
    {
        $this->conditionBool58 = $conditionBool58;

        return $this;
    }

    public function getConditionBool59(): ?bool
    {
        return $this->conditionBool59;
    }

    public function setConditionBool59(?bool $conditionBool59): self
    {
        $this->conditionBool59 = $conditionBool59;

        return $this;
    }

    public function getConditionBool60(): ?bool
    {
        return $this->conditionBool60;
    }

    public function setConditionBool60(?bool $conditionBool60): self
    {
        $this->conditionBool60 = $conditionBool60;

        return $this;
    }

    public function getConditionBool61(): ?bool
    {
        return $this->conditionBool61;
    }

    public function setConditionBool61(?bool $conditionBool61): self
    {
        $this->conditionBool61 = $conditionBool61;

        return $this;
    }

    public function getConditionBool62(): ?bool
    {
        return $this->conditionBool62;
    }

    public function setConditionBool62(?bool $conditionBool62): self
    {
        $this->conditionBool62 = $conditionBool62;

        return $this;
    }

    public function getConditionBool63(): ?bool
    {
        return $this->conditionBool63;
    }

    public function setConditionBool63(?bool $conditionBool63): self
    {
        $this->conditionBool63 = $conditionBool63;

        return $this;
    }

    public function getItemBool0(): ?bool
    {
        return $this->itemBool0;
    }

    public function setItemBool0(?bool $itemBool0): self
    {
        $this->itemBool0 = $itemBool0;

        return $this;
    }

    public function getItemBool1(): ?bool
    {
        return $this->itemBool1;
    }

    public function setItemBool1(?bool $itemBool1): self
    {
        $this->itemBool1 = $itemBool1;

        return $this;
    }

    public function getItemBool2(): ?bool
    {
        return $this->itemBool2;
    }

    public function setItemBool2(?bool $itemBool2): self
    {
        $this->itemBool2 = $itemBool2;

        return $this;
    }

    public function getItemBool3(): ?bool
    {
        return $this->itemBool3;
    }

    public function setItemBool3(?bool $itemBool3): self
    {
        $this->itemBool3 = $itemBool3;

        return $this;
    }

    public function getItemBool4(): ?bool
    {
        return $this->itemBool4;
    }

    public function setItemBool4(?bool $itemBool4): self
    {
        $this->itemBool4 = $itemBool4;

        return $this;
    }

    public function getItemBool5(): ?bool
    {
        return $this->itemBool5;
    }

    public function setItemBool5(?bool $itemBool5): self
    {
        $this->itemBool5 = $itemBool5;

        return $this;
    }

    public function getItemBool6(): ?bool
    {
        return $this->itemBool6;
    }

    public function setItemBool6(?bool $itemBool6): self
    {
        $this->itemBool6 = $itemBool6;

        return $this;
    }

    public function getItemBool7(): ?bool
    {
        return $this->itemBool7;
    }

    public function setItemBool7(?bool $itemBool7): self
    {
        $this->itemBool7 = $itemBool7;

        return $this;
    }

    public function getItemBool8(): ?bool
    {
        return $this->itemBool8;
    }

    public function setItemBool8(?bool $itemBool8): self
    {
        $this->itemBool8 = $itemBool8;

        return $this;
    }

    public function getItemBool9(): ?bool
    {
        return $this->itemBool9;
    }

    public function setItemBool9(?bool $itemBool9): self
    {
        $this->itemBool9 = $itemBool9;

        return $this;
    }

    public function getItemBool10(): ?bool
    {
        return $this->itemBool10;
    }

    public function setItemBool10(?bool $itemBool10): self
    {
        $this->itemBool10 = $itemBool10;

        return $this;
    }

    public function getItemBool11(): ?bool
    {
        return $this->itemBool11;
    }

    public function setItemBool11(?bool $itemBool11): self
    {
        $this->itemBool11 = $itemBool11;

        return $this;
    }

    public function getItemBool12(): ?bool
    {
        return $this->itemBool12;
    }

    public function setItemBool12(?bool $itemBool12): self
    {
        $this->itemBool12 = $itemBool12;

        return $this;
    }

    public function getItemBool13(): ?bool
    {
        return $this->itemBool13;
    }

    public function setItemBool13(?bool $itemBool13): self
    {
        $this->itemBool13 = $itemBool13;

        return $this;
    }

    public function getItemBool14(): ?bool
    {
        return $this->itemBool14;
    }

    public function setItemBool14(?bool $itemBool14): self
    {
        $this->itemBool14 = $itemBool14;

        return $this;
    }

    public function getItemBool15(): ?bool
    {
        return $this->itemBool15;
    }

    public function setItemBool15(?bool $itemBool15): self
    {
        $this->itemBool15 = $itemBool15;

        return $this;
    }

    public function getItemBool16(): ?bool
    {
        return $this->itemBool16;
    }

    public function setItemBool16(?bool $itemBool16): self
    {
        $this->itemBool16 = $itemBool16;

        return $this;
    }

    public function getItemBool17(): ?bool
    {
        return $this->itemBool17;
    }

    public function setItemBool17(?bool $itemBool17): self
    {
        $this->itemBool17 = $itemBool17;

        return $this;
    }

    public function getItemBool18(): ?bool
    {
        return $this->itemBool18;
    }

    public function setItemBool18(?bool $itemBool18): self
    {
        $this->itemBool18 = $itemBool18;

        return $this;
    }

    public function getItemBool19(): ?bool
    {
        return $this->itemBool19;
    }

    public function setItemBool19(?bool $itemBool19): self
    {
        $this->itemBool19 = $itemBool19;

        return $this;
    }

    public function getItemBool20(): ?bool
    {
        return $this->itemBool20;
    }

    public function setItemBool20(?bool $itemBool20): self
    {
        $this->itemBool20 = $itemBool20;

        return $this;
    }

    public function getItemBool21(): ?bool
    {
        return $this->itemBool21;
    }

    public function setItemBool21(?bool $itemBool21): self
    {
        $this->itemBool21 = $itemBool21;

        return $this;
    }

    public function getItemBool22(): ?bool
    {
        return $this->itemBool22;
    }

    public function setItemBool22(?bool $itemBool22): self
    {
        $this->itemBool22 = $itemBool22;

        return $this;
    }

    public function getItemBool23(): ?bool
    {
        return $this->itemBool23;
    }

    public function setItemBool23(?bool $itemBool23): self
    {
        $this->itemBool23 = $itemBool23;

        return $this;
    }

    public function getItemBool24(): ?bool
    {
        return $this->itemBool24;
    }

    public function setItemBool24(?bool $itemBool24): self
    {
        $this->itemBool24 = $itemBool24;

        return $this;
    }

    public function getItemBool25(): ?bool
    {
        return $this->itemBool25;
    }

    public function setItemBool25(?bool $itemBool25): self
    {
        $this->itemBool25 = $itemBool25;

        return $this;
    }

    public function getItemBool26(): ?bool
    {
        return $this->itemBool26;
    }

    public function setItemBool26(?bool $itemBool26): self
    {
        $this->itemBool26 = $itemBool26;

        return $this;
    }

    public function getItemBool27(): ?bool
    {
        return $this->itemBool27;
    }

    public function setItemBool27(?bool $itemBool27): self
    {
        $this->itemBool27 = $itemBool27;

        return $this;
    }

    public function getItemBool28(): ?bool
    {
        return $this->itemBool28;
    }

    public function setItemBool28(?bool $itemBool28): self
    {
        $this->itemBool28 = $itemBool28;

        return $this;
    }

    public function getItemBool29(): ?bool
    {
        return $this->itemBool29;
    }

    public function setItemBool29(?bool $itemBool29): self
    {
        $this->itemBool29 = $itemBool29;

        return $this;
    }

    public function getItemBool30(): ?bool
    {
        return $this->itemBool30;
    }

    public function setItemBool30(?bool $itemBool30): self
    {
        $this->itemBool30 = $itemBool30;

        return $this;
    }

    public function getItemBool31(): ?bool
    {
        return $this->itemBool31;
    }

    public function setItemBool31(?bool $itemBool31): self
    {
        $this->itemBool31 = $itemBool31;

        return $this;
    }

    public function getItemBool32(): ?bool
    {
        return $this->itemBool32;
    }

    public function setItemBool32(?bool $itemBool32): self
    {
        $this->itemBool32 = $itemBool32;

        return $this;
    }

    public function getItemBool33(): ?bool
    {
        return $this->itemBool33;
    }

    public function setItemBool33(?bool $itemBool33): self
    {
        $this->itemBool33 = $itemBool33;

        return $this;
    }

    public function getItemBool34(): ?bool
    {
        return $this->itemBool34;
    }

    public function setItemBool34(?bool $itemBool34): self
    {
        $this->itemBool34 = $itemBool34;

        return $this;
    }

    public function getItemBool35(): ?bool
    {
        return $this->itemBool35;
    }

    public function setItemBool35(?bool $itemBool35): self
    {
        $this->itemBool35 = $itemBool35;

        return $this;
    }

    public function getItemBool36(): ?bool
    {
        return $this->itemBool36;
    }

    public function setItemBool36(?bool $itemBool36): self
    {
        $this->itemBool36 = $itemBool36;

        return $this;
    }

    public function getItemBool37(): ?bool
    {
        return $this->itemBool37;
    }

    public function setItemBool37(?bool $itemBool37): self
    {
        $this->itemBool37 = $itemBool37;

        return $this;
    }

    public function getItemBool38(): ?bool
    {
        return $this->itemBool38;
    }

    public function setItemBool38(?bool $itemBool38): self
    {
        $this->itemBool38 = $itemBool38;

        return $this;
    }

    public function getItemBool39(): ?bool
    {
        return $this->itemBool39;
    }

    public function setItemBool39(?bool $itemBool39): self
    {
        $this->itemBool39 = $itemBool39;

        return $this;
    }

    public function getItemBool40(): ?bool
    {
        return $this->itemBool40;
    }

    public function setItemBool40(?bool $itemBool40): self
    {
        $this->itemBool40 = $itemBool40;

        return $this;
    }

    public function getItemBool41(): ?bool
    {
        return $this->itemBool41;
    }

    public function setItemBool41(?bool $itemBool41): self
    {
        $this->itemBool41 = $itemBool41;

        return $this;
    }

    public function getItemBool42(): ?bool
    {
        return $this->itemBool42;
    }

    public function setItemBool42(?bool $itemBool42): self
    {
        $this->itemBool42 = $itemBool42;

        return $this;
    }

    public function getItemBool43(): ?bool
    {
        return $this->itemBool43;
    }

    public function setItemBool43(?bool $itemBool43): self
    {
        $this->itemBool43 = $itemBool43;

        return $this;
    }

    public function getItemBool44(): ?bool
    {
        return $this->itemBool44;
    }

    public function setItemBool44(?bool $itemBool44): self
    {
        $this->itemBool44 = $itemBool44;

        return $this;
    }

    public function getItemBool45(): ?bool
    {
        return $this->itemBool45;
    }

    public function setItemBool45(?bool $itemBool45): self
    {
        $this->itemBool45 = $itemBool45;

        return $this;
    }

    public function getItemBool46(): ?bool
    {
        return $this->itemBool46;
    }

    public function setItemBool46(?bool $itemBool46): self
    {
        $this->itemBool46 = $itemBool46;

        return $this;
    }

    public function getItemBool47(): ?bool
    {
        return $this->itemBool47;
    }

    public function setItemBool47(?bool $itemBool47): self
    {
        $this->itemBool47 = $itemBool47;

        return $this;
    }

    public function getItemBool48(): ?bool
    {
        return $this->itemBool48;
    }

    public function setItemBool48(?bool $itemBool48): self
    {
        $this->itemBool48 = $itemBool48;

        return $this;
    }

    public function getItemBool49(): ?bool
    {
        return $this->itemBool49;
    }

    public function setItemBool49(?bool $itemBool49): self
    {
        $this->itemBool49 = $itemBool49;

        return $this;
    }

    public function getItemBool50(): ?bool
    {
        return $this->itemBool50;
    }

    public function setItemBool50(?bool $itemBool50): self
    {
        $this->itemBool50 = $itemBool50;

        return $this;
    }

    public function getItemBool51(): ?bool
    {
        return $this->itemBool51;
    }

    public function setItemBool51(?bool $itemBool51): self
    {
        $this->itemBool51 = $itemBool51;

        return $this;
    }

    public function getItemBool52(): ?bool
    {
        return $this->itemBool52;
    }

    public function setItemBool52(?bool $itemBool52): self
    {
        $this->itemBool52 = $itemBool52;

        return $this;
    }

    public function getItemBool53(): ?bool
    {
        return $this->itemBool53;
    }

    public function setItemBool53(?bool $itemBool53): self
    {
        $this->itemBool53 = $itemBool53;

        return $this;
    }

    public function getItemBool54(): ?bool
    {
        return $this->itemBool54;
    }

    public function setItemBool54(?bool $itemBool54): self
    {
        $this->itemBool54 = $itemBool54;

        return $this;
    }

    public function getItemBool55(): ?bool
    {
        return $this->itemBool55;
    }

    public function setItemBool55(?bool $itemBool55): self
    {
        $this->itemBool55 = $itemBool55;

        return $this;
    }

    public function getItemBool56(): ?bool
    {
        return $this->itemBool56;
    }

    public function setItemBool56(?bool $itemBool56): self
    {
        $this->itemBool56 = $itemBool56;

        return $this;
    }

    public function getItemBool57(): ?bool
    {
        return $this->itemBool57;
    }

    public function setItemBool57(?bool $itemBool57): self
    {
        $this->itemBool57 = $itemBool57;

        return $this;
    }

    public function getItemBool58(): ?bool
    {
        return $this->itemBool58;
    }

    public function setItemBool58(?bool $itemBool58): self
    {
        $this->itemBool58 = $itemBool58;

        return $this;
    }

    public function getItemBool59(): ?bool
    {
        return $this->itemBool59;
    }

    public function setItemBool59(?bool $itemBool59): self
    {
        $this->itemBool59 = $itemBool59;

        return $this;
    }

    public function getItemBool60(): ?bool
    {
        return $this->itemBool60;
    }

    public function setItemBool60(?bool $itemBool60): self
    {
        $this->itemBool60 = $itemBool60;

        return $this;
    }

    public function getItemBool61(): ?bool
    {
        return $this->itemBool61;
    }

    public function setItemBool61(?bool $itemBool61): self
    {
        $this->itemBool61 = $itemBool61;

        return $this;
    }

    public function getItemBool62(): ?bool
    {
        return $this->itemBool62;
    }

    public function setItemBool62(?bool $itemBool62): self
    {
        $this->itemBool62 = $itemBool62;

        return $this;
    }

    public function getItemBool63(): ?bool
    {
        return $this->itemBool63;
    }

    public function setItemBool63(?bool $itemBool63): self
    {
        $this->itemBool63 = $itemBool63;

        return $this;
    }

    public function getAnnounceBool0(): ?bool
    {
        return $this->announceBool0;
    }

    public function setAnnounceBool0(?bool $announceBool0): self
    {
        $this->announceBool0 = $announceBool0;

        return $this;
    }

    public function getAnnounceBool1(): ?bool
    {
        return $this->announceBool1;
    }

    public function setAnnounceBool1(?bool $announceBool1): self
    {
        $this->announceBool1 = $announceBool1;

        return $this;
    }

    public function getAnnounceBool2(): ?bool
    {
        return $this->announceBool2;
    }

    public function setAnnounceBool2(?bool $announceBool2): self
    {
        $this->announceBool2 = $announceBool2;

        return $this;
    }

    public function getAnnounceBool3(): ?bool
    {
        return $this->announceBool3;
    }

    public function setAnnounceBool3(?bool $announceBool3): self
    {
        $this->announceBool3 = $announceBool3;

        return $this;
    }

    public function getAnnounceBool4(): ?bool
    {
        return $this->announceBool4;
    }

    public function setAnnounceBool4(?bool $announceBool4): self
    {
        $this->announceBool4 = $announceBool4;

        return $this;
    }

    public function getAnnounceBool5(): ?bool
    {
        return $this->announceBool5;
    }

    public function setAnnounceBool5(?bool $announceBool5): self
    {
        $this->announceBool5 = $announceBool5;

        return $this;
    }

    public function getAnnounceBool6(): ?bool
    {
        return $this->announceBool6;
    }

    public function setAnnounceBool6(?bool $announceBool6): self
    {
        $this->announceBool6 = $announceBool6;

        return $this;
    }

    public function getAnnounceBool7(): ?bool
    {
        return $this->announceBool7;
    }

    public function setAnnounceBool7(?bool $announceBool7): self
    {
        $this->announceBool7 = $announceBool7;

        return $this;
    }

    public function getAnnounceBool8(): ?bool
    {
        return $this->announceBool8;
    }

    public function setAnnounceBool8(?bool $announceBool8): self
    {
        $this->announceBool8 = $announceBool8;

        return $this;
    }

    public function getAnnounceBool9(): ?bool
    {
        return $this->announceBool9;
    }

    public function setAnnounceBool9(?bool $announceBool9): self
    {
        $this->announceBool9 = $announceBool9;

        return $this;
    }

    public function getAnnounceBool10(): ?bool
    {
        return $this->announceBool10;
    }

    public function setAnnounceBool10(?bool $announceBool10): self
    {
        $this->announceBool10 = $announceBool10;

        return $this;
    }

    public function getAnnounceBool11(): ?bool
    {
        return $this->announceBool11;
    }

    public function setAnnounceBool11(?bool $announceBool11): self
    {
        $this->announceBool11 = $announceBool11;

        return $this;
    }

    public function getAnnounceBool12(): ?bool
    {
        return $this->announceBool12;
    }

    public function setAnnounceBool12(?bool $announceBool12): self
    {
        $this->announceBool12 = $announceBool12;

        return $this;
    }

    public function getAnnounceBool13(): ?bool
    {
        return $this->announceBool13;
    }

    public function setAnnounceBool13(?bool $announceBool13): self
    {
        $this->announceBool13 = $announceBool13;

        return $this;
    }

    public function getAnnounceBool14(): ?bool
    {
        return $this->announceBool14;
    }

    public function setAnnounceBool14(?bool $announceBool14): self
    {
        $this->announceBool14 = $announceBool14;

        return $this;
    }

    public function getAnnounceBool15(): ?bool
    {
        return $this->announceBool15;
    }

    public function setAnnounceBool15(?bool $announceBool15): self
    {
        $this->announceBool15 = $announceBool15;

        return $this;
    }

    public function getAnnounceBool16(): ?bool
    {
        return $this->announceBool16;
    }

    public function setAnnounceBool16(?bool $announceBool16): self
    {
        $this->announceBool16 = $announceBool16;

        return $this;
    }

    public function getAnnounceBool17(): ?bool
    {
        return $this->announceBool17;
    }

    public function setAnnounceBool17(?bool $announceBool17): self
    {
        $this->announceBool17 = $announceBool17;

        return $this;
    }

    public function getAnnounceBool18(): ?bool
    {
        return $this->announceBool18;
    }

    public function setAnnounceBool18(?bool $announceBool18): self
    {
        $this->announceBool18 = $announceBool18;

        return $this;
    }

    public function getAnnounceBool19(): ?bool
    {
        return $this->announceBool19;
    }

    public function setAnnounceBool19(?bool $announceBool19): self
    {
        $this->announceBool19 = $announceBool19;

        return $this;
    }

    public function getAnnounceBool20(): ?bool
    {
        return $this->announceBool20;
    }

    public function setAnnounceBool20(?bool $announceBool20): self
    {
        $this->announceBool20 = $announceBool20;

        return $this;
    }

    public function getAnnounceBool21(): ?bool
    {
        return $this->announceBool21;
    }

    public function setAnnounceBool21(?bool $announceBool21): self
    {
        $this->announceBool21 = $announceBool21;

        return $this;
    }

    public function getAnnounceBool22(): ?bool
    {
        return $this->announceBool22;
    }

    public function setAnnounceBool22(?bool $announceBool22): self
    {
        $this->announceBool22 = $announceBool22;

        return $this;
    }

    public function getAnnounceBool23(): ?bool
    {
        return $this->announceBool23;
    }

    public function setAnnounceBool23(?bool $announceBool23): self
    {
        $this->announceBool23 = $announceBool23;

        return $this;
    }

    public function getAnnounceBool24(): ?bool
    {
        return $this->announceBool24;
    }

    public function setAnnounceBool24(?bool $announceBool24): self
    {
        $this->announceBool24 = $announceBool24;

        return $this;
    }

    public function getAnnounceBool25(): ?bool
    {
        return $this->announceBool25;
    }

    public function setAnnounceBool25(?bool $announceBool25): self
    {
        $this->announceBool25 = $announceBool25;

        return $this;
    }

    public function getAnnounceBool26(): ?bool
    {
        return $this->announceBool26;
    }

    public function setAnnounceBool26(?bool $announceBool26): self
    {
        $this->announceBool26 = $announceBool26;

        return $this;
    }

    public function getAnnounceBool27(): ?bool
    {
        return $this->announceBool27;
    }

    public function setAnnounceBool27(?bool $announceBool27): self
    {
        $this->announceBool27 = $announceBool27;

        return $this;
    }

    public function getAnnounceBool28(): ?bool
    {
        return $this->announceBool28;
    }

    public function setAnnounceBool28(?bool $announceBool28): self
    {
        $this->announceBool28 = $announceBool28;

        return $this;
    }

    public function getAnnounceBool29(): ?bool
    {
        return $this->announceBool29;
    }

    public function setAnnounceBool29(?bool $announceBool29): self
    {
        $this->announceBool29 = $announceBool29;

        return $this;
    }

    public function getAnnounceBool30(): ?bool
    {
        return $this->announceBool30;
    }

    public function setAnnounceBool30(?bool $announceBool30): self
    {
        $this->announceBool30 = $announceBool30;

        return $this;
    }

    public function getAnnounceBool31(): ?bool
    {
        return $this->announceBool31;
    }

    public function setAnnounceBool31(?bool $announceBool31): self
    {
        $this->announceBool31 = $announceBool31;

        return $this;
    }

    public function getAnnounceBool32(): ?bool
    {
        return $this->announceBool32;
    }

    public function setAnnounceBool32(?bool $announceBool32): self
    {
        $this->announceBool32 = $announceBool32;

        return $this;
    }

    public function getAnnounceBool33(): ?bool
    {
        return $this->announceBool33;
    }

    public function setAnnounceBool33(?bool $announceBool33): self
    {
        $this->announceBool33 = $announceBool33;

        return $this;
    }

    public function getAnnounceBool34(): ?bool
    {
        return $this->announceBool34;
    }

    public function setAnnounceBool34(?bool $announceBool34): self
    {
        $this->announceBool34 = $announceBool34;

        return $this;
    }

    public function getAnnounceBool35(): ?bool
    {
        return $this->announceBool35;
    }

    public function setAnnounceBool35(?bool $announceBool35): self
    {
        $this->announceBool35 = $announceBool35;

        return $this;
    }

    public function getAnnounceBool36(): ?bool
    {
        return $this->announceBool36;
    }

    public function setAnnounceBool36(?bool $announceBool36): self
    {
        $this->announceBool36 = $announceBool36;

        return $this;
    }

    public function getAnnounceBool37(): ?bool
    {
        return $this->announceBool37;
    }

    public function setAnnounceBool37(?bool $announceBool37): self
    {
        $this->announceBool37 = $announceBool37;

        return $this;
    }

    public function getAnnounceBool38(): ?bool
    {
        return $this->announceBool38;
    }

    public function setAnnounceBool38(?bool $announceBool38): self
    {
        $this->announceBool38 = $announceBool38;

        return $this;
    }

    public function getAnnounceBool39(): ?bool
    {
        return $this->announceBool39;
    }

    public function setAnnounceBool39(?bool $announceBool39): self
    {
        $this->announceBool39 = $announceBool39;

        return $this;
    }

    public function getAnnounceBool40(): ?bool
    {
        return $this->announceBool40;
    }

    public function setAnnounceBool40(?bool $announceBool40): self
    {
        $this->announceBool40 = $announceBool40;

        return $this;
    }

    public function getAnnounceBool41(): ?bool
    {
        return $this->announceBool41;
    }

    public function setAnnounceBool41(?bool $announceBool41): self
    {
        $this->announceBool41 = $announceBool41;

        return $this;
    }

    public function getAnnounceBool42(): ?bool
    {
        return $this->announceBool42;
    }

    public function setAnnounceBool42(?bool $announceBool42): self
    {
        $this->announceBool42 = $announceBool42;

        return $this;
    }

    public function getAnnounceBool43(): ?bool
    {
        return $this->announceBool43;
    }

    public function setAnnounceBool43(?bool $announceBool43): self
    {
        $this->announceBool43 = $announceBool43;

        return $this;
    }

    public function getAnnounceBool44(): ?bool
    {
        return $this->announceBool44;
    }

    public function setAnnounceBool44(?bool $announceBool44): self
    {
        $this->announceBool44 = $announceBool44;

        return $this;
    }

    public function getAnnounceBool45(): ?bool
    {
        return $this->announceBool45;
    }

    public function setAnnounceBool45(?bool $announceBool45): self
    {
        $this->announceBool45 = $announceBool45;

        return $this;
    }

    public function getAnnounceBool46(): ?bool
    {
        return $this->announceBool46;
    }

    public function setAnnounceBool46(?bool $announceBool46): self
    {
        $this->announceBool46 = $announceBool46;

        return $this;
    }

    public function getAnnounceBool47(): ?bool
    {
        return $this->announceBool47;
    }

    public function setAnnounceBool47(?bool $announceBool47): self
    {
        $this->announceBool47 = $announceBool47;

        return $this;
    }

    public function getAnnounceBool48(): ?bool
    {
        return $this->announceBool48;
    }

    public function setAnnounceBool48(?bool $announceBool48): self
    {
        $this->announceBool48 = $announceBool48;

        return $this;
    }

    public function getAnnounceBool49(): ?bool
    {
        return $this->announceBool49;
    }

    public function setAnnounceBool49(?bool $announceBool49): self
    {
        $this->announceBool49 = $announceBool49;

        return $this;
    }

    public function getAnnounceBool50(): ?bool
    {
        return $this->announceBool50;
    }

    public function setAnnounceBool50(?bool $announceBool50): self
    {
        $this->announceBool50 = $announceBool50;

        return $this;
    }

    public function getAnnounceBool51(): ?bool
    {
        return $this->announceBool51;
    }

    public function setAnnounceBool51(?bool $announceBool51): self
    {
        $this->announceBool51 = $announceBool51;

        return $this;
    }

    public function getAnnounceBool52(): ?bool
    {
        return $this->announceBool52;
    }

    public function setAnnounceBool52(?bool $announceBool52): self
    {
        $this->announceBool52 = $announceBool52;

        return $this;
    }

    public function getAnnounceBool53(): ?bool
    {
        return $this->announceBool53;
    }

    public function setAnnounceBool53(?bool $announceBool53): self
    {
        $this->announceBool53 = $announceBool53;

        return $this;
    }

    public function getAnnounceBool54(): ?bool
    {
        return $this->announceBool54;
    }

    public function setAnnounceBool54(?bool $announceBool54): self
    {
        $this->announceBool54 = $announceBool54;

        return $this;
    }

    public function getAnnounceBool55(): ?bool
    {
        return $this->announceBool55;
    }

    public function setAnnounceBool55(?bool $announceBool55): self
    {
        $this->announceBool55 = $announceBool55;

        return $this;
    }

    public function getAnnounceBool56(): ?bool
    {
        return $this->announceBool56;
    }

    public function setAnnounceBool56(?bool $announceBool56): self
    {
        $this->announceBool56 = $announceBool56;

        return $this;
    }

    public function getAnnounceBool57(): ?bool
    {
        return $this->announceBool57;
    }

    public function setAnnounceBool57(?bool $announceBool57): self
    {
        $this->announceBool57 = $announceBool57;

        return $this;
    }

    public function getAnnounceBool58(): ?bool
    {
        return $this->announceBool58;
    }

    public function setAnnounceBool58(?bool $announceBool58): self
    {
        $this->announceBool58 = $announceBool58;

        return $this;
    }

    public function getAnnounceBool59(): ?bool
    {
        return $this->announceBool59;
    }

    public function setAnnounceBool59(?bool $announceBool59): self
    {
        $this->announceBool59 = $announceBool59;

        return $this;
    }

    public function getAnnounceBool60(): ?bool
    {
        return $this->announceBool60;
    }

    public function setAnnounceBool60(?bool $announceBool60): self
    {
        $this->announceBool60 = $announceBool60;

        return $this;
    }

    public function getAnnounceBool61(): ?bool
    {
        return $this->announceBool61;
    }

    public function setAnnounceBool61(?bool $announceBool61): self
    {
        $this->announceBool61 = $announceBool61;

        return $this;
    }

    public function getAnnounceBool62(): ?bool
    {
        return $this->announceBool62;
    }

    public function setAnnounceBool62(?bool $announceBool62): self
    {
        $this->announceBool62 = $announceBool62;

        return $this;
    }

    public function getAnnounceBool63(): ?bool
    {
        return $this->announceBool63;
    }

    public function setAnnounceBool63(?bool $announceBool63): self
    {
        $this->announceBool63 = $announceBool63;

        return $this;
    }

    public function getBehaviorBool0(): ?bool
    {
        return $this->behaviorBool0;
    }

    public function setBehaviorBool0(?bool $behaviorBool0): self
    {
        $this->behaviorBool0 = $behaviorBool0;

        return $this;
    }

    public function getBehaviorBool1(): ?bool
    {
        return $this->behaviorBool1;
    }

    public function setBehaviorBool1(?bool $behaviorBool1): self
    {
        $this->behaviorBool1 = $behaviorBool1;

        return $this;
    }

    public function getBehaviorBool2(): ?bool
    {
        return $this->behaviorBool2;
    }

    public function setBehaviorBool2(?bool $behaviorBool2): self
    {
        $this->behaviorBool2 = $behaviorBool2;

        return $this;
    }

    public function getBehaviorBool3(): ?bool
    {
        return $this->behaviorBool3;
    }

    public function setBehaviorBool3(?bool $behaviorBool3): self
    {
        $this->behaviorBool3 = $behaviorBool3;

        return $this;
    }

    public function getBehaviorBool4(): ?bool
    {
        return $this->behaviorBool4;
    }

    public function setBehaviorBool4(?bool $behaviorBool4): self
    {
        $this->behaviorBool4 = $behaviorBool4;

        return $this;
    }

    public function getBehaviorBool5(): ?bool
    {
        return $this->behaviorBool5;
    }

    public function setBehaviorBool5(?bool $behaviorBool5): self
    {
        $this->behaviorBool5 = $behaviorBool5;

        return $this;
    }

    public function getBehaviorBool6(): ?bool
    {
        return $this->behaviorBool6;
    }

    public function setBehaviorBool6(?bool $behaviorBool6): self
    {
        $this->behaviorBool6 = $behaviorBool6;

        return $this;
    }

    public function getBehaviorBool7(): ?bool
    {
        return $this->behaviorBool7;
    }

    public function setBehaviorBool7(?bool $behaviorBool7): self
    {
        $this->behaviorBool7 = $behaviorBool7;

        return $this;
    }

    public function getBehaviorBool8(): ?bool
    {
        return $this->behaviorBool8;
    }

    public function setBehaviorBool8(?bool $behaviorBool8): self
    {
        $this->behaviorBool8 = $behaviorBool8;

        return $this;
    }

    public function getBehaviorBool9(): ?bool
    {
        return $this->behaviorBool9;
    }

    public function setBehaviorBool9(?bool $behaviorBool9): self
    {
        $this->behaviorBool9 = $behaviorBool9;

        return $this;
    }

    public function getBehaviorBool10(): ?bool
    {
        return $this->behaviorBool10;
    }

    public function setBehaviorBool10(?bool $behaviorBool10): self
    {
        $this->behaviorBool10 = $behaviorBool10;

        return $this;
    }

    public function getBehaviorBool11(): ?bool
    {
        return $this->behaviorBool11;
    }

    public function setBehaviorBool11(?bool $behaviorBool11): self
    {
        $this->behaviorBool11 = $behaviorBool11;

        return $this;
    }

    public function getBehaviorBool12(): ?bool
    {
        return $this->behaviorBool12;
    }

    public function setBehaviorBool12(?bool $behaviorBool12): self
    {
        $this->behaviorBool12 = $behaviorBool12;

        return $this;
    }

    public function getBehaviorBool13(): ?bool
    {
        return $this->behaviorBool13;
    }

    public function setBehaviorBool13(?bool $behaviorBool13): self
    {
        $this->behaviorBool13 = $behaviorBool13;

        return $this;
    }

    public function getBehaviorBool14(): ?bool
    {
        return $this->behaviorBool14;
    }

    public function setBehaviorBool14(?bool $behaviorBool14): self
    {
        $this->behaviorBool14 = $behaviorBool14;

        return $this;
    }

    public function getBehaviorBool15(): ?bool
    {
        return $this->behaviorBool15;
    }

    public function setBehaviorBool15(?bool $behaviorBool15): self
    {
        $this->behaviorBool15 = $behaviorBool15;

        return $this;
    }

    public function getBehaviorBool16(): ?bool
    {
        return $this->behaviorBool16;
    }

    public function setBehaviorBool16(?bool $behaviorBool16): self
    {
        $this->behaviorBool16 = $behaviorBool16;

        return $this;
    }

    public function getBehaviorBool17(): ?bool
    {
        return $this->behaviorBool17;
    }

    public function setBehaviorBool17(?bool $behaviorBool17): self
    {
        $this->behaviorBool17 = $behaviorBool17;

        return $this;
    }

    public function getBehaviorBool18(): ?bool
    {
        return $this->behaviorBool18;
    }

    public function setBehaviorBool18(?bool $behaviorBool18): self
    {
        $this->behaviorBool18 = $behaviorBool18;

        return $this;
    }

    public function getBehaviorBool19(): ?bool
    {
        return $this->behaviorBool19;
    }

    public function setBehaviorBool19(?bool $behaviorBool19): self
    {
        $this->behaviorBool19 = $behaviorBool19;

        return $this;
    }

    public function getBehaviorBool20(): ?bool
    {
        return $this->behaviorBool20;
    }

    public function setBehaviorBool20(?bool $behaviorBool20): self
    {
        $this->behaviorBool20 = $behaviorBool20;

        return $this;
    }

    public function getBehaviorBool21(): ?bool
    {
        return $this->behaviorBool21;
    }

    public function setBehaviorBool21(?bool $behaviorBool21): self
    {
        $this->behaviorBool21 = $behaviorBool21;

        return $this;
    }

    public function getBehaviorBool22(): ?bool
    {
        return $this->behaviorBool22;
    }

    public function setBehaviorBool22(?bool $behaviorBool22): self
    {
        $this->behaviorBool22 = $behaviorBool22;

        return $this;
    }

    public function getBehaviorBool23(): ?bool
    {
        return $this->behaviorBool23;
    }

    public function setBehaviorBool23(?bool $behaviorBool23): self
    {
        $this->behaviorBool23 = $behaviorBool23;

        return $this;
    }

    public function getBehaviorBool24(): ?bool
    {
        return $this->behaviorBool24;
    }

    public function setBehaviorBool24(?bool $behaviorBool24): self
    {
        $this->behaviorBool24 = $behaviorBool24;

        return $this;
    }

    public function getBehaviorBool25(): ?bool
    {
        return $this->behaviorBool25;
    }

    public function setBehaviorBool25(?bool $behaviorBool25): self
    {
        $this->behaviorBool25 = $behaviorBool25;

        return $this;
    }

    public function getBehaviorBool26(): ?bool
    {
        return $this->behaviorBool26;
    }

    public function setBehaviorBool26(?bool $behaviorBool26): self
    {
        $this->behaviorBool26 = $behaviorBool26;

        return $this;
    }

    public function getBehaviorBool27(): ?bool
    {
        return $this->behaviorBool27;
    }

    public function setBehaviorBool27(?bool $behaviorBool27): self
    {
        $this->behaviorBool27 = $behaviorBool27;

        return $this;
    }

    public function getBehaviorBool28(): ?bool
    {
        return $this->behaviorBool28;
    }

    public function setBehaviorBool28(?bool $behaviorBool28): self
    {
        $this->behaviorBool28 = $behaviorBool28;

        return $this;
    }

    public function getBehaviorBool29(): ?bool
    {
        return $this->behaviorBool29;
    }

    public function setBehaviorBool29(?bool $behaviorBool29): self
    {
        $this->behaviorBool29 = $behaviorBool29;

        return $this;
    }

    public function getBehaviorBool30(): ?bool
    {
        return $this->behaviorBool30;
    }

    public function setBehaviorBool30(?bool $behaviorBool30): self
    {
        $this->behaviorBool30 = $behaviorBool30;

        return $this;
    }

    public function getBehaviorBool31(): ?bool
    {
        return $this->behaviorBool31;
    }

    public function setBehaviorBool31(?bool $behaviorBool31): self
    {
        $this->behaviorBool31 = $behaviorBool31;

        return $this;
    }

    public function getBehaviorBool32(): ?bool
    {
        return $this->behaviorBool32;
    }

    public function setBehaviorBool32(?bool $behaviorBool32): self
    {
        $this->behaviorBool32 = $behaviorBool32;

        return $this;
    }

    public function getBehaviorBool33(): ?bool
    {
        return $this->behaviorBool33;
    }

    public function setBehaviorBool33(?bool $behaviorBool33): self
    {
        $this->behaviorBool33 = $behaviorBool33;

        return $this;
    }

    public function getBehaviorBool34(): ?bool
    {
        return $this->behaviorBool34;
    }

    public function setBehaviorBool34(?bool $behaviorBool34): self
    {
        $this->behaviorBool34 = $behaviorBool34;

        return $this;
    }

    public function getBehaviorBool35(): ?bool
    {
        return $this->behaviorBool35;
    }

    public function setBehaviorBool35(?bool $behaviorBool35): self
    {
        $this->behaviorBool35 = $behaviorBool35;

        return $this;
    }

    public function getBehaviorBool36(): ?bool
    {
        return $this->behaviorBool36;
    }

    public function setBehaviorBool36(?bool $behaviorBool36): self
    {
        $this->behaviorBool36 = $behaviorBool36;

        return $this;
    }

    public function getBehaviorBool37(): ?bool
    {
        return $this->behaviorBool37;
    }

    public function setBehaviorBool37(?bool $behaviorBool37): self
    {
        $this->behaviorBool37 = $behaviorBool37;

        return $this;
    }

    public function getBehaviorBool38(): ?bool
    {
        return $this->behaviorBool38;
    }

    public function setBehaviorBool38(?bool $behaviorBool38): self
    {
        $this->behaviorBool38 = $behaviorBool38;

        return $this;
    }

    public function getBehaviorBool39(): ?bool
    {
        return $this->behaviorBool39;
    }

    public function setBehaviorBool39(?bool $behaviorBool39): self
    {
        $this->behaviorBool39 = $behaviorBool39;

        return $this;
    }

    public function getBehaviorBool40(): ?bool
    {
        return $this->behaviorBool40;
    }

    public function setBehaviorBool40(?bool $behaviorBool40): self
    {
        $this->behaviorBool40 = $behaviorBool40;

        return $this;
    }

    public function getBehaviorBool41(): ?bool
    {
        return $this->behaviorBool41;
    }

    public function setBehaviorBool41(?bool $behaviorBool41): self
    {
        $this->behaviorBool41 = $behaviorBool41;

        return $this;
    }

    public function getBehaviorBool42(): ?bool
    {
        return $this->behaviorBool42;
    }

    public function setBehaviorBool42(?bool $behaviorBool42): self
    {
        $this->behaviorBool42 = $behaviorBool42;

        return $this;
    }

    public function getBehaviorBool43(): ?bool
    {
        return $this->behaviorBool43;
    }

    public function setBehaviorBool43(?bool $behaviorBool43): self
    {
        $this->behaviorBool43 = $behaviorBool43;

        return $this;
    }

    public function getBehaviorBool44(): ?bool
    {
        return $this->behaviorBool44;
    }

    public function setBehaviorBool44(?bool $behaviorBool44): self
    {
        $this->behaviorBool44 = $behaviorBool44;

        return $this;
    }

    public function getBehaviorBool45(): ?bool
    {
        return $this->behaviorBool45;
    }

    public function setBehaviorBool45(?bool $behaviorBool45): self
    {
        $this->behaviorBool45 = $behaviorBool45;

        return $this;
    }

    public function getBehaviorBool46(): ?bool
    {
        return $this->behaviorBool46;
    }

    public function setBehaviorBool46(?bool $behaviorBool46): self
    {
        $this->behaviorBool46 = $behaviorBool46;

        return $this;
    }

    public function getBehaviorBool47(): ?bool
    {
        return $this->behaviorBool47;
    }

    public function setBehaviorBool47(?bool $behaviorBool47): self
    {
        $this->behaviorBool47 = $behaviorBool47;

        return $this;
    }

    public function getBehaviorBool48(): ?bool
    {
        return $this->behaviorBool48;
    }

    public function setBehaviorBool48(?bool $behaviorBool48): self
    {
        $this->behaviorBool48 = $behaviorBool48;

        return $this;
    }

    public function getBehaviorBool49(): ?bool
    {
        return $this->behaviorBool49;
    }

    public function setBehaviorBool49(?bool $behaviorBool49): self
    {
        $this->behaviorBool49 = $behaviorBool49;

        return $this;
    }

    public function getBehaviorBool50(): ?bool
    {
        return $this->behaviorBool50;
    }

    public function setBehaviorBool50(?bool $behaviorBool50): self
    {
        $this->behaviorBool50 = $behaviorBool50;

        return $this;
    }

    public function getBehaviorBool51(): ?bool
    {
        return $this->behaviorBool51;
    }

    public function setBehaviorBool51(?bool $behaviorBool51): self
    {
        $this->behaviorBool51 = $behaviorBool51;

        return $this;
    }

    public function getBehaviorBool52(): ?bool
    {
        return $this->behaviorBool52;
    }

    public function setBehaviorBool52(?bool $behaviorBool52): self
    {
        $this->behaviorBool52 = $behaviorBool52;

        return $this;
    }

    public function getBehaviorBool53(): ?bool
    {
        return $this->behaviorBool53;
    }

    public function setBehaviorBool53(?bool $behaviorBool53): self
    {
        $this->behaviorBool53 = $behaviorBool53;

        return $this;
    }

    public function getBehaviorBool54(): ?bool
    {
        return $this->behaviorBool54;
    }

    public function setBehaviorBool54(?bool $behaviorBool54): self
    {
        $this->behaviorBool54 = $behaviorBool54;

        return $this;
    }

    public function getBehaviorBool55(): ?bool
    {
        return $this->behaviorBool55;
    }

    public function setBehaviorBool55(?bool $behaviorBool55): self
    {
        $this->behaviorBool55 = $behaviorBool55;

        return $this;
    }

    public function getBehaviorBool56(): ?bool
    {
        return $this->behaviorBool56;
    }

    public function setBehaviorBool56(?bool $behaviorBool56): self
    {
        $this->behaviorBool56 = $behaviorBool56;

        return $this;
    }

    public function getBehaviorBool57(): ?bool
    {
        return $this->behaviorBool57;
    }

    public function setBehaviorBool57(?bool $behaviorBool57): self
    {
        $this->behaviorBool57 = $behaviorBool57;

        return $this;
    }

    public function getBehaviorBool58(): ?bool
    {
        return $this->behaviorBool58;
    }

    public function setBehaviorBool58(?bool $behaviorBool58): self
    {
        $this->behaviorBool58 = $behaviorBool58;

        return $this;
    }

    public function getBehaviorBool59(): ?bool
    {
        return $this->behaviorBool59;
    }

    public function setBehaviorBool59(?bool $behaviorBool59): self
    {
        $this->behaviorBool59 = $behaviorBool59;

        return $this;
    }

    public function getBehaviorBool60(): ?bool
    {
        return $this->behaviorBool60;
    }

    public function setBehaviorBool60(?bool $behaviorBool60): self
    {
        $this->behaviorBool60 = $behaviorBool60;

        return $this;
    }

    public function getBehaviorBool61(): ?bool
    {
        return $this->behaviorBool61;
    }

    public function setBehaviorBool61(?bool $behaviorBool61): self
    {
        $this->behaviorBool61 = $behaviorBool61;

        return $this;
    }

    public function getBehaviorBool62(): ?bool
    {
        return $this->behaviorBool62;
    }

    public function setBehaviorBool62(?bool $behaviorBool62): self
    {
        $this->behaviorBool62 = $behaviorBool62;

        return $this;
    }

    public function getBehaviorBool63(): ?bool
    {
        return $this->behaviorBool63;
    }

    public function setBehaviorBool63(?bool $behaviorBool63): self
    {
        $this->behaviorBool63 = $behaviorBool63;

        return $this;
    }

    public function getAcceptBool0(): ?bool
    {
        return $this->acceptBool0;
    }

    public function setAcceptBool0(?bool $acceptBool0): self
    {
        $this->acceptBool0 = $acceptBool0;

        return $this;
    }

    public function getAcceptBool1(): ?bool
    {
        return $this->acceptBool1;
    }

    public function setAcceptBool1(?bool $acceptBool1): self
    {
        $this->acceptBool1 = $acceptBool1;

        return $this;
    }

    public function getAcceptBool2(): ?bool
    {
        return $this->acceptBool2;
    }

    public function setAcceptBool2(?bool $acceptBool2): self
    {
        $this->acceptBool2 = $acceptBool2;

        return $this;
    }

    public function getAcceptBool3(): ?bool
    {
        return $this->acceptBool3;
    }

    public function setAcceptBool3(?bool $acceptBool3): self
    {
        $this->acceptBool3 = $acceptBool3;

        return $this;
    }

    public function getAcceptBool4(): ?bool
    {
        return $this->acceptBool4;
    }

    public function setAcceptBool4(?bool $acceptBool4): self
    {
        $this->acceptBool4 = $acceptBool4;

        return $this;
    }

    public function getAcceptBool5(): ?bool
    {
        return $this->acceptBool5;
    }

    public function setAcceptBool5(?bool $acceptBool5): self
    {
        $this->acceptBool5 = $acceptBool5;

        return $this;
    }

    public function getAcceptBool6(): ?bool
    {
        return $this->acceptBool6;
    }

    public function setAcceptBool6(?bool $acceptBool6): self
    {
        $this->acceptBool6 = $acceptBool6;

        return $this;
    }

    public function getAcceptBool7(): ?bool
    {
        return $this->acceptBool7;
    }

    public function setAcceptBool7(?bool $acceptBool7): self
    {
        $this->acceptBool7 = $acceptBool7;

        return $this;
    }

    public function getAcceptBool8(): ?bool
    {
        return $this->acceptBool8;
    }

    public function setAcceptBool8(?bool $acceptBool8): self
    {
        $this->acceptBool8 = $acceptBool8;

        return $this;
    }

    public function getAcceptBool9(): ?bool
    {
        return $this->acceptBool9;
    }

    public function setAcceptBool9(?bool $acceptBool9): self
    {
        $this->acceptBool9 = $acceptBool9;

        return $this;
    }

    public function getAcceptBool10(): ?bool
    {
        return $this->acceptBool10;
    }

    public function setAcceptBool10(?bool $acceptBool10): self
    {
        $this->acceptBool10 = $acceptBool10;

        return $this;
    }

    public function getAcceptBool11(): ?bool
    {
        return $this->acceptBool11;
    }

    public function setAcceptBool11(?bool $acceptBool11): self
    {
        $this->acceptBool11 = $acceptBool11;

        return $this;
    }

    public function getAcceptBool12(): ?bool
    {
        return $this->acceptBool12;
    }

    public function setAcceptBool12(?bool $acceptBool12): self
    {
        $this->acceptBool12 = $acceptBool12;

        return $this;
    }

    public function getAcceptBool13(): ?bool
    {
        return $this->acceptBool13;
    }

    public function setAcceptBool13(?bool $acceptBool13): self
    {
        $this->acceptBool13 = $acceptBool13;

        return $this;
    }

    public function getAcceptBool14(): ?bool
    {
        return $this->acceptBool14;
    }

    public function setAcceptBool14(?bool $acceptBool14): self
    {
        $this->acceptBool14 = $acceptBool14;

        return $this;
    }

    public function getAcceptBool15(): ?bool
    {
        return $this->acceptBool15;
    }

    public function setAcceptBool15(?bool $acceptBool15): self
    {
        $this->acceptBool15 = $acceptBool15;

        return $this;
    }

    public function getAcceptBool16(): ?bool
    {
        return $this->acceptBool16;
    }

    public function setAcceptBool16(?bool $acceptBool16): self
    {
        $this->acceptBool16 = $acceptBool16;

        return $this;
    }

    public function getAcceptBool17(): ?bool
    {
        return $this->acceptBool17;
    }

    public function setAcceptBool17(?bool $acceptBool17): self
    {
        $this->acceptBool17 = $acceptBool17;

        return $this;
    }

    public function getAcceptBool18(): ?bool
    {
        return $this->acceptBool18;
    }

    public function setAcceptBool18(?bool $acceptBool18): self
    {
        $this->acceptBool18 = $acceptBool18;

        return $this;
    }

    public function getAcceptBool19(): ?bool
    {
        return $this->acceptBool19;
    }

    public function setAcceptBool19(?bool $acceptBool19): self
    {
        $this->acceptBool19 = $acceptBool19;

        return $this;
    }

    public function getAcceptBool20(): ?bool
    {
        return $this->acceptBool20;
    }

    public function setAcceptBool20(?bool $acceptBool20): self
    {
        $this->acceptBool20 = $acceptBool20;

        return $this;
    }

    public function getAcceptBool21(): ?bool
    {
        return $this->acceptBool21;
    }

    public function setAcceptBool21(?bool $acceptBool21): self
    {
        $this->acceptBool21 = $acceptBool21;

        return $this;
    }

    public function getAcceptBool22(): ?bool
    {
        return $this->acceptBool22;
    }

    public function setAcceptBool22(?bool $acceptBool22): self
    {
        $this->acceptBool22 = $acceptBool22;

        return $this;
    }

    public function getAcceptBool23(): ?bool
    {
        return $this->acceptBool23;
    }

    public function setAcceptBool23(?bool $acceptBool23): self
    {
        $this->acceptBool23 = $acceptBool23;

        return $this;
    }

    public function getAcceptBool24(): ?bool
    {
        return $this->acceptBool24;
    }

    public function setAcceptBool24(?bool $acceptBool24): self
    {
        $this->acceptBool24 = $acceptBool24;

        return $this;
    }

    public function getAcceptBool25(): ?bool
    {
        return $this->acceptBool25;
    }

    public function setAcceptBool25(?bool $acceptBool25): self
    {
        $this->acceptBool25 = $acceptBool25;

        return $this;
    }

    public function getAcceptBool26(): ?bool
    {
        return $this->acceptBool26;
    }

    public function setAcceptBool26(?bool $acceptBool26): self
    {
        $this->acceptBool26 = $acceptBool26;

        return $this;
    }

    public function getAcceptBool27(): ?bool
    {
        return $this->acceptBool27;
    }

    public function setAcceptBool27(?bool $acceptBool27): self
    {
        $this->acceptBool27 = $acceptBool27;

        return $this;
    }

    public function getAcceptBool28(): ?bool
    {
        return $this->acceptBool28;
    }

    public function setAcceptBool28(?bool $acceptBool28): self
    {
        $this->acceptBool28 = $acceptBool28;

        return $this;
    }

    public function getAcceptBool29(): ?bool
    {
        return $this->acceptBool29;
    }

    public function setAcceptBool29(?bool $acceptBool29): self
    {
        $this->acceptBool29 = $acceptBool29;

        return $this;
    }

    public function getAcceptBool30(): ?bool
    {
        return $this->acceptBool30;
    }

    public function setAcceptBool30(?bool $acceptBool30): self
    {
        $this->acceptBool30 = $acceptBool30;

        return $this;
    }

    public function getAcceptBool31(): ?bool
    {
        return $this->acceptBool31;
    }

    public function setAcceptBool31(?bool $acceptBool31): self
    {
        $this->acceptBool31 = $acceptBool31;

        return $this;
    }

    public function getAcceptBool32(): ?bool
    {
        return $this->acceptBool32;
    }

    public function setAcceptBool32(?bool $acceptBool32): self
    {
        $this->acceptBool32 = $acceptBool32;

        return $this;
    }

    public function getAcceptBool33(): ?bool
    {
        return $this->acceptBool33;
    }

    public function setAcceptBool33(?bool $acceptBool33): self
    {
        $this->acceptBool33 = $acceptBool33;

        return $this;
    }

    public function getAcceptBool34(): ?bool
    {
        return $this->acceptBool34;
    }

    public function setAcceptBool34(?bool $acceptBool34): self
    {
        $this->acceptBool34 = $acceptBool34;

        return $this;
    }

    public function getAcceptBool35(): ?bool
    {
        return $this->acceptBool35;
    }

    public function setAcceptBool35(?bool $acceptBool35): self
    {
        $this->acceptBool35 = $acceptBool35;

        return $this;
    }

    public function getAcceptBool36(): ?bool
    {
        return $this->acceptBool36;
    }

    public function setAcceptBool36(?bool $acceptBool36): self
    {
        $this->acceptBool36 = $acceptBool36;

        return $this;
    }

    public function getAcceptBool37(): ?bool
    {
        return $this->acceptBool37;
    }

    public function setAcceptBool37(?bool $acceptBool37): self
    {
        $this->acceptBool37 = $acceptBool37;

        return $this;
    }

    public function getAcceptBool38(): ?bool
    {
        return $this->acceptBool38;
    }

    public function setAcceptBool38(?bool $acceptBool38): self
    {
        $this->acceptBool38 = $acceptBool38;

        return $this;
    }

    public function getAcceptBool39(): ?bool
    {
        return $this->acceptBool39;
    }

    public function setAcceptBool39(?bool $acceptBool39): self
    {
        $this->acceptBool39 = $acceptBool39;

        return $this;
    }

    public function getAcceptBool40(): ?bool
    {
        return $this->acceptBool40;
    }

    public function setAcceptBool40(?bool $acceptBool40): self
    {
        $this->acceptBool40 = $acceptBool40;

        return $this;
    }

    public function getAcceptBool41(): ?bool
    {
        return $this->acceptBool41;
    }

    public function setAcceptBool41(?bool $acceptBool41): self
    {
        $this->acceptBool41 = $acceptBool41;

        return $this;
    }

    public function getAcceptBool42(): ?bool
    {
        return $this->acceptBool42;
    }

    public function setAcceptBool42(?bool $acceptBool42): self
    {
        $this->acceptBool42 = $acceptBool42;

        return $this;
    }

    public function getAcceptBool43(): ?bool
    {
        return $this->acceptBool43;
    }

    public function setAcceptBool43(?bool $acceptBool43): self
    {
        $this->acceptBool43 = $acceptBool43;

        return $this;
    }

    public function getAcceptBool44(): ?bool
    {
        return $this->acceptBool44;
    }

    public function setAcceptBool44(?bool $acceptBool44): self
    {
        $this->acceptBool44 = $acceptBool44;

        return $this;
    }

    public function getAcceptBool45(): ?bool
    {
        return $this->acceptBool45;
    }

    public function setAcceptBool45(?bool $acceptBool45): self
    {
        $this->acceptBool45 = $acceptBool45;

        return $this;
    }

    public function getAcceptBool46(): ?bool
    {
        return $this->acceptBool46;
    }

    public function setAcceptBool46(?bool $acceptBool46): self
    {
        $this->acceptBool46 = $acceptBool46;

        return $this;
    }

    public function getAcceptBool47(): ?bool
    {
        return $this->acceptBool47;
    }

    public function setAcceptBool47(?bool $acceptBool47): self
    {
        $this->acceptBool47 = $acceptBool47;

        return $this;
    }

    public function getAcceptBool48(): ?bool
    {
        return $this->acceptBool48;
    }

    public function setAcceptBool48(?bool $acceptBool48): self
    {
        $this->acceptBool48 = $acceptBool48;

        return $this;
    }

    public function getAcceptBool49(): ?bool
    {
        return $this->acceptBool49;
    }

    public function setAcceptBool49(?bool $acceptBool49): self
    {
        $this->acceptBool49 = $acceptBool49;

        return $this;
    }

    public function getAcceptBool50(): ?bool
    {
        return $this->acceptBool50;
    }

    public function setAcceptBool50(?bool $acceptBool50): self
    {
        $this->acceptBool50 = $acceptBool50;

        return $this;
    }

    public function getAcceptBool51(): ?bool
    {
        return $this->acceptBool51;
    }

    public function setAcceptBool51(?bool $acceptBool51): self
    {
        $this->acceptBool51 = $acceptBool51;

        return $this;
    }

    public function getAcceptBool52(): ?bool
    {
        return $this->acceptBool52;
    }

    public function setAcceptBool52(?bool $acceptBool52): self
    {
        $this->acceptBool52 = $acceptBool52;

        return $this;
    }

    public function getAcceptBool53(): ?bool
    {
        return $this->acceptBool53;
    }

    public function setAcceptBool53(?bool $acceptBool53): self
    {
        $this->acceptBool53 = $acceptBool53;

        return $this;
    }

    public function getAcceptBool54(): ?bool
    {
        return $this->acceptBool54;
    }

    public function setAcceptBool54(?bool $acceptBool54): self
    {
        $this->acceptBool54 = $acceptBool54;

        return $this;
    }

    public function getAcceptBool55(): ?bool
    {
        return $this->acceptBool55;
    }

    public function setAcceptBool55(?bool $acceptBool55): self
    {
        $this->acceptBool55 = $acceptBool55;

        return $this;
    }

    public function getAcceptBool56(): ?bool
    {
        return $this->acceptBool56;
    }

    public function setAcceptBool56(?bool $acceptBool56): self
    {
        $this->acceptBool56 = $acceptBool56;

        return $this;
    }

    public function getAcceptBool57(): ?bool
    {
        return $this->acceptBool57;
    }

    public function setAcceptBool57(?bool $acceptBool57): self
    {
        $this->acceptBool57 = $acceptBool57;

        return $this;
    }

    public function getAcceptBool58(): ?bool
    {
        return $this->acceptBool58;
    }

    public function setAcceptBool58(?bool $acceptBool58): self
    {
        $this->acceptBool58 = $acceptBool58;

        return $this;
    }

    public function getAcceptBool59(): ?bool
    {
        return $this->acceptBool59;
    }

    public function setAcceptBool59(?bool $acceptBool59): self
    {
        $this->acceptBool59 = $acceptBool59;

        return $this;
    }

    public function getAcceptBool60(): ?bool
    {
        return $this->acceptBool60;
    }

    public function setAcceptBool60(?bool $acceptBool60): self
    {
        $this->acceptBool60 = $acceptBool60;

        return $this;
    }

    public function getAcceptBool61(): ?bool
    {
        return $this->acceptBool61;
    }

    public function setAcceptBool61(?bool $acceptBool61): self
    {
        $this->acceptBool61 = $acceptBool61;

        return $this;
    }

    public function getAcceptBool62(): ?bool
    {
        return $this->acceptBool62;
    }

    public function setAcceptBool62(?bool $acceptBool62): self
    {
        $this->acceptBool62 = $acceptBool62;

        return $this;
    }

    public function getAcceptBool63(): ?bool
    {
        return $this->acceptBool63;
    }

    public function setAcceptBool63(?bool $acceptBool63): self
    {
        $this->acceptBool63 = $acceptBool63;

        return $this;
    }

    public function getQualifiedBool0(): ?bool
    {
        return $this->qualifiedBool0;
    }

    public function setQualifiedBool0(?bool $qualifiedBool0): self
    {
        $this->qualifiedBool0 = $qualifiedBool0;

        return $this;
    }

    public function getQualifiedBool1(): ?bool
    {
        return $this->qualifiedBool1;
    }

    public function setQualifiedBool1(?bool $qualifiedBool1): self
    {
        $this->qualifiedBool1 = $qualifiedBool1;

        return $this;
    }

    public function getQualifiedBool2(): ?bool
    {
        return $this->qualifiedBool2;
    }

    public function setQualifiedBool2(?bool $qualifiedBool2): self
    {
        $this->qualifiedBool2 = $qualifiedBool2;

        return $this;
    }

    public function getQualifiedBool3(): ?bool
    {
        return $this->qualifiedBool3;
    }

    public function setQualifiedBool3(?bool $qualifiedBool3): self
    {
        $this->qualifiedBool3 = $qualifiedBool3;

        return $this;
    }

    public function getQualifiedBool4(): ?bool
    {
        return $this->qualifiedBool4;
    }

    public function setQualifiedBool4(?bool $qualifiedBool4): self
    {
        $this->qualifiedBool4 = $qualifiedBool4;

        return $this;
    }

    public function getQualifiedBool5(): ?bool
    {
        return $this->qualifiedBool5;
    }

    public function setQualifiedBool5(?bool $qualifiedBool5): self
    {
        $this->qualifiedBool5 = $qualifiedBool5;

        return $this;
    }

    public function getQualifiedBool6(): ?bool
    {
        return $this->qualifiedBool6;
    }

    public function setQualifiedBool6(?bool $qualifiedBool6): self
    {
        $this->qualifiedBool6 = $qualifiedBool6;

        return $this;
    }

    public function getQualifiedBool7(): ?bool
    {
        return $this->qualifiedBool7;
    }

    public function setQualifiedBool7(?bool $qualifiedBool7): self
    {
        $this->qualifiedBool7 = $qualifiedBool7;

        return $this;
    }

    public function getQualifiedBool8(): ?bool
    {
        return $this->qualifiedBool8;
    }

    public function setQualifiedBool8(?bool $qualifiedBool8): self
    {
        $this->qualifiedBool8 = $qualifiedBool8;

        return $this;
    }

    public function getQualifiedBool9(): ?bool
    {
        return $this->qualifiedBool9;
    }

    public function setQualifiedBool9(?bool $qualifiedBool9): self
    {
        $this->qualifiedBool9 = $qualifiedBool9;

        return $this;
    }

    public function getQualifiedBool10(): ?bool
    {
        return $this->qualifiedBool10;
    }

    public function setQualifiedBool10(?bool $qualifiedBool10): self
    {
        $this->qualifiedBool10 = $qualifiedBool10;

        return $this;
    }

    public function getQualifiedBool11(): ?bool
    {
        return $this->qualifiedBool11;
    }

    public function setQualifiedBool11(?bool $qualifiedBool11): self
    {
        $this->qualifiedBool11 = $qualifiedBool11;

        return $this;
    }

    public function getQualifiedBool12(): ?bool
    {
        return $this->qualifiedBool12;
    }

    public function setQualifiedBool12(?bool $qualifiedBool12): self
    {
        $this->qualifiedBool12 = $qualifiedBool12;

        return $this;
    }

    public function getQualifiedBool13(): ?bool
    {
        return $this->qualifiedBool13;
    }

    public function setQualifiedBool13(?bool $qualifiedBool13): self
    {
        $this->qualifiedBool13 = $qualifiedBool13;

        return $this;
    }

    public function getQualifiedBool14(): ?bool
    {
        return $this->qualifiedBool14;
    }

    public function setQualifiedBool14(?bool $qualifiedBool14): self
    {
        $this->qualifiedBool14 = $qualifiedBool14;

        return $this;
    }

    public function getQualifiedBool15(): ?bool
    {
        return $this->qualifiedBool15;
    }

    public function setQualifiedBool15(?bool $qualifiedBool15): self
    {
        $this->qualifiedBool15 = $qualifiedBool15;

        return $this;
    }

    public function getQualifiedBool16(): ?bool
    {
        return $this->qualifiedBool16;
    }

    public function setQualifiedBool16(?bool $qualifiedBool16): self
    {
        $this->qualifiedBool16 = $qualifiedBool16;

        return $this;
    }

    public function getQualifiedBool17(): ?bool
    {
        return $this->qualifiedBool17;
    }

    public function setQualifiedBool17(?bool $qualifiedBool17): self
    {
        $this->qualifiedBool17 = $qualifiedBool17;

        return $this;
    }

    public function getQualifiedBool18(): ?bool
    {
        return $this->qualifiedBool18;
    }

    public function setQualifiedBool18(?bool $qualifiedBool18): self
    {
        $this->qualifiedBool18 = $qualifiedBool18;

        return $this;
    }

    public function getQualifiedBool19(): ?bool
    {
        return $this->qualifiedBool19;
    }

    public function setQualifiedBool19(?bool $qualifiedBool19): self
    {
        $this->qualifiedBool19 = $qualifiedBool19;

        return $this;
    }

    public function getQualifiedBool20(): ?bool
    {
        return $this->qualifiedBool20;
    }

    public function setQualifiedBool20(?bool $qualifiedBool20): self
    {
        $this->qualifiedBool20 = $qualifiedBool20;

        return $this;
    }

    public function getQualifiedBool21(): ?bool
    {
        return $this->qualifiedBool21;
    }

    public function setQualifiedBool21(?bool $qualifiedBool21): self
    {
        $this->qualifiedBool21 = $qualifiedBool21;

        return $this;
    }

    public function getQualifiedBool22(): ?bool
    {
        return $this->qualifiedBool22;
    }

    public function setQualifiedBool22(?bool $qualifiedBool22): self
    {
        $this->qualifiedBool22 = $qualifiedBool22;

        return $this;
    }

    public function getQualifiedBool23(): ?bool
    {
        return $this->qualifiedBool23;
    }

    public function setQualifiedBool23(?bool $qualifiedBool23): self
    {
        $this->qualifiedBool23 = $qualifiedBool23;

        return $this;
    }

    public function getQualifiedBool24(): ?bool
    {
        return $this->qualifiedBool24;
    }

    public function setQualifiedBool24(?bool $qualifiedBool24): self
    {
        $this->qualifiedBool24 = $qualifiedBool24;

        return $this;
    }

    public function getQualifiedBool25(): ?bool
    {
        return $this->qualifiedBool25;
    }

    public function setQualifiedBool25(?bool $qualifiedBool25): self
    {
        $this->qualifiedBool25 = $qualifiedBool25;

        return $this;
    }

    public function getQualifiedBool26(): ?bool
    {
        return $this->qualifiedBool26;
    }

    public function setQualifiedBool26(?bool $qualifiedBool26): self
    {
        $this->qualifiedBool26 = $qualifiedBool26;

        return $this;
    }

    public function getQualifiedBool27(): ?bool
    {
        return $this->qualifiedBool27;
    }

    public function setQualifiedBool27(?bool $qualifiedBool27): self
    {
        $this->qualifiedBool27 = $qualifiedBool27;

        return $this;
    }

    public function getQualifiedBool28(): ?bool
    {
        return $this->qualifiedBool28;
    }

    public function setQualifiedBool28(?bool $qualifiedBool28): self
    {
        $this->qualifiedBool28 = $qualifiedBool28;

        return $this;
    }

    public function getQualifiedBool29(): ?bool
    {
        return $this->qualifiedBool29;
    }

    public function setQualifiedBool29(?bool $qualifiedBool29): self
    {
        $this->qualifiedBool29 = $qualifiedBool29;

        return $this;
    }

    public function getQualifiedBool30(): ?bool
    {
        return $this->qualifiedBool30;
    }

    public function setQualifiedBool30(?bool $qualifiedBool30): self
    {
        $this->qualifiedBool30 = $qualifiedBool30;

        return $this;
    }

    public function getQualifiedBool31(): ?bool
    {
        return $this->qualifiedBool31;
    }

    public function setQualifiedBool31(?bool $qualifiedBool31): self
    {
        $this->qualifiedBool31 = $qualifiedBool31;

        return $this;
    }

    public function getQualifiedBool32(): ?bool
    {
        return $this->qualifiedBool32;
    }

    public function setQualifiedBool32(?bool $qualifiedBool32): self
    {
        $this->qualifiedBool32 = $qualifiedBool32;

        return $this;
    }

    public function getQualifiedBool33(): ?bool
    {
        return $this->qualifiedBool33;
    }

    public function setQualifiedBool33(?bool $qualifiedBool33): self
    {
        $this->qualifiedBool33 = $qualifiedBool33;

        return $this;
    }

    public function getQualifiedBool34(): ?bool
    {
        return $this->qualifiedBool34;
    }

    public function setQualifiedBool34(?bool $qualifiedBool34): self
    {
        $this->qualifiedBool34 = $qualifiedBool34;

        return $this;
    }

    public function getQualifiedBool35(): ?bool
    {
        return $this->qualifiedBool35;
    }

    public function setQualifiedBool35(?bool $qualifiedBool35): self
    {
        $this->qualifiedBool35 = $qualifiedBool35;

        return $this;
    }

    public function getQualifiedBool36(): ?bool
    {
        return $this->qualifiedBool36;
    }

    public function setQualifiedBool36(?bool $qualifiedBool36): self
    {
        $this->qualifiedBool36 = $qualifiedBool36;

        return $this;
    }

    public function getQualifiedBool37(): ?bool
    {
        return $this->qualifiedBool37;
    }

    public function setQualifiedBool37(?bool $qualifiedBool37): self
    {
        $this->qualifiedBool37 = $qualifiedBool37;

        return $this;
    }

    public function getQualifiedBool38(): ?bool
    {
        return $this->qualifiedBool38;
    }

    public function setQualifiedBool38(?bool $qualifiedBool38): self
    {
        $this->qualifiedBool38 = $qualifiedBool38;

        return $this;
    }

    public function getQualifiedBool39(): ?bool
    {
        return $this->qualifiedBool39;
    }

    public function setQualifiedBool39(?bool $qualifiedBool39): self
    {
        $this->qualifiedBool39 = $qualifiedBool39;

        return $this;
    }

    public function getQualifiedBool40(): ?bool
    {
        return $this->qualifiedBool40;
    }

    public function setQualifiedBool40(?bool $qualifiedBool40): self
    {
        $this->qualifiedBool40 = $qualifiedBool40;

        return $this;
    }

    public function getQualifiedBool41(): ?bool
    {
        return $this->qualifiedBool41;
    }

    public function setQualifiedBool41(?bool $qualifiedBool41): self
    {
        $this->qualifiedBool41 = $qualifiedBool41;

        return $this;
    }

    public function getQualifiedBool42(): ?bool
    {
        return $this->qualifiedBool42;
    }

    public function setQualifiedBool42(?bool $qualifiedBool42): self
    {
        $this->qualifiedBool42 = $qualifiedBool42;

        return $this;
    }

    public function getQualifiedBool43(): ?bool
    {
        return $this->qualifiedBool43;
    }

    public function setQualifiedBool43(?bool $qualifiedBool43): self
    {
        $this->qualifiedBool43 = $qualifiedBool43;

        return $this;
    }

    public function getQualifiedBool44(): ?bool
    {
        return $this->qualifiedBool44;
    }

    public function setQualifiedBool44(?bool $qualifiedBool44): self
    {
        $this->qualifiedBool44 = $qualifiedBool44;

        return $this;
    }

    public function getQualifiedBool45(): ?bool
    {
        return $this->qualifiedBool45;
    }

    public function setQualifiedBool45(?bool $qualifiedBool45): self
    {
        $this->qualifiedBool45 = $qualifiedBool45;

        return $this;
    }

    public function getQualifiedBool46(): ?bool
    {
        return $this->qualifiedBool46;
    }

    public function setQualifiedBool46(?bool $qualifiedBool46): self
    {
        $this->qualifiedBool46 = $qualifiedBool46;

        return $this;
    }

    public function getQualifiedBool47(): ?bool
    {
        return $this->qualifiedBool47;
    }

    public function setQualifiedBool47(?bool $qualifiedBool47): self
    {
        $this->qualifiedBool47 = $qualifiedBool47;

        return $this;
    }

    public function getQualifiedBool48(): ?bool
    {
        return $this->qualifiedBool48;
    }

    public function setQualifiedBool48(?bool $qualifiedBool48): self
    {
        $this->qualifiedBool48 = $qualifiedBool48;

        return $this;
    }

    public function getQualifiedBool49(): ?bool
    {
        return $this->qualifiedBool49;
    }

    public function setQualifiedBool49(?bool $qualifiedBool49): self
    {
        $this->qualifiedBool49 = $qualifiedBool49;

        return $this;
    }

    public function getQualifiedBool50(): ?bool
    {
        return $this->qualifiedBool50;
    }

    public function setQualifiedBool50(?bool $qualifiedBool50): self
    {
        $this->qualifiedBool50 = $qualifiedBool50;

        return $this;
    }

    public function getQualifiedBool51(): ?bool
    {
        return $this->qualifiedBool51;
    }

    public function setQualifiedBool51(?bool $qualifiedBool51): self
    {
        $this->qualifiedBool51 = $qualifiedBool51;

        return $this;
    }

    public function getQualifiedBool52(): ?bool
    {
        return $this->qualifiedBool52;
    }

    public function setQualifiedBool52(?bool $qualifiedBool52): self
    {
        $this->qualifiedBool52 = $qualifiedBool52;

        return $this;
    }

    public function getQualifiedBool53(): ?bool
    {
        return $this->qualifiedBool53;
    }

    public function setQualifiedBool53(?bool $qualifiedBool53): self
    {
        $this->qualifiedBool53 = $qualifiedBool53;

        return $this;
    }

    public function getQualifiedBool54(): ?bool
    {
        return $this->qualifiedBool54;
    }

    public function setQualifiedBool54(?bool $qualifiedBool54): self
    {
        $this->qualifiedBool54 = $qualifiedBool54;

        return $this;
    }

    public function getQualifiedBool55(): ?bool
    {
        return $this->qualifiedBool55;
    }

    public function setQualifiedBool55(?bool $qualifiedBool55): self
    {
        $this->qualifiedBool55 = $qualifiedBool55;

        return $this;
    }

    public function getQualifiedBool56(): ?bool
    {
        return $this->qualifiedBool56;
    }

    public function setQualifiedBool56(?bool $qualifiedBool56): self
    {
        $this->qualifiedBool56 = $qualifiedBool56;

        return $this;
    }

    public function getQualifiedBool57(): ?bool
    {
        return $this->qualifiedBool57;
    }

    public function setQualifiedBool57(?bool $qualifiedBool57): self
    {
        $this->qualifiedBool57 = $qualifiedBool57;

        return $this;
    }

    public function getQualifiedBool58(): ?bool
    {
        return $this->qualifiedBool58;
    }

    public function setQualifiedBool58(?bool $qualifiedBool58): self
    {
        $this->qualifiedBool58 = $qualifiedBool58;

        return $this;
    }

    public function getQualifiedBool59(): ?bool
    {
        return $this->qualifiedBool59;
    }

    public function setQualifiedBool59(?bool $qualifiedBool59): self
    {
        $this->qualifiedBool59 = $qualifiedBool59;

        return $this;
    }

    public function getQualifiedBool60(): ?bool
    {
        return $this->qualifiedBool60;
    }

    public function setQualifiedBool60(?bool $qualifiedBool60): self
    {
        $this->qualifiedBool60 = $qualifiedBool60;

        return $this;
    }

    public function getQualifiedBool61(): ?bool
    {
        return $this->qualifiedBool61;
    }

    public function setQualifiedBool61(?bool $qualifiedBool61): self
    {
        $this->qualifiedBool61 = $qualifiedBool61;

        return $this;
    }

    public function getQualifiedBool62(): ?bool
    {
        return $this->qualifiedBool62;
    }

    public function setQualifiedBool62(?bool $qualifiedBool62): self
    {
        $this->qualifiedBool62 = $qualifiedBool62;

        return $this;
    }

    public function getQualifiedBool63(): ?bool
    {
        return $this->qualifiedBool63;
    }

    public function setQualifiedBool63(?bool $qualifiedBool63): self
    {
        $this->qualifiedBool63 = $qualifiedBool63;

        return $this;
    }

    public function getCanTargetBool0(): ?bool
    {
        return $this->canTargetBool0;
    }

    public function setCanTargetBool0(?bool $canTargetBool0): self
    {
        $this->canTargetBool0 = $canTargetBool0;

        return $this;
    }

    public function getCanTargetBool1(): ?bool
    {
        return $this->canTargetBool1;
    }

    public function setCanTargetBool1(?bool $canTargetBool1): self
    {
        $this->canTargetBool1 = $canTargetBool1;

        return $this;
    }

    public function getCanTargetBool2(): ?bool
    {
        return $this->canTargetBool2;
    }

    public function setCanTargetBool2(?bool $canTargetBool2): self
    {
        $this->canTargetBool2 = $canTargetBool2;

        return $this;
    }

    public function getCanTargetBool3(): ?bool
    {
        return $this->canTargetBool3;
    }

    public function setCanTargetBool3(?bool $canTargetBool3): self
    {
        $this->canTargetBool3 = $canTargetBool3;

        return $this;
    }

    public function getCanTargetBool4(): ?bool
    {
        return $this->canTargetBool4;
    }

    public function setCanTargetBool4(?bool $canTargetBool4): self
    {
        $this->canTargetBool4 = $canTargetBool4;

        return $this;
    }

    public function getCanTargetBool5(): ?bool
    {
        return $this->canTargetBool5;
    }

    public function setCanTargetBool5(?bool $canTargetBool5): self
    {
        $this->canTargetBool5 = $canTargetBool5;

        return $this;
    }

    public function getCanTargetBool6(): ?bool
    {
        return $this->canTargetBool6;
    }

    public function setCanTargetBool6(?bool $canTargetBool6): self
    {
        $this->canTargetBool6 = $canTargetBool6;

        return $this;
    }

    public function getCanTargetBool7(): ?bool
    {
        return $this->canTargetBool7;
    }

    public function setCanTargetBool7(?bool $canTargetBool7): self
    {
        $this->canTargetBool7 = $canTargetBool7;

        return $this;
    }

    public function getCanTargetBool8(): ?bool
    {
        return $this->canTargetBool8;
    }

    public function setCanTargetBool8(?bool $canTargetBool8): self
    {
        $this->canTargetBool8 = $canTargetBool8;

        return $this;
    }

    public function getCanTargetBool9(): ?bool
    {
        return $this->canTargetBool9;
    }

    public function setCanTargetBool9(?bool $canTargetBool9): self
    {
        $this->canTargetBool9 = $canTargetBool9;

        return $this;
    }

    public function getCanTargetBool10(): ?bool
    {
        return $this->canTargetBool10;
    }

    public function setCanTargetBool10(?bool $canTargetBool10): self
    {
        $this->canTargetBool10 = $canTargetBool10;

        return $this;
    }

    public function getCanTargetBool11(): ?bool
    {
        return $this->canTargetBool11;
    }

    public function setCanTargetBool11(?bool $canTargetBool11): self
    {
        $this->canTargetBool11 = $canTargetBool11;

        return $this;
    }

    public function getCanTargetBool12(): ?bool
    {
        return $this->canTargetBool12;
    }

    public function setCanTargetBool12(?bool $canTargetBool12): self
    {
        $this->canTargetBool12 = $canTargetBool12;

        return $this;
    }

    public function getCanTargetBool13(): ?bool
    {
        return $this->canTargetBool13;
    }

    public function setCanTargetBool13(?bool $canTargetBool13): self
    {
        $this->canTargetBool13 = $canTargetBool13;

        return $this;
    }

    public function getCanTargetBool14(): ?bool
    {
        return $this->canTargetBool14;
    }

    public function setCanTargetBool14(?bool $canTargetBool14): self
    {
        $this->canTargetBool14 = $canTargetBool14;

        return $this;
    }

    public function getCanTargetBool15(): ?bool
    {
        return $this->canTargetBool15;
    }

    public function setCanTargetBool15(?bool $canTargetBool15): self
    {
        $this->canTargetBool15 = $canTargetBool15;

        return $this;
    }

    public function getCanTargetBool16(): ?bool
    {
        return $this->canTargetBool16;
    }

    public function setCanTargetBool16(?bool $canTargetBool16): self
    {
        $this->canTargetBool16 = $canTargetBool16;

        return $this;
    }

    public function getCanTargetBool17(): ?bool
    {
        return $this->canTargetBool17;
    }

    public function setCanTargetBool17(?bool $canTargetBool17): self
    {
        $this->canTargetBool17 = $canTargetBool17;

        return $this;
    }

    public function getCanTargetBool18(): ?bool
    {
        return $this->canTargetBool18;
    }

    public function setCanTargetBool18(?bool $canTargetBool18): self
    {
        $this->canTargetBool18 = $canTargetBool18;

        return $this;
    }

    public function getCanTargetBool19(): ?bool
    {
        return $this->canTargetBool19;
    }

    public function setCanTargetBool19(?bool $canTargetBool19): self
    {
        $this->canTargetBool19 = $canTargetBool19;

        return $this;
    }

    public function getCanTargetBool20(): ?bool
    {
        return $this->canTargetBool20;
    }

    public function setCanTargetBool20(?bool $canTargetBool20): self
    {
        $this->canTargetBool20 = $canTargetBool20;

        return $this;
    }

    public function getCanTargetBool21(): ?bool
    {
        return $this->canTargetBool21;
    }

    public function setCanTargetBool21(?bool $canTargetBool21): self
    {
        $this->canTargetBool21 = $canTargetBool21;

        return $this;
    }

    public function getCanTargetBool22(): ?bool
    {
        return $this->canTargetBool22;
    }

    public function setCanTargetBool22(?bool $canTargetBool22): self
    {
        $this->canTargetBool22 = $canTargetBool22;

        return $this;
    }

    public function getCanTargetBool23(): ?bool
    {
        return $this->canTargetBool23;
    }

    public function setCanTargetBool23(?bool $canTargetBool23): self
    {
        $this->canTargetBool23 = $canTargetBool23;

        return $this;
    }

    public function getCanTargetBool24(): ?bool
    {
        return $this->canTargetBool24;
    }

    public function setCanTargetBool24(?bool $canTargetBool24): self
    {
        $this->canTargetBool24 = $canTargetBool24;

        return $this;
    }

    public function getCanTargetBool25(): ?bool
    {
        return $this->canTargetBool25;
    }

    public function setCanTargetBool25(?bool $canTargetBool25): self
    {
        $this->canTargetBool25 = $canTargetBool25;

        return $this;
    }

    public function getCanTargetBool26(): ?bool
    {
        return $this->canTargetBool26;
    }

    public function setCanTargetBool26(?bool $canTargetBool26): self
    {
        $this->canTargetBool26 = $canTargetBool26;

        return $this;
    }

    public function getCanTargetBool27(): ?bool
    {
        return $this->canTargetBool27;
    }

    public function setCanTargetBool27(?bool $canTargetBool27): self
    {
        $this->canTargetBool27 = $canTargetBool27;

        return $this;
    }

    public function getCanTargetBool28(): ?bool
    {
        return $this->canTargetBool28;
    }

    public function setCanTargetBool28(?bool $canTargetBool28): self
    {
        $this->canTargetBool28 = $canTargetBool28;

        return $this;
    }

    public function getCanTargetBool29(): ?bool
    {
        return $this->canTargetBool29;
    }

    public function setCanTargetBool29(?bool $canTargetBool29): self
    {
        $this->canTargetBool29 = $canTargetBool29;

        return $this;
    }

    public function getCanTargetBool30(): ?bool
    {
        return $this->canTargetBool30;
    }

    public function setCanTargetBool30(?bool $canTargetBool30): self
    {
        $this->canTargetBool30 = $canTargetBool30;

        return $this;
    }

    public function getCanTargetBool31(): ?bool
    {
        return $this->canTargetBool31;
    }

    public function setCanTargetBool31(?bool $canTargetBool31): self
    {
        $this->canTargetBool31 = $canTargetBool31;

        return $this;
    }

    public function getCanTargetBool32(): ?bool
    {
        return $this->canTargetBool32;
    }

    public function setCanTargetBool32(?bool $canTargetBool32): self
    {
        $this->canTargetBool32 = $canTargetBool32;

        return $this;
    }

    public function getCanTargetBool33(): ?bool
    {
        return $this->canTargetBool33;
    }

    public function setCanTargetBool33(?bool $canTargetBool33): self
    {
        $this->canTargetBool33 = $canTargetBool33;

        return $this;
    }

    public function getCanTargetBool34(): ?bool
    {
        return $this->canTargetBool34;
    }

    public function setCanTargetBool34(?bool $canTargetBool34): self
    {
        $this->canTargetBool34 = $canTargetBool34;

        return $this;
    }

    public function getCanTargetBool35(): ?bool
    {
        return $this->canTargetBool35;
    }

    public function setCanTargetBool35(?bool $canTargetBool35): self
    {
        $this->canTargetBool35 = $canTargetBool35;

        return $this;
    }

    public function getCanTargetBool36(): ?bool
    {
        return $this->canTargetBool36;
    }

    public function setCanTargetBool36(?bool $canTargetBool36): self
    {
        $this->canTargetBool36 = $canTargetBool36;

        return $this;
    }

    public function getCanTargetBool37(): ?bool
    {
        return $this->canTargetBool37;
    }

    public function setCanTargetBool37(?bool $canTargetBool37): self
    {
        $this->canTargetBool37 = $canTargetBool37;

        return $this;
    }

    public function getCanTargetBool38(): ?bool
    {
        return $this->canTargetBool38;
    }

    public function setCanTargetBool38(?bool $canTargetBool38): self
    {
        $this->canTargetBool38 = $canTargetBool38;

        return $this;
    }

    public function getCanTargetBool39(): ?bool
    {
        return $this->canTargetBool39;
    }

    public function setCanTargetBool39(?bool $canTargetBool39): self
    {
        $this->canTargetBool39 = $canTargetBool39;

        return $this;
    }

    public function getCanTargetBool40(): ?bool
    {
        return $this->canTargetBool40;
    }

    public function setCanTargetBool40(?bool $canTargetBool40): self
    {
        $this->canTargetBool40 = $canTargetBool40;

        return $this;
    }

    public function getCanTargetBool41(): ?bool
    {
        return $this->canTargetBool41;
    }

    public function setCanTargetBool41(?bool $canTargetBool41): self
    {
        $this->canTargetBool41 = $canTargetBool41;

        return $this;
    }

    public function getCanTargetBool42(): ?bool
    {
        return $this->canTargetBool42;
    }

    public function setCanTargetBool42(?bool $canTargetBool42): self
    {
        $this->canTargetBool42 = $canTargetBool42;

        return $this;
    }

    public function getCanTargetBool43(): ?bool
    {
        return $this->canTargetBool43;
    }

    public function setCanTargetBool43(?bool $canTargetBool43): self
    {
        $this->canTargetBool43 = $canTargetBool43;

        return $this;
    }

    public function getCanTargetBool44(): ?bool
    {
        return $this->canTargetBool44;
    }

    public function setCanTargetBool44(?bool $canTargetBool44): self
    {
        $this->canTargetBool44 = $canTargetBool44;

        return $this;
    }

    public function getCanTargetBool45(): ?bool
    {
        return $this->canTargetBool45;
    }

    public function setCanTargetBool45(?bool $canTargetBool45): self
    {
        $this->canTargetBool45 = $canTargetBool45;

        return $this;
    }

    public function getCanTargetBool46(): ?bool
    {
        return $this->canTargetBool46;
    }

    public function setCanTargetBool46(?bool $canTargetBool46): self
    {
        $this->canTargetBool46 = $canTargetBool46;

        return $this;
    }

    public function getCanTargetBool47(): ?bool
    {
        return $this->canTargetBool47;
    }

    public function setCanTargetBool47(?bool $canTargetBool47): self
    {
        $this->canTargetBool47 = $canTargetBool47;

        return $this;
    }

    public function getCanTargetBool48(): ?bool
    {
        return $this->canTargetBool48;
    }

    public function setCanTargetBool48(?bool $canTargetBool48): self
    {
        $this->canTargetBool48 = $canTargetBool48;

        return $this;
    }

    public function getCanTargetBool49(): ?bool
    {
        return $this->canTargetBool49;
    }

    public function setCanTargetBool49(?bool $canTargetBool49): self
    {
        $this->canTargetBool49 = $canTargetBool49;

        return $this;
    }

    public function getCanTargetBool50(): ?bool
    {
        return $this->canTargetBool50;
    }

    public function setCanTargetBool50(?bool $canTargetBool50): self
    {
        $this->canTargetBool50 = $canTargetBool50;

        return $this;
    }

    public function getCanTargetBool51(): ?bool
    {
        return $this->canTargetBool51;
    }

    public function setCanTargetBool51(?bool $canTargetBool51): self
    {
        $this->canTargetBool51 = $canTargetBool51;

        return $this;
    }

    public function getCanTargetBool52(): ?bool
    {
        return $this->canTargetBool52;
    }

    public function setCanTargetBool52(?bool $canTargetBool52): self
    {
        $this->canTargetBool52 = $canTargetBool52;

        return $this;
    }

    public function getCanTargetBool53(): ?bool
    {
        return $this->canTargetBool53;
    }

    public function setCanTargetBool53(?bool $canTargetBool53): self
    {
        $this->canTargetBool53 = $canTargetBool53;

        return $this;
    }

    public function getCanTargetBool54(): ?bool
    {
        return $this->canTargetBool54;
    }

    public function setCanTargetBool54(?bool $canTargetBool54): self
    {
        $this->canTargetBool54 = $canTargetBool54;

        return $this;
    }

    public function getCanTargetBool55(): ?bool
    {
        return $this->canTargetBool55;
    }

    public function setCanTargetBool55(?bool $canTargetBool55): self
    {
        $this->canTargetBool55 = $canTargetBool55;

        return $this;
    }

    public function getCanTargetBool56(): ?bool
    {
        return $this->canTargetBool56;
    }

    public function setCanTargetBool56(?bool $canTargetBool56): self
    {
        $this->canTargetBool56 = $canTargetBool56;

        return $this;
    }

    public function getCanTargetBool57(): ?bool
    {
        return $this->canTargetBool57;
    }

    public function setCanTargetBool57(?bool $canTargetBool57): self
    {
        $this->canTargetBool57 = $canTargetBool57;

        return $this;
    }

    public function getCanTargetBool58(): ?bool
    {
        return $this->canTargetBool58;
    }

    public function setCanTargetBool58(?bool $canTargetBool58): self
    {
        $this->canTargetBool58 = $canTargetBool58;

        return $this;
    }

    public function getCanTargetBool59(): ?bool
    {
        return $this->canTargetBool59;
    }

    public function setCanTargetBool59(?bool $canTargetBool59): self
    {
        $this->canTargetBool59 = $canTargetBool59;

        return $this;
    }

    public function getCanTargetBool60(): ?bool
    {
        return $this->canTargetBool60;
    }

    public function setCanTargetBool60(?bool $canTargetBool60): self
    {
        $this->canTargetBool60 = $canTargetBool60;

        return $this;
    }

    public function getCanTargetBool61(): ?bool
    {
        return $this->canTargetBool61;
    }

    public function setCanTargetBool61(?bool $canTargetBool61): self
    {
        $this->canTargetBool61 = $canTargetBool61;

        return $this;
    }

    public function getCanTargetBool62(): ?bool
    {
        return $this->canTargetBool62;
    }

    public function setCanTargetBool62(?bool $canTargetBool62): self
    {
        $this->canTargetBool62 = $canTargetBool62;

        return $this;
    }

    public function getCanTargetBool63(): ?bool
    {
        return $this->canTargetBool63;
    }

    public function setCanTargetBool63(?bool $canTargetBool63): self
    {
        $this->canTargetBool63 = $canTargetBool63;

        return $this;
    }

    public function getToDoCompleteSeq0(): ?int
    {
        return $this->toDoCompleteSeq0;
    }

    public function setToDoCompleteSeq0(?int $toDoCompleteSeq0): self
    {
        $this->toDoCompleteSeq0 = $toDoCompleteSeq0;

        return $this;
    }

    public function getToDoCompleteSeq1(): ?int
    {
        return $this->toDoCompleteSeq1;
    }

    public function setToDoCompleteSeq1(?int $toDoCompleteSeq1): self
    {
        $this->toDoCompleteSeq1 = $toDoCompleteSeq1;

        return $this;
    }

    public function getToDoCompleteSeq2(): ?int
    {
        return $this->toDoCompleteSeq2;
    }

    public function setToDoCompleteSeq2(?int $toDoCompleteSeq2): self
    {
        $this->toDoCompleteSeq2 = $toDoCompleteSeq2;

        return $this;
    }

    public function getToDoCompleteSeq3(): ?int
    {
        return $this->toDoCompleteSeq3;
    }

    public function setToDoCompleteSeq3(?int $toDoCompleteSeq3): self
    {
        $this->toDoCompleteSeq3 = $toDoCompleteSeq3;

        return $this;
    }

    public function getToDoCompleteSeq4(): ?int
    {
        return $this->toDoCompleteSeq4;
    }

    public function setToDoCompleteSeq4(?int $toDoCompleteSeq4): self
    {
        $this->toDoCompleteSeq4 = $toDoCompleteSeq4;

        return $this;
    }

    public function getToDoCompleteSeq5(): ?int
    {
        return $this->toDoCompleteSeq5;
    }

    public function setToDoCompleteSeq5(?int $toDoCompleteSeq5): self
    {
        $this->toDoCompleteSeq5 = $toDoCompleteSeq5;

        return $this;
    }

    public function getToDoCompleteSeq6(): ?int
    {
        return $this->toDoCompleteSeq6;
    }

    public function setToDoCompleteSeq6(?int $toDoCompleteSeq6): self
    {
        $this->toDoCompleteSeq6 = $toDoCompleteSeq6;

        return $this;
    }

    public function getToDoCompleteSeq7(): ?int
    {
        return $this->toDoCompleteSeq7;
    }

    public function setToDoCompleteSeq7(?int $toDoCompleteSeq7): self
    {
        $this->toDoCompleteSeq7 = $toDoCompleteSeq7;

        return $this;
    }

    public function getToDoCompleteSeq8(): ?int
    {
        return $this->toDoCompleteSeq8;
    }

    public function setToDoCompleteSeq8(?int $toDoCompleteSeq8): self
    {
        $this->toDoCompleteSeq8 = $toDoCompleteSeq8;

        return $this;
    }

    public function getToDoCompleteSeq9(): ?int
    {
        return $this->toDoCompleteSeq9;
    }

    public function setToDoCompleteSeq9(?int $toDoCompleteSeq9): self
    {
        $this->toDoCompleteSeq9 = $toDoCompleteSeq9;

        return $this;
    }

    public function getToDoCompleteSeq10(): ?int
    {
        return $this->toDoCompleteSeq10;
    }

    public function setToDoCompleteSeq10(?int $toDoCompleteSeq10): self
    {
        $this->toDoCompleteSeq10 = $toDoCompleteSeq10;

        return $this;
    }

    public function getToDoCompleteSeq11(): ?int
    {
        return $this->toDoCompleteSeq11;
    }

    public function setToDoCompleteSeq11(?int $toDoCompleteSeq11): self
    {
        $this->toDoCompleteSeq11 = $toDoCompleteSeq11;

        return $this;
    }

    public function getToDoCompleteSeq12(): ?int
    {
        return $this->toDoCompleteSeq12;
    }

    public function setToDoCompleteSeq12(?int $toDoCompleteSeq12): self
    {
        $this->toDoCompleteSeq12 = $toDoCompleteSeq12;

        return $this;
    }

    public function getToDoCompleteSeq13(): ?int
    {
        return $this->toDoCompleteSeq13;
    }

    public function setToDoCompleteSeq13(?int $toDoCompleteSeq13): self
    {
        $this->toDoCompleteSeq13 = $toDoCompleteSeq13;

        return $this;
    }

    public function getToDoCompleteSeq14(): ?int
    {
        return $this->toDoCompleteSeq14;
    }

    public function setToDoCompleteSeq14(?int $toDoCompleteSeq14): self
    {
        $this->toDoCompleteSeq14 = $toDoCompleteSeq14;

        return $this;
    }

    public function getToDoCompleteSeq15(): ?int
    {
        return $this->toDoCompleteSeq15;
    }

    public function setToDoCompleteSeq15(?int $toDoCompleteSeq15): self
    {
        $this->toDoCompleteSeq15 = $toDoCompleteSeq15;

        return $this;
    }

    public function getToDoCompleteSeq16(): ?int
    {
        return $this->toDoCompleteSeq16;
    }

    public function setToDoCompleteSeq16(?int $toDoCompleteSeq16): self
    {
        $this->toDoCompleteSeq16 = $toDoCompleteSeq16;

        return $this;
    }

    public function getToDoCompleteSeq17(): ?int
    {
        return $this->toDoCompleteSeq17;
    }

    public function setToDoCompleteSeq17(?int $toDoCompleteSeq17): self
    {
        $this->toDoCompleteSeq17 = $toDoCompleteSeq17;

        return $this;
    }

    public function getToDoCompleteSeq18(): ?int
    {
        return $this->toDoCompleteSeq18;
    }

    public function setToDoCompleteSeq18(?int $toDoCompleteSeq18): self
    {
        $this->toDoCompleteSeq18 = $toDoCompleteSeq18;

        return $this;
    }

    public function getToDoCompleteSeq19(): ?int
    {
        return $this->toDoCompleteSeq19;
    }

    public function setToDoCompleteSeq19(?int $toDoCompleteSeq19): self
    {
        $this->toDoCompleteSeq19 = $toDoCompleteSeq19;

        return $this;
    }

    public function getToDoCompleteSeq20(): ?int
    {
        return $this->toDoCompleteSeq20;
    }

    public function setToDoCompleteSeq20(?int $toDoCompleteSeq20): self
    {
        $this->toDoCompleteSeq20 = $toDoCompleteSeq20;

        return $this;
    }

    public function getToDoCompleteSeq21(): ?int
    {
        return $this->toDoCompleteSeq21;
    }

    public function setToDoCompleteSeq21(?int $toDoCompleteSeq21): self
    {
        $this->toDoCompleteSeq21 = $toDoCompleteSeq21;

        return $this;
    }

    public function getToDoCompleteSeq22(): ?int
    {
        return $this->toDoCompleteSeq22;
    }

    public function setToDoCompleteSeq22(?int $toDoCompleteSeq22): self
    {
        $this->toDoCompleteSeq22 = $toDoCompleteSeq22;

        return $this;
    }

    public function getToDoCompleteSeq23(): ?int
    {
        return $this->toDoCompleteSeq23;
    }

    public function setToDoCompleteSeq23(?int $toDoCompleteSeq23): self
    {
        $this->toDoCompleteSeq23 = $toDoCompleteSeq23;

        return $this;
    }

    public function getToDoQty0(): ?int
    {
        return $this->toDoQty0;
    }

    public function setToDoQty0(?int $toDoQty0): self
    {
        $this->toDoQty0 = $toDoQty0;

        return $this;
    }

    public function getToDoQty1(): ?int
    {
        return $this->toDoQty1;
    }

    public function setToDoQty1(?int $toDoQty1): self
    {
        $this->toDoQty1 = $toDoQty1;

        return $this;
    }

    public function getToDoQty2(): ?int
    {
        return $this->toDoQty2;
    }

    public function setToDoQty2(?int $toDoQty2): self
    {
        $this->toDoQty2 = $toDoQty2;

        return $this;
    }

    public function getToDoQty3(): ?int
    {
        return $this->toDoQty3;
    }

    public function setToDoQty3(?int $toDoQty3): self
    {
        $this->toDoQty3 = $toDoQty3;

        return $this;
    }

    public function getToDoQty4(): ?int
    {
        return $this->toDoQty4;
    }

    public function setToDoQty4(?int $toDoQty4): self
    {
        $this->toDoQty4 = $toDoQty4;

        return $this;
    }

    public function getToDoQty5(): ?int
    {
        return $this->toDoQty5;
    }

    public function setToDoQty5(?int $toDoQty5): self
    {
        $this->toDoQty5 = $toDoQty5;

        return $this;
    }

    public function getToDoQty6(): ?int
    {
        return $this->toDoQty6;
    }

    public function setToDoQty6(?int $toDoQty6): self
    {
        $this->toDoQty6 = $toDoQty6;

        return $this;
    }

    public function getToDoQty7(): ?int
    {
        return $this->toDoQty7;
    }

    public function setToDoQty7(?int $toDoQty7): self
    {
        $this->toDoQty7 = $toDoQty7;

        return $this;
    }

    public function getToDoQty8(): ?int
    {
        return $this->toDoQty8;
    }

    public function setToDoQty8(?int $toDoQty8): self
    {
        $this->toDoQty8 = $toDoQty8;

        return $this;
    }

    public function getToDoQty9(): ?int
    {
        return $this->toDoQty9;
    }

    public function setToDoQty9(?int $toDoQty9): self
    {
        $this->toDoQty9 = $toDoQty9;

        return $this;
    }

    public function getToDoQty10(): ?int
    {
        return $this->toDoQty10;
    }

    public function setToDoQty10(?int $toDoQty10): self
    {
        $this->toDoQty10 = $toDoQty10;

        return $this;
    }

    public function getToDoQty11(): ?int
    {
        return $this->toDoQty11;
    }

    public function setToDoQty11(?int $toDoQty11): self
    {
        $this->toDoQty11 = $toDoQty11;

        return $this;
    }

    public function getToDoQty12(): ?int
    {
        return $this->toDoQty12;
    }

    public function setToDoQty12(?int $toDoQty12): self
    {
        $this->toDoQty12 = $toDoQty12;

        return $this;
    }

    public function getToDoQty13(): ?int
    {
        return $this->toDoQty13;
    }

    public function setToDoQty13(?int $toDoQty13): self
    {
        $this->toDoQty13 = $toDoQty13;

        return $this;
    }

    public function getToDoQty14(): ?int
    {
        return $this->toDoQty14;
    }

    public function setToDoQty14(?int $toDoQty14): self
    {
        $this->toDoQty14 = $toDoQty14;

        return $this;
    }

    public function getToDoQty15(): ?int
    {
        return $this->toDoQty15;
    }

    public function setToDoQty15(?int $toDoQty15): self
    {
        $this->toDoQty15 = $toDoQty15;

        return $this;
    }

    public function getToDoQty16(): ?int
    {
        return $this->toDoQty16;
    }

    public function setToDoQty16(?int $toDoQty16): self
    {
        $this->toDoQty16 = $toDoQty16;

        return $this;
    }

    public function getToDoQty17(): ?int
    {
        return $this->toDoQty17;
    }

    public function setToDoQty17(?int $toDoQty17): self
    {
        $this->toDoQty17 = $toDoQty17;

        return $this;
    }

    public function getToDoQty18(): ?int
    {
        return $this->toDoQty18;
    }

    public function setToDoQty18(?int $toDoQty18): self
    {
        $this->toDoQty18 = $toDoQty18;

        return $this;
    }

    public function getToDoQty19(): ?int
    {
        return $this->toDoQty19;
    }

    public function setToDoQty19(?int $toDoQty19): self
    {
        $this->toDoQty19 = $toDoQty19;

        return $this;
    }

    public function getToDoQty20(): ?int
    {
        return $this->toDoQty20;
    }

    public function setToDoQty20(?int $toDoQty20): self
    {
        $this->toDoQty20 = $toDoQty20;

        return $this;
    }

    public function getToDoQty21(): ?int
    {
        return $this->toDoQty21;
    }

    public function setToDoQty21(?int $toDoQty21): self
    {
        $this->toDoQty21 = $toDoQty21;

        return $this;
    }

    public function getToDoQty22(): ?int
    {
        return $this->toDoQty22;
    }

    public function setToDoQty22(?int $toDoQty22): self
    {
        $this->toDoQty22 = $toDoQty22;

        return $this;
    }

    public function getToDoQty23(): ?int
    {
        return $this->toDoQty23;
    }

    public function setToDoQty23(?int $toDoQty23): self
    {
        $this->toDoQty23 = $toDoQty23;

        return $this;
    }

    public function getCountableNum0(): ?int
    {
        return $this->countableNum0;
    }

    public function setCountableNum0(?int $countableNum0): self
    {
        $this->countableNum0 = $countableNum0;

        return $this;
    }

    public function getCountableNum1(): ?int
    {
        return $this->countableNum1;
    }

    public function setCountableNum1(?int $countableNum1): self
    {
        $this->countableNum1 = $countableNum1;

        return $this;
    }

    public function getCountableNum2(): ?int
    {
        return $this->countableNum2;
    }

    public function setCountableNum2(?int $countableNum2): self
    {
        $this->countableNum2 = $countableNum2;

        return $this;
    }

    public function getCountableNum3(): ?int
    {
        return $this->countableNum3;
    }

    public function setCountableNum3(?int $countableNum3): self
    {
        $this->countableNum3 = $countableNum3;

        return $this;
    }

    public function getCountableNum4(): ?int
    {
        return $this->countableNum4;
    }

    public function setCountableNum4(?int $countableNum4): self
    {
        $this->countableNum4 = $countableNum4;

        return $this;
    }

    public function getCountableNum5(): ?int
    {
        return $this->countableNum5;
    }

    public function setCountableNum5(?int $countableNum5): self
    {
        $this->countableNum5 = $countableNum5;

        return $this;
    }

    public function getCountableNum6(): ?int
    {
        return $this->countableNum6;
    }

    public function setCountableNum6(?int $countableNum6): self
    {
        $this->countableNum6 = $countableNum6;

        return $this;
    }

    public function getCountableNum7(): ?int
    {
        return $this->countableNum7;
    }

    public function setCountableNum7(?int $countableNum7): self
    {
        $this->countableNum7 = $countableNum7;

        return $this;
    }

    public function getCountableNum8(): ?int
    {
        return $this->countableNum8;
    }

    public function setCountableNum8(?int $countableNum8): self
    {
        $this->countableNum8 = $countableNum8;

        return $this;
    }

    public function getCountableNum9(): ?int
    {
        return $this->countableNum9;
    }

    public function setCountableNum9(?int $countableNum9): self
    {
        $this->countableNum9 = $countableNum9;

        return $this;
    }

    public function getCountableNum10(): ?int
    {
        return $this->countableNum10;
    }

    public function setCountableNum10(?int $countableNum10): self
    {
        $this->countableNum10 = $countableNum10;

        return $this;
    }

    public function getCountableNum11(): ?int
    {
        return $this->countableNum11;
    }

    public function setCountableNum11(?int $countableNum11): self
    {
        $this->countableNum11 = $countableNum11;

        return $this;
    }

    public function getCountableNum12(): ?int
    {
        return $this->countableNum12;
    }

    public function setCountableNum12(?int $countableNum12): self
    {
        $this->countableNum12 = $countableNum12;

        return $this;
    }

    public function getCountableNum13(): ?int
    {
        return $this->countableNum13;
    }

    public function setCountableNum13(?int $countableNum13): self
    {
        $this->countableNum13 = $countableNum13;

        return $this;
    }

    public function getCountableNum14(): ?int
    {
        return $this->countableNum14;
    }

    public function setCountableNum14(?int $countableNum14): self
    {
        $this->countableNum14 = $countableNum14;

        return $this;
    }

    public function getCountableNum15(): ?int
    {
        return $this->countableNum15;
    }

    public function setCountableNum15(?int $countableNum15): self
    {
        $this->countableNum15 = $countableNum15;

        return $this;
    }

    public function getCountableNum16(): ?int
    {
        return $this->countableNum16;
    }

    public function setCountableNum16(?int $countableNum16): self
    {
        $this->countableNum16 = $countableNum16;

        return $this;
    }

    public function getCountableNum17(): ?int
    {
        return $this->countableNum17;
    }

    public function setCountableNum17(?int $countableNum17): self
    {
        $this->countableNum17 = $countableNum17;

        return $this;
    }

    public function getCountableNum18(): ?int
    {
        return $this->countableNum18;
    }

    public function setCountableNum18(?int $countableNum18): self
    {
        $this->countableNum18 = $countableNum18;

        return $this;
    }

    public function getCountableNum19(): ?int
    {
        return $this->countableNum19;
    }

    public function setCountableNum19(?int $countableNum19): self
    {
        $this->countableNum19 = $countableNum19;

        return $this;
    }

    public function getCountableNum20(): ?int
    {
        return $this->countableNum20;
    }

    public function setCountableNum20(?int $countableNum20): self
    {
        $this->countableNum20 = $countableNum20;

        return $this;
    }

    public function getCountableNum21(): ?int
    {
        return $this->countableNum21;
    }

    public function setCountableNum21(?int $countableNum21): self
    {
        $this->countableNum21 = $countableNum21;

        return $this;
    }

    public function getCountableNum22(): ?int
    {
        return $this->countableNum22;
    }

    public function setCountableNum22(?int $countableNum22): self
    {
        $this->countableNum22 = $countableNum22;

        return $this;
    }

    public function getCountableNum23(): ?int
    {
        return $this->countableNum23;
    }

    public function setCountableNum23(?int $countableNum23): self
    {
        $this->countableNum23 = $countableNum23;

        return $this;
    }

    public function getLevelMax(): ?int
    {
        return $this->levelMax;
    }

    public function setLevelMax(?int $levelMax): self
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    public function getExpFactor(): ?string
    {
        return $this->expFactor;
    }

    public function setExpFactor(?string $expFactor): self
    {
        $this->expFactor = $expFactor;

        return $this;
    }

    public function getGilReward(): ?string
    {
        return $this->gilReward;
    }

    public function setGilReward(?string $gilReward): self
    {
        $this->gilReward = $gilReward;

        return $this;
    }

    public function getCurrencyRewardCount(): ?string
    {
        return $this->currencyRewardCount;
    }

    public function setCurrencyRewardCount(?string $currencyRewardCount): self
    {
        $this->currencyRewardCount = $currencyRewardCount;

        return $this;
    }

    public function getItemCountCatalyst0(): ?int
    {
        return $this->itemCountCatalyst0;
    }

    public function setItemCountCatalyst0(?int $itemCountCatalyst0): self
    {
        $this->itemCountCatalyst0 = $itemCountCatalyst0;

        return $this;
    }

    public function getItemCountCatalyst1(): ?int
    {
        return $this->itemCountCatalyst1;
    }

    public function setItemCountCatalyst1(?int $itemCountCatalyst1): self
    {
        $this->itemCountCatalyst1 = $itemCountCatalyst1;

        return $this;
    }

    public function getItemCountCatalyst2(): ?int
    {
        return $this->itemCountCatalyst2;
    }

    public function setItemCountCatalyst2(?int $itemCountCatalyst2): self
    {
        $this->itemCountCatalyst2 = $itemCountCatalyst2;

        return $this;
    }

    public function getItemRewardType(): ?int
    {
        return $this->itemRewardType;
    }

    public function setItemRewardType(?int $itemRewardType): self
    {
        $this->itemRewardType = $itemRewardType;

        return $this;
    }

    public function getItemReward0(): ?int
    {
        return $this->itemReward0;
    }

    public function setItemReward0(?int $itemReward0): self
    {
        $this->itemReward0 = $itemReward0;

        return $this;
    }

    public function getItemReward1(): ?int
    {
        return $this->itemReward1;
    }

    public function setItemReward1(?int $itemReward1): self
    {
        $this->itemReward1 = $itemReward1;

        return $this;
    }

    public function getItemReward2(): ?int
    {
        return $this->itemReward2;
    }

    public function setItemReward2(?int $itemReward2): self
    {
        $this->itemReward2 = $itemReward2;

        return $this;
    }

    public function getItemReward3(): ?int
    {
        return $this->itemReward3;
    }

    public function setItemReward3(?int $itemReward3): self
    {
        $this->itemReward3 = $itemReward3;

        return $this;
    }

    public function getItemReward4(): ?int
    {
        return $this->itemReward4;
    }

    public function setItemReward4(?int $itemReward4): self
    {
        $this->itemReward4 = $itemReward4;

        return $this;
    }

    public function getItemReward5(): ?int
    {
        return $this->itemReward5;
    }

    public function setItemReward5(?int $itemReward5): self
    {
        $this->itemReward5 = $itemReward5;

        return $this;
    }

    public function getItemReward6(): ?int
    {
        return $this->itemReward6;
    }

    public function setItemReward6(?int $itemReward6): self
    {
        $this->itemReward6 = $itemReward6;

        return $this;
    }

    public function getItemCountReward0(): ?int
    {
        return $this->itemCountReward0;
    }

    public function setItemCountReward0(?int $itemCountReward0): self
    {
        $this->itemCountReward0 = $itemCountReward0;

        return $this;
    }

    public function getItemCountReward1(): ?int
    {
        return $this->itemCountReward1;
    }

    public function setItemCountReward1(?int $itemCountReward1): self
    {
        $this->itemCountReward1 = $itemCountReward1;

        return $this;
    }

    public function getItemCountReward2(): ?int
    {
        return $this->itemCountReward2;
    }

    public function setItemCountReward2(?int $itemCountReward2): self
    {
        $this->itemCountReward2 = $itemCountReward2;

        return $this;
    }

    public function getItemCountReward3(): ?int
    {
        return $this->itemCountReward3;
    }

    public function setItemCountReward3(?int $itemCountReward3): self
    {
        $this->itemCountReward3 = $itemCountReward3;

        return $this;
    }

    public function getItemCountReward4(): ?int
    {
        return $this->itemCountReward4;
    }

    public function setItemCountReward4(?int $itemCountReward4): self
    {
        $this->itemCountReward4 = $itemCountReward4;

        return $this;
    }

    public function getItemCountReward5(): ?int
    {
        return $this->itemCountReward5;
    }

    public function setItemCountReward5(?int $itemCountReward5): self
    {
        $this->itemCountReward5 = $itemCountReward5;

        return $this;
    }

    public function getItemCountReward6(): ?int
    {
        return $this->itemCountReward6;
    }

    public function setItemCountReward6(?int $itemCountReward6): self
    {
        $this->itemCountReward6 = $itemCountReward6;

        return $this;
    }

    public function getColumn1466(): ?bool
    {
        return $this->column1466;
    }

    public function setColumn1466(?bool $column1466): self
    {
        $this->column1466 = $column1466;

        return $this;
    }

    public function getColumn1467(): ?bool
    {
        return $this->column1467;
    }

    public function setColumn1467(?bool $column1467): self
    {
        $this->column1467 = $column1467;

        return $this;
    }

    public function getColumn1468(): ?bool
    {
        return $this->column1468;
    }

    public function setColumn1468(?bool $column1468): self
    {
        $this->column1468 = $column1468;

        return $this;
    }

    public function getColumn1469(): ?bool
    {
        return $this->column1469;
    }

    public function setColumn1469(?bool $column1469): self
    {
        $this->column1469 = $column1469;

        return $this;
    }

    public function getColumn1470(): ?bool
    {
        return $this->column1470;
    }

    public function setColumn1470(?bool $column1470): self
    {
        $this->column1470 = $column1470;

        return $this;
    }

    public function getColumn1471(): ?bool
    {
        return $this->column1471;
    }

    public function setColumn1471(?bool $column1471): self
    {
        $this->column1471 = $column1471;

        return $this;
    }

    public function getColumn1472(): ?bool
    {
        return $this->column1472;
    }

    public function setColumn1472(?bool $column1472): self
    {
        $this->column1472 = $column1472;

        return $this;
    }

    public function getOptionalItemCountReward0(): ?int
    {
        return $this->optionalItemCountReward0;
    }

    public function setOptionalItemCountReward0(?int $optionalItemCountReward0): self
    {
        $this->optionalItemCountReward0 = $optionalItemCountReward0;

        return $this;
    }

    public function getOptionalItemCountReward1(): ?int
    {
        return $this->optionalItemCountReward1;
    }

    public function setOptionalItemCountReward1(?int $optionalItemCountReward1): self
    {
        $this->optionalItemCountReward1 = $optionalItemCountReward1;

        return $this;
    }

    public function getOptionalItemCountReward2(): ?int
    {
        return $this->optionalItemCountReward2;
    }

    public function setOptionalItemCountReward2(?int $optionalItemCountReward2): self
    {
        $this->optionalItemCountReward2 = $optionalItemCountReward2;

        return $this;
    }

    public function getOptionalItemCountReward3(): ?int
    {
        return $this->optionalItemCountReward3;
    }

    public function setOptionalItemCountReward3(?int $optionalItemCountReward3): self
    {
        $this->optionalItemCountReward3 = $optionalItemCountReward3;

        return $this;
    }

    public function getOptionalItemCountReward4(): ?int
    {
        return $this->optionalItemCountReward4;
    }

    public function setOptionalItemCountReward4(?int $optionalItemCountReward4): self
    {
        $this->optionalItemCountReward4 = $optionalItemCountReward4;

        return $this;
    }

    public function getOptionalItemIsHqReward0(): ?bool
    {
        return $this->optionalItemIsHqReward0;
    }

    public function setOptionalItemIsHqReward0(?bool $optionalItemIsHqReward0): self
    {
        $this->optionalItemIsHqReward0 = $optionalItemIsHqReward0;

        return $this;
    }

    public function getOptionalItemIsHqReward1(): ?bool
    {
        return $this->optionalItemIsHqReward1;
    }

    public function setOptionalItemIsHqReward1(?bool $optionalItemIsHqReward1): self
    {
        $this->optionalItemIsHqReward1 = $optionalItemIsHqReward1;

        return $this;
    }

    public function getOptionalItemIsHqReward2(): ?bool
    {
        return $this->optionalItemIsHqReward2;
    }

    public function setOptionalItemIsHqReward2(?bool $optionalItemIsHqReward2): self
    {
        $this->optionalItemIsHqReward2 = $optionalItemIsHqReward2;

        return $this;
    }

    public function getOptionalItemIsHqReward3(): ?bool
    {
        return $this->optionalItemIsHqReward3;
    }

    public function setOptionalItemIsHqReward3(?bool $optionalItemIsHqReward3): self
    {
        $this->optionalItemIsHqReward3 = $optionalItemIsHqReward3;

        return $this;
    }

    public function getOptionalItemIsHqReward4(): ?bool
    {
        return $this->optionalItemIsHqReward4;
    }

    public function setOptionalItemIsHqReward4(?bool $optionalItemIsHqReward4): self
    {
        $this->optionalItemIsHqReward4 = $optionalItemIsHqReward4;

        return $this;
    }

    public function getSystemReward0(): ?string
    {
        return $this->systemReward0;
    }

    public function setSystemReward0(?string $systemReward0): self
    {
        $this->systemReward0 = $systemReward0;

        return $this;
    }

    public function getSystemReward1(): ?string
    {
        return $this->systemReward1;
    }

    public function setSystemReward1(?string $systemReward1): self
    {
        $this->systemReward1 = $systemReward1;

        return $this;
    }

    public function getGctypeReward(): ?string
    {
        return $this->gctypeReward;
    }

    public function setGctypeReward(?string $gctypeReward): self
    {
        $this->gctypeReward = $gctypeReward;

        return $this;
    }

    public function getTomestone(): ?int
    {
        return $this->tomestone;
    }

    public function setTomestone(?int $tomestone): self
    {
        $this->tomestone = $tomestone;

        return $this;
    }

    public function getTomestoneReward(): ?int
    {
        return $this->tomestoneReward;
    }

    public function setTomestoneReward(?int $tomestoneReward): self
    {
        $this->tomestoneReward = $tomestoneReward;

        return $this;
    }

    public function getTomestoneCountReward(): ?int
    {
        return $this->tomestoneCountReward;
    }

    public function setTomestoneCountReward(?int $tomestoneCountReward): self
    {
        $this->tomestoneCountReward = $tomestoneCountReward;

        return $this;
    }

    public function getReputationReward(): ?int
    {
        return $this->reputationReward;
    }

    public function setReputationReward(?int $reputationReward): self
    {
        $this->reputationReward = $reputationReward;

        return $this;
    }

    public function getColumn1515(): ?int
    {
        return $this->column1515;
    }

    public function setColumn1515(?int $column1515): self
    {
        $this->column1515 = $column1515;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIconSpecial(): ?int
    {
        return $this->iconSpecial;
    }

    public function setIconSpecial(?int $iconSpecial): self
    {
        $this->iconSpecial = $iconSpecial;

        return $this;
    }

    public function getIntroduction(): ?bool
    {
        return $this->introduction;
    }

    public function setIntroduction(?bool $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getHideOfferIcon(): ?bool
    {
        return $this->hideOfferIcon;
    }

    public function setHideOfferIcon(?bool $hideOfferIcon): self
    {
        $this->hideOfferIcon = $hideOfferIcon;

        return $this;
    }

    public function getColumn1521(): ?int
    {
        return $this->column1521;
    }

    public function setColumn1521(?int $column1521): self
    {
        $this->column1521 = $column1521;

        return $this;
    }

    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }

    public function setSortKey(?string $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    public function getColumn1523(): ?bool
    {
        return $this->column1523;
    }

    public function setColumn1523(?bool $column1523): self
    {
        $this->column1523 = $column1523;

        return $this;
    }

    public function getEventIconType(): ?EventIconType
    {
        return $this->eventIconType;
    }

    public function setEventIconType(?EventIconType $eventIconType): self
    {
        $this->eventIconType = $eventIconType;

        return $this;
    }

    public function getJournalGenre(): ?JournalGenre
    {
        return $this->journalGenre;
    }

    public function setJournalGenre(?JournalGenre $journalGenre): self
    {
        $this->journalGenre = $journalGenre;

        return $this;
    }

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getInstanceContentUnlock(): ?InstanceContent
    {
        return $this->instanceContentUnlock;
    }

    public function setInstanceContentUnlock(?InstanceContent $instanceContentUnlock): self
    {
        $this->instanceContentUnlock = $instanceContentUnlock;

        return $this;
    }

    public function getOtherReward(): ?QuestRewardOther
    {
        return $this->otherReward;
    }

    public function setOtherReward(?QuestRewardOther $otherReward): self
    {
        $this->otherReward = $otherReward;

        return $this;
    }

    public function getGeneralActionReward1(): ?GeneralAction
    {
        return $this->generalActionReward1;
    }

    public function setGeneralActionReward1(?GeneralAction $generalActionReward1): self
    {
        $this->generalActionReward1 = $generalActionReward1;

        return $this;
    }

    public function getGeneralActionReward0(): ?GeneralAction
    {
        return $this->generalActionReward0;
    }

    public function setGeneralActionReward0(?GeneralAction $generalActionReward0): self
    {
        $this->generalActionReward0 = $generalActionReward0;

        return $this;
    }

    public function getActionReward(): ?Action
    {
        return $this->actionReward;
    }

    public function setActionReward(?Action $actionReward): self
    {
        $this->actionReward = $actionReward;

        return $this;
    }

    public function getEmoteReward(): ?Emote
    {
        return $this->emoteReward;
    }

    public function setEmoteReward(?Emote $emoteReward): self
    {
        $this->emoteReward = $emoteReward;

        return $this;
    }

    public function getOptionalItemStainReward4(): ?Stain
    {
        return $this->optionalItemStainReward4;
    }

    public function setOptionalItemStainReward4(?Stain $optionalItemStainReward4): self
    {
        $this->optionalItemStainReward4 = $optionalItemStainReward4;

        return $this;
    }

    public function getOptionalItemStainReward3(): ?Stain
    {
        return $this->optionalItemStainReward3;
    }

    public function setOptionalItemStainReward3(?Stain $optionalItemStainReward3): self
    {
        $this->optionalItemStainReward3 = $optionalItemStainReward3;

        return $this;
    }

    public function getOptionalItemStainReward2(): ?Stain
    {
        return $this->optionalItemStainReward2;
    }

    public function setOptionalItemStainReward2(?Stain $optionalItemStainReward2): self
    {
        $this->optionalItemStainReward2 = $optionalItemStainReward2;

        return $this;
    }

    public function getOptionalItemStainReward1(): ?Stain
    {
        return $this->optionalItemStainReward1;
    }

    public function setOptionalItemStainReward1(?Stain $optionalItemStainReward1): self
    {
        $this->optionalItemStainReward1 = $optionalItemStainReward1;

        return $this;
    }

    public function getOptionalItemStainReward0(): ?Stain
    {
        return $this->optionalItemStainReward0;
    }

    public function setOptionalItemStainReward0(?Stain $optionalItemStainReward0): self
    {
        $this->optionalItemStainReward0 = $optionalItemStainReward0;

        return $this;
    }

    public function getOptionalItemReward4(): ?Item
    {
        return $this->optionalItemReward4;
    }

    public function setOptionalItemReward4(?Item $optionalItemReward4): self
    {
        $this->optionalItemReward4 = $optionalItemReward4;

        return $this;
    }

    public function getOptionalItemReward3(): ?Item
    {
        return $this->optionalItemReward3;
    }

    public function setOptionalItemReward3(?Item $optionalItemReward3): self
    {
        $this->optionalItemReward3 = $optionalItemReward3;

        return $this;
    }

    public function getOptionalItemReward2(): ?Item
    {
        return $this->optionalItemReward2;
    }

    public function setOptionalItemReward2(?Item $optionalItemReward2): self
    {
        $this->optionalItemReward2 = $optionalItemReward2;

        return $this;
    }

    public function getOptionalItemReward1(): ?Item
    {
        return $this->optionalItemReward1;
    }

    public function setOptionalItemReward1(?Item $optionalItemReward1): self
    {
        $this->optionalItemReward1 = $optionalItemReward1;

        return $this;
    }

    public function getOptionalItemReward0(): ?Item
    {
        return $this->optionalItemReward0;
    }

    public function setOptionalItemReward0(?Item $optionalItemReward0): self
    {
        $this->optionalItemReward0 = $optionalItemReward0;

        return $this;
    }

    public function getStainReward6(): ?Stain
    {
        return $this->stainReward6;
    }

    public function setStainReward6(?Stain $stainReward6): self
    {
        $this->stainReward6 = $stainReward6;

        return $this;
    }

    public function getStainReward5(): ?Stain
    {
        return $this->stainReward5;
    }

    public function setStainReward5(?Stain $stainReward5): self
    {
        $this->stainReward5 = $stainReward5;

        return $this;
    }

    public function getStainReward4(): ?Stain
    {
        return $this->stainReward4;
    }

    public function setStainReward4(?Stain $stainReward4): self
    {
        $this->stainReward4 = $stainReward4;

        return $this;
    }

    public function getStainReward3(): ?Stain
    {
        return $this->stainReward3;
    }

    public function setStainReward3(?Stain $stainReward3): self
    {
        $this->stainReward3 = $stainReward3;

        return $this;
    }

    public function getStainReward2(): ?Stain
    {
        return $this->stainReward2;
    }

    public function setStainReward2(?Stain $stainReward2): self
    {
        $this->stainReward2 = $stainReward2;

        return $this;
    }

    public function getStainReward1(): ?Stain
    {
        return $this->stainReward1;
    }

    public function setStainReward1(?Stain $stainReward1): self
    {
        $this->stainReward1 = $stainReward1;

        return $this;
    }

    public function getStainReward0(): ?Stain
    {
        return $this->stainReward0;
    }

    public function setStainReward0(?Stain $stainReward0): self
    {
        $this->stainReward0 = $stainReward0;

        return $this;
    }

    public function getItemCatalyst2(): ?Item
    {
        return $this->itemCatalyst2;
    }

    public function setItemCatalyst2(?Item $itemCatalyst2): self
    {
        $this->itemCatalyst2 = $itemCatalyst2;

        return $this;
    }

    public function getItemCatalyst1(): ?Item
    {
        return $this->itemCatalyst1;
    }

    public function setItemCatalyst1(?Item $itemCatalyst1): self
    {
        $this->itemCatalyst1 = $itemCatalyst1;

        return $this;
    }

    public function getItemCatalyst0(): ?Item
    {
        return $this->itemCatalyst0;
    }

    public function setItemCatalyst0(?Item $itemCatalyst0): self
    {
        $this->itemCatalyst0 = $itemCatalyst0;

        return $this;
    }

    public function getCurrencyReward(): ?Item
    {
        return $this->currencyReward;
    }

    public function setCurrencyReward(?Item $currencyReward): self
    {
        $this->currencyReward = $currencyReward;

        return $this;
    }

    public function getQuestRewardOtherDisplay(): ?QuestRewardOther
    {
        return $this->questRewardOtherDisplay;
    }

    public function setQuestRewardOtherDisplay(?QuestRewardOther $questRewardOtherDisplay): self
    {
        $this->questRewardOtherDisplay = $questRewardOtherDisplay;

        return $this;
    }

    public function getClassJobRequired(): ?ClassJob
    {
        return $this->classJobRequired;
    }

    public function setClassJobRequired(?ClassJob $classJobRequired): self
    {
        $this->classJobRequired = $classJobRequired;

        return $this;
    }

    public function getToDoChildLocation236(): ?Level
    {
        return $this->toDoChildLocation236;
    }

    public function setToDoChildLocation236(?Level $toDoChildLocation236): self
    {
        $this->toDoChildLocation236 = $toDoChildLocation236;

        return $this;
    }

    public function getToDoChildLocation226(): ?Level
    {
        return $this->toDoChildLocation226;
    }

    public function setToDoChildLocation226(?Level $toDoChildLocation226): self
    {
        $this->toDoChildLocation226 = $toDoChildLocation226;

        return $this;
    }

    public function getToDoChildLocation216(): ?Level
    {
        return $this->toDoChildLocation216;
    }

    public function setToDoChildLocation216(?Level $toDoChildLocation216): self
    {
        $this->toDoChildLocation216 = $toDoChildLocation216;

        return $this;
    }

    public function getToDoChildLocation206(): ?Level
    {
        return $this->toDoChildLocation206;
    }

    public function setToDoChildLocation206(?Level $toDoChildLocation206): self
    {
        $this->toDoChildLocation206 = $toDoChildLocation206;

        return $this;
    }

    public function getToDoChildLocation196(): ?Level
    {
        return $this->toDoChildLocation196;
    }

    public function setToDoChildLocation196(?Level $toDoChildLocation196): self
    {
        $this->toDoChildLocation196 = $toDoChildLocation196;

        return $this;
    }

    public function getToDoChildLocation186(): ?Level
    {
        return $this->toDoChildLocation186;
    }

    public function setToDoChildLocation186(?Level $toDoChildLocation186): self
    {
        $this->toDoChildLocation186 = $toDoChildLocation186;

        return $this;
    }

    public function getToDoChildLocation176(): ?Level
    {
        return $this->toDoChildLocation176;
    }

    public function setToDoChildLocation176(?Level $toDoChildLocation176): self
    {
        $this->toDoChildLocation176 = $toDoChildLocation176;

        return $this;
    }

    public function getToDoChildLocation166(): ?Level
    {
        return $this->toDoChildLocation166;
    }

    public function setToDoChildLocation166(?Level $toDoChildLocation166): self
    {
        $this->toDoChildLocation166 = $toDoChildLocation166;

        return $this;
    }

    public function getToDoChildLocation156(): ?Level
    {
        return $this->toDoChildLocation156;
    }

    public function setToDoChildLocation156(?Level $toDoChildLocation156): self
    {
        $this->toDoChildLocation156 = $toDoChildLocation156;

        return $this;
    }

    public function getToDoChildLocation146(): ?Level
    {
        return $this->toDoChildLocation146;
    }

    public function setToDoChildLocation146(?Level $toDoChildLocation146): self
    {
        $this->toDoChildLocation146 = $toDoChildLocation146;

        return $this;
    }

    public function getToDoChildLocation136(): ?Level
    {
        return $this->toDoChildLocation136;
    }

    public function setToDoChildLocation136(?Level $toDoChildLocation136): self
    {
        $this->toDoChildLocation136 = $toDoChildLocation136;

        return $this;
    }

    public function getToDoChildLocation126(): ?Level
    {
        return $this->toDoChildLocation126;
    }

    public function setToDoChildLocation126(?Level $toDoChildLocation126): self
    {
        $this->toDoChildLocation126 = $toDoChildLocation126;

        return $this;
    }

    public function getToDoChildLocation116(): ?Level
    {
        return $this->toDoChildLocation116;
    }

    public function setToDoChildLocation116(?Level $toDoChildLocation116): self
    {
        $this->toDoChildLocation116 = $toDoChildLocation116;

        return $this;
    }

    public function getToDoChildLocation106(): ?Level
    {
        return $this->toDoChildLocation106;
    }

    public function setToDoChildLocation106(?Level $toDoChildLocation106): self
    {
        $this->toDoChildLocation106 = $toDoChildLocation106;

        return $this;
    }

    public function getToDoChildLocation96(): ?Level
    {
        return $this->toDoChildLocation96;
    }

    public function setToDoChildLocation96(?Level $toDoChildLocation96): self
    {
        $this->toDoChildLocation96 = $toDoChildLocation96;

        return $this;
    }

    public function getToDoChildLocation86(): ?Level
    {
        return $this->toDoChildLocation86;
    }

    public function setToDoChildLocation86(?Level $toDoChildLocation86): self
    {
        $this->toDoChildLocation86 = $toDoChildLocation86;

        return $this;
    }

    public function getToDoChildLocation76(): ?Level
    {
        return $this->toDoChildLocation76;
    }

    public function setToDoChildLocation76(?Level $toDoChildLocation76): self
    {
        $this->toDoChildLocation76 = $toDoChildLocation76;

        return $this;
    }

    public function getToDoChildLocation66(): ?Level
    {
        return $this->toDoChildLocation66;
    }

    public function setToDoChildLocation66(?Level $toDoChildLocation66): self
    {
        $this->toDoChildLocation66 = $toDoChildLocation66;

        return $this;
    }

    public function getToDoChildLocation56(): ?Level
    {
        return $this->toDoChildLocation56;
    }

    public function setToDoChildLocation56(?Level $toDoChildLocation56): self
    {
        $this->toDoChildLocation56 = $toDoChildLocation56;

        return $this;
    }

    public function getToDoChildLocation46(): ?Level
    {
        return $this->toDoChildLocation46;
    }

    public function setToDoChildLocation46(?Level $toDoChildLocation46): self
    {
        $this->toDoChildLocation46 = $toDoChildLocation46;

        return $this;
    }

    public function getToDoChildLocation36(): ?Level
    {
        return $this->toDoChildLocation36;
    }

    public function setToDoChildLocation36(?Level $toDoChildLocation36): self
    {
        $this->toDoChildLocation36 = $toDoChildLocation36;

        return $this;
    }

    public function getToDoChildLocation26(): ?Level
    {
        return $this->toDoChildLocation26;
    }

    public function setToDoChildLocation26(?Level $toDoChildLocation26): self
    {
        $this->toDoChildLocation26 = $toDoChildLocation26;

        return $this;
    }

    public function getToDoChildLocation16(): ?Level
    {
        return $this->toDoChildLocation16;
    }

    public function setToDoChildLocation16(?Level $toDoChildLocation16): self
    {
        $this->toDoChildLocation16 = $toDoChildLocation16;

        return $this;
    }

    public function getToDoChildLocation06(): ?Level
    {
        return $this->toDoChildLocation06;
    }

    public function setToDoChildLocation06(?Level $toDoChildLocation06): self
    {
        $this->toDoChildLocation06 = $toDoChildLocation06;

        return $this;
    }

    public function getToDoChildLocation235(): ?Level
    {
        return $this->toDoChildLocation235;
    }

    public function setToDoChildLocation235(?Level $toDoChildLocation235): self
    {
        $this->toDoChildLocation235 = $toDoChildLocation235;

        return $this;
    }

    public function getToDoChildLocation225(): ?Level
    {
        return $this->toDoChildLocation225;
    }

    public function setToDoChildLocation225(?Level $toDoChildLocation225): self
    {
        $this->toDoChildLocation225 = $toDoChildLocation225;

        return $this;
    }

    public function getToDoChildLocation215(): ?Level
    {
        return $this->toDoChildLocation215;
    }

    public function setToDoChildLocation215(?Level $toDoChildLocation215): self
    {
        $this->toDoChildLocation215 = $toDoChildLocation215;

        return $this;
    }

    public function getToDoChildLocation205(): ?Level
    {
        return $this->toDoChildLocation205;
    }

    public function setToDoChildLocation205(?Level $toDoChildLocation205): self
    {
        $this->toDoChildLocation205 = $toDoChildLocation205;

        return $this;
    }

    public function getToDoChildLocation195(): ?Level
    {
        return $this->toDoChildLocation195;
    }

    public function setToDoChildLocation195(?Level $toDoChildLocation195): self
    {
        $this->toDoChildLocation195 = $toDoChildLocation195;

        return $this;
    }

    public function getToDoChildLocation185(): ?Level
    {
        return $this->toDoChildLocation185;
    }

    public function setToDoChildLocation185(?Level $toDoChildLocation185): self
    {
        $this->toDoChildLocation185 = $toDoChildLocation185;

        return $this;
    }

    public function getToDoChildLocation175(): ?Level
    {
        return $this->toDoChildLocation175;
    }

    public function setToDoChildLocation175(?Level $toDoChildLocation175): self
    {
        $this->toDoChildLocation175 = $toDoChildLocation175;

        return $this;
    }

    public function getToDoChildLocation165(): ?Level
    {
        return $this->toDoChildLocation165;
    }

    public function setToDoChildLocation165(?Level $toDoChildLocation165): self
    {
        $this->toDoChildLocation165 = $toDoChildLocation165;

        return $this;
    }

    public function getToDoChildLocation155(): ?Level
    {
        return $this->toDoChildLocation155;
    }

    public function setToDoChildLocation155(?Level $toDoChildLocation155): self
    {
        $this->toDoChildLocation155 = $toDoChildLocation155;

        return $this;
    }

    public function getToDoChildLocation145(): ?Level
    {
        return $this->toDoChildLocation145;
    }

    public function setToDoChildLocation145(?Level $toDoChildLocation145): self
    {
        $this->toDoChildLocation145 = $toDoChildLocation145;

        return $this;
    }

    public function getToDoChildLocation135(): ?Level
    {
        return $this->toDoChildLocation135;
    }

    public function setToDoChildLocation135(?Level $toDoChildLocation135): self
    {
        $this->toDoChildLocation135 = $toDoChildLocation135;

        return $this;
    }

    public function getToDoChildLocation125(): ?Level
    {
        return $this->toDoChildLocation125;
    }

    public function setToDoChildLocation125(?Level $toDoChildLocation125): self
    {
        $this->toDoChildLocation125 = $toDoChildLocation125;

        return $this;
    }

    public function getToDoChildLocation115(): ?Level
    {
        return $this->toDoChildLocation115;
    }

    public function setToDoChildLocation115(?Level $toDoChildLocation115): self
    {
        $this->toDoChildLocation115 = $toDoChildLocation115;

        return $this;
    }

    public function getToDoChildLocation105(): ?Level
    {
        return $this->toDoChildLocation105;
    }

    public function setToDoChildLocation105(?Level $toDoChildLocation105): self
    {
        $this->toDoChildLocation105 = $toDoChildLocation105;

        return $this;
    }

    public function getToDoChildLocation95(): ?Level
    {
        return $this->toDoChildLocation95;
    }

    public function setToDoChildLocation95(?Level $toDoChildLocation95): self
    {
        $this->toDoChildLocation95 = $toDoChildLocation95;

        return $this;
    }

    public function getToDoChildLocation85(): ?Level
    {
        return $this->toDoChildLocation85;
    }

    public function setToDoChildLocation85(?Level $toDoChildLocation85): self
    {
        $this->toDoChildLocation85 = $toDoChildLocation85;

        return $this;
    }

    public function getToDoChildLocation75(): ?Level
    {
        return $this->toDoChildLocation75;
    }

    public function setToDoChildLocation75(?Level $toDoChildLocation75): self
    {
        $this->toDoChildLocation75 = $toDoChildLocation75;

        return $this;
    }

    public function getToDoChildLocation65(): ?Level
    {
        return $this->toDoChildLocation65;
    }

    public function setToDoChildLocation65(?Level $toDoChildLocation65): self
    {
        $this->toDoChildLocation65 = $toDoChildLocation65;

        return $this;
    }

    public function getToDoChildLocation55(): ?Level
    {
        return $this->toDoChildLocation55;
    }

    public function setToDoChildLocation55(?Level $toDoChildLocation55): self
    {
        $this->toDoChildLocation55 = $toDoChildLocation55;

        return $this;
    }

    public function getToDoChildLocation45(): ?Level
    {
        return $this->toDoChildLocation45;
    }

    public function setToDoChildLocation45(?Level $toDoChildLocation45): self
    {
        $this->toDoChildLocation45 = $toDoChildLocation45;

        return $this;
    }

    public function getToDoChildLocation35(): ?Level
    {
        return $this->toDoChildLocation35;
    }

    public function setToDoChildLocation35(?Level $toDoChildLocation35): self
    {
        $this->toDoChildLocation35 = $toDoChildLocation35;

        return $this;
    }

    public function getToDoChildLocation25(): ?Level
    {
        return $this->toDoChildLocation25;
    }

    public function setToDoChildLocation25(?Level $toDoChildLocation25): self
    {
        $this->toDoChildLocation25 = $toDoChildLocation25;

        return $this;
    }

    public function getToDoChildLocation15(): ?Level
    {
        return $this->toDoChildLocation15;
    }

    public function setToDoChildLocation15(?Level $toDoChildLocation15): self
    {
        $this->toDoChildLocation15 = $toDoChildLocation15;

        return $this;
    }

    public function getToDoChildLocation05(): ?Level
    {
        return $this->toDoChildLocation05;
    }

    public function setToDoChildLocation05(?Level $toDoChildLocation05): self
    {
        $this->toDoChildLocation05 = $toDoChildLocation05;

        return $this;
    }

    public function getToDoChildLocation234(): ?Level
    {
        return $this->toDoChildLocation234;
    }

    public function setToDoChildLocation234(?Level $toDoChildLocation234): self
    {
        $this->toDoChildLocation234 = $toDoChildLocation234;

        return $this;
    }

    public function getToDoChildLocation224(): ?Level
    {
        return $this->toDoChildLocation224;
    }

    public function setToDoChildLocation224(?Level $toDoChildLocation224): self
    {
        $this->toDoChildLocation224 = $toDoChildLocation224;

        return $this;
    }

    public function getToDoChildLocation214(): ?Level
    {
        return $this->toDoChildLocation214;
    }

    public function setToDoChildLocation214(?Level $toDoChildLocation214): self
    {
        $this->toDoChildLocation214 = $toDoChildLocation214;

        return $this;
    }

    public function getToDoChildLocation204(): ?Level
    {
        return $this->toDoChildLocation204;
    }

    public function setToDoChildLocation204(?Level $toDoChildLocation204): self
    {
        $this->toDoChildLocation204 = $toDoChildLocation204;

        return $this;
    }

    public function getToDoChildLocation194(): ?Level
    {
        return $this->toDoChildLocation194;
    }

    public function setToDoChildLocation194(?Level $toDoChildLocation194): self
    {
        $this->toDoChildLocation194 = $toDoChildLocation194;

        return $this;
    }

    public function getToDoChildLocation184(): ?Level
    {
        return $this->toDoChildLocation184;
    }

    public function setToDoChildLocation184(?Level $toDoChildLocation184): self
    {
        $this->toDoChildLocation184 = $toDoChildLocation184;

        return $this;
    }

    public function getToDoChildLocation174(): ?Level
    {
        return $this->toDoChildLocation174;
    }

    public function setToDoChildLocation174(?Level $toDoChildLocation174): self
    {
        $this->toDoChildLocation174 = $toDoChildLocation174;

        return $this;
    }

    public function getToDoChildLocation164(): ?Level
    {
        return $this->toDoChildLocation164;
    }

    public function setToDoChildLocation164(?Level $toDoChildLocation164): self
    {
        $this->toDoChildLocation164 = $toDoChildLocation164;

        return $this;
    }

    public function getToDoChildLocation154(): ?Level
    {
        return $this->toDoChildLocation154;
    }

    public function setToDoChildLocation154(?Level $toDoChildLocation154): self
    {
        $this->toDoChildLocation154 = $toDoChildLocation154;

        return $this;
    }

    public function getToDoChildLocation144(): ?Level
    {
        return $this->toDoChildLocation144;
    }

    public function setToDoChildLocation144(?Level $toDoChildLocation144): self
    {
        $this->toDoChildLocation144 = $toDoChildLocation144;

        return $this;
    }

    public function getToDoChildLocation134(): ?Level
    {
        return $this->toDoChildLocation134;
    }

    public function setToDoChildLocation134(?Level $toDoChildLocation134): self
    {
        $this->toDoChildLocation134 = $toDoChildLocation134;

        return $this;
    }

    public function getToDoChildLocation124(): ?Level
    {
        return $this->toDoChildLocation124;
    }

    public function setToDoChildLocation124(?Level $toDoChildLocation124): self
    {
        $this->toDoChildLocation124 = $toDoChildLocation124;

        return $this;
    }

    public function getToDoChildLocation114(): ?Level
    {
        return $this->toDoChildLocation114;
    }

    public function setToDoChildLocation114(?Level $toDoChildLocation114): self
    {
        $this->toDoChildLocation114 = $toDoChildLocation114;

        return $this;
    }

    public function getToDoChildLocation104(): ?Level
    {
        return $this->toDoChildLocation104;
    }

    public function setToDoChildLocation104(?Level $toDoChildLocation104): self
    {
        $this->toDoChildLocation104 = $toDoChildLocation104;

        return $this;
    }

    public function getToDoChildLocation94(): ?Level
    {
        return $this->toDoChildLocation94;
    }

    public function setToDoChildLocation94(?Level $toDoChildLocation94): self
    {
        $this->toDoChildLocation94 = $toDoChildLocation94;

        return $this;
    }

    public function getToDoChildLocation84(): ?Level
    {
        return $this->toDoChildLocation84;
    }

    public function setToDoChildLocation84(?Level $toDoChildLocation84): self
    {
        $this->toDoChildLocation84 = $toDoChildLocation84;

        return $this;
    }

    public function getToDoChildLocation74(): ?Level
    {
        return $this->toDoChildLocation74;
    }

    public function setToDoChildLocation74(?Level $toDoChildLocation74): self
    {
        $this->toDoChildLocation74 = $toDoChildLocation74;

        return $this;
    }

    public function getToDoChildLocation64(): ?Level
    {
        return $this->toDoChildLocation64;
    }

    public function setToDoChildLocation64(?Level $toDoChildLocation64): self
    {
        $this->toDoChildLocation64 = $toDoChildLocation64;

        return $this;
    }

    public function getToDoChildLocation54(): ?Level
    {
        return $this->toDoChildLocation54;
    }

    public function setToDoChildLocation54(?Level $toDoChildLocation54): self
    {
        $this->toDoChildLocation54 = $toDoChildLocation54;

        return $this;
    }

    public function getToDoChildLocation44(): ?Level
    {
        return $this->toDoChildLocation44;
    }

    public function setToDoChildLocation44(?Level $toDoChildLocation44): self
    {
        $this->toDoChildLocation44 = $toDoChildLocation44;

        return $this;
    }

    public function getToDoChildLocation34(): ?Level
    {
        return $this->toDoChildLocation34;
    }

    public function setToDoChildLocation34(?Level $toDoChildLocation34): self
    {
        $this->toDoChildLocation34 = $toDoChildLocation34;

        return $this;
    }

    public function getToDoChildLocation24(): ?Level
    {
        return $this->toDoChildLocation24;
    }

    public function setToDoChildLocation24(?Level $toDoChildLocation24): self
    {
        $this->toDoChildLocation24 = $toDoChildLocation24;

        return $this;
    }

    public function getToDoChildLocation14(): ?Level
    {
        return $this->toDoChildLocation14;
    }

    public function setToDoChildLocation14(?Level $toDoChildLocation14): self
    {
        $this->toDoChildLocation14 = $toDoChildLocation14;

        return $this;
    }

    public function getToDoChildLocation04(): ?Level
    {
        return $this->toDoChildLocation04;
    }

    public function setToDoChildLocation04(?Level $toDoChildLocation04): self
    {
        $this->toDoChildLocation04 = $toDoChildLocation04;

        return $this;
    }

    public function getToDoChildLocation233(): ?Level
    {
        return $this->toDoChildLocation233;
    }

    public function setToDoChildLocation233(?Level $toDoChildLocation233): self
    {
        $this->toDoChildLocation233 = $toDoChildLocation233;

        return $this;
    }

    public function getToDoChildLocation223(): ?Level
    {
        return $this->toDoChildLocation223;
    }

    public function setToDoChildLocation223(?Level $toDoChildLocation223): self
    {
        $this->toDoChildLocation223 = $toDoChildLocation223;

        return $this;
    }

    public function getToDoChildLocation213(): ?Level
    {
        return $this->toDoChildLocation213;
    }

    public function setToDoChildLocation213(?Level $toDoChildLocation213): self
    {
        $this->toDoChildLocation213 = $toDoChildLocation213;

        return $this;
    }

    public function getToDoChildLocation203(): ?Level
    {
        return $this->toDoChildLocation203;
    }

    public function setToDoChildLocation203(?Level $toDoChildLocation203): self
    {
        $this->toDoChildLocation203 = $toDoChildLocation203;

        return $this;
    }

    public function getToDoChildLocation193(): ?Level
    {
        return $this->toDoChildLocation193;
    }

    public function setToDoChildLocation193(?Level $toDoChildLocation193): self
    {
        $this->toDoChildLocation193 = $toDoChildLocation193;

        return $this;
    }

    public function getToDoChildLocation183(): ?Level
    {
        return $this->toDoChildLocation183;
    }

    public function setToDoChildLocation183(?Level $toDoChildLocation183): self
    {
        $this->toDoChildLocation183 = $toDoChildLocation183;

        return $this;
    }

    public function getToDoChildLocation173(): ?Level
    {
        return $this->toDoChildLocation173;
    }

    public function setToDoChildLocation173(?Level $toDoChildLocation173): self
    {
        $this->toDoChildLocation173 = $toDoChildLocation173;

        return $this;
    }

    public function getToDoChildLocation163(): ?Level
    {
        return $this->toDoChildLocation163;
    }

    public function setToDoChildLocation163(?Level $toDoChildLocation163): self
    {
        $this->toDoChildLocation163 = $toDoChildLocation163;

        return $this;
    }

    public function getToDoChildLocation153(): ?Level
    {
        return $this->toDoChildLocation153;
    }

    public function setToDoChildLocation153(?Level $toDoChildLocation153): self
    {
        $this->toDoChildLocation153 = $toDoChildLocation153;

        return $this;
    }

    public function getToDoChildLocation143(): ?Level
    {
        return $this->toDoChildLocation143;
    }

    public function setToDoChildLocation143(?Level $toDoChildLocation143): self
    {
        $this->toDoChildLocation143 = $toDoChildLocation143;

        return $this;
    }

    public function getToDoChildLocation133(): ?Level
    {
        return $this->toDoChildLocation133;
    }

    public function setToDoChildLocation133(?Level $toDoChildLocation133): self
    {
        $this->toDoChildLocation133 = $toDoChildLocation133;

        return $this;
    }

    public function getToDoChildLocation123(): ?Level
    {
        return $this->toDoChildLocation123;
    }

    public function setToDoChildLocation123(?Level $toDoChildLocation123): self
    {
        $this->toDoChildLocation123 = $toDoChildLocation123;

        return $this;
    }

    public function getToDoChildLocation113(): ?Level
    {
        return $this->toDoChildLocation113;
    }

    public function setToDoChildLocation113(?Level $toDoChildLocation113): self
    {
        $this->toDoChildLocation113 = $toDoChildLocation113;

        return $this;
    }

    public function getToDoChildLocation103(): ?Level
    {
        return $this->toDoChildLocation103;
    }

    public function setToDoChildLocation103(?Level $toDoChildLocation103): self
    {
        $this->toDoChildLocation103 = $toDoChildLocation103;

        return $this;
    }

    public function getToDoChildLocation93(): ?Level
    {
        return $this->toDoChildLocation93;
    }

    public function setToDoChildLocation93(?Level $toDoChildLocation93): self
    {
        $this->toDoChildLocation93 = $toDoChildLocation93;

        return $this;
    }

    public function getToDoChildLocation83(): ?Level
    {
        return $this->toDoChildLocation83;
    }

    public function setToDoChildLocation83(?Level $toDoChildLocation83): self
    {
        $this->toDoChildLocation83 = $toDoChildLocation83;

        return $this;
    }

    public function getToDoChildLocation73(): ?Level
    {
        return $this->toDoChildLocation73;
    }

    public function setToDoChildLocation73(?Level $toDoChildLocation73): self
    {
        $this->toDoChildLocation73 = $toDoChildLocation73;

        return $this;
    }

    public function getToDoChildLocation63(): ?Level
    {
        return $this->toDoChildLocation63;
    }

    public function setToDoChildLocation63(?Level $toDoChildLocation63): self
    {
        $this->toDoChildLocation63 = $toDoChildLocation63;

        return $this;
    }

    public function getToDoChildLocation53(): ?Level
    {
        return $this->toDoChildLocation53;
    }

    public function setToDoChildLocation53(?Level $toDoChildLocation53): self
    {
        $this->toDoChildLocation53 = $toDoChildLocation53;

        return $this;
    }

    public function getToDoChildLocation43(): ?Level
    {
        return $this->toDoChildLocation43;
    }

    public function setToDoChildLocation43(?Level $toDoChildLocation43): self
    {
        $this->toDoChildLocation43 = $toDoChildLocation43;

        return $this;
    }

    public function getToDoChildLocation33(): ?Level
    {
        return $this->toDoChildLocation33;
    }

    public function setToDoChildLocation33(?Level $toDoChildLocation33): self
    {
        $this->toDoChildLocation33 = $toDoChildLocation33;

        return $this;
    }

    public function getToDoChildLocation23(): ?Level
    {
        return $this->toDoChildLocation23;
    }

    public function setToDoChildLocation23(?Level $toDoChildLocation23): self
    {
        $this->toDoChildLocation23 = $toDoChildLocation23;

        return $this;
    }

    public function getToDoChildLocation13(): ?Level
    {
        return $this->toDoChildLocation13;
    }

    public function setToDoChildLocation13(?Level $toDoChildLocation13): self
    {
        $this->toDoChildLocation13 = $toDoChildLocation13;

        return $this;
    }

    public function getToDoChildLocation03(): ?Level
    {
        return $this->toDoChildLocation03;
    }

    public function setToDoChildLocation03(?Level $toDoChildLocation03): self
    {
        $this->toDoChildLocation03 = $toDoChildLocation03;

        return $this;
    }

    public function getToDoChildLocation232(): ?Level
    {
        return $this->toDoChildLocation232;
    }

    public function setToDoChildLocation232(?Level $toDoChildLocation232): self
    {
        $this->toDoChildLocation232 = $toDoChildLocation232;

        return $this;
    }

    public function getToDoChildLocation222(): ?Level
    {
        return $this->toDoChildLocation222;
    }

    public function setToDoChildLocation222(?Level $toDoChildLocation222): self
    {
        $this->toDoChildLocation222 = $toDoChildLocation222;

        return $this;
    }

    public function getToDoChildLocation212(): ?Level
    {
        return $this->toDoChildLocation212;
    }

    public function setToDoChildLocation212(?Level $toDoChildLocation212): self
    {
        $this->toDoChildLocation212 = $toDoChildLocation212;

        return $this;
    }

    public function getToDoChildLocation202(): ?Level
    {
        return $this->toDoChildLocation202;
    }

    public function setToDoChildLocation202(?Level $toDoChildLocation202): self
    {
        $this->toDoChildLocation202 = $toDoChildLocation202;

        return $this;
    }

    public function getToDoChildLocation192(): ?Level
    {
        return $this->toDoChildLocation192;
    }

    public function setToDoChildLocation192(?Level $toDoChildLocation192): self
    {
        $this->toDoChildLocation192 = $toDoChildLocation192;

        return $this;
    }

    public function getToDoChildLocation182(): ?Level
    {
        return $this->toDoChildLocation182;
    }

    public function setToDoChildLocation182(?Level $toDoChildLocation182): self
    {
        $this->toDoChildLocation182 = $toDoChildLocation182;

        return $this;
    }

    public function getToDoChildLocation172(): ?Level
    {
        return $this->toDoChildLocation172;
    }

    public function setToDoChildLocation172(?Level $toDoChildLocation172): self
    {
        $this->toDoChildLocation172 = $toDoChildLocation172;

        return $this;
    }

    public function getToDoChildLocation162(): ?Level
    {
        return $this->toDoChildLocation162;
    }

    public function setToDoChildLocation162(?Level $toDoChildLocation162): self
    {
        $this->toDoChildLocation162 = $toDoChildLocation162;

        return $this;
    }

    public function getToDoChildLocation152(): ?Level
    {
        return $this->toDoChildLocation152;
    }

    public function setToDoChildLocation152(?Level $toDoChildLocation152): self
    {
        $this->toDoChildLocation152 = $toDoChildLocation152;

        return $this;
    }

    public function getToDoChildLocation142(): ?Level
    {
        return $this->toDoChildLocation142;
    }

    public function setToDoChildLocation142(?Level $toDoChildLocation142): self
    {
        $this->toDoChildLocation142 = $toDoChildLocation142;

        return $this;
    }

    public function getToDoChildLocation132(): ?Level
    {
        return $this->toDoChildLocation132;
    }

    public function setToDoChildLocation132(?Level $toDoChildLocation132): self
    {
        $this->toDoChildLocation132 = $toDoChildLocation132;

        return $this;
    }

    public function getToDoChildLocation122(): ?Level
    {
        return $this->toDoChildLocation122;
    }

    public function setToDoChildLocation122(?Level $toDoChildLocation122): self
    {
        $this->toDoChildLocation122 = $toDoChildLocation122;

        return $this;
    }

    public function getToDoChildLocation112(): ?Level
    {
        return $this->toDoChildLocation112;
    }

    public function setToDoChildLocation112(?Level $toDoChildLocation112): self
    {
        $this->toDoChildLocation112 = $toDoChildLocation112;

        return $this;
    }

    public function getToDoChildLocation102(): ?Level
    {
        return $this->toDoChildLocation102;
    }

    public function setToDoChildLocation102(?Level $toDoChildLocation102): self
    {
        $this->toDoChildLocation102 = $toDoChildLocation102;

        return $this;
    }

    public function getToDoChildLocation92(): ?Level
    {
        return $this->toDoChildLocation92;
    }

    public function setToDoChildLocation92(?Level $toDoChildLocation92): self
    {
        $this->toDoChildLocation92 = $toDoChildLocation92;

        return $this;
    }

    public function getToDoChildLocation82(): ?Level
    {
        return $this->toDoChildLocation82;
    }

    public function setToDoChildLocation82(?Level $toDoChildLocation82): self
    {
        $this->toDoChildLocation82 = $toDoChildLocation82;

        return $this;
    }

    public function getToDoChildLocation72(): ?Level
    {
        return $this->toDoChildLocation72;
    }

    public function setToDoChildLocation72(?Level $toDoChildLocation72): self
    {
        $this->toDoChildLocation72 = $toDoChildLocation72;

        return $this;
    }

    public function getToDoChildLocation62(): ?Level
    {
        return $this->toDoChildLocation62;
    }

    public function setToDoChildLocation62(?Level $toDoChildLocation62): self
    {
        $this->toDoChildLocation62 = $toDoChildLocation62;

        return $this;
    }

    public function getToDoChildLocation52(): ?Level
    {
        return $this->toDoChildLocation52;
    }

    public function setToDoChildLocation52(?Level $toDoChildLocation52): self
    {
        $this->toDoChildLocation52 = $toDoChildLocation52;

        return $this;
    }

    public function getToDoChildLocation42(): ?Level
    {
        return $this->toDoChildLocation42;
    }

    public function setToDoChildLocation42(?Level $toDoChildLocation42): self
    {
        $this->toDoChildLocation42 = $toDoChildLocation42;

        return $this;
    }

    public function getToDoChildLocation32(): ?Level
    {
        return $this->toDoChildLocation32;
    }

    public function setToDoChildLocation32(?Level $toDoChildLocation32): self
    {
        $this->toDoChildLocation32 = $toDoChildLocation32;

        return $this;
    }

    public function getToDoChildLocation22(): ?Level
    {
        return $this->toDoChildLocation22;
    }

    public function setToDoChildLocation22(?Level $toDoChildLocation22): self
    {
        $this->toDoChildLocation22 = $toDoChildLocation22;

        return $this;
    }

    public function getToDoChildLocation12(): ?Level
    {
        return $this->toDoChildLocation12;
    }

    public function setToDoChildLocation12(?Level $toDoChildLocation12): self
    {
        $this->toDoChildLocation12 = $toDoChildLocation12;

        return $this;
    }

    public function getToDoChildLocation02(): ?Level
    {
        return $this->toDoChildLocation02;
    }

    public function setToDoChildLocation02(?Level $toDoChildLocation02): self
    {
        $this->toDoChildLocation02 = $toDoChildLocation02;

        return $this;
    }

    public function getToDoChildLocation231(): ?Level
    {
        return $this->toDoChildLocation231;
    }

    public function setToDoChildLocation231(?Level $toDoChildLocation231): self
    {
        $this->toDoChildLocation231 = $toDoChildLocation231;

        return $this;
    }

    public function getToDoChildLocation221(): ?Level
    {
        return $this->toDoChildLocation221;
    }

    public function setToDoChildLocation221(?Level $toDoChildLocation221): self
    {
        $this->toDoChildLocation221 = $toDoChildLocation221;

        return $this;
    }

    public function getToDoChildLocation211(): ?Level
    {
        return $this->toDoChildLocation211;
    }

    public function setToDoChildLocation211(?Level $toDoChildLocation211): self
    {
        $this->toDoChildLocation211 = $toDoChildLocation211;

        return $this;
    }

    public function getToDoChildLocation201(): ?Level
    {
        return $this->toDoChildLocation201;
    }

    public function setToDoChildLocation201(?Level $toDoChildLocation201): self
    {
        $this->toDoChildLocation201 = $toDoChildLocation201;

        return $this;
    }

    public function getToDoChildLocation191(): ?Level
    {
        return $this->toDoChildLocation191;
    }

    public function setToDoChildLocation191(?Level $toDoChildLocation191): self
    {
        $this->toDoChildLocation191 = $toDoChildLocation191;

        return $this;
    }

    public function getToDoChildLocation181(): ?Level
    {
        return $this->toDoChildLocation181;
    }

    public function setToDoChildLocation181(?Level $toDoChildLocation181): self
    {
        $this->toDoChildLocation181 = $toDoChildLocation181;

        return $this;
    }

    public function getToDoChildLocation171(): ?Level
    {
        return $this->toDoChildLocation171;
    }

    public function setToDoChildLocation171(?Level $toDoChildLocation171): self
    {
        $this->toDoChildLocation171 = $toDoChildLocation171;

        return $this;
    }

    public function getToDoChildLocation161(): ?Level
    {
        return $this->toDoChildLocation161;
    }

    public function setToDoChildLocation161(?Level $toDoChildLocation161): self
    {
        $this->toDoChildLocation161 = $toDoChildLocation161;

        return $this;
    }

    public function getToDoChildLocation151(): ?Level
    {
        return $this->toDoChildLocation151;
    }

    public function setToDoChildLocation151(?Level $toDoChildLocation151): self
    {
        $this->toDoChildLocation151 = $toDoChildLocation151;

        return $this;
    }

    public function getToDoChildLocation141(): ?Level
    {
        return $this->toDoChildLocation141;
    }

    public function setToDoChildLocation141(?Level $toDoChildLocation141): self
    {
        $this->toDoChildLocation141 = $toDoChildLocation141;

        return $this;
    }

    public function getToDoChildLocation131(): ?Level
    {
        return $this->toDoChildLocation131;
    }

    public function setToDoChildLocation131(?Level $toDoChildLocation131): self
    {
        $this->toDoChildLocation131 = $toDoChildLocation131;

        return $this;
    }

    public function getToDoChildLocation121(): ?Level
    {
        return $this->toDoChildLocation121;
    }

    public function setToDoChildLocation121(?Level $toDoChildLocation121): self
    {
        $this->toDoChildLocation121 = $toDoChildLocation121;

        return $this;
    }

    public function getToDoChildLocation111(): ?Level
    {
        return $this->toDoChildLocation111;
    }

    public function setToDoChildLocation111(?Level $toDoChildLocation111): self
    {
        $this->toDoChildLocation111 = $toDoChildLocation111;

        return $this;
    }

    public function getToDoChildLocation101(): ?Level
    {
        return $this->toDoChildLocation101;
    }

    public function setToDoChildLocation101(?Level $toDoChildLocation101): self
    {
        $this->toDoChildLocation101 = $toDoChildLocation101;

        return $this;
    }

    public function getToDoChildLocation91(): ?Level
    {
        return $this->toDoChildLocation91;
    }

    public function setToDoChildLocation91(?Level $toDoChildLocation91): self
    {
        $this->toDoChildLocation91 = $toDoChildLocation91;

        return $this;
    }

    public function getToDoChildLocation81(): ?Level
    {
        return $this->toDoChildLocation81;
    }

    public function setToDoChildLocation81(?Level $toDoChildLocation81): self
    {
        $this->toDoChildLocation81 = $toDoChildLocation81;

        return $this;
    }

    public function getToDoChildLocation71(): ?Level
    {
        return $this->toDoChildLocation71;
    }

    public function setToDoChildLocation71(?Level $toDoChildLocation71): self
    {
        $this->toDoChildLocation71 = $toDoChildLocation71;

        return $this;
    }

    public function getToDoChildLocation61(): ?Level
    {
        return $this->toDoChildLocation61;
    }

    public function setToDoChildLocation61(?Level $toDoChildLocation61): self
    {
        $this->toDoChildLocation61 = $toDoChildLocation61;

        return $this;
    }

    public function getToDoChildLocation51(): ?Level
    {
        return $this->toDoChildLocation51;
    }

    public function setToDoChildLocation51(?Level $toDoChildLocation51): self
    {
        $this->toDoChildLocation51 = $toDoChildLocation51;

        return $this;
    }

    public function getToDoChildLocation41(): ?Level
    {
        return $this->toDoChildLocation41;
    }

    public function setToDoChildLocation41(?Level $toDoChildLocation41): self
    {
        $this->toDoChildLocation41 = $toDoChildLocation41;

        return $this;
    }

    public function getToDoChildLocation31(): ?Level
    {
        return $this->toDoChildLocation31;
    }

    public function setToDoChildLocation31(?Level $toDoChildLocation31): self
    {
        $this->toDoChildLocation31 = $toDoChildLocation31;

        return $this;
    }

    public function getToDoChildLocation21(): ?Level
    {
        return $this->toDoChildLocation21;
    }

    public function setToDoChildLocation21(?Level $toDoChildLocation21): self
    {
        $this->toDoChildLocation21 = $toDoChildLocation21;

        return $this;
    }

    public function getToDoChildLocation11(): ?Level
    {
        return $this->toDoChildLocation11;
    }

    public function setToDoChildLocation11(?Level $toDoChildLocation11): self
    {
        $this->toDoChildLocation11 = $toDoChildLocation11;

        return $this;
    }

    public function getToDoChildLocation01(): ?Level
    {
        return $this->toDoChildLocation01;
    }

    public function setToDoChildLocation01(?Level $toDoChildLocation01): self
    {
        $this->toDoChildLocation01 = $toDoChildLocation01;

        return $this;
    }

    public function getToDoChildLocation230(): ?Level
    {
        return $this->toDoChildLocation230;
    }

    public function setToDoChildLocation230(?Level $toDoChildLocation230): self
    {
        $this->toDoChildLocation230 = $toDoChildLocation230;

        return $this;
    }

    public function getToDoChildLocation220(): ?Level
    {
        return $this->toDoChildLocation220;
    }

    public function setToDoChildLocation220(?Level $toDoChildLocation220): self
    {
        $this->toDoChildLocation220 = $toDoChildLocation220;

        return $this;
    }

    public function getToDoChildLocation210(): ?Level
    {
        return $this->toDoChildLocation210;
    }

    public function setToDoChildLocation210(?Level $toDoChildLocation210): self
    {
        $this->toDoChildLocation210 = $toDoChildLocation210;

        return $this;
    }

    public function getToDoChildLocation200(): ?Level
    {
        return $this->toDoChildLocation200;
    }

    public function setToDoChildLocation200(?Level $toDoChildLocation200): self
    {
        $this->toDoChildLocation200 = $toDoChildLocation200;

        return $this;
    }

    public function getToDoChildLocation190(): ?Level
    {
        return $this->toDoChildLocation190;
    }

    public function setToDoChildLocation190(?Level $toDoChildLocation190): self
    {
        $this->toDoChildLocation190 = $toDoChildLocation190;

        return $this;
    }

    public function getToDoChildLocation180(): ?Level
    {
        return $this->toDoChildLocation180;
    }

    public function setToDoChildLocation180(?Level $toDoChildLocation180): self
    {
        $this->toDoChildLocation180 = $toDoChildLocation180;

        return $this;
    }

    public function getToDoChildLocation170(): ?Level
    {
        return $this->toDoChildLocation170;
    }

    public function setToDoChildLocation170(?Level $toDoChildLocation170): self
    {
        $this->toDoChildLocation170 = $toDoChildLocation170;

        return $this;
    }

    public function getToDoChildLocation160(): ?Level
    {
        return $this->toDoChildLocation160;
    }

    public function setToDoChildLocation160(?Level $toDoChildLocation160): self
    {
        $this->toDoChildLocation160 = $toDoChildLocation160;

        return $this;
    }

    public function getToDoChildLocation150(): ?Level
    {
        return $this->toDoChildLocation150;
    }

    public function setToDoChildLocation150(?Level $toDoChildLocation150): self
    {
        $this->toDoChildLocation150 = $toDoChildLocation150;

        return $this;
    }

    public function getToDoChildLocation140(): ?Level
    {
        return $this->toDoChildLocation140;
    }

    public function setToDoChildLocation140(?Level $toDoChildLocation140): self
    {
        $this->toDoChildLocation140 = $toDoChildLocation140;

        return $this;
    }

    public function getToDoChildLocation130(): ?Level
    {
        return $this->toDoChildLocation130;
    }

    public function setToDoChildLocation130(?Level $toDoChildLocation130): self
    {
        $this->toDoChildLocation130 = $toDoChildLocation130;

        return $this;
    }

    public function getToDoChildLocation120(): ?Level
    {
        return $this->toDoChildLocation120;
    }

    public function setToDoChildLocation120(?Level $toDoChildLocation120): self
    {
        $this->toDoChildLocation120 = $toDoChildLocation120;

        return $this;
    }

    public function getToDoChildLocation110(): ?Level
    {
        return $this->toDoChildLocation110;
    }

    public function setToDoChildLocation110(?Level $toDoChildLocation110): self
    {
        $this->toDoChildLocation110 = $toDoChildLocation110;

        return $this;
    }

    public function getToDoChildLocation100(): ?Level
    {
        return $this->toDoChildLocation100;
    }

    public function setToDoChildLocation100(?Level $toDoChildLocation100): self
    {
        $this->toDoChildLocation100 = $toDoChildLocation100;

        return $this;
    }

    public function getToDoChildLocation90(): ?Level
    {
        return $this->toDoChildLocation90;
    }

    public function setToDoChildLocation90(?Level $toDoChildLocation90): self
    {
        $this->toDoChildLocation90 = $toDoChildLocation90;

        return $this;
    }

    public function getToDoChildLocation80(): ?Level
    {
        return $this->toDoChildLocation80;
    }

    public function setToDoChildLocation80(?Level $toDoChildLocation80): self
    {
        $this->toDoChildLocation80 = $toDoChildLocation80;

        return $this;
    }

    public function getToDoChildLocation70(): ?Level
    {
        return $this->toDoChildLocation70;
    }

    public function setToDoChildLocation70(?Level $toDoChildLocation70): self
    {
        $this->toDoChildLocation70 = $toDoChildLocation70;

        return $this;
    }

    public function getToDoChildLocation60(): ?Level
    {
        return $this->toDoChildLocation60;
    }

    public function setToDoChildLocation60(?Level $toDoChildLocation60): self
    {
        $this->toDoChildLocation60 = $toDoChildLocation60;

        return $this;
    }

    public function getToDoChildLocation50(): ?Level
    {
        return $this->toDoChildLocation50;
    }

    public function setToDoChildLocation50(?Level $toDoChildLocation50): self
    {
        $this->toDoChildLocation50 = $toDoChildLocation50;

        return $this;
    }

    public function getToDoChildLocation40(): ?Level
    {
        return $this->toDoChildLocation40;
    }

    public function setToDoChildLocation40(?Level $toDoChildLocation40): self
    {
        $this->toDoChildLocation40 = $toDoChildLocation40;

        return $this;
    }

    public function getToDoChildLocation30(): ?Level
    {
        return $this->toDoChildLocation30;
    }

    public function setToDoChildLocation30(?Level $toDoChildLocation30): self
    {
        $this->toDoChildLocation30 = $toDoChildLocation30;

        return $this;
    }

    public function getToDoChildLocation20(): ?Level
    {
        return $this->toDoChildLocation20;
    }

    public function setToDoChildLocation20(?Level $toDoChildLocation20): self
    {
        $this->toDoChildLocation20 = $toDoChildLocation20;

        return $this;
    }

    public function getToDoChildLocation10(): ?Level
    {
        return $this->toDoChildLocation10;
    }

    public function setToDoChildLocation10(?Level $toDoChildLocation10): self
    {
        $this->toDoChildLocation10 = $toDoChildLocation10;

        return $this;
    }

    public function getToDoChildLocation00(): ?Level
    {
        return $this->toDoChildLocation00;
    }

    public function setToDoChildLocation00(?Level $toDoChildLocation00): self
    {
        $this->toDoChildLocation00 = $toDoChildLocation00;

        return $this;
    }

    public function getToDoMainLocation23(): ?Level
    {
        return $this->toDoMainLocation23;
    }

    public function setToDoMainLocation23(?Level $toDoMainLocation23): self
    {
        $this->toDoMainLocation23 = $toDoMainLocation23;

        return $this;
    }

    public function getToDoMainLocation22(): ?Level
    {
        return $this->toDoMainLocation22;
    }

    public function setToDoMainLocation22(?Level $toDoMainLocation22): self
    {
        $this->toDoMainLocation22 = $toDoMainLocation22;

        return $this;
    }

    public function getToDoMainLocation21(): ?Level
    {
        return $this->toDoMainLocation21;
    }

    public function setToDoMainLocation21(?Level $toDoMainLocation21): self
    {
        $this->toDoMainLocation21 = $toDoMainLocation21;

        return $this;
    }

    public function getToDoMainLocation20(): ?Level
    {
        return $this->toDoMainLocation20;
    }

    public function setToDoMainLocation20(?Level $toDoMainLocation20): self
    {
        $this->toDoMainLocation20 = $toDoMainLocation20;

        return $this;
    }

    public function getToDoMainLocation19(): ?Level
    {
        return $this->toDoMainLocation19;
    }

    public function setToDoMainLocation19(?Level $toDoMainLocation19): self
    {
        $this->toDoMainLocation19 = $toDoMainLocation19;

        return $this;
    }

    public function getToDoMainLocation18(): ?Level
    {
        return $this->toDoMainLocation18;
    }

    public function setToDoMainLocation18(?Level $toDoMainLocation18): self
    {
        $this->toDoMainLocation18 = $toDoMainLocation18;

        return $this;
    }

    public function getToDoMainLocation17(): ?Level
    {
        return $this->toDoMainLocation17;
    }

    public function setToDoMainLocation17(?Level $toDoMainLocation17): self
    {
        $this->toDoMainLocation17 = $toDoMainLocation17;

        return $this;
    }

    public function getToDoMainLocation16(): ?Level
    {
        return $this->toDoMainLocation16;
    }

    public function setToDoMainLocation16(?Level $toDoMainLocation16): self
    {
        $this->toDoMainLocation16 = $toDoMainLocation16;

        return $this;
    }

    public function getToDoMainLocation15(): ?Level
    {
        return $this->toDoMainLocation15;
    }

    public function setToDoMainLocation15(?Level $toDoMainLocation15): self
    {
        $this->toDoMainLocation15 = $toDoMainLocation15;

        return $this;
    }

    public function getToDoMainLocation14(): ?Level
    {
        return $this->toDoMainLocation14;
    }

    public function setToDoMainLocation14(?Level $toDoMainLocation14): self
    {
        $this->toDoMainLocation14 = $toDoMainLocation14;

        return $this;
    }

    public function getToDoMainLocation13(): ?Level
    {
        return $this->toDoMainLocation13;
    }

    public function setToDoMainLocation13(?Level $toDoMainLocation13): self
    {
        $this->toDoMainLocation13 = $toDoMainLocation13;

        return $this;
    }

    public function getToDoMainLocation12(): ?Level
    {
        return $this->toDoMainLocation12;
    }

    public function setToDoMainLocation12(?Level $toDoMainLocation12): self
    {
        $this->toDoMainLocation12 = $toDoMainLocation12;

        return $this;
    }

    public function getToDoMainLocation11(): ?Level
    {
        return $this->toDoMainLocation11;
    }

    public function setToDoMainLocation11(?Level $toDoMainLocation11): self
    {
        $this->toDoMainLocation11 = $toDoMainLocation11;

        return $this;
    }

    public function getToDoMainLocation10(): ?Level
    {
        return $this->toDoMainLocation10;
    }

    public function setToDoMainLocation10(?Level $toDoMainLocation10): self
    {
        $this->toDoMainLocation10 = $toDoMainLocation10;

        return $this;
    }

    public function getToDoMainLocation9(): ?Level
    {
        return $this->toDoMainLocation9;
    }

    public function setToDoMainLocation9(?Level $toDoMainLocation9): self
    {
        $this->toDoMainLocation9 = $toDoMainLocation9;

        return $this;
    }

    public function getToDoMainLocation8(): ?Level
    {
        return $this->toDoMainLocation8;
    }

    public function setToDoMainLocation8(?Level $toDoMainLocation8): self
    {
        $this->toDoMainLocation8 = $toDoMainLocation8;

        return $this;
    }

    public function getToDoMainLocation7(): ?Level
    {
        return $this->toDoMainLocation7;
    }

    public function setToDoMainLocation7(?Level $toDoMainLocation7): self
    {
        $this->toDoMainLocation7 = $toDoMainLocation7;

        return $this;
    }

    public function getToDoMainLocation6(): ?Level
    {
        return $this->toDoMainLocation6;
    }

    public function setToDoMainLocation6(?Level $toDoMainLocation6): self
    {
        $this->toDoMainLocation6 = $toDoMainLocation6;

        return $this;
    }

    public function getToDoMainLocation5(): ?Level
    {
        return $this->toDoMainLocation5;
    }

    public function setToDoMainLocation5(?Level $toDoMainLocation5): self
    {
        $this->toDoMainLocation5 = $toDoMainLocation5;

        return $this;
    }

    public function getToDoMainLocation4(): ?Level
    {
        return $this->toDoMainLocation4;
    }

    public function setToDoMainLocation4(?Level $toDoMainLocation4): self
    {
        $this->toDoMainLocation4 = $toDoMainLocation4;

        return $this;
    }

    public function getToDoMainLocation3(): ?Level
    {
        return $this->toDoMainLocation3;
    }

    public function setToDoMainLocation3(?Level $toDoMainLocation3): self
    {
        $this->toDoMainLocation3 = $toDoMainLocation3;

        return $this;
    }

    public function getToDoMainLocation2(): ?Level
    {
        return $this->toDoMainLocation2;
    }

    public function setToDoMainLocation2(?Level $toDoMainLocation2): self
    {
        $this->toDoMainLocation2 = $toDoMainLocation2;

        return $this;
    }

    public function getToDoMainLocation1(): ?Level
    {
        return $this->toDoMainLocation1;
    }

    public function setToDoMainLocation1(?Level $toDoMainLocation1): self
    {
        $this->toDoMainLocation1 = $toDoMainLocation1;

        return $this;
    }

    public function getToDoMainLocation0(): ?Level
    {
        return $this->toDoMainLocation0;
    }

    public function setToDoMainLocation0(?Level $toDoMainLocation0): self
    {
        $this->toDoMainLocation0 = $toDoMainLocation0;

        return $this;
    }

    public function getQuestRepeatFlag(): ?QuestRepeatFlag
    {
        return $this->questRepeatFlag;
    }

    public function setQuestRepeatFlag(?QuestRepeatFlag $questRepeatFlag): self
    {
        $this->questRepeatFlag = $questRepeatFlag;

        return $this;
    }

    public function getIssuerLocation(): ?Level
    {
        return $this->issuerLocation;
    }

    public function setIssuerLocation(?Level $issuerLocation): self
    {
        $this->issuerLocation = $issuerLocation;

        return $this;
    }

    public function getDeliveryQuest(): ?DeliveryQuest
    {
        return $this->deliveryQuest;
    }

    public function setDeliveryQuest(?DeliveryQuest $deliveryQuest): self
    {
        $this->deliveryQuest = $deliveryQuest;

        return $this;
    }

    public function getMountRequired(): ?Mount
    {
        return $this->mountRequired;
    }

    public function setMountRequired(?Mount $mountRequired): self
    {
        $this->mountRequired = $mountRequired;

        return $this;
    }

    public function getSatisfactionNpc(): ?SatisfactionNpc
    {
        return $this->satisfactionNpc;
    }

    public function setSatisfactionNpc(?SatisfactionNpc $satisfactionNpc): self
    {
        $this->satisfactionNpc = $satisfactionNpc;

        return $this;
    }

    public function getBeastReputationRank(): ?BeastReputationRank
    {
        return $this->beastReputationRank;
    }

    public function setBeastReputationRank(?BeastReputationRank $beastReputationRank): self
    {
        $this->beastReputationRank = $beastReputationRank;

        return $this;
    }

    public function getBeastTribe(): ?BeastTribe
    {
        return $this->beastTribe;
    }

    public function setBeastTribe(?BeastTribe $beastTribe): self
    {
        $this->beastTribe = $beastTribe;

        return $this;
    }

    public function getFestival(): ?Festival
    {
        return $this->festival;
    }

    public function setFestival(?Festival $festival): self
    {
        $this->festival = $festival;

        return $this;
    }

    public function getInstanceContent2(): ?InstanceContent
    {
        return $this->instanceContent2;
    }

    public function setInstanceContent2(?InstanceContent $instanceContent2): self
    {
        $this->instanceContent2 = $instanceContent2;

        return $this;
    }

    public function getInstanceContent1(): ?InstanceContent
    {
        return $this->instanceContent1;
    }

    public function setInstanceContent1(?InstanceContent $instanceContent1): self
    {
        $this->instanceContent1 = $instanceContent1;

        return $this;
    }

    public function getInstanceContent0(): ?InstanceContent
    {
        return $this->instanceContent0;
    }

    public function setInstanceContent0(?InstanceContent $instanceContent0): self
    {
        $this->instanceContent0 = $instanceContent0;

        return $this;
    }

    public function getGrandCompanyRank(): ?GrandCompanyRank
    {
        return $this->grandCompanyRank;
    }

    public function setGrandCompanyRank(?GrandCompanyRank $grandCompanyRank): self
    {
        $this->grandCompanyRank = $grandCompanyRank;

        return $this;
    }

    public function getGrandCompany(): ?GrandCompany
    {
        return $this->grandCompany;
    }

    public function setGrandCompany(?GrandCompany $grandCompany): self
    {
        $this->grandCompany = $grandCompany;

        return $this;
    }

    public function getClassJobUnlock(): ?ClassJob
    {
        return $this->classJobUnlock;
    }

    public function setClassJobUnlock(?ClassJob $classJobUnlock): self
    {
        $this->classJobUnlock = $classJobUnlock;

        return $this;
    }

    public function getQuestLock1(): ?self
    {
        return $this->questLock1;
    }

    public function setQuestLock1(?self $questLock1): self
    {
        $this->questLock1 = $questLock1;

        return $this;
    }

    public function getQuestLock0(): ?self
    {
        return $this->questLock0;
    }

    public function setQuestLock0(?self $questLock0): self
    {
        $this->questLock0 = $questLock0;

        return $this;
    }

    public function getPreviousQuest2(): ?self
    {
        return $this->previousQuest2;
    }

    public function setPreviousQuest2(?self $previousQuest2): self
    {
        $this->previousQuest2 = $previousQuest2;

        return $this;
    }

    public function getPreviousQuest1(): ?self
    {
        return $this->previousQuest1;
    }

    public function setPreviousQuest1(?self $previousQuest1): self
    {
        $this->previousQuest1 = $previousQuest1;

        return $this;
    }

    public function getPreviousQuest0(): ?self
    {
        return $this->previousQuest0;
    }

    public function setPreviousQuest0(?self $previousQuest0): self
    {
        $this->previousQuest0 = $previousQuest0;

        return $this;
    }

    public function getClassJobCategory1(): ?ClassJobCategory
    {
        return $this->classJobCategory1;
    }

    public function setClassJobCategory1(?ClassJobCategory $classJobCategory1): self
    {
        $this->classJobCategory1 = $classJobCategory1;

        return $this;
    }

    public function getClassJobCategory0(): ?ClassJobCategory
    {
        return $this->classJobCategory0;
    }

    public function setClassJobCategory0(?ClassJobCategory $classJobCategory0): self
    {
        $this->classJobCategory0 = $classJobCategory0;

        return $this;
    }

    public function getExpansion(): ?ExVersion
    {
        return $this->expansion;
    }

    public function setExpansion(?ExVersion $expansion): self
    {
        $this->expansion = $expansion;

        return $this;
    }
}
