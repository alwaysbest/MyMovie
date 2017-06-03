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
        db='film_maoyan',
        charset='utf8'
    )

    cursor = connect.cursor()
    sql = "INSERT INTO film_info(id,title,cat,duration,dir , star,sc,ver,rt,wish,showInfo) VALUES ('%d', '%s', '%s', '%s', '%s', '%s','%f','%s','%s','%d','%s' )"
    data = (int(film_info['id']), film_info['nm'], film_info['cat'], film_info['dur'], film_info['dir'], film_info['star'],
            float(film_info['sc']), film_info['ver'], film_info['rt'], int(film_info['wish']), film_info['showInfo'])
    cursor.execute(sql % data)
    connect.commit()

    cursor.close()
    connect.close()

def insert_comments(film_comment, id):
    connect = pymysql.Connect(
        host='localhost',
        port=3306,
        user='root',
        passwd='197026',
        db='film_maoyan',
        charset='utf8'
    )
    cursor = connect.cursor()
    sql = "INSERT INTO film_comment(id,fid,content,approve,oppose, reply,score,userId,nick,time) VALUES ('%d', '%d','%s', '%d', '%d', '%d','%f','%d','%s','%s' )"
    data = (int(film_comment['id']), int(id), film_comment['content'], int(film_comment['approve']),
            int(film_comment['oppose']),int(film_comment['reply']), float(film_comment['score']),
            int(film_comment['userId']), film_comment['nick'],
            film_comment['time'])
    cursor.execute(sql % data)
    connect.commit()

    cursor.close()
    connect.close()



# 模拟http header
headers = {
    'Host': 'm.maoyan.com',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'zh-CN,zh;q=0.8',
    'Accept-Encoding': 'gzip, deflate, sdch',
    # 'Referer': 'http://www.baidu.com',
    'Connection': 'keep-alive',
    'Cache-Control': 'max-age=0',
}

# 设置获取电影列表的参数
payload = {'type': 'hot', 'offset': '0', 'limit': '1000'}

# 发送GET请求
r = requests.get('http://m.maoyan.com/movie/list.json', params=payload, headers=headers)

# 获取有用的字段
json_film_list = r.json()['data']['movies']

# 依次插入film_info表
# for i in range(0, len(json_film_list)):
#     insert_film(json_film_list[i])


for film in json_film_list:
    print(film['id'])
    hot_comment_url="http://m.maoyan.com/movie/"+str(film['id'])+".json"
    sleep(0.8)

    # 发送GET请求
    r = requests.get(hot_comment_url, headers=headers)

    # 获取热评
    json_film_hcmts = r.json()['data']['CommentResponseModel']['hcmts']

    # 获取普通评论
    json_film_cmts = r.json()['data']['CommentResponseModel']['cmts']

    # 插入热评
    for j in range(0, len(json_film_hcmts)):
         try:
            insert_comments(json_film_hcmts[j], film['id'])
         except:
             continue

    # 插入普通评论
    for j in range(0, len(json_film_cmts)):
        try:
            insert_comments(json_film_cmts[j], film['id'])
        except:
            continue

    offset = 15
    for j in range(0, 4):
        comment_url = "http://m.maoyan.com/comments.json?movieid="+str(film['id'])+"&limit=15&offset="+str(j*offset)

        # 发送GET请求
        r = requests.get(comment_url, headers=headers)

        sleep(0.8)

        # 获取更多评论
        json_film_cmts = r.json()['data']['CommentResponseModel']['cmts']

        # 插入普通评论
        for k in range(0, len(json_film_cmts)):
            try:
                insert_comments(json_film_cmts[k], film['id'])
            except:
                continue












