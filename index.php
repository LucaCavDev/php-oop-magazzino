<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cavicchioli php oop magazzino</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="#">

</head>
<body>


  <!--

    GOAL:

    Definire la classe Magazzino e la classe Prodotto nel seguente modo:

    Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori

    Prodotto: definire gli attributi per nome, peso e prezzo

    Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti

  -->

  <div class="container">
    <h2>
      <?php
        // MAGAZZINO -----------------------------------------------------------------------
        class Magazzino {

          public $name;
          public $location;
          public $prodotti;

          public function __construct($name, $location) {

            $this-> name = $name;
            $this-> location = $location;

          }
        }

        $magazzino = new Magazzino("Cavicchioli Warehouse", "via Affari Miei 123/Z, Milano");
        $magazzino -> prodotti = array("spade", "coltelli", "pistole", "fucili");

        var_dump($magazzino);

        // PRODOTTO -----------------------------------------------------------------------

        class Prodotto {

          public $name;
          public $weight;
          public $price;

          public function __construct($name) {

            $this-> name = $name;

          }

        }



        $prodotto = new Prodotto("spada di fuoco");
        $prodotto -> weight = "4 kg";
        $prodotto -> price = "20 euri";

        var_dump($prodotto);

        //aggiungo altri prodotti

        $prodotto1 = new Prodotto("coltello del malandrino");
        $prodotto1 -> weight = "1 kg";
        $prodotto1 -> price = "10 euri";
        var_dump($prodotto1);
        //
        $prodotto2 = new Prodotto("pistola ad acqua");
        $prodotto2 -> weight = "2 kg";
        $prodotto2 -> price = "50 euri";
        var_dump($prodotto2);
        //
        $prodotto3 = new Prodotto("fucile da pasticciere");
        $prodotto3 -> weight = "1 kg";
        $prodotto3 -> price = "10 euri";
        var_dump($prodotto3);



        // function say3Hello() {
        //
        //   echo "hello world!<br>";
        //   echo "hello world!<br>";
        //   echo "hello world!<br>";
        //
        // }
        //
        // say3Hello();



      ?>

    </h2>

  </div>

  <script src="script.js"></script>
</body>
</html>
