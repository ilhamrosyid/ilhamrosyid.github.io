:loop
curl "https://data-live.flightradar24.com/zones/fcgi/feed.js?bounds=6,-11,95,141" > tempfr.json
frdata.py
timeout /t 5
goto loop
