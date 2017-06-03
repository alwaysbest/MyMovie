# https://api.douban.com/v2/book/1220562
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
        db='film_douban2',
        charset='utf8'
    )

    # print(film_info['id'])
    # print(film_info['title'])
    # print(film_info['rating']['average'])
    # print(film_info['rating']['stars'])
    # print(film_info['collect_count'])
    # print(film_info['year'])
    directors_str = ""
    actors_str = ""
    for directors_info in film_info['directors']:
        directors_str += directors_info['name'] + " "
    for actors_info in film_info['casts']:
        actors_str += actors_info['name'] + " "
    # print(directors_str)
    # print(actors_str)

    cursor = connect.cursor()
    sql = "INSERT INTO film_info(id,title,score,star,collectCount, year,director,actor) VALUES ('%d', '%s', '%f', '%d', '%d','%d','%s','%s')"
    data = (
    int(film_info['id']), film_info['title'], float(film_info['rating']['average']), int(film_info['rating']['stars']),
    int(film_info['collect_count']), int(film_info['year']), directors_str, actors_str)
    cursor.execute(sql % data)
    connect.commit()

    cursor.close()
    connect.close()

def insert_comments(film_comment):

    connect = pymysql.Connect(
        host='localhost',
        port=3306,
        user='root',
        passwd='197026',
        db='film_douban2',
        charset='utf8'
    )
    cursor = connect.cursor()
    sql = "INSERT INTO film_comment(id,subject_id,content,rating,useful_count, author_uid,author_id,author_name, time) VALUES ('%d', '%d','%s', '%d', '%d', '%s','%d','%s','%s' )"
    data = (int(film_comment['id']), int(film_comment['subject_id']), film_comment['content'],
            int(film_comment['rating']['value']), int(film_comment['useful_count']),
            film_comment['author']['uid'], int(film_comment['author']['id']),
            film_comment['author']['name'], film_comment['created_at'])

    cursor.execute(sql % data)
    connect.commit()

    cursor.close()
    connect.close()




# 模拟http header
headers = {
    'Host': 'api.douban.com',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'zh-CN,zh;q=0.8',
    'Accept-Encoding': 'gzip, deflate, sdch, br',
    # 'Referer': 'http://www.baidu.com',
    'Connection': 'keep-alive',
    'Cache-Control': 'max-age=0',
}


# 设置获取电影列表的参数
payload = {'city': '南京'}

# 发送GET请求
r = requests.get('https://api.douban.com/v2/movie/in_theaters', params=payload, headers=headers)

# 获取有用的字段
json_film_list = r.json()['subjects']

# 依次插入film_info表
# for i in range(0, len(json_film_list)):
#     insert_film(json_film_list[i])

# 设置获取电影列表的参数
payload = {'apikey': '0b2bdeda43b5688921839c8ecb20399b', 'start': '0', 'count': '50', 'client': 'something',
           'udid': 'dddddddddddddddddddddd'}

for film in json_film_list:
    comment_url = "https://api.douban.com/v2/movie/subject/" + film['id'] + "/comments"
    print(comment_url)
    # 发送GET请求
    r = requests.get(comment_url, headers=headers, params=payload)

    json_film_cmts = r.json()['comments']

    print(len(json_film_cmts))

    # for i in range(0, len(json_film_cmts)):
    #     try:
    #         insert_comments(json_film_cmts[i])
    #         sleep(2)
    #     except:
    #         continue



