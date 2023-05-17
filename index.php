<?php

class Computer
{
    protected $monitor;
    protected $mbo;
    protected $keyboard;
    protected $ram;
    protected $ssd;
    protected $cpu;

    public function __construct($monitor, $mbo, $keyboard, $ram, $ssd, $cpu)
    {
        $this->monitor = $monitor;
        $this->mbo = $mbo;
        $this->keyboard = $keyboard;
        $this->ram = $ram;
        $this->ssd = $ssd;
        $this->cpu = $cpu;
    }

    public function getInfo()
    {
        $info = "Monitor: " . $this->monitor->getInfo() . "<br>";
        $info .= "Motherboard: " . $this->mbo->getInfo() . "<br>";
        $info .= "Keyboard: " . $this->keyboard->getInfo() . "<br>";
        $info .= "RAM: " . $this->ram->getInfo() . "<br>";
        $info .= "SSD: " . $this->ssd->getInfo() . "<br>";
        $info .= "CPU: " . $this->cpu->getInfo() . "<br>";

        return $info;
    }

    // Getter e setter per le componenti del computer
    // ...

}

class Monitor
{
    protected $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getInfo()
    {
        return "Size: " . $this->size;
    }

    // Getter e setter per le proprietà del monitor
    // ...
}

class Motherboard
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getInfo()
    {
        return "Model: " . $this->model;
    }

    // Getter e setter per le proprietà della motherboard
    // ...
}

class Keyboard
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getInfo()
    {
        return "Type: " . $this->type;
    }

    // Getter e setter per le proprietà della tastiera
    // ...
}

class RAM
{
    protected $capacity;

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getInfo()
    {
        return "Capacity: " . $this->capacity;
    }

    // Getter e setter per le proprietà della RAM
    // ...
}

class SSD
{
    protected $capacity;

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getInfo()
    {
        return "Capacity: " . $this->capacity;
    }

    // Getter e setter per le proprietà dello SSD
    // ...
}

class CPU
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getInfo()
    {
        return "Model: " . $this->model;
    }

    // Getter e setter per le proprietà della CPU
    // ...
}

class Desktop extends Computer
{
    public function getType()
    {
        return "Desktop";
    }
}

class Laptop extends Computer
{
    public function getType()
    {
        return "Laptop";
    }
}

// Creazione di un array di oggetti per rappresentare il set di dati
$devices = [
    new Desktop(
        new Monitor("24 inch"),
        new Motherboard("Model XYZ"),
        new Keyboard("Mechanical"),
        new RAM("16GB"),
        new SSD("500GB"),
        new CPU("Intel i7")
    ),
    new Laptop(
        new Monitor("15 inch"),
        new Motherboard("Model ABC"),
        new Keyboard("Backlit"),
        new RAM("8GB"),
        new SSD("256GB"),
        new CPU("AMD Ryzen 5")
    ),
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
            <?php foreach ($devices as $device): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $device->getType(); ?></h5>
                        <p class="card-text"><?php echo $device->getInfo(); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>