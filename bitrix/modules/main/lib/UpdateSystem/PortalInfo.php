<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____1201893679']= array(base64_decode('ZGVm'.'aW5'.'lZA=='),base64_decode(''.'Zn'.'V'.'u'.'Y3Rpb25fZXh'.'pc3Rz'),base64_decode('ZGVmaW5lZ'.'A'.'=='),base64_decode('cGhw'.'dm'.'Vy'.'c2lvbg=='),base64_decode('Y2xhc3NfZX'.'hpc3R'.'z'));if(!function_exists(__NAMESPACE__.'\\___1629567520')){function ___1629567520($_1291291417){static $_211025064= false; if($_211025064 == false) $_211025064=array('TEl'.'DRU'.'5T'.'RV9'.'LRV'.'k=',''.'bGF'.'u'.'Z'.'w==','dXR'.'m','QlhfV'.'VRG','WQ==','Tg'.'==','c'.'3'.'RhY'.'m'.'xl',''.'bWFpbg==','c3RhYmxlX3ZlcnN'.'pb25zX29ubH'.'k=','WQ==','Q'.'0FOR1'.'pJUA==',''.'Z3pjb2'.'1wc'.'m'.'Vzcw'.'==','WQ==',''.'T'.'g==','U1VQ'.'RF9EQlM=','WEU=','WQ'.'='.'=',''.'Tg==',''.'U1'.'V'.'QRF'.'9VUlM=',''.'Q0'.'xJ'.'RU5U'.'X1NJ'.'VEU=','U0'.'VS'.'VkVSX05'.'BTU'.'U=','c3Bk','bWF'.'pbg==','Y3'.'J'.'jX2NvZGU=','','ZGJ2','U1VQRF'.'9'.'WRVI=','VVBEQVRFX1'.'NZU1'.'R'.'FTV9WRVJTSU9OX0E=','','U1'.'VQRF9TUlM=','UlU=','U'.'1VQR'.'F9DTVA'.'=',''.'Tg==','U1'.'VQ'.'R'.'F9T'.'V'.'FM'.'=','UkE=','TE'.'lDRU5TRV'.'9TSUdOR'.'UQ=','Q0xJRU5U'.'X1BIUFZ'.'F'.'U'.'g==','TkdJT'.'l'.'g=','bWFpbg==','d'.'XB'.'k'.'Y'.'XRlX3V'.'zZ'.'V9u'.'Z2lu'.'e'.'A==','WQ'.'==',''.'U01E','bWFpb'.'g'.'='.'=','d'.'XBkYX'.'RlX3Nh'.'ZmVfbW9kZQ==','Tg='.'=','VkV'.'SU0lPTg==',''.'VFl'.'QR'.'U5D','Q0hI'.'Qg==','SFRUU'.'F9I'.'T1'.'N'.'U','Q1N'.'BQg==','U'.'0'.'VS'.'VkV'.'SX'.'0'.'FERFI'.'=',''.'U1VJRA==','QVBQTEl'.'D'.'Q'.'V'.'RJT04=','','Y2x1c3Rlcg==','Q0'.'NsdXN0'.'ZXI=','PUFDVElWRQ==','W'.'Q==','L2'.'Jpd'.'HJpeC9tb2R1bGVzL21haW4v'.'Y2xhc3Nlcy9nZW5'.'lcm'.'F'.'sL3VwZ'.'GF0'.'Z'.'V9'.'jbGll'.'bnQ'.'ucGhw',''.'LQ==',''.'bWFpb'.'g==','Tg'.'==','RA'.'='.'=','RQ='.'=','VA'.'='.'=','Rg'.'==','L2'.'Jp'.'dHJp'.'eC9'.'t'.'b'.'2R1bGVz'.'L21ha'.'W'.'4'.'vY'.'2xhc3N'.'lcy9nZW5'.'lcm'.'FsL3VwZGF0ZV9jb'.'G'.'llbnQucG'.'hw','',''.'L2JpdH'.'JpeC9t'.'b2R1bGVzL21haW4vY2xh'.'c'.'3N'.'lcy9'.'nZW5l'.'cmFsL3VwZGF0ZV9jbGl'.'lbnQucGhw','');return base64_decode($_211025064[$_1291291417]);}}; use Bitrix\Main\Application; use Bitrix\Main\License; use Bitrix\Main\Loader; use Bitrix\Main\SystemException; use Bitrix\Main\SiteTable; class PortalInfo{ private License $_806215079; public function __construct(){ $this->_806215079= Application::getInstance()->getLicense();} public function common(): array{ global $DB; return[ ___1629567520(0) => $this->_806215079->getHashLicenseKey(), ___1629567520(1) => LANGUAGE_ID, ___1629567520(2) => $GLOBALS['____1201893679'][0](___1629567520(3))? ___1629567520(4): ___1629567520(5), ___1629567520(6) => \COption::GetOptionString(___1629567520(7), ___1629567520(8), ___1629567520(9)), ___1629567520(10) => $GLOBALS['____1201893679'][1](___1629567520(11))? ___1629567520(12): ___1629567520(13), ___1629567520(14) => $DB->type, ___1629567520(15) =>(isset($DB->_306239615) && $DB->_306239615)? ___1629567520(16): ___1629567520(17), ___1629567520(18) => $this->_806215079->getActiveUsersCount(), ___1629567520(19) => $_SERVER[___1629567520(20)], ___1629567520(21) => \COption::GetOptionString(___1629567520(22), ___1629567520(23), ___1629567520(24)), ___1629567520(25) => $this->__2077512002(), ___1629567520(26) => $GLOBALS['____1201893679'][2](___1629567520(27))? UPDATE_SYSTEM_VERSION_A: ___1629567520(28), ___1629567520(29) => $this->__1181060180() ?? ___1629567520(30), ___1629567520(31) => ___1629567520(32), ___1629567520(33) => $this->__807711160() ?? ___1629567520(34), ___1629567520(35) => $this->__940482674(), ___1629567520(36) => $GLOBALS['____1201893679'][3](), ___1629567520(37) => \COption::GetOptionString(___1629567520(38), ___1629567520(39), ___1629567520(40)), ___1629567520(41) => \COption::GetOptionString(___1629567520(42), ___1629567520(43), ___1629567520(44)), ___1629567520(45) => SM_VERSION, ___1629567520(46) => $this->getLicenseType(), ___1629567520(47) => $_SERVER[___1629567520(48)], ___1629567520(49) => $_SERVER[___1629567520(50)], ___1629567520(51) => $GLOBALS[___1629567520(52)]->GetServerUniqID(),];} private function __2077512002(): string{ global $DB; $_24256957= $DB->GetVersion(); return $_24256957 !== false? $_24256957: ___1629567520(53);} private function __1181060180():?int{ if(Loader::includeModule(___1629567520(54)) && $GLOBALS['____1201893679'][4](___1629567520(55))){ return \CCluster::getServersCount();} return null;} private function __807711160():?int{ return SiteTable::getCount([___1629567520(56) => ___1629567520(57)]);} private function __940482674(): string{ require_once(Application::getDocumentRoot(). ___1629567520(58)); $_1324460998= \CUpdateClient::getNewLicenseSignedKey(); return $_1324460998.___1629567520(59).\COption::GetOptionString(___1629567520(60), $_1324460998, ___1629567520(61));} public function getLicenseType(): string{ if($this->_806215079->isDemo()){ return ___1629567520(62);} elseif($this->_806215079->isEncoded()){ return ___1629567520(63);} elseif($this->_806215079->isTimeBound()){ return ___1629567520(64);} else{ return ___1629567520(65);}} public function getModules(): array{ require_once(Application::getDocumentRoot(). ___1629567520(66)); $_694252578= ___1629567520(67); $_1614701488= \CUpdateClient::GetCurrentModules($_694252578); $_2057096508=(\CUpdateExpertMode::isEnabled() && \CUpdateExpertMode::isCorrectModulesStructure([])); if($_2057096508){ $_1614701488= \CUpdateExpertMode::processModulesFrom([], $_1614701488);} if(!empty($_694252578)){ throw new SystemException($_694252578);} return $_1614701488;} public function getLanguages(): array{ require_once(Application::getDocumentRoot(). ___1629567520(68)); $_694252578= ___1629567520(69); $_1875822675= \CUpdateClient::GetCurrentLanguages($_694252578); if(!empty($_694252578)){ throw new SystemException($_694252578);} return $_1875822675;}}?>