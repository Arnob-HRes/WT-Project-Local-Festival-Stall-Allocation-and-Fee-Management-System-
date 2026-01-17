<script>
    function updateajax(){
        let name=document.getElementById("name").value;
        let phone=document.getElementById("phone").value;
        let email=document.getElementById("email").value;
        let address=document.getElementById("address").value;
        let d=document.getElementById("show");
        let in1=document.getElementById("InfoDiv");
        let in2=document.getElementById("INF1");

        let updateuser={
            'fullname': name,
            'phone': phone,
            'email': email,
            'address': address
        };

        let data=JSON.stringify(updateuser);
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST','../Controller Logic/update_info_Valid.php',true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('UpdateINFO='+data);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let UUData = JSON.parse(this.responseText);
                if(UUData.error){
                    d.innerHTML=UUData.error;
                }
                else if(UUData.successful){
                    d.innerHTML=UUData.successful;
                    in1.innerHTML=`<p class="in">${name}</p><br>
                                    <p class="in">${phone}</p><br>`;
                    in2.innerHTML=`<p class="in">${email}</p><br>
                                    <p class="in">${address}</p><br>`;
                }
            }
        }
    }
</script>