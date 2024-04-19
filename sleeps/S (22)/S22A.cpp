#include<iostream>
using namespace std;
template <typename T>
T squer(T r){
    return r*r;
}
template <typename T>
T cube(T r){
    return r*r*r;
}
int main(){
cout<<"Squer is a : "<<squer<int>(2);
cout<<"\nCube is a : "<<cube<float>(2);
}