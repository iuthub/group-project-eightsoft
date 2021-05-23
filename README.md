<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

[![Work in Repl.it](https://classroom.github.com/assets/work-in-replit-14baed9a392b3a25080506f3b7b6d57f295ec2978f6f33ec97e36a161684cbe9.svg)](https://classroom.github.com/online_ide?assignment_repo_id=402169&assignment_repo_type=GroupAssignmentRepo)

# Internet Programming: Group Project Assignment, Blog Application

> Deadline: 23.05.2021 (midnight).

## Eightsoft team
- Rustam Zokirov U1910049, Section 002
- Abdullokh Alimov U1910060, Section 002
- Vladimir Khvan U1910046, Section 001
- Irina Em U1910128, Section 003
- Javokhir Isroilov U1910050, Section 002
- Azamat Tokhirov U1910070, Section 002

## Project business logic
- Anyone can log in / register
- Users can be 'admin', 'author', or 'subscribers'
- Authors can write / update / delete their own posts
- Authors can use tagging on their posts
- Authors have dashboard system
- Admin can approve message pin request on the home page
<!-- - Admin has full access to the website and can read / write / update / delete any of the posts --> 
- Anyone can read these posts
- Users can comment on the posts (only after login)
- Users can use search system (by author, by topic tag, by date)

## UML diagram
<img src = "screenshots/UML.png">

## Front-end design
- Home page `index.html` <br><img src = "screenshots/front-end/1.png">
- Home page continuation <br><img src = "screenshots/front-end/2.png">
- Blog page <br><img src = "screenshots/front-end/3.png">
- View post page <br><img src = "screenshots/front-end/9.png">
- View post & comments <br><img src = "screenshots/front-end/10.png">
- Create post page <br><img src = "screenshots/front-end/5.png">
- Contacts page <br><img src = "screenshots/front-end/6.png">
- Login page <br><img src = "screenshots/front-end/7.png">
- Registration page <br><img src = "screenshots/front-end/8.png">

## Front-end responsive design demo
<img src = "screenshots/front-end/11.png" width=500><img src = "screenshots/front-end/13.png" width=500><img src = "screenshots/front-end/14.png" width=500><img src = "screenshots/front-end/15.png" width=500><img src = "screenshots/front-end/16.png" width=500><img src = "screenshots/front-end/17.png" width=500><img src = "screenshots/front-end/18.png" width=500>

## Checkpoints (The process of development)
- Create Laravel project <br><img src="screenshots/1.png">
- Create the routing, controller, and basic view <br><img src="screenshots/2.png"><img src="screenshots/3.png"><img src="screenshots/4.png">
- Authentication & Authorization setting <br><img src="screenshots/5.png"><img src="screenshots/6.png"><img src="screenshots/7.png">
- So, here we go, the first problem, MySQL server is not working, MAMP crashed, `php artisan migrate` giving error.
- MySQL error fixed, Posts - Create, Validation, Save:   <br><img src="screenshots/Posts.jpg"><img src="screenshots/Test_Validation.jpg"><img src="screenshots/Saved_Posts.jpg">
- Post edit function added: <br><img src="screenshots/Edit_Post.jpg"><img src="screenshots/Post_Edited.jpg">
- Post delete function added: <br><img src="screenshots/Post_Deleted.jpg">
- Authentication added: <br><img src="screenshots/Registration.jpg"><img src="screenshots/User.jpg"><img src="screenshots/Login.jpg">
- Connecting user's posts with user's account: <br><img src="screenshots/IDs.jpg"> <img src="screenshots/blogs.jpg">
