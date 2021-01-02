 #include<iostream>
#include<conio.h>
using namespace std;
main()
{
    
    int beli, bayar, kembali, sisa, jumlah;
    cout<<"uang di bayar : ";cin>>bayar;
    cout<<"total bayar : ";cin>>beli;

    kembali = bayar-beli;

    sisa = kembali;
	cout<<"Kembalian : "<<kembali<<endl;
    cout<<"Pecahan Uang Kembali : \n";

    if(sisa >= 50000)
    {
        jumlah = sisa / 50000;
        cout<<" "<<jumlah;
        cout<<"Lembar 50.000\n";
        sisa = sisa - (jumlah * 50000);
    }
    if(sisa >= 20000)
    {
        jumlah = sisa / 20000;
        cout<<" "<<jumlah;
        cout<<"Lembar 20.000\n";
        sisa = sisa - (jumlah * 20000);
    }
    if(sisa >= 10000)
    {
        jumlah = sisa / 10000;
        cout<<(jumlah);
        cout<<("Lembar 10.000\n");
        sisa = sisa - (jumlah * 10000);
    }

    if(sisa >= 5000)
    {
    
	  jumlah = sisa / 5000;
        cout<<" "<<jumlah;
        cout<<"Lembar 5.000\n";
        sisa = sisa - (jumlah * 5000);
    }if(sisa >= 2000)
    {
        jumlah = sisa / 2000;
        cout<<" "<<jumlah;
        cout<<"Lembar 2.000\n";
        sisa = sisa - (jumlah * 2000);
    }
    if(sisa >= 1000)
    {
        jumlah = sisa / 1000;
        cout<<" "<<jumlah;
        cout<<"Lembar 1.000\n";
        sisa = sisa - (jumlah * 1000);
    }
    if(sisa >= 500)
    {
        jumlah = sisa / 500;
        cout<<" "<<jumlah;
        cout<<"Lembar 500\n";
        sisa = sisa - (jumlah * 500);
    }
    if(sisa >= 200)
    {
        jumlah = sisa / 200;
        cout<<" "<<jumlah;
        cout<<"Lembar 200\n";
        sisa = sisa - (jumlah * 200);
    }
    if(sisa >= 100)
    {
        jumlah = sisa / 100;
        cout<<" "<<jumlah;
        cout<<"Lembar 100\n";
        sisa = sisa - (jumlah * 100);
    }
    getch ();
}
