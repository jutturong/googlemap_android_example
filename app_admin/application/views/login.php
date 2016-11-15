<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
		<meta charset="utf-8">
		<link href="<?php echo base_url(); ?>css-login/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="<?php echo  base_url(); ?>images-login/user.png" alt=""/>
					</div>
                        
                              <?php  echo form_open('welcome/checklogin');  ?>
				<!--<form>-->
                                <input type="text"  id="us"  name="us"     class="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                                <input type="password"  id="ps" name="ps"   onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<div class="submit">
							<input type="submit"  value="LOGIN" >
					</div>	
					<p><a href="#">Forgot Password ?</a></p>
				<!--</form>-->
                              <?php   echo form_close();  ?>  
                        
                        
			</div>
			<!--//End-login-form-->
			 <!-----start-copyright---->
                                       <!-- 
   					<div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div>
                                       -->
                         
				<!-----//end-copyright---->
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>