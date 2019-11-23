#fungsi yang dibuat
def hitungArray(array):
    print("array input = %s \n" % (str(array)))
    
    total = 0
    arraySementara = []
    arrayTotal = []
    
    for i in range(len(array)):
        for j in range(len(array)):
            if(j != i):
                total+=array[j]
                arraySementara.append(array[j])
        print("tanpa %d => %d+%d+%d+%d = %d"%(array[i],arraySementara[0],arraySementara[1],arraySementara[2],arraySementara[3],total))
        arrayTotal.append(total)
        total = 0
        
    print("\nMaka angka terkecil adalah %d dan terbesar adalah %d"%(min(arrayTotal),max(arrayTotal)))

#Saat fungsi dijalankan
hitungArray([2,3,4,5,6])
