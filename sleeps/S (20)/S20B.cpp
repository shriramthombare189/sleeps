#include<iostream>
// #include<conio.h>
using namespace std;
class inmobile
{
private:
char model[20];
int Mprice;
char color[20];
int quantity;
public:
void input(){
cout<<"Enter the model of mobile : ";
cin>>model;
cout<<"Enter the price of mobile : ";
cin>>Mprice;
cout<<"Enter the color of mobile : ";
cin>>color;
cout<<"Enter the quntity of mobile : ";
cin>>quantity;
}
void seal()
{
int n;
cout<<"Enter the number of seal mobile details : ";
cin>>n;
for(int i=0;i<n;i++)
{
cout<<"Enter the"<< i <<"mobile details : \n";
input();
}
}
void purchase()
{
int n;
cout<<"Add purchase mobile details : ";
cout<<"\nEnter the number of Purcheas mobiles ";
cin>>n;
for(int i=0;i<n;i++){
cout<<"Enter the"<< i <<"mobile details : \n";
input();
}
}
};
int main()
{
inmobile ob;
for(;;)
{
cout<<"Enter the following opreations : \n";
cout<<"1]purcheas \n2] seal\n";
cout<<"Enter the Number : ";
int n;
cin>>n;
switch(n){
case 1: ob.purchase();
          break;
case 2:ob.seal();
       break;
case 3:exit(0);
       
default: cout<<"Enter valid number : ";
}
}
}