SET @query = CONCAT('CREATE SCHEMA ', @dbname ) ;
PREPARE stmt FROM @query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
