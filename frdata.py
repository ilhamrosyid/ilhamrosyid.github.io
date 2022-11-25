import json
import os
path = os.path.dirname(os.path.abspath(__file__))
try:
    # buka file JSON
    file_json = open(path+"/tempfr.json")
    # prsing data JSON
    data = json.loads(file_json.read())
    data.pop('full_count')
    data.pop('version')
    f = open(path+"/datafr.json", "w")
    f.write(json.dumps(data))
    f.close()
    file_json.close()
    print("file saved")
except:
    print("An exception occurred")
