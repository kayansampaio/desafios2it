desafio_s2it
============

This application has the purpose, to allow the user 
to load two files in XML format (people.xml and shiporders.xml Located at the root of this project), and that he can view them then.

Requirements
============

1. PHP 7
2. MySQL Database

Installation
============

1. Download the project
2. Restore the .sql file in your MySQL database
3. Modify the file app/config/parameters.yml and define the database parameters
4. From the terminal, navigate to the project root folder and type: php composer.phar install
5. From the terminal, navigate to the project root folder and type: php app / console server: run
6. In your browser, enter the address and port provided in your terminal after executing the above command. (Usually it is http://127.0.0.1:8000)
7. Enjoy