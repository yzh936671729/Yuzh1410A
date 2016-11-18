#!D:\shixun1\python\python.exe
# -*- coding: UTF8 -*-
print
import urllib
import urllib2
import MySQLdb
import re

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #convert div to ''
    def tranTags(self, x):
        pattern = re.compile('<img.*?>')
        res = re.sub(pattern, '', x)
        return res

    #getPage
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #get titleCode
    def getTitl(self):
        page = self.getPage()
        pattern = re.compile('<div id="pane-news"(.*?)<div class=".*?" id="tupianxinwen">', re.S)
        code = re.search(pattern,page)
        return  code.group()

    #get title
    def getTitle(self):
        page = self.getTitl()
        pattern = re.compile('<a href="(http://.*?").*?>(.*?)</a>', re.S)
        items = re.findall(pattern,page)
        return items


db = MySQLdb.connect("localhost","root","root","python",charset="GBK")

#使用cursor()方法获取操作游标 
cursor = db.cursor()

title = News()
data = title.getTitle()
# print data
for item in data:
    print item[0][:-1], title.tranTags(item[1])
    nav = title.delJava(title.tranSkpt(title.tranTags(item[1])))
    url = title.delJava(item[0])
    sql = """INSERT INTO NAV(nav,url)VALUES (%s, %s)""" %("'"+nav+"'","'"+url+"'")
    print sql
    try:
       # 执行sql语句
       cursor.execute(sql)
       # 提交到数据库执行
       db.commit()
    except:
       # Rollback in case there is any error
       db.rollback()





