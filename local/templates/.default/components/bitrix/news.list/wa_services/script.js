function openServicePopup(element, elementId) {
    let node = document.getElementById('modal-ajax-data');
    var modal = document.querySelector(".modal[data-name='".concat(element.dataset.name, "']"));
    BX.ajax({
        url: '/ajax/getServiceDetailData.php',
        data: {'ID': elementId},
        method: 'POST',
        onsuccess: function (data) {
            if (data !== 'false') {
                node.innerHTML = data;
                modal.classList.add('active');
            }
        },
        onfailure: function (data) {
            console.log(`fail = ${data}`);
        }
    });
}