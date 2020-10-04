@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../pug-php/pug/pug
php "%BIN_TARGET%" %*
