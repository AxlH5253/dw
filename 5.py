import random
import string

#fungsi yang dibuat
def randomStritng():
    return ''.join(random.choice(string.digits + string.ascii_lowercase) for _ in range(4))

def generate(n):
    serialNumberList = []
    serialNumber = ""
    for i in range(0,n):
        str1 = randomStritng()
        str2 = randomStritng()
        str3 = randomStritng()
        str4 = randomStritng()
        serialNumber = str1+'-'+str2+'-'+str3+'-'+str4
        if(serialNumber not in(serialNumberList)):
            serialNumberList.append(serialNumber)
            
    return serialNumberList

#Saat fungsi dijalankan
result = generate(3)
for i in result:
    print(i)
