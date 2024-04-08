#include<iostream>
using namespace std;
class shape{
    public:
    int redius = 5;
    int hight = 5;
};
class circle:public shape{
       public:
       int c(){
       cout<<"\n"<<2*3.14*redius*redius;
       }
};
class sphere:public shape{
    public:
    int s(){
     cout<<"\n"<<4*3.14*redius*redius;
    }
};
class cylinder:public shape{ 
    public:
    virtual int b(){
        cout<<"\n"<<2*3.14*redius+2*3.14*redius*hight;
    }
};
int main(){
  circle m1;
  sphere m2;
  cylinder m3;
  m1.c(); 
  m2.s(); 
  m3.b();
}
