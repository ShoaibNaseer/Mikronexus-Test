<!DOCTYPE HTML>
<html>
	<head>
		<title>Mikronexus Test</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	</head>

	<body>

		<div class="countdown"></div>
		<input type="button" id="button1" value="1">
		<input type="button" id="button2" value="2">
		<input type="button" id="button3" value="3">
		<input type="button" id="button4" value="4">
		<input type="button" id="button5" value="5">



		<script type="text/javascript">
			$(document).ready(function () {
				var timer2 = "1:01";
				var interval = setInterval(function() {
					var timer = timer2.split(':');
					var minutes = parseInt(timer[0], 10);
					var seconds = parseInt(timer[1], 10);
					--seconds;
					minutes = (seconds < 0) ? --minutes : minutes;
					seconds = (seconds < 0) ? 59 : seconds;
					seconds = (seconds < 10) ? '0' + seconds : seconds;
					minutes = (minutes < 10) ?  minutes : minutes;
					$('.countdown').html(minutes + ':' + seconds);
					if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
					  timer2 = minutes + ':' + seconds;
					}, 1000);
            $("#button1").click(function () {
                $.post(
                    "data.php", {
                        data: document.getElementById("button1").value,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    }
                );
            });

            $("#button2").click(function () {
                $.post(
                    "data.php", {
                        data: document.getElementById("button2").value,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    }
                );
            });

            $("#button3").click(function () {
                $.post(
                    "data.php", {
                        data: document.getElementById("button3").value,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    }
                );
            });

            $("#button4").click(function () {
                $.post(
                    "data.php", {
                        data: document.getElementById("button4").value,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    }
                );
            });

            $("#button5").click(function () {
                $.post(
                    "data.php", {
                        data: document.getElementById("button5").value,
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    }
                );
            });

        });
		
		</script>

	</body>

</html>