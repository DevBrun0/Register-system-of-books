<strong><h1 align="center">
  Register system of books 
</h1></strong>

The project was created to supporting a fictitious store "Quicken - Venda de Livros" and with that emphasize languages programming and web site structure, being that, the language PHP was used to construct a connection with the database MySql and send informations which has typed in the interface which has two fields: customers and books. 
So that no errors occur in the database, that insformations are sending simultaneously since the tables in the MySql are related. For the structure in this project it had been used HTML5 and CSS3.

</br>

<strong><h2 align="center">
  index.php
</h2></strong>

The archive **index.php** consists in a simple screen maded with stylization **CSS3**, in the background of interface the code **HTML5** build a connection beside the **processa.php**. Using the **CSS3** it was thought for background page the color purple, and contrast of your letters whitesmoke.

<br>

<h3>Interface</h3>

<strong><p align="center">
  ![Screenshot 2023-02-17 142810](https://user-images.githubusercontent.com/125213163/219960620-eca284ad-6140-4272-94b5-b09684be7e89.gif)
</p></strong>

<br>

<strong><h2 align="center">
  coneccao.php
</h2></strong>

The work of linking the PHP to SQL is all construct by **coneccao.php**, this archive has a simple(but important) function to establish connectivity during send of informations to database. In additionally, was utilize a standard code below to create this connection.

```php

$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

// Create a PDO instance
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

```
<br>

<strong><h2 align="center">
  processa.php
</h2></strong>

The processa.php incorporate the back-end action of project, this archive receive what was typed in the interface and send that informations to the **register_books_database**, by the register button all of data is colleted by a variable and sent simultaneously to the directory. Quickly, the details are related in the database by a foreing key, in the final of code, the program display a message if registered or not. 
