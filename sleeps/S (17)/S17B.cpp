#include<iostream>
using namespace std;
class student{
    public:
    int Sid;
    char Sname[20];
    char clas[10];
};
class compi{
    public:
    int Cid;
    char Cname[20];
};
class Scompi : public compi ,public student{
    public:
    int Rank;

    void input(){
        cout<<"Enter the student Id  : ";
        cin>>Sid;
        cout<<"Enter the student name : ";
        cin>>Sname;
        cout<<"Enter the class name : ";
        cin>>clas;
        cout<<"Enter the Cid : ";
        cin>>Cid;
        cout<<"Enter the Cname : ";
        cin>>Cname;
        cout<<"Enter the rank in compition : ";
        cin>>Rank;
    }
    void display(){
        cout<<"\nStudent ID is a : "<<Sid;
        cout<<"\nStudent name is a : "<<Sname;
        cout<<"\nStudent class is a : "<<clas;
        cout<<"\nStudent Cid is a : "<<Cid;
        cout<<"\nStudent Cname is a : "<<Cname;
        cout<<"\nStudent Rank is a : "<<Rank;
    }
};
int main(){
    int n;
    Scompi ob[10];
    cout<<"Enter the how many Student Data : ";
    cin>>n;
    for (int  i = 0; i < n; i++)
    {
        ob[i].input();
        cout<<"\nEnter the next student records........\n ";
    }
    for (int  i = 0; i < n; i++)
    {
        ob[i].display();
        cout<<"\n\nNext Student records............\n\n";
    }
}