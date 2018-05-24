<?php
$manifest = array(
    'name' => 'org2_accounts',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin (nlvomsk@gmail.com)',
    'description' => 'Доработка модуля контрагентов',
    'is_uninstallable' => true,
    'published_date' => '2018-05-23',
    'type' => 'module',
    'version' => '1.0.0',
    'dependencies' => array(
      array(
       'id_name' => 'org2_doms',
       'version' => '1.4',
      ),
      )
);
$installdefs = array(
    'id' => 'org2_accounts',
    'language' => array(
        array (
            'from' => '<basepath>/source/language/Accounts/ru_RU.accounts.php',
            'to_module' => 'Accounts',
            'language' => 'ru_RU',
        ),
    ),
    'vardefs' => array (
        array (
            'from' => '<basepath>/source/vardefs/Accounts/vardefs.accounts.php',
            'to_module' => 'Accounts',
        ),
    ),
);
