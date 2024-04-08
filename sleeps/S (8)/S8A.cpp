#include<iostream>
using namespace std;
static int cnt;
class number{
    public:
    int display(){
        cnt = cnt + 1;
        return cnt;
    }
};
int main(){
    number n;
    cout<<n.display();
    cout<<"\n"<<n.display();
    cout<<"\n"<<n.display();
}
