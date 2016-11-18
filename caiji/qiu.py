#!D:\shixun1\python\python.exe

print
import urllib
import urllib2
import re

url = 'http://news.baidu.com/'
user_agent = "Mozi;;a/4.0 (compatible; MSIE 5.5; Windows NT)"
headers = { 'User-Agent' : user_agent}
try:
    request = urllib2.Request(url, headers = headers)
    response = urllib2.urlopen(request)
    content = response.read()
    # print content
    pattern = re.compile('(<div id="channel-all" class="channel-all clearfix" >.*?)<div id="body" alog-alias="b">',re.S)
    items = re.search(pattern, content)
    # print items
    # for item in items:
    #     print item[0], item[1], item[2], '\n'
    print items.group(1)
except urllib2.URLError, e:
    if hasattr(e, "code"):
        print e.code
    if hasattr(e, "reason"):
        print e.reason