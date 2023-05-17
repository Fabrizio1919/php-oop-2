<?php

// Definizione della classe Computer
class Computer {
    protected $monitor;
    protected $motherboard;
    protected $keyboard;

    public function __construct($monitor, $motherboard, $keyboard) {
        $this->monitor = $monitor;
        $this->motherboard = $motherboard;
        $this->keyboard = $keyboard;
    }

    public function getInfo() {
        return "Computer with {$this->monitor}, {$this->motherboard}, and {$this->keyboard}";
    }
}

// Definizione della classe Desktop come sottoclasse di Computer
class Desktop extends Computer {
    public function getProductType() {
        return 'Desktop';
    }
}

// Definizione della classe Laptop come sottoclasse di Computer
class Laptop extends Computer {
    public function getProductType() {
        return 'Laptop';
    }
}

// Creazione dei dati 
$computerData = [
    new Desktop('27" LCD', 'Intel Z490', 'Wired Keyboard'),
    new Laptop('15.6" LED', 'Intel Core i7', 'Backlit Keyboard'),
];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Computer Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Computer Catalog</h1>
        <div class="row" id="computer-cards">
            <?php foreach ($computerData as $computer): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $computer->getProductType(); ?></h5>
                        <p class="card-text"><?php echo $computer->getInfo(); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>