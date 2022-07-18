
    <?php 
  echo ' hello 🫠 <br>';
    $myData = "php code";
    $myVar =200;


    echo gettype($myData).'<br>';
    echo gettype($myVar);

    //display
    echo '<h1> this is content of H1</h1>';
    echo '<h1 style="color:red;"> this is red</h1>';

    //display with varibales
    $studients = array("thao","bac","son","nam");
    print_r($studients);
    echo '<br>';


    $marks = array("thao"=> 10, "bac"=>12);
    print_r($marks);
    echo '<br>';
    // sort 
    $number = array(1,4,8,3,6,9,5,7,10);
    sort($number);
    rsort($number);
    print_r($number);
    echo '<br>';
    //vong lap
    for($i=0; $i <= 10; $i++){
        echo "hello ".$i."<br>";
    }

    $employee = array("thao","bac","son","nam");
    foreach($employee as $emp){
        echo $emp ."<br>";
    }
