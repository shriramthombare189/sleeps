#include<iostream>
using namespace std;
inline void max(int a,int b){
    (a>b?cout<<"Greter value is a "<<a<<endl<<"leser value is a : "<<b<<endl:cout<<"Leser value is a "<<a<<endl<<"Greter value is a : "<<b<<endl);
}
int main(){
 int a,b;
 cout<<"Enter the frist value : ";cin>>a;
 cout<<"Enter the secound value : ";cin>>b;
 max(a,b);
}