<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bytes', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('S�n', 'M�n', 'Tis', 'Ons', 'Tors', 'Fre', 'L�r');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y kl %H:%M';
$timespanfmt = '%s dagar, %s timmar, %s minuter och %s sekunder';

$strAPrimaryKey = 'En prim�r nyckel har lagts till f�r %s';
$strAbortedClients = 'Avbrutna';
$strAbsolutePathToDocSqlDir = 'Ange absolut s�kv�g p� webbservern till docSQL-katalog';
$strAccessDenied = '�tkomst nekad';
$strAccessDeniedExplanation = 'phpMyAdmin f�rs�kte skapa en f�rbindelse till MySQL-servern, men servern nekade uppkopplingen. Kontrollera v�rd, anv�ndarnamn och l�senord i config.inc.php och f�rvissa dig om att de st�mmer �verens med informationen fr�n administrat�ren av MySQL-servern.';
$strAction = '�tg�rd';
$strAddAutoIncrement = 'L�gg till AUTO_INCREMENT-v�rde';
$strAddDeleteColumn = 'L�gg till/ta bort f�ltkolumner';
$strAddDeleteRow = 'L�gg till/ta bort villkorsrader';
$strAddDropDatabase = 'L�gg till \'DROP DATABASE\'';
$strAddIntoComments = 'L�gg till i kommentarer';
$strAddNewField = 'L�gg till f�lt';
$strAddPriv = 'L�gg till ett nytt privilegium';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegium.';
$strAddPrivilegesOnDb = 'L�gg till privilegier till f�ljande databas';
$strAddPrivilegesOnTbl = 'L�gg till privilegier till f�ljande tabell';
$strAddSearchConditions = 'L�gg till s�kvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'L�gg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAddedColumnComment = 'La till kommentar f�r kolumn';
$strAddedColumnRelation = 'La till relation f�r kolumn';
$strAdministration = 'Administration';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'G� tillbaka till f�reg�ende sida';
$strAfterInsertNewInsert = 'L�gg till ytterligare en ny rad';
$strAll = 'Alla';
$strAllTableSameWidth = 'Visa alla tabeller med samma bredd';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnIndex = 'Ett index har lagts till f�r %s';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAny = 'Vem som helst';
$strAnyColumn = 'Vilken kolumn som helst';
$strAnyDatabase = 'Vilken databas som helst';
$strAnyHost = 'Vilken v�rd som helst';
$strAnyTable = 'Vilken tabell som helst';
$strAnyUser = 'Vilken anv�ndare som helst';
$strArabic = 'Arabisk';
$strArmenian = 'Armenisk';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';
$strAutodetect = 'Autodetektera';
$strAutomaticLayout = 'Automatisk layout';

$strBack = 'Bak�t';
$strBaltic = 'Baltisk';
$strBeginCut = 'START URKLIPP';
$strBeginRaw = 'START R�TEXT';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - �ndra inte';
$strBookmarkAllUsers = 'L�t varje anv�ndare f� tillg�ng till detta bokm�rke';
$strBookmarkDeleted = 'Bokm�rket har raderats.';
$strBookmarkLabel = 'Etikett';
$strBookmarkOptions = 'Bokm�rkesalternativ';
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'Visa endast';
$strBrowse = 'Visa';
$strBrowseForeignValues = 'Visa fr�mmande v�rden';
$strBulgarian = 'Bulgarisk';
$strBzError = 'phpMyAdmin kunde inte komprimera SQL-satserna p� grund av en trasig Bz2-utvidgning i denna php-version. Det rekommenderas starkt att s�tta direktivet <code>$cfg[\'BZipDump\']</code> i din phpMyAdmin-konfigurationsfil till <code>FALSE</code>. Om du vill anv�nda Bz2-komprimering, b�r du uppgradera till en senare php-version. Se php:s buggrapport %s f�r detaljer.';
$strBzip = '"bzippad"';

