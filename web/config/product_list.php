<?php
include_once "objects/product.php";

$product_list = 
array(    
    "1" => new Product("1", "Snake Oil", 40.00, "Amazing remedy for every possible ailment, weakness, complex, or general malaise.", "Medicine", ""),
    "2" => new Product("2", "Pig in a Poke", 79.99, "A healthy, strong pig in a bag. We promise! Sorry, no pictures of the pig available. We don't want him to get out if we open the bag.", "Misc", ""),
    "3" => new Product("3", "Florida Timeshare", 120.00, "A great opportunity to own a timeshare in a popular vacation spot for an incredibly low price!", "Leisure", ""),
    "4" => new Product("4", "London Bridge", 1100.00, "A once-in-a-lifetime opportunity to buy an iconic piece of architecture. Don't miss out!", "Home Decor", ""),                   
)
?>