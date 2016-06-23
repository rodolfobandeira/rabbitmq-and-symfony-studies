# rabbitmq-and-symfony-studies
A simple repository to learn how to use RabbitMQ and Symfony 2.8

1) `git clone https://github.com/rodolfobandeira/rabbitmq-and-symfony-studies.git`

2) `cd rabbitmq-and-symfony-studies`

3) `composer install`

4) `php app/console | grep rabbitmq`

5) Try to create a producer and execute a consumer.

6) `php app/console server:run 0.0.0.0:8000`

7) Open in the browser. ex: http://127.0.0.1:8000

8) `php app/console rabbitmq:consumer hello_rabbitmq`

https://twitter.com/rodolfobandeira

-

*Reference:*

- Thanks for the Presenter Kacper Gunia (https://twitter.com/cakper) 
- Thanks Youtube to make possible I watch Kacper's presentation: (https://www.youtube.com/watch?v=cha92Og9M5A)
- Thanks Alvaro Videla for the effort around RabbitMQ and PHP (https://twitter.com/old_sound)
