-- QUESTION : 

-- Get the customers whose
--     addresses contain TRAIL or AVENUE
--     phone numbers end with 9 


-- ANSWER :

SELECT * FROM sql_store.customers 
WHERE   address LIKE "%trail%" OR  
		address LIKE "%avenue%"  or
        phone LIKE "%9"