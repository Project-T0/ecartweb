"use strict";

$(document).ready(function(){
    bolt.launch({
        key: document.getElementById("key").value,
        txnid: document.getElementById("txnid").value, 
        hash: document.getElementById("hash").value,
        amount: document.getElementById("amount").value,
        firstname: document.getElementById("fname").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        productinfo: document.getElementById("pinfo").value,
        udf5: "",
        surl : document.getElementById("surl").value,
        furl: document.getElementById("furl").value,
        mode: 'dropout'
    },{ 
        responseHandler: function(BOLT){
            if(BOLT.response.txnStatus != 'CANCEL'){
                var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
                '<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
                '<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
                '<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
                '<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
                '<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
                '<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
                '<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
                '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
                '<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
                '<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
                '<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
                '</form>';
                var form = jQuery(fr);
                jQuery('body').append(form);								
                form.submit();
            }
        },
        catchException: function(BOLT){
            window.location.href = document.getElementById("furl").value;
        }
    });
});