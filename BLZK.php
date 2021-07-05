<?php
if(!empty($_GET)) extract($_GET);
if(!empty($_POST)) extract($_POST);
function popt_($val, $sel, $txt){
  if ($val == $sel)
    print '<option value="' .$val. '" selected> ' . $txt . "</option>\n";
  else 
    print '<option value="' .$val. '" > ' . $txt . "</option>\n";
}
?>
<HTML>
<HEAD>
	<TITLE>iaktueller.de: BLZKontoCheck (Java, JavaScript, PHP, COBOL, ANSI-C) - Qualität seit 2003</TITLE>
	<META NAME="AUTHOR" CONTENT="Franz Scheerer">
	<META NAME="DESCRIPTION" CONTENT="Plausibilit&auml;t Pr&uuml;fung, IT Sicherheit, Internetauftritt  KMU">
	<META NAME="KEYWORDS" CONTENT="BLZ, Bankleitzahl, Konto, Kontonummer,
	HTML, PHP, COBOL, JAVASCRIPT, CGI, Bundesbank">
	<META NAME="Publisher" CONTENT="Franz Scheerer">
	<META NAME="Copyright" CONTENT="Franz Scheerer Software">
	<META NAME="Page-topic" CONTENT="Internet, Webdesign, KMU,  IT-Sicherheit">
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1" />
	<meta name="robots" content="index,FOLLOW" />
	<link href="blz.ico" rel="shortcut icon">


</HEAD>
<BODY>
<!- HAUPTABELLE -->
<span style="font-size:2.0em">
<table border="4" bordercolor=green><tr>
<td valign="top" bgcolor=#d0d0d0 bordercolor=green>
<h2>Qualität seit&nbsp;2003</h2>
BLZKontoCheck, wird seit Jahren produktiv eingesetzt und
 überzeugt
durch seinen <b>Nutzwert</b>, die <b>Qualität</b>
 und seine <b>Mittelstandseignung</b>. Eine
korrekte Funktion entsprechend den Regeln der Bundesbank ist 
weitgehend sichergestellt. Eventuell noch auftretende Fehler werden,
sobald bekannt,
 kurzfristig behoben.
<br><hr>
<table><tr><td bgcolor=yellow>
<font size="+2" color="#800000" >Neu:</font></td></tr></table> 
<h2>Von Java bis COBOL</h2>
Die Software ist praktisch für alle
wesentlichen Entwicklungsumgebungen und Programmiersprachen
verfügbar und kann daher auch in Ihre Anwendung integriert werden.
Die Java-Implementierung wurde an der 
<a href="http://www.informatik.uni-kiel.de"
target="_blank"> Universität Kiel</a> im
Fachbereich Informatik getestet. 

<h2>Fehlerfreie Erfassung der IBAN</h2>
Tippfehler bei der Erfassung der IBAN verursachen sind ärgerlich und können
Kosten verursachen. Das muss nicht
sein! Tippfehler können zu fast 90&nbsp;% auch durch die Prüfziffer
in der Kontonummer, die weiterhin Bestandteil der IBAN ist, erkannt werden. Die 
<a href="http://de.wikipedia.org/wiki/IBAN" 
target="_blank">IBAN</a> wird seit 2014 immer bei SEPA-Überweisungen
genutzt. Sie enthält noch zwei weitere
Prüfziffern, so dass Tippfehler in über 99,8&nbsp;% der Fälle erkannt
werden. Weitere Prüfungen wie der Abgleich mit den Bestandsdaten zur Bankleitzahl
schließen zufällige Fehler bei der Erfassung faktisch aus. 
<h2>Prüfung der Identität</h2>
BLZKontoCheck kann auch mittels der Abfrage
der Bankverbindung durch ein Callcenter zur
Identitätsprüfung dienen.
<h2>Nutzen Sie BLZKontoCheck</h2>
<a href="blzkontocheck.php"
onclick='window.open("nutzung.html", "Lizenzbedingungen",
"width=400,height=500,scrollbars=yes ");'> Nutzungbedingungen</a>

<h2> Die Vorteile von BLZKontoCheck </h2>

<a href="blzkontocheck.php"
onclick='window.open("vorteile.html", "Ihre Vorteile",
"width=400,height=500,scrollbars=yes ");'> Geldwerte Vorteile </a>
für Ihr Unternehmen. 
<h1> Informationen der Bundesbank </h1>
Der Bankleitzahlenbestand wird vierteljährlich zum Montag nach dem jeweils
ersten Sonnabend der Monate März, Juni, September und Dezember
aktualisiert.
<p>
Die ab dem nächsten Aktualisierungstermin gültige Bankleitzahlendatei steht
Ihnen unter der nachfolgenden Internetadresse der Bundesbank zum Abruf zur Verfügung:
<p><a
href="http://www.bundesbank.de/"
target="_blank"
>Download vom Server der Bundesbank </a>
<br>
Sie finden dort auch weitere Informationen zum Zahlungsverkehr.

<h2>Editionen und Preise</h2>
<ul>
<li><b> Programmiersprachen (Hard- und Software)</b>
<ol>
	<li>Java (Jede Soft- und Hardware)</li>
	<li>COBOL (Großrechner, zum Beispiel IBM)</li>
	<li>Standard-C (Standard-Anwendung, DBMS, Webserver) </li>
	<li>PHP (Standard für Webanwendungen, HTTP-Server)</li>
<!--	<li>JavaScript (Browser, PC oder Notebook)</li> -->
</ol>



<li><b>Preise</b></li>
   <ul>
	<li>Basispreis: 145,00 EUR (Standard, eine Variante)</li>
	<li>Update-Service (29,95 EUR/Quartal)</li>
	<li>mehrere Varianten: (29,95 EUR pro Variante)</li>
	<li>Erweiterungen: 29,95 EUR</li>
	<li>Individuelle Programmierung: 
   	  <ul>
            <li> Stundensatz 40 EUR zzgl. MwSt
	    <li>Integration in Datenbanken (MySQL)</li>
	    <li>Integration in bestehende Anwendung 
	         wie Online-Shop
	    </li>
          </ul>

   </ul>
</ul>
<hr>
<small>
Angebot an <b>Unternehmen</b> der IT-Branche, 
Versandhändler und weitere Unternehmen: Alle Preise gelten zzgl. der gesetzlichen Mehrwertsteuer.
</small>

</td><td valign="top">

<H2>BLZKontoCheck &ndash; Online-Pr&uuml;fung (Stand 2019)</H2>

Die <A HREF= "http://www.bundesbank.de/"
target="_blank">Bundesbank</a> ver&ouml;ffentlicht eine Beschreibung
von zur Zeit 142 Methoden zur Berechnung der Pr&uuml;fziffer innerhalb
der Kontonummer. Die jeweils anzuwendende Methode
unterscheidet sich je nach Geldinstitut und ist der von der Bundesbank 
ver&ouml;ffentlichen Liste der Bankleitzahlen zu
entnehmen.<p> 
<h2>Änderungen der Berechnungsmethoden</h2>
Die Berechnungsmethoden wurden zuletzt im September 2016 aktualisiert (Methode 74).
<p>
Die Pr&uuml;fung entsprechend dieser Methoden wird hier online
 mit 
einer von mir entwickelten Software durchgef&uuml;hrt.
Die Berechnung basiert auf den aktuellen Daten gültig
ab Juni 2016 und der neuesten Beschreibung der
Prüfzifferberechnungsmethoden von 2015 einschlie&szlig;lich E1.
<p> Nach der Eingabe von Bankleitzahl und Kontonummer wird die Pr&uuml;fung online durchgef&uuml;hrt.
Zus&auml;tzlich wird die International Bank Account Number (IBAN) mit
zwei zus&auml;tzlichen Pr&uuml;fziffern berechnet. Bei
ausl&auml;ndischen Konten wird ausschlie&szlig;lich die IBAN mit zwei Pr&uuml;fziffern berechnet.

<?

function iban_pzi($iban, $knr){
    $tmp = '';
    $iban = strtoupper($iban);
    $tmp .= strtoupper($knr);
    $tmp .=  (ord($iban{0})-55);
    $tmp .=  (ord($iban{1})-55);
    $tmp .= '00';

    $sum=0;
    $tmp = str_replace(' ', '', $tmp);

    for($i=0;$i<strlen($tmp);$i++){
        if (ord($tmp{$i})-48 > 9){
          $sum = (100*$sum + ord($tmp{$i})-55)%97;
        } else { 
	  $sum = (10*$sum + ord($tmp{$i})-48)%97;
        }
    }
    $sum = 98 - $sum;
    if ($sum<10) $sum = '0' . $sum;
    $iban = $iban . "$sum";
    $ll = strlen($tmp)-6;
    $ofs = 0;
    while ($ll > 0){
     if ($ll > 3)
     {
       $iban .= ' ' .substr($tmp,$ofs,4);
       $ofs = $ofs + 4;
       $ll = $ll - 4;
     }
     else 
     {
       $iban .= ' ' .substr($tmp,$ofs,$ll);
       $ll = 0;
     }
    }
    return $iban;
}


