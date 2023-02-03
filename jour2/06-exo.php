<?php

// créer une fonction getMyAddress
// elle ne prend pas de paramètre
// elle contient les instructions suivantes

// rue = 75 rue de Paris
// cp 75000
// ville= "Paris"
// afficher dans le navigateur le phrase suivante:
// Alain DOE habite au 75 rue de Paris 75000 Paris près de la tour Eiffel

function getMyAddress(){
    $rue = "75 rue de Paris";
    $cp = "75000";
    $ville = "Paris";
    $address = " $rue $cp $ville ";
    echo"<p>Alain DOE habite au $address près de la tour Eiffel.</p>";
}
getMyAddress();

