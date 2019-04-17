//Old style 

<html>
	<body>
		<?php
			if(isset($_POST['user']) && isset($_POST['password'])){
			$result = check_password($_POST['user'],$_POST['password']);
			}
				if($result===true){
				echo 'Hello'.$_POST['user'];
				} else {
					echo 'Wrong user or password'.$_POST['user'];
					}
		?>
		<form method="post">
						User:<input type="text" name="user" /><br/>
                        Password:<input type="password" name="password" /><br/>
			<input type="submit" value="Save" />
                                         
		</form>
	</body>
</html>


//Escaping

<html>
	<body>
		<?php
			if(isset($_GET['user'])){
				//echo htmlspecialchars($_GET['user']);
				echo strip_tags($_GET['user']);
			}
			?>
		<form method="get">
						User:<input type="text" name="user" /><br/>
                        
			<input type="submit" value="Save" />
                                         
		</form>
	</body>
</html>


//Ceckbox
<html>
	<body>
		<?php
			if(count($_POST)){
				var_dump($_POST);
				if(isset($_POST['check'])){
				$check = 1;
				}else{
				$check = 0;
				}
                                echo $check;
			}
                        
			?>
		<form method="post">
						User:<input type="text" name="user" /><br/>
						Check:<input type="checkbox" name="check" value="1" /><br/>
                        
			<input type="submit" value="Save" />
                                         
		</form>
	</body>
</html>


//More users 
<html>
    <body>
	<?php
        
        if(count($_POST)){
	var_dump($_POST);
	}
		?>
        
        <form method="post">
						<?php for($x=0;$x<10;$x++): ?>
						user <?=$x?> <input type="text" name="user[k<?=$x?>]" />
						<input type="checkbox" name="check[j<?=$x?>]" value="1"/><br/>
						<?php endfor;?>
                        
						<input type="submit" value="Save" />
        </form>                   
    </body>
</html>


//Radio 
<html>
    <body>
	<?php
        /* @var $_POST type */
        if(count($_POST)){
	var_dump($_POST);
	}
		?>
        
        <form method="post">
		
			rad1: <input type="radio" name="rad" value="1"/><br>
			rad1: <input type="radio" name="rad" value="1"/><br>
			
		<hr>
			radG21: <input type="radio" name="radG2" value="1"/><br>
			radG21: <input type="radio" name="radG2" value="1"/><br>
		
						<?php for($x=0;$x<10;$x++): ?>
						
						
						<?php endfor;?>
                        
						<input type="submit" value="Save" />
        </form>                   
    </body>
</html>


//Select
<html>
    <body>
	<?php
        
        if(count($_POST)){
	var_dump($_POST);
	}
		?>
        
        <form method="post">
			
			<select name="select">
				<option value="1">Value 1</option>
				<option value="2">Value 2</option>

        </form>                   
    </body>
</html>



