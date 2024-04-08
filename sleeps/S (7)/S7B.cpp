#include<iostream>
using namespace std;
class vector{
    int* v = new int[10];
    int n;
    public:
    int input(){
        cout<<"Enter the how many vectors : ";
        cin>>n;
        for (int i = 0; i < n; i++)
        {
            cout<<"\nEnter the vector : ";
            cin>>v[i];
        }
    } 
    int display(){
        cout<<"(";
        for (int i = 0; i < n; i++)
        {
            cout<<v[i]<<" ";
        }
        cout<<")";
        
    }
};
int main(){
    vector m1;
    m1.input();
    m1.display();
}