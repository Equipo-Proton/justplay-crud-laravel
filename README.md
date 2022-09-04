JustPlay
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
| <img src="https://github.com/Yelose/Yelose/blob/main/img/vscode.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/html.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/bootstrap.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/css.png"> <img src="https://camo.githubusercontent.com/bcd4bda49ef6cd9537db065920f4f4f6ac670eae0e0adf2c5133c19b319f1574/68747470733a2f2f627261646c632e67616c6c65727963646e2e76736173736574732e696f2f657874656e73696f6e732f627261646c632f7673636f64652d7461696c77696e646373732f302e322e302f313535383034303536333634392f4d6963726f736f66742e56697375616c53747564696f2e53657276696365732e49636f6e732e44656661756c74"> | <img src="data:image/png;base64,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"> <img src="https://github.com/Yelose/Yelose/blob/main/img/php.png">  <img src="https://github.com/Yelose/Yelose/blob/main/img/mysql.png"> | <img src="https://github.com/Yelose/Yelose/blob/main/img/figma.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/jira.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/google.png"> <img src="https://github.com/Yelose/Yelose/blob/main/img/gimp.png"> |


## Documentation

- [Dailys](https://docs.google.com/document/d/1liH84SXscXYY4BS_w1ZbWIWB2hXiuaR0V_ZfhH4nhOI/edit?usp=sharing)
- [Presentation PPTX](https://docs.google.com/presentation/d/1bZ7vdmS8ArI8FaSERe12CAavoOyvut5mb_DrAyleek4/edit?usp=sharing)
- [Prototype](https://www.figma.com/file/wF99gStSlo5mO8d03M1Tat/Just-Play?node-id=6%3A3)
- [UserFlow](https://www.figma.com/file/K8ZyGDBIQeuiWOiMmWCczJ/User-flow-Proyect_php?node-id=0%3A1)


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


