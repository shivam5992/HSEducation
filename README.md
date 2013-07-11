High-School-Education
=====================

A complete educational website.<br>

<b>Web Technologies Used in the project:</b> Php, Javascript, Html, Css3, Jquery, Ajax and Xml.

<br>

<b> Tools and Technologies :</b> Wamp Server/(or any other server), MySql <br>

This project is a complete education website with a number of features like <br>
1. Downloading books, magzines, papers, study material etc. <br>
2. Question Answer Portal Forum for asking questions directly to teachers and authors. <br>
3. Web Search, Books Search, Video Search and Latest News by web Crawling.<br>
4. Buying and Selling of old and new books via online payment gateway.<br>
5. Seperate sections for Admin, guests, studetns and teachers.<br>
<br>
<b>Php Curl</b> is used for web Crawling. <br>Similar function is used for extracting Image 
and extracting text for the purpose of data mining.<br> Curl is also extracting the tag attributes like href, text etc.<br><br>

To Initialize the curl : <code>$this->curl= curl_init();</code> <br> is used, then there are standar functions of
<a href="http://php.net/manual/en/book.curl.php">Curl Php Manual</a> which are used in this project.<br>

To setup the database, create a database named "high_school" in MySql or PhpMyAdmin or whatever that supports MySql.
<br><b> CREATE DATABASE high_school <b>

<br>

Then Import the "high_school.sql" file from the "databasa_query" folder.<br>
<b> mysql -u root shivam < high_school.sql</b>

