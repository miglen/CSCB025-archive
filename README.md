# CSCB025
CSCB025 - Практика по програмиране и реализация на бази данни

# Описание
Онлайн магазин - Самостоятелна работа по програмиране и реализация на бази от данни.

[Cloudformation](https://eu-west-1.console.aws.amazon.com/cloudformation/home?region=eu-west-1#/stacks/create/review?templateURL=https://raw.githubusercontent.com/miglen/CSCB025/master/cscb025_cloudformation_template.yml&stackName=cscb025)

# Технологии
 * Език за програмиране: PHP
  * Клас за темплейти: [Plates](http://platesphp.com/)
 * База от данни: MySQL
 * Външен вид: [Obaju](https://bootstrapious.com/p/obaju-e-commerce-template) от [Ondrej Svestka](http://ondrejsvestka.cz/)
 * Уеб сървър: Apache
 * Хостинг: AWS

# Структура на базата от данни

![DB Schema](schema.png)

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

# TODO:
 * _Да инсталирам pma за дб-то_
 * _Да вкарам категории и да настроя навигацията_
 * _Да вкарам страници и да ги напълня с WYSIWYG редактор (онлайн)._
 * _Да направя търсенето да работи в страници и продукти._
 * Да вкарам малко FAQ въпроси и да ги визуализирам
 * Да вкарам продукти и да ги визуализирам
 * Да инсталирам и конфигурирам клас за управление на потребителите - вход/изход,регистрация. Ако нивото е администратор - линк към администрация. https://github.com/panique/huge#quick-installation
 * Да направя в администрацията темплейт и да се виждат отделните категории за администриране: категории, продукти, страници, потребители, поръчки
 * Да направя възможноста да се поръчва: добавяне в кошница (в сесията) и поръчка накрая да се направи, страница с поръчките.
 * Да направя последни промени и визуализации.
 * Да оформя инсталационните скриптове, базата и другите и да го преинсталирам наново с тестове дали върви добре.
 * Да го предам.

Структура на URL:
/type/index
where:
type -> category,page,cart,product etc.
if !type -> index
