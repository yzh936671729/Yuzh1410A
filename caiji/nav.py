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
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #getPage
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #get navCode
    def getNavCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #get nav
    def getNav(self):
        navCode = self.getNavCode()
        pattern = re.compile('<a href="(http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes
        # for item in itmes:
        #     print item[0], self.tranTags(item[1])
        # return item[0], self.tranTags(item[1])


    # print item[0], news.tranTags(item[1])

db = MySQLdb.connect("localhost","root","root","python",charset="GBK")

# 使用cursor()方法获取操作游标 
cursor = db.cursor()
nav = News()
data = nav.getNav()
# print data
for val in data:
    print val[0], nav.tranTags(val[1])
    vall = nav.tranTags(val[1])

    sql = """INSERT INTO NAV(nav,url)VALUES (%s, %s)""" %("'"+vall+"'","'"+val[0]+"'")
    print sql
    try:
       # 执行sql语句
       cursor.execute(sql)
       # 提交到数据库执行
       db.commit()
    except:
       # Rollback in case there is any error
       db.rollback()





