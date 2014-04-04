<tr class='.clr'>
	<td> 
		<input type='hidden' value=<?php echo $order_item['name'];?> name="<?php echo $order_item['order_no'].'name';  ?>"/>
		<input type='hidden' value=<?php echo $order_item['order_no'];?> name="<?php echo $order_item['order_no'].'no';  ?>"/>
		<?php echo $order_item['item_name'];?>
		<input type='hidden' value="<?php echo $order_item['item_name'];?>" name="<?php echo $order_item['order_no'].'itemname';  ?>" />
	</td>
	<td>
		<input type="text" value='1' name="<?php echo $order_item['order_no'].'quantity';  ?>" align='middle'
		class="qty_size" data-validation="number" data-validation-allowing="range[1;100]" />
	</td>
	<td><button class="delete-button"><label><img src="../img/delete.jpg"></label></button></td>
</tr>

<script type="text/javascript">

	$('tr button').on('click',function(){
        $(this).closest("tr").remove();

     }); 

</script>