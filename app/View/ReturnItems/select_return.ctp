<?php
	$note_array=array('select'=>'select','Reuse'=>'Reuse','Damage'=>'Damage');
?>
  
<div class="main_content"> 
  <div class='inner_content'>
    <fieldset  class='stockorder'>
            <div class='subinner'>
              		<?php echo $this->Form->create('EmployeeOrder');?>
                  <?php echo $this->Form->input('order_id', array('type' => 'text','label'=>'Order Id:',
                      												'class' => 'required','id'=>'order_id'));?>
                  <div id='error' style="display:none;"> required</div>
                  <input readonly id="btn" value="Search" class='submitbtn btn4 btn-success btn2' type="button"> 
                  
                  <?php echo $this->Form->end();?>
                  <div id='error'></div>
                  <div id='ajaxDiv'>Your result will display here</div>
            </div>
    </fieldset>
  </div>
</div>
<script type="text/javascript">
$('#btn').click(function(e){
  var a = $("#order_id").val();
  if (a > 0) {
    $("#error").css("display", "none");
    var data = $('form').serialize();
    $.ajax({
              dataType: "html",
              type: "POST",
              url:'stock_return',
              data: data,
              success: function (data, textStatus){
                  $("#ajaxDiv").html(data);
              }
          });
  } else {
    $("#error").css("display", "block");
    var x = 'This field is required.'
    document.getElementById("error").innerHTML=x;
  }
});
</script>
<style type="text/css">
#error{
  display: block; 
  margin-bottom: -24px; 
  margin-top: 34px; 
  margin-left: 14px;
  color: #800000;
}
</style>
