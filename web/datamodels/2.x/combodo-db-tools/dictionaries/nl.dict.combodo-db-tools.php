<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */

/**
 * @author Jeffrey Bostoen <info@jeffreybostoen.be> (2018 - 2022)
 * @author Thomas Casteleyn <thomas.casteleyn@super-visions.com>
 */
Dict::Add('NL NL', 'Dutch', 'Nederlands', [
	'DBAnalyzer-Fetch-Count-Error' => 'Opvraag-fout in "%1$s", %2$d records opgevraagd / %3$d geteld',
	'DBAnalyzer-Integrity-FinalClass' => 'Veld `%2$s`.`%1$s` moet dezelfde waarde hebben als `%3$s`.`%1$s`',
	'DBAnalyzer-Integrity-HKInvalid' => 'Ongeldige hiërarchische sleutel (ID) `%1$s`',
	'DBAnalyzer-Integrity-InvalidExtKey' => 'Ongeldige externe sleutel %1$s (kolom: "%2$s.%3$s")',
	'DBAnalyzer-Integrity-InvalidValue' => 'Ongeldige waarde voor %1$s (kolom: "%2$s.%3$s")',
	'DBAnalyzer-Integrity-MissingExtKey' => 'Ontbrekende externe sleutel %1$s (kolom: "%2$s.%3$s")',
	'DBAnalyzer-Integrity-OrphanRecord' => 'Wees-record in "%1$s", het zou een verwant record moeten hebben in de tabel "%2$s"',
	'DBAnalyzer-Integrity-RootFinalClass' => 'Veld `%2$s`.`%1$s` moet een geldige klasse bevatten.',
	'DBAnalyzer-Integrity-UsersWithoutProfile' => 'Sommige gebruikersaccounts hebben geen profiel',
	'DBTools:Analyze' => 'Analyseer',
	'DBTools:Base' => 'Base',
	'DBTools:Class' => 'Klasse',
	'DBTools:Count' => 'Aantal',
	'DBTools:DatabaseInfo' => 'Database-informatie',
	'DBTools:DetailedErrorLimit' => 'Lijst beperkt tot %1$s fouten',
	'DBTools:DetailedErrorTitle' => '%2$s fout(en) in klasse %1$s: %3$s',
	'DBTools:Details' => 'Toon details',
	'DBTools:Disclaimer' => 'Disclaimer: neem een back-up van de database vooraleer de fixes uit te voeren.',
	'DBTools:Error' => 'Fout',
	'DBTools:ErrorsFound' => 'Fouten gevonden',
	'DBTools:FetchCheck' => 'Opvraag-check (fetch) (long)',
	'DBTools:FixitSQLquery' => 'SQL-query die mogelijk het probleem verhelpt',
	'DBTools:HideIds' => 'Overzicht fouten',
	'DBTools:Inconsistencies' => 'Inconsistenties in database',
	'DBTools:Indication' => 'Belangrijk: na het oplossen van de fouten in de database, voer je deze analyse best opnieuw uit omdat er intussen nieuwe inconsistente records gegenereerd kunnen zijn.',
	'DBTools:IntegrityCheck' => 'Integriteitscheck',
	'DBTools:LostAttachments' => 'Verloren bijlages',
	'DBTools:LostAttachments:Button:Analyze' => 'Analyseer',
	'DBTools:LostAttachments:Button:Busy' => 'Even geduld...',
	'DBTools:LostAttachments:Button:Restore' => 'Herstel',
	'DBTools:LostAttachments:Button:Restore:Confirm' => 'Deze actie kan niet ongedaan worden gemaakt. Bevestig dat je de bijlages wil herstellen.',
	'DBTools:LostAttachments:Disclaimer' => 'Zoek hier verloren or verkeerd geplaatste bijlages. Dit is geen recovery-tool, het kan geen gewiste data herstellen.',
	'DBTools:LostAttachments:History' => 'Bijlage "%1$s" werd hersteld met de databasetools',
	'DBTools:LostAttachments:Step:Analyze' => 'Zoek eerst verloren/verkeerd geplaatste bijlages door de database te analyseren.',
	'DBTools:LostAttachments:Step:AnalyzeResults' => 'Resultaten analyse:',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:CurrentLocation' => 'Huidige locatie',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:Filename' => 'Bestandsnaam',
	'DBTools:LostAttachments:Step:AnalyzeResults:Item:TargetLocation' => 'Verplaats naar ...',
	'DBTools:LostAttachments:Step:AnalyzeResults:None' => 'Perfect, alles lijkt op de juiste plaats te staan!',
	'DBTools:LostAttachments:Step:AnalyzeResults:Some' => 'Somme bijlages (%1$d) lijken verkeerd te staan. Overloop de lijst en duid aan welke je wil verplaatsen.',
	'DBTools:LostAttachments:Step:RestoreResults' => 'Resultaten herstel:',
	'DBTools:LostAttachments:Step:RestoreResults:Results' => '%1$d/%2$d bijlages werden hersteld.',
	'DBTools:LostAttachments:StoredAsInlineImage' => 'Opgeslagen als afbeelding in tekst',
	'DBTools:NoError' => 'De database is OK',
	'DBTools:SQLquery' => 'SQL-query',
	'DBTools:SQLresult' => 'Resultaat SQL-query',
	'DBTools:SelectAnalysisType' => 'Selecteer soort analyse',
	'DBTools:ShowAll' => 'Toon alle fouten',
	'DBTools:ShowIds' => 'Gedetailleerde weergave',
	'DBTools:ShowReport' => 'Rapport',
	'DBTools:Size' => 'Grootte',
	'DBTools:Title' => 'Onderhoudstools voor de database',
	'Menu:DBToolsMenu' => 'Databasetools',
]);
