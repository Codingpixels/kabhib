<script type="text/javascript">
 $(document).ready(function() {
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
      $("#EreturnOrderSelectForm").validate({
      });
  });
  function my(){
      var a = $(".number").val();
      b = isNaN(a);
      if (b) {
        $("#error").css("display", "block");
        var x = 'Please insert number.'
        document.getElementById("error").innerHTML = x;
        return false;
      } else {
        $("#error").css("display", "none");
        return true;
     }
  } 
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
<div class="main_content">
  <div class='inner_content'>
    <fieldset class='stockorder'>
      <div class='subinner'>
          <label><b><u>Take Delivery :</u></b></label>
          <?php echo $this->Form->create('Ereturn',array('url'=>array('controller'=>'Deliveries',
                                    'action'=>'order_select')));?>
          <?php echo $this->Form->input('oid', array('type' => 'text', 'label'=>false,
                                            'class' => 'required number','label'=>'Order ID:','value' => $lastinsertid));?>
          <div id='error'></div>
          <input type="submit" value="Check Order" class='submitbtn btn3 btn-success btn2' onclick="return my();" > 
          <?php echo $this->Form->end();?>
      </div>
    </fieldset>
  </div>
</div>
