#fungsi yang dibuat
def drawLine(word):
    print("Input")
    print("Kata =",word)
    x = len(word)
    print("\nOutput")
    for i in word:
        print(i)
        for j in range (-1,(len(word)-x)):
            print(" ", end=" ")
        x-=1

#Saat fungsi dijalankan
drawLine('DUMBWAYS')
