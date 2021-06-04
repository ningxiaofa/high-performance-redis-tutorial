<p align="center">
    <a href="https://blog.csdn.net/william_n/article/details/89956463" target="_blank">
        <img src="https://img-blog.csdnimg.cn/img_convert/4a0565a886238b8dfe12a80566417ec2.png">
    </a>
</p>

## 并发/压力测试

### 环境
- Docker 2GB 6CPUs in Mac

### 工具
- ab [ApacheBench]

### 命令
- ab -n 100 -c 10 http://localhost/site_visits [终端输出]
- ab -n 100 -c 10 -w http://localhost/site_visits >> site_visits.html [生成html]

### 列表
- 全局访问计数器 [http://localhost/site_visits]

### 结果
- pressure-test/site_visits.html
