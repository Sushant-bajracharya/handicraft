<h2>Menus</h2>

<div class="separator" style="height:10px;"></div>
<div class="btnp"><a href="<?php echo site_url() ?>menus/edit"><input type="submit"  value="Add Menu" /></a></div>
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
    		<th>Menu Title</th>
    		<th>Linked Page</th>
            <th>Parent Menu</th>
            <th>Status</th>
            <th>Created On</th>
			<th>Updated On</th>
    		<th class="last_cell">Action</th>
    	</tr>
    
    	<?php $sn = 1; foreach($menus as $menu): ?>
        <tr>
    		<td><?php echo $sn++; ?></td>
    		<td><?php echo $menu['title'] ?></td>
    		<td><?php echo ($menu['linked_page'])? $menu['linked_page']: "None" ?></td>
            <td><?php echo ($menu['parent'])? $this->menus_model->get_menu_byid($menu['parent']) : "None" ?></td>
    		<td><?php echo $this->library->get_status_label($menu['status']) ?></td>
            <td><?php echo $this->library->get_date_time_format($menu['created_at']); ?></td>
			<td><?php echo $this->library->get_date_time_format($menu['updated_at']); ?></td>
    		<td class="last_cell"><a href="<?php echo site_url() ?>menus/edit/<?php echo $menu['id'] ?>">Edit</a> | <a href="<?php echo site_url() ?>menus/delete/<?php echo $menu['id'] ?>" onclick="return confirm('Are you sure to delete the menu permanently?')">Delete</a></td>
    	</tr>
    	<?php endforeach; ?>
   </tbody>
</table>