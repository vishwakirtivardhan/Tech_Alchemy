# Tech_Alchemy Assignment 
<html>
    <body>
      <h2> Key Points </h2>
      <div>
      <ul>
    <li>Language : PHP and Laravel</li>
    <li> For API Authentication Middleware used(app/Http/Middleware/VerifyAuthToken.php)  </li>
    <li> Table Name : book_details and Make Model for this :(app/Book.php) </li>
    <li> Controller Having All logic and function (app/Http/Controllers/bookController.php) </li>
  </ul>      
      </div>
  <div>
<h2>API End Pints</h2>
  <ul>
    <li>Add a book to the library : http://localhost/nodeTest/my_app/index.php/api/addBook</li>
    <li> Update book details : http://localhost/nodeTest/my_app/index.php/api/bookUpdate/{ID}</li>
    <li> Delete a book from the library : http://localhost/nodeTest/my_app/index.php/api/deleteBook/{ID}</li>
    <li> Get all books : http://localhost/nodeTest/my_app/index.php/api/books</li>
    <li> Get book details : http://localhost/nodeTest/my_app/index.php/api/getbookdetals?uuid={ID}</li>
  </ul>
</div>

<h3 class="text-danger">
Note* : While updating and Insert the record In Using API use RAW Json formate. Possible Parameters are :.
</h3>
<p>
{
"name":"12344 Testing",
"release_date":"2022-01-01 04:34:10",
"author_name":"Shailja Sharma"
}
</p>
  </body>
</html>
