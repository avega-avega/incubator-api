# Реализация задачи #14 (Backend)

## Установка
   
##### Для разворачивания проекта необходимо:
1. Клонировать ветку репозитория:
    ```
    git clone https://github.com/avega-avega/incubator-api.git
    ```
2. Установить [Composer](https://getcomposer.org/download/ "Download Composer") и в корне проекта выполнить команду: `composer install`;
3. Изменить название файла `.env.example` на `.env` и отредактировать его под своё окружение; 
4. Задать ключ для приложения и произвести миграции: 
    ```
    php artisan key:generate
    php artisan migrate:fresh --seed
    ``` 
    
## Использование
 * Для получения списка всех участников нужно обратиться по адресу: `/api/students`;
 * Для получения информации о конкретном участнике: `/api/student/{id}`, где {id} - идентификатор участника;
 * Для получения списка участников по направлению: `/api/students/specialty/{1-5}`, где
 
    1 - QA,    
    2 - iOS,    
    3 - Android,     
    4 - Frontend,     
    5 - Backend;     
 
 * Для получения всех участников по статусу: `/api/students/status/{0|1}`, где 1 - ещё участвующие, а 0 - уже выбывшие.
