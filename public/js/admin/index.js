function selectFaqType(faq_item_class) {
    var allRows = document.querySelectorAll('#all_faq_questions tr');
    allRows.forEach(function(row) {
        if (faq_item_class){
            if (!row.classList.contains(faq_item_class)) {
                row.style.display = 'none';
            } else {
                row.style.display = 'table-row';
            }
        } else {
            row.style.display = 'table-row';
        }
    });
}
