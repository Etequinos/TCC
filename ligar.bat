@echo off
REM Inicia o Apache
echo Iniciando Apache...
start "" "C:\xampp\apache\bin\httpd.exe"

REM Aguarde alguns segundos para o Apache iniciar completamente
ping 127.0.0.1 -n 5 > nul

REM Inicia o MySQL
echo Iniciando MySQL...
start "" "C:\xampp\mysql\bin\mysqld.exe"

REM Aguarde alguns segundos para o MySQL iniciar completamente
ping 127.0.0.1 -n 5 > nul

echo Serviços iniciados com sucesso!
pause
