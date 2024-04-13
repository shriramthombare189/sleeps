#include<iostream>
using namespace std;
class binary{
    private:
    int a;
    int b;
    public: 
    binary(int x, int y){
        a=x;
        b=y;       
    }
    binary(){
        a=0;
        b=0;       
    }
    binary operator +(binary d){
        binary o;
        o.a = a + d.a; 
        o.b = b + d.b;
        cout<<"Addtion is a : "<<o.a<<","<<o.b<<"\n";
       return o;
    }
    binary operator *(binary d){
        binary o;
        o.a = a * d.a; 
        o.b = b * d.b;
        cout<<"Multification is a : "<<o.a<<","<<o.b;
        return o;
    }
     int operator -(){
        a--;
        b--;
    cout<<"\n-p1 unary is a : "<<a<<","<<b;
    }
};
int main(){
    binary a1(8, 9);
    binary a2(10, 2);
    binary a3;
    a3=a1+a2;
    a3=a1*a2;
    -a3;
}