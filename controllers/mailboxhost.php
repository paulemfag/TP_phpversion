<?php
$regexGmail = '/^(.)+(@)+(gmail\.com)$/';
$regexYahoo = '/^(.)+(@)+(yahoo\.com)$/';
$regexYahooFr = '/^(.)+(@)+(yahoo\.fr)$/';
$regexOutlook = '/^(.)+(@)+(outlook\.com)$/';
$regexLive = '/^(.)+(@)+(live\.fr)$/';
$regexHotmail = '/^(.)+(@)+(hotmail\.fr)$/';

//Vérification du type d'adresse mail

//si c'est une adresse gmail
if (preg_match($regexGmail, $mailbox)) {
    $mailhref = 'https://mail.google.com';
} //si c'est une adresse yahoo
elseif (preg_match($regexYahoo, $mailbox) || preg_match($regexYahooFr, $mailbox)) {
    $mailhref = 'https://mail.yahoo.com';
} //si c'est une adresse outlook ou live
elseif (preg_match($regexOutlook, $mailbox) || preg_match($regexLive, $mailbox)) {
    $mailhref = 'https://office.live.com/start/Outlook.aspx?ui=fr%2DFR&rs=FR';
} //si c'est une adresse hotmail
elseif (preg_match($regexHotmail, $mailbox) || preg_match($regexLive, $mailbox)) {
    $mailhref = 'https://signup.live.com/signup.aspx?id=64855&mkt=fr-fr&lic=1';
}
