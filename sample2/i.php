<HTML>
<head>
    <style>
    body
    {
        background:rgb(100,20,7);
    }
    #up
    {
        
        font-size: 300px;
       	font-family:Monotype Corsiva;
		color: #FFFFFF;
	}

	</style>
</head>
<body>
    <div id=up>
    <form>
    
	<table method="post">
	    <tr>
	        <td class="p1">first number:<input type="textbox" name="n1" placeholder="Enter"/></td>
	    </tr>
	    <tr>
		<td class="p1">second number: <input type="textbox" name="n2" placeholder="Enter"/></td>
		</tr>
		<tr>
		     
		<select name="op">
		    <option>None</option>
		    <option>add</option>
		    <option>substract</option>
		    <option>divition</option>
		    <option>multipli</option>
		</select>
		</br>
		</tr>
		<button type="submit" name="s1" value="submit">Calculate</button>
	
	</table>
	
	</form>
	</div>	
	<p>The answer is:</p>
	</br>
	<?php
	   
	    if (isset($_GET['s1'])){
	
	        $a1=$_GET['n1'];
	         $a2=$_GET['n2'];
	          $opor=$_GET['op'];
	          switch($opor)
	          {
	              case "None":
	                  echo "select anyone";
	                  break;
	              case "add":
	                  echo $a1+$a2;
	                  break;
	               case "substract":
	                   echo $a1-$a2;;
	                  break;
	               case "divition":
	                   echo $a1/$a2;;
	                  break;
	          }
	    }
	
	?>
	
</body>

</HTML>