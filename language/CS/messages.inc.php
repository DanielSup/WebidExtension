<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2017 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/

if (!defined('InWeBid')) {
    exit();
}

// CHARSET ENCODING
// Change the charset according to the language used in this file.
$CHARSET = 'UTF-8';
// DOCUMENT DIRECTION
// Change the $DOCDIR variable below according to the document direction needed
// by the language you are using.
// Possible values are:
// - ltr (default) - means left-to-right document (almost any language)
// - rtl - means right-to-left document (i.e. arabic, hebrew, ect).
$DOCDIR = 'ltr';
// Error messages and user interface messages are below. Translate them taking care of leaving
// The PHP and HTML tags unchanged.
// Error messages =============================================================
$ERR_001 = 'Chyba přístupu k databázi. Obraťte se na správce webu.';
$ERR_002 = 'Chybí jméno';
$ERR_003 = 'Uživatelské jméno chybí';
$ERR_004 = 'Chybí heslo';
$ERR_005 = 'Prosím, opakujte své heslo';
$ERR_006 = 'Hesla se neshodují';
$ERR_007 = 'Chybí e-mailová adresa';
$ERR_008 = 'Vložte prosím platnou e-mailovou adresu';
$ERR_009 = 'Uživatelské jméno již v databázi existuje';
$ERR_010 = 'Uživatelské jméno je příliš krátké (min. 6 znaků)';
$ERR_011 = 'Heslo je příliš krátké (min. 6 znaků)';
$ERR_017 = 'Název položky chybí';
$ERR_018 = 'Popis položky chybí';
$ERR_019 = 'Počáteční nabídka chybí';
$ERR_020 = 'Pole minimálního množství není správné';
$ERR_021 = 'Chybí rezervní cena';
$ERR_022 = 'Zadaná cena není správná';
$ERR_023 = 'Vyberte kategorii zboží';
$ERR_024 = 'Vyberte způsob platby';
$ERR_025 = 'Neplatný uživatel';
$ERR_026 = 'Neplatné heslo';
$ERR_030 = 'Pole musí být číselná a ve formátu nnnn.nn';
$ERR_031 = 'Formulář, který zadáváte, není úplný';
$ERR_032 = 'Jedna nebo obě e-mailové adresy nejsou správné';
$ERR_033 = 'Neplatný potvrzovací odkaz';
$ERR_037 = 'Klíčové slovo pro hledání nemůže být prázdné';
$ERR_038 = 'Nesprávné přihlášení';
$ERR_039 = 'Už jste svou registraci potvrdili.';
$ERR_040 = 'Jste vítězný uchazeč a nemůžete umístit nižší nabídku, než byla vaše předchozí maximální nabídka.';
$ERR_043 = 'Neplatný formát pole: musí být číselný';
$ERR_044 = 'Uživatel musí být členem alespoň jedné skupiny';
$ERR_047 = 'Chybí povinná pole';
$ERR_048 = 'nesprávné přihlášení';
$ERR_049 = 'Název kategorie nesmí být prázdný';
$ERR_051 = 'Vložte prosím platný počet číslic';
$ERR_054 = 'Vyplňte prosím obě pole hesla';
$ERR_055 = 'Uživatel <i> %s </i> již v databázi existuje';
$ERR_056 = 'Chybí hodnota přírůstku nabídky';
$ERR_057 = 'Hodnoty přírůstku nabídky musí být číselné';
$ERR_058 = 'Nesprávný formát peněz.';
$ERR_059 = 'Vaše předchozí nabídka pro tuto aukci je vyšší než vaše aktuální nabídka. <br> V holandských aukcích nemůžete podat nabídku, pokud vaše předchozí <b> částka nabídky násobí množství </b> je větší než vaše <b> částka aktuální nabídka násobí množství </b>.';
$ERR_060 = 'Datum zahájení nemůže být v minulosti.';
$ERR_061 = 'Nákupní cena, kterou jste vložili, není správná';
$ERR_062 = 'V holandské aukci nemůžete stanovit rezervní cenu';
$ERR_063 = 'V holandské aukci nesmíte používat vlastní přírůstek';
$ERR_064 = 'V holandské aukci nesmíte používat funkci Koupit';
$ERR_067 = 'Chybí požadovaná pole (všechna pole jsou povinná).';
$ERR_069 = 'Převod měny selhal';
$ERR_070 = 'Tato zpráva neexistuje';
$ERR_071 = 'Uživatelské jméno je neplatné, může obsahovat pouze písmena a čísla';
$ERR_072 = 'Musíte zadat částku nabídky';
$ERR_073 = 'Nemůžete nabídnout aukci, která ještě nebyla zahájena';
$ERR_074 = 'Již jste zanechali zpětnou vazbu k této transakci';
$ERR_076 = 'Neplatná kombinace uživatelského jména a e-mailu';
$ERR_077 = 'Platný žeton vypršel';
$ERR_078 = 'Musíte souhlasit s podmínkami';
$ERR_079 = 'Zadaná cena za dopravu není správná';
$ERR_080 = 'Dodaná dodací cena není správná';
$ERR_081 = 'Vámi zadaný zůstatek není platný';
$ERR_082 = 'Datum ukončení aukcí musí být po datu zahájení';

$ERR_100 = 'Uživatel neexistuje';
$ERR_101 = 'Špatné heslo';
$ERR_103 = 'Nemůžete se ohodnotit';
$ERR_104 = 'Všechna políčka jsou povinná';
$ERR_105 = 'přihlašovací jméno neexistuje';
$ERR_107 = 'Uživatelské jméno je příliš krátké';
$ERR_108 = 'Heslo je příliš krátké';
$ERR_109 = 'Hesla se neshodují';
$ERR_110 = 'E-mailová adresa je nesprávná';
$ERR_111 = 'Takový uživatel již existuje';
$ERR_112 = 'Chybí data';
$ERR_113 = 'Chcete-li se zaregistrovat, musíte být starší 18 let';
$ERR_114 = 'Pro tuto kategorii nejsou aktivní žádné aukce';
$ERR_115 = 'E-mailová adresa již byla použita';
$ERR_117 = 'Neplatné datum narození';
$ERR_122 = 'Nebyla nalezena žádná aukce';
$ERR_600 = 'Neplatný typ aukce';
$ERR_601 = 'Pole množství není správné, musí být větší než 0';
$ERR_602 = 'Obrázky musí být ve formátu GIF, JPG nebo PNG';
$ERR_603 = 'Obrázek je příliš velký.';
$ERR_606 = 'Neplatná aukce';
$ERR_607 = 'Vaše nabídka je pod minimální nabídkou';
$ERR_608 = 'Zadané množství není platné, nemůžete nabídnout více položek, než je k dispozici';
$ERR_608a = 'Zadané množství není platné, zadejte platné množství';
$ERR_609 = 'Uživatel neexistuje';
$ERR_610 = 'Vyplňte své uživatelské jméno a heslo';
$ERR_611 = 'heslo je nesprávné';
$ERR_612 = 'Nemůžete nabídnout vlastní aukci';
$ERR_614 = 'Tato aukce je uzavřena';
$ERR_616 = 'Poštovní směrovací číslo je příliš krátké';
$ERR_617 = 'Telefonní číslo je nesprávné';
$ERR_618 = 'Váš účet byl pozastaven správcem.';
$ERR_619 = 'Tato aukce byla pozastavena';
$ERR_620 = 'Váš účet dosud nebyl aktivován. Zkontrolujte prosím ve svých e-mailech aktivační odkaz.';
$ERR_621 = 'Váš účet musí být aktivován správcem.';
$ERR_622 = 'Žádná taková aukce.';
$ERR_623 = 'Aukce, kterou se snažíte najít, nikdy neexistovala nebo byla odstraněna.';
$ERR_624 = 'Žádná zpráva k odeslání';
$ERR_700 = 'Nesprávný formát data';
$ERR_704 = 'Nesmíte opustit zpětnou vazbu o tomto uživateli! <br> Tato aukce není uzavřena!';
$ERR_705 = 'Zpětnou vazbu můžete opustit, pouze pokud máte uzavřenou transakci s tímto uživatelem!';
$ERR_709 = 'Obrázek, který jste nahráli, je příliš velký. To nemůže překročit ';
$ERR_710 = 'Nesprávný typ souboru. Povolené typy souborů jsou: GIF, PNG a JPEG';
$ERR_711 = 'Nemůžete koupit, jste prodejce!';
$ERR_712 = '<b> Koupit nyní </b> není pro tuto aukci k dispozici';
$ERR_714 = 'Hodnota relist musí být číselná';
$ERR_715 = 'Nemůžete zvolit relist že mnohokrát';
$ERR_716 = 'Obrázek nebyl nalezen';
$ERR_5033 = 'Chybí e-mailová adresa';
$ERR_5034 = 'Adresa chybí';
$ERR_5035 = 'Město chybí';
$ERR_5036 = 'Provincie chybí';
$ERR_5037 = 'Země chybí';
$ERR_5045 = 'Rezervní cena nesmí být nižší než minimální nabídka';
$ERR_5046 = 'Kupní cena musí být vyšší než minimální nabídka nebo minimální cena';
$ERR_25_0001 = 'Vyberte podkategorii';
$ERR_INVALID_REPORT_REASON = 'Vyberte prosím důvod hlášení';

