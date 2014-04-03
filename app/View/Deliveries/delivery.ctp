<script type="text/javascript">
 $(document).ready(function() {
        $(".date").datepicker({dateFormat:'yy-mm-dd',
                                maxDate: 0});

   $('#order').on('change',function(){
    if($(this).val() == 'Bread'){
        $('.Bread').show();
        $('.Cake').hide();
      }else{
        $('.Cake').show();
        $('.Bread').hide();
      } 
 });

  });
 </script>
 <script>
  $().ready(function() {
      $("#EmployeeOrderDeliveryForm").validate({
      });
  });
</script>
 
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<?php	echo $this->Form->create('EmployeeDetail',array('url'=>array('controller'=>'Deliveries',
																		'action'=>'delivery')));?>
				<?php
						$i=0;
						echo "<table class='table table-hover'>";
						echo "<tr class='info'><th style='width: 410px;'>Type</th><th style='width: 410px;'>Item</th>
							<th style='width: 410px;'>Quantity</th><th style='width: 410px;'>
								Received Quantity</th>";
				foreach ($order_data as $key => $value) {
					$v1=$value['Eorderdetail']['type'];
					$v2=$value['Eorderdetail']['item_id'];
					$v3=$value['Eorderdetail']['order_id'];
					?>
					<tr>
					<td>
						<label><?php echo $value['Eorderdetail']['type'];  ?></label>
					</td>
					<td>
						<label><?php echo $value['Eorderdetail']['item_id'];  ?></label>
					</td>
					<td>
						<label><?php echo $value['Eorderdetail']['quantity'];  ?></label>
					</td>
					<td>
						<?php echo $this->Form->input($i.'.qty', array('type' => 'text', 'label'=>false,
																'class'=>'required rqtyinput number'));?>
					</td>
					<?php echo $this->Form->input($i.'.v1',array('type'=>'hidden','value'=>$v1)); ?>
					<?php echo $this->Form->input($i.'.v2',array('type'=>'hidden','value'=>$v2)); ?>
					<?php echo $this->Form->input($i.'.v3',array('type'=>'hidden','value'=>$v3)); ?>
					<?php  $i++; echo "</tr>";} echo"</table>";  ?>

					<input type="submit" value="Receive" class='submitbtn btn3 btn-success btn2' style="margin-left: 60px;" > 
    
    				<?php echo $this->Form->end();?>
			</div>
		</fieldset>
	</div>
</div>