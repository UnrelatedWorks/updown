# updown
A simple solution which can monitor a third party server or domain. Basically unlimited domains may be checked at a time. Ability to execute the script automatically or manually. 

How to set up:
1. Place it anywhere on your server. Make sure your server has access to the website you wish to monitor. 
2. Create a simple cron job for the php file. You may also execute the php file by browser from the file in your browser. 
3. Open the updown.log file located in the same location as the script to review the findings. No findings = perfect

Downsides:
- Reports everything that's not 200 as down. 
- Automation needs to be set up by external cron job or manual request.
- Script may be called by a thrid party if no .httaccess is set. 

Future improvments:
- Customize the HTML codes you wish to log 
- Email notifications 
- Encryption of logs
- "Heartbeat", a test log file entry is written every day to make sure it is stil running
