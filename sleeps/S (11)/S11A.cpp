#include<iostream>
using namespace std;
class sum{
    private:
    int a[10];
    int s;
    int n;
    public:
    sum(){
        a[10];
        cout<<"Enter the how many Element: ";
        cin>>n;
        for (int i = 0; i < n; i++)
        {
            cout<<"Enter the Element : ";
            cin>>a[i];
        }
        for (int i = 0; i < n; i++)
        {
            s = s + a[i];
        }
        cout<<"Sum of array elemet is a : "<<s;
    }
};
int main(){
    sum *ob = new sum;
}