#include<iostream>
using namespace std;
class E_bill{
    private:
    char Cname[10];
    int MID;
    int totalU;
    int totalC;
    public:
    void insert(){
        cout<<"Enter the customer name : ";
        cin>>Cname;
    
        cout<<"Enter the meter id  : ";
        cin>>MID;
    
        cout<<"Enter the total number of unit : ";
        cin>>totalU;
    
    }
    void dispaly(){
     cout<<"customer name is a : "<<Cname<<"\n";

        cout<<"meter id is a : "<<MID<<"\n";
    
        cout<<"Total Number of unit is a : "<<totalU<<"\n";

        if(100 >= totalU && totalC < 200){
            totalC =  totalU+150;
        }else if(200 <= totalU && 300 > totalU){
            totalC = (totalU*2)+150;
        }else if(300<= totalU){
        totalC = (totalU*5)+150;
     }
     if(totalC > 250){  
         totalC = totalC * 0.15+totalC;
     }
    cout<<"Total charges is a  : "<<totalC;
}
};
int main(){
    E_bill ob1;
    ob1.insert();
    ob1.dispaly();
}