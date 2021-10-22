# laravel-amocrm
Решение для интеграции AmoCRM в ваше приложение

# Внимание!
## Перед использованием установите amocrm-api-php в ваш проект! Он должен быть установлен до получения токена! [amocrm-api-php](https://github.com/amocrm/amocrm-api-php)

Пример регистрации лида в AmoCRM из приложения Laravel

# Инструкция по AmoCRM
## Как создать интеграцию?
* Перейдите в Настройки - Интеграции. Создайте новую интеграцию
* Выберите "Внешняя интеграция" и нажмите "Создать"
* В ссылке для перенаправления укажите https://YOUR_SITE/amocrm/get_token (*В моём примере так, вы можете получать по этому пути, либо по любому другому пути, который ссылается на `[\App\Http\Controllers\AmoCRMController::class, 'get_token']`)
* Укажите название и описание, которое хотите. Нажмите "Сохранить"
* После создания интеграции перейдите в "Ключи доступа". Добавьте ваши ключи в файл .ENV вот так:
```php
AMO_CLIENT_ID=//ID Интеграции
AMO_CLIENT_SECRET=//Секретный ключ
AMO_CLIENT_REDIRECT_URI=//Сюда ссылку выше. Важно! Она должна быть той же, что и при создании интеграции. https://YOUR_SITE/amocrm/get_token
```
* Всё, можете приступать к дальнейшей инструкции

# Инструкция по коду и Oauth 2.0
## Как использовать этот код?
* **Загрузите AmoCRMController.php и вставьте в папку _App/Http/Controllers_**
* Добавьте метод _request_save()_ в ваш основной контроллер API (или просто загрузите готовый контроллер **AdminController.php**)
* Скопируйте строчку route из __routes/web.php__ в ваш файл __routes/web.php__
* Добавьте метод для получения вашим API запроса из формы(*Я использую API, т.к. отправляю формы AJAX'ом методом GET.*)
* Получите ваш токен перейдя по направлению /amocrm/get_token в моём примере(либо по любому другому пути, который ссылается на `[\App\Http\Controllers\AmoCRMController::class, 'get_token']`)
* Всё готово! Можете использовать

# laravel-amocrm
Solved AMOCRM integration for laravel

# Warning!
## Before usage install amocrm-api-php to your project! It should be installed before getting token [amocrm-api-php](https://github.com/amocrm/amocrm-api-php)

Just an example of easy leads inserts and OAuth 2.0 auth for AMOCRM using Laravel


# AmoCRM setup instructions
## How to add Integration?
* Settings - Integrations -> Create new integrations
* Select Outside Integration
* Set your link to https://YOUR_SITE/amocrm/get_token (*That's for my example, or paste your route, that leading to `[\App\Http\Controllers\AmoCRMController::class, 'get_token']`)
* Set name and description, then save.
* After that go to "Access keys". Add this keys to your .ENV file like that:
```php
AMO_CLIENT_ID=//Integration ID
AMO_CLIENT_SECRET=//Secret key
AMO_CLIENT_REDIRECT_URI=//Link from above! Make sure it matches Integration link! https://YOUR_SITE/amocrm/get_token
```
* Your AmoCRM is set. U can use my code instruction now.

# Instructions
## How to Paste in my code?
* **download AmoCRMController.php and just paste it to your _App/Http/Controllers_ direection**
* Go to your main controller and paste a _request_save()_ method (or download mine **AdminController.php**)
* Copy code for __routes/web.php__ from mine __routes/web.php__ file
* Set your api for post(or just a simple route) for submitting forms(*I'm using GET method, u can use it by your own preference*)
* Get your token for app using my /amocrm/get_token route (or any route, that leading to `[\App\Http\Controllers\AmoCRMController::class, 'get_token']`)
* You are set! Have a nice day.
