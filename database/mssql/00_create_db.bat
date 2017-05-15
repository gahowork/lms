echo off

set automode=0
set noixmode=0
set nockmode=0
set nofimode=0
set nospmode=0
set noinsmode=0
set noshowlog=0
set noclrlog=0

for %%x in (%*) do (
  if /I .%%x == .AUTO set automode=1
  if /I .%%x == .NOIX set noixmode=1
  if /I .%%x == .NOCK set nockmode=1
  if /I .%%x == .NOFI set nofimode=1
  if /I .%%x == .NOSP set nospmode=1
  if /I .%%x == .NOINS set noinsmode=1
  if /I .%%x == .NOSHOWLOG set noshowlog=1
  if /I .%%x == .NOCLRLOG set noclrlog=1
)

call 00_config.bat

if %noclrlog% == 0 echo > %logfile%
if %noclrlog% == 1 echo. >> %logfile% && echo. >> %logfile%
call :showmsg .
call :showmsg "starting database creation %TIME%"
call :showmsg .

call :docmd "try dropping database" 01_drop_db.sql
call :docmd "try creating database" 02_create_db.sql
call :docmddb "try creating tables" 03_create_table.sql
call :docmddb "try creating primary keys" 04_create_pk.sql
call :docmddb "try creating foreign keys" 05_create_fk.sql
if %noixmode% == 0 call :docmddb "try creating indexes" 06_create_index.sql
if %nofimode% == 0 call :docmddb "try creating function" 07_create_function.sql
if %nockmode% == 0 call :docmddb "try creating checks" 08_create_check.sql
if %nospmode% == 0 call :docmddb "try creating procedures" 09_create_procedure.sql
if %noinsmode% == 0 call :docmddb "try inserting dummy data" 10_insert_dummy_data.sql

call :showmsg .
call :showmsg "stopping database creation %TIME%"
call :showmsg .

if %automode% == 1 goto :eof
if %noshowlog% == 0 notepad %logfile%
pause

goto :eof

:docmd
	call :showmsg %1
	sqlcmd -S %host% -U %user% -P %password% -d master -v DbName="%dbname%" -i %2 >> %logfile% 2>&1
	echo. >> %logfile%
	echo. >> %logfile%
	goto :eof

:docmddb
	call :showmsg %1
	sqlcmd -S %host% -U %user% -P %password% -d %dbname% -i %2 >> %logfile% 2>&1
	echo. >> %logfile%
	echo. >> %logfile%
	goto :eof

:showmsg
	echo %1
	echo %1 >> %logfile%

:eof
