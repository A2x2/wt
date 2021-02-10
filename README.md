# wt

these are the files i used to animate my ["fan music video" of wavetapper by frums](https://youtu.be/kq_nzrr_ZdE)

automation was mainly by abusing `browser.window.create()` and `browser.tabs.move()` from the [firefox webextensions api](https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/API)

### running this yourself (why)
you will have to install the extension locally. feel free to scan the code to see if there's anything malicious in there (there isn't) first

to install, go to the url `about:debugging` (firefox) > this firefox > temporary extensions > load temporary add-on > select the `manifest.json` file in the repo. if you did it right, there'll be a little page icon in your toolbar. start up a webserver to run the files on localhost (i used [xampp](https://www.apachefriends.org/index.html)) then click the page icon to run. you may have to edit line 428 of `background.js` if you don't/can't run it on your second monitor like i did

disclaimer: you will experience desync. that's just how it is on this sad world

note: a good portion of the footage at the end is edited out so the video can end on time
