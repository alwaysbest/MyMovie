import re
import requests
import pymysql
from time import sleep

# 模拟http header
headers = {
    'Host': 'movie.douban.com',
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'zh-CN,zh;q=0.8',
    'Accept-Encoding': 'gzip',
    'Referer': 'http://www.baidu.com',
    'Connection': 'keep-alive',
    'Cache-Control': 'max-age=0',
}
# 设置代理
proxies = {"http": "http://221.226.20.158:8080", "https": "http://221.226.20.158:8080", }

content = requests.get("https://movie.douban.com/cinema/nowplaying/nanjing/", headers=headers)
content.encoding = 'utf-8'

subcontent = re.search('<div id="nowplaying">(.*?)<div id="upcoming">', content.text, re.S).group(1)

ids = re.findall('data-subject="(.*?)"', subcontent, re.S)  # 标题去除重复
titles = re.findall('data-title="(.*?)"', subcontent, re.S)  # 标题
scores = re.findall('data-score="(.*?)"', subcontent, re.S)  # 评分
stars = re.findall('data-star="(.*?)"', subcontent, re.S)  # 星级
releases = re.findall('data-release="(.*?)"', subcontent, re.S)  # 发行年份
durations = re.findall('data-duration="(.*?)"', subcontent, re.S)  # 片长
regions = re.findall('data-region="(.*?)"', subcontent, re.S)  # 发行地区
directors = re.findall('data-director="(.*?)"', subcontent, re.S)  # 导演
actors = re.findall('data-actors="(.*?)"', subcontent, re.S)  # 演员
descriptions = []  # 简介

totalcomments = []  # 评论内容
totalauthor = []  # 评论人
totalvotes = []  # 评论有用数
totaltimes = []  # 评论时间
totalStars = []  # 推荐rating

urls = re.findall('<a href="(.*?)"', subcontent, re.S)

titless = []
for t in titles:
    if not t in titless:
        titless.append(t)

titles = titless

idss = []
for id in ids:
    if not id in idss:
        idss.append(id)

ids = idss

for url in urls:
    if "playing_btn" in url:
        urls.remove(url)

urlss = []
for u in urls:
    if not u in urlss:
        urlss.append(u)

for url in urlss:
    content = requests.get(url, headers=headers)
    sleep(2)
    content.encoding = 'utf-8'
    subcontent = re.search('<div class="indent" id="link-report">(.*?)<span>我要写短评</span>',
                           content.text, re.S).group(1)
    des = re.findall('<span property="v:summary" class="">(.*?)</span>', subcontent, re.S)
    if len(des):
        descriptions.append(des)
    des = re.findall('<span class="all hidden">(.*?)</span>', subcontent, re.S)
    if len(des):
        descriptions.append(des)

    subcontent2 = re.search('<div id="comments-section">(.*?)条',
                            content.text, re.S).group(1)

    comments = []
    authors = []
    votes = []
    times = []
    stars = []

    # 获得评论页面
    comment_url = re.findall('<a href="(.*?)">全部', subcontent2, re.S)

    # 读第一页
    for u in comment_url:
        content = requests.get(u, headers=headers)
        sleep(1)
        content.encoding = 'utf-8'
        subcontent = re.search('<div id="content">(.*?)后页', content.text, re.S).group(1)
        comment_block = re.findall('<p class="">(.*?)</p>', subcontent, re.S)
        if len(comment_block) == 0:
            break

        author_block = re.findall('<a title="(.*?)" href="https://www.douban.com/people/', subcontent, re.S)
        votes_block = re.findall('<span class="votes">(.*?)</span>', subcontent, re.S)
        times_block = re.findall('<span class="comment-time " title="(.*?)">', subcontent, re.S)
        stars_block = re.findall('<span class="allstar20 rating" title="(.*?)"></span>', subcontent, re.S)

        comments.append(comment_block)
        authors.append(author_block)
        votes.append(votes_block)
        times.append(times_block)
        stars.append(stars_block)

    subcontent2 = re.search('前页(.*?)后页',
                            content.text, re.S).group(1)

    # 只敢读三页
    for i in range(1, 1):
        comment_url = re.findall('<a href="(.*?)"', subcontent2, re.S)
        for u in comment_url:
            url_sub = url[0:len(url) - 20]
            content = requests.get(url_sub + "comments" + u, headers=headers)
            sleep(2)
            content.encoding = 'utf-8'
            subcontent = re.search('<div id="content">(.*?)后页', content.text, re.S).group(1)
            comment_block = re.findall('<p class="">(.*?)</p>', subcontent, re.S)

            if len(comment_block) == 0:
                break

            author_block = re.findall('<a title="(.*?)" href="https://www.douban.com/people/', subcontent, re.S)
            votes_block = re.findall('<span class="votes">(.*?)</span>', subcontent, re.S)
            times_block = re.findall('<span class="comment-time " title="(.*?)">', subcontent, re.S)
            stars_block = re.findall('<span class="allstar20 rating" title="(.*?)"></span>', subcontent, re.S)

            comments.append(comment_block)
            authors.append(author_block)
            votes.append(votes_block)
            times.append(times_block)
            stars.append(stars_block)

    totalcomments.append(comments)
    totalauthor.append(authors)
    totalvotes.append(votes)
    totaltimes.append(times)
    totalStars.append(stars)

