<?
global $DBType, $DB, $MESS, $APPLICATION;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	"collected.recaptcha",
	array(
		"collected_recaptcha" => "install/index.php",
	)
);

?>