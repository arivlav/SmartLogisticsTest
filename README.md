# SmartLogisticsTest
Тестовое задание на бэкенд разработчика в Умная Логистика

## Инструкция по запуску: ##

1. Склонируйте проект: **git clone https://github.com/arivlav/SmartLogisticsTest** и переходим в него (cd poliseonlinetest)
2. Разверните контейнеры через docker-compose:
   * Переименуйте (скопируйте) файл .env.example в .env и отредактируйте его по своему усмотрению или оставьте как есть
   * Запустите контейнеры: **docker-compose up -d** (флаг -d (detached) запускает контейнеры в фоне, позволяя закрыть терминал)
   * (Опционально) Можно проверить работу контейнеров: **docker-compose ps**
   * (Опционально) Остановить работу контейнеров можно: **docker-compose down**
3. Если не хотите открвать проект через localhost, не забудьте добавить в hosts такое же значение как для APP_SERVER_URL в .env:
   
   В .env:
   
   APP_SERVER_URL=**SmartLogisticsTest.loc**
   
   Н-р, для linux

         nano /etc/hosts
   В самом файле добавляем строку: 127.0.0.1         SmartLogisticsTest.loc   
4. Переходим http://SmartLogisticsTest.loc (или тот, который указали в .env APP_SERVER_URL)

