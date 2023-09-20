document.querySelector('.dropdown_button5').addEventListener('click', function () {
    document.querySelector('.dropdown_list5').classList.toggle('dropdown_list5--visible');
});

document.querySelectorAll('.dropdown_list-item5').forEach(function (ListItem5) {
    ListItem5.addEventListener('click', function () {
        document.querySelector('.dropdown_button5').innerText = this.innerText;
        document.querySelector('.dropdown_list5').classList.remove('dropdown_list5--visible');
    })
})