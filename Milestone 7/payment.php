<!DOCTYPE html>

<html>

<head>

<script src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-xxxxxxxx"></script>

</head>

<body>

<button id="pay-button">

Bayar Premium

</button>

<script>

document.getElementById('pay-button').onclick = function(){

fetch('/payment/token',{

method:'POST'

})

.then(response => response.text())

.then(token => {

snap.pay(token);

});

}

</script>

</body>

</html>
