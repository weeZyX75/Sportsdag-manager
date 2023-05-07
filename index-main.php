<?php

include "/usr/home/lemaco/db_edu_connect.php";

$query = "SELECT * FROM students";
$result = $conn->query( $query );

//while ($row = $result->fetch_array()) {
    //echo $row["name"] . " steet an der Tabell.<br>";
//};

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sportsdag Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="style-main.css" rel="stylesheet">
    </head>

    <body>

    <div class="wrapper">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
     </div>

<div class="center" style="max-width: 960px; display: flex; flex-direction: column; align-items: center;">

    <h1 class="green">Sportsdag</h1>

    <form method="post">
    
        <div class="row g-2 green" style="text-align:center">

                <label for="select1" class="form-label">BlocA: 8h45-10h45/BlocA+B 8:45-16h</label>
            <div class="col-12">
                
                <select name="block_a" id="select1" onchange="getSelectValue();" class="form-select" aria-label="Default select example">
                        <option value="Absent">Absent</option>
                    <optgroup label="Aus dem Lem eraus">
                        <option value="1">Treppeltour Extrem (blocs A+B)(RV Loge)</option>
                        <option value="2">Treppeltour Extrem 2 (blocs A+B)(RV Loge)</option>
                        <option value="3">Treppeltour Extrem 3 mat Hond (blocs A+B)(RV Loge)</option>
                        <option value="4">MTB avancé (blocs A+B) (RV HDS)</option>
                        <option value="5">Treppeltour 1 (RV Loge)</option>
                        <option value="6">Treppeltour 2 (RV Loge)</option>
                        <option value="7">Treppeltour 3 (RV Loge)</option>
                        <option value="8">Treppeltour 4 (RV Loge)</option>
                        <option value="9">Disc Golf (RV HDS)</option>
                        <option value="10">Easy Jogging (RV HDS)</option>
                        <option value="11">Pétanque (RV Loge)</option>
                    </optgroup>
                    <optgroup label="Am Lem dobaussen">
                        <option value="12">Football 5 vs 5</option>
                        <option value="13">Volleyball avancé</option>
                        <option value="14">Völkerball 8 vs 8</option>
                        <option value="15">Baseball</option>
                        <option value="16">Ultimate frisbee</option>
                        <option value="17">Ballroom Dance</option>
                    </optgroup>
                    <optgroup label="Am Lem dobannen">
                        <option value="18">Contemporary dance</option>
                        <option value="19">Escalade</option>
                        <option value="20">Badminton</option>
                        <option value="21">Basketball</option>
                        <option value="22">Yoga</option>
                        <option value="23">Fitness</option>
                        <option value="24">Boxe anglaise</option>
                    </optgroup>
                </select>

            </div>
            
                <label for="select2" class="form-label">BlocB: 14-16h</label>
            <div class="col-12">
                
                <select name="block_b" id="select2" onchange="getSelectValue();" class="form-select" aria-label="Default select example" >
                        <option value="Absent">Absent</option>
                    <optgroup label="Aus dem Lem eraus">
                        <option value="28">Treppeltour 5 (RV Loge)</option>
                        <option value="29">Treppeltour 6 (RV Loge)</option>
                        <option value="30">Treppeltour 7 (RV Loge)</option>
                        <option value="31">Treppeltour 8 (RV Loge)</option>
                        <option value="32">Foot</option>
                        <option value="33">Disc Golf</option>
                    </optgroup>
                    <optgroup label="am Lem dobaussen">
                        <option value="34">Basketball</option>
                        <option value="35">Volleyball débutant</option>
                        <option value="36">Völkerball</option>
                        <option value="37">Baseball</option>
                        <option value="38">Ultimate frisbee</option>
                        <option value="39">Step Aerobic</option>
                    </optgroup>
                    <optgroup label="am Lem dobannen">
                        <option value="41">Ping-Pong</option>
                        <option value="42">Musculation + 15 Joer</option>
                        <option value="43">Escalade</option>
                        <option value="44">Badminton</option>
                        <option value="45">Handball / Tchoukball</option>
                        <option value="46">Pilates / Stretching</option>
                        <option value="47">Yoga</option>
                        <option value="48">Boxe anglaise</option>
                    </optgroup>
                </select>
            </div>

            <div class="col-6 mt-4">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>

        </div>
        
    </form>

    <img src="Dragons.png" alt="Italian Trulli" style= "width:30%; height:30%;">
</div>


    <?php


    if (isset($_REQUEST['block_a'] , $_REQUEST['block_b'])){
        $sql = "INSERT INTO `SportsdaagManager` (`id`, `block_a`, `block_b`, `time`) VALUES (Null, '" . $_REQUEST['block_a'] . "','" . $_REQUEST['block_b'] . "', current_timestamp())";

        if( $conn->query( $sql ) === FALSE ){
            echo "Error:" . $conn->error;
        }
    };



    $conn->close();

    ?>

    <script>
    /*function getSelectValue(){
        var selectedValue1 = document.getElementById('select1').value;
        var selectedValue2 = document.getElementById('select2').value;
        if (selectedValue1 == 1){
            document.getElementById('select2').value = '25';
        }
        if (selectedValue1 == 2){
            document.getElementById('select2').value = '26';
        }
        if (selectedValue1 == 3){
            document.getElementById('select2').value = '27';
        }
        if (selectedValue1 == 4){
            document.getElementById('select2').value = '28';
        }
    }*/
    </script>
  </body>
</html>