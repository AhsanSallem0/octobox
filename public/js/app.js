$(document).ready(function () {

    $('.tshirtColor').css('display','none');
    $('.pshirtColor').css('display','none');
    $('.sshirtColor').css('display','none');

    // $('.sizeT').css('display','none');
    // $('.sizeP').css('display','none');
    // $('.sizeS').css('display','none');

    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });
    $(".first-step").click(function (e) {
        var name = $("#tshirt").html();
        $("#putshirt").val(name);
        $(".putSType").val(name);
        
        $('.tshirtColor').css('display','block');
        // $('.sizeT').css('display','block');
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".first-step1").click(function (e) {
        var name1 = $("#pshirt").html();
        $("#putshirt").val(name1);
        $(".putSType").val(name1);
        $('.pshirtColor').css('display','block');
        // $('.sizeP').css('display','block');
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".first-step2").click(function (e) {
        var name2 = $("#sshirt").html();
        $("#putshirt").val(name2);
        $(".putSType").val(name2);
        $('.sshirtColor').css('display','block');
        // $('.sizeS').css('display','block');
    
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor1").click(function (e) {
        var color = $('#c1').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor2").click(function (e) {
        var color = $('#c2').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor3").click(function (e) {
        var color = $('#c3').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor4").click(function (e) {
        var color = $('#c4').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }


         
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor5").click(function (e) {
        var color = $('#c5').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor6").click(function (e) {
        var color = $('#c6').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor7").click(function (e) {
        var color = $('#c7').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor8").click(function (e) {
        var color = $('#c8').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor9").click(function (e) {
        var color = $('#c9').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor10").click(function (e) {
        var color = $('#c10').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'T-Shirt') {
            $('.sizeT').css('display','block');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor11").click(function (e) {
        var color = $('#c11').val();
        $("#putcolor").val(color);
        var shirtType = $('#putshirt').val();
          if (shirtType == 'Polo-Shirt') {
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Polo-Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','block');
            $('.sizeS').css('display','none');
         }else if(shirtType == 'Shirt'){
            $('.sizeT').css('display','none');
            $('.sizeP').css('display','none');
            $('.sizeS').css('display','block');
         }

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor12").click(function (e) {
        var color = $('#c12').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'Polo-Shirt') {
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Polo-Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor13").click(function (e) {
        var color = $('#c13').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'Polo-Shirt') {
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Polo-Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor14").click(function (e) {
        var color = $('#c14').val();
        $("#putcolor").val(color);

        var shirtType = $('#putshirt').val();
        if (shirtType == 'Polo-Shirt') {
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Polo-Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor15").click(function (e) {
        var color = $('#c15').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'Polo-Shirt') {
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Polo-Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".next-stepColor16").click(function (e) {
        var color = $('#c16').val();
        $("#putcolor").val(color);


        var shirtType = $('#putshirt').val();
        if (shirtType == 'Shirt') {
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }else if(shirtType == 'Polo-Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','block');
          $('.sizeS').css('display','none');
       }else if(shirtType == 'Shirt'){
          $('.sizeT').css('display','none');
          $('.sizeP').css('display','none');
          $('.sizeS').css('display','block');
       }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });


    $(".next-stepSize20").click(function (e) {

        

        var Xs = $('#putXs').val();
        var S = $('#putS').val();
        var M = $('#putM').val();
        var L = $('#putL').val();
        var Xl = $('#putXl').val();
        var quan = $('#totalQuan').val();


        $(".putSXS").val(Xs);
        $(".putSS").val(S);
        $(".putSM").val(M);
        $(".putSL").val(L);
        $(".putSXL").val(Xl);
        $(".putQuant").val(quan);

        var name = $("#putshirt").val();
        // alert(name)

        var total = $("#totalQuan").val();
        // alert(total)

        if(name == "T-Shirt"){
            if (total > 0 && total < 25) {
                var price = 29;
                 $("#totalPrice").val(price);
             }else if (total > 24 && total < 50) {
                 var price = 22;
                 $("#totalPrice").val(price);
             }else if (total > 49 && total < 100) {
                 var price = 18;
                 $("#totalPrice").val(price);
             }else if (total > 99 && total < 200) {
                 var price = 16;
                 $("#totalPrice").val(price);
             }
             else{
                 var price = 15;
                 $("#totalPrice").val(price);
             }
        }
        else if(name == "Polo-Shirt"){
            if (total > 0 && total < 25) {
                var price = 31;
                 $("#totalPrice").val(price);
             }else if (total > 24 && total < 50) {
                 var price = 23;
                 $("#totalPrice").val(price);
             }else if (total > 49 && total < 100) {
                 var price = 19;
                 $("#totalPrice").val(price);
             }else if (total > 99 && total < 200) {
                 var price = 17;
                 $("#totalPrice").val(price);
             }
             else{
                 var price = 16;
                 $("#totalPrice").val(price);
             }
        }
        else if(name == "Shirt"){
            if (total > 0 && total < 25) {
                var price = 50;
                 $("#totalPrice").val(price);
             }else if (total > 24 && total < 50) {
                 var price = 35;
                 $("#totalPrice").val(price);
             }else if (total > 49 && total < 100) {
                 var price = 30;
                 $("#totalPrice").val(price);
             }else if (total > 99 && total < 200) {
                 var price = 28;
                 $("#totalPrice").val(price);
             }
             else{
                 var price = 27;
                 $("#totalPrice").val(price);
             }
        }



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    })


    $(".next-stepSize").click(function (e) {

        var color = $('#putcolor').val();
        $(".putSColor").val(color);

        //t shirt

        var Xs = $('.getXs').val();
        var S = $('.getS').val();
        var M = $('.getM').val();
        var L = $('.getL').val();
        var Xl = $('.getXl').val();

        $("#putXs").val(Xs);
        $("#putS").val(S);
        $("#putM").val(M);
        $("#putL").val(L);
        $("#putXl").val(Xl);
        var total = parseInt(Xs) + parseInt(S) + parseInt(M) + parseInt(L) + parseInt(Xl) ;
        $("#totalQuan").val(total);


        // polo shirt
        var PXs = $('.PgetXs').val();
        var PS = $('.PgetS').val();
        var PM = $('.PgetM').val();
        var PL = $('.PgetL').val();
        var PXl = $('.PgetXl').val();

        $("#PputXs").val(PXs);
        $("#PputS").val(PS);
        $("#PputM").val(PM);
        $("#PputL").val(PL);
        $("#PputXl").val(PXl);


        // shiort
        var SXs = $('.SgetXs').val();
        var SS = $('.SgetS').val();
        var SM = $('.SgetM').val();
        var SL = $('.SgetL').val();
        var SXl = $('.SgetXl').val();

        $("#SputXs").val(SXs);
        $("#SputS").val(SS);
        $("#SputM").val(SM);
        $("#SputL").val(SL);
        $("#SputXl").val(SXl);


     

        // var total = $("#totalQuan").val();

        // if (total > 0 && total < 25) {
        //    var price = 20;
        //     $("#totalPrice").val(price);
        // }else {
        //     var price = 10;
        //     $("#totalPrice").val(price);
        // }


        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });

    $(".next-stepSize00").click(function (e) {

       

        var name = $('#name').val();
        var company = $('#company').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        var price = $('#totalPrice').val();

        if(name == ""){
            $("#p1").text("Full name required");
            $("#name").focus();
            return false;
        }
        else if(company == ""){
            $("#p2").text("Company name required");
            $("#company").focus();
            return false;
        }
        else if(email == ""){
            $("#p3").text("Email address required");
            $("#email").focus();
            return false;
        }
        else if(phone == ""){
            $("#p4").text("Phone number required");
            $("#phone").focus();
            return false;
        }
        else if(address == ""){
            $("#p5").text("Address required");
            $("#address").focus();
            return false;
        }
        else{
        
        $(".putname").val(name);
        $(".putemail").val(email);
        $(".putcompany").val(company);
        $(".putphone").val(phone);
        $(".putaddres").val(address);
        $(".putPrice").val(price);



        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
        }

    });


    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });

    $(".prev-step1").click(function (e) {
        $('.tshirtColor').css('display','none');
        $('.pshirtColor').css('display','none');
        $('.sshirtColor').css('display','none');
        
    // $('.sizeT').css('display','none');
    // $('.sizeP').css('display','none');
    // $('.sizeS').css('display','none');
        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});





