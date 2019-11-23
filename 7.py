#fungsi yang dibuat
#sorting menggunakan algoritma quicksort
def partition(option,arr,low,high):
        if(option == 'aray'):
            i = ( low-1 )		 
            pivot = len(arr[high])	 
            for j in range(low , high): 
                    if len(arr[j]) <= pivot: 
                        i = i+1
                        arr[i],arr[j] = arr[j],arr[i] 
            arr[i+1],arr[high] = arr[high],arr[i+1] 
            return ( i+1 )
        
        elif(option == 'data'):
            i = ( low-1 )		 
            pivot = ord(arr[high])	 
            for j in range(low , high): 
                    if ord(arr[j]) <= pivot: 
                        i = i+1
                        arr[i],arr[j] = arr[j],arr[i] 
            arr[i+1],arr[high] = arr[high],arr[i+1] 
            return ( i+1 )

def quickSort(option,arr,low,high): 
	if low < high: 
	    pi = partition(option,arr,low,high) 

	    quickSort(option,arr, low, pi-1) 
	    quickSort(option,arr, pi+1, high) 
        

#Saat fungsi dijalankan
result = []
arr = [['a','c','b','e','d'],['g','e','f'],['a'],['j','x','q']]

print("Input")
print(arr)

quickSort('aray',arr,0,len(arr)-1)
for i in arr:
    quickSort('data',i,0,len(i)-1)
    result.append(i)
    
print("\nOutput")
print (result)

