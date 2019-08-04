
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