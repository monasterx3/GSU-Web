<!DOCTYPE html>
<html>
<body>
<?php

      $Restaurants = array(
                      "Chama Gaucha" => 40.50,
                      "Aviva by Kameel" => 15.00,
                      "Bone’s Restaurant" => 65.00,
                      "Umi Sushi Buckhead" => 40.50,
                      "Fandangles" => 30.00,
                      "Capital Grille" => 60.50,
                      "Canoe" => 35.50,
                      "One Flew South" => 21.00,
                      "Fox Bros. BBQ" => 15.00,
                      "South City Kitchen Midtown" => 29.00);


echo "According to the Trip Advisor,
        the 10 best Restaurants in Atlanta based up votes for 2016 are as follows : " . "<br><br>";
printTable($Restaurants);


echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Price:" . "<br><br>";
sortByPrice($Restaurants);

echo "<br>"."Restaurants 10 best Restaurants in Atlanta ordered by Name:" . "<br><br>";
sortByName($Restaurants);

function sortByPrice($Restos) {
    asort($Restos); 
    printTable($Restos);
  
}

function sortByName($Restos){
ksort($Restos); 
    printTable($Restos);
  
}

function printTable($Restos){

$html = '<table border="1">';
    $html .= '<tr>';
  
            $html .= '<th>' . 'Restaurant Name'. '</th>';
            $html .= '<th>' .'Average Cost'. '</th>';
    $html .= '</tr>';

    foreach( $Restos as $key=>$value){
        $html .= '<tr>';
     
            $html .= '<td>' . $key." " . '</td>';
             $html .= '<td>' . $value . '</td>';
      
        $html .= '</tr>';
    }

    $html .= '</table>';
    
    echo $html;

}

?>
</body>
</html>