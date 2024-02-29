const loadData = async () => {
    // const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php');
    const response = await fetch('http://www.laravel-books.test/api/books/latest');

    const data = await response.json();

    // console.log(data[0]);

    const divLatestBooks = document.getElementById('latest-books');



    data.forEach(element => {
        const p = document.createElement('p');
        p.className = 'p-list';
        p.innerHTML = `ID: ${element.id} | AUTHOR: ${element.authors[0].name} | TITLE: ${element.title} | PUBLICATION DATE: ${element.publication_date} | PRICE: ${element.price}| PAGES: ${element.pages}`
        divLatestBooks.appendChild(p);

    });


}

loadData();