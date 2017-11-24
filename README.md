## Установка

    Для того, чтобы развернуть проект, необходимо:
    
    1. Клонировать ветку репозитория:
   ```
   git clone https://github.com/avega-avega/incubator-events.git
   ```
    2. Выполнить: `composer install`;
    
    3. Создать в корне файл `.env` на основе `.env.example` и отредактировать его под своё окружение; 
    4. Выполнить команды: 
    ```
    php artisan key:generate
    php artisan migrate:fresh --seed
    ```
    5. Profit! 