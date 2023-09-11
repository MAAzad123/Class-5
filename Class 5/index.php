<?php
// $title = "<h1> Hello World </h1>";
// echo $title;
// $title = "<script> Hello World </script>";

// echo htmlentities ($title);
// $azad = htmlspecialchars ($title);
// echo $azad;
// $azad = "Baby tomak dekiye dibo ami programmer hoye";
// echo str_repeat ($azad." ", 5);
// print_r (explode(" ", $azad));
// echo '<pre>';
// print_r (explode(" ", $azad));
// echo '</pre>';
// $azad = "My cute bow.png";
// echo '<pre>';
// print_r (explode(".", $azad));

// $azad = "My cute bow.png";
// $azad = "My cute bow.png.txt.html.css";
// $baby = explode (".", $azad);
// echo '<pre>';
// print_r ($baby);
// echo '</pre>';
// if($baby[1] == 'png'){
//     echo "cap niyo na chobi upload daw";
// }else {
//     echo "notich deko ki likha ace";
// }
// $habu = ['a', 'b', 'c'];
// echo end ($habu);

// $azad = "My cute bow.png";
// $azad = "My cute bow.png.txt.html.css";
// $baby = explode (".", $azad);
// echo '<pre>';
// print_r ($baby);
// echo '</pre>';
// if (end ($baby) == 'png'){
//     echo "cap niyo na chobi upload daw";
// }else {
//     echo "notich deko ki likha ace";
// }

$youtube = "https://i.ytimg.com/vi/Flc_QiqzXT4/hq720.jpg";
$sawyoutube = explode(".", $youtube);
echo '<pre>';
print_r ($youtube);
echo '</pre>';
if (end ($sawyoutube)=='jpg'){
    echo '<a href = "https://youtu.be/Flc_QiqzXT4?si=awgYhKbjc2-GP-Bg"> Vedio deko </a>';
} else {
    echo '<a href = "https://i.ytimg.com/vi/Flc_QiqzXT4/hq720.jpg"> Image deko </a>';
}
?>
<input type="file">



