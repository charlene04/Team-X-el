document.getElementById("signup-link").addEventListener("click", function(){
    document.getElementById("login").style.display = "none";
    document.getElementById("signup").style.display = "block";
});

document.getElementById("login-link").addEventListener("click", function(){
    document.getElementById("signup").style.display = "none";
    document.getElementById("login").style.display = "block";
});