$strCSVOptions = 'CSV-alternativ';
$strCannotLogin = 'Kan ej logga in p� MySQL-server';
$strCantLoad = 'kan inte ladda %s-till�gg,<br />var god kontrollera PHP-konfigurationen.';
$strCantLoadMySQL = 'kan inte ladda MySQL-till�gg,<br />var god och kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda ut�kningarna iconv eller recode som beh�vs f�r teckenupps�ttningsomvandling. Konfigurera php f�r att till�ta dessa ut�kningar eller st�ng av teckenupps�ttningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn p� index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte anv�nda funktionerna iconv, libiconv eller recode_string n�r ut�kade rapporter ska laddas. Kontrollera din php-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Vagnretur: \\r';
$strCaseInsensitive = 'skiftl�gesok�nsligt';
$strCaseSensitive = 'skiftl�gesk�nsligt';
$strCentralEuropean = 'Centraleuropeisk';
$strChange = '�ndra';
$strChangeCopyMode = 'Skapa en ny anv�ndare med samma privilegier och ...';
$strChangeCopyModeCopy = '... beh�ll den gamla.';
$strChangeCopyModeDeleteAndReload = ' ... ta bort den gamla fr�n anv�ndartabellerna och ladda om privilegierna efter�t.';
$strChangeCopyModeJustDelete = ' ... ta bort den gamla fr�n anv�ndartabellerna.';
$strChangeCopyModeRevoke = ' ... upph�v alla aktiva privilegier fr�n dan gamla och ta bort den efter�t.';
$strChangeCopyUser = '�ndra inloggningsinformation / Kopiera anv�ndare';
$strChangeDisplay = 'V�lj f�lt som ska visas';
$strChangePassword = 'Byt l�senord';
$strCharset = 'Teckenupps�ttning';
$strCharsetOfFile = 'Filens teckenupps�ttning:';
$strCharsets = 'Teckenupps�ttningar';
$strCharsetsAndCollations = 'Teckenupps�ttningar och kollationeringar';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Kontrollera databasprivilegier';
$strCheckPrivs = 'Kontrollera privilegier';
$strCheckPrivsLong = 'Kontrollera privilegier f�r databas &quot;%s&quot;.';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'V�lj en sida att redigera';
$strColComFeat = 'Visning av kolumnkommentarer';
$strCollation = 'Kollationering';
$strColumn = 'Kolumn';
$strColumnNames = 'Kolumn-namn';
$strColumnPrivileges = 'Kolumnspecifika privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Kompletta infogningar';
$strCompression = 'Komprimering';
$strConfigFileError = 'phpMyAdmin kunde inte l�sa din konfigurationsfil!<br />Detta kan intr�ffa om php hittar ett fel i den eller om php inte hittar filen.<br />Anropa konfigurationsfilen direkt mha l�nken nedan och l�s php:s felmeddelande(n) som du erh�ller. I de flesta fall saknas ett citationstecken eller ett semikolon n�gonstans.<br />Om du erh�ller en tom sida �r allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna f�r tabellen %s';
$strConfirm = 'Vill du verkligen g�ra det?';
$strConnections = 'Uppkopplingar';
$strConstraintsForDumped = 'Restriktioner f�r dumpade tabeller';
$strConstraintsForTable = 'Restriktioner f�r tabell';
$strCookiesRequired = 'Kakor (cookies) m�ste till�tas f�r att g� vidare.';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCopyTableSameNames = 'Kan inte kopiera tabell till samma namn!';
$strCouldNotKill = 'phpMyAdmin kunde inte d�da tr�d %s. Troligtvis har den redan avslutats.';
$strCreate = 'Skapa';
$strCreateIndex = 'Skapa ett index f�r&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCreatePdfFeat = 'Skapande av PDF-sidor';
$strCriteria = 'Villkor';
$strCroatian = 'Kroatisk';
$strCyrillic = 'Kyrillisk';
$strCzech = 'Tjeckisk';

$strDBComment = 'Databaskommentar: ';
$strDBGContext = 'Inneh�ll';
$strDBGContextID = 'Inneh�lls-ID';
$strDBGHits = 'Tr�ffar';
$strDBGLine = 'Rad';
$strDBGMaxTimeMs = 'Max tid, ms';
$strDBGMinTimeMs = 'Min tid, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Tid/tr�ff, ms';
$strDBGTotalTimeMs = 'Total tid, ms';
$strDanish = 'Dansk';
$strData = 'Data';
$strDataDict = 'Datalexikon';
$strDataOnly = 'Enbart data';
$strDatabase = 'Databas ';
$strDatabaseExportOptions = 'Exportalternativ f�r databas';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabaseNoTable = 'Denna databas inneh�ller ingen tabell!';
$strDatabaseWildcard = 'Databas (jokertecken till�tna):';
$strDatabases = 'Databaser';
$strDatabasesDropped = '%s databaser har tagits bort.';
$strDatabasesStats = 'Databas-statistik';
$strDatabasesStatsDisable = 'St�ng av statistik';
$strDatabasesStatsEnable = 'Sl� p� statistik';
$strDatabasesStatsHeavyTraffic = 'Anm: Att sl� p� databastatistik h�r kan orsaka tung trafik mellan webb- och MySQL-servern.';
$strDbPrivileges = 'Databasspecifika privilegier';
$strDbSpecific = 'databasspecifik';
$strDefault = 'Standard';
$strDefaultValueHelp = 'F�r standardv�rden, ange endast ett enstaka v�rde, utan bak�tstreck eller citattecken, i formatet: a';
$strDelOld = 'Nuvarande sida har referenser till tabeller som inte l�ngre existerar. Vill du ta bort dessa referenser?';
$strDelete = 'Radera';
$strDeleteAndFlush = 'Ta bort anv�ndarna och ladda om privilegierna efter�t.';
$strDeleteAndFlushDescr = 'Detta �r det renaste s�ttet, men omladdning av privilegierna kan ta en stund.';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeleteUserMessage = 'Du har tagit bort anv�ndaren %s.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleting = 'Tar bort %s';
$strDescending = 'Fallande';
$strDescription = 'Beskrivning';
$strDictionary = 'lexikon';
$strDisabled = 'Avaktiverat';
$strDisplay = 'Visa';
$strDisplayFeat = 'Visningsfunktionaliteter';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utf�r en "Query by Example" (jokertecken: "%")';
$strDoYouReally = 'Vill du verkligen ';
$strDocu = 'Dokumentation';
$strDrop = 'Radera';
$strDropDB = 'Radera databas %s';
$strDropSelectedDatabases = 'Ta bort markerade databaser';
$strDropTable = 'Radera tabell';
$strDropUsersDb = 'Ta bort databaserna med samma namn som anv�ndarna.';
$strDumpComments = 'Inkludera kolumnkommentarer som kommentarer bland SQL-satserna';
$strDumpSaved = 'SQL-satserna har sparats till filen %s.';
$strDumpXRows = 'Visa %s rader med b�rjan p� rad %s.';
$strDumpingData = 'Data i tabell';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = '�ndra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnabled = 'Aktiverat';
$strEnd = 'Slutet';
$strEndCut = 'SLUT URKLIPP';
$strEndRaw = 'SLUT R�TEXT';
$strEnglish = 'Engelsk';
$strEnglishPrivileges = ' Obs! MySQL-privilegiumnamn anges p� engelska ';
$strError = 'Fel';
$strEstonian = 'Estnisk';
$strExcelOptions = 'Excel-alternativ';
$strExecuteBookmarked = 'Utf�r bokm�rkt fr�ga';
$strExplain = 'F�rklara SQL-kod';
$strExport = 'Exportera';
$strExportToXML = 'Exportera till XML-format';
$strExtendedInserts = 'Ut�kade infogningar';
$strExtra = 'Extra';

