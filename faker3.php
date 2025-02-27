<?php

require_once("vendor/autoload.php");

$faker = Faker\Factory::create('en_PH');

echo "<table border='1'>";
echo "<tr><th>User ID</th><th>Full Name</th><th>Email Address</th><th>Username</th><th>Password</th><th>Account Created</th></tr>";

for ($i = 0; $i <= 10; $i++) {
    $email = $faker->email;
    $username = explode('@', $email)[0];
    $password = hash('sha256', $faker->password);

    echo "<tr>";
    echo "<td>" . $faker->uuid . "</td>"; 
    echo "<td>" . $faker->name . "</td>"; 
    echo "<td>" . $email . "</td>"; 
    echo "<td>" . strtolower($username) . "</td>"; 
    echo "<td>" . $password . "</td>";
    echo "<td>" . $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s') . "</td>"; 
    echo "</tr>";
}

echo "</table>";

?>