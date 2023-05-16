<?php 
class Movie {
    //attributi
    public $genre;
    public $duration;
    public $title;
    public $description;

    function __construct ($_genre, $_duration, $_title, $_description){
        $this->genre = $_genre;                
        $this->duration = $_duration;
        $this->title = $_title;
        $this->description = $_description;
    }
}
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
    
</body>
</html>