#include<iostream>
using namespace std;
class person{
    char name[25];
    char addr[20];
    int salary;
    float tax;
    public:
    int read(){
        cout<<"Enter the name of person : ";
        cin>>name;
        cout<<"Enter the Address of person : ";
        cin>>addr;
        cout<<"Enter the salary of person : ";
        cin>>salary;
    }
    int calculeat(){
        if(salary<=20000){
            return(salary);
        }else if(salary>20000||salary<=40000){
            return(salary*0.05);
        }else if(salary>40000){
            return(salary*0.10);
        }
    }
    float display(){
        salary=salary-calculeat();
        cout<<"this person total salary including tax cut salary is a : "<<salary; 
    }
};
int main(){
    person p;
    p.read();
    p.calculeat();
    p.display();

}