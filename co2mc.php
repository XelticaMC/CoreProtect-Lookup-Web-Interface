<?php
// CoreProtect uses legacy names. For CoreProtect 2.11+

// Fixed function:
class co2mc {
    function getMc($val) {
        if (array_key_exists($val,$this->conversion)) return $this->conversion[$val];
        return $val;
    }
    function getCo($val) {
        if ($ret = array_search($val,$this->conversion,true)) return $ret;
        return $val;
    }
    
    // List of items and block name correction
    private $conversion = [
    'minecraft:wood' => 'minecraft:planks',
    'minecraft:water' => 'minecraft:flowing_water',
    'minecraft:stationary_water' => 'minecraft:water',
    'minecraft:lava' => 'minecraft:flowing_lava',
    'minecraft:stationary_lava' => 'minecraft:lava',
    'minecraft:note_block' => 'minecraft:noteblock',
    'minecraft:bed_block' => 'minecraft:bed',
    'minecraft:piston_sticky_base' => 'minecraft:sticky_piston',
    'minecraft:piston_base' => 'minecraft:piston',
    'minecraft:piston_extension' => 'minecraft:piston_head',
    'minecraft:piston_moving_piece' => 'minecraft:piston_extension',
    'minecraft:red_rose' => 'minecraft:red_flower',
    'minecraft:double_step' => 'minecraft:double_stone_slab', //43
    'minecraft:step' => 'minecraft:stone_slab',
    'minecraft:wood_stairs' => 'minecraft:oak_stairs',
    'minecraft:crops' => 'minecraft:wheat',
    'minecraft:soil' => 'minecraft:farmland', //60
    'minecraft:burning_furnace' => 'minecraft:lit_furnace',
    'minecraft:sign_post' => 'minecraft:standing_sign',
    'minecraft:cobblestone_stairs' => 'minecraft:stone_stairs',
    'minecraft:stone_plate' => 'minecraft:stone_pressure_plate',
    'minecraft:iron_door_block' => 'minecraft:iron_door',
    'minecraft:wood_plate' => 'minecraft:wooden_pressure_plate',
    'minecraft:glowing_redstone_ore' => 'minecraft:lit_redstone_ore',
    'minecraft:redstone_torch_off' => 'minecraft:unlit_redstone_torch',
    'minecraft:redstone_torch_on' => 'minecraft:redstone_torch',
    'minecraft:snow' => 'minecraft:snow_layer',
    'minecraft:snow_block' => 'minecraft:snow',
    'minecraft:sugar_cane_block' => 'minecraft:reeds',
    'minecraft:jack_o_lantern' => 'minecraft:lit_pumpkin',
    'minecraft:cake_block' => 'minecraft:cake',
    'minecraft:diode_block_off' => 'minecraft:unpowered_repeater',
    'minecraft:diode_block_on' => 'minecraft:powered_repeater', //94
    'minecraft:trap_door' => 'minecraft:trapdoor',
    'minecraft:monster_eggs' => 'minecraft:monster_egg',
    'minecraft:smooth_brick' => 'minecraft:stonebrick',
    'minecraft:huge_mushroom_1' => 'minecraft:brown_mushroom_block',
    'minecraft:huge_mushroom_2' => 'minecraft:red_mushroom_block',
    'minecraft:iron_fence' => 'minecraft:iron_bars',
    'minecraft:thin_glass' => 'minecraft:glass_pane',
    'minecraft:smooth_stairs' => 'minecraft:stone_brick_stairs',
    'minecraft:mycel' => 'minecraft:mycelium',
    'minecraft:water_lily' => 'minecraft:waterlily',
    'minecraft:nether_fence' => 'minecraft:nether_brick_fence',
    'minecraft:nether_warts' => 'minecraft:nether_wart',
    'minecraft:enchantment_table' => 'minecraft:enchanting_table',
    'minecraft:ender_portal' => 'minecraft:end_portal',
    'minecraft:ender_portal_frame' => 'minecraft:end_portal_frame',
    'minecraft:ender_stone' => 'minecraft:end_stone', // 121
    'minecraft:redstone_lamp_off' => 'minecraft:redstone_lamp',
    'minecraft:redstone_lamp_on' => 'minecraft:lit_redstone_lamp',
    'minecraft:wood_double_step' => 'minecraft:double_wooden_slab',
    'minecraft:wood_step' => 'minecraft:wooden_slab',
    'minecraft:spruce_wood_stairs' => 'minecraft:spruce_stairs',
    'minecraft:birch_wood_stairs' => 'minecraft:birch_stairs',
    'minecraft:jungle_wood_stairs' => 'minecraft:jungle_stairs',
    'minecraft:command' => 'minecraft:command_block',
    'minecraft:cobble_wall' => 'minecraft:cobblestone_wall',
    'minecraft:carrot' => 'minecraft:carrots',
    'minecraft:potato' => 'minecraft:potatoes',
    'minecraft:wood_button' => 'minecraft:wooden_button',
    'minecraft:gold_plate' => 'minecraft:light_weighted_pressure_plate',
    'minecraft:iron_plate' => 'minecraft:heavy_weighted_pressure_plate',
    'minecraft:redstone_comparator_off' => 'minecraft:unpowered_comparator',
    'minecraft:redstone_comparator_on' => 'minecraft:powered_comparator',
    'minecraft:stained_clay' => 'minecraft:stained_hardened_clay',
    'minecraft:leaves_2' => 'minecraft:leaves2',
    'minecraft:log_2' => 'minecraft:log2',
    'minecraft:slime_block' => 'minecraft:slime',
    'minecraft:hard_clay' => 'minecraft:hardened_clay', //172
    // Begin item/entity-only items
    
    'minecraft:iron_spade' => 'minecraft:iron_shovel', //256
    'minecraft:wood_sword' => 'minecraft:wooden_sword',
    'minecraft:wood_spade' => 'minecraft:wooden_shovel',
    'minecraft:wood_pickaxe' => 'minecraft:wooden_pickaxe',
    'minecraft:wood_axe' => 'minecraft:wooden_axe',
    'minecraft:stone_spade' => 'minecraft:stone_shovel',
    'minecraft:diamond_spade' => 'minecraft:diamond_shovel',
    'minecraft:gold_sword' => 'minecraft:golden_sword',
    'minecraft:gold_spade' => 'minecraft:golden_shovel',
    'minecraft:gold_pickaxe' => 'minecraft:golden_pickaxe',
    'minecraft:gold_axe' => 'minecraft:golden_axe',
    'minecraft:sulphur' => 'minecraft:gunpowder',
    'minecraft:wood_hoe' => 'minecraft:wooden_hoe',
    'minecraft:gold_hoe' => 'minecraft:golden_hoe',
    'minecraft:seeds' => 'minecraft:wheat_seeds',
    'minecraft:gold_helmet' => 'minecraft:golden_helmet',
    'minecraft:gold_chestplate' => 'minecraft:golden_chestplate',
    'minecraft:gold_leggings' => 'minecraft:golden_leggings',
    'minecraft:gold_boots' => 'minecraft:golden_boots',
    'minecraft:pork' => 'minecraft:porkchop',
    'minecraft:grilled_pork' => 'minecraft:cooked_porkchop',
    'minecraft:wood_door' => 'minecraft:wooden_door',
    'minecraft:snow_ball' => 'minecraft:snowball',
    'minecraft:clay_brick' => 'minecraft:brick',
    'minecraft:sugar_cane' => 'minecraft:reeds',
    'minecraft:storage_minecart' => 'minecraft:chest_minecart',
    'minecraft:powered_minecart' => 'minecraft:furnace_minecart',
    'minecraft:watch' => 'minecraft:clock',
    'minecraft:raw_fish' => 'minecraft:fish',
    'minecraft:ink_sack' => 'minecraft:dye',
    'minecraft:diode' => 'minecraft:repeater',
    'minecraft:map' => 'minecraft:filled_map',
    'minecraft:raw_beef' => 'minecraft:beef',
    'minecraft:raw_chicken' => 'minecraft:chicken',
    'minecraft:nether_stalk' => 'minecraft:nether_wart',
    'minecraft:brewing_stand_item' => 'minecraft:brewing_stand',
    'minecraft:cauldron_item' => 'minecraft:cauldron',
    'minecraft:eye_of_ender' => 'minecraft:ender_eye',
    'minecraft:monster_egg' => 'minecraft:spawn_egg',
    'minecraft:exp_bottle' => 'minecraft:experience_bottle',
    'minecraft:fireball' => 'minecraft:fire_charge',
    'minecraft:book_and_quill' => 'minecraft:writable_book',
    'minecraft:flower_pot_item' => 'minecraft:flower_pot',
    'minecraft:carrot_item' => 'minecraft:carrot',
    'minecraft:potato_item' => 'minecraft:potato',
    'minecraft:empty_map' => 'minecraft:map',
    'minecraft:skull_item' => 'minecraft:skull',
    'minecraft:carrot_stick' => 'minecraft:carrot_on_a_stick',
    'minecraft:firework' => 'minecraft:fireworks',
    'minecraft:redstone_Comparator' => 'minecraft:comparator',
    'minecraft:nether_brick_item' => 'minecraft:netherbrick',
    'minecraft:explosive_minecart' => 'minecraft:tnt_minecart',
    'minecraft:iron_barding' => 'minecraft:iron_horse_armor',
    'minecraft:gold_barding' => 'minecraft:golden_horse_armor',
    'minecraft:diamond_barding' => 'minecraft:diamond_horse_armor',
    'minecraft:leash' => 'minecraft:lead',
    'minecraft:command_minecart' => 'minecraft:command_block_minecart',
    'minecraft:spruce_door_item' => 'minecraft:spruce_door',
    'minecraft:birch_door_item' => 'minecraft:birch_door',
    'minecraft:jungle_door_item' => 'minecraft:jungle_door',
    'minecraft:acacia_door_item' => 'minecraft:acacia_door',
    'minecraft:dark_oak_door_item' => 'minecraft:dark_oak_door',
    'minecraft:gold_record' => 'minecraft:record_13',
    'minecraft:green_record' => 'minecraft:record_cat',
    'minecraft:record_3' => 'minecraft:record_blocks',
    'minecraft:record_4' => 'minecraft:record_chirp',
    'minecraft:record_5' => 'minecraft:record_far',
    'minecraft:record_6' => 'minecraft:record_mall',
    'minecraft:record_7' => 'minecraft:record_mellohi',
    'minecraft:record_8' => 'minecraft:record_stal',
    'minecraft:record_9' => 'minecraft:record_strad',
    'minecraft:record_10' => 'minecraft:record_ward',
    'minecraft:record_12' => 'minecraft:record_wait',
    
    // End item correction list
    ];
}
class keepCo {
    function getMc($v) {
        return $v;
    }
    function getCo($v) {
        return $v;
    }
}
?>