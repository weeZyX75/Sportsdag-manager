<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create activity</title>
    <link href="/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
  </head>
  
  <body style="background-color: rgb(0, 102, 102)">
  <p>test1</p>
  <form action="create-activity-submit.php" method="post">
  <h1 class="green">Sportsdag</h1>
    <div>
        <label for="activity-name">activity name:</label><br>
        <input type="text" id="activity-name" name="activity-name"> <br>

        <label for="participant-limit">participant-limit:</label><br>
        <input type="number" id="participant-limit" name="participant-limit"><br>

        <label for="location">location:</label><br>
        <input type="text" id="location" name="location"><br>

        <label for="block-a">block-a:</label><br>
        <input type="bool" id="block-a" name="block-a"><br>

        <label for="block-a">block-b:</label><br>
        <input type="bool" id="block-b" name="block-b"><br>

        <label for="block-a">meeting-point:</label><br>
        <input type="text" id="meeting-point" name="meeting-point"><br>

    </div>
    <input type="submit" value="Submit">

    </form>
</body>


<!-- INSERT INTO `activities` (`id`, `activity_name`, `participants_limit`, `location`, `block_a`, `block_b`, `meeting_point`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL) -->
</html>