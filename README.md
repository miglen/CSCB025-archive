# CSCB025
CSCB025 - Практика по програмиране и реализация на бази данни

# Описание
Онлайн магазин - Самостоятелна работа по програмиране и реализация на бази от данни.

[Cloudformation](https://eu-west-1.console.aws.amazon.com/cloudformation/home?region=eu-west-1#/stacks/create/review?templateURL=https://raw.githubusercontent.com/miglen/CSCB025/master/cscb025_cloudformation_template.yml&stackName=cscb025)

# Технологии
 * Език за програмиране: PHP
  * Темплейти: [Plates](http://platesphp.com/)
 * База от данни: MySQL
 * Уеб сървър: Apache
 * Хостинг: AWS

# Структура на базата от данни

 * Продукти (products)
   * product_id - Уникален идентификатор
   * title - Заглавие
   * text - Описание
   * category_id - Категория (category_id)
   * price - Цена
   * quantity - Количество
 * Категории (categories)
   * category_id - Уникален идентификатор
   * title - Заглавие
   * parent - Категория родител
 * Страници (pages)
   * page_id - Уникален идентификатор
   * title - Заглавие
   * text - Текст
 * Потребители (users)
   * user_id - Уникален идентификатор
   * username - Потребителско име
   * password - Парола (SHA512 хеширана)
   * is_admin - Администратор?
 * Поръчки (orders)
   * id - Уникален идентификатор
   * user_id - Потребител
   * products - Списък от закупени продукти

# Структура на хранилището

 * README.md - Прочети ме (този файл)
 * cscb025_cloudformation_template.yml - CloudFormation темплейт за инсталация на магазина.
 * ./files/
   * ./php - PHP файлове с основна функционалност
   * ./css - Статични CSS файлове 
   * ./js - Java Script статични файлове
