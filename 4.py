#fungsi yang dibuat
def hitungVoucher(voucher,totalBelanja):
    if(voucher == "DumbWaysAsik"):
        if(totalBelanja<20000):
            print("Minimal uang tidak cukup untuk voucher DumbWaysAsik")
            return 0
        else:
            diskon = totalBelanja*0.4
            if diskon > 20000:
                diskon = 20000
            
    elif (voucher == "DumbWaysMantap"):
        if(totalBelanja<50000):
            print("\nMinimal uang tidak cukup untuk voucher DumbWaysMantap")
            return 0
        else:
            diskon = totalBelanja*0.3
            if diskon > 40000:
                diskon = 40000
    else:
        print("\nJenis voucher tidak ada")
        return 0

    print("\nVoucher :",voucher)
    print("Total Belanja :",totalBelanja)
    print("Uang Yang harus dibayar :",totalBelanja - diskon)
    print("Diskon :",diskon)
    print("Kembalian :",totalBelanja - (totalBelanja-diskon))

#Saat fungsi dijalankan   
hitungVoucher("DumbWaysAsik",30000)
hitungVoucher("DumbWaysMantap",70000)
