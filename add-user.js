document.querySelector("form").addEventListener('submit', function(e){
    e.preventDefault();
    let firstName = document.querySelector('input[placeholder="First Name"]').value.trim();
    let lastName = document.querySelector('input[placeholder="Last Name"]').value.trim();
    let username = document.querySelector('input[placeholder="Username"]').value.trim();
    let email = document.querySelector('input[placeholder="Email"]').value.trim();
    let password = document.querySelector('input[placeholder="Create Password"]').value.trim();
    let confirmPassword = document.querySelector('input[placeholder="Confirm Password"]').value.trim();
    let avatar = document.querySelector("#avatar").value.trim();

    let alertBox = document.querySelector(".alert_message p");

    if(!firstName || !lastName || !username || !email || !password || !confirmPassword || !avatar){
        alertBox.innerText = "All fields are required!";
        document.querySelector(".alert_message").style.display = "block";
        return;
    }

    if(password.length < 6){
        alertBox.innerText = "Password must be at least 6 characters!";
        document.querySelector(".alert_message").style.display = "block";
        return;
    }

    if(password !== confirmPassword){
        alertBox.innerText = "Passwords do not match!";
        document.querySelector(".alert_message").style.display = "block";
        return;
    }

    alertBox.parentElement.classList.remove("error");
    alert("User added successfully!");
    document.querySelector(".alert_message").style.display = "none";
})

