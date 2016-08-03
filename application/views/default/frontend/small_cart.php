<?php 
	if(count($dataShop) >0) {
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="10">
	<tr> 
	    <th> Tên </th>
	    <th> S.L </th>
	    <th> Giá </th>
	</tr>
	<?php foreach ($dataShop as $items ) { ?>
		<tr>
            <!--<td class='updateCart'><a><img src="<?php echo base_url() ?>/public/frontend/images/trash.gif" id='updateCartImgId_<?php echo $items['rowid']?>'  width='16' height='16'></a></td>-->
            <td><?php echo $items['name']  ?> </td>
            <td style='text-align: center'> <?php echo $items['qty'] ?> </td>
            <td style='text-align: right'><?php echo $items['gia_displayTotal'] ?> </td>
        </tr>
	<?php } ?>	
</table>
<script src="<?php echo base_url()?>public/frontend/scripts/customerReload.js" type="text/javascript"></script>
<?php } else 
	echo("<div style='text-align: center'>Không có sản phẩm nào trong giỏ hàng </div>");
?>