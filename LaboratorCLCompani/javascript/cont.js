/*function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    //inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();
       // setFormMessage(loginForm, "error", "Invalid username/password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "signupUsername" && e.target.value.length > 0 && e.target.value.length < 10) {
                //setInputError(inputElement, "Username must be at least 10 characters in length");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});*/

 /*-------- pentru linkuri -------*/
 /*
 $(document).ready(function() {
    var max_fields_2     = 1;  
    var wrapper_2   		= $(".input_fields_wrap_2"); 
    var add_button_2     = $(".add_field_button_2");
   
   
    var p = 0; 
                     
    $(add_button_2).click(function(e){ 
    e.preventDefault();
        if(p < max_fields_2){ 
 
            p++; 
            $(wrapper_2).append(`
            <div>
            
        <br>
        
        <br>
        
        <br>
        <div>
         <input type="url" id="form_links_3" >
         <span class="error_form" id="links_3_error_message"></span>
         <label id="lin6">
             Youtube
             <i class="gg-youtube"></i>
            
         </label>	
        </div>
       <br>
        
       </div>
            `);
       
        }
        $("#form_links").focusout(function(){
          check_links();
       });
       $("#form_links_1").focusout(function(){
          check_links_1();
       });
       $("#form_links_2").focusout(function(){
          check_links_2();
       });
      
      
 
        function check_links() {
          if($("#form_links").val().search("https://") != -1) {
             check = true;
           } else {
             check = false;
             }
             if($("#form_links").val().search("www.") != -1) {
              sec = true;
           } else {
             sec = false;
             };
             if(check == true || sec == true ) {
                $("#links_error_message").hide();
                $("#forms_links").removeClass('invalid');
                $("#lin3").show(); 
                $("#form_links").addClass('valid');
                error_links = true;
             }else {
                $("#links_error_message").html("Formatul de url este introdus incorect");
              $("#links_error_message").show();
              $("#form_links").addClass('invalid');
              $("#lin3").hide(); 
              
             }
          }
 
          function check_links_1() {
             if($("#form_links_1").val().search("https://") != -1) {
                check = true;
              } else {
                check = false;
                }
                if($("#form_links_1").val().search("www.") != -1) {
                 sec = true;
              } else {
                sec = false;
                };
                if(check == true || sec == true ) {
                   $("#links_1_error_message").hide();
                   $("#forms_links_1").removeClass('invalid');
                   $("#lin4").show(); 
                   $("#form_links_1").addClass('valid');
                   error_links = true;
                }else {
                   $("#links_1_error_message").html("Formatul de url este introdus incorect");
                 $("#links_1_error_message").show();
                 $("#form_links_1").addClass('invalid');
                 $("#lin4").hide(); 
                 
                }
             }
 
             function check_links_2() {
                if($("#form_links_2").val().search("https://") != -1) {
                   check = true;
                 } else {
                   check = false;
                   }
                   if($("#form_links_2").val().search("www.") != -1) {
                    sec = true;
                 } else {
                   sec = false;
                   };
                   if(check == true || sec == true ) {
                      $("#links_2_error_message").hide();
                      $("#forms_links_2").removeClass('invalid');
                      $("#lin5").show(); 
                      $("#form_links_2").addClass('valid');
                      error_links = true;
                   }else {
                      $("#links_2_error_message").html("Formatul de url este introdus incorect");
                    $("#links_2_error_message").show();
                    $("#form_links_2").addClass('invalid');
                    $("#lin5").hide(); 
                    
                   }
                }
                   
         });
         
    $(wrapper_2).on("click",".remove_field", function(e){ 
        e.preventDefault();
         $(this).parent('div').parent('div').remove(); p--;
        })
      });
    
      $(document).ready(function(){
         $("#flip").click(function(){
           $("#panel").slideToggle("slow");
         });
       });
 
 ////validatorul pentru campul principal
 
           $(function() {
    
            var error_fname = false;
            var error_lname = false;
            var error_email = false;
            var error_number = false;
            var error_job = false; 
            var error_link = false;
            var error_link1 = false;
            var error_adress = false;
   
   
            $("#form_fname").focusout(function(){
               check_fname();
            });
            $("#form_lname").focusout(function() {
               check_lname();
            });
            $("#form_email").focusout(function() {
               check_email();
            });
            $("#form_number").focusout(function() {
               check_number();
            });
            $("#form_job").focusout(function() {
               check_job();
            });
            $("#form_link").focusout(function() {
               check_link();
            });
            $("#form_link1").focusout(function() {
              check_link1();
           });
            $("#form_adress").focusout(function() {
              check_adress();
           });
   
           function check_fname() {
            var fname_length = $("#form_fname").val().length;
            if(fname_length >= 3 && fname_length < 15) {
             $("#fname_error_message").hide();
             $("#nume").show();
                $("#form_fname").removeClass('invalid');
                $("#form_fname").addClass('valid');
                error_fname = true;
                
             } else {
               $("#fname_error_message").show();
               $("#nume").hide();
                $("#form_fname").addClass('invalid');
                if(fname_length <  1) {
                   $("#fname_error_message").html("*Completați câmpul");
                   }
                if(fname_length < 3 && fname_length >0) {
                $("#fname_error_message").html("Câmpul Nume este necesar de indeplinit cu cel puțin 3 elemente");
                }
 
             }
   }
   
   function check_lname() {
   
      var lname_length = $("#form_lname").val().length;
      if(lname_length >= 3 && lname_length < 15) {
       $("#lname_error_message").hide();
       $("#lname").show();
          $("#form_lname").removeClass('invalid');
          $("#form_lname").addClass('valid');
          error_lname = true;
          
       } else {
         $("#lname_error_message").show();
         $("#lname").hide();
          $("#form_lname").addClass('invalid');
          if(lname_length <  1) {
             $("#lname_error_message").html("*Completați câmpul");
             }
          if(lname_length < 3 && lname_length >0) {
          $("#lname_error_message").html("Câmpul Prenume este necesar de indeplinit cu cel puțin 3 elemente");
          }
       }
   }
   
            function check_email() {
             var email_length = $("#form_email").val().length;
              if($("#form_email").val().search("@") != -1) {
                check = true;
              } else {
                 check = false;
                }
                if(check == true) {
                 $("#email_error_message").hide();
                 $("#form_email").removeClass('invalid');
                 $("#email").show();
                 $("#form_email").addClass('valid');
                 error_email = true;
                }else {
                   if(email_length < 1) {
                      $("#email_error_message").html("*Completati câmpul");
                   }
                   if(email_length > 0) {
                 $("#email_error_message").html("Email-ul este formatat greșit");}
                  $("#email_error_message").show();
                  $("#email").hide();
                  $("#form_email").addClass('invalid');
                }
            }
   
            function check_number() {
             var number_length = $("#form_number").val().length;
               if($("#form_number").val().search(+373) != -1) {
                 check = true;
               } else {
                 check = false;
                 }
                 if($("#form_number").val().search(0) != -1) {
                  sec = true;
               } else {
                 sec = false;
                 };
                 if(check == true || sec == true ) {
                    $("#number_error_message").hide();
                    $("#form_number").removeClass('invalid');
                    $("#form_number").addClass('valid');
                    $("#tel").show();
                    error_number = true;
                  }else {
                   if(number_length < 1) {
                      $("#number_error_message").html("*Completati câmpul");
                   }
                   if(number_length > 0) {
                   $("#number_error_message").html("Nr de tel. este format greșit sau aparține altei țări(+373)");
                   }
                   $("#number_error_message").show();
                   $("#tel").hide();
                   $("#form_number").addClass('invalid');
                 }
            }
   
            function check_adress() {
             
               var adress_length = $("#form_adress").val().length;
               if(adress_length > 5 && adress_length < 15) {
                $("#adress_error_message").hide();
                   $("#form_adress").removeClass('invalid');
                   $("#adresss").show();
                   $("#form_adress").addClass('valid');
                   error_adress = true;
                   
                } else {
                  $("#adress_error_message").show();
                   $("#form_adress").addClass('invalid');
                   if(adress_length < 1) {
                      $("#adress_error_message").html("*Completati câmpul");
                   }
                   if(adress_length > 0) {
                   $("#adress_error_message").html("Adresa este formată greșit");
                   }
                   $("#adresss").hide();
                  }
            }
   
            function check_job() {
   
               var job_length = $("#form_job").val().length;
               if(job_length > 4 && job_length < 15) {
                $("#job_error_message").hide();
                   $("#form_job").removeClass('invalid');
                   $("#jobs").show();
                   $("#form_job").addClass('valid');
                   error_job = true;
                   
                } else {
                  $("#job_error_message").show();
                   $("#form_job").addClass('invalid');
                   if(job_length < 1) {
                      $("#job_error_message").html("*Completati câmpul");
                   }
                   if(job_length > 0) {
                   $("#job_error_message").html("Alegeți o profesie existentă.");
                   }
                   $("#jobs").hide();             
                  }
            }
   
            
            function check_link() {
              if($("#form_link").val().search("https://") != -1) {
                 check = true;
               } else {
                 check = false;
                 }
                 if($("#form_link").val().search("www.") != -1) {
                  sec = true;
               } else {
                 sec = false;
                 };
                 if(check == true || sec == true ) {
                    $("#link_error_message").hide();
                    $("#form_link").removeClass('invalid');
                    $("#lin1").show(); 
                    $("#form_link").addClass('valid');
                    error_link = true;
                 }else {
                    $("#link_error_message").html("Formatul de url este introdus incorect");
                  $("#link_error_message").show();
                  $("#form_link").addClass('invalid');
                  $("#lin1").hide(); 
                  
                 }
            }
            function check_link1() {
              if($("#form_link1").val().search("https://") != -1) {
                 check = true;
               } else {
                 check = false;
                 }
                 if($("#form_link1").val().search("www.") != -1) {
                  sec = true;
               } else {
                 sec = false;
                 };
                 if(check == true || sec == true ) {
                    $("#link1_error_message").hide();
                    $("#form_link1").removeClass('invalid');
                    $("#form_link1").show(); 
                    $("#form_link1").addClass('valid');
                    error_link1 = true;
                 }else {
                    $("#link1_error_message").html("Formatul de url este introdus incorect");
                  $("#link1_error_message").show();
                  $("#form_link1").addClass('invalid');
                  $("#lin2").hide(); 
                 }
            }
 
            $('.sub').on('click', () => {
 
               error_fname = false;
               error_lname = false;
               error_email = false;
               error_number = false; 
               error_job = false;
               error_link = false;
               error_link1 = false;
               error_adress = false;

               check_fname();
               check_lname();
               check_email();
               check_number();
               check_job();
               check_adress();
               check_link();
               check_link1();
    
               if (error_fname === true && error_lname === true && error_email === true && error_adress === true && error_number === true && error_job === true && error_link === true  && error_link1 === true  ) {
              
                makeRequest(++count);
                navigate();  
            alert("Forma este validata");  
                  return true;
               } else {
                alert("Forma nu este validata");
                  
                return false;
               } 
         });
       });
       */
       $(function(){

         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#alert_error_message").hide();
     
         var error_email = false;
         var error_password = false;
           
          });
          $("#email").focusout(function() {
             check_email();
          });
          $("#password").focusout(function() {
             check_password();
         
          function check_password() {
             var password_length = $("#password").val().length;
             if (password_length < 8) {
                $("#password_error_3").html("Cel puțin 8 caracterers");
                $("#password_error_3").show();
                $("#password").css("border-bottom","2px solid #F90A0A");
                error_password = true;
             } else {
                $("#password_error_message").hide();
                $("#password").css("border-bottom","2px solid #34F458");
             }
          }
     
     
          function check_email() {
             var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
             var email = $("#email").val();
             if (pattern.test(email) && email !== '') {
                $("#email_error_2").hide();
                $("#email").css("border-bottom","2px solid #34F458");
             } else {
                $("#email_error_2").html("Email incorect");
                $("#email_error_2").show();
                $("#email").css("border-bottom","2px solid #F90A0A");
                error_email = true;
             }
          }
     
         
         
          $("#form").submit(function() {
             error_email = false;
             error_password = false;
     
             check_email();
             check_password();
     
     
             if ( error_email === false && error_password === false) {
                $("#error_error_message").html("Succes");
                return true;
             } else {
                $("#error_error_message").html("Completati campurile");
                return false;
             }
          });
         });
    