JustPlay
<img src="public/img/icono.png" style="margin-left: 30px;">
============

***

## Description

A software development group wants to create a web application to manage their online events such as workshops, masterclasses or webinars.

Users will be able to see the description of an event, sign up and unsubscribe. They will be able to see the list of the events they have signed up for. The administrator must have the tools for the management (CRUD) of the events.


## Functional Requirementes

<ul>
<li>On the cover, the application will have a slider with the featured masterclasses. these will be selectable by the administrator.</li>
<li>On the cover there will be a paginated list with all the events ordered from the closest to the furthest.</li>
<li>The events will include at least: title, date/time, maximum number of participants, description and an image.</li>
<li>Past events should be kept in the list but identifiable as unavailable.</li>
<li>Users must register to sign up for an event. Once signed up they will not be able to do it again.</li>
<li>Joining an event will receive an email (business - html ) with the link (zoom, meets, etc..) where it will take place, as well as remembering the title of the event, the time and the day.</li>
<li>Users will be able to see on one page the list of events to which they are registered.</li>
<li>The administrator will be able to CRUD the events.</li>
<li>When an event is full (maximum number of participants) no one will be able to register.</li>
</ul>


## Not Functional Requirements

<ul>
<li>The website must be 'deployed' even if it is under development.</li>
<li>All requirements and user cases must be tested (acceptance tests).</li>
<li>Laravel have to be used.</li>
<li>The sending of the email must be done using a queuing system.</li>
<li>For the frontend you should use blade components.</li>
</ul>


## Presentation:

<ul>
<li>GitHub link.</li>
<li>Readme with:</li>
    <ul>
        <li>Briefing and project explanation.</li>
        <li>Diagrams.</li>
        <li>Sketch - Mockup - Prototype.</li>
    </ul>
<li>Google Slides presentation.</li>
<li>Demo and code review</li>

</ul>

***
***

## Run Locally

Clone the project
```bash
  git clone https://github.com/Equipo-Proton/justplay-crud-laravel.git
```

Create a local database in phpMyAdmin with user: root, password: "".
Name of the database: justplay.
Execute migration: "php artisant migration:fresh --seed".

Go to the project directory
```bash
  cd justplay-crud-laravel
```

Install dependencies
```bash
  composer update
  npm install
```

Start the server
```bash
  run Apache and MySQL server in XAMPP
  php artisan serve
  npm run dev
```


## Technical requirements

- PHP 8.1.6
- Composer 2.3.10


## Run tests

To execute tests uncomment 2 lines of "phpunit.xml":
```php
    <server name="DB_CONNECTION" value="sqlite"/>
    <server name="DB_DATABASE" value=":memory:"/>
```
        
- vendor/bin/phpunit 
- php artisan test
- OK (8 tests, 13 assertions)


## 🛠️ Prototype

<p align="center"> 
<img src="./public/img/pagina-principal(1).png" width=25% style="height: 450px;">
<img src="./public/img/movilhome.jpg" width=25%>
</p>


## Work methodology

- TDD
- Agile
- Scrum
- Pair programming


## Versions

- develop: branch with work in development.
- Main: branch with current work.
- v1.0: Implementation of the Read and Delete with phpunit tests.
- v2.0:  Implementation of the Read and Delete with phpunit tests.
- v3.0: Final implementation with CRUD and Authentication.


#### Tools and technologies used

| Front End | Back End | Diseño y organización | 
| :---: | :---: | :---: |
| <img src="https://github.com/Yelose/Yelose/blob/main/img/vscode.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/html.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/bootstrap.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/css.png"> <img src="https://camo.githubusercontent.com/bcd4bda49ef6cd9537db065920f4f4f6ac670eae0e0adf2c5133c19b319f1574/68747470733a2f2f627261646c632e67616c6c65727963646e2e76736173736574732e696f2f657874656e73696f6e732f627261646c632f7673636f64652d7461696c77696e646373732f302e322e302f313535383034303536333634392f4d6963726f736f66742e56697375616c53747564696f2e53657276696365732e49636f6e732e44656661756c74"> | <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU3_893T2dAaGeZ6fb9y9rZxc9Cu-TnUKx0Q&usqp=CAU"> <img src="https://github.com/Yelose/Yelose/blob/main/img/php.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/mysql.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/figma.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/jira.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/google.png">  |


## Documentation

- [Dailys](https://docs.google.com/document/d/1liH84SXscXYY4BS_w1ZbWIWB2hXiuaR0V_ZfhH4nhOI/edit?usp=sharing)
- [Presentation PPTX](https://docs.google.com/presentation/d/1bZ7vdmS8ArI8FaSERe12CAavoOyvut5mb_DrAyleek4/edit?usp=sharing)
- [Prototype](https://www.figma.com/file/wF99gStSlo5mO8d03M1Tat/Just-Play?node-id=6%3A3)
- [UserFlow](https://www.figma.com/file/pXnQMlo6iVQSkPrgn6O4bJ/User-Flow-JustPlay?node-id=0%3A1)
- [Emails](https://docs.google.com/presentation/d/1TGCLnGaKJa7cGVeS_zNEj4AZEE8Ci6Nq49nlLXrR3l8/edit?usp=sharing)


## Authors

| Nombre | Roll | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :--- | :---: | :---: |
| Kerim Ozkan| Web Developer | https://github.com/ozknkrm |
| Miguel Salvador | Web Developer| https://github.com/miguelsalvadorrguez85 |
| Susana Martínez | Web Developer | https://github.com/Susipro |
| Guillermo García | Product Owner | https://github.com/guillerdev97 |
| Lucy Alvarado | Scrum Master| https://github.com/lucyalvarado4692 |


## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


