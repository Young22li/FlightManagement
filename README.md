# FlightManagement
This is a simulation of an Flight management system. The front end is written in **HTML** and **CSS** and the back end is written in **PHP**.
## How to set up the environment?
Since this is just a simulation, there is no real database right now. So we need to download a software that will simulate the local machine as a database. The name is XAMPP. <br />
<a href="https://www.apachefriends.org/download.html">Download Link here</a> <br />
### After download the XAMPP
In the control panel, click the Start button after Apache and the start button after MySQL. When you see Apache and MySQL turn green, the program is running successfully.<br />
Then click the Admin button behind MySQL to enter the administrator system for the database.
### When you get to the administrator system
Click on **New** at the top of the left column, which indicates that you are creating a new database to store your data. <br />
Give the name of the database you created and write it down. **It will be use later**. <br />
Find the **Db.sql** file in this repository, which is the file used to create the table. Then click on the **import** button and select the Db.sql file you just downloaded and import it.
### Show in browser
Now the table is in your database. You can now use this management system in your browser. <br />
Put the files you downloaded from the repository under the **htdocs** folder in the root directory of XAMPP. <br />
Now under your htdocs folder there should be a folder called **FlightManagement**. <br />
Then, open your browser and type ``localhost/FlightManagement/index1.html`` in the search bar at the top. <br />
After that you should be able to see our management system.


