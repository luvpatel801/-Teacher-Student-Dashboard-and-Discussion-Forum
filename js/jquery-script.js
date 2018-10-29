$(function() {
          
    $('#login-form-link').click(function(e) {
      $("#login-form").delay(100).fadeIn(100);
      $("#register-form").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

    $('#register-form-link').click(function(e) {
      $("#register-form").delay(100).fadeIn(100);
      $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
            
});

// Closes the sidebar menu
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});
// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});
// Scrolls to the selected menu item on the page
$(function() {
    $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
    
//#to-top button appears after scrolling
var fixed = false;
$(document).scroll(function() {
    if ($(this).scrollTop() > 250) {
        if (!fixed) {
            fixed = true;
            // $('#to-top').css({position:'fixed', display:'block'});
            $('#to-top').show("slow", function() {
                $('#to-top').css({
                    position: 'fixed',
                    display: 'block'
                });
            });
        }
    } else {
        if (fixed) {
            fixed = false;
            $('#to-top').hide("slow", function() {
                $('#to-top').css({
                    display: 'none'
                });
            });
        }
    }
});

// source: https://bootsnipp.com/snippets/featured/dynamic-form-fields-add-amp-remove
// to add input fields dynamically
$(document).ready(function() {
    var next = 1;

    $(".add-more").click(function(e) {
        e.preventDefault();

        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
        $('.remove-me').click(function(e) {
            e.preventDefault();

            var fieldNum = this.id.charAt(this.id.length-1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });
    
});

/*$(document).ready(function(){
       done();
       
    });*/

/*function done() {
   setTimeout(function() {
   updates();
   done();
    }, 200);  
}*/

/*function updates() {

    $.getJSON('add_edit_batch.php', function(data) {
        $('table.list').empty();

        $.each (data.result, function() {

            $('table.list').append('<tr><td></td><td>'+this['batch_code']+'</td><td>'+this['batch_subject']+'</td></tr>');

        });

    });
}*/
   

/*$('input[type=submit].btn-primary').click(function(e) {
      $('form#update').parent().removeClass('hide');
      $(this).addClass('show');

      e.preventDefault();
      e.stopPropagation();
});
*/
/*$("input[type='submit'].btn-success").click(function(e) {
    $('form#add-edit').parent().removeClass('hide');
    $(this).addClass('show');

    e.preventDefault();
    e.stopPropagation();
});

$("input[type='submit'].btn-primary").click(function(e) {
    $('form#add-edit').parent().removeClass('hide');
    $(this).addClass('show');

    e.preventDefault();
    e.stopPropagation();
});*/

/*$("form#add input[type='submit']").click(function() {
    $("form#add input[type='text']").each.value="";
});

$("td input[type='submit'].edit" ).click(function() { 
    if ('$(this).siblings().hide') {
        removeClass('hide');
        addClass('show');
    };
});
*/


