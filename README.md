# Simple Server Monitor Script

This is a simple solution that can monitor a third party server or domain. It allows for monitoring of unlimited domains at a time and can be executed manually or automatically.

### Setup

1. Place the script anywhere on your server, ensuring that your server has access to the website you wish to monitor.
2. Create a simple cron job for the PHP file. Alternatively, you can execute the PHP file through your browser.
3. To review the findings, open the `updown.log` file located in the same location as the script. If there are no findings, everything is perfect.

### Downsides

- Reports everything that's not `200` as down.
- Automation needs to be set up by external cron job or manual request.
- The script may be called by a third party if no `.htaccess` is set.

### Future Improvements

- Customize the HTML codes you wish to log.
- Implement email notifications.
- Encrypt logs for increased security.
- Add a "heartbeat" feature that writes a test log file entry every day to ensure the script is still running.
