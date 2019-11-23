#fungsi yang dibuat
def chekPrima(num):
    if num > 1:
        for i in range(2,num):
            if (num % i) == 0:
                return False
        else:
            return True
    else:
        return False
      
def buyEgg(tgl,uang):
    print("Input")
    print("Tanggal : ",tgl)
    print("Tanggal : ",uang)
    
    lusin = int((uang/2500) / 12)
    result = uang/2500
    bonus = 0
    
    if( tgl%2 != 0):
        if(chekPrima(tgl)):
            bonus = lusin*2
        else:
            bonus = lusin*3
    
    if(tgl%5 == 0):
        if(bonus % 2 == 0):
            bonus*=10
        else:
            bonus*=5
    print("\nOutput")
    print(int(result+bonus))

#Saat fungsi dijalankan
buyEgg(13,60000)
    
