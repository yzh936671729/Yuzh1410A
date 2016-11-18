#!D:\shixun1\python\python.exe
# -*- coding: UTF-8 -*-
#读取配置文件
from config import *
# db_host = db_connect['DB_HOST']
# print db_host
import MySQLdb
class DB:
    tablename = "user"

    def __init__(self):
        db_host = db_connect['DB_HOST']
        db_username = db_connect['DB_USERNAME']
        db_password = db_connect['DB_PASSWORD']
        db_database = db_connect['DB_DATABASE']
        db = MySQLdb.connect(db_host, db_username, db_password, db_database)
        self.cursor = db.cursor()

    #基础执行
    def query(self,sql):
        cursor = self.cursor
        cursor.execute(sql)

    #数据添加
    def Myadd(self,sql):
        cursor = self.cursor
        res = self.query(sql)
        return true


    #获取多条数据
    def getALL(self,field='*',where=1,limit=-1):
        cursor = self.cursor
        if(field != "*"):
            field = ','.join(field)
        if(limit != -1):
            sql = "select %s from %s where %s" % (field,self.tablename,where)
        else:
            sql = "select %s from %s where %s limit %d" % (field,self.tablename,where,limit)
        print sql
        self.query(sql)
        res = cursor.fetchall()
        return res

    #数据修改
    def Mysave(self,sql):
        cursor = self.cursor
        self.query(sql)
        return true

    #数据删除
    def Mydelete(self,where=""):
        cursor = self.cursor
        sql = "delete from %s where %s" % (self.tablename,where)
        res = self.query(sql)
        if(res):
            return true
        else:
            return flase






