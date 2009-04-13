<?=form_open('admin/staff/delete'); ?>

<table border="0" class="listTable">
    
  <thead>
	<tr>
		<th class="first"><div></div></th>
		<th><a href="#">Staff Member</a></th>
		<th><a href="#">Updated</a></th>
		<th class="last"><span>Actions</span></th>
	</tr>
  </thead>
  <tfoot>
  	<tr>
  		<td colspan="4">
  			<div class="inner"></div>
  		</td>
  	</tr>
  </tfoot>
	
    <? if ($staff):?>
				<td>
					<?=anchor('staff/' . $member->slug, 'View', 'target="_blank"');?> | 
					<?=anchor('admin/staff/edit/' . $member->slug, 'Edit');?> | 
					<?=anchor('admin/staff/delete/' . $member->slug, 'Delete', array('class'=>'confirm'));?>
                </td>
		
 	</tbody>
</table>

<? $this->load->view('admin/layout_fragments/table_buttons', array('buttons' => array('delete') )); ?>
 
<?=form_close(); ?>