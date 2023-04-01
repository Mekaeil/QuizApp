## About QuizApp 
This project has been implemented based on Laravel framework!

## DB Diagram
You can see and find the [diagram in draw.io link](https://drive.google.com/file/d/1MqIh5MLh9cfK_rP3R-UUkcCde3Njt3ZK/view?usp=sharing), and also you can see the image of the DB diagram.

<p style="width: 30em;text-align:left;">

![image](https://github.com/Mekaeil/QuizApp/blob/master/public/images/QuizApp_diagram.png)

</p>

## QuizApp Logic & Features

In this small application we want to create the below features:

- question CRUD
  - question types [select, multi-select, text]
- question replies CRUD and assign to questions
- quiz-box to make a group of questions
- scheduled quiz-box to make it easy schedule a group of questions to send to users
  - we can define reply_type to have several type of replies
    - realtime 
    - email
    - custom_correction_required
    - end_of_exam
- tag to create a label for different type of entities
- quiz-replier-activity: we will log user's answer 

# Install 
You can install the project by following the below steps
1. open the project directory on your terminal
2. run this command: `make install`
   1. If you get the DB Error (Mysql gone away) run this command: `make table`


> If the make command is not working for you, run the below commands:
``` 
composer install

cd deployment && docker-compose up -d --force-recreate && docker-compose build --force-rm

docker exec -it quiz-app cp .env.example .env

docker exec -it quiz-app php artisan key:generate

docker exec -it quiz-app php artisan migrate
```

# Contributing
If you want to contribute in this repository you can use the below commands:

- To have consistency in the repository we are using [Laravel Pint Package]() so before commit, run the below command:
```
make pint 

OR

./vendor/bin/pint 
```
- Clearing all of caches
``` 
make clear 
```

# Test 
For executing the test cases:

```
make test

OR

./vendor/bin/phpunit 
```