// UI Messages =============================================================
$MSG['000'] = 'n/a';
$MSG['001'] = 'Registrace nového uživatele';
$MSG['002'] = 'Celé jméno';
$MSG['username'] = 'Uživatelské jméno';
$MSG['password'] = 'Heslo';
$MSG['005'] = 'Potvrďte heslo';
$MSG['006'] = 'Vaše emailová adresa';
$MSG['submit'] = 'Předložit';
$MSG['008'] = 'Vymazat';
$MSG['009'] = 'Adresa';
$MSG['010'] = 'Město';
$MSG['011'] = 'Stát / provincie';
$MSG['012'] = 'PSČ ';
$MSG['013'] = 'Telefon';
$MSG['014'] = 'Země';
$MSG['017'] = 'Název položky';
$MSG['018'] = 'Popis položky';
$MSG['019'] = 'Výchozí obrázek';
$MSG['020'] = 'Vyvolávací cena';
$MSG['021'] = 'minimální cena';
$MSG['022'] = 'Doba trvání';
$MSG['023'] = 'Poštovné';
$MSG['024'] = 'Vaše nové heslo';
$MSG['025'] = 'Způsob doručení';
$MSG['026'] = 'Platební metody';
$MSG['027'] = 'Vyberte kategorii';
$MSG['028'] = 'Prodat položku';
$MSG['no'] = 'Ne';
$MSG['yes'] = 'Ano';
$MSG['031'] = 'Kupující hradí náklady na dopravu';
$MSG['032'] = 'Náklady na dopravu hradí prodejce';
$MSG['033'] = 'Mezinárodní doručení';
$MSG['035'] = 'Resetovat formulář';
$MSG['038'] = 'Požadovaná cena';
$MSG['040'] = 'Odeslat aukci';
$MSG['041'] = 'Kategorie položky';
$MSG['043'] = 'Nelze zaslat do zahraničí';
$MSG['045'] = 'Správa uživatelů';
$MSG['046'] = 'Ve své aukci můžete i nadále <a href="sell.php?mode=recall"> provádět změny </a>';
$MSG['048'] = 'Pole pro registraci uživatele';
$MSG['050'] = '(min 6 znaků)';
$MSG['052'] = 'Přihlásit se';
$MSG['059'] = 'Email odeslán';
$MSG['069'] = 'Trvání aukcí';
$MSG['071'] = 'Aktualizace';
$MSG['072'] = ' uživatelé od vás čekají na zpětnou vazbu';
$MSG['075'] = 'Platební metody';
$MSG['078'] = 'Tabulka kategorií';
$MSG['079'] = 'Vaše aukce byla uzavřena';
$MSG['080'] = 'Resynchronizovat nebo resetovat mezipaměti';
$MSG['081'] = 'Tabulka zemí';
$MSG['084'] = 'Zpráva byla zveřejněna';
$MSG['087'] = 'Popis';
$MSG['088'] = 'do této měny';
$MSG['089'] = 'Změny procesu';
$MSG['092'] = 'Upravte, smažte nebo přidejte platební metody pomocí níže uvedeného formuláře. Toto jsou alternativní možnosti externích plateb. Chcete-li povolit nebo zakázat vestavěné platební brány, podívejte se na stránku <a href="fee_gateways.php"> nastavení platební brány </a>.';
$MSG['094'] = 'Upravit, odstranit nebo přidat země pomocí níže uvedeného formuláře.';
$MSG['095'] = 'Vítejte, nyní jste členem!';
$MSG['095a'] = 'Váš účet byl pozastaven.';
$MSG['095b'] = 'Váš účet byl znovu aktivován.';
$MSG['097'] = 'Dny';
$MSG['098'] = 'registrace potvrzena';
$MSG['099'] = 'Vaše aukce byla potvrzena';
$MSG['100'] = '<h3> Vaše aukce byla nastavena. Bude vám zaslán potvrzovací e-mail. </h3>';
$MSG['101'] = 'Podívejte se na aukci';
$MSG['102'] = 'Aukce # %s , vaše aukce uzavře %s';
$MSG['103'] = ' Vyhledávání ';
$MSG['104'] = 'Procházet ';
$MSG['105'] = 'Zobrazit historii';
$MSG['106'] = 'Poslat příteli';
$MSG['107'] = 'E-mail uživatele';
$MSG['109'] = 'Den';
$MSG['110'] = 'Admin';
$MSG['111'] = 'Aukce zahájena';
$MSG['112'] = 'Aukce končí';
$MSG['113'] = 'Aukční ID';
$MSG['114'] = 'Obrázek není k dispozici';
$MSG['116'] = 'Aktuální nabídka';
$MSG['117'] = 'Nejvyšší uchazeč';
$MSG['118'] = 'Končí uvnitř';
$MSG['119'] = 'Počet nabídek';
$MSG['120'] = 'Zvýšení nabídky';
$MSG['121'] = 'Zde zadejte svou nabídku:';
$MSG['122'] = 'Upravte, smažte nebo přidejte trvání aukce pomocí níže uvedeného formuláře';
$MSG['124'] = 'Minimální nabídka';
$MSG['125'] = 'Prodejce';
$MSG['126'] = 'před pár dny';
$MSG['127'] = 'Počáteční nabídka';
$MSG['128'] = 'Přírůstky nabídek';
$MSG['129'] = 'ID';
$MSG['130'] = 'Nabídka';
$MSG['131'] = 'Kupující';
$MSG['132'] = 'Tabulka překladů';
$MSG['135'] = 'Upravit, odstranit nebo přidat přírůstky pomocí níže uvedeného formuláře. <br>
Buďte opatrní, neexistuje shoda nad hodnotami tabulky.
Musíte se o to sami přesvědčit. Provedená jediná kontrola dat je přes obsah polí (musí být číselný), ale vztah mezi nimi není kontrolován.';
$MSG['137'] = 'Přírůstek';
$MSG['138'] = 'Zpět na aukci';
$MSG['139'] = 'Pošlete tuto aukci příteli';
$MSG['140'] = 'Jméno tvého přítele';
$MSG['141'] = 'E-mail vašeho přítele';
$MSG['143'] = 'Tvůj e-mail';
$MSG['144'] = 'Přidat komentář';
$MSG['146'] = 'Tato aukce byla odeslána ';
$MSG['148'] = 'Nápověda';
$MSG['149'] = 'Můžete kontaktovat tohoto uživatele pomocí níže uvedeného formuláře.';
$MSG['152'] = 'Potvrďte svou nabídku';
$MSG['154'] = 'Nabízíte na:';
$MSG['156'] = 'Vaše nabídka:';
$MSG['159'] = 'Dražitel:';
$MSG['161'] = 'Upravit, odstranit nebo přidat kategorie pomocí níže uvedeného formuláře.';
$MSG['163'] = 'Registrovat!';
$MSG['165'] = 'Kategorie: ';
$MSG['166'] = 'Domů';
$MSG['167'] = 'Obrázek';
$MSG['168'] = 'Aukce';
$MSG['169'] = 'Aktuální nabídka';
$MSG['170'] = 'Nabídky #';
$MSG['171'] = 'Končí v';
$MSG['171a'] = 'Skončilo';
$MSG['175'] = 'Čas';
$MSG['176'] = 'Dražitel';
$MSG['181'] = 'Přihlášení uživatele';
$MSG['183'] = 'Vaše data byla aktualizována';
$MSG['185'] = 'Aktuálně sledujete zpětnou vazbu pro ';
$MSG['187'] = 'Vaše uživatelské jméno';
$MSG['188'] = 'Vaše heslo';
$MSG['189'] = 'Konečná cena';
$MSG['197'] = 'Název aukce';
$MSG['198'] = 'žádné předměty nenalezeny';
$MSG['199'] = 'Vyhledávání';
$MSG['200'] = 'Ahoj, ';
$MSG['203'] = 'Aktivní aukce';
$MSG['204'] = 'Skončené aukce';
$MSG['205'] = 'Váš ovládací panel';
$MSG['206'] = 'Profil uživatele';
$MSG['207'] = 'Zanechte zpětnou vazbu';
$MSG['208'] = 'Zobrazit zpětnou vazbu';
$MSG['209'] = 'Registrovaný uživatel od: ';
$MSG['210'] = 'Kontakt ';
$MSG['211'] = 'Začněte aukci hned';
$MSG['213'] = 'Zobrazit aktivní aukce';
$MSG['214'] = 'Zobrazit skončené aukce';
$MSG['215'] = 'Zapomněli jste heslo?';
$MSG['217'] = 'Na vaši e-mailovou adresu bylo zasláno nové heslo.';
$MSG['219'] = 'Aktivní aukce: ';
$MSG['220'] = 'Skončené aukce: ';
$MSG['221'] = 'Uživatelské přihlášení';
$MSG['222'] = 'Zpětná vazba uživatele';
$MSG['227'] = 'Tvůj komentář ';
$MSG['229'] = 'Nejnovější zpětná vazba:';
$MSG['230'] = 'Zobrazit veškerou zpětnou vazbu';
$MSG['231'] = 'REGISTROVANÍ UŽIVATELÉ';
$MSG['232'] = 'AUKCE ';
$MSG['234'] = '&lt;&lt; Back';
$MSG['235'] = 'Zaregistrujte se nyní';
$MSG['239'] = 'Aukce';
$MSG['240'] = 'Z';
$MSG['241'] = 'Do';
$MSG['242'] = 'Odesláno';
$MSG['243'] = 'Pokud chcete změnit své heslo, vyplňte prosím níže uvedená dvě pole. Jinak je nechte prázdné.';
$MSG['244'] = 'Upravit nastavení';
$MSG['245'] = 'Odhlásit se';
$MSG['248'] = 'Potvrďte svou registraci';
$MSG['249'] = 'Potvrďte';
$MSG['250'] = 'Refuse';
$MSG['251'] = '---- Vyberte zde';
$MSG['252'] = 'Datum narození';
$MSG['257'] = 'Typ aukce';
$MSG['258'] = 'Množství položek';
$MSG['259'] = 'Položka';
$MSG['260'] = 'Nebo začátek v:';
$MSG['261'] = 'Typ aukce';
$MSG['263'] = 'Výše poplatku';
$MSG['264'] = 'Stále můžete ';
$MSG['265'] = 'Udělej změny';
$MSG['266'] = ' do této aukce';
$MSG['267'] = 'Pokud jste se dostali na tuto stránku, vy nebo někdo, kdo tvrdí, že jste vy, jste se zaregistrovali na tomto webu.
<br> Chcete-li potvrdit registraci, jednoduše stiskněte tlačítko <b> Potvrdit </b> níže.
<br> Pokud jste se nechtěli registrovat a chcete smazat svá data z naší databáze, použijte tlačítko <b> Odmítnout </b>.';
$MSG['268'] = 'Další možnosti';
$MSG['270'] = 'Zpět';
$MSG['271'] = 'Vaše nabídka byla zpracována';
$MSG['272'] = 'Aukce:';
$MSG['273'] = 'Udělat si představu';
$MSG['274'] = 'Směle do toho !';
$MSG['275'] = 'Pojď !';
$MSG['275a'] = 'Přihlásit se';
$MSG['276'] = 'Kategorie';
$MSG['277'] = 'Všechny kategorie';
$MSG['278'] = 'Poslední aukce';
$MSG['279'] = 'Nejsledovanější položky';
$MSG['280'] = 'Právě končící !';
$MSG['281'] = 'Sloupec nápovědy';
$MSG['282'] = 'Novinky';
$MSG['283'] = 'minimum';
$MSG['284'] = 'Množství';
$MSG['287'] = 'Kategorie';
$MSG['290'] = 'Celkem položek:';
$MSG['292'] = 'Zvýrazněte';
$MSG['293'] = 'Přezdívka';
$MSG['294'] = 'Jméno';
$MSG['295'] = 'Země';
$MSG['296'] = 'E-mail';
$MSG['297'] = 'Akce';
$MSG['298'] = 'Upravit';
$MSG['300'] = 'Pozastavit';
$MSG['301'] = 'uživatelé nalezeni v databázi';
$MSG['302'] = 'Jméno';
$MSG['303'] = 'E-mail';
$MSG['310'] = 'Znovu aktivujte';
$MSG['311'] = 'aukce nalezené v databázi';
$MSG['312'] = 'Název';
$MSG['313'] = 'Uživatel';
$MSG['314'] = 'Datum';
$MSG['319'] = 'Doprava';
$MSG['323'] = 'Opravdu chcete tuto aukci pozastavit?';
$MSG['324'] = 'Opravdu chcete tuto aukci znovu aktivovat?';
$MSG['328'] = 'Barva';
$MSG['329'] = 'Umístění obrázku';
$MSG['330'] = 'Děkujeme za potvrzení vaší registrace! <br> Proces registrace byl dokončen a nyní se můžete podílet na aktivitách našich stránek. <br>';
$MSG['331'] = 'Vaše registrace byla trvale odstraněna z naší databáze.';
$MSG['332'] = 'Subjekt';
$MSG['333'] = 'Zpráva';
$MSG['334'] = 'Kontaktovat se s';
$MSG['335'] = 'Kontakt od ';
$MSG['336'] = 'ohledně vaší aukce: ';
$MSG['337'] = 'Vaše zpráva byla odeslána na ';
$MSG['340'] = 'Z';
$MSG['341'] = 'Zobrazit všechny novinky';
$MSG['342'] = ' Zprávy';
$MSG['346'] = 'Časové pásmo';
$MSG['349'] = 'Odpověď';
$MSG['351'] = 'Zpět do doručené pošty';
$MSG['352'] = 'Formát e-mailu';
$MSG['357'] = 'procent';
$MSG['359'] = ' Aktualizováno';
$MSG['365'] = 'Administrátorští uživatelé';
$MSG['368'] = 'Hromadná kategorie přidat <br> <span class = "smallspan"> Stačí zadat názvy kategorií a každou kategorii umístit na nový řádek </span>';
$MSG['385'] = 'Nedávná zpětná vazba';
$MSG['386'] = 'Minulý měsíc';
$MSG['387'] = 'Posledních šest měsíců';
$MSG['388'] = 'Posledních dvanáct měsíců';
$MSG['389'] = 'Zpětná vazba jako prodejce';
$MSG['390'] = 'Zpětná vazba jako kupující';
$MSG['391'] = 'Množství';
$MSG['392'] = 'Typ poplatku';
$MSG['393'] = 'Paušální';
$MSG['394'] = 'Přidat';
$MSG['398'] = 'Odeslat zpravodaj';
$MSG['399'] = 'Hledejte to!';
$MSG['401'] = 'Zásady ochrany osobních údajů';
$MSG['415'] = 'Chyba';
$MSG['417'] = 'Všeobecné';
$MSG['422'] = 'Neuhrazené platby';
$MSG['423'] = 'Úspěšně zaplaceno';
$MSG['424'] = 'Vaše platba byla potvrzena. <br> <br> Děkujeme za Vaši přízeň !';
$MSG['425'] = 'Selhání platby';
$MSG['426'] = 'Vaše platba nebyla zaregistrována nebo byla neplatná. <br> <br> Omlouváme se za nepříjemnosti.';
$MSG['429'] = 'Nebyly předloženy žádné nabídky nebo nebyla splněna minimální cena';
$MSG['430'] = 'Poplatek za registraci uživatele';
$MSG['431'] = 'Aukční poplatky';
$MSG['432'] = 'Poplatek za nastavení aukce';
$MSG['433'] = 'Poplatek za úvodní stránku';
$MSG['434'] = 'Poplatek za zvýraznění položky';
$MSG['435'] = 'Poplatek za nahrání obrázku';
$MSG['436'] = 'Poplatek za formát "kup nyní"';
$MSG['437'] = 'Relistovací poplatek';
$MSG['439'] = 'Poplatek z zvýraznění inzerátu tučným písmem';
$MSG['440'] = 'Poplatek za rezervaci ceny';
$MSG['441'] = 'Vytvořte prosím své uživatelské jméno a heslo';
$MSG['442'] = 'Zadejte své uživatelské jméno a heslo';
$MSG['443'] = '%s má momentálně úplnou schránku, zkuste to znovu později';
$MSG['444'] = 'Zprávy byly smazány';
$MSG['445'] = 'Platební brány';
$MSG['446'] = 'Požadované?';
$MSG['447'] = 'Povoleno?';
$MSG['448'] = 'Skupiny uživatelů';
$MSG['449'] = 'ID skupiny';
$MSG['450'] = 'Skupinové jméno';
$MSG['451'] = 'Počet uživatelů';
$MSG['452'] = 'Přidat / upravit skupinu';
$MSG['453'] = 'Podrobnosti o vítězích';
$MSG['454'] = 'Aukce, které jste vyhráli';
$MSG['455'] = 'Vítěz';
$MSG['457'] = 'Vítězná nabídka';
$MSG['458'] = 'Aukce: ';
$MSG['460'] = 'E-mail prodávajícího';
$MSG['461'] = 'Vaše nejvyšší nabídka';
$MSG['464'] = 'Pokročilé vyhledávání';
$MSG['471'] = 'Nové oznámení o aukcích';
$MSG['472'] = 'Seznam toho, co chci vidět';
$MSG['496'] = 'Kup nyní';
$MSG['497'] = 'Kup Nyní cena';
$MSG['498'] = 'Zboží bylo úspěšně zakoupeno <br>';
$MSG['499'] = 'Celkem obdrženo neutrálních zpětných vazeb: ';
$MSG['500'] = 'Celkem obdrženo pozitivních zpětných vazeb: ';
$MSG['501'] = 'Celkem obdrženo záporných zpětných vazeb: ';
$MSG['502'] = 'Celkem obdrženo zpětných vazeb: ';
$MSG['503'] = 'Zpětná vazba';
$MSG['504'] = 'Komentář';
$MSG['505'] = 'Zpět na profil uživatele';
$MSG['506'] = 'poslána zpětná vazba na: ';
$MSG['507'] = 'Skrýt historii';
$MSG['508'] = 'Nová zpráva';
$MSG['509'] = 'Uživatelská data';
$MSG['510'] = 'Momentálně nejsou k dispozici žádné připomenutí.';
$MSG['511'] = 'Upravit uživatele';
$MSG['512'] = 'Upravit aukci';
$MSG['514'] = '<b> Rezerva nebyla splněna </b>';
$MSG['516'] = 'Správa zpráv';
$MSG['517'] = ' novinky nalezené v databázi.';
$MSG['518'] = 'Přidat nový';
$MSG['519'] = 'Název';
$MSG['520'] = 'Obsah';
$MSG['521'] = 'Aktivovat';
$MSG['522'] = 'Splatné poplatky kupujícího';
$MSG['523'] = 'Poplatky za konečnou cenu';
$MSG['524'] = 'NASTAVENÍ';
$MSG['525'] = 'Správa uživatelů';
$MSG['530'] = 'Uložit změny';
$MSG['534'] = 'Zobrazit text přijetí?';
$MSG['539'] = 'Výběrem možnosti <b> Ano </b> níže způsobí, že WeBid zobrazí text, který vyplníte do textového pole níže na registrační stránce uživatelů těsně před tlačítkem odeslání. <br> To se obvykle používá k zobrazení některých právních poznámek, které uživatelé přijímají při odesílání registračního formuláře.';
$MSG['543'] = 'Zveřejněte tuto otázku';
$MSG['552'] = 'Otázky';
$MSG['555'] = 'Tazatel';
$MSG['557'] = 'Podrobnosti položky';
$MSG['558'] = 'Vytvořeno';
$MSG['559'] = 'Poslední přihlášení';
$MSG['560'] = 'Status';
$MSG['561'] = 'VYMAZAT';
$MSG['562'] = 'Upravit administrátora';
$MSG['563'] = 'Pokud chcete změnit uživatelské heslo, použijte dvě pole níže. Chcete-li zachovat aktuální heslo, nechte je prázdné.';
$MSG['564'] = 'Repeat password';
$MSG['566'] = 'aktivní';
$MSG['567'] = 'neaktivní';
$MSG['569'] = 'Vložit uživatele';
$MSG['570'] = 'Nikdy nepřihlášen';
$MSG['group_no_fees'] = 'Výjimka z poplatků';
$MSG['578'] = 'Může prodat';
$MSG['579'] = 'Může koupit';
$MSG['580'] = 'Automatické přihlášení';
$MSG['581'] = 'Pokračujte na jednu z níže uvedených platebních bran a zaplaťte prodávajícímu částku <b> %s </b>.';
$MSG['582'] = 'Přejděte na jednu z níže uvedených platebních bran a připisujte na váš účet částku <b> %s </b>.';
$MSG['583'] = 'Chcete-li aktivovat svůj účet, přejděte k jedné z níže uvedených platebních bran a zaplaťte poplatek <b> %s </b>.';
$MSG['590'] = 'Chcete-li aukci dokončit, pokračujte k jedné z níže uvedených platebních bran a zaplaťte poplatek <b> %s </b>.';
$MSG['591'] = 'Chcete-li dokončit relistování aukce, pokračujte k jedné z níže uvedených platebních bran a zaplaťte poplatek <b> %s </b>.';
$MSG['592'] = 'Přihlášen jako:';
$MSG['593'] = 'Připomenutí';
$MSG['594'] = 'Akceptační text';
$MSG['603'] = 'Přijímat novinky?';
$MSG['605'] = 'Text zprávy';
$MSG['606'] = 'Kliknutím na tlačítko Uložit změny bude zpravodaj zaslán všem uživatelům, kteří jsou přihlášeni k odběru novinek ve vybrané skupině.';
$MSG['607'] = 'Zasílání novinek';
$MSG['608'] = 'Chtěli byste dostávat náš zpravodaj?';
$MSG['609'] = 'Zaškrtněte NE, chcete-li se odhlásit z našeho zpravodaje';
$MSG['610'] = 'Na obrázku níže vyberte, co chcete ve své miniatuře zobrazit';
$MSG['611'] = '<b> Tato položka byla zobrazena </b>';
$MSG['612'] = '<b> krát </b>';
$MSG['613'] = 'Náhled miniatury';
$MSG['614'] = 'Použijte vestavěnou tabulku proporcionálních přírůstků';
$MSG['615'] = 'Použijte svůj vlastní fixní přírůstek';
$MSG['616'] = 'Uložit miniaturu';
$MSG['617'] = '* POZNÁMKA * Pokud chcete změnit heslo, použijte dvě pole níže. Jinak je nechte prázdné.';
$MSG['618'] = 'Zrušení';
$MSG['619'] = 'Otevřené aukce';
$MSG['619a'] = 'Všechny aukce';
$MSG['620'] = 'Vaše nabídky';
$MSG['621'] = 'Upravte svůj osobní profil';
$MSG['622'] = 'Můj ovládací panel';
$MSG['623'] = 'Zobrazit zprávy';
$MSG['624'] = 'Název aukce';
$MSG['625'] = 'Zahájené';
$MSG['626'] = 'Skončené';
$MSG['627'] = 'Celkem nabídek';
$MSG['628'] = 'Max. nabídka';
$MSG['629'] = '* Pokud kliknete na tlačítko Zrušit, zobrazí se miniatura vaší aukce jako zkrácená verze obrázku, který jste nahráli / nastavili jako výchozí';
$MSG['630'] = 'Znovu na seznam';
$MSG['631'] = 'Zpracovat vybrané aukce';
$MSG['640'] = '* Poznámka * U nizozemské aukce nemůžete nastavit rezervní cenu, vlastní přírůstkovou částku ani použít funkci KOUPIT HNED.';
$MSG['641'] = 'Holandská aukce';
$MSG['642'] = 'Standartní aukce';
$MSG['645'] = 'Odeslat dotaz pro prodejce';
$MSG['646'] = 'Chcete-li se obrátit na prodejce, musíte být přihlášeni';
$MSG['650'] = 'Dotaz';
$MSG['651'] = 'Dotaz na aukci:%s';
$MSG['661'] = 'Přidat fotogalerii';
$MSG['662'] = '<h2> Vytvořit miniaturu </h2>';
$MSG['663'] = 'FOTOGALERIE';
$MSG['667'] = 'Prohlížení uživatele: ';
$MSG['668'] = 'Tato aukce ještě nebyla zahájena.';
$MSG['672'] = 'Kbytes';
$MSG['673'] = 'Můžete nahrát až %s fotografií. Každá fotografie musí být menší než %s KB.';
$MSG['674'] = 'Můžete nahrát pouze %s fotografií. Odstraňte některé z fronty.';
$MSG['675'] = 'Za každý nahraný obrázek vám bude účtováno %s.';
$MSG['677'] = 'Nahrajte obrázky';
$MSG['678'] = 'Zavřít';
$MSG['679'] = 'Postupujte prosím podle následujících pokynů.';
$MSG['680'] = 'Vyberte soubor, který chcete nahrát';
$MSG['681'] = 'Nahrát soubor';
$MSG['682'] = 'Opakujte kroky 1 a 2 pro každý obrázek. Po dokončení klikněte na níže uvedené tlačítko <i> Vytvořit galerii </i>. <br> Když nahrajete první obrázek nebo nastavíte jako výchozí, budete si pro něj muset vytvořit miniaturu.';
$MSG['683'] = '&gt;&gt;&gt; Vytvořte galerii &lt;&lt;&lt;';
$MSG['684'] = 'Název souboru';
$MSG['685'] = 'Velikost (byty)';
$MSG['686'] = 'Výchozí';
$MSG['687'] = 'Nahrané soubory';
$MSG['688'] = 'Už jste nahráli ';
$MSG['689'] = ' Soubory';
$MSG['694'] = 'Zobrazit galerii';
$MSG['699'] = 'Vaše nabídka ';
$MSG['700'] = ' byl zadán. ';
$MSG['701'] = ' Vaše nabídka nestačila na to, aby se z vás stal nejvyšší uchazeč! <br> Chcete navýšit svou nabídku?';
$MSG['718'] = 'Typ aukce';
$MSG['719'] = 'Platební údaje';
$MSG['720'] = 'E-mailová adresa PayPal';
$MSG['724'] = 'Dodatečné informace';
$MSG['740'] = 'Žádný';
$MSG['741'] = 'Obrázek';
$MSG['742'] = 'reCaptcha';
$MSG['752'] = 'Řetězec, který jste zadali pro ověření obrázku, neodpovídal tomu, co bylo zobrazeno.';
$MSG['753'] = 'Účet pozastaven';
$MSG['754'] = 'Dosáhli jste limitu dluhu povoleného na vašem účtu; váš účet bude pozastaven, dokud nebude zaplaceno. <br> Můžete to zpět <a href="outstanding.php"> zde </a>';
$MSG['756'] = 'Zaplať nyní';
$MSG['757'] = 'Bezpečnostní kód';
$MSG['758'] = 'Ověřovací kód';
$MSG['759'] = 'Umožnit';
$MSG['760'] = 'Zakázat';
$MSG['763'] = 'Zůstatek';
$MSG['764'] = 'Odeslat připomenutí platby';
$MSG['765'] = 'Připomenutí platby bylo odesláno';
$MSG['766'] = 'Faktura';
$MSG['767'] = 'Kliknutím na tlačítko vpravo přejdete na PayPal';
$MSG['768'] = 'Registrační poplatek';
$MSG['769'] = 'Zaplaťte zalistovací poplatek';
$MSG['770'] = 'Zaplaťte za relistování';
$MSG['771'] = 'Výchozí jméno';
$MSG['772'] = 'Překlad';
$MSG['773'] = 'Přihlašovací ID Authorize.net';
$MSG['774'] = 'Transakční klíč Authorize.net';
$MSG['775'] = 'Poplatky pro kupující';
$MSG['776'] = 'Chcete-li dokončit prodej, přejděte k jedné z níže uvedených platebních bran a zaplaťte poplatek <b> %s </b>.';
$MSG['777'] = 'Máte neuhrazenou platbu kupujícího za položku %s ; váš účet bude pozastaven, dokud nebude zaplaceno. Za to můžete nyní zaplatit <a href="%s"> zde </a>';
$MSG['778'] = 'Pokud chcete platit alternativním způsobem, kontaktujte nás <a href="profile.php?user_id=%s&amp;auction_id=%s">%s</a> zjistit jak.';
$MSG['778a'] = 'Prodejce nenastavil žádné online platební metody. Chcete-li zjistit, jak chtějí platbu přijmout, kontaktujte ho';
$MSG['780'] = 'Zobrazit na registrační stránce';
$MSG['781'] = 'Je pole s datem narození povinné ?';
$MSG['782'] = 'Je pole s adresou povinné ?';
$MSG['783'] = 'Je pole s označením města povinné ?';
$MSG['784'] = 'Je pole s označením státu/provincie povinné ?';
$MSG['785'] = 'Je pole s označením země povinné ?';
$MSG['786'] = 'Je pole s označením poštovního směrovacího čísla povinné ?';
$MSG['787'] = 'Je pole s označením telefonního čísla povinné ?';
$MSG['791'] = 'Poplatek za konečnou cenu';
$MSG['792'] = 'Musíte zaplatit za% s položky';
$MSG['793'] = 'Položky o které se ucházíte brzy skončí';
$MSG['794'] = 'Přihazovali jste na  %s položky';
$MSG['796'] = 'Máte neuhrazenou platbu poplatku za konečnou hodnotu za položku %s; váš účet bude pozastaven, dokud nebude zaplaceno. Za to můžete nyní zaplatit <a href="%s"> zde </a>';
$MSG['803'] = 'Poplatek za titulky';
$MSG['804'] = 'Poplatek za zvláštní kategorii';
$MSG['805'] = 'Přeskočte krok';
$MSG['806'] = 'Podnadpis položky';
$MSG['810'] = 'Je vyžadována platná e-mailová adresa PayPal';
$MSG['811'] = 'Je vyžadováno platné ID a heslo AuthNet';
$MSG['812'] = 'Název souboru:';
$MSG['813'] = 'Obsah souboru:';
$MSG['814'] = 'Druhá kategorie';
$MSG['816'] = 'Galerie';
$MSG['817'] = 'Ceny';
$MSG['818'] = 'K seznamu položek nemáte oprávnění';
$MSG['819'] = 'Nemáte povolení k nákupu zboží';
$MSG['820'] = 'Žádost o povolení k prodeji účtu';
$MSG['821'] = 'Je vyžadováno platné ID 2Checkout';
$MSG['822'] = 'Je vyžadována platná e-mailová adresa Skrill';
$MSG['823'] = 'Je požadováno platné Worldpay ID';
$MSG['824'] = 'Worldpay ID';
$MSG['825'] = 'E-mailová adresa Skrill';
$MSG['826'] = '2Checkout ID';
$MSG['828'] = 'Týden';
$MSG['829'] = 'Zobrazit podle ';
$MSG['830'] = 'Měsíc';
$MSG['840'] = 'Přesunout do ';
$MSG['841'] = 'Šablona pro správu';
$MSG['842'] = 'Nastavit poplatky';
$MSG['845'] = '<p><img src="' . $system->SETTINGS['siteurl'] . 'themes/' . $system->SETTINGS['admin_theme'] . '/images/bullet_blue.png"> Zobrazuje kategorii, která obsahuje podkategorie</p><p><img src="' . $system->SETTINGS['siteurl'] . 'themes/' . $system->SETTINGS['admin_theme'] . '/images/bullet_red.png"> Shows a category that contains auctions</p>';
$MSG['846'] = 'Zůstatek na účtu';
$MSG['847'] = 'Cena';
$MSG['853'] = 'Momentálně nesledujete žádné položky';
$MSG['854'] = 'Účty';
$MSG['855'] = 'Zvolte Zobrazit';
$MSG['856'] = 'Vyberte období';
$MSG['857'] = 'Celkem fakturováno';
$MSG['858'] = 'Četl jsem a souhlasím s <a href="' . $system->SETTINGS['siteurl'] . 'contents.php?show=terms" target="_blank">pravidly a podmínkami</a>';
$MSG['859'] = 'Děkujeme %s za registraci.';
$MSG['016'] = 'Odeslali jsme e-mail s potvrzením %s. Tento e-mail obsahuje aktivační odkaz pro potvrzení vaší e-mailové adresy, stačí kliknout na odkaz a aktivovat svůj %s účet.';
$MSG['016_a'] = 'Správce webu váš účet krátce zkontroluje, jakmile jej správce přijme, budete se moci přihlásit';
$MSG['016_b'] = 'Nyní se můžete přihlásit pomocí svého uživatelského jména a hesla.';
$MSG['860'] = '<p>In Mezitím zde uvádíme několik tipů, jak začít ' . $system->SETTINGS['sitename'] . '.</p>
<ul>
	<li>Mít připravené fotografie při výpisu položky k prodeji, zmenšete velikost souboru, abyste ušetřili čas při nahrávání.</li>
	<li>Doporučené aukce se mnohem častěji prodají, vaše aukce bude náhodně uvedena na internetu ' . $system->SETTINGS['sitename'] . ' Domovská stránka.</li>
