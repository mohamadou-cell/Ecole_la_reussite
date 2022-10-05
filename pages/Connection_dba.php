 <?php 

    
  $servername = 'localhost';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO("mysql:host=$servername;dbname=oumy", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection reussi";
  } catch (PDOException $th) {
    echo "erreur" . $th->getMessage();
  }


?>