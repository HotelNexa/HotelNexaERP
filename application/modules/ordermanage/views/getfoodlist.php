 <?php $i=0;
  foreach($itemlist as $item)
  {
    $item=(object)$item;
    $i++;
    $this->db->select('*');
    $this->db->from('menu_add_on');
    $this->db->where('menu_id',$item->ProductsID);
    $query = $this->db->get();
    $getadons="";
    if ($query->num_rows() > 0) {
      $getadons = 1;
    }
    else{
        $getadons =  0;
        }
    ?>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-p-3">
        <div class="card product-card select_product positemcard">
            <div class="card-body p-2"> <img
                    src="<?php echo base_url(!empty($item->small_thumb)?$item->small_thumb:'assets/img/icons/default.jpg'); ?>"
                    class="img-responsive" alt="<?php echo $item->ProductName;?>">
                <input type="hidden" name="select_product_id" class="select_product_id"
                    value="<?php echo $item->ProductsID;?>">
                <input type="hidden" name="select_totalvarient" class="select_totalvarient"
                    value="<?php echo $item->totalvarient;?>">
                <input type="hidden" name="select_iscustomeqty" class="select_iscustomeqty"
                    value="<?php echo $item->is_customqty;?>">
                <input type="hidden" name="select_product_size" class="select_product_size"
                    value="<?php echo $item->variantid;?>">
                <input type="hidden" name="select_product_isgroup" class="select_product_isgroup"
                    value="<?php echo $item->isgroup;?>">
                <input type="hidden" name="select_product_cat" class="select_product_cat"
                    value="<?php echo $item->CategoryID;?>">
                <input type="hidden" name="select_varient_name" class="select_varient_name"
                    value="<?php echo $item->variantName;?>">
                <input type="hidden" name="select_product_name" class="select_product_name"
                    value="<?php echo $item->ProductName; if(!empty($item->itemnotes)){ echo " -".$item->itemnotes;}?>">
                <input type="hidden" name="select_product_price" class="select_product_price"
                    value="<?php echo $item->price;?>">
                <input type="hidden" name="select_addons" class="select_addons" value="<?php echo $getadons;?>">
            </div>
            <div class="card-footer">
              <span class="positemfooter">
                <?php echo $item->ProductName;?> (<?php echo $item->variantName;?>)
                  <?php if(!empty($item->itemnotes)){ echo " -".$item->itemnotes;}?>
                </span>
            </div>
        </div>
    </div>
 <?php } ?>