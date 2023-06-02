document.getElementById("registro").addEventListener("submit",function(event){
    event.preventDefault();

    var nombre = document.getElementById("nombre").value;
    var correo =document.getElementById("correo").value;
    var password = document.getElementById("password").value;
    
    console.log(nombre);
    console.log(correo);
    console.log(password);

     var data=
     {
        nombre: nombre,
        correo: correo,
        password: password
     };
    
     var jsonData = JSON.stringify(data);
    
     var xhr = new XMLHttpRequest();
    
     xhr.open("POST","registro.php", true);
     //xhr.setRequestHeader("Content-Type","application/json" );
    
     xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status===200){
            var reponse = xhr.responseText;
            console.log(reponse);
        }
     };
    xhr.send();
    });