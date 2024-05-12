<?php 

ini_set('error_reporting', E_ALL); // вывод ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('TG_TOKEN', "7004397176:AAFKCpUtJ-Wm8WO9JgsBFET2NHmCtIqIaS4"); // Токен бота
define('TG_USER_ID', "520961798"); // ID чата

// Текстовое сообщение
// $textMessage = "Текстовое сообщение";
// $textMessage = urlencode($textMessage);
// $urlQuery = "https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?chat_id=" . TG_USER_ID . "&text=" . $textMessage;
// $result = file_get_contents($urlQuery);

// HTML сообщение
// $qetQuery = array(
//   'chat_id' => TG_USER_ID,
//   'text' => "Новое сообщение",
//   "parse_mode" => "HTML"
// ); // запро
// $ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($qetQuery)); // инициализация
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $resultQuery = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// // ответ на ранее отправленное сообщение
// $qetQuery = array(
//   'chat_id' => TG_USER_ID,
//   'text' => "Ответ на сообщение",
//   "parse_mode" => "HTML",
//   "reply_to_message_id" => 34
// ); // запрос
// $ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($qetQuery)); // инициализация
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $resultQuery = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// удаление сообщения
// $qetQuery = array(
//   'chat_id' => TG_USER_ID,
//   "message_id" => 36
// ); // запрос
// $ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/deleteMessage?" . http_build_query($qetQuery)); // инициализация
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $resultQuery = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса


// кнопки
// $qetQuery = array(
//   'chat_id' => TG_USER_ID,
//   "text" => "Сообщение с кнопками",
//   "reply_markup" => json_encode([
//     "inline_keyboard" => [
//       [
//         [
//           "text" => "Кнопка 1",
//           "callback_data" => "test_1"
//         ],
//         [
//           "text" => "Кнопка 2",
//           "callback_data" => "test_2"
//         ]
//       ],
//       [
//         [
//           "text" => "Кнопка 3",
//           "callback_data" => "test_3"
//         ],
//         [
//           "text" => "Кнопка 4",
//           "callback_data" => "test_4"
//         ],
//         [
//           "text" => "Кнопка 5",
//           "callback_data" => "test_5"
//         ]
//       ]
//     ]
//   ])
// ); // запрос
// $ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($qetQuery)); // инициализация
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $resultQuery = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// кнопки с дополнительной клавиатурой 
// $qetQuery = array(
//   'chat_id' => TG_USER_ID,
//   "text" => "Сообщение с кнопками",
//   "reply_markup" => json_encode([
//     "keyboard" => [
//       [
//         [
//           "text" => "Кнопка 1",
//           "callback_data" => "test_1"
//         ],
//         [
//           "text" => "Кнопка 2",
//           "callback_data" => "test_2"
//         ]
//       ],
//       [
//         [
//           "text" => "Кнопка 3",
//           "callback_data" => "test_3"
//         ]
//       ],
//       [
//         [
//           "text" => "Кнопка 4",
//           "callback_data" => "test_4"
//         ],
//         [
//           "text" => "Кнопка 5",
//           "callback_data" => "test_5"
//         ],
//         [
//           "text" => "Кнопка 6",
//           "callback_data" => "test_6"
//         ]
//       ],
//     ],
//     "one_time_keyboard" => true, // скрывать клавиатуру после нажатия
//     "resize_keyboard" => true // клавиатура на всю ширину экрана
//   ])
// ); // запрос
// $ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($qetQuery)); // инициализация
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $resultQuery = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// отправка фото
// $arrayQuery = [
//   "chat_id" => TG_USER_ID,
//   "caption" => "Проверка работы",
//   "photo" => curl_file_create(__DIR__ . '/cat.jpg', 'image/jpeg', 'cat.jpg'),
//   'protect_content' => true // нельзя сохранить
// ]; // запрос
// $ch = curl_init('https://api.telegram.org/bot' . TG_TOKEN . '/sendPhoto'); // инициализация
// curl_setopt($ch, CURLOPT_POST, 1); // тип запроса
// curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery); // данные запроса
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $res = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// отправка документа
// $arrayQuery = [
//   "chat_id" => TG_USER_ID,
//   "caption" => "Проверка работы",
//   "document" => curl_file_create(__DIR__ . '/cat.jpg', 'image/jpeg', 'cat.jpg')
// ]; // запрос
// $ch = curl_init('https://api.telegram.org/bot' . TG_TOKEN . '/sendDocument'); // инициализация
// curl_setopt($ch, CURLOPT_POST, 1); // тип запроса
// curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery); // данные запроса
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $res = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// отправка документа по id из чата
// $arrayQuery = [
//   "chat_id" => TG_USER_ID,
//   "caption" => "Проверка работы",
//   "document" => "BQACAgIAAxkDAAMwZkDoiwOZp2XRk1iW53bdNDN0YtMAAv1NAALC0ghKHR49h5zP1xA1BA"
// ]; // запрос
// $ch = curl_init('https://api.telegram.org/bot' . TG_TOKEN . '/sendDocument'); // инициализация
// curl_setopt($ch, CURLOPT_POST, 1); // тип запроса
// curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery); // данные запроса
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $res = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// отправка альбома
// $arrayQuery = [
//   "chat_id" => TG_USER_ID,
//   "media" => json_encode([
//     ['type' => 'photo', 'media' => 'attach://cat'], 
//     ['type' => 'photo', 'media' => 'attach://cat_2']
//   ]),
//   'cat' => new CURLFile(__DIR__ . '/cat.jpg'),
//   'cat_2' => new CURLFile(__DIR__ . '/cat2.jpg'),
// ]; // запрос
// $ch = curl_init('https://api.telegram.org/bot' . TG_TOKEN . '/sendMediaGroup'); // инициализация
// curl_setopt($ch, CURLOPT_POST, 1); // тип запроса
// curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery); // данные запроса
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
// curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
// $res = curl_exec($ch); // выполнение запроса
// curl_close($ch); // закрытие запроса

// // отправка нескольких документов
$arrayQuery = [
  "chat_id" => TG_USER_ID,
  "media" => json_encode([
    ['type' => 'document', 'media' => 'attach://cat'], 
    ['type' => 'document', 'media' => 'attach://cat_2']
  ]),
  'cat' => new CURLFile(__DIR__ . '/cat.jpg'),
  'cat_2' => new CURLFile(__DIR__ . '/cat2.jpg'),
]; // запрос
$ch = curl_init('https://api.telegram.org/bot' . TG_TOKEN . '/sendMediaGroup'); // инициализация
curl_setopt($ch, CURLOPT_POST, 1); // тип запроса
curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery); // данные запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки
$res = curl_exec($ch); // выполнение запроса
curl_close($ch); // закрытие запроса