$strFailedAttempts = 'Misslyckade f�rs�k';
$strField = 'F�lt';
$strFieldHasBeenDropped = 'F�ltet %s har tagits bort';
$strFields = 'F�lt';
$strFieldsEmpty = ' Antalet f�lt �r noll! ';
$strFieldsEnclosedBy = 'F�lten omges av';
$strFieldsEscapedBy = 'Specialtecken i f�lt f�reg�s av';
$strFieldsTerminatedBy = 'F�lten avslutas med';
$strFileAlreadyExists = 'Filen %s finns redan p� servern, �ndra filnamnet eller kryssa i skriv �ver-alternativet.';
$strFileCouldNotBeRead = 'Filen kunde inte l�sas';
$strFileNameTemplate = 'Mall f�r filnamn';
$strFileNameTemplateHelp = 'Anv�nd __DB__ f�r databasnamn, __TABLE__ f�r tabellnamn och %sstrftime%s-alternativ f�r specificering av tid. Fil�ndelse l�ggs till automagiskt. All annan text kommer att bevaras.';
$strFileNameTemplateRemember = 'kom ih�g mall';
$strFixed = 'fast';
$strFlushPrivilegesNote = 'Anm: phpMyAdmin h�mtar anv�ndarnas privilegier direkt fr�n MySQL:s privilegiumtabeller. Inneh�llet i dessa tabeller kan skilja sig fr�n privilegierna som servern anv�nder ifall manuella �ndringar har gjorts. I detta fall b�r du %sladda om privilegierna%s innan du forts�tter.';
$strFlushTable = 'Rensa tabell';
$strFormEmpty = 'V�rde saknas i formul�ret!';
$strFormat = 'Format';
$strFullText = 'Fullst�ndiga texter';
$strFunction = 'Funktion';

$strGenBy = 'Genererad av';
$strGenTime = 'Skapad';
$strGeneralRelationFeat = 'Allm�nna relationsfunktionaliteter';
$strGerman = 'Tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globala privilegier';
$strGlobalValue = 'Globalt v�rde';
$strGo = 'K�r';
$strGrantOption = 'Grant';
$strGrants = 'Beh�righeter';
$strGreek = 'Grekisk';
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du m�ste v�lja minst en kolumn som ska visas';
$strHebrew = 'Hebreisk';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'V�rd';
$strHostEmpty = 'V�rdnamnet �r tomt!';
$strHungarian = 'Ungersk';

