document.querySelector('.dropdown_button2').addEventListener('click', function () {
    document.querySelector('.dropdown_list2').classList.toggle('dropdown_list2--visible');
});

document.querySelectorAll('.dropdown_list-item2').forEach(function (ListItem2) {
    ListItem2.addEventListener('click', function () {
        document.querySelector('.dropdown_button2').innerText = this.innerText;
        document.querySelector('.dropdown_list2').classList.remove('dropdown_list2--visible');
    })
})