
<form class="form-horizontal" action="<?php echo base_url()?>admin/login" method="POST">            
	<div class="control-group">
	    <label for="inputEmail">Username:</label>                
	    <input type="text" name="username"/>
	</div>
	<div class="control-group">
	    <label for="inputPassword">Password:</label>                
	    <input type="password" name="password"/>                
	</div>
	<div class="control-group" style="margin-bottom: 5px;">                
	   &nbsp;                                      
	</div>
	<div class="form-actions">
	    <button type="submit" class="btn btn-block">Đăng nhập</button>
	</div>
</form>       
<?php if(!is_null($msg)){ echo $msg;}?>
