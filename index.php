<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Online Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br><div>
   <table width="100%" height="100%" align="center" valign="center">
   <tr><td>
      <img src="w.jpg" alt="wine" hspace="20"/>
     <td><b>This is an online book store, providing you with the option to shop for books online from the convenience of your own home. It provides you with the option of either picking up your order from one of stores around the province, or having it shipped directly to your doorstep.</b></td>
   </td></tr>
   </table>
</div>
								<br>		
							
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
