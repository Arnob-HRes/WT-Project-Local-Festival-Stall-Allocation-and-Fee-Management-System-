alert("Welcom To The home page of Local Festival Stall Allocation & Fee Management System");
window.onscroll=function(){
    let C=document.getElementById("footer");
    if(document.body.scrollTop >= 850 || document.documentElement.scrollTop >=850 ){
        C.classList.add("scrolled");
    }
    else{
        C.classList.remove("scrolled");
    }
}