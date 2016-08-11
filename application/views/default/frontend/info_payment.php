<div class="title-content"> Thông Tin Đặt Hàng</div>

<?php echo form_open(base_url().'cartfinish/infopayment'); ?>

<table width="100%" style="margin: auto" cellpadding="3" cellspacing="3">
	<tr> 
		<td colspan="2"><?php echo validation_errors(); ?></td>
	</tr>
</table>

 <div class="col-sm-5">
	    <div class="form-group">
	        <label class="control-label">Họ và tên</label>
	        <input class="form-control" placeholder="Họ và tên" name="info_name" id="info_name" type="text" value="<?php echo set_value('info_name');?>"/>
	    </div>

	    <div class="form-group">
	        <label class="control-label">Số Di Động</label>
	        <input class="form-control" placeholder="Di động" name="info_phone" id="info_phone" type="text" value="<?php echo set_value('info_phone');?>"/>
	    </div>

	    <div class="form-group">
	        <label class="control-label">Email</label>
	        <input class="form-control" placeholder="email" name="email" id="email" type="text" value="<?php echo set_value('email');?>"/>
	    </div>


	    <div class="form-group">
	        <label class="control-label">Địa chỉ giao hàng</label>
	        <input class="form-control" placeholder="Họ và tên" name="info_address" id="info_address" type="text" value="<?php echo set_value('info_address');?>"/>
	    </div>


		<div class="form-group">
	        <label class="control-label">Ghi chú</label>
	        <input class="form-control" placeholder="Ghi chú" name="info_notes" id="info_notes" type="text" value="<?php echo set_value('info_notes');?>"/>
	    </div>

		<div class="form-group">
				<label class="control-label"><?php echo $captcha_image ?></label>
				<input class="form-control" type="text" name="captcha" placeholder="Nhập mã trong hình trên" value="" size="50" />
		</div>
		<div class="form-group">
				<input type="submit" value="Đồng Ý" class='btn buttonSubmit' />
	    </div>
</div>



