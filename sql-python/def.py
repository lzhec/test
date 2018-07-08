import MySQLdb
import json

def getUsername(tablename):
	db = MySQLdb.connect(host="localhost", user="root", passwd="Root", db="db_testsql", charset='utf8')
	cur = db.cursor()
	sql = '''select %s from user'''
	cur.execute(sql, [tablename, ])
	db.close()
	j = cur.fetchall()
	out = json.dumps(j[0][0],ensure_ascii=False,indent=0,sort_keys=True)
	print(j)
	return out


val = getUsername('name')
print(val)
