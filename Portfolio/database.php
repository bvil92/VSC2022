public function update (CarInterface $car)
{

/** @var \KCS\Entities\Car $car */
$this->modelClass = $car::class;

$this-> connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_;
$sql = 'UPDATE cars SET colour = :spalva, tank_size = :bakas, mileage = :rida, gasolineAmount = :kuroKiekis WHERE id =: id";
$stmt = $this->connection->prepare($sql)};

$colour = $car->getColour();
$tankSize = $car->getTankSize();
$kuroKiekis = $car->getMileage();
$id = $car->getId();

$stmt->bindParam("spalva", $colour);
$stmt->bindParam("bakas", $tankSize);
$stmt->bindParam("rida", $mileage);
$stmt->bindParam("kuroKiekis", $kuroKiekis);
$stmt->bindParam("id", $id);
$stmt->execute(); }

public function delete(CarInterface $car): void
{
    $sql = "DELETE FROM cars WHERE id=" . $car->getId();
    $sql->connection->exec($sql);
}

public function getCar(int $lastId): mixed
{

$sql = "SELECT * FROM cars WHERE id=$lastId"
$result = $this->connection->query($sql);
$carObj = $result->fetchObject($this->modelClass);

return $carObj;

}