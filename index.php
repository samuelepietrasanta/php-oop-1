<?php 

//*CREO LA CLASSE


class Movie{
    public $title;
    public $year;
    public $genre;
    public $country;


//? CREO IL CONSTRUCT PER 'COSTRUIRE' UNA NUOVA ISTANZA
    /**
     * costruisci un nuovo film inserendo titolo anno genere e paese
     * 
     * 
     */
    function __construct($title,$year,$genre,$country) {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->country = $country;

    }


//#SETTER E GETTER
    function set_title($_title){
        $this->title = $_title;
    }

    function get_title(){
        return $this->title;
    }

    function set_year($_year){
        $this->year = $_year;
    }

    function get_year(){
        return $this->year;
    }
    
    function set_genre($_genre){
        $this->genre = $_genre;
    }

    function get_genre(){
        return $this->genre;
    }


    function set_coutry($_country){
        $this->country = $_country;
    }

    function get_country(){
        return $this->country;
    }


}


//!LA LISTA DELLE NUOVE ISTANZE
$tutti_i_film  = [
    new Movie("Harry Potter e la pietra filosofale", "2001", "fantasy", "UK"),
    new Movie("Harry Potter e la camera dei segreti", "2002", "fantasy", "UK"),
    new Movie("Inception" , "2010" , "action", "USA")
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMS</title>
</head>
<body>
    
    <?php foreach ($tutti_i_film as $film){?>
    
    <h1><?= $film->get_title(); ?></h1>
    <p><?= $film->get_year();?>
    </p>

    <?php }?>
    



</body>
</html>