# -*- coding: UTF-8 -*-
import urllib
import urllib2
import MySQLdb
import re
print

class NewsTitle:
    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #convert div to ''
    def tranTags(self, x):
       pattern = re.compile('<div.*?</div>')
#       pattern = re.compile('<img.*?>')
       res = re.sub(pattern, '', x)
       return res
#      去除span标签       
#    def clerSpan(self, x):
#        pattern = re.compile('<span.*?</span>')
#        res = re.sub(pattern, '', x)
#        return res
#        去除JavaScript
#    def clerjav(self, x):
#        pattern = re.compile('javascript:.*?;')
#        res = re.sub(pattern, '', x)
#        return res

    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    def getTitle(self):
        page = self.getPage()
        pattern = re.compile('(<div id="pane-news" .*?)<div id="footerwrapper">',re.S)
        tit = re.search(pattern,page)
        patterncode = re.sub(r'<a .*?><img .*?</a>','',tit.group(1))
        patterncode = re.sub(r'<a .*?>\n<img .*?\n</a>','',patterncode)
        return patterncode
  
    def getHref(self):
        hrefcode = self.getTitle()
        pattern = re.compile('<a href="(http://.*?)".*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, hrefcode)
        return itmes
        # for item in itmes:
        #     print self.clerjav(item[0]), self.clerSpan(self.tranTags(item[1]))
        


# 入库         
db = MySQLdb.connect("localhost","root","root","python",charset="GBK")
cursor = db.cursor()
news = NewsTitle()
new = news.getHref()
for item in new:
    print item[0], news.tranTags(item[1])
    urll=item[0]
    vals=news.tranTags(item[1])
    sql = """INSERT INTO nav(nav,url)VALUES (%s, %s)""" %("'"+vals+"'","'"+urll+"'")
    print sql
    try:       
        cursor.execute(sql)   
        db.commit()
    except:
        # Rollback in case there is any error
        db.rollback()