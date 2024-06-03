-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2024 г., 11:28
-- Версия сервера: 10.3.36-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `libriary`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_whom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `for_whom`, `link`, `img_path`) VALUES
(1, 'Увлекательная наука математика', 'Гусев Игорь Евгеньевич', 'Для 2 курсов и дальше', '../books/Matematika_Uvlekatelnaya_nauka_2017_Gusev.pdf', '/img/uvlekat_nauka.jpeg'),
(2, 'Java решение практических задач', 'Леонард А.', 'Для 3 курса и далее', '../books/Java_Reshenie_prakticheskikh_zadach_2021_Leonard_Andzhel.pdf', '/img/Java_Reshenie_prakticheskikh_zadach_2021_Leonard_Andzhel.jpeg'),
(3, 'Kotlin программирование на примерах', 'Аделекан И.', 'Для 3 курса и далее', '../books/Kotlin_programmirovanie_na_primerakh_2020_Adelekan_Ianu.pdf', '/img/Kotlin_programmirovanie_na_primerakh_2020_Adelekan_Ianu.jpeg'),
(4, 'Программист-прагматик от подмастерья к мастеру', 'Хант Э. и Томас Д.', 'Для любых групп', '../books/Programmist-pragmatik_Put_ot_podmasterya_k_ma.pdf', '/img/pragmatik_Put_ot_podmasterya_k_ma.jpeg'),
(5, 'Python для программирования криптовалют', 'Сонг Джимми', 'Для любых групп', '../books/Python_dlya_programmirovania_kriptovalyut_2020_Dzhimmi_Song.pdf', '/img/Python_dlya_programmirovania_kriptovalyut_2020_Dzhimmi_Song.jpeg'),
(6, 'Веб-дизайн книга идей веб-разработчика', 'Макнейл П.', 'Для 3 курса и далее', '../books/Veb-dizayn_Kniga_idey_veb-razrabotchika.pdf', '/img/dizayn_Kniga_idey_veb.jpeg'),
(7, 'Электроника: логические микросхемы, усилители и датчики для начинающих', 'Платт Ч.', 'Для 1 курса и дальше', '../books/Elektronika_logicheskie_mikroskhemy_usiliteli_i_datchiki_dlya_nachinayuschikh_2015_Platt_Charlz.pdf', '/img/Elektronika_logicheskie_mikroskhemy_usiliteli_i_datchiki_dlya_nachinayuschikh_2015_Platt_Charlz.jpeg'),
(8, 'Язык программирования C++. Полное руководство', 'Липпман С. и Лажойе Ж.', 'Для любых групп', '../books/Yazyk_programmirovania_S_Polnoe_rukovodstvo_2019_Lippman.pdf', '/img/Yazyk_programmirovania_S_Polnoe_rukovodstvo_2019_Lippman.jpeg'),
(9, 'Python и машинное обучение', 'Себастьян Рашка и Вахид Мирджалили', 'Для 3 курса и дальше', '../books/Python_i_mashinnoe_obuchenie_2020_Rashka_Mirdzhalili.pdf', '/img/Python_i_mashinnoe_obuchenie_2020_Rashka_Mirdzhalili.jpeg'),
(10, 'Создание приложений для смартфонов и планшетов под OC Android', 'Фрайман Зэев', 'Для любых групп', '../books/Sozdanie_prilozhenii_774_dlya_smartfonov_i_planshetov_pod_OS.pdf', '/img/Sozdanie_prilozhenii_774_dlya_smartfonov_i_planshetov_pod_OS.jpeg'),
(11, 'Искусственный интеллект с примерами на Python', 'Пратик Джоши', 'Для любых групп', '../books/Iskusstvenny_intellekt_s_primerami_na_Python_2019_Pratik_Dzhoshi.pdf', '/img/Iskusstvenny_intellekt_s_primerami_na_Python_2019_Pratik_Dzhoshi.jpeg'),
(12, 'Основы искусственного интеллекта нетехническое введение', 'Том Таули', 'Для любых групп', '../books/osnovi_ai.pdf', '/img/osnovi_ai.jpeg'),
(13, 'Командная строка Linux, полное руководство', 'Шоттс У.', 'Для 2 курсов и далее', '../books/Komandnaya_stroka_Linux_Polnoe_rukovodstvo.pdf', '/img/Komandnaya_stroka_Linux_Polnoe_rukovodstvo.jpeg'),
(14, 'Шаблоны C++ справочник разработчика', 'Дэвид Вандервуд, Николаи М. Джосаттис и Дуглас Грегор', 'Для 3 курса', '../books/Shablony_C_Spravochnik_razrabotchika_2-e_izd_2018_Vandevurd_D_Dzhosattis_N_Gregor_D.pdf', '/img/Shablony_C_Spravochnik_razrabotchika_2.jpeg'),
(15, 'Освой самостоятельно C++ по одному часу в день', 'Сиддхартха Рао', 'Для любых групп', '../books/Osvoy_samostoyatelno_C_po_odnomu_chasu_v_den_8-e_izdanie_2017_Rao_Siddkhartkha.pdf', '/img/Osvoy_samostoyatelno_C_po_odnomu_chasu_v_den_8.jpeg'),
(16, 'C# на примерах', 'Евдокимов П. В.', 'Для 2 курса и далее', '../books/S_na_primerakh.pdf', '/img/S_na_primerakh.jpeg'),
(17, 'Удалённый сервер своими руками. От азов создания до практической работы', 'Левицкий Н. Д.', 'Для любых групп', '../books/Udalenny_server_svoimi_rukami_Ot_azov_sozdania_do_prakticheskoy_raboty_2021_Levitskiy.pdf', '/img/Udalenny_server_svoimi_rukami_Ot_azov_sozdania_do_prakticheskoy_raboty_2021_Levitskiy.jpeg'),
(18, 'Чистый код: создание, анализ и рефакторинг. Библиотека программиста', 'Мартин Р.', 'Для любых групп', '../books/Robert_K_Martin_-_Chisty_kod_Sozdanie_analiz_i_refaktoring.pdf', '/img/_Chisty_kod_Sozdanie_analiz_i_refaktoring.jpeg'),
(19, 'Прагматичный ИИ Машинное обучение и облачные технологии', 'Ной Гифт', 'Для любых групп', '../books/Pragmatichny_II_Mashinnoe_obuchenie_i_oblachnye_tekhnologii_2019_Gift.pdf', '/img/Pragmatichny_II_Mashinnoe_obuchenie_i_oblachnye_tekhnologii_2019_Gift.jpeg'),
(20, 'Жар холодных числ и пафос бесстрастной логики', 'Б.В. Бирюков и В.Н. Тростников', 'Для любых групп', '../books/Zhar_kholodnykh_chisl_i_pafos_besstrastnoy_logiki_1977_Biryukov_Boris.pdf', '/img/Zhar_kholodnykh_chisl_i_pafos_besstrastnoy_logiki_1977_Biryukov_Boris.jpeg'),
(21, 'Сетевое и системное администрирование', 'Уймин А.Г.', 'Для последних курсов', '../books/Demo-ekzamen_09_02_06_KOD_1_1.pdf', '/img/ekzamen_09_02_06_KOD_1_1.png'),
(22, 'Основы Web-Дизайна Руководство', 'Рафал Томал', 'Для 1 курса и дальше', '../books/Osnovy_Web-Dizayna_Rukovodstvo.pdf', '/img/Dizayna_Rukovodstvo.jpeg'),
(23, 'Язык программирования C', 'Керниган Брайан У. и Ритчи Деннис М.', 'Для 3 курса и далее', '../books/Kernighan_Ritchie_The_C_programming_language_2e.pdf', '/img/Kernighan_Ritchie_The_C_programming_language_2e.jpeg'),
(24, 'Linux. Установка, настройка, администрирование', 'Кофлер М.', 'Для 2 курсов и дальше', '../books/Linux_Ustanovka_nastroyka_administrirovanie.pdf', '/img/Linux_Ustanovka_nastroyka_administrirovanie.jpeg'),
(25, 'Python: Искусственный интеллект, большие данные и облачные вычисления', 'Дейтел Пол и Дейтел Харви', 'Для 4 курса', '../books/Python_Iskusstvenny_intellekt_bolshie_dannye_i_oblachnye_vychislenia_2020_Pol_Deytel_Kharvi_Deytel.pdf', '/img/Python_Iskusstvenny_intellekt_bolshie_dannye_i_oblachnye_vychislenia_2020_Pol_Deytel_Kharvi_Deytel.jpeg'),
(26, 'JavaScript в примерах и задачах', 'Васильев Алексей Николаевич\r\n', 'Для 1 курса и дальше', '../books/Programmirovanie_na_JavaScript_v_primerah_i_zadachah.pdf', '/img/Programmirovanie_na_JavaScript_v_primerah_i_zadachah.jpeg'),
(27, 'Принципы организации распределенных баз данных', 'Ёcy М. Т. и Вальдуриес П.', 'Для любых групп', '../books/M_Tamer_E_776_cy_Patrik_Valduries_Printsipy_organizatsii_raspredelennykh.pdf', '/img/M_Tamer_E_776_cy_Patrik_Valduries_Printsipy_organizatsii_raspredelennykh.jpeg'),
(28, 'Python лучшие практики и инструменты', 'Михал Яворски и Тарек Зиаде', 'Для 2 курса и далее', '../books/Python_Luchshie_praktiki_i_instrumenty_3_izd_2021_Mikhal_Yavorski_Tarek_Ziade.pdf', '/img/Python_Luchshie_praktiki_i_instrumenty_3_izd_2021_Mikhal_Yavorski_Tarek_Ziade.jpeg'),
(29, 'Базы данных', 'Кузнецов Сергей Дмитриевич', 'Для 1 курса и дальше', '../books/Bazy_dannykh_2020_Kuznetsov.pdf', '/img/bazi_dannix.jpeg'),
(30, 'Python и анализ данных', 'Уэс Маккини', 'Для 4 курса', '../books/Python_i_analiz_dannykh_Vtoroe_izdanie_2020_Ues_Makkinni.pdf', '/img/Python_i_analiz_dannykh_Vtoroe_izdanie_2020_Ues_Makkinni.jpeg'),
(31, 'Создаем динамические веб-сайты на PHP', 'Кевин Татро и Питер Макинтайр', 'Для 2 курса и далее', '../books/Sozdaem_dinamicheskie_veb-sayty_na_PHP_4-e_izd_2021_Kevin_Tatro_Piter_Makintayr.pdf', '/img/Sozdaem_dinamicheskie_veb.jpeg'),
(32, 'Совершенный код', 'Макконнелл С.', 'Для любых групп', '../books/Stiv_Makkonnell_-_Sovershenny_kod_2-e_izdanie.pdf', '/img/_Sovershenny_kod_2.jpeg'),
(33, 'Думай как программист, креативный подход к созданию кода', 'Антон Спрол', 'Для 2 курса и далее', '../books/Dumay_kak_programmist_Kreativny_podkhod_k_sozdaniyu_koda_C_versia_2018_Sprol.pdf', '/img/Dumay_kak_programmist_Kreativny_podkhod_k_sozdaniyu_koda_C_versia_2018_Sprol.jpeg'),
(34, 'Латеральная логика. Головоломный путь к нестандартному мышлению', 'Гарет Мур', 'Для любых групп', '../books/Lateralnaya_logika_Golovolomnyi_774_put_k_nestandartnomu_myshleniyu.pdf', '/img/Lateralnaya_logika_Golovolomnyi_774_put_k_nestandartnomu_myshleniyu.jpeg'),
(35, 'Защита сетей. Подход на основе анализа данных', 'Майкл Коллинз', 'Для 1 курса и дальше', '../books/Zaschita_setey_Podkhod_na_osnove_analiza_dannykh_2020_Maykl_Kollinz.pdf', '/img/Zaschita_setey_Podkhod_na_osnove_analiza_dannykh_2020_Maykl_Kollinz.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'superadm', 'rjvuytoew'),
(2, 'user', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
