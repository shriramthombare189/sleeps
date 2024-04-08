#include<iostream>
#include<fstream>
using namespace std;
int main(){
    int n;

    ofstream even("even.txt");
    ofstream odd("odd.txt");
      
    cout<<"Enter the how many number : ";
    cin>>n;
    int a[20];
    for (int i = 0; i < n; i++)
    {
        cout<<"Enter the number : ";
        cin>>a[i];
        if(a[i]%2!=0){
            even<<a[i];
        }else{
            odd<<a[i];
        }
    }
}
