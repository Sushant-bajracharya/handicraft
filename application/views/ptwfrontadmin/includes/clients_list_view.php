<h2>Clients</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>clients/edit"><input type="submit"  value="Add Client" /></a></div>
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
            <th>Name</th>
    		<th>Logo</th>
    		<th>Description</th>
            <th>Status</th>
            <th>Created On</th>
			<th>Updated On</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php $sn = 1; foreach($clients as $client): ?>
        <tr>
    		<td><?php echo $sn++; ?></td>
            <td><?php echo $client['name'] ?></td>
    		<td><img src="<?php echo site_url() ?>/uploads/clients/<?php echo $client['logo'] ?>" height="100" /></td>
    		<td><?php echo $client['desc'] ?></td>
            <td><?php echo $this->library->get_status_label($client['status']) ?></td>
            <td><?php echo $this->library->get_date_time_format($client['created_at']); ?></td>
			<td><?php echo $this->library->get_date_time_format($client['updated_at']); ?></td>
    		<td class="last_cell"><a href="<?php echo site_url() ?>clients/edit/<?php echo $client['client_id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>clients/delete/<?php echo $client['client_id'] ?>" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
    	</tr>
    	<?php endforeach; ?>
   </tbody>
</table>