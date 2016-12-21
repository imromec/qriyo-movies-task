Task procedure
1. initially, I added the word movie to the data file, so that the data could be accessed as object of movie.
2. Then, using in-built php functions, (json_decode), I read the data from the json file and stored the various attributes to
   various variables.
3. I made a table named movie in mysql database with all the attributes given in the json file.
4. Initially, I kept the data type as per the valu of attribute like int, float etc.
5. But, while inserting the values in database, i was facing issue of exceeding the maximum size of data i a particular column.
6.So, I made data type of all attributes as varchar, to avoid any issues while storing the values.
7. Then, I made a html form, which had 2 field- a. Keyword(where one could enter director, plot or the title of movie)
     b.(Genre- a drop down list of genre) and a search button.
8. The user entered the value in either of the 2 fields and pressed search button, which resulted in the data being retrieved
   from database based on the criteria mentioned.
   
9. The user could either use keyword or genre, to get a movie. If the userr entered both values, the database would be searched
   based on both criteria.
10. The result would show the director name, actors, genre, and the poster of the movie.
