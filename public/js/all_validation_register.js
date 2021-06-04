function validation(){

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const country = document.getElementById("country").value;
    const city = document.getElementById("city").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const phone = document.getElementById("phone").value;
    
        
        if(name.length<6 || name.length>30) {
            alert("Porfavor digite un nombre");
            return false;
        }
        else if(email.length<6 || email.length>100){
            alert("Porfavor ingrese un correo");
            return false;
        }
        else if(country.length<4 || country.length>30) {
            alert("Porfavor digite un país");
            return false;
        }
        else if(city.length<4 || city.length>30) {
            alert("Porfavor digite una ciudad");
            return false;
        }
        else if(phone.length<7 || phone.length>10) {
            alert("Porfavor digite un telefono valido");
            return false;
        }
        else if(password.length<5 || password.length>15) {
            alert("Porfavor digite una contraseña");
            return false;
        }
        else if(confirmPassword == "") {
            alert("Porfavor digite la confirmacion de contraseña");
            return false;
        } else {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            if(confirmPassword != password){
            alert("Las contraseñas no coinciden");
            return false;
            }
        }
    }