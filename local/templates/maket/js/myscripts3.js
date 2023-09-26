document.querySelector('.dropdown_button3').addEventListener('click', function () {
    document.querySelector('.dropdown_list3').classList.toggle('dropdown_list3--visible');
});

document.querySelector('.dropdown_button3').addEventListener('click', function () {
    document.querySelector('.dropdown_button3').classList.toggle('dropdown_button3--hover');
});

document.querySelectorAll('.dropdown_list3').forEach(function (listitem) {
    listitem.addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

document.addEventListener('click', function (e) {
    if (e.target !== document.querySelector('.dropdown_button3')) {
        document.querySelector('.dropdown_list3').classList.remove('dropdown_list3--visible')
        document.querySelector('.dropdown_button3').classList.remove('dropdown_button3--hover')
    }
});