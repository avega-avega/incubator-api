## Установка
   
    Для разворачивания проекта необходимо:
    
    1. Клонировать ветку репозитория:
   ```
   git clone https://github.com/avega-avega/incubator-api.git
   ```
    2. Выполнить команду: `composer install`;
    
    3. Создать в корне файл `.env` на основе `.env.example` и отредактировать его под своё окружение; 
    4. Выполнить команды: 
    ```
    php artisan key:generate
    php artisan migrate:fresh --seed
    ``` 
    
## Использование
     1. Получить список участников можно по адресу: `/api/students`;
     2. Получить информацию о конкретном участнике: `/api/student/{id}`, {id} - идентификатор участника;
     3. Получить всех участников по направлению: `/api/students/specialty/{specialtyId}`;
     4. Получить всех участников по статусу: `/api/students/status/{0|1}` (где 1 - ещё участвующие и 0 - уже выбывшие).