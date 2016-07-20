
<div class="workplace">
    <div class="row-fluid">                
        <div class="span12">                    
            <div class="head">
                <div class="isw-grid"></div>
                <h1>List</h1>                               
                <div class="clear"></div>
            </div>
            <div class="block-fluid table-sorting">
                <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                    <thead>
                        <tr>
                            <th width       ="3%"><input type ="checkbox" id="checkallTinTuc"/></th>
                            <th width       ="3%">STT</th>
                            <th width       ="15%">Tên Banner</th>
							<th width       ="10%">Số lần click</th>
							<th width       ="10%">Ngày đăng</th>
                            <th width       ="40%">Hình minh họa</th>
                            <th width       ="10%">Ẩn/Hiện</th>
                            <th width       ="10%">Sửa / Xóa</th>

                        </tr>
                    </thead>
                    <tbody>
						<?php 
                            $stt = 1;
                            foreach ($data as $items) {
                        ?>
							<tr>
                                <td><input type="checkbox" class="ckTinTuc" name="ckTinTuc" value=""/></td>
                                <td class ="align-center"><?php echo($stt++); ?></td>
                                <td><?php echo($items['TenBanner'])?></td>
								<td><?php echo($items['SoLanClick']) ?></td>
								<td><?php echo($items['NgayDang'])?></td>
                                <td><img src="<?php echo base_url()?>public/frontend/images/banner/<?php echo($items['urlHinh'])?>" alt="1" title="1"/></td>
                                
                                <td><input type="checkbox" <?php 
                                    if($items['Active'] =='1') 
                                        echo "checked";

                                ?> disabled /> </td>
                                <td>
                                 <a href ="<?php echo base_url()?>admin/banner/editBanner/<?php echo $items['Banner_id']?>" class="table-icon edit" title="Edit"></a>
                                <span class="deleteBanner"><a class="table-icon delete" value = "<?php echo $items['Banner_id']?>" title="Delete"></a></span></td>
							</tr>							
							
                        <?php } ?>
					</tbody>
                </table>
                <div class ="clear"></div>
            </div>
        </div>                                
        
    </div>       

    <div class ="full_w">
        <div class ="clear"></div>
        <div class ="pagination" style="margin-left:10px"><ul><?php echo $this->pagination->create_links();?> </ul></div>
	</div>       
    
    <div class ="dr"><span></span></div>
</div>

<div class="dialog" id="b_popup_4" style="display: none;" title="Modal form">                                
    <div class="block">
        <p>Bạn có muốn xóa tất cả những tin được chọn.</p>
    </div>
</div>  

<div class="dialog" id="popoverDeleteBanner" style="display: none;" title="Modal form">                                
    <div class="block">
        <p>Bạn có muốn xóa Banner được chọn.</p>
    </div>
</div> 