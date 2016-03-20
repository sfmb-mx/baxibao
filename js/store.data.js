"use strict";

document.getElementById('contactForm').addEventListener('submit', readStoreData);

function readStoreData(event) {
    // event.preventDefault();

    var ids = document.getElementById('idstore').value,
        em = document.getElementById('email').value,
        root = "http://pt.aliexpress.com/store/contactinfo/",
        ext = ".html",
        myurl = root + ids + ext;


    // $.get(myurl, function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    // });

    document.cookie = "mymsg = " + myurl;

    sessionStorage.passUrl = myurl;

    console.log('Your variables of interest:');
    console.log(ids);
    console.log(em);
    console.log(myurl);
    console.log(document.cookie);
}
