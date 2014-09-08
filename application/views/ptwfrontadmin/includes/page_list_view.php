<h2>Pages</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>pages/edit"><input type="submit"  value="Add Page" /></a></div>
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
    		<th>Page Title</th>
    		<!--<th>Description</th>-->
            <th>Created On</th>
			<th>Updated On</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php $sn = 1; foreach($pages as $page): ?>
        <tr>
    		<td><?php echo $sn++; ?></td>
    		<td><?php echo $page['title'] ?></td>
    		<!--<td><?php //echo $page['description'] ?></td>-->
            <td><?php echo $this->library->get_date_time_format($page['created_at']); ?></td>
			<td><?php echo $this->library->get_date_time_format($page['updated_at']); ?></td>
    		<td class="last_cell"><a href="<?php echo site_url() ?>pages/edit/<?php echo $page['id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>pages/delete/<?php echo $page['id'] ?>" onclick="return confirm('Are you sure to delete the page permanently?')">Delete</a></td>
    	</tr>
    	<?php endforeach; ?>
   </tbody>
</table>