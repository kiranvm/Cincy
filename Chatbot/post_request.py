import requests
import json

url = "https://cincyfaq.azurewebsites.net/qnamaker/knowledgebases/690a5786-a223-4cd5-9cd8-54a79af5cfe2/generateAnswer"

payload = "{\"question\":\"location\"}"
headers = {
    'authorization': "EndpointKey 62de888e-58cf-4aa7-a15a-5f068c615890",
    'content-type': "application/json",
    'cache-control': "no-cache",
    'postman-token': "b06e30e8-3e0a-213b-06db-9ce43ce450b9"
    }

response = requests.request("POST", url, data=payload, headers=headers)

json_data = json.loads(response.text)

answer = json_data['answers'][0]['answer']
print(answer)
