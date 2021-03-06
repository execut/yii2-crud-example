В пакете был реализован следующий функционал:
* Класс модели Book
* Название таблицы путём объявления ```Book::tableName()```
* Навигация CRUD
* Контроллер CRUD
    * Контроль доступа к CRUD
    * Вывод списка
        * Действие для вывода списка записей
           * Загрузка параметров фильтрации
           * Задание в модели правил валидации для сценария search путём объявления ```Book::rules()```
           * Валидация модели по сценарию grid
           * Формирование ActiveQuery на основе параметров фильтрации
           * Настройка ActiveDataProvider для списка записей
           * Вывод представления 
        * Представление для вывода списка записей
           * Вывод кнопки добавления новой записи
           * Формирование настроек колонок списка
           * Вывод списка записей через виджет [kartik-v/yii2-dynagrid](https://github.com/kartik-v/yii2-dynagrid)
    * Создание или редактирование записей
        * Действие для создания или редактирования записей
            * Если это не новая запись, то поиск активной модели
            * Если новая, то создание
            * Задание сценария edit
            * Загрузка данных модели из запроса
            * Задать правила валидации модели по сценарию form путём добавления ```Simple::rules()```
            * Валидация данных модели
            * Сохранение модели
            * Вывод ошибок
        * Представление для вывода формы редактирования активной записи
            * Формирование настроек аттрибутов для формы редактирования
            * Вывод формы редактирования
    * Действие для удаления записей