<?php

require_once("vendor/autoload.php");

$faker = Faker\Factory::create('en_PH');

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Birthdate</th><th>Job Title</th></tr>";

for ($i = 0; $i <= 5; $i++) {
    echo "<tr>";
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . $faker->email . "</td>";
    echo "<td>" . $faker->numerify('+63 9## ### ####') . "</td>";
    echo "<td>" . $faker->address . ', ' . $faker->city . ', ' . $faker->state . ','."Philippines" ."</td>";
    echo "<td>" . $faker->date($format = 'Y-m-d', $max = '2001-12-31') . "</td>";
    echo "<td>" . $faker->jobTitle . "</td>";
    echo "</tr>";
}

echo "</table>";

?>