$strId = 'ID';
$strIdxFulltext = 'Heltext';
$strIfYouWish = 'Om du vill ladda enbart n�gra av tabellens kolumner, ange en kommaseparerad f�ltlista.';
$strIgnore = 'Ignorera';
$strIgnoringFile = 'Ignorerar fil %s';
$strImportDocSQL = 'Importera docSQL-filer';
$strImportFiles = 'Importera filer';
$strImportFinished = 'Importen avslutad';
$strInUse = 'anv�nds';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexes = 'Index';
$strInnodbStat = 'InnoDB-status';
$strInsecureMySQL = 'Din konfigurationsfil inneh�ller inst�llningar (root-konto utan l�senord) som motsvarar MySQL:s privilegierade standardkonto. Din MySQL-server k�rs med denna standardinst�llning och �r �ppen f�r intr�ng, s� du b�r verkligen t�ppa till detta s�kerhetsh�l.';
$strInsert = 'L�gg till';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertNewRow = 'L�gg till ny rad';
$strInsertTextfiles = 'Importera data fr�n textfil till tabellen';
$strInsertedRowId = 'Tillagd rads id:';
$strInsertedRows = 'Tillagda rader:';
$strInstructions = 'Instruktioner';
$strInternalNotNecessary = '* En intern relation �r inte n�dv�ndig n�r den �ven finns i InnoDB.';
$strInternalRelations = 'Interna relationer';
$strInvalidName = '"%s" �r ett reserverat ord, du kan inte anv�nda det som ett namn p� en databas/tabell/f�lt.';

$strJapanese = 'Japansk';
$strJumpToDB = 'Hoppa till databas &quot;%s&quot;.';
$strJustDelete = 'Ta bara bort anv�ndarna fr�n privilegiumtabellerna.';
$strJustDeleteDescr = 'De &quot;borttagna&quot; anv�ndarna kommer fortfarande kunna komma �t servern som vanligt tills privilegierna laddas om.';

$strKeepPass = '�ndra inte l�senordet';
$strKeyname = 'Nyckel';;
$strKill = 'D�da';
$strKorean = 'Koreansk';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX-alternativ';
$strLandscape = 'Liggande';
$strLatexCaption = 'Tabellrubrik';
$strLatexContent = 'Inneh�ll i tabell __TABLE__';
$strLatexContinued = '(forts�ttning)';
$strLatexContinuedCaption = 'Fortsatt tabellrubrik';
$strLatexIncludeCaption = 'Inkludera tabellrubrik';
$strLatexLabel = 'Etikett';
$strLatexStructure = 'Struktur f�r tabell __TABLE__';
$strLength = 'L�ngd';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'Rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'L�nk ej funnen';
$strLinksTo = 'L�nkar till';
$strLithuanian = 'Litauisk';
$strLoadExplanation = 'Den b�sta metoden �r f�rvald, men du kan byta om den inte fungerar.';
$strLoadMethod = 'LOAD-metod';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Textfilens plats';
$strLogPassword = 'L�senord:';
$strLogServer = 'Server';
$strLogUsername = 'Anv�ndarnamn:';
$strLogin = 'Logga in';
$strLoginInformation = 'Inloggningsinformation';
$strLogout = 'Logga ut';

$strMIME_MIMEtype = 'MIME-typ';
$strMIME_available_mime = 'Tillg�ngliga MIME-typer';
$strMIME_available_transform = 'Tillg�ngliga omvandlingar';
$strMIME_description = 'Beskrivning';
$strMIME_file = 'Filnamn';
$strMIME_nodescription = 'Beskrivning f�r denna omvandling finns inte tillg�nglig.<br />V�nligen fr�ga upphovsmannen vad %s g�r.';
$strMIME_transformation = 'Webbl�saromvandling';
$strMIME_transformation_note = 'F�r en lista med tillg�ngliga omvandlingsparametrar och deras MIME-typomvandlingar, klicka p� %somvandlingsbeskrivningar%s';
$strMIME_transformation_options = 'Omvandlingsparametrar';
$strMIME_transformation_options_note = 'Ange v�rdena f�r omvandlingsparametrar enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_without = 'Kursiverade MIME-typer har inte n�gon separat omvandlingsfunktion';
$strMissingBracket = 'Parantes saknas';
$strModifications = '�ndringarna har sparats';
$strModify = '�ndra';
$strModifyIndexTopic = '�ndra ett index';
$strMoreStatusVars = 'Fler statusvariabler';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMoveTableSameNames = 'Kan inte flytta tabell till samma namn!';
$strMultilingual = 'flerspr�kig';
$strMustSelectFile = 'V�lj filen som du vill importera.';
$strMySQLCharset = 'MySQL teckenupps�ttning';
$strMySQLReloaded = 'MySQL har startats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% k�rs p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNext = 'N�sta';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDatabasesSelected = 'Inga databaser markerade.';
$strNoDescription = 'Ingen beskrivning';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner �r avst�ngda.';
$strNoExplain = 'Utan f�rklaring';
$strNoFrames = 'phpMyAdmin fungerar tyv�rr endast med webbl�sare som hanterar ramar.';
$strNoIndex = 'Inga index �r definierade!';
$strNoIndexPartsDefined = 'Inga delar av index �r definierade!';
$strNoModification = 'Ingen f�r�ndring';
$strNoOptions = 'Detta format har inga alternativ';
$strNoPassword = 'Inget l�senord';
$strNoPermission = 'Webbservern har inte till�telse att spara filen %s.';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoQuery = 'Ingen SQL-fr�ga!';
$strNoRights = 'Du har inte tillr�cklig beh�righet f�r att vara h�r!';
$strNoSpace = 'Otillr�ckligt utrymme f�r att spara filen %s.';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoUsersFound = 'Hittade ingen anv�ndare.';
$strNoUsersSelected = 'Inga anv�ndare markerade.';
$strNoValidateSQL = 'Utan validering';
$strNone = 'Inget';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotOK = 'Inte OK';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNotValidNumber = ' �r inte ett giltigt radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s tr�ff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> tr�ff(ar)';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOftenQuotation = 'Ofta citattecken. Frivilligt inneb�r att bara f�lt av typ \'char\' och \'varchar\' omges av angivet tecken.';
$strOperations = 'Operationer';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur l�sning och skrivning av specialtecken utf�rs.';
$strOptionally = 'Frivilligt';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';
$strOverwriteExisting = 'Skriv �ver befintlig fil(er)';