</ul>';
$MSG['861'] = 'Prohledat aukce';
$MSG['862'] = 'Chcete-li pokračovat, přihlaste se';
$MSG['863'] = '<h2>Ještě nejste členem?</h2>
		<h3><a href="register.php">Zaregistrujte se nyní</a><br>
		Bude to trvat jen minutu</h3>
		<p> Být členem vám umožní:</p>
		<ul>
			<li>Prodat cokoli</li>
			<li>Budete upozorněni, když je položka, kterou hledáte, na seznamu</li>
			<li>Přidat položky do svého seznamu sledovaných</li>
			<li>Dávat nabídky na položky</li>
			<li>plus mnohem víc</li>
		</ul>';
$MSG['864'] = 'Podrobnosti o přepravě';
$MSG['865'] = 'Podrobnosti výpisu';
$MSG['867'] = 'Pouze vyzvednout';
$MSG['868'] = ' každý';
$MSG['869'] = 'Datum prodeje';
$MSG['870'] = 'Prodali jste %s položek';

$MSG['890'] = 'Vyčistit protokol';
$MSG['891'] = 'Protokol chyb';
$MSG['892'] = 'Aktivovat';
$MSG['893'] = 'Celkem';
$MSG['898'] = 'Zaplaceno';
$MSG['899'] = 'Nastavit jako zaplacené';
$MSG['900'] = 'Zobrazit vítěze';
$MSG['901'] = 'Počet položek';
$MSG['902'] = 'HTML';
$MSG['903'] = 'V jakém formátu chcete přijímat e-maily';
$MSG['904'] = 'Tato aukce je uzavřena';
$MSG['905'] = 'Někdo si přeje vyzkoušet aukci';
$MSG['906'] = 'Vaše nabídka již není vítězná';
$MSG['907'] = ' - Vaše položka byla prodána!';
$MSG['908'] = ' - Žádný vítěz';
$MSG['909'] = ' Aukce uzavřena - Vy jste vyhráli';
$MSG['910'] = 'Tento uživatel nemá žádné aukce';
$MSG['911'] = 'uzavřeno';
$MSG['915'] = 'Text';
$MSG['922'] = 'Odeslat dotaz prodejci';
$MSG['923'] = 'Poloha prodejce';
$MSG['924'] = 'Právě zalistováno';
$MSG['925'] = 'Brzy bude končit';
$MSG['926'] = 'Velká položka';
$MSG['927'] = 'Velmi drahé';
$MSG['928'] = 'Levné položky';
$MSG['929'] = 'Popularní položky';
$MSG['930'] = 'Atraktivní položky';
$MSG['931'] = 'Kup nyní';
$MSG['932'] = 'Výpisy zveřejněné uživatelem %s';
$MSG['933'] = 'Pouze koupit';
$MSG['934'] = 'pro uživatele: ';
$MSG['935'] = 'Platební bilance';
$MSG['936'] = 'Při odesílání došlo k chybě. Zkuste to prosím znovu';
$MSG['937'] = 'Chybí jméno';
$MSG['938'] = 'Chybí uživatelské jméno';
$MSG['939'] = 'Schází heslo';
$MSG['940'] = 'Zadejte prosím heslo dvakrát';
$MSG['941'] = 'Chybí e-mailová adresa';
$MSG['942'] = 'Chybí adresa';
$MSG['943'] = 'Chybí název města';
$MSG['944'] = 'Chybí název provincie/stát';
$MSG['945'] = 'Chybí název země';
$MSG['946'] = 'Chybí poštovní směrovací číslo';
$MSG['947'] = 'Chybí číslo telefonu';
$MSG['948'] = 'Chybí datum narození nebo je neúplné';
$MSG['949'] = 'Zavře se ';
$MSG['950'] = '%s nabídek';
$MSG['951'] = 'Nelze použít Kup nyní<br>pro tuto položku';
$MSG['1000'] = 'Hledejte klíčová slova nebo číslo položky';
$MSG['1001'] = 'Vyhledejte název <b> a </b> Popis';
$MSG['1002'] = 'Hledat v kategoriích';
$MSG['1003'] = 'Cenové rozpětí';
$MSG['1004'] = 'Mezi';
$MSG['1005'] = ' a ';
$MSG['1006'] = 'Volba platby';
$MSG['1008'] = 'Nacházející se v';
$MSG['1009'] = 'Končí';
$MSG['1010'] = 'Dnes';
$MSG['1011'] = 'Zítra';
$MSG['1012'] = 'za 3 dny';
$MSG['1013'] = 'za 5 dnů';
$MSG['1014'] = 'Seřazeno podle';
$MSG['1015'] = 'Položky, které skončí nejdříve';
$MSG['1016'] = 'Nejnověji uvedené položky';
$MSG['1017'] = 'Od nejnižší ceny';
$MSG['1018'] = 'Od nejvyšší ceny';
$MSG['1020'] = 'Holandská aukce';
$MSG['1021'] = 'Standartní aukce';
$MSG['1030'] = 'Znovu synchronizujte čítače uživatelů, aukcí a nabídek';
$MSG['1031'] = 'Znovu synchronizujte čítače';
$MSG['1032'] = 'žádný vítěz';

