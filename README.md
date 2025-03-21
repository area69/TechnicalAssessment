Here the steps by steps how to upload or deploy these applications in hosting

1. Sign Up & Set Up Hosting
Sign up or log in to ProFreeHost.
Create a new hosting account with a free subdomain or use a custom domain.
Access the Control Panel after setting up your hosting.

2. Upload Backend Files
Open File Manager from the Control Panel.
Navigate to the htdocs folder (public directory).
Upload backend files using:
File Manager (manual upload of PHP or other backend files).
FTP (FileZilla) with the provided FTP credentials for bulk upload.

3. Configure Database (if needed)
Go to MySQL Databases in the Control Panel.
Click Create Database and note the database name, username, and password.
Open phpMyAdmin, select your database, and import your SQL file if needed.
Update your backend configuration file (config.php) with database credentials:

these is the sample configurations 

$servername = "sqlXXX.profreehost.com"; // Replace with actual server name  
$username = "your_db_user";  
$password = "your_db_password";  
$dbname = "your_db_name";  

$conn = new mysqli($servername, $username, $password, $dbname);  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

4.To Test or Verify Homepage & File Access
Open a web browser and visit:
https://yourdomain.profreehost.com/
Ensure that your index.php or any default landing page loads properly.
If you see an error message or blank page, check your uploaded files in the File Manager.

That's all. Thank you!

