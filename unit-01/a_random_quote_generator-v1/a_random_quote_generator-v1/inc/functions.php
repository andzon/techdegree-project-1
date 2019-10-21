// PHP - Random Quote Generator
<?php
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes[] = [
        "quote" => "Appear weak when you are strong, and strong when you are weak.”,
        "source" => "Sun Tzu",
        "citation" => "everydaypower.com",
        "year" => "2019"

];

$quotes[] = [
        "quote" => “Life is 10% what happens to us and 90% how we react to it.”,
        "source" => "Dennis P. Kimbro",
        "citation" => "keepinspiring.me",
        "year" => "2019"

];

$quotes[] = [
        "quote" => "Every saint has a past, and every sinner has a future",
        "source" => "scar Wilde",
        "citation" => "wisdomquotes.com",
        "year" => "2019"

];

$quotes[] = [
        "quote" => "The more I read, the more I acquire, the more certain I am that I know nothing.",
        "source" => "Voltaire",
        "citation" => "keepinspiring.me",
        "year" => "2019"

];

$quotes[] = [
        "quote" => "We shall see but a little way if we require to understand what we see.",
        "source" => "Henry David Thoreau",
        "citation" => "wiseoldsayings.com",
        "year" =>  "2019"

];


// Create the getRandomQuuote function and name it getRandomQuote

function getRandomQuote($quotes) {
global $quotes;
$random_number = rand(0,4);
return $quotes[$random_number];
}


// Create the printQuote funtion and name it printQuote

function printQuote() {
$random_quote = getRandomQuote();
$html_string = "";
$html_string .=  "<p class='quote'> $random_quote["quote"] </p>";
$html_string .=  "<p class='source'> $random_quote["source"] </p>";
if (isset($random_quote["citation"])) {
    $html_string .=
}
if (isset($random_quote["year"])) {
    $html_string .=
}
}

var_dump($random_quote);


 ?>
