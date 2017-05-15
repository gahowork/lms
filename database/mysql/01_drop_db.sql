SET @query = CONCAT('DROP SCHEMA IF EXISTS ', @dbname ) ;
PREPARE stmt FROM @query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
