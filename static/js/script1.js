document.getElementById("register_form").onsubmit=function(){

    var x=document.getElementById("pass").value;
    var y=document.getElementById("cpass").value;
    if(x != y){
        
        alert("error");
        document.getElementById("check").innerHTML="please fill same password";
        return false;
    }
}
