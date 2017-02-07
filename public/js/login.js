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
});







