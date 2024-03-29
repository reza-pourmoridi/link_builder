function selectFaqType(element) {
    var faq_item_class = element.value;
    var allRows = document.querySelectorAll('#all_faq_questions tr');
    allRows.forEach(function(row) {
        if (faq_item_class && faq_item_class != null && faq_item_class != 'null'){
            if (!row.classList.contains(faq_item_class)) {
                console.log(faq_item_class);
                row.style.display = 'none';
            } else {
                row.style.display = 'table-row';
            }
        } else {
            row.style.display = 'table-row';
        }
    });
    document.getElementById('faq_all').checked = false;
}

function selectAlloptions(checked , checkBoxName) {
    var checkboxes = document.querySelectorAll('input[name="' + checkBoxName + '"]');

    checkboxes.forEach(function (checkbox) {
        var hidenOptions = checkbox.parentElement.parentElement.style.display;
        console.log(hidenOptions)
        if (hidenOptions != 'none') {
            if (checked.checked) {
                checkbox.checked = true;
            } else {
                checkbox.checked = false;
            }
        }
    });
}
