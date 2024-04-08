#include<iostream>
#include<fstream>
using namespace std;

class move1{
    private:
  char mname[10];
  int ry;
  char dname[10];
  public:
  int input(){
    cout<<"Enter move name : ";
    cin>>mname;
    
    cout<<"Enter move yare name : ";
    cin>>ry;
    
    cout<<"Enter move Director name : ";
    cin>>dname;

  } 
  int write(){
   
    ofstream read("move.txt");
    read<<mname;
    read<<ry;
    read<<dname;
    read.close();
  }     

  int display(){
    cout<<"\nMove name is a : "<<mname;
    cout<<"\nreplace yare is a : "<<ry;
    cout<<"\nDirector name is a : "<<dname;
  }
};

int main(){
    move1 ob1;
    ob1.input();
    ob1.write();
    ob1.display();
    return 0;
}