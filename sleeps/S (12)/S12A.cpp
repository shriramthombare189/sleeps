#include<iostream>
using namespace std;
class Date {
    private:
    int date;
    string  manth[12]={"invalid manth","jan","feb","mar","April","may","jun","jul","agust","sup","acto" };
    int year;
    public:
    Date(int d,int m,int y){
        date = d;
        year = y;
        cout<<"Input Date : "<<date<<"-"<<m<<"-"<<year<<"\n";
        cout<<"Output Date : "<<date<<"-"<<manth[m]<<"-"<<year;
     }
};
int main(){
    Date s(4,1,2021);
}