<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $games = [
            "The Legend of Zelda: Breath of the Wild",
            "Super Mario Odyssey",
            "Minecraft",
            "Fortnite",
            "Red Dead Redemption 2",
            "The Witcher 3: Wild Hunt",
            "God of War",
            "Grand Theft Auto V",
            "Among Us",
            "Apex Legends",
            "Overwatch",
            "Dark Souls III",
            "Call of Duty: Warzone",
            "Cyberpunk 2077",
            "Animal Crossing: New Horizons",
            "Fall Guys",
            "Valorant",
            "Hades",
            "Hollow Knight",
            "Stardew Valley",
            "Celeste",
            "Cuphead",
            "Resident Evil 2",
            "Monster Hunter: World",
            "League of Legends",
            "Dota 2",
            "Counter-Strike: Global Offensive",
            "Half-Life: Alyx",
            "Sekiro: Shadows Die Twice",
            "Persona 5",
            "Bloodborne",
            "FIFA 21",
            "NBA 2K21",
            "Madden NFL 21",
            "Rocket League",
            "Terraria",
            "The Elder Scrolls V: Skyrim",
            "Destiny 2",
            "Genshin Impact",
            "Final Fantasy VII Remake",
            "Ghost of Tsushima",
            "The Last of Us Part II",
            "Horizon Zero Dawn",
            "Nioh 2",
            "Assassin's Creed Valhalla",
            "Demon's Souls",
            "Marvel's Spider-Man: Miles Morales",
            "Ratchet & Clank: Rift Apart",
            "Returnal",
            "Death Stranding",
            "Borderlands 3",
            "DOOM Eternal",
            "Control",
            "Metro Exodus",
            "The Outer Worlds",
            "Star Wars Jedi: Fallen Order",
            "Crash Bandicoot 4: It's About Time",
            "Tony Hawk's Pro Skater 1 + 2",
            "Ori and the Will of the Wisps",
            "Hollow Knight: Silksong",
            "Splatoon 2",
            "Super Smash Bros. Ultimate",
            "Fire Emblem: Three Houses",
            "Xenoblade Chronicles 2",
            "Luigi's Mansion 3",
            "Mario Kart 8 Deluxe",
            "Pokémon Sword and Shield",
            "Yakuza: Like a Dragon",
            "Hitman 3",
            "Dishonored 2",
            "Prey",
            "Control",
            "Deathloop",
            "It Takes Two",
            "A Way Out",
            "Little Nightmares II",
            "Ghostrunner",
            "Neon Abyss",
            "Risk of Rain 2",
            "Satisfactory",
            "Factorio",
            "Baldur's Gate III",
            "Disco Elysium",
            "Divinity: Original Sin 2",
            "Path of Exile",
            "Grim Dawn",
            "Diablo III",
            "Minecraft Dungeons",
            "Torchlight III",
            "Phasmophobia",
            "The Forest",
            "Subnautica",
            "Rust",
            "ARK: Survival Evolved",
            "DayZ",
            "7 Days to Die",
            "Raft",
            "Green Hell",
            "Grounded",
            "Don't Starve",
            "Astroneer",
            "No Man's Sky",
            "Elite Dangerous",
            "Star Citizen"
        ];
        return [
            "name" => $games[array_rand($games)],
            "price" => 1,
            "release_year" => $this->faker->numberBetween(1920, 2020)
        ];
    }
}
