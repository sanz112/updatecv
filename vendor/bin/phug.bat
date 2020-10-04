@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../phug/phug/phug
php "%BIN_TARGET%" %*
