#fungsi yang dibuat
def hitungKembalian(harga,bayar):
    print("Input")
    print("Harga =",harga)
    print("bayar =",bayar)
    stokUang = [50000,20000,10000,5000,2000,1000,500]
    result = []
    kembalian = bayar - harga
    if (bayar < harga):
        return 0
    else:
        if(kembalian == 0):
            return 0
        else:
            for i in stokUang:
                while (kembalian >= i):
                    kembalian = kembalian - i
                    result.append(i)
                    
    currVal = 0
    print("\nOutput")
    while(len(result)>=1):
        if(result[0] != currVal):
            print(result.count(result[0]),"x",result[0])
        currVal = result[0]
        result.remove(currVal)
    
#Saat fungsi dijalankan
hitungKembalian(122500,200000)
