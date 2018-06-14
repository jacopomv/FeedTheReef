<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Feed The Reef</title>
<style>


@keyframes move {
    from {left: 0px;}
    to {left: 24%;
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;}
}



pre {
    display: block;
    font-family: monospace;
    font-size: 400%;
    white-space: pre;
    margin: 1em 0;
} 


#table-container {
 border: 1px solid #3b83a6;
}

</style>  

<?php

  if (isset($_GET['command0'])) {
    $response = file_get_contents("http://localhost:8888/feed");
  }
  if (isset($_GET['command1'])) {
    $response = file_get_contents("http://localhost:8888/light");
  }
?>
  
</head>
<body>


  <div align="center"><img src="images/Sign.png" width="300" align="center" ></div>
  <p>
  <div id="fish" align="center">

  <table id="table-container">
    <tr>
      <td>
        <p></p>
        <div align="center">
            <a id="food"  href="index.php?command0=true" ><img src="images/food.png" width="64" height="64" align="center" ></a>
            <a id="light" href="index.php?command1=true"><img src="images/light.png" width="64" height="64" align="center"></a>
            <a id="webcam" href="#" onclick="javascript:webcamActivate();"><img src="images/webcam.png"
          width="64" height="64" align="center"></a>
	<a id="setting" href="javascript:show('settings');"><img id="img-setting"src="images/setting.png" width="64"
	    height="64" align="center"></a>
        </div>
        <p></p>
      </td>
    </tr>

    <tr>
      <td>
        <div align="center">
          <p><?php $output= file_get_contents("http://localhost:8888/temperature");echo "$output °C";?></p>
          <p><?php $output= file_get_contents("http://localhost:8888/ph");echo "<p>$output</p>";?></p>
        </div>
      </td>
    </tr>
    <tr id="photo" style="display:block">
       <td>
	<?php  shell_exec ('exec/takeSnap &');?>
        <a href="img-fish.html">
          <img src="img-fish/fish.jpeg" width="320" height="240" align="center"></a>
      </td>
    </tr>
    <tr>
    	<td id="streaming" style="display:none">
    	<iframe id="stramingIFR" src="" width="320" height="240"></iframe>
    	</td>
    </tr>
  </table>
  <div align="center">
    
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
						document.getElementById("stramingIFR").src=''+window.location.origin+':8081';
    	  		 }
   			 else {
    						elementId.style.display="block";
    						elementId2.style.display="none";
    					}
    }
  </script>

</body>
</html>