function iban_pz($iban, $blz, $knr){
    $tmp = '';
    $iban = strtoupper($iban);
    for ($i=strlen($blz);$i<8;$i++) $tmp .= '0';
    $tmp .= $blz;
    for ($i=strlen($knr);$i<10;$i++) $tmp .= '0';
    $tmp .= $knr;
    $tmp .=  (ord($iban{0})-55);
    $tmp .=  (ord($iban{1})-55);
    $tmp .= '00';

    $tmp = str_replace(' ', '', $tmp);

    $sum=0;
    for($i=0;$i<strlen($tmp);$i++){
	$sum = (10*$sum + ord($tmp{$i})-48)%97;
    }
    $sum = 98 - $sum;
    if ($sum<10) $sum = '0'.$sum;
    $iban = "DE$sum";
    $iban .= ' ' .substr($tmp,0,4) . ' ' . substr($tmp,4,4) . ' ' .
                  substr($tmp,8,4) . ' ' . substr($tmp,12,4) . ' ' .
                  substr($tmp,16,2);
    return $iban;
}

include('data.inc');
include('data2.inc');
include('data3.inc');

function getname($blz,$data2){
 for ($i=0;$i<sizeof($data2);$i+=2)
    if ($blz==$data2[$i]) return $data2[$i+1];
 return -1;
}
function getbic($blz,$data3){
 for ($i=0;$i<sizeof($data3);$i+=2)
    if ($blz==$data3[$i]) return $data3[$i+1];
 return -1;
}


function getrule($blz,$data){
 for ($i=0;$i<sizeof($data);$i+=2) 
    if ($blz==$data[$i]) return $data[$i+1];
 return -1;
}
function qs($i){
  $sum = 0;
  while ($i>0){
    $sum += floor($i%10);
    $i = floor($i/10);
  }
  return $sum;
}
function hex($x){
  $x=toupper($x);
  $c0 = $x{0};
  $c1 = $x{1};
  if ($c0<58) $c0-=48; else $c0-=55; 
  if ($c1<58) $c1-=48; else $c1-=55;
  return 16*$c0+$c1; 
}

