#include<iostream>
using namespace std;
class student{
    private:
    int roll;
    char name[15];
    public:
    int info(){
        cout<<"Enter the  roll : ";
        cin>>roll;
        cout<<"Enter the  name : ";
        cin>>name;
    }
    int dis(){
        cout<<"Roll Number is a : "<<roll<<"\n";
        cout<<"Student Name is a : "<<name<<"\n";
    }
};
class theory:private student{
    private:
    int m1,m2,m3,m4;
    public:
    int t=0;
    int info(){
        cout<<"Enter the M1 Marks ";
        cin>>m1;
        cout<<"Enter the M2 Marks ";
        cin>>m2;
        cout<<"Enter the M3 Marks ";
        cin>>m3;
        cout<<"Enter the M4 Marks ";
        cin>>m4;
        t = m1+m2+m3+m4;    
    }
};
class practical:private student{
    private:
    int p1,p2;
    public:
    int t=0;
    int info(){
        cout<<"Enter the p1 Marks ";
        cin>>p1;
        cout<<"Enter the p2 Marks ";
        cin>>p2;
        t = p1+p2; 
    }
};
int main(){
    int total;
    int per;
    char gre;
    student s;
    theory t;
    practical p;
    s.info();   
    t.info();   
    p.info(); 
    total = p.t+t.t;
    per = total*100/600;
    if(per < 30){
        gre = 'c';
    }else if(per > 30 && 60 > per){
        gre = 'b';
    }else{
        gre = 'A';
    }
    cout<<"\ntotal Marks is a "<<total;
    cout<<"\nPercenteg is a "<<per<<"%";
    cout<<"\nGread is a "<<gre;
}