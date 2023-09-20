document.querySelector('.dropdown_button').addEventListener('click', function () {
    document.querySelector('.dropdown_list').classList.toggle('dropdown_list--visible');
});

document.querySelectorAll('.dropdown_list-item').forEach(function (ListItem) {
    ListItem.addEventListener('click', function () {
        document.querySelector('.dropdown_button').innerText = this.innerText;
        document.querySelector('.dropdown_list').classList.remove('dropdown_list--visible');
    })
})