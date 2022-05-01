<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HwdgathererInspection.
 *
 * @ORM\Table(name="hwdgatherer_inspection", indexes={@ORM\Index(name="idx_5795da38e17f104e", columns={"item_required_26"}), @ORM\Index(name="idx_5795da3816d6faeb", columns={"fish_parameter_15"}), @ORM\Index(name="idx_5795da38cd3f8794", columns={"item_required_12"}), @ORM\Index(name="idx_5795da38e46c5224", columns={"phase_54"}), @ORM\Index(name="idx_5795da3845f0f38b", columns={"item_received_9"}), @ORM\Index(name="idx_5795da38ed12cc4a", columns={"item_received_33"}), @ORM\Index(name="idx_5795da389b652012", columns={"item_required_72"}), @ORM\Index(name="idx_5795da383854518a", columns={"phase_76"}), @ORM\Index(name="idx_5795da38592bd6e4", columns={"item_required_44"}), @ORM\Index(name="idx_5795da38548a6ce6", columns={"fish_parameter_30"}), @ORM\Index(name="idx_5795da384547e794", columns={"reward_2_72"}), @ORM\Index(name="idx_5795da3865c42af8", columns={"reward_1_52"}), @ORM\Index(name="idx_5795da3835495140", columns={"phase_23"}), @ORM\Index(name="idx_5795da387d65039e", columns={"phase_57"}), @ORM\Index(name="idx_5795da383f5dd7c8", columns={"reward_2_26"}), @ORM\Index(name="idx_5795da38a623308", columns={"phase_56"}), @ORM\Index(name="idx_5795da381909c69a", columns={"phase_17"}), @ORM\Index(name="idx_5795da38afe2ca59", columns={"reward_2_29"}), @ORM\Index(name="idx_5795da38c74f4347", columns={"item_required_43"}), @ORM\Index(name="idx_5795da386a6d68a8", columns={"item_received_24"}), @ORM\Index(name="idx_5795da38535b1237", columns={"item_required_15"}), @ORM\Index(name="idx_5795da38e930ffd3", columns={"item_required_9"}), @ORM\Index(name="idx_5795da38fccd7b42", columns={"reward_1_51"}), @ORM\Index(name="idx_5795da38ba38b702", columns={"item_required_13"}), @ORM\Index(name="idx_5795da3850212007", columns={"fish_parameter_69"}), @ORM\Index(name="idx_5795da386ba10eae", columns={"fish_parameter_45"}), @ORM\Index(name="idx_5795da388d1d97ea", columns={"phase_41"}), @ORM\Index(name="idx_5795da38bb80b989", columns={"phase_38"}), @ORM\Index(name="idx_5795da382c526001", columns={"phase_33"}), @ORM\Index(name="idx_5795da385648505d", columns={"phase_67"}), @ORM\Index(name="idx_5795da38df24aec8", columns={"item_received_13"}), @ORM\Index(name="idx_5795da38f914fdc1", columns={"item_received_76"}), @ORM\Index(name="idx_5795da381470840b", columns={"reward_2_16"}), @ORM\Index(name="idx_5795da38e2bb8e1a", columns={"reward_1_45"}), @ORM\Index(name="idx_5795da38d93ba0b3", columns={"reward_1_69"}), @ORM\Index(name="idx_5795da38d65a30a6", columns={"phase_74"}), @ORM\Index(name="idx_5795da3832249559", columns={"phase_27"}), @ORM\Index(name="idx_5795da38c5352a43", columns={"fish_parameter_4"}), @ORM\Index(name="idx_5795da3815acc8db", columns={"item_required_69"}), @ORM\Index(name="idx_5795da38edda1e0f", columns={"phase_58"}), @ORM\Index(name="idx_5795da3882c2ab9b", columns={"fish_parameter_43"}), @ORM\Index(name="idx_5795da38b55b31bb", columns={"phase_30"}), @ORM\Index(name="idx_5795da38997fe43a", columns={"reward_2_50"}), @ORM\Index(name="idx_5795da386600b4ac", columns={"item_required_31"}), @ORM\Index(name="idx_5795da382b5be643", columns={"reward_2_63"}), @ORM\Index(name="idx_5795da38876d5339", columns={"phase_10"}), @ORM\Index(name="idx_5795da3871c00ddf", columns={"item_required_29"}), @ORM\Index(name="idx_5795da3811bb3ef2", columns={"fish_parameter_11"}), @ORM\Index(name="idx_5795da38dc2af475", columns={"phase_25"}), @ORM\Index(name="idx_5795da38501b5b1", columns={"item_required_75"}), @ORM\Index(name="idx_5795da387eb2340c", columns={"reward_2_1"}), @ORM\Index(name="idx_5795da3884cf999a", columns={"reward_2_19"}), @ORM\Index(name="idx_5795da3877718516", columns={"reward_2_52"}), @ORM\Index(name="idx_5795da38dafd284b", columns={"reward_1_34"}), @ORM\Index(name="idx_5795da38c48bdd13", columns={"reward_1_20"}), @ORM\Index(name="idx_5795da382798bcf5", columns={"reward_1_77"}), @ORM\Index(name="idx_5795da38279aaa59", columns={"item_required_49"}), @ORM\Index(name="idx_5795da38737659e9", columns={"item_received_34"}), @ORM\Index(name="idx_5795da38ae823c41", columns={"fish_parameter_77"}), @ORM\Index(name="idx_5795da38ab4986b8", columns={"reward_2_70"}), @ORM\Index(name="idx_5795da381d6a583e", columns={"item_received_25"}), @ORM\Index(name="idx_5795da382c36225a", columns={"reward_2_67"}), @ORM\Index(name="idx_5795da387069bc3e", columns={"reward_2_9"}), @ORM\Index(name="idx_5795da38cf2543bc", columns={"reward_2_30"}), @ORM\Index(name="idx_5795da381a8effc", columns={"reward_1_12"}), @ORM\Index(name="idx_5795da388064d57b", columns={"reward_2_40"}), @ORM\Index(name="idx_5795da38b727a164", columns={"reward_1_78"}), @ORM\Index(name="idx_5795da3876afdf6a", columns={"reward_1_13"}), @ORM\Index(name="idx_5795da3822413a76", columns={"item_received_50"}), @ORM\Index(name="idx_5795da38db47306c", columns={"phase_21"}), @ORM\Index(name="idx_5795da38c9e7eda", columns={"reward_1_4"}), @ORM\Index(name="idx_5795da382a85bc3f", columns={"reward_1_22"}), @ORM\Index(name="idx_5795da38fe7939d8", columns={"item_received_72"}), @ORM\Index(name="idx_5795da3862174285", columns={"fish_parameter_49"}), @ORM\Index(name="idx_5795da389781836e", columns={"item_required_4"}), @ORM\Index(name="idx_5795da38cd833d5c", columns={"fish_parameter_33"}), @ORM\Index(name="idx_5795da3889b6db0b", columns={"phase_18"}), @ORM\Index(name="idx_5795da38be91ed4f", columns={"reward_1_74"}), @ORM\Index(name="idx_5795da3836470bfd", columns={"item_received_15"}), @ORM\Index(name="idx_5795da38b822732a", columns={"reward_2_31"}), @ORM\Index(name="idx_5795da3879069d3a", columns={"item_received_65"}), @ORM\Index(name="idx_5795da381bcbfa21", columns={"fish_parameter_40"}), @ORM\Index(name="idx_5795da381b7740e9", columns={"item_required_61"}), @ORM\Index(name="idx_5795da381e0040d8", columns={"reward_2_47"}), @ORM\Index(name="idx_5795da38e00fcc80", columns={"item_received_66"}), @ORM\Index(name="idx_5795da3892d17a95", columns={"reward_1_40"}), @ORM\Index(name="idx_5795da3826c71a8", columns={"item_required_71"}), @ORM\Index(name="idx_5795da387e6b5923", columns={"item_received_61"}), @ORM\Index(name="idx_5795da381d9dab11", columns={"phase_0"}), @ORM\Index(name="idx_5795da386e0ef60c", columns={"phase_16"}), @ORM\Index(name="idx_5795da384984bd22", columns={"reward_1_66"}), @ORM\Index(name="idx_5795da38c25c012d", columns={"phase_31"}), @ORM\Index(name="idx_5795da38cb5ef36", columns={"reward_1_47"}), @ORM\Index(name="idx_5795da38741b9df0", columns={"item_received_30"}), @ORM\Index(name="idx_5795da38171a9ced", columns={"item_received_74"}), @ORM\Index(name="idx_5795da389115e4c1", columns={"item_required_23"}), @ORM\Index(name="idx_5795da383b5a0b37", columns={"item_received_40"}), @ORM\Index(name="idx_5795da38d0ff711", columns={"phase_52"}), @ORM\Index(name="idx_5795da382331e6b8", columns={"item_required_10"}), @ORM\Index(name="idx_5795da3887091162", columns={"reward_2_44"}), @ORM\Index(name="idx_5795da38e086b3f8", columns={"item_required_5"}), @ORM\Index(name="idx_5795da384f372347", columns={"reward_2_23"}), @ORM\Index(name="idx_5795da38c531c534", columns={"phase_35"}), @ORM\Index(name="idx_5795da384986ab8e", columns={"item_required_58"}), @ORM\Index(name="idx_5795da38b55fdecc", columns={"fish_parameter_1"}), @ORM\Index(name="idx_5795da38b236f5a2", columns={"phase_34"}), @ORM\Index(name="idx_5795da381107843a", columns={"item_required_30"}), @ORM\Index(name="idx_5795da386377b49d", columns={"reward_2_17"}), @ORM\Index(name="idx_5795da384b30ffb8", columns={"item_received_45"}), @ORM\Index(name="idx_5795da38f3c8a90c", columns={"reward_2_18"}), @ORM\Index(name="idx_5795da38a5251a95", columns={"item_received_3"}), @ORM\Index(name="idx_5795da38b4e1299c", columns={"reward_1_25"}), @ORM\Index(name="idx_5795da38f763e5ed", columns={"reward_2_41"}), @ORM\Index(name="idx_5795da38880ed580", columns={"item_required_33"}), @ORM\Index(name="idx_5795da383e3d21d0", columns={"fish_parameter_78"}), @ORM\Index(name="idx_5795da38f717162", columns={"item_required_24"}), @ORM\Index(name="idx_5795da38f00e21f4", columns={"reward_2_45"}), @ORM\Index(name="idx_5795da385b3112cc", columns={"reward_2_66"}), @ORM\Index(name="idx_5795da38d5546a1b", columns={"item_received_42"}), @ORM\Index(name="idx_5795da386c73d49", columns={"item_required_28"}), @ORM\Index(name="idx_5795da388494faab", columns={"phase_3"}), @ORM\Index(name="idx_5795da386df75f9e", columns={"phase_5"}), @ORM\Index(name="idx_5795da38b252b7f9", columns={"reward_2_60"}), @ORM\Index(name="idx_5795da38408c5d6d", columns={"fish_parameter_75"}), @ORM\Index(name="idx_5795da38722f0267", columns={"reward_1_9"}), @ORM\Index(name="idx_5795da382e2ce672", columns={"item_required_45"}), @ORM\Index(name="idx_5795da38c258ee5a", columns={"fish_parameter_0"}), @ORM\Index(name="idx_5795da38c6f74dcc", columns={"phase_68"}), @ORM\Index(name="idx_5795da388ebf5d49", columns={"reward_2_48"}), @ORM\Index(name="idx_5795da3855460ae0", columns={"item_received_51"}), @ORM\Index(name="idx_5795da389406a6ab", columns={"phase_51"}), @ORM\Index(name="idx_5795da388f631199", columns={"item_required_37"}), @ORM\Index(name="idx_5795da38bd5765b7", columns={"reward_1_29"}), @ORM\Index(name="idx_5795da38d63e72fd", columns={"reward_2_20"}), @ORM\Index(name="idx_5795da3814dc1415", columns={"item_received_29"}), @ORM\Index(name="idx_5795da387cf48a55", columns={"reward_1_1"}), @ORM\Index(name="idx_5795da38d239ae02", columns={"item_received_46"}), @ORM\Index(name="idx_5795da38b04873d1", columns={"item_required_42"}), @ORM\Index(name="idx_5795da384afc99be", columns={"fish_parameter_24"}), @ORM\Index(name="idx_5795da381e640283", columns={"phase_13"}), @ORM\Index(name="idx_5795da38f5c59b0d", columns={"fish_parameter_42"}), @ORM\Index(name="idx_5795da385c5cd6d5", columns={"reward_2_62"}), @ORM\Index(name="idx_5795da38e7bb65b6", columns={"reward_2_2"}), @ORM\Index(name="idx_5795da38bb8456fe", columns={"fish_parameter_9"}), @ORM\Index(name="idx_5795da38424e61d6", columns={"phase_22"}), @ORM\Index(name="idx_5795da382d0cb60", columns={"fish_parameter_50"}), @ORM\Index(name="idx_5795da3815aede77", columns={"reward_1_57"}), @ORM\Index(name="idx_5795da38f393ca3d", columns={"phase_2"}), @ORM\Index(name="idx_5795da38d7e02881", columns={"reward_1_61"}), @ORM\Index(name="idx_5795da382c568f76", columns={"fish_parameter_2"}), @ORM\Index(name="idx_5795da38c3e6190a", columns={"reward_1_24"}), @ORM\Index(name="idx_5795da38107758f4", columns={"item_received_70"}), @ORM\Index(name="idx_5795da38a8239e5e", columns={"item_received_12"}), @ORM\Index(name="idx_5795da3812c31a6e", columns={"reward_1_53"}), @ORM\Index(name="idx_5795da38b6f9fb18", columns={"reward_2_39"}), @ORM\Index(name="idx_5795da38e91510b5", columns={"reward_2_55"}), @ORM\Index(name="idx_5795da3815107213", columns={"fish_parameter_48"}), @ORM\Index(name="idx_5795da38e2901ff6", columns={"reward_1_6"}), @ORM\Index(name="idx_5795da386d00acb1", columns={"item_received_20"}), @ORM\Index(name="idx_5795da38f409fd0b", columns={"item_received_23"}), @ORM\Index(name="idx_5795da38b8463171", columns={"phase_65"}), @ORM\Index(name="idx_5795da38312acfe4", columns={"item_received_11"}), @ORM\Index(name="idx_5795da38dd90ec52", columns={"reward_1_30"}), @ORM\Index(name="idx_5795da38dee8c8ce", columns={"fish_parameter_72"}), @ORM\Index(name="idx_5795da38b7990d00", columns={"fish_parameter_67"}), @ORM\Index(name="idx_5795da38238d5c70", columns={"fish_parameter_31"}), @ORM\Index(name="idx_5795da3895972f60", columns={"reward_1_7"}), @ORM\Index(name="idx_5795da384030e7a5", columns={"item_required_54"}), @ORM\Index(name="idx_5795da389fcc7a5f", columns={"reward_1_15"}), @ORM\Index(name="idx_5795da38897e094e", columns={"item_received_73"}), @ORM\Index(name="idx_5795da3870b0d111", columns={"item_received_69"}), @ORM\Index(name="idx_5795da382b3fa418", columns={"phase_37"}), @ORM\Index(name="idx_5795da3867706862", columns={"item_received_71"}), @ORM\Index(name="idx_5795da38522bcef9", columns={"item_received_55"}), @ORM\Index(name="idx_5795da38ecdeaa4c", columns={"fish_parameter_52"}), @ORM\Index(name="idx_5795da382dea6e8a", columns={"item_required_18"}), @ORM\Index(name="idx_5795da386907704e", columns={"reward_2_46"}), @ORM\Index(name="idx_5795da388fdfab51", columns={"fish_parameter_16"}), @ORM\Index(name="idx_5795da387ee2265b", columns={"item_required_2"}), @ORM\Index(name="idx_5795da385c38948e", columns={"phase_36"}), @ORM\Index(name="idx_5795da38434ad595", columns={"fish_parameter_28"}), @ORM\Index(name="idx_5795da387b7e187", columns={"item_received_68"}), @ORM\Index(name="idx_5795da38ed8c083", columns={"reward_2_4"}), @ORM\Index(name="idx_5795da3871c21b73", columns={"reward_1_17"}), @ORM\Index(name="idx_5795da388bca4bd4", columns={"reward_1_50"}), @ORM\Index(name="idx_5795da38e8cb4ac9", columns={"reward_1_14"}), @ORM\Index(name="idx_5795da3813462323", columns={"phase_8"}), @ORM\Index(name="idx_5795da3892faeb79", columns={"reward_1_3"}), @ORM\Index(name="idx_5795da381414c650", columns={"phase_42"}), @ORM\Index(name="idx_5795da38fd13213e", columns={"reward_2_10"}), @ORM\Index(name="idx_5795da388513d54a", columns={"item_required_66"}), @ORM\Index(name="idx_5795da38a0e71817", columns={"reward_1_60"}), @ORM\Index(name="idx_5795da3847e19974", columns={"fish_parameter_71"}), @ORM\Index(name="idx_5795da38bf3bac3", columns={"reward_1_0"}), @ORM\Index(name="idx_5795da386b1db466", columns={"item_required_64"}), @ORM\Index(name="idx_5795da38fba0bf5b", columns={"reward_1_55"}), @ORM\Index(name="idx_5795da389cb45ec3", columns={"fish_parameter_57"}), @ORM\Index(name="idx_5795da38a139426b", columns={"reward_2_21"}), @ORM\Index(name="idx_5795da389a15fcdc", columns={"item_received_32"}), @ORM\Index(name="idx_5795da3820f578ec", columns={"reward_1_73"}), @ORM\Index(name="idx_5795da38adfa18dd", columns={"reward_1_35"}), @ORM\Index(name="idx_5795da385bd0f79", columns={"fish_parameter_54"}), @ORM\Index(name="idx_5795da387a08c787", columns={"phase_53"}), @ORM\Index(name="idx_5795da3881cb57b", columns={"item_required_20"}), @ORM\Index(name="idx_5795da381c1a84f0", columns={"item_required_65"}), @ORM\Index(name="idx_5795da38cc87891f", columns={"phase_39"}), @ORM\Index(name="idx_5795da3835818305", columns={"item_received_48"}), @ORM\Index(name="idx_5795da381af06f08", columns={"phase_4"}), @ORM\Index(name="idx_5795da38967820d8", columns={"item_required_27"}), @ORM\Index(name="idx_5795da38f214e5dc", columns={"item_required_67"}), @ORM\Index(name="idx_5795da38f707a7b6", columns={"phase_15"}), @ORM\Index(name="idx_5795da386c70707f", columns={"item_required_60"}), @ORM\Index(name="idx_5795da389e516cd", columns={"item_required_3"}), @ORM\Index(name="idx_5795da384f53611c", columns={"phase_77"}), @ORM\Index(name="idx_5795da389c0af2a7", columns={"reward_1_48"}), @ORM\Index(name="idx_5795da3896c69b5", columns={"item_received_60"}), @ORM\Index(name="idx_5795da384b2b7bb9", columns={"item_received_1"}), @ORM\Index(name="idx_5795da38e0a35c9e", columns={"reward_2_59"}), @ORM\Index(name="idx_5795da38ffb55fde", columns={"fish_parameter_13"}), @ORM\Index(name="idx_5795da3872ba3fef", columns={"fish_parameter_55"}), @ORM\Index(name="idx_5795da3843f479f1", columns={"reward_1_37"}), @ORM\Index(name="idx_5795da3869633215", columns={"phase_12"}), @ORM\Index(name="idx_5795da381ca63e38", columns={"fish_parameter_44"}), @ORM\Index(name="idx_5795da38d8496ad1", columns={"item_received_17"}), @ORM\Index(name="idx_5795da38cc836668", columns={"fish_parameter_8"}), @ORM\Index(name="idx_5795da384d915da7", columns={"fish_parameter_20"}), @ORM\Index(name="idx_5795da38c1fecb8e", columns={"reward_2_38"}), @ORM\Index(name="idx_5795da383240d702", columns={"reward_2_73"}), @ORM\Index(name="idx_5795da384c5d3ba1", columns={"item_received_41"}), @ORM\Index(name="idx_5795da38378b6dfb", columns={"fish_parameter_74"}), @ORM\Index(name="idx_5795da384523a5cf", columns={"phase_26"}), @ORM\Index(name="idx_5795da38e5fddbef", columns={"reward_1_2"}), @ORM\Index(name="idx_5795da3876e8ca8", columns={"reward_2_8"}), @ORM\Index(name="idx_5795da389add2e99", columns={"phase_59"}), @ORM\Index(name="idx_5795da38b9fc2956", columns={"reward_1_70"}), @ORM\Index(name="idx_5795da387cdf1bb9", columns={"reward_1_42"}), @ORM\Index(name="idx_5795da38ebb36e55", columns={"fish_parameter_56"}), @ORM\Index(name="idx_5795da389708fc16", columns={"item_received_67"}), @ORM\Index(name="idx_5795da382622a4d2", columns={"phase_62"}), @ORM\Index(name="idx_5795da3885af6f82", columns={"fish_parameter_47"}), @ORM\Index(name="idx_5795da38a53e9e94", columns={"item_received_47"}), @ORM\Index(name="idx_5795da38252cfe6f", columns={"item_received_54"}), @ORM\Index(name="idx_5795da383dfba928", columns={"fish_parameter_25"}), @ORM\Index(name="idx_5795da38bc25afd5", columns={"item_received_57"}), @ORM\Index(name="idx_5795da387bb2dfa0", columns={"reward_1_46"}), @ORM\Index(name="idx_5795da3897a46c08", columns={"reward_2_58"}), @ORM\Index(name="idx_5795da38f4c12f4e", columns={"phase_48"}), @ORM\Index(name="idx_5795da38d3f5c804", columns={"fish_parameter_27"}), @ORM\Index(name="idx_5795da384499bde8", columns={"reward_1_33"}), @ORM\Index(name="idx_5795da38d8e5facf", columns={"reward_2_28"}), @ORM\Index(name="idx_5795da38d939b61f", columns={"item_required_57"}), @ORM\Index(name="idx_5795da3857f2487a", columns={"reward_1_72"}), @ORM\Index(name="idx_5795da38eb0dc231", columns={"reward_1_49"}), @ORM\Index(name="idx_5795da389d7838c5", columns={"item_received_36"}), @ORM\Index(name="idx_5795da38798fe242", columns={"item_required_6"}), @ORM\Index(name="idx_5795da38a4f2f892", columns={"fish_parameter_26"}), @ORM\Index(name="idx_5795da382c9ab244", columns={"item_received_58"}), @ORM\Index(name="idx_5795da3868678656", columns={"fish_parameter_18"}), @ORM\Index(name="idx_5795da38f06a63af", columns={"phase_11"}), @ORM\Index(name="idx_5795da3851259444", columns={"phase_63"}), @ORM\Index(name="idx_5795da38a15d0030", columns={"phase_75"}), @ORM\Index(name="idx_5795da38c0b4352", columns={"fish_parameter_58"}), @ORM\Index(name="idx_5795da38d54fee1a", columns={"item_received_6"}), @ORM\Index(name="idx_5795da383a966d31", columns={"fish_parameter_21"}), @ORM\Index(name="idx_5795da38ea7f0853", columns={"item_received_37"}), @ORM\Index(name="idx_5795da382de87826", columns={"reward_1_26"}), @ORM\Index(name="idx_5795da383e838db4", columns={"reward_1_67"}), @ORM\Index(name="idx_5795da38f8d89bc7", columns={"fish_parameter_17"}), @ORM\Index(name="idx_5795da38352d131b", columns={"reward_2_77"}), @ORM\Index(name="idx_5795da38c2384376", columns={"reward_2_65"}), @ORM\Index(name="idx_5795da38cefb19c0", columns={"reward_1_71"}), @ORM\Index(name="idx_5795da383f399593", columns={"phase_72"}), @ORM\Index(name="idx_5795da38efa68ed0", columns={"reward_1_10"}), @ORM\Index(name="idx_5795da38641a7084", columns={"reward_2_13"}), @ORM\Index(name="idx_5795da38f4fe0e24", columns={"phase_6"}), @ORM\Index(name="idx_5795da38a44c54f6", columns={"reward_1_39"}), @ORM\Index(name="idx_5795da3830e6a9e2", columns={"fish_parameter_70"}), @ORM\Index(name="idx_5795da38cc4f5b5a", columns={"item_received_52"}), @ORM\Index(name="idx_5795da38a29b88c8", columns={"phase_28"}), @ORM\Index(name="idx_5795da38c82cc5fe", columns={"phase_60"}), @ORM\Index(name="idx_5795da38f9b86ddf", columns={"reward_2_49"}), @ORM\Index(name="idx_5795da385141d61f", columns={"reward_2_37"}), @ORM\Index(name="idx_5795da38616d70b5", columns={"item_required_35"}), @ORM\Index(name="idx_5795da38701c410f", columns={"reward_2_56"}), @ORM\Index(name="idx_5795da386a9a9b87", columns={"phase_1"}), @ORM\Index(name="idx_5795da38ca505521", columns={"reward_1_28"}), @ORM\Index(name="idx_5795da385a51e4d4", columns={"fish_parameter_38"}), @ORM\Index(name="idx_5795da38509d9acf", columns={"item_required_48"}), @ORM\Index(name="idx_5795da38bf4fb733", columns={"reward_2_35"}), @ORM\Index(name="idx_5795da38ff09e516", columns={"item_required_32"}), @ORM\Index(name="idx_5795da3884630984", columns={"item_received_26"}), @ORM\Index(name="idx_5795da38756b413e", columns={"item_required_70"}), @ORM\Index(name="idx_5795da38e17d06e2", columns={"reward_1_18"}), @ORM\Index(name="idx_5795da3895bcbe8c", columns={"reward_1_44"}), @ORM\Index(name="idx_5795da3862abf84d", columns={"item_required_68"}), @ORM\Index(name="idx_5795da38f57921c5", columns={"item_required_63"}), @ORM\Index(name="idx_5795da38d137f4bf", columns={"phase_70"}), @ORM\Index(name="idx_5795da388a7053f3", columns={"phase_45"}), @ORM\Index(name="idx_5795da389e37cf45", columns={"item_required_8"}), @ORM\Index(name="idx_5795da38b0f4c919", columns={"fish_parameter_63"}), @ORM\Index(name="idx_5795da3868db3c9e", columns={"item_required_39"}), @ORM\Index(name="idx_5795da388e13cd57", columns={"item_received_77"}), @ORM\Index(name="idx_5795da38de547206", columns={"item_required_53"}), @ORM\Index(name="idx_5795da38a78adc0e", columns={"reward_1_64"}), @ORM\Index(name="idx_5795da38cf4101e7", columns={"phase_64"}), @ORM\Index(name="idx_5795da383b418f36", columns={"item_received_4"}), @ORM\Index(name="idx_5795da38cb229f43", columns={"item_received_56"}), @ORM\Index(name="idx_5795da38a9534290", columns={"item_required_52"}), @ORM\Index(name="idx_5795da387b994e4c", columns={"reward_1_5"}), @ORM\Index(name="idx_5795da389c08e40b", columns={"item_required_76"}), @ORM\Index(name="idx_5795da3897d19139", columns={"reward_2_7"}), @ORM\Index(name="idx_5795da385b9d82d2", columns={"item_received_59"}), @ORM\Index(name="idx_5795da3848f67740", columns={"item_received_18"}), @ORM\Index(name="idx_5795da3880009720", columns={"phase_14"}), @ORM\Index(name="idx_5795da38d9850cd7", columns={"fish_parameter_76"}), @ORM\Index(name="idx_5795da382d56d442", columns={"fish_parameter_39"}), @ORM\Index(name="idx_5795da38c555876f", columns={"reward_2_61"}), @ORM\Index(name="idx_5795da38214f60cb", columns={"phase_66"}), @ORM\Index(name="idx_5795da38305a132a", columns={"item_required_51"}), @ORM\Index(name="idx_5795da3883f93eb2", columns={"phase_7"}), @ORM\Index(name="idx_5795da38d4980c1d", columns={"fish_parameter_23"}), @ORM\Index(name="idx_5795da3890ec4777", columns={"item_required_0"}), @ORM\Index(name="idx_5795da3879dff015", columns={"reward_2_5"}), @ORM\Index(name="idx_5795da3866bc0e64", columns={"fish_parameter_10"}), @ORM\Index(name="idx_5795da38245c22a1", columns={"item_required_14"}), @ORM\Index(name="idx_5795da382646e689", columns={"reward_2_36"}), @ORM\Index(name="idx_5795da38e7eb77e1", columns={"item_required_1"}), @ORM\Index(name="idx_5795da38e01adac", columns={"item_received_64"}), @ORM\Index(name="idx_5795da385e4612fd", columns={"item_required_40"}), @ORM\Index(name="idx_5795da38ac2442a1", columns={"reward_2_74"}), @ORM\Index(name="idx_5795da3888b26f48", columns={"fish_parameter_12"}), @ORM\Index(name="idx_5795da38e7620899", columns={"item_received_62"}), @ORM\Index(name="idx_5795da38b2321ad5", columns={"fish_parameter_5"}), @ORM\Index(name="idx_5795da38ca52438d", columns={"item_required_16"}), @ORM\Index(name="idx_5795da38f3643912", columns={"item_received_27"}), @ORM\Index(name="idx_5795da38e0d6a1af", columns={"reward_2_6"}), @ORM\Index(name="idx_5795da38d153b6e4", columns={"reward_2_24"}), @ORM\Index(name="idx_5795da38ec621084", columns={"item_required_73"}), @ORM\Index(name="idx_5795da3863db2483", columns={"item_received_28"}), @ORM\Index(name="idx_5795da3890bc5520", columns={"reward_2_3"}), @ORM\Index(name="idx_5795da38bf2bf568", columns={"phase_61"}), @ORM\Index(name="idx_5795da38b1f07d5a", columns={"phase_69"}), @ORM\Index(name="idx_5795da38383013d1", columns={"reward_2_22"}), @ORM\Index(name="idx_5795da38a9eff858", columns={"fish_parameter_73"}), @ORM\Index(name="idx_5795da38eb0fd49d", columns={"item_required_77"}), @ORM\Index(name="idx_5795da382e905cba", columns={"fish_parameter_64"}), @ORM\Index(name="idx_5795da38c022875e", columns={"item_required_47"}), @ORM\Index(name="idx_5795da3813790249", columns={"phase_46"}), @ORM\Index(name="idx_5795da383c2c4b2f", columns={"item_received_0"}), @ORM\Index(name="idx_5795da38f864210f", columns={"item_required_36"}), @ORM\Index(name="idx_5795da38aa97dcc4", columns={"reward_1_31"}), @ORM\Index(name="idx_5795da3841403b6b", columns={"item_received_14"}), @ORM\Index(name="idx_5795da385aed5e1c", columns={"item_required_19"}), @ORM\Index(name="idx_5795da38a6548672", columns={"reward_2_25"}), @ORM\Index(name="idx_5795da38fd776365", columns={"phase_44"}), @ORM\Index(name="idx_5795da388ca78fcd", columns={"reward_1_54"}), @ORM\Index(name="idx_5795da38bc893fcb", columns={"reward_2_68"}), @ORM\Index(name="idx_5795da38ae3e8689", columns={"item_required_56"}), @ORM\Index(name="idx_5795da3871b7199", columns={"reward_2_57"}), @ORM\Index(name="idx_5795da38830ecd9d", columns={"item_received_22"}), @ORM\Index(name="idx_5795da386ccccab7", columns={"fish_parameter_41"}), @ORM\Index(name="idx_5795da38601dac7b", columns={"item_received_75"}), @ORM\Index(name="idx_5795da38b38ced85", columns={"reward_1_21"}), @ORM\Index(name="idx_5795da38422a238d", columns={"reward_2_76"}), @ORM\Index(name="idx_5795da38936b62b2", columns={"phase_55"}), @ORM\Index(name="idx_5795da3834f34967", columns={"reward_1_36"}), @ORM\Index(name="idx_5795da38ba840dca", columns={"fish_parameter_32"}), @ORM\Index(name="idx_5795da38475d23bc", columns={"item_required_50"}), @ORM\Index(name="idx_5795da3883c61fd8", columns={"phase_49"}), @ORM\Index(name="idx_5795da38196d84c1", columns={"reward_2_43"}), @ORM\Index(name="idx_5795da38d2222a03", columns={"item_received_2"}), @ORM\Index(name="idx_5795da3853e7a8ff", columns={"fish_parameter_34"}), @ORM\Index(name="idx_5795da38644113b5", columns={"phase_9"}), @ORM\Index(name="idx_5795da3839ee49ad", columns={"reward_1_63"}), @ORM\Index(name="idx_5795da383e819b18", columns={"item_required_59"}), @ORM\Index(name="idx_5795da38a5920e8a", columns={"reward_2_78"}), @ORM\Index(name="idx_5795da382b3b4b6f", columns={"fish_parameter_6"}), @ORM\Index(name="idx_5795da38212b2290", columns={"reward_2_32"}), @ORM\Index(name="idx_5795da38db237237", columns={"reward_2_75"}), @ORM\Index(name="idx_5795da385c3c7bf9", columns={"fish_parameter_7"}), @ORM\Index(name="idx_5795da385d828ca9", columns={"reward_1_23"}), @ORM\Index(name="idx_5795da38787641f4", columns={"item_required_25"}), @ORM\Index(name="idx_5795da3827261091", columns={"fish_parameter_68"}), @ORM\Index(name="idx_5795da38a2535a8d", columns={"item_received_43"}), @ORM\Index(name="idx_5795da38bde9c9d3", columns={"fish_parameter_36"}), @ORM\Index(name="idx_5795da388d79d5b1", columns={"reward_2_15"}), @ORM\Index(name="idx_5795da382941226b", columns={"item_required_41"}), @ORM\Index(name="idx_5795da389065380f", columns={"item_received_63"}), @ORM\Index(name="idx_5795da38509f8c63", columns={"reward_1_76"}), @ORM\Index(name="idx_5795da3829fd98a3", columns={"fish_parameter_60"}), @ORM\Index(name="idx_5795da38a630c429", columns={"phase_71"}), @ORM\Index(name="idx_5795da38fa7ee527", columns={"reward_2_14"}), @ORM\Index(name="idx_5795da3862a9eee1", columns={"reward_1_56"}), @ORM\Index(name="idx_5795da38562c1206", columns={"reward_2_33"}), @ORM\Index(name="idx_5795da3898a1be46", columns={"reward_1_11"}), @ORM\Index(name="idx_5795da385b555097", columns={"phase_32"}), @ORM\Index(name="idx_5795da38e301963d", columns={"phase_50"}), @ORM\Index(name="idx_5795da38827e1153", columns={"item_required_62"}), @ORM\Index(name="idx_5795da385436d62e", columns={"item_required_11"}), @ORM\Index(name="idx_5795da38483ea505", columns={"phase_73"}), @ORM\Index(name="idx_5795da38feb1eb9d", columns={"phase_19"}), @ORM\Index(name="idx_5795da38dfec7c8d", columns={"phase_78"}), @ORM\Index(name="idx_5795da384ee9793b", columns={"reward_1_62"}), @ORM\Index(name="idx_5795da38ee78d4ac", columns={"reward_2_51"}), @ORM\Index(name="idx_5795da389b5049a", columns={"reward_2_0"}), @ORM\Index(name="idx_5795da389bd99ada", columns={"fish_parameter_53"}), @ORM\Index(name="idx_5795da38bd55731b", columns={"item_required_17"}), @ORM\Index(name="idx_5795da38339e8d7e", columns={"reward_1_32"}), @ORM\Index(name="idx_5795da38c09e3d96", columns={"fish_parameter_66"}), @ORM\Index(name="idx_5795da38c84887a5", columns={"reward_2_34"}), @ORM\Index(name="idx_5795da381f60b6c0", columns={"fish_parameter_19"}), @ORM\Index(name="idx_5795da385efaa835", columns={"fish_parameter_61"}), @ORM\Index(name="idx_5795da389e122023", columns={"reward_2_54"}), @ORM\Index(name="idx_5795da38d59cb85e", columns={"phase_29"}), @ORM\Index(name="idx_5795da38b53f73e0", columns={"reward_2_64"}), @ORM\Index(name="idx_5795da385b51bfe0", columns={"fish_parameter_3"}), @ORM\Index(name="idx_5795da386e6ab457", columns={"reward_2_42"}), @ORM\Index(name="idx_5795da38131d4012", columns={"reward_2_12"}), @ORM\Index(name="idx_5795da38b725b7c8", columns={"item_required_46"}), @ORM\Index(name="idx_5795da3832f7c31d", columns={"item_received_8"}), @ORM\Index(name="idx_5795da3875d7fbf6", columns={"fish_parameter_51"}), @ORM\Index(name="idx_5795da38caeef945", columns={"fish_parameter_37"}), @ORM\Index(name="idx_5795da38c7f3f98f", columns={"fish_parameter_62"}), @ORM\Index(name="idx_5795da38af4e5a47", columns={"item_received_16"}), @ORM\Index(name="idx_5795da383ff147d6", columns={"item_received_19"}), @ORM\Index(name="idx_5795da38ac4000fa", columns={"phase_20"}), @ORM\Index(name="idx_5795da38e5d64a03", columns={"reward_1_41"}), @ORM\Index(name="idx_5795da38c996ddd9", columns={"reward_1_75"}), @ORM\Index(name="idx_5795da38e88d2d4", columns={"item_required_7"}), @ORM\Index(name="idx_5795da3824e09869", columns={"fish_parameter_35"}), @ORM\Index(name="idx_5795da38f2a85f14", columns={"fish_parameter_46"}), @ORM\Index(name="idx_5795da38485ae75e", columns={"reward_2_27"}), @ORM\Index(name="idx_5795da38dc72554", columns={"item_received_39"}), @ORM\Index(name="idx_5795da38bb486bcc", columns={"item_received_53"}), @ORM\Index(name="idx_5795da38dc4eb62e", columns={"reward_2_71"}), @ORM\Index(name="idx_5795da38ab2dc4e3", columns={"phase_24"}), @ORM\Index(name="idx_5795da386c52be5", columns={"reward_1_16"}), @ORM\Index(name="idx_5795da381a079c27", columns={"item_received_21"}), @ORM\Index(name="idx_5795da388511c3e6", columns={"reward_1_58"}), @ORM\Index(name="idx_5795da3852832f1", columns={"reward_1_8"}), @ORM\Index(name="idx_5795da38cb8e0f5d", columns={"reward_2_69"}), @ORM\Index(name="idx_5795da38a248de8c", columns={"item_received_7"}), @ORM\Index(name="idx_5795da381eacd0c6", columns={"item_received_78"}), @ORM\Index(name="idx_5795da3876b580", columns={"reward_2_53"}), @ORM\Index(name="idx_5795da38f216f370", columns={"reward_1_59"}), @ORM\Index(name="idx_5795da381fdc0c08", columns={"item_required_38"}), @ORM\Index(name="idx_5795da384286b393", columns={"item_received_49"}), @ORM\Index(name="idx_5795da386313f6c6", columns={"phase_43"}), @ORM\Index(name="idx_5795da38ae3c9025", columns={"reward_1_68"}), @ORM\Index(name="idx_5795da38fa1aa77c", columns={"phase_40"}), @ORM\Index(name="idx_5795da3859976c2c", columns={"fish_parameter_65"}), @ORM\Index(name="idx_5795da383c37cf2e", columns={"item_received_44"}), @ORM\Index(name="idx_5795da385aef48b0", columns={"reward_1_27"}), @ORM\Index(name="idx_5795da38647e32df", columns={"phase_47"}), @ORM\Index(name="idx_5795da38a39f3c8b", columns={"fish_parameter_22"}), @ORM\Index(name="idx_5795da38e612d457", columns={"item_required_22"}), @ORM\Index(name="idx_5795da3831cad66", columns={"item_received_31"}), @ORM\Index(name="idx_5795da3861d1ca7d", columns={"fish_parameter_14"}), @ORM\Index(name="idx_5795da383737d733", columns={"item_required_55"}), @ORM\Index(name="idx_5795da38bd82b2f", columns={"reward_1_43"}), @ORM\Index(name="idx_5795da387f1b85ed", columns={"item_required_21"}), @ORM\Index(name="idx_5795da387ac015c2", columns={"item_received_38"}), @ORM\Index(name="idx_5795da3872068527", columns={"item_required_74"}), @ORM\Index(name="idx_5795da387b0c73c4", columns={"fish_parameter_59"}), @ORM\Index(name="idx_5795da38166a4023", columns={"item_required_34"}), @ORM\Index(name="idx_5795da38462dff72", columns={"item_received_10"}), @ORM\Index(name="idx_5795da38d08dec98", columns={"reward_1_65"}), @ORM\Index(name="idx_5795da38471697f", columns={"item_received_35"}), @ORM\Index(name="idx_5795da38d34b6460", columns={"reward_1_38"}), @ORM\Index(name="idx_5795da38967a3674", columns={"reward_1_19"}), @ORM\Index(name="idx_5795da384c46bfa0", columns={"item_received_5"}), @ORM\Index(name="idx_5795da387bb0c90c", columns={"item_required_78"}), @ORM\Index(name="idx_5795da38344de503", columns={"fish_parameter_29"}), @ORM\Index(name="idx_5795da388a1411a8", columns={"reward_2_11"})})
 * @ORM\Entity
 */
