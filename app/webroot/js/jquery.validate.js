(function ( $ ) {
    $.fn.removevalidate = function( options ) {
        $(this).find('input,textarea,.mceIframeContainer').each(function(){
            $(this).unbind();
        });
        $(this).find(':input[type=submit]').unbind();
        $(this).find(':input[type=password],:input[type=text],:input[type=url],:input[type=email],textarea').each(function(i){
           $(this).unbind(); 
        });
    };
    $.fn.validate = function( options ) {
        var msg = "";
        // Set html 5 default messages null 
        $(this).attr('novalidate', 'novalidate');
        var data;
        var settings = $.extend({
            id: "",
            msg: "This field is required."
        }, options );
        var call_custom = false;
        if(options == undefined){
           msg = settings.msg; 
        }else{
            call_custom = true;
        }
        var form = this;
        /*$(this).find('input,textarea,.mceIframeContainer').each(function(){
            inpt_type = $(this).attr('type');
            if(inpt_type!="submit"){
                $(this).keyup(function(){
                    data= this;
                    valid(data,call_custom,options);
                });
            }
        });*/
        
        $(this).find('input,textarea,.mceIframeContainer,select').bind('focus',function(event){
          if($(this).next().hasClass('error-message')){
                $(this).next().remove();
                $(this).css('border','1px solid #B5B5B5');
            }
        });
        
        $(this).find(':input[type=submit]').bind('click',function(event){
            tiny_mce = false;
            stopvalidate =  false;
            label = "<div class='error-message'>"+msg+"</div>";
            prev = false;
            $(form).find('.select-class.required').each(function(){
                var frm_sub = false;
                frm_sub = valid_select(this,frm_sub);
                $(this).bind('change',function(){
                   frm_sub = valid_select(this,frm_sub);
               });
                if(frm_sub){
                    prev = true;
                    stopvalidate =  true;
                }
            });
           
            $(form).find(':input[type=password],:input[type=text],:input[type=url],:input[type=email],textarea').each(function(i){
              if($(this).hasClass('required')){  
                   if($(this).next().hasClass('mceEditor'))
                    {
                        tiny_mce =true;
                        id  = $(this).attr('id');
                        if(tinymce.get(id).getContent() == ""){
                            if(!$(this).next().next().hasClass('error-message')){
                                //$(this).next().css('border','1px solid red');
                              label = "<div class='error-message padding-top-5'>"+msg+"</div>";
                                $(label).insertAfter($(this).next());
                            }
                            prev = true;
                        }else {
                            if($(this).next().next().hasClass('error-message')){
                                $(this).next().next().remove();
                                $(this).next().css('border','none');
                            }   
                        }
                    }else if($(this).val() == "" && !tiny_mce && ($(this).attr('disabled') == 'disabled') && prev == false){
                      prev = false;
                    }else if($(this).val() == "" && !tiny_mce){
                        if(!$(this).next().hasClass('error-message')){
                                $(this).css('border','1px solid red');
                                if(call_custom){
                                    msg = custom_msg(options,$(this).attr('id'));
                                    label = "<div class='error-message'>"+msg+"</div>";
                                    $(label).insertAfter($(this));
                                }else{
                                    $(label).insertAfter($(this));   
                                }
                            }
                        prev = true;    
                     } 
                     if(tiny_mce){
                        remove_class(this);
                    }
                }// if has class required
                // validate all the email, url, phone irrespective of whether they are required or not 
                if($(this).val() != ""){
                    if($(this).hasClass('match_pass')){
                        target_val = $(form).find('.target_pass').val();
                        if(target_val != $(this).val()){
                            if(!$(this).next().hasClass('error-message')){
                                  $("<div class='error-message'>Passwords don't match.</div>").insertAfter($(this));
                                  $(this).css('border','1px solid red');
                              }
                              prev = true;
                        }else{
                            remove_class(this);
                        }
                    } else  if($(this).hasClass('frm_email')){
                          value = $(this).val();
                          if(!val_email(value)){
                              if(!$(this).next().hasClass('error-message')){
                                $("<div class='error-message'>Please enter a valid email address.</div>").insertAfter($(this));
                                $(this).css('border','1px solid red');
                            }
                            prev = true;
                        }else{
                            remove_class(this);
                          }
                    } else if($(this).hasClass('frm_phone')){
                        value = $(this).val();
                        if(!val_phone(value)){
                            if(!$(this).next().hasClass('error-message')){
                                $("<div class='error-message'>Please enter a valid phone number (no spaces).</div>").insertAfter($(this));
                                $(this).css('border','1px solid red');
                                  window.scrollTo(250, 250);
                            }
                            prev = true;
                        }else{
                            remove_class(this);
                          }
                    }else if ($(this).hasClass('only_numbers')){
                        value = $(this).val();
                        if(!just_num(value)){
                            if(!$(this).next().hasClass('error-message')){
                                $("<div class='error-message'>Please enter only nimeric value.</div>").insertAfter($(this));
                                $(this).css('border','1px solid red');
                            }
                            prev = true;
                        }else{
                            remove_class(this);
                          }
                    }else if ($(this).hasClass('only_alphabets')){
                        value = $(this).val();
                        if(!just_num(value)){
                            if(!$(this).next().hasClass('error-message')){
                                $("<div class='error-message'>Please enter only letters.</div>").insertAfter($(this));
                                $(this).css('border','1px solid red');
                            }
                            prev = true;
                        }else{
                            remove_class(this);}
                    }else if($(this).hasClass('frm_url')){
                        value = $(this).val();
                        if(!url_val(value)){
                            if(!$(this).next().hasClass('error-message')){
                                $("<div class='error-message'>Please enter a valid website address.</div>").insertAfter($(this));
                                $(this).css('border','1px solid red');
                            }
                            prev = true;
                        }else{
                            remove_class(this);
                          }
                    }else {
                         remove_class(this);
                      }
                      if(stopvalidate){
                        prev = true;
                       }
               } else if(!$(this).hasClass('required')){
                  remove_class(this);
              }
            });

            if(prev){
            	// alert(prev);
            	// console.log(event);
                event.preventDefault();
            }

        });
    };
 
}( jQuery ));

