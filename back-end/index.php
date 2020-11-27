<?php
session_start();
if(empty($_SESSION['user'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p id="time"></p>
    <button type="button" name="hello" id="hello">Hello</button>
    <button><a href="logout.php">Logout</a></button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
        var timestamp = '<?=time("H:m:s");?>';
        function updateTime(){
            $('#time').html(Date(timestamp));
            timestamp++;
        }
        $(function(){
            setInterval(updateTime, 1000);
        });
</script>

<script type="text/javascript">
        var timestamp = '<?=time("H:m:s");?>';

        $(document).ready(function(){
            $("#hello").click(function(){
                alert(`Hai <?= $_SESSION['user'];?>, waktu login anda ${Date(timestamp)}`)
                
            });
        });
    </script>
</html>