numbers = len(titles)
print(numbers)
for i in range(0, numbers):
    # print("id:" + ids[i] + " ", end='')
    # print("标题:" + titles[i] + " ", end='')
    # print("评分:" + scores[i] + " ", end='')
    # print("星级:" + stars[i] + " ", end='')
    # print("发行年份:" + releases[i] + " ", end='')
    # print("片长:" + durations[i] + " ", end='')
    # print("发行地区:" + regions[i] + " ", end='')
    # print("导演:" + directors[i] + " ", end='')
    # print("演员:" + actors[i] + " ", end='')
    # print("简介:" + descriptions[i][0])

    print("id:" + ids[i] + " ")
    comments = totalcomments[i]  # 获取第i的电影的评论列表
    authors = totalauthor[i]
    votes = totalvotes[i]
    times = totaltimes[i]
    stars = totalStars[i]
    # print(comments)
    # print(authors)
    # print(votes)
    # print(times)

    # 连接数据库
    connect = pymysql.Connect(
        host='localhost',
        port=3306,
        user='root',
        passwd='197026',
        db='film_douban',
        charset='utf8'
    )

    # 插入film_info表
    # cursor = connect.cursor()
    #
    #
    # sql = "INSERT INTO film_info(id,title,score,star , year,duration,region,director,actor,description) VALUES ('%d', '%s', '%f', '%d', '%d','%s','%s','%s','%s','%s' )"
    # data = (int(ids[i]), titles[i], float(scores[i]), int("40"), int(releases[i]), durations[i], regions[i],
    #         directors[i], actors[i], descriptions[i][0])
    # cursor.execute(sql % data)
    # connect.commit()
    #
    # cursor.close()
    # connect.close()

    print(comments)
    print(authors)
    print(votes)
    print(times)


    # if len(comments):
    #     comments = comments[0][0].split(',')
    #     authors = authors[0][0].split(',')
    #     votes = votes[0][0].split(',')
    #     times = times[0][0].split(',')
    # else:
    #     comments = [""]
    #     authors = [""]
    #     votes = [""]
    #     times = [""]

    # print(comments)
    # print(authors)
    # print(votes)
    # print(times)

    # 插入film_comments表

    for j in range(0, len(comments)):
        for k in range(0,len(comments[j])):
            print(comments[j][k])
            print(authors[j][k])
            print(votes[j][k])
            print(times[j][k])
            cursor = connect.cursor()
            try:
                sql = "INSERT INTO film_comment(content ,author,vote,time) VALUES ('%s', '%s', '%d', '%s')"
                data = (comments[j][k], authors[j][k], int(votes[j][k]), times[j][k])
                cursor.execute(sql % data)

                connect.commit()
                cursor.close()
            except:
                continue

    connect.close()
