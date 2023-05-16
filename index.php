<?php 
class Movie {
    //attributi
    public $genre;
    public $duration;
    public $title;
    public $description;

    //costruttore
    function __construct ($_genre, $_duration, $_title, $_description){
        $this->genre = $_genre;                
        $this->duration = $_duration;
        $this->title = $_title;
        $this->description = $_description;
    }

    //methods
    public function moviePrint(){
        echo 'titolo:' . $this->title . "<br>";
        echo 'durata:' . $this->duration . "<br>";
        echo 'descrizione:' . $this->description . "<br>";
        echo 'generi:' . $this->genre . "<br>";
    }

}

$first_movie = new Movie("comico", "80 min", "Una Notte Da Leoni", "un gruppo di ragazzi ormai alle prese con l'età adulta passeranno un addio al nubilato speciale.");

$second_movie = new Movie("horror", "80 min", "Non Aprite quella Porta", "uno che sta poco bene mentalmente avendo la famiglia altrettanto malata ora si diletta a scassare la gente e rubargli la faccia")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>primo film</h2>
    <?php $first_movie->moviePrint() ?>

    <h2>secondo film</h2>
    <?php $second_movie->moviePrint() ?>
</body>
</html>