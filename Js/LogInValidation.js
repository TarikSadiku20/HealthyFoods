const email = document.getElementById("email");
const password = document.getElementById("password");
const form = document.getElementById("form");
const errorElement = document.getElementById("error");


form.addEventListener('submit', (e) =>{
     let message = [];

     if(email.value === "" || email.value === null){
         message.push("Email is required");
     }

     if(password.value === "" || password.value === null){
         message.push("Password is required")
     }

     


     if(message.length > 0){

        
         
        errorElement.innerText = message.join(', ');


     }


    
});