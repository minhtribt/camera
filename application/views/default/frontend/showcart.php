<div class="title-content">Giỏ Hàng Của Bạn</div>
<?php 
	$i = 1;
	if(count($dataShop) >0) {
?>

<form action="../cartfinish/updateQtyProduct" method="post" name="suaSoLuong">
	<table  width="100%" border="0" align="center" cellpadding="0" cellspacing="15" style='text-align:center'>
	    <tr style = 'height:25px; line-height:25px; font-size:14px'>
	    	<th style='display:none'></th>
	    	<th>STT</th>	        
	        <th>Xóa</th>	         
	        <th>Tên Sản Phẩm</th>
	        <th>Giá</th>
	        <th>Số Lượng</th>	        
	        <th>Thành Tiên</th>
	    </tr>

	    <?php foreach ($dataShop as $items ) { ?>
			<tr>
				<td style='display:none'><input type="text" name="<?php echo('rowid_'.$i)?>" value="<?php echo $items['rowid'] ?>" size="5"/>

				<td><?php echo $i?></td>

	            <td class='updateCart'><a href="../cartfinish/deleteProductOnCart/<?php echo $items['rowid'] ?>"><img src="<?php echo base_url() ?>/asset/frontend/images/delete-icon.png" width='16' height='16'></a></td>

	            <td><?php echo $items['name']  ?> </td>

	            <td><?php echo $items['gia_display'] ?> </td>

	            <td><input style='text-align: center' type="text" name="<?php echo('qty_'.$i)?>" value="<?php echo $items['qty'] ?>" size="5"/>

	            <td><?php echo($items['gia_displayTotal'])?> </td>
	        </tr>
		<?php $i++; } ?>

		<tr>
			<td  align="right" style="padding-right:10px; font-weight:bold; font-size:14px" colspan="5"></td>
		    <td align="center">---------------------</td>
	    </tr>

		<tr>
			<td  align="right" style="padding-right:10px; font-weight:bold; font-size:14px" colspan="5">Tổng Cộng:</td>
		    <td align="center" style="font-weight:bold; font-size:14px"><?php echo $totalAmount ?></td>
	    </tr>


	</table>

	<div align="center" style="padding-top:20px" > <input type="submit" class='btn buttonSubmit' value="Câp Nhật Số Lượng"/></div>
</form>

<div class="modal-footer">
	<table align="center" border="0" width="100%">
		<tr>
			<td style="text-align: left">
			    <form name="tieptuc" method="post" action="../category">
			    	<input type="submit"  value="Tiếp Tục Mua Hàng"  class='btn buttonSubmit'/>
			    </form>
			</td>
		   	<td style="text-align: right ">
			    <form name="ThanhToan" method="post" action="../cartfinish/payment">
			    	<input type="submit" value="Thanh Toán" class='btn buttonSubmit larg'/>
			    </form>
		   	</td>
		</tr>
	</table>
</div>


<?php } else 
	echo("<div style='text-align: center'>Không có sản phẩm nào trong giỏ hàng </div>");
?>