#include<iostream>
#include<cmath>
using namespace std;
float valuem(int r, int h){
    return(3.14159*r*r*h);
}
float valuem(int r, int h,float PI){
    return((PI*r*r*h)/3);
}
float valuem(int r,float PI = 3.14159){
    return((4/3)*PI*(r*r*r));
}
int main(){
int redius,hight;
    cout<<"Enter the redius : ";
    cin>>redius;
    cout<<"Enter the hight : ";
    cin>>hight;
    cout<<"\nvalue of cylinder is a = "<<valuem(redius,hight);
    cout<<"\nvalue of cone  is a = "<<valuem(redius,hight,3.14159);
    cout<<"\nvalue of sphere is a  = "<<valuem(redius);
}
