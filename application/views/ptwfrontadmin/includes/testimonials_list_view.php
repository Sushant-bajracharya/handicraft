<h2><?php echo $pagetitle ?></h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>testimonials/edit"><input type="submit"  value="Add Testimonial" /></a></div>
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
    		<th>Testimonial</th>
    		<th>Client Name</th>
            <th>Website</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php 
            $sn = 1; 
            if(sizeof($testimonials) > 0):
                foreach($testimonials as $testimonial): 
        ?>
                <tr>
            		<td><?php echo $sn++; ?></td>
            		<td><?php echo $testimonial['testimonial'] ?></td>
            		<td><?php echo $testimonial['client_name'] ?></td>
                    <td><?php echo $testimonial['website'] ?></td>
            		<td class="last_cell"><a href="<?php echo site_url() ?>testimonials/edit/<?php echo $testimonial['id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>testimonials/delete/<?php echo $testimonial['id'] ?>" onclick="return confirm('Are you sure to delete the testimonial permanently?')">Delete</a></td>
            	</tr>
    	<?php 
                endforeach; 
            else:
        ?>
                <tr>
                    <td colspan="5">No records found.</td>
                </tr>
        <?php
            endif;
        ?>
   </tbody>
</table>