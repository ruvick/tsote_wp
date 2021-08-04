<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', __('Настройки темы', 'crb'))
  ->add_tab('Главная', array(
    Field::make('rich_text', 'about_home', 'О нашей компании')
  ))
  ->add_tab('Слайдер', array(
    Field::make('complex', 'slider_index', 'Слайдер на главной')
      ->add_fields(array(
        Field::make('image', 'slider_img', 'Картинка слайдера')
          ->set_width(50),
        Field::make('text', 'slider_title', 'Заголовок слайдера')
          ->set_width(50),
        Field::make('text', 'slider_subtitle', 'Подзаголовок слайдера')
          ->set_width(50),
      ))
  ))
  ->add_tab('Контакты', array(
    Field::make('text', 'as_company', __('Название'))
      ->set_width(50),
    Field::make('text', 'as_schedule', __('Режим работы'))
      ->set_width(50),
    Field::make('text', 'as_phones_1', __('Телефон'))
      ->set_width(50),
    Field::make('text', 'as_phone_2', __('Телефон дополнительный'))
      ->set_width(50),
    Field::make('text', 'as_email', __('Email'))
      ->set_width(50),
    Field::make('text', 'as_email_send', __('Email для отправки'))
      ->set_width(50),
    Field::make('text', 'as_inn', __('ИНН'))
      ->set_width(50),
    Field::make('text', 'as_orgn', __('ОРГН'))
      ->set_width(50),
    Field::make('text', 'as_kpp', __('КПП'))
      ->set_width(50),
    Field::make('text', 'as_address', __('Адрес'))
      ->set_width(50),
    Field::make('text', 'as_bik', __('БИК'))
      ->set_width(50),
    Field::make('text', 'as_rs', __('Р/С'))
      ->set_width(50),
    Field::make('text', 'as_ks', __('К/С'))
      ->set_width(50),
    Field::make('text', 'as_bank', __('БАНК'))
      ->set_width(50),
    Field::make('text', 'as_insta', __('instagram'))
      ->set_width(50),
    Field::make('text', 'as_face', __('facebook'))
      ->set_width(50),
    Field::make('text', 'as_vk', __('Вконтакте'))
      ->set_width(50),
    Field::make('text', 'as_telegr', __('telegram'))
      ->set_width(50),
    Field::make('text', 'as_whatsapp', __('whatsapp'))
      ->set_width(50),
    Field::make('text', 'map_point', 'Координаты карты')
      ->set_width(50),
    Field::make('text', 'text_map', 'Текст метки карты')
      ->set_width(50),
  ));

Container::make('post_meta', 'single', 'Характеристики записи')
  // ->show_on_template(array('single.php'))
  ->add_fields(array(
    Field::make('rich_text', 'single_smile_descr', 'Краткое описание')
      ->set_width(100),
    Field::make('text', 'cher_title_doc', 'Наименование документа')
      ->set_width(50),
    Field::make('text', 'cher_work_time',  'Сроки выполнения работ')
      ->set_width(50),
    Field::make('text', 'cher_work_price',  'Стоимость')
      ->set_width(50),
  ));
