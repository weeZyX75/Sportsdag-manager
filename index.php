<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
  </head>
  <body style="background-color: rgb(0, 102, 102)">
  <form method="post">
    <h1 class="green">Sportsdag</h1>
    <div>
        <div style="text-align:center" display="inline-block">
            <h2 class="green">BlocA: 8h45-10h45/BlocA+B 8:45-16h</h2>
            <p class="green">Open this select menu</p>

                    
            <select name="block_a" id="select1" onchange="getSelectValue();" class="form-select" aria-label="Default select example">
            <option selected></option>    
            <option value="Absent">Absent</option>
                <optgroup label="Aus dem Lem eraus">
                <option selected></option>
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
                <optgroup label="am Lem dobaussen">
                <option value="12">Football 5 vs 5</option>
                <option value="13">Volleyball avancé</option>
                <option value="14">Völkerball 8 vs 8</option>
                <option value="15">Baseball</option>
                <option value="16">Ultimate frisbee</option>
                <option value="17">Ballroom Dance</option>
                </optgroup>
                <optgroup label="am Lem dobannen">
                <option value="18">Contemporary dance</option>
                <option value="19">Escalade</option>
                <option value="20">Badminton</option>
                <option value="21">Basketball</option>
                <option value="22">Yoga</option>
                <option value="23">Fitness</option>
                <option value="24">Boxe anglaise</option>
                </optgroup>
            </select><br><br>
        </div>
            

        <div style="text-align:center" display="inline-block">
            <h2 class="green">BlocB: 14-16h</h2>
            <p class="green">Open this select menu</p>
            <select name="block_b" id="select2" onchange="getSelectValue();" class="form-select" aria-label="Default select example" >
                <optgroup label="Aus dem Lem eraus">
                <option selected></option>
                <option value="Absent">Absent</option>
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
                </select><br><br>
            <button type="submit">Submit</button>
        </div>
    </div>
    </form>
    
    <?php

    $server = "sql597.your-server.de";
    $db = "sportsdag";
    $user = "sportsdag";
    $pw = "nsT4gVdHi2mPaZVs";

    $conn = new mysqli( $server, $user, $pw, $db);

    if( $conn->connect_error ){
        die( "connection failed: " . $conn->connect_error );
    };

    if (isset($_REQUEST['block_a'] , $_REQUEST['block_b'])){
        $sql = "INSERT INTO `activities` (`id`, `activity_name`, `participants_limit`, `location`, `block_a`, `block_b`, `meeting_point`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
        $sql = "INSERT INTO `SportsdaagManager` (`id`, `block_a`, `block_b`, `time`) VALUES (Null, '" . $_REQUEST['block_a'] . "','" . $_REQUEST['block_b'] . "', current_timestamp())";

        if( $conn->query( $sql ) === FALSE ){
            echo "Error:" . $conn->error;
        }
    };



    $conn->close();

    ?>

    <script src="Bootsrtap/js/bootstrap.bundle.min.js"></script>
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
