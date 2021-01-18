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
        class Magazine {
          public $name;
          public $location;

          public $products;
          public function __construct($name, $location, $products = []) {
            $this -> name = $name;
            $this -> location = $location;
            $this -> products = $products;
          }
          public function __toString() {
            return 'name: ' . $this -> name . '<br>'
              . 'location: ' . $this -> location . '<br>'
              . 'products: ' . count($this -> products);
          }
        }
        class Product {
          public $name;
          public $weight;
          public $price;
          public function __construct($name, $weight, $price) {
            $this -> name = $name;
            $this -> weight = $weight;
            $this -> price = $price;
          }
          public function __toString() {
            return 'name: ' . $this -> name . '<br>'
              . 'weight: ' . $this -> weight . '<br>'
              . 'price: ' . $this -> price;
          }
        }

        $prod1 = new Product('prod1', 10, 100);
        $prod2 = new Product('prod2', 100, 200);
        $prod3 = new Product('prod3', 20, 400);
        $mag = new Magazine('mag1', 'via magica',
        //   [ $prod1, $prod2, $prod3 ]
        );
        $mag -> products[] = new Product('prod1', 10, 100);
        // var_dump($prod1); echo "<br>";
        // var_dump($prod2); echo "<br>";
        // var_dump($prod3); echo "<br>";
        // var_dump($mag); echo "<br>";
        $mag -> products[] = $prod2;
        $mag -> products[] = $prod3;

        echo  $prod1 . "<br><br>"
            . $prod2 . "<br><br>"
            . $prod3 . "<br><br><br><br>"
            . $mag;
            //si vede che mag ha 3 prodotti
      ?>
    </h2>

  </div>

  <script src="script.js"></script>
</body>
</html>
