#include<iostream>
using namespace std;
class A{
    int *a = new int[10];
    int n;
    public:
    void insert(){
        cout<<"Enter the how many element in array : ";cin>>n;
        for (int i = 0; i < n; i++)
        {
             cout<<"Enter the data : ";
             cin>>a[i];
        }
    }
    void display(){
        cout<<"Total number of Array data is a : "<<"\n";
        for (int i = 0; i < n; i++)
        {
            cout<<i<<"  Data is a "<<a[i]<<"\n";
        }
    }
};
int main(){
    A ob1;
    ob1.insert();
    ob1.display();

}