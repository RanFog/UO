<?php
//Текстовые ответы - должны будут уйти в базу данных в будущем
const TBHELP_ROOT = "Привет. Ваша роль *ROOT*. Вам доступны следующие команды:
Функции умного одногруппника
/headgroup - Контакты старосты.
/rasp - Получить всё расписание. 
/week - Расписание на неделю
/nextweek - Расписание на следующую неделю
/tomorrow - Расписание на завтра
_(команда также доступна по слову 'завтра')_ 
/today - Расписание на сегодня
_(команда также доступна по слову 'сегодня')_
/group - Список группы
/zapccna - Таблица записи на лабы по CCNA
/lab - Список лабораторных работ

В ближайшее время появится:
/findp - Контакты преподавателя
/finds - Поиск студента
/dz - Домашнее задание по предмету
/adddz - Добавить домашнее задание

Команды помошники:
/user\_id - Свой ID
/chat\_id - ID чата
/logs    - Логи
";
const TBHELP = "Привет. Ваша роль *STUDENT*. Вам доступны следующие команды:
/headgroup - Контакты старосты.
/rasp - Получить всё расписание. 
/week - Расписание на неделю
/nextweek - Расписание на следующую неделю
/tomorrow - Расписание на завтра
_(команда также доступна по слову 'завтра')_ 
/today - Расписание на сегодня
_(команда также доступна по слову 'сегодня')_
/group - Список группы
/zapccna - Таблица записи на лабы по CCNA
/lab - Список лабораторных работ



";
const TBSTART = "Привет. Я помошник студента ИСИТ 3его курса. \nО том, что я умею можно узнать по команде /help";
const TBPROXY = "Для подключения прокси кликни по ссылке:\nhttps://t.me/proxy?server=142.93.134.100&port=3434&secret=1d3a72af7b07e06c0db56fcfa4a75f5c";
const TBLOGS = "Файл логов здесь:\n142.93.134.100/telebots/FRTEST/logs/logs\n П.с. Удобно читать в Visual Studio Code или браузере, так будут переносы строки в отличии от блокнота :)";
const TBZAPCCNA = "Таблица для записи в 306 аудитории: \n https://docs.google.com/spreadsheets/d/10vSs0uxtNj4TEqaz3xQV9643eOIeYCXpOJgv\_GGX6LM/edit?usp=sharing\_eip&ts=5c739949";
const TBHEADGROUP = "Староста 
Владимир Андреевич Скрылев 
@Vladimir\_Skrylev 
Телефон: +7 (985) 614-20-19";
const TBGROUP = "
Группа №306. ИСИТ
Информационные системы и технологии.

Состав:
Алексеева Светлана
Билялов Борис
Володина Ольга
Дружинина Надежда
Елькина Виктория
Иваева Юлия
Куровец Федор
Лаптев Максим
Мисник Елизавета
Муленков Владимир
Родыгин Павел
Ронина Александра
Савеленок Данил
Сафронова Евгения
Скороходов Игорь
Скрылев Владимир
Табунова Екатерина
Тищенко Константин
Фирстова Мария
Шабарчина Александра
Шаповалов Алексей
Якушева Ирина
";
const TBMON1 = "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
const TBTUE1 = "11:00 - 12:35 Иностранный язык(ПЗ)";
const TBWED1 = "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
const TBTHU1 = "День самоподготовки!";
const TBFRI1 = "9:15-11:00 Правоведение (ЛК)\n11:00 - 12:35 Правоведение(ПЗ)";
const TBSAT1 = "9:15-10:50 Технология программирования";
const TBSUN1 = "Выходной!";
const TBMON2 = "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
const TBTUE2 = "09:15 - 12:35 Иностранный язык(ПЗ)";
const TBWED2 = "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
const TBTHU2 = "День самоподготовки!";
const TBFRI2 = "Выходной!";
const TBSAT2 = "Выходной!";
const TBSUN2 = "Выходной!";
const TBLAB = "Формат команды такой: /lab'номер лабы', \nНапример: /lab0001
Обязательные к выполнению на реальном оборудовании:
/lab2145 - Vlans, VTP, DTP
/lab31212 - STP
/lab4334 - HSRP
/lab6225 - EIGRP
/lab7136 - EIGRP advance
/lab101113 - OSPFv2

Список всех работ: /laball
";
const TBLABALL = "*Список всех лаб CCNA:*
/lab0001
/lab1012
/lab1311
/lab2145
/lab2225
/lab3012
/lab31212
/lab3323
/lab3411
/lab4012
/lab4214
/lab4224
/lab4334
/lab4411
/lab5012
/lab6012
/lab6225
/lab6435
/lab6511
/lab7012
/lab7136
/lab7236
/lab7237
/lab7311
/lab8012
/lab8245
/lab8336
/lab8411
/lab9012
/lab9228
/lab9229
/lab9311
/lab10012
/lab101113
/lab10135
/lab10233
/lab10234
/lab10245
/lab10311
";

const TBPROFESSORS = "
Вычислительные приборы и 
";
?>