class HwdgathererInspection
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hwdgatherer_inspection_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_0", type="integer", nullable=true)
     */
    private $amountRequired0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_1", type="integer", nullable=true)
     */
    private $amountRequired1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_2", type="integer", nullable=true)
     */
    private $amountRequired2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_3", type="integer", nullable=true)
     */
    private $amountRequired3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_4", type="integer", nullable=true)
     */
    private $amountRequired4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_5", type="integer", nullable=true)
     */
    private $amountRequired5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_6", type="integer", nullable=true)
     */
    private $amountRequired6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_7", type="integer", nullable=true)
     */
    private $amountRequired7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_8", type="integer", nullable=true)
     */
    private $amountRequired8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_9", type="integer", nullable=true)
     */
    private $amountRequired9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_10", type="integer", nullable=true)
     */
    private $amountRequired10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_11", type="integer", nullable=true)
     */
    private $amountRequired11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_12", type="integer", nullable=true)
     */
    private $amountRequired12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_13", type="integer", nullable=true)
     */
    private $amountRequired13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_14", type="integer", nullable=true)
     */
    private $amountRequired14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_15", type="integer", nullable=true)
     */
    private $amountRequired15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_16", type="integer", nullable=true)
     */
    private $amountRequired16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_17", type="integer", nullable=true)
     */
    private $amountRequired17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_18", type="integer", nullable=true)
     */
    private $amountRequired18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_19", type="integer", nullable=true)
     */
    private $amountRequired19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_20", type="integer", nullable=true)
     */
    private $amountRequired20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_21", type="integer", nullable=true)
     */
    private $amountRequired21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_22", type="integer", nullable=true)
     */
    private $amountRequired22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_23", type="integer", nullable=true)
     */
    private $amountRequired23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_24", type="integer", nullable=true)
     */
    private $amountRequired24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_25", type="integer", nullable=true)
     */
    private $amountRequired25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_26", type="integer", nullable=true)
     */
    private $amountRequired26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_27", type="integer", nullable=true)
     */
    private $amountRequired27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_28", type="integer", nullable=true)
     */
    private $amountRequired28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_29", type="integer", nullable=true)
     */
    private $amountRequired29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_30", type="integer", nullable=true)
     */
    private $amountRequired30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_31", type="integer", nullable=true)
     */
    private $amountRequired31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_32", type="integer", nullable=true)
     */
    private $amountRequired32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_33", type="integer", nullable=true)
     */
    private $amountRequired33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_34", type="integer", nullable=true)
     */
    private $amountRequired34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_35", type="integer", nullable=true)
     */
    private $amountRequired35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_36", type="integer", nullable=true)
     */
    private $amountRequired36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_37", type="integer", nullable=true)
     */
    private $amountRequired37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_38", type="integer", nullable=true)
     */
    private $amountRequired38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_39", type="integer", nullable=true)
     */
    private $amountRequired39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_40", type="integer", nullable=true)
     */
    private $amountRequired40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_41", type="integer", nullable=true)
     */
    private $amountRequired41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_42", type="integer", nullable=true)
     */
    private $amountRequired42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_43", type="integer", nullable=true)
     */
    private $amountRequired43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_44", type="integer", nullable=true)
     */
    private $amountRequired44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_45", type="integer", nullable=true)
     */
    private $amountRequired45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_46", type="integer", nullable=true)
     */
    private $amountRequired46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_47", type="integer", nullable=true)
     */
    private $amountRequired47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_48", type="integer", nullable=true)
     */
    private $amountRequired48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_49", type="integer", nullable=true)
     */
    private $amountRequired49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_50", type="integer", nullable=true)
     */
    private $amountRequired50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_51", type="integer", nullable=true)
     */
    private $amountRequired51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_52", type="integer", nullable=true)
     */
    private $amountRequired52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_53", type="integer", nullable=true)
     */
    private $amountRequired53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_54", type="integer", nullable=true)
     */
    private $amountRequired54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_55", type="integer", nullable=true)
     */
    private $amountRequired55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_56", type="integer", nullable=true)
     */
    private $amountRequired56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_57", type="integer", nullable=true)
     */
    private $amountRequired57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_58", type="integer", nullable=true)
     */
    private $amountRequired58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_59", type="integer", nullable=true)
     */
    private $amountRequired59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_60", type="integer", nullable=true)
     */
    private $amountRequired60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_61", type="integer", nullable=true)
     */
    private $amountRequired61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_62", type="integer", nullable=true)
     */
    private $amountRequired62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_63", type="integer", nullable=true)
     */
    private $amountRequired63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_64", type="integer", nullable=true)
     */
    private $amountRequired64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_65", type="integer", nullable=true)
     */
    private $amountRequired65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_66", type="integer", nullable=true)
     */
    private $amountRequired66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_67", type="integer", nullable=true)
     */
    private $amountRequired67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_68", type="integer", nullable=true)
     */
    private $amountRequired68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_69", type="integer", nullable=true)
     */
    private $amountRequired69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_70", type="integer", nullable=true)
     */
    private $amountRequired70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_71", type="integer", nullable=true)
     */
    private $amountRequired71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_72", type="integer", nullable=true)
     */
    private $amountRequired72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_73", type="integer", nullable=true)
     */
    private $amountRequired73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_74", type="integer", nullable=true)
     */
    private $amountRequired74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_75", type="integer", nullable=true)
     */
    private $amountRequired75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_76", type="integer", nullable=true)
     */
    private $amountRequired76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_77", type="integer", nullable=true)
     */
    private $amountRequired77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required_78", type="integer", nullable=true)
     */
    private $amountRequired78;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_78", referencedColumnName="pk")
     * })
     */
    private $phase78;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_77", referencedColumnName="pk")
     * })
     */
    private $phase77;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_76", referencedColumnName="pk")
     * })
     */
    private $phase76;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_75", referencedColumnName="pk")
     * })
     */
    private $phase75;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_74", referencedColumnName="pk")
     * })
     */
    private $phase74;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_73", referencedColumnName="pk")
     * })
     */
    private $phase73;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_72", referencedColumnName="pk")
     * })
     */
    private $phase72;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_71", referencedColumnName="pk")
     * })
     */
    private $phase71;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_70", referencedColumnName="pk")
     * })
     */
    private $phase70;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_69", referencedColumnName="pk")
     * })
     */
    private $phase69;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_68", referencedColumnName="pk")
     * })
     */
    private $phase68;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_67", referencedColumnName="pk")
     * })
     */
    private $phase67;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_66", referencedColumnName="pk")
     * })
     */
    private $phase66;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_65", referencedColumnName="pk")
     * })
     */
    private $phase65;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_64", referencedColumnName="pk")
     * })
     */
    private $phase64;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_63", referencedColumnName="pk")
     * })
     */
    private $phase63;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_62", referencedColumnName="pk")
     * })
     */
    private $phase62;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_61", referencedColumnName="pk")
     * })
     */
    private $phase61;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_60", referencedColumnName="pk")
     * })
     */
    private $phase60;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_59", referencedColumnName="pk")
     * })
     */
    private $phase59;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_58", referencedColumnName="pk")
     * })
     */
    private $phase58;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_57", referencedColumnName="pk")
     * })
     */
    private $phase57;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_56", referencedColumnName="pk")
     * })
     */
    private $phase56;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_55", referencedColumnName="pk")
     * })
     */
    private $phase55;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_54", referencedColumnName="pk")
     * })
     */
    private $phase54;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_53", referencedColumnName="pk")
     * })
     */
    private $phase53;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_52", referencedColumnName="pk")
     * })
     */
    private $phase52;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_51", referencedColumnName="pk")
     * })
     */
    private $phase51;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_50", referencedColumnName="pk")
     * })
     */
    private $phase50;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_49", referencedColumnName="pk")
     * })
     */
    private $phase49;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_48", referencedColumnName="pk")
     * })
     */
    private $phase48;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_47", referencedColumnName="pk")
     * })
     */
    private $phase47;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_46", referencedColumnName="pk")
     * })
     */
    private $phase46;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_45", referencedColumnName="pk")
     * })
     */
    private $phase45;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_44", referencedColumnName="pk")
     * })
     */
    private $phase44;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_43", referencedColumnName="pk")
     * })
     */
    private $phase43;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_42", referencedColumnName="pk")
     * })
     */
    private $phase42;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_41", referencedColumnName="pk")
     * })
     */
    private $phase41;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_40", referencedColumnName="pk")
     * })
     */
    private $phase40;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_39", referencedColumnName="pk")
     * })
     */
    private $phase39;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_38", referencedColumnName="pk")
     * })
     */
    private $phase38;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_37", referencedColumnName="pk")
     * })
     */
    private $phase37;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_36", referencedColumnName="pk")
     * })
     */
    private $phase36;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_35", referencedColumnName="pk")
     * })
     */
    private $phase35;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_34", referencedColumnName="pk")
     * })
     */
    private $phase34;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_33", referencedColumnName="pk")
     * })
     */
    private $phase33;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_32", referencedColumnName="pk")
     * })
     */
    private $phase32;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_31", referencedColumnName="pk")
     * })
     */
    private $phase31;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_30", referencedColumnName="pk")
     * })
     */
    private $phase30;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_29", referencedColumnName="pk")
     * })
     */
    private $phase29;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_28", referencedColumnName="pk")
     * })
     */
    private $phase28;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_27", referencedColumnName="pk")
     * })
     */
    private $phase27;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_26", referencedColumnName="pk")
     * })
     */
    private $phase26;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_25", referencedColumnName="pk")
     * })
     */
    private $phase25;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_24", referencedColumnName="pk")
     * })
     */
    private $phase24;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_23", referencedColumnName="pk")
     * })
     */
    private $phase23;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_22", referencedColumnName="pk")
     * })
     */
    private $phase22;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_21", referencedColumnName="pk")
     * })
     */
    private $phase21;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_20", referencedColumnName="pk")
     * })
     */
    private $phase20;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_19", referencedColumnName="pk")
     * })
     */
    private $phase19;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_18", referencedColumnName="pk")
     * })
     */
    private $phase18;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_17", referencedColumnName="pk")
     * })
     */
    private $phase17;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_16", referencedColumnName="pk")
     * })
     */
    private $phase16;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_15", referencedColumnName="pk")
     * })
     */
    private $phase15;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_14", referencedColumnName="pk")
     * })
     */
    private $phase14;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_13", referencedColumnName="pk")
     * })
     */
    private $phase13;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_12", referencedColumnName="pk")
     * })
     */
    private $phase12;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_11", referencedColumnName="pk")
     * })
     */
    private $phase11;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_10", referencedColumnName="pk")
     * })
     */
    private $phase10;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_9", referencedColumnName="pk")
     * })
     */
    private $phase9;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_8", referencedColumnName="pk")
     * })
     */
    private $phase8;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_7", referencedColumnName="pk")
     * })
     */
    private $phase7;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_6", referencedColumnName="pk")
     * })
     */
    private $phase6;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_5", referencedColumnName="pk")
     * })
     */
    private $phase5;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_4", referencedColumnName="pk")
     * })
     */
    private $phase4;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_3", referencedColumnName="pk")
     * })
     */
    private $phase3;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_2", referencedColumnName="pk")
     * })
     */
    private $phase2;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_1", referencedColumnName="pk")
     * })
     */
    private $phase1;

    /**
     * @var HwdgathereInspectTerm
     *
     * @ORM\ManyToOne(targetEntity="HwdgathereInspectTerm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phase_0", referencedColumnName="pk")
     * })
     */
    private $phase0;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_78", referencedColumnName="pk")
     * })
     */
    private $reward278;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_77", referencedColumnName="pk")
     * })
     */
    private $reward277;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_76", referencedColumnName="pk")
     * })
     */
    private $reward276;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_75", referencedColumnName="pk")
     * })
     */
    private $reward275;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_74", referencedColumnName="pk")
     * })
     */
    private $reward274;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_73", referencedColumnName="pk")
     * })
     */
    private $reward273;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_72", referencedColumnName="pk")
     * })
     */
    private $reward272;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_71", referencedColumnName="pk")
     * })
     */
    private $reward271;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_70", referencedColumnName="pk")
     * })
     */
    private $reward270;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_69", referencedColumnName="pk")
     * })
     */
    private $reward269;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_68", referencedColumnName="pk")
     * })
     */
    private $reward268;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_67", referencedColumnName="pk")
     * })
     */
    private $reward267;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_66", referencedColumnName="pk")
     * })
     */
    private $reward266;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_65", referencedColumnName="pk")
     * })
     */
    private $reward265;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_64", referencedColumnName="pk")
     * })
     */
    private $reward264;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_63", referencedColumnName="pk")
     * })
     */
    private $reward263;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_62", referencedColumnName="pk")
     * })
     */
    private $reward262;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_61", referencedColumnName="pk")
     * })
     */
    private $reward261;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_60", referencedColumnName="pk")
     * })
     */
    private $reward260;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_59", referencedColumnName="pk")
     * })
     */
    private $reward259;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_58", referencedColumnName="pk")
     * })
     */
    private $reward258;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_57", referencedColumnName="pk")
     * })
     */
    private $reward257;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_56", referencedColumnName="pk")
     * })
     */
    private $reward256;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_55", referencedColumnName="pk")
     * })
     */
    private $reward255;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_54", referencedColumnName="pk")
     * })
     */
    private $reward254;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_53", referencedColumnName="pk")
     * })
     */
    private $reward253;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_52", referencedColumnName="pk")
     * })
     */
    private $reward252;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_51", referencedColumnName="pk")
     * })
     */
    private $reward251;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_50", referencedColumnName="pk")
     * })
     */
    private $reward250;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_49", referencedColumnName="pk")
     * })
     */
    private $reward249;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_48", referencedColumnName="pk")
     * })
     */
    private $reward248;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_47", referencedColumnName="pk")
     * })
     */
    private $reward247;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_46", referencedColumnName="pk")
     * })
     */
    private $reward246;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_45", referencedColumnName="pk")
     * })
     */
    private $reward245;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_44", referencedColumnName="pk")
     * })
     */
    private $reward244;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_43", referencedColumnName="pk")
     * })
     */
    private $reward243;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_42", referencedColumnName="pk")
     * })
     */
    private $reward242;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_41", referencedColumnName="pk")
     * })
     */
    private $reward241;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_40", referencedColumnName="pk")
     * })
     */
    private $reward240;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_39", referencedColumnName="pk")
     * })
     */
    private $reward239;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_38", referencedColumnName="pk")
     * })
     */
    private $reward238;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_37", referencedColumnName="pk")
     * })
     */
    private $reward237;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_36", referencedColumnName="pk")
     * })
     */
    private $reward236;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_35", referencedColumnName="pk")
     * })
     */
    private $reward235;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_34", referencedColumnName="pk")
     * })
     */
    private $reward234;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_33", referencedColumnName="pk")
     * })
     */
    private $reward233;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_32", referencedColumnName="pk")
     * })
     */
    private $reward232;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_31", referencedColumnName="pk")
     * })
     */
    private $reward231;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_30", referencedColumnName="pk")
     * })
     */
    private $reward230;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_29", referencedColumnName="pk")
     * })
     */
    private $reward229;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_28", referencedColumnName="pk")
     * })
     */
    private $reward228;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_27", referencedColumnName="pk")
     * })
     */
    private $reward227;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_26", referencedColumnName="pk")
     * })
     */
    private $reward226;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_25", referencedColumnName="pk")
     * })
     */
    private $reward225;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_24", referencedColumnName="pk")
     * })
     */
    private $reward224;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_23", referencedColumnName="pk")
     * })
     */
    private $reward223;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_22", referencedColumnName="pk")
     * })
     */
    private $reward222;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_21", referencedColumnName="pk")
     * })
     */
    private $reward221;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_20", referencedColumnName="pk")
     * })
     */
    private $reward220;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_19", referencedColumnName="pk")
     * })
     */
    private $reward219;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_18", referencedColumnName="pk")
     * })
     */
    private $reward218;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_17", referencedColumnName="pk")
     * })
     */
    private $reward217;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_16", referencedColumnName="pk")
     * })
     */
    private $reward216;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_15", referencedColumnName="pk")
     * })
     */
    private $reward215;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_14", referencedColumnName="pk")
     * })
     */
    private $reward214;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_13", referencedColumnName="pk")
     * })
     */
    private $reward213;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_12", referencedColumnName="pk")
     * })
     */
    private $reward212;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_11", referencedColumnName="pk")
     * })
     */
    private $reward211;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_10", referencedColumnName="pk")
     * })
     */
    private $reward210;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_9", referencedColumnName="pk")
     * })
     */
    private $reward29;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_8", referencedColumnName="pk")
     * })
     */
    private $reward28;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_7", referencedColumnName="pk")
     * })
     */
    private $reward27;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_6", referencedColumnName="pk")
     * })
     */
    private $reward26;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_5", referencedColumnName="pk")
     * })
     */
    private $reward25;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_4", referencedColumnName="pk")
     * })
     */
    private $reward24;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_3", referencedColumnName="pk")
     * })
     */
    private $reward23;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_2", referencedColumnName="pk")
     * })
     */
    private $reward22;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_1", referencedColumnName="pk")
     * })
     */
    private $reward21;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_2_0", referencedColumnName="pk")
     * })
     */
    private $reward20;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_78", referencedColumnName="pk")
     * })
     */
    private $reward178;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_77", referencedColumnName="pk")
     * })
     */
    private $reward177;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_76", referencedColumnName="pk")
     * })
     */
    private $reward176;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_75", referencedColumnName="pk")
     * })
     */
    private $reward175;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_74", referencedColumnName="pk")
     * })
     */
    private $reward174;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_73", referencedColumnName="pk")
     * })
     */
    private $reward173;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_72", referencedColumnName="pk")
     * })
     */
    private $reward172;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_71", referencedColumnName="pk")
     * })
     */
    private $reward171;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_70", referencedColumnName="pk")
     * })
     */
    private $reward170;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_69", referencedColumnName="pk")
     * })
     */
    private $reward169;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_68", referencedColumnName="pk")
     * })
     */
    private $reward168;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_67", referencedColumnName="pk")
     * })
     */
    private $reward167;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_66", referencedColumnName="pk")
     * })
     */
    private $reward166;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_65", referencedColumnName="pk")
     * })
     */
    private $reward165;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_64", referencedColumnName="pk")
     * })
     */
    private $reward164;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_63", referencedColumnName="pk")
     * })
     */
    private $reward163;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_62", referencedColumnName="pk")
     * })
     */
    private $reward162;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_61", referencedColumnName="pk")
     * })
     */
    private $reward161;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_60", referencedColumnName="pk")
     * })
     */
    private $reward160;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_59", referencedColumnName="pk")
     * })
     */
    private $reward159;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_58", referencedColumnName="pk")
     * })
     */
    private $reward158;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_57", referencedColumnName="pk")
     * })
     */
    private $reward157;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_56", referencedColumnName="pk")
     * })
     */
    private $reward156;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_55", referencedColumnName="pk")
     * })
     */
    private $reward155;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_54", referencedColumnName="pk")
     * })
     */
    private $reward154;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_53", referencedColumnName="pk")
     * })
     */
    private $reward153;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_52", referencedColumnName="pk")
     * })
     */
    private $reward152;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_51", referencedColumnName="pk")
     * })
     */
    private $reward151;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_50", referencedColumnName="pk")
     * })
     */
    private $reward150;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_49", referencedColumnName="pk")
     * })
     */
    private $reward149;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_48", referencedColumnName="pk")
     * })
     */
    private $reward148;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_47", referencedColumnName="pk")
     * })
     */
    private $reward147;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_46", referencedColumnName="pk")
     * })
     */
    private $reward146;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_45", referencedColumnName="pk")
     * })
     */
    private $reward145;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_44", referencedColumnName="pk")
     * })
     */
    private $reward144;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_43", referencedColumnName="pk")
     * })
     */
    private $reward143;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_42", referencedColumnName="pk")
     * })
     */
    private $reward142;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_41", referencedColumnName="pk")
     * })
     */
    private $reward141;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_40", referencedColumnName="pk")
     * })
     */
    private $reward140;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_39", referencedColumnName="pk")
     * })
     */
    private $reward139;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_38", referencedColumnName="pk")
     * })
     */
    private $reward138;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_37", referencedColumnName="pk")
     * })
     */
    private $reward137;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_36", referencedColumnName="pk")
     * })
     */
    private $reward136;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_35", referencedColumnName="pk")
     * })
     */
    private $reward135;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_34", referencedColumnName="pk")
     * })
     */
    private $reward134;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_33", referencedColumnName="pk")
     * })
     */
    private $reward133;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_32", referencedColumnName="pk")
     * })
     */
    private $reward132;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_31", referencedColumnName="pk")
     * })
     */
    private $reward131;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_30", referencedColumnName="pk")
     * })
     */
    private $reward130;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_29", referencedColumnName="pk")
     * })
     */
    private $reward129;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_28", referencedColumnName="pk")
     * })
     */
    private $reward128;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_27", referencedColumnName="pk")
     * })
     */
    private $reward127;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_26", referencedColumnName="pk")
     * })
     */
    private $reward126;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_25", referencedColumnName="pk")
     * })
     */
    private $reward125;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_24", referencedColumnName="pk")
     * })
     */
    private $reward124;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_23", referencedColumnName="pk")
     * })
     */
    private $reward123;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_22", referencedColumnName="pk")
     * })
     */
    private $reward122;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_21", referencedColumnName="pk")
     * })
     */
    private $reward121;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_20", referencedColumnName="pk")
     * })
     */
    private $reward120;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_19", referencedColumnName="pk")
     * })
     */
    private $reward119;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_18", referencedColumnName="pk")
     * })
     */
    private $reward118;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_17", referencedColumnName="pk")
     * })
     */
    private $reward117;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_16", referencedColumnName="pk")
     * })
     */
    private $reward116;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_15", referencedColumnName="pk")
     * })
     */
    private $reward115;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_14", referencedColumnName="pk")
     * })
     */
    private $reward114;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_13", referencedColumnName="pk")
     * })
     */
    private $reward113;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_12", referencedColumnName="pk")
     * })
     */
    private $reward112;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_11", referencedColumnName="pk")
     * })
     */
    private $reward111;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_10", referencedColumnName="pk")
     * })
     */
    private $reward110;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_9", referencedColumnName="pk")
     * })
     */
    private $reward19;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_8", referencedColumnName="pk")
     * })
     */
    private $reward18;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_7", referencedColumnName="pk")
     * })
     */
    private $reward17;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_6", referencedColumnName="pk")
     * })
     */
    private $reward16;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_5", referencedColumnName="pk")
     * })
     */
    private $reward15;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_4", referencedColumnName="pk")
     * })
     */
    private $reward14;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_3", referencedColumnName="pk")
     * })
     */
    private $reward13;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_2", referencedColumnName="pk")
     * })
     */
    private $reward12;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_1", referencedColumnName="pk")
     * })
     */
    private $reward11;

    /**
     * @var HwdgathererInspectionReward
     *
     * @ORM\ManyToOne(targetEntity="HwdgathererInspectionReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_1_0", referencedColumnName="pk")
     * })
     */
    private $reward10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_78", referencedColumnName="pk")
     * })
     */
    private $itemReceived78;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_77", referencedColumnName="pk")
     * })
     */
    private $itemReceived77;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_76", referencedColumnName="pk")
     * })
     */
    private $itemReceived76;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_75", referencedColumnName="pk")
     * })
     */
    private $itemReceived75;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_74", referencedColumnName="pk")
     * })
     */
    private $itemReceived74;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_73", referencedColumnName="pk")
     * })
     */
    private $itemReceived73;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_72", referencedColumnName="pk")
     * })
     */
    private $itemReceived72;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_71", referencedColumnName="pk")
     * })
     */
    private $itemReceived71;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_70", referencedColumnName="pk")
     * })
     */
    private $itemReceived70;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_69", referencedColumnName="pk")
     * })
     */
    private $itemReceived69;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_68", referencedColumnName="pk")
     * })
     */
    private $itemReceived68;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_67", referencedColumnName="pk")
     * })
     */
    private $itemReceived67;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_66", referencedColumnName="pk")
     * })
     */
    private $itemReceived66;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_65", referencedColumnName="pk")
     * })
     */
    private $itemReceived65;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_64", referencedColumnName="pk")
     * })
     */
    private $itemReceived64;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_63", referencedColumnName="pk")
     * })
     */
    private $itemReceived63;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_62", referencedColumnName="pk")
     * })
     */
    private $itemReceived62;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_61", referencedColumnName="pk")
     * })
     */
    private $itemReceived61;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_60", referencedColumnName="pk")
     * })
     */
    private $itemReceived60;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_59", referencedColumnName="pk")
     * })
     */
    private $itemReceived59;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_58", referencedColumnName="pk")
     * })
     */
    private $itemReceived58;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_57", referencedColumnName="pk")
     * })
     */
    private $itemReceived57;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_56", referencedColumnName="pk")
     * })
     */
    private $itemReceived56;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_55", referencedColumnName="pk")
     * })
     */
    private $itemReceived55;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_54", referencedColumnName="pk")
     * })
     */
    private $itemReceived54;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_53", referencedColumnName="pk")
     * })
     */
    private $itemReceived53;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_52", referencedColumnName="pk")
     * })
     */
    private $itemReceived52;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_51", referencedColumnName="pk")
     * })
     */
    private $itemReceived51;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_50", referencedColumnName="pk")
     * })
     */
    private $itemReceived50;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_49", referencedColumnName="pk")
     * })
     */
    private $itemReceived49;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_48", referencedColumnName="pk")
     * })
     */
    private $itemReceived48;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_47", referencedColumnName="pk")
     * })
     */
    private $itemReceived47;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_46", referencedColumnName="pk")
     * })
     */
    private $itemReceived46;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_45", referencedColumnName="pk")
     * })
     */
    private $itemReceived45;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_44", referencedColumnName="pk")
     * })
     */
    private $itemReceived44;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_43", referencedColumnName="pk")
     * })
     */
    private $itemReceived43;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_42", referencedColumnName="pk")
     * })
     */
    private $itemReceived42;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_41", referencedColumnName="pk")
     * })
     */
    private $itemReceived41;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_40", referencedColumnName="pk")
     * })
     */
    private $itemReceived40;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_39", referencedColumnName="pk")
     * })
     */
    private $itemReceived39;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_38", referencedColumnName="pk")
     * })
     */
    private $itemReceived38;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_37", referencedColumnName="pk")
     * })
     */
    private $itemReceived37;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_36", referencedColumnName="pk")
     * })
     */
    private $itemReceived36;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_35", referencedColumnName="pk")
     * })
     */
    private $itemReceived35;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_34", referencedColumnName="pk")
     * })
     */
    private $itemReceived34;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_33", referencedColumnName="pk")
     * })
     */
    private $itemReceived33;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_32", referencedColumnName="pk")
     * })
     */
    private $itemReceived32;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_31", referencedColumnName="pk")
     * })
     */
    private $itemReceived31;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_30", referencedColumnName="pk")
     * })
     */
    private $itemReceived30;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_29", referencedColumnName="pk")
     * })
     */
    private $itemReceived29;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_28", referencedColumnName="pk")
     * })
     */
    private $itemReceived28;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_27", referencedColumnName="pk")
     * })
     */
    private $itemReceived27;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_26", referencedColumnName="pk")
     * })
     */
    private $itemReceived26;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_25", referencedColumnName="pk")
     * })
     */
    private $itemReceived25;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_24", referencedColumnName="pk")
     * })
     */
    private $itemReceived24;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_23", referencedColumnName="pk")
     * })
     */
    private $itemReceived23;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_22", referencedColumnName="pk")
     * })
     */
    private $itemReceived22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_21", referencedColumnName="pk")
     * })
     */
    private $itemReceived21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_20", referencedColumnName="pk")
     * })
     */
    private $itemReceived20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_19", referencedColumnName="pk")
     * })
     */
    private $itemReceived19;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_18", referencedColumnName="pk")
     * })
     */
    private $itemReceived18;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_17", referencedColumnName="pk")
     * })
     */
    private $itemReceived17;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_16", referencedColumnName="pk")
     * })
     */
    private $itemReceived16;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_15", referencedColumnName="pk")
     * })
     */
    private $itemReceived15;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_14", referencedColumnName="pk")
     * })
     */
    private $itemReceived14;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_13", referencedColumnName="pk")
     * })
     */
    private $itemReceived13;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_12", referencedColumnName="pk")
     * })
     */
    private $itemReceived12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_11", referencedColumnName="pk")
     * })
     */
    private $itemReceived11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_10", referencedColumnName="pk")
     * })
     */
    private $itemReceived10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_9", referencedColumnName="pk")
     * })
     */
    private $itemReceived9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_8", referencedColumnName="pk")
     * })
     */
    private $itemReceived8;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_7", referencedColumnName="pk")
     * })
     */
    private $itemReceived7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_6", referencedColumnName="pk")
     * })
     */
    private $itemReceived6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_5", referencedColumnName="pk")
     * })
     */
    private $itemReceived5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_4", referencedColumnName="pk")
     * })
     */
    private $itemReceived4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_3", referencedColumnName="pk")
     * })
     */
    private $itemReceived3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_2", referencedColumnName="pk")
     * })
     */
    private $itemReceived2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_1", referencedColumnName="pk")
     * })
     */
    private $itemReceived1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_received_0", referencedColumnName="pk")
     * })
     */
    private $itemReceived0;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_78", referencedColumnName="pk")
     * })
     */
    private $fishParameter78;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_77", referencedColumnName="pk")
     * })
     */
    private $fishParameter77;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_76", referencedColumnName="pk")
     * })
     */
    private $fishParameter76;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_75", referencedColumnName="pk")
     * })
     */
    private $fishParameter75;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_74", referencedColumnName="pk")
     * })
     */
    private $fishParameter74;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_73", referencedColumnName="pk")
     * })
     */
    private $fishParameter73;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_72", referencedColumnName="pk")
     * })
     */
    private $fishParameter72;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_71", referencedColumnName="pk")
     * })
     */
    private $fishParameter71;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_70", referencedColumnName="pk")
     * })
     */
    private $fishParameter70;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_69", referencedColumnName="pk")
     * })
     */
    private $fishParameter69;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_68", referencedColumnName="pk")
     * })
     */
    private $fishParameter68;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_67", referencedColumnName="pk")
     * })
     */
    private $fishParameter67;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_66", referencedColumnName="pk")
     * })
     */
    private $fishParameter66;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_65", referencedColumnName="pk")
     * })
     */
    private $fishParameter65;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_64", referencedColumnName="pk")
     * })
     */
    private $fishParameter64;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_63", referencedColumnName="pk")
     * })
     */
    private $fishParameter63;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_62", referencedColumnName="pk")
     * })
     */
    private $fishParameter62;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_61", referencedColumnName="pk")
     * })
     */
    private $fishParameter61;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_60", referencedColumnName="pk")
     * })
     */
    private $fishParameter60;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_59", referencedColumnName="pk")
     * })
     */
    private $fishParameter59;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_58", referencedColumnName="pk")
     * })
     */
    private $fishParameter58;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_57", referencedColumnName="pk")
     * })
     */
    private $fishParameter57;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_56", referencedColumnName="pk")
     * })
     */
    private $fishParameter56;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_55", referencedColumnName="pk")
     * })
     */
    private $fishParameter55;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_54", referencedColumnName="pk")
     * })
     */
    private $fishParameter54;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_53", referencedColumnName="pk")
     * })
     */
    private $fishParameter53;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_52", referencedColumnName="pk")
     * })
     */
    private $fishParameter52;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_51", referencedColumnName="pk")
     * })
     */
    private $fishParameter51;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_50", referencedColumnName="pk")
     * })
     */
    private $fishParameter50;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_49", referencedColumnName="pk")
     * })
     */
    private $fishParameter49;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_48", referencedColumnName="pk")
     * })
     */
    private $fishParameter48;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_47", referencedColumnName="pk")
     * })
     */
    private $fishParameter47;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_46", referencedColumnName="pk")
     * })
     */
    private $fishParameter46;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_45", referencedColumnName="pk")
     * })
     */
    private $fishParameter45;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_44", referencedColumnName="pk")
     * })
     */
    private $fishParameter44;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_43", referencedColumnName="pk")
     * })
     */
    private $fishParameter43;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_42", referencedColumnName="pk")
     * })
     */
    private $fishParameter42;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_41", referencedColumnName="pk")
     * })
     */
    private $fishParameter41;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_40", referencedColumnName="pk")
     * })
     */
    private $fishParameter40;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_39", referencedColumnName="pk")
     * })
     */
    private $fishParameter39;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_38", referencedColumnName="pk")
     * })
     */
    private $fishParameter38;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_37", referencedColumnName="pk")
     * })
     */
    private $fishParameter37;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_36", referencedColumnName="pk")
     * })
     */
    private $fishParameter36;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_35", referencedColumnName="pk")
     * })
     */
    private $fishParameter35;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_34", referencedColumnName="pk")
     * })
     */
    private $fishParameter34;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_33", referencedColumnName="pk")
     * })
     */
    private $fishParameter33;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_32", referencedColumnName="pk")
     * })
     */
    private $fishParameter32;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_31", referencedColumnName="pk")
     * })
     */
    private $fishParameter31;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_30", referencedColumnName="pk")
     * })
     */
    private $fishParameter30;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_29", referencedColumnName="pk")
     * })
     */
    private $fishParameter29;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_28", referencedColumnName="pk")
     * })
     */
    private $fishParameter28;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_27", referencedColumnName="pk")
     * })
     */
    private $fishParameter27;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_26", referencedColumnName="pk")
     * })
     */
    private $fishParameter26;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_25", referencedColumnName="pk")
     * })
     */
    private $fishParameter25;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_24", referencedColumnName="pk")
     * })
     */
    private $fishParameter24;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_23", referencedColumnName="pk")
     * })
     */
    private $fishParameter23;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_22", referencedColumnName="pk")
     * })
     */
    private $fishParameter22;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_21", referencedColumnName="pk")
     * })
     */
    private $fishParameter21;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_20", referencedColumnName="pk")
     * })
     */
    private $fishParameter20;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_19", referencedColumnName="pk")
     * })
     */
    private $fishParameter19;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_18", referencedColumnName="pk")
     * })
     */
    private $fishParameter18;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_17", referencedColumnName="pk")
     * })
     */
    private $fishParameter17;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_16", referencedColumnName="pk")
     * })
     */
    private $fishParameter16;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_15", referencedColumnName="pk")
     * })
     */
    private $fishParameter15;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_14", referencedColumnName="pk")
     * })
     */
    private $fishParameter14;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_13", referencedColumnName="pk")
     * })
     */
    private $fishParameter13;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_12", referencedColumnName="pk")
     * })
     */
    private $fishParameter12;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_11", referencedColumnName="pk")
     * })
     */
    private $fishParameter11;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_10", referencedColumnName="pk")
     * })
     */
    private $fishParameter10;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_9", referencedColumnName="pk")
     * })
     */
    private $fishParameter9;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_8", referencedColumnName="pk")
     * })
     */
    private $fishParameter8;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_7", referencedColumnName="pk")
     * })
     */
    private $fishParameter7;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_6", referencedColumnName="pk")
     * })
     */
    private $fishParameter6;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_5", referencedColumnName="pk")
     * })
     */
    private $fishParameter5;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_4", referencedColumnName="pk")
     * })
     */
    private $fishParameter4;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_3", referencedColumnName="pk")
     * })
     */
    private $fishParameter3;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_2", referencedColumnName="pk")
     * })
     */
    private $fishParameter2;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_1", referencedColumnName="pk")
     * })
     */
    private $fishParameter1;

    /**
     * @var FishParameter
     *
     * @ORM\ManyToOne(targetEntity="FishParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fish_parameter_0", referencedColumnName="pk")
     * })
     */
    private $fishParameter0;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_78", referencedColumnName="pk")
     * })
     */
    private $itemRequired78;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_77", referencedColumnName="pk")
     * })
     */
    private $itemRequired77;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_76", referencedColumnName="pk")
     * })
     */
    private $itemRequired76;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_75", referencedColumnName="pk")
     * })
     */
    private $itemRequired75;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_74", referencedColumnName="pk")
     * })
     */
    private $itemRequired74;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_73", referencedColumnName="pk")
     * })
     */
    private $itemRequired73;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_72", referencedColumnName="pk")
     * })
     */
    private $itemRequired72;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_71", referencedColumnName="pk")
     * })
     */
    private $itemRequired71;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_70", referencedColumnName="pk")
     * })
     */
    private $itemRequired70;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_69", referencedColumnName="pk")
     * })
     */
    private $itemRequired69;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_68", referencedColumnName="pk")
     * })
     */
    private $itemRequired68;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_67", referencedColumnName="pk")
     * })
     */
    private $itemRequired67;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_66", referencedColumnName="pk")
     * })
     */
    private $itemRequired66;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_65", referencedColumnName="pk")
     * })
     */
    private $itemRequired65;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_64", referencedColumnName="pk")
     * })
     */
    private $itemRequired64;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_63", referencedColumnName="pk")
     * })
     */
    private $itemRequired63;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_62", referencedColumnName="pk")
     * })
     */
    private $itemRequired62;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_61", referencedColumnName="pk")
     * })
     */
    private $itemRequired61;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_60", referencedColumnName="pk")
     * })
     */
    private $itemRequired60;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_59", referencedColumnName="pk")
     * })
     */
    private $itemRequired59;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_58", referencedColumnName="pk")
     * })
     */
    private $itemRequired58;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_57", referencedColumnName="pk")
     * })
     */
    private $itemRequired57;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_56", referencedColumnName="pk")
     * })
     */
    private $itemRequired56;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_55", referencedColumnName="pk")
     * })
     */
    private $itemRequired55;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_54", referencedColumnName="pk")
     * })
     */
    private $itemRequired54;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_53", referencedColumnName="pk")
     * })
     */
    private $itemRequired53;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_52", referencedColumnName="pk")
     * })
     */
    private $itemRequired52;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_51", referencedColumnName="pk")
     * })
     */
    private $itemRequired51;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_50", referencedColumnName="pk")
     * })
     */
    private $itemRequired50;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_49", referencedColumnName="pk")
     * })
     */
    private $itemRequired49;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_48", referencedColumnName="pk")
     * })
     */
    private $itemRequired48;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_47", referencedColumnName="pk")
     * })
     */
    private $itemRequired47;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_46", referencedColumnName="pk")
     * })
     */
    private $itemRequired46;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_45", referencedColumnName="pk")
     * })
     */
    private $itemRequired45;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_44", referencedColumnName="pk")
     * })
     */
    private $itemRequired44;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_43", referencedColumnName="pk")
     * })
     */
    private $itemRequired43;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_42", referencedColumnName="pk")
     * })
     */
    private $itemRequired42;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_41", referencedColumnName="pk")
     * })
     */
    private $itemRequired41;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_40", referencedColumnName="pk")
     * })
     */
    private $itemRequired40;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_39", referencedColumnName="pk")
     * })
     */
    private $itemRequired39;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_38", referencedColumnName="pk")
     * })
     */
    private $itemRequired38;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_37", referencedColumnName="pk")
     * })
     */
    private $itemRequired37;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_36", referencedColumnName="pk")
     * })
     */
    private $itemRequired36;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_35", referencedColumnName="pk")
     * })
     */
    private $itemRequired35;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_34", referencedColumnName="pk")
     * })
     */
    private $itemRequired34;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_33", referencedColumnName="pk")
     * })
     */
    private $itemRequired33;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_32", referencedColumnName="pk")
     * })
     */
    private $itemRequired32;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_31", referencedColumnName="pk")
     * })
     */
    private $itemRequired31;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_30", referencedColumnName="pk")
     * })
     */
    private $itemRequired30;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_29", referencedColumnName="pk")
     * })
     */
    private $itemRequired29;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_28", referencedColumnName="pk")
     * })
     */
    private $itemRequired28;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_27", referencedColumnName="pk")
     * })
     */
    private $itemRequired27;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_26", referencedColumnName="pk")
     * })
     */
    private $itemRequired26;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_25", referencedColumnName="pk")
     * })
     */
    private $itemRequired25;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_24", referencedColumnName="pk")
     * })
     */
    private $itemRequired24;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_23", referencedColumnName="pk")
     * })
     */
    private $itemRequired23;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_22", referencedColumnName="pk")
     * })
     */
    private $itemRequired22;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_21", referencedColumnName="pk")
     * })
     */
    private $itemRequired21;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_20", referencedColumnName="pk")
     * })
     */
    private $itemRequired20;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_19", referencedColumnName="pk")
     * })
     */
    private $itemRequired19;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_18", referencedColumnName="pk")
     * })
     */
    private $itemRequired18;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_17", referencedColumnName="pk")
     * })
     */
    private $itemRequired17;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_16", referencedColumnName="pk")
     * })
     */
    private $itemRequired16;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_15", referencedColumnName="pk")
     * })
     */
    private $itemRequired15;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_14", referencedColumnName="pk")
     * })
     */
    private $itemRequired14;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_13", referencedColumnName="pk")
     * })
     */
    private $itemRequired13;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_12", referencedColumnName="pk")
     * })
     */
    private $itemRequired12;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_11", referencedColumnName="pk")
     * })
     */
    private $itemRequired11;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_10", referencedColumnName="pk")
     * })
     */
    private $itemRequired10;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_9", referencedColumnName="pk")
     * })
     */
    private $itemRequired9;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_8", referencedColumnName="pk")
     * })
     */
    private $itemRequired8;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_7", referencedColumnName="pk")
     * })
     */
    private $itemRequired7;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_6", referencedColumnName="pk")
     * })
     */
    private $itemRequired6;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_5", referencedColumnName="pk")
     * })
     */
    private $itemRequired5;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_4", referencedColumnName="pk")
     * })
     */
    private $itemRequired4;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_3", referencedColumnName="pk")
     * })
     */
    private $itemRequired3;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_2", referencedColumnName="pk")
     * })
     */
    private $itemRequired2;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_1", referencedColumnName="pk")
     * })
     */
    private $itemRequired1;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required_0", referencedColumnName="pk")
     * })
     */
    private $itemRequired0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getAmountRequired0(): ?int
    {
        return $this->amountRequired0;
    }

    public function setAmountRequired0(?int $amountRequired0): self
    {
        $this->amountRequired0 = $amountRequired0;

        return $this;
    }

    public function getAmountRequired1(): ?int
    {
        return $this->amountRequired1;
    }

    public function setAmountRequired1(?int $amountRequired1): self
    {
        $this->amountRequired1 = $amountRequired1;

        return $this;
    }

    public function getAmountRequired2(): ?int
    {
        return $this->amountRequired2;
    }

    public function setAmountRequired2(?int $amountRequired2): self
    {
        $this->amountRequired2 = $amountRequired2;

        return $this;
    }

    public function getAmountRequired3(): ?int
    {
        return $this->amountRequired3;
    }

    public function setAmountRequired3(?int $amountRequired3): self
    {
        $this->amountRequired3 = $amountRequired3;

        return $this;
    }

    public function getAmountRequired4(): ?int
    {
        return $this->amountRequired4;
    }

    public function setAmountRequired4(?int $amountRequired4): self
    {
        $this->amountRequired4 = $amountRequired4;

        return $this;
    }

    public function getAmountRequired5(): ?int
    {
        return $this->amountRequired5;
    }

    public function setAmountRequired5(?int $amountRequired5): self
    {
        $this->amountRequired5 = $amountRequired5;

        return $this;
    }

    public function getAmountRequired6(): ?int
    {
        return $this->amountRequired6;
    }

    public function setAmountRequired6(?int $amountRequired6): self
    {
        $this->amountRequired6 = $amountRequired6;

        return $this;
    }

    public function getAmountRequired7(): ?int
    {
        return $this->amountRequired7;
    }

    public function setAmountRequired7(?int $amountRequired7): self
    {
        $this->amountRequired7 = $amountRequired7;

        return $this;
    }

    public function getAmountRequired8(): ?int
    {
        return $this->amountRequired8;
    }

    public function setAmountRequired8(?int $amountRequired8): self
    {
        $this->amountRequired8 = $amountRequired8;

        return $this;
    }

    public function getAmountRequired9(): ?int
    {
        return $this->amountRequired9;
    }

    public function setAmountRequired9(?int $amountRequired9): self
    {
        $this->amountRequired9 = $amountRequired9;

        return $this;
    }

    public function getAmountRequired10(): ?int
    {
        return $this->amountRequired10;
    }

    public function setAmountRequired10(?int $amountRequired10): self
    {
        $this->amountRequired10 = $amountRequired10;

        return $this;
    }

    public function getAmountRequired11(): ?int
    {
        return $this->amountRequired11;
    }

    public function setAmountRequired11(?int $amountRequired11): self
    {
        $this->amountRequired11 = $amountRequired11;

        return $this;
    }

    public function getAmountRequired12(): ?int
    {
        return $this->amountRequired12;
    }

    public function setAmountRequired12(?int $amountRequired12): self
    {
        $this->amountRequired12 = $amountRequired12;

        return $this;
    }

    public function getAmountRequired13(): ?int
    {
        return $this->amountRequired13;
    }

    public function setAmountRequired13(?int $amountRequired13): self
    {
        $this->amountRequired13 = $amountRequired13;

        return $this;
    }

    public function getAmountRequired14(): ?int
    {
        return $this->amountRequired14;
    }

    public function setAmountRequired14(?int $amountRequired14): self
    {
        $this->amountRequired14 = $amountRequired14;

        return $this;
    }

    public function getAmountRequired15(): ?int
    {
        return $this->amountRequired15;
    }

    public function setAmountRequired15(?int $amountRequired15): self
    {
        $this->amountRequired15 = $amountRequired15;

        return $this;
    }

    public function getAmountRequired16(): ?int
    {
        return $this->amountRequired16;
    }

    public function setAmountRequired16(?int $amountRequired16): self
    {
        $this->amountRequired16 = $amountRequired16;

        return $this;
    }

    public function getAmountRequired17(): ?int
    {
        return $this->amountRequired17;
    }

    public function setAmountRequired17(?int $amountRequired17): self
    {
        $this->amountRequired17 = $amountRequired17;

        return $this;
    }

    public function getAmountRequired18(): ?int
    {
        return $this->amountRequired18;
    }

    public function setAmountRequired18(?int $amountRequired18): self
    {
        $this->amountRequired18 = $amountRequired18;

        return $this;
    }

    public function getAmountRequired19(): ?int
    {
        return $this->amountRequired19;
    }

    public function setAmountRequired19(?int $amountRequired19): self
    {
        $this->amountRequired19 = $amountRequired19;

        return $this;
    }

    public function getAmountRequired20(): ?int
    {
        return $this->amountRequired20;
    }

    public function setAmountRequired20(?int $amountRequired20): self
    {
        $this->amountRequired20 = $amountRequired20;

        return $this;
    }

    public function getAmountRequired21(): ?int
    {
        return $this->amountRequired21;
    }

    public function setAmountRequired21(?int $amountRequired21): self
    {
        $this->amountRequired21 = $amountRequired21;

        return $this;
    }

    public function getAmountRequired22(): ?int
    {
        return $this->amountRequired22;
    }

    public function setAmountRequired22(?int $amountRequired22): self
    {
        $this->amountRequired22 = $amountRequired22;

        return $this;
    }

    public function getAmountRequired23(): ?int
    {
        return $this->amountRequired23;
    }

    public function setAmountRequired23(?int $amountRequired23): self
    {
        $this->amountRequired23 = $amountRequired23;

        return $this;
    }

    public function getAmountRequired24(): ?int
    {
        return $this->amountRequired24;
    }

    public function setAmountRequired24(?int $amountRequired24): self
    {
        $this->amountRequired24 = $amountRequired24;

        return $this;
    }

    public function getAmountRequired25(): ?int
    {
        return $this->amountRequired25;
    }

    public function setAmountRequired25(?int $amountRequired25): self
    {
        $this->amountRequired25 = $amountRequired25;

        return $this;
    }

    public function getAmountRequired26(): ?int
    {
        return $this->amountRequired26;
    }

    public function setAmountRequired26(?int $amountRequired26): self
    {
        $this->amountRequired26 = $amountRequired26;

        return $this;
    }

    public function getAmountRequired27(): ?int
    {
        return $this->amountRequired27;
    }

    public function setAmountRequired27(?int $amountRequired27): self
    {
        $this->amountRequired27 = $amountRequired27;

        return $this;
    }

    public function getAmountRequired28(): ?int
    {
        return $this->amountRequired28;
    }

    public function setAmountRequired28(?int $amountRequired28): self
    {
        $this->amountRequired28 = $amountRequired28;

        return $this;
    }

    public function getAmountRequired29(): ?int
    {
        return $this->amountRequired29;
    }

    public function setAmountRequired29(?int $amountRequired29): self
    {
        $this->amountRequired29 = $amountRequired29;

        return $this;
    }

    public function getAmountRequired30(): ?int
    {
        return $this->amountRequired30;
    }

    public function setAmountRequired30(?int $amountRequired30): self
    {
        $this->amountRequired30 = $amountRequired30;

        return $this;
    }

    public function getAmountRequired31(): ?int
    {
        return $this->amountRequired31;
    }

    public function setAmountRequired31(?int $amountRequired31): self
    {
        $this->amountRequired31 = $amountRequired31;

        return $this;
    }

    public function getAmountRequired32(): ?int
    {
        return $this->amountRequired32;
    }

    public function setAmountRequired32(?int $amountRequired32): self
    {
        $this->amountRequired32 = $amountRequired32;

        return $this;
    }

    public function getAmountRequired33(): ?int
    {
        return $this->amountRequired33;
    }

    public function setAmountRequired33(?int $amountRequired33): self
    {
        $this->amountRequired33 = $amountRequired33;

        return $this;
    }

    public function getAmountRequired34(): ?int
    {
        return $this->amountRequired34;
    }

    public function setAmountRequired34(?int $amountRequired34): self
    {
        $this->amountRequired34 = $amountRequired34;

        return $this;
    }

    public function getAmountRequired35(): ?int
    {
        return $this->amountRequired35;
    }

    public function setAmountRequired35(?int $amountRequired35): self
    {
        $this->amountRequired35 = $amountRequired35;

        return $this;
    }

    public function getAmountRequired36(): ?int
    {
        return $this->amountRequired36;
    }

    public function setAmountRequired36(?int $amountRequired36): self
    {
        $this->amountRequired36 = $amountRequired36;

        return $this;
    }

    public function getAmountRequired37(): ?int
    {
        return $this->amountRequired37;
    }

    public function setAmountRequired37(?int $amountRequired37): self
    {
        $this->amountRequired37 = $amountRequired37;

        return $this;
    }

    public function getAmountRequired38(): ?int
    {
        return $this->amountRequired38;
    }

    public function setAmountRequired38(?int $amountRequired38): self
    {
        $this->amountRequired38 = $amountRequired38;

        return $this;
    }

    public function getAmountRequired39(): ?int
    {
        return $this->amountRequired39;
    }

    public function setAmountRequired39(?int $amountRequired39): self
    {
        $this->amountRequired39 = $amountRequired39;

        return $this;
    }

    public function getAmountRequired40(): ?int
    {
        return $this->amountRequired40;
    }

    public function setAmountRequired40(?int $amountRequired40): self
    {
        $this->amountRequired40 = $amountRequired40;

        return $this;
    }

    public function getAmountRequired41(): ?int
    {
        return $this->amountRequired41;
    }

    public function setAmountRequired41(?int $amountRequired41): self
    {
        $this->amountRequired41 = $amountRequired41;

        return $this;
    }

    public function getAmountRequired42(): ?int
    {
        return $this->amountRequired42;
    }

    public function setAmountRequired42(?int $amountRequired42): self
    {
        $this->amountRequired42 = $amountRequired42;

        return $this;
    }

    public function getAmountRequired43(): ?int
    {
        return $this->amountRequired43;
    }

    public function setAmountRequired43(?int $amountRequired43): self
    {
        $this->amountRequired43 = $amountRequired43;

        return $this;
    }

    public function getAmountRequired44(): ?int
    {
        return $this->amountRequired44;
    }

    public function setAmountRequired44(?int $amountRequired44): self
    {
        $this->amountRequired44 = $amountRequired44;

        return $this;
    }

    public function getAmountRequired45(): ?int
    {
        return $this->amountRequired45;
    }

    public function setAmountRequired45(?int $amountRequired45): self
    {
        $this->amountRequired45 = $amountRequired45;

        return $this;
    }

    public function getAmountRequired46(): ?int
    {
        return $this->amountRequired46;
    }

    public function setAmountRequired46(?int $amountRequired46): self
    {
        $this->amountRequired46 = $amountRequired46;

        return $this;
    }

    public function getAmountRequired47(): ?int
    {
        return $this->amountRequired47;
    }

    public function setAmountRequired47(?int $amountRequired47): self
    {
        $this->amountRequired47 = $amountRequired47;

        return $this;
    }

    public function getAmountRequired48(): ?int
    {
        return $this->amountRequired48;
    }

    public function setAmountRequired48(?int $amountRequired48): self
    {
        $this->amountRequired48 = $amountRequired48;

        return $this;
    }

    public function getAmountRequired49(): ?int
    {
        return $this->amountRequired49;
    }

    public function setAmountRequired49(?int $amountRequired49): self
    {
        $this->amountRequired49 = $amountRequired49;

        return $this;
    }

    public function getAmountRequired50(): ?int
    {
        return $this->amountRequired50;
    }

    public function setAmountRequired50(?int $amountRequired50): self
    {
        $this->amountRequired50 = $amountRequired50;

        return $this;
    }

    public function getAmountRequired51(): ?int
    {
        return $this->amountRequired51;
    }

    public function setAmountRequired51(?int $amountRequired51): self
    {
        $this->amountRequired51 = $amountRequired51;

        return $this;
    }

    public function getAmountRequired52(): ?int
    {
        return $this->amountRequired52;
    }

    public function setAmountRequired52(?int $amountRequired52): self
    {
        $this->amountRequired52 = $amountRequired52;

        return $this;
    }

    public function getAmountRequired53(): ?int
    {
        return $this->amountRequired53;
    }

    public function setAmountRequired53(?int $amountRequired53): self
    {
        $this->amountRequired53 = $amountRequired53;

        return $this;
    }

    public function getAmountRequired54(): ?int
    {
        return $this->amountRequired54;
    }

    public function setAmountRequired54(?int $amountRequired54): self
    {
        $this->amountRequired54 = $amountRequired54;

        return $this;
    }

    public function getAmountRequired55(): ?int
    {
        return $this->amountRequired55;
    }

    public function setAmountRequired55(?int $amountRequired55): self
    {
        $this->amountRequired55 = $amountRequired55;

        return $this;
    }

    public function getAmountRequired56(): ?int
    {
        return $this->amountRequired56;
    }

    public function setAmountRequired56(?int $amountRequired56): self
    {
        $this->amountRequired56 = $amountRequired56;

        return $this;
    }

    public function getAmountRequired57(): ?int
    {
        return $this->amountRequired57;
    }

    public function setAmountRequired57(?int $amountRequired57): self
    {
        $this->amountRequired57 = $amountRequired57;

        return $this;
    }

    public function getAmountRequired58(): ?int
    {
        return $this->amountRequired58;
    }

    public function setAmountRequired58(?int $amountRequired58): self
    {
        $this->amountRequired58 = $amountRequired58;

        return $this;
    }

    public function getAmountRequired59(): ?int
    {
        return $this->amountRequired59;
    }

    public function setAmountRequired59(?int $amountRequired59): self
    {
        $this->amountRequired59 = $amountRequired59;

        return $this;
    }

    public function getAmountRequired60(): ?int
    {
        return $this->amountRequired60;
    }

    public function setAmountRequired60(?int $amountRequired60): self
    {
        $this->amountRequired60 = $amountRequired60;

        return $this;
    }

    public function getAmountRequired61(): ?int
    {
        return $this->amountRequired61;
    }

    public function setAmountRequired61(?int $amountRequired61): self
    {
        $this->amountRequired61 = $amountRequired61;

        return $this;
    }

    public function getAmountRequired62(): ?int
    {
        return $this->amountRequired62;
    }

    public function setAmountRequired62(?int $amountRequired62): self
    {
        $this->amountRequired62 = $amountRequired62;

        return $this;
    }

    public function getAmountRequired63(): ?int
    {
        return $this->amountRequired63;
    }

    public function setAmountRequired63(?int $amountRequired63): self
    {
        $this->amountRequired63 = $amountRequired63;

        return $this;
    }

    public function getAmountRequired64(): ?int
    {
        return $this->amountRequired64;
    }

    public function setAmountRequired64(?int $amountRequired64): self
    {
        $this->amountRequired64 = $amountRequired64;

        return $this;
    }

    public function getAmountRequired65(): ?int
    {
        return $this->amountRequired65;
    }

    public function setAmountRequired65(?int $amountRequired65): self
    {
        $this->amountRequired65 = $amountRequired65;

        return $this;
    }

    public function getAmountRequired66(): ?int
    {
        return $this->amountRequired66;
    }

    public function setAmountRequired66(?int $amountRequired66): self
    {
        $this->amountRequired66 = $amountRequired66;

        return $this;
    }

    public function getAmountRequired67(): ?int
    {
        return $this->amountRequired67;
    }

    public function setAmountRequired67(?int $amountRequired67): self
    {
        $this->amountRequired67 = $amountRequired67;

        return $this;
    }

    public function getAmountRequired68(): ?int
    {
        return $this->amountRequired68;
    }

    public function setAmountRequired68(?int $amountRequired68): self
    {
        $this->amountRequired68 = $amountRequired68;

        return $this;
    }

    public function getAmountRequired69(): ?int
    {
        return $this->amountRequired69;
    }

    public function setAmountRequired69(?int $amountRequired69): self
    {
        $this->amountRequired69 = $amountRequired69;

        return $this;
    }

    public function getAmountRequired70(): ?int
    {
        return $this->amountRequired70;
    }

    public function setAmountRequired70(?int $amountRequired70): self
    {
        $this->amountRequired70 = $amountRequired70;

        return $this;
    }

    public function getAmountRequired71(): ?int
    {
        return $this->amountRequired71;
    }

    public function setAmountRequired71(?int $amountRequired71): self
    {
        $this->amountRequired71 = $amountRequired71;

        return $this;
    }

    public function getAmountRequired72(): ?int
    {
        return $this->amountRequired72;
    }

    public function setAmountRequired72(?int $amountRequired72): self
    {
        $this->amountRequired72 = $amountRequired72;

        return $this;
    }

    public function getAmountRequired73(): ?int
    {
        return $this->amountRequired73;
    }

    public function setAmountRequired73(?int $amountRequired73): self
    {
        $this->amountRequired73 = $amountRequired73;

        return $this;
    }

    public function getAmountRequired74(): ?int
    {
        return $this->amountRequired74;
    }

    public function setAmountRequired74(?int $amountRequired74): self
    {
        $this->amountRequired74 = $amountRequired74;

        return $this;
    }

    public function getAmountRequired75(): ?int
    {
        return $this->amountRequired75;
    }

    public function setAmountRequired75(?int $amountRequired75): self
    {
        $this->amountRequired75 = $amountRequired75;

        return $this;
    }

    public function getAmountRequired76(): ?int
    {
        return $this->amountRequired76;
    }

    public function setAmountRequired76(?int $amountRequired76): self
    {
        $this->amountRequired76 = $amountRequired76;

        return $this;
    }

    public function getAmountRequired77(): ?int
    {
        return $this->amountRequired77;
    }

    public function setAmountRequired77(?int $amountRequired77): self
    {
        $this->amountRequired77 = $amountRequired77;

        return $this;
    }

    public function getAmountRequired78(): ?int
    {
        return $this->amountRequired78;
    }

    public function setAmountRequired78(?int $amountRequired78): self
    {
        $this->amountRequired78 = $amountRequired78;

        return $this;
    }

    public function getPhase78(): ?HwdgathereInspectTerm
    {
        return $this->phase78;
    }

    public function setPhase78(?HwdgathereInspectTerm $phase78): self
    {
        $this->phase78 = $phase78;

        return $this;
    }

    public function getPhase77(): ?HwdgathereInspectTerm
    {
        return $this->phase77;
    }

    public function setPhase77(?HwdgathereInspectTerm $phase77): self
    {
        $this->phase77 = $phase77;

        return $this;
    }

    public function getPhase76(): ?HwdgathereInspectTerm
    {
        return $this->phase76;
    }

    public function setPhase76(?HwdgathereInspectTerm $phase76): self
    {
        $this->phase76 = $phase76;

        return $this;
    }

    public function getPhase75(): ?HwdgathereInspectTerm
    {
        return $this->phase75;
    }

    public function setPhase75(?HwdgathereInspectTerm $phase75): self
    {
        $this->phase75 = $phase75;

        return $this;
    }

    public function getPhase74(): ?HwdgathereInspectTerm
    {
        return $this->phase74;
    }

    public function setPhase74(?HwdgathereInspectTerm $phase74): self
    {
        $this->phase74 = $phase74;

        return $this;
    }

    public function getPhase73(): ?HwdgathereInspectTerm
    {
        return $this->phase73;
    }

    public function setPhase73(?HwdgathereInspectTerm $phase73): self
    {
        $this->phase73 = $phase73;

        return $this;
    }

    public function getPhase72(): ?HwdgathereInspectTerm
    {
        return $this->phase72;
    }

    public function setPhase72(?HwdgathereInspectTerm $phase72): self
    {
        $this->phase72 = $phase72;

        return $this;
    }

    public function getPhase71(): ?HwdgathereInspectTerm
    {
        return $this->phase71;
    }

    public function setPhase71(?HwdgathereInspectTerm $phase71): self
    {
        $this->phase71 = $phase71;

        return $this;
    }

    public function getPhase70(): ?HwdgathereInspectTerm
    {
        return $this->phase70;
    }

    public function setPhase70(?HwdgathereInspectTerm $phase70): self
    {
        $this->phase70 = $phase70;

        return $this;
    }

    public function getPhase69(): ?HwdgathereInspectTerm
    {
        return $this->phase69;
    }

    public function setPhase69(?HwdgathereInspectTerm $phase69): self
    {
        $this->phase69 = $phase69;

        return $this;
    }

    public function getPhase68(): ?HwdgathereInspectTerm
    {
        return $this->phase68;
    }

    public function setPhase68(?HwdgathereInspectTerm $phase68): self
    {
        $this->phase68 = $phase68;

        return $this;
    }

    public function getPhase67(): ?HwdgathereInspectTerm
    {
        return $this->phase67;
    }

    public function setPhase67(?HwdgathereInspectTerm $phase67): self
    {
        $this->phase67 = $phase67;

        return $this;
    }

    public function getPhase66(): ?HwdgathereInspectTerm
    {
        return $this->phase66;
    }

    public function setPhase66(?HwdgathereInspectTerm $phase66): self
    {
        $this->phase66 = $phase66;

        return $this;
    }

    public function getPhase65(): ?HwdgathereInspectTerm
    {
        return $this->phase65;
    }

    public function setPhase65(?HwdgathereInspectTerm $phase65): self
    {
        $this->phase65 = $phase65;

        return $this;
    }

    public function getPhase64(): ?HwdgathereInspectTerm
    {
        return $this->phase64;
    }

    public function setPhase64(?HwdgathereInspectTerm $phase64): self
    {
        $this->phase64 = $phase64;

        return $this;
    }

    public function getPhase63(): ?HwdgathereInspectTerm
    {
        return $this->phase63;
    }

    public function setPhase63(?HwdgathereInspectTerm $phase63): self
    {
        $this->phase63 = $phase63;

        return $this;
    }

    public function getPhase62(): ?HwdgathereInspectTerm
    {
        return $this->phase62;
    }

    public function setPhase62(?HwdgathereInspectTerm $phase62): self
    {
        $this->phase62 = $phase62;

        return $this;
    }

    public function getPhase61(): ?HwdgathereInspectTerm
    {
        return $this->phase61;
    }

    public function setPhase61(?HwdgathereInspectTerm $phase61): self
    {
        $this->phase61 = $phase61;

        return $this;
    }

    public function getPhase60(): ?HwdgathereInspectTerm
    {
        return $this->phase60;
    }

    public function setPhase60(?HwdgathereInspectTerm $phase60): self
    {
        $this->phase60 = $phase60;

        return $this;
    }

    public function getPhase59(): ?HwdgathereInspectTerm
    {
        return $this->phase59;
    }

    public function setPhase59(?HwdgathereInspectTerm $phase59): self
    {
        $this->phase59 = $phase59;

        return $this;
    }

    public function getPhase58(): ?HwdgathereInspectTerm
    {
        return $this->phase58;
    }

    public function setPhase58(?HwdgathereInspectTerm $phase58): self
    {
        $this->phase58 = $phase58;

        return $this;
    }

    public function getPhase57(): ?HwdgathereInspectTerm
    {
        return $this->phase57;
    }

    public function setPhase57(?HwdgathereInspectTerm $phase57): self
    {
        $this->phase57 = $phase57;

        return $this;
    }

    public function getPhase56(): ?HwdgathereInspectTerm
    {
        return $this->phase56;
    }

    public function setPhase56(?HwdgathereInspectTerm $phase56): self
    {
        $this->phase56 = $phase56;

        return $this;
    }

    public function getPhase55(): ?HwdgathereInspectTerm
    {
        return $this->phase55;
    }

    public function setPhase55(?HwdgathereInspectTerm $phase55): self
    {
        $this->phase55 = $phase55;

        return $this;
    }

    public function getPhase54(): ?HwdgathereInspectTerm
    {
        return $this->phase54;
    }

    public function setPhase54(?HwdgathereInspectTerm $phase54): self
    {
        $this->phase54 = $phase54;

        return $this;
    }

    public function getPhase53(): ?HwdgathereInspectTerm
    {
        return $this->phase53;
    }

    public function setPhase53(?HwdgathereInspectTerm $phase53): self
    {
        $this->phase53 = $phase53;

        return $this;
    }

    public function getPhase52(): ?HwdgathereInspectTerm
    {
        return $this->phase52;
    }

    public function setPhase52(?HwdgathereInspectTerm $phase52): self
    {
        $this->phase52 = $phase52;

        return $this;
    }

    public function getPhase51(): ?HwdgathereInspectTerm
    {
        return $this->phase51;
    }

    public function setPhase51(?HwdgathereInspectTerm $phase51): self
    {
        $this->phase51 = $phase51;

        return $this;
    }

    public function getPhase50(): ?HwdgathereInspectTerm
    {
        return $this->phase50;
    }

    public function setPhase50(?HwdgathereInspectTerm $phase50): self
    {
        $this->phase50 = $phase50;

        return $this;
    }

    public function getPhase49(): ?HwdgathereInspectTerm
    {
        return $this->phase49;
    }

    public function setPhase49(?HwdgathereInspectTerm $phase49): self
    {
        $this->phase49 = $phase49;

        return $this;
    }

    public function getPhase48(): ?HwdgathereInspectTerm
    {
        return $this->phase48;
    }

    public function setPhase48(?HwdgathereInspectTerm $phase48): self
    {
        $this->phase48 = $phase48;

        return $this;
    }

    public function getPhase47(): ?HwdgathereInspectTerm
    {
        return $this->phase47;
    }

    public function setPhase47(?HwdgathereInspectTerm $phase47): self
    {
        $this->phase47 = $phase47;

        return $this;
    }

    public function getPhase46(): ?HwdgathereInspectTerm
    {
        return $this->phase46;
    }

    public function setPhase46(?HwdgathereInspectTerm $phase46): self
    {
        $this->phase46 = $phase46;

        return $this;
    }

    public function getPhase45(): ?HwdgathereInspectTerm
    {
        return $this->phase45;
    }

    public function setPhase45(?HwdgathereInspectTerm $phase45): self
    {
        $this->phase45 = $phase45;

        return $this;
    }

    public function getPhase44(): ?HwdgathereInspectTerm
    {
        return $this->phase44;
    }

    public function setPhase44(?HwdgathereInspectTerm $phase44): self
    {
        $this->phase44 = $phase44;

        return $this;
    }

    public function getPhase43(): ?HwdgathereInspectTerm
    {
        return $this->phase43;
    }

    public function setPhase43(?HwdgathereInspectTerm $phase43): self
    {
        $this->phase43 = $phase43;

        return $this;
    }

    public function getPhase42(): ?HwdgathereInspectTerm
    {
        return $this->phase42;
    }

    public function setPhase42(?HwdgathereInspectTerm $phase42): self
    {
        $this->phase42 = $phase42;

        return $this;
    }

    public function getPhase41(): ?HwdgathereInspectTerm
    {
        return $this->phase41;
    }

    public function setPhase41(?HwdgathereInspectTerm $phase41): self
    {
        $this->phase41 = $phase41;

        return $this;
    }

    public function getPhase40(): ?HwdgathereInspectTerm
    {
        return $this->phase40;
    }

    public function setPhase40(?HwdgathereInspectTerm $phase40): self
    {
        $this->phase40 = $phase40;

        return $this;
    }

    public function getPhase39(): ?HwdgathereInspectTerm
    {
        return $this->phase39;
    }

    public function setPhase39(?HwdgathereInspectTerm $phase39): self
    {
        $this->phase39 = $phase39;

        return $this;
    }

    public function getPhase38(): ?HwdgathereInspectTerm
    {
        return $this->phase38;
    }

    public function setPhase38(?HwdgathereInspectTerm $phase38): self
    {
        $this->phase38 = $phase38;

        return $this;
    }

    public function getPhase37(): ?HwdgathereInspectTerm
    {
        return $this->phase37;
    }

    public function setPhase37(?HwdgathereInspectTerm $phase37): self
    {
        $this->phase37 = $phase37;

        return $this;
    }

    public function getPhase36(): ?HwdgathereInspectTerm
    {
        return $this->phase36;
    }

    public function setPhase36(?HwdgathereInspectTerm $phase36): self
    {
        $this->phase36 = $phase36;

        return $this;
    }

    public function getPhase35(): ?HwdgathereInspectTerm
    {
        return $this->phase35;
    }

    public function setPhase35(?HwdgathereInspectTerm $phase35): self
    {
        $this->phase35 = $phase35;

        return $this;
    }

    public function getPhase34(): ?HwdgathereInspectTerm
    {
        return $this->phase34;
    }

    public function setPhase34(?HwdgathereInspectTerm $phase34): self
    {
        $this->phase34 = $phase34;

        return $this;
    }

    public function getPhase33(): ?HwdgathereInspectTerm
    {
        return $this->phase33;
    }

    public function setPhase33(?HwdgathereInspectTerm $phase33): self
    {
        $this->phase33 = $phase33;

        return $this;
    }

    public function getPhase32(): ?HwdgathereInspectTerm
    {
        return $this->phase32;
    }

    public function setPhase32(?HwdgathereInspectTerm $phase32): self
    {
        $this->phase32 = $phase32;

        return $this;
    }

    public function getPhase31(): ?HwdgathereInspectTerm
    {
        return $this->phase31;
    }

    public function setPhase31(?HwdgathereInspectTerm $phase31): self
    {
        $this->phase31 = $phase31;

        return $this;
    }

    public function getPhase30(): ?HwdgathereInspectTerm
    {
        return $this->phase30;
    }

    public function setPhase30(?HwdgathereInspectTerm $phase30): self
    {
        $this->phase30 = $phase30;

        return $this;
    }

    public function getPhase29(): ?HwdgathereInspectTerm
    {
        return $this->phase29;
    }

    public function setPhase29(?HwdgathereInspectTerm $phase29): self
    {
        $this->phase29 = $phase29;

        return $this;
    }

    public function getPhase28(): ?HwdgathereInspectTerm
    {
        return $this->phase28;
    }

    public function setPhase28(?HwdgathereInspectTerm $phase28): self
    {
        $this->phase28 = $phase28;

        return $this;
    }

    public function getPhase27(): ?HwdgathereInspectTerm
    {
        return $this->phase27;
    }

    public function setPhase27(?HwdgathereInspectTerm $phase27): self
    {
        $this->phase27 = $phase27;

        return $this;
    }

    public function getPhase26(): ?HwdgathereInspectTerm
    {
        return $this->phase26;
    }

    public function setPhase26(?HwdgathereInspectTerm $phase26): self
    {
        $this->phase26 = $phase26;

        return $this;
    }

    public function getPhase25(): ?HwdgathereInspectTerm
    {
        return $this->phase25;
    }

    public function setPhase25(?HwdgathereInspectTerm $phase25): self
    {
        $this->phase25 = $phase25;

        return $this;
    }

    public function getPhase24(): ?HwdgathereInspectTerm
    {
        return $this->phase24;
    }

    public function setPhase24(?HwdgathereInspectTerm $phase24): self
    {
        $this->phase24 = $phase24;

        return $this;
    }

    public function getPhase23(): ?HwdgathereInspectTerm
    {
        return $this->phase23;
    }

    public function setPhase23(?HwdgathereInspectTerm $phase23): self
    {
        $this->phase23 = $phase23;

        return $this;
    }

    public function getPhase22(): ?HwdgathereInspectTerm
    {
        return $this->phase22;
    }

    public function setPhase22(?HwdgathereInspectTerm $phase22): self
    {
        $this->phase22 = $phase22;

        return $this;
    }

    public function getPhase21(): ?HwdgathereInspectTerm
    {
        return $this->phase21;
    }

    public function setPhase21(?HwdgathereInspectTerm $phase21): self
    {
        $this->phase21 = $phase21;

        return $this;
    }

    public function getPhase20(): ?HwdgathereInspectTerm
    {
        return $this->phase20;
    }

    public function setPhase20(?HwdgathereInspectTerm $phase20): self
    {
        $this->phase20 = $phase20;

        return $this;
    }

    public function getPhase19(): ?HwdgathereInspectTerm
    {
        return $this->phase19;
    }

    public function setPhase19(?HwdgathereInspectTerm $phase19): self
    {
        $this->phase19 = $phase19;

        return $this;
    }

    public function getPhase18(): ?HwdgathereInspectTerm
    {
        return $this->phase18;
    }

    public function setPhase18(?HwdgathereInspectTerm $phase18): self
    {
        $this->phase18 = $phase18;

        return $this;
    }

    public function getPhase17(): ?HwdgathereInspectTerm
    {
        return $this->phase17;
    }

    public function setPhase17(?HwdgathereInspectTerm $phase17): self
    {
        $this->phase17 = $phase17;

        return $this;
    }

    public function getPhase16(): ?HwdgathereInspectTerm
    {
        return $this->phase16;
    }

    public function setPhase16(?HwdgathereInspectTerm $phase16): self
    {
        $this->phase16 = $phase16;

        return $this;
    }

    public function getPhase15(): ?HwdgathereInspectTerm
    {
        return $this->phase15;
    }

    public function setPhase15(?HwdgathereInspectTerm $phase15): self
    {
        $this->phase15 = $phase15;

        return $this;
    }

    public function getPhase14(): ?HwdgathereInspectTerm
    {
        return $this->phase14;
    }

    public function setPhase14(?HwdgathereInspectTerm $phase14): self
    {
        $this->phase14 = $phase14;

        return $this;
    }

    public function getPhase13(): ?HwdgathereInspectTerm
    {
        return $this->phase13;
    }

    public function setPhase13(?HwdgathereInspectTerm $phase13): self
    {
        $this->phase13 = $phase13;

        return $this;
    }

    public function getPhase12(): ?HwdgathereInspectTerm
    {
        return $this->phase12;
    }

    public function setPhase12(?HwdgathereInspectTerm $phase12): self
    {
        $this->phase12 = $phase12;

        return $this;
    }

    public function getPhase11(): ?HwdgathereInspectTerm
    {
        return $this->phase11;
    }

    public function setPhase11(?HwdgathereInspectTerm $phase11): self
    {
        $this->phase11 = $phase11;

        return $this;
    }

    public function getPhase10(): ?HwdgathereInspectTerm
    {
        return $this->phase10;
    }

    public function setPhase10(?HwdgathereInspectTerm $phase10): self
    {
        $this->phase10 = $phase10;

        return $this;
    }

    public function getPhase9(): ?HwdgathereInspectTerm
    {
        return $this->phase9;
    }

    public function setPhase9(?HwdgathereInspectTerm $phase9): self
    {
        $this->phase9 = $phase9;

        return $this;
    }

    public function getPhase8(): ?HwdgathereInspectTerm
    {
        return $this->phase8;
    }

    public function setPhase8(?HwdgathereInspectTerm $phase8): self
    {
        $this->phase8 = $phase8;

        return $this;
    }

    public function getPhase7(): ?HwdgathereInspectTerm
    {
        return $this->phase7;
    }

    public function setPhase7(?HwdgathereInspectTerm $phase7): self
    {
        $this->phase7 = $phase7;

        return $this;
    }

    public function getPhase6(): ?HwdgathereInspectTerm
    {
        return $this->phase6;
    }

    public function setPhase6(?HwdgathereInspectTerm $phase6): self
    {
        $this->phase6 = $phase6;

        return $this;
    }

    public function getPhase5(): ?HwdgathereInspectTerm
    {
        return $this->phase5;
    }

    public function setPhase5(?HwdgathereInspectTerm $phase5): self
    {
        $this->phase5 = $phase5;

        return $this;
    }

    public function getPhase4(): ?HwdgathereInspectTerm
    {
        return $this->phase4;
    }

    public function setPhase4(?HwdgathereInspectTerm $phase4): self
    {
        $this->phase4 = $phase4;

        return $this;
    }

    public function getPhase3(): ?HwdgathereInspectTerm
    {
        return $this->phase3;
    }

    public function setPhase3(?HwdgathereInspectTerm $phase3): self
    {
        $this->phase3 = $phase3;

        return $this;
    }

    public function getPhase2(): ?HwdgathereInspectTerm
    {
        return $this->phase2;
    }

    public function setPhase2(?HwdgathereInspectTerm $phase2): self
    {
        $this->phase2 = $phase2;

        return $this;
    }

    public function getPhase1(): ?HwdgathereInspectTerm
    {
        return $this->phase1;
    }

    public function setPhase1(?HwdgathereInspectTerm $phase1): self
    {
        $this->phase1 = $phase1;

        return $this;
    }

    public function getPhase0(): ?HwdgathereInspectTerm
    {
        return $this->phase0;
    }

    public function setPhase0(?HwdgathereInspectTerm $phase0): self
    {
        $this->phase0 = $phase0;

        return $this;
    }

    public function getReward278(): ?HwdgathererInspectionReward
    {
        return $this->reward278;
    }

    public function setReward278(?HwdgathererInspectionReward $reward278): self
    {
        $this->reward278 = $reward278;

        return $this;
    }

    public function getReward277(): ?HwdgathererInspectionReward
    {
        return $this->reward277;
    }

    public function setReward277(?HwdgathererInspectionReward $reward277): self
    {
        $this->reward277 = $reward277;

        return $this;
    }

    public function getReward276(): ?HwdgathererInspectionReward
    {
        return $this->reward276;
    }

    public function setReward276(?HwdgathererInspectionReward $reward276): self
    {
        $this->reward276 = $reward276;

        return $this;
    }

    public function getReward275(): ?HwdgathererInspectionReward
    {
        return $this->reward275;
    }

    public function setReward275(?HwdgathererInspectionReward $reward275): self
    {
        $this->reward275 = $reward275;

        return $this;
    }

    public function getReward274(): ?HwdgathererInspectionReward
    {
        return $this->reward274;
    }

    public function setReward274(?HwdgathererInspectionReward $reward274): self
    {
        $this->reward274 = $reward274;

        return $this;
    }

    public function getReward273(): ?HwdgathererInspectionReward
    {
        return $this->reward273;
    }

    public function setReward273(?HwdgathererInspectionReward $reward273): self
    {
        $this->reward273 = $reward273;

        return $this;
    }

    public function getReward272(): ?HwdgathererInspectionReward
    {
        return $this->reward272;
    }

    public function setReward272(?HwdgathererInspectionReward $reward272): self
    {
        $this->reward272 = $reward272;

        return $this;
    }

    public function getReward271(): ?HwdgathererInspectionReward
    {
        return $this->reward271;
    }

    public function setReward271(?HwdgathererInspectionReward $reward271): self
    {
        $this->reward271 = $reward271;

        return $this;
    }

    public function getReward270(): ?HwdgathererInspectionReward
    {
        return $this->reward270;
    }

    public function setReward270(?HwdgathererInspectionReward $reward270): self
    {
        $this->reward270 = $reward270;

        return $this;
    }

    public function getReward269(): ?HwdgathererInspectionReward
    {
        return $this->reward269;
    }

    public function setReward269(?HwdgathererInspectionReward $reward269): self
    {
        $this->reward269 = $reward269;

        return $this;
    }

    public function getReward268(): ?HwdgathererInspectionReward
    {
        return $this->reward268;
    }

    public function setReward268(?HwdgathererInspectionReward $reward268): self
    {
        $this->reward268 = $reward268;

        return $this;
    }

    public function getReward267(): ?HwdgathererInspectionReward
    {
        return $this->reward267;
    }

    public function setReward267(?HwdgathererInspectionReward $reward267): self
    {
        $this->reward267 = $reward267;

        return $this;
    }

    public function getReward266(): ?HwdgathererInspectionReward
    {
        return $this->reward266;
    }

    public function setReward266(?HwdgathererInspectionReward $reward266): self
    {
        $this->reward266 = $reward266;

        return $this;
    }

    public function getReward265(): ?HwdgathererInspectionReward
    {
        return $this->reward265;
    }

    public function setReward265(?HwdgathererInspectionReward $reward265): self
    {
        $this->reward265 = $reward265;

        return $this;
    }

    public function getReward264(): ?HwdgathererInspectionReward
    {
        return $this->reward264;
    }

    public function setReward264(?HwdgathererInspectionReward $reward264): self
    {
        $this->reward264 = $reward264;

        return $this;
    }

    public function getReward263(): ?HwdgathererInspectionReward
    {
        return $this->reward263;
    }

    public function setReward263(?HwdgathererInspectionReward $reward263): self
    {
        $this->reward263 = $reward263;

        return $this;
    }

    public function getReward262(): ?HwdgathererInspectionReward
    {
        return $this->reward262;
    }

    public function setReward262(?HwdgathererInspectionReward $reward262): self
    {
        $this->reward262 = $reward262;

        return $this;
    }

    public function getReward261(): ?HwdgathererInspectionReward
    {
        return $this->reward261;
    }

    public function setReward261(?HwdgathererInspectionReward $reward261): self
    {
        $this->reward261 = $reward261;

        return $this;
    }

    public function getReward260(): ?HwdgathererInspectionReward
    {
        return $this->reward260;
    }

    public function setReward260(?HwdgathererInspectionReward $reward260): self
    {
        $this->reward260 = $reward260;

        return $this;
    }

    public function getReward259(): ?HwdgathererInspectionReward
    {
        return $this->reward259;
    }

    public function setReward259(?HwdgathererInspectionReward $reward259): self
    {
        $this->reward259 = $reward259;

        return $this;
    }

    public function getReward258(): ?HwdgathererInspectionReward
    {
        return $this->reward258;
    }

    public function setReward258(?HwdgathererInspectionReward $reward258): self
    {
        $this->reward258 = $reward258;

        return $this;
    }

    public function getReward257(): ?HwdgathererInspectionReward
    {
        return $this->reward257;
    }

    public function setReward257(?HwdgathererInspectionReward $reward257): self
    {
        $this->reward257 = $reward257;

        return $this;
    }

    public function getReward256(): ?HwdgathererInspectionReward
    {
        return $this->reward256;
    }

    public function setReward256(?HwdgathererInspectionReward $reward256): self
    {
        $this->reward256 = $reward256;

        return $this;
    }

    public function getReward255(): ?HwdgathererInspectionReward
    {
        return $this->reward255;
    }

    public function setReward255(?HwdgathererInspectionReward $reward255): self
    {
        $this->reward255 = $reward255;

        return $this;
    }

    public function getReward254(): ?HwdgathererInspectionReward
    {
        return $this->reward254;
    }

    public function setReward254(?HwdgathererInspectionReward $reward254): self
    {
        $this->reward254 = $reward254;

        return $this;
    }

    public function getReward253(): ?HwdgathererInspectionReward
    {
        return $this->reward253;
    }

    public function setReward253(?HwdgathererInspectionReward $reward253): self
    {
        $this->reward253 = $reward253;

        return $this;
    }

    public function getReward252(): ?HwdgathererInspectionReward
    {
        return $this->reward252;
    }

    public function setReward252(?HwdgathererInspectionReward $reward252): self
    {
        $this->reward252 = $reward252;

        return $this;
    }

    public function getReward251(): ?HwdgathererInspectionReward
    {
        return $this->reward251;
    }

    public function setReward251(?HwdgathererInspectionReward $reward251): self
    {
        $this->reward251 = $reward251;

        return $this;
    }

    public function getReward250(): ?HwdgathererInspectionReward
    {
        return $this->reward250;
    }

    public function setReward250(?HwdgathererInspectionReward $reward250): self
    {
        $this->reward250 = $reward250;

        return $this;
    }

    public function getReward249(): ?HwdgathererInspectionReward
    {
        return $this->reward249;
    }

    public function setReward249(?HwdgathererInspectionReward $reward249): self
    {
        $this->reward249 = $reward249;

        return $this;
    }

    public function getReward248(): ?HwdgathererInspectionReward
    {
        return $this->reward248;
    }

    public function setReward248(?HwdgathererInspectionReward $reward248): self
    {
        $this->reward248 = $reward248;

        return $this;
    }

    public function getReward247(): ?HwdgathererInspectionReward
    {
        return $this->reward247;
    }

    public function setReward247(?HwdgathererInspectionReward $reward247): self
    {
        $this->reward247 = $reward247;

        return $this;
    }

    public function getReward246(): ?HwdgathererInspectionReward
    {
        return $this->reward246;
    }

    public function setReward246(?HwdgathererInspectionReward $reward246): self
    {
        $this->reward246 = $reward246;

        return $this;
    }

    public function getReward245(): ?HwdgathererInspectionReward
    {
        return $this->reward245;
    }

    public function setReward245(?HwdgathererInspectionReward $reward245): self
    {
        $this->reward245 = $reward245;

        return $this;
    }

    public function getReward244(): ?HwdgathererInspectionReward
    {
        return $this->reward244;
    }

    public function setReward244(?HwdgathererInspectionReward $reward244): self
    {
        $this->reward244 = $reward244;

        return $this;
    }

    public function getReward243(): ?HwdgathererInspectionReward
    {
        return $this->reward243;
    }

    public function setReward243(?HwdgathererInspectionReward $reward243): self
    {
        $this->reward243 = $reward243;

        return $this;
    }

    public function getReward242(): ?HwdgathererInspectionReward
    {
        return $this->reward242;
    }

    public function setReward242(?HwdgathererInspectionReward $reward242): self
    {
        $this->reward242 = $reward242;

        return $this;
    }

    public function getReward241(): ?HwdgathererInspectionReward
    {
        return $this->reward241;
    }

    public function setReward241(?HwdgathererInspectionReward $reward241): self
    {
        $this->reward241 = $reward241;

        return $this;
    }

    public function getReward240(): ?HwdgathererInspectionReward
    {
        return $this->reward240;
    }

    public function setReward240(?HwdgathererInspectionReward $reward240): self
    {
        $this->reward240 = $reward240;

        return $this;
    }

    public function getReward239(): ?HwdgathererInspectionReward
    {
        return $this->reward239;
    }

    public function setReward239(?HwdgathererInspectionReward $reward239): self
    {
        $this->reward239 = $reward239;

        return $this;
    }

    public function getReward238(): ?HwdgathererInspectionReward
    {
        return $this->reward238;
    }

    public function setReward238(?HwdgathererInspectionReward $reward238): self
    {
        $this->reward238 = $reward238;

        return $this;
    }

    public function getReward237(): ?HwdgathererInspectionReward
    {
        return $this->reward237;
    }

    public function setReward237(?HwdgathererInspectionReward $reward237): self
    {
        $this->reward237 = $reward237;

        return $this;
    }

    public function getReward236(): ?HwdgathererInspectionReward
    {
        return $this->reward236;
    }

    public function setReward236(?HwdgathererInspectionReward $reward236): self
    {
        $this->reward236 = $reward236;

        return $this;
    }

    public function getReward235(): ?HwdgathererInspectionReward
    {
        return $this->reward235;
    }

    public function setReward235(?HwdgathererInspectionReward $reward235): self
    {
        $this->reward235 = $reward235;

        return $this;
    }

    public function getReward234(): ?HwdgathererInspectionReward
    {
        return $this->reward234;
    }

    public function setReward234(?HwdgathererInspectionReward $reward234): self
    {
        $this->reward234 = $reward234;

        return $this;
    }

    public function getReward233(): ?HwdgathererInspectionReward
    {
        return $this->reward233;
    }

    public function setReward233(?HwdgathererInspectionReward $reward233): self
    {
        $this->reward233 = $reward233;

        return $this;
    }

    public function getReward232(): ?HwdgathererInspectionReward
    {
        return $this->reward232;
    }

    public function setReward232(?HwdgathererInspectionReward $reward232): self
    {
        $this->reward232 = $reward232;

        return $this;
    }

    public function getReward231(): ?HwdgathererInspectionReward
    {
        return $this->reward231;
    }

    public function setReward231(?HwdgathererInspectionReward $reward231): self
    {
        $this->reward231 = $reward231;

        return $this;
    }

    public function getReward230(): ?HwdgathererInspectionReward
    {
        return $this->reward230;
    }

    public function setReward230(?HwdgathererInspectionReward $reward230): self
    {
        $this->reward230 = $reward230;

        return $this;
    }

    public function getReward229(): ?HwdgathererInspectionReward
    {
        return $this->reward229;
    }

    public function setReward229(?HwdgathererInspectionReward $reward229): self
    {
        $this->reward229 = $reward229;

        return $this;
    }

    public function getReward228(): ?HwdgathererInspectionReward
    {
        return $this->reward228;
    }

    public function setReward228(?HwdgathererInspectionReward $reward228): self
    {
        $this->reward228 = $reward228;

        return $this;
    }

    public function getReward227(): ?HwdgathererInspectionReward
    {
        return $this->reward227;
    }

    public function setReward227(?HwdgathererInspectionReward $reward227): self
    {
        $this->reward227 = $reward227;

        return $this;
    }

    public function getReward226(): ?HwdgathererInspectionReward
    {
        return $this->reward226;
    }

    public function setReward226(?HwdgathererInspectionReward $reward226): self
    {
        $this->reward226 = $reward226;

        return $this;
    }

    public function getReward225(): ?HwdgathererInspectionReward
    {
        return $this->reward225;
    }

    public function setReward225(?HwdgathererInspectionReward $reward225): self
    {
        $this->reward225 = $reward225;

        return $this;
    }

    public function getReward224(): ?HwdgathererInspectionReward
    {
        return $this->reward224;
    }

    public function setReward224(?HwdgathererInspectionReward $reward224): self
    {
        $this->reward224 = $reward224;

        return $this;
    }

    public function getReward223(): ?HwdgathererInspectionReward
    {
        return $this->reward223;
    }

    public function setReward223(?HwdgathererInspectionReward $reward223): self
    {
        $this->reward223 = $reward223;

        return $this;
    }

    public function getReward222(): ?HwdgathererInspectionReward
    {
        return $this->reward222;
    }

    public function setReward222(?HwdgathererInspectionReward $reward222): self
    {
        $this->reward222 = $reward222;

        return $this;
    }

    public function getReward221(): ?HwdgathererInspectionReward
    {
        return $this->reward221;
    }

    public function setReward221(?HwdgathererInspectionReward $reward221): self
    {
        $this->reward221 = $reward221;

        return $this;
    }

    public function getReward220(): ?HwdgathererInspectionReward
    {
        return $this->reward220;
    }

    public function setReward220(?HwdgathererInspectionReward $reward220): self
    {
        $this->reward220 = $reward220;

        return $this;
    }

    public function getReward219(): ?HwdgathererInspectionReward
    {
        return $this->reward219;
    }

    public function setReward219(?HwdgathererInspectionReward $reward219): self
    {
        $this->reward219 = $reward219;

        return $this;
    }

    public function getReward218(): ?HwdgathererInspectionReward
    {
        return $this->reward218;
    }

    public function setReward218(?HwdgathererInspectionReward $reward218): self
    {
        $this->reward218 = $reward218;

        return $this;
    }

    public function getReward217(): ?HwdgathererInspectionReward
    {
        return $this->reward217;
    }

    public function setReward217(?HwdgathererInspectionReward $reward217): self
    {
        $this->reward217 = $reward217;

        return $this;
    }

    public function getReward216(): ?HwdgathererInspectionReward
    {
        return $this->reward216;
    }

    public function setReward216(?HwdgathererInspectionReward $reward216): self
    {
        $this->reward216 = $reward216;

        return $this;
    }

    public function getReward215(): ?HwdgathererInspectionReward
    {
        return $this->reward215;
    }

    public function setReward215(?HwdgathererInspectionReward $reward215): self
    {
        $this->reward215 = $reward215;

        return $this;
    }

    public function getReward214(): ?HwdgathererInspectionReward
    {
        return $this->reward214;
    }

    public function setReward214(?HwdgathererInspectionReward $reward214): self
    {
        $this->reward214 = $reward214;

        return $this;
    }

    public function getReward213(): ?HwdgathererInspectionReward
    {
        return $this->reward213;
    }

    public function setReward213(?HwdgathererInspectionReward $reward213): self
    {
        $this->reward213 = $reward213;

        return $this;
    }

    public function getReward212(): ?HwdgathererInspectionReward
    {
        return $this->reward212;
    }

    public function setReward212(?HwdgathererInspectionReward $reward212): self
    {
        $this->reward212 = $reward212;

        return $this;
    }

    public function getReward211(): ?HwdgathererInspectionReward
    {
        return $this->reward211;
    }

    public function setReward211(?HwdgathererInspectionReward $reward211): self
    {
        $this->reward211 = $reward211;

        return $this;
    }

    public function getReward210(): ?HwdgathererInspectionReward
    {
        return $this->reward210;
    }

    public function setReward210(?HwdgathererInspectionReward $reward210): self
    {
        $this->reward210 = $reward210;

        return $this;
    }

    public function getReward29(): ?HwdgathererInspectionReward
    {
        return $this->reward29;
    }

    public function setReward29(?HwdgathererInspectionReward $reward29): self
    {
        $this->reward29 = $reward29;

        return $this;
    }

    public function getReward28(): ?HwdgathererInspectionReward
    {
        return $this->reward28;
    }

    public function setReward28(?HwdgathererInspectionReward $reward28): self
    {
        $this->reward28 = $reward28;

        return $this;
    }

    public function getReward27(): ?HwdgathererInspectionReward
    {
        return $this->reward27;
    }

    public function setReward27(?HwdgathererInspectionReward $reward27): self
    {
        $this->reward27 = $reward27;

        return $this;
    }

    public function getReward26(): ?HwdgathererInspectionReward
    {
        return $this->reward26;
    }

    public function setReward26(?HwdgathererInspectionReward $reward26): self
    {
        $this->reward26 = $reward26;

        return $this;
    }

    public function getReward25(): ?HwdgathererInspectionReward
    {
        return $this->reward25;
    }

    public function setReward25(?HwdgathererInspectionReward $reward25): self
    {
        $this->reward25 = $reward25;

        return $this;
    }

    public function getReward24(): ?HwdgathererInspectionReward
    {
        return $this->reward24;
    }

    public function setReward24(?HwdgathererInspectionReward $reward24): self
    {
        $this->reward24 = $reward24;

        return $this;
    }

    public function getReward23(): ?HwdgathererInspectionReward
    {
        return $this->reward23;
    }

    public function setReward23(?HwdgathererInspectionReward $reward23): self
    {
        $this->reward23 = $reward23;

        return $this;
    }

    public function getReward22(): ?HwdgathererInspectionReward
    {
        return $this->reward22;
    }

    public function setReward22(?HwdgathererInspectionReward $reward22): self
    {
        $this->reward22 = $reward22;

        return $this;
    }

    public function getReward21(): ?HwdgathererInspectionReward
    {
        return $this->reward21;
    }

    public function setReward21(?HwdgathererInspectionReward $reward21): self
    {
        $this->reward21 = $reward21;

        return $this;
    }

    public function getReward20(): ?HwdgathererInspectionReward
    {
        return $this->reward20;
    }

    public function setReward20(?HwdgathererInspectionReward $reward20): self
    {
        $this->reward20 = $reward20;

        return $this;
    }

    public function getReward178(): ?HwdgathererInspectionReward
    {
        return $this->reward178;
    }

    public function setReward178(?HwdgathererInspectionReward $reward178): self
    {
        $this->reward178 = $reward178;

        return $this;
    }

    public function getReward177(): ?HwdgathererInspectionReward
    {
        return $this->reward177;
    }

    public function setReward177(?HwdgathererInspectionReward $reward177): self
    {
        $this->reward177 = $reward177;

        return $this;
    }

    public function getReward176(): ?HwdgathererInspectionReward
    {
        return $this->reward176;
    }

    public function setReward176(?HwdgathererInspectionReward $reward176): self
    {
        $this->reward176 = $reward176;

        return $this;
    }

    public function getReward175(): ?HwdgathererInspectionReward
    {
        return $this->reward175;
    }

    public function setReward175(?HwdgathererInspectionReward $reward175): self
    {
        $this->reward175 = $reward175;

        return $this;
    }

    public function getReward174(): ?HwdgathererInspectionReward
    {
        return $this->reward174;
    }

    public function setReward174(?HwdgathererInspectionReward $reward174): self
    {
        $this->reward174 = $reward174;

        return $this;
    }

    public function getReward173(): ?HwdgathererInspectionReward
    {
        return $this->reward173;
    }

    public function setReward173(?HwdgathererInspectionReward $reward173): self
    {
        $this->reward173 = $reward173;

        return $this;
    }

    public function getReward172(): ?HwdgathererInspectionReward
    {
        return $this->reward172;
    }

    public function setReward172(?HwdgathererInspectionReward $reward172): self
    {
        $this->reward172 = $reward172;

        return $this;
    }

    public function getReward171(): ?HwdgathererInspectionReward
    {
        return $this->reward171;
    }

    public function setReward171(?HwdgathererInspectionReward $reward171): self
    {
        $this->reward171 = $reward171;

        return $this;
    }

    public function getReward170(): ?HwdgathererInspectionReward
    {
        return $this->reward170;
    }

    public function setReward170(?HwdgathererInspectionReward $reward170): self
    {
        $this->reward170 = $reward170;

        return $this;
    }

    public function getReward169(): ?HwdgathererInspectionReward
    {
        return $this->reward169;
    }

    public function setReward169(?HwdgathererInspectionReward $reward169): self
    {
        $this->reward169 = $reward169;

        return $this;
    }

    public function getReward168(): ?HwdgathererInspectionReward
    {
        return $this->reward168;
    }

    public function setReward168(?HwdgathererInspectionReward $reward168): self
    {
        $this->reward168 = $reward168;

        return $this;
    }

    public function getReward167(): ?HwdgathererInspectionReward
    {
        return $this->reward167;
    }

    public function setReward167(?HwdgathererInspectionReward $reward167): self
    {
        $this->reward167 = $reward167;

        return $this;
    }

    public function getReward166(): ?HwdgathererInspectionReward
    {
        return $this->reward166;
    }

    public function setReward166(?HwdgathererInspectionReward $reward166): self
    {
        $this->reward166 = $reward166;

        return $this;
    }

    public function getReward165(): ?HwdgathererInspectionReward
    {
        return $this->reward165;
    }

    public function setReward165(?HwdgathererInspectionReward $reward165): self
    {
        $this->reward165 = $reward165;

        return $this;
    }

    public function getReward164(): ?HwdgathererInspectionReward
    {
        return $this->reward164;
    }

    public function setReward164(?HwdgathererInspectionReward $reward164): self
    {
        $this->reward164 = $reward164;

        return $this;
    }

    public function getReward163(): ?HwdgathererInspectionReward
    {
        return $this->reward163;
    }

    public function setReward163(?HwdgathererInspectionReward $reward163): self
    {
        $this->reward163 = $reward163;

        return $this;
    }

    public function getReward162(): ?HwdgathererInspectionReward
    {
        return $this->reward162;
    }

    public function setReward162(?HwdgathererInspectionReward $reward162): self
    {
        $this->reward162 = $reward162;

        return $this;
    }

    public function getReward161(): ?HwdgathererInspectionReward
    {
        return $this->reward161;
    }

    public function setReward161(?HwdgathererInspectionReward $reward161): self
    {
        $this->reward161 = $reward161;

        return $this;
    }

    public function getReward160(): ?HwdgathererInspectionReward
    {
        return $this->reward160;
    }

    public function setReward160(?HwdgathererInspectionReward $reward160): self
    {
        $this->reward160 = $reward160;

        return $this;
    }

    public function getReward159(): ?HwdgathererInspectionReward
    {
        return $this->reward159;
    }

    public function setReward159(?HwdgathererInspectionReward $reward159): self
    {
        $this->reward159 = $reward159;

        return $this;
    }

    public function getReward158(): ?HwdgathererInspectionReward
    {
        return $this->reward158;
    }

    public function setReward158(?HwdgathererInspectionReward $reward158): self
    {
        $this->reward158 = $reward158;

        return $this;
    }

    public function getReward157(): ?HwdgathererInspectionReward
    {
        return $this->reward157;
    }

    public function setReward157(?HwdgathererInspectionReward $reward157): self
    {
        $this->reward157 = $reward157;

        return $this;
    }

    public function getReward156(): ?HwdgathererInspectionReward
    {
        return $this->reward156;
    }

    public function setReward156(?HwdgathererInspectionReward $reward156): self
    {
        $this->reward156 = $reward156;

        return $this;
    }

    public function getReward155(): ?HwdgathererInspectionReward
    {
        return $this->reward155;
    }

    public function setReward155(?HwdgathererInspectionReward $reward155): self
    {
        $this->reward155 = $reward155;

        return $this;
    }

    public function getReward154(): ?HwdgathererInspectionReward
    {
        return $this->reward154;
    }

    public function setReward154(?HwdgathererInspectionReward $reward154): self
    {
        $this->reward154 = $reward154;

        return $this;
    }

    public function getReward153(): ?HwdgathererInspectionReward
    {
        return $this->reward153;
    }

    public function setReward153(?HwdgathererInspectionReward $reward153): self
    {
        $this->reward153 = $reward153;

        return $this;
    }

    public function getReward152(): ?HwdgathererInspectionReward
    {
        return $this->reward152;
    }

    public function setReward152(?HwdgathererInspectionReward $reward152): self
    {
        $this->reward152 = $reward152;

        return $this;
    }

    public function getReward151(): ?HwdgathererInspectionReward
    {
        return $this->reward151;
    }

    public function setReward151(?HwdgathererInspectionReward $reward151): self
    {
        $this->reward151 = $reward151;

        return $this;
    }

    public function getReward150(): ?HwdgathererInspectionReward
    {
        return $this->reward150;
    }

    public function setReward150(?HwdgathererInspectionReward $reward150): self
    {
        $this->reward150 = $reward150;

        return $this;
    }

    public function getReward149(): ?HwdgathererInspectionReward
    {
        return $this->reward149;
    }

    public function setReward149(?HwdgathererInspectionReward $reward149): self
    {
        $this->reward149 = $reward149;

        return $this;
    }

    public function getReward148(): ?HwdgathererInspectionReward
    {
        return $this->reward148;
    }

    public function setReward148(?HwdgathererInspectionReward $reward148): self
    {
        $this->reward148 = $reward148;

        return $this;
    }

    public function getReward147(): ?HwdgathererInspectionReward
    {
        return $this->reward147;
    }

    public function setReward147(?HwdgathererInspectionReward $reward147): self
    {
        $this->reward147 = $reward147;

        return $this;
    }

    public function getReward146(): ?HwdgathererInspectionReward
    {
        return $this->reward146;
    }

    public function setReward146(?HwdgathererInspectionReward $reward146): self
    {
        $this->reward146 = $reward146;

        return $this;
    }

    public function getReward145(): ?HwdgathererInspectionReward
    {
        return $this->reward145;
    }

    public function setReward145(?HwdgathererInspectionReward $reward145): self
    {
        $this->reward145 = $reward145;

        return $this;
    }

    public function getReward144(): ?HwdgathererInspectionReward
    {
        return $this->reward144;
    }

    public function setReward144(?HwdgathererInspectionReward $reward144): self
    {
        $this->reward144 = $reward144;

        return $this;
    }

    public function getReward143(): ?HwdgathererInspectionReward
    {
        return $this->reward143;
    }

    public function setReward143(?HwdgathererInspectionReward $reward143): self
    {
        $this->reward143 = $reward143;

        return $this;
    }

    public function getReward142(): ?HwdgathererInspectionReward
    {
        return $this->reward142;
    }

    public function setReward142(?HwdgathererInspectionReward $reward142): self
    {
        $this->reward142 = $reward142;

        return $this;
    }

    public function getReward141(): ?HwdgathererInspectionReward
    {
        return $this->reward141;
    }

    public function setReward141(?HwdgathererInspectionReward $reward141): self
    {
        $this->reward141 = $reward141;

        return $this;
    }

    public function getReward140(): ?HwdgathererInspectionReward
    {
        return $this->reward140;
    }

    public function setReward140(?HwdgathererInspectionReward $reward140): self
    {
        $this->reward140 = $reward140;

        return $this;
    }

    public function getReward139(): ?HwdgathererInspectionReward
    {
        return $this->reward139;
    }

    public function setReward139(?HwdgathererInspectionReward $reward139): self
    {
        $this->reward139 = $reward139;

        return $this;
    }

    public function getReward138(): ?HwdgathererInspectionReward
    {
        return $this->reward138;
    }

    public function setReward138(?HwdgathererInspectionReward $reward138): self
    {
        $this->reward138 = $reward138;

        return $this;
    }

    public function getReward137(): ?HwdgathererInspectionReward
    {
        return $this->reward137;
    }

    public function setReward137(?HwdgathererInspectionReward $reward137): self
    {
        $this->reward137 = $reward137;

        return $this;
    }

    public function getReward136(): ?HwdgathererInspectionReward
    {
        return $this->reward136;
    }

    public function setReward136(?HwdgathererInspectionReward $reward136): self
    {
        $this->reward136 = $reward136;

        return $this;
    }

    public function getReward135(): ?HwdgathererInspectionReward
    {
        return $this->reward135;
    }

    public function setReward135(?HwdgathererInspectionReward $reward135): self
    {
        $this->reward135 = $reward135;

        return $this;
    }

    public function getReward134(): ?HwdgathererInspectionReward
    {
        return $this->reward134;
    }

    public function setReward134(?HwdgathererInspectionReward $reward134): self
    {
        $this->reward134 = $reward134;

        return $this;
    }

    public function getReward133(): ?HwdgathererInspectionReward
    {
        return $this->reward133;
    }

    public function setReward133(?HwdgathererInspectionReward $reward133): self
    {
        $this->reward133 = $reward133;

        return $this;
    }

    public function getReward132(): ?HwdgathererInspectionReward
    {
        return $this->reward132;
    }

    public function setReward132(?HwdgathererInspectionReward $reward132): self
    {
        $this->reward132 = $reward132;

        return $this;
    }

    public function getReward131(): ?HwdgathererInspectionReward
    {
        return $this->reward131;
    }

    public function setReward131(?HwdgathererInspectionReward $reward131): self
    {
        $this->reward131 = $reward131;

        return $this;
    }

    public function getReward130(): ?HwdgathererInspectionReward
    {
        return $this->reward130;
    }

    public function setReward130(?HwdgathererInspectionReward $reward130): self
    {
        $this->reward130 = $reward130;

        return $this;
    }

    public function getReward129(): ?HwdgathererInspectionReward
    {
        return $this->reward129;
    }

    public function setReward129(?HwdgathererInspectionReward $reward129): self
    {
        $this->reward129 = $reward129;

        return $this;
    }

    public function getReward128(): ?HwdgathererInspectionReward
    {
        return $this->reward128;
    }

    public function setReward128(?HwdgathererInspectionReward $reward128): self
    {
        $this->reward128 = $reward128;

        return $this;
    }

    public function getReward127(): ?HwdgathererInspectionReward
    {
        return $this->reward127;
    }

    public function setReward127(?HwdgathererInspectionReward $reward127): self
    {
        $this->reward127 = $reward127;

        return $this;
    }

    public function getReward126(): ?HwdgathererInspectionReward
    {
        return $this->reward126;
    }

    public function setReward126(?HwdgathererInspectionReward $reward126): self
    {
        $this->reward126 = $reward126;

        return $this;
    }

    public function getReward125(): ?HwdgathererInspectionReward
    {
        return $this->reward125;
    }

    public function setReward125(?HwdgathererInspectionReward $reward125): self
    {
        $this->reward125 = $reward125;

        return $this;
    }

    public function getReward124(): ?HwdgathererInspectionReward
    {
        return $this->reward124;
    }

    public function setReward124(?HwdgathererInspectionReward $reward124): self
    {
        $this->reward124 = $reward124;

        return $this;
    }

    public function getReward123(): ?HwdgathererInspectionReward
    {
        return $this->reward123;
    }

    public function setReward123(?HwdgathererInspectionReward $reward123): self
    {
        $this->reward123 = $reward123;

        return $this;
    }

    public function getReward122(): ?HwdgathererInspectionReward
    {
        return $this->reward122;
    }

    public function setReward122(?HwdgathererInspectionReward $reward122): self
    {
        $this->reward122 = $reward122;

        return $this;
    }

    public function getReward121(): ?HwdgathererInspectionReward
    {
        return $this->reward121;
    }

    public function setReward121(?HwdgathererInspectionReward $reward121): self
    {
        $this->reward121 = $reward121;

        return $this;
    }

    public function getReward120(): ?HwdgathererInspectionReward
    {
        return $this->reward120;
    }

    public function setReward120(?HwdgathererInspectionReward $reward120): self
    {
        $this->reward120 = $reward120;

        return $this;
    }

    public function getReward119(): ?HwdgathererInspectionReward
    {
        return $this->reward119;
    }

    public function setReward119(?HwdgathererInspectionReward $reward119): self
    {
        $this->reward119 = $reward119;

        return $this;
    }

    public function getReward118(): ?HwdgathererInspectionReward
    {
        return $this->reward118;
    }

    public function setReward118(?HwdgathererInspectionReward $reward118): self
    {
        $this->reward118 = $reward118;

        return $this;
    }

    public function getReward117(): ?HwdgathererInspectionReward
    {
        return $this->reward117;
    }

    public function setReward117(?HwdgathererInspectionReward $reward117): self
    {
        $this->reward117 = $reward117;

        return $this;
    }

    public function getReward116(): ?HwdgathererInspectionReward
    {
        return $this->reward116;
    }

    public function setReward116(?HwdgathererInspectionReward $reward116): self
    {
        $this->reward116 = $reward116;

        return $this;
    }

    public function getReward115(): ?HwdgathererInspectionReward
    {
        return $this->reward115;
    }

    public function setReward115(?HwdgathererInspectionReward $reward115): self
    {
        $this->reward115 = $reward115;

        return $this;
    }

    public function getReward114(): ?HwdgathererInspectionReward
    {
        return $this->reward114;
    }

    public function setReward114(?HwdgathererInspectionReward $reward114): self
    {
        $this->reward114 = $reward114;

        return $this;
    }

    public function getReward113(): ?HwdgathererInspectionReward
    {
        return $this->reward113;
    }

    public function setReward113(?HwdgathererInspectionReward $reward113): self
    {
        $this->reward113 = $reward113;

        return $this;
    }

    public function getReward112(): ?HwdgathererInspectionReward
    {
        return $this->reward112;
    }

    public function setReward112(?HwdgathererInspectionReward $reward112): self
    {
        $this->reward112 = $reward112;

        return $this;
    }

    public function getReward111(): ?HwdgathererInspectionReward
    {
        return $this->reward111;
    }

    public function setReward111(?HwdgathererInspectionReward $reward111): self
    {
        $this->reward111 = $reward111;

        return $this;
    }

    public function getReward110(): ?HwdgathererInspectionReward
    {
        return $this->reward110;
    }

    public function setReward110(?HwdgathererInspectionReward $reward110): self
    {
        $this->reward110 = $reward110;

        return $this;
    }

    public function getReward19(): ?HwdgathererInspectionReward
    {
        return $this->reward19;
    }

    public function setReward19(?HwdgathererInspectionReward $reward19): self
    {
        $this->reward19 = $reward19;

        return $this;
    }

    public function getReward18(): ?HwdgathererInspectionReward
    {
        return $this->reward18;
    }

    public function setReward18(?HwdgathererInspectionReward $reward18): self
    {
        $this->reward18 = $reward18;

        return $this;
    }

    public function getReward17(): ?HwdgathererInspectionReward
    {
        return $this->reward17;
    }

    public function setReward17(?HwdgathererInspectionReward $reward17): self
    {
        $this->reward17 = $reward17;

        return $this;
    }

    public function getReward16(): ?HwdgathererInspectionReward
    {
        return $this->reward16;
    }

    public function setReward16(?HwdgathererInspectionReward $reward16): self
    {
        $this->reward16 = $reward16;

        return $this;
    }

    public function getReward15(): ?HwdgathererInspectionReward
    {
        return $this->reward15;
    }

    public function setReward15(?HwdgathererInspectionReward $reward15): self
    {
        $this->reward15 = $reward15;

        return $this;
    }

    public function getReward14(): ?HwdgathererInspectionReward
    {
        return $this->reward14;
    }

    public function setReward14(?HwdgathererInspectionReward $reward14): self
    {
        $this->reward14 = $reward14;

        return $this;
    }

    public function getReward13(): ?HwdgathererInspectionReward
    {
        return $this->reward13;
    }

    public function setReward13(?HwdgathererInspectionReward $reward13): self
    {
        $this->reward13 = $reward13;

        return $this;
    }

    public function getReward12(): ?HwdgathererInspectionReward
    {
        return $this->reward12;
    }

    public function setReward12(?HwdgathererInspectionReward $reward12): self
    {
        $this->reward12 = $reward12;

        return $this;
    }

    public function getReward11(): ?HwdgathererInspectionReward
    {
        return $this->reward11;
    }

    public function setReward11(?HwdgathererInspectionReward $reward11): self
    {
        $this->reward11 = $reward11;

        return $this;
    }

    public function getReward10(): ?HwdgathererInspectionReward
    {
        return $this->reward10;
    }

    public function setReward10(?HwdgathererInspectionReward $reward10): self
    {
        $this->reward10 = $reward10;

        return $this;
    }

    public function getItemReceived78(): ?Item
    {
        return $this->itemReceived78;
    }

    public function setItemReceived78(?Item $itemReceived78): self
    {
        $this->itemReceived78 = $itemReceived78;

        return $this;
    }

    public function getItemReceived77(): ?Item
    {
        return $this->itemReceived77;
    }

    public function setItemReceived77(?Item $itemReceived77): self
    {
        $this->itemReceived77 = $itemReceived77;

        return $this;
    }

    public function getItemReceived76(): ?Item
    {
        return $this->itemReceived76;
    }

    public function setItemReceived76(?Item $itemReceived76): self
    {
        $this->itemReceived76 = $itemReceived76;

        return $this;
    }

    public function getItemReceived75(): ?Item
    {
        return $this->itemReceived75;
    }

    public function setItemReceived75(?Item $itemReceived75): self
    {
        $this->itemReceived75 = $itemReceived75;

        return $this;
    }

    public function getItemReceived74(): ?Item
    {
        return $this->itemReceived74;
    }

    public function setItemReceived74(?Item $itemReceived74): self
    {
        $this->itemReceived74 = $itemReceived74;

        return $this;
    }

    public function getItemReceived73(): ?Item
    {
        return $this->itemReceived73;
    }

    public function setItemReceived73(?Item $itemReceived73): self
    {
        $this->itemReceived73 = $itemReceived73;

        return $this;
    }

    public function getItemReceived72(): ?Item
    {
        return $this->itemReceived72;
    }

    public function setItemReceived72(?Item $itemReceived72): self
    {
        $this->itemReceived72 = $itemReceived72;

        return $this;
    }

    public function getItemReceived71(): ?Item
    {
        return $this->itemReceived71;
    }

    public function setItemReceived71(?Item $itemReceived71): self
    {
        $this->itemReceived71 = $itemReceived71;

        return $this;
    }

    public function getItemReceived70(): ?Item
    {
        return $this->itemReceived70;
    }

    public function setItemReceived70(?Item $itemReceived70): self
    {
        $this->itemReceived70 = $itemReceived70;

        return $this;
    }

    public function getItemReceived69(): ?Item
    {
        return $this->itemReceived69;
    }

    public function setItemReceived69(?Item $itemReceived69): self
    {
        $this->itemReceived69 = $itemReceived69;

        return $this;
    }

    public function getItemReceived68(): ?Item
    {
        return $this->itemReceived68;
    }

    public function setItemReceived68(?Item $itemReceived68): self
    {
        $this->itemReceived68 = $itemReceived68;

        return $this;
    }

    public function getItemReceived67(): ?Item
    {
        return $this->itemReceived67;
    }

    public function setItemReceived67(?Item $itemReceived67): self
    {
        $this->itemReceived67 = $itemReceived67;

        return $this;
    }

    public function getItemReceived66(): ?Item
    {
        return $this->itemReceived66;
    }

    public function setItemReceived66(?Item $itemReceived66): self
    {
        $this->itemReceived66 = $itemReceived66;

        return $this;
    }

    public function getItemReceived65(): ?Item
    {
        return $this->itemReceived65;
    }

    public function setItemReceived65(?Item $itemReceived65): self
    {
        $this->itemReceived65 = $itemReceived65;

        return $this;
    }

    public function getItemReceived64(): ?Item
    {
        return $this->itemReceived64;
    }

    public function setItemReceived64(?Item $itemReceived64): self
    {
        $this->itemReceived64 = $itemReceived64;

        return $this;
    }

    public function getItemReceived63(): ?Item
    {
        return $this->itemReceived63;
    }

    public function setItemReceived63(?Item $itemReceived63): self
    {
        $this->itemReceived63 = $itemReceived63;

        return $this;
    }

    public function getItemReceived62(): ?Item
    {
        return $this->itemReceived62;
    }

    public function setItemReceived62(?Item $itemReceived62): self
    {
        $this->itemReceived62 = $itemReceived62;

        return $this;
    }

    public function getItemReceived61(): ?Item
    {
        return $this->itemReceived61;
    }

    public function setItemReceived61(?Item $itemReceived61): self
    {
        $this->itemReceived61 = $itemReceived61;

        return $this;
    }

    public function getItemReceived60(): ?Item
    {
        return $this->itemReceived60;
    }

    public function setItemReceived60(?Item $itemReceived60): self
    {
        $this->itemReceived60 = $itemReceived60;

        return $this;
    }

    public function getItemReceived59(): ?Item
    {
        return $this->itemReceived59;
    }

    public function setItemReceived59(?Item $itemReceived59): self
    {
        $this->itemReceived59 = $itemReceived59;

        return $this;
    }

    public function getItemReceived58(): ?Item
    {
        return $this->itemReceived58;
    }

    public function setItemReceived58(?Item $itemReceived58): self
    {
        $this->itemReceived58 = $itemReceived58;

        return $this;
    }

    public function getItemReceived57(): ?Item
    {
        return $this->itemReceived57;
    }

    public function setItemReceived57(?Item $itemReceived57): self
    {
        $this->itemReceived57 = $itemReceived57;

        return $this;
    }

    public function getItemReceived56(): ?Item
    {
        return $this->itemReceived56;
    }

    public function setItemReceived56(?Item $itemReceived56): self
    {
        $this->itemReceived56 = $itemReceived56;

        return $this;
    }

    public function getItemReceived55(): ?Item
    {
        return $this->itemReceived55;
    }

    public function setItemReceived55(?Item $itemReceived55): self
    {
        $this->itemReceived55 = $itemReceived55;

        return $this;
    }

    public function getItemReceived54(): ?Item
    {
        return $this->itemReceived54;
    }

    public function setItemReceived54(?Item $itemReceived54): self
    {
        $this->itemReceived54 = $itemReceived54;

        return $this;
    }

    public function getItemReceived53(): ?Item
    {
        return $this->itemReceived53;
    }

    public function setItemReceived53(?Item $itemReceived53): self
    {
        $this->itemReceived53 = $itemReceived53;

        return $this;
    }

    public function getItemReceived52(): ?Item
    {
        return $this->itemReceived52;
    }

    public function setItemReceived52(?Item $itemReceived52): self
    {
        $this->itemReceived52 = $itemReceived52;

        return $this;
    }

    public function getItemReceived51(): ?Item
    {
        return $this->itemReceived51;
    }

    public function setItemReceived51(?Item $itemReceived51): self
    {
        $this->itemReceived51 = $itemReceived51;

        return $this;
    }

    public function getItemReceived50(): ?Item
    {
        return $this->itemReceived50;
    }

    public function setItemReceived50(?Item $itemReceived50): self
    {
        $this->itemReceived50 = $itemReceived50;

        return $this;
    }

    public function getItemReceived49(): ?Item
    {
        return $this->itemReceived49;
    }

    public function setItemReceived49(?Item $itemReceived49): self
    {
        $this->itemReceived49 = $itemReceived49;

        return $this;
    }

    public function getItemReceived48(): ?Item
    {
        return $this->itemReceived48;
    }

    public function setItemReceived48(?Item $itemReceived48): self
    {
        $this->itemReceived48 = $itemReceived48;

        return $this;
    }

    public function getItemReceived47(): ?Item
    {
        return $this->itemReceived47;
    }

    public function setItemReceived47(?Item $itemReceived47): self
    {
        $this->itemReceived47 = $itemReceived47;

        return $this;
    }

    public function getItemReceived46(): ?Item
    {
        return $this->itemReceived46;
    }

    public function setItemReceived46(?Item $itemReceived46): self
    {
        $this->itemReceived46 = $itemReceived46;

        return $this;
    }

    public function getItemReceived45(): ?Item
    {
        return $this->itemReceived45;
    }

    public function setItemReceived45(?Item $itemReceived45): self
    {
        $this->itemReceived45 = $itemReceived45;

        return $this;
    }

    public function getItemReceived44(): ?Item
    {
        return $this->itemReceived44;
    }

    public function setItemReceived44(?Item $itemReceived44): self
    {
        $this->itemReceived44 = $itemReceived44;

        return $this;
    }

    public function getItemReceived43(): ?Item
    {
        return $this->itemReceived43;
    }

    public function setItemReceived43(?Item $itemReceived43): self
    {
        $this->itemReceived43 = $itemReceived43;

        return $this;
    }

    public function getItemReceived42(): ?Item
    {
        return $this->itemReceived42;
    }

    public function setItemReceived42(?Item $itemReceived42): self
    {
        $this->itemReceived42 = $itemReceived42;

        return $this;
    }

    public function getItemReceived41(): ?Item
    {
        return $this->itemReceived41;
    }

    public function setItemReceived41(?Item $itemReceived41): self
    {
        $this->itemReceived41 = $itemReceived41;

        return $this;
    }

    public function getItemReceived40(): ?Item
    {
        return $this->itemReceived40;
    }

    public function setItemReceived40(?Item $itemReceived40): self
    {
        $this->itemReceived40 = $itemReceived40;

        return $this;
    }

    public function getItemReceived39(): ?Item
    {
        return $this->itemReceived39;
    }

    public function setItemReceived39(?Item $itemReceived39): self
    {
        $this->itemReceived39 = $itemReceived39;

        return $this;
    }

    public function getItemReceived38(): ?Item
    {
        return $this->itemReceived38;
    }

    public function setItemReceived38(?Item $itemReceived38): self
    {
        $this->itemReceived38 = $itemReceived38;

        return $this;
    }

    public function getItemReceived37(): ?Item
    {
        return $this->itemReceived37;
    }

    public function setItemReceived37(?Item $itemReceived37): self
    {
        $this->itemReceived37 = $itemReceived37;

        return $this;
    }

    public function getItemReceived36(): ?Item
    {
        return $this->itemReceived36;
    }

    public function setItemReceived36(?Item $itemReceived36): self
    {
        $this->itemReceived36 = $itemReceived36;

        return $this;
    }

    public function getItemReceived35(): ?Item
    {
        return $this->itemReceived35;
    }

    public function setItemReceived35(?Item $itemReceived35): self
    {
        $this->itemReceived35 = $itemReceived35;

        return $this;
    }

    public function getItemReceived34(): ?Item
    {
        return $this->itemReceived34;
    }

    public function setItemReceived34(?Item $itemReceived34): self
    {
        $this->itemReceived34 = $itemReceived34;

        return $this;
    }

    public function getItemReceived33(): ?Item
    {
        return $this->itemReceived33;
    }

    public function setItemReceived33(?Item $itemReceived33): self
    {
        $this->itemReceived33 = $itemReceived33;

        return $this;
    }

    public function getItemReceived32(): ?Item
    {
        return $this->itemReceived32;
    }

    public function setItemReceived32(?Item $itemReceived32): self
    {
        $this->itemReceived32 = $itemReceived32;

        return $this;
    }

    public function getItemReceived31(): ?Item
    {
        return $this->itemReceived31;
    }

    public function setItemReceived31(?Item $itemReceived31): self
    {
        $this->itemReceived31 = $itemReceived31;

        return $this;
    }

    public function getItemReceived30(): ?Item
    {
        return $this->itemReceived30;
    }

    public function setItemReceived30(?Item $itemReceived30): self
    {
        $this->itemReceived30 = $itemReceived30;

        return $this;
    }

    public function getItemReceived29(): ?Item
    {
        return $this->itemReceived29;
    }

    public function setItemReceived29(?Item $itemReceived29): self
    {
        $this->itemReceived29 = $itemReceived29;

        return $this;
    }

    public function getItemReceived28(): ?Item
    {
        return $this->itemReceived28;
    }

    public function setItemReceived28(?Item $itemReceived28): self
    {
        $this->itemReceived28 = $itemReceived28;

        return $this;
    }

    public function getItemReceived27(): ?Item
    {
        return $this->itemReceived27;
    }

    public function setItemReceived27(?Item $itemReceived27): self
    {
        $this->itemReceived27 = $itemReceived27;

        return $this;
    }

    public function getItemReceived26(): ?Item
    {
        return $this->itemReceived26;
    }

    public function setItemReceived26(?Item $itemReceived26): self
    {
        $this->itemReceived26 = $itemReceived26;

        return $this;
    }

    public function getItemReceived25(): ?Item
    {
        return $this->itemReceived25;
    }

    public function setItemReceived25(?Item $itemReceived25): self
    {
        $this->itemReceived25 = $itemReceived25;

        return $this;
    }

    public function getItemReceived24(): ?Item
    {
        return $this->itemReceived24;
    }

    public function setItemReceived24(?Item $itemReceived24): self
    {
        $this->itemReceived24 = $itemReceived24;

        return $this;
    }

    public function getItemReceived23(): ?Item
    {
        return $this->itemReceived23;
    }

    public function setItemReceived23(?Item $itemReceived23): self
    {
        $this->itemReceived23 = $itemReceived23;

        return $this;
    }

    public function getItemReceived22(): ?Item
    {
        return $this->itemReceived22;
    }

    public function setItemReceived22(?Item $itemReceived22): self
    {
        $this->itemReceived22 = $itemReceived22;

        return $this;
    }

    public function getItemReceived21(): ?Item
    {
        return $this->itemReceived21;
    }

    public function setItemReceived21(?Item $itemReceived21): self
    {
        $this->itemReceived21 = $itemReceived21;

        return $this;
    }

    public function getItemReceived20(): ?Item
    {
        return $this->itemReceived20;
    }

    public function setItemReceived20(?Item $itemReceived20): self
    {
        $this->itemReceived20 = $itemReceived20;

        return $this;
    }

    public function getItemReceived19(): ?Item
    {
        return $this->itemReceived19;
    }

    public function setItemReceived19(?Item $itemReceived19): self
    {
        $this->itemReceived19 = $itemReceived19;

        return $this;
    }

    public function getItemReceived18(): ?Item
    {
        return $this->itemReceived18;
    }

    public function setItemReceived18(?Item $itemReceived18): self
    {
        $this->itemReceived18 = $itemReceived18;

        return $this;
    }

    public function getItemReceived17(): ?Item
    {
        return $this->itemReceived17;
    }

    public function setItemReceived17(?Item $itemReceived17): self
    {
        $this->itemReceived17 = $itemReceived17;

        return $this;
    }

    public function getItemReceived16(): ?Item
    {
        return $this->itemReceived16;
    }

    public function setItemReceived16(?Item $itemReceived16): self
    {
        $this->itemReceived16 = $itemReceived16;

        return $this;
    }

    public function getItemReceived15(): ?Item
    {
        return $this->itemReceived15;
    }

    public function setItemReceived15(?Item $itemReceived15): self
    {
        $this->itemReceived15 = $itemReceived15;

        return $this;
    }

    public function getItemReceived14(): ?Item
    {
        return $this->itemReceived14;
    }

    public function setItemReceived14(?Item $itemReceived14): self
    {
        $this->itemReceived14 = $itemReceived14;

        return $this;
    }

    public function getItemReceived13(): ?Item
    {
        return $this->itemReceived13;
    }

    public function setItemReceived13(?Item $itemReceived13): self
    {
        $this->itemReceived13 = $itemReceived13;

        return $this;
    }

    public function getItemReceived12(): ?Item
    {
        return $this->itemReceived12;
    }

    public function setItemReceived12(?Item $itemReceived12): self
    {
        $this->itemReceived12 = $itemReceived12;

        return $this;
    }

    public function getItemReceived11(): ?Item
    {
        return $this->itemReceived11;
    }

    public function setItemReceived11(?Item $itemReceived11): self
    {
        $this->itemReceived11 = $itemReceived11;

        return $this;
    }

    public function getItemReceived10(): ?Item
    {
        return $this->itemReceived10;
    }

    public function setItemReceived10(?Item $itemReceived10): self
    {
        $this->itemReceived10 = $itemReceived10;

        return $this;
    }

    public function getItemReceived9(): ?Item
    {
        return $this->itemReceived9;
    }

    public function setItemReceived9(?Item $itemReceived9): self
    {
        $this->itemReceived9 = $itemReceived9;

        return $this;
    }

    public function getItemReceived8(): ?Item
    {
        return $this->itemReceived8;
    }

    public function setItemReceived8(?Item $itemReceived8): self
    {
        $this->itemReceived8 = $itemReceived8;

        return $this;
    }

    public function getItemReceived7(): ?Item
    {
        return $this->itemReceived7;
    }

    public function setItemReceived7(?Item $itemReceived7): self
    {
        $this->itemReceived7 = $itemReceived7;

        return $this;
    }

    public function getItemReceived6(): ?Item
    {
        return $this->itemReceived6;
    }

    public function setItemReceived6(?Item $itemReceived6): self
    {
        $this->itemReceived6 = $itemReceived6;

        return $this;
    }

    public function getItemReceived5(): ?Item
    {
        return $this->itemReceived5;
    }

    public function setItemReceived5(?Item $itemReceived5): self
    {
        $this->itemReceived5 = $itemReceived5;

        return $this;
    }

    public function getItemReceived4(): ?Item
    {
        return $this->itemReceived4;
    }

    public function setItemReceived4(?Item $itemReceived4): self
    {
        $this->itemReceived4 = $itemReceived4;

        return $this;
    }

    public function getItemReceived3(): ?Item
    {
        return $this->itemReceived3;
    }

    public function setItemReceived3(?Item $itemReceived3): self
    {
        $this->itemReceived3 = $itemReceived3;

        return $this;
    }

    public function getItemReceived2(): ?Item
    {
        return $this->itemReceived2;
    }

    public function setItemReceived2(?Item $itemReceived2): self
    {
        $this->itemReceived2 = $itemReceived2;

        return $this;
    }

    public function getItemReceived1(): ?Item
    {
        return $this->itemReceived1;
    }

    public function setItemReceived1(?Item $itemReceived1): self
    {
        $this->itemReceived1 = $itemReceived1;

        return $this;
    }

    public function getItemReceived0(): ?Item
    {
        return $this->itemReceived0;
    }

    public function setItemReceived0(?Item $itemReceived0): self
    {
        $this->itemReceived0 = $itemReceived0;

        return $this;
    }

    public function getFishParameter78(): ?FishParameter
    {
        return $this->fishParameter78;
    }

    public function setFishParameter78(?FishParameter $fishParameter78): self
    {
        $this->fishParameter78 = $fishParameter78;

        return $this;
    }

    public function getFishParameter77(): ?FishParameter
    {
        return $this->fishParameter77;
    }

    public function setFishParameter77(?FishParameter $fishParameter77): self
    {
        $this->fishParameter77 = $fishParameter77;

        return $this;
    }

    public function getFishParameter76(): ?FishParameter
    {
        return $this->fishParameter76;
    }

    public function setFishParameter76(?FishParameter $fishParameter76): self
    {
        $this->fishParameter76 = $fishParameter76;

        return $this;
    }

    public function getFishParameter75(): ?FishParameter
    {
        return $this->fishParameter75;
    }

    public function setFishParameter75(?FishParameter $fishParameter75): self
    {
        $this->fishParameter75 = $fishParameter75;

        return $this;
    }

    public function getFishParameter74(): ?FishParameter
    {
        return $this->fishParameter74;
    }

    public function setFishParameter74(?FishParameter $fishParameter74): self
    {
        $this->fishParameter74 = $fishParameter74;

        return $this;
    }

    public function getFishParameter73(): ?FishParameter
    {
        return $this->fishParameter73;
    }

    public function setFishParameter73(?FishParameter $fishParameter73): self
    {
        $this->fishParameter73 = $fishParameter73;

        return $this;
    }

    public function getFishParameter72(): ?FishParameter
    {
        return $this->fishParameter72;
    }

    public function setFishParameter72(?FishParameter $fishParameter72): self
    {
        $this->fishParameter72 = $fishParameter72;

        return $this;
    }

    public function getFishParameter71(): ?FishParameter
    {
        return $this->fishParameter71;
    }

    public function setFishParameter71(?FishParameter $fishParameter71): self
    {
        $this->fishParameter71 = $fishParameter71;

        return $this;
    }

    public function getFishParameter70(): ?FishParameter
    {
        return $this->fishParameter70;
    }

    public function setFishParameter70(?FishParameter $fishParameter70): self
    {
        $this->fishParameter70 = $fishParameter70;

        return $this;
    }

    public function getFishParameter69(): ?FishParameter
    {
        return $this->fishParameter69;
    }

    public function setFishParameter69(?FishParameter $fishParameter69): self
    {
        $this->fishParameter69 = $fishParameter69;

        return $this;
    }

    public function getFishParameter68(): ?FishParameter
    {
        return $this->fishParameter68;
    }

    public function setFishParameter68(?FishParameter $fishParameter68): self
    {
        $this->fishParameter68 = $fishParameter68;

        return $this;
    }

    public function getFishParameter67(): ?FishParameter
    {
        return $this->fishParameter67;
    }

    public function setFishParameter67(?FishParameter $fishParameter67): self
    {
        $this->fishParameter67 = $fishParameter67;

        return $this;
    }

    public function getFishParameter66(): ?FishParameter
    {
        return $this->fishParameter66;
    }

    public function setFishParameter66(?FishParameter $fishParameter66): self
    {
        $this->fishParameter66 = $fishParameter66;

        return $this;
    }

    public function getFishParameter65(): ?FishParameter
    {
        return $this->fishParameter65;
    }

    public function setFishParameter65(?FishParameter $fishParameter65): self
    {
        $this->fishParameter65 = $fishParameter65;

        return $this;
    }

    public function getFishParameter64(): ?FishParameter
    {
        return $this->fishParameter64;
    }

    public function setFishParameter64(?FishParameter $fishParameter64): self
    {
        $this->fishParameter64 = $fishParameter64;

        return $this;
    }

    public function getFishParameter63(): ?FishParameter
    {
        return $this->fishParameter63;
    }

    public function setFishParameter63(?FishParameter $fishParameter63): self
    {
        $this->fishParameter63 = $fishParameter63;

        return $this;
    }

    public function getFishParameter62(): ?FishParameter
    {
        return $this->fishParameter62;
    }

    public function setFishParameter62(?FishParameter $fishParameter62): self
    {
        $this->fishParameter62 = $fishParameter62;

        return $this;
    }

    public function getFishParameter61(): ?FishParameter
    {
        return $this->fishParameter61;
    }

    public function setFishParameter61(?FishParameter $fishParameter61): self
    {
        $this->fishParameter61 = $fishParameter61;

        return $this;
    }

    public function getFishParameter60(): ?FishParameter
    {
        return $this->fishParameter60;
    }

    public function setFishParameter60(?FishParameter $fishParameter60): self
    {
        $this->fishParameter60 = $fishParameter60;

        return $this;
    }

    public function getFishParameter59(): ?FishParameter
    {
        return $this->fishParameter59;
    }

    public function setFishParameter59(?FishParameter $fishParameter59): self
    {
        $this->fishParameter59 = $fishParameter59;

        return $this;
    }

    public function getFishParameter58(): ?FishParameter
    {
        return $this->fishParameter58;
    }

    public function setFishParameter58(?FishParameter $fishParameter58): self
    {
        $this->fishParameter58 = $fishParameter58;

        return $this;
    }

    public function getFishParameter57(): ?FishParameter
    {
        return $this->fishParameter57;
    }

    public function setFishParameter57(?FishParameter $fishParameter57): self
    {
        $this->fishParameter57 = $fishParameter57;

        return $this;
    }

    public function getFishParameter56(): ?FishParameter
    {
        return $this->fishParameter56;
    }

    public function setFishParameter56(?FishParameter $fishParameter56): self
    {
        $this->fishParameter56 = $fishParameter56;

        return $this;
    }

    public function getFishParameter55(): ?FishParameter
    {
        return $this->fishParameter55;
    }

    public function setFishParameter55(?FishParameter $fishParameter55): self
    {
        $this->fishParameter55 = $fishParameter55;

        return $this;
    }

    public function getFishParameter54(): ?FishParameter
    {
        return $this->fishParameter54;
    }

    public function setFishParameter54(?FishParameter $fishParameter54): self
    {
        $this->fishParameter54 = $fishParameter54;

        return $this;
    }

    public function getFishParameter53(): ?FishParameter
    {
        return $this->fishParameter53;
    }

    public function setFishParameter53(?FishParameter $fishParameter53): self
    {
        $this->fishParameter53 = $fishParameter53;

        return $this;
    }

    public function getFishParameter52(): ?FishParameter
    {
        return $this->fishParameter52;
    }

    public function setFishParameter52(?FishParameter $fishParameter52): self
    {
        $this->fishParameter52 = $fishParameter52;

        return $this;
    }

    public function getFishParameter51(): ?FishParameter
    {
        return $this->fishParameter51;
    }

    public function setFishParameter51(?FishParameter $fishParameter51): self
    {
        $this->fishParameter51 = $fishParameter51;

        return $this;
    }

    public function getFishParameter50(): ?FishParameter
    {
        return $this->fishParameter50;
    }

    public function setFishParameter50(?FishParameter $fishParameter50): self
    {
        $this->fishParameter50 = $fishParameter50;

        return $this;
    }

    public function getFishParameter49(): ?FishParameter
    {
        return $this->fishParameter49;
    }

    public function setFishParameter49(?FishParameter $fishParameter49): self
    {
        $this->fishParameter49 = $fishParameter49;

        return $this;
    }

    public function getFishParameter48(): ?FishParameter
    {
        return $this->fishParameter48;
    }

    public function setFishParameter48(?FishParameter $fishParameter48): self
    {
        $this->fishParameter48 = $fishParameter48;

        return $this;
    }

    public function getFishParameter47(): ?FishParameter
    {
        return $this->fishParameter47;
    }

    public function setFishParameter47(?FishParameter $fishParameter47): self
    {
        $this->fishParameter47 = $fishParameter47;

        return $this;
    }

    public function getFishParameter46(): ?FishParameter
    {
        return $this->fishParameter46;
    }

    public function setFishParameter46(?FishParameter $fishParameter46): self
    {
        $this->fishParameter46 = $fishParameter46;

        return $this;
    }

    public function getFishParameter45(): ?FishParameter
    {
        return $this->fishParameter45;
    }

    public function setFishParameter45(?FishParameter $fishParameter45): self
    {
        $this->fishParameter45 = $fishParameter45;

        return $this;
    }

    public function getFishParameter44(): ?FishParameter
    {
        return $this->fishParameter44;
    }

    public function setFishParameter44(?FishParameter $fishParameter44): self
    {
        $this->fishParameter44 = $fishParameter44;

        return $this;
    }

    public function getFishParameter43(): ?FishParameter
    {
        return $this->fishParameter43;
    }

    public function setFishParameter43(?FishParameter $fishParameter43): self
    {
        $this->fishParameter43 = $fishParameter43;

        return $this;
    }

    public function getFishParameter42(): ?FishParameter
    {
        return $this->fishParameter42;
    }

    public function setFishParameter42(?FishParameter $fishParameter42): self
    {
        $this->fishParameter42 = $fishParameter42;

        return $this;
    }

    public function getFishParameter41(): ?FishParameter
    {
        return $this->fishParameter41;
    }

    public function setFishParameter41(?FishParameter $fishParameter41): self
    {
        $this->fishParameter41 = $fishParameter41;

        return $this;
    }

    public function getFishParameter40(): ?FishParameter
    {
        return $this->fishParameter40;
    }

    public function setFishParameter40(?FishParameter $fishParameter40): self
    {
        $this->fishParameter40 = $fishParameter40;

        return $this;
    }

    public function getFishParameter39(): ?FishParameter
    {
        return $this->fishParameter39;
    }

    public function setFishParameter39(?FishParameter $fishParameter39): self
    {
        $this->fishParameter39 = $fishParameter39;

        return $this;
    }

    public function getFishParameter38(): ?FishParameter
    {
        return $this->fishParameter38;
    }

    public function setFishParameter38(?FishParameter $fishParameter38): self
    {
        $this->fishParameter38 = $fishParameter38;

        return $this;
    }

    public function getFishParameter37(): ?FishParameter
    {
        return $this->fishParameter37;
    }

    public function setFishParameter37(?FishParameter $fishParameter37): self
    {
        $this->fishParameter37 = $fishParameter37;

        return $this;
    }

    public function getFishParameter36(): ?FishParameter
    {
        return $this->fishParameter36;
    }

    public function setFishParameter36(?FishParameter $fishParameter36): self
    {
        $this->fishParameter36 = $fishParameter36;

        return $this;
    }

    public function getFishParameter35(): ?FishParameter
    {
        return $this->fishParameter35;
    }

    public function setFishParameter35(?FishParameter $fishParameter35): self
    {
        $this->fishParameter35 = $fishParameter35;

        return $this;
    }

    public function getFishParameter34(): ?FishParameter
    {
        return $this->fishParameter34;
    }

    public function setFishParameter34(?FishParameter $fishParameter34): self
    {
        $this->fishParameter34 = $fishParameter34;

        return $this;
    }

    public function getFishParameter33(): ?FishParameter
    {
        return $this->fishParameter33;
    }

    public function setFishParameter33(?FishParameter $fishParameter33): self
    {
        $this->fishParameter33 = $fishParameter33;

        return $this;
    }

    public function getFishParameter32(): ?FishParameter
    {
        return $this->fishParameter32;
    }

    public function setFishParameter32(?FishParameter $fishParameter32): self
    {
        $this->fishParameter32 = $fishParameter32;

        return $this;
    }

    public function getFishParameter31(): ?FishParameter
    {
        return $this->fishParameter31;
    }

    public function setFishParameter31(?FishParameter $fishParameter31): self
    {
        $this->fishParameter31 = $fishParameter31;

        return $this;
    }

    public function getFishParameter30(): ?FishParameter
    {
        return $this->fishParameter30;
    }

    public function setFishParameter30(?FishParameter $fishParameter30): self
    {
        $this->fishParameter30 = $fishParameter30;

        return $this;
    }

    public function getFishParameter29(): ?FishParameter
    {
        return $this->fishParameter29;
    }

    public function setFishParameter29(?FishParameter $fishParameter29): self
    {
        $this->fishParameter29 = $fishParameter29;

        return $this;
    }

    public function getFishParameter28(): ?FishParameter
    {
        return $this->fishParameter28;
    }

    public function setFishParameter28(?FishParameter $fishParameter28): self
    {
        $this->fishParameter28 = $fishParameter28;

        return $this;
    }

    public function getFishParameter27(): ?FishParameter
    {
        return $this->fishParameter27;
    }

    public function setFishParameter27(?FishParameter $fishParameter27): self
    {
        $this->fishParameter27 = $fishParameter27;

        return $this;
    }

    public function getFishParameter26(): ?FishParameter
    {
        return $this->fishParameter26;
    }

    public function setFishParameter26(?FishParameter $fishParameter26): self
    {
        $this->fishParameter26 = $fishParameter26;

        return $this;
    }

    public function getFishParameter25(): ?FishParameter
    {
        return $this->fishParameter25;
    }

    public function setFishParameter25(?FishParameter $fishParameter25): self
    {
        $this->fishParameter25 = $fishParameter25;

        return $this;
    }

    public function getFishParameter24(): ?FishParameter
    {
        return $this->fishParameter24;
    }

    public function setFishParameter24(?FishParameter $fishParameter24): self
    {
        $this->fishParameter24 = $fishParameter24;

        return $this;
    }

    public function getFishParameter23(): ?FishParameter
    {
        return $this->fishParameter23;
    }

    public function setFishParameter23(?FishParameter $fishParameter23): self
    {
        $this->fishParameter23 = $fishParameter23;

        return $this;
    }

    public function getFishParameter22(): ?FishParameter
    {
        return $this->fishParameter22;
    }

    public function setFishParameter22(?FishParameter $fishParameter22): self
    {
        $this->fishParameter22 = $fishParameter22;

        return $this;
    }

    public function getFishParameter21(): ?FishParameter
    {
        return $this->fishParameter21;
    }

    public function setFishParameter21(?FishParameter $fishParameter21): self
    {
        $this->fishParameter21 = $fishParameter21;

        return $this;
    }

    public function getFishParameter20(): ?FishParameter
    {
        return $this->fishParameter20;
    }

    public function setFishParameter20(?FishParameter $fishParameter20): self
    {
        $this->fishParameter20 = $fishParameter20;

        return $this;
    }

    public function getFishParameter19(): ?FishParameter
    {
        return $this->fishParameter19;
    }

    public function setFishParameter19(?FishParameter $fishParameter19): self
    {
        $this->fishParameter19 = $fishParameter19;

        return $this;
    }

    public function getFishParameter18(): ?FishParameter
    {
        return $this->fishParameter18;
    }

    public function setFishParameter18(?FishParameter $fishParameter18): self
    {
        $this->fishParameter18 = $fishParameter18;

        return $this;
    }

    public function getFishParameter17(): ?FishParameter
    {
        return $this->fishParameter17;
    }

    public function setFishParameter17(?FishParameter $fishParameter17): self
    {
        $this->fishParameter17 = $fishParameter17;

        return $this;
    }

    public function getFishParameter16(): ?FishParameter
    {
        return $this->fishParameter16;
    }

    public function setFishParameter16(?FishParameter $fishParameter16): self
    {
        $this->fishParameter16 = $fishParameter16;

        return $this;
    }

    public function getFishParameter15(): ?FishParameter
    {
        return $this->fishParameter15;
    }

    public function setFishParameter15(?FishParameter $fishParameter15): self
    {
        $this->fishParameter15 = $fishParameter15;

        return $this;
    }

    public function getFishParameter14(): ?FishParameter
    {
        return $this->fishParameter14;
    }

    public function setFishParameter14(?FishParameter $fishParameter14): self
    {
        $this->fishParameter14 = $fishParameter14;

        return $this;
    }

    public function getFishParameter13(): ?FishParameter
    {
        return $this->fishParameter13;
    }

    public function setFishParameter13(?FishParameter $fishParameter13): self
    {
        $this->fishParameter13 = $fishParameter13;

        return $this;
    }

    public function getFishParameter12(): ?FishParameter
    {
        return $this->fishParameter12;
    }

    public function setFishParameter12(?FishParameter $fishParameter12): self
    {
        $this->fishParameter12 = $fishParameter12;

        return $this;
    }

    public function getFishParameter11(): ?FishParameter
    {
        return $this->fishParameter11;
    }

    public function setFishParameter11(?FishParameter $fishParameter11): self
    {
        $this->fishParameter11 = $fishParameter11;

        return $this;
    }

    public function getFishParameter10(): ?FishParameter
    {
        return $this->fishParameter10;
    }

    public function setFishParameter10(?FishParameter $fishParameter10): self
    {
        $this->fishParameter10 = $fishParameter10;

        return $this;
    }

    public function getFishParameter9(): ?FishParameter
    {
        return $this->fishParameter9;
    }

    public function setFishParameter9(?FishParameter $fishParameter9): self
    {
        $this->fishParameter9 = $fishParameter9;

        return $this;
    }

    public function getFishParameter8(): ?FishParameter
    {
        return $this->fishParameter8;
    }

    public function setFishParameter8(?FishParameter $fishParameter8): self
    {
        $this->fishParameter8 = $fishParameter8;

        return $this;
    }

    public function getFishParameter7(): ?FishParameter
    {
        return $this->fishParameter7;
    }

    public function setFishParameter7(?FishParameter $fishParameter7): self
    {
        $this->fishParameter7 = $fishParameter7;

        return $this;
    }

    public function getFishParameter6(): ?FishParameter
    {
        return $this->fishParameter6;
    }

    public function setFishParameter6(?FishParameter $fishParameter6): self
    {
        $this->fishParameter6 = $fishParameter6;

        return $this;
    }

    public function getFishParameter5(): ?FishParameter
    {
        return $this->fishParameter5;
    }

    public function setFishParameter5(?FishParameter $fishParameter5): self
    {
        $this->fishParameter5 = $fishParameter5;

        return $this;
    }

    public function getFishParameter4(): ?FishParameter
    {
        return $this->fishParameter4;
    }

    public function setFishParameter4(?FishParameter $fishParameter4): self
    {
        $this->fishParameter4 = $fishParameter4;

        return $this;
    }

    public function getFishParameter3(): ?FishParameter
    {
        return $this->fishParameter3;
    }

    public function setFishParameter3(?FishParameter $fishParameter3): self
    {
        $this->fishParameter3 = $fishParameter3;

        return $this;
    }

    public function getFishParameter2(): ?FishParameter
    {
        return $this->fishParameter2;
    }

    public function setFishParameter2(?FishParameter $fishParameter2): self
    {
        $this->fishParameter2 = $fishParameter2;

        return $this;
    }

    public function getFishParameter1(): ?FishParameter
    {
        return $this->fishParameter1;
    }

    public function setFishParameter1(?FishParameter $fishParameter1): self
    {
        $this->fishParameter1 = $fishParameter1;

        return $this;
    }

    public function getFishParameter0(): ?FishParameter
    {
        return $this->fishParameter0;
    }

    public function setFishParameter0(?FishParameter $fishParameter0): self
    {
        $this->fishParameter0 = $fishParameter0;

        return $this;
    }

    public function getItemRequired78(): ?GatheringItem
    {
        return $this->itemRequired78;
    }

    public function setItemRequired78(?GatheringItem $itemRequired78): self
    {
        $this->itemRequired78 = $itemRequired78;

        return $this;
    }

    public function getItemRequired77(): ?GatheringItem
    {
        return $this->itemRequired77;
    }

    public function setItemRequired77(?GatheringItem $itemRequired77): self
    {
        $this->itemRequired77 = $itemRequired77;

        return $this;
    }

    public function getItemRequired76(): ?GatheringItem
    {
        return $this->itemRequired76;
    }

    public function setItemRequired76(?GatheringItem $itemRequired76): self
    {
        $this->itemRequired76 = $itemRequired76;

        return $this;
    }

    public function getItemRequired75(): ?GatheringItem
    {
        return $this->itemRequired75;
    }

    public function setItemRequired75(?GatheringItem $itemRequired75): self
    {
        $this->itemRequired75 = $itemRequired75;

        return $this;
    }

    public function getItemRequired74(): ?GatheringItem
    {
        return $this->itemRequired74;
    }

    public function setItemRequired74(?GatheringItem $itemRequired74): self
    {
        $this->itemRequired74 = $itemRequired74;

        return $this;
    }

    public function getItemRequired73(): ?GatheringItem
    {
        return $this->itemRequired73;
    }

    public function setItemRequired73(?GatheringItem $itemRequired73): self
    {
        $this->itemRequired73 = $itemRequired73;

        return $this;
    }

    public function getItemRequired72(): ?GatheringItem
    {
        return $this->itemRequired72;
    }

    public function setItemRequired72(?GatheringItem $itemRequired72): self
    {
        $this->itemRequired72 = $itemRequired72;

        return $this;
    }

    public function getItemRequired71(): ?GatheringItem
    {
        return $this->itemRequired71;
    }

    public function setItemRequired71(?GatheringItem $itemRequired71): self
    {
        $this->itemRequired71 = $itemRequired71;

        return $this;
    }

    public function getItemRequired70(): ?GatheringItem
    {
        return $this->itemRequired70;
    }

    public function setItemRequired70(?GatheringItem $itemRequired70): self
    {
        $this->itemRequired70 = $itemRequired70;

        return $this;
    }

    public function getItemRequired69(): ?GatheringItem
    {
        return $this->itemRequired69;
    }

    public function setItemRequired69(?GatheringItem $itemRequired69): self
    {
        $this->itemRequired69 = $itemRequired69;

        return $this;
    }

    public function getItemRequired68(): ?GatheringItem
    {
        return $this->itemRequired68;
    }

    public function setItemRequired68(?GatheringItem $itemRequired68): self
    {
        $this->itemRequired68 = $itemRequired68;

        return $this;
    }

    public function getItemRequired67(): ?GatheringItem
    {
        return $this->itemRequired67;
    }

    public function setItemRequired67(?GatheringItem $itemRequired67): self
    {
        $this->itemRequired67 = $itemRequired67;

        return $this;
    }

    public function getItemRequired66(): ?GatheringItem
    {
        return $this->itemRequired66;
    }

    public function setItemRequired66(?GatheringItem $itemRequired66): self
    {
        $this->itemRequired66 = $itemRequired66;

        return $this;
    }

    public function getItemRequired65(): ?GatheringItem
    {
        return $this->itemRequired65;
    }

    public function setItemRequired65(?GatheringItem $itemRequired65): self
    {
        $this->itemRequired65 = $itemRequired65;

        return $this;
    }

    public function getItemRequired64(): ?GatheringItem
    {
        return $this->itemRequired64;
    }

    public function setItemRequired64(?GatheringItem $itemRequired64): self
    {
        $this->itemRequired64 = $itemRequired64;

        return $this;
    }

    public function getItemRequired63(): ?GatheringItem
    {
        return $this->itemRequired63;
    }

    public function setItemRequired63(?GatheringItem $itemRequired63): self
    {
        $this->itemRequired63 = $itemRequired63;

        return $this;
    }

    public function getItemRequired62(): ?GatheringItem
    {
        return $this->itemRequired62;
    }

    public function setItemRequired62(?GatheringItem $itemRequired62): self
    {
        $this->itemRequired62 = $itemRequired62;

        return $this;
    }

    public function getItemRequired61(): ?GatheringItem
    {
        return $this->itemRequired61;
    }

    public function setItemRequired61(?GatheringItem $itemRequired61): self
    {
        $this->itemRequired61 = $itemRequired61;

        return $this;
    }

    public function getItemRequired60(): ?GatheringItem
    {
        return $this->itemRequired60;
    }

    public function setItemRequired60(?GatheringItem $itemRequired60): self
    {
        $this->itemRequired60 = $itemRequired60;

        return $this;
    }

    public function getItemRequired59(): ?GatheringItem
    {
        return $this->itemRequired59;
    }

    public function setItemRequired59(?GatheringItem $itemRequired59): self
    {
        $this->itemRequired59 = $itemRequired59;

        return $this;
    }

    public function getItemRequired58(): ?GatheringItem
    {
        return $this->itemRequired58;
    }

    public function setItemRequired58(?GatheringItem $itemRequired58): self
    {
        $this->itemRequired58 = $itemRequired58;

        return $this;
    }

    public function getItemRequired57(): ?GatheringItem
    {
        return $this->itemRequired57;
    }

    public function setItemRequired57(?GatheringItem $itemRequired57): self
    {
        $this->itemRequired57 = $itemRequired57;

        return $this;
    }

    public function getItemRequired56(): ?GatheringItem
    {
        return $this->itemRequired56;
    }

    public function setItemRequired56(?GatheringItem $itemRequired56): self
    {
        $this->itemRequired56 = $itemRequired56;

        return $this;
    }

    public function getItemRequired55(): ?GatheringItem
    {
        return $this->itemRequired55;
    }

    public function setItemRequired55(?GatheringItem $itemRequired55): self
    {
        $this->itemRequired55 = $itemRequired55;

        return $this;
    }

    public function getItemRequired54(): ?GatheringItem
    {
        return $this->itemRequired54;
    }

    public function setItemRequired54(?GatheringItem $itemRequired54): self
    {
        $this->itemRequired54 = $itemRequired54;

        return $this;
    }

    public function getItemRequired53(): ?GatheringItem
    {
        return $this->itemRequired53;
    }

    public function setItemRequired53(?GatheringItem $itemRequired53): self
    {
        $this->itemRequired53 = $itemRequired53;

        return $this;
    }

    public function getItemRequired52(): ?GatheringItem
    {
        return $this->itemRequired52;
    }

    public function setItemRequired52(?GatheringItem $itemRequired52): self
    {
        $this->itemRequired52 = $itemRequired52;

        return $this;
    }

    public function getItemRequired51(): ?GatheringItem
    {
        return $this->itemRequired51;
    }

    public function setItemRequired51(?GatheringItem $itemRequired51): self
    {
        $this->itemRequired51 = $itemRequired51;

        return $this;
    }

    public function getItemRequired50(): ?GatheringItem
    {
        return $this->itemRequired50;
    }

    public function setItemRequired50(?GatheringItem $itemRequired50): self
    {
        $this->itemRequired50 = $itemRequired50;

        return $this;
    }

    public function getItemRequired49(): ?GatheringItem
    {
        return $this->itemRequired49;
    }

    public function setItemRequired49(?GatheringItem $itemRequired49): self
    {
        $this->itemRequired49 = $itemRequired49;

        return $this;
    }

    public function getItemRequired48(): ?GatheringItem
    {
        return $this->itemRequired48;
    }

    public function setItemRequired48(?GatheringItem $itemRequired48): self
    {
        $this->itemRequired48 = $itemRequired48;

        return $this;
    }

    public function getItemRequired47(): ?GatheringItem
    {
        return $this->itemRequired47;
    }

    public function setItemRequired47(?GatheringItem $itemRequired47): self
    {
        $this->itemRequired47 = $itemRequired47;

        return $this;
    }

    public function getItemRequired46(): ?GatheringItem
    {
        return $this->itemRequired46;
    }

    public function setItemRequired46(?GatheringItem $itemRequired46): self
    {
        $this->itemRequired46 = $itemRequired46;

        return $this;
    }

    public function getItemRequired45(): ?GatheringItem
    {
        return $this->itemRequired45;
    }

    public function setItemRequired45(?GatheringItem $itemRequired45): self
    {
        $this->itemRequired45 = $itemRequired45;

        return $this;
    }

    public function getItemRequired44(): ?GatheringItem
    {
        return $this->itemRequired44;
    }

    public function setItemRequired44(?GatheringItem $itemRequired44): self
    {
        $this->itemRequired44 = $itemRequired44;

        return $this;
    }

    public function getItemRequired43(): ?GatheringItem
    {
        return $this->itemRequired43;
    }

    public function setItemRequired43(?GatheringItem $itemRequired43): self
    {
        $this->itemRequired43 = $itemRequired43;

        return $this;
    }

    public function getItemRequired42(): ?GatheringItem
    {
        return $this->itemRequired42;
    }

    public function setItemRequired42(?GatheringItem $itemRequired42): self
    {
        $this->itemRequired42 = $itemRequired42;

        return $this;
    }

    public function getItemRequired41(): ?GatheringItem
    {
        return $this->itemRequired41;
    }

    public function setItemRequired41(?GatheringItem $itemRequired41): self
    {
        $this->itemRequired41 = $itemRequired41;

        return $this;
    }

    public function getItemRequired40(): ?GatheringItem
    {
        return $this->itemRequired40;
    }

    public function setItemRequired40(?GatheringItem $itemRequired40): self
    {
        $this->itemRequired40 = $itemRequired40;

        return $this;
    }

    public function getItemRequired39(): ?GatheringItem
    {
        return $this->itemRequired39;
    }

    public function setItemRequired39(?GatheringItem $itemRequired39): self
    {
        $this->itemRequired39 = $itemRequired39;

        return $this;
    }

    public function getItemRequired38(): ?GatheringItem
    {
        return $this->itemRequired38;
    }

    public function setItemRequired38(?GatheringItem $itemRequired38): self
    {
        $this->itemRequired38 = $itemRequired38;

        return $this;
    }

    public function getItemRequired37(): ?GatheringItem
    {
        return $this->itemRequired37;
    }

    public function setItemRequired37(?GatheringItem $itemRequired37): self
    {
        $this->itemRequired37 = $itemRequired37;

        return $this;
    }

    public function getItemRequired36(): ?GatheringItem
    {
        return $this->itemRequired36;
    }

    public function setItemRequired36(?GatheringItem $itemRequired36): self
    {
        $this->itemRequired36 = $itemRequired36;

        return $this;
    }

    public function getItemRequired35(): ?GatheringItem
    {
        return $this->itemRequired35;
    }

    public function setItemRequired35(?GatheringItem $itemRequired35): self
    {
        $this->itemRequired35 = $itemRequired35;

        return $this;
    }

    public function getItemRequired34(): ?GatheringItem
    {
        return $this->itemRequired34;
    }

    public function setItemRequired34(?GatheringItem $itemRequired34): self
    {
        $this->itemRequired34 = $itemRequired34;

        return $this;
    }

    public function getItemRequired33(): ?GatheringItem
    {
        return $this->itemRequired33;
    }

    public function setItemRequired33(?GatheringItem $itemRequired33): self
    {
        $this->itemRequired33 = $itemRequired33;

        return $this;
    }

    public function getItemRequired32(): ?GatheringItem
    {
        return $this->itemRequired32;
    }

    public function setItemRequired32(?GatheringItem $itemRequired32): self
    {
        $this->itemRequired32 = $itemRequired32;

        return $this;
    }

    public function getItemRequired31(): ?GatheringItem
    {
        return $this->itemRequired31;
    }

    public function setItemRequired31(?GatheringItem $itemRequired31): self
    {
        $this->itemRequired31 = $itemRequired31;

        return $this;
    }

    public function getItemRequired30(): ?GatheringItem
    {
        return $this->itemRequired30;
    }

    public function setItemRequired30(?GatheringItem $itemRequired30): self
    {
        $this->itemRequired30 = $itemRequired30;

        return $this;
    }

    public function getItemRequired29(): ?GatheringItem
    {
        return $this->itemRequired29;
    }

    public function setItemRequired29(?GatheringItem $itemRequired29): self
    {
        $this->itemRequired29 = $itemRequired29;

        return $this;
    }

    public function getItemRequired28(): ?GatheringItem
    {
        return $this->itemRequired28;
    }

    public function setItemRequired28(?GatheringItem $itemRequired28): self
    {
        $this->itemRequired28 = $itemRequired28;

        return $this;
    }

    public function getItemRequired27(): ?GatheringItem
    {
        return $this->itemRequired27;
    }

    public function setItemRequired27(?GatheringItem $itemRequired27): self
    {
        $this->itemRequired27 = $itemRequired27;

        return $this;
    }

    public function getItemRequired26(): ?GatheringItem
    {
        return $this->itemRequired26;
    }

    public function setItemRequired26(?GatheringItem $itemRequired26): self
    {
        $this->itemRequired26 = $itemRequired26;

        return $this;
    }

    public function getItemRequired25(): ?GatheringItem
    {
        return $this->itemRequired25;
    }

    public function setItemRequired25(?GatheringItem $itemRequired25): self
    {
        $this->itemRequired25 = $itemRequired25;

        return $this;
    }

    public function getItemRequired24(): ?GatheringItem
    {
        return $this->itemRequired24;
    }

    public function setItemRequired24(?GatheringItem $itemRequired24): self
    {
        $this->itemRequired24 = $itemRequired24;

        return $this;
    }

    public function getItemRequired23(): ?GatheringItem
    {
        return $this->itemRequired23;
    }

    public function setItemRequired23(?GatheringItem $itemRequired23): self
    {
        $this->itemRequired23 = $itemRequired23;

        return $this;
    }

    public function getItemRequired22(): ?GatheringItem
    {
        return $this->itemRequired22;
    }

    public function setItemRequired22(?GatheringItem $itemRequired22): self
    {
        $this->itemRequired22 = $itemRequired22;

        return $this;
    }

    public function getItemRequired21(): ?GatheringItem
    {
        return $this->itemRequired21;
    }

    public function setItemRequired21(?GatheringItem $itemRequired21): self
    {
        $this->itemRequired21 = $itemRequired21;

        return $this;
    }

    public function getItemRequired20(): ?GatheringItem
    {
        return $this->itemRequired20;
    }

    public function setItemRequired20(?GatheringItem $itemRequired20): self
    {
        $this->itemRequired20 = $itemRequired20;

        return $this;
    }

    public function getItemRequired19(): ?GatheringItem
    {
        return $this->itemRequired19;
    }

    public function setItemRequired19(?GatheringItem $itemRequired19): self
    {
        $this->itemRequired19 = $itemRequired19;

        return $this;
    }

    public function getItemRequired18(): ?GatheringItem
    {
        return $this->itemRequired18;
    }

    public function setItemRequired18(?GatheringItem $itemRequired18): self
    {
        $this->itemRequired18 = $itemRequired18;

        return $this;
    }

    public function getItemRequired17(): ?GatheringItem
    {
        return $this->itemRequired17;
    }

    public function setItemRequired17(?GatheringItem $itemRequired17): self
    {
        $this->itemRequired17 = $itemRequired17;

        return $this;
    }

    public function getItemRequired16(): ?GatheringItem
    {
        return $this->itemRequired16;
    }

    public function setItemRequired16(?GatheringItem $itemRequired16): self
    {
        $this->itemRequired16 = $itemRequired16;

        return $this;
    }

    public function getItemRequired15(): ?GatheringItem
    {
        return $this->itemRequired15;
    }

    public function setItemRequired15(?GatheringItem $itemRequired15): self
    {
        $this->itemRequired15 = $itemRequired15;

        return $this;
    }

    public function getItemRequired14(): ?GatheringItem
    {
        return $this->itemRequired14;
    }

    public function setItemRequired14(?GatheringItem $itemRequired14): self
    {
        $this->itemRequired14 = $itemRequired14;

        return $this;
    }

    public function getItemRequired13(): ?GatheringItem
    {
        return $this->itemRequired13;
    }

    public function setItemRequired13(?GatheringItem $itemRequired13): self
    {
        $this->itemRequired13 = $itemRequired13;

        return $this;
    }

    public function getItemRequired12(): ?GatheringItem
    {
        return $this->itemRequired12;
    }

    public function setItemRequired12(?GatheringItem $itemRequired12): self
    {
        $this->itemRequired12 = $itemRequired12;

        return $this;
    }

    public function getItemRequired11(): ?GatheringItem
    {
        return $this->itemRequired11;
    }

    public function setItemRequired11(?GatheringItem $itemRequired11): self
    {
        $this->itemRequired11 = $itemRequired11;

        return $this;
    }

    public function getItemRequired10(): ?GatheringItem
    {
        return $this->itemRequired10;
    }

    public function setItemRequired10(?GatheringItem $itemRequired10): self
    {
        $this->itemRequired10 = $itemRequired10;

        return $this;
    }

    public function getItemRequired9(): ?GatheringItem
    {
        return $this->itemRequired9;
    }

    public function setItemRequired9(?GatheringItem $itemRequired9): self
    {
        $this->itemRequired9 = $itemRequired9;

        return $this;
    }

    public function getItemRequired8(): ?GatheringItem
    {
        return $this->itemRequired8;
    }

    public function setItemRequired8(?GatheringItem $itemRequired8): self
    {
        $this->itemRequired8 = $itemRequired8;

        return $this;
    }

    public function getItemRequired7(): ?GatheringItem
    {
        return $this->itemRequired7;
    }

    public function setItemRequired7(?GatheringItem $itemRequired7): self
    {
        $this->itemRequired7 = $itemRequired7;

        return $this;
    }

    public function getItemRequired6(): ?GatheringItem
    {
        return $this->itemRequired6;
    }

    public function setItemRequired6(?GatheringItem $itemRequired6): self
    {
        $this->itemRequired6 = $itemRequired6;

        return $this;
    }

    public function getItemRequired5(): ?GatheringItem
    {
        return $this->itemRequired5;
    }

    public function setItemRequired5(?GatheringItem $itemRequired5): self
    {
        $this->itemRequired5 = $itemRequired5;

        return $this;
    }

    public function getItemRequired4(): ?GatheringItem
    {
        return $this->itemRequired4;
    }

    public function setItemRequired4(?GatheringItem $itemRequired4): self
    {
        $this->itemRequired4 = $itemRequired4;

        return $this;
    }

    public function getItemRequired3(): ?GatheringItem
    {
        return $this->itemRequired3;
    }

    public function setItemRequired3(?GatheringItem $itemRequired3): self
    {
        $this->itemRequired3 = $itemRequired3;

        return $this;
    }

    public function getItemRequired2(): ?GatheringItem
    {
        return $this->itemRequired2;
    }

    public function setItemRequired2(?GatheringItem $itemRequired2): self
    {
        $this->itemRequired2 = $itemRequired2;

        return $this;
    }

    public function getItemRequired1(): ?GatheringItem
    {
        return $this->itemRequired1;
    }

    public function setItemRequired1(?GatheringItem $itemRequired1): self
    {
        $this->itemRequired1 = $itemRequired1;

        return $this;
    }

    public function getItemRequired0(): ?GatheringItem
    {
        return $this->itemRequired0;
    }

    public function setItemRequired0(?GatheringItem $itemRequired0): self
    {
        $this->itemRequired0 = $itemRequired0;

        return $this;
    }
}
