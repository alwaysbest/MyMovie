import requests
import json
import pymysql
from time import sleep

def insert_film(film_info):
    connect = pymysql.Connect(
        host='localhost',
        port=3306,
        user='root',
        passwd='197026',
        db='film_shiguang',
        charset='utf8'
    )



    cursor = connect.cursor()
    sql = "INSERT INTO film_info(id,length,title,type,wantedCount, ratingFinal,rDay,rMonth, rYear,actorName1,actorName2,direcotrName,commonSpecial) VALUES ('%d','%d', '%s', '%s', '%d', '%f', '%d','%d','%d','%s','%s','%s','%s')"
    data = (int(film_info['movieId']), int(film_info['length']), film_info['titleCn'], film_info['type'],
            int(film_info['wantedCount']), float(film_info['ratingFinal']), int(film_info['rDay']),
            int(film_info['rMonth']), int(film_info['rYear']), film_info['actorName1'], film_info['actorName2'],
            film_info['directorName'], film_info['commonSpecial'])
    cursor.execute(sql % data)
    connect.commit()
    cursor.close()
    connect.close()

def insert_comments(film_comment,id):
    connect = pymysql.Connect(
        host='localhost',
        port=3306,
        user='root',
        passwd='197026',
        db='film_shiguang',
        charset='utf8'
    )


    cursor = connect.cursor()
    sql = "INSERT INTO film_comment(id,fid,date,content,location,nickname, rating,reply_count) VALUES ('%d','%d', '%s', '%s','%s','%s','%d', '%d')"
    data = (int(film_comment['commentId']), int(id),  film_comment['commentDate'], film_comment['content'],
            film_comment['locationName'],  film_comment['nickname'], int(film_comment['rating']),
            int(film_comment['replyCount']))
    cursor.execute(sql % data)
    connect.commit()
    cursor.close()
    connect.close()

# 模拟http header
headers = {
    'Host': 'api-m.mtime.cn',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'zh-CN,zh;q=0.8',
    'Accept-Encoding': 'gzip, deflate, sdch, br',
    # 'Referer': 'http://www.baidu.com',
    'Connection': 'keep-alive',
    'Cache-Control': 'max-age=0',
}

# 设置获取电影列表的参数
payload = {'locationId': '628'}

# 发送GET请求
r = requests.get('https://api-m.mtime.cn/PageSubArea/HotPlayMovies.api', params=payload, headers=headers)

# 获取有用的字段
json_film_list = r.json()['movies']

# 依次插入film_info表
# for i in range(0, len(json_film_list)):
#     insert_film(json_film_list[i])


# 模拟http header
headers = {
    'Host': 'ticket-api-m.mtime.cn',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'zh-CN,zh;q=0.8',
    'Accept-Encoding': 'gzip, deflate, sdch, br',
    # 'Referer': 'http://www.baidu.com',
    'Connection': 'keep-alive',
    'Cache-Control': 'max-age=0',
}

for film in json_film_list:
    comment_url = "https://ticket-api-m.mtime.cn/movie/hotComment.api?movieId="+str(film['movieId'])
    print(comment_url)

    # 发送GET请求
    r = requests.get(comment_url, headers=headers)


    json_film_mini = r.json()['data']['mini']['list']
    json_film_plus = r.json()['data']['plus']['list']

    for i in range(0, len(json_film_mini)):
        try:
            insert_comments(json_film_mini[i], str(film['movieId']))
            sleep(0.8)
        except:
            continue

    for i in range(0, len(json_film_plus)):
        try:
            insert_comments(json_film_plus[i], str(film['movieId']))
            sleep(0.8)
        except:
            continue
