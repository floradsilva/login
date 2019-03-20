/*eslint-env jquery*/
$(document).ready( ()=>{
    var login = $('#session').val();

    //for logged in users
    if(login) {
        $('#priv').show();
        $('#login-btn').hide();
        $('#login').hide();
        $('#logout').show();
    }
    //for logged out users
    else {
        $('#priv').hide();
        $('#login-btn').show();
        $('#login').show();
        $('#logout').hide();
    }


    //activate forgot password link
    $('#forgot-password').click(function(){
        $('#forgot-password-form').toggle();
    });

    //reset password link
    var httpRequest;
    document.getElementById("gen-password").onclick = function(){
        var registeredEmail = document.getElementById("registered-email").value;
        makeRequest('/send-password', registeredEmail);
    };

    function makeRequest(url, registeredEmail){
        httpRequest = new XMLHttpRequest();

        if(!httpRequest){
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }

        httpRequest.onreadystatechange = alertContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('registeredEmail=' + encodeURIComponent(registeredEmail));
    }

    function alertContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                var response = JSON.parse(httpRequest.responseText);
                console.log(response);
                alert(response.success);
            } else {
                alert("There was a problem with this request.");
            }
        }
    }
});