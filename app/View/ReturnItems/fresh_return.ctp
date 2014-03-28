<div class="main_content">
  <?php
      $type=array('select'=>'select','stock'=>'Stock Return','customer'=>'Customer');
      echo "<div class='inner_content'>";
  ?>
      <fieldset  class='stockorder'>

            <div class='subinner'>
              		<?php echo $this->Form->create('EmployeeOrder');?>
                  <?php echo $this->Form->input('order_id', array('type' => 'text','label'=>'Order Id:',
                      												'class' => 'required','id'=>'order_id'));?>
                  <br>
                  <label style="margin-left:6px;">Return Type:</label>
                  <?php echo $this->Form->input('type', array('type' => 'select', 'options' => $type,'label'=>false, 'class' => 'required','id'=>'type'));?>
                  <div id='error' style="display:none;"> required</div>
                  <input readonly id="btn" value="Order" class='submitbtn btn4 btn-success btn2' type="button" style="margin-top: 104px;"> 
                  
                  <?php echo $this->Form->end();?>
                  <div id='error'></div>
                  <div id='ajaxDiv' style="margin-top:100px;">Your result will display here</div>
            </div>
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
                url:'stock_fresh',
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
  margin-top: -82px; 
  margin-left: 14px;
  color: #800000;
}
</style>
