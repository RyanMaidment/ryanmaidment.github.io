<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
</head>
<body>
    <nav>
    <div id="menu">
        <a href="index.php"><i class="fas fa-home"></i>Home</a>
        <div class="dropdownProduct">
            <button class="dropbuttonProduct"><i class="fas fa-shopping-bag"></i>Products</button>
            <div class="dropdownLinksProduct">
              <a href="#">Currency Exchange</a>
              <a href="#">Service 2</a>
            </div>
          </div>
        <div class="dropdownContact">
            <button class="dropbuttonContact"><i class="fas fa-envelope"></i>Contact Us</button>
            <div class="dropdownLinksContact">
            <div id= "langPic">  
            <a href="contact.html"><img src="france.jpg" alt="France"/>Contactez-nous</a>
              <a href="contact.html"><img src="portugal.png" alt="Portugal"/>Contate-Nos</a>
              </div>
            </div>
          </div>
        <a href="aboutme.html"><i class="fas fa-address-card"></i>About</a>
    </div>
    </nav>
    <div id="autocompleteSearch">
    <form action="" method="get">
        <div class="autocomplete" style="width:300px;">
          <input id="myInput" type="text" name="myVehicle" placeholder="Vehicle">
        </div>
        <input type="submit">
      </form>
    </div>
      <h1 id="demo"></h1>

    <?php

    function csvToArray()
    {
        $filename = 'input.csv';
        $delimiter = ',';
        if (!file_exists($filename) || !is_readable($filename))
            return FALSE;
        $header = NULL;
        $vehicles = array();
        if (($handle = fopen($filename, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle, 0, $delimiter)) !== FALSE) {
                if (!$header) {
                    $header = $row;
                } else {
                    if (count($header) != count($row)) {
                        continue;
                    }

                    $vehicles[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        return $vehicles;
    }
    function searchForVehicle()
    {

        foreach (csvToArray() as $position => $vehicle) {
            if ($vehicle['Make'] === $_GET["myVehicle"]) {
                return compact('vehicle', $position);
            }
        }

    }
    echo '<pre>',print_r(searchForVehicle()),'</pre>';
    ?>
</body>
</html>