$strPHP40203 = 'Du anv�nder PHP 4.2.3, vilken har en allvarlig bugg med multi-byte-str�ngar (mbstring). Se PHP:s buggrapport 19404. Denna version av PHP �r inte rekommenderad f�r anv�ndning tillsammans med phpMyAdmin.';
$strPHPVersion = 'PHP-version';
$strPageNumber = 'Sida:';
$strPaperSize = 'Pappersstorlek';
$strPartialText = 'Avkortade texter';
$strPassword = 'L�senord';
$strPasswordChanged = 'L�senordet f�r %s har �ndrats.';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPdfDbSchema = 'Schema f�r databasen "%s" - Sidan %s';
$strPdfInvalidPageNum = 'Odefinierat PDF-sidnummer!';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPdfNoTables = 'Inga tabeller';
$strPerHour = 'per timme';
$strPerMinute = 'per minut';
$strPerSecond = 'per sekund';
$strPhoneBook = 'telefonbok';
$strPhp = 'Skapa PHP-kod';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> M�STE anges i din konfigurationsfil!';
$strPortrait = 'St�ende';
$strPos1 = 'B�rjan';
$strPrevious = 'F�reg�ende';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rnyckel';
$strPrimaryKeyHasBeenDropped = 'Den prim�ra nyckeln har tagits bort';
$strPrimaryKeyName = 'Prim�rnyckelns namn m�ste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�ste</b> vara namnet p� och <b>endast p�</b> en prim�rnyckel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsv�nlig visning';
$strPrintViewFull = 'Utskriftsv�nlig visning (med fullst�ndiga texter)';
$strPrivDescAllPrivileges = 'Inkluderar alla privilegier utom GRANT.';
$strPrivDescAlter = 'Till�ter �ndring av befintliga tabellers struktur.';
$strPrivDescCreateDb = 'Till�ter skapande av nya databaser och tabeller.';
$strPrivDescCreateTbl = 'Till�ter skapande av nya tabeller.';
$strPrivDescCreateTmpTable = 'Till�ter skapande av tempor�ra tabeller.';
$strPrivDescDelete = 'Till�ter borttagning av data.';
$strPrivDescDropDb = 'Till�ter borttagning av databaser och tabeller.';
$strPrivDescDropTbl = 'Till�ter borttagning av tabeller.';
$strPrivDescExecute = 'Till�ter k�rning av lagrade procedurer; Har ingen verkan i denna MySQL-version.';
$strPrivDescFile = 'Till�ter import av data fr�n och export av data till filer.';
$strPrivDescGrant = 'Till�ter till�gg av anv�ndare och privilegier utan omladdning av privilegiumtabellerna.';
$strPrivDescIndex = 'Till�ter skapande och borttagning av index.';
$strPrivDescInsert = 'Till�ter infogning och ers�ttning av data.';
$strPrivDescLockTables = 'Till�ter l�sning av tabeller f�r g�llande tr�d.';
$strPrivDescMaxConnections = 'Begr�nsar antalet nya f�rbindelser anv�ndaren kan �ppna per timme.';
$strPrivDescMaxQuestions = 'Begr�nsar antalet fr�gor anv�ndaren kan skicka till servern per timme.';
$strPrivDescMaxUpdates = 'Begr�nsar antalet kommandon, vilka �ndrar n�gon tabell eller databas, som anv�ndaren kan utf�ra per timme.';
$strPrivDescProcess3 = 'Till�ter d�dande av andra anv�ndares processer.';
$strPrivDescProcess4 = 'Till�ter visning av fullst�ndiga fr�gor i processlistan.';
$strPrivDescReferences = 'Har ingen verkan i denna MySQL-version.';
$strPrivDescReload = 'Till�ter omladdning av serverinst�llningar och rensning av serverns cache.';
$strPrivDescReplClient = 'Ger anv�ndaren r�tt att fr�ga var slavarna / huvudservrarna �r.';
$strPrivDescReplSlave = 'N�dv�ndig f�r replikationsslavar.';
$strPrivDescSelect = 'Till�ter l�sning av data.';
$strPrivDescShowDb = 'Ger tillg�ng till den fullst�ndiga databaslistan.';
$strPrivDescShutdown = 'Till�ter avst�ngning av servern.';
$strPrivDescSuper = 'Till�ter uppkoppling, �ven om maximala antalet f�rbindelser �r n�dd; N�dv�ndig f�r de flesta administrativa funktioner, som att s�tta globala variabler eller d�da andra anv�ndares tr�dar.';
$strPrivDescUpdate = 'Till�ter �ndring av data.';
$strPrivDescUsage = 'Inga privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Privilegierna har laddats om.';
$strProcesslist = 'Processlista';
$strProperties = 'Inst�llningar';
$strPutColNames = 'Ange f�ltnamn p� f�rsta raden';

