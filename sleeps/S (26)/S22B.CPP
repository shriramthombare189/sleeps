#include<iostream>
using namespace std;
int display(char s[10]){
cout<<"String is a : "<<s;
}
int display(char s[10],int n){
cout<<"\nFirst character is a : "<<s[n];
}
int display(char s[10],int n,int m){
int i;
cout<<"\n"<<n<<"to"<<m<<" string is a : ";
for(i=n;i<=m;i++){
cout<<s[i];
}
}
int main(){
char s[10];
int n;
int m;
cout<<"Enter the string : ";
cin>>s;
display(s);
display(s,3);
display(s,2,4);
return 0;
}