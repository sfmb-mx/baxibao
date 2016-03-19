"use strict";

document.getElementById('contactForm').addEventListener('submit', readStoreData);

function readStoreData(event) {
    event.preventDefault();
    console.log('Your variables of interest:');
    console.log(document.getElementById('idstore').value);
    console.log(document.getElementById('email').value);
}
