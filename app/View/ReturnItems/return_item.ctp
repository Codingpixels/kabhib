<?php /*if(empty($db_data)) {
   echo "Sorry, No data found!!!";
  }
  else { 
    echo $flag;exit;
    //if(!empty($flag)) {
*/
?>
<?php
  $note_array=array('Reuse'=>'Reuse','Damage'=>'Damage', 'Bad taste'=>'Bad taste');
?>
<?php 
  echo $this->Form->create('Customer',array('url'=>array('controller'=>'ReturnItems','action'=>'customer_return')));
  $i=0;
?>
  <table class='table table-hover '>
    <tr class="info">
      <th width=''>Item Name</th>
      <th width=''>Purchase Quantity</th>
      <th width=''>Return Quantity</th>
      <th width=''>Remark</th>

    </tr>
<?php
    foreach ($db_data as $key => $value) {
      $v1=$value['CustomerOrderDetail']['order_id'];
      $v2=$value['CustomerOrderDetail']['item_name'];
      $v3=$value['CustomerOrderDetail']['type'];
      $v4=$value['CustomerOrderDetail']['item_quantity'];
      ?>
      <tr>
        <td width=''>
          <label><?php echo $value['CustomerOrderDetail']['item_name'];  ?></label>
        </td>
        <td width=''>
          <label><?php echo $value['CustomerOrderDetail']['item_quantity'];  ?></label>
        </td>
        <td width=''>
        <?php echo $this->Form->input($i.'.qty', array('type' => 'text', 'label'=>false,
                                                        'class'=>'rqtyinput'));?>
        </td>
        <td width=''>
        <?php echo $this->Form->textarea($i.'.remark', array('type' => 'textarea', 'label'=>false,
                                                          'class'=>'rqtyinput txtbox',
                                                          'rows' =>'1',
                                                          'cols' => '160'));?>
        </td>
        </tr>
    <?php echo $this->Form->input($i.'.v1',array('type'=>'hidden','value'=>$v1)); ?>
    <?php echo $this->Form->input($i.'.v2',array('type'=>'hidden','value'=>$v2)); ?>
    <?php echo $this->Form->input($i.'.v3',array('type'=>'hidden','value'=>$v3)); ?>
    <?php echo $this->Form->input($i.'.v4',array('type'=>'hidden','value'=>$v4)); ?>

  <?php $i++; echo "</tr>";} echo"</table>";?>

  <input type="submit" value="RETURN" class="btn-success btn submitbtn btn2" style="margin-bottom: 0px; padding-bottom: 4px; margin-left: 10px; margin-top: -10px;">
  <br>
  <?php echo $this->Form->end(); ?>
  <?php /*}
        else {
          echo "Sorry, item has already been returned!!";
        }
      }*/
  ?>

 <style type="text/css">
  .add_list .text {
      width: inherit;
  }
  .add_list .select{
      width: inherit;
  }
  .error-message{
    width: 150px !important; 
    padding-bottom: 0px !important; 
    height: 0px !important; 
    padding-top: 5px !important; 
    padding-left: 2px !important; 
  }
</style>
<script >
  $().ready(function() {
          $("#CustomerReturnItemForm").validate({
        });
      });
</script>
