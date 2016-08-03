<div class="title-content">Giỏ Hàng Của Bạn</div>
<?php 
	$i = 1;
	if(count($dataShop) >0) {
?>


	<table  width="90%" border="0" align="center" cellpadding="0" cellspacing="15" style='text-align:center'>
	    <tr style = 'height:25px; line-height:25px; font-size:14px'>
	    	<th style='display:none'></th>
	    	<th>STT</th>
	         
	        <th>Tên Sản Phẩm</th>

	        <th>Giá</th>

	        <th>Số Lượng</th>
	        
	        <th>Thành Tiên</th>
	    </tr>

	    <?php foreach ($dataShop as $items ) { ?>
			<tr>
				<td style='display:none'><input type="text" name="<?php echo('rowid_'.$i)?>" value="<?php echo $items['rowid'] ?>" size="5"/>

				<td><?php echo $i?></td>

	            <td><?php echo $items['name']  ?> </td>

	            <td><?php echo $items['gia_display'] ?> </td>

	            <td><?php echo $items['qty'] ?> </td>

	            <td><?php echo($items['gia_displayTotal'])?> </td>
	        </tr>
		<?php $i++; } ?>

		<tr>
			<td  align="right" style="padding-right:10px; font-weight:bold; font-size:14px" colspan="4"></td>
		    <td align="center">------------------</td>
	    </tr>

		<tr>
			<td  align="right" style="padding-right:10px; font-weight:bold; font-size:14px" colspan="4">Tổng Cộng:</td>
		    <td align="center" style="font-weight:bold; font-size:14px"><?php echo $totalAmount ?></td>
	    </tr>


	</table>


<div class="modal-footer">
	<table align="center" border="0" width="90%">
		
		<tr>
			<td style="text-align: right" width="80%">
			    <form name="ThanhToan" method="post" action="../home/showcart">
			    	<input type="submit" value="Trở Lại" class='btn'/>
			    </form>
		   	</td>
		   	<td style="text-align: right">
			    <form name="ThanhToan" method="post" action="../cartfinish/infopayment">
			    	<input type="submit" value="Tiếp Tục" class='btn'/>
			    </form>
		   	</td>
		</tr>
	</table>

</div>


<?php } else 
	echo("<div style='text-align: center'>Không có sản phẩm nào trong giỏ hàng </div>");
?>