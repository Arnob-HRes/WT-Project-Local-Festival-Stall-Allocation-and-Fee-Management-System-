<script>
    function bookingajax(){
        let user=document.getElementById("I1").value;
        let number=document.getElementById("I2").value;
        let email=document.getElementById("I3").value;
        let cetagory=document.getElementById("I4").value;
        let location=document.getElementById("I5").value;
        let date=document.getElementById("I6").value;
        let payment=document.getElementById("I7").value;
        let status=document.getElementById("InfoS");

        let booking={
            'username': user,
            'phonenumber': number,
            'email': email,
            'stallcetagory': cetagory,
            'location': location,
            'bookfor': date,
            'paymentmethod':payment
        };

        let data=JSON.stringify(booking);

        let xhttp = new XMLHttpRequest();
        xhttp.open('POST','../Controller Logic/Booking_Page_Valid.php',true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('BookingINFO='+data);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                let BData = JSON.parse(this.responseText);
                if(BData.error){
                    status.innerHTML=`Your status: <br> ${BData.error}`;
                }
            }
        }
    }
</script>