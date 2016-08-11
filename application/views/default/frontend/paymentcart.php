<?php 
	$i = 1;
	if(count($dataShop) >0) {
?>


<div style="clear: both;"></div>
<div class="paralax bg-image page-title" style=" background: #424242;">
  <div class="container-fluid">
    <div class="title">
      	Giỏ hàng của bạn
    </div>
  </div>
</div>


<div id="" class="container-tritran">
<div class="col-md-9">
	<form action="../cartfinish/updateQtyProduct" method="post" name="suaSoLuong">
	<table style="margin-top: 20px" width="100%" border="0" class="table-bordered">
		<thead>	     
	        <tr>
		    	
		    	<th>STT</th>	        
		        <th>Tên Sản Phẩm</th>
		        <th>Giá</th>
		        <th>Số Lượng</th>	        
		        <th>Thành Tiên</th>
		    </tr>	     
	    </thead>
	    <tbody>

	    <?php foreach ($dataShop as $items ) { ?>
			<tr>
				<td><?php echo $i?></td>
				<td><?php echo $items['name']  ?> </td>
	            <td><?php echo $items['gia_display'] ?> </td>
	            <td><?php echo $items['qty'] ?> </td>
	            <td><?php echo($items['gia_displayTotal'])?> </td>
		<?php $i++; } ?>

		<tr>
			<td  align="right" style="padding-right:10px; border: 0px; font-weight:bold; font-size:14px" colspan="4"></td>
		    <td align="center" style="border: 0px;">---------------------</td>
	    </tr>
		<tr>
			<td  align="right" style="border: 0px; padding-right:10px; font-weight:bold; font-size:14px" colspan="4">Tổng Cộng:</td>
		    <td align="center" style="border: 0px; font-weight:bold; font-size:14px"><?php echo $totalAmount ?></td>
	    </tr>
		</tbody>
	</table>
	</form>

<div class="modal-footer">
	<table align="center" border="0" width="90%">
		
		<tr>
			<td style="text-align: right" width="80%">
			    <form name="ThanhToan" method="post" action="../home/showcart">
			    	<input type="submit" value="Trở Lại" class='btn buttonSubmit'/>
			    </form>
		   	</td>
		   	<td style="text-align: right">
			    <form name="ThanhToan" action="../cartfinish/infopayment">
			    	<input type="submit" value="Tiếp Tục" class='btn buttonSubmit'/>
			    </form>
		   	</td>
		</tr>
	</table>

</div>
<?php } else 
	echo("<div class='khongcosanpham'>Không có sản phẩm nào trong giỏ hàng </div>");
?>
</div>
<div class="col-sm-3 sidebar sidebar-product tritran_4" style="">
  <?php $this->load->view("default/layout/frontend/sidebar-right");?>
  </div>
</div>