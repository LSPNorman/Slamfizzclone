
//Mostra o menu Sptriz e altera a seta do botao
document.querySelector(".spritzButton").addEventListener("click", function(){
    document.getElementById("arrowIcon").classList.toggle("fa-arrow-up");
    document.getElementById("hiddenMenu").classList.toggle("showHiddenMenu");
});

//Mostra os frames login e signUp
function toggleLogin(){
    document.getElementById("loginFrame").classList.toggle("showLoginFrame");
};

function toggleCart(){
    document.getElementById("cartFrame").classList.toggle("showCartFrame");
};

//Pagina de Produtos
function sendPageId(pageId) {
    fetch('../html/functions.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `sendPageId=${pageId}`
    })
    window.location.href = "../html/productpage.php";
}
