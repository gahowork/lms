#!/bin/sh
configfile=00_config
logfile=$(awk -F "=" '/logfile/ {print $2}' $configfile)
dbname=$(awk -F "=" '/dbname/ {print $2}' $configfile)
mysql=`which mysql | sed "s/\/\//\//g"`

ShowMsg() {
    echo $1
}

PerformSchemaJob() {
    ShowMsg "+------------------------------------------------------------"
    ShowMsg "| Start PerformSchemaJob:"
    ShowMsg "| ....try $1"
    ShowMsg "+------------------------------------------------------------"

    scriptfile=$2
    $mysql --defaults-extra-file=$configfile -v --execute="set @dbname='$dbname'; source $scriptfile;"
    ERROR_CODE=$?
    if [ ${ERROR_CODE} != 0 ]; then
        ShowMsg "Error when executing command. Error: ${ERROR_CODE}\n"
    fi

    ShowMsg "+------------------------------------------------------------"
    ShowMsg "| Finish PerformSchemaJob:"
    ShowMsg "| ....$1"
    ShowMsg "+------------------------------------------------------------"
}

PerformJob() {
    ShowMsg "+------------------------------------------------------------"
    ShowMsg "| Start PerformJob:"
    ShowMsg "| ....try $1"
    ShowMsg "+------------------------------------------------------------"

    scriptfile=$2
    $mysql --defaults-extra-file=$configfile -v --database=$dbname --execute="source $scriptfile;"
    ERROR_CODE=$?
    if [ ${ERROR_CODE} != 0 ]; then
        ShowMsg "Error when executing command. Error: ${ERROR_CODE}\n"
    fi

    ShowMsg "+------------------------------------------------------------"
    ShowMsg "| Finish PerformJob:"
    ShowMsg "| ....$1"
    ShowMsg "+------------------------------------------------------------"
}

starttime=`date "+%s"`
starttimestr=`date +%Y-%m-%dT%H:%M:%S`

ShowMsg ""
ShowMsg ""
ShowMsg ""
ShowMsg "+------------------------------------------------------------"
ShowMsg "| Starting database creation:"
ShowMsg "| ....$starttimestr"
ShowMsg "+------------------------------------------------------------"
ShowMsg ""
ShowMsg ""

PerformSchemaJob "dropping database" 01_drop_db.sql
PerformSchemaJob "creating database" 02_create_db.sql

PerformJob "creating tables" 03_create_table.sql
PerformJob "creating primary keys" 04_create_pk.sql
PerformJob "creating foreign keys" 05_create_fk.sql
PerformJob "creating indexes" 06_create_index.sql
PerformJob "creating function" 07_create_function.sql
PerformJob "creating checks" 08_create_check.sql
PerformJob "creating procedures" 09_create_procedure.sql
PerformJob "inserting dummy data" 10_insert_dummy_data.sql

finishtime=`date "+%s"`
finishtimestr=`date +%Y-%m-%dT%H:%M:%S`
difftime=$(($finishtime-$starttime))

ShowMsg ""
ShowMsg ""
ShowMsg "+------------------------------------------------------------"
ShowMsg "| Finish database creation:"
ShowMsg "| ....$finishtimestr"
ShowMsg "| Duration:"
ShowMsg "| ....$difftime"
ShowMsg "+------------------------------------------------------------"
ShowMsg ""
ShowMsg ""
