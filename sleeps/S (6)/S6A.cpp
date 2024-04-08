#include<iostream>
using namespace std;
class squear{
    private:
    int i;
    public:
    int input(int n){
        i = n*n;
        return i;
    }      
};
class rectangle{
    public:
    int j;
    int input(int l,int w){
        j = l*w;
        return j;
    }
    friend int compare();
};
int compare(int x,int y){
    int d = x - y;
    cout<<"sheaps and rectangle area diffrance is a : "<<d;
}
int main(){
    squear a;
    rectangle b;
    int x = a.input(20);
    int y = b.input(20,15);
    compare(x,y);
}