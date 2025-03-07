(() => {
    const form = document.querySelector("#divijForm");
    const feedBack = document.querySelector("#feedback");
  
    function regForm(event) {
        event.preventDefault(); 
        const thisForm = event.currentTarget;
  
        const url = "http://localhost/saddul_divij_portfolio/contactform.php";
        
        const formData = new URLSearchParams();
        formData.append("lname", thisForm.elements.lname.value);
        formData.append("fname", thisForm.elements.fname.value);
        formData.append("email", thisForm.elements.email.value);
        formData.append("message", thisForm.elements.message.value);  
        
       
        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formData.toString() 
        })
        .then(response => response.json())
        .then(response => {
            feedBack.innerHTML = ""; 
  
            if (response.errors) {
                response.errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedBack.appendChild(errorElement);
                });
            } else {
                form.reset(); 
                const messageElement = document.createElement("p");
                messageElement.textContent = response.message;
                feedBack.appendChild(messageElement);
            }
  
            feedBack.scrollIntoView({ behavior: "smooth", block: "end" });
        })
        .catch(error => {
            console.error(error);
            const errorMessage = document.createElement("p");
            errorMessage.textContent = "Please try again.";
            feedBack.appendChild(errorMessage);
        });
    }
  
    form.addEventListener("submit", regForm);
  })();
  