function pz($method, $knr, $blz){
    $tab =  array(0,1,5,9,3,7,4,8,2,6,
                  0,1,7,6,9,8,3,2,5,4,
                  0,1,8,4,6,2,9,5,7,3,
                  0,1,2,3,4,5,6,7,8,9);
    $ga = "212121212";
    $gb = "371371371";
    $gc = "234567892";
    $gd = "234567234";
    $ge = "731731731";
    $gf = "23456789:";
    $gg = "234523452";
    $gh = "121212121";
    $gi = "123123123";
    $gj = "234567891";
    $gk = "397139713";    
    $gl = "234567893";
    $gm = "313131313";

    $nr  = "";
    $sum = 0;
    $tmp = '';

    for ($i=strlen($knr);$i<10; $i++) $tmp .= '0';
    $tmp .= $knr;
    $nr = $tmp;
    
    if (strlen($blz) != 8){
      print "<br><br><b>Feher:</b> Bankleitzahl $blz nicht 8-stellig";
      return -1;
    }
    $cmp = ord($nr{9})-48;

    switch($method){
      case 0:
          for($i=0;$i<9;$i++){
             $sum += qs((ord($ga{$i})-48)*(ord($nr{$i})-48));
          }
          return (10 - $sum%10) % 10 - $cmp;
      case 1:
          for($i=0;$i<9;$i++){
             $sum += (ord($gb{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
      case 2:
          $sum = 0;
          for($i=0;$i<9;$i++){
             $sum += (ord($gc{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (11 - $sum%11) % 11 - $cmp;
     case 3:
          for($i=0;$i<9;$i++){
             $sum += (ord($ga{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
     case 4:
          for($i=0;$i<9;$i++){
             $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (11 - $sum%11) % 11 - $cmp;
          break;
     case 5:
          for($i=0;$i<9;$i++){
             $sum += (ord($ge{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
     case 6:
          for($i=0;$i<9;$i++){
             $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 7:
          for($i=0;$i<9;$i++){
             $sum += (ord($gf{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (11 - $sum%11) % 11 - $cmp;
          break;
     case 8:
	  if ($nr < 60000) return 0;
          for($i=0;$i<9;$i++){
             $sum += (ord($ga{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (10 - $sum%10) % 10;
          break;
     case 9: return 0;
     case 10:
          $sum = 0;
          for($i=0;$i<9;$i++){
             $sum += ($i+2)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 11:
          for($i=0;$i<9;$i++){
             $sum += (ord($gf{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11 == 10 ? (9 - $cmp)
                                            : (11 - $sum%11) % 11) - $cmp;
          break;
     case 13:
	  if ( substr($nr,0,2) == "00"){
             for($i=1;$i<7;$i++){
                $sum += qs( (ord($ga{$i-1})-48)*
                                  (ord($nr{9-$i})-48) );
             }
             if ((10 - $sum%10) % 10 == $cmp) return 0;
          }
          $sum = 0;
	  $cmp = ord($nr{7}) - 48;
          for($i=1;$i<7;$i++){
             $sum += qs( (ord($ga{$i-1})-48)*
                               (ord($nr{7-$i})-48) );
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
     case 14:
          for($i=0;$i<6;$i++){
             $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (11 - $sum%11) % 11 - $cmp;
          break;
     case 15:
          for($i=0;$i<4;$i++){
             $sum += (ord($gg{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 16:
          for($i=0;$i<9;$i++){
             $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          if ($sum%11==1){
	      return ord($nr{8})-48;
          }  
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 17:
	  $cmp = ord($nr{7})-48;
          for($i=2;$i<=7;$i++){
	      if ($i%2) {
                 $sum += qs(2*(ord($nr{$i-1})-48));
              } else {
                 $sum += (ord($nr{$i-1})-48);
              }
          }
          return ( 10 - (($sum - 1) % 11) ) % 10 - $cmp;
          break;
     case 18:
          for($i=0;$i<9;$i++){
             $sum += (ord($gk{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
     case 19:
          for($i=0;$i<9;$i++){
             $sum += (ord($gj{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 20:
          for($i=0;$i<9;$i++){
             $sum += (ord($gl{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
     case 21:
          for($i=0;$i<9;$i++){
             $sum += qs( (ord($ga{$i})-48)*(ord($nr{9-$i-1})-48) );
          }
          while ($sum >= 10)
             $sum = qs($sum);
          return 10 - $sum - $cmp;
          break;
     case 22:
          for($i=0;$i<9;$i++){
             $sum += (ord($gm{$i})-48)*(ord($nr{9-$i-1})-48) % 10;
          }
          return (10 - $sum%10) % 10 - $cmp;
          break;
     case 23:
          $gew = 7;
          $sum = 0;
          for($i=0;$i<7;$i++){
             $sum += $gew * (ord($nr{$i})-48);
             $gew--;
          }
          return $sum%11;
     case 24:
	 $delta = 0;
	 if ( $nr{0} == '0'
           || $nr{0} == '3'
           || $nr{0} == '4'
           || $nr{0} == '5'
           || $nr{0} == '6'){
            for($i=2;$i<=9;$i++){
		if ($sum>0 || $nr{$i-1} != '0'){      
		    $sum +=((ord($gi{$i-$delta-2})-48) * (ord($nr{$i-1})-48)
                   +(ord($gi{$i-$delta-2})-48)) % 11;  
              } else $delta++;
            }
          } else if (ord($nr{0}) == 48+9){
              for($i=4;$i<=9;$i++){
                  $sum += ( (ord($gi{$i-4})-48)*(ord($nr{$i-1})-48)
                          + (ord($gi{$i-4})-48) ) % 11;
              }
          } else {
              for($i=1;$i<=9;$i++){
                  $sum += ( (ord($gi{$i-1})-48)*(ord($nr{$i-1})-48)+
                            (ord($gi{$i-1})-48) ) % 11;
              }
          }
	  return $sum % 10 - $cmp;
        
      case 25:
          for($i=0;$i<8;$i++){
             $sum += (ord($gj{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          if ($sum%11 == 1){
	     if( (ord($nr{1}) == 48+8) ||
                 (ord($nr{1}) == 48+9) )
		 return 0 - $cmp;
             else
                 return 10 - $cmp;
          }
          return (11 - $sum%11) % 11 - $cmp;
          break;
      case 26:
          $cmp = ord($nr{7})-48;
          if (ord($nr{0})==48 && ord($nr{1})==48){
	     $cmp = ord($nr{9}) - 48;
             for($i=0;$i<7;$i++){
                $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
             }
          } else {
             for($i=0;$i<7;$i++){
                $sum += (ord($gd{$i})-48)*(ord($nr{7-$i-1})-48);
             }
          }
          return ((11 - $sum%11) % 11) % 10 - $cmp;
          break;
      case 27:
          if (ord($nr{0})==48) 
               return pz(0,$nr,$blz);
          for($i=0;$i<9;$i++){
	      $sum += $tab[($i%4)*10+ord($nr{8-$i})-48];
          }
          return (10-$sum%10)%10 - $cmp;
     case 28:
	 $cmp = ord($nr{7}) - 48;
         if ($nr<1000) return 0;
         for($i=1;$i<=7;$i++)
	     $sum += (ord($nr{$i-1})-48)*(9-$i);
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 29:
          for($i=0;$i<9;$i++){
	      $sum += $tab[($i%4)*10+ord($nr{8-$i})-48];
          }
          return (10-$sum%10)%10 - $cmp;
     case 30:
	 $sum = 2*(ord($nr{0})-48);
         for($i=6;$i<=9;$i++)
	     $sum += ($i%2+1)*(ord($nr{$i-1})-48); 
         return (10-$sum%10)%10 - $cmp; 
     case 31:
         for($i=1;$i<=9;$i++)
	     $sum += $i*(ord($nr{$i-1})-48);
         return $sum%11 - $cmp; 
     case 32:
          for($i=4;$i<=9;$i++){
             $sum += (11-$i)*(ord($nr{$i-1})-48);
          }
          return ((11 - $sum%11) % 11)%10 - $cmp;
          break;
     case 33:
	 for($i=5;$i<=9;$i++)
	     $sum += (11-$i)*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp; 
     case 34:
	 $gw = array (2,4,8,5,10,9,7);
	 $cmp = ord($nr{7}) - 48;
         for($i=1;$i<=7;$i++)
	     $sum += (ord($nr{$i-1})-48)*($gw[7-$i]);
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 35:
         for ($i=1;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
         $sum %= 11;
         if ($sum==10) return ord($nr{8})-48 - $cmp;
         return $sum - $cmp;
     case 36:
         $g = array (2,4,8,5);
         for($i=6;$i<=9;$i++)
	     $sum += (ord($nr{$i-1})-48)*$g[9-$i];
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 37:
         $g = array(2,4,8,5,10);
         for($i=5;$i<=9;$i++)
	     $sum += (ord($nr{$i-1})-48)*$g[9-$i];
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 38:
         $g = array (2,4,8,5,10,9);
         for($i=4;$i<=9;$i++)
	     $sum += (ord($nr{$i-1})-48)*$g[9-$i];
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 39:
         $g = array(2,4,8,5,10,9,7);
         for($i=3;$i<=9;$i++)
	     $sum += (ord($nr{$i-1})-48)*$g[9-$i];
         return ((11 - $sum%11) % 11) % 10 - $cmp;
     case 40:
	 $g = array(2, 4, 8, 5, 10, 9, 7, 3, 6);
         for($i=1;$i<=9;$i++)
	     $sum += (ord($nr{$i-1})-48)*$g[9-$i];
         return ((11-$sum%11)%11)%10 - $cmp;
     case 41:
	 if (ord($nr{3})==48+9){
          $nr = '000' . substr($nr,3,7); 
         }
         return pz(0,$nr,$blz);
     case 42:
         for ($i=1;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 -$cmp;
     case 43:
         for ($i=1;$i<=9;$i++) $sum += (10-$i)*(ord($nr{$i-1})-48);
         return (10-$sum%10)%10 - $cmp;
     case 44:
         $g = array (2,4,8,5,10,0,0,0,0);
         for ($i=1;$i<=9;$i++) $sum += $g[9-$i]*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;
     case 45:
         if (ord($nr{0})==48 || ord($nr{4})==48+1 || 
            ($nr[0] == '4' && $nr[1] == '8')) return 0;
         return pz(0,$nr,$blz); 
     case 46:
         $g = array(2,3,4,5,6);
         $cmp = ord($nr{7})-48;
         for ($i=3;$i<=7;$i++) $sum += $g[7-$i]*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;     
     case 47:
         $g = array (2,3,4,5,6);
         $cmp = ord($nr{8})-48;
         for ($i=4;$i<=8;$i++) $sum += $g[8-$i]*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;     
      case 48:
         $g = array (2,3,4,5,6,7);
         $cmp = ord($nr{8})-48;
         for ($i=3;$i<=8;$i++) $sum += $g[8-$i]*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;
     
      case 49:
	 if (pz(0,$nr,$blz) == 0) return 0;
         return pz(1,$nr,$blz); 

      case 50:
          if (substr($nr,0,3) != '000'){
             $cmp = ord($nr{6})-48;
             for($i=1;$i<=6;$i++){
	         $sum += (ord($nr{$i-1})-48)*(8-$i);
             }
	     return ((11-$sum%11)%11)%10 - $cmp;
          }
          for($i=4;$i<=9;$i++){
	         $sum += (ord($nr{$i-1})-48)*(11-$i);
          }
	  return ((11-$sum%11)%11)%10;
          for($i=4;$i<=9;$i++)
	         $sum += (ord($nr{$i-1})-48)*(11-$i);
	  return ((11-$sum%11)%11)%10 - $cmp;
      case 51:
          if ($nr{2}=='9'){
           $sum = 0;
           for($i=3;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	   $sum = ((11-$sum%11)%11)%10;
           if ($sum == $cmp) return 0;
           $sum = 0;
           for($i=1;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	   $sum = ((11-$sum%11)%11)%10;
           return $sum - $cmp;
          }
          $sum = 0;
          for($i=4;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	  $sum = ((11-$sum%11)%11)%10;
          if ($sum == $cmp) return 0;
          $sum=0;
          for($i=5;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	  $suma = ((11-$sum%11)%11)%10;
          if ($suma == $cmp) return 0;
	  $suma = (7-$sum%7)%7;
          if ($suma == $cmp) return 0;
          $sum=0;
          for($i=4;$i<=9;$i++)
	      $sum +=qs((ord($nr{$i-1})-48)*($i%2+1));
	  return (10-$sum%10)%10 - $cmp;
          
     case 52:
     case 53:
     {
        if ($nr{0}=='9') return pz(20,$nr,$blz);
        return 0;
     }
     case 54:
         for ($i=3;$i<=9;$i++) $sum += (ord($gd{9-$i})-48)*
                                   (ord($nr{$i-1})-48);
         return 11-$sum%11 - $cmp;
     case 55:
         for ($i=3;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
         for ($i=1;$i<=2;$i++) $sum += (9-$i)*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;
     case 56:
	 for ($i=1;$i<=9;$i++){
	     $sum += ((9-$i)%6+2)*(ord($nr{$i-1})-48); 
         }
         $sum = 11 - $sum%11;
         if ($nr{0}='9' && $sum > 9) $sum -= 3;
         return $sum - $cmp;
     case 57:
          $tmp = substr($nr,0,2);
          if ($tmp==0) return -1;
          if (substr($nr,0,10)=='0185125434') return 0;
          if ($tmp<32){
             if (  substr($nr,2,2) <1
                || substr($nr,2,2) >12
                ) return -1;  
             if (substr($nr,6,3)>500) return -1;
             return 0;  
          }
          if (  $tmp==40
             || $tmp==50
             || $tmp==91
             || $tmp==99 ) return 0;
          if (  ($tmp>=75 && $tmp<=82)
              || $tmp==51
              || $tmp==55
              || $tmp==61
              || $tmp==64
              || $tmp==65
              || $tmp==66
              || $tmp==70
              || $tmp==73
              || $tmp==88
              || $tmp==94
              || $tmp==95
          ){
             if (substr($nr,0,6)=='777777' || substr($nr,0,6)=='888888')
                 return 0;             
             $gewicht=1;
             $pziffer=9;                     
          } else {
             $gewicht=1;
             $pziffer=2;    
          }
          $sum=0;
          for($i=0;$i<10;$i++){
             if ($pziffer!=$i)
                $sum += qs( $gewicht*( ord($nr{$i})-48) );
             else 
                $sum += ord($nr{$i})-48;
            if ($pziffer!=$i) $gewicht = 3 - $gewicht;
          }
          return $sum%10;
     case 58:
          for($i=5;$i<=10;$i++) $sum += (ord($nr{$i-1})-48)*(11-$i);
          return $sum%11;
     case 59:
         if ($nr{0}=='0') return 0;
         return pz(0,$nr,$blz); 
     case 60:
	 $nr = substr($nr,2,8);
         return pz(0,$nr,$blz);
     case 61:
         $cmp = ord($nr{7})-48;
         for ($i=1;$i<=7;$i++){
	     $sum += qs((1+$i%2)*(ord($nr{$i-1})-48));
         }
         if ($nr{8}=='8'){
             for ($i=9;$i<=10;$i++)
	        $sum += qs((2-$i%2)*(ord($nr{$i-1})-48));          
         }
         return (10-$sum%10)%10 - $cmp;
     case 62:
          $cmp = ord($nr{7})-48;
          for($i=1;$i<=7;$i++) $sum += qs((1+$i%2)*(ord($nr{$i-1})-48));
          return (10-$sum%10)%10 - $cmp;
      case 63:
	  if ($nr{0}!='0') return 10;
          return pz(13,$nr,$blz);          
      case 64:
          $g = array(9,10,5,8,4,2,1);
	  for($i=1;$i<=7;$i++) $sum += $g[$i-1]*(ord($nr{$i-1})-48);
          if ($sum%11 == 0) return 0;          
          if ($sum%11 == 1 && $nr{6} == '0') return 0; else return -1; 
      case 65:
          $cmp = ord($nr{7})-48; 
	  for($i=1;$i<=7;$i++) $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
          if ($nr{8}=='9') {
	     for($i=9;$i<=10;$i++) 
                $sum += qs( (2-$i%2)*(ord($nr{$i-1})-48));
          }
          return (10-$sum%10)%10 - $cmp;
      case 66:
          if ($nr{1} == '9') return 0;
          $sum = 7*(ord($nr{1})-48); 
	  for($i=5;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
          $sum %= 11;
          if ($sum>1) return 11-$sum - $cmp;
          return 1-$sum - $cmp; 
      case 67:
          $cmp = ord($nr{7})-48; 
	  for($i=1;$i<=7;$i++) 
             $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
          return (10-$sum%10)%10 - $cmp;
      case 68:
          if ($nr{0} != '0'){
             $nr = '000' . substr($nr,3,7);
             if ($nr{3} != '9') return -1;
             return pz(0,$nr,$blz);
          }

          if (substr($nr,0,2) == '04' ) return 0;

          if (pz(0,$nr,$blz) == 0) return 0;

          $sum = ord($nr{1}) - 48;
          $gw = 2;
          for($i=5; $i<=10; $i++){
             $sum += qs ( $gw * (ord($nr{$i-1})-48) );
             $gw = 3 - $gw;
          }
          return $sum%10;
     case 69:
	  if ($nr{0}=='9' && $nr{1}=='3') 
              return pz(9,$nr,$blz);
	  if ($nr{0}!='9' || substr($nr,1,1)!='7'){
	      if (pz(28,$nr,$blz) == 0) return 0; 
          } 
          $cmp = ord($nr{9})-48;
          for($i=0;$i<9;$i++){
              $sum += $tab[($i%4)*10+(ord($nr{9-$i-1})-48)];
          }
          return (10 - $sum%10)%10 - $cmp;
      case 70:
	  if ($nr{3}=='5' || 
             ($nr{3}=='6' && $nr{4}=='9')){
              $nr = substr($nr,3,7);
          }           
          return pz(6,$nr,$blz);
      case 71:
          for ($i=2;$i<=7;$i++)
	      $sum += (ord($nr{$i-1})-48)*(8-$i);
          $sum = (11 - $sum%11)%11;          
          return $sum == 10 ? 1 - $cmp : $sum - $cmp;
      case 73:
          if ($nr{2} == '9'){
              for ($i=1;$i<=9;$i++){
	         $sum += ((11-$i)*(ord($nr{$i-1})-48));
              }
              return ((11-$sum%11)%11)%10 - $cmp;
          } else { 
              for ($i=4;$i<=9;$i++){
	         $sum += qs ((1+$i%2)*(ord($nr{$i-1})-48));
              }
          }
          return (10 - $sum%10) % 10 - $cmp;
      case 74:
           if (pz(0,$nr,$blz)==0) return 0;
           if (substr($nr,0,4)=="0000" && ord($nr{4})>48){
              for ($i=4;$i<=9;$i++)
                 $sum += qs ((1+$i%2)*(ord($nr{$i-1})-48));
              return (5-$sum%5)%5 - $cmp; 
           }
           return pz(4,$nr,$blz);             
      case 75:
          for ($cnt=1;$cnt<=9;$cnt++) if (ord($nr{$cnt-1})!=48) break;
          $cnt = 11-$cnt;
          switch($cnt){
              case 6:
              case 7:
		  for ($i=5;$i<=9;$i++) 
                      $sum += qs ( (1+$i%2)*(ord($nr{$i-1})-48) );
                  return ($sum + $cmp)%10;
              case 9:
              case 10:
                  if ($nr{1}=='9'){
                     $cmp = ord($nr{7})-48;
	 	     for ($i=3;$i<=7;$i++) {
                       $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
                     }
                     return ($sum + $cmp)%10;
                   }
                  $cmp = ord($nr{6})-48;
		  for ($i=2;$i<=6;$i++) 
                     $sum += qs ( (2-$i%2)*(ord($nr{$i-1})-48) );
                  return ($sum + $cmp) % 10;
          }
          return 0;                     
      case 76:
          if ($nr{0} == '5' || $nr{0} == '2' || $nr{0} == '3' || $nr{0} == '1')
          {
             return -1;
          } 
          $gw = 7; 
          $sum = 0;
          for ($i=2; $i<=7; $i++){
	      $sum += (ord($nr{$i-1})-48)*$gw;
              $gw--;
          }
          $rest = $sum % 11;
          if ($rest == 10) return 0;
          if ($rest == (ord($nr{7})-48)) return 0;
          $gw = 7; $sum = 0;
          for ($i=4; $i<=9; $i++){
              $sum += (ord($nr{$i-1})-48)*$gw;
              $gw--;
          }
          $rest = $sum % 11;
          if ($rest == 10) return 0;
          if ($rest == ord($nr{9}) - 48) return 0;
      case 77:
          $g = array(5,4,3,4,5);
          for($i=6;$i<=10;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
          if ($sum%11==0) return 0;
          $sum=0;
          for($i=6;$i<=10;$i++) $sum += (ord($nr{$i-1})-48)*$g[10-$i];
          if ($sum%11) return 99;
          return 0;
      case 78:
          if (substr($nr,0,2) == '00' && $nr{3} != '0') return 0;
          return pz(0,$nr,$blz);
      case 79:
          switch(ord($nr{9})-48){
            case 0: return 99;
            case 1: 
            case 2:
            case 9:
                  $cmp = ord($nr{8})-48;
                  for ($i=1;$i<=8;$i++) 
                     $sum += qs ((2-$i%2)*(ord($nr{$i-1})-48));
                  return (10-$sum%10)%10 - $cmp;
            default: 
                  for ($i=1;$i<=9;$i++) 
                      $sum += qs ((1+$i%2)*(ord($nr{$i-1})-48));
                  return (10-$sum%10)%10 - $cmp;
           }
      case 80:
           if (substr($nr,0,2) == "99") return pz(10,$nr,$blz);
           for ($i=1;$i<=9;$i++) 
              $sum += qs ((1+$i%2)*(ord($nr{$i-1})-48));
           if ((10-$sum%10)%10 == 0) return 0;
           return (7-$sum%7)%7 - $cmp;
      case 80:
           if (substr($nr,2,2)=="99") return pz(10,$nr,$blz);
           for ($i=1;$i<=9;$i++) 
             $sum += qs ((1+$i%2)*(ord($nr{$i-1})-48));
           if ((10-$sum%10)%10 == $cmp) return 0;
           return (7-$sum%7)%7 - $cmp;
      case 81:
          if ($nr{2}=='9') return pz(10,$nr,$blz);
          for($i=4;$i<=9;$i++){
             $sum += (11-$i)*(ord($nr{$i-1})-48);
          }
          return ((11 - $sum%11) % 11)%10 - $cmp;
      case 82:
           if (substr($nr,2,2)=="99") return pz(10,$nr,$blz);
           return pz(33,$nr,$blz);  
      case 83:
           if (pz(32,$nr,$blz)==0) return 0;
           if (pz(33,$nr,$blz)==0) return 0;
           if ($nr{9}!= '7') return 99;
           $sum = 0;
           for($i=5;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
           return (7-$sum%7)%7 - $cmp;
      case 84:
          if ($nr{2}=='9'){
           $sum = 0;
           for($i=3;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	   $sum = ((11-$sum%11)%11)%10;
           if ($sum == $cmp) return 0;
           $sum = 0;
           for($i=1;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	   $sum = ((11-$sum%11)%11)%10;
           return $sum - $cmp;
          }
          $sum = 0;
          for($i=5;$i<=9;$i++)
	      $sum += (ord($nr{$i-1})-48)*(11-$i);
	  $suma = ((11-$sum%11)%11)%10;
          if ($suma == $cmp) return 0;
	  $suma = (7-$sum%7)%7;
          if ($suma == $cmp) return 0;
          $sum=0;
          for($i=5;$i<=9;$i++)
	      $sum +=((ord($nr{$i-1})-48)*($i%2+1));
	  return (10-$sum%10)%10 - $cmp;

      case 85:
           if (substr($nr,2,2) == "99"){
               for($i=3;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
               return (11 - $sum%11)%11 - $cmp;
           }
           $sum = 0;
           for($i=4;$i<=9;$i++) {
              $sum += (11-$i)*(ord($nr{$i-1})-48);
           #   print "$sum<br>";
           } 
           if ((11-$sum%11)%11%10 == $cmp) return 0;
           $sum = 0;
           for($i=5;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
           if ((11-$sum%11)%11%10 == $cmp) return 0;
           return (7-$sum%7)%7 - $cmp;
      case 86:
           if ($nr{2}=='9') return pz(10,$nr,$blz);
           $sum = 0;
           for($i=4;$i<=10;$i++){
              $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
           }
           if ($sum%10 == 0) return 0;
           $sum = 0;
           for($i=4;$i<=9;$i++)
              $sum += (11-$i)*(ord($nr{$i-1})-48);
           return (11-$sum%11)%11%10 - $cmp;
      case 87:{
           $c=0;$d=0;$a=0;$k=0;$p=0;
           $tab1 = array(0,4,3,2,6);
           $tab2 = array(7,1,5,9,8);
           if ($nr{2}=='9') 
                return pz(51,$nr,$blz);
           if (pz(33,$nr,$blz)==0) return 0;
             $gw__ = 7;
             for($i=4;$i<10;$i++){
                $sum += ($gw__)*(ord($nr{$i-1})-48);
                $gw__ = $gw__ - 1;
             }
           if (((11 - $sum%11) % 11) % 10 == $cmp) return 0;
           $sum = 0;
         
           for($i=5;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
           $sum = (7-$sum%7)%7;
           if ($sum==$cmp) return 0;

           for ($i=4;$i<=9;$i++){
             if ($nr{$i-1}!='0') break;
           }
           $c = $i%2;
           for (;$i<10;$i++){
             $k = ord($nr{$i-1})-48;
             switch($k){
             case 0: $k=5; break;
             case 1: $k=6; break;
             case 5: $k=10;break;
             case 6: $k=1; break;
           } 
           if ($c==$d){
             if ($k>5){
                if ($c+$d==0){
                  $c=$d=1;
                  $a += 12-$k;
                } else {
                  $c=$d=0;
                  $a += $k;
                }
             } else {// k<=5 
                if ($c+$d==0){
                  $c=1; $a+=$k;
                } else {
                  $c=0; $a+=$k;
                }
             }
           } else { // c!=d 
             if ($k>5){
                if ($c==0){
                 $c=1;$d=0;$a-=12-$k;
                } else {
                 $c=0;$d=1;$a-=$k;
                }
             } else {// k<=5 
                if ($c==0){
                 $c=1;$a-=$k;
                } else {
                 $c=0;$a-=$k; 
                }
             }
           }
         }
         while ($a<0) $a+=5;
         while ($a>4) $a-=5;
         if (!$d) $p=$tab1[$a]; else $p=$tab2[$a];
         if (ord($nr{9})-48 == $p) return $p-$cmp;
         if ($nr{3}=='0'){
            if ($p-5 == ord($nr{9})-48) return $p-5 - $cmp;
            if ($p+5 == ord($nr{9})-48) return $p+5 - $cmp;
         } 
         return 99;
      }
      case 88:
          if ($nr{2} == '9'){
             $sum = 0;
             for ($i=3;$i<=9;$i++)
	         $sum += (ord($nr{$i-1})-48)*(11-$i);
             return ((11 - $sum%11)%11)%10 - $cmp;
          }
          else {
             $sum = 0;
             for ($i=4;$i<=9;$i++)
                 $sum += (ord($nr{$i-1})-48)*(11-$i);
             return ((11 - $sum%11)%11)%10 - $cmp;
       }
       case 89:
             if ($nr{0}=='0' &&
                ($nr{1} != '0' || $nr{2}!='0'))
                    return pz(10,$nr,$blz);
             if (substr($nr,0,4)== "0000")
                     return 0;
             $sum = 0;
             for ($i=4;$i<=9;$i++){
                 $sum += qs ( (ord($nr{$i-1})-48)*(11-$i) );
             }
             return ((11 - $sum%11)%11)%10 - $cmp;
       case 90:
             if ($nr{2} == '9'){
              for ($i=3;$i<=9;$i++){
                 $sum += (ord($nr{$i-1})-48)*(11-$i);
              }
              return ((11 - $sum%11)%11)%10-$cmp;
             }
             for ($i=5;$i<=9;$i++)
                 $sum += (ord($nr{$i-1})-48)*(11-$i);
             if (((11 - $sum%11)%11)%10==$cmp) return 0;
             if ((7-$sum%7)%7==$cmp) return 0;
             if ((9-$sum%9)%9==$cmp) return 0;
             $sum += (ord($nr{4-1})-48)*(11-4);
             if (((11 - $sum%11)%11)%10==$cmp) return 0;
             $sum = 0;
             for ($i=5;$i<=9;$i++) $sum += (1+$i%2)*(ord($nr{$i-1})-48);
             if ((10-$sum%10)%10 - $cmp == 0) return 0;
             $sum += (ord($nr{4-1})-48);
             if ((7-$sum%7)%7==$cmp) return 0;

      case 91:
          if ($nr{0} == '0') return -1;
          $cmp = ord($nr{6})-48;
          $sum = 0; $gew = 7;
          for($i=1;$i<=7;$i++) {
             $sum += $gew*(ord($nr{$i-1})-48);
             $gew--;
          }
          if ($sum % 11 == 0) return 0;
          if ( ($cmp == 0) && ($sum % 11 == 1) ) return 0;
          $sum = 0;
          $gew = 2;
          for($i=1;$i<=7;$i++) {
              if ($i == 7) $gew == 1;
              $sum += $gew*(ord($nr{$i-1})-48);
              $gew++;
          }
          if ($sum % 11 == 0) return 0;
          if ( ($cmp == 0) && ($sum % 11 == 1) ) return 0;

          $sum = 0;
          $gew = 10;
          for($i=1;$i<=10;$i++) {
             $sum += $gew*(ord($nr{$i-1})-48);
             $gew--;
             if ($i==6) $gew=1;
             if ($i==7) $gew=4;
          }
          if ($sum % 11 == 0) return 0;
          if ( ($cmp == 0) && ($sum % 11 == 1) ) return 0;

          $sum = 0;
          $gew = 9;
          for($i=1;$i<=7;$i++) {
             $sum += $gew*(ord($nr{$i-1})-48);
             if ($i==1) $gew=10;
             else if ($i==3) $gew=8;
             else $gew /= 2;
          }
          if ($sum % 11 == 0) return 0;
          if ( ($cmp == 0) && ($sum % 11 == 1) ) return 0;

     case 92:
          $nr = substr($nr,3,7);
          return pz(1,$nr,$blz);
     case 93:
          if (substr($nr,0,4)=="0000"){
            for ($i=5;$i<=9;$i++){
               $sum += (11-$i)*(ord($nr{$i-1})-48);
            }
          } else {
            $cmp = ord($nr{5})-48;
            for ($i=1;$i<=5;$i++){
               $sum += (7-$i)*(ord($nr{$i-1})-48);
            }
          }
          if (((11-$sum%11)%11)%10 == $cmp) return 0;
          return (7-$sum%7)%7 - $cmp;
     case 94:
          for($i=0;$i<9;$i++){
             $sum += qs((ord($gh{$i})-48)*(ord($nr{9-$i-1})-48));
          }
          return (10 - $sum%10) % 10 - $cmp; 
     case 95:
	 if (pz(6,$nr,$blz) == 0)
	     return 0;
//Kontonr.: 0000000001 bis 0001999999
         if ($nr >= "0000000001" && $nr <= "0001999999") return 0;
//Kontonr.: 0009000000 bis 0025999999
         if ($nr <= "0025999999"
            && $nr >= "009000000")   return 0;
//Kontonr.: 0396000000 bis 0499999999
         if ($nr >= "0396000000"
            && $nr <= "0499999999") return 0;
//Kontonr.: 0700000000 bis 0799999999
         if ($nr{0} == '0' && $nr{1} == '7') return 0;
         return 99;
     case 96:
          if (pz(19,$nr,$blz) == 0){
              return 0;
          } else {
              if (pz(0,$nr,$blz) == 0){
		  return 0;
              } else {
		  if ($nr != "0001300000" 
		      && $nr >=99399999){
		      $cmp = ord($nr{9})-48;
                      return 0; 
		  } else {
		      $cmp = ord($nr{9})-48;
                      return 10;
                  }
              }
          }  
          for($i=0;$i<9;$i++){
             $sum = (10*$sum + (ord($nr{$i})-48)) % 11;
          }
          return $sum%10 - $cmp;
     case 97:
          for($i=0;$i<9;$i++){
             $sum = (10*$sum + (ord($nr{$i})-48)) % 11;
          }
          return $sum%10 - $cmp;
     case 98:
          for($i=0;$i<7;$i++){
             $sum += (ord($gb{$i})-48)*(ord($nr{$i+2})-48);
          }
          return (10 - $sum%10) % 10 - $cmp;
     case 99:
          for($i=0;$i<9;$i++){
             $sum += (ord($gd{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          if ($nr == "4999999999") $cmp = ((11 - $sum%11) % 11) % 10;
          if ($nr == "0396000000") $cmp = ((11 - $sum%11) % 11) % 10;
          return ((11 - $sum%11) % 11) % 10 - $cmp;
       case 100:
         $g = array(2,4,8,5,10,0,0,0,0);
         if (substr($nr,0,7)=="0000000") return 0;
         for ($i=1;$i<=9;$i++) $sum += $g[9-$i]*(ord($nr{$i-1})-48);
         return ((11-$sum%11)%11)%10 - $cmp;
       case 101:
         if ($nr{0}=='0' && $nr{1}!='0') return 10;
         if (substr($nr,0,3)=="000") return 11;
         return pz(0,$nr,$blz);
       case 102:
	   if (pz(0,$nr,$blz)==0) return 0;
           return pz(4,$nr,$blz);  
       case 103:
	   if (pz(0,$nr,$blz)==0) return 0;
           return pz(10,$nr,$blz);
       case 104:
            if (substr($nr,2,2)=="99"){
               for ($i=5;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
               if ((11-$sum%11)%11%10 == $cmp) return 0;
               $sum=0;
               return pz(93,$nr,$blz);
            }
            for ($i=4;$i<=9;$i++) $sum += (11-$i)*(ord($nr{$i-1})-48);
            if (((11-$sum%11)%11)%10==$cmp) 
	        return 0;
            if ((7-$sum%7)%7 == 0) return 0;
            $sum=0;
            return pz(93,$nr,$blz);  
       case 105:
            if (pz(0,$nr,$blz)==0) return 0;
            if ($nr{0}=='9') return 10;
            return pz(10,$nr,$blz);
       case 106:
            if ($nr{1}!='8') return pz(1,$nr,$blz);
            return pz(0,$nr,$cmp); 
       case 107:
            if (pz(0,$nr,$blz)==0) return 0;
            return pz(3,$nr,$blz);          
       case 108:
          if (ord($nr{2})-48 == 9) return pz(51,$nr,$blz);
          for($i=0;$i<6;$i++){
             $sum += (ord($gd{$i})-48) * (ord($nr{9-$i-1})-48);
          }
          if ( ((11 - $sum%11) % 11) % 10 == $cmp ) return 0;
          $sum = 0;
          for($i=3;$i<9;$i++){
             $sum += qs((ord($ga{$i})-48)*(ord($nr{$i})-48));
          }
          return (10 - $sum%10) % 10 - $cmp;
       case 109:
	   if (pz(1,$nr,$blz)==0) return 0;
           return pz(6,$nr,$blz);
       case 110: 
	   if ($nr{0}=='0' || $nr{0}=='8') return 99;
           if ( (ord($nr{7})-48)<4 && $nr{7} != '0'
                || substr($nr,7,1)=='6') return pz(9,$nr,$blz);
           return pz(6,$nr,$blz);
       case 111:
           if (pz(5,$nr,$blz)==0) return 0; 
           return pz(1,$nr,$blz); 
       case 112:
	   if (ord($nr{0})-48<=7) return pz(2,$nr,$blz);
           return pz(0,$nr,$blz);
       case 113:
	  if ($nr{0}!='9') return pz(32,$nr,$blz);
          return pz(6,$nr,$blz);
       case 114:
	  if ($nr{0}=='9') return pz(0,$nr,$blz);
          return pz(2,$nr,$blz);
       case 115:
          for($i=0;$i<9;$i++){
             $sum += (ord($ge{$i})-48)*(ord($nr{9-$i-1})-48);
          }
          if ((10 - $sum%10) % 10 == $cmp) return 0;
          if ($nr{0}=='9' || $nr{0}=='8') return -1;
          return pz(0,$nr,$blz);
       case 116:
          if ( $nr{0} != "0" || 
               ($nr >= '0269100000' and $nr <= '0269900000') ) {
                 return pz(20,$nr,$blz); 
          }
          return pz(53,$nr,$blz);
       case 117:
          if (substr($nr,0,3)=='000' &&
               ( substr($nr,3,1)   == '1'
              || substr($nr,3,1) == '2'  
              || substr($nr,3,1) == '3'  
              || substr($nr,3,1) == '4'  
              || substr($nr,3,1) == '5' ))  
             return pz(1,$nr,$blz);
          if ($nr{0}=='0' && 
              ($nr{1}=='7' || $nr{1}=='8')) 
             return pz(1,$nr,$blz);
          return 0;
       case 118:
          if (pz(20,$nr,$blz)==0) return 0;
          if ($nr{0} == '5' && $nr{1} != '0') return 0;
          if ($nr{0} == '9' && $nr{1} != '0' && $nr{2} != '0') return 0;
          if ($nr{0} == '9' && $nr{1} != '1' && $nr{2} == '0') return 0;
          return pz(29,$nr,$blz);

       case 119:
          if (substr($nr,0,3)!='000' && substr($nr,0,2)=='00'){
	      $g = array(1,3,2,1,3,2,1);
              for($i=3;$i<=9;$i++){
                  $sum += ( $g[9-$i]*(ord($nr{$i-1})-48+1) )%11;
              }
              if (($sum%10) != ord($nr{9})-48) {
                  return (($sum%10)+5)%10 - (ord($nr{9})-48);
              }
              return $sum%10-(ord($nr{9})-48);
          }
          if (substr($nr,0,3)=='000'){
              for($i=4;$i<=9;$i++) $sum += (10-$i)*(ord($nr{$i-1})-48);
              if (($sum%11) != ord($nr{9})-48) 
                 return (($sum%11)+5)%10 - (ord($nr{9})-48);
              return $sum%11-(ord($nr{9})-48);
          }
       case 120:
         if (substr($nr,0,3)!='000' && substr($nr,0,2)=='00'){
	     if (pz(52,$nr,$blz)==0) return 0;
         }
         return pz(20,$nr,$blz);
       case 121: 
         if ($nr{0}=='5') {
           $sum=-1;
           for($i=0;$i<9;$i++){
                $sum += qs(($i%2+1)*(ord($nr{$i})-48));
           }
           return (10-$sum%11)%10-(ord($nr{9})-48);
         } else {
           return pz(17,$nr,$blz);
         }
       case 122:
         if (pz(22,$nr,$blz)==0) return 0;
         else return pz(0,$nr,$blz);
       case 123:
         if ($nr{0}=='9') return pz(58,$nr,$blz); 
         else             return pz(0,$nr,$blz);
       case 124:
         if ($nr{0}=='9') return pz(58,$nr,$blz);
         else             return pz(15,$nr,$blz);

      case 125:
          if (pz(29,$nr,$blz)==0) return 0;
          if (pz(0,$nr,$blz)==0 && $nr{0}=='3') return 0;                              
          for ($cnt=1;$cnt<=9;$cnt++) if (ord($nr{$cnt-1})!=48) break;
          $cnt = 11-$cnt;
          switch($cnt){
              case 6:
              case 7:
		  for ($i=5;$i<=9;$i++) 
                      $sum += qs ( (1+$i%2)*(ord($nr{$i-1})-48) );
                  return ($sum + $cmp)%10;
              case 8: if ($nr{2}=='3'||$nr{2}=='4'||$nr{2}=='5')
                        return 0;
              case 9:
              case 10:
                   if (substr($nr,0,2)=='70'||substr($nr,0,2)=='85')
                         return 0;
                   if ($nr{1}=='9'){
                     $cmp = ord($nr{7})-48;
	 	     for ($i=3;$i<=7;$i++) {
                       $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
                     }
                     return ($sum + $cmp)%10;
                   }
                  $cmp = ord($nr{6})-48;
		  for ($i=2;$i<=6;$i++) 
                     $sum += qs ( (2-$i%2)*(ord($nr{$i-1})-48) );
                  return ($sum + $cmp) % 10;
          }
     case 126: 
           
              if ($nr{0} ==  '0') $sum = 0;
              if ($nr{0} ==  '1') $sum = 3;
              if ($nr{0} ==  '2') $sum = 6;
              if ($nr{0} ==  '3') $sum = 8;
              if ($nr{0} ==  '4') $sum = 5;
              if ($nr{0} ==  '5') $sum = 1;
              if ($nr{0} ==  '6') $sum = 3;
              if ($nr{0} ==  '7') $sum = 1;
              if ($nr{0} ==  '8') $sum = 0;
              if ($nr{0} ==  '9') $sum = 0;

 	      for ($i=2;$i<=9;$i++) {
                 $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
              }
              return ($sum + $cmp)%10;
            
        
     case 127: 
           if (pz(63,$nr,$blz) == 0) return 0;
           return pz(6,$nr,$blz);
     case 128:
          if (pz(0,$nr,$blz) == 0) return 0;
          else if (pz(4,$nr,$blz) == 0) return 0;
          else return pz(7,$nr,$blz);
     case 129:
         if (pz(0,$nr,$blz) == 0) return 0; else return pz(7,$nr,$blz);
     case 130:
         if (pz(20,$nr,$blz) == 0) return 0;
         if (substr($nr,0,2) == '57') return 0;
     case 131:
            $sum = 1;
/* Aenderung 2013
            if ($nr{0} == '7') return -1;
*/
            if ($nr{0} == '8') return -1;

            for ($i=1;$i<=10;$i++) {
                $sum += qs( (1+$i%2)*(ord($nr{$i-1})-48) );
            }
            if ( $sum % 10 == 0 ) return 0; else return -1;
     case 132:
          if ( pz(95,$nr,$blz) == 0 ) return 0;
          if ( pz(0, $nr,$blz) == 0 ) return 0;
          return pz(68,$nr,$blz);
     case 133:
          if (pz(0,$nr,$blz) == 0) return 0;
          return pz(27,$nr,$blz);
     case 134:
          $sum = 9; 
          for($i=0;$i<9;$i++){
             $sum += qs((ord($ga{$i})-48)*(ord($nr{$i})-48));
          }
          if ($nr{0} == '3'
            ||$nr{0} == '4'
            ||$nr{0} == '5'
            ||$nr{0} == '9'
          ){
              return (10 - $sum%10) % 10 - $cmp;
           } else { return -1;}
     case 135:
          if ($nr{2} == '9' && $nr{3} == '9'){
            for($i=2;$i<10;$i++){
               $sum += (10-$i)*(ord($nr{$i})-48);
            }
            if ($sum % 11 == 0) return 0;
            if ($sum % 11 == 1 && $nr{9} == '0') return 0;
          } 
          if ($nr{2} != '9' || $nr{3} != '9') {
            $sum=0;
            for($i=3;$i<10;$i++){
               $sum += (10-$i)*(ord($nr{$i})-48);
            }
            if ($sum % 11 == 0) return 0;
            if ($sum % 11 == 1 && $nr{9} == '0') return 0;
        
            $sum = 0; 
            for($i=3;$i<10;$i++){
                $sum += (10-$i)*(ord($nr{$i})-48);
            }

            if ($sum % 7 == 0 and ord($nr{9}) < 7 + 48) return 0;
            $sum = 0; 
            for($i=3;$i<10;$i++){
               $sum += (10-$i)*(ord($nr{$i})-48);
            }
            return $sum % 10;
         }
      case 136:
           if (pz(7, $nr, $blz) == 0) return 0;
           if (pz(3, $nr, $blz) == 0) return 0;
           return pz(0, $nr, $blz);
      case 137:
            $sum = 0; 
            for($i=1;$i<9;$i++){
               $sum += qs ((1 + $i%2)*(ord($nr{$i-1})-48));
            }
           return $sum - (ord($nr{9}) - 48);
      case 138:
           if ($nr{0} == '0' && $nr{1} == '0' && $nr{2} != '0') return 0;
           return pz(0, $nr, $blz);
      case 139:
           if (pz(0, $nr, $blz) == 0) return 0;
           if (pz(10, $nr, $blz) == 0) return 0;
           return pz(18, $nr, $blz);
      case 140:
          $sum = 7;
          for($i=0;$i<9;$i++){
             $sum += qs((ord($ga{$i})-48)*(ord($nr{$i})-48));
          }
          return (10 - $sum%10) % 10 - $cmp;
      case 141:
          $sum = 0;
          for($i=0;$i<9;$i++){
             if ($i < 3){
               $sum += ($i+9)*(ord($nr{$i}));
             }
             else
             {
               $sum += (9-$i)*(ord($nr{$i}));
             }
          }
          if ($sum % 11 == 10) return 1;
          return ($sum%11) - $cmp;
      case 142:
         $sum = 5;
         for($i=1;$i<=10;$i++){
            $sum += qs ((1 + $i%2)*(ord($nr{$i-1})-48));
         }
         return $sum % 10;
      case 143:
          if (pz(0, $nr, $blz) == 0) return 0;
          return pz(21, $nr, $blz);

  } //switch

  return 0; // Default: Alles OK
} //pz
 function clearingGebiet($blz){
   if ($blz{0} == '1') 
       return 'Berlin, Brandenburg, Mecklenburg-Vorpommern';
   if ($blz{0} == '2') 
       return 'Bremen, Hamburg, Niedersachsen, Schleswig-Holstein';
   if ($blz{0} == '3') 
       return 'Nordrhein-Westfalen, Landesteil Rheinland
(Regierungsbezirke D&uuml;sseldorf, K&ouml;ln)';
   if ($blz{0} == '4') 
       return 'Nordrhein-Westfalen, Landesteil Westfalen';
   if ($blz{0} == '5') 
       return 'Hessen, Rheinland-Pfalz, Saarland';
   if ($blz{0} == '6') 
       return 'Baden-W&uuml;rttemberg';
   if ($blz{0} == '7') 
       return 'Bayern';
   if ($blz{0} == '8') 
       return 'Sachsen, Sachsen-Anhalt, Th&uuml;ringen';
 }

 function Bankengruppe($blz){
   if ($blz{3} == '0') 
       return 'Deutsche Bundesbank';
   if ($blz{3} == '1') 
       return 'Deutsche Postbank AG und andere Institute';
   if ($blz{3} == '2') 
       return 'HypoVereinsbank und andere Institute';
   if ($blz{3} == '3') 
       return 'Sonstige';
   if ($blz{3} == '4') 
       return 'Commerzbank und Tochterunternehmen';
   if ($blz{3} == '5') 
       return 'Sparkassen und Landesbanken';
   if ($blz{3} == '6') 
       return '	Genossenschaftliche Zentralbanken und Raiffeisenbanken (bzw. Kreditgenossenschaften)';
   if ($blz{3} == '7') 
       return 'Deutsche Bank und Tochterinstitute';
   if ($blz{3} == '8') 
       return 'Dresdner Bank und Tochterinstitute';
   if ($blz{3} == '9') 
       return 'Volksbanken (bzw. Kreditgenossenschaften)';
 }

 function check($blz,$kto,$data){
    $blz = trim($blz);
    $kto = trim($kto);
    $err = false;
    for($i=0; $i<strlen($blz); $i++)
      if ( ctype_digit($blz{$i}) == false) $err = true;
    for($i=0; $i<strlen($kto); $i++)
      if ( ctype_digit($kto{$i}) == false) $err = true;
    if ($err){
       print '<br><br><b>Fehler:</b> BLZ/Konto nicht numerisch';
       return -1;
    }
    $rule = getrule($blz,$data);
    //print "<br>Regel=$rule<br>";
    $cmp = 0;
    if ($rule >= 0) 
       return pz($rule,$kto,$blz);
    else 
       return -1;
 }

 if (strlen($blz)*strlen($kto)>0){
   if (strtoupper($iban) == 'DE22'){
#
#  Deutsche Kontonummer eingegeben
#
#
     if (check($blz,$kto,$data)==0) {
       if ($kto < 10000000){
          print "<br><br><b>Warnung: Kurze Kontonummer </b><br><br><hr>";
          $rule = getrule($blz,$data);

          if ($rule == 63 || $rule == 76 || $rule == 13) 
              $kto = $kto . '00';
       }
       print "<br><br>BLZ/Konto ist <b>g&uuml;ltig</b><p>";
       
       $iban_ = iban_pz(substr($iban,0,2),$blz,$kto);
       $lcode = substr($iban_,0,2);
       $pziff = substr($iban_,2,2);
       $blzkto  = substr($iban_,4);
       print "<p>IBAN: <b>$lcode<font color=red>$pziff</font>".
            "$blzkto </b>";

       print "<br>".
              "Gebiet: ". clearingGebiet($blz).
              "<br>Bankengruppe:" . Bankengruppe($blz) . "<p>";
       print '<a href="http://www.bundesbank.de/"'.
             'zahlungsverkehr_bankleitzahlen_suche.php?mode=search&blz='.
             $blz.'" target="_blank">Informationen zur Bankleitzahl</a>';
       print "<br> Bank: ".getname($blz,$data2)."(BIC: ". getbic($blz,$data3). ")<br>";
     } else { 
#
#  Fehler bei Prüfzifferberechnung der deutschen Kontonummer
#
#
       print "<br><br><b>Fehler:</b> BLZ($blz)/Konto($kto) ung&uuml;ltig<p> ";
     }
    } else {
#
#  Ausland
#
#
      $lcode = substr($iban,0,2);
      $numzz = substr($iban,2,2);
      $nzz   = 10*(ord($numzz{0})-48) + (ord($numzz{1})-48) - 4;
      if (strlen($blz . $kto) != $nzz)
         print '<br><br><b>FEHLER: FALSCHE LAENGE der IBAN</b><br><br><hr>';
      $iban_ = iban_pzi(substr($iban,0,2), "$blz" . "$kto");
      $lcode = substr($iban_,0,2);
      $pziff = substr($iban_,2,2);
      $blzkto  = substr($iban_,4);
      print "<p>IBAN: <b>$lcode<font color=red>$pziff</font>".
            "$blzkto </b><p>";
    }
 } 
 {
  if (strlen($iban) == 0)
    $iban = "DE22";
  print '<form method=post action=""><table>';
  print '<tr><td><b>BLZ:</b></td><td><input name="blz" value="'.$blz.'">'.
        '</td></tr>';
  print '<tr> <td><b>Kontonr.</b>:</td> <td><input name="kto" value=' . $kto . '>'.
        '</td></tr>'.
        '<td> IBAN (Eingabe optional <br>ohne L&auml;nderkennzeichen, keine Leerzeichen)'.
        '</td><td>' .
        '<input name="oiban" value=' . $oiban . 
        '>  </td></tr><tr>'.
        '<td><b>L&auml;nderkenzeichen</b>:</td>'.
        ' <td>'.

'<select name="iban">';
popt_("FR24",$iban, "Frankreich (FR)");
popt_("GB22",$iban, "Gro&szlig;britanien (GB)");
popt_("AT20",$iban, "&Ouml;sterreich (AT)");
popt_("DE22",$iban, "Deutschland (DE)");
popt_("CH21",$iban, "Schweiz (CH)");
popt_("IT27",$iban, "Italien (IT)");
popt_("BR29",$iban, "Brasilien (BR)");
popt_("IT20",$iban, "Luxemburg (LU)");
popt_("LI21",$iban, "Lichtenstein (LI)");
popt_("ES24",$iban, "Spanien (ES)");
popt_("PL28",$iban, "Polen (PL)");
popt_("BE16",$iban, "Belgien (BE)");
popt_("BG22",$iban, "Bulgarien (BG)");
popt_("DK18",$iban, "D&auml;nemark (DK)");
popt_("GR27",$iban, "Griechenland (GR)");
popt_("FI18",$iban, "Finnland (FI)");
popt_("EE20",$iban, "Estland (EE)");
popt_("PT25",$iban, "Portugal (PT)");
popt_("SE24",$iban, "Schweden (SE)");
popt_("NL18",$iban, "Niederlande (NL)");
popt_("CZ24",$iban, "Tschechien (CZ)");
popt_("AL28",$iban, "Albanien (AL)");
popt_("AD24",$iban, "Andorra (AD)");
popt_("AZ28", "Aserbaidschan (AZ)");
popt_("BH22", $iban,"Bahrain (BH)");
popt_("BE16",$iban, "Belgien (BE)");
popt_("BA20", $iban," Bosnien und Herzegowina (BA)");
popt_("CR21", $iban," Costa Rica (CR)");
popt_("DO28", $iban," Dominikanische Republik (DO)");
popt_("FO18", $iban," F&auml;r&ouml;er (FO)");
popt_("GF27", $iban," Franz&ouml;sisch-Guayana (GF)");
popt_("PF27", $iban," Franz&ouml;sisch-Polynesien (PF)");
popt_("DK27", $iban," Franz&ouml;sische S&uuml;d- und Antarktisgebiete (TF)");
popt_("GE22", $iban," Georgien (GE)");
popt_("GI23", $iban," Gibraltar (GI) ");
popt_("GL18", $iban," Gr&ouml;nland (GL)");
popt_("GP27", $iban," Guadeloupe (GP)");
popt_("GE28", $iban," Guatemala (GT)");
popt_("HK16", $iban," Hongkong (HK)");
popt_("IE22", $iban," Irland (IE)");
popt_("IS26", $iban," Island (IS)");
popt_("IL23", $iban," Israel (IL)");
popt_("JO30", $iban," Jordanien (JO)");
popt_("VG24", $iban," Jungferninseln (VG)");
popt_("KZ20", $iban," Kasachstan (KZ)");
popt_("QA29", $iban," Katar (QA)");
popt_("HR21", $iban," Kroatien (HR)");
popt_("KW30", $iban," Kuwait (KW)");
popt_("LV21", $iban," Lettland (LV)");
popt_("LB28", $iban," Libanon (LB)");
popt_("LT20", $iban," Litauen (LT)");
popt_("MT31", $iban," Malta (MT)");
popt_("MA24", $iban," Marokko (MA)");
popt_("MQ27", $iban," Martinique (MQ)");
popt_("MR27", $iban," Mauretanien (MR)");
popt_("MU30", $iban," Mauritius (MU)");
popt_("YT27", $iban," Mayotte (YT)");
popt_("MK19", $iban," Mazedonien (MK)");
popt_("MD24", $iban," Moldawien (MD)");
popt_("MC20", $iban," Monaco (MC)");
popt_("ME22", $iban," Montenegro (ME)");
popt_("NC27", $iban," Neukaledonien (NC)");
popt_("NO15", $iban," Norwegen (NO)");
popt_("PK24", $iban," Pakistan (PK)");
popt_("PS29", $iban," Pal&auml;stinensische Autonomiegebiete (PS)");
popt_("RE27", $iban," Reunion (RE)");
popt_("RO24", $iban," Rum&auml;nien(RO)");
popt_("BL27", $iban," Saint-Barthelemy (BL)");
popt_("MF27", $iban," Saint-Martin (MF)");
popt_("SM27", $iban," San Marino (SM)");
popt_("SA24", $iban," Saudi-Arabien (SA)");
popt_("RS22", $iban," Serbien (RS)");
popt_("SK24", $iban," Slowakei (SK)");
popt_("SI19", $iban," Slowenien	(SI)");
popt_("PM27", $iban," St. Pierre und Miquelon (PM)");
popt_("TN24", $iban," Tunesien (TN)");
popt_("AE23", $iban," Vereinigte Arabische Emirate (AE)");
popt_("WF27", $iban," Wallis und Futuna (WF)");
popt_("CY28", $iban," Zypern (CY)");

print '</select>' .
        '</td></tr></table><br>'.
        '<input type=submit value="Bankverbindung online pr&uuml;fen">'.
        '<input type=hidden value="' . $pw . '" name=pw>';

if (strlen($oiban) > 0){

      $iban_ = iban_pzi(substr("$iban",0,2), substr("$oiban",2));
      $lcode = substr($iban_,0,2);
      $pziff = substr($iban_,2,2);
      $blzkto  = substr($iban_,4);
      if (substr("$oiban",0,2) != "$pziff"){
         print "<br>FEHLER FEHLER FEHLER <br>";
      } else {
         print "<br>Die IBAN wurde gepr&uuml;ft: <br>";
      }
      print "<p>IBAN: <b>$lcode<font color=red>$pziff</font>".
            "$blzkto </b><p>";
      if (substr("$iban",0,2) == "DE"){
        $ktoaaa = substr("$oiban",10,4); 
        if ($ktoaaa == "0000"){
           print "<br><br><b>Warnung: Sehr kurze Kontonummer<b><br><br><hr>";
        }

        $blz = substr("$oiban",2,8);
        print "<br> Bank: ".getname($blz,$data2)."(BIC: ". getbic($blz,$data3). ")<br>";

      }
  }
 }
?>
<h2>Hinweis zur IBAN:</h2>
Bei einigen siebenstelligen Kontonummern sind rechts zwei Nullen '00' (Multiplikation mit 100) zur korrekten Berechnung der IBAN zu erg&auml;nzen.

<h2> Integration der Software in Ihre Anwendung </h2>
Die Software kann als PHP-Anwendung auf dem Server oder
in Form von JavaScript f&uuml;r die Plausibilit&auml;tspr&uuml;fung
in Ihre Webanwendung integriert werden. Ferner k&ouml;nnen
Sie BLZKontoCheck auch in eine Standalone-Anwendung etwa in COBOL oder
ANSI-C 
integrieren.<p> 
Weitere Informationen zur Software können Sie hier formlos per 
<a href="mailto:scheerer.software@gmail.com?subject=BLZKontoCheck">E-Mail
</a> erfragen.

<h3> Ein Anwendungsbeispiel </h3>
Die Erfassung der Bankverbindung kann für Ihre Kunden ganz einfach
sein, für Ihr Unternehmen mit minimalem Aufwand verbunden und dabei
praktisch fehlerfrei. Der Kunde muss nur Bankleitzahl und
Kontonummer eingeben und hat mit wenigen Mausklicks ein korrekt
ausgefülltes Formular, dass er nur noch faxen muss.
<p>
Mit BLZKontoCheck gehören Tipp- oder Übertragungsfehler
der Vergangenheit an: Sehen Sie sich
das <a href="t1.php" target="_blank"
title="So ähnlich könnte ein Formular aussehen mit dem
Sie auf Ihre Website die Bankverbindung ihrer Kunden erfassen.">Beispiel</a> an.


<h2> Referenzkunden </h2>
<ul>
<li><h3>peter.baral@medienwerkstatt- September 2016</h3>
<pre>
Hallo Herr Scheerer,

vielen Dank für die Korekturen und die neue Fassung!
Ich konnte gerade eben unseren Shop entsprechend aktualisieren.

Viele Grüße
Peter Baral

.................................................................

Hallo Herr Scheerer,

herzlichen Dank für die Anpassungen und die Zusendung der neuen Version. Bei meinen Tests hat die Erkennung der zu ergänzenden 7-stelligen Nummern gut funktioniert.
Wir verwenden diese Fassung jetzt auch in unserem Online-Shop.

Viele Grüße
Peter Baral
.................................................................

Sehr geehrter Herr Scheerer,

zum Gültigkeitstermin 5. Dezember 2016 erfolgt eine Änderung der Prüfzifferberechnungsmethode 74
(Ergänzung um die Variante 2).

Die aktuell gültige Übersicht der Prüfzifferberechnungsmethoden steht Ihnen unter der nachfolgenden Internetadresse zum Abruf zur Verfügung:
http://www.bundesbank.de/Navigation/DE/Aufgaben/Unbarer_Zahlungsverkehr/Serviceangebot/Pruefzifferberechnung/pruefzifferberechnung.html

Informationen zu dem Thema "Prüfzifferberechnungsmethoden" finden Sie unter www.bundesbank.de -> Aufgaben -> Unbarer Zahlungsverkehr -> Serviceangebot -> Prüfzifferberechnung.

Mit freundlichen Grüßen

____________________________________________________________________________________________________
Deutsche Bundesbank
Zahlungsverkehr

Wilhelm-Epstein-Straße 14 | 60431 Frankfurt am Main
Internet: http://www.bundesbank.de | E-Mail: info@bundesbank.de
Telefon: +49 69 9566-0 | Fax: +49 69 9566-3077


</pre>

<li><h3>regio iT aachen </h3> 

BLZKontocheck wird in der Anwendung "Bewohnerparken Online" von der Stadt
Aachen genutzt. Die Stadt Aachen und regio iT hat vor einigen Wochen mit der
Anwendung "Bewohnerparken Online" den e-city-award 2005 in der Kategorie g2c 
des Innenministeriums NRW als innovativste Anwendung ohne Medienbruch f&uuml;r
NRW gewonnen. 
<p>
<h3>Einsatz von BLZKontoCheck:</h3>

Kontonummernvorpr&uuml;fung im Online-Modul zur Sicherstellung der Richtigkeit 
der Konto-Nummern in das automatisierte Lastschriftverfahren ELBe. Hierdurch
Gew&auml;hrleistung der Medienbruchfreiheit.


<p>
<a href="http://www.behoerdenspiegel.de/pdf/nl178.pdf" target="_blank">
e-city-award 2005
</a>

</ul>

<ul>
<li><b>Z E L L W E R K GmbH und Co KG </b>
<pre>

 Hallo Herr Scheerer,

 es funktioniert einwandfrei. Ist ja im Prinzip ganz &uuml;bersichtlich.
 Vielen Dank.

</pre>
<li><a href="http://www.xpecto.com" target="_blank">xpecto AG</a>
<pre>


Hallo Herr Scheerer,

vielen Dank. Wir sind mit Ihrem Quellcode gut zurechtgekommen. 
Es wird noch getestet, aber bis jetzt scheint es gut zu funktionieren.

Mit freundlichen Gr&uuml;&szlig;en

Armin Bart
</pre>
<li> <a href="http://www.sinus-it.de"
target="_blank">
Sinus-IT Service</a>
<li>
<a href="http://www.handyladen.tv"
target="_blank">
handyladen.tv</a>
<li>
<a href="http://www.pos-cash.de"
target="_blank">
POSCash das erfolgreichste deutsche Internet-Portal
 für elektronische Zahlungssysteme
</a>
<li>
<a href="http://www.linuxwerkstatt.net"
target="_blank">
L i n u x w e r k s t a t t 
</a>
<li>
<a href="http://www.medienwerkstatt-online.de/"
target="_blank">
Medienwerkstatt Muehlacker</a>
<br>Verlagsgesellschaft m.b.H.</a>
<li>
<a href="http://www.spendenhilfsdienst.de"
target="_blank">
Deutscher Spendenhilfsdienst - DSH GmbH
</a>
<li>
<a href="http://www.thesisdigital.de"
target="_blank"
title=" Wulf Rowek | THESIS digital ">
THESIS digital
</a>


</ul>
<h2>Webdesign</h2>
<a href="http://www.hotfrog.de/Firmen/IVB-sued"
target="_blank">Hausverwaltung - Immobilien</a> 
<a href="http://www.funmobil-berlin.de"
target="_blank">Funmobil-Berlin.de</a><br>
    <a href="http://rohrfreiprofi.de/"
                                  target="_blank">Rohrreinigung vom
				  Profi (Meisterbetrieb)</a><br>

</td></tr>
</table>

<hr>Franz Scheerer, Fritz-Philippi-Straße 34, 65195 Wiesbaden, Tel. 0611 168 93 98<br> 
<a href="index.html">iaktueller.de (Scheerer Software)</a>
<a href="faq.html" target="_blank"
title="Hier finden Sie Antworten zu häufig gestellten Fragen">
Häufige Fragen zu BLZKontoCheck (FAQ)</a>
</span>
</body>

