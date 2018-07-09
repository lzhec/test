def getUsername(tablename):
	db = MySqldb.connect(host='localhost', user='root', passwd='', db='bd_aistenok', charset='utf8')
	cur = db.cursor()
	sql = '''select %s from user'''%(tablename)
	cur.execute(sql)
	j = cur.fetchall()
	out = json.dumps(j[0][0],ensure_ascii=False,indent=2,sort_keys=True)
	return out
	print(out)