// Invoices & tax system
$MSG['1033'] = 'Přepravní štítek';
$MSG['1034'] = 'ID aukce';
$MSG['1035'] = 'Objednávka/Faktura';
$MSG['1036'] = 'Datum objednávky';
$MSG['1037'] = 'Kupující';
$MSG['1038'] = 'Zaslat do';
$MSG['1039'] = 'Fakturační údaje';
$MSG['1040'] = 'Podrobnosti o objednávce';
$MSG['1041'] = 'Faktura č.';
$MSG['1042'] = 'ID objednávky:';
$MSG['1043'] = 'Datum vystavení faktury:';
$MSG['1044'] = 'Produkt';
$MSG['1045'] = 'Daň';
$MSG['1046'] = 'Cena za jednotku (bez DPH)';
$MSG['1047'] = 'Cena za jednotku (včetně DPH)';
$MSG['1048'] = 'Celkem (bez DPH)';
$MSG['1049'] = 'Celkem (včetně DPH)';
$MSG['1050'] = 'Mezisoučet:';
$MSG['1051'] = 'Doprava:';
$MSG['1052'] = 'DPH 20%:';
$MSG['1053'] = 'Celkem:';
$MSG['1054'] = 'Způsob dopravy';
$MSG['1055'] = 'Platební metoda';
$MSG['1056'] = 'Pro vytištění přepravního štítku si musíte vybrat objednávku';
$MSG['1057'] = 'Seznam faktur';
$MSG['1058'] = 'Zobrazení faktury';
$MSG['1059'] = 'Seznam faktur';
$MSG['1060'] = 'Chybná faktura.';
$MSG['1060a'] = 'Vytiskni tuto stránku';

