<?php
include("bdd/readpubli_bdd.php");


?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Postes-ton programme</title>
	</head>
	<body>


		<?php
		include("raccourcis/header.php");
		?>

		<div class="container_principal">
			<div class="container">
				<h1>Postes-ton programme !</h1>
				<div class="section">
				<form method="POST" action="">	
				    <table style="border:0px; padding:0px; margin:0px;">
				    	<tr>
					  <th colspan="2">
					    <textarea  cols="95" rows="30" name="msg" placeholder="Contenu du programme..."></textarea>
					    </th>
				        </tr>
				        <tr>
						<td align="right">
					     Langage utilisé :
					    </td>
					    <td>
					    	<input type="text" id="langage" name="langage" />
					    </td>
					    </tr>
					    <tr>
					     	<th colspan="4">
					     		<?php
				 				if(isset($erreur)) {
				    				echo '<font color="red">'.$erreur."</font>";
								}else{
									
								}
								?>
								<br/>
								<input type="submit" name="readpubli" value="Poster" />
								
					  	    </th>
				       	</tr>
				    </table>
				</form>


				</div>

			</div>
			<?php
			include("raccourcis/footer.php");
			?>
		</div>

	</body>
</html>