// here is image upload js


function readFile(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        var htmlPreview =
          '<img width="40" src="' + e.target.result + '" />' ;
        var wrapperZone = $(input).parent();
        var previewZone = $(input).parent().parent().find('.preview-zone');
        var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
  
        wrapperZone.removeClass('dragover');
        previewZone.removeClass('hidden');
        boxZone.empty();
        boxZone.append(htmlPreview);
      };
  
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
  }
  
  $(".dropzone").change(function() {
    readFile(this);
  });
  
  $('.dropzone-wrapper').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
  });
  
  $('.dropzone-wrapper').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
  });
  
  $('.remove-preview').on('click', function() {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
  });
  



  $(function () {

    set_($('#three-max'), 1000);  //return 3 maximum digites
    set_($('#six-max'), 1000);    //return 6 maximum digites
    set_($('#nine-max'), 1000);  //return 9 maximum digites
    set_($('#one-max'), 1000);    //return 6 maximum digites
    set_($('#two-max'), 1000);  //return 9 maximum digites

    function set_(_this, max) {
        var block = _this.parent();

        block.find(".increase").click(function () {
            var currentVal = parseInt(_this.val());
            if (currentVal != NaN && (currentVal + 1) <= max) {
                _this.val(currentVal + 1);
            }
        });

        block.find(".decrease").click(function () {
            var currentVal = parseInt(_this.val());
            if (currentVal != NaN && currentVal != 0) {
                _this.val(currentVal - 1);
            }
        });
    }





    

    var q1 = $("#six-max").val();
    var q2 = $("#three-max").val();
    var q3 = $("#nine-max").val();
    var q4 = $("#one-max").val();
    var q5 = $("#two-max").val();

    var total = parseInt(q1) + parseInt(q2) + parseInt(q3) + parseInt(q4) + parseInt(q5) ; 

        $("#totalQuan").val(total);


        $(".increase").click(function (e) {

            var total = $("#totalQuan").val();

            total++; 
          
            $("#totalQuan").val(total);

        });

        $(".decrease").click(function (e) {

            var total = $("#totalQuan").val();

            total--; 
          
            $("#totalQuan").val(total);

        });

       
});


$("#newsuibv").click(function (e) {

       

    var name = $('#card_name').val();
    var num = $('#cardNi').val();
    var cvv = $('#cvc').val();
    var mon = $('#nob').val();
    var year = $('#year').val();


    if(name == ""){
        $("#p1card").text("This feild is required");
        $("#card_name").focus();
        return false;
    }
    else if(num == ""){
        $("#p2num").text("This feild is required");
        $("#cardNi").focus();
        return false;
    }
    else if(cvv == ""){
        $("#p3cvv").text("This feild is required");
        $("#cvc").focus();
        return false;
    }
    else if(mon == ""){
        $("#p4mon").text("This feild is required");
        $("#nob").focus();
        return false;
    }
    else if(year == ""){
        $("#p5year").text("This feild is required");
        $("#year").focus();
        return false;
    }
    else{
        return true;
    }
});
  