// admin general
$MSG['1061'] = 'Poznámky';

// admin help page
$MSG['1062'] = 'Dostat podporu';
$MSG['1063'] = 'Fóra podpory';
$MSG['1064'] = 'Pokud máte nějaké problémy nebo dotazy, přejděte na naše skvělé fórum podpory a získejte pomoc od jednoho z našich mnoha aktivních uživatelů.';
$MSG['1065'] = 'Online dokumentace';
$MSG['1066'] = 'Nejste si jisti, jak něco funguje nebo kde se něco nachází v online dokumentaci WeBids';
$MSG['1067'] = 'Často kladené otázky a jejich řešení';
$MSG['1068'] = 'Upravit WeBid';
$MSG['1069'] = 'Stáhněte si témata';
$MSG['1070'] = 'Procházejte velkou sbírku témat odeslaných uživateli, která mohou okamžitě rozšířit jakýkoli web';
$MSG['1071'] = 'Stáhněte si mody';
$MSG['1072'] = 'Procházejte velkou sbírku uživatelsky zadaných režimů, které mohou přidat nebo téměř cokoli, aby váš web fungoval přesně tak, jak chcete';
$MSG['1073'] = 'Stáhněte si jazykovou verzi';
$MSG['1074'] = 'Procházejte sbírku překladů odeslaných uživatelem';
$MSG['1075'] = 'Podpořte WeBid';
$MSG['1076'] = 'Vložte chybu';
$MSG['1077'] = 'Našli jste něco zábavného? Řekněte nám o tom, pomůže to i ostatním';
$MSG['1078'] = 'Navrhněte funkci';
$MSG['1079'] = 'Máte skvělou představu o tom, co by mohlo zlepšit WeBid? Řekněte nám o tom, že vždy hledáme dobré nápady';
$MSG['1080'] = 'Darovat';
$MSG['1081'] = 'Pomozte nám udržet se online a udržet budoucí vývoj';

