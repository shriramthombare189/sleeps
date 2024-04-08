#include<iostream>
using namespace std;
class Account{
    int* ano = new int;
    char atype[20];
    int* balance = new int;
    public:
    int input(){
        cout<<"\n\nEnter the account number : ";
        cin>>*ano;
        cout<<"Enter the account type : ";
        cin>>atype;
        cout<<"Enter the account balance : ";
        cin>>*balance;
    }
    int display(){
        cout<<"\n\naccount number is a : "<<*ano;
        cout<<"\naccount type is a : "<<atype;
        cout<<"\naccount balance is a : "<<*balance;
    }
};
int main(){
    Account a[10];
    int n;
    cout<<"Enter the how many details : ";
    cin>>n;
    for (int i = 0; i < n; i++)
    {
        a[i].input();
    }
    cout<<"\n\ninput detalce is a : \n\n";
    for (int i = 0; i < n; i++)
    {
        a[i].display();
    }
    
}