<!----------------------------------------------------------------------------------CONTENT------------------------------------------------------------------------------------------------------------------>

<div style="clear: both;"></div>
<div class="paralax bg-image page-title" style=" background: #424242;">

  <div class="container-fluid">

    <div class="title">
      DANH MỤC THIẾT BỊ
    </div>
  </div>
</div>
<div id="" class="container-tritran">
  <div class="tritran_3" style="">
    <!--*-*-*-*-*-*-*-*-*-*- BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->

    <div class="tritran_none" style="padding-top: 15px; max-width: 100%;">
      <img src="http://thietbikiemsoat.vn/uploads/2016/06/banners-camera-qsat.jpg" style="max-width: 100%;"/>
    </div>
    <div id="" class="carousel slide portfolio_col_carousel_wrapper">

      <!--========= Wrapper for slides =========-->
      <div class="carousel-inner">

        <!--========= First slide =========-->
        <div class="item active">
          <div class="row" style="margin-left: 0px;">
         
              <?php foreach ($records as $sp ) { ?>
              		<div class="col-xs-12 col-sm-6 col-md-3 portfolio_col_item_image" style="padding-left: 0px; padding-bottom: 15px;">
              <div class="col-item col-item-tritran">
                <div class="photo">
                  <img src="<?php echo base_url()?>/asset/frontend/images/products/<?php echo($sp['product_img']); ?>" class="img-responsive" width="370" height="200">
									</div>
                <div class="infomation">
                  <div>
                    <div>
                      <h5>
                        <?php echo($sp['product_name']); ?>
                      </h5>
                      <h5 class="price-text-color">
                        <?php echo($sp['product_price']); ?>
                      </h5>
                    </div>

                  </div>
                  <div class="separator clear-left">
                    <p class="btn-add">
                      <i class="fa fa-shopping-cart"></i>
                      <a href="#" class="hidden-sm">Add to cart</a>
                    </p>
                    <p class="btn-details">
                      <i class="fa fa-list"></i>
                      <a href="#" class="hidden-sm">More details</a>
                    </p>
                  </div>
                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>
					
				<?php } ?>	
				<div class="pagination"><?php echo $this->pagination->create_links();?> </div>

      
            

           
             
               
                 
                     
               
                   
          </div>
        </div>
      </div>
    </div>
    <!--*-*-*-*-*-*-*-*-*-*- END BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->

  </div>
  <?php $this->load->view("default/layout/frontend/sidebar-right");?>
</div>