// tax admin
$MSG['1082'] = 'Název daně';
$MSG['1083'] = 'Daňová sazba';
$MSG['1084'] = 'Prodejce z';
$MSG['1085'] = 'Kupující z';
$MSG['1086'] = 'Daň z webu';
$MSG['1087'] = 'Opravdu chcete tuto daňovou sazbu odstranit?';

// sell.php tax
$MSG['1102'] = 'Započítat daň';
$MSG['1103'] = 'Zahrňte daň do konečné prodejní ceny';

$MSG['1104'] = 'Přidat do zůstatku';
$MSG['1105'] = 'Vyberte obrázky, které chcete odstranit <strong> (Toto nelze vrátit zpět)</strong>';
$MSG['1106'] = 'Vytiskněte přepravní štítek';

$MSG['1107'] = 'Položka nebyla odeslána';
$MSG['1108'] = 'Nastavit jako doručené';
$MSG['1109'] = 'Položka doručena';

$MSG['1116'] = 'Nastavit jako odeslané';
$MSG['1117'] = 'Odesláno';

// email settings
// modal and js
$MSG['1134'] = 'Test e-mailem a odpověď';
$MSG['1135'] = 'Zadejte zprávu pro zkušební e-mail.';
$MSG['1136'] = 'Odeslat zkušební e-mail';
$MSG['1137'] = 'Zkouška e-mailu';
$MSG['1138'] = 'Zkouška emailu z Administrátora';
$MSG['1139'] = 'Administrátor';
$MSG['1140'] = 'Dokončil jsem testování';
// fee gateway
$MSG['1142'] = 'Než budete moci nastavit jakékoli poplatky, musíte si založit alespoň jeden účet, na který mohou být poplatky placeny, a to jednoduše tak, že do příslušných polí níže přidáte své platební údaje.';
$MSG['1143'] = 'Zde nastavíte, které platební brány chcete uživatelům povolit';
$MSG['1144'] = 'Než budete moci nastavit poplatky, musíte nastavit alespoň jeden způsob platby. Můžete to udělat přes <a href=\'fee_gateways.php\'>payment gateways</a>.';

// yourauctions pages
$MSG['1145'] = '<p>Úspěšně jste smazali %s aukci(aukce)</p>';
$MSG['1146'] = '<p>ˇUspěšně jste relistovali %s aukci(aukce)</p>';
$MSG['1147'] = '<p>Úspěšně jste prodali %s v aukci(aukcích)</p>';
$MSG['1148'] = '<p>Na váš účet byl zaúčtován poplatek %s</p>';
$MSG['1149'] = '<p>Úspěšně jste uzavřeli %s aukci(aukce)</p>';
$MSG['1150'] = '<p>Úspěšně jste zahájili %s aukci(aukce)</p>';
$MSG['edit_disabled'] = 'Upravovat je zakázáno, protože položka obsahuje nabídky';
$MSG['delete_auction_disabled'] = 'Odstraňování je zakázáno,protože položka obsahuje nabídky';
$MSG['no_bids'] = 'Žádné nabídky';
$MSG['click_to_edit_auction'] = 'Klepnutím upravte tuto aukci';

// sell item page
$MSG['1151'] = 'Aukční poplatek';
$MSG['1152'] = 'Zdarma';

$MSG['1153'] = 'Tisk faktury';

// groups
$MSG['1200'] = 'Skupiny';
$MSG['1201'] = 'Založit skupinu';
$MSG['1202'] = 'Název skupiny';
$MSG['1203'] = 'Přidat se do skupiny';
$MSG['1204'] = 'Zrušit členství ve skupině';
$MSG['1205'] = 'Založení skupiny';

$MSG['5000'] = 'Chcete-li zobrazit tuto stránku, musíte být přihlášeni';
$MSG['5001'] = 'Zobrazit stránku';
$MSG['5002'] = 'Jestliže chcete přihazovat, tak musíte být přihlášeni';
$MSG['5022'] = 'VYHLEDÁVÁNÍ UŽIVATELŮ';
$MSG['5023'] = 'Hledat &gt;&gt;';
$MSG['5024'] = 'Jméno, uživatelské jméno nebo email';
$MSG['5029'] = 'JDI >>';
$MSG['5030'] = 'Nástěnka';
$MSG['5031'] = 'Nová nástěnka';
$MSG['5034'] = 'Soupis názvů';
$MSG['5035'] = 'Zprávy k zobrazení';
$MSG['5036'] = 'Toto je počet posledních zpráv, které se mají zobrazit pro tuto nástěnku.';
$MSG['5038'] = 'Aktivní';
$MSG['5039'] = 'Neaktivní';
$MSG['5052'] = 'Upravit nástěnku';
$MSG['5053'] = 'Poslední zpráva';
$MSG['5056'] = 'Nejste přihlášeni. <br> Pokud odešlete zprávu, objeví se tak, jak ji zveřejnil <b> <i> Neznámý uživatel</i></b>.';
$MSG['5057'] = 'Odeslat zprávu';
$MSG['5058'] = 'Návrat k nástěnce';
$MSG['5059'] = 'Zprávy';
$MSG['5060'] = 'Posted by ';
$MSG['5061'] = 'Neznámý uživatel';
$MSG['5062'] = 'Zobrazit všechny zprávy';
$MSG['5063'] = 'Zobrazit zprávy';
$MSG['5065'] = 'Vymazat všechny zprávy starší než';
$MSG['5068'] = 'Filtr slov';
$MSG['5069'] = 'Slovní filtr vám dává možnost vyloučit nežádoucí slova:
<ul>
<li>TITLE and DESCRIPTION of the auctions.</li>
<li>Messages posted to the message boards</li>
<li>Usernames</li>
</ul>';
$MSG['5070'] = 'Povolit filtr slov?';
$MSG['5071'] = 'Seznam nežádoucích slov';
$MSG['5072'] = 'Zadejte nežádoucí slova ma jeden řádek (max. 255 znaků na řádek). Všimněte si, že každý řádek bude považován za „jedno slovo“.';
$MSG['5085'] = 'O nás';
$MSG['5086'] = 'Pravidla &amp; Podmínky';
// cookiespolicy.php
$MSG['cookie_policy'] = "Zásady cookies";
$MSG['5094'] = 'Zobrazit aukce';
$MSG['5113'] = 'Změna';
$MSG['5115'] = 'dny';
$MSG['5117'] = 'Stránka';
$MSG['5118'] = 'z';
$MSG['5119'] = '&lt;&lt;Předchozí';
$MSG['5120'] = 'Další&gt;&gt;';
$MSG['5142'] = 'Nastavení';
$MSG['5143'] = 'Zobrazit statistiku přístupu';
$MSG['5156'] = 'Platformy';
$MSG['5158'] = 'Statistiky přístupu pro ';
$MSG['5161'] = 'Zobrazení stránky';
$MSG['5162'] = 'Unikátní návštěvníci';
$MSG['5163'] = 'Uživatelské relace';
$MSG['5164'] = 'Celkem';
$MSG['5165'] = 'Zobrazit statistiku prohlížeče';
$MSG['5167'] = 'Statistiky prohlížeče pro ';
$MSG['5169'] = 'Prohlížeč';
$MSG['5180'] = 'Uživatel';
$MSG['5189'] = 'Odeslat aukci';
$MSG['5190'] = 'Resetovat pole';
$MSG['5199'] = 'Potvrdit nabídku';
$MSG['5201'] = 'Odeslat zprávu';
$MSG['5202'] = 'Přidat do svého seznamu sledovaných';
$MSG['5202_0'] = 'Odebrat ze seznamu sledovaných';
$MSG['5204'] = 'Vložit';
$MSG['5205'] = 'Povolit/Zakázat';
$MSG['5230'] = 'Kategorie nejčastějších dotazů';
$MSG['5231'] = 'Nový často kladený dotaz';
$MSG['5232'] = 'Správa častých dotazů';
$MSG['5233'] = 'Další nastavení';
$MSG['5234'] = 'Vložit Novou kategorii';
$MSG['5236'] = 'Časté dotazy';
$MSG['5237'] = 'CAT. ID';
$MSG['5238'] = 'Časté dotazy \'s kategorie';
$MSG['5239'] = 'Dotaz';
$MSG['5240'] = 'Odpověď<br>(HTML allowed)';
$MSG['5243'] = 'Index nápovědy';
$MSG['5245'] = 'Nejlepší';
$MSG['5276'] = 'Vymazat zprávu';
$MSG['5279'] = 'Zpět na seznam uživatelů';
$MSG['5284'] = 'Název Kategorie';
$MSG['5285'] = 'Denní zpráva';
$MSG['5295'] = 'Zobrazení';
$MSG['5297'] = 'Zůstatek nad dluhovým limitem';
$MSG['5299'] = 'Omezit odeslání na';
$MSG['5318'] = 'Zobrazit statistiku platformy';
$MSG['5408'] = 'Max. ';
$MSG['5431'] = 'Pošlete mi nové heslo';
$MSG['5436'] = 'Nástroje';
$MSG['5438'] = 'Statistiky platformy pro ';
$MSG['5492'] = 'položky';
$MSG['5493'] = 'nabídka';
$MSG['5494'] = 'nabídka na ';
$MSG['5495'] = 'pro každého ';
$MSG['5506'] = 'Pozitivní zpětná vazba: ';
$MSG['5507'] = '<span style="color:#CD0000;">Negativní zpětná vazba:</span> ';
$MSG['5508'] = 'Členem od ';
$MSG['5509'] = 'Zpětná vazba přijata ';
$MSG['_0012'] = 'Správa uživatelů';
$MSG['_0022'] = 'Společnost';
$MSG['_0024'] = 'Správa bannerů';
$MSG['_0025'] = 'Banery';
$MSG['_0026'] = 'Přidat uživatele';
$MSG['_0028'] = 'Delete selected users (banners will be deleted)';
$MSG['_0029'] = 'Vyber baner';
$MSG['_0030'] = 'URL';
$MSG['_0031'] = 'Text pod banerem';
$MSG['_0032'] = 'ALT text';
$MSG['_0033'] = '<b>Filters</b>';
$MSG['_0035'] = 'Klíčová slova';
$MSG['_0036'] = 'Akceptované formáty: GIF, JPG, PNG, SWF';
$MSG['_0037'] = 'Kompletní URL včetně http://';
$MSG['_0038'] = 'Lze nechat prázdné';
$MSG['_0039'] = 'Máte možnost filtrovat rotace bannerů podle dvou různých kritérií:
			<ul>
			<li><b>Kategorie</b>: vyberte jednu nebo více kategorií. Banner se zobrazí, pouze pokud jsou vybrané kategorie viditelné (tj. Kategorie procházení, aukční stránka)

			<li><b>Klíčová slova</b>: zadejte jedno nebo více klíčových slov (jedno na řádek). Banner se zobrazí pouze na stránce aukcí, kde je obsaženo alespoň jedno klíčové slovo v položce\'s názvu nebo popisu
			</ul>
			 <b>Kategorie</b> filtr bude použit při procházení na stránkách kategorií  a položek na těchto stránkách.<br>
			 <b>Klíčová slova</b> filtr bude použit pouze na stránce aukcí.<br>
			Pokud se žádný z použitých filtrů neshoduje, zobrazí se náhodný banner (mezi těmi, kteří nemají přidružené filtry).';
