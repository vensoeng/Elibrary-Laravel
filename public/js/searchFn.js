let input = document.getElementById("text-search-item");
let list = document.querySelectorAll(".books-body table .tr-item");
function search() {
    if (input.value !== "") {
        for (let i = 0; i < list.length; i += 1) {
            if (list[i].innerText.toLowerCase().includes(input.value.toLowerCase())) {
                list[i].classList.add('tr-item-active');
            } else {
                list[i].classList.add('tr-item-unactive');
            }
        }
    } else {
        for (let i = 0; i < list.length; i += 1) {
            list[i].classList.remove('tr-item-unactive');
        }
    }
}
input.addEventListener('input', search);