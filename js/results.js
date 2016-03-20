function myResults() {
    var storeNumber = sessionStorage.passUrl;

    document.getElementById('results').innerHTML = 'Dear supplier, your store: ' + storeNumber + ' will be processed to submission,<br>we will send an email in 24 hours maximum!<br>Thank you!';
    // alert("Page is loaded");
}
