Installation
----------
You must first update the database file with your own username and password. Do the following on your localhost.

1. Import the database found in the database_backups folder
2. Open 'app/config/core.php' and change the salt value
3. Browse to 'http://localhost/users/login'
4. Enter your desired password
5. Copy the encrypted password and paste into the password field of the user in the users table
6. Update the username to whatever you want

Note: If you do not update the salt or database file the default login will be username/password will be admin/admin.

You are now ready to install the bookmarks application wherever you want. Open 'app/config/database.php' and update the $production array with your sites database credentials. Then in the hosts array update the production key with the domain you wish to deploy on. If you are familiar with CakePHP, the debug mode will automatically be set to 2 for the domain localhost and 0 for any other domain.
