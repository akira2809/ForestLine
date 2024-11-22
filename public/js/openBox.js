const openBox = (idElement) => {
    document.getElementById(idElement).hidden = false;
}
const closeBox = (idElement) => {
    document.getElementById(idElement).hidden = true;
}
const openBoxEditCategory = (id, category) => {
    document.getElementById('boxEditCategory').hidden = false;
    document.getElementById('category_id').value = id;
    document.getElementById('category_name').value = category;
}
const closeBoxEditCategory = () => {
    document.getElementById('boxEditCategory').hidden = true;
}

