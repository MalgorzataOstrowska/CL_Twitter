/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function(){
    
    var LOGIN_ERROR = jQuery('#login_error'); 
    console.log(LOGIN_ERROR);

    var INPUT = jQuery('input');  
    console.log(INPUT);

    INPUT.on('click',function(){
        LOGIN_ERROR.slideUp();
    });  
    
  
    
    
//    jQuery.get("login.html", function() {
//        console.log('false') ;
//        LOGIN_ERROR.hide();
//    });
//     
    
//    jQuery.get("login.html?login=true", function() {
//        console.log('true') ;
//        LOGIN_ERROR.hide();
//    });   
//   
//    jQuery.get("login.html?login=false", function() {
//        console.log('false') ;
//        LOGIN_ERROR.show();
//    });
    



//    jQuery.get("login.php", function (data) {
//        alert("Data Loaded: " + data);
//    });




//    jQuery.ajax({
//        url: './login.php',
////        data: 'login',
//        data: {login: "false"},
//        type: "GET",
////        dataType: 
//        
//        success: function(login)
//        {
//            console.log(login) ;
//            
//            
//            if(login == false){
//                console.log('false') ;
//                LOGIN_ERROR.show();
//            } else {
//                console.log('true') ;
//                LOGIN_ERROR.hide();                
//            }
//        }
//    });
    

//$.ajax(
//  {
//        url: 'login.html',
//        method: 'get',
//        data: {logIn: true},
//        success: function()
//        {
//            LOGIN_ERROR.hide();
//        }
//  });




    
    
//    jQuery.get("login.html", function(logIn, status) {
//        console.log(logIn) ;
//        console.log(status) ;
//        //alert("Data: " + data + "\nStatus: " + status);
//        //LOGIN_ERROR.show();
//    });
    
    
});







