<?php

return [

    'company' => [
        'name'              => 'Имя',
        'email'             => 'E-mail',
        'phone'             => 'Телефон',
        'address'           => 'Адрес',
        'logo'              => 'Логотип',
    ],
    'localisation' => [
        'tab'               => 'Локализация',
        'date' => [
            'format'        => 'Формат даты',
            'separator'     => 'Разделитель даты',
            'dash'          => 'Тире (-)',
            'dot'           => 'Точка (.)',
            'comma'         => 'Запятая (,)',
            'slash'         => 'Слэш (/)',
            'space'         => 'Пробел ( )',
        ],
        'timezone'          => 'Часовой пояс',
    ],
    'invoice' => [
        'tab'               => 'Квитанция',
        'prefix'            => 'Number Prefix',
        'digit'             => 'Number Digit',
        'next'              => 'Next Number',
        'logo'              => 'Logo',
    ],
    'default' => [
        'tab'               => 'Умолчания',
        'account'           => 'Аккаунт по-умолчанию',
        'currency'          => 'Валюта по-умолчанию',
        'tax'               => 'Налог по-умолчанию',
        'payment'           => 'Способ оплаты по-умолчанию',
        'language'          => 'Язык по-умолчанию',
    ],
    'email' => [
        'protocol'          => 'Протокол',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP-хост',
            'port'          => 'SMTP-порт',
            'username'      => 'SMTP-пользователь',
            'password'      => 'SMTP-пароль',
            'encryption'    => 'SMTP-защита',
            'none'          => 'Отсутствует',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Путь к Sendmail',
        'log'               => 'Журнал E-mail\'ов',
    ],
    'scheduling' => [
        'tab'               => 'Планировщик',
        'send_invoice'      => 'Отправить напоминание с квитанцией',
        'invoice_days'      => 'Отправить после истечения дней',
        'send_bill'         => 'Отправить напоминание со счётом',
        'bill_days'         => 'Отправить до истечения дней',
        'cron_command'      => 'Cron-команда',
        'schedule_time'     => 'Время выполнения',
    ],
    'appearance' => [
        'tab'               => 'Внешний вид',
        'theme'             => 'Тема',
        'light'             => 'Светлая',
        'dark'              => 'Тёмная',
        'list_limit'        => 'Записей на странице',
        'use_gravatar'      => 'Использовать Gravatar',
    ],
    'system' => [
        'tab'               => 'Система',
        'session' => [
            'lifetime'      => 'Время жизни сеанса (в минутах)',
            'handler'       => 'Обработчик сеанса',
            'file'          => 'Файл',
            'database'      => 'База данных',
        ],
        'file_size'         => 'Максимальный размер файла (МБ)',
        'file_types'        => 'Допустимые типы файлов',
    ],

];
