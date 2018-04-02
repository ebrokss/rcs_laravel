//fancybox
    $(document).ready(function(){
        $('.images-col a').fancybox();
    });
//fancybox

//chat
    var app = new Vue({
        el: '#chat',
        data: {
            messages: [
            ],
            newMessageUsername: "",
            newMessageText: "",
        },
        created: function(){
            var that = this;
            $.getJSON('/chat/get-messages', function(resp){
                for (var index = 0; index < resp.length; index++){
                    var element = resp[index];
                    console.log(element);
                    var newAdd = {
                        username: element.username, 
                        text: element.text, 
                        date: element.created_at
                    }
                    that.messages.push(newAdd);
                }
            })
        },
        methods: {
            sendMessage: function(){
                var newAdd = {
                    username: this.newMessageUsername, // Peteris
                    text: this.newMessageText, // some text
                    date: new Date()
                }
                
                this.messages.push(newAdd);
                this.newMessageText = '';
                $.post('/chat/save-message', newAdd, function (res){
                    console.log(res);
                });
            }
        }
    })
//chat



    // $('#reg-form').submit(function(){
    //     var errors = [];
    //     $('.errors ul').html('');
    //     $('.has-error').removeClass('has-error');
    //     if ($('input[name="username"]').val() == '') {
    //         errors.push('Please enter username');
    //         $('input[name="username"]').addClass('has-error');
    //     }
    //     if ($('input[name="password"]').val() == '') {
    //         errors.push('Please enter password');
    //         $('input[name="password"]').addClass('has-error');
    //     }
    //     if ($('input[name="password"]').val().length < 8) {
    //         errors.push('Password must be at least 8 symold');
    //         $('input[name="password"]').addClass('has-error');
    //     }
    //     if ($('input[name="password2"]').val() == '') {
    //         errors.push('Please retype the password');
    //         $('input[name="password2"]').addClass('has-error');
    //     }
    //     if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
    //         errors.push('Passwords must match');
    //         $('input[name="password"]').addClass('has-error');
    //         $('input[name="password2"]').addClass('has-error');
    //     }
    //     if ($('input[name="first_name"]').val() == '') {
    //         errors.push('Please enter first name');
    //         $('input[name="first_name"]').addClass('has-error');
    //     }
    //     // if ($('select[name="country"]').val() == 0) {
    //     //     errors.push('Please select coutnry');
    //     //     $('select[name="country"]').addClass('has-error');
    //     // }
    //     // if ($('input[name="agree"]').is(":checked") == false) {
    //     //     errors.push('Please agree with this amazng stuff');
    //     //     $('input[name="agree"]').addClass('has-error');
    //     // }
    //     if (errors.length > 0) {
    //         // handle errors
    //         for (var index = 0; index < errors.length; index++) {
    //             var element = errors[index];
    //             $('.errors ul').append('<li>' + element + '</li>');
    //         }
    //         $('.errors').show();
    //         return false;
    //     }
    // });

//tabs
   
    $('#tabs').tabs();
   
//tabs
    

//google map

    function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(57.01, 24.15),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }

//google map