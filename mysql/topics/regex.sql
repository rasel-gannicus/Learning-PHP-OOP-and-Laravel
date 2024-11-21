
-- get the customers whose 
    -- first names are ELKA or AMBUR 
        SELECT * FROM sql_store.customers
        WHERE first_name REGEXP ('ELKA|AMBUR')
    -- last names end with EY or ON 
    -- last names start with MY or contains SE 
    -- last names contain B followed by R or U
    
