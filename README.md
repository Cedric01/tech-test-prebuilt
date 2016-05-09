# Sky Betting & Gaming Technical Test

## Introduction

Welcome to the Sky Betting & Gaming Technical Test!

We hope that you find this exercise fun. There are no trick questions; we want to see your solution to a simple problem with well thought-out and well structured code.


## The Brief

The aim of this exercise is to create a server-side form handler to load and save data using the provided base application.

The main functionality required is a simple update capability against the existing records. Other CRUD functions could be added if you have time. In order to validate this functionality, you could include some tests.

We leave it to you to decide how to transmit the data between the client and the server. Any client-side code should maintain the same principles as the server-side code.

You should use engineering best practices where appropriate. You should also aim to achieve a clean separation of concerns between components of your solution; using the MVC pattern, for example. We have providedd a basic implementation using [Slim](http://www.slimframework.com/), including a controller, data loading and view/templating system.

## The Deliverable

* An archive of the finished code.
* A covering note explaining the technology choices you have made.
* Any instructions required to run your solution and tests.

## Running the Application

You will first need [Composer](https://getcomposer.org/) to install project dependencies:

    composer install

You can point any Web server at the `public` directory, or you could use `php -S 0.0.0.0:4000 -t public`.
