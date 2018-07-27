<?php
/* Contribution Fixture generated on: 2014-09-14 16:11:46 : 1410711106 */
class ContributionFixture extends CakeTestFixture {
	public $name = 'Contribution';

	public $fields = array(
		'sentence_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sentence_lang' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'translation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'translation_lang' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'script' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text' => array('type' => 'text', 'null' => false, 'default' => NULL, 'length' => 1500),
		'action' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'datetime' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id_desc' => array('column' => 'id', 'unique' => 1), 'sentence_id' => array('column' => 'sentence_id', 'unique' => 0), 'datetime' => array('column' => 'datetime', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0), 'sentence_lang' => array('column' => array('sentence_lang', 'type'), 'unique' => 0), 'translation_id_idx' => array('column' => 'translation_id', 'unique' => 0)),
	);

	public $records = array(
		array(
			'sentence_id' => '1',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'The fundamental cause of the problem is that in the modern world, idiots are full of confidence, while the intelligent are full of doubt.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:32:08',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '1'
		),
		array(
			'sentence_id' => '2',
			'sentence_lang' => 'cmn',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => 'Hans',
			'text' => '问题的根源是，在当今世界，愚人充满了自信，而智者充满了怀疑。',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:32:43',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '2'
		),
		array(
			'sentence_id' => '1',
			'sentence_lang' => NULL,
			'translation_id' => '2',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:32:43',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '3'
		),
		array(
			'sentence_id' => '2',
			'sentence_lang' => NULL,
			'translation_id' => '1',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:32:43',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '4'
		),
		array(
			'sentence_id' => '3',
			'sentence_lang' => 'spa',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'La causa fundamental del problema es que en el mundo moderno, los idiotas están llenos de confianza, mientras que los inteligentes están llenos de dudas.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:33:18',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '5'
		),
		array(
			'sentence_id' => '1',
			'sentence_lang' => NULL,
			'translation_id' => '3',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:33:18',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '6'
		),
		array(
			'sentence_id' => '3',
			'sentence_lang' => NULL,
			'translation_id' => '1',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:33:18',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '7'
		),
		array(
			'sentence_id' => '4',
			'sentence_lang' => 'fra',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'La cause fondamentale du problème est que dans le monde moderne, les imbéciles sont plein d\'assurance, alors que les gens intelligents sont pleins de doute.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:34:28',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '8'
		),
		array(
			'sentence_id' => '2',
			'sentence_lang' => NULL,
			'translation_id' => '4',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:34:28',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '9'
		),
		array(
			'sentence_id' => '4',
			'sentence_lang' => NULL,
			'translation_id' => '2',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:34:28',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '10'
		),
		array(
			'sentence_id' => '5',
			'sentence_lang' => 'deu',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'Das grundlegende Problem ist, dass in der modernen Welt die Dummköpfe sich vollkommen sicher sind, während die Klugen voller Zweifel sind.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:35:03',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '11'
		),
		array(
			'sentence_id' => '2',
			'sentence_lang' => NULL,
			'translation_id' => '5',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:35:03',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '12'
		),
		array(
			'sentence_id' => '5',
			'sentence_lang' => NULL,
			'translation_id' => '2',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:35:03',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '13'
		),
		array(
			'sentence_id' => '6',
			'sentence_lang' => 'jpn',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'その問題の根本原因は、現代の世界において、賢明な人々が猜疑心に満ちている一方で、愚かな人々が自信過剰であるということである。',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:39:23',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '14'
		),
		array(
			'sentence_id' => '4',
			'sentence_lang' => NULL,
			'translation_id' => '6',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:39:23',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '15'
		),
		array(
			'sentence_id' => '6',
			'sentence_lang' => 'jpn',
			'translation_id' => '4',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:39:23',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '16'
		),
		array(
			'sentence_id' => '4',
			'sentence_lang' => NULL,
			'translation_id' => '1',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:40:13',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '17'
		),
		array(
			'sentence_id' => '1',
			'sentence_lang' => NULL,
			'translation_id' => '4',
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:40:13',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '18'
		),
		array(
			'sentence_id' => '7',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'This is a lonely sentence.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:49:21',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '19'
		),
		array(
			'sentence_id' => '8',
			'sentence_lang' => 'fra',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'Voici une phrase qu’il serait bien de traduire.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2014-04-15 00:52:01',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '20'
		),
		array(
			'sentence_id' => '9',
			'sentence_lang' => NULL,
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'This sentences purposely misses its flag.',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2014-04-15 21:12:03',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '21'
		),
		array(
			'sentence_id' => '11',
			'sentence_lang' => NULL,
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => 'Hant',
			'text' => '如果你唔想要我就俾第個㗎喇。',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2015-04-15 21:14:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '22'
		),
		array(
			'sentence_id' => '12',
			'sentence_lang' => NULL,
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'La cause fondamentale du problème est que dans le monde moderne, les imbéciles sont emplis d\'assurance, alors que les gens intelligents sont emplis de doute.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2015-06-15 00:34:28',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '23'
		),
		array(
			'sentence_id' => '13',
			'sentence_lang' => 'fra',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'Une phrase qui n’est déjà plus.',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2014-09-02 05:28:14',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '24'
		),
		array(
			'sentence_id' => '13',
			'sentence_lang' => 'fra',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'Une phrase qui n’est déjà plus.',
			'action' => 'delete',
			'user_id' => '4',
			'datetime' => '2014-09-02 05:30:14',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '25'
		),
		array(
			'sentence_id' => '14',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'An orphan sentence.',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2015-08-17 21:56:27',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '26'
		),
		array(
			'sentence_id' => '18',
			'sentence_lang' => 'eng',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'There is nothing like sleep.',
			'action' => 'insert',
			'user_id' => null,
			'datetime' => '0000-00-00 00:00:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '27'
		),
		array(
			'sentence_id' => '19',
			'sentence_lang' => 'eng',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'Where did they come from.',
			'action' => 'insert',
			'user_id' => null,
			'datetime' => '0000-00-00 00:00:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '28'
		),
		// translation inserted with pattern: create A, link B-A, link A-B
		array(
			'sentence_id' => '20',
			'sentence_lang' => 'fra',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'Rien ne vaut le sommeil.',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2016-01-17 19:01:20',
			'ip' => '172.25.59.71',
			'type' => 'sentence',
			'id' => '29'
		),
		array(
			'sentence_id' => '18',
			'sentence_lang' => 'eng',
			'translation_id' => '20',
			'translation_lang' => 'fra',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2016-01-17 19:01:20',
			'ip' => '172.25.59.71',
			'type' => 'link',
			'id' => '30'
		),
		array(
			'sentence_id' => '20',
			'sentence_lang' => 'fra',
			'translation_id' => '18',
			'translation_lang' => 'eng',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2016-01-17 19:01:20',
			'ip' => '172.25.59.71',
			'type' => 'link',
			'id' => '31'
		),
		// translation inserted with pattern: link B-A, link A-B, create A
		array(
			'sentence_id' => '19',
			'sentence_lang' => 'eng',
			'translation_id' => '21',
			'translation_lang' => 'fra',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2016-01-24 00:41:51',
			'ip' => '172.25.24.72',
			'type' => 'link',
			'id' => '32'
		),
		array(
			'sentence_id' => '21',
			'sentence_lang' => 'fra',
			'translation_id' => '19',
			'translation_lang' => 'eng',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2016-01-24 00:41:51',
			'ip' => '172.25.24.72',
			'type' => 'link',
			'id' => '33'
		),
		array(
			'sentence_id' => '21',
			'sentence_lang' => 'fra',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'D\'où est-ce qu\'ils venaient?',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2016-01-24 00:41:51',
			'ip' => '172.25.24.72',
			'type' => 'sentence',
			'id' => '34'
		),
		// two translations inserted conccurently
		// with pattern: link B-A, link A-B, create A
		array(
			'sentence_id' => '15',
			'sentence_lang' => 'eng',
			'translation_id' => '23',
			'translation_lang' => 'fra',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '5',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.20.159.118',
			'type' => 'link',
			'id' => '35'
		),
		array(
			'sentence_id' => '22',
			'sentence_lang' => 'fra',
			'translation_id' => '24',
			'translation_lang' => 'cmn',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.17.183.151',
			'type' => 'link',
			'id' => '36'
		),
		array(
			'sentence_id' => '24',
			'sentence_lang' => 'cmn',
			'translation_id' => '22',
			'translation_lang' => 'fra',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.17.183.151',
			'type' => 'link',
			'id' => '37'
		),
		array(
			'sentence_id' => '23',
			'sentence_lang' => 'fra',
			'translation_id' => '15',
			'translation_lang' => 'eng',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '5',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.20.159.118',
			'type' => 'link',
			'id' => '38'
		),
		array(
			'sentence_id' => '24',
			'sentence_lang' => 'cmn',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => 'Hans',
			'text' => '到明年四月我们住在这儿就满两年了。',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.17.183.151',
			'type' => 'sentence',
			'id' => '39'
		),
		array(
			'sentence_id' => '23',
			'sentence_lang' => 'fra',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'La piscine est utilisée en commun par tous les enfants du voisinage.',
			'action' => 'insert',
			'user_id' => '5',
			'datetime' => '2016-06-19 22:56:52',
			'ip' => '172.20.159.118',
			'type' => 'sentence',
			'id' => '40'
		),
		// two translations inserted conccurently (different ordering)
                // with pattern: link B-A, link A-B, create A
		array(
			'sentence_id' => '17',
			'sentence_lang' => 'fra',
			'translation_id' => '25',
			'translation_lang' => 'cmn',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.31.29.209',
			'type' => 'link',
			'id' => '41'
		),
		array(
			'sentence_id' => '25',
			'sentence_lang' => 'cmn',
			'translation_id' => '17',
			'translation_lang' => 'fra',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.31.29.209',
			'type' => 'link',
			'id' => '42'
		),
		array(
			'sentence_id' => '16',
			'sentence_lang' => 'jpn',
			'translation_id' => '26',
			'translation_lang' => 'spa',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.30.227.165',
			'type' => 'link',
			'id' => '43'
		),
		array(
			'sentence_id' => '26',
			'sentence_lang' => 'spa',
			'translation_id' => '16',
			'translation_lang' => 'jpn',
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.30.227.165',
			'type' => 'link',
			'id' => '44'
		),
		array(
			'sentence_id' => '25',
			'sentence_lang' => 'cmn',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => 'Hans',
			'text' => '她给了个模糊的答案。',
			'action' => 'insert',
			'user_id' => '4',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.31.29.209',
			'type' => 'sentence',
			'id' => '45'
		),
		array(
			'sentence_id' => '26',
			'sentence_lang' => 'spa',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'Ella siempre intenta hacer lo que piensa.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2016-12-26 20:26:24',
			'ip' => '172.30.227.165',
			'type' => 'sentence',
			'id' => '46'
		),
		array(
			'sentence_id' => '27',
			'sentence_lang' => 'eng',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'What are you doing?',
			'action' => 'insert',
			'user_id' => '8',
			'datetime' => '2017-04-06 19:23:01',
			'ip' => '172.31.230.25',
			'type' => 'sentence',
			'id' => '47'
		),
		// translation inserted with pattern: create A, link A-B, link B-A
		// with 4 seconds time difference (like sentence #386311)
		array(
			'sentence_id' => '28',
			'sentence_lang' => 'ara',
			'translation_id' => null,
			'translation_lang' => null,
			'script' => null,
			'text' => 'ماذا تفعل؟',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2017-04-06 18:40:26',
			'ip' => '172.28.54.205',
			'type' => 'sentence',
			'id' => '48'
		),
		array(
			'sentence_id' => '28',
			'sentence_lang' => null,
			'translation_id' => '27',
			'translation_lang' => null,
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2017-04-06 18:40:29',
			'ip' => '172.28.54.205',
			'type' => 'link',
			'id' => '49'
		),
		array(
			'sentence_id' => '27',
			'sentence_lang' => null,
			'translation_id' => '28',
			'translation_lang' => null,
			'script' => null,
			'text' => '',
			'action' => 'insert',
			'user_id' => '2',
			'datetime' => '2017-04-06 18:40:30',
			'ip' => '172.28.54.205',
			'type' => 'link',
			'id' => '50'
		),
		// Multiple creation records
		array(
			'sentence_id' => '29',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'The log of this sentence shows two creation records.',
			'action' => 'insert',
			'user_id' => '7',
			'datetime' => '2017-04-07 18:50:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '51'
		),
		array(
			'sentence_id' => '30',
			'sentence_lang' => 'fra',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'L’historique de cette phrase fait apparaître deux créations.',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2017-04-07 18:51:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '52'
		),
		array(
			'sentence_id' => '29',
			'sentence_lang' => 'eng',
			'translation_id' => '30',
			'translation_lang' => 'fra',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2017-04-07 18:51:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '53'
		),
		array(
			'sentence_id' => '30',
			'sentence_lang' => 'fra',
			'translation_id' => '29',
			'translation_lang' => 'eng',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '1',
			'datetime' => '2017-04-07 18:51:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '54'
		),
		array(
			'sentence_id' => '29',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'The log of this sentence shows two creation records.',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-07 18:52:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '55'
		),
		array(
			'sentence_id' => '30',
			'sentence_lang' => 'fra',
			'translation_id' => '29',
			'translation_lang' => 'eng',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-07 18:52:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '56'
		),
		array(
			'sentence_id' => '29',
			'sentence_lang' => 'eng',
			'translation_id' => '30',
			'translation_lang' => 'fra',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-07 18:52:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '57'
		),
		array(
			'sentence_id' => '31',
			'sentence_lang' => 'eng',
			'translation_id' => NULL,
			'translation_lang' => NULL,
			'script' => NULL,
			'text' => 'This sentence will be linked twice shortly after being created.',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-08 03:10:00',
			'ip' => '127.0.0.1',
			'type' => 'sentence',
			'id' => '58'
		),
		array(
			'sentence_id' => '28',
			'sentence_lang' => 'ara',
			'translation_id' => '31',
			'translation_lang' => 'eng',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-08 03:10:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '59'
		),
		array(
			'sentence_id' => '31',
			'sentence_lang' => 'eng',
			'translation_id' => '28',
			'translation_lang' => 'ara',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-08 03:10:00',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '60'
		),
		// new link to #29 created within 4 seconds
		array(
			'sentence_id' => '31',
			'sentence_lang' => 'eng',
			'translation_id' => '29',
			'translation_lang' => 'eng',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-08 03:10:04',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '61'
		),
		array(
			'sentence_id' => '29',
			'sentence_lang' => 'eng',
			'translation_id' => '31',
			'translation_lang' => 'eng',
			'script' => NULL,
			'text' => '',
			'action' => 'insert',
			'user_id' => '3',
			'datetime' => '2017-04-08 03:10:04',
			'ip' => '127.0.0.1',
			'type' => 'link',
			'id' => '62'
		),
	);
}
