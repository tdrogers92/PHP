<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    include_once 'dbConfig.php';
    ?>
    <title>VM TEST PROV</title>
</head>
<body>
<?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO queue (username, password, email, type)
        VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["type"]."')";
            if(mysqli_query($link, $sql)){
                ob_end_clean();
                echo "Job Sucessfully added to the queue";
                }
            else {
                ob_end_clean();
                echo "ERROR: Could not add to queue using: $sql. " . mysqli_error($link);
                }
            }
?>
    <form method="post"> 
    <label id="first"> First name:</label><br/>
    <input type="text" name="username" required><br/>

    <label id="first">Password</label><br/>
    <input type="text" name="password"><br/>

    <label id="first">Email</label><br/>
    <input type="text" name="email"><br/>

    <label id="first">Type</label><br/>
    <select name="type">
        <option value="opt-1">OPTION 1</option>
        <option value="opt-2">OPTION 2</option>
    </select>

    <button onclick="QueuePopUp()" type="submit" name="save">Create VM</button>

    </form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <form action="home.html">
            <input class="buttons" type="submit" value="Home" />
        </form>

</body>

<script>
function QueuePopUp() {
    alert("VM Has been queued for creation");
}
</script>
</html>