$MSG['_0040'] = 'Přidat baner';
$MSG['_0041'] = 'Nový baner';
$MSG['_0042'] = ' (required)';
$MSG['_0043'] = '<b>Uživatelské bannery</b>';
$MSG['_0045'] = 'Počet zhlédnutí:';
$MSG['_0046'] = 'Nulový nebo prázdný znamená neomezený počet zobrazení';
$MSG['_0047'] = '%s již existuje';
$MSG['_0049'] = 'Zobrazení:';
$MSG['_0050'] = 'URL:';
$MSG['_0051'] = 'Kliknutí:';
$MSG['_0052'] = 'Zobraz filtry';
$MSG['_0055'] = 'Upravit baner';
$MSG['_0151'] = ' krát';
$MSG['_0153'] = 'Relistovat / <br>Relistováno';
$MSG['_0161'] = 'Automaticky relisovat';
$MSG['_0162'] = 'Pokud se neobjeví žádné nabídky, můžete se rozhodnout, že se vaše aukce automaticky zruší.';
$MSG['_0163'] = 'Zobrazit vítěze';

$MSG['2_0004'] = 'Zobrazit uživatele\'s IPs';
$MSG['2_0026'] = 'Je nám líto, ale z jednoho nebo více důvodů vám byl odepřen přístup
				na tuto stránku.<br>
				Pokud jste měli aktivní aukce, zrušili jsme všechny nabídky a
                                odstranili položky z naší databáze.
				<br><br>
				Děkuji Vám';
$MSG['2_0027'] = 'Vaše IP byla zablokována';
$MSG['2__0001'] = 'Vyber jazyk';
$MSG['2__0016'] = 'Počáteční datum';
$MSG['2__0025'] = 'Kup to nyní';
$MSG['2__0027'] = 'Vše';
$MSG['2__0028'] = 'Vyber vše';
$MSG['2__0029'] = 'Nemáte žádné zprávy';
$MSG['2__0030'] = ' znamená, že záznam nelze smazat, protože se používá.';
$MSG['2__0031'] = 'Opravdu chcete tyto zprávy smazat?';
$MSG['2__0037'] = 'Odeslat aukci';
$MSG['2__0038'] = 'Vyberte svou kategorii';
$MSG['2__0039'] = 'Pokud jste zapomněli heslo, zadejte níže své uživatelské jméno a e-mailovou adresu.';
$MSG['2__0041'] = 'Vyberte podkategorii';
$MSG['2__0047'] = 'Vyber Kategorii';
$MSG['2__0048'] = 'Zavřít teď!';
$MSG['2__0050'] = 'Prodej podobné';
$MSG['2__0051'] = 'Relistujte';
$MSG['2__0054'] = '<span style="#CD0000;"><b>Již vybráno</b></span>';
$MSG['2__0056'] = 'Pozastavené aukce';

$MSG['2__0064'] = 'UŽIVATELÉ ONLINE';
$MSG['2__0066'] = 'Povoleno';
$MSG['2__0067'] = 'Zakázáno';
$MSG['25_0001'] = 'VÍTĚZ';
$MSG['25_0002'] = 'PRODEJCE';
$MSG['25_0004'] = 'Uživatelské jméno';
$MSG['25_0005'] = 'Pole pro registraci uživatele';
$MSG['25_0006'] = 'Konečná nabídka';
$MSG['25_0008'] = 'Preference';
$MSG['25_0009'] = 'Rozhraní';
$MSG['25_0010'] = 'Uživatelé';
$MSG['25_0011'] = 'Reklama';
$MSG['25_0012'] = 'Poplatky';
$MSG['25_0018'] = 'Obsah';
$MSG['25_0023'] = 'Statistiky';
$MSG['25_0025'] = 'Přehled nastavení';
$MSG['25_0026'] = 'Dávkové zpracování (cron.php)';
$MSG['25_0027'] = 'Nezapomeňte nastavit cronjob pro pravidelné spouštění cron.php (15 minut je obvykle dobrý časový interval).';
$MSG['25_0031'] = 'Statistiky';
$MSG['25_0035'] = 'Korekce času';
$MSG['25_0036'] = 'GMT';
$MSG['25_0037'] = ' hodin';
$MSG['25_0055'] = 'Zaregistrovaní aktivní uživatelé';
$MSG['25_0056'] = 'Zablokovaní užovatelé';
$MSG['25_0057'] = 'Probíhající aukce';
$MSG['25_0059'] = 'Nabídky na probíhající aukce';
$MSG['25_0063'] = 'Dnešní přístupy';
$MSG['25_0074'] = 'Přeposlat email';
$MSG['25_0079'] = 'Novinky';
$MSG['25_0080'] = 'Souhrn';
$MSG['25_0081'] = 'Můj účet';
$MSG['25_0082'] = 'Prodej';
$MSG['25_0083'] = 'Nákup';
$MSG['25_0084'] = 'Přidejte nové klíčové slovo položky';
$MSG['25_0085'] = 'Zapamatuj si mě';
$MSG['25_0086'] = 'Kliknutím na tlačítko níže se zavazujete zaplatit celou částku <b id=\"nabídková cena\">%s</b> nákupem zboží od prodávajícího, pokud jste vítězným uchazečem';
$MSG['25_0087'] = 'Vaší nabídkou jste to přebili';
$MSG['25_0088'] = 'Jste aktuálně nejvyšší uchazeč';
$MSG['25_0089'] = 'Gratulujeme, položka je Vaše. Zaplaťte hned';
$MSG['25_0110'] = 'Akceptační text';
$MSG['25_0115'] = 'Čekající aukce';
$MSG['25_0116'] = 'Začne';
$MSG['25_0117'] = 'Skončí';
$MSG['25_0118'] = 'Začněte hned!';
$MSG['25_0119'] = 'Prodané položky';
$MSG['25_0121'] = 'Uzavřeno dne';
$MSG['25_0136'] = 'Vyžaduje souhlas správce';
$MSG['25_0140'] = 'Váš účet je účet kupujícího. Nejsou povoleny žádné prodejní aktivity. <br> Pokud chcete přejít na <b> účet prodejce </b>';
$MSG['25_0141'] = 'Pošlete požadavek správci webu';
$MSG['25_0142'] = 'Žádost byla odeslána správci webu.';
$MSG['25_0143'] = 'Váš účet je účet kupujícího. Nejsou povoleny žádné prodejní aktivity. <br> Už jste odeslali žádost o přepnutí na <b> účet prodejce </b>: vaše žádost se zpracovává.';
$MSG['25_0152_b'] = 'Správce musí aktivovat každý účet.';
$MSG['25_0152_c'] = 'Uživatel musí aktivovat svůj vlastní účet';
$MSG['25_0152_d'] = 'Uživatelský účet je při registraci automaticky aktivován (nedoporučuje se)';
$MSG['25_0155'] = 'Kontaktovat prodejce Aktualizováno';
$MSG['25_0167'] = 'Ikona';
$MSG['25_0168'] = 'Návrat k úpravám';
$MSG['25_0169'] = 'Úrovně členství';
$MSG['25_0169a'] = 'Zkontrolujte verzi';
$MSG['25_0170'] = 'Úpravy, mazání nebo přidávání úrovní členství pomocí níže uvedeného formuláře. „Body“ znamenají horní limit (minimální úroveň je implicitní), „členství“ je název úrovně, „ikona“ je název ikony odpovídající úrovni, která se má zobrazit, relativně k adresáři „images / icons /“';
$MSG['25_0171'] = 'Skóre zpětné vazby';
$MSG['25_0176'] = 'Konvertovat';
$MSG['25_0177'] = 'pro';
$MSG['25_0188'] = 'E-maily s upozorněním na aukce';
$MSG['25_0189'] = 'Jako prodejce si můžete vybrat, zda obdržíte jeden e-mail s oznámením pro každou aukci, která se uzavře, nebo obdržíte e-mail jednou za den, který nahlásí všechny uzavřené aukce v ten den. <br>

