# JavaScript Network Scanner
A browser side network scanner written in JavaScript that reports to a report server.

This is a Javascript Network scanner that can be embedded into a website or payload then sent to the victim.
When the victim loads the website or payload that Javascript will use Websockets to attempt to detect if a device is online and identify it against the known database.

The database (located at src/db.js) contains some basic information in a JSON format used to identify the device is a connection was made.
Sample data is already included and for best results use a url resource that is unqiue to the device for example a netgear logo for netgear devices.

# Server setup
To setup a server for recieving the data simply upload the datalogger.php file to a webserver running PHP and edit the scan.html file to point to your servers address/url.

# Client Notes
Currently some debugging features such as console.log are still left in this code you may wish to remove this and obsufacate the code to avoid detection.
