<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Verz's Raspberry</title>
<style>


@keyframes move {
    from {left: 0px;}
    to {left: 24%;
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;}
}

h1 {
    position: relative;
    animation: move 2s;
    animation-delay: 0s;
    animation-timing-function:ease-out;
    -webkit-animation-fill-mode: forwards;
font-size: 350%;
}

pre {
    display: block;
    font-family: monospace;
    font-size: 400%;
    white-space: pre;
    margin: 1em 0;
} 

table {
	width: 100%;
}

#menu1{
	width: 100%;
	display: flex;
	justify-content:center;
}

#menu2{
	width: 100%;
	display: flex;
   justify-content: space-around; 
}
.menu2-img{
	width: 80%;
}

</style>  
  
</head>
<body>
    
  
  <h1>Verz's Raspberry</h1>
  <div id="menu1">
    <a id="trans"><img src="images/transmission.png" ></a>
    <a id="setting" href="javascript:show('settings');"><img id="img-setting"src="images/setting.png"></a>
  </div>
  <p>
  <div id="fish" align="center">
  <table border="1" width="100%">
    <tr>
      <td>
        <div id="menu2">
        
          <a id="food" ><img src="images/food.png"class="menu2-img" ></a>
          <a id="light"><img src="images/light.png" class="menu2-img"></a>
          <a id="change-water"><img src="images/change-water.png" class="menu2-img"></a>
          <a id="webcam" href="#" onclick="javascript:webcamActivate();"><img src="images/webcam.png" class="menu2-img"></a>
        </div>  
        
          <p style="font-size:400%;">
          ULTIMI PASTI:
          
          <?php $output= shell_exec ('exec/fish_food'); echo "<pre>$output</pre>"; ?>
          
          </p>
        
      </td>
    </tr>
    <tr id="photo" style="display:block">   
       <td align="center">
       <div>
        <a href="img-fish.html"><img src=
        "img-fish/fish.jpeg" width="100%" height="100%"></a>
        </div>
      </td>
    </tr>
    <tr>
    	<td id="streaming" style="display:none">
    	<iframe id="ifr" src=""></iframe>
    	</td>
    </tr>
  </table>
  </div>
  
  <div id="settings" align="center" style="display:none">
  <table border="1">
    <tr style="font-weight: bold;">
      <td>
      <pre>Raspberry - Temperature:<?php echo shell_exec ('cat /sys/class/thermal/thermal_zone0/temp'); ?></pre></td>
    </tr>
    <tr>
      <td><pre><?php echo shell_exec ('uptime'); ?></pre></td>
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
