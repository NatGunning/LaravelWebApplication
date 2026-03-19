<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaintingSeeder extends Seeder
{
    // Run the database seeds, inserting data into the table
    public function run()
    {
        DB::table('paintings')->insert(['title' => 'The Night Watch', 'year' => 1642, 'style' => 'Baroque', 'image' => 'The_Night_Watch.png', 'description' =>
        'The Night Watch depicts a group portrait of a civic guard company, led by Captain Frans Banninck Cocq, who commissioned the piece, and his lieutenant, Willem van Ruytenburch.', 'artist_id' => 1]);
        DB::table('paintings')->insert(['title' => 'Sunflowers', 'year' => 1887, 'style' => 'Post-Impressionism', 'image' => 'Sunflowers.png', 'description' => 
        'Sunflowers is actually the title of two series of still life paintings. Van Gogh believed both sets were linked by the name of his firend Paul Gauguin, who who acquired two of the Paris versions.', 'artist_id' => 2]);
        DB::table('paintings')->insert(['title' => 'The Hunters in the Snow', 'year' => 1565, 'style' => 'Renaissance', 'image' => 'The_Hunters_in_the_Snow.png', 'description' => 
        'Brueghel was known as the "Peasant artist" for depicting scenes from common peasant life. In the scene there is a stark contrast between the seemingly unsuccessful hunters and the people on the ice,', 'artist_id' => 3]);
        DB::table('paintings')->insert(['title' => 'The Starry Night', 'year' => 1889, 'style' => 'Post-Impressionism', 'image' => 'The_Starry_Night.png', 'description' => 
        'Van Gogh admitted himself into Saint-Paul-de-Mausole asylum on 8 May 1889. The view from his room inspired this piece, with the addition of an imaginary village.', 'artist_id' => 2]);
        DB::table('paintings')->insert(['title' => 'Girl with a Pearl Earring', 'year' => 1665, 'style' => 'Dutch Golden Age', 'image' => 'Girl_with_a_Pearl_Earring.png', 'description' => 
        'The identity of the subject in the painting has been hotly debated, and it unknown if she really existed. The painting has been on display at the Mauritshuis in The Hague since 1902.', 'artist_id' => 4]);
        DB::table('paintings')->insert(['title' => 'Golconda', 'year' => 1953, 'style' => 'Surrealism', 'image' => 'Golconda.png', 'description' => 
        'Golconda was inspired by photographs of soldiers parachuting during World War 1. The bowler hat is a common feature in Magrittes work.', 'artist_id' => 5]);
        DB::table('paintings')->insert(['title' => 'The False Mirror', 'year' => 1928, 'style' => 'Surrealism', 'image' => 'The_False_Mirror.png', 'description' => 
        'Three versions of this painting exist: one is currently in the Museum of Modern Art, New York, another is in a private collection, and a third version was sold at auction in 2010 for £373,250.', 'artist_id' => 5]);
        DB::table('paintings')->insert(['title' => 'Landscape with a Figure, Arenig', 'year' => 1911, 'style' => 'Post-Impressionism', 'image' => 'Landscape_with_a_Figure,_Arenig.png', 'description' => 
        'Innes discovered Arenig in 1910 and painted it repeatedly.', 'artist_id' => 6]);
        DB::table('paintings')->insert(['title' => 'The Threatened Swan', 'year' => 1650, 'style' => 'Dutch Golden Age', 'image' => 'The_Threatened_Swan.png', 'description' => 
        'The Threatened Swan is believed to be a allegory of the grand pensionary Johan de Witt protecting the counrty from its enemies. It was deemed to be of national importance and saved from being exported to the Louvre.', 'artist_id' => 7]);
        DB::table('paintings')->insert(['title' => 'Flower still life with a watch', 'year' => 1663, 'style' => 'Dutch Golden Age', 'image' => 'Flower_still_life_with_a_watch.png', 'description' => 
        'The still life eas painted in Amsterdam after Van Aelst had recently returned from Italy. It was originally signed under the name Guillelmo.', 'artist_id' => 8]);
        DB::table('paintings')->insert(['title' => 'Cat at Play', 'year' => 1860, 'style' => 'Romanticism', 'image' => 'Cat_at_Play.png', 'description' => 
        'Ronner was considered one of the most successful Dutch artists of her time, with her love of cats shining through her works.', 'artist_id' => 9]);
        DB::table('paintings')->insert(['title' => 'The Triumph of Surrealism', 'year' => 1938, 'style' => 'Surrealism', 'image' => 'The_Triumph_Of_Surrealism.png', 'description' =>  
        'Originally titled The Angel of Hearth and Home,  it was painted after the defeat of the Spanish Republicans in the Spanish Civil War, depicting the chaos of fascism spreading  over Europe.', 'artist_id' => 10]); 
        DB::table('paintings')->insert(['title' => 'Ubu Imperator', 'year' => 1923, 'style' => 'Surrealism', 'image' => 'Ubu_Imperator.png', 'description' =>  
        'Ubu Imperator displays multiple symbols of authority contrasted with the spinning top, showing the instability at the root of all authority.', 'artist_id' => 10]); 
        DB::table('paintings')->insert(['title' => 'The Son of Man', 'year' => 1946, 'style' => 'Surrealism', 'image' => 'The_Son_Of_Man.png', 'description' =>  
        'Magritte painted The Son of Man as a self-portait. Magritte comments: “There is an interest in that which is hidden and which the visible does not show us.”', 'artist_id' => 5]); 
        DB::table('paintings')->insert(['title' => 'The Mysteries of the Horizon', 'year' => 1928, 'style' => 'Surrealism', 'image' => 'The_Mysteries_Of_The_Horizon.png', 'description' =>  
        'A number of Magrittes works feature men in bowler hats, represented as having undefined or identical personalities.', 'artist_id' => 5]); 
        DB::table('paintings')->insert(['title' => 'The Blank Signature', 'year' => 1965, 'style' => 'Surrealism', 'image' => 'The_Blank_Signature.png', 'description' =>  
        'The painting uses a technique similar to the impossible trident, a type of optical illusion.', 'artist_id' => 5]); 
    }
}