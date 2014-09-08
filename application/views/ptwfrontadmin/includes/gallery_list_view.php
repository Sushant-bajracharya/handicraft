<h2>Gallery</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>cgallery/edit"><input type="submit"  value="Add Image" /></a></div>
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
    		<th>Gallery title</th>
    		<th> Thumbnail</th>
        <th class="last_cell">Action</th>
    	</tr>
    
    	<?php 
            $sn = 1; 
           // if(sizeof($data) > 0):
                foreach($data as $product): 
        ?>
                <tr>
            		<td><?php echo $sn++; ?></td>
            		<td><?php echo $product['title'] ?></td>
            		<td><?php if(file_exists("./uploads/". $product['image'])) { echo "<img src='".site_url()."uploads/".$product['image']."' width=75 />"; } ?></td>
                   
                  
            		<td class="last_cell"><a href="<?php echo site_url() ?>cgallery/edit/<?php echo $product['id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>cgallery/delete/<?php echo $product['id'] ?>" onclick="return confirm('Are you sure to delete the menu permanently?')">Delete</a></td>
            	</tr>
    	<?php 
                endforeach; 
            //else:
        ?>
              
    
   </tbody>
</table>