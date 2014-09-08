<h2>Blog</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>blog/edit"><input type="submit"  value="Add News" /></a></div>
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
    		<th>News Title</th>
    		<th>Short Description</th>
            <th>Created On</th>
			<th>Updated On</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php $sn = 1; foreach($news as $blog): ?>
        <tr>
    		<td><?php echo $sn++; ?></td>
    		<td><?php echo $blog['title'] ?></td>
    		<td><?php echo $blog['short_desc'] ?></td>
            <td><?php echo $this->library->get_date_time_format($blog['created_at']); ?></td>
			<td><?php echo $this->library->get_date_time_format($blog['updated_at']); ?></td>
    		<td class="last_cell"><a href="<?php echo site_url() ?>blog/edit/<?php echo $blog['blog_id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>blog/delete/<?php echo $blog['blog_id'] ?>" onclick="return confirm('Are you sure to delete the news permanently?')">Delete</a></td>
    	</tr>
    	<?php endforeach; ?>
   </tbody>
</table>