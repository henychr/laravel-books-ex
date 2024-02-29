// const { createElement } = require("react");

const searchInput = document.getElementById('searchInput');
const resultSearch = document.getElementById('resultSearch');

searchInput.addEventListener("input", async () => {
    // console.log(searchInput.value);
    const response = await fetch('http://www.laravel-books.test/api/books/search?search=' + searchInput.value);
    const data = await response.json();


    resultSearch.innerHTML = '';
    resultSearch.setAttribute('style', "display:flex;justify-content:center;border:solid;border-color:black")
    data.forEach(element => {

        const a = document.createElement("a")
        a.setAttribute('href', `http://www.laravel-books.test/admin/book/${element.id}`)
        a.textContent = "Details"
        resultSearch.appendChild(a);
        const img = document.createElement("img")
        img.classList.add('book-pic');
        img.setAttribute('src', `${element.image}`)
        img.setAttribute('style', "width:50px;margin:5px; ")
        resultSearch.appendChild(img);
        const div = document.createElement("div");
        div.classList.add('book');
        div.textContent = `${element.title}`;
        resultSearch.appendChild(div);

    });

})