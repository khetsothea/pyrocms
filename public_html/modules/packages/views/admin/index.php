<?= form_open('admin/packages/show'); ?>
<table border="0" class="listTable">
    
  <thead>
	<tr>
		<th class="first"><div></div></th>
		<th><a href="#">Package</a></th>
		<th><a href="#">Updated</a></th>
		<th class="last"><span>Actions</span></th>
	</tr>
  </thead>
  
  <tbody>
	<? if ($packages) {
			anchor('admin/packages/edit/' . $package->slug, 'Edit') . ' | '.
			anchor('admin/packages/delete/' . $package->slug, 'Delete', array('class'=>'confirm')) . '</td></tr>';
	</tbody>
</table>

<p>	
	<input type="submit" name="btnSave" value="Save Featured Packages" />
</p>

<?= form_close(); ?>