<?php

require_once("vendor/autoload.php");

$faker = Faker\Factory::create('en_PH');


echo "<table border='1'>";
echo "<tr><th>Title</th><th>Author</th><th>Genre</th><th>Publication Year</th><th>ISBN</th><th>Summary</th></tr>";

for ($i = 0; $i <= 15; $i++) {
    echo "<tr>";
    echo "<td>" . $faker->words(3, true) . "</td>";
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . $faker->randomElement(['Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Thriller', 'Historical', 'Horror']) . "</td>";
    echo "<td>" . $faker->numberBetween(1900, 2024) . "</td>";
    echo "<td>" . $faker->isbn13 . "</td>";
    echo "<td>" . $faker->paragraph . "</td>";
}

echo "</table>";

?>