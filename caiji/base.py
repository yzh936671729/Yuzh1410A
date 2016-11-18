#!D:\shixun1\python\python.exe
# -*- coding: UTF-8 -*-
print
from text import *
# CGI处理模块
import cgi, cgitb 
import MySQLdb
# 创建 FieldStorage 的实例化
form = cgi.FieldStorage()

# 打开数据库连接
db = MySQLdb.connect("localhost","root","root","python",charset="utf8")

# 使用cursor()方法获取操作游标 
cursor = db.cursor()

news = News()
data = news.getNav()
# print data
for item in data:
    sql = "INSERT INTO goods(id,nav,url) VALUES ('null','"+item[0]+"','"+item[1]+"')"
    
try:
   # 执行sql语句
   cursor.execute(sql)
   # 提交到数据库执行
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()

# 关闭数据库连接
db.close()
