<?
global $DBType, $DB, $MESS, $APPLICATION;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	"kit.recaptcha",
	array(
		"kit_recaptcha" => "install/index.php",
	)
);

?>