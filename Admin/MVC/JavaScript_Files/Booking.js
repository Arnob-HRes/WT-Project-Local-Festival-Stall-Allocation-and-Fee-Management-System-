
function loadBookings() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            var tableBody = document.getElementById("booking-data");
            if (tableBody) {
                tableBody.innerHTML = this.responseText;
            }
        }
    };
    
    xhttp.open("GET", "fetch_bookings.php", true);
    xhttp.send();
}


document.addEventListener("DOMContentLoaded", function() {
    loadBookings();
    
    // প্রতি ৫ সেকেন্ড (৫০০০ মিলিসেকেন্ড) পর পর অটোমেটিক আপডেট হবে
    setInterval(loadBookings, 5000); 
});