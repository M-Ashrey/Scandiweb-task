let form = document.getElementById("products");

form.addEventListener('submit', function(event) {
    event.preventDefault();
    let btn = document.getElementById("delete-product-btn");
    btn.innerHTML = "wait..."
    var xhr = new XMLHttpRequest();

    xhr.open('POST', form.action);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
            
            // Delay the page reload for 500ms to give the db time to process
            setTimeout(function() {
                location.reload();
            }, 500);
        }
    };
    
    xhr.send(new FormData(form));
});

