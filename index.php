<?php

    require_once "user.php";    
    require_once "product.php";    
    require_once "user.php";    
    require_once "creditCard.php";    

    //Dichiaro degli utenti

    $user1 = new User (1, "Giovanni", "Rossi", 34);
    $user2 = new User (2, "Mario", "Verdi", 49);
    $user3 = new UserPremium(3, "Francesco", "Neri", 50);

    var_dump($user1);
    var_dump($user2);
    var_dump($user3);

    //Dichiaro dei prodotti

    $product1 = new Product(1, "notebook" , "lorem ipsum" , 799, "tech");
    $product2 = new Product(2, "chair" , "lorem ipsum doc" , 100, "home");

    var_dump($product1);
    var_dump($product2);


