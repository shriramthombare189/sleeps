#include<iostream>
using namespace std;
class product{
private:
int pid;
char pname[10];
int pq;
int price;
public:
static int input(){
product p;
cout<<"Enter the product id : ";
cin>>p.pid;
cout<<"Enter the product name : ";
cin>>p.pname;
cout<<"Enter the product quntity : ";
cin>>p.pq;
cout<<"Enter the product price : ";
cin>>p.price;
}
int display(){
    product p;;
cout<<"product ID is a : "<<p.pid<<"\n";
cout<<"product Name is a : "<<p.pname<<"\n";
cout<<"product quntity is a : "<<p.pq<<"\n";
cout<<"product price is a : "<<p.price<<"\n";
}
};
int main(){
product ob[20];
int n;
cout<<"Enter the how many  products : ";
cin>>n;
for(int i=0;i<n;i++){
ob[i].input();
}
for(int i=0;i<n;i++){
ob[i].display();
}
}
