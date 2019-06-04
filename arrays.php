<?php 

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [ 
    "garlic bread", 
    "pasta", 
    "ceasar salad", 
    "cheese plate"
];

/*
Print every array element in a new line.
*/

echo "$food[0] <br> $food[1] <br> $food[2] <br> $food[3]";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "
<ul> 
    <li>$food[0]</li>
    <li>$food[1]</li>
    <li>$food[2]</li>
    <li>$food[3]</li>
</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "starter" => "garlic bread", 
    "mainCourse" => "pasta", 
    "side" => "ceasar salad", 
    "dessert" => "cheese plate"
    
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $food_assoc["starter"], " | starter <br>";
echo $food_assoc["mainCourse"], " | main course <br>"; 
echo $food_assoc["side"], " | side <br>";
echo $food_assoc["dessert"], " | dessert <br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
    "starter" => "garlic bread",
    "mainCourse" => "pasta", 
    "side" => "ceasar salad", 
    "dessert" => "cheese plate"
    
];

$type = [
    "starter", 
    "main course", 
    "side", 
    "dessert"
];

$origin = [
    "Italy", 
    "France", 
    "USA"
];


    
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food_assoc["starter"], " | $type[0] |  $origin[0]<br>";

echo $food_assoc["mainCourse"], " | $type[1] |  $origin[0]<br>";

echo $food_assoc["side"], " | $type[2] |  $origin[2]<br>";

echo $food_assoc["dessert"], " | $type[3] |  $origin[1]<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
*/
echo "
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>$food_assoc[starter]</td>
    <td>$type[0]</td>
    <td>$origin[0]</td>
  </tr>
  <tr>
    <td>$food_assoc[mainCourse]</td>
    <td>$type[1]</td>
    <td>$origin[0]</td>
  </tr>
   <tr>
    <td>$food_assoc[side]</td>
    <td>$type[2]</td>
    <td>$origin[2]</td>
  </tr>
   <tr>
    <td>$food_assoc[dessert]</td>
    <td>$type[2]</td>
    <td>$origin[1]</td>
  </tr>
</table>";


?>