Druhá možnost je obvykle nutná, pokud máte velké množství aukcí. <br> Nakonec si také můžete vybrat, že nebudete dostávat e-maily s upozorněním, ale tato volba se nedoporučuje.';
$MSG['25_0190'] = 'Za každou závěrečnou aukci obdržíte <b> jeden </b> e-mail';
$MSG['25_0191'] = 'Dostávejte jeden kumulativní e-mail jednou denně';
$MSG['25_0192'] = 'Možnosti oznámení e-mailů byly aktualizovány';
$MSG['25_0193'] = 'Nepřijímat žádný e-mail';
$MSG['25_0195'] = 'Můžete se rozhodnout, že obdržíte e-mail s oznámením pro každou aukci, kterou zřídíte, nebo ne.';
$MSG['25_0196'] = 'Obdržíte e-mail s potvrzením <b> nastavení aukce </b>.';
$MSG['25_0197'] = 'Nepřijímejte e-mail s potvrzením <b> nastavení aukce </b>.';
$MSG['25_0199'] = 'Končící aukce pokračují';
$MSG['25_0209'] = 'Prodávejte za rezervovanou cenu nejvyššímu uchazeči';
$MSG['25_0214'] = 'Hledat také uzavřené aukce: ';
$MSG['25_0215'] = 'Přepravní podmínky';
$MSG['25_0223'] = 'Zpětná vazba, kterou jste dostali';
$MSG['25_0224'] = 'Náhled';

// multi-language months
$MSG['MON_001'] = 'Leden';
$MSG['MON_001E'] = 'Leden';
$MSG['MON_002'] = 'Únor';
$MSG['MON_002E'] = 'Únor';
$MSG['MON_003'] = 'Březen';
$MSG['MON_003E'] = 'Březen';
$MSG['MON_004'] = 'Duben';
$MSG['MON_004E'] = 'Duben';
$MSG['MON_005'] = 'Květen';
$MSG['MON_005E'] = 'Květen';
$MSG['MON_006'] = 'Červen';
$MSG['MON_006E'] = 'Červen';
$MSG['MON_007'] = 'Červenec';
$MSG['MON_007E'] = 'Červenec';
$MSG['MON_008'] = 'Srpen';
$MSG['MON_008E'] = 'Srpen';
$MSG['MON_009'] = 'Září';
$MSG['MON_009E'] = 'Září';
$MSG['MON_010'] = 'Říjen';
$MSG['MON_010E'] = 'Říjen';
$MSG['MON_011'] = 'Listopad';
$MSG['MON_011E'] = 'Listopad';
$MSG['MON_012'] = 'Prosinec';
$MSG['MON_012E'] = 'Prosinec';

$MSG['26_0000'] = 'Nastav výchozí';
$MSG['26_0001'] = 'historie nabídek';
$MSG['26_0002'] = 'Správa motivů';
$MSG['26_0003'] = 'Upravit soubory motivů';
$MSG['26_0004'] = 'Přidat soubor s motivem';
$MSG['30_0053'] = '<p> Některé bezplatné e-mailové služby byly na tomto webu zakázány. Nezadávejte e-mailové adresy patřící do následujících domén: </p>';
$MSG['30_0063'] = 'Koupit jen teď?';
$MSG['30_0069'] = 'Prodejce: upravte tuto aukci';
$MSG['30_0070'] = 'Hledat pouze v této kategorii';
$MSG['30_0080'] = 'Možnosti platby';
$MSG['30_0081'] = 'Zobrazeno ';
$MSG['30_0086'] = 'Adresa: ';
$MSG['30_0087'] = 'Opravdu chcete vybrané aukce zpracovat?';
$MSG['30_0098'] = '&nbsp; = Příhoz';
$MSG['30_0100'] = '<b>Koupit nyní!</b> aukce';
$MSG['30_0101'] = '<b>Kup jen nyní</b> aukce';
$MSG['30_0102'] = 'Zaškrtněte / zrušte zaškrtnutí všeho';
$MSG['30_0176'] = 'Zobrazit vítěze';
$MSG['30_0177'] = 'Skončené aukce';
$MSG['30_0178'] = '&nbsp;&nbsp;Pro tuto aukci nebyl nalezen žádný vítěz';
$MSG['30_0179'] = 'Vítězná nabídka';
$MSG['30_0180'] = 'Kompletní historie nabídek';
$MSG['30_0181'] = 'Nástěnka';
$MSG['30_0208'] = 'Přihodit >>';
$MSG['30_0209'] = 'Seznamte se s prodejcem';
$MSG['30_0210'] = '*Pokud jsou uvedeny položky týkající se těchto klíčových slov, budete upozorněni e-mailem';
$MSG['30_0213'] = 'Žádná zpětná vazba nepotřebuje opuštění';
$MSG['30_0214'] = 'WeBid Version';
$MSG['30_0215'] = 'Nahrát logo';
$MSG['upload_failed'] = 'Nahrávání selhalo';
$MSG['350_1004'] = 'Množství';
$MSG['350_1008'] = 'Dodací lhůta';
$MSG['350_1009'] = 'Dodatečné náklady na dopravu';
$MSG['RPT_22'] = 'ID uživatele';
$MSG['RPT_23'] = '(nechte prázdné pro všechny)';
$MSG['email_settings_updated'] = 'Nastavení e-mailu bylo aktualizováno';

$MSG['NAY_01'] = 'Doporučené položky';
$MSG['NAY_02'] = 'Všechny položky';
$MSG['NAY_03'] = 'Motiv webu';
$MSG['NAY_04'] = 'Motiv administrátora';

$MSG['AUCTIONS_401'] = 'Nabídka';
$MSG['AUCTIONS_402'] = 'Nabídky';
$MSG['AUCTIONS_404'] = 'Prodáno';
$MSG['AUCTIONS_405'] = 'Vítězná nabídka';
$MSG['AUCTIONS_406'] = 'Vítězové';

$MSG['BUY_NOW_ONLY_TPL_0100'] = 'Nedávno uzavřená zpráva o aukci';

$MSG['auction_has_been_reported'] = 'Tato aukce byla nahlášena';
$MSG['report_this_item'] = 'Nahlásit tuto položku';
$MSG['report_item'] = 'Nahlásit položku';
$MSG['reason_for_report'] = 'Důvod hlášení';
$MSG['report_reason_select'] = 'Vyberte důvod';
$MSG['report_reason_copy'] = 'Kopírování vašeho zápisu';
$MSG['report_reason_counterfeit'] = 'Padělání a porušování autorských práv';
$MSG['report_reason_prohibited'] = 'Zakázáno (zakázané položky)';
$MSG['report_reason_terms_and_conditions'] = 'Seznam porušování zásad';
$MSG['report_reason_stolen'] = 'Ukradený majetek';

$MSG['communative_report_winner_yes'] = 'Všem výhercům s vaší e-mailovou adresou byl zaslán e-mail.';
$MSG['communative_report_winner_no'] = 'Je nám líto, ale tentokrát není žádný výherce aukce.';

$MSG['unknown'] = 'Neznámý';
$MSG['empty_line'] = '-----';
$MSG['error_no_user_group'] = 'nebyl přiřazen k žádné skupině uživatelů';
$MSG['error_no_user_group_id'] = 'byl přiřazen k ID skupiny, které již neexistuje';
$MSG['text_update_users_group'] = '[Prohlédněte si a aktualizujte podrobnosti každého uživatele]';
$MSG['warning'] = 'Varování';

$MSG['chyba_e-mailových_domén_blokovaných_spamem'] = 'E-mailová adresa, kterou jste zadali, byla uvedena na černé listině';

$MSG['wordfilter_banned_username'] = 'Vyberte jiné uživatelské jméno, protože náš filtr slov neumožňuje použití tohoto jména';

$MSG['custom_end_time'] = 'Nastavte vlastní čas ukončení';
$MSG['or_custom_end_time'] = 'Nebo můžete nastavit vlastní čas ukončení';
$MSG['ending_date'] = 'Datum ukončení';

$MSG['payment_name'] = 'Jméno';
$MSG['clean_payment_name'] = 'Upravit jméno <small>(všechny malé písmena bez mezer ani speciálních znaků)</small>';

$MSG['all_user_groups'] = 'Všechny skupiny uživatelů';
$MSG['login_required_text'] = 'Je vyžadováno přihlášení';
$MSG['end_date'] = 'Datum konce';
$MSG['delete'] = 'vymaž';

$MSG['all_error_messages'] = 'Všechny chyby';
$MSG['unique_error_messages'] = 'Unikátní chyby';

$MSG['any_country'] = 'Jakákoliv země';

$MSG['moderate_auctions'] = 'Moderované aukce';
$MSG['moderation_queue'] = 'Fronta moderování';

$MSG['moderator_dismiss'] = 'Zamítnout';
$MSG['remove_auction_from_moderation'] = 'Odebrat aukci z moderování';
$MSG['remove_auction_from_moderation_explain'] = 'Opravdu chcete tuto aukci odstranit z fronty moderování? <br> Tato akce aukci znovu neaktivuje.';

$MSG['auction_awaiting_approval'] = 'Aukce čeká na schválení';

// item_watch.php
$MSG['item_watch_item_removed'] = 'Aukce odstraněna ze seznamu sledovaných položek';
$MSG['item_watch_item_added'] = 'Aukce byla přidána do seznamu sledovaných položek';
$MSG['item_watch_not_added'] = 'Aukce je již na seznamu sledovaných';

// dates
$MSG['year_s'] = 'rok(y)';
$MSG['month_s'] = 'měsíc(e)';
$MSG['day_short'] = 'd';
$MSG['hour_short'] = 'h';
$MSG['minute_short'] = 'm';

// yourmessages.tpl
$MSG['delete_message_confirm'] = 'Opravdu chcete tuto zprávu smazat?';

//Countdown Timer Messages
$MSG['count_years'] = " roky";
$MSG['count_year'] = " rok";
$MSG['count_months'] = " měsíce";
$MSG['count_month'] = " měsíc";
$MSG['count_hours'] = " hodiny";
$MSG['count_hour'] = " hodina";
$MSG['count_days'] = " dny";
$MSG['count_day'] = " den";
$MSG['count_minutes'] = " minuty";
$MSG['count_minute'] = " minuta";
$MSG['count_seconds'] = " sekundy";
$MSG['count_second'] = " sekunda";

$MSG['error_duplicate_group_name'] = "Pokoušíte se přidat skupinu s názvem již existující skupiny, nebo názvem podobným existující skupině. Název skupiny musí být unikátní a nesmí začínat stejným slovem jako název jiné skupiny. Prosím nazvěte skupinu jinak.";
