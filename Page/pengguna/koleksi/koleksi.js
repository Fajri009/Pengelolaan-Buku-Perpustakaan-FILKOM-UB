fetch("BookDataController.php")
  .then((response) => response.json())
  .then((data) => {
    renderBooks(data);
  })
  .catch((error) => {
    console.error("Error retrieving book data:", error);
  });

function renderBooks(booksArray) {
  const container = document.getElementById("bookContainer");
  container.innerHTML = "";

  booksArray.forEach((book) => {
    const bookElement = document.createElement("div");
    bookElement.classList.add("book");

    const imageElement = document.createElement("img");
    imageElement.src = book.image_path;
    imageElement.alt = book.judul_buku;

    const titleElement = document.createElement("div");
    titleElement.textContent = book.judul_buku;

    const authorElement = document.createElement("div");
    authorElement.textContent = `by ${book.pengarang}`;

    bookElement.appendChild(imageElement);
    bookElement.appendChild(titleElement);
    bookElement.appendChild(authorElement);

    container.appendChild(bookElement);
  });

  const searchInput = document.getElementById("searchInput");
  const searchButton = document.getElementById("searchButton");

  searchButton.addEventListener("click", performSearch);

  function performSearch() {
    const searchTerm = searchInput.value.toLowerCase();

    fetch("book.php")
      .then((response) => response.json())
      .then((data) => {
        const filteredBooks = data.filter((book) => {
          const title = book.title.toLowerCase();
          const author = book.author.toLowerCase();

          return title.includes(searchTerm) || author.includes(searchTerm);
        });

        renderBooks(filteredBooks);
      })
      .catch((error) => {
        console.error("Error retrieving book data:", error);
      });
  }
}
