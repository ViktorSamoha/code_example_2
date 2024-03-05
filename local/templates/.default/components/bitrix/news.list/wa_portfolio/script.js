function portfolioBtnsAction() {
    let btns = document.getElementById('works').querySelectorAll('.filter_btn');
    let node = document.getElementById('ajax-portfolio');
    btns.forEach((item, index, arr) => {
        item.addEventListener('click', function (e) {
            let sectionId = e.currentTarget.getAttribute('data-id');
            BX.ajax({
                url: '/ajax/portfolio.php',
                data: {'sectionId': sectionId},
                method: 'POST',
                onsuccess: function (data) {
                    node.innerHTML = data;
                    portfolioBtnsAction();
                },
                onfailure: function (data) {
                    console.log(`fail = ${data}`);
                }
            });
        });
    });
}

document.addEventListener("DOMContentLoaded", function (event) {
    portfolioBtnsAction();
});