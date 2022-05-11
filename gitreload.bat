@echo off
:loop
git pull
timeout /t 15
goto loop