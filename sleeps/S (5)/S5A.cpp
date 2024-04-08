#include<iostream>
using namespace std;
class point{

private:
int x,y;
public:
int setpoint(int a,int b){
 x=a;
 y=b;
}

int showpoint(){

cout<<"("<<x<<","<<y<<")";

}
};
int main(){
point p;
p.setpoint(4,5);
p.showpoint();
return 0;
}