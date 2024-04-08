#include<iostream>
using namespace std;
class wheit{
    int kg,gram;
    public:
    void read(){
        cout<<"Enter the kilogram : "<<endl;
        cin>>kg;
        cout<<"Enter the gram : "<<endl;
        cin>>gram;
    }
    void display(){
        cout<<"kilogram is a : "<<kg<<endl;
        cout<<"gram is a : "<<gram<<endl;
    }
};