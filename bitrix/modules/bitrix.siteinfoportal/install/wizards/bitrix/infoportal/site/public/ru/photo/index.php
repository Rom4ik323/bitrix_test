<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������");
?><?$APPLICATION->IncludeComponent("bitrix:photogallery_user", ".default", array(
	"SECTION_PAGE_ELEMENTS" => "15",
	"ELEMENTS_PAGE_ELEMENTS" => "50",
	"PAGE_NAVIGATION_TEMPLATE" => "",
	"ELEMENTS_USE_DESC_PAGE" => "N",
	"USE_LIGHT_VIEW" => "N",
	"IBLOCK_TYPE" => "photos",
	"IBLOCK_ID" => "#IBLOCK_ID#",
	"GALLERY_GROUPS" => array(
		0 => "1",
		1 => " #GROUPS_ID#",
	),
	"ONLY_ONE_GALLERY" => "Y",
	"MODERATION" => "N",
	"SECTION_SORT_BY" => "UF_DATE",
	"SECTION_SORT_ORD" => "DESC",
	"ELEMENT_SORT_FIELD" => "id",
	"ELEMENT_SORT_ORDER" => "desc",
	"ANALIZE_SOCNET_PERMISSION" => "N",
	"UPLOAD_MAX_FILE_SIZE" => "2M",
	"GALLERY_AVATAR_SIZE" => "50",
	"ALBUM_PHOTO_THUMBS_SIZE" => "120",
	"THUMBNAIL_SIZE" => "90",
	"ORIGINAL_SIZE" => "1280",
	"UPLOADER_TYPE" => "form",
	"JPEG_QUALITY1" => "95",
	"JPEG_QUALITY" => "90",
	"ADDITIONAL_SIGHTS" => array(
	),
	"WATERMARK_MIN_PICTURE_SIZE" => "800",
	"PATH_TO_FONT" => "",
	"WATERMARK_RULES" => "USER",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#photo/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
	"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
	"SET_TITLE" => "Y",
	"USE_RATING" => "Y",
	"MAX_VOTE" => "5",
	"VOTE_NAMES" => array(
		0 => "1",
		1 => "2",
		2 => "3",
		3 => "4",
		4 => "5",
		5 => "",
	),
	"SHOW_TAGS" => "N",
	"USE_COMMENTS" => "N",
	"DISPLAY_AS_RATING" => "rating",
	"INDEX_PAGE_TOP_ELEMENTS_COUNT" => "45",
	"SHOW_ONLY_PUBLIC" => "N",
	"USE_LIGHT_TEMPLATE" => "N",
	"WATERMARK" => "Y",
	"USE_WATERMARK" => "Y",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"galleries" => "photo/#USER_ID#/",
		"gallery" => "#USER_ALIAS#/",
		"gallery_edit" => "#USER_ALIAS#/action/#ACTION#/",
		"section" => "#USER_ALIAS#/#SECTION_ID#/",
		"section_edit" => "#USER_ALIAS#/#SECTION_ID#/action/#ACTION#/",
		"section_edit_icon" => "#USER_ALIAS#/#SECTION_ID#/icon/action/#ACTION#/",
		"upload" => "#USER_ALIAS#/#SECTION_ID#/action/upload/",
		"detail" => "#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/",
		"detail_edit" => "#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/",
		"detail_slide_show" => "#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/slide_show/",
		"detail_list" => "list/",
		"search" => "search/",
		"tags" => "tags/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>