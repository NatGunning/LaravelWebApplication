<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert(['name' => 'Rembrandt van Rijn', 'dob'=> 1606, 'dod' => 1669, 'style' => 'Dutch Golden Age', 'description' => 
        'Considered one of the greatest visual artists in the history of Western art, it is estimated that is number of surviving works amount to 300.']); 
        DB::table('artists')->insert(['name' => 'Vincent van Gogh', 'dob'=> 1853, 'dod' => 1890, 'style' => 'Post-Impressionism', 'description' => 
        "During his lifetime, only one of Van Gogh's paintings sold. After his death, his works gained widespread success, and he became an icon of the tortured artist."]); 
        DB::table('artists')->insert(['name' => 'Piete Bruegel the Elder', 'dob'=> 1525, 'dod' => 1569, 'style' => 'Renaissance', 'description' => 
        "Unlike lots of other Netherlandish art, Bruegel never painted a portrait. He was a formative influence on Dutch Gold Age era art."]); 
        DB::table('artists')->insert(['name' => 'Johannes Vermeer ', 'dob'=> 1632, 'dod' => 1675, 'style' => 'Dutch Golden Age', 'description' => 
        "Opting to earn his living as an art deal, Vermeer painted relatively few paintings. He was recognised in Delft and The Hague during his career."]); 
        DB::table('artists')->insert(['name' => 'René Magritte', 'dob'=> 1898, 'dod' => 1967, 'style' => 'Surrealism', 'description' => 
        "A pioneer of the Surrealism art movement, Magritte's influence can be seen everywhere. The logo of Apple Corps is inspired by a 1966 painting by Magritte."]); 
        DB::table('artists')->insert(['name' => 'James Dickson Innes', 'dob'=> 1887, 'dod' => 1914, 'style' => 'Post-Impressionism', 'description' => 
        "Born in South Wales, Innes was unusual for a British artist of the time. Instead, his bold painting style garnered attention from French Post-Impressionists."]); 
        DB::table('artists')->insert(['name' => 'Jan Asselijn', 'dob'=> 1610, 'dod' => 1652, 'style' => 'Dutch Golden Age', 'description' => 
        "Asselijn was one of the first Dutch painters who introduced a fresh and clear manner of painting landscapes in the style of CLaude Lorraine, his example quickly followed by other artists."]); 
        DB::table('artists')->insert(['name' => 'Willem van Aelst', 'dob'=> 1627, 'dod' => 1683, 'style' => 'Dutch Golden Age', 'description' => 
        "One of the most prominent still-life painters of his generation, Van Aelst taught Rachel Ruysch, Maria van Oosterwijck, and Ernst Stuven."]); 
        DB::table('artists')->insert(['name' => 'Henriëtte Ronner-Knip', 'dob'=> 1821, 'dod' => 1909, 'style' => 'Romanticism', 'description' => 
        "Hailing from a family of artists, she recieved painting lessons from her father, Joseph August Knip."]); 
        DB::table('artists')->insert(['name' => 'Max Ernst', 'dob'=> 1891, 'dod' => 1976, 'style' => 'Surrealism', 'description' => 
        "Ernst served as a soldier for 4 years during World War 1, making him critical of the modern world. During World War 2, he was desired an 'undesirable foreigner', escaping from arrest and fleeing to America."]); 
    }
}