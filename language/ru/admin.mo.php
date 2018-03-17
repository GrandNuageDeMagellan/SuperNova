<?php

/*
#############################################################################
#  Filename: admin.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Russian]
* @version 43a14.17
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$a_lang_array = array(
  'menu_admin_ally' => 'Альянсы',

  'adm_tool_md5_header' => 'Генерация и шифрование пароля (MD5)',
  'adm_tool_md5_hash' => 'Хэш MD5',
  'adm_tool_md5_encode' => '[ Зашифровать ]',
  'adm_tool_md5_generate' => '[ Сгенерировать ]',

  'adm_tool_sql_page_header' => 'Параметры сервера SQL',

  'adm_tool_sql_server_version' => 'Версия сервера',
  'adm_tool_sql_client_version' => 'Версия библиотеки',
  'adm_tool_sql_host_info' => 'Метод соединения',

  'adm_confirm_do' => 'Подтвердить',

  'adm_tool_sql_table' => array(
    'server' => array(
      'TABLE_HEADER'  => 'Сервер SQL',
      'COLUMN_NAME_1' => 'Параметр',
      'COLUMN_NAME_2' => 'Значение',
//      'TABLE_FOOTER'  => '',
//      'TABLE_EMPTY'   => '',
    ),

    'status' => array(
      'TABLE_HEADER'  => 'Статус сервера SQL',
      'COLUMN_NAME_1' => 'Параметр',
      'COLUMN_NAME_2' => 'Значение',
//      'TABLE_FOOTER'  => '',
    ),

    'params' => array(
      'TABLE_HEADER'  => 'Настройки сервера SQL',
      'COLUMN_NAME_1' => 'Параметр',
      'COLUMN_NAME_2' => 'Значение',
//      'TABLE_FOOTER'  => '',
    ),
  ),

  'adm_pl_image' => 'Изображение планеты',
  'adm_pl_fields_max' => 'Максимум секторов',
  'adm_pl_temp_min' => 'Минимальная&nbsp;температура',
  'adm_pl_temp_max' => 'Максимальная&nbsp;температура',
  'adm_pl_fields_busy' => 'Занято секторов',
  'adm_pl_governor' => 'Губернатор',
  'adm_pl_debris_metal' => 'Обломки, металл',
  'adm_pl_debris_crystal' => 'Обломки, кристалл',

  'adm_opt_user_settings' => 'Настройки игроков',
  'adm_opt_user_birthday_gift' => 'Подарок игроку на день рождения',
  'adm_opt_user_birthday_gift_disable' => '0 - отключить подарки',
  'adm_opt_user_birthday_range' => 'Ретро-рождение, в днях',
  'adm_opt_user_birthday_range_hint' => 'Как далеко в прошлом может располагаться день рождения для получения игроком подарка. Очевидно, не имеет практического смысла устанавливать это значение более чем в 364 дня',

  'adm_ul_title' => 'Список игроков',
  'adm_ul_title_online' => 'Игроки онлайн',
  'adm_ul_time_registered' => 'Дата регистрации',
  'adm_ul_time_played' => 'Последний логин',
  'adm_ul_time_banned' => 'Срок блокировки',
  'adm_ul_delete_confirm' => 'Подвтердите удаление пользователя ',
  'adm_ul_referral' => 'Рефералы',
  'adm_ul_players' => 'Игроки',
  'adm_ul_dms' => 'ТМ',
  'adm_sys_actions' => 'Действия',
  'adm_sys_write_message' => 'Написать личное сообщение',
  'adm_sys_delete_user' => 'Удалить игрока',



  'adm_done' => 'Успешно выполнено',
  'adm_inactive_removed' => '<li>Удалено неактивных записей игроков: %d</li>',
  'adm_stat_title' => 'Обновление статистики',
  'adm_maintenance_title' => 'Обслуживание БД',
  'adm_records' => 'записей обработано',
  'adm_cleaner_title' => 'Чистка очереди построек',
  'adm_cleaned' => 'Кол-во удаленных задач: ',
  'adm_schedule_none' => 'В расписании нет задач на сейчас',

  'Fix' => 'Обновлено',
  'Welcome_to_Fix_section' => 'секция патчей',
  'There_is_not_need_fix' => 'Фикс ненужен!',
  'Fix_welldone' => 'Сделано!',
  'adm_ov_title' => 'Обзор',
  'adm_ov_infos' => 'Информация',
  'adm_ov_yourv' => 'Текущая версия',
  'adm_ov_lastv' => 'Доступная версия',
  'adm_ov_here' => 'здесь',
  'adm_ov_onlin' => 'Онлайн',
  'adm_ov_ally' => 'Альянс',
  'adm_ov_point' => 'Очки',
  'adm_ov_activ' => 'Активен',
  'adm_ov_count' => 'Онлайн игроки',
  'adm_ov_wrtpm' => 'Написать в личку',
  'adm_ov_altpm' => '[ЛП]',
  'adm_ov_hint' => '<ul><li>Таблица пользователей онлайн может быть отсортирована по колонкам "ID", "Имя игрока", "Альянс", "Очки" и "Активность". Для сортировки по определенной колонке кликните на её заголовке</li></ul>',


  'adm_ul_ttle2' => 'Players listed',
  'adm_ul_id' => 'ID',
  'adm_ul_name' => 'Имя игрока',
  'adm_ul_mail' => 'E-mail',
  'adm_ul_adip' => 'IP',
  'adm_ul_regd' => 'Registred from',
  'adm_ul_lconn' => 'Последний логин',
  'adm_ul_bana' => 'Ban',
  'adm_ul_detai' => 'Детали',
  'adm_ul_actio' => 'Действия',
  'adm_ul_playe' => ' игроков',
  'adm_ul_yes' => 'Да',
  'adm_ul_no' => 'Нет',
  'adm_pl_title' => 'Активные планеты',
  'adm_pl_activ' => 'Активные планеты',
  'adm_pl_name' => 'Имя планеты',
  'adm_pl_posit' => 'Координаты',
  'adm_pl_point' => 'Значение',
  'adm_pl_since' => 'Активна',
  'adm_pl_they' => 'Всего',
  'adm_pl_apla' => 'планет(а/ы)',
  'adm_am_plid' => 'ID планеты',
  'adm_am_done' => 'Добавление прошло успешно',
  'adm_am_ttle' => 'Добавить ресурсы',
  'adm_am_add' => 'Подтвердить',
  'adm_am_form' => 'Форма добавления ресурсов',
  'adm_ban_title' => 'Забанить игрока',
  'adm_bn_plto' => 'Забанить игрока',
  'adm_bn_name' => 'Имя игрока',
  'adm_bn_reas' => 'Причина бана',
  'adm_bn_isvc' => 'С режимом отпуска',
  'adm_bn_time' => 'Длительность бана',
  'adm_bn_days' => 'Дни',
  'adm_bn_hour' => 'Часы',
  'adm_bn_mins' => 'Минуты',
  'adm_bn_secs' => 'Секунды',
  'adm_bn_bnbt' => 'Забанить',
  'adm_bn_thpl' => 'Игрок',
  'adm_bn_isbn' => 'успешно заблокирован!',
  'adm_bn_vctn' => ' Включен режим отпуска.',
  'adm_bn_errr' => 'Ошибка блокировки игрока! Возможно ник %s не найден.',
  'adm_bn_err2' => 'Ошибка отключения производства на планетах!',
  'adm_bn_plnt' => 'Производство на планетах отключено.',
  'adm_ban_msg_issued_date' => 'заблокировал игрока',
  'adm_unbn_ttle' => 'Анбан',
  'adm_unbn_plto' => 'Разбанить игрока',
  'adm_unbn_name' => 'Имя',
  'adm_unbn_bnbt' => 'Разбанить',
  'adm_unbn_thpl' => 'Игрок',
  'adm_unbn_isbn' => 'разбанен!',
  'adm_rz_ttle' => 'Обнуление вселенной',
  'adm_rz_done' => 'User(s) of transfer(s)',
  'adm_rz_conf' => 'Подтверждение',
  'adm_rz_text' => 'Нажимая кнопку (обнулить) вы уничтожите все данные базы. Вы сделали резервную копию??? Аккаунты удалены не будут...',
  'adm_rz_doit' => 'Обнулить',
  'adm_ch_ttle' => 'Администрирование чата',
  'adm_ch_list' => 'Список сообщений',
  'adm_ch_clear' => 'Очистить',
  'adm_ch_idmsg' => 'ID',
  'adm_ch_delet' => 'удалить',
  'adm_ch_play' => 'Игрок',
  'adm_ch_time' => 'Дата',
  'adm_ch_chat' => 'Реплика',
  'adm_ch_nbs' => 'сообщений всего...',
  'adm_er_ttle' => 'Записи системы логов',
  'adm_er_clear' => 'Очистить',
  'adm_er_idmsg' => 'ID',
  'adm_er_type' => '[Код] Заголовок',
  'adm_er_play' => 'Игрок',
  'adm_er_time' => 'Дата',
  'adm_er_page' => 'Адрес страницы',
  'adm_er_nbs' => 'Записей в логе:',
  'adm_er_text' => 'Запись лога',
  'adm_er_bktr' => 'Отладочная информация',
  'adm_dm_title' => 'Изменение количества Тёмной Материи',
  'adm_dm_planet' => 'ID, координаты или название планеты',
  'adm_dm_oruser' => 'ИЛИ',
  'adm_dm_user' => 'ID или имя игрока из списка игроков',
  'adm_or_caption' => 'ИЛИ',
  'adm_dm_no_quant' => 'Укажите количество ТМ (положительное - для начисления, отрицательное - для снятия)',
  'adm_dm_no_dest' => 'Укажите ID или имя игрока для изменения ТМ',
  'adm_dm_add_err' => 'Похоже, во время начисления ТМ произошла ошибка',
  'adm_dm_user_none' => 'Ошибка: не найден игрок с ID или именем "%s"',
  'adm_dm_user_added' => 'Количество ТМ у игрока [%2$d] "%1$s" успешно изменено на %3$s ТМ',
  'adm_dm_user_conflict' => 'Ошибка: похоже, в БД есть игрока и с таким именем, и с таким ID',
  'adm_dm_planet_none' => 'Ошибка при поиске планеты: не найдено планеты с ID, координатами или именем %s',
  'adm_dm_planet_added' => 'Количество ТМ у игрока ID %1$d (владельца планеты %4$s %2$s ID %3$d) успешно изменено на %5$d ТМ.',
  'adm_dm_planet_conflict' => 'Неуникальные данные для поиска планеты.<br>Это означает, что в БД одновременно существует ',
  'adm_dm_planet_conflict_id' => 'планета с именем "%1$s" и планета с ID %1$s .<br>Попробуйте использовать координаты планеты.',
  'adm_dm_planet_conflict_name' => 'несколько планет с именем "%1$s".<br>Попробуйте использовать координаты или ID планеты.',
  'adm_dm_planet_conflict_coords' => 'планета с именем "%1$s" и планета с координатами %1$s.<br>Попробуйте использовать ID планеты.',
  'adm_apply' => 'Применить',
  'adm_maint' => 'Обслуживание',
  'adm_backup' => 'Резервная копия',
  'adm_tools' => 'Утилиты',
  'adm_tools_reloadConfig' => 'Пересчитать конфигурацию',
  'adm_reason' => 'Причина',
  'adm_opt_title' => 'Настройки Вселенной',
  'adm_opt_game_settings' => 'Параметры игры',
  'adm_opt_game_name' => 'Название Вселенной',
  'adm_opt_multiaccount_enabled' => 'Разрешить взаимодействие аккаунтов с 1 IP',
  'adm_opt_speed' => 'Скорость',
  'adm_opt_game_gspeed' => 'Игры',
  'adm_opt_game_fspeed' => 'Флота',
  'adm_opt_game_pspeed' => 'Добычи ресурсов',
  'adm_opt_colonies_not_counted' => '(без учёта Столицы)',
  'adm_opt_colonies_no_restrictions' => '(-1 - нет ограничений)',
  'adm_opt_game_speed_normal' => '(1&nbsp;-&nbsp;нормальная)',
  'adm_opt_game_faq' => 'Ссылка на ЧаВо',
  'adm_opt_game_forum' => 'Адрес форума',
  'adm_opt_game_metamatter' => 'Ссылка &quot;Приобрести Метаматерию&quot;',
  'adm_opt_game_copyrigh' => 'Copyright',
  'adm_opt_game_online' => 'Отключить игру. Пользователи увидят следующее сообщение:',
  'adm_opt_game_offreaso' => 'Сообщение',
  'adm_opt_plan_settings' => 'Параметры планет',
  'adm_opt_plan_initial' => 'Размер стартовой планеты',
  'adm_opt_plan_base_inc' => 'Базовая добыча',
  'adm_opt_game_debugmod' => 'Включить режим отладки',
  'adm_opt_geoip_whois_url' => 'URL сервиса WHOIS',
  'adm_opt_geoip_whois_url_example' => '(например "http://1whois.ru/?ip=")',
  'adm_opt_game_counter' => 'Включить счетчик посещений',
  'adm_opt_game_oth_info' => 'Прочие параметры',
  'adm_opt_int_news_count' => 'Количество новостей',
  'adm_opt_int_page_imperor' => 'На странице &quot;Император&quot;',
  'adm_opt_game_zero_disable' => '(0&nbsp;-&nbsp;отключить)',
  'adm_opt_game_advertise' => 'Рекламные блоки',
  'adm_opt_game_oth_adds' => 'Включить рекламный блок в левом меню. Код баннера:',
  'adm_opt_game_oth_gala' => 'Галактика',
  'adm_opt_game_oth_syst' => 'Система',
  'adm_opt_game_oth_plan' => 'Планета',
  'adm_opt_btn_save' => 'Сохранить',
  'adm_opt_vacation_mode' => 'Отключить режим отпуска',
  'adm_opt_sectors' => 'секторов',
  'adm_opt_per_hour' => 'в час',
  'adm_opt_saved' => 'Настройки игры сохранены успешно',
  'adm_opt_players_online' => 'Игроков на сервере',
  'adm_opt_vacation_mode_is' => 'Режим отпуска',
  'adm_opt_game_status' => 'Состояние игры',
  'adm_opt_links' => 'Ссылки и баннеры',
  'adm_opt_universe_size' => 'Размер Вселенной',
  'adm_opt_galaxies' => 'Галактик',
  'adm_opt_systems' => 'Систем',
  'adm_opt_planets' => 'Планет',
  'adm_opt_build_on_research' => 'Строить лабораторию во время исследования',
  'adm_opt_eco_scale_storage' => 'Масштабировать склады от скорости добычи',
  'adm_opt_game_rules' => 'Ссылка на правила',
  'adm_opt_max_colonies' => 'Количество колоний',
  'adm_opt_exchange' => 'Курс обмена ресурсов',
  'adm_opt_game_mode' => 'Тип Вселенной',
  'adm_opt_chat' => 'Настройки чата',
  'adm_opt_chat_timeout' => 'Таймаут по неактивности',
  'adm_opt_allow_buffing' => 'Разрешить прокачку',
  'adm_opt_ally_help_weak' => 'Разрешить удержание на слабом соаловце',
  'adm_opt_email_pm' => 'Разрешить пересылку ЛС на e-mail',
  'adm_opt_player_defaults' => 'Настройки игрока по умолчанию',
  'adm_opt_game_default_language' => 'Язык интерфейса',
  'adm_opt_game_default_skin' => 'Оформление/Шкурка',
  'adm_opt_game_default_template' => 'Шаблон',
  'adm_opt_player_change_name' => 'Смена ника игроком',
  'adm_opt_player_change_name_options' => [
    SERVER_PLAYER_NAME_CHANGE_NONE => 'Смена ника запрещена',
    SERVER_PLAYER_NAME_CHANGE_FREE => 'Бесплатная смена ника',
    SERVER_PLAYER_NAME_CHANGE_PAY => 'Смена ника за ТМ',
  ],
  'adm_opt_player_change_name_cost' => 'Стоимость в ТМ за смену ника',
  'adm_opt_empire_mercenary_temporary' => 'Временные наемники',
  'adm_opt_empire_mercenary_temporary_base' => 'Базовое время для найма, секунд',
  'adm_opt_empire_mercenary_temporary_hint' => 'При включении опции все наемники будут преобразованы во временные с базовым сроком действия<br />При отключении опции все наемники будут преобразованы в постоянные. При этом рекрутированные наемники, не доступные по требованиям найма, хотя и не смогут быть проапгрейжены, но все равно будут активны - т.е. будут оказывать влияние на игру',
  'adm_opt_experimental' => 'ЭКСПЕРИМЕНТАЛЬНЫЕ ОПЦИИ! ИСПОЛЬЗУЙТЕ С ОСТОРОЖНОСТЬЮ!',
  'adm_opt_tpl_minifier' => 'Минификатор темплейтов',
  'adm_opt_tpl_minifier_hint' => 'Минификатор сжимает темплейты, заменяя несколько идущих подряд "пустых" символов (перевод строки, табуляция, пробел) одним пробелом. Подробнее о работе минификатора можно прочитать в /docs/changelog.txt',
  'adm_lm_compensate' => 'Компенсировать',
  'adm_pl_comp_title' => 'Компенсация уничтоженной планеты',
  'adm_pl_comp_src' => 'Уничтожить планету',
  'adm_pl_comp_dst' => 'Зачислить ресурсы на планету',
  'adm_pl_comp_bonus' => 'Бонус игрока',
  'adm_pl_comp_check' => 'Проверить',
  'adm_pl_comp_confirm' => 'Подтвердить',
  'adm_pl_comp_done' => 'Готово',
  'adm_pl_comp_price' => 'Стоимость построек',
  'adm_pl_comp_got' => 'Будет зачислено',
  'adm_pl_com_of_plr' => 'игрока',
  'adm_pl_comp_will_be' => 'будет',
  'adm_pl_comp_destr' => 'уничтожена.',
  'adm_pl_comp_recieve' => 'Указанное количество ресурсов',
  'adm_pl_comp_recieve2' => 'зачислено на планету',
  'adm_pl_comp_err_0' => 'Не найдена уничтожаемая планета',
  'adm_pl_comp_err_1' => 'Планета уже уничтожена',
  'adm_pl_comp_err_2' => 'Не найдена планета, на которую нужно зачислить ресурсы',
  'adm_pl_comp_err_3' => 'У указанных планет разные владельцы. Зачислить ресурсы можно только на планету того же игрока',
  'adm_pl_comp_err_4' => 'Планета не пренадлежит указанному игроку',
  'adm_pl_comp_err_5' => 'Планеты для уничтжения и для зачисления ресурсов совпадают',
  'adm_ver_versions' => 'Версии компонентов сервера',
  'adm_ver_version_sn' => 'Версия движка',
  'adm_ver_version_db' => 'Версии базы данных',
  'adm_update_force' => 'Форсировать обновление с нуля',
  'adm_update_repeat' => 'Повторить предыдущее обновление',
  'adm_ptl_test' => 'Тест работы phpBB Template Engine',
  'adm_counter_recalc' => 'Пересчитать таблицу `counter`',
  'adm_lm_planet_edit' => 'Редактировать',
  'adm_planet_edit' => 'Редактирование планеты',
  'adm_planet_id' => 'Идентификатор планеты',
  'adm_name' => 'Название',
  'adm_planet_change' => 'Изменение',
  'adm_planet_parent' => 'Родительская планета',
  'adm_planet_active' => 'Активные планеты',
  'adm_planet_edit_hint' => '<ul>    <li>Если на пустой странице ввести идентификатор планеты и нажать кнопку "Подтвердить" движок попытается вывести информацию по планете с таким ИД: тип, название и координаты,    а так же текущее количество юнитов/ресурсов выбранного типа на планете</li>    <li>Что бы убрать с планеты определенное количество юнитов/ресурсов нужно вводить отрицательное число</li>  </ul>',
  'adm_planet_list_title' => 'Список планет',
  'adm_sys_owner' => 'Владелец',
  'adm_sys_owner_id' => 'ИД владельца',
  'addm_title' => 'Добавить луну',
  'addm_addform' => 'Формуляр новой луны',
  'addm_playerid' => 'ID планеты размещения',
  'addm_moonname' => 'Название луны',
  'addm_moongala' => 'Укажите галактику',
  'addm_moonsyst' => 'Укажите систему',
  'addm_moonplan' => 'Укажите позицию',
  'addm_moondoit' => 'Добавить',
  'addm_done' => 'Луна создана',
  'adm_usr_level' => array(
    '0' => 'Игрок',
    '1' => 'Оператор',
    '2' => 'Модератор',
    '3' => 'Администратор',
  ),

  'adm_usr_genre' => array(
    GENDER_UNKNOWN => 'Не выбран',
    GENDER_MALE => 'Мужчина',
    GENDER_FEMALE => 'Женщина',
  ),

  'panel_mainttl' => 'Панель администратора',
  'adm_panel_mnu' => 'Поиск игрока',
  'adm_panel_ttl' => 'Вид поиска',
  'adm_search_pl' => 'Поиск по имени',
  'adm_search_ip' => 'Поиск по IP',
  'adm_stat_play' => 'Статистика игрока',
  'adm_mod_level' => 'Уровень доступа',
  'adm_player_nm' => 'Имя игрока',
  'adm_ip' => 'IP',
  'adm_plyer_wip' => 'Игроки с IP',
  'adm_frm1_id' => 'ID',
  'adm_frm1_name' => 'Имя',
  'adm_frm1_ip' => 'IP',
  'adm_frm1_mail' => 'e-Mail',
  'adm_frm1_acc' => 'Звание',
  'adm_frm1_gen' => 'Пол',
  'adm_frm1_main' => 'ID планеты',
  'adm_frm1_gpos' => 'Координаты',
  'adm_mess_lvl1' => 'Уровень доступа',
  'adm_mess_lvl2' => '&quot;теперь&quot; ',
  'adm_colony' => 'Колонии',
  'adm_planet' => 'Планета',
  'adm_moon' => 'Луна',
  'adm_technos' => 'Технологии',
  'adm_bt_search' => 'Искать',
  'adm_bt_change' => 'Изменить',
  'flt_id' => 'ID',
  'flt_fleet' => 'Флот',
  'flt_ships' => 'Состав',
  'flt_mission' => 'Задание',
  'flt_here' => 'Обратно',
  'flt_there' => 'Туда',
  'flt_here_there' => 'Туда/Обратно',
  'flt_departure' => 'Пункт отправления',
  'flt_owner' => 'Владелец',
  'flt_planet' => 'Планета',
  'flt_time_return' => 'Возвращение',
  'flt_e_owner' => 'Пункт назначения',
  'flt_time_arrive' => 'Прибытие',
  'flt_staying' => 'Время ожидания',
  'flt_action' => 'Действие',
  'flt_title' => 'Флоты в полёте',
  'flt_no_fleet' => 'Сейчас в полете нет ни одного флота',
  'mlst_title' => 'Список сообщений',
  'mlst_mess_del' => 'Удаление сообщений',
  'mlst_hdr_page' => 'Стр.',
  'mlst_hdr_title' => ' ) сообщений :',
  'mlst_hdr_prev' => '[ &lt;- ]',
  'mlst_hdr_next' => '[ -&gt; ]',
  'mlst_hdr_id' => 'ID',
  'mlst_hdr_type' => 'Тип сообщений',
  'mlst_hdr_time' => 'Время отправки',
  'mlst_hdr_from' => 'От кого',
  'mlst_hdr_to' => 'Кому',
  'mlst_hdr_text' => 'Contenu',
  'mlst_hdr_action' => 'Отм.',
  'mlst_del_mess' => 'Удалить',
  'mlst_bt_delsel' => 'Удалить выделенные сообщения',
  'mlst_bt_deldate' => 'Удалить',
  'mlst_hdr_delfrom' => 'Удалить сообщения текущего типа ранее даты',
  'mlst_no_messages' => 'Нет сообщений',
  'mlst_messages_deleted' => 'Удалены сообщения с ID %s',
  'mlst_messages_deleted_date' => 'Удалены сообщения типа "%s" по дату %s (не включая сообщения на указанную дату)',

  'adm_lng_title' => 'Локализация',
  'adm_lng_warning' => 'ВНИМАНИЕ! Это alpha-версия редактор локализаций! Используйте его на свой страх и риск!',
  'adm_lng_domain' => 'Домен',
  'adm_lng_string_name' => 'Имя строки',
  'adm_lng_string_add' => 'Добавить строку',
  'adm_uni_price_galaxy' => 'Базовая стоимость переименования галактики',
  'adm_uni_price_system' => 'Базовая стоимость переименования системы',

  'adm_opt_ver_check' => 'Проверка версии',
  'adm_opt_ver_check_hint' => 'При любом виде проверки версии передаются только анонимные данные - текущая версия БД, номер релиза и версия игры. Вы можете проверить версию "вручную" - нажав кнопку "Проверить версию".',
  'adm_opt_ver_check_do' => 'Проверить версию',
  'adm_opt_ver_check_last' => 'Последняя проверка версии производилась',
  'adm_opt_ver_check_auto' => 'Автоматическая проверка версии',
  'adm_opt_ver_check_auto_hint' => 'Вы можете включить автоматическую проверку версии игры. При этом проверка будет выполняться автоматически раз в заданный период времени (по умолчанию - раз в сутки). Подробнее см. документацию',

  'adm_opt_ver_response' => array(
    SNC_VER_NEVER => 'Проверка версии не производилась',

    SNC_VER_ERROR_CONNECT => 'Ошибка проверки версии. Игра не смогла свзаться с сервером обновлений. Убедитесь, что у вас установлен и активизорван в PHP CURL или что в настройках PHP разрешен доступ к удаленным серверам',
    SNC_VER_ERROR_SERVER => 'Ошибка сервера обновлений. Проверьте - не вышла ли более новая версия движка с более продвинутой подержкой сервера обновлений. В противном случае срочно уведомите разработчика!',

    SNC_VER_EXACT => 'У вас установлена самая последняя альфа-версия будущего релиза. Спасибо за участие в тестировании!',
    SNC_VER_LESS => 'Вы используете альфа-версию будущего релиза. Однако есть уже более свежая альфа! Обновитесь, если хотите получить исправления ошибок текущих версий и поучаствовать в тестировании новых возможностей игры.',
    SNC_VER_FUTURE => 'У вас версия игры из будущего! Срочно свяжитесь с разработчиком и передайте ему эту версию! Так же подготовьтесь к визиту из Темпоральной Милиции по поводу нарушения пространственно-временного континуума и причинно-следственных связей...',

    SNC_VER_RELEASE_EXACT => 'У вас самая свежая версия самого последнего релиза игры',
    SNC_VER_RELEASE_MINOR => 'У вас устаревшая версия игры - уже вышло обновление текущего релиза. В нем, скорее всего, устранены некоторые ошибки вашей версии. Желательно обновить игру.',
    SNC_VER_RELEASE_MAJOR => 'У вас сильно устаревшая версия игры - уже вышел новый релиз. Устранение ошибок, новые возможности - обязательно обновитесь!',
    SNC_VER_RELEASE_ALPHA => 'У вас самая свежая версия релиза игры. Однако уже есть альфа-версия следующего релиза. Может быть вы захотите поучаствовать в её тестировании?',

    SNC_VER_MAINTENANCE => 'Сервер обновлений отключен для техобслуживания. Повторите попытку позже',
    SNC_VER_UNKNOWN_RESPONSE => 'Сервер обновлений выдал неизвестный ответ. Скорее всего это означает, что вышла более новая версия движка обладающая более продвинутыми возможностями работы с обновлениями',
    SNC_VER_INVALID => 'Не могу понять, что у вас за странная и непонятная версия. Свяжитесь с разработчиком для диагностики проблемы.',
    SNC_VER_STRANGE => 'Вы не должны видеть это сообщение. Если вы его увидели - что-то пошло не так. Свяжитесь с разработчиком для диагностики проблемы.',

    SNC_VER_REGISTER_UNREGISTERED => 'Ваш сервер еще не зарегистрирован',
    SNC_VER_REGISTER_ERROR_MULTISERVER => 'Ошибка - ваш сервер зарегестрирован несколько раз! Обратитесь к разработчику для диагностики проблемы.',
    SNC_VER_REGISTER_ERROR_REGISTERED => 'Ошибка - ваш сервер уже зарегестрирован! Проверьте наличие уникального ключа и идентификатора в конфигурации сервера!',
    SNC_VER_REGISTER_ERROR_NO_NAME => 'Ошибка - нет имени сервера! Нужно назначить имя сервера!',
    SNC_VER_REGISTER_ERROR_WRONG_URL => 'Ошибка - неправильный URL! Переданная строка не является корректным URLом. Возможно вы попытались зарегестрировать сервер, запущенный на localhost - сервер обновлений не работает с такими серверами.',
    SNC_VER_REGISTER_REGISTERED => 'Ваш сайт успешно зарегистрирован',

    SNC_VER_ERROR_INCOMPLETE_REQUEST => 'Ошибка - некорректные ключ или ИД сайта! Проверьте корректность ключа и ИД в конфигурации сервера.',
    SNC_VER_ERROR_UNKNOWN_KEY => 'Ошибка - неизвестный ключ! Переданный ключ не найден в БД сервера обновлений! Проверьте корректность ключа в конфигурации сервера.',
    SNC_VER_ERROR_MISSMATCH_KEY_ID => 'Ошибка - переданный ключ не соответствует переданному ИД! Проверьте корректность ключа и ИД в конфигурации сервера.',
  ),

  'adm_opt_ver_response_short' => array(
    SNC_VER_NEVER => 'Не производилась',

    SNC_VER_ERROR_CONNECT => 'Ошибка соединения',
    SNC_VER_ERROR_SERVER => 'Ошибка сервера',

    SNC_VER_EXACT => 'Последняя альфа',
    SNC_VER_LESS => 'Старая альфа',
    SNC_VER_FUTURE => 'Альфа из будущего',

    SNC_VER_RELEASE_EXACT => 'Свежая версия',
    SNC_VER_RELEASE_MINOR => 'Рекомендовано обновление',
    SNC_VER_RELEASE_MAJOR => 'Необходимо обновление',
    SNC_VER_RELEASE_ALPHA => 'Свежий релиз',

    SNC_VER_MAINTENANCE => 'Техобслуживание',
    SNC_VER_UNKNOWN_RESPONSE => 'Неизвестный ответ',
    SNC_VER_INVALID => 'Ошибка версии',
    SNC_VER_STRANGE => 'Непредвиденная фигня',

    SNC_VER_REGISTER_UNREGISTERED => 'Незарегистрирован',
    SNC_VER_REGISTER_ERROR_MULTISERVER => 'Мультирегистрация',
    SNC_VER_REGISTER_ERROR_REGISTERED => 'Ошибка ключа',
    SNC_VER_REGISTER_ERROR_NO_NAME => 'Ошибка имени',
    SNC_VER_REGISTER_REGISTERED => 'Зарегистрирован',

    SNC_VER_ERROR_INCOMPLETE_REQUEST => 'Ошибка ключа или ИД',
    SNC_VER_ERROR_UNKNOWN_KEY => 'Неизвестный ключ',
    SNC_VER_ERROR_MISSMATCH_KEY_ID => 'Ключ не соответствует ИД',
  ),

  'adm_upd_register' => 'Регистрация сервера',

  'adm_upd_register_hint' => '
    Регистрация сервера нужна для ряда запросов к серверу обновлений. При регистрации передается минимум информации, необходимой для идентификации сервера:
    <ul>
      <li>Полный URL сервера - т.е. HTTP-адрес и подкаталог сервера. Например: http://myserver.com/myfolder/. Это необходимо для первичной идентификации сервера. Полный путь необходим для того, что бы различать несколько копий СуперНовы, установленных на одном IP или домене.</li>
      <li>Внутреннее название сервера. Используется для подстановки в сообщения.</li>
    </ul>
    Зачем вообще регистрировать свой сервер? В будущем планируется ряд возможностей, которые буду доступны только зарегистрированным серверам. В их число входит (отсортированы по запланированным срокам реализации):
    <ul>
      <li>Автоматическое получение чейнджлога</li>
      <li>Автоматизированное обновление движка</li>
      <li>Участие в рейтинге серверов</li>
      <li>Багрепорты от администраторов серверов</li>
      <li>Чат для администраторов серверов</li>
      <li>По запросу - удаленная диагностика сервера</li>
      <li>...и многое, многое другое</li>
    </ul>
    Зачем регистрировать свой сервер прямо сейчас?
    <ul>
      <li>Запросы от администраторов зарегестрированных серверов имеют больший приоритет при диагностике проблем и обработке багрепортов.</li>
      <li>При регистрации кроме индивидуального ключа серверу выдается уникальный идентификационный номер, который будет использоваться при первичной сортировке серверов. Чем раньше будет зарегистрирован сервер - тем, например, выше он будет в общем каталоге серверов...</li>
    </ul>
  ',

  'adm_upd_register_do' => 'Зарегистрировать сервер',
  'adm_upd_register_already' => 'Вы уже зарегистрированы на сервере обновлений. Обязательно сохраните ИД и уникальный ключ вашего сервера!',
  'adm_upd_register_id' => 'Регистрационный номер',
  'adm_upd_register_key' => 'Регистрационный ключ',

  'adm_opt_stats_and_records' => 'Статистика и рекорды',
  'adm_opt_stats_hide_admins' => 'Прятать админов',
  'adm_opt_stats_hide_admins_detail' => 'Будут скрыты все аккунты с authlevel > 0',
  'adm_opt_stats_hide_player_list' => 'Прятать игроков',
  'adm_opt_stats_hide_player_list_detail' => 'Список ID скрываемых игроков через запятую',
  'adm_opt_stats_schedule' => 'Расписание обновления статистики',
  'adm_opt_stats_schedule_detail' => 'Формат: "[ГГГГ:[ММ:[ДД:[ЧЧ:[ММ:[СС]]]]]][,(...)]"<br />
    Нулевые параметры слева - необязательны<br />
    Пустые параметры справа приравниваются к нулю<br />
    Примеры:<br />
     - "00:00:27:00" означает "запуск в 27 минут каждого часа";<br />
     - "04::" - "запуск в 4 утра каждого дня";<br />
     - "02::,17:00" - "запуск в 2 утра каждого дня и в 17 минут каждого часа";<br />
     - "1:4:30:00" - "Запуск 1 числа каждого месяца в 04:30 утра" итд ',
  'adm_opt_stats_hide_pm_link' => 'Скрывать ссылки на ЛС',

  'adm_pay' => 'Платежи',
  'adm_pay_th_payer' => 'Плательщик',
  'adm_pay_th_payer_id' => 'ID',
  'adm_pay_th_payer_name' => 'Имя',
  'adm_pay_th_payment' => 'Платёж',
  'adm_pay_th_payment_id' => 'ID',
  'adm_pay_th_payment_date' => 'Дата',
  'adm_pay_th_payment_status' => 'Статус',
  'adm_pay_th_payment_amount' => 'Сумма',
  'adm_pay_th_payment_currency' => 'Валюта',
  'adm_pay_th_mm_paid' => 'Оплачено',
  'adm_pay_th_mm_gained' => 'Начислено',
  'adm_pay_th_module' => 'Платёжная система',
  'adm_pay_th_module_name' => 'Тип',

  'adm_pay_filter_all' => '-- Все --',
  'adm_pay_filter_status' => array(
    -1 => '-- Все --',
    PAYMENT_STATUS_NONE => 'Не завершен',
    PAYMENT_STATUS_COMPLETE => 'Завершен',
  ),
  'adm_pay_filter_test' => array(
    -1 => '-- Все --',
    0 => 'Реальный',
    1 => 'Тестовый',
  ),

  'adm_user_stat' => 'Статистика пользователей',
  'adm_user_online' => 'Онлайн с %s по %s',

  'adm_ban_unban' => 'Бан/Разбан',
  'adm_metametter_payment' => 'ММ & Платежи',

  'adm_stat_already_started' => 'Статистика уже обновляется прямо сейчас',

  'adm_dm_change_hint' => 'Поиск осуществляется сначала по ID игрока, а если не найден - по имени',

  'adm_matter_change_log_record' => 'Через админку пользователем [%3$s] "%4$s" для аккаунта [%1$d] "%2$s" по причине "%5$s"',

  'adm_game_status' => 'Текущее состояние игры',

  'adm_log_delete_update_info' => 'Удалить информацию об обслуживании БД, обновлениях статистики и движка',

  'admin_tab_status' => 'Статус',
  'admin_tab_game' => 'Игра',
  'admin_tab_universe' => 'Вселенная',
  'admin_tab_planets' => 'Планеты',
  'admin_tab_stats_and_records' => 'Статистика',
  'admin_tab_urls' => 'Ссылки',
  'admin_tab_players' => 'Игроки',
  'admin_tab_UBE' => 'Бой',
  'admin_tab_advertise' => 'Реклама',

  'admin_tab_universe_main' => 'Вселенная',

  'admin_ptl_test_la_' => "Single'Double\"Zero\0End",

  'admin_title_access_denied' => 'Доступ запрещен',

  // ------------------ NOT LOCALIZED -------------------------------
  'adm_mm_title'                        => 'Изменение количества Метаматерии',
  'adm_mm_account'                      => 'Аккаунт: ID, имя или емейл регистрации',
  'adm_mm_account_hint'                 => 'Поиск аккаунта сначала идёт по ID, затем - по имени, затем - по емейлу регистрации',
  'adm_mm_player'                       => 'Игрок: ID или имя из списка игроков',
  'adm_mm_player_hint'                  => 'Поиск игрока сначала идёт по ID, затем - по имени',
  'adm_mm_err_points_empty'             => 'Укажите количество ММ (положительное - для начисления, отрицательное - для снятия)',
  'adm_mm_err_account_not_found'        => 'Ошибка: не могу найти аккаунт c ID, именем или емейлом "%1$s"',
  'adm_mm_err_player_not_found'         => 'Ошибка: не найден игрок с ID или именем "%1$s"',
  'adm_mm_err_player_no_account'        => 'Ошибка: не могу найти аккаунт для игрока "%1$s"',
  'adm_mm_err_account_and_player_empty' => 'Ошибка: не указан ни аккаунт, ни игрок для изменения ММ',
  'adm_mm_err_mm_change_failed'         => 'Ошибка: внутренняя ошибка начисления ММ. Свяжитесь с разработчиком',
  'adm_mm_msg_mm_changed'               => 'У аккаунта [%2$d] "%1$s" (игрок [%4$s] "%5$s") количество ММ успешно изменено на <span class="metamatter">%3$s ММ</span>',
  'adm_mm_msg_confirm_mm_change'        => 'Подтвердите изменение ММ у аккаунт [%2$d] "%1$s" (игрок [%4$s] "%5$s") на <span class="metamatter">%3$s ММ</span>',
  'adm_mm_msg_change_mm_log_record'     => 'Админ [%6$s] "%7$s" (игрок [%3$s] "%4$s") причина "%5$s" для [%1$d] "%2$s" (игрок [%8$d] "%9$s")',

  'admin_ally_list' => 'Список Альянсов',
);
