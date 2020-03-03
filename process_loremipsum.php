<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pizza Ipsum Results</title>
    <link href="https://fonts.googleapis.com/css?family=Chango&display=swap" rel="stylesheet">
  <style type="text/css">
    html, body {
        height: 100%;
    }
    * {
        align-content: center;
        font-family: 'Chango';
    }
    legend {
        font-size: 30px;
    }
    fieldset {
        display: inline-block;
        margin: 50px;
        border-color: #eff6c5;
        border-style: dashed;
        border-width: 10px; 
        padding: 10px;
        border-radius: 5px;
        background-color: #e98800;
    }
    #middle {
        float: left;
        width: 50%;
        padding: 0px;
        background-color: #7b2509;
        height: 100%;
        text-align: justify;  
    }  
    #left { 
        float: left;
        width: 25%;
        padding: 0;
        background-image: url("pizzabg.jpeg");
        height: 100%;
    }  
    #right { 
        float: right;
        width: 25%;
        padding: 0;
        background-image: url("pizzabg.jpeg");
        height: 100%;
    }   
    #select {
        font-size: 20px;
        width: 100px;
        padding: 5px;
    }
    #submit {
        font-size: 20px;
        transition-duration: 0.4s;
        padding: 5px;
        margin: 10px;
    }
    #submit:hover {
        background-color: #eff6c5;
    }
    p {
       padding: 20px;
       margin-top: 10px;     
    }
    a {
       text-decoration: none; 
       font-size: 30px;
       display: block;    
       text-align: center;
       color: #eff6c5;
    }
      
  </style>
  </head>
  <body>
  <div id="left"></div>  
  <div id="middle">  
    <fieldset>   
  	<?php  
$paragraphs = $_REQUEST['paragraphs'];
	$sentences = rand (4 , 12); //random amount of sentences per paragraph
	$words = rand (3, 9); //random amount of words per sentence
	
$pizzaWords = array('pizza', 'dough', 'pepperoni', 'Pizza Hut', 'oven', 'mozzarella', 'cheese', 'sauce', 'pineapple', 'mushrooms', 'olives', 'peppers', 'breadsticks', 'chicken wings', 'mozzarella sticks', 'Italy', 'and', 'marinara sauce', 'or', 'but', 'friends', 'party', 'a', 'an', 'by', 'into', 'from', 'brick', 'gluten-free', 'crust', 'Friday', 'Saturday', 'Sunday', 'restaurant','chef', 'ham', 'sausage', 'hot sauce', 'pan', 'slice', 'I', 'you', 'he', 'she', 'we', 'they', 'them', 'it', 'his', 'hers', 'there', 'their', 'can', 'go', 'eat', 'eating', 'ate', 'may', 'way', 'look', 'be', 'cheesy', 'saucy', 'savory', 'spicy', 'crispy', 'aroma', 'basil', 'deep dish', 'thin crust', 'brooklyn', 'margherita', 'garlic', 'garlic bread', 'onion', 'bacon', 'Canadian bacon', 'Sprite', 'beer', 'Coke', 'wine', 'cheesy breadsticks', 'Dominos', 'Little Caesars', 'by the slice', 'Sbarro', 'California Pizza Kitchen', 'Roundtable Pizza', 'delivery', 'DiGiorno', 'Italian', 'olive oil', 'yummy', 'scrumptious', 'amazing', 'chewy', 'gooey', 'reservation', 'date night', 'birthday party', 'celebration', 'graduation', 'wedding reception', 'pizza on a bagel', 'Hot Pockets', 'calzone', 'vegetarian');

function generateSentence($pizzaWords) {
  
  $totalWords = count($pizzaWords);
  $randIndex = (rand (0, $totalWords-1)); 
  
  echo ucfirst($pizzaWords[$randIndex]); //First word capitalized
	for ($count = 0; $count < $words = rand(3, 9); $count++ ) {
    $randIndex = (rand (0, $totalWords-1)); 
    echo ' ' . $pizzaWords[$randIndex];
  }
  echo '. ';
}
generateSentence($pizzaWords);

function generateParagraph($pizzaWords) {
  for ($count = 0; $count < $sentences = rand(4, 12); $count++){
    generateSentence($pizzaWords);
  }
}
generateParagraph($pizzaWords);	

function generatePage($paragraphs, $pizzaWords) {
  for ($count = 0; $count < $paragraphs; $count++) {
    generateParagraph($pizzaWords);
    echo "<p></p>";
  }
}
generatePage($paragraphs, $pizzaWords);

?>
 </fieldset> 
<a href="loremipsum.html">Reset</a>
  </div>  
  <div id="right"></div>  
        
  	</body>
  	</html>