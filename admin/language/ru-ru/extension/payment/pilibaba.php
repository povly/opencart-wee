<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       admin/language/ru-ru/extension/payment/pilibaba.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']         = 'Pilibaba for Chinese Checkout';

// Tab
$_['tab_register']          = 'Регистрация';
$_['tab_settings']          = 'Настройки';

// Text
$_['text_extension']        = 'Расширения';
$_['text_success']          = 'Успешно: Вы изменили модуль оплаты Pilibaba!';
$_['text_edit']             = 'Редактировать Pilibaba';
$_['text_pilibaba']         = '<a href="http://www.pilibaba.com" target="_blank"><img src="view/image/payment/pilibaba.png" alt="Pilibaba" title="Pilibaba"></a>';
$_['text_live']             = 'Реальный';
$_['text_test']             = 'Тестовый';
$_['text_payment_info']     = 'Платежная информация';
$_['text_order_id']         = 'Номер заказа';
$_['text_amount']           = 'Количество';
$_['text_fee']              = 'Плата';
$_['text_date_added']       = 'Дата добавления';
$_['text_tracking']         = 'Отслеживание';
$_['text_barcode']          = 'Штрих-код';
$_['text_barcode_info']     = '(Распечатайте этот уникальный штрих-код и наклейте его на поверхность посылки)';
$_['text_confirm']          = 'Вы уверены, что хотите обновить номер для отслеживания?';
$_['text_register_success'] = 'Вы успешно зарегистрировались. вы должны получить письмо в ближайшее время.';
$_['text_tracking_success'] = 'Номер отслеживания был успешно обновлен.';
$_['text_other']            = 'Другой';
$_['text_email']            = 'Зарегистрированный адрес электронной почты для вашей учетной записи Pilibaba %s';

// Entry
$_['entry_email_address']   = 'Адрес электронной почты';
$_['entry_password']        = 'Пароль';
$_['entry_currency']        = 'Валюта';
$_['entry_warehouse']       = 'Склад';
$_['entry_country']         = 'Страна';
$_['entry_merchant_number'] = 'Номер продавца';
$_['entry_secret_key']      = 'Секретный ключ';
$_['entry_environment']     = 'Окружение';
$_['entry_shipping_fee']    = 'Стоимость доставки';
$_['entry_order_status']    = 'Статус заказа';
$_['entry_status']          = 'Статус';
$_['entry_logging']         = 'Журнала отладки';
$_['entry_sort_order']      = 'Порядок сортировки';

// Help
$_['help_email_address']    = 'Пожалуйста, введите адрес электронной почты для владельца этого бизнеса.';
$_['help_password']         = 'Пожалуйста, введите пароль от 8 до 30 символов.';
$_['help_currency']         = 'Выберите валюту, используемую на вашем сайте, и выведите средства на свой банковский счет.';
$_['help_warehouse']        = 'Выберите ближайший склад, на который вы будете отправлять. При получении заказов от китайских клиентов (через шлюз Pilibaba) вы можете доставлять посылки на этот склад.';
$_['help_country']          = 'Сообщите нам свою страну, и мы сообщим вам , как только в этой стране будет открыт склад.';
$_['help_merchant_number']  = 'Ваш личный номер продавца в Pilibaba.';
$_['help_secret_key']       = 'Ваш секретный ключ для доступа к API Pilibaba.';
$_['help_shipping_fee']     = 'Стоимость доставки от вашего склада до склада Pilibaba. Используйте два десятичных знака.';
$_['help_order_status']     = 'Статус заказа после того, как клиент разместил заказ.';
$_['help_total']            = 'Общая сумма, которую должен достичь заказ, прежде чем этот метод оплаты станет активным. Должно быть значением без знака валюты.';
$_['help_logging']          = 'Включение отладки приведет к записи конфиденциальных данных в файл журнала. вы должны всегда отключать, если не указано иное.';

// Error
$_['error_warning']         = 'Предупреждение: Пожалуйста, внимательно проверьте форму на наличие ошибок!';
$_['error_permission']      = 'Предупреждение: У вас нет разрешения на изменение payment Pilibaba!';
$_['error_merchant_number'] = 'Номер продавца обязателен!';
$_['error_secret_key']      = 'Секретный ключ обязателен!';
$_['error_shipping_fee']    = 'Стоимость доставки должна быть десятичным числом!';
$_['error_not_enabled']     = 'Модуль не включен!';
$_['error_data_missing']    = 'Данные отсутствуют!';
$_['error_tracking_length'] = 'Номер отслеживания должен быть от 1 до 50 символов!';
$_['error_email_address']   = 'Пожалуйста, введите свой адрес электронной почты!';
$_['error_email_invalid']   = 'Адрес электронной почты недействителен!';
$_['error_password']        = 'Пароль должен содержать не менее 8 символов!';
$_['error_currency']        = 'Пожалуйста, выберите валюту!';
$_['error_warehouse']       = 'Пожалуйста, выберите склад!';
$_['error_country']         = 'Пожалуйста, выберите страну!';
$_['error_weight']          = 'Пожалуйста, измените настройку <a href="%s">Весового класса</a> на граммы. Он находится в \'Система -> Настройки\' на вкладке \'Локальность\'.';
$_['error_bad_response']    = 'Неверный ответ был получен. Пожалуйста, попробуйте позже.';

// Button
$_['button_register']       = 'Регистрация';
$_['button_tracking']       = 'Обновить номер отслеживания';
$_['button_barcode']        = 'Генерировать штрих-код';
