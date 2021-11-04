<?php
$domain = "http://johnsonsbonding.com/";
$contactFormRecipient = "info@johnsonsbonding.com";
$contactFormFrom = "From: Johnson's Bonding <info@johnsonsbonding.com>";
$webMessageEmailDisclaimer =
"<br><hr><br>
    This message has come from the web form on your site $domain. If you have any questions or concerns please contact us @ cs@goldbyrd.com";
    
function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
?>