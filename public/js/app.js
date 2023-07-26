function duplicate_section (parent_id, child_id) {
    let clone = document.getElementById(child_id).cloneNode( true );
    //hidding an element
    clone.querySelector('span').style.visibility = "hidden";

    document.getElementById(parent_id).appendChild( clone );
}

function delete_node(thisElement) {
    let parent_element = thisElement.parentElement;
    let elementClass = parent_element.className;
    elementClass = '.' + elementClass;
    const countAll = document.querySelectorAll(elementClass).length;

    if (countAll != 1) {
        parent_element.remove();
    }

}

function show_next_parrant_element (current_element) {
    let parent_element = current_element.parentElement;
    let next_element = parent_element.nextElementSibling;
    if (current_element.value != '') {
        next_element.style.visibility = "visible";
    } else {
        next_element.style.visibility = "hidden";
    }
}


