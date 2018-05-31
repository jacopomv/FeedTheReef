<!DOCTYPE html>
<html>
<head>
  <meta name="generator" content="Bluefish 2.2.7" >
  <meta charset="UTF-8">
  <title>Verz's Raspberry</title>

<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.index.php";
}
//-->
</script>

</head>
<body>


  <h1 align="center">Feed the Reef</h1>
  <p>
  <div id="fish" align="center">
  <table border="1">
    <tr>
      <td>
        <p></p>
        <div align="center">
            <a id="food"><img src="images/food.png" width="64" height="64" align="center"></a>
            <a id="light"><img src="images/light.png" width="64" height="64" align="center"></a>
            <a id="change-water"><img src="images/change-water.png" width="64" height="64" align="center"></a>
            <a id="webcam" href="#" onclick="javascript:webcamActivate();"><img src="images/webcam.png"
          width="64" height="64" align="center"></a>
        </div>
        <p></p>
      </td>
    </tr>

    <tr>
      <td>
        <div align="left">
          <p>Last Meals: 08:00</p><?php $output= shell_exec ('exec/fish_food'); echo "<pre>$output</pre>"; ?>
          <p>Temperature: 23°</p>
          <p>PH: 5.5</p>
          <p>Next water refresh: 2/6/18<p>
        </div>
      </td>
    </tr>
    <tr id="photo" style="display:block">
       <td>
        <a href="img-fish.html">
          <img src="img-fish/fish.jpeg" width="320" height="240" align="center"></a>
      </td>
    </tr>
    <tr>
    	<td id="streaming" style="display:none">
    	<iframe id="ifr" src=""></iframe>
    	</td>
    </tr>
  </table>
  <div align="center">
    <a id="setting" href="javascript:show('settings');"><img id="img-setting"src="images/setting.png" width="64"
    height="64" align="center"></a>
  </div>
  </div>

  <div id="settings" align="center" style="display: none;">
  <table border="1">
    <tr style="font-weight: bold;">
      <td>Raspberry - Temp:
      <?php echo shell_exec ('cat /sys/class/thermal/thermal_zone0/temp'); ?></td>
    </tr>
    <tr>
      <td><?php echo shell_exec ('uptime'); ?></td>
    </tr>
    <tr>
      <td>
      <?php $output= shell_exec ('ps aux | sort -rk 3,3 | head -n 8'); echo "<pre>$output</pre>"; ?></td>
    </tr>
    <tr>
      <td>
      <?php $output= shell_exec ('tail -n 8 /var/log/httpd/error_log'); echo "<pre>$output</pre>"; ?></td>
    </tr>
    <tr>
      <td>
      <?php $output= shell_exec ('df'); echo "<pre>$output</pre>"; ?></td>
    </tr>
  </table>
  </div>

<script type="text/javascript">
   document.getElementById('trans').href=''+window.location.origin+':4023';
   document.getElementById('live').href=''+window.location.origin+':8080/?action=stream';

   function show(id) {
    var elementId = document.getElementById(id);
    if(elementId.style.display=="block") {
    	elementId.style.display="none";
    	document.getElementById("img-setting").src="images/setting.png";
    	}
    else {elementId.style.display="block";
    		document.getElementById("img-setting").src="images/setting-clicked.png";
    		}
    }

    function webcamActivate() {
    	var elementId = document.getElementById("photo");
    	var elementId2 = document.getElementById("streaming");
    	    if(elementId.style.display=="block") {
    	    					elementId.style.display="none";
    	    					elementId2.style.display="block";
    	    					document.getElementById("ifr").src="http://www.w3schools.com";
    	  		 }
   			 else {
    						elementId.style.display="block";
    						elementId2.style.display="none";
    					}
    }
  </script>

</body>
</html>
