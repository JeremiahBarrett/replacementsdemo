# replacementsdemo

This app takes the data submitted on the form and enters it into two flat-file databases. Why two? Because I thought it would be handy to both have a list of customers and their requests, along with just the pieces needed. It's possible different groups inside the organization will handle the customer relations or piece sorting, so this would accomodate that.

Index.html is the form where the user submits the information.

Post.php is where the form is posted and receives the data.
  Post.php includes request.php, updatecount.php , updatecustomers.php
  

Request.php does most of the heavy lifting.
  This creates two classes, 1st the customer class, and then 2nd the request class that extends   customer. It also constructs the public functions for the classes. Then, using the data from post, it creates a new customer and request. Then using the values of the classes, it creates the strings needed to be inserted into the flat-file database for both the request, and customer.
 
  
Updatecount.php is called on post, which checks the class values to see how many pieces were requested (1 - 3) and then calls file_put_contents, calling in a variable that contains the flat-file db location, and calls the variable from request.php containing the string to write. 


Updatecustomers.php is called on post, and calls in a variable with the location of the flat-file db, and then writes to it. This processes only includes one new line, so it doesnt need the advanced logic shown in updatecount.php




The Flat File Databases
The databases file databases for customers and peices are csrq.txt and npcount.txt respectively. 
They are both in csv format, so they can be opened and sorted. 
