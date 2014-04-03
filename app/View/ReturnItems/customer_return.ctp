<div class="main_content">
    <?php
      $note_array=array('select'=>'select','Reuse'=>'Reuse','Demage'=>'Demage');
    ?>
    <div class='inner_content'>
        <fieldset class='stockorder'>
            <div class='subinner'>
                <?php echo $this->Form->create();?>
                <label class='order-label'>Order ID:</label>
                <div class='return-form'>
                    <?php echo $this->Form->input('order_id', array('type' => 'text','label'=>false,
                                                'class' => 'required','id'=>'orderid'));?>
                </div>
                <?php echo $this->Form->end();?>
                <button type="submit" class="btn-success btn submitbtn btn2 return" value="ok" id="submit" 
                >SEARCH</button>
                <div id='error'></div>
                <div class="add_list">

                </div>
            </div>
        </fieldset>        
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').click(function(){
          var a = $("#orderid").val();
          if (a > 0) {
            $("#error").css("display", "none");
            $('.add_list').empty();
            orderno = $('#orderid').val();
            data = "orderno="+orderno;
            url='return_item';
            $.ajax({
              url:url,
              data:data,
              dataType:"html",
              type:'post',
              success:function(response){
                $('.add_list').append(response);
              },
              error:function(response){}

            });
          } else {
            $("#error").css("display", "block");
            var x = 'This field is required.'
            document.getElementById("error").innerHTML=x;
          }
        });
      });
     
</script>
<style type="text/css">
#error{
  display: block; 
  margin-bottom: -24px;
  margin-left: 14px;
  color: #800000;
  margin-left: 87px;
}
</style>