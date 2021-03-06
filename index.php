<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setInterval(timestamp, 1000);
    setInterval(temperature, 1000);
});
function timestamp() {
    $.ajax({
        url: 'timestamp.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
function temperature() {
    $.ajax({
        url: 'temperature.php',
        success: function(data) {
            $('#temperature').html(data);
        },
    });
}
</script>
</head>
<body>

<h1>Weather observer demo</h1>
<p>MJPG web streaming:</p>
<img src="stream.mjpg" alt="MJPG Stream" id="stream"/>
<p>Server UTC Time: <span id="timestamp"/></p>
<p>Temperature: <span id="temperature"/></p>
</body>
</html>
