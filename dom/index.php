<?php
  header('X-XSS-Protection: 0');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DOM</title>
    </head>
<script>
document.write("<b>location: </b>"+location+"<br>");
document.write("<b>location.href: </b>"+location.href+"<br>");
document.write("<b>location.protocol: </b>"+location.protocol+"<br>");
document.write("<b>location.host: </b>"+location.host+"<br>");
document.write("<b>location.port: </b>"+location.port+"<br>");
document.write("<b>location.pathname: </b>"+location.pathname+"<br>");
document.write("<b>location.search: </b>"+location.search+"<br>");
document.write("<b>location.hash: </b>"+location.hash+"<br>");
document.write("<b>location.hostname: </b>"+location.hostname+"<br>");
document.write("<b>location.origin: </b>"+location.origin+"<br>");

document.write("<b>document.location: </b>"+document.location+"<br>");
document.write("<b>document.location.href: </b>"+document.location.href+"<br>");
document.write("<b>document.location.protocol: </b>"+document.location.protocol+"<br>");
document.write("<b>document.location.host: </b>"+document.location.host+"<br>");
document.write("<b>document.location.port: </b>"+document.location.port+"<br>");
document.write("<b>document.location.pathname: </b>"+document.location.pathname+"<br>");
document.write("<b>document.location.search: </b>"+document.location.search+"<br>");
document.write("<b>document.location.hash: </b>"+document.location.hash+"<br>");
document.write("<b>document.location.hostname: </b>"+document.location.hostname+"<br>");
document.write("<b>document.location.origin: </b>"+document.location.origin+"<br>");

document.write("<b>document.origin: </b>"+document.origin+"<br>");
document.write("<b>document.URL: </b>"+document.URL+"<br>");
document.write("<b>document.documentURI: </b>"+document.documentURI+"<br>");
document.write("<b>document.URLUnencoded: </b>"+document.URLUnencoded+"<br>");
document.write("<b>document.baseURI: </b>"+document.baseURI+"<br>");
document.write("<b>document.domain: </b>"+document.domain+"<br>");
document.write("<b>document.referrer: </b>"+document.referrer+"<br>");

document.write("<b>document.documentMode: </b>"+document.documentMode+"<br>");
</script>
</html>