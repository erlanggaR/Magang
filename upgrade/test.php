<?php
  $fuseki_server = "http://localhost:3030"; // change this to your fuseki server address
  $fuseki_sparql_db = "ahpusing"; // change this to your fuseki Sparql database
  $endpoint = $fuseki_server."/".$fuseki_sparql_db."/query";

  use BorderCloud\SPARQL\SparqlClient;

  require_once ('../vendor/autoload.php');

  $sc = new BorderCloud\SPARQL\SparqlClient();
  $sc->setEndpointRead($endpoint);

  $hasil = $_POST['laptop'];
  $q = "        
  PREFIX type: <http://info.deepcarbon.net/schema/type#>
  PREFIX re: <http://www.w3.org/2000/10/swap/reason#>
  prefix : <http://www.semanticweb.org/erlanggar/ontologies/2019/4/untitled-ontology-7#> 
  prefix owl: <http://www.w3.org/2002/07/owl#> 
  prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#> 
  prefix xml: <http://www.w3.org/XML/1998/namespace> 
  prefix xsd: <http://www.w3.org/2001/XMLSchema#> 
  prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#> 
  base <http://www.semanticweb.org/erlanggar/ontologies/2019/4/untitled-ontology-7#> 


  SELECT ?Brand ?Hardware ?Price ?Link
  WHERE {
    ?device rdf:type :Device .
    ?component rdf:type :Hardware .
    ?device :upgradableWith ?component .
    
    ?brand rdf:type :Brand .
    ?component :ProducedBy ?brand .
    ?brand :name ?Brand .
    
    ?device :name ?Device, " . " \"" . $hasil . "\" " . " .
    ?component :name ?Hardware .
    ?component :price ?Price .  
    ?component :link ?Link .
  } ";

?>

<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>UpGrade</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="static/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="static/plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="static/plugins/highlight/hybrid.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

  <style>
  :root{
    --primary-color:#000000;
    --secondary-color:#f9f9f9;
    --text-color:#636363;
    --text-color-dark:#242738;
    --white-color:#ffffff;
  }  
  </style>

  <link rel="stylesheet" href="assets/css/style.css" integrity="" media="screen">
  <link rel="icon" href="assets/images/laptop-icon.png" type="image/x-icon">

</head>

<body>
  <header class="hero-section overlay banner">
    <div class="container mb-100">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Welcome to UpGrade</a>
        <div class="navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="about-us.php">About Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center mx-auto">
          <h1 class="text-white mb-3">Upgrade your Laptop</h1> 
          <p class="text-white mb-4">don't buy a new one</p>    

          <div>
            <ul class="search-img">
              <li class="ti-search position-absolute"></li>
            </ul>
              <form action="test.php" method="POST" id="searchForm">
                <input id="search" class="form-control" name="laptop" type="text" placeholder="Input your laptop type here . . ." > 
                <input style="display: none" type="submit" id="enterdata" >
              </form>
   
            </form>
            
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class="container">
    <br><br>
    <h2>Your Laptop: <?php echo $hasil ?> </h2>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Brand</th>
          <th scope="col">Hardware</th>
          <th scope="col">Price</th>
          <th scope="col">Link</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $rows = $sc->query($q, 'rows');
          $err = $sc->getErrors();
          if ($err) {
          print_r($err);
          throw new Exception(print_r($err, true));
          }

            foreach ($rows["result"]["rows"] as $row) {
              echo "<tr>";
              foreach ($rows["result"]["variables"] as $variable) {

                echo "<td>";
                printf("%s", $row[$variable]);

                echo "</td>";
              }
              echo "</tr>";

              echo "\n";
            }
        ?>

        </tr>
      </tbody>

      </table>    
  </div>

  <footer class="section bg-gray pb-0">
    <div class="container">
      <p>tugas akhir semantik web. Erlangga, Alfin, Bariq</p>  
    </div>
  </footer>

<script src="assets/js/script.js"></script>
  
</body>
</html>
