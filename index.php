<?php

class Movie {

    // Attributi
    public $title;
    public $director;
    public $year;
    public $abstract;
    public $price;

    // Costruttore
    function __construct ($_title, $_director, $_year, $_abstract, $_price) {
          $this->title = $_title;
          $this->director = $_director;
          $this->year = $_year;
          $this->abstract = $_abstract;
          $this->price = $_price;
    }

    // Metodi
    public function getDiscount() {
      if ($this->year < 2000) {
          $this->price = 3.50;
      }
      return $this->price;
    }

     public function getExcerpt() {
      $sub = substr($this->abstract, 0, 30);
      return $sub;
    }
}

// First movie
$sci_fi = new Movie('2001: A Space Odissey', 'Stanley Kubrick', '1968', 'After discovering a mysterious artifact buried beneath the Lunar surface, mankind sets off on a quest to find its origins with help from intelligent supercomputer H.A.L. 9000.', '5');

// var_dump($sci_fi);
echo '<h2>' . $sci_fi->title . '</h2>';
echo '<h3>' . $sci_fi->director . '</h3>';
echo '<h3>' . $sci_fi->year . '</h3>';
echo '<p>' . $sci_fi->getExcerpt() . ' ...' . '</p>';
echo '<div>Price: ' . number_format($sci_fi->getDiscount(), 2, '.', '') . '€</div>';


// Second movie
$horror = new Movie('Final Destination', 'James Wong', '2000', 'Alex Browning is among a group of high school students readying themselves for a trip to Europe. When he suddenly has a premonition their airplane will crash, he screams to warn the others but instead he is thrown off of the plane.', '5');

// var_dump($sci_fi);
echo '<h2>' . $horror->title . '</h2>';
echo '<h3>' . $horror->director . '</h3>';
echo '<h3>' . $horror->year . '</h3>';
echo '<p>' . $horror->getExcerpt() . ' ...' . '</p>';
echo '<div>Price: ' . number_format($horror->getDiscount(), 2, '.', '') . '€</div>';



// Third movie
$action = new Movie('Mad Max: Fury Road', 'George Miller', '2015', 'In a post-apocalyptic wasteland, a woman rebels against a tyrannical ruler in search for her homeland with the aid of a group of female prisoners, a psychotic worshiper, and a drifter named Max.', '5');

// var_dump($sci_fi);
echo '<h2>' . $action->title . '</h2>';
echo '<h3>' . $action->director . '</h3>';
echo '<h3>' . $action->year . '</h3>';
echo '<p>' . $action->getExcerpt() . ' ...' . '</p>';
echo '<div>Price: ' . number_format($action->getDiscount(), 2, '.', '') . '€</div>';


// Fourth movie
$drama = new Movie('Gone with the Wind', 'Victor Fleming', '1939', 'A manipulative woman and a roguish man conduct a turbulent romance during the American Civil War and Reconstruction periods.', '5');

// var_dump($sci_fi);
echo '<h2>' . $drama->title . '</h2>';
echo '<h3>' . $drama->director . '</h3>';
echo '<h3>' . $drama->year . '</h3>';
echo '<p>' . $drama->getExcerpt() . ' ...' . '</p>';
echo '<div>Price: ' . number_format($drama->getDiscount(), 2, '.', '') . '€</div>';