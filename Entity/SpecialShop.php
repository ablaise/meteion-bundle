<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialShop.
 *
 * @ORM\Table(name="special_shop", indexes={@ORM\Index(name="idx_2e3d4d89c36b2aa2", columns={"special_shop_item_category_42_1"}), @ORM\Index(name="idx_2e3d4d89c6483807", columns={"quest_item_17"}), @ORM\Index(name="idx_2e3d4d8918d2051d", columns={"achievement_unlock_23"}), @ORM\Index(name="idx_2e3d4d892d90a38a", columns={"item_receive_55_0"}), @ORM\Index(name="idx_2e3d4d89242ca75b", columns={"special_shop_item_category_38_0"}), @ORM\Index(name="idx_2e3d4d89f3214b78", columns={"achievement_unlock_1"}), @ORM\Index(name="idx_2e3d4d89e9a05fe9", columns={"item_cost_0_2"}), @ORM\Index(name="idx_2e3d4d89525c6977", columns={"quest_item_41"}), @ORM\Index(name="idx_2e3d4d896c8ae3ad", columns={"special_shop_item_category_8_0"}), @ORM\Index(name="idx_2e3d4d894988201b", columns={"item_cost_49_1"}), @ORM\Index(name="idx_2e3d4d89f3bc724c", columns={"special_shop_item_category_16_1"}), @ORM\Index(name="idx_2e3d4d89e7c21f49", columns={"special_shop_item_category_23_1"}), @ORM\Index(name="idx_2e3d4d8959134772", columns={"item_receive_57_1"}), @ORM\Index(name="idx_2e3d4d89d7e11b5e", columns={"item_receive_8_0"}), @ORM\Index(name="idx_2e3d4d89ce5a52c1", columns={"item_receive_29_1"}), @ORM\Index(name="idx_2e3d4d89a086c3b7", columns={"achievement_unlock_41"}), @ORM\Index(name="idx_2e3d4d89d83020d1", columns={"item_receive_1_0"}), @ORM\Index(name="idx_2e3d4d89a9fcd2ac", columns={"item_receive_4_1"}), @ORM\Index(name="idx_2e3d4d897ab3da45", columns={"item_receive_32_1"}), @ORM\Index(name="idx_2e3d4d895bf3049e", columns={"special_shop_item_category_35_1"}), @ORM\Index(name="idx_2e3d4d89b14f0891", columns={"quest_item_16"}), @ORM\Index(name="idx_2e3d4d893c4068a0", columns={"quest_item_50"}), @ORM\Index(name="idx_2e3d4d899fada1ff", columns={"achievement_unlock_34"}), @ORM\Index(name="idx_2e3d4d892cf43408", columns={"special_shop_item_category_35_0"}), @ORM\Index(name="idx_2e3d4d89742472e1", columns={"item_cost_6_1"}), @ORM\Index(name="idx_2e3d4d89e22bf479", columns={"item_receive_45_1"}), @ORM\Index(name="idx_2e3d4d89287948ba", columns={"special_shop_item_category_33_0"}), @ORM\Index(name="idx_2e3d4d89f3139e9c", columns={"quest_item_33"}), @ORM\Index(name="idx_2e3d4d89ed2d235b", columns={"item_cost_6_2"}), @ORM\Index(name="idx_2e3d4d89dd45e1c6", columns={"item_cost_35_1"}), @ORM\Index(name="idx_2e3d4d894092d97f", columns={"item_cost_45_1"}), @ORM\Index(name="idx_2e3d4d89a3582834", columns={"item_cost_39_0"}), @ORM\Index(name="idx_2e3d4d89c5a0e849", columns={"special_shop_item_category_47_1"}), @ORM\Index(name="idx_2e3d4d893318955b", columns={"item_cost_43_0"}), @ORM\Index(name="idx_2e3d4d89958a395a", columns={"special_shop_item_category_24_0"}), @ORM\Index(name="idx_2e3d4d898cad5ae2", columns={"item_cost_57_0"}), @ORM\Index(name="idx_2e3d4d89ad9bc37d", columns={"achievement_unlock_14"}), @ORM\Index(name="idx_2e3d4d89e303ebd", columns={"item_receive_30_0"}), @ORM\Index(name="idx_2e3d4d89d523cd95", columns={"quest_item_56"}), @ORM\Index(name="idx_2e3d4d8977245f93", columns={"item_receive_38_1"}), @ORM\Index(name="idx_2e3d4d89abe8cdb9", columns={"item_receive_19_0"}), @ORM\Index(name="idx_2e3d4d895fd88599", columns={"item_receive_52_1"}), @ORM\Index(name="idx_2e3d4d89a585a407", columns={"quest_item_3"}), @ORM\Index(name="idx_2e3d4d894ce60132", columns={"quest_item_5"}), @ORM\Index(name="idx_2e3d4d89da1f5cab", columns={"item_cost_47_2"}), @ORM\Index(name="idx_2e3d4d89716b6464", columns={"item_cost_1_1"}), @ORM\Index(name="idx_2e3d4d89a176e0b3", columns={"item_receive_17_0"}), @ORM\Index(name="idx_2e3d4d89ed656bc4", columns={"quest_item_27"}), @ORM\Index(name="idx_2e3d4d897d1c8f2c", columns={"special_shop_item_category_57_1"}), @ORM\Index(name="idx_2e3d4d89fca3c2a8", columns={"item_cost_53_1"}), @ORM\Index(name="idx_2e3d4d8915f71ee9", columns={"item_cost_21_0"}), @ORM\Index(name="idx_2e3d4d89cf9838f6", columns={"item_receive_28_1"}), @ORM\Index(name="idx_2e3d4d8967ec2d4b", columns={"item_cost_50_2"}), @ORM\Index(name="idx_2e3d4d891c9345c", columns={"achievement_unlock_33"}), @ORM\Index(name="idx_2e3d4d89d2fcac97", columns={"item_receive_11_1"}), @ORM\Index(name="idx_2e3d4d8964c14714", columns={"quest_item_38"}), @ORM\Index(name="idx_2e3d4d896174fa11", columns={"item_cost_23_1"}), @ORM\Index(name="idx_2e3d4d896a1acf26", columns={"quest_item_30"}), @ORM\Index(name="idx_2e3d4d89f577b0a7", columns={"special_shop_item_category_13_1"}), @ORM\Index(name="idx_2e3d4d897a1527f0", columns={"special_shop_item_category_53_1"}), @ORM\Index(name="idx_2e3d4d8965f986a3", columns={"item_cost_25_1"}), @ORM\Index(name="idx_2e3d4d897ae3ec5", columns={"item_cost_0_0"}), @ORM\Index(name="idx_2e3d4d89ad4b798c", columns={"item_cost_31_0"}), @ORM\Index(name="idx_2e3d4d89add46c3", columns={"quest_item_29"}), @ORM\Index(name="idx_2e3d4d8962f02e7f", columns={"item_cost_21_1"}), @ORM\Index(name="idx_2e3d4d89147f887", columns={"special_shop_item_category_58_0"}), @ORM\Index(name="idx_2e3d4d89da4c491a", columns={"item_cost_31_1"}), @ORM\Index(name="idx_2e3d4d89a0b48a84", columns={"item_receive_16_0"}), @ORM\Index(name="idx_2e3d4d8912972a5f", columns={"special_shop_item_category_4_1"}), @ORM\Index(name="idx_2e3d4d891d2f2a54", columns={"achievement_unlock_3"}), @ORM\Index(name="idx_2e3d4d89434518a0", columns={"item_cost_31_2"}), @ORM\Index(name="idx_2e3d4d8910d19406", columns={"special_shop_item_category_7_1"}), @ORM\Index(name="idx_2e3d4d8932daff6c", columns={"item_cost_42_0"}), @ORM\Index(name="idx_2e3d4d8913554068", columns={"special_shop_item_category_5_1"}), @ORM\Index(name="idx_2e3d4d898eebe4bb", columns={"item_cost_54_0"}), @ORM\Index(name="idx_2e3d4d8996a81081", columns={"item_receive_47_0"}), @ORM\Index(name="idx_2e3d4d89db8e232d", columns={"item_cost_30_1"}), @ORM\Index(name="idx_2e3d4d89ea08afdd", columns={"quest_item_23"}), @ORM\Index(name="idx_2e3d4d89ddf137f2", columns={"achievement_unlock_11"}), @ORM\Index(name="idx_2e3d4d8944f86648", columns={"achievement_unlock_12"}), @ORM\Index(name="idx_2e3d4d8977a0a68f", columns={"item_cost_4_1"}), @ORM\Index(name="idx_2e3d4d89458eda4b", columns={"item_cost_34_2"}), @ORM\Index(name="idx_2e3d4d89f4b5da90", columns={"special_shop_item_category_12_1"}), @ORM\Index(name="idx_2e3d4d89f1b1a028", columns={"achievement_unlock_25"}), @ORM\Index(name="idx_2e3d4d89a83eb89b", columns={"item_receive_5_1"}), @ORM\Index(name="idx_2e3d4d8968b8f192", columns={"achievement_unlock_26"}), @ORM\Index(name="idx_2e3d4d899a625b52", columns={"quest_item_26"}), @ORM\Index(name="idx_2e3d4d8973c155ff", columns={"item_cost_13_1"}), @ORM\Index(name="idx_2e3d4d89ebe6e1b0", columns={"item_cost_3_2"}), @ORM\Index(name="idx_2e3d4d8922369df8", columns={"quest_item_44"}), @ORM\Index(name="idx_2e3d4d89e34f63fb", columns={"special_shop_item_category_25_1"}), @ORM\Index(name="idx_2e3d4d8983796a13", columns={"quest_item_36"}), @ORM\Index(name="idx_2e3d4d898afdf3dc", columns={"achievement_unlock_8"}), @ORM\Index(name="idx_2e3d4d89d17878f9", columns={"item_receive_13_1"}), @ORM\Index(name="idx_2e3d4d89484a4a2c", columns={"item_cost_48_1"}), @ORM\Index(name="idx_2e3d4d89fdfac34a", columns={"achievement_unlock_9"}), @ORM\Index(name="idx_2e3d4d891a4fb90c", columns={"special_shop_item_category_9_1"}), @ORM\Index(name="idx_2e3d4d89e1af2017", columns={"item_receive_47_1"}), @ORM\Index(name="idx_2e3d4d89eb310d1d", columns={"item_receive_49_1"}), @ORM\Index(name="idx_2e3d4d898ba4f23e", columns={"item_cost_53_0"}), @ORM\Index(name="idx_2e3d4d89e7b30e51", columns={"item_cost_8_2"}), @ORM\Index(name="idx_2e3d4d89bd9d58d", columns={"special_shop_item_category_56_0"}), @ORM\Index(name="idx_2e3d4d8932577d8f", columns={"quest_item_8"}), @ORM\Index(name="idx_2e3d4d8959b5bac7", columns={"special_shop_item_category_36_1"}), @ORM\Index(name="idx_2e3d4d89d80af743", columns={"item_cost_32_1"}), @ORM\Index(name="idx_2e3d4d89236f05", columns={"item_receive_38_0"}), @ORM\Index(name="idx_2e3d4d89d781f321", columns={"achievement_unlock_40"}), @ORM\Index(name="idx_2e3d4d896d45dedb", columns={"achievement_unlock_6"}), @ORM\Index(name="idx_2e3d4d89cf3ec543", columns={"special_shop_item_category_49_1"}), @ORM\Index(name="idx_2e3d4d89d9c89d74", columns={"item_cost_33_1"}), @ORM\Index(name="idx_2e3d4d899d0f9f4b", columns={"quest_item_22"}), @ORM\Index(name="idx_2e3d4d8988202650", columns={"item_cost_51_0"}), @ORM\Index(name="idx_2e3d4d8982708031", columns={"special_shop_item_category_13_0"}), @ORM\Index(name="idx_2e3d4d8991a1b85d", columns={"item_receive_43_0"}), @ORM\Index(name="idx_2e3d4d89dcd49e40", columns={"item_cost_42_2"}), @ORM\Index(name="idx_2e3d4d8992839186", columns={"special_shop_item_category_20_0"}), @ORM\Index(name="idx_2e3d4d89f6dc6431", columns={"achievement_unlock_21"}), @ORM\Index(name="idx_2e3d4d89680db30", columns={"item_cost_10_0"}), @ORM\Index(name="idx_2e3d4d8987f054a", columns={"item_cost_9_0"}), @ORM\Index(name="idx_2e3d4d893be131a4", columns={"quest_item_4"}), @ORM\Index(name="idx_2e3d4d893e8f108d", columns={"item_cost_49_0"}), @ORM\Index(name="idx_2e3d4d89d99b88c5", columns={"item_cost_45_2"}), @ORM\Index(name="idx_2e3d4d89f428444a", columns={"item_cost_28_2"}), @ORM\Index(name="idx_2e3d4d8986b690be", columns={"achievement_unlock_24"}), @ORM\Index(name="idx_2e3d4d89579393da", columns={"achievement_unlock_53"}), @ORM\Index(name="idx_2e3d4d8946591b94", columns={"item_cost_40_1"}), @ORM\Index(name="idx_2e3d4d89f5ea2e7d", columns={"item_cost_29_2"}), @ORM\Index(name="idx_2e3d4d89e96c308", columns={"special_shop_item_category_51_0"}), @ORM\Index(name="idx_2e3d4d89f9ecd42d", columns={"item_cost_54_1"}), @ORM\Index(name="idx_2e3d4d89e4e03692", columns={"item_receive_40_1"}), @ORM\Index(name="idx_2e3d4d898f298e8c", columns={"item_cost_55_0"}), @ORM\Index(name="idx_2e3d4d8992256c33", columns={"item_receive_41_0"}), @ORM\Index(name="idx_2e3d4d89eaf3672a", columns={"item_receive_48_1"}), @ORM\Index(name="idx_2e3d4d89635bd822", columns={"special_shop_item_category_1_0"}), @ORM\Index(name="idx_2e3d4d8994eeaed8", columns={"item_receive_44_0"}), @ORM\Index(name="idx_2e3d4d8918973ec", columns={"item_cost_14_0"}), @ORM\Index(name="idx_2e3d4d89fd32bd2e", columns={"item_cost_24_2"}), @ORM\Index(name="idx_2e3d4d897cdee51b", columns={"special_shop_item_category_56_1"}), @ORM\Index(name="idx_2e3d4d89b46c1a34", columns={"special_shop_item_category_42_0"}), @ORM\Index(name="idx_2e3d4d8989e24c67", columns={"item_cost_50_0"}), @ORM\Index(name="idx_2e3d4d8960b69026", columns={"item_cost_22_1"}), @ORM\Index(name="idx_2e3d4d8985d01e3", columns={"special_shop_item_category_54_0"}), @ORM\Index(name="idx_2e3d4d89117a625b", columns={"item_cost_27_0"}), @ORM\Index(name="idx_2e3d4d8970a90e53", columns={"item_cost_0_1"}), @ORM\Index(name="idx_2e3d4d89a42d8f56", columns={"achievement_unlock_18"}), @ORM\Index(name="idx_2e3d4d8933ff56de", columns={"achievement_unlock_13"}), @ORM\Index(name="idx_2e3d4d897662ccb8", columns={"item_cost_5_1"}), @ORM\Index(name="idx_2e3d4d8942d46726", columns={"item_cost_46_1"}), @ORM\Index(name="idx_2e3d4d89defbe23a", columns={"item_receive_4_0"}), @ORM\Index(name="idx_2e3d4d896d48899a", columns={"special_shop_item_category_9_0"}), @ORM\Index(name="idx_2e3d4d89dceffd2f", columns={"item_receive_19_1"}), @ORM\Index(name="idx_2e3d4d897dba7299", columns={"item_receive_36_1"}), @ORM\Index(name="idx_2e3d4d895a97931c", columns={"item_receive_55_1"}), @ORM\Index(name="idx_2e3d4d89c682c192", columns={"item_receive_24_1"}), @ORM\Index(name="idx_2e3d4d896a281ac2", columns={"achievement_unlock_2"}), @ORM\Index(name="idx_2e3d4d89f0f62d49", columns={"item_cost_58_1"}), @ORM\Index(name="idx_2e3d4d897ffcccc0", columns={"item_receive_35_1"}), @ORM\Index(name="idx_2e3d4d89732dda3d", columns={"item_cost_2_1"}), @ORM\Index(name="idx_2e3d4d89f038a622", columns={"special_shop_item_category_14_1"}), @ORM\Index(name="idx_2e3d4d897b71b072", columns={"item_receive_33_1"}), @ORM\Index(name="idx_2e3d4d89460a0e25", columns={"item_cost_36_2"}), @ORM\Index(name="idx_2e3d4d895c5c51f7", columns={"item_receive_50_1"}), @ORM\Index(name="idx_2e3d4d894b19db", columns={"item_cost_15_0"}), @ORM\Index(name="idx_2e3d4d897f7835dc", columns={"item_cost_9_1"}), @ORM\Index(name="idx_2e3d4d89b7467ac4", columns={"achievement_unlock_59"}), @ORM\Index(name="idx_2e3d4d897e56d029", columns={"item_cost_19_1"}), @ORM\Index(name="idx_2e3d4d89da9cf3eb", columns={"achievement_unlock_15"}), @ORM\Index(name="idx_2e3d4d89c50615fc", columns={"item_receive_26_1"}), @ORM\Index(name="idx_2e3d4d89f47e5a85", columns={"quest_item_37"}), @ORM\Index(name="idx_2e3d4d89abd420f", columns={"item_receive_36_0"}), @ORM\Index(name="idx_2e3d4d89a0e62bc8", columns={"item_receive_8_1"}), @ORM\Index(name="idx_2e3d4d89ff740377", columns={"item_cost_27_2"}), @ORM\Index(name="idx_2e3d4d892b80d1d3", columns={"quest_item_48"}), @ORM\Index(name="idx_2e3d4d8981f4545f", columns={"special_shop_item_category_11_0"}), @ORM\Index(name="idx_2e3d4d8972efb00a", columns={"item_cost_3_1"}), @ORM\Index(name="idx_2e3d4d8925eecd6c", columns={"special_shop_item_category_39_0"}), @ORM\Index(name="idx_2e3d4d89f27e187b", columns={"special_shop_item_category_17_1"}), @ORM\Index(name="idx_2e3d4d89248a5aee", columns={"item_receive_59_0"}), @ORM\Index(name="idx_2e3d4d89b0479b33", columns={"item_receive_25_0"}), @ORM\Index(name="idx_2e3d4d89d7b3ba12", columns={"item_receive_16_1"}), @ORM\Index(name="idx_2e3d4d893c8cf5bd", columns={"quest_item_0"}), @ORM\Index(name="idx_2e3d4d89538d6a78", columns={"item_receive_59_1"}), @ORM\Index(name="idx_2e3d4d89768e437a", columns={"item_cost_14_1"}), @ORM\Index(name="idx_2e3d4d8917d83cda", columns={"special_shop_item_category_3_1"}), @ORM\Index(name="idx_2e3d4d89d6237169", columns={"item_receive_9_0"}), @ORM\Index(name="idx_2e3d4d89e06d4a20", columns={"item_receive_46_1"}), @ORM\Index(name="idx_2e3d4d894b8bc52b", columns={"quest_item_1"}), @ORM\Index(name="idx_2e3d4d89a8046f09", columns={"item_cost_36_0"}), @ORM\Index(name="idx_2e3d4d89d0ec3738", columns={"achievement_unlock_44"}), @ORM\Index(name="idx_2e3d4d899df457bc", columns={"item_receive_48_0"}), @ORM\Index(name="idx_2e3d4d8986fdfc83", columns={"special_shop_item_category_15_0"}), @ORM\Index(name="idx_2e3d4d894395a251", columns={"achievement_unlock_16"}), @ORM\Index(name="idx_2e3d4d896299b215", columns={"special_shop_item_category_0_0"}), @ORM\Index(name="idx_2e3d4d898414ae0a", columns={"quest_item_32"}), @ORM\Index(name="idx_2e3d4d892094a34c", columns={"achievement_unlock_52"}), @ORM\Index(name="idx_2e3d4d89145ce8b4", columns={"special_shop_item_category_1_1"}), @ORM\Index(name="idx_2e3d4d891be44f51", columns={"item_cost_29_0"}), @ORM\Index(name="idx_2e3d4d89961bedd4", columns={"achievement_unlock_38"}), @ORM\Index(name="idx_2e3d4d89a29a4203", columns={"item_cost_38_0"}), @ORM\Index(name="idx_2e3d4d89fbf97fc5", columns={"item_cost_21_2"}), @ORM\Index(name="idx_2e3d4d899c90c03e", columns={"special_shop_item_category_28_0"}), @ORM\Index(name="idx_2e3d4d89441fa5cd", columns={"item_cost_43_1"}), @ORM\Index(name="idx_2e3d4d8974c8fd23", columns={"item_cost_17_1"}), @ORM\Index(name="idx_2e3d4d89d2829491", columns={"quest_item_2"}), @ORM\Index(name="idx_2e3d4d89d08171a1", columns={"item_cost_49_2"}), @ORM\Index(name="idx_2e3d4d89de922019", columns={"item_cost_41_2"}), @ORM\Index(name="idx_2e3d4d89406cef1", columns={"quest_item_21"}), @ORM\Index(name="idx_2e3d4d89a7bd2258", columns={"item_receive_12_0"}), @ORM\Index(name="idx_2e3d4d89cb5538cd", columns={"quest_item_42"}), @ORM\Index(name="idx_2e3d4d89365783de", columns={"item_cost_44_0"}), @ORM\Index(name="idx_2e3d4d8921f01500", columns={"quest_item_19"}), @ORM\Index(name="idx_2e3d4d89349292c7", columns={"achievement_unlock_17"}), @ORM\Index(name="idx_2e3d4d89d45f18a2", columns={"item_cost_39_1"}), @ORM\Index(name="idx_2e3d4d892846592b", columns={"quest_item_15"}), @ORM\Index(name="idx_2e3d4d895ebc121b", columns={"special_shop_item_category_32_1"}), @ORM\Index(name="idx_2e3d4d89eac80445", columns={"item_cost_13_2"}), @ORM\Index(name="idx_2e3d4d89d59d7295", columns={"item_cost_38_1"}), @ORM\Index(name="idx_2e3d4d89834bbff7", columns={"achievement_unlock_4"}), @ORM\Index(name="idx_2e3d4d89af0dc7d5", columns={"item_cost_32_0"}), @ORM\Index(name="idx_2e3d4d89d859e2f2", columns={"item_cost_44_2"}), @ORM\Index(name="idx_2e3d4d89c125fc1e", columns={"quest_item_13"}), @ORM\Index(name="idx_2e3d4d89b99df2f6", columns={"achievement_unlock_51"}), @ORM\Index(name="idx_2e3d4d89742b107", columns={"item_cost_11_0"}), @ORM\Index(name="idx_2e3d4d89459cd004", columns={"quest_item_59"}), @ORM\Index(name="idx_2e3d4d8969ff7cf3", columns={"item_cost_58_2"}), @ORM\Index(name="idx_2e3d4d897640c811", columns={"special_shop_item_category_58_1"}), @ORM\Index(name="idx_2e3d4d89e600757e", columns={"special_shop_item_category_22_1"}), @ORM\Index(name="idx_2e3d4d897dda7655", columns={"quest_item_28"}), @ORM\Index(name="idx_2e3d4d895a316ea9", columns={"special_shop_item_category_34_1"}), @ORM\Index(name="idx_2e3d4d89e109dda2", columns={"special_shop_item_category_26_1"}), @ORM\Index(name="idx_2e3d4d895e1aefae", columns={"item_receive_53_1"}), @ORM\Index(name="idx_2e3d4d89785399a9", columns={"special_shop_item_category_50_1"}), @ORM\Index(name="idx_2e3d4d89ea248b87", columns={"item_cost_2_2"}), @ORM\Index(name="idx_2e3d4d89feb66940", columns={"item_cost_26_2"}), @ORM\Index(name="idx_2e3d4d895e8809c", columns={"item_cost_3_0"}), @ORM\Index(name="idx_2e3d4d8945504d19", columns={"quest_item_9"}), @ORM\Index(name="idx_2e3d4d89c9f70679", columns={"achievement_unlock_54"}), @ORM\Index(name="idx_2e3d4d89af371047", columns={"item_receive_1_1"}), @ORM\Index(name="idx_2e3d4d89aecfade2", columns={"item_cost_33_0"}), @ORM\Index(name="idx_2e3d4d898d6f30d5", columns={"item_cost_56_0"}), @ORM\Index(name="idx_2e3d4d8949e56682", columns={"achievement_unlock_47"}), @ORM\Index(name="idx_2e3d4d895b55f92b", columns={"item_receive_54_1"}), @ORM\Index(name="idx_2e3d4d899c363d8b", columns={"item_receive_49_0"}), @ORM\Index(name="idx_2e3d4d89f134477e", columns={"item_cost_59_1"}), @ORM\Index(name="idx_2e3d4d895cfaac42", columns={"special_shop_item_category_31_1"}), @ORM\Index(name="idx_2e3d4d8917b1a0b0", columns={"item_cost_22_0"}), @ORM\Index(name="idx_2e3d4d891a703ba9", columns={"quest_item_35"}), @ORM\Index(name="idx_2e3d4d89d671d025", columns={"item_receive_17_1"}), @ORM\Index(name="idx_2e3d4d89c0490379", columns={"item_receive_21_1"}), @ORM\Index(name="idx_2e3d4d89683d16c4", columns={"item_cost_59_2"}), @ORM\Index(name="idx_2e3d4d891b8dd33b", columns={"special_shop_item_category_8_1"}), @ORM\Index(name="idx_2e3d4d895d38c675", columns={"special_shop_item_category_30_1"}), @ORM\Index(name="idx_2e3d4d89fbaa6a74", columns={"item_cost_57_1"}), @ORM\Index(name="idx_2e3d4d8981db54a7", columns={"achievement_unlock_20"}), @ORM\Index(name="idx_2e3d4d8990c52fdf", columns={"special_shop_item_category_23_0"}), @ORM\Index(name="idx_2e3d4d89b0e16686", columns={"special_shop_item_category_44_0"}), @ORM\Index(name="idx_2e3d4d89d5f5044b", columns={"item_receive_15_1"}), @ORM\Index(name="idx_2e3d4d89c462827e", columns={"special_shop_item_category_46_1"}), @ORM\Index(name="idx_2e3d4d89ce9ac260", columns={"achievement_unlock_50"}), @ORM\Index(name="idx_2e3d4d89494ccbb3", columns={"complete_text"}), @ORM\Index(name="idx_2e3d4d89e75f8193", columns={"item_cost_19_2"}), @ORM\Index(name="idx_2e3d4d89f807ec03", columns={"achievement_unlock_29"}), @ORM\Index(name="idx_2e3d4d891d1dffb0", columns={"quest_item_31"}), @ORM\Index(name="idx_2e3d4d892eb28a51", columns={"special_shop_item_category_36_0"}), @ORM\Index(name="idx_2e3d4d89ae5d4b85", columns={"achievement_unlock_49"}), @ORM\Index(name="idx_2e3d4d89976a7ab6", columns={"item_receive_46_0"}), @ORM\Index(name="idx_2e3d4d89e3e99e4e", columns={"item_receive_44_1"}), @ORM\Index(name="idx_2e3d4d89e86235de", columns={"item_cost_1_2"}), @ORM\Index(name="idx_2e3d4d8936b0ae8", columns={"quest_item_25"}), @ORM\Index(name="idx_2e3d4d89645270fe", columns={"special_shop_item_category_5_0"}), @ORM\Index(name="idx_2e3d4d892b5b6161", columns={"item_receive_50_0"}), @ORM\Index(name="idx_2e3d4d89d5ef5088", columns={"quest_item_6"}), @ORM\Index(name="idx_2e3d4d89c3cdd717", columns={"item_receive_23_1"}), @ORM\Index(name="idx_2e3d4d89aa2aa78e", columns={"item_receive_18_0"}), @ORM\Index(name="idx_2e3d4d892d365e3f", columns={"special_shop_item_category_34_0"}), @ORM\Index(name="idx_2e3d4d89a5fb9c01", columns={"item_receive_11_0"}), @ORM\Index(name="idx_2e3d4d892e1477e4", columns={"item_receive_57_0"}), @ORM\Index(name="idx_2e3d4d89b1230cb1", columns={"special_shop_item_category_45_0"}), @ORM\Index(name="idx_2e3d4d89479b71a3", columns={"item_cost_41_1"}), @ORM\Index(name="idx_2e3d4d89910745e8", columns={"special_shop_item_category_22_0"}), @ORM\Index(name="idx_2e3d4d89e94cd02b", columns={"item_cost_11_2"}), @ORM\Index(name="idx_2e3d4d89a9c6053e", columns={"item_cost_37_0"}), @ORM\Index(name="idx_2e3d4d89dd2d9718", columns={"item_receive_18_1"}), @ORM\Index(name="idx_2e3d4d89fcf0d719", columns={"item_cost_25_2"}), @ORM\Index(name="idx_2e3d4d89cefcaf74", columns={"special_shop_item_category_48_1"}), @ORM\Index(name="idx_2e3d4d89774c294d", columns={"item_cost_15_1"}), @ORM\Index(name="idx_2e3d4d89857928ed", columns={"special_shop_item_category_17_0"}), @ORM\Index(name="idx_2e3d4d89c20fbd20", columns={"item_receive_22_1"}), @ORM\Index(name="idx_2e3d4d8972033fc8", columns={"item_cost_12_1"}), @ORM\Index(name="idx_2e3d4d8920da782", columns={"item_cost_16_0"}), @ORM\Index(name="idx_2e3d4d89b365b2e8", columns={"special_shop_item_category_46_0"}), @ORM\Index(name="idx_2e3d4d89a79619", columns={"item_cost_4_0"}), @ORM\Index(name="idx_2e3d4d89da769e88", columns={"item_receive_2_0"}), @ORM\Index(name="idx_2e3d4d892a990b56", columns={"item_receive_51_0"}), @ORM\Index(name="idx_2e3d4d89aa42d150", columns={"item_cost_35_0"}), @ORM\Index(name="idx_2e3d4d893f4d7aba", columns={"item_cost_48_0"}), @ORM\Index(name="idx_2e3d4d8984bb42da", columns={"special_shop_item_category_16_0"}), @ORM\Index(name="idx_2e3d4d894b475836", columns={"quest_item_51"}), @ORM\Index(name="idx_2e3d4d8950fe57c3", columns={"achievement_unlock_57"}), @ORM\Index(name="idx_2e3d4d896d2115f0", columns={"item_cost_28_1"}), @ORM\Index(name="idx_2e3d4d899399661", columns={"item_receive_34_0"}), @ORM\Index(name="idx_2e3d4d89dd16f477", columns={"item_cost_43_2"}), @ORM\Index(name="idx_2e3d4d897c7818ae", columns={"item_receive_37_1"}), @ORM\Index(name="idx_2e3d4d894103a6f9", columns={"item_cost_32_2"}), @ORM\Index(name="idx_2e3d4d8960e58597", columns={"item_cost_54_2"}), @ORM\Index(name="idx_2e3d4d89e6a688cb", columns={"item_receive_43_1"}), @ORM\Index(name="idx_2e3d4d89b4cae781", columns={"item_receive_23_0"}), @ORM\Index(name="idx_2e3d4d893795e9e9", columns={"item_cost_45_0"}), @ORM\Index(name="idx_2e3d4d89b7e8ce5a", columns={"special_shop_item_category_40_0"}), @ORM\Index(name="idx_2e3d4d89582cada4", columns={"quest_item_10"}), @ORM\Index(name="idx_2e3d4d89952cc4ef", columns={"item_receive_45_0"}), @ORM\Index(name="idx_2e3d4d897301fe67", columns={"quest_item_20"}), @ORM\Index(name="idx_2e3d4d891fbfc104", columns={"achievement_unlock_27"}), @ORM\Index(name="idx_2e3d4d898e256fd0", columns={"special_shop_item_category_18_0"}), @ORM\Index(name="idx_2e3d4d89c0effecc", columns={"special_shop_item_category_40_1"}), @ORM\Index(name="idx_2e3d4d8942877297", columns={"item_cost_30_2"}), @ORM\Index(name="idx_2e3d4d89efc75570", columns={"achievement_unlock_31"}), @ORM\Index(name="idx_2e3d4d89c18b694e", columns={"item_receive_20_1"}), @ORM\Index(name="idx_2e3d4d897bd74dc7", columns={"special_shop_item_category_52_1"}), @ORM\Index(name="idx_2e3d4d89951e0bf", columns={"item_cost_19_0"}), @ORM\Index(name="idx_2e3d4d89b201256a", columns={"item_receive_26_0"}), @ORM\Index(name="idx_2e3d4d89df39880d", columns={"item_receive_5_0"}), @ORM\Index(name="idx_2e3d4d89acb3c429", columns={"item_receive_3_1"}), @ORM\Index(name="idx_2e3d4d8966c54f2", columns={"item_cost_1_0"}), @ORM\Index(name="idx_2e3d4d89ef6b9d02", columns={"item_cost_5_2"}), @ORM\Index(name="idx_2e3d4d8975e618d6", columns={"item_cost_7_1"}), @ORM\Index(name="idx_2e3d4d892a3ff6e3", columns={"special_shop_item_category_30_0"}), @ORM\Index(name="idx_2e3d4d89c7e65610", columns={"special_shop_item_category_44_1"}), @ORM\Index(name="idx_2e3d4d89e8aa9169", columns={"achievement_unlock_35"}), @ORM\Index(name="idx_2e3d4d89ad71ae1e", columns={"item_receive_2_1"}), @ORM\Index(name="idx_2e3d4d89e584a110", columns={"special_shop_item_category_20_1"}), @ORM\Index(name="idx_2e3d4d89315e2b02", columns={"item_cost_40_0"}), @ORM\Index(name="idx_2e3d4d89f702f90d", columns={"not_complete_text"}), @ORM\Index(name="idx_2e3d4d89662e477c", columns={"item_cost_51_2"}), @ORM\Index(name="idx_2e3d4d897991f39e", columns={"special_shop_item_category_51_1"}), @ORM\Index(name="idx_2e3d4d89d32abfc0", columns={"achievement_unlock_19"}), @ORM\Index(name="idx_2e3d4d89746c3a7e", columns={"quest_item_24"}), @ORM\Index(name="idx_2e3d4d8962a33bce", columns={"item_cost_57_2"}), @ORM\Index(name="idx_2e3d4d89143574de", columns={"item_cost_20_0"}), @ORM\Index(name="idx_2e3d4d892bfd9cd4", columns={"special_shop_item_category_31_0"}), @ORM\Index(name="idx_2e3d4d892f2b9d32", columns={"quest_item_11"}), @ORM\Index(name="idx_2e3d4d89aef57a70", columns={"item_receive_0_1"}), @ORM\Index(name="idx_2e3d4d89c12d94fb", columns={"special_shop_item_category_41_1"}), @ORM\Index(name="idx_2e3d4d89a3305eea", columns={"item_receive_14_0"}), @ORM\Index(name="idx_2e3d4d89f7310efe", columns={"special_shop_item_category_10_1"}), @ORM\Index(name="idx_2e3d4d89e764e2fc", columns={"item_receive_42_1"}), @ORM\Index(name="idx_2e3d4d89b74e33ef", columns={"item_receive_21_0"}), @ORM\Index(name="idx_2e3d4d89b9fb9fe2", columns={"special_shop_item_category_48_0"}), @ORM\Index(name="idx_2e3d4d89a1bbfba", columns={"special_shop_item_category_57_0"}), @ORM\Index(name="idx_2e3d4d89309c4135", columns={"item_cost_41_0"}), @ORM\Index(name="idx_2e3d4d891a42ee4d", columns={"achievement_unlock_7"}), @ORM\Index(name="idx_2e3d4d89e446cb27", columns={"special_shop_item_category_21_1"}), @ORM\Index(name="idx_2e3d4d896d770b3f", columns={"quest_item_34"}), @ORM\Index(name="idx_2e3d4d891673ca87", columns={"item_cost_23_0"}), @ORM\Index(name="idx_2e3d4d896ce37fc7", columns={"item_cost_29_1"}), @ORM\Index(name="idx_2e3d4d89165fc2e", columns={"item_cost_5_0"}), @ORM\Index(name="idx_2e3d4d8984267bee", columns={"achievement_unlock_0"}), @ORM\Index(name="idx_2e3d4d89b95d6257", columns={"item_receive_29_0"}), @ORM\Index(name="idx_2e3d4d896fd5358b", columns={"achievement_unlock_22"}), @ORM\Index(name="idx_2e3d4d89edc1ac99", columns={"item_cost_17_2"}), @ORM\Index(name="idx_2e3d4d89abba6cf5", columns={"item_receive_7_1"}), @ORM\Index(name="idx_2e3d4d8967bf38fa", columns={"item_cost_26_1"}), @ORM\Index(name="idx_2e3d4d89532b97cd", columns={"special_shop_item_category_38_1"}), @ORM\Index(name="idx_2e3d4d89f8e03571", columns={"special_shop_item_category_19_1"}), @ORM\Index(name="idx_2e3d4d89b5ae7003", columns={"special_shop_item_category_43_0"}), @ORM\Index(name="idx_2e3d4d892f70e066", columns={"special_shop_item_category_37_0"}), @ORM\Index(name="idx_2e3d4d89ee4578f7", columns={"item_cost_15_2"}), @ORM\Index(name="idx_2e3d4d89ff2716c6", columns={"item_cost_51_1"}), @ORM\Index(name="idx_2e3d4d89ec03c6ae", columns={"item_cost_16_2"}), @ORM\Index(name="idx_2e3d4d89a2f234dd", columns={"item_receive_15_0"}), @ORM\Index(name="idx_2e3d4d8940c1ccce", columns={"item_cost_33_2"}), @ORM\Index(name="idx_2e3d4d89a2e8601e", columns={"quest_item_7"}), @ORM\Index(name="idx_2e3d4d8980363e68", columns={"special_shop_item_category_10_0"}), @ORM\Index(name="idx_2e3d4d897187eba6", columns={"item_cost_10_1"}), @ORM\Index(name="idx_2e3d4d89dcbd5c63", columns={"item_receive_7_0"}), @ORM\Index(name="idx_2e3d4d89611d667b", columns={"special_shop_item_category_2_0"}), @ORM\Index(name="idx_2e3d4d894150b348", columns={"item_cost_44_1"}), @ORM\Index(name="idx_2e3d4d89f87dabab", columns={"item_cost_23_2"}), @ORM\Index(name="idx_2e3d4d8978f5641c", columns={"item_receive_31_1"}), @ORM\Index(name="idx_2e3d4d89e0cbb795", columns={"special_shop_item_category_27_1"}), @ORM\Index(name="idx_2e3d4d89f1facc15", columns={"special_shop_item_category_15_1"}), @ORM\Index(name="idx_2e3d4d89f9225f46", columns={"special_shop_item_category_18_1"}), @ORM\Index(name="idx_2e3d4d89aa7806c2", columns={"item_receive_6_1"}), @ORM\Index(name="idx_2e3d4d895040f5e", columns={"item_cost_12_0"}), @ORM\Index(name="idx_2e3d4d89fee57cf1", columns={"item_cost_50_1"}), @ORM\Index(name="idx_2e3d4d89c6243c27", columns={"special_shop_item_category_45_1"}), @ORM\Index(name="idx_2e3d4d897eba5feb", columns={"item_cost_8_1"}), @ORM\Index(name="idx_2e3d4d8960df0c4c", columns={"special_shop_item_category_3_0"}), @ORM\Index(name="idx_2e3d4d89fa680043", columns={"item_cost_56_1"}), @ORM\Index(name="idx_2e3d4d8945ddcffa", columns={"item_cost_42_1"}), @ORM\Index(name="idx_2e3d4d891113fe31", columns={"special_shop_item_category_6_1"}), @ORM\Index(name="idx_2e3d4d89ac8913bb", columns={"item_cost_30_0"}), @ORM\Index(name="idx_2e3d4d8910b8086c", columns={"item_cost_26_0"}), @ORM\Index(name="idx_2e3d4d897f94ba1e", columns={"item_cost_18_1"}), @ORM\Index(name="idx_2e3d4d89643bec94", columns={"item_cost_24_1"}), @ORM\Index(name="idx_2e3d4d89b3c34f5d", columns={"item_receive_27_0"}), @ORM\Index(name="idx_2e3d4d89ab80bb67", columns={"item_cost_34_0"}), @ORM\Index(name="idx_2e3d4d895d9e3bc0", columns={"item_receive_51_1"}), @ORM\Index(name="idx_2e3d4d8929bb228d", columns={"special_shop_item_category_32_0"}), @ORM\Index(name="idx_2e3d4d89a549391a", columns={"quest_item_53"}), @ORM\Index(name="idx_2e3d4d894d564918", columns={"item_cost_39_2"}), @ORM\Index(name="idx_2e3d4d891a262566", columns={"item_cost_28_0"}), @ORM\Index(name="idx_2e3d4d89960eed34", columns={"special_shop_item_category_26_0"}), @ORM\Index(name="idx_2e3d4d89d121766", columns={"special_shop_item_category_53_0"}), @ORM\Index(name="idx_2e3d4d8912feb635", columns={"item_cost_25_0"}), @ORM\Index(name="idx_2e3d4d895c87e145", columns={"quest_item_49"}), @ORM\Index(name="idx_2e3d4d898fbfc56", columns={"item_receive_35_0"}), @ORM\Index(name="idx_2e3d4d89b839f5d5", columns={"special_shop_item_category_49_0"}), @ORM\Index(name="idx_2e3d4d89dec135a8", columns={"item_cost_37_1"}), @ORM\Index(name="idx_2e3d4d89a67f486f", columns={"item_receive_13_0"}), @ORM\Index(name="idx_2e3d4d8997cc8703", columns={"special_shop_item_category_27_0"}), @ORM\Index(name="idx_2e3d4d895531ad6e", columns={"quest_item_45"}), @ORM\Index(name="idx_2e3d4d89524f004f", columns={"item_receive_58_1"}), @ORM\Index(name="idx_2e3d4d89444cb07c", columns={"item_cost_35_2"}), @ORM\Index(name="idx_2e3d4d897e985b42", columns={"special_shop_item_category_55_1"}), @ORM\Index(name="idx_2e3d4d89e11cdd42", columns={"achievement_unlock_39"}), @ORM\Index(name="idx_2e3d4d89ea559a9f", columns={"special_shop_item_category_29_1"}), @ORM\Index(name="idx_2e3d4d89b185f104", columns={"item_receive_24_0"}), @ORM\Index(name="idx_2e3d4d89e28d09cc", columns={"special_shop_item_category_24_1"}), @ORM\Index(name="idx_2e3d4d89b68c59d8", columns={"item_receive_20_0"}), @ORM\Index(name="idx_2e3d4d899341fbb1", columns={"special_shop_item_category_21_0"}), @ORM\Index(name="idx_2e3d4d895f4169bd", columns={"quest_item_14"}), @ORM\Index(name="idx_2e3d4d897e3ea6f7", columns={"item_receive_34_1"}), @ORM\Index(name="idx_2e3d4d893cfcdb5", columns={"item_cost_17_0"}), @ORM\Index(name="idx_2e3d4d894c2a9c2f", columns={"quest_item_55"}), @ORM\Index(name="idx_2e3d4d8993e70604", columns={"item_receive_40_0"}), @ORM\Index(name="idx_2e3d4d89c4c47fcb", columns={"item_receive_27_1"}), @ORM\Index(name="idx_2e3d4d89b62aa46d", columns={"special_shop_item_category_41_0"}), @ORM\Index(name="idx_2e3d4d8935d357b0", columns={"item_cost_46_0"}), @ORM\Index(name="idx_2e3d4d89eea9f735", columns={"item_cost_4_2"}), @ORM\Index(name="idx_2e3d4d89e6716466", columns={"item_cost_9_2"}), @ORM\Index(name="idx_2e3d4d89dbdd369c", columns={"item_cost_46_2"}), @ORM\Index(name="idx_2e3d4d8956f72596", columns={"quest_item_18"}), @ORM\Index(name="idx_2e3d4d89f6f364c9", columns={"special_shop_item_category_11_1"}), @ORM\Index(name="idx_2e3d4d897782a226", columns={"special_shop_item_category_59_1"}), @ORM\Index(name="idx_2e3d4d8999f6bd4", columns={"special_shop_item_category_55_0"}), @ORM\Index(name="idx_2e3d4d8965aa9312", columns={"item_cost_53_2"}), @ORM\Index(name="idx_2e3d4d89d95a7b13", columns={"achievement_unlock_48"}), @ORM\Index(name="idx_2e3d4d893234277", columns={"item_cost_6_0"}), @ORM\Index(name="idx_2e3d4d8998c065e6", columns={"achievement_unlock_30"}), @ORM\Index(name="idx_2e3d4d89b622cc88", columns={"quest_item_12"}), @ORM\Index(name="idx_2e3d4d89dd7f3654", columns={"item_receive_6_0"}), @ORM\Index(name="idx_2e3d4d89159e8283", columns={"special_shop_item_category_0_1"}), @ORM\Index(name="idx_2e3d4d892fd61dd3", columns={"item_receive_56_0"}), @ORM\Index(name="idx_2e3d4d89133cdc02", columns={"item_cost_24_0"}), @ORM\Index(name="idx_2e3d4d89d1431b96", columns={"item_cost_48_2"}), @ORM\Index(name="idx_2e3d4d89b5088db6", columns={"item_receive_22_0"}), @ORM\Index(name="idx_2e3d4d89d0ba12ce", columns={"item_receive_12_1"}), @ORM\Index(name="idx_2e3d4d89b89f0860", columns={"item_receive_28_0"}), @ORM\Index(name="idx_2e3d4d89cc38fcd4", columns={"quest_item_46"}), @ORM\Index(name="idx_2e3d4d89254830d9", columns={"item_receive_58_0"}), @ORM\Index(name="idx_2e3d4d89a224fd03", columns={"quest_item_57"}), @ORM\Index(name="idx_2e3d4d89a439f636", columns={"item_receive_10_0"}), @ORM\Index(name="idx_2e3d4d89cd07d51", columns={"special_shop_item_category_52_0"}), @ORM\Index(name="idx_2e3d4d8913c67782", columns={"quest_item_39"}), @ORM\Index(name="idx_2e3d4d8983b2ea06", columns={"special_shop_item_category_12_0"}), @ORM\Index(name="idx_2e3d4d89df035f9f", columns={"item_cost_36_1"}), @ORM\Index(name="idx_2e3d4d897f5a3175", columns={"special_shop_item_category_54_1"}), @ORM\Index(name="idx_2e3d4d893b2dacb9", columns={"quest_item_54"}), @ORM\Index(name="idx_2e3d4d89aaf60764", columns={"achievement_unlock_10"}), @ORM\Index(name="idx_2e3d4d89e88eba1c", columns={"item_cost_10_2"}), @ORM\Index(name="idx_2e3d4d89e5225ca5", columns={"item_receive_41_1"}), @ORM\Index(name="idx_2e3d4d8947c86412", columns={"item_cost_37_2"}), @ORM\Index(name="idx_2e3d4d89ecef496c", columns={"item_cost_7_2"}), @ORM\Index(name="idx_2e3d4d8928dfb50f", columns={"item_receive_52_0"}), @ORM\Index(name="idx_2e3d4d892e12840", columns={"item_cost_7_0"}), @ORM\Index(name="idx_2e3d4d896a4f045", columns={"achievement_unlock_37"}), @ORM\Index(name="idx_2e3d4d899063d26a", columns={"item_receive_42_0"}), @ORM\Index(name="idx_2e3d4d8970458191", columns={"item_cost_11_1"}), @ORM\Index(name="idx_2e3d4d89c7680e4", columns={"item_receive_33_0"}), @ORM\Index(name="idx_2e3d4d89ef8712c0", columns={"item_cost_14_2"}), @ORM\Index(name="idx_2e3d4d89f9bfc19c", columns={"item_cost_22_2"}), @ORM\Index(name="idx_2e3d4d8971a3c0d3", columns={"achievement_unlock_36"}), @ORM\Index(name="idx_2e3d4d899448536d", columns={"special_shop_item_category_25_0"}), @ORM\Index(name="idx_2e3d4d898938a88", columns={"item_cost_18_0"}), @ORM\Index(name="idx_2e3d4d89d33ec6a0", columns={"item_receive_10_1"}), @ORM\Index(name="idx_2e3d4d898592b0", columns={"special_shop_item_category_59_0"}), @ORM\Index(name="idx_2e3d4d89667d52cd", columns={"item_cost_27_1"}), @ORM\Index(name="idx_2e3d4d89bb3fcc42", columns={"quest_item_47"}), @ORM\Index(name="idx_2e3d4d893ee25614", columns={"achievement_unlock_46"}), @ORM\Index(name="idx_2e3d4d89873f96b4", columns={"special_shop_item_category_14_0"}), @ORM\Index(name="idx_2e3d4d89863377e8", columns={"item_cost_59_0"}), @ORM\Index(name="idx_2e3d4d89c2a94095", columns={"special_shop_item_category_43_1"}), @ORM\Index(name="idx_2e3d4d89291ddf38", columns={"item_receive_53_0"}), @ORM\Index(name="idx_2e3d4d895877d0f0", columns={"special_shop_item_category_37_1"}), @ORM\Index(name="idx_2e3d4d896127efa0", columns={"item_cost_55_2"}), @ORM\Index(name="idx_2e3d4d8942aeaab", columns={"item_cost_2_0"}), @ORM\Index(name="idx_2e3d4d8927f96755", columns={"achievement_unlock_56"}), @ORM\Index(name="idx_2e3d4d89f54a93f", columns={"special_shop_item_category_50_0"}), @ORM\Index(name="idx_2e3d4d8979370e2b", columns={"item_receive_30_1"}), @ORM\Index(name="idx_2e3d4d892c52c9bd", columns={"item_receive_54_0"}), @ORM\Index(name="idx_2e3d4d89a7eb07ae", columns={"achievement_unlock_45"}), @ORM\Index(name="idx_2e3d4d891e10532", columns={"item_receive_39_0"}), @ORM\Index(name="idx_2e3d4d89c740aba5", columns={"item_receive_25_1"}), @ORM\Index(name="idx_2e3d4d89dc878bf1", columns={"item_cost_34_1"}), @ORM\Index(name="idx_2e3d4d89bc52085b", columns={"quest_item_43"}), @ORM\Index(name="idx_2e3d4d89fa3b15f2", columns={"item_cost_20_2"}), @ORM\Index(name="idx_2e3d4d89dbb4f4bf", columns={"item_receive_3_0"}), @ORM\Index(name="idx_2e3d4d8958d12d45", columns={"item_receive_56_1"}), @ORM\Index(name="idx_2e3d4d899bd6f7d", columns={"item_cost_8_0"}), @ORM\Index(name="idx_2e3d4d89e69deba4", columns={"item_cost_18_2"}), @ORM\Index(name="idx_2e3d4d89930ed219", columns={"quest_unlock"}), @ORM\Index(name="idx_2e3d4d895f7e782c", columns={"special_shop_item_category_33_1"}), @ORM\Index(name="idx_2e3d4d8963324448", columns={"item_cost_20_1"}), @ORM\Index(name="idx_2e3d4d8934113d87", columns={"item_cost_47_0"}), @ORM\Index(name="idx_2e3d4d898f00dc95", columns={"achievement_unlock_28"}), @ORM\Index(name="idx_2e3d4d896614cea7", columns={"special_shop_item_category_6_0"}), @ORM\Index(name="idx_2e3d4d89161a56ed", columns={"special_shop_item_category_2_1"}), @ORM\Index(name="idx_2e3d4d89c0414a52", columns={"achievement_unlock_58"}), @ORM\Index(name="idx_2e3d4d8976e635a4", columns={"item_receive_39_1"}), @ORM\Index(name="idx_2e3d4d89398f920d", columns={"achievement_unlock_42"}), @ORM\Index(name="idx_2e3d4d89f82ebe1a", columns={"item_cost_55_1"}), @ORM\Index(name="idx_2e3d4d89f44c8f61", columns={"achievement_unlock_5"}), @ORM\Index(name="idx_2e3d4d896468f925", columns={"item_cost_52_2"}), @ORM\Index(name="idx_2e3d4d89df504a2e", columns={"item_cost_40_2"}), @ORM\Index(name="idx_2e3d4d89db4ead3", columns={"item_receive_32_0"}), @ORM\Index(name="idx_2e3d4d89ff2548a", columns={"item_receive_31_0"}), @ORM\Index(name="idx_2e3d4d8965901ac9", columns={"special_shop_item_category_4_0"}), @ORM\Index(name="idx_2e3d4d8967d6a490", columns={"special_shop_item_category_7_0"}), @ORM\Index(name="idx_2e3d4d89fd61a89f", columns={"item_cost_52_1"}), @ORM\Index(name="idx_2e3d4d899d52aa09", columns={"special_shop_item_category_29_0"}), @ORM\Index(name="idx_2e3d4d89eb97f0a8", columns={"special_shop_item_category_28_1"}), @ORM\Index(name="idx_2e3d4d89750a9714", columns={"item_cost_16_1"}), @ORM\Index(name="idx_2e3d4d89d24e098c", columns={"quest_item_52"}), @ORM\Index(name="idx_2e3d4d8976ce04ca", columns={"achievement_unlock_32"}), @ORM\Index(name="idx_2e3d4d89b7f2838", columns={"item_receive_37_0"}), @ORM\Index(name="idx_2e3d4d89255b59e1", columns={"quest_item_40"}), @ORM\Index(name="idx_2e3d4d89329be092", columns={"quest_item_58"}), @ORM\Index(name="idx_2e3d4d89d4376e7c", columns={"item_receive_14_1"}), @ORM\Index(name="idx_2e3d4d8987f11ddf", columns={"item_cost_58_0"}), @ORM\Index(name="idx_2e3d4d8943160d11", columns={"item_cost_47_1"}), @ORM\Index(name="idx_2e3d4d894e88a29b", columns={"achievement_unlock_43"}), @ORM\Index(name="idx_2e3d4d89eb0a6e72", columns={"item_cost_12_2"}), @ORM\Index(name="idx_2e3d4d8952e9fdfa", columns={"special_shop_item_category_39_1"}), @ORM\Index(name="idx_2e3d4d89636151f9", columns={"item_cost_56_2"}), @ORM\Index(name="idx_2e3d4d89b2a7d8df", columns={"special_shop_item_category_47_0"}), @ORM\Index(name="idx_2e3d4d898a669809", columns={"item_cost_52_0"}), @ORM\Index(name="idx_2e3d4d894c66569", columns={"item_cost_13_0"}), @ORM\Index(name="idx_2e3d4d89d9f24ae6", columns={"item_receive_0_0"}), @ORM\Index(name="idx_2e3d4d898fe705e7", columns={"special_shop_item_category_19_0"}), @ORM\Index(name="idx_2e3d4d89a12441ff", columns={"item_receive_9_1"}), @ORM\Index(name="idx_2e3d4d89bef036ef", columns={"achievement_unlock_55"}), @ORM\Index(name="idx_2e3d4d894c94232f", columns={"item_cost_38_2"})})
 * @ORM\Entity
 */
class SpecialShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="special_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_0_0", type="bigint", nullable=true)
     */
    private $countReceive00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_1_0", type="bigint", nullable=true)
     */
    private $countReceive10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_2_0", type="bigint", nullable=true)
     */
    private $countReceive20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_3_0", type="bigint", nullable=true)
     */
    private $countReceive30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_4_0", type="bigint", nullable=true)
     */
    private $countReceive40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_5_0", type="bigint", nullable=true)
     */
    private $countReceive50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_6_0", type="bigint", nullable=true)
     */
    private $countReceive60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_7_0", type="bigint", nullable=true)
     */
    private $countReceive70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_8_0", type="bigint", nullable=true)
     */
    private $countReceive80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_9_0", type="bigint", nullable=true)
     */
    private $countReceive90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_10_0", type="bigint", nullable=true)
     */
    private $countReceive100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_11_0", type="bigint", nullable=true)
     */
    private $countReceive110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_12_0", type="bigint", nullable=true)
     */
    private $countReceive120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_13_0", type="bigint", nullable=true)
     */
    private $countReceive130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_14_0", type="bigint", nullable=true)
     */
    private $countReceive140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_15_0", type="bigint", nullable=true)
     */
    private $countReceive150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_16_0", type="bigint", nullable=true)
     */
    private $countReceive160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_17_0", type="bigint", nullable=true)
     */
    private $countReceive170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_18_0", type="bigint", nullable=true)
     */
    private $countReceive180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_19_0", type="bigint", nullable=true)
     */
    private $countReceive190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_20_0", type="bigint", nullable=true)
     */
    private $countReceive200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_21_0", type="bigint", nullable=true)
     */
    private $countReceive210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_22_0", type="bigint", nullable=true)
     */
    private $countReceive220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_23_0", type="bigint", nullable=true)
     */
    private $countReceive230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_24_0", type="bigint", nullable=true)
     */
    private $countReceive240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_25_0", type="bigint", nullable=true)
     */
    private $countReceive250;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_26_0", type="bigint", nullable=true)
     */
    private $countReceive260;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_27_0", type="bigint", nullable=true)
     */
    private $countReceive270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_28_0", type="bigint", nullable=true)
     */
    private $countReceive280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_29_0", type="bigint", nullable=true)
     */
    private $countReceive290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_30_0", type="bigint", nullable=true)
     */
    private $countReceive300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_31_0", type="bigint", nullable=true)
     */
    private $countReceive310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_32_0", type="bigint", nullable=true)
     */
    private $countReceive320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_33_0", type="bigint", nullable=true)
     */
    private $countReceive330;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_34_0", type="bigint", nullable=true)
     */
    private $countReceive340;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_35_0", type="bigint", nullable=true)
     */
    private $countReceive350;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_36_0", type="bigint", nullable=true)
     */
    private $countReceive360;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_37_0", type="bigint", nullable=true)
     */
    private $countReceive370;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_38_0", type="bigint", nullable=true)
     */
    private $countReceive380;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_39_0", type="bigint", nullable=true)
     */
    private $countReceive390;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_40_0", type="bigint", nullable=true)
     */
    private $countReceive400;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_41_0", type="bigint", nullable=true)
     */
    private $countReceive410;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_42_0", type="bigint", nullable=true)
     */
    private $countReceive420;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_43_0", type="bigint", nullable=true)
     */
    private $countReceive430;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_44_0", type="bigint", nullable=true)
     */
    private $countReceive440;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_45_0", type="bigint", nullable=true)
     */
    private $countReceive450;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_46_0", type="bigint", nullable=true)
     */
    private $countReceive460;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_47_0", type="bigint", nullable=true)
     */
    private $countReceive470;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_48_0", type="bigint", nullable=true)
     */
    private $countReceive480;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_49_0", type="bigint", nullable=true)
     */
    private $countReceive490;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_50_0", type="bigint", nullable=true)
     */
    private $countReceive500;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_51_0", type="bigint", nullable=true)
     */
    private $countReceive510;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_52_0", type="bigint", nullable=true)
     */
    private $countReceive520;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_53_0", type="bigint", nullable=true)
     */
    private $countReceive530;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_54_0", type="bigint", nullable=true)
     */
    private $countReceive540;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_55_0", type="bigint", nullable=true)
     */
    private $countReceive550;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_56_0", type="bigint", nullable=true)
     */
    private $countReceive560;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_57_0", type="bigint", nullable=true)
     */
    private $countReceive570;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_58_0", type="bigint", nullable=true)
     */
    private $countReceive580;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_59_0", type="bigint", nullable=true)
     */
    private $countReceive590;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_0_0", type="boolean", nullable=true)
     */
    private $hqReceive00;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_1_0", type="boolean", nullable=true)
     */
    private $hqReceive10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_2_0", type="boolean", nullable=true)
     */
    private $hqReceive20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_3_0", type="boolean", nullable=true)
     */
    private $hqReceive30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_4_0", type="boolean", nullable=true)
     */
    private $hqReceive40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_5_0", type="boolean", nullable=true)
     */
    private $hqReceive50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_6_0", type="boolean", nullable=true)
     */
    private $hqReceive60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_7_0", type="boolean", nullable=true)
     */
    private $hqReceive70;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_8_0", type="boolean", nullable=true)
     */
    private $hqReceive80;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_9_0", type="boolean", nullable=true)
     */
    private $hqReceive90;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_10_0", type="boolean", nullable=true)
     */
    private $hqReceive100;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_11_0", type="boolean", nullable=true)
     */
    private $hqReceive110;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_12_0", type="boolean", nullable=true)
     */
    private $hqReceive120;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_13_0", type="boolean", nullable=true)
     */
    private $hqReceive130;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_14_0", type="boolean", nullable=true)
     */
    private $hqReceive140;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_15_0", type="boolean", nullable=true)
     */
    private $hqReceive150;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_16_0", type="boolean", nullable=true)
     */
    private $hqReceive160;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_17_0", type="boolean", nullable=true)
     */
    private $hqReceive170;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_18_0", type="boolean", nullable=true)
     */
    private $hqReceive180;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_19_0", type="boolean", nullable=true)
     */
    private $hqReceive190;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_20_0", type="boolean", nullable=true)
     */
    private $hqReceive200;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_21_0", type="boolean", nullable=true)
     */
    private $hqReceive210;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_22_0", type="boolean", nullable=true)
     */
    private $hqReceive220;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_23_0", type="boolean", nullable=true)
     */
    private $hqReceive230;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_24_0", type="boolean", nullable=true)
     */
    private $hqReceive240;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_25_0", type="boolean", nullable=true)
     */
    private $hqReceive250;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_26_0", type="boolean", nullable=true)
     */
    private $hqReceive260;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_27_0", type="boolean", nullable=true)
     */
    private $hqReceive270;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_28_0", type="boolean", nullable=true)
     */
    private $hqReceive280;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_29_0", type="boolean", nullable=true)
     */
    private $hqReceive290;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_30_0", type="boolean", nullable=true)
     */
    private $hqReceive300;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_31_0", type="boolean", nullable=true)
     */
    private $hqReceive310;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_32_0", type="boolean", nullable=true)
     */
    private $hqReceive320;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_33_0", type="boolean", nullable=true)
     */
    private $hqReceive330;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_34_0", type="boolean", nullable=true)
     */
    private $hqReceive340;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_35_0", type="boolean", nullable=true)
     */
    private $hqReceive350;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_36_0", type="boolean", nullable=true)
     */
    private $hqReceive360;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_37_0", type="boolean", nullable=true)
     */
    private $hqReceive370;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_38_0", type="boolean", nullable=true)
     */
    private $hqReceive380;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_39_0", type="boolean", nullable=true)
     */
    private $hqReceive390;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_40_0", type="boolean", nullable=true)
     */
    private $hqReceive400;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_41_0", type="boolean", nullable=true)
     */
    private $hqReceive410;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_42_0", type="boolean", nullable=true)
     */
    private $hqReceive420;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_43_0", type="boolean", nullable=true)
     */
    private $hqReceive430;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_44_0", type="boolean", nullable=true)
     */
    private $hqReceive440;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_45_0", type="boolean", nullable=true)
     */
    private $hqReceive450;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_46_0", type="boolean", nullable=true)
     */
    private $hqReceive460;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_47_0", type="boolean", nullable=true)
     */
    private $hqReceive470;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_48_0", type="boolean", nullable=true)
     */
    private $hqReceive480;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_49_0", type="boolean", nullable=true)
     */
    private $hqReceive490;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_50_0", type="boolean", nullable=true)
     */
    private $hqReceive500;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_51_0", type="boolean", nullable=true)
     */
    private $hqReceive510;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_52_0", type="boolean", nullable=true)
     */
    private $hqReceive520;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_53_0", type="boolean", nullable=true)
     */
    private $hqReceive530;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_54_0", type="boolean", nullable=true)
     */
    private $hqReceive540;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_55_0", type="boolean", nullable=true)
     */
    private $hqReceive550;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_56_0", type="boolean", nullable=true)
     */
    private $hqReceive560;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_57_0", type="boolean", nullable=true)
     */
    private $hqReceive570;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_58_0", type="boolean", nullable=true)
     */
    private $hqReceive580;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_59_0", type="boolean", nullable=true)
     */
    private $hqReceive590;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_0_1", type="bigint", nullable=true)
     */
    private $countReceive01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_1_1", type="bigint", nullable=true)
     */
    private $countReceive11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_2_1", type="bigint", nullable=true)
     */
    private $countReceive21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_3_1", type="bigint", nullable=true)
     */
    private $countReceive31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_4_1", type="bigint", nullable=true)
     */
    private $countReceive41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_5_1", type="bigint", nullable=true)
     */
    private $countReceive51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_6_1", type="bigint", nullable=true)
     */
    private $countReceive61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_7_1", type="bigint", nullable=true)
     */
    private $countReceive71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_8_1", type="bigint", nullable=true)
     */
    private $countReceive81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_9_1", type="bigint", nullable=true)
     */
    private $countReceive91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_10_1", type="bigint", nullable=true)
     */
    private $countReceive101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_11_1", type="bigint", nullable=true)
     */
    private $countReceive111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_12_1", type="bigint", nullable=true)
     */
    private $countReceive121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_13_1", type="bigint", nullable=true)
     */
    private $countReceive131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_14_1", type="bigint", nullable=true)
     */
    private $countReceive141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_15_1", type="bigint", nullable=true)
     */
    private $countReceive151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_16_1", type="bigint", nullable=true)
     */
    private $countReceive161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_17_1", type="bigint", nullable=true)
     */
    private $countReceive171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_18_1", type="bigint", nullable=true)
     */
    private $countReceive181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_19_1", type="bigint", nullable=true)
     */
    private $countReceive191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_20_1", type="bigint", nullable=true)
     */
    private $countReceive201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_21_1", type="bigint", nullable=true)
     */
    private $countReceive211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_22_1", type="bigint", nullable=true)
     */
    private $countReceive221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_23_1", type="bigint", nullable=true)
     */
    private $countReceive231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_24_1", type="bigint", nullable=true)
     */
    private $countReceive241;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_25_1", type="bigint", nullable=true)
     */
    private $countReceive251;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_26_1", type="bigint", nullable=true)
     */
    private $countReceive261;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_27_1", type="bigint", nullable=true)
     */
    private $countReceive271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_28_1", type="bigint", nullable=true)
     */
    private $countReceive281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_29_1", type="bigint", nullable=true)
     */
    private $countReceive291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_30_1", type="bigint", nullable=true)
     */
    private $countReceive301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_31_1", type="bigint", nullable=true)
     */
    private $countReceive311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_32_1", type="bigint", nullable=true)
     */
    private $countReceive321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_33_1", type="bigint", nullable=true)
     */
    private $countReceive331;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_34_1", type="bigint", nullable=true)
     */
    private $countReceive341;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_35_1", type="bigint", nullable=true)
     */
    private $countReceive351;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_36_1", type="bigint", nullable=true)
     */
    private $countReceive361;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_37_1", type="bigint", nullable=true)
     */
    private $countReceive371;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_38_1", type="bigint", nullable=true)
     */
    private $countReceive381;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_39_1", type="bigint", nullable=true)
     */
    private $countReceive391;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_40_1", type="bigint", nullable=true)
     */
    private $countReceive401;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_41_1", type="bigint", nullable=true)
     */
    private $countReceive411;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_42_1", type="bigint", nullable=true)
     */
    private $countReceive421;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_43_1", type="bigint", nullable=true)
     */
    private $countReceive431;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_44_1", type="bigint", nullable=true)
     */
    private $countReceive441;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_45_1", type="bigint", nullable=true)
     */
    private $countReceive451;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_46_1", type="bigint", nullable=true)
     */
    private $countReceive461;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_47_1", type="bigint", nullable=true)
     */
    private $countReceive471;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_48_1", type="bigint", nullable=true)
     */
    private $countReceive481;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_49_1", type="bigint", nullable=true)
     */
    private $countReceive491;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_50_1", type="bigint", nullable=true)
     */
    private $countReceive501;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_51_1", type="bigint", nullable=true)
     */
    private $countReceive511;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_52_1", type="bigint", nullable=true)
     */
    private $countReceive521;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_53_1", type="bigint", nullable=true)
     */
    private $countReceive531;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_54_1", type="bigint", nullable=true)
     */
    private $countReceive541;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_55_1", type="bigint", nullable=true)
     */
    private $countReceive551;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_56_1", type="bigint", nullable=true)
     */
    private $countReceive561;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_57_1", type="bigint", nullable=true)
     */
    private $countReceive571;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_58_1", type="bigint", nullable=true)
     */
    private $countReceive581;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_receive_59_1", type="bigint", nullable=true)
     */
    private $countReceive591;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_0_1", type="boolean", nullable=true)
     */
    private $hqReceive01;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_1_1", type="boolean", nullable=true)
     */
    private $hqReceive11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_2_1", type="boolean", nullable=true)
     */
    private $hqReceive21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_3_1", type="boolean", nullable=true)
     */
    private $hqReceive31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_4_1", type="boolean", nullable=true)
     */
    private $hqReceive41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_5_1", type="boolean", nullable=true)
     */
    private $hqReceive51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_6_1", type="boolean", nullable=true)
     */
    private $hqReceive61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_7_1", type="boolean", nullable=true)
     */
    private $hqReceive71;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_8_1", type="boolean", nullable=true)
     */
    private $hqReceive81;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_9_1", type="boolean", nullable=true)
     */
    private $hqReceive91;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_10_1", type="boolean", nullable=true)
     */
    private $hqReceive101;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_11_1", type="boolean", nullable=true)
     */
    private $hqReceive111;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_12_1", type="boolean", nullable=true)
     */
    private $hqReceive121;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_13_1", type="boolean", nullable=true)
     */
    private $hqReceive131;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_14_1", type="boolean", nullable=true)
     */
    private $hqReceive141;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_15_1", type="boolean", nullable=true)
     */
    private $hqReceive151;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_16_1", type="boolean", nullable=true)
     */
    private $hqReceive161;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_17_1", type="boolean", nullable=true)
     */
    private $hqReceive171;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_18_1", type="boolean", nullable=true)
     */
    private $hqReceive181;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_19_1", type="boolean", nullable=true)
     */
    private $hqReceive191;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_20_1", type="boolean", nullable=true)
     */
    private $hqReceive201;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_21_1", type="boolean", nullable=true)
     */
    private $hqReceive211;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_22_1", type="boolean", nullable=true)
     */
    private $hqReceive221;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_23_1", type="boolean", nullable=true)
     */
    private $hqReceive231;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_24_1", type="boolean", nullable=true)
     */
    private $hqReceive241;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_25_1", type="boolean", nullable=true)
     */
    private $hqReceive251;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_26_1", type="boolean", nullable=true)
     */
    private $hqReceive261;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_27_1", type="boolean", nullable=true)
     */
    private $hqReceive271;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_28_1", type="boolean", nullable=true)
     */
    private $hqReceive281;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_29_1", type="boolean", nullable=true)
     */
    private $hqReceive291;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_30_1", type="boolean", nullable=true)
     */
    private $hqReceive301;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_31_1", type="boolean", nullable=true)
     */
    private $hqReceive311;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_32_1", type="boolean", nullable=true)
     */
    private $hqReceive321;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_33_1", type="boolean", nullable=true)
     */
    private $hqReceive331;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_34_1", type="boolean", nullable=true)
     */
    private $hqReceive341;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_35_1", type="boolean", nullable=true)
     */
    private $hqReceive351;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_36_1", type="boolean", nullable=true)
     */
    private $hqReceive361;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_37_1", type="boolean", nullable=true)
     */
    private $hqReceive371;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_38_1", type="boolean", nullable=true)
     */
    private $hqReceive381;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_39_1", type="boolean", nullable=true)
     */
    private $hqReceive391;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_40_1", type="boolean", nullable=true)
     */
    private $hqReceive401;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_41_1", type="boolean", nullable=true)
     */
    private $hqReceive411;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_42_1", type="boolean", nullable=true)
     */
    private $hqReceive421;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_43_1", type="boolean", nullable=true)
     */
    private $hqReceive431;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_44_1", type="boolean", nullable=true)
     */
    private $hqReceive441;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_45_1", type="boolean", nullable=true)
     */
    private $hqReceive451;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_46_1", type="boolean", nullable=true)
     */
    private $hqReceive461;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_47_1", type="boolean", nullable=true)
     */
    private $hqReceive471;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_48_1", type="boolean", nullable=true)
     */
    private $hqReceive481;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_49_1", type="boolean", nullable=true)
     */
    private $hqReceive491;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_50_1", type="boolean", nullable=true)
     */
    private $hqReceive501;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_51_1", type="boolean", nullable=true)
     */
    private $hqReceive511;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_52_1", type="boolean", nullable=true)
     */
    private $hqReceive521;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_53_1", type="boolean", nullable=true)
     */
    private $hqReceive531;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_54_1", type="boolean", nullable=true)
     */
    private $hqReceive541;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_55_1", type="boolean", nullable=true)
     */
    private $hqReceive551;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_56_1", type="boolean", nullable=true)
     */
    private $hqReceive561;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_57_1", type="boolean", nullable=true)
     */
    private $hqReceive571;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_58_1", type="boolean", nullable=true)
     */
    private $hqReceive581;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_receive_59_1", type="boolean", nullable=true)
     */
    private $hqReceive591;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_0_0", type="bigint", nullable=true)
     */
    private $countCost00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_1_0", type="bigint", nullable=true)
     */
    private $countCost10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_2_0", type="bigint", nullable=true)
     */
    private $countCost20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_3_0", type="bigint", nullable=true)
     */
    private $countCost30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_4_0", type="bigint", nullable=true)
     */
    private $countCost40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_5_0", type="bigint", nullable=true)
     */
    private $countCost50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_6_0", type="bigint", nullable=true)
     */
    private $countCost60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_7_0", type="bigint", nullable=true)
     */
    private $countCost70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_8_0", type="bigint", nullable=true)
     */
    private $countCost80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_9_0", type="bigint", nullable=true)
     */
    private $countCost90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_10_0", type="bigint", nullable=true)
     */
    private $countCost100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_11_0", type="bigint", nullable=true)
     */
    private $countCost110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_12_0", type="bigint", nullable=true)
     */
    private $countCost120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_13_0", type="bigint", nullable=true)
     */
    private $countCost130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_14_0", type="bigint", nullable=true)
     */
    private $countCost140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_15_0", type="bigint", nullable=true)
     */
    private $countCost150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_16_0", type="bigint", nullable=true)
     */
    private $countCost160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_17_0", type="bigint", nullable=true)
     */
    private $countCost170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_18_0", type="bigint", nullable=true)
     */
    private $countCost180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_19_0", type="bigint", nullable=true)
     */
    private $countCost190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_20_0", type="bigint", nullable=true)
     */
    private $countCost200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_21_0", type="bigint", nullable=true)
     */
    private $countCost210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_22_0", type="bigint", nullable=true)
     */
    private $countCost220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_23_0", type="bigint", nullable=true)
     */
    private $countCost230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_24_0", type="bigint", nullable=true)
     */
    private $countCost240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_25_0", type="bigint", nullable=true)
     */
    private $countCost250;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_26_0", type="bigint", nullable=true)
     */
    private $countCost260;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_27_0", type="bigint", nullable=true)
     */
    private $countCost270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_28_0", type="bigint", nullable=true)
     */
    private $countCost280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_29_0", type="bigint", nullable=true)
     */
    private $countCost290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_30_0", type="bigint", nullable=true)
     */
    private $countCost300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_31_0", type="bigint", nullable=true)
     */
    private $countCost310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_32_0", type="bigint", nullable=true)
     */
    private $countCost320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_33_0", type="bigint", nullable=true)
     */
    private $countCost330;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_34_0", type="bigint", nullable=true)
     */
    private $countCost340;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_35_0", type="bigint", nullable=true)
     */
    private $countCost350;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_36_0", type="bigint", nullable=true)
     */
    private $countCost360;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_37_0", type="bigint", nullable=true)
     */
    private $countCost370;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_38_0", type="bigint", nullable=true)
     */
    private $countCost380;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_39_0", type="bigint", nullable=true)
     */
    private $countCost390;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_40_0", type="bigint", nullable=true)
     */
    private $countCost400;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_41_0", type="bigint", nullable=true)
     */
    private $countCost410;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_42_0", type="bigint", nullable=true)
     */
    private $countCost420;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_43_0", type="bigint", nullable=true)
     */
    private $countCost430;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_44_0", type="bigint", nullable=true)
     */
    private $countCost440;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_45_0", type="bigint", nullable=true)
     */
    private $countCost450;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_46_0", type="bigint", nullable=true)
     */
    private $countCost460;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_47_0", type="bigint", nullable=true)
     */
    private $countCost470;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_48_0", type="bigint", nullable=true)
     */
    private $countCost480;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_49_0", type="bigint", nullable=true)
     */
    private $countCost490;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_50_0", type="bigint", nullable=true)
     */
    private $countCost500;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_51_0", type="bigint", nullable=true)
     */
    private $countCost510;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_52_0", type="bigint", nullable=true)
     */
    private $countCost520;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_53_0", type="bigint", nullable=true)
     */
    private $countCost530;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_54_0", type="bigint", nullable=true)
     */
    private $countCost540;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_55_0", type="bigint", nullable=true)
     */
    private $countCost550;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_56_0", type="bigint", nullable=true)
     */
    private $countCost560;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_57_0", type="bigint", nullable=true)
     */
    private $countCost570;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_58_0", type="bigint", nullable=true)
     */
    private $countCost580;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_59_0", type="bigint", nullable=true)
     */
    private $countCost590;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_0_0", type="integer", nullable=true)
     */
    private $hqCost00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_1_0", type="integer", nullable=true)
     */
    private $hqCost10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_2_0", type="integer", nullable=true)
     */
    private $hqCost20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_3_0", type="integer", nullable=true)
     */
    private $hqCost30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_4_0", type="integer", nullable=true)
     */
    private $hqCost40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_5_0", type="integer", nullable=true)
     */
    private $hqCost50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_6_0", type="integer", nullable=true)
     */
    private $hqCost60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_7_0", type="integer", nullable=true)
     */
    private $hqCost70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_8_0", type="integer", nullable=true)
     */
    private $hqCost80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_9_0", type="integer", nullable=true)
     */
    private $hqCost90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_10_0", type="integer", nullable=true)
     */
    private $hqCost100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_11_0", type="integer", nullable=true)
     */
    private $hqCost110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_12_0", type="integer", nullable=true)
     */
    private $hqCost120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_13_0", type="integer", nullable=true)
     */
    private $hqCost130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_14_0", type="integer", nullable=true)
     */
    private $hqCost140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_15_0", type="integer", nullable=true)
     */
    private $hqCost150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_16_0", type="integer", nullable=true)
     */
    private $hqCost160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_17_0", type="integer", nullable=true)
     */
    private $hqCost170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_18_0", type="integer", nullable=true)
     */
    private $hqCost180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_19_0", type="integer", nullable=true)
     */
    private $hqCost190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_20_0", type="integer", nullable=true)
     */
    private $hqCost200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_21_0", type="integer", nullable=true)
     */
    private $hqCost210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_22_0", type="integer", nullable=true)
     */
    private $hqCost220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_23_0", type="integer", nullable=true)
     */
    private $hqCost230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_24_0", type="integer", nullable=true)
     */
    private $hqCost240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_25_0", type="integer", nullable=true)
     */
    private $hqCost250;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_26_0", type="integer", nullable=true)
     */
    private $hqCost260;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_27_0", type="integer", nullable=true)
     */
    private $hqCost270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_28_0", type="integer", nullable=true)
     */
    private $hqCost280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_29_0", type="integer", nullable=true)
     */
    private $hqCost290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_30_0", type="integer", nullable=true)
     */
    private $hqCost300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_31_0", type="integer", nullable=true)
     */
    private $hqCost310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_32_0", type="integer", nullable=true)
     */
    private $hqCost320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_33_0", type="integer", nullable=true)
     */
    private $hqCost330;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_34_0", type="integer", nullable=true)
     */
    private $hqCost340;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_35_0", type="integer", nullable=true)
     */
    private $hqCost350;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_36_0", type="integer", nullable=true)
     */
    private $hqCost360;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_37_0", type="integer", nullable=true)
     */
    private $hqCost370;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_38_0", type="integer", nullable=true)
     */
    private $hqCost380;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_39_0", type="integer", nullable=true)
     */
    private $hqCost390;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_40_0", type="integer", nullable=true)
     */
    private $hqCost400;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_41_0", type="integer", nullable=true)
     */
    private $hqCost410;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_42_0", type="integer", nullable=true)
     */
    private $hqCost420;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_43_0", type="integer", nullable=true)
     */
    private $hqCost430;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_44_0", type="integer", nullable=true)
     */
    private $hqCost440;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_45_0", type="integer", nullable=true)
     */
    private $hqCost450;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_46_0", type="integer", nullable=true)
     */
    private $hqCost460;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_47_0", type="integer", nullable=true)
     */
    private $hqCost470;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_48_0", type="integer", nullable=true)
     */
    private $hqCost480;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_49_0", type="integer", nullable=true)
     */
    private $hqCost490;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_50_0", type="integer", nullable=true)
     */
    private $hqCost500;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_51_0", type="integer", nullable=true)
     */
    private $hqCost510;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_52_0", type="integer", nullable=true)
     */
    private $hqCost520;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_53_0", type="integer", nullable=true)
     */
    private $hqCost530;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_54_0", type="integer", nullable=true)
     */
    private $hqCost540;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_55_0", type="integer", nullable=true)
     */
    private $hqCost550;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_56_0", type="integer", nullable=true)
     */
    private $hqCost560;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_57_0", type="integer", nullable=true)
     */
    private $hqCost570;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_58_0", type="integer", nullable=true)
     */
    private $hqCost580;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_59_0", type="integer", nullable=true)
     */
    private $hqCost590;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_0_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_1_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_2_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_3_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_4_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_5_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_6_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_7_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_8_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_9_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_10_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_11_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_12_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_13_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_14_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_15_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_16_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_17_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_18_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_19_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_20_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_21_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_22_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_23_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_24_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_25_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost250;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_26_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost260;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_27_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_28_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_29_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_30_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_31_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_32_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_33_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost330;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_34_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost340;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_35_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost350;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_36_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost360;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_37_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost370;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_38_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost380;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_39_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost390;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_40_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost400;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_41_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost410;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_42_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost420;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_43_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost430;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_44_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost440;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_45_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost450;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_46_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost460;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_47_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost470;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_48_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost480;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_49_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost490;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_50_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost500;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_51_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost510;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_52_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost520;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_53_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost530;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_54_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost540;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_55_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost550;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_56_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost560;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_57_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost570;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_58_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost580;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_59_0", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost590;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_0_1", type="bigint", nullable=true)
     */
    private $countCost01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_1_1", type="bigint", nullable=true)
     */
    private $countCost11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_2_1", type="bigint", nullable=true)
     */
    private $countCost21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_3_1", type="bigint", nullable=true)
     */
    private $countCost31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_4_1", type="bigint", nullable=true)
     */
    private $countCost41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_5_1", type="bigint", nullable=true)
     */
    private $countCost51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_6_1", type="bigint", nullable=true)
     */
    private $countCost61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_7_1", type="bigint", nullable=true)
     */
    private $countCost71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_8_1", type="bigint", nullable=true)
     */
    private $countCost81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_9_1", type="bigint", nullable=true)
     */
    private $countCost91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_10_1", type="bigint", nullable=true)
     */
    private $countCost101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_11_1", type="bigint", nullable=true)
     */
    private $countCost111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_12_1", type="bigint", nullable=true)
     */
    private $countCost121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_13_1", type="bigint", nullable=true)
     */
    private $countCost131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_14_1", type="bigint", nullable=true)
     */
    private $countCost141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_15_1", type="bigint", nullable=true)
     */
    private $countCost151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_16_1", type="bigint", nullable=true)
     */
    private $countCost161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_17_1", type="bigint", nullable=true)
     */
    private $countCost171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_18_1", type="bigint", nullable=true)
     */
    private $countCost181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_19_1", type="bigint", nullable=true)
     */
    private $countCost191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_20_1", type="bigint", nullable=true)
     */
    private $countCost201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_21_1", type="bigint", nullable=true)
     */
    private $countCost211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_22_1", type="bigint", nullable=true)
     */
    private $countCost221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_23_1", type="bigint", nullable=true)
     */
    private $countCost231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_24_1", type="bigint", nullable=true)
     */
    private $countCost241;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_25_1", type="bigint", nullable=true)
     */
    private $countCost251;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_26_1", type="bigint", nullable=true)
     */
    private $countCost261;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_27_1", type="bigint", nullable=true)
     */
    private $countCost271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_28_1", type="bigint", nullable=true)
     */
    private $countCost281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_29_1", type="bigint", nullable=true)
     */
    private $countCost291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_30_1", type="bigint", nullable=true)
     */
    private $countCost301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_31_1", type="bigint", nullable=true)
     */
    private $countCost311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_32_1", type="bigint", nullable=true)
     */
    private $countCost321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_33_1", type="bigint", nullable=true)
     */
    private $countCost331;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_34_1", type="bigint", nullable=true)
     */
    private $countCost341;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_35_1", type="bigint", nullable=true)
     */
    private $countCost351;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_36_1", type="bigint", nullable=true)
     */
    private $countCost361;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_37_1", type="bigint", nullable=true)
     */
    private $countCost371;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_38_1", type="bigint", nullable=true)
     */
    private $countCost381;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_39_1", type="bigint", nullable=true)
     */
    private $countCost391;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_40_1", type="bigint", nullable=true)
     */
    private $countCost401;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_41_1", type="bigint", nullable=true)
     */
    private $countCost411;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_42_1", type="bigint", nullable=true)
     */
    private $countCost421;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_43_1", type="bigint", nullable=true)
     */
    private $countCost431;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_44_1", type="bigint", nullable=true)
     */
    private $countCost441;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_45_1", type="bigint", nullable=true)
     */
    private $countCost451;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_46_1", type="bigint", nullable=true)
     */
    private $countCost461;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_47_1", type="bigint", nullable=true)
     */
    private $countCost471;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_48_1", type="bigint", nullable=true)
     */
    private $countCost481;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_49_1", type="bigint", nullable=true)
     */
    private $countCost491;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_50_1", type="bigint", nullable=true)
     */
    private $countCost501;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_51_1", type="bigint", nullable=true)
     */
    private $countCost511;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_52_1", type="bigint", nullable=true)
     */
    private $countCost521;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_53_1", type="bigint", nullable=true)
     */
    private $countCost531;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_54_1", type="bigint", nullable=true)
     */
    private $countCost541;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_55_1", type="bigint", nullable=true)
     */
    private $countCost551;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_56_1", type="bigint", nullable=true)
     */
    private $countCost561;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_57_1", type="bigint", nullable=true)
     */
    private $countCost571;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_58_1", type="bigint", nullable=true)
     */
    private $countCost581;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_59_1", type="bigint", nullable=true)
     */
    private $countCost591;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_0_1", type="integer", nullable=true)
     */
    private $hqCost01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_1_1", type="integer", nullable=true)
     */
    private $hqCost11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_2_1", type="integer", nullable=true)
     */
    private $hqCost21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_3_1", type="integer", nullable=true)
     */
    private $hqCost31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_4_1", type="integer", nullable=true)
     */
    private $hqCost41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_5_1", type="integer", nullable=true)
     */
    private $hqCost51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_6_1", type="integer", nullable=true)
     */
    private $hqCost61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_7_1", type="integer", nullable=true)
     */
    private $hqCost71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_8_1", type="integer", nullable=true)
     */
    private $hqCost81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_9_1", type="integer", nullable=true)
     */
    private $hqCost91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_10_1", type="integer", nullable=true)
     */
    private $hqCost101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_11_1", type="integer", nullable=true)
     */
    private $hqCost111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_12_1", type="integer", nullable=true)
     */
    private $hqCost121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_13_1", type="integer", nullable=true)
     */
    private $hqCost131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_14_1", type="integer", nullable=true)
     */
    private $hqCost141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_15_1", type="integer", nullable=true)
     */
    private $hqCost151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_16_1", type="integer", nullable=true)
     */
    private $hqCost161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_17_1", type="integer", nullable=true)
     */
    private $hqCost171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_18_1", type="integer", nullable=true)
     */
    private $hqCost181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_19_1", type="integer", nullable=true)
     */
    private $hqCost191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_20_1", type="integer", nullable=true)
     */
    private $hqCost201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_21_1", type="integer", nullable=true)
     */
    private $hqCost211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_22_1", type="integer", nullable=true)
     */
    private $hqCost221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_23_1", type="integer", nullable=true)
     */
    private $hqCost231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_24_1", type="integer", nullable=true)
     */
    private $hqCost241;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_25_1", type="integer", nullable=true)
     */
    private $hqCost251;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_26_1", type="integer", nullable=true)
     */
    private $hqCost261;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_27_1", type="integer", nullable=true)
     */
    private $hqCost271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_28_1", type="integer", nullable=true)
     */
    private $hqCost281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_29_1", type="integer", nullable=true)
     */
    private $hqCost291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_30_1", type="integer", nullable=true)
     */
    private $hqCost301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_31_1", type="integer", nullable=true)
     */
    private $hqCost311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_32_1", type="integer", nullable=true)
     */
    private $hqCost321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_33_1", type="integer", nullable=true)
     */
    private $hqCost331;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_34_1", type="integer", nullable=true)
     */
    private $hqCost341;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_35_1", type="integer", nullable=true)
     */
    private $hqCost351;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_36_1", type="integer", nullable=true)
     */
    private $hqCost361;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_37_1", type="integer", nullable=true)
     */
    private $hqCost371;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_38_1", type="integer", nullable=true)
     */
    private $hqCost381;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_39_1", type="integer", nullable=true)
     */
    private $hqCost391;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_40_1", type="integer", nullable=true)
     */
    private $hqCost401;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_41_1", type="integer", nullable=true)
     */
    private $hqCost411;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_42_1", type="integer", nullable=true)
     */
    private $hqCost421;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_43_1", type="integer", nullable=true)
     */
    private $hqCost431;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_44_1", type="integer", nullable=true)
     */
    private $hqCost441;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_45_1", type="integer", nullable=true)
     */
    private $hqCost451;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_46_1", type="integer", nullable=true)
     */
    private $hqCost461;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_47_1", type="integer", nullable=true)
     */
    private $hqCost471;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_48_1", type="integer", nullable=true)
     */
    private $hqCost481;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_49_1", type="integer", nullable=true)
     */
    private $hqCost491;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_50_1", type="integer", nullable=true)
     */
    private $hqCost501;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_51_1", type="integer", nullable=true)
     */
    private $hqCost511;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_52_1", type="integer", nullable=true)
     */
    private $hqCost521;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_53_1", type="integer", nullable=true)
     */
    private $hqCost531;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_54_1", type="integer", nullable=true)
     */
    private $hqCost541;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_55_1", type="integer", nullable=true)
     */
    private $hqCost551;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_56_1", type="integer", nullable=true)
     */
    private $hqCost561;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_57_1", type="integer", nullable=true)
     */
    private $hqCost571;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_58_1", type="integer", nullable=true)
     */
    private $hqCost581;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_59_1", type="integer", nullable=true)
     */
    private $hqCost591;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_0_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_1_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_2_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_3_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_4_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_5_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_6_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_7_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_8_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_9_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_10_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_11_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_12_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_13_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_14_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_15_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_16_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_17_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_18_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_19_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_20_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_21_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_22_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_23_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_24_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost241;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_25_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost251;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_26_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost261;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_27_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_28_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_29_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_30_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_31_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_32_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_33_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost331;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_34_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost341;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_35_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost351;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_36_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost361;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_37_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost371;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_38_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost381;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_39_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost391;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_40_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost401;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_41_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost411;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_42_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost421;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_43_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost431;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_44_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost441;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_45_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost451;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_46_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost461;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_47_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost471;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_48_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost481;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_49_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost491;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_50_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost501;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_51_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost511;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_52_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost521;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_53_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost531;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_54_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost541;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_55_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost551;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_56_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost561;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_57_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost571;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_58_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost581;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_59_1", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost591;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_0_2", type="bigint", nullable=true)
     */
    private $countCost02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_1_2", type="bigint", nullable=true)
     */
    private $countCost12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_2_2", type="bigint", nullable=true)
     */
    private $countCost22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_3_2", type="bigint", nullable=true)
     */
    private $countCost32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_4_2", type="bigint", nullable=true)
     */
    private $countCost42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_5_2", type="bigint", nullable=true)
     */
    private $countCost52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_6_2", type="bigint", nullable=true)
     */
    private $countCost62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_7_2", type="bigint", nullable=true)
     */
    private $countCost72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_8_2", type="bigint", nullable=true)
     */
    private $countCost82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_9_2", type="bigint", nullable=true)
     */
    private $countCost92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_10_2", type="bigint", nullable=true)
     */
    private $countCost102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_11_2", type="bigint", nullable=true)
     */
    private $countCost112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_12_2", type="bigint", nullable=true)
     */
    private $countCost122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_13_2", type="bigint", nullable=true)
     */
    private $countCost132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_14_2", type="bigint", nullable=true)
     */
    private $countCost142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_15_2", type="bigint", nullable=true)
     */
    private $countCost152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_16_2", type="bigint", nullable=true)
     */
    private $countCost162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_17_2", type="bigint", nullable=true)
     */
    private $countCost172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_18_2", type="bigint", nullable=true)
     */
    private $countCost182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_19_2", type="bigint", nullable=true)
     */
    private $countCost192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_20_2", type="bigint", nullable=true)
     */
    private $countCost202;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_21_2", type="bigint", nullable=true)
     */
    private $countCost212;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_22_2", type="bigint", nullable=true)
     */
    private $countCost222;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_23_2", type="bigint", nullable=true)
     */
    private $countCost232;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_24_2", type="bigint", nullable=true)
     */
    private $countCost242;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_25_2", type="bigint", nullable=true)
     */
    private $countCost252;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_26_2", type="bigint", nullable=true)
     */
    private $countCost262;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_27_2", type="bigint", nullable=true)
     */
    private $countCost272;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_28_2", type="bigint", nullable=true)
     */
    private $countCost282;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_29_2", type="bigint", nullable=true)
     */
    private $countCost292;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_30_2", type="bigint", nullable=true)
     */
    private $countCost302;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_31_2", type="bigint", nullable=true)
     */
    private $countCost312;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_32_2", type="bigint", nullable=true)
     */
    private $countCost322;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_33_2", type="bigint", nullable=true)
     */
    private $countCost332;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_34_2", type="bigint", nullable=true)
     */
    private $countCost342;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_35_2", type="bigint", nullable=true)
     */
    private $countCost352;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_36_2", type="bigint", nullable=true)
     */
    private $countCost362;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_37_2", type="bigint", nullable=true)
     */
    private $countCost372;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_38_2", type="bigint", nullable=true)
     */
    private $countCost382;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_39_2", type="bigint", nullable=true)
     */
    private $countCost392;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_40_2", type="bigint", nullable=true)
     */
    private $countCost402;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_41_2", type="bigint", nullable=true)
     */
    private $countCost412;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_42_2", type="bigint", nullable=true)
     */
    private $countCost422;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_43_2", type="bigint", nullable=true)
     */
    private $countCost432;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_44_2", type="bigint", nullable=true)
     */
    private $countCost442;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_45_2", type="bigint", nullable=true)
     */
    private $countCost452;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_46_2", type="bigint", nullable=true)
     */
    private $countCost462;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_47_2", type="bigint", nullable=true)
     */
    private $countCost472;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_48_2", type="bigint", nullable=true)
     */
    private $countCost482;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_49_2", type="bigint", nullable=true)
     */
    private $countCost492;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_50_2", type="bigint", nullable=true)
     */
    private $countCost502;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_51_2", type="bigint", nullable=true)
     */
    private $countCost512;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_52_2", type="bigint", nullable=true)
     */
    private $countCost522;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_53_2", type="bigint", nullable=true)
     */
    private $countCost532;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_54_2", type="bigint", nullable=true)
     */
    private $countCost542;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_55_2", type="bigint", nullable=true)
     */
    private $countCost552;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_56_2", type="bigint", nullable=true)
     */
    private $countCost562;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_57_2", type="bigint", nullable=true)
     */
    private $countCost572;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_58_2", type="bigint", nullable=true)
     */
    private $countCost582;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_cost_59_2", type="bigint", nullable=true)
     */
    private $countCost592;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_0_2", type="integer", nullable=true)
     */
    private $hqCost02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_1_2", type="integer", nullable=true)
     */
    private $hqCost12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_2_2", type="integer", nullable=true)
     */
    private $hqCost22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_3_2", type="integer", nullable=true)
     */
    private $hqCost32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_4_2", type="integer", nullable=true)
     */
    private $hqCost42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_5_2", type="integer", nullable=true)
     */
    private $hqCost52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_6_2", type="integer", nullable=true)
     */
    private $hqCost62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_7_2", type="integer", nullable=true)
     */
    private $hqCost72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_8_2", type="integer", nullable=true)
     */
    private $hqCost82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_9_2", type="integer", nullable=true)
     */
    private $hqCost92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_10_2", type="integer", nullable=true)
     */
    private $hqCost102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_11_2", type="integer", nullable=true)
     */
    private $hqCost112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_12_2", type="integer", nullable=true)
     */
    private $hqCost122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_13_2", type="integer", nullable=true)
     */
    private $hqCost132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_14_2", type="integer", nullable=true)
     */
    private $hqCost142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_15_2", type="integer", nullable=true)
     */
    private $hqCost152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_16_2", type="integer", nullable=true)
     */
    private $hqCost162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_17_2", type="integer", nullable=true)
     */
    private $hqCost172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_18_2", type="integer", nullable=true)
     */
    private $hqCost182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_19_2", type="integer", nullable=true)
     */
    private $hqCost192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_20_2", type="integer", nullable=true)
     */
    private $hqCost202;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_21_2", type="integer", nullable=true)
     */
    private $hqCost212;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_22_2", type="integer", nullable=true)
     */
    private $hqCost222;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_23_2", type="integer", nullable=true)
     */
    private $hqCost232;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_24_2", type="integer", nullable=true)
     */
    private $hqCost242;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_25_2", type="integer", nullable=true)
     */
    private $hqCost252;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_26_2", type="integer", nullable=true)
     */
    private $hqCost262;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_27_2", type="integer", nullable=true)
     */
    private $hqCost272;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_28_2", type="integer", nullable=true)
     */
    private $hqCost282;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_29_2", type="integer", nullable=true)
     */
    private $hqCost292;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_30_2", type="integer", nullable=true)
     */
    private $hqCost302;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_31_2", type="integer", nullable=true)
     */
    private $hqCost312;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_32_2", type="integer", nullable=true)
     */
    private $hqCost322;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_33_2", type="integer", nullable=true)
     */
    private $hqCost332;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_34_2", type="integer", nullable=true)
     */
    private $hqCost342;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_35_2", type="integer", nullable=true)
     */
    private $hqCost352;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_36_2", type="integer", nullable=true)
     */
    private $hqCost362;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_37_2", type="integer", nullable=true)
     */
    private $hqCost372;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_38_2", type="integer", nullable=true)
     */
    private $hqCost382;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_39_2", type="integer", nullable=true)
     */
    private $hqCost392;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_40_2", type="integer", nullable=true)
     */
    private $hqCost402;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_41_2", type="integer", nullable=true)
     */
    private $hqCost412;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_42_2", type="integer", nullable=true)
     */
    private $hqCost422;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_43_2", type="integer", nullable=true)
     */
    private $hqCost432;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_44_2", type="integer", nullable=true)
     */
    private $hqCost442;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_45_2", type="integer", nullable=true)
     */
    private $hqCost452;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_46_2", type="integer", nullable=true)
     */
    private $hqCost462;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_47_2", type="integer", nullable=true)
     */
    private $hqCost472;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_48_2", type="integer", nullable=true)
     */
    private $hqCost482;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_49_2", type="integer", nullable=true)
     */
    private $hqCost492;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_50_2", type="integer", nullable=true)
     */
    private $hqCost502;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_51_2", type="integer", nullable=true)
     */
    private $hqCost512;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_52_2", type="integer", nullable=true)
     */
    private $hqCost522;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_53_2", type="integer", nullable=true)
     */
    private $hqCost532;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_54_2", type="integer", nullable=true)
     */
    private $hqCost542;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_55_2", type="integer", nullable=true)
     */
    private $hqCost552;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_56_2", type="integer", nullable=true)
     */
    private $hqCost562;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_57_2", type="integer", nullable=true)
     */
    private $hqCost572;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_58_2", type="integer", nullable=true)
     */
    private $hqCost582;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hq_cost_59_2", type="integer", nullable=true)
     */
    private $hqCost592;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_0_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_1_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_2_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_3_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_4_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_5_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_6_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_7_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_8_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_9_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_10_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_11_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_12_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_13_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_14_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_15_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_16_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_17_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_18_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_19_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_20_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost202;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_21_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost212;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_22_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost222;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_23_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost232;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_24_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost242;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_25_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost252;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_26_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost262;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_27_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost272;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_28_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost282;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_29_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost292;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_30_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost302;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_31_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost312;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_32_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost322;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_33_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost332;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_34_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost342;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_35_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost352;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_36_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost362;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_37_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost372;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_38_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost382;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_39_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost392;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_40_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost402;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_41_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost412;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_42_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost422;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_43_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost432;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_44_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost442;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_45_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost452;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_46_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost462;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_47_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost472;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_48_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost482;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_49_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost492;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_50_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost502;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_51_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost512;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_52_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost522;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_53_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost532;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_54_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost542;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_55_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost552;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_56_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost562;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_57_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost572;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_58_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost582;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_rating_cost_59_2", type="bigint", nullable=true)
     */
    private $collectabilityRatingCost592;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1262", type="integer", nullable=true)
     */
    private $column1262;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1263", type="integer", nullable=true)
     */
    private $column1263;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1264", type="integer", nullable=true)
     */
    private $column1264;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1265", type="integer", nullable=true)
     */
    private $column1265;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1266", type="integer", nullable=true)
     */
    private $column1266;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1267", type="integer", nullable=true)
     */
    private $column1267;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1268", type="integer", nullable=true)
     */
    private $column1268;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1269", type="integer", nullable=true)
     */
    private $column1269;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1270", type="integer", nullable=true)
     */
    private $column1270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1271", type="integer", nullable=true)
     */
    private $column1271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1272", type="integer", nullable=true)
     */
    private $column1272;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1273", type="integer", nullable=true)
     */
    private $column1273;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1274", type="integer", nullable=true)
     */
    private $column1274;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1275", type="integer", nullable=true)
     */
    private $column1275;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1276", type="integer", nullable=true)
     */
    private $column1276;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1277", type="integer", nullable=true)
     */
    private $column1277;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1278", type="integer", nullable=true)
     */
    private $column1278;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1279", type="integer", nullable=true)
     */
    private $column1279;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1280", type="integer", nullable=true)
     */
    private $column1280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1281", type="integer", nullable=true)
     */
    private $column1281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1282", type="integer", nullable=true)
     */
    private $column1282;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1283", type="integer", nullable=true)
     */
    private $column1283;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1284", type="integer", nullable=true)
     */
    private $column1284;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1285", type="integer", nullable=true)
     */
    private $column1285;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1286", type="integer", nullable=true)
     */
    private $column1286;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1287", type="integer", nullable=true)
     */
    private $column1287;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1288", type="integer", nullable=true)
     */
    private $column1288;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1289", type="integer", nullable=true)
     */
    private $column1289;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1290", type="integer", nullable=true)
     */
    private $column1290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1291", type="integer", nullable=true)
     */
    private $column1291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1292", type="integer", nullable=true)
     */
    private $column1292;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1293", type="integer", nullable=true)
     */
    private $column1293;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1294", type="integer", nullable=true)
     */
    private $column1294;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1295", type="integer", nullable=true)
     */
    private $column1295;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1296", type="integer", nullable=true)
     */
    private $column1296;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1297", type="integer", nullable=true)
     */
    private $column1297;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1298", type="integer", nullable=true)
     */
    private $column1298;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1299", type="integer", nullable=true)
     */
    private $column1299;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1300", type="integer", nullable=true)
     */
    private $column1300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1301", type="integer", nullable=true)
     */
    private $column1301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1302", type="integer", nullable=true)
     */
    private $column1302;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1303", type="integer", nullable=true)
     */
    private $column1303;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1304", type="integer", nullable=true)
     */
    private $column1304;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1305", type="integer", nullable=true)
     */
    private $column1305;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1306", type="integer", nullable=true)
     */
    private $column1306;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1307", type="integer", nullable=true)
     */
    private $column1307;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1308", type="integer", nullable=true)
     */
    private $column1308;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1309", type="integer", nullable=true)
     */
    private $column1309;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1310", type="integer", nullable=true)
     */
    private $column1310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1311", type="integer", nullable=true)
     */
    private $column1311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1312", type="integer", nullable=true)
     */
    private $column1312;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1313", type="integer", nullable=true)
     */
    private $column1313;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1314", type="integer", nullable=true)
     */
    private $column1314;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1315", type="integer", nullable=true)
     */
    private $column1315;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1316", type="integer", nullable=true)
     */
    private $column1316;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1317", type="integer", nullable=true)
     */
    private $column1317;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1318", type="integer", nullable=true)
     */
    private $column1318;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1319", type="integer", nullable=true)
     */
    private $column1319;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1320", type="integer", nullable=true)
     */
    private $column1320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1321", type="integer", nullable=true)
     */
    private $column1321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1382", type="integer", nullable=true)
     */
    private $column1382;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1383", type="integer", nullable=true)
     */
    private $column1383;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1384", type="integer", nullable=true)
     */
    private $column1384;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1385", type="integer", nullable=true)
     */
    private $column1385;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1386", type="integer", nullable=true)
     */
    private $column1386;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1387", type="integer", nullable=true)
     */
    private $column1387;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1388", type="integer", nullable=true)
     */
    private $column1388;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1389", type="integer", nullable=true)
     */
    private $column1389;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1390", type="integer", nullable=true)
     */
    private $column1390;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1391", type="integer", nullable=true)
     */
    private $column1391;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1392", type="integer", nullable=true)
     */
    private $column1392;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1393", type="integer", nullable=true)
     */
    private $column1393;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1394", type="integer", nullable=true)
     */
    private $column1394;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1395", type="integer", nullable=true)
     */
    private $column1395;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1396", type="integer", nullable=true)
     */
    private $column1396;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1397", type="integer", nullable=true)
     */
    private $column1397;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1398", type="integer", nullable=true)
     */
    private $column1398;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1399", type="integer", nullable=true)
     */
    private $column1399;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1400", type="integer", nullable=true)
     */
    private $column1400;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1401", type="integer", nullable=true)
     */
    private $column1401;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1402", type="integer", nullable=true)
     */
    private $column1402;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1403", type="integer", nullable=true)
     */
    private $column1403;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1404", type="integer", nullable=true)
     */
    private $column1404;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1405", type="integer", nullable=true)
     */
    private $column1405;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1406", type="integer", nullable=true)
     */
    private $column1406;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1407", type="integer", nullable=true)
     */
    private $column1407;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1408", type="integer", nullable=true)
     */
    private $column1408;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1409", type="integer", nullable=true)
     */
    private $column1409;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1410", type="integer", nullable=true)
     */
    private $column1410;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1411", type="integer", nullable=true)
     */
    private $column1411;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1412", type="integer", nullable=true)
     */
    private $column1412;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1413", type="integer", nullable=true)
     */
    private $column1413;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1414", type="integer", nullable=true)
     */
    private $column1414;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1415", type="integer", nullable=true)
     */
    private $column1415;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1416", type="integer", nullable=true)
     */
    private $column1416;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1417", type="integer", nullable=true)
     */
    private $column1417;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1418", type="integer", nullable=true)
     */
    private $column1418;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1419", type="integer", nullable=true)
     */
    private $column1419;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1420", type="integer", nullable=true)
     */
    private $column1420;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1421", type="integer", nullable=true)
     */
    private $column1421;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1422", type="integer", nullable=true)
     */
    private $column1422;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1423", type="integer", nullable=true)
     */
    private $column1423;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1424", type="integer", nullable=true)
     */
    private $column1424;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1425", type="integer", nullable=true)
     */
    private $column1425;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1426", type="integer", nullable=true)
     */
    private $column1426;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1427", type="integer", nullable=true)
     */
    private $column1427;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1428", type="integer", nullable=true)
     */
    private $column1428;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1429", type="integer", nullable=true)
     */
    private $column1429;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1430", type="integer", nullable=true)
     */
    private $column1430;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1431", type="integer", nullable=true)
     */
    private $column1431;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1432", type="integer", nullable=true)
     */
    private $column1432;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1433", type="integer", nullable=true)
     */
    private $column1433;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1434", type="integer", nullable=true)
     */
    private $column1434;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1435", type="integer", nullable=true)
     */
    private $column1435;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1436", type="integer", nullable=true)
     */
    private $column1436;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1437", type="integer", nullable=true)
     */
    private $column1437;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1438", type="integer", nullable=true)
     */
    private $column1438;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1439", type="integer", nullable=true)
     */
    private $column1439;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1440", type="integer", nullable=true)
     */
    private $column1440;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1441", type="integer", nullable=true)
     */
    private $column1441;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_0", type="bigint", nullable=true)
     */
    private $patchNumber0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_1", type="bigint", nullable=true)
     */
    private $patchNumber1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_2", type="bigint", nullable=true)
     */
    private $patchNumber2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_3", type="bigint", nullable=true)
     */
    private $patchNumber3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_4", type="bigint", nullable=true)
     */
    private $patchNumber4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_5", type="bigint", nullable=true)
     */
    private $patchNumber5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_6", type="bigint", nullable=true)
     */
    private $patchNumber6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_7", type="bigint", nullable=true)
     */
    private $patchNumber7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_8", type="bigint", nullable=true)
     */
    private $patchNumber8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_9", type="bigint", nullable=true)
     */
    private $patchNumber9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_10", type="bigint", nullable=true)
     */
    private $patchNumber10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_11", type="bigint", nullable=true)
     */
    private $patchNumber11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_12", type="bigint", nullable=true)
     */
    private $patchNumber12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_13", type="bigint", nullable=true)
     */
    private $patchNumber13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_14", type="bigint", nullable=true)
     */
    private $patchNumber14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_15", type="bigint", nullable=true)
     */
    private $patchNumber15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_16", type="bigint", nullable=true)
     */
    private $patchNumber16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_17", type="bigint", nullable=true)
     */
    private $patchNumber17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_18", type="bigint", nullable=true)
     */
    private $patchNumber18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_19", type="bigint", nullable=true)
     */
    private $patchNumber19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_20", type="bigint", nullable=true)
     */
    private $patchNumber20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_21", type="bigint", nullable=true)
     */
    private $patchNumber21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_22", type="bigint", nullable=true)
     */
    private $patchNumber22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_23", type="bigint", nullable=true)
     */
    private $patchNumber23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_24", type="bigint", nullable=true)
     */
    private $patchNumber24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_25", type="bigint", nullable=true)
     */
    private $patchNumber25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_26", type="bigint", nullable=true)
     */
    private $patchNumber26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_27", type="bigint", nullable=true)
     */
    private $patchNumber27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_28", type="bigint", nullable=true)
     */
    private $patchNumber28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_29", type="bigint", nullable=true)
     */
    private $patchNumber29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_30", type="bigint", nullable=true)
     */
    private $patchNumber30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_31", type="bigint", nullable=true)
     */
    private $patchNumber31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_32", type="bigint", nullable=true)
     */
    private $patchNumber32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_33", type="bigint", nullable=true)
     */
    private $patchNumber33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_34", type="bigint", nullable=true)
     */
    private $patchNumber34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_35", type="bigint", nullable=true)
     */
    private $patchNumber35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_36", type="bigint", nullable=true)
     */
    private $patchNumber36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_37", type="bigint", nullable=true)
     */
    private $patchNumber37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_38", type="bigint", nullable=true)
     */
    private $patchNumber38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_39", type="bigint", nullable=true)
     */
    private $patchNumber39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_40", type="bigint", nullable=true)
     */
    private $patchNumber40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_41", type="bigint", nullable=true)
     */
    private $patchNumber41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_42", type="bigint", nullable=true)
     */
    private $patchNumber42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_43", type="bigint", nullable=true)
     */
    private $patchNumber43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_44", type="bigint", nullable=true)
     */
    private $patchNumber44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_45", type="bigint", nullable=true)
     */
    private $patchNumber45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_46", type="bigint", nullable=true)
     */
    private $patchNumber46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_47", type="bigint", nullable=true)
     */
    private $patchNumber47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_48", type="bigint", nullable=true)
     */
    private $patchNumber48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_49", type="bigint", nullable=true)
     */
    private $patchNumber49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_50", type="bigint", nullable=true)
     */
    private $patchNumber50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_51", type="bigint", nullable=true)
     */
    private $patchNumber51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_52", type="bigint", nullable=true)
     */
    private $patchNumber52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_53", type="bigint", nullable=true)
     */
    private $patchNumber53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_54", type="bigint", nullable=true)
     */
    private $patchNumber54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_55", type="bigint", nullable=true)
     */
    private $patchNumber55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_56", type="bigint", nullable=true)
     */
    private $patchNumber56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_57", type="bigint", nullable=true)
     */
    private $patchNumber57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_58", type="bigint", nullable=true)
     */
    private $patchNumber58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number_59", type="bigint", nullable=true)
     */
    private $patchNumber59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="use_currency_type", type="integer", nullable=true)
     */
    private $useCurrencyType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1506", type="bigint", nullable=true)
     */
    private $column1506;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1507", type="boolean", nullable=true)
     */
    private $column1507;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="not_complete_text", referencedColumnName="pk")
     * })
     */
    private $notCompleteText;

    /**
     * @var DefaultTalk
     *
     * @ORM\ManyToOne(targetEntity="DefaultTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="complete_text", referencedColumnName="pk")
     * })
     */
    private $completeText;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_unlock", referencedColumnName="pk")
     * })
     */
    private $questUnlock;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_59", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock59;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_58", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock58;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_57", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock57;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_56", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock56;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_55", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock55;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_54", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock54;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_53", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock53;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_52", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock52;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_51", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock51;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_50", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock50;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_49", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock49;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_48", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock48;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_47", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock47;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_46", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock46;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_45", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock45;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_44", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock44;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_43", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock43;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_42", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock42;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_41", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock41;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_40", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock40;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_39", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock39;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_38", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock38;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_37", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock37;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_36", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock36;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_35", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock35;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_34", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock34;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_33", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock33;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_32", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock32;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_31", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock31;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_30", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock30;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_29", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock29;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_28", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock28;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_27", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock27;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_26", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock26;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_25", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock25;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_24", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock24;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_23", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock23;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_22", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock22;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_21", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock21;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_20", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock20;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_59", referencedColumnName="pk")
     * })
     */
    private $questItem59;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_58", referencedColumnName="pk")
     * })
     */
    private $questItem58;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_57", referencedColumnName="pk")
     * })
     */
    private $questItem57;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_56", referencedColumnName="pk")
     * })
     */
    private $questItem56;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_55", referencedColumnName="pk")
     * })
     */
    private $questItem55;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_54", referencedColumnName="pk")
     * })
     */
    private $questItem54;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_53", referencedColumnName="pk")
     * })
     */
    private $questItem53;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_52", referencedColumnName="pk")
     * })
     */
    private $questItem52;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_51", referencedColumnName="pk")
     * })
     */
    private $questItem51;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_50", referencedColumnName="pk")
     * })
     */
    private $questItem50;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_49", referencedColumnName="pk")
     * })
     */
    private $questItem49;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_48", referencedColumnName="pk")
     * })
     */
    private $questItem48;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_47", referencedColumnName="pk")
     * })
     */
    private $questItem47;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_46", referencedColumnName="pk")
     * })
     */
    private $questItem46;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_45", referencedColumnName="pk")
     * })
     */
    private $questItem45;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_44", referencedColumnName="pk")
     * })
     */
    private $questItem44;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_43", referencedColumnName="pk")
     * })
     */
    private $questItem43;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_42", referencedColumnName="pk")
     * })
     */
    private $questItem42;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_41", referencedColumnName="pk")
     * })
     */
    private $questItem41;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_40", referencedColumnName="pk")
     * })
     */
    private $questItem40;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_39", referencedColumnName="pk")
     * })
     */
    private $questItem39;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_38", referencedColumnName="pk")
     * })
     */
    private $questItem38;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_37", referencedColumnName="pk")
     * })
     */
    private $questItem37;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_36", referencedColumnName="pk")
     * })
     */
    private $questItem36;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_35", referencedColumnName="pk")
     * })
     */
    private $questItem35;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_34", referencedColumnName="pk")
     * })
     */
    private $questItem34;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_33", referencedColumnName="pk")
     * })
     */
    private $questItem33;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_32", referencedColumnName="pk")
     * })
     */
    private $questItem32;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_31", referencedColumnName="pk")
     * })
     */
    private $questItem31;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_30", referencedColumnName="pk")
     * })
     */
    private $questItem30;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_29", referencedColumnName="pk")
     * })
     */
    private $questItem29;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_28", referencedColumnName="pk")
     * })
     */
    private $questItem28;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_27", referencedColumnName="pk")
     * })
     */
    private $questItem27;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_26", referencedColumnName="pk")
     * })
     */
    private $questItem26;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_25", referencedColumnName="pk")
     * })
     */
    private $questItem25;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_24", referencedColumnName="pk")
     * })
     */
    private $questItem24;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_23", referencedColumnName="pk")
     * })
     */
    private $questItem23;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_22", referencedColumnName="pk")
     * })
     */
    private $questItem22;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_21", referencedColumnName="pk")
     * })
     */
    private $questItem21;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_20", referencedColumnName="pk")
     * })
     */
    private $questItem20;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_19", referencedColumnName="pk")
     * })
     */
    private $questItem19;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_18", referencedColumnName="pk")
     * })
     */
    private $questItem18;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_17", referencedColumnName="pk")
     * })
     */
    private $questItem17;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_16", referencedColumnName="pk")
     * })
     */
    private $questItem16;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_15", referencedColumnName="pk")
     * })
     */
    private $questItem15;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_14", referencedColumnName="pk")
     * })
     */
    private $questItem14;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_13", referencedColumnName="pk")
     * })
     */
    private $questItem13;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_12", referencedColumnName="pk")
     * })
     */
    private $questItem12;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_11", referencedColumnName="pk")
     * })
     */
    private $questItem11;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_10", referencedColumnName="pk")
     * })
     */
    private $questItem10;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_9", referencedColumnName="pk")
     * })
     */
    private $questItem9;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_8", referencedColumnName="pk")
     * })
     */
    private $questItem8;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_7", referencedColumnName="pk")
     * })
     */
    private $questItem7;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_6", referencedColumnName="pk")
     * })
     */
    private $questItem6;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_5", referencedColumnName="pk")
     * })
     */
    private $questItem5;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_4", referencedColumnName="pk")
     * })
     */
    private $questItem4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_3", referencedColumnName="pk")
     * })
     */
    private $questItem3;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_2", referencedColumnName="pk")
     * })
     */
    private $questItem2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_1", referencedColumnName="pk")
     * })
     */
    private $questItem1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_item_0", referencedColumnName="pk")
     * })
     */
    private $questItem0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_59_2", referencedColumnName="pk")
     * })
     */
    private $itemCost592;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_58_2", referencedColumnName="pk")
     * })
     */
    private $itemCost582;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_57_2", referencedColumnName="pk")
     * })
     */
    private $itemCost572;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_56_2", referencedColumnName="pk")
     * })
     */
    private $itemCost562;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_55_2", referencedColumnName="pk")
     * })
     */
    private $itemCost552;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_54_2", referencedColumnName="pk")
     * })
     */
    private $itemCost542;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_53_2", referencedColumnName="pk")
     * })
     */
    private $itemCost532;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_52_2", referencedColumnName="pk")
     * })
     */
    private $itemCost522;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_51_2", referencedColumnName="pk")
     * })
     */
    private $itemCost512;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_50_2", referencedColumnName="pk")
     * })
     */
    private $itemCost502;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_49_2", referencedColumnName="pk")
     * })
     */
    private $itemCost492;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_48_2", referencedColumnName="pk")
     * })
     */
    private $itemCost482;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_47_2", referencedColumnName="pk")
     * })
     */
    private $itemCost472;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_46_2", referencedColumnName="pk")
     * })
     */
    private $itemCost462;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_45_2", referencedColumnName="pk")
     * })
     */
    private $itemCost452;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_44_2", referencedColumnName="pk")
     * })
     */
    private $itemCost442;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_43_2", referencedColumnName="pk")
     * })
     */
    private $itemCost432;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_42_2", referencedColumnName="pk")
     * })
     */
    private $itemCost422;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_41_2", referencedColumnName="pk")
     * })
     */
    private $itemCost412;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_40_2", referencedColumnName="pk")
     * })
     */
    private $itemCost402;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_39_2", referencedColumnName="pk")
     * })
     */
    private $itemCost392;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_38_2", referencedColumnName="pk")
     * })
     */
    private $itemCost382;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_37_2", referencedColumnName="pk")
     * })
     */
    private $itemCost372;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_36_2", referencedColumnName="pk")
     * })
     */
    private $itemCost362;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_35_2", referencedColumnName="pk")
     * })
     */
    private $itemCost352;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_34_2", referencedColumnName="pk")
     * })
     */
    private $itemCost342;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_33_2", referencedColumnName="pk")
     * })
     */
    private $itemCost332;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_32_2", referencedColumnName="pk")
     * })
     */
    private $itemCost322;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_31_2", referencedColumnName="pk")
     * })
     */
    private $itemCost312;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_30_2", referencedColumnName="pk")
     * })
     */
    private $itemCost302;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_29_2", referencedColumnName="pk")
     * })
     */
    private $itemCost292;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_28_2", referencedColumnName="pk")
     * })
     */
    private $itemCost282;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_27_2", referencedColumnName="pk")
     * })
     */
    private $itemCost272;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_26_2", referencedColumnName="pk")
     * })
     */
    private $itemCost262;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_25_2", referencedColumnName="pk")
     * })
     */
    private $itemCost252;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_24_2", referencedColumnName="pk")
     * })
     */
    private $itemCost242;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_23_2", referencedColumnName="pk")
     * })
     */
    private $itemCost232;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_22_2", referencedColumnName="pk")
     * })
     */
    private $itemCost222;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_21_2", referencedColumnName="pk")
     * })
     */
    private $itemCost212;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_20_2", referencedColumnName="pk")
     * })
     */
    private $itemCost202;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_19_2", referencedColumnName="pk")
     * })
     */
    private $itemCost192;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_18_2", referencedColumnName="pk")
     * })
     */
    private $itemCost182;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_17_2", referencedColumnName="pk")
     * })
     */
    private $itemCost172;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_16_2", referencedColumnName="pk")
     * })
     */
    private $itemCost162;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_15_2", referencedColumnName="pk")
     * })
     */
    private $itemCost152;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_14_2", referencedColumnName="pk")
     * })
     */
    private $itemCost142;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_13_2", referencedColumnName="pk")
     * })
     */
    private $itemCost132;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_12_2", referencedColumnName="pk")
     * })
     */
    private $itemCost122;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_11_2", referencedColumnName="pk")
     * })
     */
    private $itemCost112;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_10_2", referencedColumnName="pk")
     * })
     */
    private $itemCost102;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_9_2", referencedColumnName="pk")
     * })
     */
    private $itemCost92;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_8_2", referencedColumnName="pk")
     * })
     */
    private $itemCost82;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_7_2", referencedColumnName="pk")
     * })
     */
    private $itemCost72;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_6_2", referencedColumnName="pk")
     * })
     */
    private $itemCost62;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_5_2", referencedColumnName="pk")
     * })
     */
    private $itemCost52;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_4_2", referencedColumnName="pk")
     * })
     */
    private $itemCost42;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_3_2", referencedColumnName="pk")
     * })
     */
    private $itemCost32;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_2_2", referencedColumnName="pk")
     * })
     */
    private $itemCost22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_1_2", referencedColumnName="pk")
     * })
     */
    private $itemCost12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_0_2", referencedColumnName="pk")
     * })
     */
    private $itemCost02;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_59_1", referencedColumnName="pk")
     * })
     */
    private $itemCost591;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_58_1", referencedColumnName="pk")
     * })
     */
    private $itemCost581;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_57_1", referencedColumnName="pk")
     * })
     */
    private $itemCost571;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_56_1", referencedColumnName="pk")
     * })
     */
    private $itemCost561;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_55_1", referencedColumnName="pk")
     * })
     */
    private $itemCost551;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_54_1", referencedColumnName="pk")
     * })
     */
    private $itemCost541;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_53_1", referencedColumnName="pk")
     * })
     */
    private $itemCost531;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_52_1", referencedColumnName="pk")
     * })
     */
    private $itemCost521;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_51_1", referencedColumnName="pk")
     * })
     */
    private $itemCost511;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_50_1", referencedColumnName="pk")
     * })
     */
    private $itemCost501;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_49_1", referencedColumnName="pk")
     * })
     */
    private $itemCost491;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_48_1", referencedColumnName="pk")
     * })
     */
    private $itemCost481;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_47_1", referencedColumnName="pk")
     * })
     */
    private $itemCost471;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_46_1", referencedColumnName="pk")
     * })
     */
    private $itemCost461;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_45_1", referencedColumnName="pk")
     * })
     */
    private $itemCost451;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_44_1", referencedColumnName="pk")
     * })
     */
    private $itemCost441;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_43_1", referencedColumnName="pk")
     * })
     */
    private $itemCost431;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_42_1", referencedColumnName="pk")
     * })
     */
    private $itemCost421;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_41_1", referencedColumnName="pk")
     * })
     */
    private $itemCost411;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_40_1", referencedColumnName="pk")
     * })
     */
    private $itemCost401;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_39_1", referencedColumnName="pk")
     * })
     */
    private $itemCost391;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_38_1", referencedColumnName="pk")
     * })
     */
    private $itemCost381;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_37_1", referencedColumnName="pk")
     * })
     */
    private $itemCost371;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_36_1", referencedColumnName="pk")
     * })
     */
    private $itemCost361;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_35_1", referencedColumnName="pk")
     * })
     */
    private $itemCost351;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_34_1", referencedColumnName="pk")
     * })
     */
    private $itemCost341;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_33_1", referencedColumnName="pk")
     * })
     */
    private $itemCost331;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_32_1", referencedColumnName="pk")
     * })
     */
    private $itemCost321;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_31_1", referencedColumnName="pk")
     * })
     */
    private $itemCost311;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_30_1", referencedColumnName="pk")
     * })
     */
    private $itemCost301;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_29_1", referencedColumnName="pk")
     * })
     */
    private $itemCost291;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_28_1", referencedColumnName="pk")
     * })
     */
    private $itemCost281;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_27_1", referencedColumnName="pk")
     * })
     */
    private $itemCost271;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_26_1", referencedColumnName="pk")
     * })
     */
    private $itemCost261;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_25_1", referencedColumnName="pk")
     * })
     */
    private $itemCost251;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_24_1", referencedColumnName="pk")
     * })
     */
    private $itemCost241;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_23_1", referencedColumnName="pk")
     * })
     */
    private $itemCost231;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_22_1", referencedColumnName="pk")
     * })
     */
    private $itemCost221;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_21_1", referencedColumnName="pk")
     * })
     */
    private $itemCost211;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_20_1", referencedColumnName="pk")
     * })
     */
    private $itemCost201;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_19_1", referencedColumnName="pk")
     * })
     */
    private $itemCost191;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_18_1", referencedColumnName="pk")
     * })
     */
    private $itemCost181;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_17_1", referencedColumnName="pk")
     * })
     */
    private $itemCost171;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_16_1", referencedColumnName="pk")
     * })
     */
    private $itemCost161;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_15_1", referencedColumnName="pk")
     * })
     */
    private $itemCost151;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_14_1", referencedColumnName="pk")
     * })
     */
    private $itemCost141;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_13_1", referencedColumnName="pk")
     * })
     */
    private $itemCost131;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_12_1", referencedColumnName="pk")
     * })
     */
    private $itemCost121;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_11_1", referencedColumnName="pk")
     * })
     */
    private $itemCost111;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_10_1", referencedColumnName="pk")
     * })
     */
    private $itemCost101;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_9_1", referencedColumnName="pk")
     * })
     */
    private $itemCost91;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_8_1", referencedColumnName="pk")
     * })
     */
    private $itemCost81;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_7_1", referencedColumnName="pk")
     * })
     */
    private $itemCost71;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_6_1", referencedColumnName="pk")
     * })
     */
    private $itemCost61;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_5_1", referencedColumnName="pk")
     * })
     */
    private $itemCost51;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_4_1", referencedColumnName="pk")
     * })
     */
    private $itemCost41;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_3_1", referencedColumnName="pk")
     * })
     */
    private $itemCost31;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_2_1", referencedColumnName="pk")
     * })
     */
    private $itemCost21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_1_1", referencedColumnName="pk")
     * })
     */
    private $itemCost11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_0_1", referencedColumnName="pk")
     * })
     */
    private $itemCost01;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_59_0", referencedColumnName="pk")
     * })
     */
    private $itemCost590;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_58_0", referencedColumnName="pk")
     * })
     */
    private $itemCost580;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_57_0", referencedColumnName="pk")
     * })
     */
    private $itemCost570;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_56_0", referencedColumnName="pk")
     * })
     */
    private $itemCost560;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_55_0", referencedColumnName="pk")
     * })
     */
    private $itemCost550;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_54_0", referencedColumnName="pk")
     * })
     */
    private $itemCost540;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_53_0", referencedColumnName="pk")
     * })
     */
    private $itemCost530;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_52_0", referencedColumnName="pk")
     * })
     */
    private $itemCost520;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_51_0", referencedColumnName="pk")
     * })
     */
    private $itemCost510;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_50_0", referencedColumnName="pk")
     * })
     */
    private $itemCost500;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_49_0", referencedColumnName="pk")
     * })
     */
    private $itemCost490;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_48_0", referencedColumnName="pk")
     * })
     */
    private $itemCost480;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_47_0", referencedColumnName="pk")
     * })
     */
    private $itemCost470;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_46_0", referencedColumnName="pk")
     * })
     */
    private $itemCost460;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_45_0", referencedColumnName="pk")
     * })
     */
    private $itemCost450;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_44_0", referencedColumnName="pk")
     * })
     */
    private $itemCost440;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_43_0", referencedColumnName="pk")
     * })
     */
    private $itemCost430;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_42_0", referencedColumnName="pk")
     * })
     */
    private $itemCost420;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_41_0", referencedColumnName="pk")
     * })
     */
    private $itemCost410;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_40_0", referencedColumnName="pk")
     * })
     */
    private $itemCost400;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_39_0", referencedColumnName="pk")
     * })
     */
    private $itemCost390;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_38_0", referencedColumnName="pk")
     * })
     */
    private $itemCost380;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_37_0", referencedColumnName="pk")
     * })
     */
    private $itemCost370;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_36_0", referencedColumnName="pk")
     * })
     */
    private $itemCost360;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_35_0", referencedColumnName="pk")
     * })
     */
    private $itemCost350;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_34_0", referencedColumnName="pk")
     * })
     */
    private $itemCost340;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_33_0", referencedColumnName="pk")
     * })
     */
    private $itemCost330;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_32_0", referencedColumnName="pk")
     * })
     */
    private $itemCost320;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_31_0", referencedColumnName="pk")
     * })
     */
    private $itemCost310;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_30_0", referencedColumnName="pk")
     * })
     */
    private $itemCost300;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_29_0", referencedColumnName="pk")
     * })
     */
    private $itemCost290;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_28_0", referencedColumnName="pk")
     * })
     */
    private $itemCost280;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_27_0", referencedColumnName="pk")
     * })
     */
    private $itemCost270;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_26_0", referencedColumnName="pk")
     * })
     */
    private $itemCost260;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_25_0", referencedColumnName="pk")
     * })
     */
    private $itemCost250;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_24_0", referencedColumnName="pk")
     * })
     */
    private $itemCost240;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_23_0", referencedColumnName="pk")
     * })
     */
    private $itemCost230;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_22_0", referencedColumnName="pk")
     * })
     */
    private $itemCost220;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_21_0", referencedColumnName="pk")
     * })
     */
    private $itemCost210;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_20_0", referencedColumnName="pk")
     * })
     */
    private $itemCost200;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_19_0", referencedColumnName="pk")
     * })
     */
    private $itemCost190;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_18_0", referencedColumnName="pk")
     * })
     */
    private $itemCost180;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_17_0", referencedColumnName="pk")
     * })
     */
    private $itemCost170;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_16_0", referencedColumnName="pk")
     * })
     */
    private $itemCost160;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_15_0", referencedColumnName="pk")
     * })
     */
    private $itemCost150;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_14_0", referencedColumnName="pk")
     * })
     */
    private $itemCost140;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_13_0", referencedColumnName="pk")
     * })
     */
    private $itemCost130;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_12_0", referencedColumnName="pk")
     * })
     */
    private $itemCost120;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_11_0", referencedColumnName="pk")
     * })
     */
    private $itemCost110;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_10_0", referencedColumnName="pk")
     * })
     */
    private $itemCost100;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_9_0", referencedColumnName="pk")
     * })
     */
    private $itemCost90;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_8_0", referencedColumnName="pk")
     * })
     */
    private $itemCost80;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_7_0", referencedColumnName="pk")
     * })
     */
    private $itemCost70;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_6_0", referencedColumnName="pk")
     * })
     */
    private $itemCost60;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_5_0", referencedColumnName="pk")
     * })
     */
    private $itemCost50;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_4_0", referencedColumnName="pk")
     * })
     */
    private $itemCost40;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_3_0", referencedColumnName="pk")
     * })
     */
    private $itemCost30;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_2_0", referencedColumnName="pk")
     * })
     */
    private $itemCost20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_1_0", referencedColumnName="pk")
     * })
     */
    private $itemCost10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cost_0_0", referencedColumnName="pk")
     * })
     */
    private $itemCost00;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_59_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory591;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_58_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory581;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_57_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory571;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_56_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory561;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_55_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory551;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_54_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory541;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_53_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory531;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_52_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory521;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_51_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory511;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_50_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory501;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_49_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory491;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_48_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory481;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_47_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory471;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_46_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory461;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_45_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory451;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_44_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory441;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_43_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory431;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_42_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory421;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_41_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory411;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_40_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory401;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_39_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory391;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_38_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory381;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_37_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory371;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_36_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory361;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_35_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory351;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_34_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory341;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_33_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory331;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_32_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory321;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_31_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory311;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_30_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory301;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_29_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory291;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_28_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory281;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_27_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory271;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_26_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory261;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_25_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory251;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_24_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory241;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_23_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory231;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_22_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory221;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_21_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory211;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_20_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory201;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_19_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory191;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_18_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory181;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_17_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory171;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_16_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory161;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_15_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory151;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_14_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory141;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_13_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory131;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_12_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory121;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_11_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory111;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_10_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory101;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_9_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory91;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_8_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory81;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_7_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory71;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_6_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory61;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_5_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory51;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_4_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory41;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_3_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory31;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_2_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory21;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_1_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory11;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_0_1", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory01;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_59_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive591;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_58_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive581;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_57_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive571;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_56_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive561;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_55_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive551;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_54_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive541;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_53_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive531;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_52_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive521;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_51_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive511;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_50_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive501;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_49_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive491;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_48_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive481;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_47_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive471;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_46_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive461;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_45_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive451;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_44_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive441;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_19", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock19;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_18", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock18;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_17", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock17;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_16", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock16;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_15", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock15;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_14", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock14;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_13", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock13;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_12", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock12;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_11", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock11;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_10", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock10;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_9", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock9;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_8", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock8;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_7", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock7;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_6", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock6;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_5", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock5;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_4", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock4;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_3", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock3;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_2", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock2;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_1", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock1;

    /**
     * @var Achievement
     *
     * @ORM\ManyToOne(targetEntity="Achievement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="achievement_unlock_0", referencedColumnName="pk")
     * })
     */
    private $achievementUnlock0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_43_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive431;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_42_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive421;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_41_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive411;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_40_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive401;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_39_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive391;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_38_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive381;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_37_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive371;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_36_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive361;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_35_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive351;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_34_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive341;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_33_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive331;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_32_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive321;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_31_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive311;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_30_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive301;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_29_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive291;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_28_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive281;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_27_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive271;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_26_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive261;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_25_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive251;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_24_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive241;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_23_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive231;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_22_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive221;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_21_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive211;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_20_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive201;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_19_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive191;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_18_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive181;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_17_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive171;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_16_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive161;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_15_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive151;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_14_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive141;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_13_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive131;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_12_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive121;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_11_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive111;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_10_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive101;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_9_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive91;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_8_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive81;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_7_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive71;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_6_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive61;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_5_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive51;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_4_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive41;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_3_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive31;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_2_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_1_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_0_1", referencedColumnName="pk")
     * })
     */
    private $itemReceive01;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_59_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory590;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_58_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory580;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_57_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory570;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_56_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory560;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_55_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory550;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_54_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory540;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_53_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory530;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_52_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory520;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_51_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory510;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_50_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory500;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_49_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory490;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_48_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory480;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_47_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory470;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_46_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory460;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_45_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory450;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_44_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory440;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_43_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory430;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_42_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory420;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_41_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory410;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_40_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory400;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_39_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory390;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_38_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory380;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_37_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory370;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_36_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory360;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_35_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory350;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_34_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory340;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_33_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory330;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_32_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory320;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_31_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory310;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_30_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory300;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_29_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory290;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_28_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory280;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_27_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory270;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_26_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory260;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_25_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory250;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_24_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory240;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_23_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory230;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_22_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory220;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_21_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory210;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_20_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory200;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_19_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory190;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_18_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory180;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_17_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory170;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_16_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory160;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_15_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory150;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_14_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory140;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_13_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory130;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_12_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory120;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_11_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory110;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_10_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory100;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_9_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory90;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_8_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory80;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_7_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory70;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_6_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory60;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_5_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory50;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_4_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory40;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_3_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory30;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_2_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory20;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_1_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory10;

    /**
     * @var SpecialShopItemCategory
     *
     * @ORM\ManyToOne(targetEntity="SpecialShopItemCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="special_shop_item_category_0_0", referencedColumnName="pk")
     * })
     */
    private $specialShopItemCategory00;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_59_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive590;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_58_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive580;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_57_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive570;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_56_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive560;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_55_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive550;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_54_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive540;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_53_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive530;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_52_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive520;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_51_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive510;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_50_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive500;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_49_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive490;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_48_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive480;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_47_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive470;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_46_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive460;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_45_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive450;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_44_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive440;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_43_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive430;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_42_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive420;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_41_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive410;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_40_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive400;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_39_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive390;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_38_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive380;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_37_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive370;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_36_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive360;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_35_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive350;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_34_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive340;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_33_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive330;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_32_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive320;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_31_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive310;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_30_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive300;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_29_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive290;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_28_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive280;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_27_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive270;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_26_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive260;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_25_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive250;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_24_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive240;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_23_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive230;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_22_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive220;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_21_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive210;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_20_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive200;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_19_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive190;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_18_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive180;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_17_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive170;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_16_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive160;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_15_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive150;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_14_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive140;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_13_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive130;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_12_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive120;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_11_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive110;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_10_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive100;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_9_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive90;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_8_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive80;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_7_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive70;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_6_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive60;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_5_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive50;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_4_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive40;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_3_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive30;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_2_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_1_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_receive_0_0", referencedColumnName="pk")
     * })
     */
    private $itemReceive00;

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

    public function getCountReceive00(): ?string
    {
        return $this->countReceive00;
    }

    public function setCountReceive00(?string $countReceive00): self
    {
        $this->countReceive00 = $countReceive00;

        return $this;
    }

    public function getCountReceive10(): ?string
    {
        return $this->countReceive10;
    }

    public function setCountReceive10(?string $countReceive10): self
    {
        $this->countReceive10 = $countReceive10;

        return $this;
    }

    public function getCountReceive20(): ?string
    {
        return $this->countReceive20;
    }

    public function setCountReceive20(?string $countReceive20): self
    {
        $this->countReceive20 = $countReceive20;

        return $this;
    }

    public function getCountReceive30(): ?string
    {
        return $this->countReceive30;
    }

    public function setCountReceive30(?string $countReceive30): self
    {
        $this->countReceive30 = $countReceive30;

        return $this;
    }

    public function getCountReceive40(): ?string
    {
        return $this->countReceive40;
    }

    public function setCountReceive40(?string $countReceive40): self
    {
        $this->countReceive40 = $countReceive40;

        return $this;
    }

    public function getCountReceive50(): ?string
    {
        return $this->countReceive50;
    }

    public function setCountReceive50(?string $countReceive50): self
    {
        $this->countReceive50 = $countReceive50;

        return $this;
    }

    public function getCountReceive60(): ?string
    {
        return $this->countReceive60;
    }

    public function setCountReceive60(?string $countReceive60): self
    {
        $this->countReceive60 = $countReceive60;

        return $this;
    }

    public function getCountReceive70(): ?string
    {
        return $this->countReceive70;
    }

    public function setCountReceive70(?string $countReceive70): self
    {
        $this->countReceive70 = $countReceive70;

        return $this;
    }

    public function getCountReceive80(): ?string
    {
        return $this->countReceive80;
    }

    public function setCountReceive80(?string $countReceive80): self
    {
        $this->countReceive80 = $countReceive80;

        return $this;
    }

    public function getCountReceive90(): ?string
    {
        return $this->countReceive90;
    }

    public function setCountReceive90(?string $countReceive90): self
    {
        $this->countReceive90 = $countReceive90;

        return $this;
    }

    public function getCountReceive100(): ?string
    {
        return $this->countReceive100;
    }

    public function setCountReceive100(?string $countReceive100): self
    {
        $this->countReceive100 = $countReceive100;

        return $this;
    }

    public function getCountReceive110(): ?string
    {
        return $this->countReceive110;
    }

    public function setCountReceive110(?string $countReceive110): self
    {
        $this->countReceive110 = $countReceive110;

        return $this;
    }

    public function getCountReceive120(): ?string
    {
        return $this->countReceive120;
    }

    public function setCountReceive120(?string $countReceive120): self
    {
        $this->countReceive120 = $countReceive120;

        return $this;
    }

    public function getCountReceive130(): ?string
    {
        return $this->countReceive130;
    }

    public function setCountReceive130(?string $countReceive130): self
    {
        $this->countReceive130 = $countReceive130;

        return $this;
    }

    public function getCountReceive140(): ?string
    {
        return $this->countReceive140;
    }

    public function setCountReceive140(?string $countReceive140): self
    {
        $this->countReceive140 = $countReceive140;

        return $this;
    }

    public function getCountReceive150(): ?string
    {
        return $this->countReceive150;
    }

    public function setCountReceive150(?string $countReceive150): self
    {
        $this->countReceive150 = $countReceive150;

        return $this;
    }

    public function getCountReceive160(): ?string
    {
        return $this->countReceive160;
    }

    public function setCountReceive160(?string $countReceive160): self
    {
        $this->countReceive160 = $countReceive160;

        return $this;
    }

    public function getCountReceive170(): ?string
    {
        return $this->countReceive170;
    }

    public function setCountReceive170(?string $countReceive170): self
    {
        $this->countReceive170 = $countReceive170;

        return $this;
    }

    public function getCountReceive180(): ?string
    {
        return $this->countReceive180;
    }

    public function setCountReceive180(?string $countReceive180): self
    {
        $this->countReceive180 = $countReceive180;

        return $this;
    }

    public function getCountReceive190(): ?string
    {
        return $this->countReceive190;
    }

    public function setCountReceive190(?string $countReceive190): self
    {
        $this->countReceive190 = $countReceive190;

        return $this;
    }

    public function getCountReceive200(): ?string
    {
        return $this->countReceive200;
    }

    public function setCountReceive200(?string $countReceive200): self
    {
        $this->countReceive200 = $countReceive200;

        return $this;
    }

    public function getCountReceive210(): ?string
    {
        return $this->countReceive210;
    }

    public function setCountReceive210(?string $countReceive210): self
    {
        $this->countReceive210 = $countReceive210;

        return $this;
    }

    public function getCountReceive220(): ?string
    {
        return $this->countReceive220;
    }

    public function setCountReceive220(?string $countReceive220): self
    {
        $this->countReceive220 = $countReceive220;

        return $this;
    }

    public function getCountReceive230(): ?string
    {
        return $this->countReceive230;
    }

    public function setCountReceive230(?string $countReceive230): self
    {
        $this->countReceive230 = $countReceive230;

        return $this;
    }

    public function getCountReceive240(): ?string
    {
        return $this->countReceive240;
    }

    public function setCountReceive240(?string $countReceive240): self
    {
        $this->countReceive240 = $countReceive240;

        return $this;
    }

    public function getCountReceive250(): ?string
    {
        return $this->countReceive250;
    }

    public function setCountReceive250(?string $countReceive250): self
    {
        $this->countReceive250 = $countReceive250;

        return $this;
    }

    public function getCountReceive260(): ?string
    {
        return $this->countReceive260;
    }

    public function setCountReceive260(?string $countReceive260): self
    {
        $this->countReceive260 = $countReceive260;

        return $this;
    }

    public function getCountReceive270(): ?string
    {
        return $this->countReceive270;
    }

    public function setCountReceive270(?string $countReceive270): self
    {
        $this->countReceive270 = $countReceive270;

        return $this;
    }

    public function getCountReceive280(): ?string
    {
        return $this->countReceive280;
    }

    public function setCountReceive280(?string $countReceive280): self
    {
        $this->countReceive280 = $countReceive280;

        return $this;
    }

    public function getCountReceive290(): ?string
    {
        return $this->countReceive290;
    }

    public function setCountReceive290(?string $countReceive290): self
    {
        $this->countReceive290 = $countReceive290;

        return $this;
    }

    public function getCountReceive300(): ?string
    {
        return $this->countReceive300;
    }

    public function setCountReceive300(?string $countReceive300): self
    {
        $this->countReceive300 = $countReceive300;

        return $this;
    }

    public function getCountReceive310(): ?string
    {
        return $this->countReceive310;
    }

    public function setCountReceive310(?string $countReceive310): self
    {
        $this->countReceive310 = $countReceive310;

        return $this;
    }

    public function getCountReceive320(): ?string
    {
        return $this->countReceive320;
    }

    public function setCountReceive320(?string $countReceive320): self
    {
        $this->countReceive320 = $countReceive320;

        return $this;
    }

    public function getCountReceive330(): ?string
    {
        return $this->countReceive330;
    }

    public function setCountReceive330(?string $countReceive330): self
    {
        $this->countReceive330 = $countReceive330;

        return $this;
    }

    public function getCountReceive340(): ?string
    {
        return $this->countReceive340;
    }

    public function setCountReceive340(?string $countReceive340): self
    {
        $this->countReceive340 = $countReceive340;

        return $this;
    }

    public function getCountReceive350(): ?string
    {
        return $this->countReceive350;
    }

    public function setCountReceive350(?string $countReceive350): self
    {
        $this->countReceive350 = $countReceive350;

        return $this;
    }

    public function getCountReceive360(): ?string
    {
        return $this->countReceive360;
    }

    public function setCountReceive360(?string $countReceive360): self
    {
        $this->countReceive360 = $countReceive360;

        return $this;
    }

    public function getCountReceive370(): ?string
    {
        return $this->countReceive370;
    }

    public function setCountReceive370(?string $countReceive370): self
    {
        $this->countReceive370 = $countReceive370;

        return $this;
    }

    public function getCountReceive380(): ?string
    {
        return $this->countReceive380;
    }

    public function setCountReceive380(?string $countReceive380): self
    {
        $this->countReceive380 = $countReceive380;

        return $this;
    }

    public function getCountReceive390(): ?string
    {
        return $this->countReceive390;
    }

    public function setCountReceive390(?string $countReceive390): self
    {
        $this->countReceive390 = $countReceive390;

        return $this;
    }

    public function getCountReceive400(): ?string
    {
        return $this->countReceive400;
    }

    public function setCountReceive400(?string $countReceive400): self
    {
        $this->countReceive400 = $countReceive400;

        return $this;
    }

    public function getCountReceive410(): ?string
    {
        return $this->countReceive410;
    }

    public function setCountReceive410(?string $countReceive410): self
    {
        $this->countReceive410 = $countReceive410;

        return $this;
    }

    public function getCountReceive420(): ?string
    {
        return $this->countReceive420;
    }

    public function setCountReceive420(?string $countReceive420): self
    {
        $this->countReceive420 = $countReceive420;

        return $this;
    }

    public function getCountReceive430(): ?string
    {
        return $this->countReceive430;
    }

    public function setCountReceive430(?string $countReceive430): self
    {
        $this->countReceive430 = $countReceive430;

        return $this;
    }

    public function getCountReceive440(): ?string
    {
        return $this->countReceive440;
    }

    public function setCountReceive440(?string $countReceive440): self
    {
        $this->countReceive440 = $countReceive440;

        return $this;
    }

    public function getCountReceive450(): ?string
    {
        return $this->countReceive450;
    }

    public function setCountReceive450(?string $countReceive450): self
    {
        $this->countReceive450 = $countReceive450;

        return $this;
    }

    public function getCountReceive460(): ?string
    {
        return $this->countReceive460;
    }

    public function setCountReceive460(?string $countReceive460): self
    {
        $this->countReceive460 = $countReceive460;

        return $this;
    }

    public function getCountReceive470(): ?string
    {
        return $this->countReceive470;
    }

    public function setCountReceive470(?string $countReceive470): self
    {
        $this->countReceive470 = $countReceive470;

        return $this;
    }

    public function getCountReceive480(): ?string
    {
        return $this->countReceive480;
    }

    public function setCountReceive480(?string $countReceive480): self
    {
        $this->countReceive480 = $countReceive480;

        return $this;
    }

    public function getCountReceive490(): ?string
    {
        return $this->countReceive490;
    }

    public function setCountReceive490(?string $countReceive490): self
    {
        $this->countReceive490 = $countReceive490;

        return $this;
    }

    public function getCountReceive500(): ?string
    {
        return $this->countReceive500;
    }

    public function setCountReceive500(?string $countReceive500): self
    {
        $this->countReceive500 = $countReceive500;

        return $this;
    }

    public function getCountReceive510(): ?string
    {
        return $this->countReceive510;
    }

    public function setCountReceive510(?string $countReceive510): self
    {
        $this->countReceive510 = $countReceive510;

        return $this;
    }

    public function getCountReceive520(): ?string
    {
        return $this->countReceive520;
    }

    public function setCountReceive520(?string $countReceive520): self
    {
        $this->countReceive520 = $countReceive520;

        return $this;
    }

    public function getCountReceive530(): ?string
    {
        return $this->countReceive530;
    }

    public function setCountReceive530(?string $countReceive530): self
    {
        $this->countReceive530 = $countReceive530;

        return $this;
    }

    public function getCountReceive540(): ?string
    {
        return $this->countReceive540;
    }

    public function setCountReceive540(?string $countReceive540): self
    {
        $this->countReceive540 = $countReceive540;

        return $this;
    }

    public function getCountReceive550(): ?string
    {
        return $this->countReceive550;
    }

    public function setCountReceive550(?string $countReceive550): self
    {
        $this->countReceive550 = $countReceive550;

        return $this;
    }

    public function getCountReceive560(): ?string
    {
        return $this->countReceive560;
    }

    public function setCountReceive560(?string $countReceive560): self
    {
        $this->countReceive560 = $countReceive560;

        return $this;
    }

    public function getCountReceive570(): ?string
    {
        return $this->countReceive570;
    }

    public function setCountReceive570(?string $countReceive570): self
    {
        $this->countReceive570 = $countReceive570;

        return $this;
    }

    public function getCountReceive580(): ?string
    {
        return $this->countReceive580;
    }

    public function setCountReceive580(?string $countReceive580): self
    {
        $this->countReceive580 = $countReceive580;

        return $this;
    }

    public function getCountReceive590(): ?string
    {
        return $this->countReceive590;
    }

    public function setCountReceive590(?string $countReceive590): self
    {
        $this->countReceive590 = $countReceive590;

        return $this;
    }

    public function getHqReceive00(): ?bool
    {
        return $this->hqReceive00;
    }

    public function setHqReceive00(?bool $hqReceive00): self
    {
        $this->hqReceive00 = $hqReceive00;

        return $this;
    }

    public function getHqReceive10(): ?bool
    {
        return $this->hqReceive10;
    }

    public function setHqReceive10(?bool $hqReceive10): self
    {
        $this->hqReceive10 = $hqReceive10;

        return $this;
    }

    public function getHqReceive20(): ?bool
    {
        return $this->hqReceive20;
    }

    public function setHqReceive20(?bool $hqReceive20): self
    {
        $this->hqReceive20 = $hqReceive20;

        return $this;
    }

    public function getHqReceive30(): ?bool
    {
        return $this->hqReceive30;
    }

    public function setHqReceive30(?bool $hqReceive30): self
    {
        $this->hqReceive30 = $hqReceive30;

        return $this;
    }

    public function getHqReceive40(): ?bool
    {
        return $this->hqReceive40;
    }

    public function setHqReceive40(?bool $hqReceive40): self
    {
        $this->hqReceive40 = $hqReceive40;

        return $this;
    }

    public function getHqReceive50(): ?bool
    {
        return $this->hqReceive50;
    }

    public function setHqReceive50(?bool $hqReceive50): self
    {
        $this->hqReceive50 = $hqReceive50;

        return $this;
    }

    public function getHqReceive60(): ?bool
    {
        return $this->hqReceive60;
    }

    public function setHqReceive60(?bool $hqReceive60): self
    {
        $this->hqReceive60 = $hqReceive60;

        return $this;
    }

    public function getHqReceive70(): ?bool
    {
        return $this->hqReceive70;
    }

    public function setHqReceive70(?bool $hqReceive70): self
    {
        $this->hqReceive70 = $hqReceive70;

        return $this;
    }

    public function getHqReceive80(): ?bool
    {
        return $this->hqReceive80;
    }

    public function setHqReceive80(?bool $hqReceive80): self
    {
        $this->hqReceive80 = $hqReceive80;

        return $this;
    }

    public function getHqReceive90(): ?bool
    {
        return $this->hqReceive90;
    }

    public function setHqReceive90(?bool $hqReceive90): self
    {
        $this->hqReceive90 = $hqReceive90;

        return $this;
    }

    public function getHqReceive100(): ?bool
    {
        return $this->hqReceive100;
    }

    public function setHqReceive100(?bool $hqReceive100): self
    {
        $this->hqReceive100 = $hqReceive100;

        return $this;
    }

    public function getHqReceive110(): ?bool
    {
        return $this->hqReceive110;
    }

    public function setHqReceive110(?bool $hqReceive110): self
    {
        $this->hqReceive110 = $hqReceive110;

        return $this;
    }

    public function getHqReceive120(): ?bool
    {
        return $this->hqReceive120;
    }

    public function setHqReceive120(?bool $hqReceive120): self
    {
        $this->hqReceive120 = $hqReceive120;

        return $this;
    }

    public function getHqReceive130(): ?bool
    {
        return $this->hqReceive130;
    }

    public function setHqReceive130(?bool $hqReceive130): self
    {
        $this->hqReceive130 = $hqReceive130;

        return $this;
    }

    public function getHqReceive140(): ?bool
    {
        return $this->hqReceive140;
    }

    public function setHqReceive140(?bool $hqReceive140): self
    {
        $this->hqReceive140 = $hqReceive140;

        return $this;
    }

    public function getHqReceive150(): ?bool
    {
        return $this->hqReceive150;
    }

    public function setHqReceive150(?bool $hqReceive150): self
    {
        $this->hqReceive150 = $hqReceive150;

        return $this;
    }

    public function getHqReceive160(): ?bool
    {
        return $this->hqReceive160;
    }

    public function setHqReceive160(?bool $hqReceive160): self
    {
        $this->hqReceive160 = $hqReceive160;

        return $this;
    }

    public function getHqReceive170(): ?bool
    {
        return $this->hqReceive170;
    }

    public function setHqReceive170(?bool $hqReceive170): self
    {
        $this->hqReceive170 = $hqReceive170;

        return $this;
    }

    public function getHqReceive180(): ?bool
    {
        return $this->hqReceive180;
    }

    public function setHqReceive180(?bool $hqReceive180): self
    {
        $this->hqReceive180 = $hqReceive180;

        return $this;
    }

    public function getHqReceive190(): ?bool
    {
        return $this->hqReceive190;
    }

    public function setHqReceive190(?bool $hqReceive190): self
    {
        $this->hqReceive190 = $hqReceive190;

        return $this;
    }

    public function getHqReceive200(): ?bool
    {
        return $this->hqReceive200;
    }

    public function setHqReceive200(?bool $hqReceive200): self
    {
        $this->hqReceive200 = $hqReceive200;

        return $this;
    }

    public function getHqReceive210(): ?bool
    {
        return $this->hqReceive210;
    }

    public function setHqReceive210(?bool $hqReceive210): self
    {
        $this->hqReceive210 = $hqReceive210;

        return $this;
    }

    public function getHqReceive220(): ?bool
    {
        return $this->hqReceive220;
    }

    public function setHqReceive220(?bool $hqReceive220): self
    {
        $this->hqReceive220 = $hqReceive220;

        return $this;
    }

    public function getHqReceive230(): ?bool
    {
        return $this->hqReceive230;
    }

    public function setHqReceive230(?bool $hqReceive230): self
    {
        $this->hqReceive230 = $hqReceive230;

        return $this;
    }

    public function getHqReceive240(): ?bool
    {
        return $this->hqReceive240;
    }

    public function setHqReceive240(?bool $hqReceive240): self
    {
        $this->hqReceive240 = $hqReceive240;

        return $this;
    }

    public function getHqReceive250(): ?bool
    {
        return $this->hqReceive250;
    }

    public function setHqReceive250(?bool $hqReceive250): self
    {
        $this->hqReceive250 = $hqReceive250;

        return $this;
    }

    public function getHqReceive260(): ?bool
    {
        return $this->hqReceive260;
    }

    public function setHqReceive260(?bool $hqReceive260): self
    {
        $this->hqReceive260 = $hqReceive260;

        return $this;
    }

    public function getHqReceive270(): ?bool
    {
        return $this->hqReceive270;
    }

    public function setHqReceive270(?bool $hqReceive270): self
    {
        $this->hqReceive270 = $hqReceive270;

        return $this;
    }

    public function getHqReceive280(): ?bool
    {
        return $this->hqReceive280;
    }

    public function setHqReceive280(?bool $hqReceive280): self
    {
        $this->hqReceive280 = $hqReceive280;

        return $this;
    }

    public function getHqReceive290(): ?bool
    {
        return $this->hqReceive290;
    }

    public function setHqReceive290(?bool $hqReceive290): self
    {
        $this->hqReceive290 = $hqReceive290;

        return $this;
    }

    public function getHqReceive300(): ?bool
    {
        return $this->hqReceive300;
    }

    public function setHqReceive300(?bool $hqReceive300): self
    {
        $this->hqReceive300 = $hqReceive300;

        return $this;
    }

    public function getHqReceive310(): ?bool
    {
        return $this->hqReceive310;
    }

    public function setHqReceive310(?bool $hqReceive310): self
    {
        $this->hqReceive310 = $hqReceive310;

        return $this;
    }

    public function getHqReceive320(): ?bool
    {
        return $this->hqReceive320;
    }

    public function setHqReceive320(?bool $hqReceive320): self
    {
        $this->hqReceive320 = $hqReceive320;

        return $this;
    }

    public function getHqReceive330(): ?bool
    {
        return $this->hqReceive330;
    }

    public function setHqReceive330(?bool $hqReceive330): self
    {
        $this->hqReceive330 = $hqReceive330;

        return $this;
    }

    public function getHqReceive340(): ?bool
    {
        return $this->hqReceive340;
    }

    public function setHqReceive340(?bool $hqReceive340): self
    {
        $this->hqReceive340 = $hqReceive340;

        return $this;
    }

    public function getHqReceive350(): ?bool
    {
        return $this->hqReceive350;
    }

    public function setHqReceive350(?bool $hqReceive350): self
    {
        $this->hqReceive350 = $hqReceive350;

        return $this;
    }

    public function getHqReceive360(): ?bool
    {
        return $this->hqReceive360;
    }

    public function setHqReceive360(?bool $hqReceive360): self
    {
        $this->hqReceive360 = $hqReceive360;

        return $this;
    }

    public function getHqReceive370(): ?bool
    {
        return $this->hqReceive370;
    }

    public function setHqReceive370(?bool $hqReceive370): self
    {
        $this->hqReceive370 = $hqReceive370;

        return $this;
    }

    public function getHqReceive380(): ?bool
    {
        return $this->hqReceive380;
    }

    public function setHqReceive380(?bool $hqReceive380): self
    {
        $this->hqReceive380 = $hqReceive380;

        return $this;
    }

    public function getHqReceive390(): ?bool
    {
        return $this->hqReceive390;
    }

    public function setHqReceive390(?bool $hqReceive390): self
    {
        $this->hqReceive390 = $hqReceive390;

        return $this;
    }

    public function getHqReceive400(): ?bool
    {
        return $this->hqReceive400;
    }

    public function setHqReceive400(?bool $hqReceive400): self
    {
        $this->hqReceive400 = $hqReceive400;

        return $this;
    }

    public function getHqReceive410(): ?bool
    {
        return $this->hqReceive410;
    }

    public function setHqReceive410(?bool $hqReceive410): self
    {
        $this->hqReceive410 = $hqReceive410;

        return $this;
    }

    public function getHqReceive420(): ?bool
    {
        return $this->hqReceive420;
    }

    public function setHqReceive420(?bool $hqReceive420): self
    {
        $this->hqReceive420 = $hqReceive420;

        return $this;
    }

    public function getHqReceive430(): ?bool
    {
        return $this->hqReceive430;
    }

    public function setHqReceive430(?bool $hqReceive430): self
    {
        $this->hqReceive430 = $hqReceive430;

        return $this;
    }

    public function getHqReceive440(): ?bool
    {
        return $this->hqReceive440;
    }

    public function setHqReceive440(?bool $hqReceive440): self
    {
        $this->hqReceive440 = $hqReceive440;

        return $this;
    }

    public function getHqReceive450(): ?bool
    {
        return $this->hqReceive450;
    }

    public function setHqReceive450(?bool $hqReceive450): self
    {
        $this->hqReceive450 = $hqReceive450;

        return $this;
    }

    public function getHqReceive460(): ?bool
    {
        return $this->hqReceive460;
    }

    public function setHqReceive460(?bool $hqReceive460): self
    {
        $this->hqReceive460 = $hqReceive460;

        return $this;
    }

    public function getHqReceive470(): ?bool
    {
        return $this->hqReceive470;
    }

    public function setHqReceive470(?bool $hqReceive470): self
    {
        $this->hqReceive470 = $hqReceive470;

        return $this;
    }

    public function getHqReceive480(): ?bool
    {
        return $this->hqReceive480;
    }

    public function setHqReceive480(?bool $hqReceive480): self
    {
        $this->hqReceive480 = $hqReceive480;

        return $this;
    }

    public function getHqReceive490(): ?bool
    {
        return $this->hqReceive490;
    }

    public function setHqReceive490(?bool $hqReceive490): self
    {
        $this->hqReceive490 = $hqReceive490;

        return $this;
    }

    public function getHqReceive500(): ?bool
    {
        return $this->hqReceive500;
    }

    public function setHqReceive500(?bool $hqReceive500): self
    {
        $this->hqReceive500 = $hqReceive500;

        return $this;
    }

    public function getHqReceive510(): ?bool
    {
        return $this->hqReceive510;
    }

    public function setHqReceive510(?bool $hqReceive510): self
    {
        $this->hqReceive510 = $hqReceive510;

        return $this;
    }

    public function getHqReceive520(): ?bool
    {
        return $this->hqReceive520;
    }

    public function setHqReceive520(?bool $hqReceive520): self
    {
        $this->hqReceive520 = $hqReceive520;

        return $this;
    }

    public function getHqReceive530(): ?bool
    {
        return $this->hqReceive530;
    }

    public function setHqReceive530(?bool $hqReceive530): self
    {
        $this->hqReceive530 = $hqReceive530;

        return $this;
    }

    public function getHqReceive540(): ?bool
    {
        return $this->hqReceive540;
    }

    public function setHqReceive540(?bool $hqReceive540): self
    {
        $this->hqReceive540 = $hqReceive540;

        return $this;
    }

    public function getHqReceive550(): ?bool
    {
        return $this->hqReceive550;
    }

    public function setHqReceive550(?bool $hqReceive550): self
    {
        $this->hqReceive550 = $hqReceive550;

        return $this;
    }

    public function getHqReceive560(): ?bool
    {
        return $this->hqReceive560;
    }

    public function setHqReceive560(?bool $hqReceive560): self
    {
        $this->hqReceive560 = $hqReceive560;

        return $this;
    }

    public function getHqReceive570(): ?bool
    {
        return $this->hqReceive570;
    }

    public function setHqReceive570(?bool $hqReceive570): self
    {
        $this->hqReceive570 = $hqReceive570;

        return $this;
    }

    public function getHqReceive580(): ?bool
    {
        return $this->hqReceive580;
    }

    public function setHqReceive580(?bool $hqReceive580): self
    {
        $this->hqReceive580 = $hqReceive580;

        return $this;
    }

    public function getHqReceive590(): ?bool
    {
        return $this->hqReceive590;
    }

    public function setHqReceive590(?bool $hqReceive590): self
    {
        $this->hqReceive590 = $hqReceive590;

        return $this;
    }

    public function getCountReceive01(): ?string
    {
        return $this->countReceive01;
    }

    public function setCountReceive01(?string $countReceive01): self
    {
        $this->countReceive01 = $countReceive01;

        return $this;
    }

    public function getCountReceive11(): ?string
    {
        return $this->countReceive11;
    }

    public function setCountReceive11(?string $countReceive11): self
    {
        $this->countReceive11 = $countReceive11;

        return $this;
    }

    public function getCountReceive21(): ?string
    {
        return $this->countReceive21;
    }

    public function setCountReceive21(?string $countReceive21): self
    {
        $this->countReceive21 = $countReceive21;

        return $this;
    }

    public function getCountReceive31(): ?string
    {
        return $this->countReceive31;
    }

    public function setCountReceive31(?string $countReceive31): self
    {
        $this->countReceive31 = $countReceive31;

        return $this;
    }

    public function getCountReceive41(): ?string
    {
        return $this->countReceive41;
    }

    public function setCountReceive41(?string $countReceive41): self
    {
        $this->countReceive41 = $countReceive41;

        return $this;
    }

    public function getCountReceive51(): ?string
    {
        return $this->countReceive51;
    }

    public function setCountReceive51(?string $countReceive51): self
    {
        $this->countReceive51 = $countReceive51;

        return $this;
    }

    public function getCountReceive61(): ?string
    {
        return $this->countReceive61;
    }

    public function setCountReceive61(?string $countReceive61): self
    {
        $this->countReceive61 = $countReceive61;

        return $this;
    }

    public function getCountReceive71(): ?string
    {
        return $this->countReceive71;
    }

    public function setCountReceive71(?string $countReceive71): self
    {
        $this->countReceive71 = $countReceive71;

        return $this;
    }

    public function getCountReceive81(): ?string
    {
        return $this->countReceive81;
    }

    public function setCountReceive81(?string $countReceive81): self
    {
        $this->countReceive81 = $countReceive81;

        return $this;
    }

    public function getCountReceive91(): ?string
    {
        return $this->countReceive91;
    }

    public function setCountReceive91(?string $countReceive91): self
    {
        $this->countReceive91 = $countReceive91;

        return $this;
    }

    public function getCountReceive101(): ?string
    {
        return $this->countReceive101;
    }

    public function setCountReceive101(?string $countReceive101): self
    {
        $this->countReceive101 = $countReceive101;

        return $this;
    }

    public function getCountReceive111(): ?string
    {
        return $this->countReceive111;
    }

    public function setCountReceive111(?string $countReceive111): self
    {
        $this->countReceive111 = $countReceive111;

        return $this;
    }

    public function getCountReceive121(): ?string
    {
        return $this->countReceive121;
    }

    public function setCountReceive121(?string $countReceive121): self
    {
        $this->countReceive121 = $countReceive121;

        return $this;
    }

    public function getCountReceive131(): ?string
    {
        return $this->countReceive131;
    }

    public function setCountReceive131(?string $countReceive131): self
    {
        $this->countReceive131 = $countReceive131;

        return $this;
    }

    public function getCountReceive141(): ?string
    {
        return $this->countReceive141;
    }

    public function setCountReceive141(?string $countReceive141): self
    {
        $this->countReceive141 = $countReceive141;

        return $this;
    }

    public function getCountReceive151(): ?string
    {
        return $this->countReceive151;
    }

    public function setCountReceive151(?string $countReceive151): self
    {
        $this->countReceive151 = $countReceive151;

        return $this;
    }

    public function getCountReceive161(): ?string
    {
        return $this->countReceive161;
    }

    public function setCountReceive161(?string $countReceive161): self
    {
        $this->countReceive161 = $countReceive161;

        return $this;
    }

    public function getCountReceive171(): ?string
    {
        return $this->countReceive171;
    }

    public function setCountReceive171(?string $countReceive171): self
    {
        $this->countReceive171 = $countReceive171;

        return $this;
    }

    public function getCountReceive181(): ?string
    {
        return $this->countReceive181;
    }

    public function setCountReceive181(?string $countReceive181): self
    {
        $this->countReceive181 = $countReceive181;

        return $this;
    }

    public function getCountReceive191(): ?string
    {
        return $this->countReceive191;
    }

    public function setCountReceive191(?string $countReceive191): self
    {
        $this->countReceive191 = $countReceive191;

        return $this;
    }

    public function getCountReceive201(): ?string
    {
        return $this->countReceive201;
    }

    public function setCountReceive201(?string $countReceive201): self
    {
        $this->countReceive201 = $countReceive201;

        return $this;
    }

    public function getCountReceive211(): ?string
    {
        return $this->countReceive211;
    }

    public function setCountReceive211(?string $countReceive211): self
    {
        $this->countReceive211 = $countReceive211;

        return $this;
    }

    public function getCountReceive221(): ?string
    {
        return $this->countReceive221;
    }

    public function setCountReceive221(?string $countReceive221): self
    {
        $this->countReceive221 = $countReceive221;

        return $this;
    }

    public function getCountReceive231(): ?string
    {
        return $this->countReceive231;
    }

    public function setCountReceive231(?string $countReceive231): self
    {
        $this->countReceive231 = $countReceive231;

        return $this;
    }

    public function getCountReceive241(): ?string
    {
        return $this->countReceive241;
    }

    public function setCountReceive241(?string $countReceive241): self
    {
        $this->countReceive241 = $countReceive241;

        return $this;
    }

    public function getCountReceive251(): ?string
    {
        return $this->countReceive251;
    }

    public function setCountReceive251(?string $countReceive251): self
    {
        $this->countReceive251 = $countReceive251;

        return $this;
    }

    public function getCountReceive261(): ?string
    {
        return $this->countReceive261;
    }

    public function setCountReceive261(?string $countReceive261): self
    {
        $this->countReceive261 = $countReceive261;

        return $this;
    }

    public function getCountReceive271(): ?string
    {
        return $this->countReceive271;
    }

    public function setCountReceive271(?string $countReceive271): self
    {
        $this->countReceive271 = $countReceive271;

        return $this;
    }

    public function getCountReceive281(): ?string
    {
        return $this->countReceive281;
    }

    public function setCountReceive281(?string $countReceive281): self
    {
        $this->countReceive281 = $countReceive281;

        return $this;
    }

    public function getCountReceive291(): ?string
    {
        return $this->countReceive291;
    }

    public function setCountReceive291(?string $countReceive291): self
    {
        $this->countReceive291 = $countReceive291;

        return $this;
    }

    public function getCountReceive301(): ?string
    {
        return $this->countReceive301;
    }

    public function setCountReceive301(?string $countReceive301): self
    {
        $this->countReceive301 = $countReceive301;

        return $this;
    }

    public function getCountReceive311(): ?string
    {
        return $this->countReceive311;
    }

    public function setCountReceive311(?string $countReceive311): self
    {
        $this->countReceive311 = $countReceive311;

        return $this;
    }

    public function getCountReceive321(): ?string
    {
        return $this->countReceive321;
    }

    public function setCountReceive321(?string $countReceive321): self
    {
        $this->countReceive321 = $countReceive321;

        return $this;
    }

    public function getCountReceive331(): ?string
    {
        return $this->countReceive331;
    }

    public function setCountReceive331(?string $countReceive331): self
    {
        $this->countReceive331 = $countReceive331;

        return $this;
    }

    public function getCountReceive341(): ?string
    {
        return $this->countReceive341;
    }

    public function setCountReceive341(?string $countReceive341): self
    {
        $this->countReceive341 = $countReceive341;

        return $this;
    }

    public function getCountReceive351(): ?string
    {
        return $this->countReceive351;
    }

    public function setCountReceive351(?string $countReceive351): self
    {
        $this->countReceive351 = $countReceive351;

        return $this;
    }

    public function getCountReceive361(): ?string
    {
        return $this->countReceive361;
    }

    public function setCountReceive361(?string $countReceive361): self
    {
        $this->countReceive361 = $countReceive361;

        return $this;
    }

    public function getCountReceive371(): ?string
    {
        return $this->countReceive371;
    }

    public function setCountReceive371(?string $countReceive371): self
    {
        $this->countReceive371 = $countReceive371;

        return $this;
    }

    public function getCountReceive381(): ?string
    {
        return $this->countReceive381;
    }

    public function setCountReceive381(?string $countReceive381): self
    {
        $this->countReceive381 = $countReceive381;

        return $this;
    }

    public function getCountReceive391(): ?string
    {
        return $this->countReceive391;
    }

    public function setCountReceive391(?string $countReceive391): self
    {
        $this->countReceive391 = $countReceive391;

        return $this;
    }

    public function getCountReceive401(): ?string
    {
        return $this->countReceive401;
    }

    public function setCountReceive401(?string $countReceive401): self
    {
        $this->countReceive401 = $countReceive401;

        return $this;
    }

    public function getCountReceive411(): ?string
    {
        return $this->countReceive411;
    }

    public function setCountReceive411(?string $countReceive411): self
    {
        $this->countReceive411 = $countReceive411;

        return $this;
    }

    public function getCountReceive421(): ?string
    {
        return $this->countReceive421;
    }

    public function setCountReceive421(?string $countReceive421): self
    {
        $this->countReceive421 = $countReceive421;

        return $this;
    }

    public function getCountReceive431(): ?string
    {
        return $this->countReceive431;
    }

    public function setCountReceive431(?string $countReceive431): self
    {
        $this->countReceive431 = $countReceive431;

        return $this;
    }

    public function getCountReceive441(): ?string
    {
        return $this->countReceive441;
    }

    public function setCountReceive441(?string $countReceive441): self
    {
        $this->countReceive441 = $countReceive441;

        return $this;
    }

    public function getCountReceive451(): ?string
    {
        return $this->countReceive451;
    }

    public function setCountReceive451(?string $countReceive451): self
    {
        $this->countReceive451 = $countReceive451;

        return $this;
    }

    public function getCountReceive461(): ?string
    {
        return $this->countReceive461;
    }

    public function setCountReceive461(?string $countReceive461): self
    {
        $this->countReceive461 = $countReceive461;

        return $this;
    }

    public function getCountReceive471(): ?string
    {
        return $this->countReceive471;
    }

    public function setCountReceive471(?string $countReceive471): self
    {
        $this->countReceive471 = $countReceive471;

        return $this;
    }

    public function getCountReceive481(): ?string
    {
        return $this->countReceive481;
    }

    public function setCountReceive481(?string $countReceive481): self
    {
        $this->countReceive481 = $countReceive481;

        return $this;
    }

    public function getCountReceive491(): ?string
    {
        return $this->countReceive491;
    }

    public function setCountReceive491(?string $countReceive491): self
    {
        $this->countReceive491 = $countReceive491;

        return $this;
    }

    public function getCountReceive501(): ?string
    {
        return $this->countReceive501;
    }

    public function setCountReceive501(?string $countReceive501): self
    {
        $this->countReceive501 = $countReceive501;

        return $this;
    }

    public function getCountReceive511(): ?string
    {
        return $this->countReceive511;
    }

    public function setCountReceive511(?string $countReceive511): self
    {
        $this->countReceive511 = $countReceive511;

        return $this;
    }

    public function getCountReceive521(): ?string
    {
        return $this->countReceive521;
    }

    public function setCountReceive521(?string $countReceive521): self
    {
        $this->countReceive521 = $countReceive521;

        return $this;
    }

    public function getCountReceive531(): ?string
    {
        return $this->countReceive531;
    }

    public function setCountReceive531(?string $countReceive531): self
    {
        $this->countReceive531 = $countReceive531;

        return $this;
    }

    public function getCountReceive541(): ?string
    {
        return $this->countReceive541;
    }

    public function setCountReceive541(?string $countReceive541): self
    {
        $this->countReceive541 = $countReceive541;

        return $this;
    }

    public function getCountReceive551(): ?string
    {
        return $this->countReceive551;
    }

    public function setCountReceive551(?string $countReceive551): self
    {
        $this->countReceive551 = $countReceive551;

        return $this;
    }

    public function getCountReceive561(): ?string
    {
        return $this->countReceive561;
    }

    public function setCountReceive561(?string $countReceive561): self
    {
        $this->countReceive561 = $countReceive561;

        return $this;
    }

    public function getCountReceive571(): ?string
    {
        return $this->countReceive571;
    }

    public function setCountReceive571(?string $countReceive571): self
    {
        $this->countReceive571 = $countReceive571;

        return $this;
    }

    public function getCountReceive581(): ?string
    {
        return $this->countReceive581;
    }

    public function setCountReceive581(?string $countReceive581): self
    {
        $this->countReceive581 = $countReceive581;

        return $this;
    }

    public function getCountReceive591(): ?string
    {
        return $this->countReceive591;
    }

    public function setCountReceive591(?string $countReceive591): self
    {
        $this->countReceive591 = $countReceive591;

        return $this;
    }

    public function getHqReceive01(): ?bool
    {
        return $this->hqReceive01;
    }

    public function setHqReceive01(?bool $hqReceive01): self
    {
        $this->hqReceive01 = $hqReceive01;

        return $this;
    }

    public function getHqReceive11(): ?bool
    {
        return $this->hqReceive11;
    }

    public function setHqReceive11(?bool $hqReceive11): self
    {
        $this->hqReceive11 = $hqReceive11;

        return $this;
    }

    public function getHqReceive21(): ?bool
    {
        return $this->hqReceive21;
    }

    public function setHqReceive21(?bool $hqReceive21): self
    {
        $this->hqReceive21 = $hqReceive21;

        return $this;
    }

    public function getHqReceive31(): ?bool
    {
        return $this->hqReceive31;
    }

    public function setHqReceive31(?bool $hqReceive31): self
    {
        $this->hqReceive31 = $hqReceive31;

        return $this;
    }

    public function getHqReceive41(): ?bool
    {
        return $this->hqReceive41;
    }

    public function setHqReceive41(?bool $hqReceive41): self
    {
        $this->hqReceive41 = $hqReceive41;

        return $this;
    }

    public function getHqReceive51(): ?bool
    {
        return $this->hqReceive51;
    }

    public function setHqReceive51(?bool $hqReceive51): self
    {
        $this->hqReceive51 = $hqReceive51;

        return $this;
    }

    public function getHqReceive61(): ?bool
    {
        return $this->hqReceive61;
    }

    public function setHqReceive61(?bool $hqReceive61): self
    {
        $this->hqReceive61 = $hqReceive61;

        return $this;
    }

    public function getHqReceive71(): ?bool
    {
        return $this->hqReceive71;
    }

    public function setHqReceive71(?bool $hqReceive71): self
    {
        $this->hqReceive71 = $hqReceive71;

        return $this;
    }

    public function getHqReceive81(): ?bool
    {
        return $this->hqReceive81;
    }

    public function setHqReceive81(?bool $hqReceive81): self
    {
        $this->hqReceive81 = $hqReceive81;

        return $this;
    }

    public function getHqReceive91(): ?bool
    {
        return $this->hqReceive91;
    }

    public function setHqReceive91(?bool $hqReceive91): self
    {
        $this->hqReceive91 = $hqReceive91;

        return $this;
    }

    public function getHqReceive101(): ?bool
    {
        return $this->hqReceive101;
    }

    public function setHqReceive101(?bool $hqReceive101): self
    {
        $this->hqReceive101 = $hqReceive101;

        return $this;
    }

    public function getHqReceive111(): ?bool
    {
        return $this->hqReceive111;
    }

    public function setHqReceive111(?bool $hqReceive111): self
    {
        $this->hqReceive111 = $hqReceive111;

        return $this;
    }

    public function getHqReceive121(): ?bool
    {
        return $this->hqReceive121;
    }

    public function setHqReceive121(?bool $hqReceive121): self
    {
        $this->hqReceive121 = $hqReceive121;

        return $this;
    }

    public function getHqReceive131(): ?bool
    {
        return $this->hqReceive131;
    }

    public function setHqReceive131(?bool $hqReceive131): self
    {
        $this->hqReceive131 = $hqReceive131;

        return $this;
    }

    public function getHqReceive141(): ?bool
    {
        return $this->hqReceive141;
    }

    public function setHqReceive141(?bool $hqReceive141): self
    {
        $this->hqReceive141 = $hqReceive141;

        return $this;
    }

    public function getHqReceive151(): ?bool
    {
        return $this->hqReceive151;
    }

    public function setHqReceive151(?bool $hqReceive151): self
    {
        $this->hqReceive151 = $hqReceive151;

        return $this;
    }

    public function getHqReceive161(): ?bool
    {
        return $this->hqReceive161;
    }

    public function setHqReceive161(?bool $hqReceive161): self
    {
        $this->hqReceive161 = $hqReceive161;

        return $this;
    }

    public function getHqReceive171(): ?bool
    {
        return $this->hqReceive171;
    }

    public function setHqReceive171(?bool $hqReceive171): self
    {
        $this->hqReceive171 = $hqReceive171;

        return $this;
    }

    public function getHqReceive181(): ?bool
    {
        return $this->hqReceive181;
    }

    public function setHqReceive181(?bool $hqReceive181): self
    {
        $this->hqReceive181 = $hqReceive181;

        return $this;
    }

    public function getHqReceive191(): ?bool
    {
        return $this->hqReceive191;
    }

    public function setHqReceive191(?bool $hqReceive191): self
    {
        $this->hqReceive191 = $hqReceive191;

        return $this;
    }

    public function getHqReceive201(): ?bool
    {
        return $this->hqReceive201;
    }

    public function setHqReceive201(?bool $hqReceive201): self
    {
        $this->hqReceive201 = $hqReceive201;

        return $this;
    }

    public function getHqReceive211(): ?bool
    {
        return $this->hqReceive211;
    }

    public function setHqReceive211(?bool $hqReceive211): self
    {
        $this->hqReceive211 = $hqReceive211;

        return $this;
    }

    public function getHqReceive221(): ?bool
    {
        return $this->hqReceive221;
    }

    public function setHqReceive221(?bool $hqReceive221): self
    {
        $this->hqReceive221 = $hqReceive221;

        return $this;
    }

    public function getHqReceive231(): ?bool
    {
        return $this->hqReceive231;
    }

    public function setHqReceive231(?bool $hqReceive231): self
    {
        $this->hqReceive231 = $hqReceive231;

        return $this;
    }

    public function getHqReceive241(): ?bool
    {
        return $this->hqReceive241;
    }

    public function setHqReceive241(?bool $hqReceive241): self
    {
        $this->hqReceive241 = $hqReceive241;

        return $this;
    }

    public function getHqReceive251(): ?bool
    {
        return $this->hqReceive251;
    }

    public function setHqReceive251(?bool $hqReceive251): self
    {
        $this->hqReceive251 = $hqReceive251;

        return $this;
    }

    public function getHqReceive261(): ?bool
    {
        return $this->hqReceive261;
    }

    public function setHqReceive261(?bool $hqReceive261): self
    {
        $this->hqReceive261 = $hqReceive261;

        return $this;
    }

    public function getHqReceive271(): ?bool
    {
        return $this->hqReceive271;
    }

    public function setHqReceive271(?bool $hqReceive271): self
    {
        $this->hqReceive271 = $hqReceive271;

        return $this;
    }

    public function getHqReceive281(): ?bool
    {
        return $this->hqReceive281;
    }

    public function setHqReceive281(?bool $hqReceive281): self
    {
        $this->hqReceive281 = $hqReceive281;

        return $this;
    }

    public function getHqReceive291(): ?bool
    {
        return $this->hqReceive291;
    }

    public function setHqReceive291(?bool $hqReceive291): self
    {
        $this->hqReceive291 = $hqReceive291;

        return $this;
    }

    public function getHqReceive301(): ?bool
    {
        return $this->hqReceive301;
    }

    public function setHqReceive301(?bool $hqReceive301): self
    {
        $this->hqReceive301 = $hqReceive301;

        return $this;
    }

    public function getHqReceive311(): ?bool
    {
        return $this->hqReceive311;
    }

    public function setHqReceive311(?bool $hqReceive311): self
    {
        $this->hqReceive311 = $hqReceive311;

        return $this;
    }

    public function getHqReceive321(): ?bool
    {
        return $this->hqReceive321;
    }

    public function setHqReceive321(?bool $hqReceive321): self
    {
        $this->hqReceive321 = $hqReceive321;

        return $this;
    }

    public function getHqReceive331(): ?bool
    {
        return $this->hqReceive331;
    }

    public function setHqReceive331(?bool $hqReceive331): self
    {
        $this->hqReceive331 = $hqReceive331;

        return $this;
    }

    public function getHqReceive341(): ?bool
    {
        return $this->hqReceive341;
    }

    public function setHqReceive341(?bool $hqReceive341): self
    {
        $this->hqReceive341 = $hqReceive341;

        return $this;
    }

    public function getHqReceive351(): ?bool
    {
        return $this->hqReceive351;
    }

    public function setHqReceive351(?bool $hqReceive351): self
    {
        $this->hqReceive351 = $hqReceive351;

        return $this;
    }

    public function getHqReceive361(): ?bool
    {
        return $this->hqReceive361;
    }

    public function setHqReceive361(?bool $hqReceive361): self
    {
        $this->hqReceive361 = $hqReceive361;

        return $this;
    }

    public function getHqReceive371(): ?bool
    {
        return $this->hqReceive371;
    }

    public function setHqReceive371(?bool $hqReceive371): self
    {
        $this->hqReceive371 = $hqReceive371;

        return $this;
    }

    public function getHqReceive381(): ?bool
    {
        return $this->hqReceive381;
    }

    public function setHqReceive381(?bool $hqReceive381): self
    {
        $this->hqReceive381 = $hqReceive381;

        return $this;
    }

    public function getHqReceive391(): ?bool
    {
        return $this->hqReceive391;
    }

    public function setHqReceive391(?bool $hqReceive391): self
    {
        $this->hqReceive391 = $hqReceive391;

        return $this;
    }

    public function getHqReceive401(): ?bool
    {
        return $this->hqReceive401;
    }

    public function setHqReceive401(?bool $hqReceive401): self
    {
        $this->hqReceive401 = $hqReceive401;

        return $this;
    }

    public function getHqReceive411(): ?bool
    {
        return $this->hqReceive411;
    }

    public function setHqReceive411(?bool $hqReceive411): self
    {
        $this->hqReceive411 = $hqReceive411;

        return $this;
    }

    public function getHqReceive421(): ?bool
    {
        return $this->hqReceive421;
    }

    public function setHqReceive421(?bool $hqReceive421): self
    {
        $this->hqReceive421 = $hqReceive421;

        return $this;
    }

    public function getHqReceive431(): ?bool
    {
        return $this->hqReceive431;
    }

    public function setHqReceive431(?bool $hqReceive431): self
    {
        $this->hqReceive431 = $hqReceive431;

        return $this;
    }

    public function getHqReceive441(): ?bool
    {
        return $this->hqReceive441;
    }

    public function setHqReceive441(?bool $hqReceive441): self
    {
        $this->hqReceive441 = $hqReceive441;

        return $this;
    }

    public function getHqReceive451(): ?bool
    {
        return $this->hqReceive451;
    }

    public function setHqReceive451(?bool $hqReceive451): self
    {
        $this->hqReceive451 = $hqReceive451;

        return $this;
    }

    public function getHqReceive461(): ?bool
    {
        return $this->hqReceive461;
    }

    public function setHqReceive461(?bool $hqReceive461): self
    {
        $this->hqReceive461 = $hqReceive461;

        return $this;
    }

    public function getHqReceive471(): ?bool
    {
        return $this->hqReceive471;
    }

    public function setHqReceive471(?bool $hqReceive471): self
    {
        $this->hqReceive471 = $hqReceive471;

        return $this;
    }

    public function getHqReceive481(): ?bool
    {
        return $this->hqReceive481;
    }

    public function setHqReceive481(?bool $hqReceive481): self
    {
        $this->hqReceive481 = $hqReceive481;

        return $this;
    }

    public function getHqReceive491(): ?bool
    {
        return $this->hqReceive491;
    }

    public function setHqReceive491(?bool $hqReceive491): self
    {
        $this->hqReceive491 = $hqReceive491;

        return $this;
    }

    public function getHqReceive501(): ?bool
    {
        return $this->hqReceive501;
    }

    public function setHqReceive501(?bool $hqReceive501): self
    {
        $this->hqReceive501 = $hqReceive501;

        return $this;
    }

    public function getHqReceive511(): ?bool
    {
        return $this->hqReceive511;
    }

    public function setHqReceive511(?bool $hqReceive511): self
    {
        $this->hqReceive511 = $hqReceive511;

        return $this;
    }

    public function getHqReceive521(): ?bool
    {
        return $this->hqReceive521;
    }

    public function setHqReceive521(?bool $hqReceive521): self
    {
        $this->hqReceive521 = $hqReceive521;

        return $this;
    }

    public function getHqReceive531(): ?bool
    {
        return $this->hqReceive531;
    }

    public function setHqReceive531(?bool $hqReceive531): self
    {
        $this->hqReceive531 = $hqReceive531;

        return $this;
    }

    public function getHqReceive541(): ?bool
    {
        return $this->hqReceive541;
    }

    public function setHqReceive541(?bool $hqReceive541): self
    {
        $this->hqReceive541 = $hqReceive541;

        return $this;
    }

    public function getHqReceive551(): ?bool
    {
        return $this->hqReceive551;
    }

    public function setHqReceive551(?bool $hqReceive551): self
    {
        $this->hqReceive551 = $hqReceive551;

        return $this;
    }

    public function getHqReceive561(): ?bool
    {
        return $this->hqReceive561;
    }

    public function setHqReceive561(?bool $hqReceive561): self
    {
        $this->hqReceive561 = $hqReceive561;

        return $this;
    }

    public function getHqReceive571(): ?bool
    {
        return $this->hqReceive571;
    }

    public function setHqReceive571(?bool $hqReceive571): self
    {
        $this->hqReceive571 = $hqReceive571;

        return $this;
    }

    public function getHqReceive581(): ?bool
    {
        return $this->hqReceive581;
    }

    public function setHqReceive581(?bool $hqReceive581): self
    {
        $this->hqReceive581 = $hqReceive581;

        return $this;
    }

    public function getHqReceive591(): ?bool
    {
        return $this->hqReceive591;
    }

    public function setHqReceive591(?bool $hqReceive591): self
    {
        $this->hqReceive591 = $hqReceive591;

        return $this;
    }

    public function getCountCost00(): ?string
    {
        return $this->countCost00;
    }

    public function setCountCost00(?string $countCost00): self
    {
        $this->countCost00 = $countCost00;

        return $this;
    }

    public function getCountCost10(): ?string
    {
        return $this->countCost10;
    }

    public function setCountCost10(?string $countCost10): self
    {
        $this->countCost10 = $countCost10;

        return $this;
    }

    public function getCountCost20(): ?string
    {
        return $this->countCost20;
    }

    public function setCountCost20(?string $countCost20): self
    {
        $this->countCost20 = $countCost20;

        return $this;
    }

    public function getCountCost30(): ?string
    {
        return $this->countCost30;
    }

    public function setCountCost30(?string $countCost30): self
    {
        $this->countCost30 = $countCost30;

        return $this;
    }

    public function getCountCost40(): ?string
    {
        return $this->countCost40;
    }

    public function setCountCost40(?string $countCost40): self
    {
        $this->countCost40 = $countCost40;

        return $this;
    }

    public function getCountCost50(): ?string
    {
        return $this->countCost50;
    }

    public function setCountCost50(?string $countCost50): self
    {
        $this->countCost50 = $countCost50;

        return $this;
    }

    public function getCountCost60(): ?string
    {
        return $this->countCost60;
    }

    public function setCountCost60(?string $countCost60): self
    {
        $this->countCost60 = $countCost60;

        return $this;
    }

    public function getCountCost70(): ?string
    {
        return $this->countCost70;
    }

    public function setCountCost70(?string $countCost70): self
    {
        $this->countCost70 = $countCost70;

        return $this;
    }

    public function getCountCost80(): ?string
    {
        return $this->countCost80;
    }

    public function setCountCost80(?string $countCost80): self
    {
        $this->countCost80 = $countCost80;

        return $this;
    }

    public function getCountCost90(): ?string
    {
        return $this->countCost90;
    }

    public function setCountCost90(?string $countCost90): self
    {
        $this->countCost90 = $countCost90;

        return $this;
    }

    public function getCountCost100(): ?string
    {
        return $this->countCost100;
    }

    public function setCountCost100(?string $countCost100): self
    {
        $this->countCost100 = $countCost100;

        return $this;
    }

    public function getCountCost110(): ?string
    {
        return $this->countCost110;
    }

    public function setCountCost110(?string $countCost110): self
    {
        $this->countCost110 = $countCost110;

        return $this;
    }

    public function getCountCost120(): ?string
    {
        return $this->countCost120;
    }

    public function setCountCost120(?string $countCost120): self
    {
        $this->countCost120 = $countCost120;

        return $this;
    }

    public function getCountCost130(): ?string
    {
        return $this->countCost130;
    }

    public function setCountCost130(?string $countCost130): self
    {
        $this->countCost130 = $countCost130;

        return $this;
    }

    public function getCountCost140(): ?string
    {
        return $this->countCost140;
    }

    public function setCountCost140(?string $countCost140): self
    {
        $this->countCost140 = $countCost140;

        return $this;
    }

    public function getCountCost150(): ?string
    {
        return $this->countCost150;
    }

    public function setCountCost150(?string $countCost150): self
    {
        $this->countCost150 = $countCost150;

        return $this;
    }

    public function getCountCost160(): ?string
    {
        return $this->countCost160;
    }

    public function setCountCost160(?string $countCost160): self
    {
        $this->countCost160 = $countCost160;

        return $this;
    }

    public function getCountCost170(): ?string
    {
        return $this->countCost170;
    }

    public function setCountCost170(?string $countCost170): self
    {
        $this->countCost170 = $countCost170;

        return $this;
    }

    public function getCountCost180(): ?string
    {
        return $this->countCost180;
    }

    public function setCountCost180(?string $countCost180): self
    {
        $this->countCost180 = $countCost180;

        return $this;
    }

    public function getCountCost190(): ?string
    {
        return $this->countCost190;
    }

    public function setCountCost190(?string $countCost190): self
    {
        $this->countCost190 = $countCost190;

        return $this;
    }

    public function getCountCost200(): ?string
    {
        return $this->countCost200;
    }

    public function setCountCost200(?string $countCost200): self
    {
        $this->countCost200 = $countCost200;

        return $this;
    }

    public function getCountCost210(): ?string
    {
        return $this->countCost210;
    }

    public function setCountCost210(?string $countCost210): self
    {
        $this->countCost210 = $countCost210;

        return $this;
    }

    public function getCountCost220(): ?string
    {
        return $this->countCost220;
    }

    public function setCountCost220(?string $countCost220): self
    {
        $this->countCost220 = $countCost220;

        return $this;
    }

    public function getCountCost230(): ?string
    {
        return $this->countCost230;
    }

    public function setCountCost230(?string $countCost230): self
    {
        $this->countCost230 = $countCost230;

        return $this;
    }

    public function getCountCost240(): ?string
    {
        return $this->countCost240;
    }

    public function setCountCost240(?string $countCost240): self
    {
        $this->countCost240 = $countCost240;

        return $this;
    }

    public function getCountCost250(): ?string
    {
        return $this->countCost250;
    }

    public function setCountCost250(?string $countCost250): self
    {
        $this->countCost250 = $countCost250;

        return $this;
    }

    public function getCountCost260(): ?string
    {
        return $this->countCost260;
    }

    public function setCountCost260(?string $countCost260): self
    {
        $this->countCost260 = $countCost260;

        return $this;
    }

    public function getCountCost270(): ?string
    {
        return $this->countCost270;
    }

    public function setCountCost270(?string $countCost270): self
    {
        $this->countCost270 = $countCost270;

        return $this;
    }

    public function getCountCost280(): ?string
    {
        return $this->countCost280;
    }

    public function setCountCost280(?string $countCost280): self
    {
        $this->countCost280 = $countCost280;

        return $this;
    }

    public function getCountCost290(): ?string
    {
        return $this->countCost290;
    }

    public function setCountCost290(?string $countCost290): self
    {
        $this->countCost290 = $countCost290;

        return $this;
    }

    public function getCountCost300(): ?string
    {
        return $this->countCost300;
    }

    public function setCountCost300(?string $countCost300): self
    {
        $this->countCost300 = $countCost300;

        return $this;
    }

    public function getCountCost310(): ?string
    {
        return $this->countCost310;
    }

    public function setCountCost310(?string $countCost310): self
    {
        $this->countCost310 = $countCost310;

        return $this;
    }

    public function getCountCost320(): ?string
    {
        return $this->countCost320;
    }

    public function setCountCost320(?string $countCost320): self
    {
        $this->countCost320 = $countCost320;

        return $this;
    }

    public function getCountCost330(): ?string
    {
        return $this->countCost330;
    }

    public function setCountCost330(?string $countCost330): self
    {
        $this->countCost330 = $countCost330;

        return $this;
    }

    public function getCountCost340(): ?string
    {
        return $this->countCost340;
    }

    public function setCountCost340(?string $countCost340): self
    {
        $this->countCost340 = $countCost340;

        return $this;
    }

    public function getCountCost350(): ?string
    {
        return $this->countCost350;
    }

    public function setCountCost350(?string $countCost350): self
    {
        $this->countCost350 = $countCost350;

        return $this;
    }

    public function getCountCost360(): ?string
    {
        return $this->countCost360;
    }

    public function setCountCost360(?string $countCost360): self
    {
        $this->countCost360 = $countCost360;

        return $this;
    }

    public function getCountCost370(): ?string
    {
        return $this->countCost370;
    }

    public function setCountCost370(?string $countCost370): self
    {
        $this->countCost370 = $countCost370;

        return $this;
    }

    public function getCountCost380(): ?string
    {
        return $this->countCost380;
    }

    public function setCountCost380(?string $countCost380): self
    {
        $this->countCost380 = $countCost380;

        return $this;
    }

    public function getCountCost390(): ?string
    {
        return $this->countCost390;
    }

    public function setCountCost390(?string $countCost390): self
    {
        $this->countCost390 = $countCost390;

        return $this;
    }

    public function getCountCost400(): ?string
    {
        return $this->countCost400;
    }

    public function setCountCost400(?string $countCost400): self
    {
        $this->countCost400 = $countCost400;

        return $this;
    }

    public function getCountCost410(): ?string
    {
        return $this->countCost410;
    }

    public function setCountCost410(?string $countCost410): self
    {
        $this->countCost410 = $countCost410;

        return $this;
    }

    public function getCountCost420(): ?string
    {
        return $this->countCost420;
    }

    public function setCountCost420(?string $countCost420): self
    {
        $this->countCost420 = $countCost420;

        return $this;
    }

    public function getCountCost430(): ?string
    {
        return $this->countCost430;
    }

    public function setCountCost430(?string $countCost430): self
    {
        $this->countCost430 = $countCost430;

        return $this;
    }

    public function getCountCost440(): ?string
    {
        return $this->countCost440;
    }

    public function setCountCost440(?string $countCost440): self
    {
        $this->countCost440 = $countCost440;

        return $this;
    }

    public function getCountCost450(): ?string
    {
        return $this->countCost450;
    }

    public function setCountCost450(?string $countCost450): self
    {
        $this->countCost450 = $countCost450;

        return $this;
    }

    public function getCountCost460(): ?string
    {
        return $this->countCost460;
    }

    public function setCountCost460(?string $countCost460): self
    {
        $this->countCost460 = $countCost460;

        return $this;
    }

    public function getCountCost470(): ?string
    {
        return $this->countCost470;
    }

    public function setCountCost470(?string $countCost470): self
    {
        $this->countCost470 = $countCost470;

        return $this;
    }

    public function getCountCost480(): ?string
    {
        return $this->countCost480;
    }

    public function setCountCost480(?string $countCost480): self
    {
        $this->countCost480 = $countCost480;

        return $this;
    }

    public function getCountCost490(): ?string
    {
        return $this->countCost490;
    }

    public function setCountCost490(?string $countCost490): self
    {
        $this->countCost490 = $countCost490;

        return $this;
    }

    public function getCountCost500(): ?string
    {
        return $this->countCost500;
    }

    public function setCountCost500(?string $countCost500): self
    {
        $this->countCost500 = $countCost500;

        return $this;
    }

    public function getCountCost510(): ?string
    {
        return $this->countCost510;
    }

    public function setCountCost510(?string $countCost510): self
    {
        $this->countCost510 = $countCost510;

        return $this;
    }

    public function getCountCost520(): ?string
    {
        return $this->countCost520;
    }

    public function setCountCost520(?string $countCost520): self
    {
        $this->countCost520 = $countCost520;

        return $this;
    }

    public function getCountCost530(): ?string
    {
        return $this->countCost530;
    }

    public function setCountCost530(?string $countCost530): self
    {
        $this->countCost530 = $countCost530;

        return $this;
    }

    public function getCountCost540(): ?string
    {
        return $this->countCost540;
    }

    public function setCountCost540(?string $countCost540): self
    {
        $this->countCost540 = $countCost540;

        return $this;
    }

    public function getCountCost550(): ?string
    {
        return $this->countCost550;
    }

    public function setCountCost550(?string $countCost550): self
    {
        $this->countCost550 = $countCost550;

        return $this;
    }

    public function getCountCost560(): ?string
    {
        return $this->countCost560;
    }

    public function setCountCost560(?string $countCost560): self
    {
        $this->countCost560 = $countCost560;

        return $this;
    }

    public function getCountCost570(): ?string
    {
        return $this->countCost570;
    }

    public function setCountCost570(?string $countCost570): self
    {
        $this->countCost570 = $countCost570;

        return $this;
    }

    public function getCountCost580(): ?string
    {
        return $this->countCost580;
    }

    public function setCountCost580(?string $countCost580): self
    {
        $this->countCost580 = $countCost580;

        return $this;
    }

    public function getCountCost590(): ?string
    {
        return $this->countCost590;
    }

    public function setCountCost590(?string $countCost590): self
    {
        $this->countCost590 = $countCost590;

        return $this;
    }

    public function getHqCost00(): ?int
    {
        return $this->hqCost00;
    }

    public function setHqCost00(?int $hqCost00): self
    {
        $this->hqCost00 = $hqCost00;

        return $this;
    }

    public function getHqCost10(): ?int
    {
        return $this->hqCost10;
    }

    public function setHqCost10(?int $hqCost10): self
    {
        $this->hqCost10 = $hqCost10;

        return $this;
    }

    public function getHqCost20(): ?int
    {
        return $this->hqCost20;
    }

    public function setHqCost20(?int $hqCost20): self
    {
        $this->hqCost20 = $hqCost20;

        return $this;
    }

    public function getHqCost30(): ?int
    {
        return $this->hqCost30;
    }

    public function setHqCost30(?int $hqCost30): self
    {
        $this->hqCost30 = $hqCost30;

        return $this;
    }

    public function getHqCost40(): ?int
    {
        return $this->hqCost40;
    }

    public function setHqCost40(?int $hqCost40): self
    {
        $this->hqCost40 = $hqCost40;

        return $this;
    }

    public function getHqCost50(): ?int
    {
        return $this->hqCost50;
    }

    public function setHqCost50(?int $hqCost50): self
    {
        $this->hqCost50 = $hqCost50;

        return $this;
    }

    public function getHqCost60(): ?int
    {
        return $this->hqCost60;
    }

    public function setHqCost60(?int $hqCost60): self
    {
        $this->hqCost60 = $hqCost60;

        return $this;
    }

    public function getHqCost70(): ?int
    {
        return $this->hqCost70;
    }

    public function setHqCost70(?int $hqCost70): self
    {
        $this->hqCost70 = $hqCost70;

        return $this;
    }

    public function getHqCost80(): ?int
    {
        return $this->hqCost80;
    }

    public function setHqCost80(?int $hqCost80): self
    {
        $this->hqCost80 = $hqCost80;

        return $this;
    }

    public function getHqCost90(): ?int
    {
        return $this->hqCost90;
    }

    public function setHqCost90(?int $hqCost90): self
    {
        $this->hqCost90 = $hqCost90;

        return $this;
    }

    public function getHqCost100(): ?int
    {
        return $this->hqCost100;
    }

    public function setHqCost100(?int $hqCost100): self
    {
        $this->hqCost100 = $hqCost100;

        return $this;
    }

    public function getHqCost110(): ?int
    {
        return $this->hqCost110;
    }

    public function setHqCost110(?int $hqCost110): self
    {
        $this->hqCost110 = $hqCost110;

        return $this;
    }

    public function getHqCost120(): ?int
    {
        return $this->hqCost120;
    }

    public function setHqCost120(?int $hqCost120): self
    {
        $this->hqCost120 = $hqCost120;

        return $this;
    }

    public function getHqCost130(): ?int
    {
        return $this->hqCost130;
    }

    public function setHqCost130(?int $hqCost130): self
    {
        $this->hqCost130 = $hqCost130;

        return $this;
    }

    public function getHqCost140(): ?int
    {
        return $this->hqCost140;
    }

    public function setHqCost140(?int $hqCost140): self
    {
        $this->hqCost140 = $hqCost140;

        return $this;
    }

    public function getHqCost150(): ?int
    {
        return $this->hqCost150;
    }

    public function setHqCost150(?int $hqCost150): self
    {
        $this->hqCost150 = $hqCost150;

        return $this;
    }

    public function getHqCost160(): ?int
    {
        return $this->hqCost160;
    }

    public function setHqCost160(?int $hqCost160): self
    {
        $this->hqCost160 = $hqCost160;

        return $this;
    }

    public function getHqCost170(): ?int
    {
        return $this->hqCost170;
    }

    public function setHqCost170(?int $hqCost170): self
    {
        $this->hqCost170 = $hqCost170;

        return $this;
    }

    public function getHqCost180(): ?int
    {
        return $this->hqCost180;
    }

    public function setHqCost180(?int $hqCost180): self
    {
        $this->hqCost180 = $hqCost180;

        return $this;
    }

    public function getHqCost190(): ?int
    {
        return $this->hqCost190;
    }

    public function setHqCost190(?int $hqCost190): self
    {
        $this->hqCost190 = $hqCost190;

        return $this;
    }

    public function getHqCost200(): ?int
    {
        return $this->hqCost200;
    }

    public function setHqCost200(?int $hqCost200): self
    {
        $this->hqCost200 = $hqCost200;

        return $this;
    }

    public function getHqCost210(): ?int
    {
        return $this->hqCost210;
    }

    public function setHqCost210(?int $hqCost210): self
    {
        $this->hqCost210 = $hqCost210;

        return $this;
    }

    public function getHqCost220(): ?int
    {
        return $this->hqCost220;
    }

    public function setHqCost220(?int $hqCost220): self
    {
        $this->hqCost220 = $hqCost220;

        return $this;
    }

    public function getHqCost230(): ?int
    {
        return $this->hqCost230;
    }

    public function setHqCost230(?int $hqCost230): self
    {
        $this->hqCost230 = $hqCost230;

        return $this;
    }

    public function getHqCost240(): ?int
    {
        return $this->hqCost240;
    }

    public function setHqCost240(?int $hqCost240): self
    {
        $this->hqCost240 = $hqCost240;

        return $this;
    }

    public function getHqCost250(): ?int
    {
        return $this->hqCost250;
    }

    public function setHqCost250(?int $hqCost250): self
    {
        $this->hqCost250 = $hqCost250;

        return $this;
    }

    public function getHqCost260(): ?int
    {
        return $this->hqCost260;
    }

    public function setHqCost260(?int $hqCost260): self
    {
        $this->hqCost260 = $hqCost260;

        return $this;
    }

    public function getHqCost270(): ?int
    {
        return $this->hqCost270;
    }

    public function setHqCost270(?int $hqCost270): self
    {
        $this->hqCost270 = $hqCost270;

        return $this;
    }

    public function getHqCost280(): ?int
    {
        return $this->hqCost280;
    }

    public function setHqCost280(?int $hqCost280): self
    {
        $this->hqCost280 = $hqCost280;

        return $this;
    }

    public function getHqCost290(): ?int
    {
        return $this->hqCost290;
    }

    public function setHqCost290(?int $hqCost290): self
    {
        $this->hqCost290 = $hqCost290;

        return $this;
    }

    public function getHqCost300(): ?int
    {
        return $this->hqCost300;
    }

    public function setHqCost300(?int $hqCost300): self
    {
        $this->hqCost300 = $hqCost300;

        return $this;
    }

    public function getHqCost310(): ?int
    {
        return $this->hqCost310;
    }

    public function setHqCost310(?int $hqCost310): self
    {
        $this->hqCost310 = $hqCost310;

        return $this;
    }

    public function getHqCost320(): ?int
    {
        return $this->hqCost320;
    }

    public function setHqCost320(?int $hqCost320): self
    {
        $this->hqCost320 = $hqCost320;

        return $this;
    }

    public function getHqCost330(): ?int
    {
        return $this->hqCost330;
    }

    public function setHqCost330(?int $hqCost330): self
    {
        $this->hqCost330 = $hqCost330;

        return $this;
    }

    public function getHqCost340(): ?int
    {
        return $this->hqCost340;
    }

    public function setHqCost340(?int $hqCost340): self
    {
        $this->hqCost340 = $hqCost340;

        return $this;
    }

    public function getHqCost350(): ?int
    {
        return $this->hqCost350;
    }

    public function setHqCost350(?int $hqCost350): self
    {
        $this->hqCost350 = $hqCost350;

        return $this;
    }

    public function getHqCost360(): ?int
    {
        return $this->hqCost360;
    }

    public function setHqCost360(?int $hqCost360): self
    {
        $this->hqCost360 = $hqCost360;

        return $this;
    }

    public function getHqCost370(): ?int
    {
        return $this->hqCost370;
    }

    public function setHqCost370(?int $hqCost370): self
    {
        $this->hqCost370 = $hqCost370;

        return $this;
    }

    public function getHqCost380(): ?int
    {
        return $this->hqCost380;
    }

    public function setHqCost380(?int $hqCost380): self
    {
        $this->hqCost380 = $hqCost380;

        return $this;
    }

    public function getHqCost390(): ?int
    {
        return $this->hqCost390;
    }

    public function setHqCost390(?int $hqCost390): self
    {
        $this->hqCost390 = $hqCost390;

        return $this;
    }

    public function getHqCost400(): ?int
    {
        return $this->hqCost400;
    }

    public function setHqCost400(?int $hqCost400): self
    {
        $this->hqCost400 = $hqCost400;

        return $this;
    }

    public function getHqCost410(): ?int
    {
        return $this->hqCost410;
    }

    public function setHqCost410(?int $hqCost410): self
    {
        $this->hqCost410 = $hqCost410;

        return $this;
    }

    public function getHqCost420(): ?int
    {
        return $this->hqCost420;
    }

    public function setHqCost420(?int $hqCost420): self
    {
        $this->hqCost420 = $hqCost420;

        return $this;
    }

    public function getHqCost430(): ?int
    {
        return $this->hqCost430;
    }

    public function setHqCost430(?int $hqCost430): self
    {
        $this->hqCost430 = $hqCost430;

        return $this;
    }

    public function getHqCost440(): ?int
    {
        return $this->hqCost440;
    }

    public function setHqCost440(?int $hqCost440): self
    {
        $this->hqCost440 = $hqCost440;

        return $this;
    }

    public function getHqCost450(): ?int
    {
        return $this->hqCost450;
    }

    public function setHqCost450(?int $hqCost450): self
    {
        $this->hqCost450 = $hqCost450;

        return $this;
    }

    public function getHqCost460(): ?int
    {
        return $this->hqCost460;
    }

    public function setHqCost460(?int $hqCost460): self
    {
        $this->hqCost460 = $hqCost460;

        return $this;
    }

    public function getHqCost470(): ?int
    {
        return $this->hqCost470;
    }

    public function setHqCost470(?int $hqCost470): self
    {
        $this->hqCost470 = $hqCost470;

        return $this;
    }

    public function getHqCost480(): ?int
    {
        return $this->hqCost480;
    }

    public function setHqCost480(?int $hqCost480): self
    {
        $this->hqCost480 = $hqCost480;

        return $this;
    }

    public function getHqCost490(): ?int
    {
        return $this->hqCost490;
    }

    public function setHqCost490(?int $hqCost490): self
    {
        $this->hqCost490 = $hqCost490;

        return $this;
    }

    public function getHqCost500(): ?int
    {
        return $this->hqCost500;
    }

    public function setHqCost500(?int $hqCost500): self
    {
        $this->hqCost500 = $hqCost500;

        return $this;
    }

    public function getHqCost510(): ?int
    {
        return $this->hqCost510;
    }

    public function setHqCost510(?int $hqCost510): self
    {
        $this->hqCost510 = $hqCost510;

        return $this;
    }

    public function getHqCost520(): ?int
    {
        return $this->hqCost520;
    }

    public function setHqCost520(?int $hqCost520): self
    {
        $this->hqCost520 = $hqCost520;

        return $this;
    }

    public function getHqCost530(): ?int
    {
        return $this->hqCost530;
    }

    public function setHqCost530(?int $hqCost530): self
    {
        $this->hqCost530 = $hqCost530;

        return $this;
    }

    public function getHqCost540(): ?int
    {
        return $this->hqCost540;
    }

    public function setHqCost540(?int $hqCost540): self
    {
        $this->hqCost540 = $hqCost540;

        return $this;
    }

    public function getHqCost550(): ?int
    {
        return $this->hqCost550;
    }

    public function setHqCost550(?int $hqCost550): self
    {
        $this->hqCost550 = $hqCost550;

        return $this;
    }

    public function getHqCost560(): ?int
    {
        return $this->hqCost560;
    }

    public function setHqCost560(?int $hqCost560): self
    {
        $this->hqCost560 = $hqCost560;

        return $this;
    }

    public function getHqCost570(): ?int
    {
        return $this->hqCost570;
    }

    public function setHqCost570(?int $hqCost570): self
    {
        $this->hqCost570 = $hqCost570;

        return $this;
    }

    public function getHqCost580(): ?int
    {
        return $this->hqCost580;
    }

    public function setHqCost580(?int $hqCost580): self
    {
        $this->hqCost580 = $hqCost580;

        return $this;
    }

    public function getHqCost590(): ?int
    {
        return $this->hqCost590;
    }

    public function setHqCost590(?int $hqCost590): self
    {
        $this->hqCost590 = $hqCost590;

        return $this;
    }

    public function getCollectabilityRatingCost00(): ?string
    {
        return $this->collectabilityRatingCost00;
    }

    public function setCollectabilityRatingCost00(?string $collectabilityRatingCost00): self
    {
        $this->collectabilityRatingCost00 = $collectabilityRatingCost00;

        return $this;
    }

    public function getCollectabilityRatingCost10(): ?string
    {
        return $this->collectabilityRatingCost10;
    }

    public function setCollectabilityRatingCost10(?string $collectabilityRatingCost10): self
    {
        $this->collectabilityRatingCost10 = $collectabilityRatingCost10;

        return $this;
    }

    public function getCollectabilityRatingCost20(): ?string
    {
        return $this->collectabilityRatingCost20;
    }

    public function setCollectabilityRatingCost20(?string $collectabilityRatingCost20): self
    {
        $this->collectabilityRatingCost20 = $collectabilityRatingCost20;

        return $this;
    }

    public function getCollectabilityRatingCost30(): ?string
    {
        return $this->collectabilityRatingCost30;
    }

    public function setCollectabilityRatingCost30(?string $collectabilityRatingCost30): self
    {
        $this->collectabilityRatingCost30 = $collectabilityRatingCost30;

        return $this;
    }

    public function getCollectabilityRatingCost40(): ?string
    {
        return $this->collectabilityRatingCost40;
    }

    public function setCollectabilityRatingCost40(?string $collectabilityRatingCost40): self
    {
        $this->collectabilityRatingCost40 = $collectabilityRatingCost40;

        return $this;
    }

    public function getCollectabilityRatingCost50(): ?string
    {
        return $this->collectabilityRatingCost50;
    }

    public function setCollectabilityRatingCost50(?string $collectabilityRatingCost50): self
    {
        $this->collectabilityRatingCost50 = $collectabilityRatingCost50;

        return $this;
    }

    public function getCollectabilityRatingCost60(): ?string
    {
        return $this->collectabilityRatingCost60;
    }

    public function setCollectabilityRatingCost60(?string $collectabilityRatingCost60): self
    {
        $this->collectabilityRatingCost60 = $collectabilityRatingCost60;

        return $this;
    }

    public function getCollectabilityRatingCost70(): ?string
    {
        return $this->collectabilityRatingCost70;
    }

    public function setCollectabilityRatingCost70(?string $collectabilityRatingCost70): self
    {
        $this->collectabilityRatingCost70 = $collectabilityRatingCost70;

        return $this;
    }

    public function getCollectabilityRatingCost80(): ?string
    {
        return $this->collectabilityRatingCost80;
    }

    public function setCollectabilityRatingCost80(?string $collectabilityRatingCost80): self
    {
        $this->collectabilityRatingCost80 = $collectabilityRatingCost80;

        return $this;
    }

    public function getCollectabilityRatingCost90(): ?string
    {
        return $this->collectabilityRatingCost90;
    }

    public function setCollectabilityRatingCost90(?string $collectabilityRatingCost90): self
    {
        $this->collectabilityRatingCost90 = $collectabilityRatingCost90;

        return $this;
    }

    public function getCollectabilityRatingCost100(): ?string
    {
        return $this->collectabilityRatingCost100;
    }

    public function setCollectabilityRatingCost100(?string $collectabilityRatingCost100): self
    {
        $this->collectabilityRatingCost100 = $collectabilityRatingCost100;

        return $this;
    }

    public function getCollectabilityRatingCost110(): ?string
    {
        return $this->collectabilityRatingCost110;
    }

    public function setCollectabilityRatingCost110(?string $collectabilityRatingCost110): self
    {
        $this->collectabilityRatingCost110 = $collectabilityRatingCost110;

        return $this;
    }

    public function getCollectabilityRatingCost120(): ?string
    {
        return $this->collectabilityRatingCost120;
    }

    public function setCollectabilityRatingCost120(?string $collectabilityRatingCost120): self
    {
        $this->collectabilityRatingCost120 = $collectabilityRatingCost120;

        return $this;
    }

    public function getCollectabilityRatingCost130(): ?string
    {
        return $this->collectabilityRatingCost130;
    }

    public function setCollectabilityRatingCost130(?string $collectabilityRatingCost130): self
    {
        $this->collectabilityRatingCost130 = $collectabilityRatingCost130;

        return $this;
    }

    public function getCollectabilityRatingCost140(): ?string
    {
        return $this->collectabilityRatingCost140;
    }

    public function setCollectabilityRatingCost140(?string $collectabilityRatingCost140): self
    {
        $this->collectabilityRatingCost140 = $collectabilityRatingCost140;

        return $this;
    }

    public function getCollectabilityRatingCost150(): ?string
    {
        return $this->collectabilityRatingCost150;
    }

    public function setCollectabilityRatingCost150(?string $collectabilityRatingCost150): self
    {
        $this->collectabilityRatingCost150 = $collectabilityRatingCost150;

        return $this;
    }

    public function getCollectabilityRatingCost160(): ?string
    {
        return $this->collectabilityRatingCost160;
    }

    public function setCollectabilityRatingCost160(?string $collectabilityRatingCost160): self
    {
        $this->collectabilityRatingCost160 = $collectabilityRatingCost160;

        return $this;
    }

    public function getCollectabilityRatingCost170(): ?string
    {
        return $this->collectabilityRatingCost170;
    }

    public function setCollectabilityRatingCost170(?string $collectabilityRatingCost170): self
    {
        $this->collectabilityRatingCost170 = $collectabilityRatingCost170;

        return $this;
    }

    public function getCollectabilityRatingCost180(): ?string
    {
        return $this->collectabilityRatingCost180;
    }

    public function setCollectabilityRatingCost180(?string $collectabilityRatingCost180): self
    {
        $this->collectabilityRatingCost180 = $collectabilityRatingCost180;

        return $this;
    }

    public function getCollectabilityRatingCost190(): ?string
    {
        return $this->collectabilityRatingCost190;
    }

    public function setCollectabilityRatingCost190(?string $collectabilityRatingCost190): self
    {
        $this->collectabilityRatingCost190 = $collectabilityRatingCost190;

        return $this;
    }

    public function getCollectabilityRatingCost200(): ?string
    {
        return $this->collectabilityRatingCost200;
    }

    public function setCollectabilityRatingCost200(?string $collectabilityRatingCost200): self
    {
        $this->collectabilityRatingCost200 = $collectabilityRatingCost200;

        return $this;
    }

    public function getCollectabilityRatingCost210(): ?string
    {
        return $this->collectabilityRatingCost210;
    }

    public function setCollectabilityRatingCost210(?string $collectabilityRatingCost210): self
    {
        $this->collectabilityRatingCost210 = $collectabilityRatingCost210;

        return $this;
    }

    public function getCollectabilityRatingCost220(): ?string
    {
        return $this->collectabilityRatingCost220;
    }

    public function setCollectabilityRatingCost220(?string $collectabilityRatingCost220): self
    {
        $this->collectabilityRatingCost220 = $collectabilityRatingCost220;

        return $this;
    }

    public function getCollectabilityRatingCost230(): ?string
    {
        return $this->collectabilityRatingCost230;
    }

    public function setCollectabilityRatingCost230(?string $collectabilityRatingCost230): self
    {
        $this->collectabilityRatingCost230 = $collectabilityRatingCost230;

        return $this;
    }

    public function getCollectabilityRatingCost240(): ?string
    {
        return $this->collectabilityRatingCost240;
    }

    public function setCollectabilityRatingCost240(?string $collectabilityRatingCost240): self
    {
        $this->collectabilityRatingCost240 = $collectabilityRatingCost240;

        return $this;
    }

    public function getCollectabilityRatingCost250(): ?string
    {
        return $this->collectabilityRatingCost250;
    }

    public function setCollectabilityRatingCost250(?string $collectabilityRatingCost250): self
    {
        $this->collectabilityRatingCost250 = $collectabilityRatingCost250;

        return $this;
    }

    public function getCollectabilityRatingCost260(): ?string
    {
        return $this->collectabilityRatingCost260;
    }

    public function setCollectabilityRatingCost260(?string $collectabilityRatingCost260): self
    {
        $this->collectabilityRatingCost260 = $collectabilityRatingCost260;

        return $this;
    }

    public function getCollectabilityRatingCost270(): ?string
    {
        return $this->collectabilityRatingCost270;
    }

    public function setCollectabilityRatingCost270(?string $collectabilityRatingCost270): self
    {
        $this->collectabilityRatingCost270 = $collectabilityRatingCost270;

        return $this;
    }

    public function getCollectabilityRatingCost280(): ?string
    {
        return $this->collectabilityRatingCost280;
    }

    public function setCollectabilityRatingCost280(?string $collectabilityRatingCost280): self
    {
        $this->collectabilityRatingCost280 = $collectabilityRatingCost280;

        return $this;
    }

    public function getCollectabilityRatingCost290(): ?string
    {
        return $this->collectabilityRatingCost290;
    }

    public function setCollectabilityRatingCost290(?string $collectabilityRatingCost290): self
    {
        $this->collectabilityRatingCost290 = $collectabilityRatingCost290;

        return $this;
    }

    public function getCollectabilityRatingCost300(): ?string
    {
        return $this->collectabilityRatingCost300;
    }

    public function setCollectabilityRatingCost300(?string $collectabilityRatingCost300): self
    {
        $this->collectabilityRatingCost300 = $collectabilityRatingCost300;

        return $this;
    }

    public function getCollectabilityRatingCost310(): ?string
    {
        return $this->collectabilityRatingCost310;
    }

    public function setCollectabilityRatingCost310(?string $collectabilityRatingCost310): self
    {
        $this->collectabilityRatingCost310 = $collectabilityRatingCost310;

        return $this;
    }

    public function getCollectabilityRatingCost320(): ?string
    {
        return $this->collectabilityRatingCost320;
    }

    public function setCollectabilityRatingCost320(?string $collectabilityRatingCost320): self
    {
        $this->collectabilityRatingCost320 = $collectabilityRatingCost320;

        return $this;
    }

    public function getCollectabilityRatingCost330(): ?string
    {
        return $this->collectabilityRatingCost330;
    }

    public function setCollectabilityRatingCost330(?string $collectabilityRatingCost330): self
    {
        $this->collectabilityRatingCost330 = $collectabilityRatingCost330;

        return $this;
    }

    public function getCollectabilityRatingCost340(): ?string
    {
        return $this->collectabilityRatingCost340;
    }

    public function setCollectabilityRatingCost340(?string $collectabilityRatingCost340): self
    {
        $this->collectabilityRatingCost340 = $collectabilityRatingCost340;

        return $this;
    }

    public function getCollectabilityRatingCost350(): ?string
    {
        return $this->collectabilityRatingCost350;
    }

    public function setCollectabilityRatingCost350(?string $collectabilityRatingCost350): self
    {
        $this->collectabilityRatingCost350 = $collectabilityRatingCost350;

        return $this;
    }

    public function getCollectabilityRatingCost360(): ?string
    {
        return $this->collectabilityRatingCost360;
    }

    public function setCollectabilityRatingCost360(?string $collectabilityRatingCost360): self
    {
        $this->collectabilityRatingCost360 = $collectabilityRatingCost360;

        return $this;
    }

    public function getCollectabilityRatingCost370(): ?string
    {
        return $this->collectabilityRatingCost370;
    }

    public function setCollectabilityRatingCost370(?string $collectabilityRatingCost370): self
    {
        $this->collectabilityRatingCost370 = $collectabilityRatingCost370;

        return $this;
    }

    public function getCollectabilityRatingCost380(): ?string
    {
        return $this->collectabilityRatingCost380;
    }

    public function setCollectabilityRatingCost380(?string $collectabilityRatingCost380): self
    {
        $this->collectabilityRatingCost380 = $collectabilityRatingCost380;

        return $this;
    }

    public function getCollectabilityRatingCost390(): ?string
    {
        return $this->collectabilityRatingCost390;
    }

    public function setCollectabilityRatingCost390(?string $collectabilityRatingCost390): self
    {
        $this->collectabilityRatingCost390 = $collectabilityRatingCost390;

        return $this;
    }

    public function getCollectabilityRatingCost400(): ?string
    {
        return $this->collectabilityRatingCost400;
    }

    public function setCollectabilityRatingCost400(?string $collectabilityRatingCost400): self
    {
        $this->collectabilityRatingCost400 = $collectabilityRatingCost400;

        return $this;
    }

    public function getCollectabilityRatingCost410(): ?string
    {
        return $this->collectabilityRatingCost410;
    }

    public function setCollectabilityRatingCost410(?string $collectabilityRatingCost410): self
    {
        $this->collectabilityRatingCost410 = $collectabilityRatingCost410;

        return $this;
    }

    public function getCollectabilityRatingCost420(): ?string
    {
        return $this->collectabilityRatingCost420;
    }

    public function setCollectabilityRatingCost420(?string $collectabilityRatingCost420): self
    {
        $this->collectabilityRatingCost420 = $collectabilityRatingCost420;

        return $this;
    }

    public function getCollectabilityRatingCost430(): ?string
    {
        return $this->collectabilityRatingCost430;
    }

    public function setCollectabilityRatingCost430(?string $collectabilityRatingCost430): self
    {
        $this->collectabilityRatingCost430 = $collectabilityRatingCost430;

        return $this;
    }

    public function getCollectabilityRatingCost440(): ?string
    {
        return $this->collectabilityRatingCost440;
    }

    public function setCollectabilityRatingCost440(?string $collectabilityRatingCost440): self
    {
        $this->collectabilityRatingCost440 = $collectabilityRatingCost440;

        return $this;
    }

    public function getCollectabilityRatingCost450(): ?string
    {
        return $this->collectabilityRatingCost450;
    }

    public function setCollectabilityRatingCost450(?string $collectabilityRatingCost450): self
    {
        $this->collectabilityRatingCost450 = $collectabilityRatingCost450;

        return $this;
    }

    public function getCollectabilityRatingCost460(): ?string
    {
        return $this->collectabilityRatingCost460;
    }

    public function setCollectabilityRatingCost460(?string $collectabilityRatingCost460): self
    {
        $this->collectabilityRatingCost460 = $collectabilityRatingCost460;

        return $this;
    }

    public function getCollectabilityRatingCost470(): ?string
    {
        return $this->collectabilityRatingCost470;
    }

    public function setCollectabilityRatingCost470(?string $collectabilityRatingCost470): self
    {
        $this->collectabilityRatingCost470 = $collectabilityRatingCost470;

        return $this;
    }

    public function getCollectabilityRatingCost480(): ?string
    {
        return $this->collectabilityRatingCost480;
    }

    public function setCollectabilityRatingCost480(?string $collectabilityRatingCost480): self
    {
        $this->collectabilityRatingCost480 = $collectabilityRatingCost480;

        return $this;
    }

    public function getCollectabilityRatingCost490(): ?string
    {
        return $this->collectabilityRatingCost490;
    }

    public function setCollectabilityRatingCost490(?string $collectabilityRatingCost490): self
    {
        $this->collectabilityRatingCost490 = $collectabilityRatingCost490;

        return $this;
    }

    public function getCollectabilityRatingCost500(): ?string
    {
        return $this->collectabilityRatingCost500;
    }

    public function setCollectabilityRatingCost500(?string $collectabilityRatingCost500): self
    {
        $this->collectabilityRatingCost500 = $collectabilityRatingCost500;

        return $this;
    }

    public function getCollectabilityRatingCost510(): ?string
    {
        return $this->collectabilityRatingCost510;
    }

    public function setCollectabilityRatingCost510(?string $collectabilityRatingCost510): self
    {
        $this->collectabilityRatingCost510 = $collectabilityRatingCost510;

        return $this;
    }

    public function getCollectabilityRatingCost520(): ?string
    {
        return $this->collectabilityRatingCost520;
    }

    public function setCollectabilityRatingCost520(?string $collectabilityRatingCost520): self
    {
        $this->collectabilityRatingCost520 = $collectabilityRatingCost520;

        return $this;
    }

    public function getCollectabilityRatingCost530(): ?string
    {
        return $this->collectabilityRatingCost530;
    }

    public function setCollectabilityRatingCost530(?string $collectabilityRatingCost530): self
    {
        $this->collectabilityRatingCost530 = $collectabilityRatingCost530;

        return $this;
    }

    public function getCollectabilityRatingCost540(): ?string
    {
        return $this->collectabilityRatingCost540;
    }

    public function setCollectabilityRatingCost540(?string $collectabilityRatingCost540): self
    {
        $this->collectabilityRatingCost540 = $collectabilityRatingCost540;

        return $this;
    }

    public function getCollectabilityRatingCost550(): ?string
    {
        return $this->collectabilityRatingCost550;
    }

    public function setCollectabilityRatingCost550(?string $collectabilityRatingCost550): self
    {
        $this->collectabilityRatingCost550 = $collectabilityRatingCost550;

        return $this;
    }

    public function getCollectabilityRatingCost560(): ?string
    {
        return $this->collectabilityRatingCost560;
    }

    public function setCollectabilityRatingCost560(?string $collectabilityRatingCost560): self
    {
        $this->collectabilityRatingCost560 = $collectabilityRatingCost560;

        return $this;
    }

    public function getCollectabilityRatingCost570(): ?string
    {
        return $this->collectabilityRatingCost570;
    }

    public function setCollectabilityRatingCost570(?string $collectabilityRatingCost570): self
    {
        $this->collectabilityRatingCost570 = $collectabilityRatingCost570;

        return $this;
    }

    public function getCollectabilityRatingCost580(): ?string
    {
        return $this->collectabilityRatingCost580;
    }

    public function setCollectabilityRatingCost580(?string $collectabilityRatingCost580): self
    {
        $this->collectabilityRatingCost580 = $collectabilityRatingCost580;

        return $this;
    }

    public function getCollectabilityRatingCost590(): ?string
    {
        return $this->collectabilityRatingCost590;
    }

    public function setCollectabilityRatingCost590(?string $collectabilityRatingCost590): self
    {
        $this->collectabilityRatingCost590 = $collectabilityRatingCost590;

        return $this;
    }

    public function getCountCost01(): ?string
    {
        return $this->countCost01;
    }

    public function setCountCost01(?string $countCost01): self
    {
        $this->countCost01 = $countCost01;

        return $this;
    }

    public function getCountCost11(): ?string
    {
        return $this->countCost11;
    }

    public function setCountCost11(?string $countCost11): self
    {
        $this->countCost11 = $countCost11;

        return $this;
    }

    public function getCountCost21(): ?string
    {
        return $this->countCost21;
    }

    public function setCountCost21(?string $countCost21): self
    {
        $this->countCost21 = $countCost21;

        return $this;
    }

    public function getCountCost31(): ?string
    {
        return $this->countCost31;
    }

    public function setCountCost31(?string $countCost31): self
    {
        $this->countCost31 = $countCost31;

        return $this;
    }

    public function getCountCost41(): ?string
    {
        return $this->countCost41;
    }

    public function setCountCost41(?string $countCost41): self
    {
        $this->countCost41 = $countCost41;

        return $this;
    }

    public function getCountCost51(): ?string
    {
        return $this->countCost51;
    }

    public function setCountCost51(?string $countCost51): self
    {
        $this->countCost51 = $countCost51;

        return $this;
    }

    public function getCountCost61(): ?string
    {
        return $this->countCost61;
    }

    public function setCountCost61(?string $countCost61): self
    {
        $this->countCost61 = $countCost61;

        return $this;
    }

    public function getCountCost71(): ?string
    {
        return $this->countCost71;
    }

    public function setCountCost71(?string $countCost71): self
    {
        $this->countCost71 = $countCost71;

        return $this;
    }

    public function getCountCost81(): ?string
    {
        return $this->countCost81;
    }

    public function setCountCost81(?string $countCost81): self
    {
        $this->countCost81 = $countCost81;

        return $this;
    }

    public function getCountCost91(): ?string
    {
        return $this->countCost91;
    }

    public function setCountCost91(?string $countCost91): self
    {
        $this->countCost91 = $countCost91;

        return $this;
    }

    public function getCountCost101(): ?string
    {
        return $this->countCost101;
    }

    public function setCountCost101(?string $countCost101): self
    {
        $this->countCost101 = $countCost101;

        return $this;
    }

    public function getCountCost111(): ?string
    {
        return $this->countCost111;
    }

    public function setCountCost111(?string $countCost111): self
    {
        $this->countCost111 = $countCost111;

        return $this;
    }

    public function getCountCost121(): ?string
    {
        return $this->countCost121;
    }

    public function setCountCost121(?string $countCost121): self
    {
        $this->countCost121 = $countCost121;

        return $this;
    }

    public function getCountCost131(): ?string
    {
        return $this->countCost131;
    }

    public function setCountCost131(?string $countCost131): self
    {
        $this->countCost131 = $countCost131;

        return $this;
    }

    public function getCountCost141(): ?string
    {
        return $this->countCost141;
    }

    public function setCountCost141(?string $countCost141): self
    {
        $this->countCost141 = $countCost141;

        return $this;
    }

    public function getCountCost151(): ?string
    {
        return $this->countCost151;
    }

    public function setCountCost151(?string $countCost151): self
    {
        $this->countCost151 = $countCost151;

        return $this;
    }

    public function getCountCost161(): ?string
    {
        return $this->countCost161;
    }

    public function setCountCost161(?string $countCost161): self
    {
        $this->countCost161 = $countCost161;

        return $this;
    }

    public function getCountCost171(): ?string
    {
        return $this->countCost171;
    }

    public function setCountCost171(?string $countCost171): self
    {
        $this->countCost171 = $countCost171;

        return $this;
    }

    public function getCountCost181(): ?string
    {
        return $this->countCost181;
    }

    public function setCountCost181(?string $countCost181): self
    {
        $this->countCost181 = $countCost181;

        return $this;
    }

    public function getCountCost191(): ?string
    {
        return $this->countCost191;
    }

    public function setCountCost191(?string $countCost191): self
    {
        $this->countCost191 = $countCost191;

        return $this;
    }

    public function getCountCost201(): ?string
    {
        return $this->countCost201;
    }

    public function setCountCost201(?string $countCost201): self
    {
        $this->countCost201 = $countCost201;

        return $this;
    }

    public function getCountCost211(): ?string
    {
        return $this->countCost211;
    }

    public function setCountCost211(?string $countCost211): self
    {
        $this->countCost211 = $countCost211;

        return $this;
    }

    public function getCountCost221(): ?string
    {
        return $this->countCost221;
    }

    public function setCountCost221(?string $countCost221): self
    {
        $this->countCost221 = $countCost221;

        return $this;
    }

    public function getCountCost231(): ?string
    {
        return $this->countCost231;
    }

    public function setCountCost231(?string $countCost231): self
    {
        $this->countCost231 = $countCost231;

        return $this;
    }

    public function getCountCost241(): ?string
    {
        return $this->countCost241;
    }

    public function setCountCost241(?string $countCost241): self
    {
        $this->countCost241 = $countCost241;

        return $this;
    }

    public function getCountCost251(): ?string
    {
        return $this->countCost251;
    }

    public function setCountCost251(?string $countCost251): self
    {
        $this->countCost251 = $countCost251;

        return $this;
    }

    public function getCountCost261(): ?string
    {
        return $this->countCost261;
    }

    public function setCountCost261(?string $countCost261): self
    {
        $this->countCost261 = $countCost261;

        return $this;
    }

    public function getCountCost271(): ?string
    {
        return $this->countCost271;
    }

    public function setCountCost271(?string $countCost271): self
    {
        $this->countCost271 = $countCost271;

        return $this;
    }

    public function getCountCost281(): ?string
    {
        return $this->countCost281;
    }

    public function setCountCost281(?string $countCost281): self
    {
        $this->countCost281 = $countCost281;

        return $this;
    }

    public function getCountCost291(): ?string
    {
        return $this->countCost291;
    }

    public function setCountCost291(?string $countCost291): self
    {
        $this->countCost291 = $countCost291;

        return $this;
    }

    public function getCountCost301(): ?string
    {
        return $this->countCost301;
    }

    public function setCountCost301(?string $countCost301): self
    {
        $this->countCost301 = $countCost301;

        return $this;
    }

    public function getCountCost311(): ?string
    {
        return $this->countCost311;
    }

    public function setCountCost311(?string $countCost311): self
    {
        $this->countCost311 = $countCost311;

        return $this;
    }

    public function getCountCost321(): ?string
    {
        return $this->countCost321;
    }

    public function setCountCost321(?string $countCost321): self
    {
        $this->countCost321 = $countCost321;

        return $this;
    }

    public function getCountCost331(): ?string
    {
        return $this->countCost331;
    }

    public function setCountCost331(?string $countCost331): self
    {
        $this->countCost331 = $countCost331;

        return $this;
    }

    public function getCountCost341(): ?string
    {
        return $this->countCost341;
    }

    public function setCountCost341(?string $countCost341): self
    {
        $this->countCost341 = $countCost341;

        return $this;
    }

    public function getCountCost351(): ?string
    {
        return $this->countCost351;
    }

    public function setCountCost351(?string $countCost351): self
    {
        $this->countCost351 = $countCost351;

        return $this;
    }

    public function getCountCost361(): ?string
    {
        return $this->countCost361;
    }

    public function setCountCost361(?string $countCost361): self
    {
        $this->countCost361 = $countCost361;

        return $this;
    }

    public function getCountCost371(): ?string
    {
        return $this->countCost371;
    }

    public function setCountCost371(?string $countCost371): self
    {
        $this->countCost371 = $countCost371;

        return $this;
    }

    public function getCountCost381(): ?string
    {
        return $this->countCost381;
    }

    public function setCountCost381(?string $countCost381): self
    {
        $this->countCost381 = $countCost381;

        return $this;
    }

    public function getCountCost391(): ?string
    {
        return $this->countCost391;
    }

    public function setCountCost391(?string $countCost391): self
    {
        $this->countCost391 = $countCost391;

        return $this;
    }

    public function getCountCost401(): ?string
    {
        return $this->countCost401;
    }

    public function setCountCost401(?string $countCost401): self
    {
        $this->countCost401 = $countCost401;

        return $this;
    }

    public function getCountCost411(): ?string
    {
        return $this->countCost411;
    }

    public function setCountCost411(?string $countCost411): self
    {
        $this->countCost411 = $countCost411;

        return $this;
    }

    public function getCountCost421(): ?string
    {
        return $this->countCost421;
    }

    public function setCountCost421(?string $countCost421): self
    {
        $this->countCost421 = $countCost421;

        return $this;
    }

    public function getCountCost431(): ?string
    {
        return $this->countCost431;
    }

    public function setCountCost431(?string $countCost431): self
    {
        $this->countCost431 = $countCost431;

        return $this;
    }

    public function getCountCost441(): ?string
    {
        return $this->countCost441;
    }

    public function setCountCost441(?string $countCost441): self
    {
        $this->countCost441 = $countCost441;

        return $this;
    }

    public function getCountCost451(): ?string
    {
        return $this->countCost451;
    }

    public function setCountCost451(?string $countCost451): self
    {
        $this->countCost451 = $countCost451;

        return $this;
    }

    public function getCountCost461(): ?string
    {
        return $this->countCost461;
    }

    public function setCountCost461(?string $countCost461): self
    {
        $this->countCost461 = $countCost461;

        return $this;
    }

    public function getCountCost471(): ?string
    {
        return $this->countCost471;
    }

    public function setCountCost471(?string $countCost471): self
    {
        $this->countCost471 = $countCost471;

        return $this;
    }

    public function getCountCost481(): ?string
    {
        return $this->countCost481;
    }

    public function setCountCost481(?string $countCost481): self
    {
        $this->countCost481 = $countCost481;

        return $this;
    }

    public function getCountCost491(): ?string
    {
        return $this->countCost491;
    }

    public function setCountCost491(?string $countCost491): self
    {
        $this->countCost491 = $countCost491;

        return $this;
    }

    public function getCountCost501(): ?string
    {
        return $this->countCost501;
    }

    public function setCountCost501(?string $countCost501): self
    {
        $this->countCost501 = $countCost501;

        return $this;
    }

    public function getCountCost511(): ?string
    {
        return $this->countCost511;
    }

    public function setCountCost511(?string $countCost511): self
    {
        $this->countCost511 = $countCost511;

        return $this;
    }

    public function getCountCost521(): ?string
    {
        return $this->countCost521;
    }

    public function setCountCost521(?string $countCost521): self
    {
        $this->countCost521 = $countCost521;

        return $this;
    }

    public function getCountCost531(): ?string
    {
        return $this->countCost531;
    }

    public function setCountCost531(?string $countCost531): self
    {
        $this->countCost531 = $countCost531;

        return $this;
    }

    public function getCountCost541(): ?string
    {
        return $this->countCost541;
    }

    public function setCountCost541(?string $countCost541): self
    {
        $this->countCost541 = $countCost541;

        return $this;
    }

    public function getCountCost551(): ?string
    {
        return $this->countCost551;
    }

    public function setCountCost551(?string $countCost551): self
    {
        $this->countCost551 = $countCost551;

        return $this;
    }

    public function getCountCost561(): ?string
    {
        return $this->countCost561;
    }

    public function setCountCost561(?string $countCost561): self
    {
        $this->countCost561 = $countCost561;

        return $this;
    }

    public function getCountCost571(): ?string
    {
        return $this->countCost571;
    }

    public function setCountCost571(?string $countCost571): self
    {
        $this->countCost571 = $countCost571;

        return $this;
    }

    public function getCountCost581(): ?string
    {
        return $this->countCost581;
    }

    public function setCountCost581(?string $countCost581): self
    {
        $this->countCost581 = $countCost581;

        return $this;
    }

    public function getCountCost591(): ?string
    {
        return $this->countCost591;
    }

    public function setCountCost591(?string $countCost591): self
    {
        $this->countCost591 = $countCost591;

        return $this;
    }

    public function getHqCost01(): ?int
    {
        return $this->hqCost01;
    }

    public function setHqCost01(?int $hqCost01): self
    {
        $this->hqCost01 = $hqCost01;

        return $this;
    }

    public function getHqCost11(): ?int
    {
        return $this->hqCost11;
    }

    public function setHqCost11(?int $hqCost11): self
    {
        $this->hqCost11 = $hqCost11;

        return $this;
    }

    public function getHqCost21(): ?int
    {
        return $this->hqCost21;
    }

    public function setHqCost21(?int $hqCost21): self
    {
        $this->hqCost21 = $hqCost21;

        return $this;
    }

    public function getHqCost31(): ?int
    {
        return $this->hqCost31;
    }

    public function setHqCost31(?int $hqCost31): self
    {
        $this->hqCost31 = $hqCost31;

        return $this;
    }

    public function getHqCost41(): ?int
    {
        return $this->hqCost41;
    }

    public function setHqCost41(?int $hqCost41): self
    {
        $this->hqCost41 = $hqCost41;

        return $this;
    }

    public function getHqCost51(): ?int
    {
        return $this->hqCost51;
    }

    public function setHqCost51(?int $hqCost51): self
    {
        $this->hqCost51 = $hqCost51;

        return $this;
    }

    public function getHqCost61(): ?int
    {
        return $this->hqCost61;
    }

    public function setHqCost61(?int $hqCost61): self
    {
        $this->hqCost61 = $hqCost61;

        return $this;
    }

    public function getHqCost71(): ?int
    {
        return $this->hqCost71;
    }

    public function setHqCost71(?int $hqCost71): self
    {
        $this->hqCost71 = $hqCost71;

        return $this;
    }

    public function getHqCost81(): ?int
    {
        return $this->hqCost81;
    }

    public function setHqCost81(?int $hqCost81): self
    {
        $this->hqCost81 = $hqCost81;

        return $this;
    }

    public function getHqCost91(): ?int
    {
        return $this->hqCost91;
    }

    public function setHqCost91(?int $hqCost91): self
    {
        $this->hqCost91 = $hqCost91;

        return $this;
    }

    public function getHqCost101(): ?int
    {
        return $this->hqCost101;
    }

    public function setHqCost101(?int $hqCost101): self
    {
        $this->hqCost101 = $hqCost101;

        return $this;
    }

    public function getHqCost111(): ?int
    {
        return $this->hqCost111;
    }

    public function setHqCost111(?int $hqCost111): self
    {
        $this->hqCost111 = $hqCost111;

        return $this;
    }

    public function getHqCost121(): ?int
    {
        return $this->hqCost121;
    }

    public function setHqCost121(?int $hqCost121): self
    {
        $this->hqCost121 = $hqCost121;

        return $this;
    }

    public function getHqCost131(): ?int
    {
        return $this->hqCost131;
    }

    public function setHqCost131(?int $hqCost131): self
    {
        $this->hqCost131 = $hqCost131;

        return $this;
    }

    public function getHqCost141(): ?int
    {
        return $this->hqCost141;
    }

    public function setHqCost141(?int $hqCost141): self
    {
        $this->hqCost141 = $hqCost141;

        return $this;
    }

    public function getHqCost151(): ?int
    {
        return $this->hqCost151;
    }

    public function setHqCost151(?int $hqCost151): self
    {
        $this->hqCost151 = $hqCost151;

        return $this;
    }

    public function getHqCost161(): ?int
    {
        return $this->hqCost161;
    }

    public function setHqCost161(?int $hqCost161): self
    {
        $this->hqCost161 = $hqCost161;

        return $this;
    }

    public function getHqCost171(): ?int
    {
        return $this->hqCost171;
    }

    public function setHqCost171(?int $hqCost171): self
    {
        $this->hqCost171 = $hqCost171;

        return $this;
    }

    public function getHqCost181(): ?int
    {
        return $this->hqCost181;
    }

    public function setHqCost181(?int $hqCost181): self
    {
        $this->hqCost181 = $hqCost181;

        return $this;
    }

    public function getHqCost191(): ?int
    {
        return $this->hqCost191;
    }

    public function setHqCost191(?int $hqCost191): self
    {
        $this->hqCost191 = $hqCost191;

        return $this;
    }

    public function getHqCost201(): ?int
    {
        return $this->hqCost201;
    }

    public function setHqCost201(?int $hqCost201): self
    {
        $this->hqCost201 = $hqCost201;

        return $this;
    }

    public function getHqCost211(): ?int
    {
        return $this->hqCost211;
    }

    public function setHqCost211(?int $hqCost211): self
    {
        $this->hqCost211 = $hqCost211;

        return $this;
    }

    public function getHqCost221(): ?int
    {
        return $this->hqCost221;
    }

    public function setHqCost221(?int $hqCost221): self
    {
        $this->hqCost221 = $hqCost221;

        return $this;
    }

    public function getHqCost231(): ?int
    {
        return $this->hqCost231;
    }

    public function setHqCost231(?int $hqCost231): self
    {
        $this->hqCost231 = $hqCost231;

        return $this;
    }

    public function getHqCost241(): ?int
    {
        return $this->hqCost241;
    }

    public function setHqCost241(?int $hqCost241): self
    {
        $this->hqCost241 = $hqCost241;

        return $this;
    }

    public function getHqCost251(): ?int
    {
        return $this->hqCost251;
    }

    public function setHqCost251(?int $hqCost251): self
    {
        $this->hqCost251 = $hqCost251;

        return $this;
    }

    public function getHqCost261(): ?int
    {
        return $this->hqCost261;
    }

    public function setHqCost261(?int $hqCost261): self
    {
        $this->hqCost261 = $hqCost261;

        return $this;
    }

    public function getHqCost271(): ?int
    {
        return $this->hqCost271;
    }

    public function setHqCost271(?int $hqCost271): self
    {
        $this->hqCost271 = $hqCost271;

        return $this;
    }

    public function getHqCost281(): ?int
    {
        return $this->hqCost281;
    }

    public function setHqCost281(?int $hqCost281): self
    {
        $this->hqCost281 = $hqCost281;

        return $this;
    }

    public function getHqCost291(): ?int
    {
        return $this->hqCost291;
    }

    public function setHqCost291(?int $hqCost291): self
    {
        $this->hqCost291 = $hqCost291;

        return $this;
    }

    public function getHqCost301(): ?int
    {
        return $this->hqCost301;
    }

    public function setHqCost301(?int $hqCost301): self
    {
        $this->hqCost301 = $hqCost301;

        return $this;
    }

    public function getHqCost311(): ?int
    {
        return $this->hqCost311;
    }

    public function setHqCost311(?int $hqCost311): self
    {
        $this->hqCost311 = $hqCost311;

        return $this;
    }

    public function getHqCost321(): ?int
    {
        return $this->hqCost321;
    }

    public function setHqCost321(?int $hqCost321): self
    {
        $this->hqCost321 = $hqCost321;

        return $this;
    }

    public function getHqCost331(): ?int
    {
        return $this->hqCost331;
    }

    public function setHqCost331(?int $hqCost331): self
    {
        $this->hqCost331 = $hqCost331;

        return $this;
    }

    public function getHqCost341(): ?int
    {
        return $this->hqCost341;
    }

    public function setHqCost341(?int $hqCost341): self
    {
        $this->hqCost341 = $hqCost341;

        return $this;
    }

    public function getHqCost351(): ?int
    {
        return $this->hqCost351;
    }

    public function setHqCost351(?int $hqCost351): self
    {
        $this->hqCost351 = $hqCost351;

        return $this;
    }

    public function getHqCost361(): ?int
    {
        return $this->hqCost361;
    }

    public function setHqCost361(?int $hqCost361): self
    {
        $this->hqCost361 = $hqCost361;

        return $this;
    }

    public function getHqCost371(): ?int
    {
        return $this->hqCost371;
    }

    public function setHqCost371(?int $hqCost371): self
    {
        $this->hqCost371 = $hqCost371;

        return $this;
    }

    public function getHqCost381(): ?int
    {
        return $this->hqCost381;
    }

    public function setHqCost381(?int $hqCost381): self
    {
        $this->hqCost381 = $hqCost381;

        return $this;
    }

    public function getHqCost391(): ?int
    {
        return $this->hqCost391;
    }

    public function setHqCost391(?int $hqCost391): self
    {
        $this->hqCost391 = $hqCost391;

        return $this;
    }

    public function getHqCost401(): ?int
    {
        return $this->hqCost401;
    }

    public function setHqCost401(?int $hqCost401): self
    {
        $this->hqCost401 = $hqCost401;

        return $this;
    }

    public function getHqCost411(): ?int
    {
        return $this->hqCost411;
    }

    public function setHqCost411(?int $hqCost411): self
    {
        $this->hqCost411 = $hqCost411;

        return $this;
    }

    public function getHqCost421(): ?int
    {
        return $this->hqCost421;
    }

    public function setHqCost421(?int $hqCost421): self
    {
        $this->hqCost421 = $hqCost421;

        return $this;
    }

    public function getHqCost431(): ?int
    {
        return $this->hqCost431;
    }

    public function setHqCost431(?int $hqCost431): self
    {
        $this->hqCost431 = $hqCost431;

        return $this;
    }

    public function getHqCost441(): ?int
    {
        return $this->hqCost441;
    }

    public function setHqCost441(?int $hqCost441): self
    {
        $this->hqCost441 = $hqCost441;

        return $this;
    }

    public function getHqCost451(): ?int
    {
        return $this->hqCost451;
    }

    public function setHqCost451(?int $hqCost451): self
    {
        $this->hqCost451 = $hqCost451;

        return $this;
    }

    public function getHqCost461(): ?int
    {
        return $this->hqCost461;
    }

    public function setHqCost461(?int $hqCost461): self
    {
        $this->hqCost461 = $hqCost461;

        return $this;
    }

    public function getHqCost471(): ?int
    {
        return $this->hqCost471;
    }

    public function setHqCost471(?int $hqCost471): self
    {
        $this->hqCost471 = $hqCost471;

        return $this;
    }

    public function getHqCost481(): ?int
    {
        return $this->hqCost481;
    }

    public function setHqCost481(?int $hqCost481): self
    {
        $this->hqCost481 = $hqCost481;

        return $this;
    }

    public function getHqCost491(): ?int
    {
        return $this->hqCost491;
    }

    public function setHqCost491(?int $hqCost491): self
    {
        $this->hqCost491 = $hqCost491;

        return $this;
    }

    public function getHqCost501(): ?int
    {
        return $this->hqCost501;
    }

    public function setHqCost501(?int $hqCost501): self
    {
        $this->hqCost501 = $hqCost501;

        return $this;
    }

    public function getHqCost511(): ?int
    {
        return $this->hqCost511;
    }

    public function setHqCost511(?int $hqCost511): self
    {
        $this->hqCost511 = $hqCost511;

        return $this;
    }

    public function getHqCost521(): ?int
    {
        return $this->hqCost521;
    }

    public function setHqCost521(?int $hqCost521): self
    {
        $this->hqCost521 = $hqCost521;

        return $this;
    }

    public function getHqCost531(): ?int
    {
        return $this->hqCost531;
    }

    public function setHqCost531(?int $hqCost531): self
    {
        $this->hqCost531 = $hqCost531;

        return $this;
    }

    public function getHqCost541(): ?int
    {
        return $this->hqCost541;
    }

    public function setHqCost541(?int $hqCost541): self
    {
        $this->hqCost541 = $hqCost541;

        return $this;
    }

    public function getHqCost551(): ?int
    {
        return $this->hqCost551;
    }

    public function setHqCost551(?int $hqCost551): self
    {
        $this->hqCost551 = $hqCost551;

        return $this;
    }

    public function getHqCost561(): ?int
    {
        return $this->hqCost561;
    }

    public function setHqCost561(?int $hqCost561): self
    {
        $this->hqCost561 = $hqCost561;

        return $this;
    }

    public function getHqCost571(): ?int
    {
        return $this->hqCost571;
    }

    public function setHqCost571(?int $hqCost571): self
    {
        $this->hqCost571 = $hqCost571;

        return $this;
    }

    public function getHqCost581(): ?int
    {
        return $this->hqCost581;
    }

    public function setHqCost581(?int $hqCost581): self
    {
        $this->hqCost581 = $hqCost581;

        return $this;
    }

    public function getHqCost591(): ?int
    {
        return $this->hqCost591;
    }

    public function setHqCost591(?int $hqCost591): self
    {
        $this->hqCost591 = $hqCost591;

        return $this;
    }

    public function getCollectabilityRatingCost01(): ?string
    {
        return $this->collectabilityRatingCost01;
    }

    public function setCollectabilityRatingCost01(?string $collectabilityRatingCost01): self
    {
        $this->collectabilityRatingCost01 = $collectabilityRatingCost01;

        return $this;
    }

    public function getCollectabilityRatingCost11(): ?string
    {
        return $this->collectabilityRatingCost11;
    }

    public function setCollectabilityRatingCost11(?string $collectabilityRatingCost11): self
    {
        $this->collectabilityRatingCost11 = $collectabilityRatingCost11;

        return $this;
    }

    public function getCollectabilityRatingCost21(): ?string
    {
        return $this->collectabilityRatingCost21;
    }

    public function setCollectabilityRatingCost21(?string $collectabilityRatingCost21): self
    {
        $this->collectabilityRatingCost21 = $collectabilityRatingCost21;

        return $this;
    }

    public function getCollectabilityRatingCost31(): ?string
    {
        return $this->collectabilityRatingCost31;
    }

    public function setCollectabilityRatingCost31(?string $collectabilityRatingCost31): self
    {
        $this->collectabilityRatingCost31 = $collectabilityRatingCost31;

        return $this;
    }

    public function getCollectabilityRatingCost41(): ?string
    {
        return $this->collectabilityRatingCost41;
    }

    public function setCollectabilityRatingCost41(?string $collectabilityRatingCost41): self
    {
        $this->collectabilityRatingCost41 = $collectabilityRatingCost41;

        return $this;
    }

    public function getCollectabilityRatingCost51(): ?string
    {
        return $this->collectabilityRatingCost51;
    }

    public function setCollectabilityRatingCost51(?string $collectabilityRatingCost51): self
    {
        $this->collectabilityRatingCost51 = $collectabilityRatingCost51;

        return $this;
    }

    public function getCollectabilityRatingCost61(): ?string
    {
        return $this->collectabilityRatingCost61;
    }

    public function setCollectabilityRatingCost61(?string $collectabilityRatingCost61): self
    {
        $this->collectabilityRatingCost61 = $collectabilityRatingCost61;

        return $this;
    }

    public function getCollectabilityRatingCost71(): ?string
    {
        return $this->collectabilityRatingCost71;
    }

    public function setCollectabilityRatingCost71(?string $collectabilityRatingCost71): self
    {
        $this->collectabilityRatingCost71 = $collectabilityRatingCost71;

        return $this;
    }

    public function getCollectabilityRatingCost81(): ?string
    {
        return $this->collectabilityRatingCost81;
    }

    public function setCollectabilityRatingCost81(?string $collectabilityRatingCost81): self
    {
        $this->collectabilityRatingCost81 = $collectabilityRatingCost81;

        return $this;
    }

    public function getCollectabilityRatingCost91(): ?string
    {
        return $this->collectabilityRatingCost91;
    }

    public function setCollectabilityRatingCost91(?string $collectabilityRatingCost91): self
    {
        $this->collectabilityRatingCost91 = $collectabilityRatingCost91;

        return $this;
    }

    public function getCollectabilityRatingCost101(): ?string
    {
        return $this->collectabilityRatingCost101;
    }

    public function setCollectabilityRatingCost101(?string $collectabilityRatingCost101): self
    {
        $this->collectabilityRatingCost101 = $collectabilityRatingCost101;

        return $this;
    }

    public function getCollectabilityRatingCost111(): ?string
    {
        return $this->collectabilityRatingCost111;
    }

    public function setCollectabilityRatingCost111(?string $collectabilityRatingCost111): self
    {
        $this->collectabilityRatingCost111 = $collectabilityRatingCost111;

        return $this;
    }

    public function getCollectabilityRatingCost121(): ?string
    {
        return $this->collectabilityRatingCost121;
    }

    public function setCollectabilityRatingCost121(?string $collectabilityRatingCost121): self
    {
        $this->collectabilityRatingCost121 = $collectabilityRatingCost121;

        return $this;
    }

    public function getCollectabilityRatingCost131(): ?string
    {
        return $this->collectabilityRatingCost131;
    }

    public function setCollectabilityRatingCost131(?string $collectabilityRatingCost131): self
    {
        $this->collectabilityRatingCost131 = $collectabilityRatingCost131;

        return $this;
    }

    public function getCollectabilityRatingCost141(): ?string
    {
        return $this->collectabilityRatingCost141;
    }

    public function setCollectabilityRatingCost141(?string $collectabilityRatingCost141): self
    {
        $this->collectabilityRatingCost141 = $collectabilityRatingCost141;

        return $this;
    }

    public function getCollectabilityRatingCost151(): ?string
    {
        return $this->collectabilityRatingCost151;
    }

    public function setCollectabilityRatingCost151(?string $collectabilityRatingCost151): self
    {
        $this->collectabilityRatingCost151 = $collectabilityRatingCost151;

        return $this;
    }

    public function getCollectabilityRatingCost161(): ?string
    {
        return $this->collectabilityRatingCost161;
    }

    public function setCollectabilityRatingCost161(?string $collectabilityRatingCost161): self
    {
        $this->collectabilityRatingCost161 = $collectabilityRatingCost161;

        return $this;
    }

    public function getCollectabilityRatingCost171(): ?string
    {
        return $this->collectabilityRatingCost171;
    }

    public function setCollectabilityRatingCost171(?string $collectabilityRatingCost171): self
    {
        $this->collectabilityRatingCost171 = $collectabilityRatingCost171;

        return $this;
    }

    public function getCollectabilityRatingCost181(): ?string
    {
        return $this->collectabilityRatingCost181;
    }

    public function setCollectabilityRatingCost181(?string $collectabilityRatingCost181): self
    {
        $this->collectabilityRatingCost181 = $collectabilityRatingCost181;

        return $this;
    }

    public function getCollectabilityRatingCost191(): ?string
    {
        return $this->collectabilityRatingCost191;
    }

    public function setCollectabilityRatingCost191(?string $collectabilityRatingCost191): self
    {
        $this->collectabilityRatingCost191 = $collectabilityRatingCost191;

        return $this;
    }

    public function getCollectabilityRatingCost201(): ?string
    {
        return $this->collectabilityRatingCost201;
    }

    public function setCollectabilityRatingCost201(?string $collectabilityRatingCost201): self
    {
        $this->collectabilityRatingCost201 = $collectabilityRatingCost201;

        return $this;
    }

    public function getCollectabilityRatingCost211(): ?string
    {
        return $this->collectabilityRatingCost211;
    }

    public function setCollectabilityRatingCost211(?string $collectabilityRatingCost211): self
    {
        $this->collectabilityRatingCost211 = $collectabilityRatingCost211;

        return $this;
    }

    public function getCollectabilityRatingCost221(): ?string
    {
        return $this->collectabilityRatingCost221;
    }

    public function setCollectabilityRatingCost221(?string $collectabilityRatingCost221): self
    {
        $this->collectabilityRatingCost221 = $collectabilityRatingCost221;

        return $this;
    }

    public function getCollectabilityRatingCost231(): ?string
    {
        return $this->collectabilityRatingCost231;
    }

    public function setCollectabilityRatingCost231(?string $collectabilityRatingCost231): self
    {
        $this->collectabilityRatingCost231 = $collectabilityRatingCost231;

        return $this;
    }

    public function getCollectabilityRatingCost241(): ?string
    {
        return $this->collectabilityRatingCost241;
    }

    public function setCollectabilityRatingCost241(?string $collectabilityRatingCost241): self
    {
        $this->collectabilityRatingCost241 = $collectabilityRatingCost241;

        return $this;
    }

    public function getCollectabilityRatingCost251(): ?string
    {
        return $this->collectabilityRatingCost251;
    }

    public function setCollectabilityRatingCost251(?string $collectabilityRatingCost251): self
    {
        $this->collectabilityRatingCost251 = $collectabilityRatingCost251;

        return $this;
    }

    public function getCollectabilityRatingCost261(): ?string
    {
        return $this->collectabilityRatingCost261;
    }

    public function setCollectabilityRatingCost261(?string $collectabilityRatingCost261): self
    {
        $this->collectabilityRatingCost261 = $collectabilityRatingCost261;

        return $this;
    }

    public function getCollectabilityRatingCost271(): ?string
    {
        return $this->collectabilityRatingCost271;
    }

    public function setCollectabilityRatingCost271(?string $collectabilityRatingCost271): self
    {
        $this->collectabilityRatingCost271 = $collectabilityRatingCost271;

        return $this;
    }

    public function getCollectabilityRatingCost281(): ?string
    {
        return $this->collectabilityRatingCost281;
    }

    public function setCollectabilityRatingCost281(?string $collectabilityRatingCost281): self
    {
        $this->collectabilityRatingCost281 = $collectabilityRatingCost281;

        return $this;
    }

    public function getCollectabilityRatingCost291(): ?string
    {
        return $this->collectabilityRatingCost291;
    }

    public function setCollectabilityRatingCost291(?string $collectabilityRatingCost291): self
    {
        $this->collectabilityRatingCost291 = $collectabilityRatingCost291;

        return $this;
    }

    public function getCollectabilityRatingCost301(): ?string
    {
        return $this->collectabilityRatingCost301;
    }

    public function setCollectabilityRatingCost301(?string $collectabilityRatingCost301): self
    {
        $this->collectabilityRatingCost301 = $collectabilityRatingCost301;

        return $this;
    }

    public function getCollectabilityRatingCost311(): ?string
    {
        return $this->collectabilityRatingCost311;
    }

    public function setCollectabilityRatingCost311(?string $collectabilityRatingCost311): self
    {
        $this->collectabilityRatingCost311 = $collectabilityRatingCost311;

        return $this;
    }

    public function getCollectabilityRatingCost321(): ?string
    {
        return $this->collectabilityRatingCost321;
    }

    public function setCollectabilityRatingCost321(?string $collectabilityRatingCost321): self
    {
        $this->collectabilityRatingCost321 = $collectabilityRatingCost321;

        return $this;
    }

    public function getCollectabilityRatingCost331(): ?string
    {
        return $this->collectabilityRatingCost331;
    }

    public function setCollectabilityRatingCost331(?string $collectabilityRatingCost331): self
    {
        $this->collectabilityRatingCost331 = $collectabilityRatingCost331;

        return $this;
    }

    public function getCollectabilityRatingCost341(): ?string
    {
        return $this->collectabilityRatingCost341;
    }

    public function setCollectabilityRatingCost341(?string $collectabilityRatingCost341): self
    {
        $this->collectabilityRatingCost341 = $collectabilityRatingCost341;

        return $this;
    }

    public function getCollectabilityRatingCost351(): ?string
    {
        return $this->collectabilityRatingCost351;
    }

    public function setCollectabilityRatingCost351(?string $collectabilityRatingCost351): self
    {
        $this->collectabilityRatingCost351 = $collectabilityRatingCost351;

        return $this;
    }

    public function getCollectabilityRatingCost361(): ?string
    {
        return $this->collectabilityRatingCost361;
    }

    public function setCollectabilityRatingCost361(?string $collectabilityRatingCost361): self
    {
        $this->collectabilityRatingCost361 = $collectabilityRatingCost361;

        return $this;
    }

    public function getCollectabilityRatingCost371(): ?string
    {
        return $this->collectabilityRatingCost371;
    }

    public function setCollectabilityRatingCost371(?string $collectabilityRatingCost371): self
    {
        $this->collectabilityRatingCost371 = $collectabilityRatingCost371;

        return $this;
    }

    public function getCollectabilityRatingCost381(): ?string
    {
        return $this->collectabilityRatingCost381;
    }

    public function setCollectabilityRatingCost381(?string $collectabilityRatingCost381): self
    {
        $this->collectabilityRatingCost381 = $collectabilityRatingCost381;

        return $this;
    }

    public function getCollectabilityRatingCost391(): ?string
    {
        return $this->collectabilityRatingCost391;
    }

    public function setCollectabilityRatingCost391(?string $collectabilityRatingCost391): self
    {
        $this->collectabilityRatingCost391 = $collectabilityRatingCost391;

        return $this;
    }

    public function getCollectabilityRatingCost401(): ?string
    {
        return $this->collectabilityRatingCost401;
    }

    public function setCollectabilityRatingCost401(?string $collectabilityRatingCost401): self
    {
        $this->collectabilityRatingCost401 = $collectabilityRatingCost401;

        return $this;
    }

    public function getCollectabilityRatingCost411(): ?string
    {
        return $this->collectabilityRatingCost411;
    }

    public function setCollectabilityRatingCost411(?string $collectabilityRatingCost411): self
    {
        $this->collectabilityRatingCost411 = $collectabilityRatingCost411;

        return $this;
    }

    public function getCollectabilityRatingCost421(): ?string
    {
        return $this->collectabilityRatingCost421;
    }

    public function setCollectabilityRatingCost421(?string $collectabilityRatingCost421): self
    {
        $this->collectabilityRatingCost421 = $collectabilityRatingCost421;

        return $this;
    }

    public function getCollectabilityRatingCost431(): ?string
    {
        return $this->collectabilityRatingCost431;
    }

    public function setCollectabilityRatingCost431(?string $collectabilityRatingCost431): self
    {
        $this->collectabilityRatingCost431 = $collectabilityRatingCost431;

        return $this;
    }

    public function getCollectabilityRatingCost441(): ?string
    {
        return $this->collectabilityRatingCost441;
    }

    public function setCollectabilityRatingCost441(?string $collectabilityRatingCost441): self
    {
        $this->collectabilityRatingCost441 = $collectabilityRatingCost441;

        return $this;
    }

    public function getCollectabilityRatingCost451(): ?string
    {
        return $this->collectabilityRatingCost451;
    }

    public function setCollectabilityRatingCost451(?string $collectabilityRatingCost451): self
    {
        $this->collectabilityRatingCost451 = $collectabilityRatingCost451;

        return $this;
    }

    public function getCollectabilityRatingCost461(): ?string
    {
        return $this->collectabilityRatingCost461;
    }

    public function setCollectabilityRatingCost461(?string $collectabilityRatingCost461): self
    {
        $this->collectabilityRatingCost461 = $collectabilityRatingCost461;

        return $this;
    }

    public function getCollectabilityRatingCost471(): ?string
    {
        return $this->collectabilityRatingCost471;
    }

    public function setCollectabilityRatingCost471(?string $collectabilityRatingCost471): self
    {
        $this->collectabilityRatingCost471 = $collectabilityRatingCost471;

        return $this;
    }

    public function getCollectabilityRatingCost481(): ?string
    {
        return $this->collectabilityRatingCost481;
    }

    public function setCollectabilityRatingCost481(?string $collectabilityRatingCost481): self
    {
        $this->collectabilityRatingCost481 = $collectabilityRatingCost481;

        return $this;
    }

    public function getCollectabilityRatingCost491(): ?string
    {
        return $this->collectabilityRatingCost491;
    }

    public function setCollectabilityRatingCost491(?string $collectabilityRatingCost491): self
    {
        $this->collectabilityRatingCost491 = $collectabilityRatingCost491;

        return $this;
    }

    public function getCollectabilityRatingCost501(): ?string
    {
        return $this->collectabilityRatingCost501;
    }

    public function setCollectabilityRatingCost501(?string $collectabilityRatingCost501): self
    {
        $this->collectabilityRatingCost501 = $collectabilityRatingCost501;

        return $this;
    }

    public function getCollectabilityRatingCost511(): ?string
    {
        return $this->collectabilityRatingCost511;
    }

    public function setCollectabilityRatingCost511(?string $collectabilityRatingCost511): self
    {
        $this->collectabilityRatingCost511 = $collectabilityRatingCost511;

        return $this;
    }

    public function getCollectabilityRatingCost521(): ?string
    {
        return $this->collectabilityRatingCost521;
    }

    public function setCollectabilityRatingCost521(?string $collectabilityRatingCost521): self
    {
        $this->collectabilityRatingCost521 = $collectabilityRatingCost521;

        return $this;
    }

    public function getCollectabilityRatingCost531(): ?string
    {
        return $this->collectabilityRatingCost531;
    }

    public function setCollectabilityRatingCost531(?string $collectabilityRatingCost531): self
    {
        $this->collectabilityRatingCost531 = $collectabilityRatingCost531;

        return $this;
    }

    public function getCollectabilityRatingCost541(): ?string
    {
        return $this->collectabilityRatingCost541;
    }

    public function setCollectabilityRatingCost541(?string $collectabilityRatingCost541): self
    {
        $this->collectabilityRatingCost541 = $collectabilityRatingCost541;

        return $this;
    }

    public function getCollectabilityRatingCost551(): ?string
    {
        return $this->collectabilityRatingCost551;
    }

    public function setCollectabilityRatingCost551(?string $collectabilityRatingCost551): self
    {
        $this->collectabilityRatingCost551 = $collectabilityRatingCost551;

        return $this;
    }

    public function getCollectabilityRatingCost561(): ?string
    {
        return $this->collectabilityRatingCost561;
    }

    public function setCollectabilityRatingCost561(?string $collectabilityRatingCost561): self
    {
        $this->collectabilityRatingCost561 = $collectabilityRatingCost561;

        return $this;
    }

    public function getCollectabilityRatingCost571(): ?string
    {
        return $this->collectabilityRatingCost571;
    }

    public function setCollectabilityRatingCost571(?string $collectabilityRatingCost571): self
    {
        $this->collectabilityRatingCost571 = $collectabilityRatingCost571;

        return $this;
    }

    public function getCollectabilityRatingCost581(): ?string
    {
        return $this->collectabilityRatingCost581;
    }

    public function setCollectabilityRatingCost581(?string $collectabilityRatingCost581): self
    {
        $this->collectabilityRatingCost581 = $collectabilityRatingCost581;

        return $this;
    }

    public function getCollectabilityRatingCost591(): ?string
    {
        return $this->collectabilityRatingCost591;
    }

    public function setCollectabilityRatingCost591(?string $collectabilityRatingCost591): self
    {
        $this->collectabilityRatingCost591 = $collectabilityRatingCost591;

        return $this;
    }

    public function getCountCost02(): ?string
    {
        return $this->countCost02;
    }

    public function setCountCost02(?string $countCost02): self
    {
        $this->countCost02 = $countCost02;

        return $this;
    }

    public function getCountCost12(): ?string
    {
        return $this->countCost12;
    }

    public function setCountCost12(?string $countCost12): self
    {
        $this->countCost12 = $countCost12;

        return $this;
    }

    public function getCountCost22(): ?string
    {
        return $this->countCost22;
    }

    public function setCountCost22(?string $countCost22): self
    {
        $this->countCost22 = $countCost22;

        return $this;
    }

    public function getCountCost32(): ?string
    {
        return $this->countCost32;
    }

    public function setCountCost32(?string $countCost32): self
    {
        $this->countCost32 = $countCost32;

        return $this;
    }

    public function getCountCost42(): ?string
    {
        return $this->countCost42;
    }

    public function setCountCost42(?string $countCost42): self
    {
        $this->countCost42 = $countCost42;

        return $this;
    }

    public function getCountCost52(): ?string
    {
        return $this->countCost52;
    }

    public function setCountCost52(?string $countCost52): self
    {
        $this->countCost52 = $countCost52;

        return $this;
    }

    public function getCountCost62(): ?string
    {
        return $this->countCost62;
    }

    public function setCountCost62(?string $countCost62): self
    {
        $this->countCost62 = $countCost62;

        return $this;
    }

    public function getCountCost72(): ?string
    {
        return $this->countCost72;
    }

    public function setCountCost72(?string $countCost72): self
    {
        $this->countCost72 = $countCost72;

        return $this;
    }

    public function getCountCost82(): ?string
    {
        return $this->countCost82;
    }

    public function setCountCost82(?string $countCost82): self
    {
        $this->countCost82 = $countCost82;

        return $this;
    }

    public function getCountCost92(): ?string
    {
        return $this->countCost92;
    }

    public function setCountCost92(?string $countCost92): self
    {
        $this->countCost92 = $countCost92;

        return $this;
    }

    public function getCountCost102(): ?string
    {
        return $this->countCost102;
    }

    public function setCountCost102(?string $countCost102): self
    {
        $this->countCost102 = $countCost102;

        return $this;
    }

    public function getCountCost112(): ?string
    {
        return $this->countCost112;
    }

    public function setCountCost112(?string $countCost112): self
    {
        $this->countCost112 = $countCost112;

        return $this;
    }

    public function getCountCost122(): ?string
    {
        return $this->countCost122;
    }

    public function setCountCost122(?string $countCost122): self
    {
        $this->countCost122 = $countCost122;

        return $this;
    }

    public function getCountCost132(): ?string
    {
        return $this->countCost132;
    }

    public function setCountCost132(?string $countCost132): self
    {
        $this->countCost132 = $countCost132;

        return $this;
    }

    public function getCountCost142(): ?string
    {
        return $this->countCost142;
    }

    public function setCountCost142(?string $countCost142): self
    {
        $this->countCost142 = $countCost142;

        return $this;
    }

    public function getCountCost152(): ?string
    {
        return $this->countCost152;
    }

    public function setCountCost152(?string $countCost152): self
    {
        $this->countCost152 = $countCost152;

        return $this;
    }

    public function getCountCost162(): ?string
    {
        return $this->countCost162;
    }

    public function setCountCost162(?string $countCost162): self
    {
        $this->countCost162 = $countCost162;

        return $this;
    }

    public function getCountCost172(): ?string
    {
        return $this->countCost172;
    }

    public function setCountCost172(?string $countCost172): self
    {
        $this->countCost172 = $countCost172;

        return $this;
    }

    public function getCountCost182(): ?string
    {
        return $this->countCost182;
    }

    public function setCountCost182(?string $countCost182): self
    {
        $this->countCost182 = $countCost182;

        return $this;
    }

    public function getCountCost192(): ?string
    {
        return $this->countCost192;
    }

    public function setCountCost192(?string $countCost192): self
    {
        $this->countCost192 = $countCost192;

        return $this;
    }

    public function getCountCost202(): ?string
    {
        return $this->countCost202;
    }

    public function setCountCost202(?string $countCost202): self
    {
        $this->countCost202 = $countCost202;

        return $this;
    }

    public function getCountCost212(): ?string
    {
        return $this->countCost212;
    }

    public function setCountCost212(?string $countCost212): self
    {
        $this->countCost212 = $countCost212;

        return $this;
    }

    public function getCountCost222(): ?string
    {
        return $this->countCost222;
    }

    public function setCountCost222(?string $countCost222): self
    {
        $this->countCost222 = $countCost222;

        return $this;
    }

    public function getCountCost232(): ?string
    {
        return $this->countCost232;
    }

    public function setCountCost232(?string $countCost232): self
    {
        $this->countCost232 = $countCost232;

        return $this;
    }

    public function getCountCost242(): ?string
    {
        return $this->countCost242;
    }

    public function setCountCost242(?string $countCost242): self
    {
        $this->countCost242 = $countCost242;

        return $this;
    }

    public function getCountCost252(): ?string
    {
        return $this->countCost252;
    }

    public function setCountCost252(?string $countCost252): self
    {
        $this->countCost252 = $countCost252;

        return $this;
    }

    public function getCountCost262(): ?string
    {
        return $this->countCost262;
    }

    public function setCountCost262(?string $countCost262): self
    {
        $this->countCost262 = $countCost262;

        return $this;
    }

    public function getCountCost272(): ?string
    {
        return $this->countCost272;
    }

    public function setCountCost272(?string $countCost272): self
    {
        $this->countCost272 = $countCost272;

        return $this;
    }

    public function getCountCost282(): ?string
    {
        return $this->countCost282;
    }

    public function setCountCost282(?string $countCost282): self
    {
        $this->countCost282 = $countCost282;

        return $this;
    }

    public function getCountCost292(): ?string
    {
        return $this->countCost292;
    }

    public function setCountCost292(?string $countCost292): self
    {
        $this->countCost292 = $countCost292;

        return $this;
    }

    public function getCountCost302(): ?string
    {
        return $this->countCost302;
    }

    public function setCountCost302(?string $countCost302): self
    {
        $this->countCost302 = $countCost302;

        return $this;
    }

    public function getCountCost312(): ?string
    {
        return $this->countCost312;
    }

    public function setCountCost312(?string $countCost312): self
    {
        $this->countCost312 = $countCost312;

        return $this;
    }

    public function getCountCost322(): ?string
    {
        return $this->countCost322;
    }

    public function setCountCost322(?string $countCost322): self
    {
        $this->countCost322 = $countCost322;

        return $this;
    }

    public function getCountCost332(): ?string
    {
        return $this->countCost332;
    }

    public function setCountCost332(?string $countCost332): self
    {
        $this->countCost332 = $countCost332;

        return $this;
    }

    public function getCountCost342(): ?string
    {
        return $this->countCost342;
    }

    public function setCountCost342(?string $countCost342): self
    {
        $this->countCost342 = $countCost342;

        return $this;
    }

    public function getCountCost352(): ?string
    {
        return $this->countCost352;
    }

    public function setCountCost352(?string $countCost352): self
    {
        $this->countCost352 = $countCost352;

        return $this;
    }

    public function getCountCost362(): ?string
    {
        return $this->countCost362;
    }

    public function setCountCost362(?string $countCost362): self
    {
        $this->countCost362 = $countCost362;

        return $this;
    }

    public function getCountCost372(): ?string
    {
        return $this->countCost372;
    }

    public function setCountCost372(?string $countCost372): self
    {
        $this->countCost372 = $countCost372;

        return $this;
    }

    public function getCountCost382(): ?string
    {
        return $this->countCost382;
    }

    public function setCountCost382(?string $countCost382): self
    {
        $this->countCost382 = $countCost382;

        return $this;
    }

    public function getCountCost392(): ?string
    {
        return $this->countCost392;
    }

    public function setCountCost392(?string $countCost392): self
    {
        $this->countCost392 = $countCost392;

        return $this;
    }

    public function getCountCost402(): ?string
    {
        return $this->countCost402;
    }

    public function setCountCost402(?string $countCost402): self
    {
        $this->countCost402 = $countCost402;

        return $this;
    }

    public function getCountCost412(): ?string
    {
        return $this->countCost412;
    }

    public function setCountCost412(?string $countCost412): self
    {
        $this->countCost412 = $countCost412;

        return $this;
    }

    public function getCountCost422(): ?string
    {
        return $this->countCost422;
    }

    public function setCountCost422(?string $countCost422): self
    {
        $this->countCost422 = $countCost422;

        return $this;
    }

    public function getCountCost432(): ?string
    {
        return $this->countCost432;
    }

    public function setCountCost432(?string $countCost432): self
    {
        $this->countCost432 = $countCost432;

        return $this;
    }

    public function getCountCost442(): ?string
    {
        return $this->countCost442;
    }

    public function setCountCost442(?string $countCost442): self
    {
        $this->countCost442 = $countCost442;

        return $this;
    }

    public function getCountCost452(): ?string
    {
        return $this->countCost452;
    }

    public function setCountCost452(?string $countCost452): self
    {
        $this->countCost452 = $countCost452;

        return $this;
    }

    public function getCountCost462(): ?string
    {
        return $this->countCost462;
    }

    public function setCountCost462(?string $countCost462): self
    {
        $this->countCost462 = $countCost462;

        return $this;
    }

    public function getCountCost472(): ?string
    {
        return $this->countCost472;
    }

    public function setCountCost472(?string $countCost472): self
    {
        $this->countCost472 = $countCost472;

        return $this;
    }

    public function getCountCost482(): ?string
    {
        return $this->countCost482;
    }

    public function setCountCost482(?string $countCost482): self
    {
        $this->countCost482 = $countCost482;

        return $this;
    }

    public function getCountCost492(): ?string
    {
        return $this->countCost492;
    }

    public function setCountCost492(?string $countCost492): self
    {
        $this->countCost492 = $countCost492;

        return $this;
    }

    public function getCountCost502(): ?string
    {
        return $this->countCost502;
    }

    public function setCountCost502(?string $countCost502): self
    {
        $this->countCost502 = $countCost502;

        return $this;
    }

    public function getCountCost512(): ?string
    {
        return $this->countCost512;
    }

    public function setCountCost512(?string $countCost512): self
    {
        $this->countCost512 = $countCost512;

        return $this;
    }

    public function getCountCost522(): ?string
    {
        return $this->countCost522;
    }

    public function setCountCost522(?string $countCost522): self
    {
        $this->countCost522 = $countCost522;

        return $this;
    }

    public function getCountCost532(): ?string
    {
        return $this->countCost532;
    }

    public function setCountCost532(?string $countCost532): self
    {
        $this->countCost532 = $countCost532;

        return $this;
    }

    public function getCountCost542(): ?string
    {
        return $this->countCost542;
    }

    public function setCountCost542(?string $countCost542): self
    {
        $this->countCost542 = $countCost542;

        return $this;
    }

    public function getCountCost552(): ?string
    {
        return $this->countCost552;
    }

    public function setCountCost552(?string $countCost552): self
    {
        $this->countCost552 = $countCost552;

        return $this;
    }

    public function getCountCost562(): ?string
    {
        return $this->countCost562;
    }

    public function setCountCost562(?string $countCost562): self
    {
        $this->countCost562 = $countCost562;

        return $this;
    }

    public function getCountCost572(): ?string
    {
        return $this->countCost572;
    }

    public function setCountCost572(?string $countCost572): self
    {
        $this->countCost572 = $countCost572;

        return $this;
    }

    public function getCountCost582(): ?string
    {
        return $this->countCost582;
    }

    public function setCountCost582(?string $countCost582): self
    {
        $this->countCost582 = $countCost582;

        return $this;
    }

    public function getCountCost592(): ?string
    {
        return $this->countCost592;
    }

    public function setCountCost592(?string $countCost592): self
    {
        $this->countCost592 = $countCost592;

        return $this;
    }

    public function getHqCost02(): ?int
    {
        return $this->hqCost02;
    }

    public function setHqCost02(?int $hqCost02): self
    {
        $this->hqCost02 = $hqCost02;

        return $this;
    }

    public function getHqCost12(): ?int
    {
        return $this->hqCost12;
    }

    public function setHqCost12(?int $hqCost12): self
    {
        $this->hqCost12 = $hqCost12;

        return $this;
    }

    public function getHqCost22(): ?int
    {
        return $this->hqCost22;
    }

    public function setHqCost22(?int $hqCost22): self
    {
        $this->hqCost22 = $hqCost22;

        return $this;
    }

    public function getHqCost32(): ?int
    {
        return $this->hqCost32;
    }

    public function setHqCost32(?int $hqCost32): self
    {
        $this->hqCost32 = $hqCost32;

        return $this;
    }

    public function getHqCost42(): ?int
    {
        return $this->hqCost42;
    }

    public function setHqCost42(?int $hqCost42): self
    {
        $this->hqCost42 = $hqCost42;

        return $this;
    }

    public function getHqCost52(): ?int
    {
        return $this->hqCost52;
    }

    public function setHqCost52(?int $hqCost52): self
    {
        $this->hqCost52 = $hqCost52;

        return $this;
    }

    public function getHqCost62(): ?int
    {
        return $this->hqCost62;
    }

    public function setHqCost62(?int $hqCost62): self
    {
        $this->hqCost62 = $hqCost62;

        return $this;
    }

    public function getHqCost72(): ?int
    {
        return $this->hqCost72;
    }

    public function setHqCost72(?int $hqCost72): self
    {
        $this->hqCost72 = $hqCost72;

        return $this;
    }

    public function getHqCost82(): ?int
    {
        return $this->hqCost82;
    }

    public function setHqCost82(?int $hqCost82): self
    {
        $this->hqCost82 = $hqCost82;

        return $this;
    }

    public function getHqCost92(): ?int
    {
        return $this->hqCost92;
    }

    public function setHqCost92(?int $hqCost92): self
    {
        $this->hqCost92 = $hqCost92;

        return $this;
    }

    public function getHqCost102(): ?int
    {
        return $this->hqCost102;
    }

    public function setHqCost102(?int $hqCost102): self
    {
        $this->hqCost102 = $hqCost102;

        return $this;
    }

    public function getHqCost112(): ?int
    {
        return $this->hqCost112;
    }

    public function setHqCost112(?int $hqCost112): self
    {
        $this->hqCost112 = $hqCost112;

        return $this;
    }

    public function getHqCost122(): ?int
    {
        return $this->hqCost122;
    }

    public function setHqCost122(?int $hqCost122): self
    {
        $this->hqCost122 = $hqCost122;

        return $this;
    }

    public function getHqCost132(): ?int
    {
        return $this->hqCost132;
    }

    public function setHqCost132(?int $hqCost132): self
    {
        $this->hqCost132 = $hqCost132;

        return $this;
    }

    public function getHqCost142(): ?int
    {
        return $this->hqCost142;
    }

    public function setHqCost142(?int $hqCost142): self
    {
        $this->hqCost142 = $hqCost142;

        return $this;
    }

    public function getHqCost152(): ?int
    {
        return $this->hqCost152;
    }

    public function setHqCost152(?int $hqCost152): self
    {
        $this->hqCost152 = $hqCost152;

        return $this;
    }

    public function getHqCost162(): ?int
    {
        return $this->hqCost162;
    }

    public function setHqCost162(?int $hqCost162): self
    {
        $this->hqCost162 = $hqCost162;

        return $this;
    }

    public function getHqCost172(): ?int
    {
        return $this->hqCost172;
    }

    public function setHqCost172(?int $hqCost172): self
    {
        $this->hqCost172 = $hqCost172;

        return $this;
    }

    public function getHqCost182(): ?int
    {
        return $this->hqCost182;
    }

    public function setHqCost182(?int $hqCost182): self
    {
        $this->hqCost182 = $hqCost182;

        return $this;
    }

    public function getHqCost192(): ?int
    {
        return $this->hqCost192;
    }

    public function setHqCost192(?int $hqCost192): self
    {
        $this->hqCost192 = $hqCost192;

        return $this;
    }

    public function getHqCost202(): ?int
    {
        return $this->hqCost202;
    }

    public function setHqCost202(?int $hqCost202): self
    {
        $this->hqCost202 = $hqCost202;

        return $this;
    }

    public function getHqCost212(): ?int
    {
        return $this->hqCost212;
    }

    public function setHqCost212(?int $hqCost212): self
    {
        $this->hqCost212 = $hqCost212;

        return $this;
    }

    public function getHqCost222(): ?int
    {
        return $this->hqCost222;
    }

    public function setHqCost222(?int $hqCost222): self
    {
        $this->hqCost222 = $hqCost222;

        return $this;
    }

    public function getHqCost232(): ?int
    {
        return $this->hqCost232;
    }

    public function setHqCost232(?int $hqCost232): self
    {
        $this->hqCost232 = $hqCost232;

        return $this;
    }

    public function getHqCost242(): ?int
    {
        return $this->hqCost242;
    }

    public function setHqCost242(?int $hqCost242): self
    {
        $this->hqCost242 = $hqCost242;

        return $this;
    }

    public function getHqCost252(): ?int
    {
        return $this->hqCost252;
    }

    public function setHqCost252(?int $hqCost252): self
    {
        $this->hqCost252 = $hqCost252;

        return $this;
    }

    public function getHqCost262(): ?int
    {
        return $this->hqCost262;
    }

    public function setHqCost262(?int $hqCost262): self
    {
        $this->hqCost262 = $hqCost262;

        return $this;
    }

    public function getHqCost272(): ?int
    {
        return $this->hqCost272;
    }

    public function setHqCost272(?int $hqCost272): self
    {
        $this->hqCost272 = $hqCost272;

        return $this;
    }

    public function getHqCost282(): ?int
    {
        return $this->hqCost282;
    }

    public function setHqCost282(?int $hqCost282): self
    {
        $this->hqCost282 = $hqCost282;

        return $this;
    }

    public function getHqCost292(): ?int
    {
        return $this->hqCost292;
    }

    public function setHqCost292(?int $hqCost292): self
    {
        $this->hqCost292 = $hqCost292;

        return $this;
    }

    public function getHqCost302(): ?int
    {
        return $this->hqCost302;
    }

    public function setHqCost302(?int $hqCost302): self
    {
        $this->hqCost302 = $hqCost302;

        return $this;
    }

    public function getHqCost312(): ?int
    {
        return $this->hqCost312;
    }

    public function setHqCost312(?int $hqCost312): self
    {
        $this->hqCost312 = $hqCost312;

        return $this;
    }

    public function getHqCost322(): ?int
    {
        return $this->hqCost322;
    }

    public function setHqCost322(?int $hqCost322): self
    {
        $this->hqCost322 = $hqCost322;

        return $this;
    }

    public function getHqCost332(): ?int
    {
        return $this->hqCost332;
    }

    public function setHqCost332(?int $hqCost332): self
    {
        $this->hqCost332 = $hqCost332;

        return $this;
    }

    public function getHqCost342(): ?int
    {
        return $this->hqCost342;
    }

    public function setHqCost342(?int $hqCost342): self
    {
        $this->hqCost342 = $hqCost342;

        return $this;
    }

    public function getHqCost352(): ?int
    {
        return $this->hqCost352;
    }

    public function setHqCost352(?int $hqCost352): self
    {
        $this->hqCost352 = $hqCost352;

        return $this;
    }

    public function getHqCost362(): ?int
    {
        return $this->hqCost362;
    }

    public function setHqCost362(?int $hqCost362): self
    {
        $this->hqCost362 = $hqCost362;

        return $this;
    }

    public function getHqCost372(): ?int
    {
        return $this->hqCost372;
    }

    public function setHqCost372(?int $hqCost372): self
    {
        $this->hqCost372 = $hqCost372;

        return $this;
    }

    public function getHqCost382(): ?int
    {
        return $this->hqCost382;
    }

    public function setHqCost382(?int $hqCost382): self
    {
        $this->hqCost382 = $hqCost382;

        return $this;
    }

    public function getHqCost392(): ?int
    {
        return $this->hqCost392;
    }

    public function setHqCost392(?int $hqCost392): self
    {
        $this->hqCost392 = $hqCost392;

        return $this;
    }

    public function getHqCost402(): ?int
    {
        return $this->hqCost402;
    }

    public function setHqCost402(?int $hqCost402): self
    {
        $this->hqCost402 = $hqCost402;

        return $this;
    }

    public function getHqCost412(): ?int
    {
        return $this->hqCost412;
    }

    public function setHqCost412(?int $hqCost412): self
    {
        $this->hqCost412 = $hqCost412;

        return $this;
    }

    public function getHqCost422(): ?int
    {
        return $this->hqCost422;
    }

    public function setHqCost422(?int $hqCost422): self
    {
        $this->hqCost422 = $hqCost422;

        return $this;
    }

    public function getHqCost432(): ?int
    {
        return $this->hqCost432;
    }

    public function setHqCost432(?int $hqCost432): self
    {
        $this->hqCost432 = $hqCost432;

        return $this;
    }

    public function getHqCost442(): ?int
    {
        return $this->hqCost442;
    }

    public function setHqCost442(?int $hqCost442): self
    {
        $this->hqCost442 = $hqCost442;

        return $this;
    }

    public function getHqCost452(): ?int
    {
        return $this->hqCost452;
    }

    public function setHqCost452(?int $hqCost452): self
    {
        $this->hqCost452 = $hqCost452;

        return $this;
    }

    public function getHqCost462(): ?int
    {
        return $this->hqCost462;
    }

    public function setHqCost462(?int $hqCost462): self
    {
        $this->hqCost462 = $hqCost462;

        return $this;
    }

    public function getHqCost472(): ?int
    {
        return $this->hqCost472;
    }

    public function setHqCost472(?int $hqCost472): self
    {
        $this->hqCost472 = $hqCost472;

        return $this;
    }

    public function getHqCost482(): ?int
    {
        return $this->hqCost482;
    }

    public function setHqCost482(?int $hqCost482): self
    {
        $this->hqCost482 = $hqCost482;

        return $this;
    }

    public function getHqCost492(): ?int
    {
        return $this->hqCost492;
    }

    public function setHqCost492(?int $hqCost492): self
    {
        $this->hqCost492 = $hqCost492;

        return $this;
    }

    public function getHqCost502(): ?int
    {
        return $this->hqCost502;
    }

    public function setHqCost502(?int $hqCost502): self
    {
        $this->hqCost502 = $hqCost502;

        return $this;
    }

    public function getHqCost512(): ?int
    {
        return $this->hqCost512;
    }

    public function setHqCost512(?int $hqCost512): self
    {
        $this->hqCost512 = $hqCost512;

        return $this;
    }

    public function getHqCost522(): ?int
    {
        return $this->hqCost522;
    }

    public function setHqCost522(?int $hqCost522): self
    {
        $this->hqCost522 = $hqCost522;

        return $this;
    }

    public function getHqCost532(): ?int
    {
        return $this->hqCost532;
    }

    public function setHqCost532(?int $hqCost532): self
    {
        $this->hqCost532 = $hqCost532;

        return $this;
    }

    public function getHqCost542(): ?int
    {
        return $this->hqCost542;
    }

    public function setHqCost542(?int $hqCost542): self
    {
        $this->hqCost542 = $hqCost542;

        return $this;
    }

    public function getHqCost552(): ?int
    {
        return $this->hqCost552;
    }

    public function setHqCost552(?int $hqCost552): self
    {
        $this->hqCost552 = $hqCost552;

        return $this;
    }

    public function getHqCost562(): ?int
    {
        return $this->hqCost562;
    }

    public function setHqCost562(?int $hqCost562): self
    {
        $this->hqCost562 = $hqCost562;

        return $this;
    }

    public function getHqCost572(): ?int
    {
        return $this->hqCost572;
    }

    public function setHqCost572(?int $hqCost572): self
    {
        $this->hqCost572 = $hqCost572;

        return $this;
    }

    public function getHqCost582(): ?int
    {
        return $this->hqCost582;
    }

    public function setHqCost582(?int $hqCost582): self
    {
        $this->hqCost582 = $hqCost582;

        return $this;
    }

    public function getHqCost592(): ?int
    {
        return $this->hqCost592;
    }

    public function setHqCost592(?int $hqCost592): self
    {
        $this->hqCost592 = $hqCost592;

        return $this;
    }

    public function getCollectabilityRatingCost02(): ?string
    {
        return $this->collectabilityRatingCost02;
    }

    public function setCollectabilityRatingCost02(?string $collectabilityRatingCost02): self
    {
        $this->collectabilityRatingCost02 = $collectabilityRatingCost02;

        return $this;
    }

    public function getCollectabilityRatingCost12(): ?string
    {
        return $this->collectabilityRatingCost12;
    }

    public function setCollectabilityRatingCost12(?string $collectabilityRatingCost12): self
    {
        $this->collectabilityRatingCost12 = $collectabilityRatingCost12;

        return $this;
    }

    public function getCollectabilityRatingCost22(): ?string
    {
        return $this->collectabilityRatingCost22;
    }

    public function setCollectabilityRatingCost22(?string $collectabilityRatingCost22): self
    {
        $this->collectabilityRatingCost22 = $collectabilityRatingCost22;

        return $this;
    }

    public function getCollectabilityRatingCost32(): ?string
    {
        return $this->collectabilityRatingCost32;
    }

    public function setCollectabilityRatingCost32(?string $collectabilityRatingCost32): self
    {
        $this->collectabilityRatingCost32 = $collectabilityRatingCost32;

        return $this;
    }

    public function getCollectabilityRatingCost42(): ?string
    {
        return $this->collectabilityRatingCost42;
    }

    public function setCollectabilityRatingCost42(?string $collectabilityRatingCost42): self
    {
        $this->collectabilityRatingCost42 = $collectabilityRatingCost42;

        return $this;
    }

    public function getCollectabilityRatingCost52(): ?string
    {
        return $this->collectabilityRatingCost52;
    }

    public function setCollectabilityRatingCost52(?string $collectabilityRatingCost52): self
    {
        $this->collectabilityRatingCost52 = $collectabilityRatingCost52;

        return $this;
    }

    public function getCollectabilityRatingCost62(): ?string
    {
        return $this->collectabilityRatingCost62;
    }

    public function setCollectabilityRatingCost62(?string $collectabilityRatingCost62): self
    {
        $this->collectabilityRatingCost62 = $collectabilityRatingCost62;

        return $this;
    }

    public function getCollectabilityRatingCost72(): ?string
    {
        return $this->collectabilityRatingCost72;
    }

    public function setCollectabilityRatingCost72(?string $collectabilityRatingCost72): self
    {
        $this->collectabilityRatingCost72 = $collectabilityRatingCost72;

        return $this;
    }

    public function getCollectabilityRatingCost82(): ?string
    {
        return $this->collectabilityRatingCost82;
    }

    public function setCollectabilityRatingCost82(?string $collectabilityRatingCost82): self
    {
        $this->collectabilityRatingCost82 = $collectabilityRatingCost82;

        return $this;
    }

    public function getCollectabilityRatingCost92(): ?string
    {
        return $this->collectabilityRatingCost92;
    }

    public function setCollectabilityRatingCost92(?string $collectabilityRatingCost92): self
    {
        $this->collectabilityRatingCost92 = $collectabilityRatingCost92;

        return $this;
    }

    public function getCollectabilityRatingCost102(): ?string
    {
        return $this->collectabilityRatingCost102;
    }

    public function setCollectabilityRatingCost102(?string $collectabilityRatingCost102): self
    {
        $this->collectabilityRatingCost102 = $collectabilityRatingCost102;

        return $this;
    }

    public function getCollectabilityRatingCost112(): ?string
    {
        return $this->collectabilityRatingCost112;
    }

    public function setCollectabilityRatingCost112(?string $collectabilityRatingCost112): self
    {
        $this->collectabilityRatingCost112 = $collectabilityRatingCost112;

        return $this;
    }

    public function getCollectabilityRatingCost122(): ?string
    {
        return $this->collectabilityRatingCost122;
    }

    public function setCollectabilityRatingCost122(?string $collectabilityRatingCost122): self
    {
        $this->collectabilityRatingCost122 = $collectabilityRatingCost122;

        return $this;
    }

    public function getCollectabilityRatingCost132(): ?string
    {
        return $this->collectabilityRatingCost132;
    }

    public function setCollectabilityRatingCost132(?string $collectabilityRatingCost132): self
    {
        $this->collectabilityRatingCost132 = $collectabilityRatingCost132;

        return $this;
    }

    public function getCollectabilityRatingCost142(): ?string
    {
        return $this->collectabilityRatingCost142;
    }

    public function setCollectabilityRatingCost142(?string $collectabilityRatingCost142): self
    {
        $this->collectabilityRatingCost142 = $collectabilityRatingCost142;

        return $this;
    }

    public function getCollectabilityRatingCost152(): ?string
    {
        return $this->collectabilityRatingCost152;
    }

    public function setCollectabilityRatingCost152(?string $collectabilityRatingCost152): self
    {
        $this->collectabilityRatingCost152 = $collectabilityRatingCost152;

        return $this;
    }

    public function getCollectabilityRatingCost162(): ?string
    {
        return $this->collectabilityRatingCost162;
    }

    public function setCollectabilityRatingCost162(?string $collectabilityRatingCost162): self
    {
        $this->collectabilityRatingCost162 = $collectabilityRatingCost162;

        return $this;
    }

    public function getCollectabilityRatingCost172(): ?string
    {
        return $this->collectabilityRatingCost172;
    }

    public function setCollectabilityRatingCost172(?string $collectabilityRatingCost172): self
    {
        $this->collectabilityRatingCost172 = $collectabilityRatingCost172;

        return $this;
    }

    public function getCollectabilityRatingCost182(): ?string
    {
        return $this->collectabilityRatingCost182;
    }

    public function setCollectabilityRatingCost182(?string $collectabilityRatingCost182): self
    {
        $this->collectabilityRatingCost182 = $collectabilityRatingCost182;

        return $this;
    }

    public function getCollectabilityRatingCost192(): ?string
    {
        return $this->collectabilityRatingCost192;
    }

    public function setCollectabilityRatingCost192(?string $collectabilityRatingCost192): self
    {
        $this->collectabilityRatingCost192 = $collectabilityRatingCost192;

        return $this;
    }

    public function getCollectabilityRatingCost202(): ?string
    {
        return $this->collectabilityRatingCost202;
    }

    public function setCollectabilityRatingCost202(?string $collectabilityRatingCost202): self
    {
        $this->collectabilityRatingCost202 = $collectabilityRatingCost202;

        return $this;
    }

    public function getCollectabilityRatingCost212(): ?string
    {
        return $this->collectabilityRatingCost212;
    }

    public function setCollectabilityRatingCost212(?string $collectabilityRatingCost212): self
    {
        $this->collectabilityRatingCost212 = $collectabilityRatingCost212;

        return $this;
    }

    public function getCollectabilityRatingCost222(): ?string
    {
        return $this->collectabilityRatingCost222;
    }

    public function setCollectabilityRatingCost222(?string $collectabilityRatingCost222): self
    {
        $this->collectabilityRatingCost222 = $collectabilityRatingCost222;

        return $this;
    }

    public function getCollectabilityRatingCost232(): ?string
    {
        return $this->collectabilityRatingCost232;
    }

    public function setCollectabilityRatingCost232(?string $collectabilityRatingCost232): self
    {
        $this->collectabilityRatingCost232 = $collectabilityRatingCost232;

        return $this;
    }

    public function getCollectabilityRatingCost242(): ?string
    {
        return $this->collectabilityRatingCost242;
    }

    public function setCollectabilityRatingCost242(?string $collectabilityRatingCost242): self
    {
        $this->collectabilityRatingCost242 = $collectabilityRatingCost242;

        return $this;
    }

    public function getCollectabilityRatingCost252(): ?string
    {
        return $this->collectabilityRatingCost252;
    }

    public function setCollectabilityRatingCost252(?string $collectabilityRatingCost252): self
    {
        $this->collectabilityRatingCost252 = $collectabilityRatingCost252;

        return $this;
    }

    public function getCollectabilityRatingCost262(): ?string
    {
        return $this->collectabilityRatingCost262;
    }

    public function setCollectabilityRatingCost262(?string $collectabilityRatingCost262): self
    {
        $this->collectabilityRatingCost262 = $collectabilityRatingCost262;

        return $this;
    }

    public function getCollectabilityRatingCost272(): ?string
    {
        return $this->collectabilityRatingCost272;
    }

    public function setCollectabilityRatingCost272(?string $collectabilityRatingCost272): self
    {
        $this->collectabilityRatingCost272 = $collectabilityRatingCost272;

        return $this;
    }

    public function getCollectabilityRatingCost282(): ?string
    {
        return $this->collectabilityRatingCost282;
    }

    public function setCollectabilityRatingCost282(?string $collectabilityRatingCost282): self
    {
        $this->collectabilityRatingCost282 = $collectabilityRatingCost282;

        return $this;
    }

    public function getCollectabilityRatingCost292(): ?string
    {
        return $this->collectabilityRatingCost292;
    }

    public function setCollectabilityRatingCost292(?string $collectabilityRatingCost292): self
    {
        $this->collectabilityRatingCost292 = $collectabilityRatingCost292;

        return $this;
    }

    public function getCollectabilityRatingCost302(): ?string
    {
        return $this->collectabilityRatingCost302;
    }

    public function setCollectabilityRatingCost302(?string $collectabilityRatingCost302): self
    {
        $this->collectabilityRatingCost302 = $collectabilityRatingCost302;

        return $this;
    }

    public function getCollectabilityRatingCost312(): ?string
    {
        return $this->collectabilityRatingCost312;
    }

    public function setCollectabilityRatingCost312(?string $collectabilityRatingCost312): self
    {
        $this->collectabilityRatingCost312 = $collectabilityRatingCost312;

        return $this;
    }

    public function getCollectabilityRatingCost322(): ?string
    {
        return $this->collectabilityRatingCost322;
    }

    public function setCollectabilityRatingCost322(?string $collectabilityRatingCost322): self
    {
        $this->collectabilityRatingCost322 = $collectabilityRatingCost322;

        return $this;
    }

    public function getCollectabilityRatingCost332(): ?string
    {
        return $this->collectabilityRatingCost332;
    }

    public function setCollectabilityRatingCost332(?string $collectabilityRatingCost332): self
    {
        $this->collectabilityRatingCost332 = $collectabilityRatingCost332;

        return $this;
    }

    public function getCollectabilityRatingCost342(): ?string
    {
        return $this->collectabilityRatingCost342;
    }

    public function setCollectabilityRatingCost342(?string $collectabilityRatingCost342): self
    {
        $this->collectabilityRatingCost342 = $collectabilityRatingCost342;

        return $this;
    }

    public function getCollectabilityRatingCost352(): ?string
    {
        return $this->collectabilityRatingCost352;
    }

    public function setCollectabilityRatingCost352(?string $collectabilityRatingCost352): self
    {
        $this->collectabilityRatingCost352 = $collectabilityRatingCost352;

        return $this;
    }

    public function getCollectabilityRatingCost362(): ?string
    {
        return $this->collectabilityRatingCost362;
    }

    public function setCollectabilityRatingCost362(?string $collectabilityRatingCost362): self
    {
        $this->collectabilityRatingCost362 = $collectabilityRatingCost362;

        return $this;
    }

    public function getCollectabilityRatingCost372(): ?string
    {
        return $this->collectabilityRatingCost372;
    }

    public function setCollectabilityRatingCost372(?string $collectabilityRatingCost372): self
    {
        $this->collectabilityRatingCost372 = $collectabilityRatingCost372;

        return $this;
    }

    public function getCollectabilityRatingCost382(): ?string
    {
        return $this->collectabilityRatingCost382;
    }

    public function setCollectabilityRatingCost382(?string $collectabilityRatingCost382): self
    {
        $this->collectabilityRatingCost382 = $collectabilityRatingCost382;

        return $this;
    }

    public function getCollectabilityRatingCost392(): ?string
    {
        return $this->collectabilityRatingCost392;
    }

    public function setCollectabilityRatingCost392(?string $collectabilityRatingCost392): self
    {
        $this->collectabilityRatingCost392 = $collectabilityRatingCost392;

        return $this;
    }

    public function getCollectabilityRatingCost402(): ?string
    {
        return $this->collectabilityRatingCost402;
    }

    public function setCollectabilityRatingCost402(?string $collectabilityRatingCost402): self
    {
        $this->collectabilityRatingCost402 = $collectabilityRatingCost402;

        return $this;
    }

    public function getCollectabilityRatingCost412(): ?string
    {
        return $this->collectabilityRatingCost412;
    }

    public function setCollectabilityRatingCost412(?string $collectabilityRatingCost412): self
    {
        $this->collectabilityRatingCost412 = $collectabilityRatingCost412;

        return $this;
    }

    public function getCollectabilityRatingCost422(): ?string
    {
        return $this->collectabilityRatingCost422;
    }

    public function setCollectabilityRatingCost422(?string $collectabilityRatingCost422): self
    {
        $this->collectabilityRatingCost422 = $collectabilityRatingCost422;

        return $this;
    }

    public function getCollectabilityRatingCost432(): ?string
    {
        return $this->collectabilityRatingCost432;
    }

    public function setCollectabilityRatingCost432(?string $collectabilityRatingCost432): self
    {
        $this->collectabilityRatingCost432 = $collectabilityRatingCost432;

        return $this;
    }

    public function getCollectabilityRatingCost442(): ?string
    {
        return $this->collectabilityRatingCost442;
    }

    public function setCollectabilityRatingCost442(?string $collectabilityRatingCost442): self
    {
        $this->collectabilityRatingCost442 = $collectabilityRatingCost442;

        return $this;
    }

    public function getCollectabilityRatingCost452(): ?string
    {
        return $this->collectabilityRatingCost452;
    }

    public function setCollectabilityRatingCost452(?string $collectabilityRatingCost452): self
    {
        $this->collectabilityRatingCost452 = $collectabilityRatingCost452;

        return $this;
    }

    public function getCollectabilityRatingCost462(): ?string
    {
        return $this->collectabilityRatingCost462;
    }

    public function setCollectabilityRatingCost462(?string $collectabilityRatingCost462): self
    {
        $this->collectabilityRatingCost462 = $collectabilityRatingCost462;

        return $this;
    }

    public function getCollectabilityRatingCost472(): ?string
    {
        return $this->collectabilityRatingCost472;
    }

    public function setCollectabilityRatingCost472(?string $collectabilityRatingCost472): self
    {
        $this->collectabilityRatingCost472 = $collectabilityRatingCost472;

        return $this;
    }

    public function getCollectabilityRatingCost482(): ?string
    {
        return $this->collectabilityRatingCost482;
    }

    public function setCollectabilityRatingCost482(?string $collectabilityRatingCost482): self
    {
        $this->collectabilityRatingCost482 = $collectabilityRatingCost482;

        return $this;
    }

    public function getCollectabilityRatingCost492(): ?string
    {
        return $this->collectabilityRatingCost492;
    }

    public function setCollectabilityRatingCost492(?string $collectabilityRatingCost492): self
    {
        $this->collectabilityRatingCost492 = $collectabilityRatingCost492;

        return $this;
    }

    public function getCollectabilityRatingCost502(): ?string
    {
        return $this->collectabilityRatingCost502;
    }

    public function setCollectabilityRatingCost502(?string $collectabilityRatingCost502): self
    {
        $this->collectabilityRatingCost502 = $collectabilityRatingCost502;

        return $this;
    }

    public function getCollectabilityRatingCost512(): ?string
    {
        return $this->collectabilityRatingCost512;
    }

    public function setCollectabilityRatingCost512(?string $collectabilityRatingCost512): self
    {
        $this->collectabilityRatingCost512 = $collectabilityRatingCost512;

        return $this;
    }

    public function getCollectabilityRatingCost522(): ?string
    {
        return $this->collectabilityRatingCost522;
    }

    public function setCollectabilityRatingCost522(?string $collectabilityRatingCost522): self
    {
        $this->collectabilityRatingCost522 = $collectabilityRatingCost522;

        return $this;
    }

    public function getCollectabilityRatingCost532(): ?string
    {
        return $this->collectabilityRatingCost532;
    }

    public function setCollectabilityRatingCost532(?string $collectabilityRatingCost532): self
    {
        $this->collectabilityRatingCost532 = $collectabilityRatingCost532;

        return $this;
    }

    public function getCollectabilityRatingCost542(): ?string
    {
        return $this->collectabilityRatingCost542;
    }

    public function setCollectabilityRatingCost542(?string $collectabilityRatingCost542): self
    {
        $this->collectabilityRatingCost542 = $collectabilityRatingCost542;

        return $this;
    }

    public function getCollectabilityRatingCost552(): ?string
    {
        return $this->collectabilityRatingCost552;
    }

    public function setCollectabilityRatingCost552(?string $collectabilityRatingCost552): self
    {
        $this->collectabilityRatingCost552 = $collectabilityRatingCost552;

        return $this;
    }

    public function getCollectabilityRatingCost562(): ?string
    {
        return $this->collectabilityRatingCost562;
    }

    public function setCollectabilityRatingCost562(?string $collectabilityRatingCost562): self
    {
        $this->collectabilityRatingCost562 = $collectabilityRatingCost562;

        return $this;
    }

    public function getCollectabilityRatingCost572(): ?string
    {
        return $this->collectabilityRatingCost572;
    }

    public function setCollectabilityRatingCost572(?string $collectabilityRatingCost572): self
    {
        $this->collectabilityRatingCost572 = $collectabilityRatingCost572;

        return $this;
    }

    public function getCollectabilityRatingCost582(): ?string
    {
        return $this->collectabilityRatingCost582;
    }

    public function setCollectabilityRatingCost582(?string $collectabilityRatingCost582): self
    {
        $this->collectabilityRatingCost582 = $collectabilityRatingCost582;

        return $this;
    }

    public function getCollectabilityRatingCost592(): ?string
    {
        return $this->collectabilityRatingCost592;
    }

    public function setCollectabilityRatingCost592(?string $collectabilityRatingCost592): self
    {
        $this->collectabilityRatingCost592 = $collectabilityRatingCost592;

        return $this;
    }

    public function getColumn1262(): ?int
    {
        return $this->column1262;
    }

    public function setColumn1262(?int $column1262): self
    {
        $this->column1262 = $column1262;

        return $this;
    }

    public function getColumn1263(): ?int
    {
        return $this->column1263;
    }

    public function setColumn1263(?int $column1263): self
    {
        $this->column1263 = $column1263;

        return $this;
    }

    public function getColumn1264(): ?int
    {
        return $this->column1264;
    }

    public function setColumn1264(?int $column1264): self
    {
        $this->column1264 = $column1264;

        return $this;
    }

    public function getColumn1265(): ?int
    {
        return $this->column1265;
    }

    public function setColumn1265(?int $column1265): self
    {
        $this->column1265 = $column1265;

        return $this;
    }

    public function getColumn1266(): ?int
    {
        return $this->column1266;
    }

    public function setColumn1266(?int $column1266): self
    {
        $this->column1266 = $column1266;

        return $this;
    }

    public function getColumn1267(): ?int
    {
        return $this->column1267;
    }

    public function setColumn1267(?int $column1267): self
    {
        $this->column1267 = $column1267;

        return $this;
    }

    public function getColumn1268(): ?int
    {
        return $this->column1268;
    }

    public function setColumn1268(?int $column1268): self
    {
        $this->column1268 = $column1268;

        return $this;
    }

    public function getColumn1269(): ?int
    {
        return $this->column1269;
    }

    public function setColumn1269(?int $column1269): self
    {
        $this->column1269 = $column1269;

        return $this;
    }

    public function getColumn1270(): ?int
    {
        return $this->column1270;
    }

    public function setColumn1270(?int $column1270): self
    {
        $this->column1270 = $column1270;

        return $this;
    }

    public function getColumn1271(): ?int
    {
        return $this->column1271;
    }

    public function setColumn1271(?int $column1271): self
    {
        $this->column1271 = $column1271;

        return $this;
    }

    public function getColumn1272(): ?int
    {
        return $this->column1272;
    }

    public function setColumn1272(?int $column1272): self
    {
        $this->column1272 = $column1272;

        return $this;
    }

    public function getColumn1273(): ?int
    {
        return $this->column1273;
    }

    public function setColumn1273(?int $column1273): self
    {
        $this->column1273 = $column1273;

        return $this;
    }

    public function getColumn1274(): ?int
    {
        return $this->column1274;
    }

    public function setColumn1274(?int $column1274): self
    {
        $this->column1274 = $column1274;

        return $this;
    }

    public function getColumn1275(): ?int
    {
        return $this->column1275;
    }

    public function setColumn1275(?int $column1275): self
    {
        $this->column1275 = $column1275;

        return $this;
    }

    public function getColumn1276(): ?int
    {
        return $this->column1276;
    }

    public function setColumn1276(?int $column1276): self
    {
        $this->column1276 = $column1276;

        return $this;
    }

    public function getColumn1277(): ?int
    {
        return $this->column1277;
    }

    public function setColumn1277(?int $column1277): self
    {
        $this->column1277 = $column1277;

        return $this;
    }

    public function getColumn1278(): ?int
    {
        return $this->column1278;
    }

    public function setColumn1278(?int $column1278): self
    {
        $this->column1278 = $column1278;

        return $this;
    }

    public function getColumn1279(): ?int
    {
        return $this->column1279;
    }

    public function setColumn1279(?int $column1279): self
    {
        $this->column1279 = $column1279;

        return $this;
    }

    public function getColumn1280(): ?int
    {
        return $this->column1280;
    }

    public function setColumn1280(?int $column1280): self
    {
        $this->column1280 = $column1280;

        return $this;
    }

    public function getColumn1281(): ?int
    {
        return $this->column1281;
    }

    public function setColumn1281(?int $column1281): self
    {
        $this->column1281 = $column1281;

        return $this;
    }

    public function getColumn1282(): ?int
    {
        return $this->column1282;
    }

    public function setColumn1282(?int $column1282): self
    {
        $this->column1282 = $column1282;

        return $this;
    }

    public function getColumn1283(): ?int
    {
        return $this->column1283;
    }

    public function setColumn1283(?int $column1283): self
    {
        $this->column1283 = $column1283;

        return $this;
    }

    public function getColumn1284(): ?int
    {
        return $this->column1284;
    }

    public function setColumn1284(?int $column1284): self
    {
        $this->column1284 = $column1284;

        return $this;
    }

    public function getColumn1285(): ?int
    {
        return $this->column1285;
    }

    public function setColumn1285(?int $column1285): self
    {
        $this->column1285 = $column1285;

        return $this;
    }

    public function getColumn1286(): ?int
    {
        return $this->column1286;
    }

    public function setColumn1286(?int $column1286): self
    {
        $this->column1286 = $column1286;

        return $this;
    }

    public function getColumn1287(): ?int
    {
        return $this->column1287;
    }

    public function setColumn1287(?int $column1287): self
    {
        $this->column1287 = $column1287;

        return $this;
    }

    public function getColumn1288(): ?int
    {
        return $this->column1288;
    }

    public function setColumn1288(?int $column1288): self
    {
        $this->column1288 = $column1288;

        return $this;
    }

    public function getColumn1289(): ?int
    {
        return $this->column1289;
    }

    public function setColumn1289(?int $column1289): self
    {
        $this->column1289 = $column1289;

        return $this;
    }

    public function getColumn1290(): ?int
    {
        return $this->column1290;
    }

    public function setColumn1290(?int $column1290): self
    {
        $this->column1290 = $column1290;

        return $this;
    }

    public function getColumn1291(): ?int
    {
        return $this->column1291;
    }

    public function setColumn1291(?int $column1291): self
    {
        $this->column1291 = $column1291;

        return $this;
    }

    public function getColumn1292(): ?int
    {
        return $this->column1292;
    }

    public function setColumn1292(?int $column1292): self
    {
        $this->column1292 = $column1292;

        return $this;
    }

    public function getColumn1293(): ?int
    {
        return $this->column1293;
    }

    public function setColumn1293(?int $column1293): self
    {
        $this->column1293 = $column1293;

        return $this;
    }

    public function getColumn1294(): ?int
    {
        return $this->column1294;
    }

    public function setColumn1294(?int $column1294): self
    {
        $this->column1294 = $column1294;

        return $this;
    }

    public function getColumn1295(): ?int
    {
        return $this->column1295;
    }

    public function setColumn1295(?int $column1295): self
    {
        $this->column1295 = $column1295;

        return $this;
    }

    public function getColumn1296(): ?int
    {
        return $this->column1296;
    }

    public function setColumn1296(?int $column1296): self
    {
        $this->column1296 = $column1296;

        return $this;
    }

    public function getColumn1297(): ?int
    {
        return $this->column1297;
    }

    public function setColumn1297(?int $column1297): self
    {
        $this->column1297 = $column1297;

        return $this;
    }

    public function getColumn1298(): ?int
    {
        return $this->column1298;
    }

    public function setColumn1298(?int $column1298): self
    {
        $this->column1298 = $column1298;

        return $this;
    }

    public function getColumn1299(): ?int
    {
        return $this->column1299;
    }

    public function setColumn1299(?int $column1299): self
    {
        $this->column1299 = $column1299;

        return $this;
    }

    public function getColumn1300(): ?int
    {
        return $this->column1300;
    }

    public function setColumn1300(?int $column1300): self
    {
        $this->column1300 = $column1300;

        return $this;
    }

    public function getColumn1301(): ?int
    {
        return $this->column1301;
    }

    public function setColumn1301(?int $column1301): self
    {
        $this->column1301 = $column1301;

        return $this;
    }

    public function getColumn1302(): ?int
    {
        return $this->column1302;
    }

    public function setColumn1302(?int $column1302): self
    {
        $this->column1302 = $column1302;

        return $this;
    }

    public function getColumn1303(): ?int
    {
        return $this->column1303;
    }

    public function setColumn1303(?int $column1303): self
    {
        $this->column1303 = $column1303;

        return $this;
    }

    public function getColumn1304(): ?int
    {
        return $this->column1304;
    }

    public function setColumn1304(?int $column1304): self
    {
        $this->column1304 = $column1304;

        return $this;
    }

    public function getColumn1305(): ?int
    {
        return $this->column1305;
    }

    public function setColumn1305(?int $column1305): self
    {
        $this->column1305 = $column1305;

        return $this;
    }

    public function getColumn1306(): ?int
    {
        return $this->column1306;
    }

    public function setColumn1306(?int $column1306): self
    {
        $this->column1306 = $column1306;

        return $this;
    }

    public function getColumn1307(): ?int
    {
        return $this->column1307;
    }

    public function setColumn1307(?int $column1307): self
    {
        $this->column1307 = $column1307;

        return $this;
    }

    public function getColumn1308(): ?int
    {
        return $this->column1308;
    }

    public function setColumn1308(?int $column1308): self
    {
        $this->column1308 = $column1308;

        return $this;
    }

    public function getColumn1309(): ?int
    {
        return $this->column1309;
    }

    public function setColumn1309(?int $column1309): self
    {
        $this->column1309 = $column1309;

        return $this;
    }

    public function getColumn1310(): ?int
    {
        return $this->column1310;
    }

    public function setColumn1310(?int $column1310): self
    {
        $this->column1310 = $column1310;

        return $this;
    }

    public function getColumn1311(): ?int
    {
        return $this->column1311;
    }

    public function setColumn1311(?int $column1311): self
    {
        $this->column1311 = $column1311;

        return $this;
    }

    public function getColumn1312(): ?int
    {
        return $this->column1312;
    }

    public function setColumn1312(?int $column1312): self
    {
        $this->column1312 = $column1312;

        return $this;
    }

    public function getColumn1313(): ?int
    {
        return $this->column1313;
    }

    public function setColumn1313(?int $column1313): self
    {
        $this->column1313 = $column1313;

        return $this;
    }

    public function getColumn1314(): ?int
    {
        return $this->column1314;
    }

    public function setColumn1314(?int $column1314): self
    {
        $this->column1314 = $column1314;

        return $this;
    }

    public function getColumn1315(): ?int
    {
        return $this->column1315;
    }

    public function setColumn1315(?int $column1315): self
    {
        $this->column1315 = $column1315;

        return $this;
    }

    public function getColumn1316(): ?int
    {
        return $this->column1316;
    }

    public function setColumn1316(?int $column1316): self
    {
        $this->column1316 = $column1316;

        return $this;
    }

    public function getColumn1317(): ?int
    {
        return $this->column1317;
    }

    public function setColumn1317(?int $column1317): self
    {
        $this->column1317 = $column1317;

        return $this;
    }

    public function getColumn1318(): ?int
    {
        return $this->column1318;
    }

    public function setColumn1318(?int $column1318): self
    {
        $this->column1318 = $column1318;

        return $this;
    }

    public function getColumn1319(): ?int
    {
        return $this->column1319;
    }

    public function setColumn1319(?int $column1319): self
    {
        $this->column1319 = $column1319;

        return $this;
    }

    public function getColumn1320(): ?int
    {
        return $this->column1320;
    }

    public function setColumn1320(?int $column1320): self
    {
        $this->column1320 = $column1320;

        return $this;
    }

    public function getColumn1321(): ?int
    {
        return $this->column1321;
    }

    public function setColumn1321(?int $column1321): self
    {
        $this->column1321 = $column1321;

        return $this;
    }

    public function getColumn1382(): ?int
    {
        return $this->column1382;
    }

    public function setColumn1382(?int $column1382): self
    {
        $this->column1382 = $column1382;

        return $this;
    }

    public function getColumn1383(): ?int
    {
        return $this->column1383;
    }

    public function setColumn1383(?int $column1383): self
    {
        $this->column1383 = $column1383;

        return $this;
    }

    public function getColumn1384(): ?int
    {
        return $this->column1384;
    }

    public function setColumn1384(?int $column1384): self
    {
        $this->column1384 = $column1384;

        return $this;
    }

    public function getColumn1385(): ?int
    {
        return $this->column1385;
    }

    public function setColumn1385(?int $column1385): self
    {
        $this->column1385 = $column1385;

        return $this;
    }

    public function getColumn1386(): ?int
    {
        return $this->column1386;
    }

    public function setColumn1386(?int $column1386): self
    {
        $this->column1386 = $column1386;

        return $this;
    }

    public function getColumn1387(): ?int
    {
        return $this->column1387;
    }

    public function setColumn1387(?int $column1387): self
    {
        $this->column1387 = $column1387;

        return $this;
    }

    public function getColumn1388(): ?int
    {
        return $this->column1388;
    }

    public function setColumn1388(?int $column1388): self
    {
        $this->column1388 = $column1388;

        return $this;
    }

    public function getColumn1389(): ?int
    {
        return $this->column1389;
    }

    public function setColumn1389(?int $column1389): self
    {
        $this->column1389 = $column1389;

        return $this;
    }

    public function getColumn1390(): ?int
    {
        return $this->column1390;
    }

    public function setColumn1390(?int $column1390): self
    {
        $this->column1390 = $column1390;

        return $this;
    }

    public function getColumn1391(): ?int
    {
        return $this->column1391;
    }

    public function setColumn1391(?int $column1391): self
    {
        $this->column1391 = $column1391;

        return $this;
    }

    public function getColumn1392(): ?int
    {
        return $this->column1392;
    }

    public function setColumn1392(?int $column1392): self
    {
        $this->column1392 = $column1392;

        return $this;
    }

    public function getColumn1393(): ?int
    {
        return $this->column1393;
    }

    public function setColumn1393(?int $column1393): self
    {
        $this->column1393 = $column1393;

        return $this;
    }

    public function getColumn1394(): ?int
    {
        return $this->column1394;
    }

    public function setColumn1394(?int $column1394): self
    {
        $this->column1394 = $column1394;

        return $this;
    }

    public function getColumn1395(): ?int
    {
        return $this->column1395;
    }

    public function setColumn1395(?int $column1395): self
    {
        $this->column1395 = $column1395;

        return $this;
    }

    public function getColumn1396(): ?int
    {
        return $this->column1396;
    }

    public function setColumn1396(?int $column1396): self
    {
        $this->column1396 = $column1396;

        return $this;
    }

    public function getColumn1397(): ?int
    {
        return $this->column1397;
    }

    public function setColumn1397(?int $column1397): self
    {
        $this->column1397 = $column1397;

        return $this;
    }

    public function getColumn1398(): ?int
    {
        return $this->column1398;
    }

    public function setColumn1398(?int $column1398): self
    {
        $this->column1398 = $column1398;

        return $this;
    }

    public function getColumn1399(): ?int
    {
        return $this->column1399;
    }

    public function setColumn1399(?int $column1399): self
    {
        $this->column1399 = $column1399;

        return $this;
    }

    public function getColumn1400(): ?int
    {
        return $this->column1400;
    }

    public function setColumn1400(?int $column1400): self
    {
        $this->column1400 = $column1400;

        return $this;
    }

    public function getColumn1401(): ?int
    {
        return $this->column1401;
    }

    public function setColumn1401(?int $column1401): self
    {
        $this->column1401 = $column1401;

        return $this;
    }

    public function getColumn1402(): ?int
    {
        return $this->column1402;
    }

    public function setColumn1402(?int $column1402): self
    {
        $this->column1402 = $column1402;

        return $this;
    }

    public function getColumn1403(): ?int
    {
        return $this->column1403;
    }

    public function setColumn1403(?int $column1403): self
    {
        $this->column1403 = $column1403;

        return $this;
    }

    public function getColumn1404(): ?int
    {
        return $this->column1404;
    }

    public function setColumn1404(?int $column1404): self
    {
        $this->column1404 = $column1404;

        return $this;
    }

    public function getColumn1405(): ?int
    {
        return $this->column1405;
    }

    public function setColumn1405(?int $column1405): self
    {
        $this->column1405 = $column1405;

        return $this;
    }

    public function getColumn1406(): ?int
    {
        return $this->column1406;
    }

    public function setColumn1406(?int $column1406): self
    {
        $this->column1406 = $column1406;

        return $this;
    }

    public function getColumn1407(): ?int
    {
        return $this->column1407;
    }

    public function setColumn1407(?int $column1407): self
    {
        $this->column1407 = $column1407;

        return $this;
    }

    public function getColumn1408(): ?int
    {
        return $this->column1408;
    }

    public function setColumn1408(?int $column1408): self
    {
        $this->column1408 = $column1408;

        return $this;
    }

    public function getColumn1409(): ?int
    {
        return $this->column1409;
    }

    public function setColumn1409(?int $column1409): self
    {
        $this->column1409 = $column1409;

        return $this;
    }

    public function getColumn1410(): ?int
    {
        return $this->column1410;
    }

    public function setColumn1410(?int $column1410): self
    {
        $this->column1410 = $column1410;

        return $this;
    }

    public function getColumn1411(): ?int
    {
        return $this->column1411;
    }

    public function setColumn1411(?int $column1411): self
    {
        $this->column1411 = $column1411;

        return $this;
    }

    public function getColumn1412(): ?int
    {
        return $this->column1412;
    }

    public function setColumn1412(?int $column1412): self
    {
        $this->column1412 = $column1412;

        return $this;
    }

    public function getColumn1413(): ?int
    {
        return $this->column1413;
    }

    public function setColumn1413(?int $column1413): self
    {
        $this->column1413 = $column1413;

        return $this;
    }

    public function getColumn1414(): ?int
    {
        return $this->column1414;
    }

    public function setColumn1414(?int $column1414): self
    {
        $this->column1414 = $column1414;

        return $this;
    }

    public function getColumn1415(): ?int
    {
        return $this->column1415;
    }

    public function setColumn1415(?int $column1415): self
    {
        $this->column1415 = $column1415;

        return $this;
    }

    public function getColumn1416(): ?int
    {
        return $this->column1416;
    }

    public function setColumn1416(?int $column1416): self
    {
        $this->column1416 = $column1416;

        return $this;
    }

    public function getColumn1417(): ?int
    {
        return $this->column1417;
    }

    public function setColumn1417(?int $column1417): self
    {
        $this->column1417 = $column1417;

        return $this;
    }

    public function getColumn1418(): ?int
    {
        return $this->column1418;
    }

    public function setColumn1418(?int $column1418): self
    {
        $this->column1418 = $column1418;

        return $this;
    }

    public function getColumn1419(): ?int
    {
        return $this->column1419;
    }

    public function setColumn1419(?int $column1419): self
    {
        $this->column1419 = $column1419;

        return $this;
    }

    public function getColumn1420(): ?int
    {
        return $this->column1420;
    }

    public function setColumn1420(?int $column1420): self
    {
        $this->column1420 = $column1420;

        return $this;
    }

    public function getColumn1421(): ?int
    {
        return $this->column1421;
    }

    public function setColumn1421(?int $column1421): self
    {
        $this->column1421 = $column1421;

        return $this;
    }

    public function getColumn1422(): ?int
    {
        return $this->column1422;
    }

    public function setColumn1422(?int $column1422): self
    {
        $this->column1422 = $column1422;

        return $this;
    }

    public function getColumn1423(): ?int
    {
        return $this->column1423;
    }

    public function setColumn1423(?int $column1423): self
    {
        $this->column1423 = $column1423;

        return $this;
    }

    public function getColumn1424(): ?int
    {
        return $this->column1424;
    }

    public function setColumn1424(?int $column1424): self
    {
        $this->column1424 = $column1424;

        return $this;
    }

    public function getColumn1425(): ?int
    {
        return $this->column1425;
    }

    public function setColumn1425(?int $column1425): self
    {
        $this->column1425 = $column1425;

        return $this;
    }

    public function getColumn1426(): ?int
    {
        return $this->column1426;
    }

    public function setColumn1426(?int $column1426): self
    {
        $this->column1426 = $column1426;

        return $this;
    }

    public function getColumn1427(): ?int
    {
        return $this->column1427;
    }

    public function setColumn1427(?int $column1427): self
    {
        $this->column1427 = $column1427;

        return $this;
    }

    public function getColumn1428(): ?int
    {
        return $this->column1428;
    }

    public function setColumn1428(?int $column1428): self
    {
        $this->column1428 = $column1428;

        return $this;
    }

    public function getColumn1429(): ?int
    {
        return $this->column1429;
    }

    public function setColumn1429(?int $column1429): self
    {
        $this->column1429 = $column1429;

        return $this;
    }

    public function getColumn1430(): ?int
    {
        return $this->column1430;
    }

    public function setColumn1430(?int $column1430): self
    {
        $this->column1430 = $column1430;

        return $this;
    }

    public function getColumn1431(): ?int
    {
        return $this->column1431;
    }

    public function setColumn1431(?int $column1431): self
    {
        $this->column1431 = $column1431;

        return $this;
    }

    public function getColumn1432(): ?int
    {
        return $this->column1432;
    }

    public function setColumn1432(?int $column1432): self
    {
        $this->column1432 = $column1432;

        return $this;
    }

    public function getColumn1433(): ?int
    {
        return $this->column1433;
    }

    public function setColumn1433(?int $column1433): self
    {
        $this->column1433 = $column1433;

        return $this;
    }

    public function getColumn1434(): ?int
    {
        return $this->column1434;
    }

    public function setColumn1434(?int $column1434): self
    {
        $this->column1434 = $column1434;

        return $this;
    }

    public function getColumn1435(): ?int
    {
        return $this->column1435;
    }

    public function setColumn1435(?int $column1435): self
    {
        $this->column1435 = $column1435;

        return $this;
    }

    public function getColumn1436(): ?int
    {
        return $this->column1436;
    }

    public function setColumn1436(?int $column1436): self
    {
        $this->column1436 = $column1436;

        return $this;
    }

    public function getColumn1437(): ?int
    {
        return $this->column1437;
    }

    public function setColumn1437(?int $column1437): self
    {
        $this->column1437 = $column1437;

        return $this;
    }

    public function getColumn1438(): ?int
    {
        return $this->column1438;
    }

    public function setColumn1438(?int $column1438): self
    {
        $this->column1438 = $column1438;

        return $this;
    }

    public function getColumn1439(): ?int
    {
        return $this->column1439;
    }

    public function setColumn1439(?int $column1439): self
    {
        $this->column1439 = $column1439;

        return $this;
    }

    public function getColumn1440(): ?int
    {
        return $this->column1440;
    }

    public function setColumn1440(?int $column1440): self
    {
        $this->column1440 = $column1440;

        return $this;
    }

    public function getColumn1441(): ?int
    {
        return $this->column1441;
    }

    public function setColumn1441(?int $column1441): self
    {
        $this->column1441 = $column1441;

        return $this;
    }

    public function getPatchNumber0(): ?string
    {
        return $this->patchNumber0;
    }

    public function setPatchNumber0(?string $patchNumber0): self
    {
        $this->patchNumber0 = $patchNumber0;

        return $this;
    }

    public function getPatchNumber1(): ?string
    {
        return $this->patchNumber1;
    }

    public function setPatchNumber1(?string $patchNumber1): self
    {
        $this->patchNumber1 = $patchNumber1;

        return $this;
    }

    public function getPatchNumber2(): ?string
    {
        return $this->patchNumber2;
    }

    public function setPatchNumber2(?string $patchNumber2): self
    {
        $this->patchNumber2 = $patchNumber2;

        return $this;
    }

    public function getPatchNumber3(): ?string
    {
        return $this->patchNumber3;
    }

    public function setPatchNumber3(?string $patchNumber3): self
    {
        $this->patchNumber3 = $patchNumber3;

        return $this;
    }

    public function getPatchNumber4(): ?string
    {
        return $this->patchNumber4;
    }

    public function setPatchNumber4(?string $patchNumber4): self
    {
        $this->patchNumber4 = $patchNumber4;

        return $this;
    }

    public function getPatchNumber5(): ?string
    {
        return $this->patchNumber5;
    }

    public function setPatchNumber5(?string $patchNumber5): self
    {
        $this->patchNumber5 = $patchNumber5;

        return $this;
    }

    public function getPatchNumber6(): ?string
    {
        return $this->patchNumber6;
    }

    public function setPatchNumber6(?string $patchNumber6): self
    {
        $this->patchNumber6 = $patchNumber6;

        return $this;
    }

    public function getPatchNumber7(): ?string
    {
        return $this->patchNumber7;
    }

    public function setPatchNumber7(?string $patchNumber7): self
    {
        $this->patchNumber7 = $patchNumber7;

        return $this;
    }

    public function getPatchNumber8(): ?string
    {
        return $this->patchNumber8;
    }

    public function setPatchNumber8(?string $patchNumber8): self
    {
        $this->patchNumber8 = $patchNumber8;

        return $this;
    }

    public function getPatchNumber9(): ?string
    {
        return $this->patchNumber9;
    }

    public function setPatchNumber9(?string $patchNumber9): self
    {
        $this->patchNumber9 = $patchNumber9;

        return $this;
    }

    public function getPatchNumber10(): ?string
    {
        return $this->patchNumber10;
    }

    public function setPatchNumber10(?string $patchNumber10): self
    {
        $this->patchNumber10 = $patchNumber10;

        return $this;
    }

    public function getPatchNumber11(): ?string
    {
        return $this->patchNumber11;
    }

    public function setPatchNumber11(?string $patchNumber11): self
    {
        $this->patchNumber11 = $patchNumber11;

        return $this;
    }

    public function getPatchNumber12(): ?string
    {
        return $this->patchNumber12;
    }

    public function setPatchNumber12(?string $patchNumber12): self
    {
        $this->patchNumber12 = $patchNumber12;

        return $this;
    }

    public function getPatchNumber13(): ?string
    {
        return $this->patchNumber13;
    }

    public function setPatchNumber13(?string $patchNumber13): self
    {
        $this->patchNumber13 = $patchNumber13;

        return $this;
    }

    public function getPatchNumber14(): ?string
    {
        return $this->patchNumber14;
    }

    public function setPatchNumber14(?string $patchNumber14): self
    {
        $this->patchNumber14 = $patchNumber14;

        return $this;
    }

    public function getPatchNumber15(): ?string
    {
        return $this->patchNumber15;
    }

    public function setPatchNumber15(?string $patchNumber15): self
    {
        $this->patchNumber15 = $patchNumber15;

        return $this;
    }

    public function getPatchNumber16(): ?string
    {
        return $this->patchNumber16;
    }

    public function setPatchNumber16(?string $patchNumber16): self
    {
        $this->patchNumber16 = $patchNumber16;

        return $this;
    }

    public function getPatchNumber17(): ?string
    {
        return $this->patchNumber17;
    }

    public function setPatchNumber17(?string $patchNumber17): self
    {
        $this->patchNumber17 = $patchNumber17;

        return $this;
    }

    public function getPatchNumber18(): ?string
    {
        return $this->patchNumber18;
    }

    public function setPatchNumber18(?string $patchNumber18): self
    {
        $this->patchNumber18 = $patchNumber18;

        return $this;
    }

    public function getPatchNumber19(): ?string
    {
        return $this->patchNumber19;
    }

    public function setPatchNumber19(?string $patchNumber19): self
    {
        $this->patchNumber19 = $patchNumber19;

        return $this;
    }

    public function getPatchNumber20(): ?string
    {
        return $this->patchNumber20;
    }

    public function setPatchNumber20(?string $patchNumber20): self
    {
        $this->patchNumber20 = $patchNumber20;

        return $this;
    }

    public function getPatchNumber21(): ?string
    {
        return $this->patchNumber21;
    }

    public function setPatchNumber21(?string $patchNumber21): self
    {
        $this->patchNumber21 = $patchNumber21;

        return $this;
    }

    public function getPatchNumber22(): ?string
    {
        return $this->patchNumber22;
    }

    public function setPatchNumber22(?string $patchNumber22): self
    {
        $this->patchNumber22 = $patchNumber22;

        return $this;
    }

    public function getPatchNumber23(): ?string
    {
        return $this->patchNumber23;
    }

    public function setPatchNumber23(?string $patchNumber23): self
    {
        $this->patchNumber23 = $patchNumber23;

        return $this;
    }

    public function getPatchNumber24(): ?string
    {
        return $this->patchNumber24;
    }

    public function setPatchNumber24(?string $patchNumber24): self
    {
        $this->patchNumber24 = $patchNumber24;

        return $this;
    }

    public function getPatchNumber25(): ?string
    {
        return $this->patchNumber25;
    }

    public function setPatchNumber25(?string $patchNumber25): self
    {
        $this->patchNumber25 = $patchNumber25;

        return $this;
    }

    public function getPatchNumber26(): ?string
    {
        return $this->patchNumber26;
    }

    public function setPatchNumber26(?string $patchNumber26): self
    {
        $this->patchNumber26 = $patchNumber26;

        return $this;
    }

    public function getPatchNumber27(): ?string
    {
        return $this->patchNumber27;
    }

    public function setPatchNumber27(?string $patchNumber27): self
    {
        $this->patchNumber27 = $patchNumber27;

        return $this;
    }

    public function getPatchNumber28(): ?string
    {
        return $this->patchNumber28;
    }

    public function setPatchNumber28(?string $patchNumber28): self
    {
        $this->patchNumber28 = $patchNumber28;

        return $this;
    }

    public function getPatchNumber29(): ?string
    {
        return $this->patchNumber29;
    }

    public function setPatchNumber29(?string $patchNumber29): self
    {
        $this->patchNumber29 = $patchNumber29;

        return $this;
    }

    public function getPatchNumber30(): ?string
    {
        return $this->patchNumber30;
    }

    public function setPatchNumber30(?string $patchNumber30): self
    {
        $this->patchNumber30 = $patchNumber30;

        return $this;
    }

    public function getPatchNumber31(): ?string
    {
        return $this->patchNumber31;
    }

    public function setPatchNumber31(?string $patchNumber31): self
    {
        $this->patchNumber31 = $patchNumber31;

        return $this;
    }

    public function getPatchNumber32(): ?string
    {
        return $this->patchNumber32;
    }

    public function setPatchNumber32(?string $patchNumber32): self
    {
        $this->patchNumber32 = $patchNumber32;

        return $this;
    }

    public function getPatchNumber33(): ?string
    {
        return $this->patchNumber33;
    }

    public function setPatchNumber33(?string $patchNumber33): self
    {
        $this->patchNumber33 = $patchNumber33;

        return $this;
    }

    public function getPatchNumber34(): ?string
    {
        return $this->patchNumber34;
    }

    public function setPatchNumber34(?string $patchNumber34): self
    {
        $this->patchNumber34 = $patchNumber34;

        return $this;
    }

    public function getPatchNumber35(): ?string
    {
        return $this->patchNumber35;
    }

    public function setPatchNumber35(?string $patchNumber35): self
    {
        $this->patchNumber35 = $patchNumber35;

        return $this;
    }

    public function getPatchNumber36(): ?string
    {
        return $this->patchNumber36;
    }

    public function setPatchNumber36(?string $patchNumber36): self
    {
        $this->patchNumber36 = $patchNumber36;

        return $this;
    }

    public function getPatchNumber37(): ?string
    {
        return $this->patchNumber37;
    }

    public function setPatchNumber37(?string $patchNumber37): self
    {
        $this->patchNumber37 = $patchNumber37;

        return $this;
    }

    public function getPatchNumber38(): ?string
    {
        return $this->patchNumber38;
    }

    public function setPatchNumber38(?string $patchNumber38): self
    {
        $this->patchNumber38 = $patchNumber38;

        return $this;
    }

    public function getPatchNumber39(): ?string
    {
        return $this->patchNumber39;
    }

    public function setPatchNumber39(?string $patchNumber39): self
    {
        $this->patchNumber39 = $patchNumber39;

        return $this;
    }

    public function getPatchNumber40(): ?string
    {
        return $this->patchNumber40;
    }

    public function setPatchNumber40(?string $patchNumber40): self
    {
        $this->patchNumber40 = $patchNumber40;

        return $this;
    }

    public function getPatchNumber41(): ?string
    {
        return $this->patchNumber41;
    }

    public function setPatchNumber41(?string $patchNumber41): self
    {
        $this->patchNumber41 = $patchNumber41;

        return $this;
    }

    public function getPatchNumber42(): ?string
    {
        return $this->patchNumber42;
    }

    public function setPatchNumber42(?string $patchNumber42): self
    {
        $this->patchNumber42 = $patchNumber42;

        return $this;
    }

    public function getPatchNumber43(): ?string
    {
        return $this->patchNumber43;
    }

    public function setPatchNumber43(?string $patchNumber43): self
    {
        $this->patchNumber43 = $patchNumber43;

        return $this;
    }

    public function getPatchNumber44(): ?string
    {
        return $this->patchNumber44;
    }

    public function setPatchNumber44(?string $patchNumber44): self
    {
        $this->patchNumber44 = $patchNumber44;

        return $this;
    }

    public function getPatchNumber45(): ?string
    {
        return $this->patchNumber45;
    }

    public function setPatchNumber45(?string $patchNumber45): self
    {
        $this->patchNumber45 = $patchNumber45;

        return $this;
    }

    public function getPatchNumber46(): ?string
    {
        return $this->patchNumber46;
    }

    public function setPatchNumber46(?string $patchNumber46): self
    {
        $this->patchNumber46 = $patchNumber46;

        return $this;
    }

    public function getPatchNumber47(): ?string
    {
        return $this->patchNumber47;
    }

    public function setPatchNumber47(?string $patchNumber47): self
    {
        $this->patchNumber47 = $patchNumber47;

        return $this;
    }

    public function getPatchNumber48(): ?string
    {
        return $this->patchNumber48;
    }

    public function setPatchNumber48(?string $patchNumber48): self
    {
        $this->patchNumber48 = $patchNumber48;

        return $this;
    }

    public function getPatchNumber49(): ?string
    {
        return $this->patchNumber49;
    }

    public function setPatchNumber49(?string $patchNumber49): self
    {
        $this->patchNumber49 = $patchNumber49;

        return $this;
    }

    public function getPatchNumber50(): ?string
    {
        return $this->patchNumber50;
    }

    public function setPatchNumber50(?string $patchNumber50): self
    {
        $this->patchNumber50 = $patchNumber50;

        return $this;
    }

    public function getPatchNumber51(): ?string
    {
        return $this->patchNumber51;
    }

    public function setPatchNumber51(?string $patchNumber51): self
    {
        $this->patchNumber51 = $patchNumber51;

        return $this;
    }

    public function getPatchNumber52(): ?string
    {
        return $this->patchNumber52;
    }

    public function setPatchNumber52(?string $patchNumber52): self
    {
        $this->patchNumber52 = $patchNumber52;

        return $this;
    }

    public function getPatchNumber53(): ?string
    {
        return $this->patchNumber53;
    }

    public function setPatchNumber53(?string $patchNumber53): self
    {
        $this->patchNumber53 = $patchNumber53;

        return $this;
    }

    public function getPatchNumber54(): ?string
    {
        return $this->patchNumber54;
    }

    public function setPatchNumber54(?string $patchNumber54): self
    {
        $this->patchNumber54 = $patchNumber54;

        return $this;
    }

    public function getPatchNumber55(): ?string
    {
        return $this->patchNumber55;
    }

    public function setPatchNumber55(?string $patchNumber55): self
    {
        $this->patchNumber55 = $patchNumber55;

        return $this;
    }

    public function getPatchNumber56(): ?string
    {
        return $this->patchNumber56;
    }

    public function setPatchNumber56(?string $patchNumber56): self
    {
        $this->patchNumber56 = $patchNumber56;

        return $this;
    }

    public function getPatchNumber57(): ?string
    {
        return $this->patchNumber57;
    }

    public function setPatchNumber57(?string $patchNumber57): self
    {
        $this->patchNumber57 = $patchNumber57;

        return $this;
    }

    public function getPatchNumber58(): ?string
    {
        return $this->patchNumber58;
    }

    public function setPatchNumber58(?string $patchNumber58): self
    {
        $this->patchNumber58 = $patchNumber58;

        return $this;
    }

    public function getPatchNumber59(): ?string
    {
        return $this->patchNumber59;
    }

    public function setPatchNumber59(?string $patchNumber59): self
    {
        $this->patchNumber59 = $patchNumber59;

        return $this;
    }

    public function getUseCurrencyType(): ?int
    {
        return $this->useCurrencyType;
    }

    public function setUseCurrencyType(?int $useCurrencyType): self
    {
        $this->useCurrencyType = $useCurrencyType;

        return $this;
    }

    public function getColumn1506(): ?string
    {
        return $this->column1506;
    }

    public function setColumn1506(?string $column1506): self
    {
        $this->column1506 = $column1506;

        return $this;
    }

    public function getColumn1507(): ?bool
    {
        return $this->column1507;
    }

    public function setColumn1507(?bool $column1507): self
    {
        $this->column1507 = $column1507;

        return $this;
    }

    public function getNotCompleteText(): ?DefaultTalk
    {
        return $this->notCompleteText;
    }

    public function setNotCompleteText(?DefaultTalk $notCompleteText): self
    {
        $this->notCompleteText = $notCompleteText;

        return $this;
    }

    public function getCompleteText(): ?DefaultTalk
    {
        return $this->completeText;
    }

    public function setCompleteText(?DefaultTalk $completeText): self
    {
        $this->completeText = $completeText;

        return $this;
    }

    public function getQuestUnlock(): ?Quest
    {
        return $this->questUnlock;
    }

    public function setQuestUnlock(?Quest $questUnlock): self
    {
        $this->questUnlock = $questUnlock;

        return $this;
    }

    public function getAchievementUnlock59(): ?Achievement
    {
        return $this->achievementUnlock59;
    }

    public function setAchievementUnlock59(?Achievement $achievementUnlock59): self
    {
        $this->achievementUnlock59 = $achievementUnlock59;

        return $this;
    }

    public function getAchievementUnlock58(): ?Achievement
    {
        return $this->achievementUnlock58;
    }

    public function setAchievementUnlock58(?Achievement $achievementUnlock58): self
    {
        $this->achievementUnlock58 = $achievementUnlock58;

        return $this;
    }

    public function getAchievementUnlock57(): ?Achievement
    {
        return $this->achievementUnlock57;
    }

    public function setAchievementUnlock57(?Achievement $achievementUnlock57): self
    {
        $this->achievementUnlock57 = $achievementUnlock57;

        return $this;
    }

    public function getAchievementUnlock56(): ?Achievement
    {
        return $this->achievementUnlock56;
    }

    public function setAchievementUnlock56(?Achievement $achievementUnlock56): self
    {
        $this->achievementUnlock56 = $achievementUnlock56;

        return $this;
    }

    public function getAchievementUnlock55(): ?Achievement
    {
        return $this->achievementUnlock55;
    }

    public function setAchievementUnlock55(?Achievement $achievementUnlock55): self
    {
        $this->achievementUnlock55 = $achievementUnlock55;

        return $this;
    }

    public function getAchievementUnlock54(): ?Achievement
    {
        return $this->achievementUnlock54;
    }

    public function setAchievementUnlock54(?Achievement $achievementUnlock54): self
    {
        $this->achievementUnlock54 = $achievementUnlock54;

        return $this;
    }

    public function getAchievementUnlock53(): ?Achievement
    {
        return $this->achievementUnlock53;
    }

    public function setAchievementUnlock53(?Achievement $achievementUnlock53): self
    {
        $this->achievementUnlock53 = $achievementUnlock53;

        return $this;
    }

    public function getAchievementUnlock52(): ?Achievement
    {
        return $this->achievementUnlock52;
    }

    public function setAchievementUnlock52(?Achievement $achievementUnlock52): self
    {
        $this->achievementUnlock52 = $achievementUnlock52;

        return $this;
    }

    public function getAchievementUnlock51(): ?Achievement
    {
        return $this->achievementUnlock51;
    }

    public function setAchievementUnlock51(?Achievement $achievementUnlock51): self
    {
        $this->achievementUnlock51 = $achievementUnlock51;

        return $this;
    }

    public function getAchievementUnlock50(): ?Achievement
    {
        return $this->achievementUnlock50;
    }

    public function setAchievementUnlock50(?Achievement $achievementUnlock50): self
    {
        $this->achievementUnlock50 = $achievementUnlock50;

        return $this;
    }

    public function getAchievementUnlock49(): ?Achievement
    {
        return $this->achievementUnlock49;
    }

    public function setAchievementUnlock49(?Achievement $achievementUnlock49): self
    {
        $this->achievementUnlock49 = $achievementUnlock49;

        return $this;
    }

    public function getAchievementUnlock48(): ?Achievement
    {
        return $this->achievementUnlock48;
    }

    public function setAchievementUnlock48(?Achievement $achievementUnlock48): self
    {
        $this->achievementUnlock48 = $achievementUnlock48;

        return $this;
    }

    public function getAchievementUnlock47(): ?Achievement
    {
        return $this->achievementUnlock47;
    }

    public function setAchievementUnlock47(?Achievement $achievementUnlock47): self
    {
        $this->achievementUnlock47 = $achievementUnlock47;

        return $this;
    }

    public function getAchievementUnlock46(): ?Achievement
    {
        return $this->achievementUnlock46;
    }

    public function setAchievementUnlock46(?Achievement $achievementUnlock46): self
    {
        $this->achievementUnlock46 = $achievementUnlock46;

        return $this;
    }

    public function getAchievementUnlock45(): ?Achievement
    {
        return $this->achievementUnlock45;
    }

    public function setAchievementUnlock45(?Achievement $achievementUnlock45): self
    {
        $this->achievementUnlock45 = $achievementUnlock45;

        return $this;
    }

    public function getAchievementUnlock44(): ?Achievement
    {
        return $this->achievementUnlock44;
    }

    public function setAchievementUnlock44(?Achievement $achievementUnlock44): self
    {
        $this->achievementUnlock44 = $achievementUnlock44;

        return $this;
    }

    public function getAchievementUnlock43(): ?Achievement
    {
        return $this->achievementUnlock43;
    }

    public function setAchievementUnlock43(?Achievement $achievementUnlock43): self
    {
        $this->achievementUnlock43 = $achievementUnlock43;

        return $this;
    }

    public function getAchievementUnlock42(): ?Achievement
    {
        return $this->achievementUnlock42;
    }

    public function setAchievementUnlock42(?Achievement $achievementUnlock42): self
    {
        $this->achievementUnlock42 = $achievementUnlock42;

        return $this;
    }

    public function getAchievementUnlock41(): ?Achievement
    {
        return $this->achievementUnlock41;
    }

    public function setAchievementUnlock41(?Achievement $achievementUnlock41): self
    {
        $this->achievementUnlock41 = $achievementUnlock41;

        return $this;
    }

    public function getAchievementUnlock40(): ?Achievement
    {
        return $this->achievementUnlock40;
    }

    public function setAchievementUnlock40(?Achievement $achievementUnlock40): self
    {
        $this->achievementUnlock40 = $achievementUnlock40;

        return $this;
    }

    public function getAchievementUnlock39(): ?Achievement
    {
        return $this->achievementUnlock39;
    }

    public function setAchievementUnlock39(?Achievement $achievementUnlock39): self
    {
        $this->achievementUnlock39 = $achievementUnlock39;

        return $this;
    }

    public function getAchievementUnlock38(): ?Achievement
    {
        return $this->achievementUnlock38;
    }

    public function setAchievementUnlock38(?Achievement $achievementUnlock38): self
    {
        $this->achievementUnlock38 = $achievementUnlock38;

        return $this;
    }

    public function getAchievementUnlock37(): ?Achievement
    {
        return $this->achievementUnlock37;
    }

    public function setAchievementUnlock37(?Achievement $achievementUnlock37): self
    {
        $this->achievementUnlock37 = $achievementUnlock37;

        return $this;
    }

    public function getAchievementUnlock36(): ?Achievement
    {
        return $this->achievementUnlock36;
    }

    public function setAchievementUnlock36(?Achievement $achievementUnlock36): self
    {
        $this->achievementUnlock36 = $achievementUnlock36;

        return $this;
    }

    public function getAchievementUnlock35(): ?Achievement
    {
        return $this->achievementUnlock35;
    }

    public function setAchievementUnlock35(?Achievement $achievementUnlock35): self
    {
        $this->achievementUnlock35 = $achievementUnlock35;

        return $this;
    }

    public function getAchievementUnlock34(): ?Achievement
    {
        return $this->achievementUnlock34;
    }

    public function setAchievementUnlock34(?Achievement $achievementUnlock34): self
    {
        $this->achievementUnlock34 = $achievementUnlock34;

        return $this;
    }

    public function getAchievementUnlock33(): ?Achievement
    {
        return $this->achievementUnlock33;
    }

    public function setAchievementUnlock33(?Achievement $achievementUnlock33): self
    {
        $this->achievementUnlock33 = $achievementUnlock33;

        return $this;
    }

    public function getAchievementUnlock32(): ?Achievement
    {
        return $this->achievementUnlock32;
    }

    public function setAchievementUnlock32(?Achievement $achievementUnlock32): self
    {
        $this->achievementUnlock32 = $achievementUnlock32;

        return $this;
    }

    public function getAchievementUnlock31(): ?Achievement
    {
        return $this->achievementUnlock31;
    }

    public function setAchievementUnlock31(?Achievement $achievementUnlock31): self
    {
        $this->achievementUnlock31 = $achievementUnlock31;

        return $this;
    }

    public function getAchievementUnlock30(): ?Achievement
    {
        return $this->achievementUnlock30;
    }

    public function setAchievementUnlock30(?Achievement $achievementUnlock30): self
    {
        $this->achievementUnlock30 = $achievementUnlock30;

        return $this;
    }

    public function getAchievementUnlock29(): ?Achievement
    {
        return $this->achievementUnlock29;
    }

    public function setAchievementUnlock29(?Achievement $achievementUnlock29): self
    {
        $this->achievementUnlock29 = $achievementUnlock29;

        return $this;
    }

    public function getAchievementUnlock28(): ?Achievement
    {
        return $this->achievementUnlock28;
    }

    public function setAchievementUnlock28(?Achievement $achievementUnlock28): self
    {
        $this->achievementUnlock28 = $achievementUnlock28;

        return $this;
    }

    public function getAchievementUnlock27(): ?Achievement
    {
        return $this->achievementUnlock27;
    }

    public function setAchievementUnlock27(?Achievement $achievementUnlock27): self
    {
        $this->achievementUnlock27 = $achievementUnlock27;

        return $this;
    }

    public function getAchievementUnlock26(): ?Achievement
    {
        return $this->achievementUnlock26;
    }

    public function setAchievementUnlock26(?Achievement $achievementUnlock26): self
    {
        $this->achievementUnlock26 = $achievementUnlock26;

        return $this;
    }

    public function getAchievementUnlock25(): ?Achievement
    {
        return $this->achievementUnlock25;
    }

    public function setAchievementUnlock25(?Achievement $achievementUnlock25): self
    {
        $this->achievementUnlock25 = $achievementUnlock25;

        return $this;
    }

    public function getAchievementUnlock24(): ?Achievement
    {
        return $this->achievementUnlock24;
    }

    public function setAchievementUnlock24(?Achievement $achievementUnlock24): self
    {
        $this->achievementUnlock24 = $achievementUnlock24;

        return $this;
    }

    public function getAchievementUnlock23(): ?Achievement
    {
        return $this->achievementUnlock23;
    }

    public function setAchievementUnlock23(?Achievement $achievementUnlock23): self
    {
        $this->achievementUnlock23 = $achievementUnlock23;

        return $this;
    }

    public function getAchievementUnlock22(): ?Achievement
    {
        return $this->achievementUnlock22;
    }

    public function setAchievementUnlock22(?Achievement $achievementUnlock22): self
    {
        $this->achievementUnlock22 = $achievementUnlock22;

        return $this;
    }

    public function getAchievementUnlock21(): ?Achievement
    {
        return $this->achievementUnlock21;
    }

    public function setAchievementUnlock21(?Achievement $achievementUnlock21): self
    {
        $this->achievementUnlock21 = $achievementUnlock21;

        return $this;
    }

    public function getAchievementUnlock20(): ?Achievement
    {
        return $this->achievementUnlock20;
    }

    public function setAchievementUnlock20(?Achievement $achievementUnlock20): self
    {
        $this->achievementUnlock20 = $achievementUnlock20;

        return $this;
    }

    public function getQuestItem59(): ?Quest
    {
        return $this->questItem59;
    }

    public function setQuestItem59(?Quest $questItem59): self
    {
        $this->questItem59 = $questItem59;

        return $this;
    }

    public function getQuestItem58(): ?Quest
    {
        return $this->questItem58;
    }

    public function setQuestItem58(?Quest $questItem58): self
    {
        $this->questItem58 = $questItem58;

        return $this;
    }

    public function getQuestItem57(): ?Quest
    {
        return $this->questItem57;
    }

    public function setQuestItem57(?Quest $questItem57): self
    {
        $this->questItem57 = $questItem57;

        return $this;
    }

    public function getQuestItem56(): ?Quest
    {
        return $this->questItem56;
    }

    public function setQuestItem56(?Quest $questItem56): self
    {
        $this->questItem56 = $questItem56;

        return $this;
    }

    public function getQuestItem55(): ?Quest
    {
        return $this->questItem55;
    }

    public function setQuestItem55(?Quest $questItem55): self
    {
        $this->questItem55 = $questItem55;

        return $this;
    }

    public function getQuestItem54(): ?Quest
    {
        return $this->questItem54;
    }

    public function setQuestItem54(?Quest $questItem54): self
    {
        $this->questItem54 = $questItem54;

        return $this;
    }

    public function getQuestItem53(): ?Quest
    {
        return $this->questItem53;
    }

    public function setQuestItem53(?Quest $questItem53): self
    {
        $this->questItem53 = $questItem53;

        return $this;
    }

    public function getQuestItem52(): ?Quest
    {
        return $this->questItem52;
    }

    public function setQuestItem52(?Quest $questItem52): self
    {
        $this->questItem52 = $questItem52;

        return $this;
    }

    public function getQuestItem51(): ?Quest
    {
        return $this->questItem51;
    }

    public function setQuestItem51(?Quest $questItem51): self
    {
        $this->questItem51 = $questItem51;

        return $this;
    }

    public function getQuestItem50(): ?Quest
    {
        return $this->questItem50;
    }

    public function setQuestItem50(?Quest $questItem50): self
    {
        $this->questItem50 = $questItem50;

        return $this;
    }

    public function getQuestItem49(): ?Quest
    {
        return $this->questItem49;
    }

    public function setQuestItem49(?Quest $questItem49): self
    {
        $this->questItem49 = $questItem49;

        return $this;
    }

    public function getQuestItem48(): ?Quest
    {
        return $this->questItem48;
    }

    public function setQuestItem48(?Quest $questItem48): self
    {
        $this->questItem48 = $questItem48;

        return $this;
    }

    public function getQuestItem47(): ?Quest
    {
        return $this->questItem47;
    }

    public function setQuestItem47(?Quest $questItem47): self
    {
        $this->questItem47 = $questItem47;

        return $this;
    }

    public function getQuestItem46(): ?Quest
    {
        return $this->questItem46;
    }

    public function setQuestItem46(?Quest $questItem46): self
    {
        $this->questItem46 = $questItem46;

        return $this;
    }

    public function getQuestItem45(): ?Quest
    {
        return $this->questItem45;
    }

    public function setQuestItem45(?Quest $questItem45): self
    {
        $this->questItem45 = $questItem45;

        return $this;
    }

    public function getQuestItem44(): ?Quest
    {
        return $this->questItem44;
    }

    public function setQuestItem44(?Quest $questItem44): self
    {
        $this->questItem44 = $questItem44;

        return $this;
    }

    public function getQuestItem43(): ?Quest
    {
        return $this->questItem43;
    }

    public function setQuestItem43(?Quest $questItem43): self
    {
        $this->questItem43 = $questItem43;

        return $this;
    }

    public function getQuestItem42(): ?Quest
    {
        return $this->questItem42;
    }

    public function setQuestItem42(?Quest $questItem42): self
    {
        $this->questItem42 = $questItem42;

        return $this;
    }

    public function getQuestItem41(): ?Quest
    {
        return $this->questItem41;
    }

    public function setQuestItem41(?Quest $questItem41): self
    {
        $this->questItem41 = $questItem41;

        return $this;
    }

    public function getQuestItem40(): ?Quest
    {
        return $this->questItem40;
    }

    public function setQuestItem40(?Quest $questItem40): self
    {
        $this->questItem40 = $questItem40;

        return $this;
    }

    public function getQuestItem39(): ?Quest
    {
        return $this->questItem39;
    }

    public function setQuestItem39(?Quest $questItem39): self
    {
        $this->questItem39 = $questItem39;

        return $this;
    }

    public function getQuestItem38(): ?Quest
    {
        return $this->questItem38;
    }

    public function setQuestItem38(?Quest $questItem38): self
    {
        $this->questItem38 = $questItem38;

        return $this;
    }

    public function getQuestItem37(): ?Quest
    {
        return $this->questItem37;
    }

    public function setQuestItem37(?Quest $questItem37): self
    {
        $this->questItem37 = $questItem37;

        return $this;
    }

    public function getQuestItem36(): ?Quest
    {
        return $this->questItem36;
    }

    public function setQuestItem36(?Quest $questItem36): self
    {
        $this->questItem36 = $questItem36;

        return $this;
    }

    public function getQuestItem35(): ?Quest
    {
        return $this->questItem35;
    }

    public function setQuestItem35(?Quest $questItem35): self
    {
        $this->questItem35 = $questItem35;

        return $this;
    }

    public function getQuestItem34(): ?Quest
    {
        return $this->questItem34;
    }

    public function setQuestItem34(?Quest $questItem34): self
    {
        $this->questItem34 = $questItem34;

        return $this;
    }

    public function getQuestItem33(): ?Quest
    {
        return $this->questItem33;
    }

    public function setQuestItem33(?Quest $questItem33): self
    {
        $this->questItem33 = $questItem33;

        return $this;
    }

    public function getQuestItem32(): ?Quest
    {
        return $this->questItem32;
    }

    public function setQuestItem32(?Quest $questItem32): self
    {
        $this->questItem32 = $questItem32;

        return $this;
    }

    public function getQuestItem31(): ?Quest
    {
        return $this->questItem31;
    }

    public function setQuestItem31(?Quest $questItem31): self
    {
        $this->questItem31 = $questItem31;

        return $this;
    }

    public function getQuestItem30(): ?Quest
    {
        return $this->questItem30;
    }

    public function setQuestItem30(?Quest $questItem30): self
    {
        $this->questItem30 = $questItem30;

        return $this;
    }

    public function getQuestItem29(): ?Quest
    {
        return $this->questItem29;
    }

    public function setQuestItem29(?Quest $questItem29): self
    {
        $this->questItem29 = $questItem29;

        return $this;
    }

    public function getQuestItem28(): ?Quest
    {
        return $this->questItem28;
    }

    public function setQuestItem28(?Quest $questItem28): self
    {
        $this->questItem28 = $questItem28;

        return $this;
    }

    public function getQuestItem27(): ?Quest
    {
        return $this->questItem27;
    }

    public function setQuestItem27(?Quest $questItem27): self
    {
        $this->questItem27 = $questItem27;

        return $this;
    }

    public function getQuestItem26(): ?Quest
    {
        return $this->questItem26;
    }

    public function setQuestItem26(?Quest $questItem26): self
    {
        $this->questItem26 = $questItem26;

        return $this;
    }

    public function getQuestItem25(): ?Quest
    {
        return $this->questItem25;
    }

    public function setQuestItem25(?Quest $questItem25): self
    {
        $this->questItem25 = $questItem25;

        return $this;
    }

    public function getQuestItem24(): ?Quest
    {
        return $this->questItem24;
    }

    public function setQuestItem24(?Quest $questItem24): self
    {
        $this->questItem24 = $questItem24;

        return $this;
    }

    public function getQuestItem23(): ?Quest
    {
        return $this->questItem23;
    }

    public function setQuestItem23(?Quest $questItem23): self
    {
        $this->questItem23 = $questItem23;

        return $this;
    }

    public function getQuestItem22(): ?Quest
    {
        return $this->questItem22;
    }

    public function setQuestItem22(?Quest $questItem22): self
    {
        $this->questItem22 = $questItem22;

        return $this;
    }

    public function getQuestItem21(): ?Quest
    {
        return $this->questItem21;
    }

    public function setQuestItem21(?Quest $questItem21): self
    {
        $this->questItem21 = $questItem21;

        return $this;
    }

    public function getQuestItem20(): ?Quest
    {
        return $this->questItem20;
    }

    public function setQuestItem20(?Quest $questItem20): self
    {
        $this->questItem20 = $questItem20;

        return $this;
    }

    public function getQuestItem19(): ?Quest
    {
        return $this->questItem19;
    }

    public function setQuestItem19(?Quest $questItem19): self
    {
        $this->questItem19 = $questItem19;

        return $this;
    }

    public function getQuestItem18(): ?Quest
    {
        return $this->questItem18;
    }

    public function setQuestItem18(?Quest $questItem18): self
    {
        $this->questItem18 = $questItem18;

        return $this;
    }

    public function getQuestItem17(): ?Quest
    {
        return $this->questItem17;
    }

    public function setQuestItem17(?Quest $questItem17): self
    {
        $this->questItem17 = $questItem17;

        return $this;
    }

    public function getQuestItem16(): ?Quest
    {
        return $this->questItem16;
    }

    public function setQuestItem16(?Quest $questItem16): self
    {
        $this->questItem16 = $questItem16;

        return $this;
    }

    public function getQuestItem15(): ?Quest
    {
        return $this->questItem15;
    }

    public function setQuestItem15(?Quest $questItem15): self
    {
        $this->questItem15 = $questItem15;

        return $this;
    }

    public function getQuestItem14(): ?Quest
    {
        return $this->questItem14;
    }

    public function setQuestItem14(?Quest $questItem14): self
    {
        $this->questItem14 = $questItem14;

        return $this;
    }

    public function getQuestItem13(): ?Quest
    {
        return $this->questItem13;
    }

    public function setQuestItem13(?Quest $questItem13): self
    {
        $this->questItem13 = $questItem13;

        return $this;
    }

    public function getQuestItem12(): ?Quest
    {
        return $this->questItem12;
    }

    public function setQuestItem12(?Quest $questItem12): self
    {
        $this->questItem12 = $questItem12;

        return $this;
    }

    public function getQuestItem11(): ?Quest
    {
        return $this->questItem11;
    }

    public function setQuestItem11(?Quest $questItem11): self
    {
        $this->questItem11 = $questItem11;

        return $this;
    }

    public function getQuestItem10(): ?Quest
    {
        return $this->questItem10;
    }

    public function setQuestItem10(?Quest $questItem10): self
    {
        $this->questItem10 = $questItem10;

        return $this;
    }

    public function getQuestItem9(): ?Quest
    {
        return $this->questItem9;
    }

    public function setQuestItem9(?Quest $questItem9): self
    {
        $this->questItem9 = $questItem9;

        return $this;
    }

    public function getQuestItem8(): ?Quest
    {
        return $this->questItem8;
    }

    public function setQuestItem8(?Quest $questItem8): self
    {
        $this->questItem8 = $questItem8;

        return $this;
    }

    public function getQuestItem7(): ?Quest
    {
        return $this->questItem7;
    }

    public function setQuestItem7(?Quest $questItem7): self
    {
        $this->questItem7 = $questItem7;

        return $this;
    }

    public function getQuestItem6(): ?Quest
    {
        return $this->questItem6;
    }

    public function setQuestItem6(?Quest $questItem6): self
    {
        $this->questItem6 = $questItem6;

        return $this;
    }

    public function getQuestItem5(): ?Quest
    {
        return $this->questItem5;
    }

    public function setQuestItem5(?Quest $questItem5): self
    {
        $this->questItem5 = $questItem5;

        return $this;
    }

    public function getQuestItem4(): ?Quest
    {
        return $this->questItem4;
    }

    public function setQuestItem4(?Quest $questItem4): self
    {
        $this->questItem4 = $questItem4;

        return $this;
    }

    public function getQuestItem3(): ?Quest
    {
        return $this->questItem3;
    }

    public function setQuestItem3(?Quest $questItem3): self
    {
        $this->questItem3 = $questItem3;

        return $this;
    }

    public function getQuestItem2(): ?Quest
    {
        return $this->questItem2;
    }

    public function setQuestItem2(?Quest $questItem2): self
    {
        $this->questItem2 = $questItem2;

        return $this;
    }

    public function getQuestItem1(): ?Quest
    {
        return $this->questItem1;
    }

    public function setQuestItem1(?Quest $questItem1): self
    {
        $this->questItem1 = $questItem1;

        return $this;
    }

    public function getQuestItem0(): ?Quest
    {
        return $this->questItem0;
    }

    public function setQuestItem0(?Quest $questItem0): self
    {
        $this->questItem0 = $questItem0;

        return $this;
    }

    public function getItemCost592(): ?Item
    {
        return $this->itemCost592;
    }

    public function setItemCost592(?Item $itemCost592): self
    {
        $this->itemCost592 = $itemCost592;

        return $this;
    }

    public function getItemCost582(): ?Item
    {
        return $this->itemCost582;
    }

    public function setItemCost582(?Item $itemCost582): self
    {
        $this->itemCost582 = $itemCost582;

        return $this;
    }

    public function getItemCost572(): ?Item
    {
        return $this->itemCost572;
    }

    public function setItemCost572(?Item $itemCost572): self
    {
        $this->itemCost572 = $itemCost572;

        return $this;
    }

    public function getItemCost562(): ?Item
    {
        return $this->itemCost562;
    }

    public function setItemCost562(?Item $itemCost562): self
    {
        $this->itemCost562 = $itemCost562;

        return $this;
    }

    public function getItemCost552(): ?Item
    {
        return $this->itemCost552;
    }

    public function setItemCost552(?Item $itemCost552): self
    {
        $this->itemCost552 = $itemCost552;

        return $this;
    }

    public function getItemCost542(): ?Item
    {
        return $this->itemCost542;
    }

    public function setItemCost542(?Item $itemCost542): self
    {
        $this->itemCost542 = $itemCost542;

        return $this;
    }

    public function getItemCost532(): ?Item
    {
        return $this->itemCost532;
    }

    public function setItemCost532(?Item $itemCost532): self
    {
        $this->itemCost532 = $itemCost532;

        return $this;
    }

    public function getItemCost522(): ?Item
    {
        return $this->itemCost522;
    }

    public function setItemCost522(?Item $itemCost522): self
    {
        $this->itemCost522 = $itemCost522;

        return $this;
    }

    public function getItemCost512(): ?Item
    {
        return $this->itemCost512;
    }

    public function setItemCost512(?Item $itemCost512): self
    {
        $this->itemCost512 = $itemCost512;

        return $this;
    }

    public function getItemCost502(): ?Item
    {
        return $this->itemCost502;
    }

    public function setItemCost502(?Item $itemCost502): self
    {
        $this->itemCost502 = $itemCost502;

        return $this;
    }

    public function getItemCost492(): ?Item
    {
        return $this->itemCost492;
    }

    public function setItemCost492(?Item $itemCost492): self
    {
        $this->itemCost492 = $itemCost492;

        return $this;
    }

    public function getItemCost482(): ?Item
    {
        return $this->itemCost482;
    }

    public function setItemCost482(?Item $itemCost482): self
    {
        $this->itemCost482 = $itemCost482;

        return $this;
    }

    public function getItemCost472(): ?Item
    {
        return $this->itemCost472;
    }

    public function setItemCost472(?Item $itemCost472): self
    {
        $this->itemCost472 = $itemCost472;

        return $this;
    }

    public function getItemCost462(): ?Item
    {
        return $this->itemCost462;
    }

    public function setItemCost462(?Item $itemCost462): self
    {
        $this->itemCost462 = $itemCost462;

        return $this;
    }

    public function getItemCost452(): ?Item
    {
        return $this->itemCost452;
    }

    public function setItemCost452(?Item $itemCost452): self
    {
        $this->itemCost452 = $itemCost452;

        return $this;
    }

    public function getItemCost442(): ?Item
    {
        return $this->itemCost442;
    }

    public function setItemCost442(?Item $itemCost442): self
    {
        $this->itemCost442 = $itemCost442;

        return $this;
    }

    public function getItemCost432(): ?Item
    {
        return $this->itemCost432;
    }

    public function setItemCost432(?Item $itemCost432): self
    {
        $this->itemCost432 = $itemCost432;

        return $this;
    }

    public function getItemCost422(): ?Item
    {
        return $this->itemCost422;
    }

    public function setItemCost422(?Item $itemCost422): self
    {
        $this->itemCost422 = $itemCost422;

        return $this;
    }

    public function getItemCost412(): ?Item
    {
        return $this->itemCost412;
    }

    public function setItemCost412(?Item $itemCost412): self
    {
        $this->itemCost412 = $itemCost412;

        return $this;
    }

    public function getItemCost402(): ?Item
    {
        return $this->itemCost402;
    }

    public function setItemCost402(?Item $itemCost402): self
    {
        $this->itemCost402 = $itemCost402;

        return $this;
    }

    public function getItemCost392(): ?Item
    {
        return $this->itemCost392;
    }

    public function setItemCost392(?Item $itemCost392): self
    {
        $this->itemCost392 = $itemCost392;

        return $this;
    }

    public function getItemCost382(): ?Item
    {
        return $this->itemCost382;
    }

    public function setItemCost382(?Item $itemCost382): self
    {
        $this->itemCost382 = $itemCost382;

        return $this;
    }

    public function getItemCost372(): ?Item
    {
        return $this->itemCost372;
    }

    public function setItemCost372(?Item $itemCost372): self
    {
        $this->itemCost372 = $itemCost372;

        return $this;
    }

    public function getItemCost362(): ?Item
    {
        return $this->itemCost362;
    }

    public function setItemCost362(?Item $itemCost362): self
    {
        $this->itemCost362 = $itemCost362;

        return $this;
    }

    public function getItemCost352(): ?Item
    {
        return $this->itemCost352;
    }

    public function setItemCost352(?Item $itemCost352): self
    {
        $this->itemCost352 = $itemCost352;

        return $this;
    }

    public function getItemCost342(): ?Item
    {
        return $this->itemCost342;
    }

    public function setItemCost342(?Item $itemCost342): self
    {
        $this->itemCost342 = $itemCost342;

        return $this;
    }

    public function getItemCost332(): ?Item
    {
        return $this->itemCost332;
    }

    public function setItemCost332(?Item $itemCost332): self
    {
        $this->itemCost332 = $itemCost332;

        return $this;
    }

    public function getItemCost322(): ?Item
    {
        return $this->itemCost322;
    }

    public function setItemCost322(?Item $itemCost322): self
    {
        $this->itemCost322 = $itemCost322;

        return $this;
    }

    public function getItemCost312(): ?Item
    {
        return $this->itemCost312;
    }

    public function setItemCost312(?Item $itemCost312): self
    {
        $this->itemCost312 = $itemCost312;

        return $this;
    }

    public function getItemCost302(): ?Item
    {
        return $this->itemCost302;
    }

    public function setItemCost302(?Item $itemCost302): self
    {
        $this->itemCost302 = $itemCost302;

        return $this;
    }

    public function getItemCost292(): ?Item
    {
        return $this->itemCost292;
    }

    public function setItemCost292(?Item $itemCost292): self
    {
        $this->itemCost292 = $itemCost292;

        return $this;
    }

    public function getItemCost282(): ?Item
    {
        return $this->itemCost282;
    }

    public function setItemCost282(?Item $itemCost282): self
    {
        $this->itemCost282 = $itemCost282;

        return $this;
    }

    public function getItemCost272(): ?Item
    {
        return $this->itemCost272;
    }

    public function setItemCost272(?Item $itemCost272): self
    {
        $this->itemCost272 = $itemCost272;

        return $this;
    }

    public function getItemCost262(): ?Item
    {
        return $this->itemCost262;
    }

    public function setItemCost262(?Item $itemCost262): self
    {
        $this->itemCost262 = $itemCost262;

        return $this;
    }

    public function getItemCost252(): ?Item
    {
        return $this->itemCost252;
    }

    public function setItemCost252(?Item $itemCost252): self
    {
        $this->itemCost252 = $itemCost252;

        return $this;
    }

    public function getItemCost242(): ?Item
    {
        return $this->itemCost242;
    }

    public function setItemCost242(?Item $itemCost242): self
    {
        $this->itemCost242 = $itemCost242;

        return $this;
    }

    public function getItemCost232(): ?Item
    {
        return $this->itemCost232;
    }

    public function setItemCost232(?Item $itemCost232): self
    {
        $this->itemCost232 = $itemCost232;

        return $this;
    }

    public function getItemCost222(): ?Item
    {
        return $this->itemCost222;
    }

    public function setItemCost222(?Item $itemCost222): self
    {
        $this->itemCost222 = $itemCost222;

        return $this;
    }

    public function getItemCost212(): ?Item
    {
        return $this->itemCost212;
    }

    public function setItemCost212(?Item $itemCost212): self
    {
        $this->itemCost212 = $itemCost212;

        return $this;
    }

    public function getItemCost202(): ?Item
    {
        return $this->itemCost202;
    }

    public function setItemCost202(?Item $itemCost202): self
    {
        $this->itemCost202 = $itemCost202;

        return $this;
    }

    public function getItemCost192(): ?Item
    {
        return $this->itemCost192;
    }

    public function setItemCost192(?Item $itemCost192): self
    {
        $this->itemCost192 = $itemCost192;

        return $this;
    }

    public function getItemCost182(): ?Item
    {
        return $this->itemCost182;
    }

    public function setItemCost182(?Item $itemCost182): self
    {
        $this->itemCost182 = $itemCost182;

        return $this;
    }

    public function getItemCost172(): ?Item
    {
        return $this->itemCost172;
    }

    public function setItemCost172(?Item $itemCost172): self
    {
        $this->itemCost172 = $itemCost172;

        return $this;
    }

    public function getItemCost162(): ?Item
    {
        return $this->itemCost162;
    }

    public function setItemCost162(?Item $itemCost162): self
    {
        $this->itemCost162 = $itemCost162;

        return $this;
    }

    public function getItemCost152(): ?Item
    {
        return $this->itemCost152;
    }

    public function setItemCost152(?Item $itemCost152): self
    {
        $this->itemCost152 = $itemCost152;

        return $this;
    }

    public function getItemCost142(): ?Item
    {
        return $this->itemCost142;
    }

    public function setItemCost142(?Item $itemCost142): self
    {
        $this->itemCost142 = $itemCost142;

        return $this;
    }

    public function getItemCost132(): ?Item
    {
        return $this->itemCost132;
    }

    public function setItemCost132(?Item $itemCost132): self
    {
        $this->itemCost132 = $itemCost132;

        return $this;
    }

    public function getItemCost122(): ?Item
    {
        return $this->itemCost122;
    }

    public function setItemCost122(?Item $itemCost122): self
    {
        $this->itemCost122 = $itemCost122;

        return $this;
    }

    public function getItemCost112(): ?Item
    {
        return $this->itemCost112;
    }

    public function setItemCost112(?Item $itemCost112): self
    {
        $this->itemCost112 = $itemCost112;

        return $this;
    }

    public function getItemCost102(): ?Item
    {
        return $this->itemCost102;
    }

    public function setItemCost102(?Item $itemCost102): self
    {
        $this->itemCost102 = $itemCost102;

        return $this;
    }

    public function getItemCost92(): ?Item
    {
        return $this->itemCost92;
    }

    public function setItemCost92(?Item $itemCost92): self
    {
        $this->itemCost92 = $itemCost92;

        return $this;
    }

    public function getItemCost82(): ?Item
    {
        return $this->itemCost82;
    }

    public function setItemCost82(?Item $itemCost82): self
    {
        $this->itemCost82 = $itemCost82;

        return $this;
    }

    public function getItemCost72(): ?Item
    {
        return $this->itemCost72;
    }

    public function setItemCost72(?Item $itemCost72): self
    {
        $this->itemCost72 = $itemCost72;

        return $this;
    }

    public function getItemCost62(): ?Item
    {
        return $this->itemCost62;
    }

    public function setItemCost62(?Item $itemCost62): self
    {
        $this->itemCost62 = $itemCost62;

        return $this;
    }

    public function getItemCost52(): ?Item
    {
        return $this->itemCost52;
    }

    public function setItemCost52(?Item $itemCost52): self
    {
        $this->itemCost52 = $itemCost52;

        return $this;
    }

    public function getItemCost42(): ?Item
    {
        return $this->itemCost42;
    }

    public function setItemCost42(?Item $itemCost42): self
    {
        $this->itemCost42 = $itemCost42;

        return $this;
    }

    public function getItemCost32(): ?Item
    {
        return $this->itemCost32;
    }

    public function setItemCost32(?Item $itemCost32): self
    {
        $this->itemCost32 = $itemCost32;

        return $this;
    }

    public function getItemCost22(): ?Item
    {
        return $this->itemCost22;
    }

    public function setItemCost22(?Item $itemCost22): self
    {
        $this->itemCost22 = $itemCost22;

        return $this;
    }

    public function getItemCost12(): ?Item
    {
        return $this->itemCost12;
    }

    public function setItemCost12(?Item $itemCost12): self
    {
        $this->itemCost12 = $itemCost12;

        return $this;
    }

    public function getItemCost02(): ?Item
    {
        return $this->itemCost02;
    }

    public function setItemCost02(?Item $itemCost02): self
    {
        $this->itemCost02 = $itemCost02;

        return $this;
    }

    public function getItemCost591(): ?Item
    {
        return $this->itemCost591;
    }

    public function setItemCost591(?Item $itemCost591): self
    {
        $this->itemCost591 = $itemCost591;

        return $this;
    }

    public function getItemCost581(): ?Item
    {
        return $this->itemCost581;
    }

    public function setItemCost581(?Item $itemCost581): self
    {
        $this->itemCost581 = $itemCost581;

        return $this;
    }

    public function getItemCost571(): ?Item
    {
        return $this->itemCost571;
    }

    public function setItemCost571(?Item $itemCost571): self
    {
        $this->itemCost571 = $itemCost571;

        return $this;
    }

    public function getItemCost561(): ?Item
    {
        return $this->itemCost561;
    }

    public function setItemCost561(?Item $itemCost561): self
    {
        $this->itemCost561 = $itemCost561;

        return $this;
    }

    public function getItemCost551(): ?Item
    {
        return $this->itemCost551;
    }

    public function setItemCost551(?Item $itemCost551): self
    {
        $this->itemCost551 = $itemCost551;

        return $this;
    }

    public function getItemCost541(): ?Item
    {
        return $this->itemCost541;
    }

    public function setItemCost541(?Item $itemCost541): self
    {
        $this->itemCost541 = $itemCost541;

        return $this;
    }

    public function getItemCost531(): ?Item
    {
        return $this->itemCost531;
    }

    public function setItemCost531(?Item $itemCost531): self
    {
        $this->itemCost531 = $itemCost531;

        return $this;
    }

    public function getItemCost521(): ?Item
    {
        return $this->itemCost521;
    }

    public function setItemCost521(?Item $itemCost521): self
    {
        $this->itemCost521 = $itemCost521;

        return $this;
    }

    public function getItemCost511(): ?Item
    {
        return $this->itemCost511;
    }

    public function setItemCost511(?Item $itemCost511): self
    {
        $this->itemCost511 = $itemCost511;

        return $this;
    }

    public function getItemCost501(): ?Item
    {
        return $this->itemCost501;
    }

    public function setItemCost501(?Item $itemCost501): self
    {
        $this->itemCost501 = $itemCost501;

        return $this;
    }

    public function getItemCost491(): ?Item
    {
        return $this->itemCost491;
    }

    public function setItemCost491(?Item $itemCost491): self
    {
        $this->itemCost491 = $itemCost491;

        return $this;
    }

    public function getItemCost481(): ?Item
    {
        return $this->itemCost481;
    }

    public function setItemCost481(?Item $itemCost481): self
    {
        $this->itemCost481 = $itemCost481;

        return $this;
    }

    public function getItemCost471(): ?Item
    {
        return $this->itemCost471;
    }

    public function setItemCost471(?Item $itemCost471): self
    {
        $this->itemCost471 = $itemCost471;

        return $this;
    }

    public function getItemCost461(): ?Item
    {
        return $this->itemCost461;
    }

    public function setItemCost461(?Item $itemCost461): self
    {
        $this->itemCost461 = $itemCost461;

        return $this;
    }

    public function getItemCost451(): ?Item
    {
        return $this->itemCost451;
    }

    public function setItemCost451(?Item $itemCost451): self
    {
        $this->itemCost451 = $itemCost451;

        return $this;
    }

    public function getItemCost441(): ?Item
    {
        return $this->itemCost441;
    }

    public function setItemCost441(?Item $itemCost441): self
    {
        $this->itemCost441 = $itemCost441;

        return $this;
    }

    public function getItemCost431(): ?Item
    {
        return $this->itemCost431;
    }

    public function setItemCost431(?Item $itemCost431): self
    {
        $this->itemCost431 = $itemCost431;

        return $this;
    }

    public function getItemCost421(): ?Item
    {
        return $this->itemCost421;
    }

    public function setItemCost421(?Item $itemCost421): self
    {
        $this->itemCost421 = $itemCost421;

        return $this;
    }

    public function getItemCost411(): ?Item
    {
        return $this->itemCost411;
    }

    public function setItemCost411(?Item $itemCost411): self
    {
        $this->itemCost411 = $itemCost411;

        return $this;
    }

    public function getItemCost401(): ?Item
    {
        return $this->itemCost401;
    }

    public function setItemCost401(?Item $itemCost401): self
    {
        $this->itemCost401 = $itemCost401;

        return $this;
    }

    public function getItemCost391(): ?Item
    {
        return $this->itemCost391;
    }

    public function setItemCost391(?Item $itemCost391): self
    {
        $this->itemCost391 = $itemCost391;

        return $this;
    }

    public function getItemCost381(): ?Item
    {
        return $this->itemCost381;
    }

    public function setItemCost381(?Item $itemCost381): self
    {
        $this->itemCost381 = $itemCost381;

        return $this;
    }

    public function getItemCost371(): ?Item
    {
        return $this->itemCost371;
    }

    public function setItemCost371(?Item $itemCost371): self
    {
        $this->itemCost371 = $itemCost371;

        return $this;
    }

    public function getItemCost361(): ?Item
    {
        return $this->itemCost361;
    }

    public function setItemCost361(?Item $itemCost361): self
    {
        $this->itemCost361 = $itemCost361;

        return $this;
    }

    public function getItemCost351(): ?Item
    {
        return $this->itemCost351;
    }

    public function setItemCost351(?Item $itemCost351): self
    {
        $this->itemCost351 = $itemCost351;

        return $this;
    }

    public function getItemCost341(): ?Item
    {
        return $this->itemCost341;
    }

    public function setItemCost341(?Item $itemCost341): self
    {
        $this->itemCost341 = $itemCost341;

        return $this;
    }

    public function getItemCost331(): ?Item
    {
        return $this->itemCost331;
    }

    public function setItemCost331(?Item $itemCost331): self
    {
        $this->itemCost331 = $itemCost331;

        return $this;
    }

    public function getItemCost321(): ?Item
    {
        return $this->itemCost321;
    }

    public function setItemCost321(?Item $itemCost321): self
    {
        $this->itemCost321 = $itemCost321;

        return $this;
    }

    public function getItemCost311(): ?Item
    {
        return $this->itemCost311;
    }

    public function setItemCost311(?Item $itemCost311): self
    {
        $this->itemCost311 = $itemCost311;

        return $this;
    }

    public function getItemCost301(): ?Item
    {
        return $this->itemCost301;
    }

    public function setItemCost301(?Item $itemCost301): self
    {
        $this->itemCost301 = $itemCost301;

        return $this;
    }

    public function getItemCost291(): ?Item
    {
        return $this->itemCost291;
    }

    public function setItemCost291(?Item $itemCost291): self
    {
        $this->itemCost291 = $itemCost291;

        return $this;
    }

    public function getItemCost281(): ?Item
    {
        return $this->itemCost281;
    }

    public function setItemCost281(?Item $itemCost281): self
    {
        $this->itemCost281 = $itemCost281;

        return $this;
    }

    public function getItemCost271(): ?Item
    {
        return $this->itemCost271;
    }

    public function setItemCost271(?Item $itemCost271): self
    {
        $this->itemCost271 = $itemCost271;

        return $this;
    }

    public function getItemCost261(): ?Item
    {
        return $this->itemCost261;
    }

    public function setItemCost261(?Item $itemCost261): self
    {
        $this->itemCost261 = $itemCost261;

        return $this;
    }

    public function getItemCost251(): ?Item
    {
        return $this->itemCost251;
    }

    public function setItemCost251(?Item $itemCost251): self
    {
        $this->itemCost251 = $itemCost251;

        return $this;
    }

    public function getItemCost241(): ?Item
    {
        return $this->itemCost241;
    }

    public function setItemCost241(?Item $itemCost241): self
    {
        $this->itemCost241 = $itemCost241;

        return $this;
    }

    public function getItemCost231(): ?Item
    {
        return $this->itemCost231;
    }

    public function setItemCost231(?Item $itemCost231): self
    {
        $this->itemCost231 = $itemCost231;

        return $this;
    }

    public function getItemCost221(): ?Item
    {
        return $this->itemCost221;
    }

    public function setItemCost221(?Item $itemCost221): self
    {
        $this->itemCost221 = $itemCost221;

        return $this;
    }

    public function getItemCost211(): ?Item
    {
        return $this->itemCost211;
    }

    public function setItemCost211(?Item $itemCost211): self
    {
        $this->itemCost211 = $itemCost211;

        return $this;
    }

    public function getItemCost201(): ?Item
    {
        return $this->itemCost201;
    }

    public function setItemCost201(?Item $itemCost201): self
    {
        $this->itemCost201 = $itemCost201;

        return $this;
    }

    public function getItemCost191(): ?Item
    {
        return $this->itemCost191;
    }

    public function setItemCost191(?Item $itemCost191): self
    {
        $this->itemCost191 = $itemCost191;

        return $this;
    }

    public function getItemCost181(): ?Item
    {
        return $this->itemCost181;
    }

    public function setItemCost181(?Item $itemCost181): self
    {
        $this->itemCost181 = $itemCost181;

        return $this;
    }

    public function getItemCost171(): ?Item
    {
        return $this->itemCost171;
    }

    public function setItemCost171(?Item $itemCost171): self
    {
        $this->itemCost171 = $itemCost171;

        return $this;
    }

    public function getItemCost161(): ?Item
    {
        return $this->itemCost161;
    }

    public function setItemCost161(?Item $itemCost161): self
    {
        $this->itemCost161 = $itemCost161;

        return $this;
    }

    public function getItemCost151(): ?Item
    {
        return $this->itemCost151;
    }

    public function setItemCost151(?Item $itemCost151): self
    {
        $this->itemCost151 = $itemCost151;

        return $this;
    }

    public function getItemCost141(): ?Item
    {
        return $this->itemCost141;
    }

    public function setItemCost141(?Item $itemCost141): self
    {
        $this->itemCost141 = $itemCost141;

        return $this;
    }

    public function getItemCost131(): ?Item
    {
        return $this->itemCost131;
    }

    public function setItemCost131(?Item $itemCost131): self
    {
        $this->itemCost131 = $itemCost131;

        return $this;
    }

    public function getItemCost121(): ?Item
    {
        return $this->itemCost121;
    }

    public function setItemCost121(?Item $itemCost121): self
    {
        $this->itemCost121 = $itemCost121;

        return $this;
    }

    public function getItemCost111(): ?Item
    {
        return $this->itemCost111;
    }

    public function setItemCost111(?Item $itemCost111): self
    {
        $this->itemCost111 = $itemCost111;

        return $this;
    }

    public function getItemCost101(): ?Item
    {
        return $this->itemCost101;
    }

    public function setItemCost101(?Item $itemCost101): self
    {
        $this->itemCost101 = $itemCost101;

        return $this;
    }

    public function getItemCost91(): ?Item
    {
        return $this->itemCost91;
    }

    public function setItemCost91(?Item $itemCost91): self
    {
        $this->itemCost91 = $itemCost91;

        return $this;
    }

    public function getItemCost81(): ?Item
    {
        return $this->itemCost81;
    }

    public function setItemCost81(?Item $itemCost81): self
    {
        $this->itemCost81 = $itemCost81;

        return $this;
    }

    public function getItemCost71(): ?Item
    {
        return $this->itemCost71;
    }

    public function setItemCost71(?Item $itemCost71): self
    {
        $this->itemCost71 = $itemCost71;

        return $this;
    }

    public function getItemCost61(): ?Item
    {
        return $this->itemCost61;
    }

    public function setItemCost61(?Item $itemCost61): self
    {
        $this->itemCost61 = $itemCost61;

        return $this;
    }

    public function getItemCost51(): ?Item
    {
        return $this->itemCost51;
    }

    public function setItemCost51(?Item $itemCost51): self
    {
        $this->itemCost51 = $itemCost51;

        return $this;
    }

    public function getItemCost41(): ?Item
    {
        return $this->itemCost41;
    }

    public function setItemCost41(?Item $itemCost41): self
    {
        $this->itemCost41 = $itemCost41;

        return $this;
    }

    public function getItemCost31(): ?Item
    {
        return $this->itemCost31;
    }

    public function setItemCost31(?Item $itemCost31): self
    {
        $this->itemCost31 = $itemCost31;

        return $this;
    }

    public function getItemCost21(): ?Item
    {
        return $this->itemCost21;
    }

    public function setItemCost21(?Item $itemCost21): self
    {
        $this->itemCost21 = $itemCost21;

        return $this;
    }

    public function getItemCost11(): ?Item
    {
        return $this->itemCost11;
    }

    public function setItemCost11(?Item $itemCost11): self
    {
        $this->itemCost11 = $itemCost11;

        return $this;
    }

    public function getItemCost01(): ?Item
    {
        return $this->itemCost01;
    }

    public function setItemCost01(?Item $itemCost01): self
    {
        $this->itemCost01 = $itemCost01;

        return $this;
    }

    public function getItemCost590(): ?Item
    {
        return $this->itemCost590;
    }

    public function setItemCost590(?Item $itemCost590): self
    {
        $this->itemCost590 = $itemCost590;

        return $this;
    }

    public function getItemCost580(): ?Item
    {
        return $this->itemCost580;
    }

    public function setItemCost580(?Item $itemCost580): self
    {
        $this->itemCost580 = $itemCost580;

        return $this;
    }

    public function getItemCost570(): ?Item
    {
        return $this->itemCost570;
    }

    public function setItemCost570(?Item $itemCost570): self
    {
        $this->itemCost570 = $itemCost570;

        return $this;
    }

    public function getItemCost560(): ?Item
    {
        return $this->itemCost560;
    }

    public function setItemCost560(?Item $itemCost560): self
    {
        $this->itemCost560 = $itemCost560;

        return $this;
    }

    public function getItemCost550(): ?Item
    {
        return $this->itemCost550;
    }

    public function setItemCost550(?Item $itemCost550): self
    {
        $this->itemCost550 = $itemCost550;

        return $this;
    }

    public function getItemCost540(): ?Item
    {
        return $this->itemCost540;
    }

    public function setItemCost540(?Item $itemCost540): self
    {
        $this->itemCost540 = $itemCost540;

        return $this;
    }

    public function getItemCost530(): ?Item
    {
        return $this->itemCost530;
    }

    public function setItemCost530(?Item $itemCost530): self
    {
        $this->itemCost530 = $itemCost530;

        return $this;
    }

    public function getItemCost520(): ?Item
    {
        return $this->itemCost520;
    }

    public function setItemCost520(?Item $itemCost520): self
    {
        $this->itemCost520 = $itemCost520;

        return $this;
    }

    public function getItemCost510(): ?Item
    {
        return $this->itemCost510;
    }

    public function setItemCost510(?Item $itemCost510): self
    {
        $this->itemCost510 = $itemCost510;

        return $this;
    }

    public function getItemCost500(): ?Item
    {
        return $this->itemCost500;
    }

    public function setItemCost500(?Item $itemCost500): self
    {
        $this->itemCost500 = $itemCost500;

        return $this;
    }

    public function getItemCost490(): ?Item
    {
        return $this->itemCost490;
    }

    public function setItemCost490(?Item $itemCost490): self
    {
        $this->itemCost490 = $itemCost490;

        return $this;
    }

    public function getItemCost480(): ?Item
    {
        return $this->itemCost480;
    }

    public function setItemCost480(?Item $itemCost480): self
    {
        $this->itemCost480 = $itemCost480;

        return $this;
    }

    public function getItemCost470(): ?Item
    {
        return $this->itemCost470;
    }

    public function setItemCost470(?Item $itemCost470): self
    {
        $this->itemCost470 = $itemCost470;

        return $this;
    }

    public function getItemCost460(): ?Item
    {
        return $this->itemCost460;
    }

    public function setItemCost460(?Item $itemCost460): self
    {
        $this->itemCost460 = $itemCost460;

        return $this;
    }

    public function getItemCost450(): ?Item
    {
        return $this->itemCost450;
    }

    public function setItemCost450(?Item $itemCost450): self
    {
        $this->itemCost450 = $itemCost450;

        return $this;
    }

    public function getItemCost440(): ?Item
    {
        return $this->itemCost440;
    }

    public function setItemCost440(?Item $itemCost440): self
    {
        $this->itemCost440 = $itemCost440;

        return $this;
    }

    public function getItemCost430(): ?Item
    {
        return $this->itemCost430;
    }

    public function setItemCost430(?Item $itemCost430): self
    {
        $this->itemCost430 = $itemCost430;

        return $this;
    }

    public function getItemCost420(): ?Item
    {
        return $this->itemCost420;
    }

    public function setItemCost420(?Item $itemCost420): self
    {
        $this->itemCost420 = $itemCost420;

        return $this;
    }

    public function getItemCost410(): ?Item
    {
        return $this->itemCost410;
    }

    public function setItemCost410(?Item $itemCost410): self
    {
        $this->itemCost410 = $itemCost410;

        return $this;
    }

    public function getItemCost400(): ?Item
    {
        return $this->itemCost400;
    }

    public function setItemCost400(?Item $itemCost400): self
    {
        $this->itemCost400 = $itemCost400;

        return $this;
    }

    public function getItemCost390(): ?Item
    {
        return $this->itemCost390;
    }

    public function setItemCost390(?Item $itemCost390): self
    {
        $this->itemCost390 = $itemCost390;

        return $this;
    }

    public function getItemCost380(): ?Item
    {
        return $this->itemCost380;
    }

    public function setItemCost380(?Item $itemCost380): self
    {
        $this->itemCost380 = $itemCost380;

        return $this;
    }

    public function getItemCost370(): ?Item
    {
        return $this->itemCost370;
    }

    public function setItemCost370(?Item $itemCost370): self
    {
        $this->itemCost370 = $itemCost370;

        return $this;
    }

    public function getItemCost360(): ?Item
    {
        return $this->itemCost360;
    }

    public function setItemCost360(?Item $itemCost360): self
    {
        $this->itemCost360 = $itemCost360;

        return $this;
    }

    public function getItemCost350(): ?Item
    {
        return $this->itemCost350;
    }

    public function setItemCost350(?Item $itemCost350): self
    {
        $this->itemCost350 = $itemCost350;

        return $this;
    }

    public function getItemCost340(): ?Item
    {
        return $this->itemCost340;
    }

    public function setItemCost340(?Item $itemCost340): self
    {
        $this->itemCost340 = $itemCost340;

        return $this;
    }

    public function getItemCost330(): ?Item
    {
        return $this->itemCost330;
    }

    public function setItemCost330(?Item $itemCost330): self
    {
        $this->itemCost330 = $itemCost330;

        return $this;
    }

    public function getItemCost320(): ?Item
    {
        return $this->itemCost320;
    }

    public function setItemCost320(?Item $itemCost320): self
    {
        $this->itemCost320 = $itemCost320;

        return $this;
    }

    public function getItemCost310(): ?Item
    {
        return $this->itemCost310;
    }

    public function setItemCost310(?Item $itemCost310): self
    {
        $this->itemCost310 = $itemCost310;

        return $this;
    }

    public function getItemCost300(): ?Item
    {
        return $this->itemCost300;
    }

    public function setItemCost300(?Item $itemCost300): self
    {
        $this->itemCost300 = $itemCost300;

        return $this;
    }

    public function getItemCost290(): ?Item
    {
        return $this->itemCost290;
    }

    public function setItemCost290(?Item $itemCost290): self
    {
        $this->itemCost290 = $itemCost290;

        return $this;
    }

    public function getItemCost280(): ?Item
    {
        return $this->itemCost280;
    }

    public function setItemCost280(?Item $itemCost280): self
    {
        $this->itemCost280 = $itemCost280;

        return $this;
    }

    public function getItemCost270(): ?Item
    {
        return $this->itemCost270;
    }

    public function setItemCost270(?Item $itemCost270): self
    {
        $this->itemCost270 = $itemCost270;

        return $this;
    }

    public function getItemCost260(): ?Item
    {
        return $this->itemCost260;
    }

    public function setItemCost260(?Item $itemCost260): self
    {
        $this->itemCost260 = $itemCost260;

        return $this;
    }

    public function getItemCost250(): ?Item
    {
        return $this->itemCost250;
    }

    public function setItemCost250(?Item $itemCost250): self
    {
        $this->itemCost250 = $itemCost250;

        return $this;
    }

    public function getItemCost240(): ?Item
    {
        return $this->itemCost240;
    }

    public function setItemCost240(?Item $itemCost240): self
    {
        $this->itemCost240 = $itemCost240;

        return $this;
    }

    public function getItemCost230(): ?Item
    {
        return $this->itemCost230;
    }

    public function setItemCost230(?Item $itemCost230): self
    {
        $this->itemCost230 = $itemCost230;

        return $this;
    }

    public function getItemCost220(): ?Item
    {
        return $this->itemCost220;
    }

    public function setItemCost220(?Item $itemCost220): self
    {
        $this->itemCost220 = $itemCost220;

        return $this;
    }

    public function getItemCost210(): ?Item
    {
        return $this->itemCost210;
    }

    public function setItemCost210(?Item $itemCost210): self
    {
        $this->itemCost210 = $itemCost210;

        return $this;
    }

    public function getItemCost200(): ?Item
    {
        return $this->itemCost200;
    }

    public function setItemCost200(?Item $itemCost200): self
    {
        $this->itemCost200 = $itemCost200;

        return $this;
    }

    public function getItemCost190(): ?Item
    {
        return $this->itemCost190;
    }

    public function setItemCost190(?Item $itemCost190): self
    {
        $this->itemCost190 = $itemCost190;

        return $this;
    }

    public function getItemCost180(): ?Item
    {
        return $this->itemCost180;
    }

    public function setItemCost180(?Item $itemCost180): self
    {
        $this->itemCost180 = $itemCost180;

        return $this;
    }

    public function getItemCost170(): ?Item
    {
        return $this->itemCost170;
    }

    public function setItemCost170(?Item $itemCost170): self
    {
        $this->itemCost170 = $itemCost170;

        return $this;
    }

    public function getItemCost160(): ?Item
    {
        return $this->itemCost160;
    }

    public function setItemCost160(?Item $itemCost160): self
    {
        $this->itemCost160 = $itemCost160;

        return $this;
    }

    public function getItemCost150(): ?Item
    {
        return $this->itemCost150;
    }

    public function setItemCost150(?Item $itemCost150): self
    {
        $this->itemCost150 = $itemCost150;

        return $this;
    }

    public function getItemCost140(): ?Item
    {
        return $this->itemCost140;
    }

    public function setItemCost140(?Item $itemCost140): self
    {
        $this->itemCost140 = $itemCost140;

        return $this;
    }

    public function getItemCost130(): ?Item
    {
        return $this->itemCost130;
    }

    public function setItemCost130(?Item $itemCost130): self
    {
        $this->itemCost130 = $itemCost130;

        return $this;
    }

    public function getItemCost120(): ?Item
    {
        return $this->itemCost120;
    }

    public function setItemCost120(?Item $itemCost120): self
    {
        $this->itemCost120 = $itemCost120;

        return $this;
    }

    public function getItemCost110(): ?Item
    {
        return $this->itemCost110;
    }

    public function setItemCost110(?Item $itemCost110): self
    {
        $this->itemCost110 = $itemCost110;

        return $this;
    }

    public function getItemCost100(): ?Item
    {
        return $this->itemCost100;
    }

    public function setItemCost100(?Item $itemCost100): self
    {
        $this->itemCost100 = $itemCost100;

        return $this;
    }

    public function getItemCost90(): ?Item
    {
        return $this->itemCost90;
    }

    public function setItemCost90(?Item $itemCost90): self
    {
        $this->itemCost90 = $itemCost90;

        return $this;
    }

    public function getItemCost80(): ?Item
    {
        return $this->itemCost80;
    }

    public function setItemCost80(?Item $itemCost80): self
    {
        $this->itemCost80 = $itemCost80;

        return $this;
    }

    public function getItemCost70(): ?Item
    {
        return $this->itemCost70;
    }

    public function setItemCost70(?Item $itemCost70): self
    {
        $this->itemCost70 = $itemCost70;

        return $this;
    }

    public function getItemCost60(): ?Item
    {
        return $this->itemCost60;
    }

    public function setItemCost60(?Item $itemCost60): self
    {
        $this->itemCost60 = $itemCost60;

        return $this;
    }

    public function getItemCost50(): ?Item
    {
        return $this->itemCost50;
    }

    public function setItemCost50(?Item $itemCost50): self
    {
        $this->itemCost50 = $itemCost50;

        return $this;
    }

    public function getItemCost40(): ?Item
    {
        return $this->itemCost40;
    }

    public function setItemCost40(?Item $itemCost40): self
    {
        $this->itemCost40 = $itemCost40;

        return $this;
    }

    public function getItemCost30(): ?Item
    {
        return $this->itemCost30;
    }

    public function setItemCost30(?Item $itemCost30): self
    {
        $this->itemCost30 = $itemCost30;

        return $this;
    }

    public function getItemCost20(): ?Item
    {
        return $this->itemCost20;
    }

    public function setItemCost20(?Item $itemCost20): self
    {
        $this->itemCost20 = $itemCost20;

        return $this;
    }

    public function getItemCost10(): ?Item
    {
        return $this->itemCost10;
    }

    public function setItemCost10(?Item $itemCost10): self
    {
        $this->itemCost10 = $itemCost10;

        return $this;
    }

    public function getItemCost00(): ?Item
    {
        return $this->itemCost00;
    }

    public function setItemCost00(?Item $itemCost00): self
    {
        $this->itemCost00 = $itemCost00;

        return $this;
    }

    public function getSpecialShopItemCategory591(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory591;
    }

    public function setSpecialShopItemCategory591(?SpecialShopItemCategory $specialShopItemCategory591): self
    {
        $this->specialShopItemCategory591 = $specialShopItemCategory591;

        return $this;
    }

    public function getSpecialShopItemCategory581(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory581;
    }

    public function setSpecialShopItemCategory581(?SpecialShopItemCategory $specialShopItemCategory581): self
    {
        $this->specialShopItemCategory581 = $specialShopItemCategory581;

        return $this;
    }

    public function getSpecialShopItemCategory571(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory571;
    }

    public function setSpecialShopItemCategory571(?SpecialShopItemCategory $specialShopItemCategory571): self
    {
        $this->specialShopItemCategory571 = $specialShopItemCategory571;

        return $this;
    }

    public function getSpecialShopItemCategory561(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory561;
    }

    public function setSpecialShopItemCategory561(?SpecialShopItemCategory $specialShopItemCategory561): self
    {
        $this->specialShopItemCategory561 = $specialShopItemCategory561;

        return $this;
    }

    public function getSpecialShopItemCategory551(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory551;
    }

    public function setSpecialShopItemCategory551(?SpecialShopItemCategory $specialShopItemCategory551): self
    {
        $this->specialShopItemCategory551 = $specialShopItemCategory551;

        return $this;
    }

    public function getSpecialShopItemCategory541(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory541;
    }

    public function setSpecialShopItemCategory541(?SpecialShopItemCategory $specialShopItemCategory541): self
    {
        $this->specialShopItemCategory541 = $specialShopItemCategory541;

        return $this;
    }

    public function getSpecialShopItemCategory531(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory531;
    }

    public function setSpecialShopItemCategory531(?SpecialShopItemCategory $specialShopItemCategory531): self
    {
        $this->specialShopItemCategory531 = $specialShopItemCategory531;

        return $this;
    }

    public function getSpecialShopItemCategory521(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory521;
    }

    public function setSpecialShopItemCategory521(?SpecialShopItemCategory $specialShopItemCategory521): self
    {
        $this->specialShopItemCategory521 = $specialShopItemCategory521;

        return $this;
    }

    public function getSpecialShopItemCategory511(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory511;
    }

    public function setSpecialShopItemCategory511(?SpecialShopItemCategory $specialShopItemCategory511): self
    {
        $this->specialShopItemCategory511 = $specialShopItemCategory511;

        return $this;
    }

    public function getSpecialShopItemCategory501(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory501;
    }

    public function setSpecialShopItemCategory501(?SpecialShopItemCategory $specialShopItemCategory501): self
    {
        $this->specialShopItemCategory501 = $specialShopItemCategory501;

        return $this;
    }

    public function getSpecialShopItemCategory491(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory491;
    }

    public function setSpecialShopItemCategory491(?SpecialShopItemCategory $specialShopItemCategory491): self
    {
        $this->specialShopItemCategory491 = $specialShopItemCategory491;

        return $this;
    }

    public function getSpecialShopItemCategory481(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory481;
    }

    public function setSpecialShopItemCategory481(?SpecialShopItemCategory $specialShopItemCategory481): self
    {
        $this->specialShopItemCategory481 = $specialShopItemCategory481;

        return $this;
    }

    public function getSpecialShopItemCategory471(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory471;
    }

    public function setSpecialShopItemCategory471(?SpecialShopItemCategory $specialShopItemCategory471): self
    {
        $this->specialShopItemCategory471 = $specialShopItemCategory471;

        return $this;
    }

    public function getSpecialShopItemCategory461(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory461;
    }

    public function setSpecialShopItemCategory461(?SpecialShopItemCategory $specialShopItemCategory461): self
    {
        $this->specialShopItemCategory461 = $specialShopItemCategory461;

        return $this;
    }

    public function getSpecialShopItemCategory451(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory451;
    }

    public function setSpecialShopItemCategory451(?SpecialShopItemCategory $specialShopItemCategory451): self
    {
        $this->specialShopItemCategory451 = $specialShopItemCategory451;

        return $this;
    }

    public function getSpecialShopItemCategory441(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory441;
    }

    public function setSpecialShopItemCategory441(?SpecialShopItemCategory $specialShopItemCategory441): self
    {
        $this->specialShopItemCategory441 = $specialShopItemCategory441;

        return $this;
    }

    public function getSpecialShopItemCategory431(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory431;
    }

    public function setSpecialShopItemCategory431(?SpecialShopItemCategory $specialShopItemCategory431): self
    {
        $this->specialShopItemCategory431 = $specialShopItemCategory431;

        return $this;
    }

    public function getSpecialShopItemCategory421(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory421;
    }

    public function setSpecialShopItemCategory421(?SpecialShopItemCategory $specialShopItemCategory421): self
    {
        $this->specialShopItemCategory421 = $specialShopItemCategory421;

        return $this;
    }

    public function getSpecialShopItemCategory411(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory411;
    }

    public function setSpecialShopItemCategory411(?SpecialShopItemCategory $specialShopItemCategory411): self
    {
        $this->specialShopItemCategory411 = $specialShopItemCategory411;

        return $this;
    }

    public function getSpecialShopItemCategory401(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory401;
    }

    public function setSpecialShopItemCategory401(?SpecialShopItemCategory $specialShopItemCategory401): self
    {
        $this->specialShopItemCategory401 = $specialShopItemCategory401;

        return $this;
    }

    public function getSpecialShopItemCategory391(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory391;
    }

    public function setSpecialShopItemCategory391(?SpecialShopItemCategory $specialShopItemCategory391): self
    {
        $this->specialShopItemCategory391 = $specialShopItemCategory391;

        return $this;
    }

    public function getSpecialShopItemCategory381(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory381;
    }

    public function setSpecialShopItemCategory381(?SpecialShopItemCategory $specialShopItemCategory381): self
    {
        $this->specialShopItemCategory381 = $specialShopItemCategory381;

        return $this;
    }

    public function getSpecialShopItemCategory371(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory371;
    }

    public function setSpecialShopItemCategory371(?SpecialShopItemCategory $specialShopItemCategory371): self
    {
        $this->specialShopItemCategory371 = $specialShopItemCategory371;

        return $this;
    }

    public function getSpecialShopItemCategory361(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory361;
    }

    public function setSpecialShopItemCategory361(?SpecialShopItemCategory $specialShopItemCategory361): self
    {
        $this->specialShopItemCategory361 = $specialShopItemCategory361;

        return $this;
    }

    public function getSpecialShopItemCategory351(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory351;
    }

    public function setSpecialShopItemCategory351(?SpecialShopItemCategory $specialShopItemCategory351): self
    {
        $this->specialShopItemCategory351 = $specialShopItemCategory351;

        return $this;
    }

    public function getSpecialShopItemCategory341(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory341;
    }

    public function setSpecialShopItemCategory341(?SpecialShopItemCategory $specialShopItemCategory341): self
    {
        $this->specialShopItemCategory341 = $specialShopItemCategory341;

        return $this;
    }

    public function getSpecialShopItemCategory331(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory331;
    }

    public function setSpecialShopItemCategory331(?SpecialShopItemCategory $specialShopItemCategory331): self
    {
        $this->specialShopItemCategory331 = $specialShopItemCategory331;

        return $this;
    }

    public function getSpecialShopItemCategory321(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory321;
    }

    public function setSpecialShopItemCategory321(?SpecialShopItemCategory $specialShopItemCategory321): self
    {
        $this->specialShopItemCategory321 = $specialShopItemCategory321;

        return $this;
    }

    public function getSpecialShopItemCategory311(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory311;
    }

    public function setSpecialShopItemCategory311(?SpecialShopItemCategory $specialShopItemCategory311): self
    {
        $this->specialShopItemCategory311 = $specialShopItemCategory311;

        return $this;
    }

    public function getSpecialShopItemCategory301(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory301;
    }

    public function setSpecialShopItemCategory301(?SpecialShopItemCategory $specialShopItemCategory301): self
    {
        $this->specialShopItemCategory301 = $specialShopItemCategory301;

        return $this;
    }

    public function getSpecialShopItemCategory291(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory291;
    }

    public function setSpecialShopItemCategory291(?SpecialShopItemCategory $specialShopItemCategory291): self
    {
        $this->specialShopItemCategory291 = $specialShopItemCategory291;

        return $this;
    }

    public function getSpecialShopItemCategory281(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory281;
    }

    public function setSpecialShopItemCategory281(?SpecialShopItemCategory $specialShopItemCategory281): self
    {
        $this->specialShopItemCategory281 = $specialShopItemCategory281;

        return $this;
    }

    public function getSpecialShopItemCategory271(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory271;
    }

    public function setSpecialShopItemCategory271(?SpecialShopItemCategory $specialShopItemCategory271): self
    {
        $this->specialShopItemCategory271 = $specialShopItemCategory271;

        return $this;
    }

    public function getSpecialShopItemCategory261(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory261;
    }

    public function setSpecialShopItemCategory261(?SpecialShopItemCategory $specialShopItemCategory261): self
    {
        $this->specialShopItemCategory261 = $specialShopItemCategory261;

        return $this;
    }

    public function getSpecialShopItemCategory251(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory251;
    }

    public function setSpecialShopItemCategory251(?SpecialShopItemCategory $specialShopItemCategory251): self
    {
        $this->specialShopItemCategory251 = $specialShopItemCategory251;

        return $this;
    }

    public function getSpecialShopItemCategory241(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory241;
    }

    public function setSpecialShopItemCategory241(?SpecialShopItemCategory $specialShopItemCategory241): self
    {
        $this->specialShopItemCategory241 = $specialShopItemCategory241;

        return $this;
    }

    public function getSpecialShopItemCategory231(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory231;
    }

    public function setSpecialShopItemCategory231(?SpecialShopItemCategory $specialShopItemCategory231): self
    {
        $this->specialShopItemCategory231 = $specialShopItemCategory231;

        return $this;
    }

    public function getSpecialShopItemCategory221(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory221;
    }

    public function setSpecialShopItemCategory221(?SpecialShopItemCategory $specialShopItemCategory221): self
    {
        $this->specialShopItemCategory221 = $specialShopItemCategory221;

        return $this;
    }

    public function getSpecialShopItemCategory211(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory211;
    }

    public function setSpecialShopItemCategory211(?SpecialShopItemCategory $specialShopItemCategory211): self
    {
        $this->specialShopItemCategory211 = $specialShopItemCategory211;

        return $this;
    }

    public function getSpecialShopItemCategory201(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory201;
    }

    public function setSpecialShopItemCategory201(?SpecialShopItemCategory $specialShopItemCategory201): self
    {
        $this->specialShopItemCategory201 = $specialShopItemCategory201;

        return $this;
    }

    public function getSpecialShopItemCategory191(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory191;
    }

    public function setSpecialShopItemCategory191(?SpecialShopItemCategory $specialShopItemCategory191): self
    {
        $this->specialShopItemCategory191 = $specialShopItemCategory191;

        return $this;
    }

    public function getSpecialShopItemCategory181(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory181;
    }

    public function setSpecialShopItemCategory181(?SpecialShopItemCategory $specialShopItemCategory181): self
    {
        $this->specialShopItemCategory181 = $specialShopItemCategory181;

        return $this;
    }

    public function getSpecialShopItemCategory171(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory171;
    }

    public function setSpecialShopItemCategory171(?SpecialShopItemCategory $specialShopItemCategory171): self
    {
        $this->specialShopItemCategory171 = $specialShopItemCategory171;

        return $this;
    }

    public function getSpecialShopItemCategory161(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory161;
    }

    public function setSpecialShopItemCategory161(?SpecialShopItemCategory $specialShopItemCategory161): self
    {
        $this->specialShopItemCategory161 = $specialShopItemCategory161;

        return $this;
    }

    public function getSpecialShopItemCategory151(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory151;
    }

    public function setSpecialShopItemCategory151(?SpecialShopItemCategory $specialShopItemCategory151): self
    {
        $this->specialShopItemCategory151 = $specialShopItemCategory151;

        return $this;
    }

    public function getSpecialShopItemCategory141(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory141;
    }

    public function setSpecialShopItemCategory141(?SpecialShopItemCategory $specialShopItemCategory141): self
    {
        $this->specialShopItemCategory141 = $specialShopItemCategory141;

        return $this;
    }

    public function getSpecialShopItemCategory131(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory131;
    }

    public function setSpecialShopItemCategory131(?SpecialShopItemCategory $specialShopItemCategory131): self
    {
        $this->specialShopItemCategory131 = $specialShopItemCategory131;

        return $this;
    }

    public function getSpecialShopItemCategory121(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory121;
    }

    public function setSpecialShopItemCategory121(?SpecialShopItemCategory $specialShopItemCategory121): self
    {
        $this->specialShopItemCategory121 = $specialShopItemCategory121;

        return $this;
    }

    public function getSpecialShopItemCategory111(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory111;
    }

    public function setSpecialShopItemCategory111(?SpecialShopItemCategory $specialShopItemCategory111): self
    {
        $this->specialShopItemCategory111 = $specialShopItemCategory111;

        return $this;
    }

    public function getSpecialShopItemCategory101(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory101;
    }

    public function setSpecialShopItemCategory101(?SpecialShopItemCategory $specialShopItemCategory101): self
    {
        $this->specialShopItemCategory101 = $specialShopItemCategory101;

        return $this;
    }

    public function getSpecialShopItemCategory91(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory91;
    }

    public function setSpecialShopItemCategory91(?SpecialShopItemCategory $specialShopItemCategory91): self
    {
        $this->specialShopItemCategory91 = $specialShopItemCategory91;

        return $this;
    }

    public function getSpecialShopItemCategory81(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory81;
    }

    public function setSpecialShopItemCategory81(?SpecialShopItemCategory $specialShopItemCategory81): self
    {
        $this->specialShopItemCategory81 = $specialShopItemCategory81;

        return $this;
    }

    public function getSpecialShopItemCategory71(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory71;
    }

    public function setSpecialShopItemCategory71(?SpecialShopItemCategory $specialShopItemCategory71): self
    {
        $this->specialShopItemCategory71 = $specialShopItemCategory71;

        return $this;
    }

    public function getSpecialShopItemCategory61(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory61;
    }

    public function setSpecialShopItemCategory61(?SpecialShopItemCategory $specialShopItemCategory61): self
    {
        $this->specialShopItemCategory61 = $specialShopItemCategory61;

        return $this;
    }

    public function getSpecialShopItemCategory51(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory51;
    }

    public function setSpecialShopItemCategory51(?SpecialShopItemCategory $specialShopItemCategory51): self
    {
        $this->specialShopItemCategory51 = $specialShopItemCategory51;

        return $this;
    }

    public function getSpecialShopItemCategory41(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory41;
    }

    public function setSpecialShopItemCategory41(?SpecialShopItemCategory $specialShopItemCategory41): self
    {
        $this->specialShopItemCategory41 = $specialShopItemCategory41;

        return $this;
    }

    public function getSpecialShopItemCategory31(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory31;
    }

    public function setSpecialShopItemCategory31(?SpecialShopItemCategory $specialShopItemCategory31): self
    {
        $this->specialShopItemCategory31 = $specialShopItemCategory31;

        return $this;
    }

    public function getSpecialShopItemCategory21(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory21;
    }

    public function setSpecialShopItemCategory21(?SpecialShopItemCategory $specialShopItemCategory21): self
    {
        $this->specialShopItemCategory21 = $specialShopItemCategory21;

        return $this;
    }

    public function getSpecialShopItemCategory11(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory11;
    }

    public function setSpecialShopItemCategory11(?SpecialShopItemCategory $specialShopItemCategory11): self
    {
        $this->specialShopItemCategory11 = $specialShopItemCategory11;

        return $this;
    }

    public function getSpecialShopItemCategory01(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory01;
    }

    public function setSpecialShopItemCategory01(?SpecialShopItemCategory $specialShopItemCategory01): self
    {
        $this->specialShopItemCategory01 = $specialShopItemCategory01;

        return $this;
    }

    public function getItemReceive591(): ?Item
    {
        return $this->itemReceive591;
    }

    public function setItemReceive591(?Item $itemReceive591): self
    {
        $this->itemReceive591 = $itemReceive591;

        return $this;
    }

    public function getItemReceive581(): ?Item
    {
        return $this->itemReceive581;
    }

    public function setItemReceive581(?Item $itemReceive581): self
    {
        $this->itemReceive581 = $itemReceive581;

        return $this;
    }

    public function getItemReceive571(): ?Item
    {
        return $this->itemReceive571;
    }

    public function setItemReceive571(?Item $itemReceive571): self
    {
        $this->itemReceive571 = $itemReceive571;

        return $this;
    }

    public function getItemReceive561(): ?Item
    {
        return $this->itemReceive561;
    }

    public function setItemReceive561(?Item $itemReceive561): self
    {
        $this->itemReceive561 = $itemReceive561;

        return $this;
    }

    public function getItemReceive551(): ?Item
    {
        return $this->itemReceive551;
    }

    public function setItemReceive551(?Item $itemReceive551): self
    {
        $this->itemReceive551 = $itemReceive551;

        return $this;
    }

    public function getItemReceive541(): ?Item
    {
        return $this->itemReceive541;
    }

    public function setItemReceive541(?Item $itemReceive541): self
    {
        $this->itemReceive541 = $itemReceive541;

        return $this;
    }

    public function getItemReceive531(): ?Item
    {
        return $this->itemReceive531;
    }

    public function setItemReceive531(?Item $itemReceive531): self
    {
        $this->itemReceive531 = $itemReceive531;

        return $this;
    }

    public function getItemReceive521(): ?Item
    {
        return $this->itemReceive521;
    }

    public function setItemReceive521(?Item $itemReceive521): self
    {
        $this->itemReceive521 = $itemReceive521;

        return $this;
    }

    public function getItemReceive511(): ?Item
    {
        return $this->itemReceive511;
    }

    public function setItemReceive511(?Item $itemReceive511): self
    {
        $this->itemReceive511 = $itemReceive511;

        return $this;
    }

    public function getItemReceive501(): ?Item
    {
        return $this->itemReceive501;
    }

    public function setItemReceive501(?Item $itemReceive501): self
    {
        $this->itemReceive501 = $itemReceive501;

        return $this;
    }

    public function getItemReceive491(): ?Item
    {
        return $this->itemReceive491;
    }

    public function setItemReceive491(?Item $itemReceive491): self
    {
        $this->itemReceive491 = $itemReceive491;

        return $this;
    }

    public function getItemReceive481(): ?Item
    {
        return $this->itemReceive481;
    }

    public function setItemReceive481(?Item $itemReceive481): self
    {
        $this->itemReceive481 = $itemReceive481;

        return $this;
    }

    public function getItemReceive471(): ?Item
    {
        return $this->itemReceive471;
    }

    public function setItemReceive471(?Item $itemReceive471): self
    {
        $this->itemReceive471 = $itemReceive471;

        return $this;
    }

    public function getItemReceive461(): ?Item
    {
        return $this->itemReceive461;
    }

    public function setItemReceive461(?Item $itemReceive461): self
    {
        $this->itemReceive461 = $itemReceive461;

        return $this;
    }

    public function getItemReceive451(): ?Item
    {
        return $this->itemReceive451;
    }

    public function setItemReceive451(?Item $itemReceive451): self
    {
        $this->itemReceive451 = $itemReceive451;

        return $this;
    }

    public function getItemReceive441(): ?Item
    {
        return $this->itemReceive441;
    }

    public function setItemReceive441(?Item $itemReceive441): self
    {
        $this->itemReceive441 = $itemReceive441;

        return $this;
    }

    public function getAchievementUnlock19(): ?Achievement
    {
        return $this->achievementUnlock19;
    }

    public function setAchievementUnlock19(?Achievement $achievementUnlock19): self
    {
        $this->achievementUnlock19 = $achievementUnlock19;

        return $this;
    }

    public function getAchievementUnlock18(): ?Achievement
    {
        return $this->achievementUnlock18;
    }

    public function setAchievementUnlock18(?Achievement $achievementUnlock18): self
    {
        $this->achievementUnlock18 = $achievementUnlock18;

        return $this;
    }

    public function getAchievementUnlock17(): ?Achievement
    {
        return $this->achievementUnlock17;
    }

    public function setAchievementUnlock17(?Achievement $achievementUnlock17): self
    {
        $this->achievementUnlock17 = $achievementUnlock17;

        return $this;
    }

    public function getAchievementUnlock16(): ?Achievement
    {
        return $this->achievementUnlock16;
    }

    public function setAchievementUnlock16(?Achievement $achievementUnlock16): self
    {
        $this->achievementUnlock16 = $achievementUnlock16;

        return $this;
    }

    public function getAchievementUnlock15(): ?Achievement
    {
        return $this->achievementUnlock15;
    }

    public function setAchievementUnlock15(?Achievement $achievementUnlock15): self
    {
        $this->achievementUnlock15 = $achievementUnlock15;

        return $this;
    }

    public function getAchievementUnlock14(): ?Achievement
    {
        return $this->achievementUnlock14;
    }

    public function setAchievementUnlock14(?Achievement $achievementUnlock14): self
    {
        $this->achievementUnlock14 = $achievementUnlock14;

        return $this;
    }

    public function getAchievementUnlock13(): ?Achievement
    {
        return $this->achievementUnlock13;
    }

    public function setAchievementUnlock13(?Achievement $achievementUnlock13): self
    {
        $this->achievementUnlock13 = $achievementUnlock13;

        return $this;
    }

    public function getAchievementUnlock12(): ?Achievement
    {
        return $this->achievementUnlock12;
    }

    public function setAchievementUnlock12(?Achievement $achievementUnlock12): self
    {
        $this->achievementUnlock12 = $achievementUnlock12;

        return $this;
    }

    public function getAchievementUnlock11(): ?Achievement
    {
        return $this->achievementUnlock11;
    }

    public function setAchievementUnlock11(?Achievement $achievementUnlock11): self
    {
        $this->achievementUnlock11 = $achievementUnlock11;

        return $this;
    }

    public function getAchievementUnlock10(): ?Achievement
    {
        return $this->achievementUnlock10;
    }

    public function setAchievementUnlock10(?Achievement $achievementUnlock10): self
    {
        $this->achievementUnlock10 = $achievementUnlock10;

        return $this;
    }

    public function getAchievementUnlock9(): ?Achievement
    {
        return $this->achievementUnlock9;
    }

    public function setAchievementUnlock9(?Achievement $achievementUnlock9): self
    {
        $this->achievementUnlock9 = $achievementUnlock9;

        return $this;
    }

    public function getAchievementUnlock8(): ?Achievement
    {
        return $this->achievementUnlock8;
    }

    public function setAchievementUnlock8(?Achievement $achievementUnlock8): self
    {
        $this->achievementUnlock8 = $achievementUnlock8;

        return $this;
    }

    public function getAchievementUnlock7(): ?Achievement
    {
        return $this->achievementUnlock7;
    }

    public function setAchievementUnlock7(?Achievement $achievementUnlock7): self
    {
        $this->achievementUnlock7 = $achievementUnlock7;

        return $this;
    }

    public function getAchievementUnlock6(): ?Achievement
    {
        return $this->achievementUnlock6;
    }

    public function setAchievementUnlock6(?Achievement $achievementUnlock6): self
    {
        $this->achievementUnlock6 = $achievementUnlock6;

        return $this;
    }

    public function getAchievementUnlock5(): ?Achievement
    {
        return $this->achievementUnlock5;
    }

    public function setAchievementUnlock5(?Achievement $achievementUnlock5): self
    {
        $this->achievementUnlock5 = $achievementUnlock5;

        return $this;
    }

    public function getAchievementUnlock4(): ?Achievement
    {
        return $this->achievementUnlock4;
    }

    public function setAchievementUnlock4(?Achievement $achievementUnlock4): self
    {
        $this->achievementUnlock4 = $achievementUnlock4;

        return $this;
    }

    public function getAchievementUnlock3(): ?Achievement
    {
        return $this->achievementUnlock3;
    }

    public function setAchievementUnlock3(?Achievement $achievementUnlock3): self
    {
        $this->achievementUnlock3 = $achievementUnlock3;

        return $this;
    }

    public function getAchievementUnlock2(): ?Achievement
    {
        return $this->achievementUnlock2;
    }

    public function setAchievementUnlock2(?Achievement $achievementUnlock2): self
    {
        $this->achievementUnlock2 = $achievementUnlock2;

        return $this;
    }

    public function getAchievementUnlock1(): ?Achievement
    {
        return $this->achievementUnlock1;
    }

    public function setAchievementUnlock1(?Achievement $achievementUnlock1): self
    {
        $this->achievementUnlock1 = $achievementUnlock1;

        return $this;
    }

    public function getAchievementUnlock0(): ?Achievement
    {
        return $this->achievementUnlock0;
    }

    public function setAchievementUnlock0(?Achievement $achievementUnlock0): self
    {
        $this->achievementUnlock0 = $achievementUnlock0;

        return $this;
    }

    public function getItemReceive431(): ?Item
    {
        return $this->itemReceive431;
    }

    public function setItemReceive431(?Item $itemReceive431): self
    {
        $this->itemReceive431 = $itemReceive431;

        return $this;
    }

    public function getItemReceive421(): ?Item
    {
        return $this->itemReceive421;
    }

    public function setItemReceive421(?Item $itemReceive421): self
    {
        $this->itemReceive421 = $itemReceive421;

        return $this;
    }

    public function getItemReceive411(): ?Item
    {
        return $this->itemReceive411;
    }

    public function setItemReceive411(?Item $itemReceive411): self
    {
        $this->itemReceive411 = $itemReceive411;

        return $this;
    }

    public function getItemReceive401(): ?Item
    {
        return $this->itemReceive401;
    }

    public function setItemReceive401(?Item $itemReceive401): self
    {
        $this->itemReceive401 = $itemReceive401;

        return $this;
    }

    public function getItemReceive391(): ?Item
    {
        return $this->itemReceive391;
    }

    public function setItemReceive391(?Item $itemReceive391): self
    {
        $this->itemReceive391 = $itemReceive391;

        return $this;
    }

    public function getItemReceive381(): ?Item
    {
        return $this->itemReceive381;
    }

    public function setItemReceive381(?Item $itemReceive381): self
    {
        $this->itemReceive381 = $itemReceive381;

        return $this;
    }

    public function getItemReceive371(): ?Item
    {
        return $this->itemReceive371;
    }

    public function setItemReceive371(?Item $itemReceive371): self
    {
        $this->itemReceive371 = $itemReceive371;

        return $this;
    }

    public function getItemReceive361(): ?Item
    {
        return $this->itemReceive361;
    }

    public function setItemReceive361(?Item $itemReceive361): self
    {
        $this->itemReceive361 = $itemReceive361;

        return $this;
    }

    public function getItemReceive351(): ?Item
    {
        return $this->itemReceive351;
    }

    public function setItemReceive351(?Item $itemReceive351): self
    {
        $this->itemReceive351 = $itemReceive351;

        return $this;
    }

    public function getItemReceive341(): ?Item
    {
        return $this->itemReceive341;
    }

    public function setItemReceive341(?Item $itemReceive341): self
    {
        $this->itemReceive341 = $itemReceive341;

        return $this;
    }

    public function getItemReceive331(): ?Item
    {
        return $this->itemReceive331;
    }

    public function setItemReceive331(?Item $itemReceive331): self
    {
        $this->itemReceive331 = $itemReceive331;

        return $this;
    }

    public function getItemReceive321(): ?Item
    {
        return $this->itemReceive321;
    }

    public function setItemReceive321(?Item $itemReceive321): self
    {
        $this->itemReceive321 = $itemReceive321;

        return $this;
    }

    public function getItemReceive311(): ?Item
    {
        return $this->itemReceive311;
    }

    public function setItemReceive311(?Item $itemReceive311): self
    {
        $this->itemReceive311 = $itemReceive311;

        return $this;
    }

    public function getItemReceive301(): ?Item
    {
        return $this->itemReceive301;
    }

    public function setItemReceive301(?Item $itemReceive301): self
    {
        $this->itemReceive301 = $itemReceive301;

        return $this;
    }

    public function getItemReceive291(): ?Item
    {
        return $this->itemReceive291;
    }

    public function setItemReceive291(?Item $itemReceive291): self
    {
        $this->itemReceive291 = $itemReceive291;

        return $this;
    }

    public function getItemReceive281(): ?Item
    {
        return $this->itemReceive281;
    }

    public function setItemReceive281(?Item $itemReceive281): self
    {
        $this->itemReceive281 = $itemReceive281;

        return $this;
    }

    public function getItemReceive271(): ?Item
    {
        return $this->itemReceive271;
    }

    public function setItemReceive271(?Item $itemReceive271): self
    {
        $this->itemReceive271 = $itemReceive271;

        return $this;
    }

    public function getItemReceive261(): ?Item
    {
        return $this->itemReceive261;
    }

    public function setItemReceive261(?Item $itemReceive261): self
    {
        $this->itemReceive261 = $itemReceive261;

        return $this;
    }

    public function getItemReceive251(): ?Item
    {
        return $this->itemReceive251;
    }

    public function setItemReceive251(?Item $itemReceive251): self
    {
        $this->itemReceive251 = $itemReceive251;

        return $this;
    }

    public function getItemReceive241(): ?Item
    {
        return $this->itemReceive241;
    }

    public function setItemReceive241(?Item $itemReceive241): self
    {
        $this->itemReceive241 = $itemReceive241;

        return $this;
    }

    public function getItemReceive231(): ?Item
    {
        return $this->itemReceive231;
    }

    public function setItemReceive231(?Item $itemReceive231): self
    {
        $this->itemReceive231 = $itemReceive231;

        return $this;
    }

    public function getItemReceive221(): ?Item
    {
        return $this->itemReceive221;
    }

    public function setItemReceive221(?Item $itemReceive221): self
    {
        $this->itemReceive221 = $itemReceive221;

        return $this;
    }

    public function getItemReceive211(): ?Item
    {
        return $this->itemReceive211;
    }

    public function setItemReceive211(?Item $itemReceive211): self
    {
        $this->itemReceive211 = $itemReceive211;

        return $this;
    }

    public function getItemReceive201(): ?Item
    {
        return $this->itemReceive201;
    }

    public function setItemReceive201(?Item $itemReceive201): self
    {
        $this->itemReceive201 = $itemReceive201;

        return $this;
    }

    public function getItemReceive191(): ?Item
    {
        return $this->itemReceive191;
    }

    public function setItemReceive191(?Item $itemReceive191): self
    {
        $this->itemReceive191 = $itemReceive191;

        return $this;
    }

    public function getItemReceive181(): ?Item
    {
        return $this->itemReceive181;
    }

    public function setItemReceive181(?Item $itemReceive181): self
    {
        $this->itemReceive181 = $itemReceive181;

        return $this;
    }

    public function getItemReceive171(): ?Item
    {
        return $this->itemReceive171;
    }

    public function setItemReceive171(?Item $itemReceive171): self
    {
        $this->itemReceive171 = $itemReceive171;

        return $this;
    }

    public function getItemReceive161(): ?Item
    {
        return $this->itemReceive161;
    }

    public function setItemReceive161(?Item $itemReceive161): self
    {
        $this->itemReceive161 = $itemReceive161;

        return $this;
    }

    public function getItemReceive151(): ?Item
    {
        return $this->itemReceive151;
    }

    public function setItemReceive151(?Item $itemReceive151): self
    {
        $this->itemReceive151 = $itemReceive151;

        return $this;
    }

    public function getItemReceive141(): ?Item
    {
        return $this->itemReceive141;
    }

    public function setItemReceive141(?Item $itemReceive141): self
    {
        $this->itemReceive141 = $itemReceive141;

        return $this;
    }

    public function getItemReceive131(): ?Item
    {
        return $this->itemReceive131;
    }

    public function setItemReceive131(?Item $itemReceive131): self
    {
        $this->itemReceive131 = $itemReceive131;

        return $this;
    }

    public function getItemReceive121(): ?Item
    {
        return $this->itemReceive121;
    }

    public function setItemReceive121(?Item $itemReceive121): self
    {
        $this->itemReceive121 = $itemReceive121;

        return $this;
    }

    public function getItemReceive111(): ?Item
    {
        return $this->itemReceive111;
    }

    public function setItemReceive111(?Item $itemReceive111): self
    {
        $this->itemReceive111 = $itemReceive111;

        return $this;
    }

    public function getItemReceive101(): ?Item
    {
        return $this->itemReceive101;
    }

    public function setItemReceive101(?Item $itemReceive101): self
    {
        $this->itemReceive101 = $itemReceive101;

        return $this;
    }

    public function getItemReceive91(): ?Item
    {
        return $this->itemReceive91;
    }

    public function setItemReceive91(?Item $itemReceive91): self
    {
        $this->itemReceive91 = $itemReceive91;

        return $this;
    }

    public function getItemReceive81(): ?Item
    {
        return $this->itemReceive81;
    }

    public function setItemReceive81(?Item $itemReceive81): self
    {
        $this->itemReceive81 = $itemReceive81;

        return $this;
    }

    public function getItemReceive71(): ?Item
    {
        return $this->itemReceive71;
    }

    public function setItemReceive71(?Item $itemReceive71): self
    {
        $this->itemReceive71 = $itemReceive71;

        return $this;
    }

    public function getItemReceive61(): ?Item
    {
        return $this->itemReceive61;
    }

    public function setItemReceive61(?Item $itemReceive61): self
    {
        $this->itemReceive61 = $itemReceive61;

        return $this;
    }

    public function getItemReceive51(): ?Item
    {
        return $this->itemReceive51;
    }

    public function setItemReceive51(?Item $itemReceive51): self
    {
        $this->itemReceive51 = $itemReceive51;

        return $this;
    }

    public function getItemReceive41(): ?Item
    {
        return $this->itemReceive41;
    }

    public function setItemReceive41(?Item $itemReceive41): self
    {
        $this->itemReceive41 = $itemReceive41;

        return $this;
    }

    public function getItemReceive31(): ?Item
    {
        return $this->itemReceive31;
    }

    public function setItemReceive31(?Item $itemReceive31): self
    {
        $this->itemReceive31 = $itemReceive31;

        return $this;
    }

    public function getItemReceive21(): ?Item
    {
        return $this->itemReceive21;
    }

    public function setItemReceive21(?Item $itemReceive21): self
    {
        $this->itemReceive21 = $itemReceive21;

        return $this;
    }

    public function getItemReceive11(): ?Item
    {
        return $this->itemReceive11;
    }

    public function setItemReceive11(?Item $itemReceive11): self
    {
        $this->itemReceive11 = $itemReceive11;

        return $this;
    }

    public function getItemReceive01(): ?Item
    {
        return $this->itemReceive01;
    }

    public function setItemReceive01(?Item $itemReceive01): self
    {
        $this->itemReceive01 = $itemReceive01;

        return $this;
    }

    public function getSpecialShopItemCategory590(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory590;
    }

    public function setSpecialShopItemCategory590(?SpecialShopItemCategory $specialShopItemCategory590): self
    {
        $this->specialShopItemCategory590 = $specialShopItemCategory590;

        return $this;
    }

    public function getSpecialShopItemCategory580(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory580;
    }

    public function setSpecialShopItemCategory580(?SpecialShopItemCategory $specialShopItemCategory580): self
    {
        $this->specialShopItemCategory580 = $specialShopItemCategory580;

        return $this;
    }

    public function getSpecialShopItemCategory570(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory570;
    }

    public function setSpecialShopItemCategory570(?SpecialShopItemCategory $specialShopItemCategory570): self
    {
        $this->specialShopItemCategory570 = $specialShopItemCategory570;

        return $this;
    }

    public function getSpecialShopItemCategory560(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory560;
    }

    public function setSpecialShopItemCategory560(?SpecialShopItemCategory $specialShopItemCategory560): self
    {
        $this->specialShopItemCategory560 = $specialShopItemCategory560;

        return $this;
    }

    public function getSpecialShopItemCategory550(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory550;
    }

    public function setSpecialShopItemCategory550(?SpecialShopItemCategory $specialShopItemCategory550): self
    {
        $this->specialShopItemCategory550 = $specialShopItemCategory550;

        return $this;
    }

    public function getSpecialShopItemCategory540(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory540;
    }

    public function setSpecialShopItemCategory540(?SpecialShopItemCategory $specialShopItemCategory540): self
    {
        $this->specialShopItemCategory540 = $specialShopItemCategory540;

        return $this;
    }

    public function getSpecialShopItemCategory530(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory530;
    }

    public function setSpecialShopItemCategory530(?SpecialShopItemCategory $specialShopItemCategory530): self
    {
        $this->specialShopItemCategory530 = $specialShopItemCategory530;

        return $this;
    }

    public function getSpecialShopItemCategory520(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory520;
    }

    public function setSpecialShopItemCategory520(?SpecialShopItemCategory $specialShopItemCategory520): self
    {
        $this->specialShopItemCategory520 = $specialShopItemCategory520;

        return $this;
    }

    public function getSpecialShopItemCategory510(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory510;
    }

    public function setSpecialShopItemCategory510(?SpecialShopItemCategory $specialShopItemCategory510): self
    {
        $this->specialShopItemCategory510 = $specialShopItemCategory510;

        return $this;
    }

    public function getSpecialShopItemCategory500(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory500;
    }

    public function setSpecialShopItemCategory500(?SpecialShopItemCategory $specialShopItemCategory500): self
    {
        $this->specialShopItemCategory500 = $specialShopItemCategory500;

        return $this;
    }

    public function getSpecialShopItemCategory490(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory490;
    }

    public function setSpecialShopItemCategory490(?SpecialShopItemCategory $specialShopItemCategory490): self
    {
        $this->specialShopItemCategory490 = $specialShopItemCategory490;

        return $this;
    }

    public function getSpecialShopItemCategory480(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory480;
    }

    public function setSpecialShopItemCategory480(?SpecialShopItemCategory $specialShopItemCategory480): self
    {
        $this->specialShopItemCategory480 = $specialShopItemCategory480;

        return $this;
    }

    public function getSpecialShopItemCategory470(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory470;
    }

    public function setSpecialShopItemCategory470(?SpecialShopItemCategory $specialShopItemCategory470): self
    {
        $this->specialShopItemCategory470 = $specialShopItemCategory470;

        return $this;
    }

    public function getSpecialShopItemCategory460(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory460;
    }

    public function setSpecialShopItemCategory460(?SpecialShopItemCategory $specialShopItemCategory460): self
    {
        $this->specialShopItemCategory460 = $specialShopItemCategory460;

        return $this;
    }

    public function getSpecialShopItemCategory450(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory450;
    }

    public function setSpecialShopItemCategory450(?SpecialShopItemCategory $specialShopItemCategory450): self
    {
        $this->specialShopItemCategory450 = $specialShopItemCategory450;

        return $this;
    }

    public function getSpecialShopItemCategory440(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory440;
    }

    public function setSpecialShopItemCategory440(?SpecialShopItemCategory $specialShopItemCategory440): self
    {
        $this->specialShopItemCategory440 = $specialShopItemCategory440;

        return $this;
    }

    public function getSpecialShopItemCategory430(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory430;
    }

    public function setSpecialShopItemCategory430(?SpecialShopItemCategory $specialShopItemCategory430): self
    {
        $this->specialShopItemCategory430 = $specialShopItemCategory430;

        return $this;
    }

    public function getSpecialShopItemCategory420(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory420;
    }

    public function setSpecialShopItemCategory420(?SpecialShopItemCategory $specialShopItemCategory420): self
    {
        $this->specialShopItemCategory420 = $specialShopItemCategory420;

        return $this;
    }

    public function getSpecialShopItemCategory410(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory410;
    }

    public function setSpecialShopItemCategory410(?SpecialShopItemCategory $specialShopItemCategory410): self
    {
        $this->specialShopItemCategory410 = $specialShopItemCategory410;

        return $this;
    }

    public function getSpecialShopItemCategory400(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory400;
    }

    public function setSpecialShopItemCategory400(?SpecialShopItemCategory $specialShopItemCategory400): self
    {
        $this->specialShopItemCategory400 = $specialShopItemCategory400;

        return $this;
    }

    public function getSpecialShopItemCategory390(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory390;
    }

    public function setSpecialShopItemCategory390(?SpecialShopItemCategory $specialShopItemCategory390): self
    {
        $this->specialShopItemCategory390 = $specialShopItemCategory390;

        return $this;
    }

    public function getSpecialShopItemCategory380(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory380;
    }

    public function setSpecialShopItemCategory380(?SpecialShopItemCategory $specialShopItemCategory380): self
    {
        $this->specialShopItemCategory380 = $specialShopItemCategory380;

        return $this;
    }

    public function getSpecialShopItemCategory370(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory370;
    }

    public function setSpecialShopItemCategory370(?SpecialShopItemCategory $specialShopItemCategory370): self
    {
        $this->specialShopItemCategory370 = $specialShopItemCategory370;

        return $this;
    }

    public function getSpecialShopItemCategory360(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory360;
    }

    public function setSpecialShopItemCategory360(?SpecialShopItemCategory $specialShopItemCategory360): self
    {
        $this->specialShopItemCategory360 = $specialShopItemCategory360;

        return $this;
    }

    public function getSpecialShopItemCategory350(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory350;
    }

    public function setSpecialShopItemCategory350(?SpecialShopItemCategory $specialShopItemCategory350): self
    {
        $this->specialShopItemCategory350 = $specialShopItemCategory350;

        return $this;
    }

    public function getSpecialShopItemCategory340(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory340;
    }

    public function setSpecialShopItemCategory340(?SpecialShopItemCategory $specialShopItemCategory340): self
    {
        $this->specialShopItemCategory340 = $specialShopItemCategory340;

        return $this;
    }

    public function getSpecialShopItemCategory330(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory330;
    }

    public function setSpecialShopItemCategory330(?SpecialShopItemCategory $specialShopItemCategory330): self
    {
        $this->specialShopItemCategory330 = $specialShopItemCategory330;

        return $this;
    }

    public function getSpecialShopItemCategory320(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory320;
    }

    public function setSpecialShopItemCategory320(?SpecialShopItemCategory $specialShopItemCategory320): self
    {
        $this->specialShopItemCategory320 = $specialShopItemCategory320;

        return $this;
    }

    public function getSpecialShopItemCategory310(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory310;
    }

    public function setSpecialShopItemCategory310(?SpecialShopItemCategory $specialShopItemCategory310): self
    {
        $this->specialShopItemCategory310 = $specialShopItemCategory310;

        return $this;
    }

    public function getSpecialShopItemCategory300(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory300;
    }

    public function setSpecialShopItemCategory300(?SpecialShopItemCategory $specialShopItemCategory300): self
    {
        $this->specialShopItemCategory300 = $specialShopItemCategory300;

        return $this;
    }

    public function getSpecialShopItemCategory290(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory290;
    }

    public function setSpecialShopItemCategory290(?SpecialShopItemCategory $specialShopItemCategory290): self
    {
        $this->specialShopItemCategory290 = $specialShopItemCategory290;

        return $this;
    }

    public function getSpecialShopItemCategory280(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory280;
    }

    public function setSpecialShopItemCategory280(?SpecialShopItemCategory $specialShopItemCategory280): self
    {
        $this->specialShopItemCategory280 = $specialShopItemCategory280;

        return $this;
    }

    public function getSpecialShopItemCategory270(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory270;
    }

    public function setSpecialShopItemCategory270(?SpecialShopItemCategory $specialShopItemCategory270): self
    {
        $this->specialShopItemCategory270 = $specialShopItemCategory270;

        return $this;
    }

    public function getSpecialShopItemCategory260(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory260;
    }

    public function setSpecialShopItemCategory260(?SpecialShopItemCategory $specialShopItemCategory260): self
    {
        $this->specialShopItemCategory260 = $specialShopItemCategory260;

        return $this;
    }

    public function getSpecialShopItemCategory250(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory250;
    }

    public function setSpecialShopItemCategory250(?SpecialShopItemCategory $specialShopItemCategory250): self
    {
        $this->specialShopItemCategory250 = $specialShopItemCategory250;

        return $this;
    }

    public function getSpecialShopItemCategory240(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory240;
    }

    public function setSpecialShopItemCategory240(?SpecialShopItemCategory $specialShopItemCategory240): self
    {
        $this->specialShopItemCategory240 = $specialShopItemCategory240;

        return $this;
    }

    public function getSpecialShopItemCategory230(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory230;
    }

    public function setSpecialShopItemCategory230(?SpecialShopItemCategory $specialShopItemCategory230): self
    {
        $this->specialShopItemCategory230 = $specialShopItemCategory230;

        return $this;
    }

    public function getSpecialShopItemCategory220(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory220;
    }

    public function setSpecialShopItemCategory220(?SpecialShopItemCategory $specialShopItemCategory220): self
    {
        $this->specialShopItemCategory220 = $specialShopItemCategory220;

        return $this;
    }

    public function getSpecialShopItemCategory210(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory210;
    }

    public function setSpecialShopItemCategory210(?SpecialShopItemCategory $specialShopItemCategory210): self
    {
        $this->specialShopItemCategory210 = $specialShopItemCategory210;

        return $this;
    }

    public function getSpecialShopItemCategory200(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory200;
    }

    public function setSpecialShopItemCategory200(?SpecialShopItemCategory $specialShopItemCategory200): self
    {
        $this->specialShopItemCategory200 = $specialShopItemCategory200;

        return $this;
    }

    public function getSpecialShopItemCategory190(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory190;
    }

    public function setSpecialShopItemCategory190(?SpecialShopItemCategory $specialShopItemCategory190): self
    {
        $this->specialShopItemCategory190 = $specialShopItemCategory190;

        return $this;
    }

    public function getSpecialShopItemCategory180(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory180;
    }

    public function setSpecialShopItemCategory180(?SpecialShopItemCategory $specialShopItemCategory180): self
    {
        $this->specialShopItemCategory180 = $specialShopItemCategory180;

        return $this;
    }

    public function getSpecialShopItemCategory170(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory170;
    }

    public function setSpecialShopItemCategory170(?SpecialShopItemCategory $specialShopItemCategory170): self
    {
        $this->specialShopItemCategory170 = $specialShopItemCategory170;

        return $this;
    }

    public function getSpecialShopItemCategory160(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory160;
    }

    public function setSpecialShopItemCategory160(?SpecialShopItemCategory $specialShopItemCategory160): self
    {
        $this->specialShopItemCategory160 = $specialShopItemCategory160;

        return $this;
    }

    public function getSpecialShopItemCategory150(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory150;
    }

    public function setSpecialShopItemCategory150(?SpecialShopItemCategory $specialShopItemCategory150): self
    {
        $this->specialShopItemCategory150 = $specialShopItemCategory150;

        return $this;
    }

    public function getSpecialShopItemCategory140(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory140;
    }

    public function setSpecialShopItemCategory140(?SpecialShopItemCategory $specialShopItemCategory140): self
    {
        $this->specialShopItemCategory140 = $specialShopItemCategory140;

        return $this;
    }

    public function getSpecialShopItemCategory130(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory130;
    }

    public function setSpecialShopItemCategory130(?SpecialShopItemCategory $specialShopItemCategory130): self
    {
        $this->specialShopItemCategory130 = $specialShopItemCategory130;

        return $this;
    }

    public function getSpecialShopItemCategory120(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory120;
    }

    public function setSpecialShopItemCategory120(?SpecialShopItemCategory $specialShopItemCategory120): self
    {
        $this->specialShopItemCategory120 = $specialShopItemCategory120;

        return $this;
    }

    public function getSpecialShopItemCategory110(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory110;
    }

    public function setSpecialShopItemCategory110(?SpecialShopItemCategory $specialShopItemCategory110): self
    {
        $this->specialShopItemCategory110 = $specialShopItemCategory110;

        return $this;
    }

    public function getSpecialShopItemCategory100(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory100;
    }

    public function setSpecialShopItemCategory100(?SpecialShopItemCategory $specialShopItemCategory100): self
    {
        $this->specialShopItemCategory100 = $specialShopItemCategory100;

        return $this;
    }

    public function getSpecialShopItemCategory90(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory90;
    }

    public function setSpecialShopItemCategory90(?SpecialShopItemCategory $specialShopItemCategory90): self
    {
        $this->specialShopItemCategory90 = $specialShopItemCategory90;

        return $this;
    }

    public function getSpecialShopItemCategory80(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory80;
    }

    public function setSpecialShopItemCategory80(?SpecialShopItemCategory $specialShopItemCategory80): self
    {
        $this->specialShopItemCategory80 = $specialShopItemCategory80;

        return $this;
    }

    public function getSpecialShopItemCategory70(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory70;
    }

    public function setSpecialShopItemCategory70(?SpecialShopItemCategory $specialShopItemCategory70): self
    {
        $this->specialShopItemCategory70 = $specialShopItemCategory70;

        return $this;
    }

    public function getSpecialShopItemCategory60(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory60;
    }

    public function setSpecialShopItemCategory60(?SpecialShopItemCategory $specialShopItemCategory60): self
    {
        $this->specialShopItemCategory60 = $specialShopItemCategory60;

        return $this;
    }

    public function getSpecialShopItemCategory50(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory50;
    }

    public function setSpecialShopItemCategory50(?SpecialShopItemCategory $specialShopItemCategory50): self
    {
        $this->specialShopItemCategory50 = $specialShopItemCategory50;

        return $this;
    }

    public function getSpecialShopItemCategory40(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory40;
    }

    public function setSpecialShopItemCategory40(?SpecialShopItemCategory $specialShopItemCategory40): self
    {
        $this->specialShopItemCategory40 = $specialShopItemCategory40;

        return $this;
    }

    public function getSpecialShopItemCategory30(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory30;
    }

    public function setSpecialShopItemCategory30(?SpecialShopItemCategory $specialShopItemCategory30): self
    {
        $this->specialShopItemCategory30 = $specialShopItemCategory30;

        return $this;
    }

    public function getSpecialShopItemCategory20(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory20;
    }

    public function setSpecialShopItemCategory20(?SpecialShopItemCategory $specialShopItemCategory20): self
    {
        $this->specialShopItemCategory20 = $specialShopItemCategory20;

        return $this;
    }

    public function getSpecialShopItemCategory10(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory10;
    }

    public function setSpecialShopItemCategory10(?SpecialShopItemCategory $specialShopItemCategory10): self
    {
        $this->specialShopItemCategory10 = $specialShopItemCategory10;

        return $this;
    }

    public function getSpecialShopItemCategory00(): ?SpecialShopItemCategory
    {
        return $this->specialShopItemCategory00;
    }

    public function setSpecialShopItemCategory00(?SpecialShopItemCategory $specialShopItemCategory00): self
    {
        $this->specialShopItemCategory00 = $specialShopItemCategory00;

        return $this;
    }

    public function getItemReceive590(): ?Item
    {
        return $this->itemReceive590;
    }

    public function setItemReceive590(?Item $itemReceive590): self
    {
        $this->itemReceive590 = $itemReceive590;

        return $this;
    }

    public function getItemReceive580(): ?Item
    {
        return $this->itemReceive580;
    }

    public function setItemReceive580(?Item $itemReceive580): self
    {
        $this->itemReceive580 = $itemReceive580;

        return $this;
    }

    public function getItemReceive570(): ?Item
    {
        return $this->itemReceive570;
    }

    public function setItemReceive570(?Item $itemReceive570): self
    {
        $this->itemReceive570 = $itemReceive570;

        return $this;
    }

    public function getItemReceive560(): ?Item
    {
        return $this->itemReceive560;
    }

    public function setItemReceive560(?Item $itemReceive560): self
    {
        $this->itemReceive560 = $itemReceive560;

        return $this;
    }

    public function getItemReceive550(): ?Item
    {
        return $this->itemReceive550;
    }

    public function setItemReceive550(?Item $itemReceive550): self
    {
        $this->itemReceive550 = $itemReceive550;

        return $this;
    }

    public function getItemReceive540(): ?Item
    {
        return $this->itemReceive540;
    }

    public function setItemReceive540(?Item $itemReceive540): self
    {
        $this->itemReceive540 = $itemReceive540;

        return $this;
    }

    public function getItemReceive530(): ?Item
    {
        return $this->itemReceive530;
    }

    public function setItemReceive530(?Item $itemReceive530): self
    {
        $this->itemReceive530 = $itemReceive530;

        return $this;
    }

    public function getItemReceive520(): ?Item
    {
        return $this->itemReceive520;
    }

    public function setItemReceive520(?Item $itemReceive520): self
    {
        $this->itemReceive520 = $itemReceive520;

        return $this;
    }

    public function getItemReceive510(): ?Item
    {
        return $this->itemReceive510;
    }

    public function setItemReceive510(?Item $itemReceive510): self
    {
        $this->itemReceive510 = $itemReceive510;

        return $this;
    }

    public function getItemReceive500(): ?Item
    {
        return $this->itemReceive500;
    }

    public function setItemReceive500(?Item $itemReceive500): self
    {
        $this->itemReceive500 = $itemReceive500;

        return $this;
    }

    public function getItemReceive490(): ?Item
    {
        return $this->itemReceive490;
    }

    public function setItemReceive490(?Item $itemReceive490): self
    {
        $this->itemReceive490 = $itemReceive490;

        return $this;
    }

    public function getItemReceive480(): ?Item
    {
        return $this->itemReceive480;
    }

    public function setItemReceive480(?Item $itemReceive480): self
    {
        $this->itemReceive480 = $itemReceive480;

        return $this;
    }

    public function getItemReceive470(): ?Item
    {
        return $this->itemReceive470;
    }

    public function setItemReceive470(?Item $itemReceive470): self
    {
        $this->itemReceive470 = $itemReceive470;

        return $this;
    }

    public function getItemReceive460(): ?Item
    {
        return $this->itemReceive460;
    }

    public function setItemReceive460(?Item $itemReceive460): self
    {
        $this->itemReceive460 = $itemReceive460;

        return $this;
    }

    public function getItemReceive450(): ?Item
    {
        return $this->itemReceive450;
    }

    public function setItemReceive450(?Item $itemReceive450): self
    {
        $this->itemReceive450 = $itemReceive450;

        return $this;
    }

    public function getItemReceive440(): ?Item
    {
        return $this->itemReceive440;
    }

    public function setItemReceive440(?Item $itemReceive440): self
    {
        $this->itemReceive440 = $itemReceive440;

        return $this;
    }

    public function getItemReceive430(): ?Item
    {
        return $this->itemReceive430;
    }

    public function setItemReceive430(?Item $itemReceive430): self
    {
        $this->itemReceive430 = $itemReceive430;

        return $this;
    }

    public function getItemReceive420(): ?Item
    {
        return $this->itemReceive420;
    }

    public function setItemReceive420(?Item $itemReceive420): self
    {
        $this->itemReceive420 = $itemReceive420;

        return $this;
    }

    public function getItemReceive410(): ?Item
    {
        return $this->itemReceive410;
    }

    public function setItemReceive410(?Item $itemReceive410): self
    {
        $this->itemReceive410 = $itemReceive410;

        return $this;
    }

    public function getItemReceive400(): ?Item
    {
        return $this->itemReceive400;
    }

    public function setItemReceive400(?Item $itemReceive400): self
    {
        $this->itemReceive400 = $itemReceive400;

        return $this;
    }

    public function getItemReceive390(): ?Item
    {
        return $this->itemReceive390;
    }

    public function setItemReceive390(?Item $itemReceive390): self
    {
        $this->itemReceive390 = $itemReceive390;

        return $this;
    }

    public function getItemReceive380(): ?Item
    {
        return $this->itemReceive380;
    }

    public function setItemReceive380(?Item $itemReceive380): self
    {
        $this->itemReceive380 = $itemReceive380;

        return $this;
    }

    public function getItemReceive370(): ?Item
    {
        return $this->itemReceive370;
    }

    public function setItemReceive370(?Item $itemReceive370): self
    {
        $this->itemReceive370 = $itemReceive370;

        return $this;
    }

    public function getItemReceive360(): ?Item
    {
        return $this->itemReceive360;
    }

    public function setItemReceive360(?Item $itemReceive360): self
    {
        $this->itemReceive360 = $itemReceive360;

        return $this;
    }

    public function getItemReceive350(): ?Item
    {
        return $this->itemReceive350;
    }

    public function setItemReceive350(?Item $itemReceive350): self
    {
        $this->itemReceive350 = $itemReceive350;

        return $this;
    }

    public function getItemReceive340(): ?Item
    {
        return $this->itemReceive340;
    }

    public function setItemReceive340(?Item $itemReceive340): self
    {
        $this->itemReceive340 = $itemReceive340;

        return $this;
    }

    public function getItemReceive330(): ?Item
    {
        return $this->itemReceive330;
    }

    public function setItemReceive330(?Item $itemReceive330): self
    {
        $this->itemReceive330 = $itemReceive330;

        return $this;
    }

    public function getItemReceive320(): ?Item
    {
        return $this->itemReceive320;
    }

    public function setItemReceive320(?Item $itemReceive320): self
    {
        $this->itemReceive320 = $itemReceive320;

        return $this;
    }

    public function getItemReceive310(): ?Item
    {
        return $this->itemReceive310;
    }

    public function setItemReceive310(?Item $itemReceive310): self
    {
        $this->itemReceive310 = $itemReceive310;

        return $this;
    }

    public function getItemReceive300(): ?Item
    {
        return $this->itemReceive300;
    }

    public function setItemReceive300(?Item $itemReceive300): self
    {
        $this->itemReceive300 = $itemReceive300;

        return $this;
    }

    public function getItemReceive290(): ?Item
    {
        return $this->itemReceive290;
    }

    public function setItemReceive290(?Item $itemReceive290): self
    {
        $this->itemReceive290 = $itemReceive290;

        return $this;
    }

    public function getItemReceive280(): ?Item
    {
        return $this->itemReceive280;
    }

    public function setItemReceive280(?Item $itemReceive280): self
    {
        $this->itemReceive280 = $itemReceive280;

        return $this;
    }

    public function getItemReceive270(): ?Item
    {
        return $this->itemReceive270;
    }

    public function setItemReceive270(?Item $itemReceive270): self
    {
        $this->itemReceive270 = $itemReceive270;

        return $this;
    }

    public function getItemReceive260(): ?Item
    {
        return $this->itemReceive260;
    }

    public function setItemReceive260(?Item $itemReceive260): self
    {
        $this->itemReceive260 = $itemReceive260;

        return $this;
    }

    public function getItemReceive250(): ?Item
    {
        return $this->itemReceive250;
    }

    public function setItemReceive250(?Item $itemReceive250): self
    {
        $this->itemReceive250 = $itemReceive250;

        return $this;
    }

    public function getItemReceive240(): ?Item
    {
        return $this->itemReceive240;
    }

    public function setItemReceive240(?Item $itemReceive240): self
    {
        $this->itemReceive240 = $itemReceive240;

        return $this;
    }

    public function getItemReceive230(): ?Item
    {
        return $this->itemReceive230;
    }

    public function setItemReceive230(?Item $itemReceive230): self
    {
        $this->itemReceive230 = $itemReceive230;

        return $this;
    }

    public function getItemReceive220(): ?Item
    {
        return $this->itemReceive220;
    }

    public function setItemReceive220(?Item $itemReceive220): self
    {
        $this->itemReceive220 = $itemReceive220;

        return $this;
    }

    public function getItemReceive210(): ?Item
    {
        return $this->itemReceive210;
    }

    public function setItemReceive210(?Item $itemReceive210): self
    {
        $this->itemReceive210 = $itemReceive210;

        return $this;
    }

    public function getItemReceive200(): ?Item
    {
        return $this->itemReceive200;
    }

    public function setItemReceive200(?Item $itemReceive200): self
    {
        $this->itemReceive200 = $itemReceive200;

        return $this;
    }

    public function getItemReceive190(): ?Item
    {
        return $this->itemReceive190;
    }

    public function setItemReceive190(?Item $itemReceive190): self
    {
        $this->itemReceive190 = $itemReceive190;

        return $this;
    }

    public function getItemReceive180(): ?Item
    {
        return $this->itemReceive180;
    }

    public function setItemReceive180(?Item $itemReceive180): self
    {
        $this->itemReceive180 = $itemReceive180;

        return $this;
    }

    public function getItemReceive170(): ?Item
    {
        return $this->itemReceive170;
    }

    public function setItemReceive170(?Item $itemReceive170): self
    {
        $this->itemReceive170 = $itemReceive170;

        return $this;
    }

    public function getItemReceive160(): ?Item
    {
        return $this->itemReceive160;
    }

    public function setItemReceive160(?Item $itemReceive160): self
    {
        $this->itemReceive160 = $itemReceive160;

        return $this;
    }

    public function getItemReceive150(): ?Item
    {
        return $this->itemReceive150;
    }

    public function setItemReceive150(?Item $itemReceive150): self
    {
        $this->itemReceive150 = $itemReceive150;

        return $this;
    }

    public function getItemReceive140(): ?Item
    {
        return $this->itemReceive140;
    }

    public function setItemReceive140(?Item $itemReceive140): self
    {
        $this->itemReceive140 = $itemReceive140;

        return $this;
    }

    public function getItemReceive130(): ?Item
    {
        return $this->itemReceive130;
    }

    public function setItemReceive130(?Item $itemReceive130): self
    {
        $this->itemReceive130 = $itemReceive130;

        return $this;
    }

    public function getItemReceive120(): ?Item
    {
        return $this->itemReceive120;
    }

    public function setItemReceive120(?Item $itemReceive120): self
    {
        $this->itemReceive120 = $itemReceive120;

        return $this;
    }

    public function getItemReceive110(): ?Item
    {
        return $this->itemReceive110;
    }

    public function setItemReceive110(?Item $itemReceive110): self
    {
        $this->itemReceive110 = $itemReceive110;

        return $this;
    }

    public function getItemReceive100(): ?Item
    {
        return $this->itemReceive100;
    }

    public function setItemReceive100(?Item $itemReceive100): self
    {
        $this->itemReceive100 = $itemReceive100;

        return $this;
    }

    public function getItemReceive90(): ?Item
    {
        return $this->itemReceive90;
    }

    public function setItemReceive90(?Item $itemReceive90): self
    {
        $this->itemReceive90 = $itemReceive90;

        return $this;
    }

    public function getItemReceive80(): ?Item
    {
        return $this->itemReceive80;
    }

    public function setItemReceive80(?Item $itemReceive80): self
    {
        $this->itemReceive80 = $itemReceive80;

        return $this;
    }

    public function getItemReceive70(): ?Item
    {
        return $this->itemReceive70;
    }

    public function setItemReceive70(?Item $itemReceive70): self
    {
        $this->itemReceive70 = $itemReceive70;

        return $this;
    }

    public function getItemReceive60(): ?Item
    {
        return $this->itemReceive60;
    }

    public function setItemReceive60(?Item $itemReceive60): self
    {
        $this->itemReceive60 = $itemReceive60;

        return $this;
    }

    public function getItemReceive50(): ?Item
    {
        return $this->itemReceive50;
    }

    public function setItemReceive50(?Item $itemReceive50): self
    {
        $this->itemReceive50 = $itemReceive50;

        return $this;
    }

    public function getItemReceive40(): ?Item
    {
        return $this->itemReceive40;
    }

    public function setItemReceive40(?Item $itemReceive40): self
    {
        $this->itemReceive40 = $itemReceive40;

        return $this;
    }

    public function getItemReceive30(): ?Item
    {
        return $this->itemReceive30;
    }

    public function setItemReceive30(?Item $itemReceive30): self
    {
        $this->itemReceive30 = $itemReceive30;

        return $this;
    }

    public function getItemReceive20(): ?Item
    {
        return $this->itemReceive20;
    }

    public function setItemReceive20(?Item $itemReceive20): self
    {
        $this->itemReceive20 = $itemReceive20;

        return $this;
    }

    public function getItemReceive10(): ?Item
    {
        return $this->itemReceive10;
    }

    public function setItemReceive10(?Item $itemReceive10): self
    {
        $this->itemReceive10 = $itemReceive10;

        return $this;
    }

    public function getItemReceive00(): ?Item
    {
        return $this->itemReceive00;
    }

    public function setItemReceive00(?Item $itemReceive00): self
    {
        $this->itemReceive00 = $itemReceive00;

        return $this;
    }
}
