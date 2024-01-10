document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("myForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // You can add your custom functionality here, like data validation, AJAX requests, etc.

        // Example: Getting form data
        const formData = new FormData(form);
        console.log("Form Data:", formData);

        // If needed, you can perform AJAX requests using fetch or XMLHttpRequest
        fetch('process.php', {
     method: 'POST',
            body: formData
         })
         .then(response => response.json())
        .then(data => {
        //     // Handle response from server
     })
         .catch(error => console.error('Error:', error));
    });
});
