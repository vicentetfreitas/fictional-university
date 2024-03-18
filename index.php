<?php
function greet($name, $color)
{
    echo  "<p>Hi, my name is $name and my favorite $color is blank.</p>";
}

greet('Vicente',  'red');
greet('Freitas',  'blue');

$names = array('Vicente', 'Teixeira', 'de', 'Freitas');
$count = 1;

while($count <= 10){
    echo"<li>$count</li>";
    $count++;
}

while($count <= count($names)){
    echo"<li>Hi, my name is $names[$count]</li>";
    $count++;
}

?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<p>Hi, my name is <?php echo $names[0]; ?></p>