document.querySelector('.dropdown_button1').addEventListener('click', function () {
    document.querySelector('.dropdown_list1').classList.toggle('dropdown_list1--visible');
});

document.querySelectorAll('.dropdown_list-item1').forEach(function (ListItem1) {
    ListItem1.addEventListener('click', function () {
        document.querySelector('.dropdown_button1').innerText = this.innerText;
        document.querySelector('.dropdown_list1').classList.remove('dropdown_list1--visible');
    })
});

document.querySelectorAll('.dropdown_list1').forEach(function (listitem1) {
    listitem1.addEventListener('click', function (e) {
        e.stopPropagation();
    })
});

document.addEventListener('click', function (e) {
    if (e.target !== document.querySelector('.dropdown_button1')) {
        document.querySelector('.dropdown_list1').classList.remove('dropdown_list1--visible')
    }
});