<?php 
function greet($name,$color) {
    echo "<p>Hi, my name is $name and $color is my fav color.</p>";
}
    greet('Neco','Blue');
    /*
    $count = 1;

    while($count <100){
        echo "<li>$count</li>";
        $count++;
    } */
    $count = 0;

    $names = array('Neco','Hasan','Turan');
    while($count < count($names)){
        echo "<li>the names are : $names[$count]</li>";
        $count++;
    }

?>

<h1><?php bloginfo('name'); ?></h1>        #site title
<p><?php bloginfo('description');?></p>  //tagline
<p>The names are  : <?php echo $names[0] ;?></p>  //arrays
<p>The names are  : <?php echo $names[1] ;?></p> 
<p>The names are  : <?php echo $names[2] ;?></p> 