$strQBE = 'Skapa fr�ga';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryFrame = 'Fr�gef�nster';
$strQueryFrameDebug = 'Avlusningsinformation';
$strQueryFrameDebugBox = 'Aktiva variabler f�r fr�geformul�ret:\nDB: %s\nTabell: %s\nServer: %s\n\nAktuella variabler f�r fr�geformul�ret:\nDB: %s\nTabell: %s\nServer: %s\n\n�ppnarens plats: %s\nRamverkets plats: %s.';
$strQueryOnDb = 'SQL-fr�ga i databas <b>%s</b>:';
$strQuerySQLHistory = 'SQL-historik';
$strQueryStatistics = '<b>Fr�gestatistik</b>: %s fr�gor har skickats till servern sedan den startade.';
$strQueryTime = 'Fr�gan tog %01.4f sek';
$strQueryType = 'Typ av fr�ga';
$strQueryWindowLock = 'Skriv inte �ver denna fr�ga utifr�n detta f�nster';

$strReType = 'Skriv igen';
$strReceived = 'Mottagna';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRelationNotWorking = 'Den extra funktionaliteten f�r att hantera l�nkade tabeller har avaktiverats. %sVisa orsaken%s.';
$strRelationView = 'Visa relationer';
$strRelationalSchema = 'Relationsschema';
$strRelations = 'Relationer';
$strReloadFailed = 'Omladdning av MySQL misslyckades.';
$strReloadMySQL = 'Ladda om MySQL';
$strReloadingThePrivileges = 'Laddar om privilegierna';
$strRememberReload = 'Kom ih�g att ladda om MySQL.';
$strRemoveSelectedUsers = 'Ta bort markerade anv�ndare';
$strRenameTable = 'D�p om tabellen till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ers�tt';
$strReplaceNULLBy = 'Ers�tt NULL med';
$strReplaceTable = 'Ers�tt data i tabell';
$strReset = 'Nollst�ll';
$strResourceLimits = 'Resursbegr�nsningar';
$strRevoke = 'Upph�v';
$strRevokeAndDelete = 'Upph�v anv�ndarnas alla aktiva privilegier och ta bort anv�ndarna efter�t.';
$strRevokeAndDeleteDescr = 'Anv�ndarna kommer fortfarande ha kvar privilegiet USAGE tills privilegierna laddas om.';
$strRevokeGrant = 'Upph�v Grant';
$strRevokeGrantMessage = 'Du har upph�vt Grant-privilegiet f�r %s';
$strRevokeMessage = 'Du har upph�vt privilegierna f�r %s';
$strRevokePriv = 'Upph�v privilegier';
$strRowLength = 'Radl�ngd';
$strRowSize = 'Radstorlek';
$strRows = 'Rader';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowsModeFlippedHorizontal = 'v�gr�tt (roterade rubriker)';
$strRowsModeHorizontal = 'v�gr�tt';
$strRowsModeOptions = 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical = 'lodr�tt';
$strRowsStatistic = 'Radstatistik';
$strRunQuery = 'K�r fr�ga';
$strRunSQLQuery = 'K�r SQL-fr�ga/fr�gor i databasen %s';
$strRunning = 'k�rs p� %s';
$strRussian = 'Rysk';

