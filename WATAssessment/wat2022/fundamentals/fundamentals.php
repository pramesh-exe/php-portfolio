<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Pramesh Shrestha C7297983</h1> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
            echo "<h2>Selection</h2>";
            $day = date('l');
		    echo 'It\'s '.$day;
            echo '<br>';
            if($day=='Wednesday'){
                echo "It's midweek.";
                echo '<br>';
            }
            else{
                echo "It's not midweek.";
                echo '<br>';
            }
            date_default_timezone_set("Asia/Kathmandu");
            $time = date('G');
            if($time<12){
                echo "Good Morning";
                echo '<br>';
            }
            else if($time>=12 && $time <=18){
                echo "Good Afternoon";
                echo '<br>';
            }
            else {
                echo "Good Night";
                echo '<br>';
            }
            
            
            echo '<br>';
            $password = 'password';
            if(strlen($password)>4 && strlen($password)<10){
                echo "Password length is valid";
                echo '<br>';
            }
            else{
                echo "Password length is invalid";
                echo '<br>';
            }
            if($password == 'password' || $password == 'username'){
                echo "Password valid";
                echo '<br>';
            }
            else{
                echo "Password invalid";
                echo '<br>';
            }
            

            echo '<br>';
            $price = 25;
            $age = 15;
            $member = TRUE;
            echo "Inital Ticket Price: $price<br>";
            echo "Age: $age<br>";
            if ($member) {
                echo "Member: Yes<br>";
                if($age < 12){
                    echo "Final Ticket Price: ".$price - $price*0.6;
                    echo '<br>';
                }
                else if($age >=12 &&  $age <=18){
                    echo "Final Ticket Price: ".$price - $price*0.35;
                    echo '<br>';
                }
                else if($age>=65){
                    echo "Final Ticket Price: ".$price - $price*0.35;
                    echo '<br>';
                }
                else {
                    echo "Final Ticket Price: ".$price - $price*0.1;
                    echo '<br>';
                }
            } else {
                echo "Member: No<br>";
                if($age < 12){
                    echo "Final Ticket Price: ".$price - $price*0.5;
                    echo '<br>';
                }
                else if($age >=12 &&  $age <=18){
                    echo "Final Ticket Price: ".$price - $price*0.25;
                    echo '<br>';
                }
                else if($age>=65){
                    echo "Final Ticket Price: ".$price - $price*0.25;
                    echo '<br>';
                }
                else {
                    echo "Final Ticket Price: ".$price;
                    echo '<br>';
                }
            }
            
            echo "<h2>Arrays</h2>";
            echo "<h3>Simple Arrays</h3>";
            $products = array("t-shirt", "cap", "mug");
            print_r($products);
            echo '<br>';
            $products[1] = "shirt";
            print_r($products);
            echo '<br>';
            array_push($products,"skirt");
            print_r($products);
            echo '<br>';
            echo "The item at index [2] is: $products[2]<br>";
            echo "The item at index [3] is: $products[3]<br>";

            echo "<h3>Assossiative Arrays</h3>";
            $customer = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
            print_r($customer);
            echo '<br>';
            $customer['CustAge'] = 32;
            $customer['CustEmail'] = 'sarah@gamil.com';
            print_r($customer);
            echo '<br>';
            echo "The item at index [CustName] is: $customer[CustName]<br>";
            echo "The item at index [CustEmail] is: $customer[CustEmail]<br>";
            
            echo "<h3>Multi-Dimensional Arrays</h3>";
            $stock = array();
                $stock['id1'] = array(
                    'description'=>'t-shirt',
                    'price'=>'9.99',
                    'stock'=>100,
                    'color'=> array('blue', 'green', 'red')
                );
                $stock['id2'] = array(
                    'description'=>'cap',
                    'price'=>'4.99',
                    'stock'=>50,
                    'color'=> array('blue', 'black', 'grey')
                );
                $stock['id3'] = array(
                    'description'=>'t-shirt',
                    'price'=>'6.99',
                    'stock'=>30,
                    'color'=> array('yellow', 'green', 'pink')
                );
                
            echo "This is my order:<br>";
            echo $stock['id1']['color'][1] ." ".$stock['id1']['description']."<br>";
            echo "Price: &pound".$stock['id1']['price']."<br>";
            echo $stock['id2']['color'][2] ." ".$stock['id2']['description']."<br>";
            echo "Price: &pound".$stock['id2']['price']."<br>";


            echo "<h2>Loops</h2>";
            echo "<h3>While Loop</h3>";
            $counter = 1;
            while ($counter < 6) {
                echo 'Count: '.$counter.'<br />';
                $counter++; 
            }
            echo '<br>';
            $shirtPrice = 9.99;
            $counter = 1;
            echo "<table border=1 >";
            echo "<tr><th>Quantity</th><th>Price</th></tr>";
            while ($counter <= 10) {
                echo "<tr>";
                $total=$counter*$shirtPrice;
                $counter++;
                echo "<td>".$counter-1 ."</td>";
                echo "<td>&pound$total</td>";
                echo"</tr>";
            }
            echo "</table>";

            echo "<h3>For Loop</h3>";
            $names = array('Sam', 'Tom', 'Jake', 'Tim', 'Harry');
            for ($i=0; $i < 5; $i++) { 
                echo $names[$i] .'<br />';
            }


            echo "<h3>Foreach Loop</h3>";
            $names = array('Sam'=>'c12345', 'Tom'=>'c12346', 'Jake'=>'c12347', 'Tim'=>'c12348', 'Harry'=>'c12349');
            foreach ($names as $key => $value) {
                echo "Name: $key ID: $value<br>";
            }


            $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
            print_r($city);
            echo "<br>";
            foreach ($city as $key => $value) {
                $city[$key] = ucfirst(strtolower($value));
            }
            print_r($city);
            echo "<tr>";

		?>
      </section>
      <footer>   
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>
