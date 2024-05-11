<?php 

ini_set('error_reporting', E_ALL); // вывод ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('TG_TOKEN', "YOUR_TOKEN"); // Токен бота
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
// ); // запрос

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
$qetQuery = array(
  'chat_id' => TG_USER_ID,
  "text" => "Сообщение с кнопками",
  "reply_markup" => json_encode([
    "keyboard" => [
      [
        [
          "text" => "Кнопка 1",
          "callback_data" => "test_1"
        ],
        [
          "text" => "Кнопка 2",
          "callback_data" => "test_2"
        ]
      ],
      [
        [
          "text" => "Кнопка 3",
          "callback_data" => "test_3"
        ]
      ],
      [
        [
          "text" => "Кнопка 4",
          "callback_data" => "test_4"
        ],
        [
          "text" => "Кнопка 5",
          "callback_data" => "test_5"
        ],
        [
          "text" => "Кнопка 6",
          "callback_data" => "test_6"
        ]
      ],
    ],
    "one_time_keyboard" => true, // скрывать клавиатуру после нажатия
    "resize_keyboard" => true // клавиатура на всю ширину экрана
  ])
); // запрос

$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($qetQuery)); // инициализация
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // вывод результата в буфер
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // не проверять SSL сертификат
curl_setopt($ch, CURLOPT_HEADER, false); // не выводить заголовки

$resultQuery = curl_exec($ch); // выполнение запроса
curl_close($ch); // закрытие запроса





