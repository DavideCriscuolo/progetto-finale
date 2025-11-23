<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                "title" => "Grand Theft Auto V",
                "editor" => "Rockstar Games",
                "classification" => "AAA",
                "plot" => "Tre protagonisti intrecciano le loro storie in una Los Santos corrotta, tra rapine, vendette e ambizione.",
                "date" => "2013-09-17",
                "price" => 19.99
            ],
            [
                "title" => "The Witcher 3: Wild Hunt",
                "editor" => "CD Projekt",
                "classification" => "AAA",
                "plot" => "Geralt di Rivia cerca Ciri tra guerre e creature mostruose in un mondo oscuro e ricco di scelte morali.",
                "date" => "2015-05-19",
                "price" => 29.99
            ],
            [
                "title" => "Red Dead Redemption 2",
                "editor" => "Rockstar Games",
                "classification" => "AAA",
                "plot" => "Arthur Morgan lotta per la sopravvivenza della sua banda mentre l'era del Far West volge al termine.",
                "date" => "2018-10-26",
                "price" => 49.99
            ],
            [
                "title" => "Elden Ring",
                "editor" => "Bandai Namco Entertainment",
                "classification" => "AAA",
                "plot" => "Un mondo fantasy oscuro creato con la collaborazione di George R. R. Martin: esplorazione, boss titanici e libertà di approccio.",
                "date" => "2022-02-25",
                "price" => 59.99
            ],
            [
                "title" => "Minecraft",
                "editor" => "Mojang Studios",
                "classification" => "AA",
                "plot" => "Gioco sandbox dove costruire, esplorare e sopravvivere in mondi generati proceduralmente con infinite possibilità.",
                "date" => "2011-11-18",
                "price" => 26.99
            ],
            [
                "title" => "The Elder Scrolls V: Skyrim",
                "editor" => "Bethesda Softworks",
                "classification" => "AAA",
                "plot" => "Il Dovahkiin affronta draghi e antiche profezie in una vasta provincia nordica ricca di missioni e segreti.",
                "date" => "2011-11-11",
                "price" => 19.99
            ],
            [
                "title" => "Cyberpunk 2077",
                "editor" => "CD Projekt",
                "classification" => "AAA",
                "plot" => "Night City: corruzione, impianti cibernetici e scelte dure in un'avventura action-RPG futuristica.",
                "date" => "2020-12-10",
                "price" => 39.99
            ],
            [
                "title" => "God of War (2018)",
                "editor" => "Sony Interactive Entertainment",
                "classification" => "AAA",
                "plot" => "Kratos e suo figlio Atreus intraprendono un viaggio emotivo tra divinità norrene e sfide interiori.",
                "date" => "2018-04-20",
                "price" => 29.99
            ],
            [
                "title" => "Horizon Zero Dawn",
                "editor" => "Sony Interactive Entertainment",
                "classification" => "AAA",
                "plot" => "Aloy, cacciatrice in un futuro post-apocalittico, affronta macchine e misteri del passato umano.",
                "date" => "2017-02-28",
                "price" => 24.99
            ],
            [
                "title" => "Assassin's Creed Valhalla",
                "editor" => "Ubisoft",
                "classification" => "AAA",
                "plot" => "Vichinghi, conquiste e insediamenti: vivi la saga di un guerriero che cerca gloria in terra straniera.",
                "date" => "2020-11-10",
                "price" => 49.99
            ],
            [
                "title" => "Dark Souls III",
                "editor" => "Bandai Namco Entertainment",
                "classification" => "AAA",
                "plot" => "Mondi ostili e boss memorabili: sfida la morte e scopri la lore in un action-RPG punitivo.",
                "date" => "2016-03-24",
                "price" => 24.99
            ],
            [
                "title" => "FIFA 23",
                "editor" => "Electronic Arts",
                "classification" => "AA",
                "plot" => "Calcio simulativo con licenze ufficiali, modalità carriera e aggiornamenti delle squadre reali.",
                "date" => "2022-09-30",
                "price" => 49.99
            ],
            [
                "title" => "Fortnite",
                "editor" => "Epic Games",
                "classification" => "AA",
                "plot" => "Battle royale popolare con costruzione rapida, eventi live e una scena competitiva vivace.",
                "date" => "2017-07-21",
                "price" => 0.00
            ],
            [
                "title" => "Apex Legends",
                "editor" => "Electronic Arts / Respawn Entertainment",
                "classification" => "AA",
                "plot" => "Hero shooter battle royale con squadre da tre, abilità uniche e azione frenetica.",
                "date" => "2019-02-04",
                "price" => 0.00
            ],
            [
                "title" => "The Last of Us Part II",
                "editor" => "Sony Interactive Entertainment",
                "classification" => "AAA",
                "plot" => "Storia intensa di vendetta e sopravvivenza in un'America post-pandemica, con protagonisti complessi.",
                "date" => "2020-06-19",
                "price" => 39.99
            ],
            [
                "title" => "Call of Duty: Modern Warfare (2019)",
                "editor" => "Activision",
                "classification" => "AAA",
                "plot" => "Shooter militare moderno con campagna cinematografica e modalità multiplayer ad alta intensità.",
                "date" => "2019-10-25",
                "price" => 39.99
            ],
            [
                "title" => "Resident Evil 2 (Remake)",
                "editor" => "Capcom",
                "classification" => "AA",
                "plot" => "Rifacimento survival-horror con grafica moderna, tensione e enigmi, ambientato a Raccoon City.",
                "date" => "2019-01-25",
                "price" => 29.99
            ],
            [
                "title" => "Monster Hunter: World",
                "editor" => "Capcom",
                "classification" => "AA",
                "plot" => "Caccia colossali creature in ambientazioni vaste, migliora il tuo equipaggiamento e coop online.",
                "date" => "2018-01-26",
                "price" => 29.99
            ],
            [
                "title" => "Fall Guys: Ultimate Knockout",
                "editor" => "Mediatonic / Epic Games",
                "classification" => "AA",
                "plot" => "Party game frenetico dove sopravvivere a minigiochi e ostacoli in una gara caotica e divertente.",
                "date" => "2020-08-04",
                "price" => 9.99
            ],
            [
                "title" => "Sekiro: Shadows Die Twice",
                "editor" => "Activision",
                "classification" => "AA",
                "plot" => "Action game impegnativo ambientato nel Giappone feudale, con combattimenti basati su tempismo e parry.",
                "date" => "2019-03-22",
                "price" => 39.99
            ],
            [
                "title" => "DOOM Eternal",
                "editor" => "Bethesda Softworks",
                "classification" => "AA",
                "plot" => "Spara freneticamente contro orde demoniache in un id-tech shooter veloce e violento.",
                "date" => "2020-03-20",
                "price" => 29.99
            ],
            [
                "title" => "Borderlands 3",
                "editor" => "2K / Gearbox Software",
                "classification" => "AA",
                "plot" => "Spara e saccheggia in un mondo colorato, pieno di armi folli e personaggi irriverenti.",
                "date" => "2019-09-13",
                "price" => 39.99
            ],
            [
                "title" => "Stardew Valley",
                "editor" => "ConcernedApe / Chucklefish",
                "classification" => "AA",
                "plot" => "Simulatore di fattoria rilassante: coltiva, allevi, pesca e crea relazioni con gli abitanti del villaggio.",
                "date" => "2016-02-26",
                "price" => 14.99
            ],
            [
                "title" => "Marvel's Spider-Man",
                "editor" => "Sony Interactive Entertainment / Insomniac Games",
                "classification" => "AA",
                "plot" => "Interpreta Peter Parker in un'avventura open world tra acrobazie, nemici iconici e una trama emotiva.",
                "date" => "2018-09-07",
                "price" => 29.99
            ]
        ];


        foreach ($games as $game) {

            $newGame = new Game();

            $newGame->title = $game["title"];
            $newGame->editor = $game["editor"];
            $newGame->classification = $game["classification"];
            $newGame->plot = $game["plot"];
            $newGame->date = $game["date"];
            $newGame->price = $game["price"];
            $newGame->save();
        }
    }
}
