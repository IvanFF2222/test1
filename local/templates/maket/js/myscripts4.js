document.querySelector('.dropdown_button4').addEventListener('click', function () {
    document.querySelector('.dropdown_list4').classList.toggle('dropdown_list4--visible');
});

document.querySelector('.dropdown_button4').addEventListener('click', function () {
    document.querySelector('.dropdown_button4').classList.toggle('dropdown_button4--hover');
});

document.querySelectorAll('.dropdown_list4').forEach(function (listitem) {
    listitem.addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

document.addEventListener('click', function (e) {
    if (e.target !== document.querySelector('.dropdown_button4')) {
        document.querySelector('.dropdown_list4').classList.remove('dropdown_list4--visible')
        document.querySelector('.dropdown_button4').classList.remove('dropdown_button4--hover')
    }
});