<h2>Products</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>products/edit"><input type="submit"  value="Add New Product" /></a></div>
<div class="separator" style="height:20px;"></div>

<div class="messages">
<?php 
    if($this->session->flashdata('error')) {
        echo $this->session->flashdata('error');
    }
    else if($this->session->flashdata('error1')) {
        echo $this->session->flashdata('error1');
    }
    else {
        $this->session->flashdata('success');
    }
?>
</div>

<table cellspacing="0" cellpadding="0" class="table_1">
	<tbody>
        <tr>
    		<th>S.N.</th>
    		<th>Product</th>
            <th> Price</th>
    		<th> Thumbnail</th>
            <th> Status</th>
            <th>Created On</th>
            <th>Updated On</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php 
            $sn = 1; 
            if(sizeof($products) > 0):
                foreach($products as $product): 
        ?>
                <tr>
            		<td><?php echo $sn++; ?></td>
            		<td><?php echo $product['product_name'] ?></td>
                    <td><?php echo '$' . number_format($product['product_price'], 2, ",", "") ?></td>
            		<td><?php if(file_exists("./uploads/". $product['image'])) { echo "<img src='".site_url()."uploads/".$product['image']."' width=75 />"; } ?></td>
                    <td><?php echo $this->library->get_status_label($product['product_status']); ?></td>
                    <td><?php echo $this->library->get_date_time_format($product['created_date']); ?></td>
                    <td><?php echo $this->library->get_date_time_format($product['updated_date']); ?></td>
            		<td class="last_cell"><a href="<?php echo site_url() ?>products/edit/<?php echo $product['product_id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>products/delete/<?php echo $product['product_id'] ?>" onclick="return confirm('Are you sure to delete the menu permanently?')">Delete</a></td>
            	</tr>
    	<?php 
                endforeach; 
            else:
        ?>
                <tr>
                    <td colspan="7">No products created yet.</td>
                </tr>
        <?php 
            endif;
        ?>
   </tbody>
</table>