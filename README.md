This site is created using PHP and the open data source of Toronto for the Noise Exemption Permit: https://open.toronto.ca/dataset/noise-exemption-permits/. 
Initially, the entire dataset was installed, but when it started, it began displaying more slowly and started lagging Chrome, so only sizeable data was kept(200 records). 
Another table was linked (ward table): [Ward Data] https://open.toronto.ca/dataset/ward-profiles-25-ward-model/ to make this a two-table DB and join them. 

Using this, the tables were joined and displayed as the data on the card. I created an index page that has links to both the home page and viewing all permits. 
Clicking on each permit will display the data for that permit, where you will see the 'Ward' result from the SQL join operation.



Exported the DB as a SQL file and added it to the github for you to test out as well. 
For looks, Bootstrap is used and experimented with.

You can view this website here(DB data not visible): https://anslemcoelho.infinityfreeapp.com/Toronto-Noise-Exemption-Permit/
