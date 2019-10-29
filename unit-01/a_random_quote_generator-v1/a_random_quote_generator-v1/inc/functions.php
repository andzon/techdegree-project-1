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
        'quote' => 'If you tell the truth, you don\'t have to remember anything.',
        'source' => 'Mark Twain',
        'citation' => 'goodreads.com',
        'tags' => 'Truth'

];

$quotes[] = [
        'quote' => 'The more I read, the more I acquire, the more certain I am that I know nothing.',
        'source' => 'Voltaire',
        'citation' => 'goodreads.com',
        'tags' => 'Wisdom'

];

$quotes[] = [
        'quote' => 'Be yourself; everyone else is already taken',
        'source' => 'Oscar Wilde',
        'citation' => 'goodreads.com',
        'tags' => 'Inspirational'

];

$quotes[] = [
        'quote' => 'Most of the important things in the world have been accomplished by people who have kept on trying when there seemed to be no hope at all.',
        'source' => 'Dale Carnegie',
        'citation' => ' Permission to Play',
        'year' =>  '2003',
        'tags' => 'Perseverance'

];

// This functions generate random number between 0 to 5 and then it will assign to $random_number
// It also make $quotes global so it will apply outside this function
// End it with a return to return the $quotes based on $random_number

function getRandomQuote() {
  global $quotes;
  $random_number = rand(0,5);
  return $quotes[$random_number];
}


// This function is to print the quotes to the front and calls the getRandomQuote function
// html_string to put them in a proper structure to display properly to the front
// If statement for any quotes that have "year", "citation" and "tags" in the quotes

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

//This function is to generate random colours and to change colours randomly everytime the background refresh

function GenerateRandomColor() {
  $background_colors = array('#34495e', '#d35400', '#16a085', '#f39c12', '#7f8c8d', '#2980b9');
  $random_n = rand(0,5);
  return $background_colors[$random_n];
}

//This function is to call the GeenrateRandomColor function and appending it in the index.php file

function PrintRandomColor() {
  $random_colour = GenerateRandomColor();
  echo $random_colour;
}
 ?>
