<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[
            {
                "displayName": "Acacia Boat",
                "name": "acacia_boat",
                "id": 2,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Door",
                "name": "acacia_door",
                "id": 3,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Door Bottom",
                "name": "acacia_door_bottom",
                "id": 4,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Door Top",
                "name": "acacia_door_top",
                "id": 5,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Leaves",
                "name": "acacia_leaves",
                "id": 6,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Log",
                "name": "acacia_log",
                "id": 7,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Log Top",
                "name": "acacia_log_top",
                "id": 8,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Planks",
                "name": "acacia_planks",
                "id": 9,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Sapling",
                "name": "acacia_sapling",
                "id": 10,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Sign",
                "name": "acacia_sign",
                "id": 11,
                "stackSize": 64
            },
            {
                "displayName": "Acacia Trapdoor",
                "name": "acacia_trapdoor",
                "id": 12,
                "stackSize": 64
            },
            {
                "displayName": "Activator Rail",
                "name": "activator_rail",
                "id": 13,
                "stackSize": 64
            },
            {
                "displayName": "Activator Rail On",
                "name": "activator_rail_on",
                "id": 14,
                "stackSize": 64
            },
            {
                "displayName": "Allium",
                "name": "allium",
                "id": 15,
                "stackSize": 64
            },
            {
                "displayName": "Andesite",
                "name": "andesite",
                "id": 16,
                "stackSize": 64
            },
            {
                "displayName": "Anvil",
                "name": "anvil",
                "id": 17,
                "stackSize": 64
            },
            {
                "displayName": "Anvil Top",
                "name": "anvil_top",
                "id": 18,
                "stackSize": 64
            },
            {
                "displayName": "Apple",
                "name": "apple",
                "id": 19,
                "stackSize": 64
            },
            {
                "displayName": "Armor Stand",
                "name": "armor_stand",
                "id": 20,
                "stackSize": 64
            },
            {
                "displayName": "Arrow",
                "name": "arrow",
                "id": 21,
                "stackSize": 64
            },
            {
                "displayName": "Attached Melon Stem",
                "name": "attached_melon_stem",
                "id": 22,
                "stackSize": 64
            },
            {
                "displayName": "Attached Pumpkin Stem",
                "name": "attached_pumpkin_stem",
                "id": 23,
                "stackSize": 64
            },
            {
                "displayName": "Azure Bluet",
                "name": "azure_bluet",
                "id": 24,
                "stackSize": 64
            },
            {
                "displayName": "Baked Potato",
                "name": "baked_potato",
                "id": 25,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo",
                "name": "bamboo",
                "id": 26,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo Large Leaves",
                "name": "bamboo_large_leaves",
                "id": 27,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo Singleleaf",
                "name": "bamboo_singleleaf",
                "id": 28,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo Small Leaves",
                "name": "bamboo_small_leaves",
                "id": 29,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo Stage0",
                "name": "bamboo_stage0",
                "id": 30,
                "stackSize": 64
            },
            {
                "displayName": "Bamboo Stalk",
                "name": "bamboo_stalk",
                "id": 31,
                "stackSize": 64
            },
            {
                "displayName": "Barrel Bottom",
                "name": "barrel_bottom",
                "id": 32,
                "stackSize": 64
            },
            {
                "displayName": "Barrel Side",
                "name": "barrel_side",
                "id": 33,
                "stackSize": 64
            },
            {
                "displayName": "Barrel Top",
                "name": "barrel_top",
                "id": 34,
                "stackSize": 64
            },
            {
                "displayName": "Barrel Top Open",
                "name": "barrel_top_open",
                "id": 35,
                "stackSize": 64
            },
            {
                "displayName": "Barrier",
                "name": "barrier",
                "id": 36,
                "stackSize": 64
            },
            {
                "displayName": "Beacon",
                "name": "beacon",
                "id": 37,
                "stackSize": 64
            },
            {
                "displayName": "Bedrock",
                "name": "bedrock",
                "id": 38,
                "stackSize": 64
            },
            {
                "displayName": "Bee Nest Bottom",
                "name": "bee_nest_bottom",
                "id": 39,
                "stackSize": 64
            },
            {
                "displayName": "Bee Nest Front",
                "name": "bee_nest_front",
                "id": 40,
                "stackSize": 64
            },
            {
                "displayName": "Bee Nest Front Honey",
                "name": "bee_nest_front_honey",
                "id": 41,
                "stackSize": 64
            },
            {
                "displayName": "Bee Nest Side",
                "name": "bee_nest_side",
                "id": 42,
                "stackSize": 64
            },
            {
                "displayName": "Bee Nest Top",
                "name": "bee_nest_top",
                "id": 43,
                "stackSize": 64
            },
            {
                "displayName": "Beef",
                "name": "beef",
                "id": 44,
                "stackSize": 64
            },
            {
                "displayName": "Beehive End",
                "name": "beehive_end",
                "id": 45,
                "stackSize": 64
            },
            {
                "displayName": "Beehive Front",
                "name": "beehive_front",
                "id": 46,
                "stackSize": 64
            },
            {
                "displayName": "Beehive Front Honey",
                "name": "beehive_front_honey",
                "id": 47,
                "stackSize": 64
            },
            {
                "displayName": "Beehive Side",
                "name": "beehive_side",
                "id": 48,
                "stackSize": 64
            },
            {
                "displayName": "Beetroot",
                "name": "beetroot",
                "id": 49,
                "stackSize": 64
            },
            {
                "displayName": "Beetroot Seeds",
                "name": "beetroot_seeds",
                "id": 50,
                "stackSize": 64
            },
            {
                "displayName": "Beetroot Soup",
                "name": "beetroot_soup",
                "id": 51,
                "stackSize": 64
            },
            {
                "displayName": "Beetroots Stage0",
                "name": "beetroots_stage0",
                "id": 52,
                "stackSize": 64
            },
            {
                "displayName": "Beetroots Stage1",
                "name": "beetroots_stage1",
                "id": 53,
                "stackSize": 64
            },
            {
                "displayName": "Beetroots Stage2",
                "name": "beetroots_stage2",
                "id": 54,
                "stackSize": 64
            },
            {
                "displayName": "Beetroots Stage3",
                "name": "beetroots_stage3",
                "id": 55,
                "stackSize": 64
            },
            {
                "displayName": "Bell",
                "name": "bell",
                "id": 56,
                "stackSize": 64
            },
            {
                "displayName": "Bell Bottom",
                "name": "bell_bottom",
                "id": 57,
                "stackSize": 64
            },
            {
                "displayName": "Bell Side",
                "name": "bell_side",
                "id": 58,
                "stackSize": 64
            },
            {
                "displayName": "Bell Top",
                "name": "bell_top",
                "id": 59,
                "stackSize": 64
            },
            {
                "displayName": "Birch Boat",
                "name": "birch_boat",
                "id": 60,
                "stackSize": 64
            },
            {
                "displayName": "Birch Door",
                "name": "birch_door",
                "id": 61,
                "stackSize": 64
            },
            {
                "displayName": "Birch Door Bottom",
                "name": "birch_door_bottom",
                "id": 62,
                "stackSize": 64
            },
            {
                "displayName": "Birch Door Top",
                "name": "birch_door_top",
                "id": 63,
                "stackSize": 64
            },
            {
                "displayName": "Birch Leaves",
                "name": "birch_leaves",
                "id": 64,
                "stackSize": 64
            },
            {
                "displayName": "Birch Log",
                "name": "birch_log",
                "id": 65,
                "stackSize": 64
            },
            {
                "displayName": "Birch Log Top",
                "name": "birch_log_top",
                "id": 66,
                "stackSize": 64
            },
            {
                "displayName": "Birch Planks",
                "name": "birch_planks",
                "id": 67,
                "stackSize": 64
            },
            {
                "displayName": "Birch Sapling",
                "name": "birch_sapling",
                "id": 68,
                "stackSize": 64
            },
            {
                "displayName": "Birch Sign",
                "name": "birch_sign",
                "id": 69,
                "stackSize": 64
            },
            {
                "displayName": "Birch Trapdoor",
                "name": "birch_trapdoor",
                "id": 70,
                "stackSize": 64
            },
            {
                "displayName": "Black Concrete",
                "name": "black_concrete",
                "id": 71,
                "stackSize": 64
            },
            {
                "displayName": "Black Concrete Powder",
                "name": "black_concrete_powder",
                "id": 72,
                "stackSize": 64
            },
            {
                "displayName": "Black Dye",
                "name": "black_dye",
                "id": 73,
                "stackSize": 64
            },
            {
                "displayName": "Black Glazed Terracotta",
                "name": "black_glazed_terracotta",
                "id": 74,
                "stackSize": 64
            },
            {
                "displayName": "Black Shulker Box",
                "name": "black_shulker_box",
                "id": 75,
                "stackSize": 64
            },
            {
                "displayName": "Black Stained Glass",
                "name": "black_stained_glass",
                "id": 76,
                "stackSize": 64
            },
            {
                "displayName": "Black Stained Glass Pane Top",
                "name": "black_stained_glass_pane_top",
                "id": 77,
                "stackSize": 64
            },
            {
                "displayName": "Black Terracotta",
                "name": "black_terracotta",
                "id": 78,
                "stackSize": 64
            },
            {
                "displayName": "Black Wool",
                "name": "black_wool",
                "id": 79,
                "stackSize": 64
            },
            {
                "displayName": "Blast Furnace Front",
                "name": "blast_furnace_front",
                "id": 80,
                "stackSize": 64
            },
            {
                "displayName": "Blast Furnace Front On",
                "name": "blast_furnace_front_on",
                "id": 81,
                "stackSize": 64
            },
            {
                "displayName": "Blast Furnace Side",
                "name": "blast_furnace_side",
                "id": 82,
                "stackSize": 64
            },
            {
                "displayName": "Blast Furnace Top",
                "name": "blast_furnace_top",
                "id": 83,
                "stackSize": 64
            },
            {
                "displayName": "Blaze Powder",
                "name": "blaze_powder",
                "id": 84,
                "stackSize": 64
            },
            {
                "displayName": "Blaze Rod",
                "name": "blaze_rod",
                "id": 85,
                "stackSize": 64
            },
            {
                "displayName": "Blue Concrete",
                "name": "blue_concrete",
                "id": 86,
                "stackSize": 64
            },
            {
                "displayName": "Blue Concrete Powder",
                "name": "blue_concrete_powder",
                "id": 87,
                "stackSize": 64
            },
            {
                "displayName": "Blue Dye",
                "name": "blue_dye",
                "id": 88,
                "stackSize": 64
            },
            {
                "displayName": "Blue Glazed Terracotta",
                "name": "blue_glazed_terracotta",
                "id": 89,
                "stackSize": 64
            },
            {
                "displayName": "Blue Ice",
                "name": "blue_ice",
                "id": 90,
                "stackSize": 64
            },
            {
                "displayName": "Blue Orchid",
                "name": "blue_orchid",
                "id": 91,
                "stackSize": 64
            },
            {
                "displayName": "Blue Shulker Box",
                "name": "blue_shulker_box",
                "id": 92,
                "stackSize": 64
            },
            {
                "displayName": "Blue Stained Glass",
                "name": "blue_stained_glass",
                "id": 93,
                "stackSize": 64
            },
            {
                "displayName": "Blue Stained Glass Pane Top",
                "name": "blue_stained_glass_pane_top",
                "id": 94,
                "stackSize": 64
            },
            {
                "displayName": "Blue Terracotta",
                "name": "blue_terracotta",
                "id": 95,
                "stackSize": 64
            },
            {
                "displayName": "Blue Wool",
                "name": "blue_wool",
                "id": 96,
                "stackSize": 64
            },
            {
                "displayName": "Bone",
                "name": "bone",
                "id": 97,
                "stackSize": 64
            },
            {
                "displayName": "Bone Block Side",
                "name": "bone_block_side",
                "id": 98,
                "stackSize": 64
            },
            {
                "displayName": "Bone Block Top",
                "name": "bone_block_top",
                "id": 99,
                "stackSize": 64
            },
            {
                "displayName": "Bone Meal",
                "name": "bone_meal",
                "id": 100,
                "stackSize": 64
            },
            {
                "displayName": "Book",
                "name": "book",
                "id": 101,
                "stackSize": 64
            },
            {
                "displayName": "Bookshelf",
                "name": "bookshelf",
                "id": 102,
                "stackSize": 64
            },
            {
                "displayName": "Bow",
                "name": "bow",
                "id": 103,
                "stackSize": 64
            },
            {
                "displayName": "Bow Pulling 0",
                "name": "bow_pulling_0",
                "id": 104,
                "stackSize": 64
            },
            {
                "displayName": "Bow Pulling 1",
                "name": "bow_pulling_1",
                "id": 105,
                "stackSize": 64
            },
            {
                "displayName": "Bow Pulling 2",
                "name": "bow_pulling_2",
                "id": 106,
                "stackSize": 64
            },
            {
                "displayName": "Bowl",
                "name": "bowl",
                "id": 107,
                "stackSize": 64
            },
            {
                "displayName": "Brain Coral",
                "name": "brain_coral",
                "id": 108,
                "stackSize": 64
            },
            {
                "displayName": "Brain Coral Block",
                "name": "brain_coral_block",
                "id": 109,
                "stackSize": 64
            },
            {
                "displayName": "Brain Coral Fan",
                "name": "brain_coral_fan",
                "id": 110,
                "stackSize": 64
            },
            {
                "displayName": "Bread",
                "name": "bread",
                "id": 111,
                "stackSize": 64
            },
            {
                "displayName": "Brewing Stand",
                "name": "brewing_stand",
                "id": 112,
                "stackSize": 64
            },
            {
                "displayName": "Brewing Stand Base",
                "name": "brewing_stand_base",
                "id": 113,
                "stackSize": 64
            },
            {
                "displayName": "Brick",
                "name": "brick",
                "id": 114,
                "stackSize": 64
            },
            {
                "displayName": "Bricks",
                "name": "bricks",
                "id": 115,
                "stackSize": 64
            },
            {
                "displayName": "Broken Elytra",
                "name": "broken_elytra",
                "id": 116,
                "stackSize": 64
            },
            {
                "displayName": "Brown Concrete",
                "name": "brown_concrete",
                "id": 117,
                "stackSize": 64
            },
            {
                "displayName": "Brown Concrete Powder",
                "name": "brown_concrete_powder",
                "id": 118,
                "stackSize": 64
            },
            {
                "displayName": "Brown Dye",
                "name": "brown_dye",
                "id": 119,
                "stackSize": 64
            },
            {
                "displayName": "Brown Glazed Terracotta",
                "name": "brown_glazed_terracotta",
                "id": 120,
                "stackSize": 64
            },
            {
                "displayName": "Brown Mushroom",
                "name": "brown_mushroom",
                "id": 121,
                "stackSize": 64
            },
            {
                "displayName": "Brown Mushroom Block",
                "name": "brown_mushroom_block",
                "id": 122,
                "stackSize": 64
            },
            {
                "displayName": "Brown Shulker Box",
                "name": "brown_shulker_box",
                "id": 123,
                "stackSize": 64
            },
            {
                "displayName": "Brown Stained Glass",
                "name": "brown_stained_glass",
                "id": 124,
                "stackSize": 64
            },
            {
                "displayName": "Brown Stained Glass Pane Top",
                "name": "brown_stained_glass_pane_top",
                "id": 125,
                "stackSize": 64
            },
            {
                "displayName": "Brown Terracotta",
                "name": "brown_terracotta",
                "id": 126,
                "stackSize": 64
            },
            {
                "displayName": "Brown Wool",
                "name": "brown_wool",
                "id": 127,
                "stackSize": 64
            },
            {
                "displayName": "Bubble Coral",
                "name": "bubble_coral",
                "id": 128,
                "stackSize": 64
            },
            {
                "displayName": "Bubble Coral Block",
                "name": "bubble_coral_block",
                "id": 129,
                "stackSize": 64
            },
            {
                "displayName": "Bubble Coral Fan",
                "name": "bubble_coral_fan",
                "id": 130,
                "stackSize": 64
            },
            {
                "displayName": "Bucket",
                "name": "bucket",
                "id": 131,
                "stackSize": 64
            },
            {
                "displayName": "Cactus Bottom",
                "name": "cactus_bottom",
                "id": 132,
                "stackSize": 64
            },
            {
                "displayName": "Cactus Side",
                "name": "cactus_side",
                "id": 133,
                "stackSize": 64
            },
            {
                "displayName": "Cactus Top",
                "name": "cactus_top",
                "id": 134,
                "stackSize": 64
            },
            {
                "displayName": "Cake",
                "name": "cake",
                "id": 135,
                "stackSize": 64
            },
            {
                "displayName": "Cake Bottom",
                "name": "cake_bottom",
                "id": 136,
                "stackSize": 64
            },
            {
                "displayName": "Cake Inner",
                "name": "cake_inner",
                "id": 137,
                "stackSize": 64
            },
            {
                "displayName": "Cake Side",
                "name": "cake_side",
                "id": 138,
                "stackSize": 64
            },
            {
                "displayName": "Cake Top",
                "name": "cake_top",
                "id": 139,
                "stackSize": 64
            },
            {
                "displayName": "Campfire",
                "name": "campfire",
                "id": 140,
                "stackSize": 64
            },
            {
                "displayName": "Campfire Fire",
                "name": "campfire_fire",
                "id": 141,
                "stackSize": 64
            },
            {
                "displayName": "Campfire Log",
                "name": "campfire_log",
                "id": 142,
                "stackSize": 64
            },
            {
                "displayName": "Campfire Log Lit",
                "name": "campfire_log_lit",
                "id": 143,
                "stackSize": 64
            },
            {
                "displayName": "Carrot",
                "name": "carrot",
                "id": 144,
                "stackSize": 64
            },
            {
                "displayName": "Carrot On A Stick",
                "name": "carrot_on_a_stick",
                "id": 145,
                "stackSize": 64
            },
            {
                "displayName": "Carrots Stage0",
                "name": "carrots_stage0",
                "id": 146,
                "stackSize": 64
            },
            {
                "displayName": "Carrots Stage1",
                "name": "carrots_stage1",
                "id": 147,
                "stackSize": 64
            },
            {
                "displayName": "Carrots Stage2",
                "name": "carrots_stage2",
                "id": 148,
                "stackSize": 64
            },
            {
                "displayName": "Carrots Stage3",
                "name": "carrots_stage3",
                "id": 149,
                "stackSize": 64
            },
            {
                "displayName": "Cartography Table Side1",
                "name": "cartography_table_side1",
                "id": 150,
                "stackSize": 64
            },
            {
                "displayName": "Cartography Table Side2",
                "name": "cartography_table_side2",
                "id": 151,
                "stackSize": 64
            },
            {
                "displayName": "Cartography Table Side3",
                "name": "cartography_table_side3",
                "id": 152,
                "stackSize": 64
            },
            {
                "displayName": "Cartography Table Top",
                "name": "cartography_table_top",
                "id": 153,
                "stackSize": 64
            },
            {
                "displayName": "Carved Pumpkin",
                "name": "carved_pumpkin",
                "id": 154,
                "stackSize": 64
            },
            {
                "displayName": "Cauldron",
                "name": "cauldron",
                "id": 155,
                "stackSize": 64
            },
            {
                "displayName": "Cauldron Bottom",
                "name": "cauldron_bottom",
                "id": 156,
                "stackSize": 64
            },
            {
                "displayName": "Cauldron Inner",
                "name": "cauldron_inner",
                "id": 157,
                "stackSize": 64
            },
            {
                "displayName": "Cauldron Side",
                "name": "cauldron_side",
                "id": 158,
                "stackSize": 64
            },
            {
                "displayName": "Cauldron Top",
                "name": "cauldron_top",
                "id": 159,
                "stackSize": 64
            },
            {
                "displayName": "Chain Command Block Back",
                "name": "chain_command_block_back",
                "id": 160,
                "stackSize": 64
            },
            {
                "displayName": "Chain Command Block Conditional",
                "name": "chain_command_block_conditional",
                "id": 161,
                "stackSize": 64
            },
            {
                "displayName": "Chain Command Block Front",
                "name": "chain_command_block_front",
                "id": 162,
                "stackSize": 64
            },
            {
                "displayName": "Chain Command Block Side",
                "name": "chain_command_block_side",
                "id": 163,
                "stackSize": 64
            },
            {
                "displayName": "Chainmail Boots",
                "name": "chainmail_boots",
                "id": 164,
                "stackSize": 64
            },
            {
                "displayName": "Chainmail Chestplate",
                "name": "chainmail_chestplate",
                "id": 165,
                "stackSize": 64
            },
            {
                "displayName": "Chainmail Helmet",
                "name": "chainmail_helmet",
                "id": 166,
                "stackSize": 64
            },
            {
                "displayName": "Chainmail Leggings",
                "name": "chainmail_leggings",
                "id": 167,
                "stackSize": 64
            },
            {
                "displayName": "Charcoal",
                "name": "charcoal",
                "id": 168,
                "stackSize": 64
            },
            {
                "displayName": "Chest Minecart",
                "name": "chest_minecart",
                "id": 169,
                "stackSize": 64
            },
            {
                "displayName": "Chicken",
                "name": "chicken",
                "id": 170,
                "stackSize": 64
            },
            {
                "displayName": "Chipped Anvil Top",
                "name": "chipped_anvil_top",
                "id": 171,
                "stackSize": 64
            },
            {
                "displayName": "Chiseled Quartz Block",
                "name": "chiseled_quartz_block",
                "id": 172,
                "stackSize": 64
            },
            {
                "displayName": "Chiseled Quartz Block Top",
                "name": "chiseled_quartz_block_top",
                "id": 173,
                "stackSize": 64
            },
            {
                "displayName": "Chiseled Red Sandstone",
                "name": "chiseled_red_sandstone",
                "id": 174,
                "stackSize": 64
            },
            {
                "displayName": "Chiseled Sandstone",
                "name": "chiseled_sandstone",
                "id": 175,
                "stackSize": 64
            },
            {
                "displayName": "Chiseled Stone Bricks",
                "name": "chiseled_stone_bricks",
                "id": 176,
                "stackSize": 64
            },
            {
                "displayName": "Chorus Flower",
                "name": "chorus_flower",
                "id": 177,
                "stackSize": 64
            },
            {
                "displayName": "Chorus Flower Dead",
                "name": "chorus_flower_dead",
                "id": 178,
                "stackSize": 64
            },
            {
                "displayName": "Chorus Fruit",
                "name": "chorus_fruit",
                "id": 179,
                "stackSize": 64
            },
            {
                "displayName": "Chorus Plant",
                "name": "chorus_plant",
                "id": 180,
                "stackSize": 64
            },
            {
                "displayName": "Clay",
                "name": "clay",
                "id": 181,
                "stackSize": 64
            },
            {
                "displayName": "Clay Ball",
                "name": "clay_ball",
                "id": 182,
                "stackSize": 64
            },
            {
                "displayName": "Clock 00",
                "name": "clock_00",
                "id": 183,
                "stackSize": 64
            },
            {
                "displayName": "Clock 01",
                "name": "clock_01",
                "id": 184,
                "stackSize": 64
            },
            {
                "displayName": "Clock 02",
                "name": "clock_02",
                "id": 185,
                "stackSize": 64
            },
            {
                "displayName": "Clock 03",
                "name": "clock_03",
                "id": 186,
                "stackSize": 64
            },
            {
                "displayName": "Clock 04",
                "name": "clock_04",
                "id": 187,
                "stackSize": 64
            },
            {
                "displayName": "Clock 05",
                "name": "clock_05",
                "id": 188,
                "stackSize": 64
            },
            {
                "displayName": "Clock 06",
                "name": "clock_06",
                "id": 189,
                "stackSize": 64
            },
            {
                "displayName": "Clock 07",
                "name": "clock_07",
                "id": 190,
                "stackSize": 64
            },
            {
                "displayName": "Clock 08",
                "name": "clock_08",
                "id": 191,
                "stackSize": 64
            },
            {
                "displayName": "Clock 09",
                "name": "clock_09",
                "id": 192,
                "stackSize": 64
            },
            {
                "displayName": "Clock 10",
                "name": "clock_10",
                "id": 193,
                "stackSize": 64
            },
            {
                "displayName": "Clock 11",
                "name": "clock_11",
                "id": 194,
                "stackSize": 64
            },
            {
                "displayName": "Clock 12",
                "name": "clock_12",
                "id": 195,
                "stackSize": 64
            },
            {
                "displayName": "Clock 13",
                "name": "clock_13",
                "id": 196,
                "stackSize": 64
            },
            {
                "displayName": "Clock 14",
                "name": "clock_14",
                "id": 197,
                "stackSize": 64
            },
            {
                "displayName": "Clock 15",
                "name": "clock_15",
                "id": 198,
                "stackSize": 64
            },
            {
                "displayName": "Clock 16",
                "name": "clock_16",
                "id": 199,
                "stackSize": 64
            },
            {
                "displayName": "Clock 17",
                "name": "clock_17",
                "id": 200,
                "stackSize": 64
            },
            {
                "displayName": "Clock 18",
                "name": "clock_18",
                "id": 201,
                "stackSize": 64
            },
            {
                "displayName": "Clock 19",
                "name": "clock_19",
                "id": 202,
                "stackSize": 64
            },
            {
                "displayName": "Clock 20",
                "name": "clock_20",
                "id": 203,
                "stackSize": 64
            },
            {
                "displayName": "Clock 21",
                "name": "clock_21",
                "id": 204,
                "stackSize": 64
            },
            {
                "displayName": "Clock 22",
                "name": "clock_22",
                "id": 205,
                "stackSize": 64
            },
            {
                "displayName": "Clock 23",
                "name": "clock_23",
                "id": 206,
                "stackSize": 64
            },
            {
                "displayName": "Clock 24",
                "name": "clock_24",
                "id": 207,
                "stackSize": 64
            },
            {
                "displayName": "Clock 25",
                "name": "clock_25",
                "id": 208,
                "stackSize": 64
            },
            {
                "displayName": "Clock 26",
                "name": "clock_26",
                "id": 209,
                "stackSize": 64
            },
            {
                "displayName": "Clock 27",
                "name": "clock_27",
                "id": 210,
                "stackSize": 64
            },
            {
                "displayName": "Clock 28",
                "name": "clock_28",
                "id": 211,
                "stackSize": 64
            },
            {
                "displayName": "Clock 29",
                "name": "clock_29",
                "id": 212,
                "stackSize": 64
            },
            {
                "displayName": "Clock 30",
                "name": "clock_30",
                "id": 213,
                "stackSize": 64
            },
            {
                "displayName": "Clock 31",
                "name": "clock_31",
                "id": 214,
                "stackSize": 64
            },
            {
                "displayName": "Clock 32",
                "name": "clock_32",
                "id": 215,
                "stackSize": 64
            },
            {
                "displayName": "Clock 33",
                "name": "clock_33",
                "id": 216,
                "stackSize": 64
            },
            {
                "displayName": "Clock 34",
                "name": "clock_34",
                "id": 217,
                "stackSize": 64
            },
            {
                "displayName": "Clock 35",
                "name": "clock_35",
                "id": 218,
                "stackSize": 64
            },
            {
                "displayName": "Clock 36",
                "name": "clock_36",
                "id": 219,
                "stackSize": 64
            },
            {
                "displayName": "Clock 37",
                "name": "clock_37",
                "id": 220,
                "stackSize": 64
            },
            {
                "displayName": "Clock 38",
                "name": "clock_38",
                "id": 221,
                "stackSize": 64
            },
            {
                "displayName": "Clock 39",
                "name": "clock_39",
                "id": 222,
                "stackSize": 64
            },
            {
                "displayName": "Clock 40",
                "name": "clock_40",
                "id": 223,
                "stackSize": 64
            },
            {
                "displayName": "Clock 41",
                "name": "clock_41",
                "id": 224,
                "stackSize": 64
            },
            {
                "displayName": "Clock 42",
                "name": "clock_42",
                "id": 225,
                "stackSize": 64
            },
            {
                "displayName": "Clock 43",
                "name": "clock_43",
                "id": 226,
                "stackSize": 64
            },
            {
                "displayName": "Clock 44",
                "name": "clock_44",
                "id": 227,
                "stackSize": 64
            },
            {
                "displayName": "Clock 45",
                "name": "clock_45",
                "id": 228,
                "stackSize": 64
            },
            {
                "displayName": "Clock 46",
                "name": "clock_46",
                "id": 229,
                "stackSize": 64
            },
            {
                "displayName": "Clock 47",
                "name": "clock_47",
                "id": 230,
                "stackSize": 64
            },
            {
                "displayName": "Clock 48",
                "name": "clock_48",
                "id": 231,
                "stackSize": 64
            },
            {
                "displayName": "Clock 49",
                "name": "clock_49",
                "id": 232,
                "stackSize": 64
            },
            {
                "displayName": "Clock 50",
                "name": "clock_50",
                "id": 233,
                "stackSize": 64
            },
            {
                "displayName": "Clock 51",
                "name": "clock_51",
                "id": 234,
                "stackSize": 64
            },
            {
                "displayName": "Clock 52",
                "name": "clock_52",
                "id": 235,
                "stackSize": 64
            },
            {
                "displayName": "Clock 53",
                "name": "clock_53",
                "id": 236,
                "stackSize": 64
            },
            {
                "displayName": "Clock 54",
                "name": "clock_54",
                "id": 237,
                "stackSize": 64
            },
            {
                "displayName": "Clock 55",
                "name": "clock_55",
                "id": 238,
                "stackSize": 64
            },
            {
                "displayName": "Clock 56",
                "name": "clock_56",
                "id": 239,
                "stackSize": 64
            },
            {
                "displayName": "Clock 57",
                "name": "clock_57",
                "id": 240,
                "stackSize": 64
            },
            {
                "displayName": "Clock 58",
                "name": "clock_58",
                "id": 241,
                "stackSize": 64
            },
            {
                "displayName": "Clock 59",
                "name": "clock_59",
                "id": 242,
                "stackSize": 64
            },
            {
                "displayName": "Clock 60",
                "name": "clock_60",
                "id": 243,
                "stackSize": 64
            },
            {
                "displayName": "Clock 61",
                "name": "clock_61",
                "id": 244,
                "stackSize": 64
            },
            {
                "displayName": "Clock 62",
                "name": "clock_62",
                "id": 245,
                "stackSize": 64
            },
            {
                "displayName": "Clock 63",
                "name": "clock_63",
                "id": 246,
                "stackSize": 64
            },
            {
                "displayName": "Coal",
                "name": "coal",
                "id": 247,
                "stackSize": 64
            },
            {
                "displayName": "Coal Block",
                "name": "coal_block",
                "id": 248,
                "stackSize": 64
            },
            {
                "displayName": "Coal Ore",
                "name": "coal_ore",
                "id": 249,
                "stackSize": 64
            },
            {
                "displayName": "Coarse Dirt",
                "name": "coarse_dirt",
                "id": 250,
                "stackSize": 64
            },
            {
                "displayName": "Cobblestone",
                "name": "cobblestone",
                "id": 251,
                "stackSize": 64
            },
            {
                "displayName": "Cobweb",
                "name": "cobweb",
                "id": 252,
                "stackSize": 64
            },
            {
                "displayName": "Cocoa Beans",
                "name": "cocoa_beans",
                "id": 253,
                "stackSize": 64
            },
            {
                "displayName": "Cocoa Stage0",
                "name": "cocoa_stage0",
                "id": 254,
                "stackSize": 64
            },
            {
                "displayName": "Cocoa Stage1",
                "name": "cocoa_stage1",
                "id": 255,
                "stackSize": 64
            },
            {
                "displayName": "Cocoa Stage2",
                "name": "cocoa_stage2",
                "id": 256,
                "stackSize": 64
            },
            {
                "displayName": "Cod",
                "name": "cod",
                "id": 257,
                "stackSize": 64
            },
            {
                "displayName": "Cod Bucket",
                "name": "cod_bucket",
                "id": 258,
                "stackSize": 64
            },
            {
                "displayName": "Command Block Back",
                "name": "command_block_back",
                "id": 259,
                "stackSize": 64
            },
            {
                "displayName": "Command Block Conditional",
                "name": "command_block_conditional",
                "id": 260,
                "stackSize": 64
            },
            {
                "displayName": "Command Block Front",
                "name": "command_block_front",
                "id": 261,
                "stackSize": 64
            },
            {
                "displayName": "Command Block Minecart",
                "name": "command_block_minecart",
                "id": 262,
                "stackSize": 64
            },
            {
                "displayName": "Command Block Side",
                "name": "command_block_side",
                "id": 263,
                "stackSize": 64
            },
            {
                "displayName": "Comparator",
                "name": "comparator",
                "id": 264,
                "stackSize": 64
            },
            {
                "displayName": "Comparator On",
                "name": "comparator_on",
                "id": 265,
                "stackSize": 64
            },
            {
                "displayName": "Compass 00",
                "name": "compass_00",
                "id": 266,
                "stackSize": 64
            },
            {
                "displayName": "Compass 01",
                "name": "compass_01",
                "id": 267,
                "stackSize": 64
            },
            {
                "displayName": "Compass 02",
                "name": "compass_02",
                "id": 268,
                "stackSize": 64
            },
            {
                "displayName": "Compass 03",
                "name": "compass_03",
                "id": 269,
                "stackSize": 64
            },
            {
                "displayName": "Compass 04",
                "name": "compass_04",
                "id": 270,
                "stackSize": 64
            },
            {
                "displayName": "Compass 05",
                "name": "compass_05",
                "id": 271,
                "stackSize": 64
            },
            {
                "displayName": "Compass 06",
                "name": "compass_06",
                "id": 272,
                "stackSize": 64
            },
            {
                "displayName": "Compass 07",
                "name": "compass_07",
                "id": 273,
                "stackSize": 64
            },
            {
                "displayName": "Compass 08",
                "name": "compass_08",
                "id": 274,
                "stackSize": 64
            },
            {
                "displayName": "Compass 09",
                "name": "compass_09",
                "id": 275,
                "stackSize": 64
            },
            {
                "displayName": "Compass 10",
                "name": "compass_10",
                "id": 276,
                "stackSize": 64
            },
            {
                "displayName": "Compass 11",
                "name": "compass_11",
                "id": 277,
                "stackSize": 64
            },
            {
                "displayName": "Compass 12",
                "name": "compass_12",
                "id": 278,
                "stackSize": 64
            },
            {
                "displayName": "Compass 13",
                "name": "compass_13",
                "id": 279,
                "stackSize": 64
            },
            {
                "displayName": "Compass 14",
                "name": "compass_14",
                "id": 280,
                "stackSize": 64
            },
            {
                "displayName": "Compass 15",
                "name": "compass_15",
                "id": 281,
                "stackSize": 64
            },
            {
                "displayName": "Compass 16",
                "name": "compass_16",
                "id": 282,
                "stackSize": 64
            },
            {
                "displayName": "Compass 17",
                "name": "compass_17",
                "id": 283,
                "stackSize": 64
            },
            {
                "displayName": "Compass 18",
                "name": "compass_18",
                "id": 284,
                "stackSize": 64
            },
            {
                "displayName": "Compass 19",
                "name": "compass_19",
                "id": 285,
                "stackSize": 64
            },
            {
                "displayName": "Compass 20",
                "name": "compass_20",
                "id": 286,
                "stackSize": 64
            },
            {
                "displayName": "Compass 21",
                "name": "compass_21",
                "id": 287,
                "stackSize": 64
            },
            {
                "displayName": "Compass 22",
                "name": "compass_22",
                "id": 288,
                "stackSize": 64
            },
            {
                "displayName": "Compass 23",
                "name": "compass_23",
                "id": 289,
                "stackSize": 64
            },
            {
                "displayName": "Compass 24",
                "name": "compass_24",
                "id": 290,
                "stackSize": 64
            },
            {
                "displayName": "Compass 25",
                "name": "compass_25",
                "id": 291,
                "stackSize": 64
            },
            {
                "displayName": "Compass 26",
                "name": "compass_26",
                "id": 292,
                "stackSize": 64
            },
            {
                "displayName": "Compass 27",
                "name": "compass_27",
                "id": 293,
                "stackSize": 64
            },
            {
                "displayName": "Compass 28",
                "name": "compass_28",
                "id": 294,
                "stackSize": 64
            },
            {
                "displayName": "Compass 29",
                "name": "compass_29",
                "id": 295,
                "stackSize": 64
            },
            {
                "displayName": "Compass 30",
                "name": "compass_30",
                "id": 296,
                "stackSize": 64
            },
            {
                "displayName": "Compass 31",
                "name": "compass_31",
                "id": 297,
                "stackSize": 64
            },
            {
                "displayName": "Composter Bottom",
                "name": "composter_bottom",
                "id": 298,
                "stackSize": 64
            },
            {
                "displayName": "Composter Compost",
                "name": "composter_compost",
                "id": 299,
                "stackSize": 64
            },
            {
                "displayName": "Composter Ready",
                "name": "composter_ready",
                "id": 300,
                "stackSize": 64
            },
            {
                "displayName": "Composter Side",
                "name": "composter_side",
                "id": 301,
                "stackSize": 64
            },
            {
                "displayName": "Composter Top",
                "name": "composter_top",
                "id": 302,
                "stackSize": 64
            },
            {
                "displayName": "Conduit",
                "name": "conduit",
                "id": 303,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Beef",
                "name": "cooked_beef",
                "id": 304,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Chicken",
                "name": "cooked_chicken",
                "id": 305,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Cod",
                "name": "cooked_cod",
                "id": 306,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Mutton",
                "name": "cooked_mutton",
                "id": 307,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Porkchop",
                "name": "cooked_porkchop",
                "id": 308,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Rabbit",
                "name": "cooked_rabbit",
                "id": 309,
                "stackSize": 64
            },
            {
                "displayName": "Cooked Salmon",
                "name": "cooked_salmon",
                "id": 310,
                "stackSize": 64
            },
            {
                "displayName": "Cookie",
                "name": "cookie",
                "id": 311,
                "stackSize": 64
            },
            {
                "displayName": "Cornflower",
                "name": "cornflower",
                "id": 312,
                "stackSize": 64
            },
            {
                "displayName": "Cracked Stone Bricks",
                "name": "cracked_stone_bricks",
                "id": 313,
                "stackSize": 64
            },
            {
                "displayName": "Crafting Table Front",
                "name": "crafting_table_front",
                "id": 314,
                "stackSize": 64
            },
            {
                "displayName": "Crafting Table Side",
                "name": "crafting_table_side",
                "id": 315,
                "stackSize": 64
            },
            {
                "displayName": "Crafting Table Top",
                "name": "crafting_table_top",
                "id": 316,
                "stackSize": 64
            },
            {
                "displayName": "Creeper Banner Pattern",
                "name": "creeper_banner_pattern",
                "id": 317,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Arrow",
                "name": "crossbow_arrow",
                "id": 318,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Firework",
                "name": "crossbow_firework",
                "id": 319,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Pulling 0",
                "name": "crossbow_pulling_0",
                "id": 320,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Pulling 1",
                "name": "crossbow_pulling_1",
                "id": 321,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Pulling 2",
                "name": "crossbow_pulling_2",
                "id": 322,
                "stackSize": 64
            },
            {
                "displayName": "Crossbow Standby",
                "name": "crossbow_standby",
                "id": 323,
                "stackSize": 64
            },
            {
                "displayName": "Cut Red Sandstone",
                "name": "cut_red_sandstone",
                "id": 324,
                "stackSize": 64
            },
            {
                "displayName": "Cut Sandstone",
                "name": "cut_sandstone",
                "id": 325,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Concrete",
                "name": "cyan_concrete",
                "id": 326,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Concrete Powder",
                "name": "cyan_concrete_powder",
                "id": 327,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Dye",
                "name": "cyan_dye",
                "id": 328,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Glazed Terracotta",
                "name": "cyan_glazed_terracotta",
                "id": 329,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Shulker Box",
                "name": "cyan_shulker_box",
                "id": 330,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Stained Glass",
                "name": "cyan_stained_glass",
                "id": 331,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Stained Glass Pane Top",
                "name": "cyan_stained_glass_pane_top",
                "id": 332,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Terracotta",
                "name": "cyan_terracotta",
                "id": 333,
                "stackSize": 64
            },
            {
                "displayName": "Cyan Wool",
                "name": "cyan_wool",
                "id": 334,
                "stackSize": 64
            },
            {
                "displayName": "Damaged Anvil Top",
                "name": "damaged_anvil_top",
                "id": 335,
                "stackSize": 64
            },
            {
                "displayName": "Dandelion",
                "name": "dandelion",
                "id": 336,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Boat",
                "name": "dark_oak_boat",
                "id": 337,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Door",
                "name": "dark_oak_door",
                "id": 338,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Door Bottom",
                "name": "dark_oak_door_bottom",
                "id": 339,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Door Top",
                "name": "dark_oak_door_top",
                "id": 340,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Leaves",
                "name": "dark_oak_leaves",
                "id": 341,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Log",
                "name": "dark_oak_log",
                "id": 342,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Log Top",
                "name": "dark_oak_log_top",
                "id": 343,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Planks",
                "name": "dark_oak_planks",
                "id": 344,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Sapling",
                "name": "dark_oak_sapling",
                "id": 345,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Sign",
                "name": "dark_oak_sign",
                "id": 346,
                "stackSize": 64
            },
            {
                "displayName": "Dark Oak Trapdoor",
                "name": "dark_oak_trapdoor",
                "id": 347,
                "stackSize": 64
            },
            {
                "displayName": "Dark Prismarine",
                "name": "dark_prismarine",
                "id": 348,
                "stackSize": 64
            },
            {
                "displayName": "Daylight Detector Inverted Top",
                "name": "daylight_detector_inverted_top",
                "id": 349,
                "stackSize": 64
            },
            {
                "displayName": "Daylight Detector Side",
                "name": "daylight_detector_side",
                "id": 350,
                "stackSize": 64
            },
            {
                "displayName": "Daylight Detector Top",
                "name": "daylight_detector_top",
                "id": 351,
                "stackSize": 64
            },
            {
                "displayName": "Dead Brain Coral",
                "name": "dead_brain_coral",
                "id": 352,
                "stackSize": 64
            },
            {
                "displayName": "Dead Brain Coral Block",
                "name": "dead_brain_coral_block",
                "id": 353,
                "stackSize": 64
            },
            {
                "displayName": "Dead Brain Coral Fan",
                "name": "dead_brain_coral_fan",
                "id": 354,
                "stackSize": 64
            },
            {
                "displayName": "Dead Bubble Coral",
                "name": "dead_bubble_coral",
                "id": 355,
                "stackSize": 64
            },
            {
                "displayName": "Dead Bubble Coral Block",
                "name": "dead_bubble_coral_block",
                "id": 356,
                "stackSize": 64
            },
            {
                "displayName": "Dead Bubble Coral Fan",
                "name": "dead_bubble_coral_fan",
                "id": 357,
                "stackSize": 64
            },
            {
                "displayName": "Dead Bush",
                "name": "dead_bush",
                "id": 358,
                "stackSize": 64
            },
            {
                "displayName": "Dead Fire Coral",
                "name": "dead_fire_coral",
                "id": 359,
                "stackSize": 64
            },
            {
                "displayName": "Dead Fire Coral Block",
                "name": "dead_fire_coral_block",
                "id": 360,
                "stackSize": 64
            },
            {
                "displayName": "Dead Fire Coral Fan",
                "name": "dead_fire_coral_fan",
                "id": 361,
                "stackSize": 64
            },
            {
                "displayName": "Dead Horn Coral",
                "name": "dead_horn_coral",
                "id": 362,
                "stackSize": 64
            },
            {
                "displayName": "Dead Horn Coral Block",
                "name": "dead_horn_coral_block",
                "id": 363,
                "stackSize": 64
            },
            {
                "displayName": "Dead Horn Coral Fan",
                "name": "dead_horn_coral_fan",
                "id": 364,
                "stackSize": 64
            },
            {
                "displayName": "Dead Tube Coral",
                "name": "dead_tube_coral",
                "id": 365,
                "stackSize": 64
            },
            {
                "displayName": "Dead Tube Coral Block",
                "name": "dead_tube_coral_block",
                "id": 366,
                "stackSize": 64
            },
            {
                "displayName": "Dead Tube Coral Fan",
                "name": "dead_tube_coral_fan",
                "id": 367,
                "stackSize": 64
            },
            {
                "displayName": "Debug",
                "name": "debug",
                "id": 368,
                "stackSize": 64
            },
            {
                "displayName": "Debug2",
                "name": "debug2",
                "id": 369,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 0",
                "name": "destroy_stage_0",
                "id": 370,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 1",
                "name": "destroy_stage_1",
                "id": 371,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 2",
                "name": "destroy_stage_2",
                "id": 372,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 3",
                "name": "destroy_stage_3",
                "id": 373,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 4",
                "name": "destroy_stage_4",
                "id": 374,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 5",
                "name": "destroy_stage_5",
                "id": 375,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 6",
                "name": "destroy_stage_6",
                "id": 376,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 7",
                "name": "destroy_stage_7",
                "id": 377,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 8",
                "name": "destroy_stage_8",
                "id": 378,
                "stackSize": 64
            },
            {
                "displayName": "Destroy Stage 9",
                "name": "destroy_stage_9",
                "id": 379,
                "stackSize": 64
            },
            {
                "displayName": "Detector Rail",
                "name": "detector_rail",
                "id": 380,
                "stackSize": 64
            },
            {
                "displayName": "Detector Rail On",
                "name": "detector_rail_on",
                "id": 381,
                "stackSize": 64
            },
            {
                "displayName": "Diamond",
                "name": "diamond",
                "id": 382,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Axe",
                "name": "diamond_axe",
                "id": 383,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Block",
                "name": "diamond_block",
                "id": 384,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Boots",
                "name": "diamond_boots",
                "id": 385,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Chestplate",
                "name": "diamond_chestplate",
                "id": 386,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Helmet",
                "name": "diamond_helmet",
                "id": 387,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Hoe",
                "name": "diamond_hoe",
                "id": 388,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Horse Armor",
                "name": "diamond_horse_armor",
                "id": 389,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Leggings",
                "name": "diamond_leggings",
                "id": 390,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Ore",
                "name": "diamond_ore",
                "id": 391,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Pickaxe",
                "name": "diamond_pickaxe",
                "id": 392,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Shovel",
                "name": "diamond_shovel",
                "id": 393,
                "stackSize": 64
            },
            {
                "displayName": "Diamond Sword",
                "name": "diamond_sword",
                "id": 394,
                "stackSize": 64
            },
            {
                "displayName": "Diorite",
                "name": "diorite",
                "id": 395,
                "stackSize": 64
            },
            {
                "displayName": "Dirt",
                "name": "dirt",
                "id": 396,
                "stackSize": 64
            },
            {
                "displayName": "Dispenser Front",
                "name": "dispenser_front",
                "id": 397,
                "stackSize": 64
            },
            {
                "displayName": "Dispenser Front Vertical",
                "name": "dispenser_front_vertical",
                "id": 398,
                "stackSize": 64
            },
            {
                "displayName": "Dragon Breath",
                "name": "dragon_breath",
                "id": 399,
                "stackSize": 64
            },
            {
                "displayName": "Dragon Egg",
                "name": "dragon_egg",
                "id": 400,
                "stackSize": 64
            },
            {
                "displayName": "Dried Kelp",
                "name": "dried_kelp",
                "id": 401,
                "stackSize": 64
            },
            {
                "displayName": "Dried Kelp Bottom",
                "name": "dried_kelp_bottom",
                "id": 402,
                "stackSize": 64
            },
            {
                "displayName": "Dried Kelp Side",
                "name": "dried_kelp_side",
                "id": 403,
                "stackSize": 64
            },
            {
                "displayName": "Dried Kelp Top",
                "name": "dried_kelp_top",
                "id": 404,
                "stackSize": 64
            },
            {
                "displayName": "Dropper Front",
                "name": "dropper_front",
                "id": 405,
                "stackSize": 64
            },
            {
                "displayName": "Dropper Front Vertical",
                "name": "dropper_front_vertical",
                "id": 406,
                "stackSize": 64
            },
            {
                "displayName": "Egg",
                "name": "egg",
                "id": 407,
                "stackSize": 64
            },
            {
                "displayName": "Elytra",
                "name": "elytra",
                "id": 408,
                "stackSize": 64
            },
            {
                "displayName": "Emerald",
                "name": "emerald",
                "id": 409,
                "stackSize": 64
            },
            {
                "displayName": "Emerald Block",
                "name": "emerald_block",
                "id": 410,
                "stackSize": 64
            },
            {
                "displayName": "Emerald Ore",
                "name": "emerald_ore",
                "id": 411,
                "stackSize": 64
            },
            {
                "displayName": "Empty Armor Slot Boots",
                "name": "empty_armor_slot_boots",
                "id": 412,
                "stackSize": 64
            },
            {
                "displayName": "Empty Armor Slot Chestplate",
                "name": "empty_armor_slot_chestplate",
                "id": 413,
                "stackSize": 64
            },
            {
                "displayName": "Empty Armor Slot Helmet",
                "name": "empty_armor_slot_helmet",
                "id": 414,
                "stackSize": 64
            },
            {
                "displayName": "Empty Armor Slot Leggings",
                "name": "empty_armor_slot_leggings",
                "id": 415,
                "stackSize": 64
            },
            {
                "displayName": "Empty Armor Slot Shield",
                "name": "empty_armor_slot_shield",
                "id": 416,
                "stackSize": 64
            },
            {
                "displayName": "Enchanted Book",
                "name": "enchanted_book",
                "id": 417,
                "stackSize": 64
            },
            {
                "displayName": "Enchanting Table Bottom",
                "name": "enchanting_table_bottom",
                "id": 418,
                "stackSize": 64
            },
            {
                "displayName": "Enchanting Table Side",
                "name": "enchanting_table_side",
                "id": 419,
                "stackSize": 64
            },
            {
                "displayName": "Enchanting Table Top",
                "name": "enchanting_table_top",
                "id": 420,
                "stackSize": 64
            },
            {
                "displayName": "End Crystal",
                "name": "end_crystal",
                "id": 421,
                "stackSize": 64
            },
            {
                "displayName": "End Portal Frame Eye",
                "name": "end_portal_frame_eye",
                "id": 422,
                "stackSize": 64
            },
            {
                "displayName": "End Portal Frame Side",
                "name": "end_portal_frame_side",
                "id": 423,
                "stackSize": 64
            },
            {
                "displayName": "End Portal Frame Top",
                "name": "end_portal_frame_top",
                "id": 424,
                "stackSize": 64
            },
            {
                "displayName": "End Rod",
                "name": "end_rod",
                "id": 425,
                "stackSize": 64
            },
            {
                "displayName": "End Stone",
                "name": "end_stone",
                "id": 426,
                "stackSize": 64
            },
            {
                "displayName": "End Stone Bricks",
                "name": "end_stone_bricks",
                "id": 427,
                "stackSize": 64
            },
            {
                "displayName": "Ender Eye",
                "name": "ender_eye",
                "id": 428,
                "stackSize": 64
            },
            {
                "displayName": "Ender Pearl",
                "name": "ender_pearl",
                "id": 429,
                "stackSize": 64
            },
            {
                "displayName": "Experience Bottle",
                "name": "experience_bottle",
                "id": 430,
                "stackSize": 64
            },
            {
                "displayName": "Farmland",
                "name": "farmland",
                "id": 431,
                "stackSize": 64
            },
            {
                "displayName": "Farmland Moist",
                "name": "farmland_moist",
                "id": 432,
                "stackSize": 64
            },
            {
                "displayName": "Feather",
                "name": "feather",
                "id": 433,
                "stackSize": 64
            },
            {
                "displayName": "Fermented Spider Eye",
                "name": "fermented_spider_eye",
                "id": 434,
                "stackSize": 64
            },
            {
                "displayName": "Fern",
                "name": "fern",
                "id": 435,
                "stackSize": 64
            },
            {
                "displayName": "Filled Map",
                "name": "filled_map",
                "id": 436,
                "stackSize": 64
            },
            {
                "displayName": "Filled Map Markings",
                "name": "filled_map_markings",
                "id": 437,
                "stackSize": 64
            },
            {
                "displayName": "Fire 0",
                "name": "fire_0",
                "id": 438,
                "stackSize": 64
            },
            {
                "displayName": "Fire 1",
                "name": "fire_1",
                "id": 439,
                "stackSize": 64
            },
            {
                "displayName": "Fire Charge",
                "name": "fire_charge",
                "id": 440,
                "stackSize": 64
            },
            {
                "displayName": "Fire Coral",
                "name": "fire_coral",
                "id": 441,
                "stackSize": 64
            },
            {
                "displayName": "Fire Coral Block",
                "name": "fire_coral_block",
                "id": 442,
                "stackSize": 64
            },
            {
                "displayName": "Fire Coral Fan",
                "name": "fire_coral_fan",
                "id": 443,
                "stackSize": 64
            },
            {
                "displayName": "Firework Rocket",
                "name": "firework_rocket",
                "id": 444,
                "stackSize": 64
            },
            {
                "displayName": "Firework Star",
                "name": "firework_star",
                "id": 445,
                "stackSize": 64
            },
            {
                "displayName": "Firework Star Overlay",
                "name": "firework_star_overlay",
                "id": 446,
                "stackSize": 64
            },
            {
                "displayName": "Fishing Rod",
                "name": "fishing_rod",
                "id": 447,
                "stackSize": 64
            },
            {
                "displayName": "Fishing Rod Cast",
                "name": "fishing_rod_cast",
                "id": 448,
                "stackSize": 64
            },
            {
                "displayName": "Fletching Table Front",
                "name": "fletching_table_front",
                "id": 449,
                "stackSize": 64
            },
            {
                "displayName": "Fletching Table Side",
                "name": "fletching_table_side",
                "id": 450,
                "stackSize": 64
            },
            {
                "displayName": "Fletching Table Top",
                "name": "fletching_table_top",
                "id": 451,
                "stackSize": 64
            },
            {
                "displayName": "Flint",
                "name": "flint",
                "id": 452,
                "stackSize": 64
            },
            {
                "displayName": "Flint And Steel",
                "name": "flint_and_steel",
                "id": 453,
                "stackSize": 64
            },
            {
                "displayName": "Flower Banner Pattern",
                "name": "flower_banner_pattern",
                "id": 454,
                "stackSize": 64
            },
            {
                "displayName": "Flower Pot",
                "name": "flower_pot",
                "id": 455,
                "stackSize": 64
            },
            {
                "displayName": "Frosted Ice 0",
                "name": "frosted_ice_0",
                "id": 456,
                "stackSize": 64
            },
            {
                "displayName": "Frosted Ice 1",
                "name": "frosted_ice_1",
                "id": 457,
                "stackSize": 64
            },
            {
                "displayName": "Frosted Ice 2",
                "name": "frosted_ice_2",
                "id": 458,
                "stackSize": 64
            },
            {
                "displayName": "Frosted Ice 3",
                "name": "frosted_ice_3",
                "id": 459,
                "stackSize": 64
            },
            {
                "displayName": "Furnace Front",
                "name": "furnace_front",
                "id": 460,
                "stackSize": 64
            },
            {
                "displayName": "Furnace Front On",
                "name": "furnace_front_on",
                "id": 461,
                "stackSize": 64
            },
            {
                "displayName": "Furnace Minecart",
                "name": "furnace_minecart",
                "id": 462,
                "stackSize": 64
            },
            {
                "displayName": "Furnace Side",
                "name": "furnace_side",
                "id": 463,
                "stackSize": 64
            },
            {
                "displayName": "Furnace Top",
                "name": "furnace_top",
                "id": 464,
                "stackSize": 64
            },
            {
                "displayName": "Ghast Tear",
                "name": "ghast_tear",
                "id": 465,
                "stackSize": 64
            },
            {
                "displayName": "Glass",
                "name": "glass",
                "id": 466,
                "stackSize": 64
            },
            {
                "displayName": "Glass Bottle",
                "name": "glass_bottle",
                "id": 467,
                "stackSize": 64
            },
            {
                "displayName": "Glass Pane Top",
                "name": "glass_pane_top",
                "id": 468,
                "stackSize": 64
            },
            {
                "displayName": "Glistering Melon Slice",
                "name": "glistering_melon_slice",
                "id": 469,
                "stackSize": 64
            },
            {
                "displayName": "Globe Banner Pattern",
                "name": "globe_banner_pattern",
                "id": 470,
                "stackSize": 64
            },
            {
                "displayName": "Glowstone",
                "name": "glowstone",
                "id": 471,
                "stackSize": 64
            },
            {
                "displayName": "Glowstone Dust",
                "name": "glowstone_dust",
                "id": 472,
                "stackSize": 64
            },
            {
                "displayName": "Gold Block",
                "name": "gold_block",
                "id": 473,
                "stackSize": 64
            },
            {
                "displayName": "Gold Ingot",
                "name": "gold_ingot",
                "id": 474,
                "stackSize": 64
            },
            {
                "displayName": "Gold Nugget",
                "name": "gold_nugget",
                "id": 475,
                "stackSize": 64
            },
            {
                "displayName": "Gold Ore",
                "name": "gold_ore",
                "id": 476,
                "stackSize": 64
            },
            {
                "displayName": "Golden Apple",
                "name": "golden_apple",
                "id": 477,
                "stackSize": 64
            },
            {
                "displayName": "Golden Axe",
                "name": "golden_axe",
                "id": 478,
                "stackSize": 64
            },
            {
                "displayName": "Golden Boots",
                "name": "golden_boots",
                "id": 479,
                "stackSize": 64
            },
            {
                "displayName": "Golden Carrot",
                "name": "golden_carrot",
                "id": 480,
                "stackSize": 64
            },
            {
                "displayName": "Golden Chestplate",
                "name": "golden_chestplate",
                "id": 481,
                "stackSize": 64
            },
            {
                "displayName": "Golden Helmet",
                "name": "golden_helmet",
                "id": 482,
                "stackSize": 64
            },
            {
                "displayName": "Golden Hoe",
                "name": "golden_hoe",
                "id": 483,
                "stackSize": 64
            },
            {
                "displayName": "Golden Horse Armor",
                "name": "golden_horse_armor",
                "id": 484,
                "stackSize": 64
            },
            {
                "displayName": "Golden Leggings",
                "name": "golden_leggings",
                "id": 485,
                "stackSize": 64
            },
            {
                "displayName": "Golden Pickaxe",
                "name": "golden_pickaxe",
                "id": 486,
                "stackSize": 64
            },
            {
                "displayName": "Golden Shovel",
                "name": "golden_shovel",
                "id": 487,
                "stackSize": 64
            },
            {
                "displayName": "Golden Sword",
                "name": "golden_sword",
                "id": 488,
                "stackSize": 64
            },
            {
                "displayName": "Granite",
                "name": "granite",
                "id": 489,
                "stackSize": 64
            },
            {
                "displayName": "Grass",
                "name": "grass",
                "id": 490,
                "stackSize": 64
            },
            {
                "displayName": "Grass Block Side",
                "name": "grass_block_side",
                "id": 491,
                "stackSize": 64
            },
            {
                "displayName": "Grass Block Side Overlay",
                "name": "grass_block_side_overlay",
                "id": 492,
                "stackSize": 64
            },
            {
                "displayName": "Grass Block Snow",
                "name": "grass_block_snow",
                "id": 493,
                "stackSize": 64
            },
            {
                "displayName": "Grass Block Top",
                "name": "grass_block_top",
                "id": 494,
                "stackSize": 64
            },
            {
                "displayName": "Grass Path Side",
                "name": "grass_path_side",
                "id": 495,
                "stackSize": 64
            },
            {
                "displayName": "Grass Path Top",
                "name": "grass_path_top",
                "id": 496,
                "stackSize": 64
            },
            {
                "displayName": "Gravel",
                "name": "gravel",
                "id": 497,
                "stackSize": 64
            },
            {
                "displayName": "Gray Concrete",
                "name": "gray_concrete",
                "id": 498,
                "stackSize": 64
            },
            {
                "displayName": "Gray Concrete Powder",
                "name": "gray_concrete_powder",
                "id": 499,
                "stackSize": 64
            },
            {
                "displayName": "Gray Dye",
                "name": "gray_dye",
                "id": 500,
                "stackSize": 64
            },
            {
                "displayName": "Gray Glazed Terracotta",
                "name": "gray_glazed_terracotta",
                "id": 501,
                "stackSize": 64
            },
            {
                "displayName": "Gray Shulker Box",
                "name": "gray_shulker_box",
                "id": 502,
                "stackSize": 64
            },
            {
                "displayName": "Gray Stained Glass",
                "name": "gray_stained_glass",
                "id": 503,
                "stackSize": 64
            },
            {
                "displayName": "Gray Stained Glass Pane Top",
                "name": "gray_stained_glass_pane_top",
                "id": 504,
                "stackSize": 64
            },
            {
                "displayName": "Gray Terracotta",
                "name": "gray_terracotta",
                "id": 505,
                "stackSize": 64
            },
            {
                "displayName": "Gray Wool",
                "name": "gray_wool",
                "id": 506,
                "stackSize": 64
            },
            {
                "displayName": "Green Concrete",
                "name": "green_concrete",
                "id": 507,
                "stackSize": 64
            },
            {
                "displayName": "Green Concrete Powder",
                "name": "green_concrete_powder",
                "id": 508,
                "stackSize": 64
            },
            {
                "displayName": "Green Dye",
                "name": "green_dye",
                "id": 509,
                "stackSize": 64
            },
            {
                "displayName": "Green Glazed Terracotta",
                "name": "green_glazed_terracotta",
                "id": 510,
                "stackSize": 64
            },
            {
                "displayName": "Green Shulker Box",
                "name": "green_shulker_box",
                "id": 511,
                "stackSize": 64
            },
            {
                "displayName": "Green Stained Glass",
                "name": "green_stained_glass",
                "id": 512,
                "stackSize": 64
            },
            {
                "displayName": "Green Stained Glass Pane Top",
                "name": "green_stained_glass_pane_top",
                "id": 513,
                "stackSize": 64
            },
            {
                "displayName": "Green Terracotta",
                "name": "green_terracotta",
                "id": 514,
                "stackSize": 64
            },
            {
                "displayName": "Green Wool",
                "name": "green_wool",
                "id": 515,
                "stackSize": 64
            },
            {
                "displayName": "Grindstone Pivot",
                "name": "grindstone_pivot",
                "id": 516,
                "stackSize": 64
            },
            {
                "displayName": "Grindstone Round",
                "name": "grindstone_round",
                "id": 517,
                "stackSize": 64
            },
            {
                "displayName": "Grindstone Side",
                "name": "grindstone_side",
                "id": 518,
                "stackSize": 64
            },
            {
                "displayName": "Gunpowder",
                "name": "gunpowder",
                "id": 519,
                "stackSize": 64
            },
            {
                "displayName": "Hay Block Side",
                "name": "hay_block_side",
                "id": 520,
                "stackSize": 64
            },
            {
                "displayName": "Hay Block Top",
                "name": "hay_block_top",
                "id": 521,
                "stackSize": 64
            },
            {
                "displayName": "Heart Of The Sea",
                "name": "heart_of_the_sea",
                "id": 522,
                "stackSize": 64
            },
            {
                "displayName": "Honey Block Bottom",
                "name": "honey_block_bottom",
                "id": 523,
                "stackSize": 64
            },
            {
                "displayName": "Honey Block Side",
                "name": "honey_block_side",
                "id": 524,
                "stackSize": 64
            },
            {
                "displayName": "Honey Block Top",
                "name": "honey_block_top",
                "id": 525,
                "stackSize": 64
            },
            {
                "displayName": "Honey Bottle",
                "name": "honey_bottle",
                "id": 526,
                "stackSize": 64
            },
            {
                "displayName": "Honeycomb",
                "name": "honeycomb",
                "id": 527,
                "stackSize": 64
            },
            {
                "displayName": "Honeycomb Block",
                "name": "honeycomb_block",
                "id": 528,
                "stackSize": 64
            },
            {
                "displayName": "Hopper",
                "name": "hopper",
                "id": 529,
                "stackSize": 64
            },
            {
                "displayName": "Hopper Inside",
                "name": "hopper_inside",
                "id": 530,
                "stackSize": 64
            },
            {
                "displayName": "Hopper Minecart",
                "name": "hopper_minecart",
                "id": 531,
                "stackSize": 64
            },
            {
                "displayName": "Hopper Outside",
                "name": "hopper_outside",
                "id": 532,
                "stackSize": 64
            },
            {
                "displayName": "Hopper Top",
                "name": "hopper_top",
                "id": 533,
                "stackSize": 64
            },
            {
                "displayName": "Horn Coral",
                "name": "horn_coral",
                "id": 534,
                "stackSize": 64
            },
            {
                "displayName": "Horn Coral Block",
                "name": "horn_coral_block",
                "id": 535,
                "stackSize": 64
            },
            {
                "displayName": "Horn Coral Fan",
                "name": "horn_coral_fan",
                "id": 536,
                "stackSize": 64
            },
            {
                "displayName": "Ice",
                "name": "ice",
                "id": 537,
                "stackSize": 64
            },
            {
                "displayName": "Ink Sac",
                "name": "ink_sac",
                "id": 538,
                "stackSize": 64
            },
            {
                "displayName": "Iron Axe",
                "name": "iron_axe",
                "id": 539,
                "stackSize": 64
            },
            {
                "displayName": "Iron Bars",
                "name": "iron_bars",
                "id": 540,
                "stackSize": 64
            },
            {
                "displayName": "Iron Block",
                "name": "iron_block",
                "id": 541,
                "stackSize": 64
            },
            {
                "displayName": "Iron Boots",
                "name": "iron_boots",
                "id": 542,
                "stackSize": 64
            },
            {
                "displayName": "Iron Chestplate",
                "name": "iron_chestplate",
                "id": 543,
                "stackSize": 64
            },
            {
                "displayName": "Iron Door",
                "name": "iron_door",
                "id": 544,
                "stackSize": 64
            },
            {
                "displayName": "Iron Door Bottom",
                "name": "iron_door_bottom",
                "id": 545,
                "stackSize": 64
            },
            {
                "displayName": "Iron Door Top",
                "name": "iron_door_top",
                "id": 546,
                "stackSize": 64
            },
            {
                "displayName": "Iron Helmet",
                "name": "iron_helmet",
                "id": 547,
                "stackSize": 64
            },
            {
                "displayName": "Iron Hoe",
                "name": "iron_hoe",
                "id": 548,
                "stackSize": 64
            },
            {
                "displayName": "Iron Horse Armor",
                "name": "iron_horse_armor",
                "id": 549,
                "stackSize": 64
            },
            {
                "displayName": "Iron Ingot",
                "name": "iron_ingot",
                "id": 550,
                "stackSize": 64
            },
            {
                "displayName": "Iron Leggings",
                "name": "iron_leggings",
                "id": 551,
                "stackSize": 64
            },
            {
                "displayName": "Iron Nugget",
                "name": "iron_nugget",
                "id": 552,
                "stackSize": 64
            },
            {
                "displayName": "Iron Ore",
                "name": "iron_ore",
                "id": 553,
                "stackSize": 64
            },
            {
                "displayName": "Iron Pickaxe",
                "name": "iron_pickaxe",
                "id": 554,
                "stackSize": 64
            },
            {
                "displayName": "Iron Shovel",
                "name": "iron_shovel",
                "id": 555,
                "stackSize": 64
            },
            {
                "displayName": "Iron Sword",
                "name": "iron_sword",
                "id": 556,
                "stackSize": 64
            },
            {
                "displayName": "Iron Trapdoor",
                "name": "iron_trapdoor",
                "id": 557,
                "stackSize": 64
            },
            {
                "displayName": "Item Frame",
                "name": "item_frame",
                "id": 558,
                "stackSize": 64
            },
            {
                "displayName": "Jack O Lantern",
                "name": "jack_o_lantern",
                "id": 559,
                "stackSize": 64
            },
            {
                "displayName": "Jigsaw Bottom",
                "name": "jigsaw_bottom",
                "id": 560,
                "stackSize": 64
            },
            {
                "displayName": "Jigsaw Side",
                "name": "jigsaw_side",
                "id": 561,
                "stackSize": 64
            },
            {
                "displayName": "Jigsaw Top",
                "name": "jigsaw_top",
                "id": 562,
                "stackSize": 64
            },
            {
                "displayName": "Jukebox Side",
                "name": "jukebox_side",
                "id": 563,
                "stackSize": 64
            },
            {
                "displayName": "Jukebox Top",
                "name": "jukebox_top",
                "id": 564,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Boat",
                "name": "jungle_boat",
                "id": 565,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Door",
                "name": "jungle_door",
                "id": 566,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Door Bottom",
                "name": "jungle_door_bottom",
                "id": 567,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Door Top",
                "name": "jungle_door_top",
                "id": 568,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Leaves",
                "name": "jungle_leaves",
                "id": 569,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Log",
                "name": "jungle_log",
                "id": 570,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Log Top",
                "name": "jungle_log_top",
                "id": 571,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Planks",
                "name": "jungle_planks",
                "id": 572,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Sapling",
                "name": "jungle_sapling",
                "id": 573,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Sign",
                "name": "jungle_sign",
                "id": 574,
                "stackSize": 64
            },
            {
                "displayName": "Jungle Trapdoor",
                "name": "jungle_trapdoor",
                "id": 575,
                "stackSize": 64
            },
            {
                "displayName": "Kelp",
                "name": "kelp",
                "id": 576,
                "stackSize": 64
            },
            {
                "displayName": "Kelp Plant",
                "name": "kelp_plant",
                "id": 577,
                "stackSize": 64
            },
            {
                "displayName": "Knowledge Book",
                "name": "knowledge_book",
                "id": 578,
                "stackSize": 64
            },
            {
                "displayName": "Ladder",
                "name": "ladder",
                "id": 579,
                "stackSize": 64
            },
            {
                "displayName": "Lantern",
                "name": "lantern",
                "id": 580,
                "stackSize": 64
            },
            {
                "displayName": "Lapis Block",
                "name": "lapis_block",
                "id": 581,
                "stackSize": 64
            },
            {
                "displayName": "Lapis Lazuli",
                "name": "lapis_lazuli",
                "id": 582,
                "stackSize": 64
            },
            {
                "displayName": "Lapis Ore",
                "name": "lapis_ore",
                "id": 583,
                "stackSize": 64
            },
            {
                "displayName": "Large Fern Bottom",
                "name": "large_fern_bottom",
                "id": 584,
                "stackSize": 64
            },
            {
                "displayName": "Large Fern Top",
                "name": "large_fern_top",
                "id": 585,
                "stackSize": 64
            },
            {
                "displayName": "Lava Bucket",
                "name": "lava_bucket",
                "id": 586,
                "stackSize": 64
            },
            {
                "displayName": "Lava Flow",
                "name": "lava_flow",
                "id": 587,
                "stackSize": 64
            },
            {
                "displayName": "Lava Still",
                "name": "lava_still",
                "id": 588,
                "stackSize": 64
            },
            {
                "displayName": "Lead",
                "name": "lead",
                "id": 589,
                "stackSize": 64
            },
            {
                "displayName": "Leather",
                "name": "leather",
                "id": 590,
                "stackSize": 64
            },
            {
                "displayName": "Leather Boots",
                "name": "leather_boots",
                "id": 591,
                "stackSize": 64
            },
            {
                "displayName": "Leather Boots Overlay",
                "name": "leather_boots_overlay",
                "id": 592,
                "stackSize": 64
            },
            {
                "displayName": "Leather Chestplate",
                "name": "leather_chestplate",
                "id": 593,
                "stackSize": 64
            },
            {
                "displayName": "Leather Chestplate Overlay",
                "name": "leather_chestplate_overlay",
                "id": 594,
                "stackSize": 64
            },
            {
                "displayName": "Leather Helmet",
                "name": "leather_helmet",
                "id": 595,
                "stackSize": 64
            },
            {
                "displayName": "Leather Helmet Overlay",
                "name": "leather_helmet_overlay",
                "id": 596,
                "stackSize": 64
            },
            {
                "displayName": "Leather Horse Armor",
                "name": "leather_horse_armor",
                "id": 597,
                "stackSize": 64
            },
            {
                "displayName": "Leather Leggings",
                "name": "leather_leggings",
                "id": 598,
                "stackSize": 64
            },
            {
                "displayName": "Leather Leggings Overlay",
                "name": "leather_leggings_overlay",
                "id": 599,
                "stackSize": 64
            },
            {
                "displayName": "Lectern Base",
                "name": "lectern_base",
                "id": 600,
                "stackSize": 64
            },
            {
                "displayName": "Lectern Front",
                "name": "lectern_front",
                "id": 601,
                "stackSize": 64
            },
            {
                "displayName": "Lectern Sides",
                "name": "lectern_sides",
                "id": 602,
                "stackSize": 64
            },
            {
                "displayName": "Lectern Top",
                "name": "lectern_top",
                "id": 603,
                "stackSize": 64
            },
            {
                "displayName": "Lever",
                "name": "lever",
                "id": 604,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Concrete",
                "name": "light_blue_concrete",
                "id": 605,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Concrete Powder",
                "name": "light_blue_concrete_powder",
                "id": 606,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Dye",
                "name": "light_blue_dye",
                "id": 607,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Glazed Terracotta",
                "name": "light_blue_glazed_terracotta",
                "id": 608,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Shulker Box",
                "name": "light_blue_shulker_box",
                "id": 609,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Stained Glass",
                "name": "light_blue_stained_glass",
                "id": 610,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Stained Glass Pane Top",
                "name": "light_blue_stained_glass_pane_top",
                "id": 611,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Terracotta",
                "name": "light_blue_terracotta",
                "id": 612,
                "stackSize": 64
            },
            {
                "displayName": "Light Blue Wool",
                "name": "light_blue_wool",
                "id": 613,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Concrete",
                "name": "light_gray_concrete",
                "id": 614,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Concrete Powder",
                "name": "light_gray_concrete_powder",
                "id": 615,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Dye",
                "name": "light_gray_dye",
                "id": 616,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Glazed Terracotta",
                "name": "light_gray_glazed_terracotta",
                "id": 617,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Shulker Box",
                "name": "light_gray_shulker_box",
                "id": 618,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Stained Glass",
                "name": "light_gray_stained_glass",
                "id": 619,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Stained Glass Pane Top",
                "name": "light_gray_stained_glass_pane_top",
                "id": 620,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Terracotta",
                "name": "light_gray_terracotta",
                "id": 621,
                "stackSize": 64
            },
            {
                "displayName": "Light Gray Wool",
                "name": "light_gray_wool",
                "id": 622,
                "stackSize": 64
            },
            {
                "displayName": "Lilac Bottom",
                "name": "lilac_bottom",
                "id": 623,
                "stackSize": 64
            },
            {
                "displayName": "Lilac Top",
                "name": "lilac_top",
                "id": 624,
                "stackSize": 64
            },
            {
                "displayName": "Lily Of The Valley",
                "name": "lily_of_the_valley",
                "id": 625,
                "stackSize": 64
            },
            {
                "displayName": "Lily Pad",
                "name": "lily_pad",
                "id": 626,
                "stackSize": 64
            },
            {
                "displayName": "Lime Concrete",
                "name": "lime_concrete",
                "id": 627,
                "stackSize": 64
            },
            {
                "displayName": "Lime Concrete Powder",
                "name": "lime_concrete_powder",
                "id": 628,
                "stackSize": 64
            },
            {
                "displayName": "Lime Dye",
                "name": "lime_dye",
                "id": 629,
                "stackSize": 64
            },
            {
                "displayName": "Lime Glazed Terracotta",
                "name": "lime_glazed_terracotta",
                "id": 630,
                "stackSize": 64
            },
            {
                "displayName": "Lime Shulker Box",
                "name": "lime_shulker_box",
                "id": 631,
                "stackSize": 64
            },
            {
                "displayName": "Lime Stained Glass",
                "name": "lime_stained_glass",
                "id": 632,
                "stackSize": 64
            },
            {
                "displayName": "Lime Stained Glass Pane Top",
                "name": "lime_stained_glass_pane_top",
                "id": 633,
                "stackSize": 64
            },
            {
                "displayName": "Lime Terracotta",
                "name": "lime_terracotta",
                "id": 634,
                "stackSize": 64
            },
            {
                "displayName": "Lime Wool",
                "name": "lime_wool",
                "id": 635,
                "stackSize": 64
            },
            {
                "displayName": "Lingering Potion",
                "name": "lingering_potion",
                "id": 636,
                "stackSize": 64
            },
            {
                "displayName": "Loom Bottom",
                "name": "loom_bottom",
                "id": 637,
                "stackSize": 64
            },
            {
                "displayName": "Loom Front",
                "name": "loom_front",
                "id": 638,
                "stackSize": 64
            },
            {
                "displayName": "Loom Side",
                "name": "loom_side",
                "id": 639,
                "stackSize": 64
            },
            {
                "displayName": "Loom Top",
                "name": "loom_top",
                "id": 640,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Concrete",
                "name": "magenta_concrete",
                "id": 641,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Concrete Powder",
                "name": "magenta_concrete_powder",
                "id": 642,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Dye",
                "name": "magenta_dye",
                "id": 643,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Glazed Terracotta",
                "name": "magenta_glazed_terracotta",
                "id": 644,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Shulker Box",
                "name": "magenta_shulker_box",
                "id": 645,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Stained Glass",
                "name": "magenta_stained_glass",
                "id": 646,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Stained Glass Pane Top",
                "name": "magenta_stained_glass_pane_top",
                "id": 647,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Terracotta",
                "name": "magenta_terracotta",
                "id": 648,
                "stackSize": 64
            },
            {
                "displayName": "Magenta Wool",
                "name": "magenta_wool",
                "id": 649,
                "stackSize": 64
            },
            {
                "displayName": "Magma",
                "name": "magma",
                "id": 650,
                "stackSize": 64
            },
            {
                "displayName": "Magma Cream",
                "name": "magma_cream",
                "id": 651,
                "stackSize": 64
            },
            {
                "displayName": "Map",
                "name": "map",
                "id": 652,
                "stackSize": 64
            },
            {
                "displayName": "Melon Seeds",
                "name": "melon_seeds",
                "id": 653,
                "stackSize": 64
            },
            {
                "displayName": "Melon Side",
                "name": "melon_side",
                "id": 654,
                "stackSize": 64
            },
            {
                "displayName": "Melon Slice",
                "name": "melon_slice",
                "id": 655,
                "stackSize": 64
            },
            {
                "displayName": "Melon Stem",
                "name": "melon_stem",
                "id": 656,
                "stackSize": 64
            },
            {
                "displayName": "Melon Top",
                "name": "melon_top",
                "id": 657,
                "stackSize": 64
            },
            {
                "displayName": "Milk Bucket",
                "name": "milk_bucket",
                "id": 658,
                "stackSize": 64
            },
            {
                "displayName": "Minecart",
                "name": "minecart",
                "id": 659,
                "stackSize": 64
            },
            {
                "displayName": "Mojang Banner Pattern",
                "name": "mojang_banner_pattern",
                "id": 660,
                "stackSize": 64
            },
            {
                "displayName": "Mossy Cobblestone",
                "name": "mossy_cobblestone",
                "id": 661,
                "stackSize": 64
            },
            {
                "displayName": "Mossy Stone Bricks",
                "name": "mossy_stone_bricks",
                "id": 662,
                "stackSize": 64
            },
            {
                "displayName": "Mushroom Block Inside",
                "name": "mushroom_block_inside",
                "id": 663,
                "stackSize": 64
            },
            {
                "displayName": "Mushroom Stem",
                "name": "mushroom_stem",
                "id": 664,
                "stackSize": 64
            },
            {
                "displayName": "Mushroom Stew",
                "name": "mushroom_stew",
                "id": 665,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc 11",
                "name": "music_disc_11",
                "id": 666,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc 13",
                "name": "music_disc_13",
                "id": 667,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Blocks",
                "name": "music_disc_blocks",
                "id": 668,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Cat",
                "name": "music_disc_cat",
                "id": 669,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Chirp",
                "name": "music_disc_chirp",
                "id": 670,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Far",
                "name": "music_disc_far",
                "id": 671,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Mall",
                "name": "music_disc_mall",
                "id": 672,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Mellohi",
                "name": "music_disc_mellohi",
                "id": 673,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Stal",
                "name": "music_disc_stal",
                "id": 674,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Strad",
                "name": "music_disc_strad",
                "id": 675,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Wait",
                "name": "music_disc_wait",
                "id": 676,
                "stackSize": 64
            },
            {
                "displayName": "Music Disc Ward",
                "name": "music_disc_ward",
                "id": 677,
                "stackSize": 64
            },
            {
                "displayName": "Mutton",
                "name": "mutton",
                "id": 678,
                "stackSize": 64
            },
            {
                "displayName": "Mycelium Side",
                "name": "mycelium_side",
                "id": 679,
                "stackSize": 64
            },
            {
                "displayName": "Mycelium Top",
                "name": "mycelium_top",
                "id": 680,
                "stackSize": 64
            },
            {
                "displayName": "Name Tag",
                "name": "name_tag",
                "id": 681,
                "stackSize": 64
            },
            {
                "displayName": "Nautilus Shell",
                "name": "nautilus_shell",
                "id": 682,
                "stackSize": 64
            },
            {
                "displayName": "Nether Brick",
                "name": "nether_brick",
                "id": 683,
                "stackSize": 64
            },
            {
                "displayName": "Nether Bricks",
                "name": "nether_bricks",
                "id": 684,
                "stackSize": 64
            },
            {
                "displayName": "Nether Portal",
                "name": "nether_portal",
                "id": 685,
                "stackSize": 64
            },
            {
                "displayName": "Nether Quartz Ore",
                "name": "nether_quartz_ore",
                "id": 686,
                "stackSize": 64
            },
            {
                "displayName": "Nether Star",
                "name": "nether_star",
                "id": 687,
                "stackSize": 64
            },
            {
                "displayName": "Nether Wart",
                "name": "nether_wart",
                "id": 688,
                "stackSize": 64
            },
            {
                "displayName": "Nether Wart Block",
                "name": "nether_wart_block",
                "id": 689,
                "stackSize": 64
            },
            {
                "displayName": "Nether Wart Stage0",
                "name": "nether_wart_stage0",
                "id": 690,
                "stackSize": 64
            },
            {
                "displayName": "Nether Wart Stage1",
                "name": "nether_wart_stage1",
                "id": 691,
                "stackSize": 64
            },
            {
                "displayName": "Nether Wart Stage2",
                "name": "nether_wart_stage2",
                "id": 692,
                "stackSize": 64
            },
            {
                "displayName": "Netherrack",
                "name": "netherrack",
                "id": 693,
                "stackSize": 64
            },
            {
                "displayName": "Note Block",
                "name": "note_block",
                "id": 694,
                "stackSize": 64
            },
            {
                "displayName": "Notfound",
                "name": "notfound",
                "id": 695,
                "stackSize": 64
            },
            {
                "displayName": "Oak Boat",
                "name": "oak_boat",
                "id": 696,
                "stackSize": 64
            },
            {
                "displayName": "Oak Door",
                "name": "oak_door",
                "id": 697,
                "stackSize": 64
            },
            {
                "displayName": "Oak Door Bottom",
                "name": "oak_door_bottom",
                "id": 698,
                "stackSize": 64
            },
            {
                "displayName": "Oak Door Top",
                "name": "oak_door_top",
                "id": 699,
                "stackSize": 64
            },
            {
                "displayName": "Oak Leaves",
                "name": "oak_leaves",
                "id": 700,
                "stackSize": 64
            },
            {
                "displayName": "Oak Log",
                "name": "oak_log",
                "id": 701,
                "stackSize": 64
            },
            {
                "displayName": "Oak Log Top",
                "name": "oak_log_top",
                "id": 702,
                "stackSize": 64
            },
            {
                "displayName": "Oak Planks",
                "name": "oak_planks",
                "id": 703,
                "stackSize": 64
            },
            {
                "displayName": "Oak Sapling",
                "name": "oak_sapling",
                "id": 704,
                "stackSize": 64
            },
            {
                "displayName": "Oak Sign",
                "name": "oak_sign",
                "id": 705,
                "stackSize": 64
            },
            {
                "displayName": "Oak Trapdoor",
                "name": "oak_trapdoor",
                "id": 706,
                "stackSize": 64
            },
            {
                "displayName": "Observer Back",
                "name": "observer_back",
                "id": 707,
                "stackSize": 64
            },
            {
                "displayName": "Observer Back On",
                "name": "observer_back_on",
                "id": 708,
                "stackSize": 64
            },
            {
                "displayName": "Observer Front",
                "name": "observer_front",
                "id": 709,
                "stackSize": 64
            },
            {
                "displayName": "Observer Side",
                "name": "observer_side",
                "id": 710,
                "stackSize": 64
            },
            {
                "displayName": "Observer Top",
                "name": "observer_top",
                "id": 711,
                "stackSize": 64
            },
            {
                "displayName": "Obsidian",
                "name": "obsidian",
                "id": 712,
                "stackSize": 64
            },
            {
                "displayName": "Orange Concrete",
                "name": "orange_concrete",
                "id": 713,
                "stackSize": 64
            },
            {
                "displayName": "Orange Concrete Powder",
                "name": "orange_concrete_powder",
                "id": 714,
                "stackSize": 64
            },
            {
                "displayName": "Orange Dye",
                "name": "orange_dye",
                "id": 715,
                "stackSize": 64
            },
            {
                "displayName": "Orange Glazed Terracotta",
                "name": "orange_glazed_terracotta",
                "id": 716,
                "stackSize": 64
            },
            {
                "displayName": "Orange Shulker Box",
                "name": "orange_shulker_box",
                "id": 717,
                "stackSize": 64
            },
            {
                "displayName": "Orange Stained Glass",
                "name": "orange_stained_glass",
                "id": 718,
                "stackSize": 64
            },
            {
                "displayName": "Orange Stained Glass Pane Top",
                "name": "orange_stained_glass_pane_top",
                "id": 719,
                "stackSize": 64
            },
            {
                "displayName": "Orange Terracotta",
                "name": "orange_terracotta",
                "id": 720,
                "stackSize": 64
            },
            {
                "displayName": "Orange Tulip",
                "name": "orange_tulip",
                "id": 721,
                "stackSize": 64
            },
            {
                "displayName": "Orange Wool",
                "name": "orange_wool",
                "id": 722,
                "stackSize": 64
            },
            {
                "displayName": "Oxeye Daisy",
                "name": "oxeye_daisy",
                "id": 723,
                "stackSize": 64
            },
            {
                "displayName": "Packed Ice",
                "name": "packed_ice",
                "id": 724,
                "stackSize": 64
            },
            {
                "displayName": "Painting",
                "name": "painting",
                "id": 725,
                "stackSize": 64
            },
            {
                "displayName": "Paper",
                "name": "paper",
                "id": 726,
                "stackSize": 64
            },
            {
                "displayName": "Peony Bottom",
                "name": "peony_bottom",
                "id": 727,
                "stackSize": 64
            },
            {
                "displayName": "Peony Top",
                "name": "peony_top",
                "id": 728,
                "stackSize": 64
            },
            {
                "displayName": "Phantom Membrane",
                "name": "phantom_membrane",
                "id": 729,
                "stackSize": 64
            },
            {
                "displayName": "Pink Concrete",
                "name": "pink_concrete",
                "id": 730,
                "stackSize": 64
            },
            {
                "displayName": "Pink Concrete Powder",
                "name": "pink_concrete_powder",
                "id": 731,
                "stackSize": 64
            },
            {
                "displayName": "Pink Dye",
                "name": "pink_dye",
                "id": 732,
                "stackSize": 64
            },
            {
                "displayName": "Pink Glazed Terracotta",
                "name": "pink_glazed_terracotta",
                "id": 733,
                "stackSize": 64
            },
            {
                "displayName": "Pink Shulker Box",
                "name": "pink_shulker_box",
                "id": 734,
                "stackSize": 64
            },
            {
                "displayName": "Pink Stained Glass",
                "name": "pink_stained_glass",
                "id": 735,
                "stackSize": 64
            },
            {
                "displayName": "Pink Stained Glass Pane Top",
                "name": "pink_stained_glass_pane_top",
                "id": 736,
                "stackSize": 64
            },
            {
                "displayName": "Pink Terracotta",
                "name": "pink_terracotta",
                "id": 737,
                "stackSize": 64
            },
            {
                "displayName": "Pink Tulip",
                "name": "pink_tulip",
                "id": 738,
                "stackSize": 64
            },
            {
                "displayName": "Pink Wool",
                "name": "pink_wool",
                "id": 739,
                "stackSize": 64
            },
            {
                "displayName": "Piston Bottom",
                "name": "piston_bottom",
                "id": 740,
                "stackSize": 64
            },
            {
                "displayName": "Piston Inner",
                "name": "piston_inner",
                "id": 741,
                "stackSize": 64
            },
            {
                "displayName": "Piston Side",
                "name": "piston_side",
                "id": 742,
                "stackSize": 64
            },
            {
                "displayName": "Piston Top",
                "name": "piston_top",
                "id": 743,
                "stackSize": 64
            },
            {
                "displayName": "Piston Top Sticky",
                "name": "piston_top_sticky",
                "id": 744,
                "stackSize": 64
            },
            {
                "displayName": "Podzol Side",
                "name": "podzol_side",
                "id": 745,
                "stackSize": 64
            },
            {
                "displayName": "Podzol Top",
                "name": "podzol_top",
                "id": 746,
                "stackSize": 64
            },
            {
                "displayName": "Poisonous Potato",
                "name": "poisonous_potato",
                "id": 747,
                "stackSize": 64
            },
            {
                "displayName": "Polished Andesite",
                "name": "polished_andesite",
                "id": 748,
                "stackSize": 64
            },
            {
                "displayName": "Polished Diorite",
                "name": "polished_diorite",
                "id": 749,
                "stackSize": 64
            },
            {
                "displayName": "Polished Granite",
                "name": "polished_granite",
                "id": 750,
                "stackSize": 64
            },
            {
                "displayName": "Popped Chorus Fruit",
                "name": "popped_chorus_fruit",
                "id": 751,
                "stackSize": 64
            },
            {
                "displayName": "Poppy",
                "name": "poppy",
                "id": 752,
                "stackSize": 64
            },
            {
                "displayName": "Porkchop",
                "name": "porkchop",
                "id": 753,
                "stackSize": 64
            },
            {
                "displayName": "Potato",
                "name": "potato",
                "id": 754,
                "stackSize": 64
            },
            {
                "displayName": "Potatoes Stage0",
                "name": "potatoes_stage0",
                "id": 755,
                "stackSize": 64
            },
            {
                "displayName": "Potatoes Stage1",
                "name": "potatoes_stage1",
                "id": 756,
                "stackSize": 64
            },
            {
                "displayName": "Potatoes Stage2",
                "name": "potatoes_stage2",
                "id": 757,
                "stackSize": 64
            },
            {
                "displayName": "Potatoes Stage3",
                "name": "potatoes_stage3",
                "id": 758,
                "stackSize": 64
            },
            {
                "displayName": "Potion",
                "name": "potion",
                "id": 759,
                "stackSize": 64
            },
            {
                "displayName": "Potion Overlay",
                "name": "potion_overlay",
                "id": 760,
                "stackSize": 64
            },
            {
                "displayName": "Powered Rail",
                "name": "powered_rail",
                "id": 761,
                "stackSize": 64
            },
            {
                "displayName": "Powered Rail On",
                "name": "powered_rail_on",
                "id": 762,
                "stackSize": 64
            },
            {
                "displayName": "Prismarine",
                "name": "prismarine",
                "id": 763,
                "stackSize": 64
            },
            {
                "displayName": "Prismarine Bricks",
                "name": "prismarine_bricks",
                "id": 764,
                "stackSize": 64
            },
            {
                "displayName": "Prismarine Crystals",
                "name": "prismarine_crystals",
                "id": 765,
                "stackSize": 64
            },
            {
                "displayName": "Prismarine Shard",
                "name": "prismarine_shard",
                "id": 766,
                "stackSize": 64
            },
            {
                "displayName": "Pufferfish",
                "name": "pufferfish",
                "id": 767,
                "stackSize": 64
            },
            {
                "displayName": "Pufferfish Bucket",
                "name": "pufferfish_bucket",
                "id": 768,
                "stackSize": 64
            },
            {
                "displayName": "Pumpkin Pie",
                "name": "pumpkin_pie",
                "id": 769,
                "stackSize": 64
            },
            {
                "displayName": "Pumpkin Seeds",
                "name": "pumpkin_seeds",
                "id": 770,
                "stackSize": 64
            },
            {
                "displayName": "Pumpkin Side",
                "name": "pumpkin_side",
                "id": 771,
                "stackSize": 64
            },
            {
                "displayName": "Pumpkin Stem",
                "name": "pumpkin_stem",
                "id": 772,
                "stackSize": 64
            },
            {
                "displayName": "Pumpkin Top",
                "name": "pumpkin_top",
                "id": 773,
                "stackSize": 64
            },
            {
                "displayName": "Purple Concrete",
                "name": "purple_concrete",
                "id": 774,
                "stackSize": 64
            },
            {
                "displayName": "Purple Concrete Powder",
                "name": "purple_concrete_powder",
                "id": 775,
                "stackSize": 64
            },
            {
                "displayName": "Purple Dye",
                "name": "purple_dye",
                "id": 776,
                "stackSize": 64
            },
            {
                "displayName": "Purple Glazed Terracotta",
                "name": "purple_glazed_terracotta",
                "id": 777,
                "stackSize": 64
            },
            {
                "displayName": "Purple Shulker Box",
                "name": "purple_shulker_box",
                "id": 778,
                "stackSize": 64
            },
            {
                "displayName": "Purple Stained Glass",
                "name": "purple_stained_glass",
                "id": 779,
                "stackSize": 64
            },
            {
                "displayName": "Purple Stained Glass Pane Top",
                "name": "purple_stained_glass_pane_top",
                "id": 780,
                "stackSize": 64
            },
            {
                "displayName": "Purple Terracotta",
                "name": "purple_terracotta",
                "id": 781,
                "stackSize": 64
            },
            {
                "displayName": "Purple Wool",
                "name": "purple_wool",
                "id": 782,
                "stackSize": 64
            },
            {
                "displayName": "Purpur Block",
                "name": "purpur_block",
                "id": 783,
                "stackSize": 64
            },
            {
                "displayName": "Purpur Pillar",
                "name": "purpur_pillar",
                "id": 784,
                "stackSize": 64
            },
            {
                "displayName": "Purpur Pillar Top",
                "name": "purpur_pillar_top",
                "id": 785,
                "stackSize": 64
            },
            {
                "displayName": "Quartz",
                "name": "quartz",
                "id": 786,
                "stackSize": 64
            },
            {
                "displayName": "Quartz Block Bottom",
                "name": "quartz_block_bottom",
                "id": 787,
                "stackSize": 64
            },
            {
                "displayName": "Quartz Block Side",
                "name": "quartz_block_side",
                "id": 788,
                "stackSize": 64
            },
            {
                "displayName": "Quartz Block Top",
                "name": "quartz_block_top",
                "id": 789,
                "stackSize": 64
            },
            {
                "displayName": "Quartz Pillar",
                "name": "quartz_pillar",
                "id": 790,
                "stackSize": 64
            },
            {
                "displayName": "Quartz Pillar Top",
                "name": "quartz_pillar_top",
                "id": 791,
                "stackSize": 64
            },
            {
                "displayName": "Rabbit",
                "name": "rabbit",
                "id": 792,
                "stackSize": 64
            },
            {
                "displayName": "Rabbit Foot",
                "name": "rabbit_foot",
                "id": 793,
                "stackSize": 64
            },
            {
                "displayName": "Rabbit Hide",
                "name": "rabbit_hide",
                "id": 794,
                "stackSize": 64
            },
            {
                "displayName": "Rabbit Stew",
                "name": "rabbit_stew",
                "id": 795,
                "stackSize": 64
            },
            {
                "displayName": "Rail",
                "name": "rail",
                "id": 796,
                "stackSize": 64
            },
            {
                "displayName": "Rail Corner",
                "name": "rail_corner",
                "id": 797,
                "stackSize": 64
            },
            {
                "displayName": "Red Concrete",
                "name": "red_concrete",
                "id": 798,
                "stackSize": 64
            },
            {
                "displayName": "Red Concrete Powder",
                "name": "red_concrete_powder",
                "id": 799,
                "stackSize": 64
            },
            {
                "displayName": "Red Dye",
                "name": "red_dye",
                "id": 800,
                "stackSize": 64
            },
            {
                "displayName": "Red Glazed Terracotta",
                "name": "red_glazed_terracotta",
                "id": 801,
                "stackSize": 64
            },
            {
                "displayName": "Red Mushroom",
                "name": "red_mushroom",
                "id": 802,
                "stackSize": 64
            },
            {
                "displayName": "Red Mushroom Block",
                "name": "red_mushroom_block",
                "id": 803,
                "stackSize": 64
            },
            {
                "displayName": "Red Nether Bricks",
                "name": "red_nether_bricks",
                "id": 804,
                "stackSize": 64
            },
            {
                "displayName": "Red Sand",
                "name": "red_sand",
                "id": 805,
                "stackSize": 64
            },
            {
                "displayName": "Red Sandstone",
                "name": "red_sandstone",
                "id": 806,
                "stackSize": 64
            },
            {
                "displayName": "Red Sandstone Bottom",
                "name": "red_sandstone_bottom",
                "id": 807,
                "stackSize": 64
            },
            {
                "displayName": "Red Sandstone Top",
                "name": "red_sandstone_top",
                "id": 808,
                "stackSize": 64
            },
            {
                "displayName": "Red Shulker Box",
                "name": "red_shulker_box",
                "id": 809,
                "stackSize": 64
            },
            {
                "displayName": "Red Stained Glass",
                "name": "red_stained_glass",
                "id": 810,
                "stackSize": 64
            },
            {
                "displayName": "Red Stained Glass Pane Top",
                "name": "red_stained_glass_pane_top",
                "id": 811,
                "stackSize": 64
            },
            {
                "displayName": "Red Terracotta",
                "name": "red_terracotta",
                "id": 812,
                "stackSize": 64
            },
            {
                "displayName": "Red Tulip",
                "name": "red_tulip",
                "id": 813,
                "stackSize": 64
            },
            {
                "displayName": "Red Wool",
                "name": "red_wool",
                "id": 814,
                "stackSize": 64
            },
            {
                "displayName": "Redstone",
                "name": "redstone",
                "id": 815,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Block",
                "name": "redstone_block",
                "id": 816,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Dust Dot",
                "name": "redstone_dust_dot",
                "id": 817,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Dust Line0",
                "name": "redstone_dust_line0",
                "id": 818,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Dust Line1",
                "name": "redstone_dust_line1",
                "id": 819,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Dust Overlay",
                "name": "redstone_dust_overlay",
                "id": 820,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Lamp",
                "name": "redstone_lamp",
                "id": 821,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Lamp On",
                "name": "redstone_lamp_on",
                "id": 822,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Ore",
                "name": "redstone_ore",
                "id": 823,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Torch",
                "name": "redstone_torch",
                "id": 824,
                "stackSize": 64
            },
            {
                "displayName": "Redstone Torch Off",
                "name": "redstone_torch_off",
                "id": 825,
                "stackSize": 64
            },
            {
                "displayName": "Repeater",
                "name": "repeater",
                "id": 826,
                "stackSize": 64
            },
            {
                "displayName": "Repeater On",
                "name": "repeater_on",
                "id": 827,
                "stackSize": 64
            },
            {
                "displayName": "Repeating Command Block Back",
                "name": "repeating_command_block_back",
                "id": 828,
                "stackSize": 64
            },
            {
                "displayName": "Repeating Command Block Conditional",
                "name": "repeating_command_block_conditional",
                "id": 829,
                "stackSize": 64
            },
            {
                "displayName": "Repeating Command Block Front",
                "name": "repeating_command_block_front",
                "id": 830,
                "stackSize": 64
            },
            {
                "displayName": "Repeating Command Block Side",
                "name": "repeating_command_block_side",
                "id": 831,
                "stackSize": 64
            },
            {
                "displayName": "Rose Bush Bottom",
                "name": "rose_bush_bottom",
                "id": 832,
                "stackSize": 64
            },
            {
                "displayName": "Rose Bush Top",
                "name": "rose_bush_top",
                "id": 833,
                "stackSize": 64
            },
            {
                "displayName": "Rotten Flesh",
                "name": "rotten_flesh",
                "id": 834,
                "stackSize": 64
            },
            {
                "displayName": "Ruby",
                "name": "ruby",
                "id": 835,
                "stackSize": 64
            },
            {
                "displayName": "Saddle",
                "name": "saddle",
                "id": 836,
                "stackSize": 64
            },
            {
                "displayName": "Salmon",
                "name": "salmon",
                "id": 837,
                "stackSize": 64
            },
            {
                "displayName": "Salmon Bucket",
                "name": "salmon_bucket",
                "id": 838,
                "stackSize": 64
            },
            {
                "displayName": "Sand",
                "name": "sand",
                "id": 839,
                "stackSize": 64
            },
            {
                "displayName": "Sandstone",
                "name": "sandstone",
                "id": 840,
                "stackSize": 64
            },
            {
                "displayName": "Sandstone Bottom",
                "name": "sandstone_bottom",
                "id": 841,
                "stackSize": 64
            },
            {
                "displayName": "Sandstone Top",
                "name": "sandstone_top",
                "id": 842,
                "stackSize": 64
            },
            {
                "displayName": "Scaffolding Bottom",
                "name": "scaffolding_bottom",
                "id": 843,
                "stackSize": 64
            },
            {
                "displayName": "Scaffolding Side",
                "name": "scaffolding_side",
                "id": 844,
                "stackSize": 64
            },
            {
                "displayName": "Scaffolding Top",
                "name": "scaffolding_top",
                "id": 845,
                "stackSize": 64
            },
            {
                "displayName": "Scute",
                "name": "scute",
                "id": 846,
                "stackSize": 64
            },
            {
                "displayName": "Sea Lantern",
                "name": "sea_lantern",
                "id": 847,
                "stackSize": 64
            },
            {
                "displayName": "Sea Pickle",
                "name": "sea_pickle",
                "id": 848,
                "stackSize": 64
            },
            {
                "displayName": "Seagrass",
                "name": "seagrass",
                "id": 849,
                "stackSize": 64
            },
            {
                "displayName": "Shears",
                "name": "shears",
                "id": 850,
                "stackSize": 64
            },
            {
                "displayName": "Shulker Box",
                "name": "shulker_box",
                "id": 851,
                "stackSize": 64
            },
            {
                "displayName": "Shulker Shell",
                "name": "shulker_shell",
                "id": 852,
                "stackSize": 64
            },
            {
                "displayName": "Skull Banner Pattern",
                "name": "skull_banner_pattern",
                "id": 853,
                "stackSize": 64
            },
            {
                "displayName": "Slime Ball",
                "name": "slime_ball",
                "id": 854,
                "stackSize": 64
            },
            {
                "displayName": "Slime Block",
                "name": "slime_block",
                "id": 855,
                "stackSize": 64
            },
            {
                "displayName": "Smithing Table Bottom",
                "name": "smithing_table_bottom",
                "id": 856,
                "stackSize": 64
            },
            {
                "displayName": "Smithing Table Front",
                "name": "smithing_table_front",
                "id": 857,
                "stackSize": 64
            },
            {
                "displayName": "Smithing Table Side",
                "name": "smithing_table_side",
                "id": 858,
                "stackSize": 64
            },
            {
                "displayName": "Smithing Table Top",
                "name": "smithing_table_top",
                "id": 859,
                "stackSize": 64
            },
            {
                "displayName": "Smoker Bottom",
                "name": "smoker_bottom",
                "id": 860,
                "stackSize": 64
            },
            {
                "displayName": "Smoker Front",
                "name": "smoker_front",
                "id": 861,
                "stackSize": 64
            },
            {
                "displayName": "Smoker Front On",
                "name": "smoker_front_on",
                "id": 862,
                "stackSize": 64
            },
            {
                "displayName": "Smoker Side",
                "name": "smoker_side",
                "id": 863,
                "stackSize": 64
            },
            {
                "displayName": "Smoker Top",
                "name": "smoker_top",
                "id": 864,
                "stackSize": 64
            },
            {
                "displayName": "Smooth Stone",
                "name": "smooth_stone",
                "id": 865,
                "stackSize": 64
            },
            {
                "displayName": "Smooth Stone Slab Side",
                "name": "smooth_stone_slab_side",
                "id": 866,
                "stackSize": 64
            },
            {
                "displayName": "Snow",
                "name": "snow",
                "id": 867,
                "stackSize": 64
            },
            {
                "displayName": "Snowball",
                "name": "snowball",
                "id": 868,
                "stackSize": 64
            },
            {
                "displayName": "Soul Sand",
                "name": "soul_sand",
                "id": 869,
                "stackSize": 64
            },
            {
                "displayName": "Spawn Egg",
                "name": "spawn_egg",
                "id": 870,
                "stackSize": 64
            },
            {
                "displayName": "Spawn Egg Overlay",
                "name": "spawn_egg_overlay",
                "id": 871,
                "stackSize": 64
            },
            {
                "displayName": "Spawner",
                "name": "spawner",
                "id": 872,
                "stackSize": 64
            },
            {
                "displayName": "Spectral Arrow",
                "name": "spectral_arrow",
                "id": 873,
                "stackSize": 64
            },
            {
                "displayName": "Spider Eye",
                "name": "spider_eye",
                "id": 874,
                "stackSize": 64
            },
            {
                "displayName": "Splash Potion",
                "name": "splash_potion",
                "id": 875,
                "stackSize": 64
            },
            {
                "displayName": "Sponge",
                "name": "sponge",
                "id": 876,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Boat",
                "name": "spruce_boat",
                "id": 877,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Door",
                "name": "spruce_door",
                "id": 878,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Door Bottom",
                "name": "spruce_door_bottom",
                "id": 879,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Door Top",
                "name": "spruce_door_top",
                "id": 880,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Leaves",
                "name": "spruce_leaves",
                "id": 881,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Log",
                "name": "spruce_log",
                "id": 882,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Log Top",
                "name": "spruce_log_top",
                "id": 883,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Planks",
                "name": "spruce_planks",
                "id": 884,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Sapling",
                "name": "spruce_sapling",
                "id": 885,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Sign",
                "name": "spruce_sign",
                "id": 886,
                "stackSize": 64
            },
            {
                "displayName": "Spruce Trapdoor",
                "name": "spruce_trapdoor",
                "id": 887,
                "stackSize": 64
            },
            {
                "displayName": "Stick",
                "name": "stick",
                "id": 888,
                "stackSize": 64
            },
            {
                "displayName": "Stone",
                "name": "stone",
                "id": 889,
                "stackSize": 64
            },
            {
                "displayName": "Stone Axe",
                "name": "stone_axe",
                "id": 890,
                "stackSize": 64
            },
            {
                "displayName": "Stone Bricks",
                "name": "stone_bricks",
                "id": 891,
                "stackSize": 64
            },
            {
                "displayName": "Stone Hoe",
                "name": "stone_hoe",
                "id": 892,
                "stackSize": 64
            },
            {
                "displayName": "Stone Pickaxe",
                "name": "stone_pickaxe",
                "id": 893,
                "stackSize": 64
            },
            {
                "displayName": "Stone Shovel",
                "name": "stone_shovel",
                "id": 894,
                "stackSize": 64
            },
            {
                "displayName": "Stone Sword",
                "name": "stone_sword",
                "id": 895,
                "stackSize": 64
            },
            {
                "displayName": "Stonecutter Bottom",
                "name": "stonecutter_bottom",
                "id": 896,
                "stackSize": 64
            },
            {
                "displayName": "Stonecutter Saw",
                "name": "stonecutter_saw",
                "id": 897,
                "stackSize": 64
            },
            {
                "displayName": "Stonecutter Side",
                "name": "stonecutter_side",
                "id": 898,
                "stackSize": 64
            },
            {
                "displayName": "Stonecutter Top",
                "name": "stonecutter_top",
                "id": 899,
                "stackSize": 64
            },
            {
                "displayName": "String",
                "name": "string",
                "id": 900,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Acacia Log",
                "name": "stripped_acacia_log",
                "id": 901,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Acacia Log Top",
                "name": "stripped_acacia_log_top",
                "id": 902,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Birch Log",
                "name": "stripped_birch_log",
                "id": 903,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Birch Log Top",
                "name": "stripped_birch_log_top",
                "id": 904,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Dark Oak Log",
                "name": "stripped_dark_oak_log",
                "id": 905,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Dark Oak Log Top",
                "name": "stripped_dark_oak_log_top",
                "id": 906,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Jungle Log",
                "name": "stripped_jungle_log",
                "id": 907,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Jungle Log Top",
                "name": "stripped_jungle_log_top",
                "id": 908,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Oak Log",
                "name": "stripped_oak_log",
                "id": 909,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Oak Log Top",
                "name": "stripped_oak_log_top",
                "id": 910,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Spruce Log",
                "name": "stripped_spruce_log",
                "id": 911,
                "stackSize": 64
            },
            {
                "displayName": "Stripped Spruce Log Top",
                "name": "stripped_spruce_log_top",
                "id": 912,
                "stackSize": 64
            },
            {
                "displayName": "Structure Block",
                "name": "structure_block",
                "id": 913,
                "stackSize": 64
            },
            {
                "displayName": "Structure Block Corner",
                "name": "structure_block_corner",
                "id": 914,
                "stackSize": 64
            },
            {
                "displayName": "Structure Block Data",
                "name": "structure_block_data",
                "id": 915,
                "stackSize": 64
            },
            {
                "displayName": "Structure Block Load",
                "name": "structure_block_load",
                "id": 916,
                "stackSize": 64
            },
            {
                "displayName": "Structure Block Save",
                "name": "structure_block_save",
                "id": 917,
                "stackSize": 64
            },
            {
                "displayName": "Structure Void",
                "name": "structure_void",
                "id": 918,
                "stackSize": 64
            },
            {
                "displayName": "Sugar",
                "name": "sugar",
                "id": 919,
                "stackSize": 64
            },
            {
                "displayName": "Sugar Cane",
                "name": "sugar_cane",
                "id": 920,
                "stackSize": 64
            },
            {
                "displayName": "Sunflower Back",
                "name": "sunflower_back",
                "id": 921,
                "stackSize": 64
            },
            {
                "displayName": "Sunflower Bottom",
                "name": "sunflower_bottom",
                "id": 922,
                "stackSize": 64
            },
            {
                "displayName": "Sunflower Front",
                "name": "sunflower_front",
                "id": 923,
                "stackSize": 64
            },
            {
                "displayName": "Sunflower Top",
                "name": "sunflower_top",
                "id": 924,
                "stackSize": 64
            },
            {
                "displayName": "Suspicious Stew",
                "name": "suspicious_stew",
                "id": 925,
                "stackSize": 64
            },
            {
                "displayName": "Sweet Berries",
                "name": "sweet_berries",
                "id": 926,
                "stackSize": 64
            },
            {
                "displayName": "Sweet Berry Bush Stage0",
                "name": "sweet_berry_bush_stage0",
                "id": 927,
                "stackSize": 64
            },
            {
                "displayName": "Sweet Berry Bush Stage1",
                "name": "sweet_berry_bush_stage1",
                "id": 928,
                "stackSize": 64
            },
            {
                "displayName": "Sweet Berry Bush Stage2",
                "name": "sweet_berry_bush_stage2",
                "id": 929,
                "stackSize": 64
            },
            {
                "displayName": "Sweet Berry Bush Stage3",
                "name": "sweet_berry_bush_stage3",
                "id": 930,
                "stackSize": 64
            },
            {
                "displayName": "T",
                "name": "t",
                "id": 931,
                "stackSize": 64
            },
            {
                "displayName": "Tall Grass Bottom",
                "name": "tall_grass_bottom",
                "id": 932,
                "stackSize": 64
            },
            {
                "displayName": "Tall Grass Top",
                "name": "tall_grass_top",
                "id": 933,
                "stackSize": 64
            },
            {
                "displayName": "Tall Seagrass Bottom",
                "name": "tall_seagrass_bottom",
                "id": 934,
                "stackSize": 64
            },
            {
                "displayName": "Tall Seagrass Top",
                "name": "tall_seagrass_top",
                "id": 935,
                "stackSize": 64
            },
            {
                "displayName": "Terracotta",
                "name": "terracotta",
                "id": 936,
                "stackSize": 64
            },
            {
                "displayName": "Tipped Arrow Base",
                "name": "tipped_arrow_base",
                "id": 937,
                "stackSize": 64
            },
            {
                "displayName": "Tipped Arrow Head",
                "name": "tipped_arrow_head",
                "id": 938,
                "stackSize": 64
            },
            {
                "displayName": "Tnt Bottom",
                "name": "tnt_bottom",
                "id": 939,
                "stackSize": 64
            },
            {
                "displayName": "Tnt Minecart",
                "name": "tnt_minecart",
                "id": 940,
                "stackSize": 64
            },
            {
                "displayName": "Tnt Side",
                "name": "tnt_side",
                "id": 941,
                "stackSize": 64
            },
            {
                "displayName": "Tnt Top",
                "name": "tnt_top",
                "id": 942,
                "stackSize": 64
            },
            {
                "displayName": "Torch",
                "name": "torch",
                "id": 943,
                "stackSize": 64
            },
            {
                "displayName": "Totem Of Undying",
                "name": "totem_of_undying",
                "id": 944,
                "stackSize": 64
            },
            {
                "displayName": "Trident",
                "name": "trident",
                "id": 945,
                "stackSize": 64
            },
            {
                "displayName": "Tripwire",
                "name": "tripwire",
                "id": 946,
                "stackSize": 64
            },
            {
                "displayName": "Tripwire Hook",
                "name": "tripwire_hook",
                "id": 947,
                "stackSize": 64
            },
            {
                "displayName": "Tropical Fish",
                "name": "tropical_fish",
                "id": 948,
                "stackSize": 64
            },
            {
                "displayName": "Tropical Fish Bucket",
                "name": "tropical_fish_bucket",
                "id": 949,
                "stackSize": 64
            },
            {
                "displayName": "Tube Coral",
                "name": "tube_coral",
                "id": 950,
                "stackSize": 64
            },
            {
                "displayName": "Tube Coral Block",
                "name": "tube_coral_block",
                "id": 951,
                "stackSize": 64
            },
            {
                "displayName": "Tube Coral Fan",
                "name": "tube_coral_fan",
                "id": 952,
                "stackSize": 64
            },
            {
                "displayName": "Turtle Egg",
                "name": "turtle_egg",
                "id": 953,
                "stackSize": 64
            },
            {
                "displayName": "Turtle Egg Slightly Cracked",
                "name": "turtle_egg_slightly_cracked",
                "id": 954,
                "stackSize": 64
            },
            {
                "displayName": "Turtle Egg Very Cracked",
                "name": "turtle_egg_very_cracked",
                "id": 955,
                "stackSize": 64
            },
            {
                "displayName": "Turtle Helmet",
                "name": "turtle_helmet",
                "id": 956,
                "stackSize": 64
            },
            {
                "displayName": "Vine",
                "name": "vine",
                "id": 957,
                "stackSize": 64
            },
            {
                "displayName": "Water Bucket",
                "name": "water_bucket",
                "id": 958,
                "stackSize": 64
            },
            {
                "displayName": "Water Flow",
                "name": "water_flow",
                "id": 959,
                "stackSize": 64
            },
            {
                "displayName": "Water Overlay",
                "name": "water_overlay",
                "id": 960,
                "stackSize": 64
            },
            {
                "displayName": "Water Still",
                "name": "water_still",
                "id": 961,
                "stackSize": 64
            },
            {
                "displayName": "Wet Sponge",
                "name": "wet_sponge",
                "id": 962,
                "stackSize": 64
            },
            {
                "displayName": "Wheat",
                "name": "wheat",
                "id": 963,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Seeds",
                "name": "wheat_seeds",
                "id": 964,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage0",
                "name": "wheat_stage0",
                "id": 965,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage1",
                "name": "wheat_stage1",
                "id": 966,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage2",
                "name": "wheat_stage2",
                "id": 967,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage3",
                "name": "wheat_stage3",
                "id": 968,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage4",
                "name": "wheat_stage4",
                "id": 969,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage5",
                "name": "wheat_stage5",
                "id": 970,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage6",
                "name": "wheat_stage6",
                "id": 971,
                "stackSize": 64
            },
            {
                "displayName": "Wheat Stage7",
                "name": "wheat_stage7",
                "id": 972,
                "stackSize": 64
            },
            {
                "displayName": "White Concrete",
                "name": "white_concrete",
                "id": 973,
                "stackSize": 64
            },
            {
                "displayName": "White Concrete Powder",
                "name": "white_concrete_powder",
                "id": 974,
                "stackSize": 64
            },
            {
                "displayName": "White Dye",
                "name": "white_dye",
                "id": 975,
                "stackSize": 64
            },
            {
                "displayName": "White Glazed Terracotta",
                "name": "white_glazed_terracotta",
                "id": 976,
                "stackSize": 64
            },
            {
                "displayName": "White Shulker Box",
                "name": "white_shulker_box",
                "id": 977,
                "stackSize": 64
            },
            {
                "displayName": "White Stained Glass",
                "name": "white_stained_glass",
                "id": 978,
                "stackSize": 64
            },
            {
                "displayName": "White Stained Glass Pane Top",
                "name": "white_stained_glass_pane_top",
                "id": 979,
                "stackSize": 64
            },
            {
                "displayName": "White Terracotta",
                "name": "white_terracotta",
                "id": 980,
                "stackSize": 64
            },
            {
                "displayName": "White Tulip",
                "name": "white_tulip",
                "id": 981,
                "stackSize": 64
            },
            {
                "displayName": "White Wool",
                "name": "white_wool",
                "id": 982,
                "stackSize": 64
            },
            {
                "displayName": "Wither Rose",
                "name": "wither_rose",
                "id": 983,
                "stackSize": 64
            },
            {
                "displayName": "Wooden Axe",
                "name": "wooden_axe",
                "id": 984,
                "stackSize": 64
            },
            {
                "displayName": "Wooden Hoe",
                "name": "wooden_hoe",
                "id": 985,
                "stackSize": 64
            },
            {
                "displayName": "Wooden Pickaxe",
                "name": "wooden_pickaxe",
                "id": 986,
                "stackSize": 64
            },
            {
                "displayName": "Wooden Shovel",
                "name": "wooden_shovel",
                "id": 987,
                "stackSize": 64
            },
            {
                "displayName": "Wooden Sword",
                "name": "wooden_sword",
                "id": 988,
                "stackSize": 64
            },
            {
                "displayName": "Writable Book",
                "name": "writable_book",
                "id": 989,
                "stackSize": 64
            },
            {
                "displayName": "Written Book",
                "name": "written_book",
                "id": 990,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Concrete",
                "name": "yellow_concrete",
                "id": 991,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Concrete Powder",
                "name": "yellow_concrete_powder",
                "id": 992,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Dye",
                "name": "yellow_dye",
                "id": 993,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Glazed Terracotta",
                "name": "yellow_glazed_terracotta",
                "id": 994,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Shulker Box",
                "name": "yellow_shulker_box",
                "id": 995,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Stained Glass",
                "name": "yellow_stained_glass",
                "id": 996,
                "stackSize": 64
            },
            {
                "displayName": "Yellow Stained Glass Pane Top",
                "name": "yellow_stained_glass_pane_top",
                "id": 997,
                "stackSize": 64
            }
        ]';
        $table = json_decode($json, true);
        for ($i = 0; $i < count($table); $i++) {
            $faker = Faker\Factory::create();
            DB::table('items')->insert([
                'author_id' => mt_rand(1, 20),
                'item_name' => $table[$i]['displayName'],
                'description' => $faker->sentence(6,  true),
                'type' => 'misc',
                'minecraft_item_id' => 'minecraft:' . $table[$i]['name'],
                'minecraft_item_shorthand' => $table[$i]['name'],
                'price' => mt_rand(0, 1000),
                'counter' => 0,
                'view' => 0,
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
            var_dump($table[$i]);
        }
    }
}
