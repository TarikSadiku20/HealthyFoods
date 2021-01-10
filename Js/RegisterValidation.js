const email = document.getElementById("email");
const password = document.getElementById("password");
const form = document.getElementById("form");
const name = document.getElementById("name");
const surname = document.getElementById("surname");
const errorElement = document.getElementById("error");


form.addEventListener('submit', (e) =>{
     let message = [];

     if(email.value === "" || email.value === null){
         message.push("Email is required");
     }

     if(password.value === "" || password.value === null){
         message.push("Password is required")
     }

     if(password.value.length <= 6){
         message.push("Password must be longer");

     }
     if(name.value === "" || name.value === null){
        message.push("Name is required");
     }
     if(surname.value === "" || surname.value === null){
      message.push("Name is required");
     }


     if(message.length > 0){

        e.preventDefault();

        errorElement.innerText = message.join(', ');


     }


    
});