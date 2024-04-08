#include<iostream>
using namespace std;
class repalce{
    private:
    char str[50];
    public:
    int string(char ch1[20],char ch2[10] = "main"){
        if(ch1 == ch2){
            return 0;
        }else{
            ch2 = ch1;
            cout<<"Repalce strig is a : "<<ch2;
            return 1;
        }
    }
};
int main(){
    repalce s;
    cout<<"\nnumber of replecement is a : "<<s.string("main");
    
}