function validationApart(){

    const country = document.getElementById("countryApart").value;
    const city = document.getElementById("cityApart").value;
    const address = document.getElementById("address").value;
    const ubication = document.getElementById("ubication").value;
    const rooms = document.getElementById("rooms").value;
    const value = document.getElementById("value").value;
    const image = document.getElementById("image").value;
    const featured = document.getElementById("featured").value;
    const review = document.getElementById("review").value;
    
    
        if(city.length<3 || city.length>30){
            alert("Porfavor ingrese una ciudad");
            return false;
        } 
        else if(country.length<3 || country.length>30) {
            alert("Porfavor digite un país");
            return false;
        }
        else if(address.length<4 || address.length>50){
            alert("La dirección es demasiado larga o demasiado corta");
            return false;
        }
        else if(ubication.length<4 || ubication.length>30){
            alert("Porfavor ingrese una ubicacion en google maps, correcta");
            return false;
        }    
        else if(rooms.length<1 || rooms.length>3){
            alert("El número de habitaciones es demasiado largo o muy corto");
            return false;
        }
        else if(value.length<3 || value.length>15){
            alert("Porfavor ingrese el valor por noche");
            return false;
        }
        else if(image == ""){
            alert("Porfavor ingrese una imagen");
            return false;
        }
        else if(featured == ""){
            alert("Porfavor ingrese la imagen mas destacada");
            return false;
        }
        else if(review.length<5 || review.length>200){
            alert("La reseña es demasiado corta o demasiado larga");
            return false;
        }
    }