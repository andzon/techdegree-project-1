<?php
// PHP - Random Quote Generator
// $quotes is the multidimential array that contains 6 associative arrays.
// Added additional item 'tag' into the inner quote element, going for "Exceeds Expectations" grade.

$quotes[] = [
        'quote' => 'Appear weak when you are strong, and strong when you are weak.',
        'source' => 'Sun Tzu',
        'citation' => 'The Art of War',
        'year' => '2005',
        'tags' => 'Life'
];

$quotes[] = [
        'quote' => 'Life is 10% what happens to us and 90% how we react to it.',
        'source' => 'Charles R. Swindoll',
        'citation' => 'The Grace Awakening',
        'year' => '2006',
        'tags' => 'Attitude'
];

$quotes[] = [
        'quote' => 'Every saint has a past, and every sinner has a future',
        'source' => 'Scar Wilde',
        'citation' => 'wisdomquotes.com',
        'year' => '2019',
        'tags' => 'Attitude'

];

$quotes[] = [
        'quote' => 'The more I read, the more I acquire, the more certain I am that I know nothing.',
        'source' => 'Voltaire',
        'citation' => 'keepinspiring.me',
        'year' => '2019',
        'tags' => 'Attitude'

];

$quotes[] = [
        'quote' => 'We shall see but a little way if we require to understand what we see.',
        'source' => 'Henry David Thoreau',
        'citation' => 'wiseoldsayings.com',
        'year' =>  '2019',
        'tags' => 'Attitude'

];

$quotes[] = [
        'quote' => 'Most of the important things in the world have been accomplished by people who have kept on trying when there seemed to be no hope at all.',
        'source' => 'Dale Carnegie',
        'citation' => ' Permission to Play',
        'year' =>  '2003',
        'tags' => 'Attitude'

];

// Create the getRandomQuuote function and name it getRandomQuote

function getRandomQuote() {
  global $quotes;
  $random_number = rand(0,5);
  return $quotes[$random_number];
}


// Create the printQuote funtion and name it printQuote

function printQuote() {
  $random_quote = getRandomQuote();
  $html_string = "";
  $html_string .=  "<p class='quote'>" . $random_quote['quote'] . "</p>";
  $html_string .=  "<p class='source'>" . $random_quote['source'];
  if (isset($random_quote['citation'])) {
    $html_string .= "<span class='citation'>" . $random_quote['citation'] . "</span>";
  }
  if (isset($random_quote['year'])) {
    $html_string .= "<span class='year'>" . $random_quote['year'] . "</span>";
  }
  if (isset($random_quote['tags'])) {
    $html_string .= "<span class='tags'>" . $random_quote['tags'] . "</span>";
  }

  $html_string .= "</p>";
  return $html_string;
}

function GenerateRandomColor() {
  $background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');
  $random_n = rand(0,4);
  return $background_colors[$random_n];
}

function PrintRandomColor() {
  $random_colour = GenerateRandomColor();
  return $random_colour;
}
 ?>
