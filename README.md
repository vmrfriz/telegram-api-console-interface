# Telegram API Console interface

**В составе 2 файла:**

- index.html - html интерфейс в виде консоли
- request.php - бэк для отправки запроса к API Telegram через хостинг

**Предназначение:**

Файлы для использования через хостинг с PHP.

Взаимодействие с API Telegram из интерфейса, близкого к консольному. 
Запрос отправляется в Telegram не с помощью AJAX, а через отдельный PHP 
файл т.к. в России заблокирован доступ к Telegram, поэтому пользоваться API 
через комфортнее через посредника - хостинг.
