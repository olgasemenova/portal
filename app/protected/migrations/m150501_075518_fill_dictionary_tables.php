<?php

class m150501_075518_fill_dictionary_tables extends CDbMigration
{
	public function up()
	{
        return true;

        $this->execute(<<<SQL

INSERT INTO `assistance_types` (`id`, `name`) VALUES
(1, 'Консультація рекрутера, профоріентація'),
(2, 'Допомога в складанні резюме'),
(3, 'Допомога в пошуках постійної роботи'),
(4, 'Пропозиція тимчасового працевлаштування'),
(5, 'Навчання'),
(6, 'Житло');


INSERT INTO `cities_list` (`city_index`, `city_name`) VALUES
('00000', 'Україна'),
('00005', 'Вінницькаа область'),
('00007', 'Волинська область'),
('00009', 'Луганська область'),
('00012', 'Дніпропетровська область'),
('00014', 'Донецька область'),
('00018', 'Житомирська область'),
('00021', 'Закарпатська область'),
('00023', 'Запорізька область'),
('00026', 'Івано-Франківська область'),
('00032', 'Київська область'),
('00035', 'Кіровоградська область'),
('00046', 'Львівська область'),
('00048', 'Миколаївська область'),
('00051', 'Одеська область'),
('00053', 'Полтавська область'),
('00056', 'Рівненська область'),
('00059', 'Сумська область'),
('00061', 'Тернопільська область'),
('00063', 'Харківська область'),
('00065', 'Херсонська область'),
('00068', 'Хмельницька область'),
('00071', 'Черкаська область'),
('00074', 'Чернігівська область'),
('00077', 'Чернівецька область'),
('01000', 'Київ'),
('07400', 'Бровари'),
('08200', 'Ірпінь'),
('08292', 'Буча'),
('08300', 'Бориспіль'),
('09100', 'Біла Церква'),
('10000', 'Житомир'),
('14000', 'Чернігів'),
('18000', 'Черкаси'),
('20300', 'Умань'),
('21000', 'Вінниця'),
('25000', 'Кіровоград'),
('29000', 'Хмельницький'),
('32300', 'Кам''янець-Подільський'),
('33000', 'Рівне'),
('36000', 'Полтава'),
('39600', 'Кременчук'),
('40000', 'Суми'),
('43000', 'Луцьк'),
('46000', 'Тернопіль'),
('49000', 'Дніпропетровськ'),
('50000', 'Кривий Ріг'),
('51400', 'Павлоград'),
('51900', 'Дніпродзержинськ'),
('53200', 'Нікополь'),
('54000', 'Миколаїв'),
('58000', 'Чернівці'),
('61000', 'Харків'),
('65000', 'Одеса'),
('69000', 'Запоріжжя'),
('71100', 'Бердянськ'),
('72300', 'Мелітополь'),
('73000', 'Херсон'),
('76000', 'Івано-Франківськ'),
('79000', 'Львів'),
('83000', 'Донецьк'),
('84100', 'Слов''янськ'),
('84300', 'Краматорськ'),
('84600', 'Горлівка'),
('86100', 'Макіївка'),
('87500', 'Маріуполь'),
('88000', 'Ужгород'),
('91000', 'Луганськ'),
('93100', 'Лисичанськ'),
('93400', 'Сєвєродонецьк'),
('94200', 'Алчевськ'),
('95000', 'Сімферополь'),
('96000', 'Крим'),
('97400', 'Євпаторія'),
('98300', 'Керч'),
('98600', 'Ялта'),
('99000', 'Севастополь');


INSERT INTO `cv_categories` (`id`, `name`) VALUES
(2, 'IT, телекомунікація та зв''язок'),
(11, 'Інші сфери діяльності'),
(3, 'Аграрний сектор'),
(31, 'Адміністративний персонал'),
(4, 'Будівництво'),
(5, 'Бухгалтерія, аудит'),
(6, 'Виробництво продуктів харчування'),
(7, 'Виробництво товарів легкої промисловості'),
(8, 'Готельно-ресторанний бізнес'),
(9, 'Гуртова торгівля та закупівлі'),
(10, 'Державна служба'),
(30, 'Домашній персонал'),
(33, 'Керівні посади'),
(32, 'Краса'),
(35, 'Лісове господарство'),
(12, 'Логістика, склад, ЗЕД'),
(13, 'Маркетинг, реклама, PR'),
(15, 'Медіа, мистецтво, розважальний бізнес'),
(14, 'Медицина і фармація'),
(16, 'Наука, освіта та виховання'),
(17, 'Нерухомість, страхування'),
(18, 'НКО, фонди'),
(19, 'Охорона і безпека'),
(20, 'Побутове обслуговування'),
(21, 'Промислове виробництво'),
(38, 'Робота для студентів, пенсіонерів'),
(39, 'Робочий персонал'),
(22, 'Роздрібна торгівля'),
(37, 'Сільське господарство'),
(34, 'Соціальна сфера, психологи'),
(23, 'Топ менеджмент'),
(24, 'Транспорт та автобізнес'),
(25, 'Туризм, спорт, розважальний бізнес'),
(28, 'Управління персоналом'),
(26, 'Фінансовий сектор та банки'),
(27, 'Юриспруденція');


  INSERT INTO `cv_positions` (`id`, `name`) VALUES
(164, 'HR-менеджер'),
(166, 'HR-спеціаліст'),
(468, 'PR-менеджер'),
(558, 'SEO спеціаліст'),
(568, 'SMM-спеціаліст'),
(178, 'Івент-менеджер (організатор заходів)'),
(46, 'Імунолог'),
(47, 'Інженер'),
(408, 'Інженер з охорони праці'),
(500, 'Інженер систем водопосточання'),
(549, 'Інженер-землевпорядник'),
(409, 'Інженер-конструктор'),
(505, 'Інженер-металург'),
(410, 'Інженер-механік'),
(488, 'Інженер-проектувальник'),
(48, 'Інкасатор'),
(487, 'Інспектор'),
(528, 'Інспектор міграційної служби'),
(407, 'Інструктор підводного плавання'),
(435, 'Інструктор тренажерного залу'),
(564, 'Інтерв''юер'),
(49, 'Інфекционіст'),
(1, 'Автоелектрик'),
(2, 'Автомаляр'),
(527, 'Автомеханік'),
(3, 'Автомойщик'),
(4, 'Автослюсар'),
(495, 'Агент з нерухомості'),
(5, 'Агроном'),
(6, 'Адвокат'),
(7, 'Адміністратор'),
(8, 'Адміністратор бази даних'),
(502, 'Адміністратор торгового залу'),
(542, 'Адмінистратор готелю'),
(387, 'Актор'),
(388, 'Акушер-гінеколог'),
(10, 'Аніматор'),
(9, 'Аналітик'),
(494, 'Анестезіолог'),
(11, 'Архівариус'),
(12, 'Архітектор'),
(501, 'Асистент'),
(177, 'Асистент PR-менджера'),
(176, 'Асистент маркетолога'),
(536, 'Асистент стоматолога'),
(482, 'Аудитор'),
(389, 'Бібліотекар'),
(15, 'Біоінженер'),
(16, 'Біофізик'),
(478, 'Бактеріолог'),
(13, 'Бармен'),
(14, 'Бизнес-тренер'),
(172, 'Бригадир'),
(17, 'Брокер'),
(19, 'Будівельник'),
(20, 'Бухгалтер'),
(169, 'Відеооператор'),
(25, 'Візажист'),
(26, 'Вірусолог'),
(532, 'Валеолог'),
(168, 'Вантажник'),
(202, 'Вахтер'),
(21, 'Веб-дизайнер'),
(492, 'Верстальник'),
(22, 'Ветеринар'),
(23, 'Викладач'),
(556, 'Викладач географії'),
(534, 'Викладач математики'),
(529, 'Викладач музики'),
(535, 'Викладач психології'),
(531, 'Викладач фізичної реабілітації'),
(390, 'Виконроб'),
(24, 'Вихователь'),
(391, 'Вишивальниця'),
(392, 'Внутрішні будівельні роботи'),
(27, 'Водій'),
(393, 'Водій електрокара'),
(173, 'Водій-експедитор'),
(18, 'Вокаліст'),
(395, 'Вчитель'),
(491, 'Вчитель початкових класів'),
(554, 'Вчитель фізкультури'),
(551, 'Вчитель французької мови'),
(459, 'Гід'),
(398, 'Гідрогеолог'),
(466, 'Гіпсокартонщик'),
(565, 'Газорізчик'),
(397, 'Геодезіст'),
(533, 'Геронтолог'),
(28, 'Гловний інженер'),
(29, 'Головний бухгалтер'),
(506, 'Головний енергетик'),
(456, 'Гравер'),
(544, 'Графічний дизайнер'),
(30, 'Гувернантка'),
(36, 'Дієтолог'),
(400, 'Дієтсестра'),
(512, 'Діловод'),
(567, 'Дільничий'),
(31, 'Двірник'),
(32, 'Девелопер'),
(33, 'Дерматовенеролог'),
(34, 'Дизайнер'),
(35, 'Директор'),
(206, 'Директор з маркетингу'),
(203, 'Директор з розвитку'),
(204, 'Директор ресторану'),
(396, 'Диспетчер'),
(401, 'Догляд за тваринами'),
(37, 'Еколог'),
(38, 'Економіст'),
(463, 'Експедитор'),
(39, 'Експерт з оцінки власності'),
(402, 'Електрик'),
(191, 'Електрозварювальник'),
(403, 'Електромеханік'),
(192, 'Електромонтер'),
(196, 'Електрослюсар'),
(394, 'Ендокринолог'),
(507, 'Енергетик'),
(40, 'Журналіст'),
(404, 'Завідуючий виробництвом'),
(548, 'Завідуючий господарством'),
(41, 'Завідуючий складом'),
(42, 'Заправник АЗС'),
(43, 'Заступник директора'),
(405, 'Збірник меблів'),
(171, 'Зварювальник'),
(406, 'Землевпорядник'),
(44, 'Зооінженер'),
(45, 'Зубний технік'),
(57, 'Кінолог'),
(58, 'Кіномеханік'),
(59, 'Кінооператор'),
(50, 'Каменяр'),
(51, 'Кардіолог'),
(52, 'Кардіохірург'),
(411, 'Картограф'),
(53, 'Касир'),
(54, 'Керівник відділу'),
(499, 'Керівник відділу продажів'),
(530, 'Керівник виробництва'),
(412, 'Керівник гуртка'),
(511, 'Керівник митним ліцензійним складом'),
(510, 'Керівник митного відділу'),
(55, 'Керівник цеху'),
(56, 'Керуючий'),
(413, 'Коваль'),
(490, 'Колектор'),
(470, 'Колорист'),
(61, 'Комірник'),
(414, 'Командир водолазно-аварійної групи'),
(517, 'Коментатор спортивних подій'),
(60, 'Комерційний директор'),
(62, 'Композитор'),
(63, 'Кондитер'),
(64, 'Кондуктор'),
(167, 'Консультант'),
(464, 'Консьєрж'),
(65, 'Контент-менеджер'),
(559, 'Конферансьє'),
(415, 'Концермейстер'),
(66, 'Копірайтер'),
(67, 'Коректор'),
(416, 'Кореспондент'),
(68, 'Косметолог'),
(69, 'Кошторисник'),
(70, 'Кравець'),
(465, 'Кранівник'),
(205, 'Креативний директор'),
(71, 'Кредитний експерт'),
(543, 'Кресляр'),
(72, 'Кризис-менеджер'),
(73, 'Круп''є'),
(74, 'Кур''єр'),
(417, 'Кухар'),
(77, 'Лікар'),
(418, 'Лікар УЗД'),
(78, 'Лікар швидкої допомоги'),
(566, 'Лісничий'),
(562, 'Літературний редактор'),
(195, 'Ліфтер'),
(75, 'Лаборант'),
(76, 'Ландшавтний дизайнер'),
(186, 'Лицювальник-плиточник'),
(79, 'Логіст'),
(80, 'Логопед'),
(520, 'Мікробіолог'),
(94, 'Міліціонер'),
(81, 'Майстер з виготовлення окулярів'),
(419, 'Майстер з обслуговування газових шляхів'),
(82, 'Майстер манікюру, педікюру'),
(420, 'Майстер-гірник'),
(83, 'Маклер'),
(84, 'Маляр'),
(85, 'Маркетолог'),
(86, 'Масажист'),
(477, 'Машиніст'),
(421, 'Медбрат'),
(89, 'Медична сестра'),
(90, 'Медичний представник'),
(422, 'Менеджер'),
(423, 'Менеджер з постачання'),
(91, 'Менеджер з продажу'),
(481, 'Менеджер з регіонального розвитку'),
(480, 'Менеджер з розвитку бізнесу'),
(425, 'Менеджер зі збуту'),
(516, 'Менеджер закупівлі'),
(424, 'Менеджер ЗЕД'),
(452, 'Менеджер по роботі з клієнтами'),
(426, 'Менеджер по туризму'),
(427, 'Менеджер типографії'),
(92, 'Мерчендайзер'),
(475, 'Методист'),
(93, 'Механік'),
(509, 'Митний декларант'),
(95, 'Молодша медична сестра'),
(197, 'Молодший спеціаліст'),
(188, 'Монтажник'),
(523, 'Монтажник  компьютерних мереж'),
(522, 'Монтажник силових  мереж'),
(457, 'Монтажник систем опалення'),
(497, 'Монтер залізничних шляхів'),
(508, 'Музейний працівник'),
(486, 'Науковий співробітник'),
(96, 'Невролог'),
(97, 'Нейрохірург'),
(98, 'Нотаріус'),
(99, 'Няня'),
(524, 'Онколог'),
(100, 'Оператор call-центру'),
(460, 'Оператор виробничої лінії'),
(101, 'Оператор кіно і телебачення'),
(194, 'Оператор котельні'),
(428, 'Оператор обладнання'),
(102, 'Оператор ПК'),
(103, 'Оптометрист'),
(104, 'Офіс-менеджер'),
(105, 'Офіціант'),
(106, 'Офтальмолог'),
(107, 'Охоронець'),
(484, 'Підземний машиніст'),
(483, 'Підземний прохідник'),
(471, 'Підсобний робітник'),
(552, 'Піскоструйщик'),
(200, 'Пакувальник'),
(190, 'Паркетник'),
(108, 'Пекар'),
(109, 'Перекладач'),
(175, 'Персональний асистент'),
(110, 'Перукар'),
(182, 'Печник'),
(553, 'Письменник'),
(111, 'Повар'),
(112, 'Податковий інспектор'),
(113, 'Податковий консультант'),
(114, 'Пожежник'),
(429, 'Покоївка'),
(485, 'Поліграфіст'),
(115, 'Політолог'),
(116, 'Політтехнолог'),
(469, 'Помічник'),
(539, 'Помічник адвоката'),
(514, 'Помічник аудитора'),
(117, 'Помічник директора'),
(546, 'Помічник кондитера'),
(498, 'Помічник нотаріуса'),
(545, 'Помічник пекаря'),
(430, 'Помічник повара'),
(557, 'Помічник судді'),
(518, 'Помічник юриста'),
(431, 'Портьє'),
(432, 'Посудомийниця'),
(433, 'Прибиральник'),
(504, 'Приватний підприємець'),
(541, 'Прийомщик'),
(473, 'Провідний спеціаліст'),
(434, 'Провідник'),
(118, 'Провізор'),
(119, 'Програміст'),
(180, 'Продавець непродовольчих товарів'),
(179, 'Продавець продовольчих товарів'),
(120, 'Продавець-консультант'),
(121, 'Продукт менеджер'),
(122, 'Продюсер'),
(174, 'Проектний менеджер'),
(123, 'Промисловий альпініст'),
(124, 'Промоутер'),
(125, 'Психолог'),
(126, 'Психотерапевт'),
(132, 'Ріелтор'),
(199, 'Різноробочий'),
(561, 'Радіожурналіст'),
(127, 'Редактор'),
(128, 'Режисер'),
(129, 'Рекрутер'),
(436, 'Репетитор'),
(437, 'Рерайтер'),
(130, 'Реставратор'),
(438, 'Реставрування та ремонт меблів'),
(131, 'Ресторатор'),
(133, 'Робітник'),
(493, 'Садівник'),
(134, 'Санітарка'),
(439, 'Сантехнік'),
(135, 'Секретар'),
(201, 'Сиділка (Доглядальниця)'),
(440, 'Системний адміністратор'),
(441, 'Скрипаль'),
(136, 'Слідчий'),
(442, 'Слюсар'),
(187, 'Слюсар-сантехнік'),
(137, 'Сомельє'),
(443, 'Соціальний педагог'),
(444, 'Соціальний працівник'),
(138, 'Социолог'),
(140, 'Спічрайтер'),
(198, 'Спеціаліст'),
(560, 'Спеціаліст з виготовлення устілок'),
(139, 'Спеціаліст з клінічних досліджень'),
(170, 'Спеціаліст з ремонту електротехніки'),
(445, 'Спеціаліст з ремонту комп''ютерної техніки'),
(446, 'Спеціаліст з технічної підтримки'),
(521, 'Спеціаліст з якості'),
(519, 'Спеціаліст зі зв''язків із громадськістю'),
(489, 'Спеціаліст с захисту інформації'),
(474, 'Стиліст'),
(447, 'Столяр'),
(189, 'Столяр-будівельник'),
(141, 'Стоматолог'),
(448, 'Сторож'),
(142, 'Страховий агент'),
(193, 'Стропальник'),
(143, 'Суддя'),
(449, 'Судово-медичний експерт'),
(144, 'Супервайзер'),
(537, 'Сушист'),
(450, 'Сценарист'),
(462, 'Таємний покупець'),
(461, 'Телеведуча'),
(145, 'Тележурналіст'),
(451, 'Терапевт'),
(467, 'Тестувальник ПО'),
(563, 'Технік-механік'),
(515, 'Технічний директор'),
(146, 'Технолог'),
(147, 'Товарознавець'),
(148, 'Токар'),
(149, 'Топ-менеджер'),
(150, 'Торгівельний представник'),
(538, 'Тракторист'),
(151, 'Тренер'),
(525, 'Уролог'),
(153, 'Фінансовий аналітик'),
(513, 'Фінансовий директор'),
(453, 'Фінансовий консультант'),
(154, 'Фінансовий контролер'),
(526, 'Фінансовий менеджер'),
(152, 'Фармацевт'),
(547, 'Фасувальник'),
(479, 'Фельдшер'),
(458, 'Фокусник'),
(155, 'Фотограф'),
(555, 'Фоторепортер'),
(399, 'Фрезерувальник'),
(472, 'Хімік'),
(156, 'Хірург'),
(455, 'Хірург-онколог'),
(454, 'Хатня робітниця'),
(157, 'Хореограф'),
(503, 'Хостес'),
(158, 'Художник'),
(476, 'Черговий по залізничній станції'),
(159, 'Швачка'),
(160, 'Шеф-кухар'),
(496, 'Шліфувальник'),
(185, 'Штукатур'),
(162, 'Ювелір'),
(550, 'Юрисконсульт'),
(163, 'Юрист');

INSERT INTO `driver_licenses` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A'),
(3, 'B1'),
(4, 'B'),
(5, 'C1'),
(6, 'C'),
(7, 'D1'),
(8, 'D'),
(9, 'BE'),
(10, 'C1E'),
(11, 'CE'),
(12, 'D1E'),
(13, 'DE'),
(14, 'T');

SQL
);



	}

	public function down()
	{
		echo "m150501_075518_fill_dictionary_tables does not support migration down.\n";
		return false;
	}

}