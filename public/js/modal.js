function modal(modal_name) {
    const modal_item = document.getElementById(modal_name);
    modal_item.classList.add("open");
    body_scroll();

    if(modal_name === "filter"){
        size_modal();
    }
}
function closeModal() {
    const modal_item = document.querySelector(".modal.open");
    modal_item.classList.remove("open");
    body_scroll();
}

function body_scroll(){
    const body = document.getElementById("body");

    body.classList.toggle("modal_body")
}

function size_modal(){
    console.log("вызвал")
    const size_modal = document.querySelectorAll(".filter .size_price .sizes .div");
    size_modal.forEach(el => {
        el.addEventListener("click", () => {
            el.classList.toggle("active");
        })
    })
}

