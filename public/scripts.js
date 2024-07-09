var form = document.querySelector('#messageForm');

form.addEventListener('submit', function(evt){
    evt.preventDefault(); 
    var formData = {
        fio: document.querySelector('input[name="fio_input"]').value,
        email: document.querySelector('input[name="email_input"]').value,
        message_post: document.querySelector('textarea[name="message_post"]').value,
        send_message: true  
    };

    const request = new XMLHttpRequest();
    var params = 
                'fio=' + encodeURIComponent(formData.fio) +
                 '&email=' + encodeURIComponent(formData.email) +
                 '&message_post=' + encodeURIComponent(formData.message_post) +
                 'send_message=' + encodeURIComponent(formData.send_message);  
    request.open("POST", 'Controllers/AddController.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
});