function remove_class(data){
    if($(data).next().hasClass('error-message')){
          $(data).next().remove();
          $(data).css('border','1px solid #B5B5B5');
     }   
}

function valid_select(data,frm_sub){
  if($(data).prev().is(':visible')){
      val = $(data).prev().find('.dk_label').text();
        if(val.indexOf('select') >  0 || val == ""|| val == "Add new team" || val == "Add new cup" || val == "Add new type" || val.indexOf('Select') == 0 || val == "Please Select"){
          if(!$(data).next().hasClass('error-message')){
        $("<div class='error-message'>This field is required.</div>").insertAfter($(data));
            $(data).prev().find('.dk_label').parent().css('border','1px solid red');
          }
          frm_sub = true;
      }else{
        if($(data).next().hasClass('error-message')){
            $(data).next().remove();
            $(data).prev().find('.dk_label').parent().css('border','1px solid #B5B5B5');
          }
          frm_sub = false;
      }
      return frm_sub;
   }
}
function valid(data,call_custom,options){
    alert('here');
    if(call_custom){
        msg = custom_msg(options,$(data).attr('id'));
    }else{
        msg = "This field is required.";
    }

    label = "<div class='error-message'>"+msg+"</div>";
    type = $(data).is('textarea');
    if( type != 'hidden'){
       if($(data).hasClass('required')){
            if($(data).val() == ""){
                if(type){
                    if(!$(data).next().hasClass('error-message')){
                        $(label).insertAfter($(data));
                    } 
                }else{
                    if(!$(data).next().hasClass('error-message')){
                        $(label).insertAfter(data);
                    }
                }   
                $(data).css('border','1px solid red');
            }else {
                if($(data).next().hasClass('error-message')){
                    $(data).next().remove();
                    $(data).css('border','1px solid #B5B5B5');
                }   
            }
        }
    }

}


function val_email(value){
   return /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
}
//     /^((\+44?|0)(7|8|2|1)\d{3}?\d{6})$/;
function val_phone(value){
    return  /^[789]\d{9}$/.test(value);
}
function only_alphabets(value){
    return /^[a-zA-Z]+$/.test(value);
}
function only_numbers(value){
    return /^[0-9]*$/.test(value);
}
function url_val(value){
    return /^((http)(\:)(\/\/))?([a-z0-9_-]+\.)?[a-z0-9_-]+(\.[a-z]{2,6}){1,5}(\/[\w]+)*$/.test(value);
}
function custom_msg(options,ids){
    msg = "This field is required.";
    $(options.id).each(function(i){
         if(options.id[i] == ids){
           msg = options.msg[i]; 
        }
    });
    return msg;
}