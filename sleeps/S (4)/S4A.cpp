#include<iostream>
using namespace std;
class salary{
    int h;
    char name[10];
    public:
int read(){
    cout<<"Enter the name of employee : ";
    cin>>name;
    cout<<"Enter the hours : ";
    cin>>h;
}
int calculut(){
    int r = 100;
    return(h*r);
}
void display(){
    cout<<"total salary is a : "<<calculut();
}
};
int main(){
    salary p;
    p.read();
    p.calculut();
    p.display();
}