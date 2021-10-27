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

$harry_potter1 = new Movie("Harry Potter e la pietra filosofale", "2001", "fantasy", "UK");
$harry_potter2 = new Movie("Harry Potter e la camera dei segreti", "2002", "fantasy", "UK");
$inception = new Movie("Inception" , "2010" , "action", "USA");


echo $harry_potter1->get_title();
echo $harry_potter1->get_country();
echo $harry_potter1->get_year();
echo $harry_potter1->get_genre();

?>
