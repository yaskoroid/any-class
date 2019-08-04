My test task was the same:
Тестовое задание для PHP-разработчика.

Используя фреймворк Yii2 (advanced):

1. Реализовать сущности авторы и книги

2. Реализовать административную часть в отдельном приложении - backend
    a. CRUD операции для авторов и книг
    b. вывести список книг с обязательным указанием имени автора в списке
    c. вывести список авторов с указанием кол-ва книг

3.    Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице) в приложении frontend

4.    Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером
    a. GET /api/v1/books/list получение списка книг с именем автора
    b. GET /api/v1/books/by-id получение данных книги по id
    c. POST /api/v1/books/update обновление данных книги
    d. DELETE /api/v1/books/id удаление записи книги из бд

Результат представить ссылкой на репозиторий.
Желательно, в репозиторий залить пустой каркас приложения, а затем с внесенными изменениями, чтобы можно было проследить diff.




REST API:

Create:
sudo curl -X POST -H "Content-Type: application/json" -d '{"author_id":9, "title":"Some book 2", "content":"Some book 2 content", "date":"2019-08-23"}' "http://any-class.tv/api/v1/books"

Read:
sudo curl -X GET "http://any-class.tv/api/v1/books/21"

Read all(with related instance (author)):
sudo curl -X GET "http://any-class.tv/api/v1/books/list"

Update:
sudo curl -X  POST -H "Content-Type: application/json" -d '{"id":22, "author_id":10, "title":"Some book 3(done)", "content":"Some book 3(done) content", "date":"2011-08-23"}' "http://any-class.tv/api/v1/books"

Delete:
sudo curl -X DELETE "http://any-class.tv/api/v1/books/21"


Access:

/admin/site/login
Login: yaskoroid2
Pass: 123456

/site/login
Login: yaskoroid2
Pass: 123456