$strSQL = 'SQL';
$strSQLOptions = 'SQL-alternativ';
$strSQLParserBugMessage = 'Det �r m�jligt att du har hittat en bugg i SQL-analysatorn. Var god granska din fr�ga noga och kontrollera att citationstecknen �r korrekta och matchar varandra. En annan m�jlig felorsak kan vara att du �verf�r en fil med bin�rkod som inte ligger inom citationstecken. Du kan �ven testa din fr�ga i MySQL:s kommandoradsgr�nssnitt. Felmeddelandet fr�n MySQL-servern nedan, om det finns n�got, kan ocks� hj�lpa dig att analysera problemet. Om du fortfarande har problem eller om SQL-analysatorn misslyckas n�r kommandoradsgr�nssnittet lyckas, var v�nlig reducera din inmatning av SQL-fr�gor till den enda fr�ga som orsakar problem och skicka en buggrapport med datastycket i URKLIPP-sektionen nedan:';
$strSQLParserUserError = 'Det verkar vara ett fel i din SQL-fr�ga. Felmeddelandet fr�n MySQL-servern nedan, om det finns n�got, kan ocks� hj�lpa dig att analysera problemet.';
$strSQLQuery = 'SQL-fr�ga';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ogiltig identifierare';
$strSQPBugUnclosedQuote = 'Oavslutat citat';
$strSQPBugUnknownPunctuation = 'Ok�nd interpunktion i str�ng';
$strSave = 'Spara';
$strSaveOnServer = 'Spara p� servern i katalogen %s';
$strScaleFactorSmall = 'Skalfaktorn �r f�r liten f�r att schemat ska f� plats p� en sida';
$strSearch = 'S�k';
$strSearchFormTitle = 'S�k i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller v�rde(n) att s�ka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som regulj�rt uttryck';
$strSearchResultsFor = 'Resultat av s�kning efter "<i>%s</i>" %s:';
$strSearchType = 'Hitta:';
$strSecretRequired = 'Konfigurationsfilen beh�ver nu ett hemligt l�senord (blowfish_secret).';
$strSelect = 'V�lj';
$strSelectADb = 'V�lj en databas';
$strSelectAll = 'Markera alla';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectNumRows = 'i fr�ga';
$strSelectTables = 'V�lj tabeller';
$strSend = 'Spara som fil';
$strSent = 'Skickade';
$strServer = 'Server %s';
$strServerChoice = 'Serverval';
$strServerStatus = 'K�rningsinformation';
$strServerStatusUptime = 'Denna MySQL-server har k�rts i %s. Den startade den %s.';
$strServerTabProcesslist = 'Processer';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertrafik</b>: Dessa variabler visar statistik f�r n�tverkstrafiken hos denna MySQL-server sedan den startade.';
$strServerVars = 'Servervariabler och inst�llningar';
$strServerVersion = 'Serverversion';
$strSessionValue = 'Sessionsv�rde';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (t.ex. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa f�rger';
$strShowCols = 'Visa kolumner';
$strShowDatadictAs = 'Format f�r datalexikon';
$strShowFullQueries = 'Visa fullst�ndiga fr�gor';
$strShowGrid = 'Visa rutn�t';
$strShowPHPInfo = 'Visa PHP-information';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa fr�gan h�r igen ';
$strShowingRecords = 'Visar rader ';
$strSimplifiedChinese = 'F�renklad kinesiska';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSortByKey = 'Sortera efter nyckel';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strStatCheckTime = 'Senaste kontroll';
$strStatCreateTime = 'Skapades';
$strStatUpdateTime = 'Senaste uppdatering';
$strStatement = 'Uppgift';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'L�gg till \'radera tabell\'';
$strStrucExcelCSV = 'CSV f�r MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'F�resl� tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSum = 'Summa';
$strSwedish = 'Svensk';
$strSwitchToTable = 'Byt till kopierad tabell';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har t�mts';
$strTableHasBeenFlushed = 'Tabellen %s har rengjorts';
$strTableMaintenance = 'Tabellunderh�ll';
$strTableOfContents = 'Inneh�llsf�rteckning';
$strTableOptions = 'Tabellalternativ';
$strTableStructure = 'Struktur f�r tabell';
$strTableType = 'Tabelltyp';
$strTables = '%s tabell(er)';
$strTblPrivileges = 'Tabellspecifika privilegier';
$strTextAreaLength = ' P� grund av dess l�ngd,<br /> kanske detta f�lt inte kan redigeras ';
$strThai = 'Thail�ndsk';
$strTheContent = 'Filens inneh�ll har importerats.';
$strTheContents = 'Filens inneh�ll ers�tter den valda tabellens rader som har identiska prim�ra eller unika nycklar.';
$strTheTerminator = 'F�ltavslutare.';
$strThisHost = 'Denna v�rd';
$strThisNotDirectory = 'Detta var inte en katalog';
$strThreadSuccessfullyKilled = 'Tr�d %s d�dades med framg�ng.';
$strTime = 'Tid';
$strToggleScratchboard = 'Visa/d�lj skisstavla';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraditionalChinese = 'Traditionell kinesiska';
$strTraffic = 'Trafik';
$strTransformation_image_jpeg__inline = 'Visar en klickbar tumnagelbild; parametrar: bredd,h�jd i pixlar (beh�ller originalproportionerna)';
$strTransformation_image_jpeg__link = 'Visar en l�nk till denna bild (dvs direkt blob-nedladdning).';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Tar ett TIME, TIMESTAMP eller DATETIME-f�lt och formaterar det enligt ditt lokala datumformat. F�rsta parametern �r f�rskjutningen (i timmar) som kommer att l�ggas till tidsst�mpeln (standardv�rde: 0). Andra parametern �r ett annorlunda datumformat enligt tillg�ngliga parametrar f�r PHP:s strftime().';
$strTransformation_text_plain__external = 'ENDAST LINUX: Startar en extern applikation och skickar f�ltdata till den via standard-indata. Returnerar applikationens standard-utdata. Standard �r Tidy, f�r att snygga till HTML-kod. Av s�kerhetssk�l m�ste du manuellt redigera filen libraries/transformations/text_plain__external.inc.php och infoga verktygen du till�ter ska f� k�ras. Den f�rsta parametern �r d� numret f�r det program som du vill anv�nda och den andra parametern �r parametrarna f�r programmet. Om den tredje parametern s�tts till 1 kommer utdata konverteras mha htmlspecialchars() (standardv�rde: 1). Om den fj�rde parametern s�tts till 1 kommer en NOWRAP l�ggas till inneh�llscellen s� att hela utdata kommer att visas utan omformatering (standardv�rde: 1).';
$strTransformation_text_plain__formatted = 'Bevarar f�ltets originalformatering. Utan bak�tstreck f�re specialtecken.';
$strTransformation_text_plain__imagelink = 'Visar en bild och en l�nk, f�ltet inneh�ller filnamnet; f�rsta parametern �r ett prefix s�som "http://domain.com/", andra parametern �r bredden i pixlar, tredje �r h�jden.';
$strTransformation_text_plain__link = 'Visar en l�nk, f�ltet inneh�ller filnamnet; f�rsta parametern �r ett prefix s�som "http://domain.com/", andra parametern �r en titel f�r l�nken.';
$strTransformation_text_plain__substr = 'Visar endast del av en str�ng. F�rsta parametern specificerar var i texten utdata startar (standardv�rde: 0). Andra parametern specificerar hur mycket text som returneras. Om det utel�mnas, returneras all resterande text. Den tredje parametern definierar vilka tecken som kommer att l�ggas till i slutet p� den returnerade delstr�ngen  (standardv�rde: ...).';
$strTransformation_text_plain__unformatted = 'Visar HTML-kod som HTML-specialtecken. HTML-formatering visas inte.';
$strTruncateQueries = 'Korta av visade fr�gor';
$strTurkish = 'Turkisk';
$strType = 'Typ';

$strUkrainian = 'Ukrainsk';
$strUncheckAll = 'Avmarkera alla';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ok�nd';
$strUnselectAll = 'Avmarkera alla';
$strUpdComTab = 'Se dokumentationen f�r uppdatering av din tabell Column_comments';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna f�r %s.';
$strUpdateProfile = 'Uppdatera profil:';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUpgrade = 'Du b�r uppgradera till %s %s eller senare.';
$strUsage = 'Anv�ndning';
$strUseBackquotes = 'Anv�nd bak�tcitat runt tabell- och f�ltnamn';
$strUseHostTable = 'Anv�nd v�rdtabell';
$strUseTables = 'Anv�nd tabeller';
$strUseTextField = 'Anv�nd textf�ltet';
$strUseThisValue = 'Anv�nd detta v�rde';
$strUser = 'Anv�ndare';
$strUserAlreadyExists = 'Anv�ndaren %s finns redan!';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUserNotFound = 'Den markerade anv�ndaren kunde inte hittas i privilegiumtabellen.';
$strUserOverview = 'Anv�ndar�versikt';
$strUsers = 'Anv�ndare';
$strUsersDeleted = 'De markerade anv�ndarna har tagits bort.';
$strUsersHavingAccessToDb = 'Anv�ndare som har tillg�ng till &quot;%s&quot;';

$strValidateSQL = 'Validera SQL-kod';
$strValidatorError = 'SQL-validatorn kunde inte initieras. Kontrollera att du har installerat de n�dv�ndiga PHP-ut�kningarna enligt %sdokumentationen%s.';
$strValue = 'V�rde';
$strVar = 'Variabel';
$strViewDump = 'Visa SQL-satser f�r tabellen';
$strViewDumpDB = 'Visa SQL-satser f�r databasen';
$strViewDumpDatabases = 'Visa SQL-satser f�r databaser';

$strWebServerUploadDirectory = 'Uppladdningskatalog p� webbserver';
$strWebServerUploadDirectoryError = 'Katalogen som du konfigurerat f�r uppladdning kan inte n�s';
$strWelcome = 'V�lkommen till %s';
$strWestEuropean = 'V�steuropeisk';
$strWildcard = 'jokertecken';
$strWindowNotFound = 'M�lf�nstret kunde inte uppdateras. Orsaken kan vara att du st�ngt f�r�ldraf�nstret eller att din webbl�sares s�kerhetsinst�llningar blockerar uppdateringar mellan f�nster.';
$strWithChecked = 'Med markerade:';
$strWritingCommentNotPossible = 'Skrivning av kommentar inte m�jlig';
$strWritingRelationNotPossible = 'Skrivning av relation inte m�jlig';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Anm: Genom att s�tta dessa alternativ till 0 (noll) tas begr�nsningarna bort.';
$strZip = '"zippad"';
// To translate

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Chech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
?>
