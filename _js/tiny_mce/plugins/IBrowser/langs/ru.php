<?php
	// ================================================
	// PHP image browser - iBrowser 
	// ================================================
	// iBrowser - language file: English
	// ================================================
	// Developed: net4visions.com
	// Copyright: net4visions.com
	// License: GPL - see license.txt
	// (c)2005 All rights reserved.
	// ================================================
	// Revision: 1.1                   Date: 07/07/2005
	// ================================================
	
	//-------------------------------------------------------------------------
	// charset to be used in dialogs
	$lang_charset = 'charset=windows-1251';
	// text direction for the current language to be used in dialogs
	$lang_direction = 'ltr';
	//-------------------------------------------------------------------------
	
	// language text data array
	// first dimension - block, second - exact phrase
	//-------------------------------------------------------------------------
	// iBrowser
	$lang_data = array (  
		'ibrowser' => array (
		//-------------------------------------------------------------------------
		// common - im
		'im_001' => 'Менеджер изображений',
		'im_002' => 'iBrowser',
		'im_003' => 'Меню',
		'im_004' => 'Добро пожаловать',
		'im_005' => 'Вставить',
		'im_006' => 'Отмена',
		'im_007' => 'Вставить',		
		'im_008' => 'Вставить/изменить',
		'im_009' => 'Свойства',
		'im_010' => 'Свойства изображения',
		'im_013' => 'Popup',
		'im_014' => 'Image popup',
		'im_015' => 'О iBrowser',
		'im_016' => 'Секция',
		'im_097' => 'Пожалуйста подождите...',
		'im_098' =>	'Открыть секцию',
		'im_099' => 'Закрыть секцию',
		//-------------------------------------------------------------------------
		// insert/change screen - in	
		'in_001' => 'Вставить/Изменить изображение',
		'in_002' => 'Библиотека',
		'in_003' => 'Выбрать библиотеку изображений',
		'in_004' => 'Изображения',
		'in_005' => 'Предпросмотр',
		'in_006' => 'Удалить изображение',
		'in_007' => 'Щелкните, чтобы просмотреть увеличенное изображение',
		'in_008' => 'При выборе одной из опций, откроется секция загрузки, переименования или удаления',
		'in_009' => 'Информация',
		'in_010' => 'Popup',		
		'in_013' => 'Создать ссылку на изображение, которое открывается в новом окне.',
		'in_014' => 'удалить ссылку popup',	
		'in_015' => 'Файл',	
		'in_016' => 'Переименовать',
		'in_017' => 'Переименовать изображение',
		'in_018' => 'Файл',
		'in_019' => 'Загрузить изображение',	
		'in_020' => 'Размер',
		'in_021' => 'Выбор желаемого размера файла после загрузки.',
		'in_022' => 'Оригинал',
		'in_023' => 'Изображение будет обрезано',
		'in_024' => 'Удалить',
		'in_025' => 'Папка',
		'in_026' => 'Щелкните, чтобы создать папку',
		'in_027' => 'Создать папку',
		'in_028' => 'Ширина',
		'in_029' => 'Высота',
		'in_030' => 'Тип',
		'in_031' => 'Размер',
		'in_032' => 'Название',
		'in_033' => 'Создан',
		'in_034' => 'Изменен',
		'in_035' => 'Свойства изображения',
		'in_036' => 'Щелкните на изображении чтобы закрыть окно',
		'in_037' => 'Вращать',
		'in_038' => 'Поворот файла: установите в exif, чтобы использовать EXIF ориентацию, сохраненную камерой. Может быть также установлено в +180&deg; или -180&deg; для масштабных изображений, а также +90&deg; или -90&deg; для портрета. Позитивные значения для вращения по часовой стрелке, негативные наоборот.',
		'in_041' => '',
		'in_042' => 'нет',		
		'in_043' => 'портрет',
		'in_044' => '+ 90&deg;',	
		'in_045' => '- 90&deg;',
		'in_046' => 'масштаб',	
		'in_047' => '+ 180&deg;',	
		'in_048' => '- 180&deg;',
		'in_049' => 'камера',	
		'in_050' => 'exif',
		'in_051' => 'ВНИМАНИЕ: Текущее изображение является динамической миниатюрой, сгенерированной программой iManager - параменты будут утеряны при смене изображения.',
		'in_052' => 'Щекните чтобы изменить выбранное изображение',
		'in_053' => 'Случайный',
		'in_054' => 'Если эта опция выбрана, будет вставлено случайное изображение',
		'in_055' => 'Выберите, чтобы вставить случайное изображение',
		'in_056' => 'Параметры',
		'in_057' => 'щелкните, чтобы сбросить параметры к значениям по умолчанию',
		'in_099' => 'по умолчанию',	
		//-------------------------------------------------------------------------
		// properties, attributes - at
		'at_001' => 'Атрибуты изображения',
		'at_002' => 'Источник',
		'at_003' => 'Заголовок',
		'at_004' => 'TITLE - показывает описание изображения при наведении на него указателем мыши',
		'at_005' => 'Описание',
		'at_006' => 'ALT -  текстовая замена для изображения, если последнее не отображается',
		'at_007' => 'Стиль',
		'at_008' => 'Убедитесь, что выбранный стиль присутствует в таблице стилей!',
		'at_009' => 'CSS-стиль',
		'at_010' => 'Атрибуты',
		'at_011' => 'Атрибуты изображения \'align\', \'border\', \'hspace\', и \'vspace\' не поддерживаются в XHTML 1.0 Strict DTD. Пожалуйста, используйте вместо них стили CSS.',
		'at_012' => 'Выравнивание',
		'at_013' => 'по умолчанию',
		'at_014' => 'left',
		'at_015' => 'right',
		'at_016' => 'top',
		'at_017' => 'middle',
		'at_018' => 'bottom',
		'at_019' => 'absmiddle',
		'at_020' => 'texttop',
		'at_021' => 'baseline',		
		'at_022' => 'Размер',
		'at_023' => 'Ширина',
		'at_024' => 'Высота',
		'at_025' => 'Граница',
		'at_026' => 'V-space',
		'at_027' => 'H-space',
		'at_028' => 'Предпросмотр',	
		'at_029' => 'Щелкните, чтобы ввести специальные символы в поле заголовка',
		'at_030' => 'Щелкните, чтобы ввести специальные символы в поле описания',
		'at_031' => 'Сбросить размеры изображения к значениям по умолчанию',
		'at_032' => 'Заголовок',
		'at_033' => 'выбрано: установка заголовка изображения / не выбрано: не устанавливать, или удалить заголовок',
		'at_034' => 'установить заголовок изображения',
		'at_099' => 'по умолчанию',
		//-------------------------------------------------------------------------		
		// error messages - er
		'er_001' => 'Ошибка',
		'er_002' => 'Файл изображения не выбран!',
		'er_003' => 'Ширина не является числом',
		'er_004' => 'Высота не является числом',
		'er_005' => 'Ширина границы не является числом',
		'er_006' => 'Горизонтальный отступ не является числом',
		'er_007' => 'Вертикальный отступ отступ не является числом',
		'er_008' => 'Щелкните OK чтобы удалить изображение',
		'er_009' => 'Переименование миниатюр не разрешено! Пожалуйста, переименуйте главное изображение, если вы хотите изменить название миниатюры.',
		'er_010' => 'Щелкните OK чтобы переименовать изображение',
		'er_011' => 'Новое имя либо пустое, либо не изменено!',
		'er_014' => 'Пожалуйста, введите новое название файла!',
		'er_015' => 'Пожалуйста, введите правильное название файла!',
		'er_016' => 'Создание миниатюр не доступно! Пожалуйста, установите размер миниатюр в файле конфигурации, чтобы иметю возможность их создавать.',
		'er_021' => 'Щелкните OK чтобы загрузить изображения.',
		'er_022' => 'Загрузка изображения - пожалуйста подождите...',
		'er_023' => 'Изображение не выбрано.',
		'er_024' => 'Файл',
		'er_025' => 'уже существует! Щелкните OK чтобы перезаписать...',
		'er_026' => 'Пожалуйста, введите новое имя файла!',
		'er_027' => 'Папка не существует',
		'er_028' => 'Произошла ошибка при загрузке файла. Попробуйте еще раз.',
		'er_029' => 'Неверный тип изображения',
		'er_030' => 'Удаление не выполнено! Пожалуйста, попробуйте еще раз.',
		'er_031' => 'Перезаписать',
		'er_032' => 'Полноразмерный предпросмотр работает только для изображений, больших, чем размер предпросмотра',
		'er_033' => 'Переименование не выполнено! Попробуйте еще раз.',
		'er_034' => 'Ошибка при создании папки! Попробуйте еще раз.',
		'er_035' => 'Увеличение размера не разрешено!',
		'er_036' => 'Ошибка при создании списка файлов!',
	  ),	  
	  //-------------------------------------------------------------------------
	  // symbols
		'symbols'		=> array (
		'title' 		=> 'Символы',
		'ok' 			=> 'OK',
		'cancel' 		=> 'Отмена',
	  ),	  
	)
?>