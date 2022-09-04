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


