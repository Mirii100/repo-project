//let k= window.document.getElementById("hey").innerText=("jj");
//let name=prompt("what is your name");
//let kk=SubmitEvent.greetings(name)
//function greetings(){
  //  confirm(`hey are you there${name}\n`);
// }
//document.getElementById("hey").style.color="green";
//let me=document.getAttribute("p");
//me.setAttribute("p","female");
//var myform=document.querySelector('form');
//myform.addEventListener('submit',function(e){
//e.preventDefault();
//var formdata=document.querySelectorAll('input').values;
//alert(formdata);
//});

/*let name = prompt("What is your name");
document.getElementById("hey").innerText = "jj";
document.getElementById("hey").style.color = "green";

// This line retrieves the element with the "p" tag, assuming you have one
let me = document.querySelector("p");

if (me) {
  me.setAttribute("gender", "female");
}

var myform = document.querySelector('form');
myform.addEventListener('submit', function(e) {
  e.preventDefault();
  var formInputs = document.querySelectorAll('input');
  var formValues = Array.from(formInputs).map(input => input.value);
  alert(formValues);
});
document.addEventListener("DOMContentLoaded", function() {
    // This code will execute after the DOM is fully loaded
    let heyElement = document.getElementById("hey");
    if (heyElement) {
      heyElement.innerText = "js";
    }
    // Other code goes here
  });
// Add an event listener to prevent the default form submission behavior
document.addEventListener("DOMContentLoaded", function() {
    const myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Optionally, you can collect and display form data for debugging or confirmation
        const formData = new FormData(myForm);
        let data = '';
        for (const pair of formData.entries()) {
            data += `${pair[0]}: ${pair[1]}\n`;
        }
        console.log(`Form Data:\n${data}`); // Display in console for debugging
        
        // Submit the form manually
        myForm.submit();
    });
});
  */